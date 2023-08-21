<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230803130054 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE zamowienie_produkt ADD user_id_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE zamowienie_produkt ADD CONSTRAINT FK_EB607F929D86650F FOREIGN KEY (user_id_id) REFERENCES "user" (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('CREATE INDEX IDX_EB607F929D86650F ON zamowienie_produkt (user_id_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('ALTER TABLE zamowienie_produkt DROP CONSTRAINT FK_EB607F929D86650F');
        $this->addSql('DROP INDEX IDX_EB607F929D86650F');
        $this->addSql('ALTER TABLE zamowienie_produkt DROP user_id_id');
    }
}
