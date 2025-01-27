DELETE FROM personne;
DELETE FROM batiment;

-- Insert buildings
INSERT INTO batiment (id, adresse, nom) VALUES (1, '123 Main St', 'Building A');
INSERT INTO batiment (id, adresse, nom) VALUES (2, '456 Elm St', 'Building B');
INSERT INTO batiment (id, adresse, nom) VALUES (3, '789 Oak St', 'Building C');
INSERT INTO batiment (id, adresse, nom) VALUES (4, '101 Pine St', 'Building D');

-- Insert people
INSERT INTO personne (nom, prenom, adresse, age, batiment_id) VALUES ('Doe', 'John', '123 Main St', 30, 1);
INSERT INTO personne (nom, prenom, adresse, age, batiment_id) VALUES ('Smith', 'Jane', '123 Main St', 25, 1);
INSERT INTO personne (nom, prenom, adresse, age, batiment_id) VALUES ('Brown', 'Charlie', '123 Main St', 35, 1);
INSERT INTO personne (nom, prenom, adresse, age, batiment_id) VALUES ('Johnson', 'Emily', '123 Main St', 28, 1);
INSERT INTO personne (nom, prenom, adresse, age, batiment_id) VALUES ('Williams', 'Chris', '123 Main St', 40, 1);

INSERT INTO personne (nom, prenom, adresse, age, batiment_id) VALUES ('Taylor', 'Pat', '456 Elm St', 32, 2);
INSERT INTO personne (nom, prenom, adresse, age, batiment_id) VALUES ('Anderson', 'Alex', '456 Elm St', 27, 2);
INSERT INTO personne (nom, prenom, adresse, age, batiment_id) VALUES ('Thomas', 'Jordan', '456 Elm St', 22, 2);
INSERT INTO personne (nom, prenom, adresse, age, batiment_id) VALUES ('Jackson', 'Morgan', '456 Elm St', 29, 2);
INSERT INTO personne (nom, prenom, adresse, age, batiment_id) VALUES ('White', 'Casey', '456 Elm St', 33, 2);

INSERT INTO personne (nom, prenom, adresse, age, batiment_id) VALUES ('Harris', 'Taylor', '789 Oak St', 31, 3);
INSERT INTO personne (nom, prenom, adresse, age, batiment_id) VALUES ('Martin', 'Jamie', '789 Oak St', 26, 3);
INSERT INTO personne (nom, prenom, adresse, age, batiment_id) VALUES ('Thompson', 'Riley', '789 Oak St', 24, 3);
INSERT INTO personne (nom, prenom, adresse, age, batiment_id) VALUES ('Garcia', 'Jordan', '789 Oak St', 30, 3);
INSERT INTO personne (nom, prenom, adresse, age, batiment_id) VALUES ('Martinez', 'Alex', '789 Oak St', 35, 3);

INSERT INTO personne (nom, prenom, adresse, age, batiment_id) VALUES ('Robinson', 'Taylor', '101 Pine St', 28, 4);
INSERT INTO personne (nom, prenom, adresse, age, batiment_id) VALUES ('Clark', 'Morgan', '101 Pine St', 34, 4);
INSERT INTO personne (nom, prenom, adresse, age, batiment_id) VALUES ('Rodriguez', 'Casey', '101 Pine St', 29, 4);
INSERT INTO personne (nom, prenom, adresse, age, batiment_id) VALUES ('Lewis', 'Jordan', '101 Pine St', 32, 4);
INSERT INTO personne (nom, prenom, adresse, age, batiment_id) VALUES ('Lee', 'Alex', '101 Pine St', 27, 4);