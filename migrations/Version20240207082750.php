<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240207082750 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP SEQUENCE zeszyt2_id_seq CASCADE');
        $this->addSql('ALTER TABLE zeszyt2 DROP CONSTRAINT fk_ef19aab851e53502');
        $this->addSql('ALTER TABLE zeszyt2 DROP CONSTRAINT fk_ef19aab851434628');
        $this->addSql('DROP TABLE zeszyt2');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('CREATE SEQUENCE zeszyt2_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE TABLE zeszyt2 (id INT NOT NULL, pracownik_id INT NOT NULL, kompozycja_id INT NOT NULL, created_at TIMESTAMP(0) WITHOUT TIME ZONE DEFAULT NULL, updated_at TIMESTAMP(0) WITHOUT TIME ZONE DEFAULT NULL, ilosc DOUBLE PRECISION NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE INDEX idx_ef19aab851e53502 ON zeszyt2 (pracownik_id)');
        $this->addSql('CREATE INDEX idx_ef19aab851434628 ON zeszyt2 (kompozycja_id)');
        $this->addSql('COMMENT ON COLUMN zeszyt2.created_at IS \'(DC2Type:datetime_immutable)\'');
        $this->addSql('COMMENT ON COLUMN zeszyt2.updated_at IS \'(DC2Type:datetime_immutable)\'');
        $this->addSql('ALTER TABLE zeszyt2 ADD CONSTRAINT fk_ef19aab851e53502 FOREIGN KEY (pracownik_id) REFERENCES "user" (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE zeszyt2 ADD CONSTRAINT fk_ef19aab851434628 FOREIGN KEY (kompozycja_id) REFERENCES wyceny (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
    }
}
