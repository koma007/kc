<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230801114017 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        //$this->addSql('ALTER TABLE zamowienie_produkt DROP CONSTRAINT fk_eb607f9275f42d9b');
        $this->addSql('DROP SEQUENCE kompozycje_id_seq CASCADE');
        //$this->addSql('ALTER TABLE kompozycje DROP CONSTRAINT fk_5a7d75b17c5c4730');
        //$this->addSql('ALTER TABLE kompozycje_audit DROP CONSTRAINT rev_def8732a1d44f1e65addae9e2dcaf2c0_fk');
        //$this->addSql('DROP TABLE kompozycje');
        //$this->addSql('DROP TABLE kompozycje_audit');
        //$this->addSql('ALTER TABLE zamowienie_produkt DROP CONSTRAINT FK_EB607F9275F42D9B');
        //$this->addSql('ALTER TABLE zamowienie_produkt ADD CONSTRAINT FK_EB607F9275F42D9B FOREIGN KEY (produkt_id) REFERENCES wyceny (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('CREATE SEQUENCE kompozycje_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE TABLE kompozycje (id INT NOT NULL, grupa_id INT NOT NULL, nazwa VARCHAR(255) NOT NULL, cena DOUBLE PRECISION NOT NULL, zdjecie VARCHAR(255) DEFAULT NULL, aktywny BOOLEAN NOT NULL, wazon VARCHAR(255) DEFAULT NULL, cena_solo DOUBLE PRECISION DEFAULT NULL, cena_wazon DOUBLE PRECISION DEFAULT NULL, created_at TIMESTAMP(0) WITHOUT TIME ZONE NOT NULL, updated_at TIMESTAMP(0) WITHOUT TIME ZONE NOT NULL, created_by VARCHAR(255) DEFAULT NULL, updated_by VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE INDEX idx_5a7d75b17c5c4730 ON kompozycje (grupa_id)');
        $this->addSql('CREATE TABLE kompozycje_audit (id INT NOT NULL, rev INT NOT NULL, grupa_id INT DEFAULT NULL, nazwa VARCHAR(255) DEFAULT NULL, cena DOUBLE PRECISION DEFAULT NULL, zdjecie VARCHAR(255) DEFAULT NULL, aktywny BOOLEAN DEFAULT NULL, wazon VARCHAR(255) DEFAULT NULL, cena_solo DOUBLE PRECISION DEFAULT NULL, cena_wazon DOUBLE PRECISION DEFAULT NULL, created_at TIMESTAMP(0) WITHOUT TIME ZONE DEFAULT NULL, updated_at TIMESTAMP(0) WITHOUT TIME ZONE DEFAULT NULL, created_by VARCHAR(255) DEFAULT NULL, updated_by VARCHAR(255) DEFAULT NULL, revtype VARCHAR(4) NOT NULL, PRIMARY KEY(id, rev))');
        $this->addSql('CREATE INDEX rev_def8732a1d44f1e65addae9e2dcaf2c0_idx ON kompozycje_audit (rev)');
        $this->addSql('ALTER TABLE kompozycje ADD CONSTRAINT fk_5a7d75b17c5c4730 FOREIGN KEY (grupa_id) REFERENCES grupy (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE kompozycje_audit ADD CONSTRAINT rev_def8732a1d44f1e65addae9e2dcaf2c0_fk FOREIGN KEY (rev) REFERENCES revisions (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE zamowienie_produkt DROP CONSTRAINT fk_eb607f9275f42d9b');
        $this->addSql('ALTER TABLE zamowienie_produkt ADD CONSTRAINT fk_eb607f9275f42d9b FOREIGN KEY (produkt_id) REFERENCES kompozycje (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
    }
}
