<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240203125442 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE zeszyt ADD kompozycja_id INT NOT NULL');
        $this->addSql('ALTER TABLE zeszyt ADD CONSTRAINT FK_C3D0E25751434628 FOREIGN KEY (kompozycja_id) REFERENCES wyceny (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('CREATE INDEX IDX_C3D0E25751434628 ON zeszyt (kompozycja_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('ALTER TABLE zeszyt DROP CONSTRAINT FK_C3D0E25751434628');
        $this->addSql('DROP INDEX IDX_C3D0E25751434628');
        $this->addSql('ALTER TABLE zeszyt DROP kompozycja_id');
    }
}
