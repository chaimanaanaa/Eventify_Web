<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250326012614 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE comment (id_cmn INT AUTO_INCREMENT NOT NULL, id_forum INT DEFAULT NULL, id_user INT DEFAULT NULL, date DATETIME NOT NULL, sujet VARCHAR(255) NOT NULL, nbComment INT NOT NULL, INDEX IDX_9474526C6BAEFFFD (id_forum), INDEX IDX_9474526C6B3CA4B (id_user), PRIMARY KEY(id_cmn)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE event (id_event INT AUTO_INCREMENT NOT NULL, date DATE NOT NULL, lieu VARCHAR(50) NOT NULL, description VARCHAR(255) NOT NULL, type VARCHAR(20) NOT NULL, nbInvite INT NOT NULL, categorie VARCHAR(20) NOT NULL, prixEstime DOUBLE PRECISION NOT NULL, imageven VARCHAR(255) NOT NULL, PRIMARY KEY(id_event)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE forum (id_forum INT AUTO_INCREMENT NOT NULL, id_user INT DEFAULT NULL, date DATETIME NOT NULL, img VARCHAR(255) NOT NULL, description VARCHAR(255) NOT NULL, categorie VARCHAR(255) NOT NULL, INDEX IDX_852BBECD6B3CA4B (id_user), PRIMARY KEY(id_forum)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE logistique (id_log INT AUTO_INCREMENT NOT NULL, type VARCHAR(50) NOT NULL, nom VARCHAR(50) NOT NULL, description VARCHAR(255) NOT NULL, quantite INT DEFAULT NULL, capacite INT DEFAULT NULL, prix DOUBLE PRECISION NOT NULL, lieux VARCHAR(255) DEFAULT NULL, image VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id_log)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE offre (id_offre INT AUTO_INCREMENT NOT NULL, id_user INT DEFAULT NULL, id_organisateur INT DEFAULT NULL, description VARCHAR(600) NOT NULL, objet VARCHAR(50) NOT NULL, statu VARCHAR(50) NOT NULL, date_demande DATETIME NOT NULL, type_evenement VARCHAR(255) DEFAULT NULL, dateDebutEvenement VARCHAR(255) DEFAULT NULL, dateFinEvenement VARCHAR(255) DEFAULT NULL, lieuEvenement VARCHAR(255) DEFAULT NULL, budget DOUBLE PRECISION DEFAULT NULL, nombreInvite INT DEFAULT NULL, INDEX IDX_AF86866F6B3CA4B (id_user), INDEX IDX_AF86866F68161836 (id_organisateur), PRIMARY KEY(id_offre)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE organisateur (id_organisateur INT AUTO_INCREMENT NOT NULL, id_user INT DEFAULT NULL, imageOrg VARCHAR(255) NOT NULL, nom_org VARCHAR(30) NOT NULL, prenom_org VARCHAR(30) NOT NULL, email_org VARCHAR(50) NOT NULL, num_tel VARCHAR(20) NOT NULL, specialite VARCHAR(50) NOT NULL, date_embauche VARCHAR(255) NOT NULL, nbexp INT NOT NULL, city VARCHAR(255) DEFAULT NULL, employment VARCHAR(255) DEFAULT NULL, skills VARCHAR(255) DEFAULT NULL, longuage VARCHAR(255) DEFAULT NULL, date_naissance VARCHAR(255) DEFAULT NULL, salaire DOUBLE PRECISION NOT NULL, statut VARCHAR(255) NOT NULL, INDEX IDX_4BD76D446B3CA4B (id_user), PRIMARY KEY(id_organisateur)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE panier (id_panier INT AUTO_INCREMENT NOT NULL, id_log INT DEFAULT NULL, id_user INT DEFAULT NULL, prix DOUBLE PRECISION NOT NULL, name VARCHAR(250) NOT NULL, img VARCHAR(250) NOT NULL, INDEX IDX_24CC0DF2119B809F (id_log), INDEX IDX_24CC0DF26B3CA4B (id_user), PRIMARY KEY(id_panier)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE reaction (id_reac INT AUTO_INCREMENT NOT NULL, id_forum INT DEFAULT NULL, id_user INT DEFAULT NULL, likee INT DEFAULT NULL, dislike INT DEFAULT NULL, nblike INT DEFAULT NULL, nbdislike INT DEFAULT NULL, INDEX IDX_A4D707F76BAEFFFD (id_forum), INDEX IDX_A4D707F76B3CA4B (id_user), PRIMARY KEY(id_reac)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE reclamation (id_rec INT AUTO_INCREMENT NOT NULL, id_user INT DEFAULT NULL, date DATETIME NOT NULL, titre VARCHAR(50) NOT NULL, sujet VARCHAR(255) NOT NULL, img_rec VARCHAR(255) NOT NULL, statu VARCHAR(50) NOT NULL, INDEX IDX_CE6064046B3CA4B (id_user), PRIMARY KEY(id_rec)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE reponse (id_rep INT AUTO_INCREMENT NOT NULL, id_user INT DEFAULT NULL, id_rec INT DEFAULT NULL, date DATETIME NOT NULL, text VARCHAR(255) NOT NULL, INDEX IDX_5FB6DEC76B3CA4B (id_user), INDEX IDX_5FB6DEC7FAA12276 (id_rec), PRIMARY KEY(id_rep)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE reservation (id_res INT AUTO_INCREMENT NOT NULL, id_event INT DEFAULT NULL, id_user INT DEFAULT NULL, date DATETIME NOT NULL, INDEX IDX_42C84955D52B4B97 (id_event), INDEX IDX_42C849556B3CA4B (id_user), PRIMARY KEY(id_res)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user (id_user INT AUTO_INCREMENT NOT NULL, firstName VARCHAR(30) NOT NULL, lastName VARCHAR(30) NOT NULL, cin VARCHAR(10) NOT NULL, email VARCHAR(50) NOT NULL, numTlf VARCHAR(20) NOT NULL, genre VARCHAR(10) NOT NULL, mdp VARCHAR(80) NOT NULL, dateNaissance DATE NOT NULL, role VARCHAR(30) NOT NULL, img VARCHAR(255) DEFAULT NULL, blocked INT NOT NULL, PRIMARY KEY(id_user)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE messenger_messages (id BIGINT AUTO_INCREMENT NOT NULL, body LONGTEXT NOT NULL, headers LONGTEXT NOT NULL, queue_name VARCHAR(190) NOT NULL, created_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', available_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', delivered_at DATETIME DEFAULT NULL COMMENT \'(DC2Type:datetime_immutable)\', INDEX IDX_75EA56E0FB7336F0 (queue_name), INDEX IDX_75EA56E0E3BD61CE (available_at), INDEX IDX_75EA56E016BA31DB (delivered_at), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE comment ADD CONSTRAINT FK_9474526C6BAEFFFD FOREIGN KEY (id_forum) REFERENCES forum (id_forum) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE comment ADD CONSTRAINT FK_9474526C6B3CA4B FOREIGN KEY (id_user) REFERENCES user (id_user) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE forum ADD CONSTRAINT FK_852BBECD6B3CA4B FOREIGN KEY (id_user) REFERENCES user (id_user) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE offre ADD CONSTRAINT FK_AF86866F6B3CA4B FOREIGN KEY (id_user) REFERENCES user (id_user) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE offre ADD CONSTRAINT FK_AF86866F68161836 FOREIGN KEY (id_organisateur) REFERENCES organisateur (id_organisateur)');
        $this->addSql('ALTER TABLE organisateur ADD CONSTRAINT FK_4BD76D446B3CA4B FOREIGN KEY (id_user) REFERENCES user (id_user) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE panier ADD CONSTRAINT FK_24CC0DF2119B809F FOREIGN KEY (id_log) REFERENCES logistique (id_log) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE panier ADD CONSTRAINT FK_24CC0DF26B3CA4B FOREIGN KEY (id_user) REFERENCES user (id_user) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE reaction ADD CONSTRAINT FK_A4D707F76BAEFFFD FOREIGN KEY (id_forum) REFERENCES forum (id_forum) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE reaction ADD CONSTRAINT FK_A4D707F76B3CA4B FOREIGN KEY (id_user) REFERENCES user (id_user) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE reclamation ADD CONSTRAINT FK_CE6064046B3CA4B FOREIGN KEY (id_user) REFERENCES user (id_user) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE reponse ADD CONSTRAINT FK_5FB6DEC76B3CA4B FOREIGN KEY (id_user) REFERENCES user (id_user) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE reponse ADD CONSTRAINT FK_5FB6DEC7FAA12276 FOREIGN KEY (id_rec) REFERENCES reclamation (id_rec) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE reservation ADD CONSTRAINT FK_42C84955D52B4B97 FOREIGN KEY (id_event) REFERENCES event (id_event) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE reservation ADD CONSTRAINT FK_42C849556B3CA4B FOREIGN KEY (id_user) REFERENCES user (id_user) ON DELETE CASCADE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE comment DROP FOREIGN KEY FK_9474526C6BAEFFFD');
        $this->addSql('ALTER TABLE comment DROP FOREIGN KEY FK_9474526C6B3CA4B');
        $this->addSql('ALTER TABLE forum DROP FOREIGN KEY FK_852BBECD6B3CA4B');
        $this->addSql('ALTER TABLE offre DROP FOREIGN KEY FK_AF86866F6B3CA4B');
        $this->addSql('ALTER TABLE offre DROP FOREIGN KEY FK_AF86866F68161836');
        $this->addSql('ALTER TABLE organisateur DROP FOREIGN KEY FK_4BD76D446B3CA4B');
        $this->addSql('ALTER TABLE panier DROP FOREIGN KEY FK_24CC0DF2119B809F');
        $this->addSql('ALTER TABLE panier DROP FOREIGN KEY FK_24CC0DF26B3CA4B');
        $this->addSql('ALTER TABLE reaction DROP FOREIGN KEY FK_A4D707F76BAEFFFD');
        $this->addSql('ALTER TABLE reaction DROP FOREIGN KEY FK_A4D707F76B3CA4B');
        $this->addSql('ALTER TABLE reclamation DROP FOREIGN KEY FK_CE6064046B3CA4B');
        $this->addSql('ALTER TABLE reponse DROP FOREIGN KEY FK_5FB6DEC76B3CA4B');
        $this->addSql('ALTER TABLE reponse DROP FOREIGN KEY FK_5FB6DEC7FAA12276');
        $this->addSql('ALTER TABLE reservation DROP FOREIGN KEY FK_42C84955D52B4B97');
        $this->addSql('ALTER TABLE reservation DROP FOREIGN KEY FK_42C849556B3CA4B');
        $this->addSql('DROP TABLE comment');
        $this->addSql('DROP TABLE event');
        $this->addSql('DROP TABLE forum');
        $this->addSql('DROP TABLE logistique');
        $this->addSql('DROP TABLE offre');
        $this->addSql('DROP TABLE organisateur');
        $this->addSql('DROP TABLE panier');
        $this->addSql('DROP TABLE reaction');
        $this->addSql('DROP TABLE reclamation');
        $this->addSql('DROP TABLE reponse');
        $this->addSql('DROP TABLE reservation');
        $this->addSql('DROP TABLE user');
        $this->addSql('DROP TABLE messenger_messages');
    }
}
