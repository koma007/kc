<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230718144935 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE hurtowe ADD kompozycja4_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE hurtowe ADD kompozycja5_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE hurtowe ADD sztuk4 INT DEFAULT NULL');
        $this->addSql('ALTER TABLE hurtowe ADD cena4 DOUBLE PRECISION DEFAULT NULL');
        $this->addSql('ALTER TABLE hurtowe ADD wartosc4 DOUBLE PRECISION DEFAULT NULL');
        $this->addSql('ALTER TABLE hurtowe ADD wozek4 INT DEFAULT NULL');
        $this->addSql('ALTER TABLE hurtowe ADD nazwa4 VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE hurtowe ADD sztuk5 INT DEFAULT NULL');
        $this->addSql('ALTER TABLE hurtowe ADD cena5 DOUBLE PRECISION DEFAULT NULL');
        $this->addSql('ALTER TABLE hurtowe ADD wartosc5 DOUBLE PRECISION DEFAULT NULL');
        $this->addSql('ALTER TABLE hurtowe ADD wozek5 INT DEFAULT NULL');
        $this->addSql('ALTER TABLE hurtowe ADD nazwa5 VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE hurtowe ADD CONSTRAINT FK_7B83311D456361D FOREIGN KEY (kompozycja4_id) REFERENCES wyceny (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE hurtowe ADD CONSTRAINT FK_7B833116CEA5178 FOREIGN KEY (kompozycja5_id) REFERENCES wyceny (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_7B83311D456361D ON hurtowe (kompozycja4_id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_7B833116CEA5178 ON hurtowe (kompozycja5_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('ALTER TABLE hurtowe DROP CONSTRAINT FK_7B83311D456361D');
        $this->addSql('ALTER TABLE hurtowe DROP CONSTRAINT FK_7B833116CEA5178');
        $this->addSql('DROP INDEX UNIQ_7B83311D456361D');
        $this->addSql('DROP INDEX UNIQ_7B833116CEA5178');
        $this->addSql('ALTER TABLE hurtowe DROP kompozycja4_id');
        $this->addSql('ALTER TABLE hurtowe DROP kompozycja5_id');
        $this->addSql('ALTER TABLE hurtowe DROP sztuk4');
        $this->addSql('ALTER TABLE hurtowe DROP cena4');
        $this->addSql('ALTER TABLE hurtowe DROP wartosc4');
        $this->addSql('ALTER TABLE hurtowe DROP wozek4');
        $this->addSql('ALTER TABLE hurtowe DROP nazwa4');
        $this->addSql('ALTER TABLE hurtowe DROP sztuk5');
        $this->addSql('ALTER TABLE hurtowe DROP cena5');
        $this->addSql('ALTER TABLE hurtowe DROP wartosc5');
        $this->addSql('ALTER TABLE hurtowe DROP wozek5');
        $this->addSql('ALTER TABLE hurtowe DROP nazwa5');
    }
}
