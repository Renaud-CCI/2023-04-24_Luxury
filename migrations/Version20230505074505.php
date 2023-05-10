<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230505074505 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE candidate CHANGE availability availability TINYINT(1) DEFAULT NULL');
        
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE candidate CHANGE availability availability TINYINT(1) DEFAULT 1');
        $this->addSql('ALTER TABLE job_offer ADD client_id_id INT DEFAULT NULL, CHANGE description description LONGTEXT DEFAULT NULL, CHANGE activity activity TINYINT(1) DEFAULT NULL, CHANGE title title VARCHAR(255) DEFAULT NULL, CHANGE type type VARCHAR(255) DEFAULT NULL, CHANGE location location VARCHAR(255) DEFAULT NULL, CHANGE closing_date closing_date DATETIME DEFAULT NULL, CHANGE salary salary INT DEFAULT NULL, CHANGE creation_date creation_date DATETIME DEFAULT NULL');
        
    }
}
