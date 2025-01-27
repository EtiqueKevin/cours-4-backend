<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250127153822 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TEMPORARY TABLE __temp__batiment AS SELECT id, adresse, nom FROM batiment');
        $this->addSql('DROP TABLE batiment');
        $this->addSql('CREATE TABLE batiment (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, adresse VARCHAR(255) NOT NULL, nom VARCHAR(255) NOT NULL)');
        $this->addSql('INSERT INTO batiment (id, adresse, nom) SELECT id, adresse, nom FROM __temp__batiment');
        $this->addSql('DROP TABLE __temp__batiment');
        $this->addSql('CREATE TEMPORARY TABLE __temp__personne AS SELECT id, nom, prenom, adresse, age FROM personne');
        $this->addSql('DROP TABLE personne');
        $this->addSql('CREATE TABLE personne (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, batiment_id INTEGER DEFAULT NULL, nom VARCHAR(255) NOT NULL, prenom VARCHAR(255) NOT NULL, adresse VARCHAR(255) NOT NULL, age INTEGER NOT NULL, CONSTRAINT FK_FCEC9EFD6F6891B FOREIGN KEY (batiment_id) REFERENCES batiment (id) NOT DEFERRABLE INITIALLY IMMEDIATE)');
        $this->addSql('INSERT INTO personne (id, nom, prenom, adresse, age) SELECT id, nom, prenom, adresse, age FROM __temp__personne');
        $this->addSql('DROP TABLE __temp__personne');
        $this->addSql('CREATE INDEX IDX_FCEC9EFD6F6891B ON personne (batiment_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE batiment ADD COLUMN personnes CLOB NOT NULL');
        $this->addSql('CREATE TEMPORARY TABLE __temp__personne AS SELECT id, nom, prenom, adresse, age FROM personne');
        $this->addSql('DROP TABLE personne');
        $this->addSql('CREATE TABLE personne (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, nom VARCHAR(255) NOT NULL, prenom VARCHAR(255) NOT NULL, adresse VARCHAR(255) NOT NULL, age INTEGER NOT NULL)');
        $this->addSql('INSERT INTO personne (id, nom, prenom, adresse, age) SELECT id, nom, prenom, adresse, age FROM __temp__personne');
        $this->addSql('DROP TABLE __temp__personne');
    }
}
