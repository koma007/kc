<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230717095627 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SEQUENCE hurtowe_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE TABLE hurtowe (id INT NOT NULL, nazwa_id INT DEFAULT NULL, ilosc INT DEFAULT NULL, cena DOUBLE PRECISION DEFAULT NULL, wartosc DOUBLE PRECISION DEFAULT NULL, wozek INT DEFAULT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_7B833117653B48D ON hurtowe (nazwa_id)');
        $this->addSql('ALTER TABLE hurtowe ADD CONSTRAINT FK_7B833117653B48D FOREIGN KEY (nazwa_id) REFERENCES wyceny (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('DROP SEQUENCE hurtowe_id_seq CASCADE');
        $this->addSql('ALTER TABLE hurtowe DROP CONSTRAINT FK_7B833117653B48D');
        $this->addSql('DROP TABLE hurtowe');
    }
}
