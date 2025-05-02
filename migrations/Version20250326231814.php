<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250326231814 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE comment CHANGE date date DATETIME NOT NULL');
        $this->addSql('ALTER TABLE forum CHANGE date date TIMESTAMP DEFAULT CURRENT_TIMESTAMP');
        $this->addSql('ALTER TABLE reclamation CHANGE date date TIMESTAMP DEFAULT CURRENT_TIMESTAMP');
        $this->addSql('ALTER TABLE reponse CHANGE date date TIMESTAMP DEFAULT CURRENT_TIMESTAMP');
        $this->addSql('ALTER TABLE user CHANGE blocked blocked INT NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE comment CHANGE date date DATETIME DEFAULT CURRENT_TIMESTAMP NOT NULL');
        $this->addSql('ALTER TABLE forum CHANGE date date DATETIME DEFAULT CURRENT_TIMESTAMP NOT NULL');
        $this->addSql('ALTER TABLE reclamation CHANGE date date DATETIME DEFAULT CURRENT_TIMESTAMP NOT NULL');
        $this->addSql('ALTER TABLE reponse CHANGE date date DATETIME DEFAULT CURRENT_TIMESTAMP NOT NULL');
        $this->addSql('ALTER TABLE user CHANGE blocked blocked INT DEFAULT 0 NOT NULL');
    }
}
