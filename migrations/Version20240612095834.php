<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240612095834 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE hurtowe_zamowienia ALTER wozek1 TYPE VARCHAR(255)');
        $this->addSql('ALTER TABLE hurtowe_zamowienia ALTER wozek2 TYPE VARCHAR(255)');
        $this->addSql('ALTER TABLE hurtowe_zamowienia ALTER wozek3 TYPE VARCHAR(255)');
        $this->addSql('ALTER TABLE hurtowe_zamowienia ALTER wozek4 TYPE VARCHAR(255)');
        $this->addSql('ALTER TABLE hurtowe_zamowienia ALTER wozek5 TYPE VARCHAR(255)');
        $this->addSql('ALTER TABLE hurtowe_zamowienia ALTER wozek6 TYPE VARCHAR(255)');
        $this->addSql('ALTER TABLE hurtowe_zamowienia ALTER wozek7 TYPE VARCHAR(255)');
        $this->addSql('ALTER TABLE hurtowe_zamowienia ALTER wozek8 TYPE VARCHAR(255)');
        $this->addSql('ALTER TABLE hurtowe_zamowienia ALTER wozek9 TYPE VARCHAR(255)');
        $this->addSql('ALTER TABLE hurtowe_zamowienia ALTER wozek10 TYPE VARCHAR(255)');
        $this->addSql('ALTER TABLE hurtowe_zamowienia ALTER wozek11 TYPE VARCHAR(255)');
        $this->addSql('ALTER TABLE hurtowe_zamowienia ALTER wozek12 TYPE VARCHAR(255)');
        $this->addSql('ALTER TABLE hurtowe_zamowienia ALTER wozek13 TYPE VARCHAR(255)');
        $this->addSql('ALTER TABLE hurtowe_zamowienia ALTER wozek14 TYPE VARCHAR(255)');
        $this->addSql('ALTER TABLE hurtowe_zamowienia ALTER wozek15 TYPE VARCHAR(255)');
        $this->addSql('ALTER TABLE hurtowe_zamowienia ALTER wozek16 TYPE VARCHAR(255)');
        $this->addSql('ALTER TABLE hurtowe_zamowienia ALTER wozek17 TYPE VARCHAR(255)');
        $this->addSql('ALTER TABLE hurtowe_zamowienia ALTER wozek18 TYPE VARCHAR(255)');
        $this->addSql('ALTER TABLE hurtowe_zamowienia ALTER wozek19 TYPE VARCHAR(255)');
        $this->addSql('ALTER TABLE hurtowe_zamowienia ALTER wozek20 TYPE VARCHAR(255)');
        $this->addSql('ALTER TABLE hurtowe_zamowienia ALTER wozek21 TYPE VARCHAR(255)');
        $this->addSql('ALTER TABLE hurtowe_zamowienia ALTER wozek22 TYPE VARCHAR(255)');
        $this->addSql('ALTER TABLE hurtowe_zamowienia ALTER wozek23 TYPE VARCHAR(255)');
        $this->addSql('ALTER TABLE hurtowe_zamowienia ALTER wozek24 TYPE VARCHAR(255)');
        $this->addSql('ALTER TABLE hurtowe_zamowienia ALTER wozek25 TYPE VARCHAR(255)');
        $this->addSql('ALTER TABLE hurtowe_zamowienia ALTER wozek26 TYPE VARCHAR(255)');
        $this->addSql('ALTER TABLE hurtowe_zamowienia ALTER wozek27 TYPE VARCHAR(255)');
        $this->addSql('ALTER TABLE hurtowe_zamowienia ALTER wozek28 TYPE VARCHAR(255)');
        $this->addSql('ALTER TABLE hurtowe_zamowienia ALTER wozek29 TYPE VARCHAR(255)');
        $this->addSql('ALTER TABLE hurtowe_zamowienia ALTER wozek30 TYPE VARCHAR(255)');
        $this->addSql('ALTER TABLE hurtowe_zamowienia ALTER wozek31 TYPE VARCHAR(255)');
        $this->addSql('ALTER TABLE hurtowe_zamowienia ALTER wozek32 TYPE VARCHAR(255)');
        $this->addSql('ALTER TABLE hurtowe_zamowienia ALTER wozek33 TYPE VARCHAR(255)');
        $this->addSql('ALTER TABLE hurtowe_zamowienia ALTER wozek34 TYPE VARCHAR(255)');
        $this->addSql('ALTER TABLE hurtowe_zamowienia ALTER wozek35 TYPE VARCHAR(255)');
        $this->addSql('ALTER TABLE hurtowe_zamowienia ALTER wozek36 TYPE VARCHAR(255)');
        $this->addSql('ALTER TABLE hurtowe_zamowienia ALTER wozek37 TYPE VARCHAR(255)');
        $this->addSql('ALTER TABLE hurtowe_zamowienia ALTER wozek38 TYPE VARCHAR(255)');
        $this->addSql('ALTER TABLE hurtowe_zamowienia ALTER wozek39 TYPE VARCHAR(255)');
        $this->addSql('ALTER TABLE hurtowe_zamowienia ALTER wozek40 TYPE VARCHAR(255)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('ALTER TABLE hurtowe_zamowienia ALTER wozek1 TYPE INT');
        $this->addSql('ALTER TABLE hurtowe_zamowienia ALTER wozek2 TYPE INT');
        $this->addSql('ALTER TABLE hurtowe_zamowienia ALTER wozek3 TYPE INT');
        $this->addSql('ALTER TABLE hurtowe_zamowienia ALTER wozek4 TYPE INT');
        $this->addSql('ALTER TABLE hurtowe_zamowienia ALTER wozek5 TYPE INT');
        $this->addSql('ALTER TABLE hurtowe_zamowienia ALTER wozek6 TYPE INT');
        $this->addSql('ALTER TABLE hurtowe_zamowienia ALTER wozek7 TYPE INT');
        $this->addSql('ALTER TABLE hurtowe_zamowienia ALTER wozek8 TYPE INT');
        $this->addSql('ALTER TABLE hurtowe_zamowienia ALTER wozek9 TYPE INT');
        $this->addSql('ALTER TABLE hurtowe_zamowienia ALTER wozek10 TYPE INT');
        $this->addSql('ALTER TABLE hurtowe_zamowienia ALTER wozek11 TYPE INT');
        $this->addSql('ALTER TABLE hurtowe_zamowienia ALTER wozek12 TYPE INT');
        $this->addSql('ALTER TABLE hurtowe_zamowienia ALTER wozek13 TYPE INT');
        $this->addSql('ALTER TABLE hurtowe_zamowienia ALTER wozek14 TYPE INT');
        $this->addSql('ALTER TABLE hurtowe_zamowienia ALTER wozek15 TYPE INT');
        $this->addSql('ALTER TABLE hurtowe_zamowienia ALTER wozek16 TYPE INT');
        $this->addSql('ALTER TABLE hurtowe_zamowienia ALTER wozek17 TYPE INT');
        $this->addSql('ALTER TABLE hurtowe_zamowienia ALTER wozek18 TYPE INT');
        $this->addSql('ALTER TABLE hurtowe_zamowienia ALTER wozek19 TYPE INT');
        $this->addSql('ALTER TABLE hurtowe_zamowienia ALTER wozek20 TYPE INT');
        $this->addSql('ALTER TABLE hurtowe_zamowienia ALTER wozek21 TYPE INT');
        $this->addSql('ALTER TABLE hurtowe_zamowienia ALTER wozek22 TYPE INT');
        $this->addSql('ALTER TABLE hurtowe_zamowienia ALTER wozek23 TYPE INT');
        $this->addSql('ALTER TABLE hurtowe_zamowienia ALTER wozek24 TYPE INT');
        $this->addSql('ALTER TABLE hurtowe_zamowienia ALTER wozek25 TYPE INT');
        $this->addSql('ALTER TABLE hurtowe_zamowienia ALTER wozek26 TYPE INT');
        $this->addSql('ALTER TABLE hurtowe_zamowienia ALTER wozek27 TYPE INT');
        $this->addSql('ALTER TABLE hurtowe_zamowienia ALTER wozek28 TYPE INT');
        $this->addSql('ALTER TABLE hurtowe_zamowienia ALTER wozek29 TYPE INT');
        $this->addSql('ALTER TABLE hurtowe_zamowienia ALTER wozek30 TYPE INT');
        $this->addSql('ALTER TABLE hurtowe_zamowienia ALTER wozek31 TYPE INT');
        $this->addSql('ALTER TABLE hurtowe_zamowienia ALTER wozek32 TYPE INT');
        $this->addSql('ALTER TABLE hurtowe_zamowienia ALTER wozek33 TYPE INT');
        $this->addSql('ALTER TABLE hurtowe_zamowienia ALTER wozek34 TYPE INT');
        $this->addSql('ALTER TABLE hurtowe_zamowienia ALTER wozek35 TYPE INT');
        $this->addSql('ALTER TABLE hurtowe_zamowienia ALTER wozek36 TYPE INT');
        $this->addSql('ALTER TABLE hurtowe_zamowienia ALTER wozek37 TYPE INT');
        $this->addSql('ALTER TABLE hurtowe_zamowienia ALTER wozek38 TYPE INT');
        $this->addSql('ALTER TABLE hurtowe_zamowienia ALTER wozek39 TYPE INT');
        $this->addSql('ALTER TABLE hurtowe_zamowienia ALTER wozek40 TYPE INT');
    }
}
