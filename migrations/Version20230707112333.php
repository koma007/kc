<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230707112333 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE domyslna_grupa (id INT NOT NULL, domyslna_grupa_id INT DEFAULT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE INDEX IDX_411E351626D4E566 ON domyslna_grupa (domyslna_grupa_id)');
        $this->addSql('ALTER TABLE domyslna_grupa ADD CONSTRAINT FK_411E351626D4E566 FOREIGN KEY (domyslna_grupa_id) REFERENCES grupy (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('DROP INDEX idx_78da2e8226d4e566');
        $this->addSql('ALTER TABLE grupy DROP domyslna_grupa_id');
        $this->addSql('ALTER TABLE grupy_audit DROP domyslna_grupa_id');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('ALTER TABLE domyslna_grupa DROP CONSTRAINT FK_411E351626D4E566');
        $this->addSql('DROP TABLE domyslna_grupa');
        $this->addSql('ALTER TABLE grupy ADD domyslna_grupa_id INT DEFAULT NULL');
        $this->addSql('CREATE INDEX idx_78da2e8226d4e566 ON grupy (domyslna_grupa_id)');
        $this->addSql('ALTER TABLE grupy_audit ADD domyslna_grupa_id INT DEFAULT NULL');
    }
}
