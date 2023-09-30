<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230822150822 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE carrière (id INT AUTO_INCREMENT NOT NULL, type_candidature VARCHAR(255) NOT NULL, origine_candidature VARCHAR(255) NOT NULL, nom_prenom VARCHAR(255) NOT NULL, adresse_mail VARCHAR(255) NOT NULL, cv VARCHAR(255) NOT NULL, lettre_motivation VARCHAR(255) NOT NULL, reference_offre VARCHAR(255) NOT NULL, commentaire LONGTEXT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE client (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) NOT NULL, logo VARCHAR(255) NOT NULL, secteur VARCHAR(255) NOT NULL, service VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE metier (id INT AUTO_INCREMENT NOT NULL, titre VARCHAR(255) NOT NULL, image VARCHAR(255) NOT NULL, description VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE projet (id INT AUTO_INCREMENT NOT NULL, titre VARCHAR(255) NOT NULL, image VARCHAR(255) NOT NULL, description VARCHAR(255) NOT NULL, date DATE NOT NULL, gallerie VARCHAR(255) NOT NULL, proprietaire VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE projet_metier (projet_id INT NOT NULL, metier_id INT NOT NULL, INDEX IDX_7309BDDAC18272 (projet_id), INDEX IDX_7309BDDAED16FA20 (metier_id), PRIMARY KEY(projet_id, metier_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE projet_metier ADD CONSTRAINT FK_7309BDDAC18272 FOREIGN KEY (projet_id) REFERENCES projet (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE projet_metier ADD CONSTRAINT FK_7309BDDAED16FA20 FOREIGN KEY (metier_id) REFERENCES metier (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE projet_metier DROP FOREIGN KEY FK_7309BDDAC18272');
        $this->addSql('ALTER TABLE projet_metier DROP FOREIGN KEY FK_7309BDDAED16FA20');
        $this->addSql('DROP TABLE carrière');
        $this->addSql('DROP TABLE client');
        $this->addSql('DROP TABLE metier');
        $this->addSql('DROP TABLE projet');
        $this->addSql('DROP TABLE projet_metier');
    }
}
