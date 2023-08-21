<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230718145138 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE hurtowe ADD kompozycja6_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE hurtowe ADD sztuk6 INT DEFAULT NULL');
        $this->addSql('ALTER TABLE hurtowe ADD cena6 DOUBLE PRECISION DEFAULT NULL');
        $this->addSql('ALTER TABLE hurtowe ADD wartosc6 DOUBLE PRECISION DEFAULT NULL');
        $this->addSql('ALTER TABLE hurtowe ADD wozek6 INT DEFAULT NULL');
        $this->addSql('ALTER TABLE hurtowe ADD nazwa6 VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE hurtowe ADD CONSTRAINT FK_7B833117E5FFE96 FOREIGN KEY (kompozycja6_id) REFERENCES wyceny (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_7B833117E5FFE96 ON hurtowe (kompozycja6_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('ALTER TABLE hurtowe DROP CONSTRAINT FK_7B833117E5FFE96');
        $this->addSql('DROP INDEX UNIQ_7B833117E5FFE96');
        $this->addSql('ALTER TABLE hurtowe DROP kompozycja6_id');
        $this->addSql('ALTER TABLE hurtowe DROP sztuk6');
        $this->addSql('ALTER TABLE hurtowe DROP cena6');
        $this->addSql('ALTER TABLE hurtowe DROP wartosc6');
        $this->addSql('ALTER TABLE hurtowe DROP wozek6');
        $this->addSql('ALTER TABLE hurtowe DROP nazwa6');
    }
}
