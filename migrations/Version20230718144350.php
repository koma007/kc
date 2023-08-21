<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230718144350 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE hurtowe ADD kompozycja3_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE hurtowe ADD sztuk3 INT DEFAULT NULL');
        $this->addSql('ALTER TABLE hurtowe ADD cena3 DOUBLE PRECISION DEFAULT NULL');
        $this->addSql('ALTER TABLE hurtowe ADD wartosc3 DOUBLE PRECISION DEFAULT NULL');
        $this->addSql('ALTER TABLE hurtowe ADD wozek3 INT DEFAULT NULL');
        $this->addSql('ALTER TABLE hurtowe ADD nazwa3 VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE hurtowe ADD CONSTRAINT FK_7B8331149810EA4 FOREIGN KEY (kompozycja3_id) REFERENCES wyceny (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_7B8331149810EA4 ON hurtowe (kompozycja3_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('ALTER TABLE hurtowe DROP CONSTRAINT FK_7B8331149810EA4');
        $this->addSql('DROP INDEX UNIQ_7B8331149810EA4');
        $this->addSql('ALTER TABLE hurtowe DROP kompozycja3_id');
        $this->addSql('ALTER TABLE hurtowe DROP sztuk3');
        $this->addSql('ALTER TABLE hurtowe DROP cena3');
        $this->addSql('ALTER TABLE hurtowe DROP wartosc3');
        $this->addSql('ALTER TABLE hurtowe DROP wozek3');
        $this->addSql('ALTER TABLE hurtowe DROP nazwa3');
    }
}
