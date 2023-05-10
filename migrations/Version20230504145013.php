<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230504145013 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE candidate CHANGE availability availability TINYINT(1) DEFAULT NULL');
        $this->addSql('ALTER TABLE job_offer DROP FOREIGN KEY FK_288A3A4EDC2902E0');
        $this->addSql('DROP INDEX IDX_288A3A4EDC2902E0 ON job_offer');
        $this->addSql('ALTER TABLE job_offer DROP client_id_id, CHANGE description description LONGTEXT NOT NULL, CHANGE activity activity TINYINT(1) NOT NULL, CHANGE title title VARCHAR(255) NOT NULL, CHANGE type type VARCHAR(255) NOT NULL, CHANGE location location VARCHAR(255) NOT NULL, CHANGE closing_date closing_date DATETIME NOT NULL, CHANGE salary salary INT NOT NULL, CHANGE creation_date creation_date DATETIME NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE candidate CHANGE availability availability TINYINT(1) DEFAULT 1');
        $this->addSql('ALTER TABLE job_offer ADD client_id_id INT DEFAULT NULL, CHANGE description description LONGTEXT DEFAULT NULL, CHANGE activity activity TINYINT(1) DEFAULT NULL, CHANGE title title VARCHAR(255) DEFAULT NULL, CHANGE type type VARCHAR(255) DEFAULT NULL, CHANGE location location VARCHAR(255) DEFAULT NULL, CHANGE closing_date closing_date DATETIME DEFAULT NULL, CHANGE salary salary INT DEFAULT NULL, CHANGE creation_date creation_date DATETIME DEFAULT NULL');
        $this->addSql('ALTER TABLE job_offer ADD CONSTRAINT FK_288A3A4EDC2902E0 FOREIGN KEY (client_id_id) REFERENCES client (id)');
        $this->addSql('CREATE INDEX IDX_288A3A4EDC2902E0 ON job_offer (client_id_id)');
    }
}
