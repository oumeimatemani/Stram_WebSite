<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230825201120 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE acceuil (id INT AUTO_INCREMENT NOT NULL, numr_contact INT NOT NULL, description_site1 VARCHAR(255) NOT NULL, description_site2 VARCHAR(255) NOT NULL, description_entreprise1 VARCHAR(255) NOT NULL, description_entreprise2 VARCHAR(255) NOT NULL, objectifs VARCHAR(255) NOT NULL, description_experiences VARCHAR(255) NOT NULL, description_projet1 VARCHAR(255) NOT NULL, description_projet2 VARCHAR(255) NOT NULL, drapeaux VARCHAR(255) NOT NULL, description_temoignages VARCHAR(255) NOT NULL, temoignages_clients VARCHAR(255) NOT NULL, titre_nouveautées VARCHAR(255) NOT NULL, description_nouveautées VARCHAR(255) NOT NULL, nouveautées VARCHAR(255) NOT NULL, logo_partenaires VARCHAR(255) NOT NULL, description_stram VARCHAR(255) NOT NULL, adresse_contact VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE acceuil');
    }
}
