<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230928091210 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE acceuil (id INT AUTO_INCREMENT NOT NULL, numr_contact INT NOT NULL, description_site1 VARCHAR(255) NOT NULL, description_site2 VARCHAR(255) NOT NULL, description_entreprise1 VARCHAR(255) NOT NULL, description_entreprise2 VARCHAR(255) NOT NULL, objectifs VARCHAR(255) NOT NULL, description_experiences VARCHAR(255) NOT NULL, description_projet1 VARCHAR(255) NOT NULL, description_projet2 VARCHAR(255) NOT NULL, drapeaux VARCHAR(255) NOT NULL, description_temoignages VARCHAR(255) NOT NULL, temoignages_clients VARCHAR(255) NOT NULL, titre_nouveautées VARCHAR(255) NOT NULL, description_nouveautées VARCHAR(255) NOT NULL, nouveautées VARCHAR(255) NOT NULL, logo_partenaires VARCHAR(255) NOT NULL, description_stram VARCHAR(255) NOT NULL, adresse_contact VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE carrière (id INT AUTO_INCREMENT NOT NULL, type_candidature VARCHAR(255) NOT NULL, origine_candidature VARCHAR(255) NOT NULL, nom_prenom VARCHAR(255) NOT NULL, adresse_mail VARCHAR(255) NOT NULL, cv VARCHAR(255) NOT NULL, lettre_motivation VARCHAR(255) NOT NULL, reference_offre VARCHAR(255) NOT NULL, commentaire LONGTEXT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE client (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) NOT NULL, logo VARCHAR(255) NOT NULL, secteur VARCHAR(255) NOT NULL, service VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE contact (id INT AUTO_INCREMENT NOT NULL, pays_id INT DEFAULT NULL, INDEX IDX_4C62E638A6E44244 (pays_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE gestion_contact (id INT AUTO_INCREMENT NOT NULL, tel_tunisie INT NOT NULL, tel_algerie INT NOT NULL, tel_niger INT NOT NULL, tel_benin INT NOT NULL, tel_senegal INT NOT NULL, fax_tunisie VARCHAR(255) NOT NULL, fax_algerie VARCHAR(255) NOT NULL, fax_senegal VARCHAR(255) NOT NULL, fax_niger VARCHAR(255) NOT NULL, fax_benin VARCHAR(255) NOT NULL, email_tunisie VARCHAR(255) NOT NULL, email_algerie VARCHAR(255) NOT NULL, email_niger VARCHAR(255) NOT NULL, email_senegal VARCHAR(255) NOT NULL, email_benin VARCHAR(255) NOT NULL, adresse_tunisie VARCHAR(255) NOT NULL, adresse_algerie VARCHAR(255) NOT NULL, adresse_niger VARCHAR(255) NOT NULL, adresse_benin VARCHAR(255) NOT NULL, adresse_senegal VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE metier (id INT AUTO_INCREMENT NOT NULL, titre VARCHAR(255) NOT NULL, image VARCHAR(255) NOT NULL, description VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE pays (id INT AUTO_INCREMENT NOT NULL, region_id INT DEFAULT NULL, nom_pays VARCHAR(255) NOT NULL, drapeau VARCHAR(255) NOT NULL, INDEX IDX_349F3CAE98260155 (region_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE projet (id INT AUTO_INCREMENT NOT NULL, titre VARCHAR(255) NOT NULL, image VARCHAR(255) NOT NULL, description VARCHAR(255) NOT NULL, date DATE NOT NULL, gallerie VARCHAR(255) NOT NULL, proprietaire VARCHAR(255) NOT NULL, afficher_projet TINYINT(1) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE projet_metier (projet_id INT NOT NULL, metier_id INT NOT NULL, INDEX IDX_7309BDDAC18272 (projet_id), INDEX IDX_7309BDDAED16FA20 (metier_id), PRIMARY KEY(projet_id, metier_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE region (id INT AUTO_INCREMENT NOT NULL, nom_region VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE messenger_messages (id BIGINT AUTO_INCREMENT NOT NULL, body LONGTEXT NOT NULL, headers LONGTEXT NOT NULL, queue_name VARCHAR(190) NOT NULL, created_at DATETIME NOT NULL, available_at DATETIME NOT NULL, delivered_at DATETIME DEFAULT NULL, INDEX IDX_75EA56E0FB7336F0 (queue_name), INDEX IDX_75EA56E0E3BD61CE (available_at), INDEX IDX_75EA56E016BA31DB (delivered_at), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE contact ADD CONSTRAINT FK_4C62E638A6E44244 FOREIGN KEY (pays_id) REFERENCES pays (id)');
        $this->addSql('ALTER TABLE pays ADD CONSTRAINT FK_349F3CAE98260155 FOREIGN KEY (region_id) REFERENCES region (id)');
        $this->addSql('ALTER TABLE projet_metier ADD CONSTRAINT FK_7309BDDAC18272 FOREIGN KEY (projet_id) REFERENCES projet (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE projet_metier ADD CONSTRAINT FK_7309BDDAED16FA20 FOREIGN KEY (metier_id) REFERENCES metier (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE contact DROP FOREIGN KEY FK_4C62E638A6E44244');
        $this->addSql('ALTER TABLE pays DROP FOREIGN KEY FK_349F3CAE98260155');
        $this->addSql('ALTER TABLE projet_metier DROP FOREIGN KEY FK_7309BDDAC18272');
        $this->addSql('ALTER TABLE projet_metier DROP FOREIGN KEY FK_7309BDDAED16FA20');
        $this->addSql('DROP TABLE acceuil');
        $this->addSql('DROP TABLE carrière');
        $this->addSql('DROP TABLE client');
        $this->addSql('DROP TABLE contact');
        $this->addSql('DROP TABLE gestion_contact');
        $this->addSql('DROP TABLE metier');
        $this->addSql('DROP TABLE pays');
        $this->addSql('DROP TABLE projet');
        $this->addSql('DROP TABLE projet_metier');
        $this->addSql('DROP TABLE region');
        $this->addSql('DROP TABLE messenger_messages');
    }
}
