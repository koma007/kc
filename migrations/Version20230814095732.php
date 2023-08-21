<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230814095732 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE wyceny ADD blokuj_marza_solo BOOLEAN DEFAULT NULL');
        $this->addSql('ALTER TABLE wyceny ADD blokuj_marza_wazon BOOLEAN DEFAULT NULL');
        $this->addSql('ALTER TABLE wyceny_audit ADD blokuj_marza_solo BOOLEAN DEFAULT NULL');
        $this->addSql('ALTER TABLE wyceny_audit ADD blokuj_marza_wazon BOOLEAN DEFAULT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('ALTER TABLE wyceny DROP blokuj_marza_solo');
        $this->addSql('ALTER TABLE wyceny DROP blokuj_marza_wazon');
        $this->addSql('ALTER TABLE wyceny_audit DROP blokuj_marza_solo');
        $this->addSql('ALTER TABLE wyceny_audit DROP blokuj_marza_wazon');
    }
}
