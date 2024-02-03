<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240202155605 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP INDEX uniq_c3d0e25751e53502');
        $this->addSql('CREATE INDEX IDX_C3D0E25751E53502 ON zeszyt (pracownik_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('DROP INDEX IDX_C3D0E25751E53502');
        $this->addSql('CREATE UNIQUE INDEX uniq_c3d0e25751e53502 ON zeszyt (pracownik_id)');
    }
}
