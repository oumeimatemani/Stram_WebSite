<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230928090219 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE contact DROP FOREIGN KEY FK_4C62E6386C346E29');
        $this->addSql('CREATE TABLE gestion_contact (id INT AUTO_INCREMENT NOT NULL, tel_tunisie INT NOT NULL, tel_algerie INT NOT NULL, tel_niger INT NOT NULL, tel_benin INT NOT NULL, tel_senegal INT NOT NULL, fax_tunisie VARCHAR(255) NOT NULL, fax_algerie VARCHAR(255) NOT NULL, fax_senegal VARCHAR(255) NOT NULL, fax_niger VARCHAR(255) NOT NULL, fax_benin VARCHAR(255) NOT NULL, email_tunisie VARCHAR(255) NOT NULL, email_algerie VARCHAR(255) NOT NULL, email_niger VARCHAR(255) NOT NULL, email_senegal VARCHAR(255) NOT NULL, email_benin VARCHAR(255) NOT NULL, adresse_tunisie VARCHAR(255) NOT NULL, adresse_algerie VARCHAR(255) NOT NULL, adresse_niger VARCHAR(255) NOT NULL, adresse_benin VARCHAR(255) NOT NULL, adresse_senegal VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE moyen_contact DROP FOREIGN KEY FK_67652E8398260155');
        $this->addSql('DROP TABLE moyen_contact');
        $this->addSql('DROP INDEX IDX_4C62E6386C346E29 ON contact');
        $this->addSql('ALTER TABLE contact DROP moyen_id');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE moyen_contact (id INT AUTO_INCREMENT NOT NULL, region_id INT DEFAULT NULL, telephone INT NOT NULL, fax INT NOT NULL, mail VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, adresse VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, INDEX IDX_67652E8398260155 (region_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE moyen_contact ADD CONSTRAINT FK_67652E8398260155 FOREIGN KEY (region_id) REFERENCES region (id)');
        $this->addSql('DROP TABLE gestion_contact');
        $this->addSql('ALTER TABLE contact ADD moyen_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE contact ADD CONSTRAINT FK_4C62E6386C346E29 FOREIGN KEY (moyen_id) REFERENCES moyen_contact (id)');
        $this->addSql('CREATE INDEX IDX_4C62E6386C346E29 ON contact (moyen_id)');
    }
}
