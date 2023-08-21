<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230718145743 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE hurtowe ADD kompozycja7_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE hurtowe ADD kompozycja8_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE hurtowe ADD kompozycja9_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE hurtowe ADD kompozycja10_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE hurtowe ADD sztuk7 INT DEFAULT NULL');
        $this->addSql('ALTER TABLE hurtowe ADD cena7 DOUBLE PRECISION DEFAULT NULL');
        $this->addSql('ALTER TABLE hurtowe ADD wartosc7 DOUBLE PRECISION DEFAULT NULL');
        $this->addSql('ALTER TABLE hurtowe ADD wozek7 INT DEFAULT NULL');
        $this->addSql('ALTER TABLE hurtowe ADD nazwa7 VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE hurtowe ADD sztuk8 INT DEFAULT NULL');
        $this->addSql('ALTER TABLE hurtowe ADD cena8 DOUBLE PRECISION DEFAULT NULL');
        $this->addSql('ALTER TABLE hurtowe ADD wartosc8 DOUBLE PRECISION DEFAULT NULL');
        $this->addSql('ALTER TABLE hurtowe ADD wozek8 INT DEFAULT NULL');
        $this->addSql('ALTER TABLE hurtowe ADD nazwa8 VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE hurtowe ADD sztuk9 INT DEFAULT NULL');
        $this->addSql('ALTER TABLE hurtowe ADD cena9 DOUBLE PRECISION DEFAULT NULL');
        $this->addSql('ALTER TABLE hurtowe ADD wartosc9 DOUBLE PRECISION DEFAULT NULL');
        $this->addSql('ALTER TABLE hurtowe ADD wozek9 INT DEFAULT NULL');
        $this->addSql('ALTER TABLE hurtowe ADD nazwa9 VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE hurtowe ADD sztuk10 INT DEFAULT NULL');
        $this->addSql('ALTER TABLE hurtowe ADD cena10 DOUBLE PRECISION DEFAULT NULL');
        $this->addSql('ALTER TABLE hurtowe ADD wartosc10 DOUBLE PRECISION DEFAULT NULL');
        $this->addSql('ALTER TABLE hurtowe ADD wozek10 INT DEFAULT NULL');
        $this->addSql('ALTER TABLE hurtowe ADD nazwa10 VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE hurtowe ADD CONSTRAINT FK_7B83311C6E399F3 FOREIGN KEY (kompozycja7_id) REFERENCES wyceny (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE hurtowe ADD CONSTRAINT FK_7B833119E8089A5 FOREIGN KEY (kompozycja8_id) REFERENCES wyceny (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE hurtowe ADD CONSTRAINT FK_7B83311263CEEC0 FOREIGN KEY (kompozycja9_id) REFERENCES wyceny (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE hurtowe ADD CONSTRAINT FK_7B83311C5E2FF69 FOREIGN KEY (kompozycja10_id) REFERENCES wyceny (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_7B83311C6E399F3 ON hurtowe (kompozycja7_id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_7B833119E8089A5 ON hurtowe (kompozycja8_id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_7B83311263CEEC0 ON hurtowe (kompozycja9_id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_7B83311C5E2FF69 ON hurtowe (kompozycja10_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('ALTER TABLE hurtowe DROP CONSTRAINT FK_7B83311C6E399F3');
        $this->addSql('ALTER TABLE hurtowe DROP CONSTRAINT FK_7B833119E8089A5');
        $this->addSql('ALTER TABLE hurtowe DROP CONSTRAINT FK_7B83311263CEEC0');
        $this->addSql('ALTER TABLE hurtowe DROP CONSTRAINT FK_7B83311C5E2FF69');
        $this->addSql('DROP INDEX UNIQ_7B83311C6E399F3');
        $this->addSql('DROP INDEX UNIQ_7B833119E8089A5');
        $this->addSql('DROP INDEX UNIQ_7B83311263CEEC0');
        $this->addSql('DROP INDEX UNIQ_7B83311C5E2FF69');
        $this->addSql('ALTER TABLE hurtowe DROP kompozycja7_id');
        $this->addSql('ALTER TABLE hurtowe DROP kompozycja8_id');
        $this->addSql('ALTER TABLE hurtowe DROP kompozycja9_id');
        $this->addSql('ALTER TABLE hurtowe DROP kompozycja10_id');
        $this->addSql('ALTER TABLE hurtowe DROP sztuk7');
        $this->addSql('ALTER TABLE hurtowe DROP cena7');
        $this->addSql('ALTER TABLE hurtowe DROP wartosc7');
        $this->addSql('ALTER TABLE hurtowe DROP wozek7');
        $this->addSql('ALTER TABLE hurtowe DROP nazwa7');
        $this->addSql('ALTER TABLE hurtowe DROP sztuk8');
        $this->addSql('ALTER TABLE hurtowe DROP cena8');
        $this->addSql('ALTER TABLE hurtowe DROP wartosc8');
        $this->addSql('ALTER TABLE hurtowe DROP wozek8');
        $this->addSql('ALTER TABLE hurtowe DROP nazwa8');
        $this->addSql('ALTER TABLE hurtowe DROP sztuk9');
        $this->addSql('ALTER TABLE hurtowe DROP cena9');
        $this->addSql('ALTER TABLE hurtowe DROP wartosc9');
        $this->addSql('ALTER TABLE hurtowe DROP wozek9');
        $this->addSql('ALTER TABLE hurtowe DROP nazwa9');
        $this->addSql('ALTER TABLE hurtowe DROP sztuk10');
        $this->addSql('ALTER TABLE hurtowe DROP cena10');
        $this->addSql('ALTER TABLE hurtowe DROP wartosc10');
        $this->addSql('ALTER TABLE hurtowe DROP wozek10');
        $this->addSql('ALTER TABLE hurtowe DROP nazwa10');
    }
}
