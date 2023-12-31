<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230731073700 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE wyceny ADD created_at TIMESTAMP(0) WITHOUT TIME ZONE NULL');
        $this->addSql('ALTER TABLE wyceny ADD updated_at TIMESTAMP(0) WITHOUT TIME ZONE NULL');
        $this->addSql('UPDATE wyceny SET created_at = NOW(), updated_at = NOW()');
        $this->addSql('ALTER TABLE wyceny ADD created_by VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE wyceny ADD updated_by VARCHAR(255) DEFAULT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('ALTER TABLE wyceny DROP created_at');
        $this->addSql('ALTER TABLE wyceny DROP updated_at');
        $this->addSql('ALTER TABLE wyceny DROP created_by');
        $this->addSql('ALTER TABLE wyceny DROP updated_by');
    }
}
