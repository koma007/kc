<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230718074342 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE hurtowe ADD nazwa2_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE hurtowe ADD sztuk2 INT DEFAULT NULL');
        $this->addSql('ALTER TABLE hurtowe ADD cena2 DOUBLE PRECISION DEFAULT NULL');
        $this->addSql('ALTER TABLE hurtowe ADD wartosc2 DOUBLE PRECISION DEFAULT NULL');
        $this->addSql('ALTER TABLE hurtowe ADD wozek2 INT DEFAULT NULL');
        $this->addSql('ALTER TABLE hurtowe ADD CONSTRAINT FK_7B8331157A62E54 FOREIGN KEY (nazwa2_id) REFERENCES wyceny (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_7B8331157A62E54 ON hurtowe (nazwa2_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('ALTER TABLE hurtowe DROP CONSTRAINT FK_7B8331157A62E54');
        $this->addSql('DROP INDEX UNIQ_7B8331157A62E54');
        $this->addSql('ALTER TABLE hurtowe DROP nazwa2_id');
        $this->addSql('ALTER TABLE hurtowe DROP sztuk2');
        $this->addSql('ALTER TABLE hurtowe DROP cena2');
        $this->addSql('ALTER TABLE hurtowe DROP wartosc2');
        $this->addSql('ALTER TABLE hurtowe DROP wozek2');
    }
}
