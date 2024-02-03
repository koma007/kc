<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240203125240 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE zeszyt_wyceny DROP CONSTRAINT fk_4fcf7471e529be7c');
        $this->addSql('ALTER TABLE zeszyt_wyceny DROP CONSTRAINT fk_4fcf74718a86c280');
        $this->addSql('DROP TABLE zeszyt_wyceny');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('CREATE TABLE zeszyt_wyceny (zeszyt_id INT NOT NULL, wyceny_id INT NOT NULL, PRIMARY KEY(zeszyt_id, wyceny_id))');
        $this->addSql('CREATE INDEX idx_4fcf7471e529be7c ON zeszyt_wyceny (zeszyt_id)');
        $this->addSql('CREATE INDEX idx_4fcf74718a86c280 ON zeszyt_wyceny (wyceny_id)');
        $this->addSql('ALTER TABLE zeszyt_wyceny ADD CONSTRAINT fk_4fcf7471e529be7c FOREIGN KEY (zeszyt_id) REFERENCES zeszyt (id) ON DELETE CASCADE NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE zeszyt_wyceny ADD CONSTRAINT fk_4fcf74718a86c280 FOREIGN KEY (wyceny_id) REFERENCES wyceny (id) ON DELETE CASCADE NOT DEFERRABLE INITIALLY IMMEDIATE');
    }
}
