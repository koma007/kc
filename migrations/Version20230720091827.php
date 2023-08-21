<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230720091827 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE hurtowe ALTER rodzaj1 TYPE VARCHAR(255)');
        $this->addSql('ALTER TABLE hurtowe ALTER rodzaj2 TYPE VARCHAR(255)');
        $this->addSql('ALTER TABLE hurtowe ALTER rodzaj3 TYPE VARCHAR(255)');
        $this->addSql('ALTER TABLE hurtowe ALTER rodzaj4 TYPE VARCHAR(255)');
        $this->addSql('ALTER TABLE hurtowe ALTER rodzaj5 TYPE VARCHAR(255)');
        $this->addSql('ALTER TABLE hurtowe ALTER rodzaj6 TYPE VARCHAR(255)');
        $this->addSql('ALTER TABLE hurtowe ALTER rodzaj7 TYPE VARCHAR(255)');
        $this->addSql('ALTER TABLE hurtowe ALTER rodzaj8 TYPE VARCHAR(255)');
        $this->addSql('ALTER TABLE hurtowe ALTER rodzaj9 TYPE VARCHAR(255)');
        $this->addSql('ALTER TABLE hurtowe ALTER rodzaj10 TYPE VARCHAR(255)');
        $this->addSql('ALTER TABLE hurtowe ALTER rodzaj11 TYPE VARCHAR(255)');
        $this->addSql('ALTER TABLE hurtowe ALTER rodzaj12 TYPE VARCHAR(255)');
        $this->addSql('ALTER TABLE hurtowe ALTER rodzaj13 TYPE VARCHAR(255)');
        $this->addSql('ALTER TABLE hurtowe ALTER rodzaj14 TYPE VARCHAR(255)');
        $this->addSql('ALTER TABLE hurtowe ALTER rodzaj15 TYPE VARCHAR(255)');
        $this->addSql('ALTER TABLE hurtowe ALTER rodzaj16 TYPE VARCHAR(255)');
        $this->addSql('ALTER TABLE hurtowe ALTER rodzaj17 TYPE VARCHAR(255)');
        $this->addSql('ALTER TABLE hurtowe ALTER rodzaj18 TYPE VARCHAR(255)');
        $this->addSql('ALTER TABLE hurtowe ALTER rodzaj19 TYPE VARCHAR(255)');
        $this->addSql('ALTER TABLE hurtowe ALTER rodzaj20 TYPE VARCHAR(255)');
        $this->addSql('ALTER TABLE hurtowe ALTER rodzaj21 TYPE VARCHAR(255)');
        $this->addSql('ALTER TABLE hurtowe ALTER rodzaj22 TYPE VARCHAR(255)');
        $this->addSql('ALTER TABLE hurtowe ALTER rodzaj23 TYPE VARCHAR(255)');
        $this->addSql('ALTER TABLE hurtowe ALTER rodzaj24 TYPE VARCHAR(255)');
        $this->addSql('ALTER TABLE hurtowe ALTER rodzaj25 TYPE VARCHAR(255)');
        $this->addSql('ALTER TABLE hurtowe ALTER rodzaj26 TYPE VARCHAR(255)');
        $this->addSql('ALTER TABLE hurtowe ALTER rodzaj27 TYPE VARCHAR(255)');
        $this->addSql('ALTER TABLE hurtowe ALTER rodzaj28 TYPE VARCHAR(255)');
        $this->addSql('ALTER TABLE hurtowe ALTER rodzaj29 TYPE VARCHAR(255)');
        $this->addSql('ALTER TABLE hurtowe ALTER rodzaj30 TYPE VARCHAR(255)');
        $this->addSql('ALTER TABLE hurtowe ALTER rodzaj31 TYPE VARCHAR(255)');
        $this->addSql('ALTER TABLE hurtowe ALTER rodzaj32 TYPE VARCHAR(255)');
        $this->addSql('ALTER TABLE hurtowe ALTER rodzaj33 TYPE VARCHAR(255)');
        $this->addSql('ALTER TABLE hurtowe ALTER rodzaj34 TYPE VARCHAR(255)');
        $this->addSql('ALTER TABLE hurtowe ALTER rodzaj35 TYPE VARCHAR(255)');
        $this->addSql('ALTER TABLE hurtowe ALTER rodzaj36 TYPE VARCHAR(255)');
        $this->addSql('ALTER TABLE hurtowe ALTER rodzaj37 TYPE VARCHAR(255)');
        $this->addSql('ALTER TABLE hurtowe ALTER rodzaj38 TYPE VARCHAR(255)');
        $this->addSql('ALTER TABLE hurtowe ALTER rodzaj39 TYPE VARCHAR(255)');
        $this->addSql('ALTER TABLE hurtowe ALTER rodzaj40 TYPE VARCHAR(255)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('ALTER TABLE hurtowe ALTER rodzaj1 TYPE VARCHAR(3)');
        $this->addSql('ALTER TABLE hurtowe ALTER rodzaj2 TYPE VARCHAR(3)');
        $this->addSql('ALTER TABLE hurtowe ALTER rodzaj3 TYPE VARCHAR(3)');
        $this->addSql('ALTER TABLE hurtowe ALTER rodzaj4 TYPE VARCHAR(3)');
        $this->addSql('ALTER TABLE hurtowe ALTER rodzaj5 TYPE VARCHAR(3)');
        $this->addSql('ALTER TABLE hurtowe ALTER rodzaj6 TYPE VARCHAR(3)');
        $this->addSql('ALTER TABLE hurtowe ALTER rodzaj7 TYPE VARCHAR(3)');
        $this->addSql('ALTER TABLE hurtowe ALTER rodzaj8 TYPE VARCHAR(3)');
        $this->addSql('ALTER TABLE hurtowe ALTER rodzaj9 TYPE VARCHAR(3)');
        $this->addSql('ALTER TABLE hurtowe ALTER rodzaj10 TYPE VARCHAR(3)');
        $this->addSql('ALTER TABLE hurtowe ALTER rodzaj11 TYPE VARCHAR(3)');
        $this->addSql('ALTER TABLE hurtowe ALTER rodzaj12 TYPE VARCHAR(3)');
        $this->addSql('ALTER TABLE hurtowe ALTER rodzaj13 TYPE VARCHAR(3)');
        $this->addSql('ALTER TABLE hurtowe ALTER rodzaj14 TYPE VARCHAR(3)');
        $this->addSql('ALTER TABLE hurtowe ALTER rodzaj15 TYPE VARCHAR(3)');
        $this->addSql('ALTER TABLE hurtowe ALTER rodzaj16 TYPE VARCHAR(3)');
        $this->addSql('ALTER TABLE hurtowe ALTER rodzaj17 TYPE VARCHAR(3)');
        $this->addSql('ALTER TABLE hurtowe ALTER rodzaj18 TYPE VARCHAR(3)');
        $this->addSql('ALTER TABLE hurtowe ALTER rodzaj19 TYPE VARCHAR(3)');
        $this->addSql('ALTER TABLE hurtowe ALTER rodzaj20 TYPE VARCHAR(3)');
        $this->addSql('ALTER TABLE hurtowe ALTER rodzaj21 TYPE VARCHAR(3)');
        $this->addSql('ALTER TABLE hurtowe ALTER rodzaj22 TYPE VARCHAR(3)');
        $this->addSql('ALTER TABLE hurtowe ALTER rodzaj23 TYPE VARCHAR(3)');
        $this->addSql('ALTER TABLE hurtowe ALTER rodzaj24 TYPE VARCHAR(3)');
        $this->addSql('ALTER TABLE hurtowe ALTER rodzaj25 TYPE VARCHAR(3)');
        $this->addSql('ALTER TABLE hurtowe ALTER rodzaj26 TYPE VARCHAR(3)');
        $this->addSql('ALTER TABLE hurtowe ALTER rodzaj27 TYPE VARCHAR(3)');
        $this->addSql('ALTER TABLE hurtowe ALTER rodzaj28 TYPE VARCHAR(3)');
        $this->addSql('ALTER TABLE hurtowe ALTER rodzaj29 TYPE VARCHAR(3)');
        $this->addSql('ALTER TABLE hurtowe ALTER rodzaj30 TYPE VARCHAR(3)');
        $this->addSql('ALTER TABLE hurtowe ALTER rodzaj31 TYPE VARCHAR(3)');
        $this->addSql('ALTER TABLE hurtowe ALTER rodzaj32 TYPE VARCHAR(3)');
        $this->addSql('ALTER TABLE hurtowe ALTER rodzaj33 TYPE VARCHAR(3)');
        $this->addSql('ALTER TABLE hurtowe ALTER rodzaj34 TYPE VARCHAR(3)');
        $this->addSql('ALTER TABLE hurtowe ALTER rodzaj35 TYPE VARCHAR(3)');
        $this->addSql('ALTER TABLE hurtowe ALTER rodzaj36 TYPE VARCHAR(3)');
        $this->addSql('ALTER TABLE hurtowe ALTER rodzaj37 TYPE VARCHAR(3)');
        $this->addSql('ALTER TABLE hurtowe ALTER rodzaj38 TYPE VARCHAR(3)');
        $this->addSql('ALTER TABLE hurtowe ALTER rodzaj39 TYPE VARCHAR(3)');
        $this->addSql('ALTER TABLE hurtowe ALTER rodzaj40 TYPE VARCHAR(3)');
    }
}
