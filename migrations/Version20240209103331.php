<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240209103331 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SEQUENCE dostawcy_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE TABLE dostawcy (id INT NOT NULL, nazwa VARCHAR(255) NOT NULL, PRIMARY KEY(id))');
        $this->addSql('ALTER TABLE polprodukty ADD dostawcy_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE polprodukty ADD CONSTRAINT FK_3740F3C72011EF50 FOREIGN KEY (dostawcy_id) REFERENCES dostawcy (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('CREATE INDEX IDX_3740F3C72011EF50 ON polprodukty (dostawcy_id)');
        $this->addSql('ALTER TABLE polprodukty_audit ADD dostawcy_id INT DEFAULT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('ALTER TABLE polprodukty DROP CONSTRAINT FK_3740F3C72011EF50');
        $this->addSql('DROP SEQUENCE dostawcy_id_seq CASCADE');
        $this->addSql('DROP TABLE dostawcy');
        $this->addSql('DROP INDEX IDX_3740F3C72011EF50');
        $this->addSql('ALTER TABLE polprodukty DROP dostawcy_id');
        $this->addSql('ALTER TABLE polprodukty_audit DROP dostawcy_id');
    }
}
