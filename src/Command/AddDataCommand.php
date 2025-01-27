<?php

namespace App\Command;

use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;

use App\Entity\Personne;

#[AsCommand(
    name: 'app:add-data',
    description: 'Add data to the database from a SQL file',
)]
class AddDataCommand extends Command
{
    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
        parent::__construct();
    }

    protected function configure(): void
    {
        $this
            ->addArgument('file', InputArgument::OPTIONAL, 'The SQL file to execute', __DIR__ . '/../../sql/init.sql')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $io = new SymfonyStyle($input, $output);
        $file = $input->getArgument('file');
    
        if (!file_exists($file)) {
            $io->error(sprintf('File "%s" does not exist.', $file));
            return Command::FAILURE;
        }
    
        $sql = file_get_contents($file);
    
        try {
            $this->entityManager->getConnection()->executeStatement($sql);
            $io->success('Data has been added to the database.');
        } catch (\Exception $e) {
            $io->error('An error occurred while executing the SQL file: ' . $e->getMessage());
            return Command::FAILURE;
        }
    
        return Command::SUCCESS;
    }
}