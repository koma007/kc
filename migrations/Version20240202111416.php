<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240202111416 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SEQUENCE zeszyt_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE TABLE zeszyt (id INT NOT NULL, pracownik_id INT NOT NULL, created_at TIMESTAMP(0) WITHOUT TIME ZONE DEFAULT NULL, updated_at TIMESTAMP(0) WITHOUT TIME ZONE DEFAULT NULL, ilosc DOUBLE PRECISION NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_C3D0E25751E53502 ON zeszyt (pracownik_id)');
        $this->addSql('COMMENT ON COLUMN zeszyt.created_at IS \'(DC2Type:datetime_immutable)\'');
        $this->addSql('COMMENT ON COLUMN zeszyt.updated_at IS \'(DC2Type:datetime_immutable)\'');
        $this->addSql('CREATE TABLE zeszyt_wyceny (zeszyt_id INT NOT NULL, wyceny_id INT NOT NULL, PRIMARY KEY(zeszyt_id, wyceny_id))');
        $this->addSql('CREATE INDEX IDX_4FCF7471E529BE7C ON zeszyt_wyceny (zeszyt_id)');
        $this->addSql('CREATE INDEX IDX_4FCF74718A86C280 ON zeszyt_wyceny (wyceny_id)');
        $this->addSql('ALTER TABLE zeszyt ADD CONSTRAINT FK_C3D0E25751E53502 FOREIGN KEY (pracownik_id) REFERENCES "user" (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE zeszyt_wyceny ADD CONSTRAINT FK_4FCF7471E529BE7C FOREIGN KEY (zeszyt_id) REFERENCES zeszyt (id) ON DELETE CASCADE NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE zeszyt_wyceny ADD CONSTRAINT FK_4FCF74718A86C280 FOREIGN KEY (wyceny_id) REFERENCES wyceny (id) ON DELETE CASCADE NOT DEFERRABLE INITIALLY IMMEDIATE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('DROP SEQUENCE zeszyt_id_seq CASCADE');
        $this->addSql('ALTER TABLE zeszyt DROP CONSTRAINT FK_C3D0E25751E53502');
        $this->addSql('ALTER TABLE zeszyt_wyceny DROP CONSTRAINT FK_4FCF7471E529BE7C');
        $this->addSql('ALTER TABLE zeszyt_wyceny DROP CONSTRAINT FK_4FCF74718A86C280');
        $this->addSql('DROP TABLE zeszyt');
        $this->addSql('DROP TABLE zeszyt_wyceny');
    }
}
