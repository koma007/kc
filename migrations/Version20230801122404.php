<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230801122404 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE kompozycje DROP CONSTRAINT fk_5a7d75b17c5c4730');
        $this->addSql('DROP TABLE kompozycje');
        $this->addSql('ALTER TABLE zamowienie_produkt ADD CONSTRAINT FK_EB607F9275F42D9B FOREIGN KEY (produkt_id) REFERENCES wyceny (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('CREATE TABLE kompozycje (id INT NOT NULL, grupa_id INT NOT NULL, nazwa VARCHAR(255) NOT NULL, cena DOUBLE PRECISION NOT NULL, zdjecie VARCHAR(255) DEFAULT NULL, aktywny BOOLEAN NOT NULL, wazon VARCHAR(255) DEFAULT NULL, cena_solo DOUBLE PRECISION DEFAULT NULL, cena_wazon DOUBLE PRECISION DEFAULT NULL, created_at TIMESTAMP(0) WITHOUT TIME ZONE NOT NULL, updated_at TIMESTAMP(0) WITHOUT TIME ZONE NOT NULL, created_by VARCHAR(255) DEFAULT NULL, updated_by VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE INDEX idx_5a7d75b17c5c4730 ON kompozycje (grupa_id)');
        $this->addSql('ALTER TABLE kompozycje ADD CONSTRAINT fk_5a7d75b17c5c4730 FOREIGN KEY (grupa_id) REFERENCES grupy (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE zamowienie_produkt DROP CONSTRAINT FK_EB607F9275F42D9B');
    }
}
