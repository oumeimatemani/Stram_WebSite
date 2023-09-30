<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230816174905 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE contact ADD pays_id INT DEFAULT NULL, ADD moyen_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE contact ADD CONSTRAINT FK_4C62E638A6E44244 FOREIGN KEY (pays_id) REFERENCES pays (id)');
        $this->addSql('ALTER TABLE contact ADD CONSTRAINT FK_4C62E6386C346E29 FOREIGN KEY (moyen_id) REFERENCES moyen_contact (id)');
        $this->addSql('CREATE INDEX IDX_4C62E638A6E44244 ON contact (pays_id)');
        $this->addSql('CREATE INDEX IDX_4C62E6386C346E29 ON contact (moyen_id)');
        $this->addSql('ALTER TABLE moyen_contact ADD region_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE moyen_contact ADD CONSTRAINT FK_67652E8398260155 FOREIGN KEY (region_id) REFERENCES region (id)');
        $this->addSql('CREATE INDEX IDX_67652E8398260155 ON moyen_contact (region_id)');
        $this->addSql('ALTER TABLE pays ADD region_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE pays ADD CONSTRAINT FK_349F3CAE98260155 FOREIGN KEY (region_id) REFERENCES region (id)');
        $this->addSql('CREATE INDEX IDX_349F3CAE98260155 ON pays (region_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE contact DROP FOREIGN KEY FK_4C62E638A6E44244');
        $this->addSql('ALTER TABLE contact DROP FOREIGN KEY FK_4C62E6386C346E29');
        $this->addSql('DROP INDEX IDX_4C62E638A6E44244 ON contact');
        $this->addSql('DROP INDEX IDX_4C62E6386C346E29 ON contact');
        $this->addSql('ALTER TABLE contact DROP pays_id, DROP moyen_id');
        $this->addSql('ALTER TABLE moyen_contact DROP FOREIGN KEY FK_67652E8398260155');
        $this->addSql('DROP INDEX IDX_67652E8398260155 ON moyen_contact');
        $this->addSql('ALTER TABLE moyen_contact DROP region_id');
        $this->addSql('ALTER TABLE pays DROP FOREIGN KEY FK_349F3CAE98260155');
        $this->addSql('DROP INDEX IDX_349F3CAE98260155 ON pays');
        $this->addSql('ALTER TABLE pays DROP region_id');
    }
}
