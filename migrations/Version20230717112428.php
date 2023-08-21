<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230717112428 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE hurtowe DROP CONSTRAINT fk_7b833117653b48d');
        $this->addSql('DROP INDEX uniq_7b833117653b48d');
        $this->addSql('ALTER TABLE hurtowe ADD nazwa1_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE hurtowe ADD sztuk1 INT DEFAULT NULL');
        $this->addSql('ALTER TABLE hurtowe ADD cena1 DOUBLE PRECISION DEFAULT NULL');
        $this->addSql('ALTER TABLE hurtowe ADD wartosc1 DOUBLE PRECISION DEFAULT NULL');
        $this->addSql('ALTER TABLE hurtowe ADD wozek1 INT DEFAULT NULL');
        $this->addSql('ALTER TABLE hurtowe DROP nazwa_id');
        $this->addSql('ALTER TABLE hurtowe DROP ilosc');
        $this->addSql('ALTER TABLE hurtowe DROP cena');
        $this->addSql('ALTER TABLE hurtowe DROP wartosc');
        $this->addSql('ALTER TABLE hurtowe DROP wozek');
        $this->addSql('ALTER TABLE hurtowe ADD CONSTRAINT FK_7B83311451381BA FOREIGN KEY (nazwa1_id) REFERENCES wyceny (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_7B83311451381BA ON hurtowe (nazwa1_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('ALTER TABLE hurtowe DROP CONSTRAINT FK_7B83311451381BA');
        $this->addSql('DROP INDEX UNIQ_7B83311451381BA');
        $this->addSql('ALTER TABLE hurtowe ADD nazwa_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE hurtowe ADD ilosc INT DEFAULT NULL');
        $this->addSql('ALTER TABLE hurtowe ADD cena DOUBLE PRECISION DEFAULT NULL');
        $this->addSql('ALTER TABLE hurtowe ADD wartosc DOUBLE PRECISION DEFAULT NULL');
        $this->addSql('ALTER TABLE hurtowe ADD wozek INT DEFAULT NULL');
        $this->addSql('ALTER TABLE hurtowe DROP nazwa1_id');
        $this->addSql('ALTER TABLE hurtowe DROP sztuk1');
        $this->addSql('ALTER TABLE hurtowe DROP cena1');
        $this->addSql('ALTER TABLE hurtowe DROP wartosc1');
        $this->addSql('ALTER TABLE hurtowe DROP wozek1');
        $this->addSql('ALTER TABLE hurtowe ADD CONSTRAINT fk_7b833117653b48d FOREIGN KEY (nazwa_id) REFERENCES wyceny (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('CREATE UNIQUE INDEX uniq_7b833117653b48d ON hurtowe (nazwa_id)');
    }
}
