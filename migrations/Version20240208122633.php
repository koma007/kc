<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240208122633 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE zeszyt ALTER updated_at1 TYPE TIMESTAMP(0) WITHOUT TIME ZONE');
        $this->addSql('ALTER TABLE zeszyt ALTER miesiac TYPE TIMESTAMP(0) WITHOUT TIME ZONE');
        $this->addSql('ALTER TABLE zeszyt ALTER updated_at3 TYPE TIMESTAMP(0) WITHOUT TIME ZONE');
        $this->addSql('ALTER TABLE zeszyt ALTER updated_at4 TYPE TIMESTAMP(0) WITHOUT TIME ZONE');
        $this->addSql('ALTER TABLE zeszyt ALTER updated_at5 TYPE TIMESTAMP(0) WITHOUT TIME ZONE');
        $this->addSql('ALTER TABLE zeszyt ALTER updated_at6 TYPE TIMESTAMP(0) WITHOUT TIME ZONE');
        $this->addSql('ALTER TABLE zeszyt ALTER updated_at7 TYPE TIMESTAMP(0) WITHOUT TIME ZONE');
        $this->addSql('ALTER TABLE zeszyt ALTER updated_at8 TYPE TIMESTAMP(0) WITHOUT TIME ZONE');
        $this->addSql('ALTER TABLE zeszyt ALTER updated_at9 TYPE TIMESTAMP(0) WITHOUT TIME ZONE');
        $this->addSql('ALTER TABLE zeszyt ALTER updated_at10 TYPE TIMESTAMP(0) WITHOUT TIME ZONE');
        $this->addSql('ALTER TABLE zeszyt ALTER updated_at11 TYPE TIMESTAMP(0) WITHOUT TIME ZONE');
        $this->addSql('ALTER TABLE zeszyt ALTER updated_at12 TYPE TIMESTAMP(0) WITHOUT TIME ZONE');
        $this->addSql('ALTER TABLE zeszyt ALTER updated_at13 TYPE TIMESTAMP(0) WITHOUT TIME ZONE');
        $this->addSql('ALTER TABLE zeszyt ALTER updated_at14 TYPE TIMESTAMP(0) WITHOUT TIME ZONE');
        $this->addSql('ALTER TABLE zeszyt ALTER updated_at15 TYPE TIMESTAMP(0) WITHOUT TIME ZONE');
        $this->addSql('ALTER TABLE zeszyt ALTER updated_at16 TYPE TIMESTAMP(0) WITHOUT TIME ZONE');
        $this->addSql('ALTER TABLE zeszyt ALTER updated_at17 TYPE TIMESTAMP(0) WITHOUT TIME ZONE');
        $this->addSql('ALTER TABLE zeszyt ALTER updated_at18 TYPE TIMESTAMP(0) WITHOUT TIME ZONE');
        $this->addSql('ALTER TABLE zeszyt ALTER updated_at19 TYPE TIMESTAMP(0) WITHOUT TIME ZONE');
        $this->addSql('ALTER TABLE zeszyt ALTER updated_at20 TYPE TIMESTAMP(0) WITHOUT TIME ZONE');
        $this->addSql('ALTER TABLE zeszyt ALTER updated_at21 TYPE TIMESTAMP(0) WITHOUT TIME ZONE');
        $this->addSql('ALTER TABLE zeszyt ALTER updated_at22 TYPE TIMESTAMP(0) WITHOUT TIME ZONE');
        $this->addSql('ALTER TABLE zeszyt ALTER updated_at23 TYPE TIMESTAMP(0) WITHOUT TIME ZONE');
        $this->addSql('ALTER TABLE zeszyt ALTER updated_at24 TYPE TIMESTAMP(0) WITHOUT TIME ZONE');
        $this->addSql('ALTER TABLE zeszyt ALTER updated_at25 TYPE TIMESTAMP(0) WITHOUT TIME ZONE');
        $this->addSql('ALTER TABLE zeszyt ALTER updated_at26 TYPE TIMESTAMP(0) WITHOUT TIME ZONE');
        $this->addSql('ALTER TABLE zeszyt ALTER updated_at27 TYPE TIMESTAMP(0) WITHOUT TIME ZONE');
        $this->addSql('ALTER TABLE zeszyt ALTER updated_at28 TYPE TIMESTAMP(0) WITHOUT TIME ZONE');
        $this->addSql('ALTER TABLE zeszyt ALTER updated_at29 TYPE TIMESTAMP(0) WITHOUT TIME ZONE');
        $this->addSql('ALTER TABLE zeszyt ALTER updated_at30 TYPE TIMESTAMP(0) WITHOUT TIME ZONE');
        $this->addSql('ALTER TABLE zeszyt ALTER updated_at31 TYPE TIMESTAMP(0) WITHOUT TIME ZONE');
        $this->addSql('ALTER TABLE zeszyt ALTER updated_at32 TYPE TIMESTAMP(0) WITHOUT TIME ZONE');
        $this->addSql('ALTER TABLE zeszyt ALTER updated_at33 TYPE TIMESTAMP(0) WITHOUT TIME ZONE');
        $this->addSql('ALTER TABLE zeszyt ALTER updated_at34 TYPE TIMESTAMP(0) WITHOUT TIME ZONE');
        $this->addSql('ALTER TABLE zeszyt ALTER updated_at35 TYPE TIMESTAMP(0) WITHOUT TIME ZONE');
        $this->addSql('ALTER TABLE zeszyt ALTER updated_at36 TYPE TIMESTAMP(0) WITHOUT TIME ZONE');
        $this->addSql('ALTER TABLE zeszyt ALTER updated_at37 TYPE TIMESTAMP(0) WITHOUT TIME ZONE');
        $this->addSql('ALTER TABLE zeszyt ALTER updated_at38 TYPE TIMESTAMP(0) WITHOUT TIME ZONE');
        $this->addSql('ALTER TABLE zeszyt ALTER updated_at39 TYPE TIMESTAMP(0) WITHOUT TIME ZONE');
        $this->addSql('ALTER TABLE zeszyt ALTER updated_at40 TYPE TIMESTAMP(0) WITHOUT TIME ZONE');
        $this->addSql('COMMENT ON COLUMN zeszyt.updated_at1 IS NULL');
        $this->addSql('COMMENT ON COLUMN zeszyt.miesiac IS NULL');
        $this->addSql('COMMENT ON COLUMN zeszyt.updated_at3 IS NULL');
        $this->addSql('COMMENT ON COLUMN zeszyt.updated_at4 IS NULL');
        $this->addSql('COMMENT ON COLUMN zeszyt.updated_at5 IS NULL');
        $this->addSql('COMMENT ON COLUMN zeszyt.updated_at6 IS NULL');
        $this->addSql('COMMENT ON COLUMN zeszyt.updated_at7 IS NULL');
        $this->addSql('COMMENT ON COLUMN zeszyt.updated_at8 IS NULL');
        $this->addSql('COMMENT ON COLUMN zeszyt.updated_at9 IS NULL');
        $this->addSql('COMMENT ON COLUMN zeszyt.updated_at10 IS NULL');
        $this->addSql('COMMENT ON COLUMN zeszyt.updated_at11 IS NULL');
        $this->addSql('COMMENT ON COLUMN zeszyt.updated_at12 IS NULL');
        $this->addSql('COMMENT ON COLUMN zeszyt.updated_at13 IS NULL');
        $this->addSql('COMMENT ON COLUMN zeszyt.updated_at14 IS NULL');
        $this->addSql('COMMENT ON COLUMN zeszyt.updated_at15 IS NULL');
        $this->addSql('COMMENT ON COLUMN zeszyt.updated_at16 IS NULL');
        $this->addSql('COMMENT ON COLUMN zeszyt.updated_at17 IS NULL');
        $this->addSql('COMMENT ON COLUMN zeszyt.updated_at18 IS NULL');
        $this->addSql('COMMENT ON COLUMN zeszyt.updated_at19 IS NULL');
        $this->addSql('COMMENT ON COLUMN zeszyt.updated_at20 IS NULL');
        $this->addSql('COMMENT ON COLUMN zeszyt.updated_at21 IS NULL');
        $this->addSql('COMMENT ON COLUMN zeszyt.updated_at22 IS NULL');
        $this->addSql('COMMENT ON COLUMN zeszyt.updated_at23 IS NULL');
        $this->addSql('COMMENT ON COLUMN zeszyt.updated_at24 IS NULL');
        $this->addSql('COMMENT ON COLUMN zeszyt.updated_at25 IS NULL');
        $this->addSql('COMMENT ON COLUMN zeszyt.updated_at26 IS NULL');
        $this->addSql('COMMENT ON COLUMN zeszyt.updated_at27 IS NULL');
        $this->addSql('COMMENT ON COLUMN zeszyt.updated_at28 IS NULL');
        $this->addSql('COMMENT ON COLUMN zeszyt.updated_at29 IS NULL');
        $this->addSql('COMMENT ON COLUMN zeszyt.updated_at30 IS NULL');
        $this->addSql('COMMENT ON COLUMN zeszyt.updated_at31 IS NULL');
        $this->addSql('COMMENT ON COLUMN zeszyt.updated_at32 IS NULL');
        $this->addSql('COMMENT ON COLUMN zeszyt.updated_at33 IS NULL');
        $this->addSql('COMMENT ON COLUMN zeszyt.updated_at34 IS NULL');
        $this->addSql('COMMENT ON COLUMN zeszyt.updated_at35 IS NULL');
        $this->addSql('COMMENT ON COLUMN zeszyt.updated_at36 IS NULL');
        $this->addSql('COMMENT ON COLUMN zeszyt.updated_at37 IS NULL');
        $this->addSql('COMMENT ON COLUMN zeszyt.updated_at38 IS NULL');
        $this->addSql('COMMENT ON COLUMN zeszyt.updated_at39 IS NULL');
        $this->addSql('COMMENT ON COLUMN zeszyt.updated_at40 IS NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('ALTER TABLE zeszyt ALTER updated_at1 TYPE TIMESTAMP(0) WITHOUT TIME ZONE');
        $this->addSql('ALTER TABLE zeszyt ALTER miesiac TYPE DATE');
        $this->addSql('ALTER TABLE zeszyt ALTER updated_at3 TYPE TIMESTAMP(0) WITHOUT TIME ZONE');
        $this->addSql('ALTER TABLE zeszyt ALTER updated_at4 TYPE TIMESTAMP(0) WITHOUT TIME ZONE');
        $this->addSql('ALTER TABLE zeszyt ALTER updated_at5 TYPE TIMESTAMP(0) WITHOUT TIME ZONE');
        $this->addSql('ALTER TABLE zeszyt ALTER updated_at6 TYPE TIMESTAMP(0) WITHOUT TIME ZONE');
        $this->addSql('ALTER TABLE zeszyt ALTER updated_at7 TYPE TIMESTAMP(0) WITHOUT TIME ZONE');
        $this->addSql('ALTER TABLE zeszyt ALTER updated_at8 TYPE TIMESTAMP(0) WITHOUT TIME ZONE');
        $this->addSql('ALTER TABLE zeszyt ALTER updated_at9 TYPE TIMESTAMP(0) WITHOUT TIME ZONE');
        $this->addSql('ALTER TABLE zeszyt ALTER updated_at10 TYPE TIMESTAMP(0) WITHOUT TIME ZONE');
        $this->addSql('ALTER TABLE zeszyt ALTER updated_at11 TYPE TIMESTAMP(0) WITHOUT TIME ZONE');
        $this->addSql('ALTER TABLE zeszyt ALTER updated_at12 TYPE TIMESTAMP(0) WITHOUT TIME ZONE');
        $this->addSql('ALTER TABLE zeszyt ALTER updated_at13 TYPE TIMESTAMP(0) WITHOUT TIME ZONE');
        $this->addSql('ALTER TABLE zeszyt ALTER updated_at14 TYPE TIMESTAMP(0) WITHOUT TIME ZONE');
        $this->addSql('ALTER TABLE zeszyt ALTER updated_at15 TYPE TIMESTAMP(0) WITHOUT TIME ZONE');
        $this->addSql('ALTER TABLE zeszyt ALTER updated_at16 TYPE TIMESTAMP(0) WITHOUT TIME ZONE');
        $this->addSql('ALTER TABLE zeszyt ALTER updated_at17 TYPE TIMESTAMP(0) WITHOUT TIME ZONE');
        $this->addSql('ALTER TABLE zeszyt ALTER updated_at18 TYPE TIMESTAMP(0) WITHOUT TIME ZONE');
        $this->addSql('ALTER TABLE zeszyt ALTER updated_at19 TYPE TIMESTAMP(0) WITHOUT TIME ZONE');
        $this->addSql('ALTER TABLE zeszyt ALTER updated_at20 TYPE TIMESTAMP(0) WITHOUT TIME ZONE');
        $this->addSql('ALTER TABLE zeszyt ALTER updated_at21 TYPE TIMESTAMP(0) WITHOUT TIME ZONE');
        $this->addSql('ALTER TABLE zeszyt ALTER updated_at22 TYPE TIMESTAMP(0) WITHOUT TIME ZONE');
        $this->addSql('ALTER TABLE zeszyt ALTER updated_at23 TYPE TIMESTAMP(0) WITHOUT TIME ZONE');
        $this->addSql('ALTER TABLE zeszyt ALTER updated_at24 TYPE TIMESTAMP(0) WITHOUT TIME ZONE');
        $this->addSql('ALTER TABLE zeszyt ALTER updated_at25 TYPE TIMESTAMP(0) WITHOUT TIME ZONE');
        $this->addSql('ALTER TABLE zeszyt ALTER updated_at26 TYPE TIMESTAMP(0) WITHOUT TIME ZONE');
        $this->addSql('ALTER TABLE zeszyt ALTER updated_at27 TYPE TIMESTAMP(0) WITHOUT TIME ZONE');
        $this->addSql('ALTER TABLE zeszyt ALTER updated_at28 TYPE TIMESTAMP(0) WITHOUT TIME ZONE');
        $this->addSql('ALTER TABLE zeszyt ALTER updated_at29 TYPE TIMESTAMP(0) WITHOUT TIME ZONE');
        $this->addSql('ALTER TABLE zeszyt ALTER updated_at30 TYPE TIMESTAMP(0) WITHOUT TIME ZONE');
        $this->addSql('ALTER TABLE zeszyt ALTER updated_at31 TYPE TIMESTAMP(0) WITHOUT TIME ZONE');
        $this->addSql('ALTER TABLE zeszyt ALTER updated_at32 TYPE TIMESTAMP(0) WITHOUT TIME ZONE');
        $this->addSql('ALTER TABLE zeszyt ALTER updated_at33 TYPE TIMESTAMP(0) WITHOUT TIME ZONE');
        $this->addSql('ALTER TABLE zeszyt ALTER updated_at34 TYPE TIMESTAMP(0) WITHOUT TIME ZONE');
        $this->addSql('ALTER TABLE zeszyt ALTER updated_at35 TYPE TIMESTAMP(0) WITHOUT TIME ZONE');
        $this->addSql('ALTER TABLE zeszyt ALTER updated_at36 TYPE TIMESTAMP(0) WITHOUT TIME ZONE');
        $this->addSql('ALTER TABLE zeszyt ALTER updated_at37 TYPE TIMESTAMP(0) WITHOUT TIME ZONE');
        $this->addSql('ALTER TABLE zeszyt ALTER updated_at38 TYPE TIMESTAMP(0) WITHOUT TIME ZONE');
        $this->addSql('ALTER TABLE zeszyt ALTER updated_at39 TYPE TIMESTAMP(0) WITHOUT TIME ZONE');
        $this->addSql('ALTER TABLE zeszyt ALTER updated_at40 TYPE TIMESTAMP(0) WITHOUT TIME ZONE');
        $this->addSql('COMMENT ON COLUMN zeszyt.updated_at1 IS \'(DC2Type:datetime_immutable)\'');
        $this->addSql('COMMENT ON COLUMN zeszyt.miesiac IS \'(DC2Type:date_immutable)\'');
        $this->addSql('COMMENT ON COLUMN zeszyt.updated_at3 IS \'(DC2Type:datetime_immutable)\'');
        $this->addSql('COMMENT ON COLUMN zeszyt.updated_at4 IS \'(DC2Type:datetime_immutable)\'');
        $this->addSql('COMMENT ON COLUMN zeszyt.updated_at5 IS \'(DC2Type:datetime_immutable)\'');
        $this->addSql('COMMENT ON COLUMN zeszyt.updated_at6 IS \'(DC2Type:datetime_immutable)\'');
        $this->addSql('COMMENT ON COLUMN zeszyt.updated_at7 IS \'(DC2Type:datetime_immutable)\'');
        $this->addSql('COMMENT ON COLUMN zeszyt.updated_at8 IS \'(DC2Type:datetime_immutable)\'');
        $this->addSql('COMMENT ON COLUMN zeszyt.updated_at9 IS \'(DC2Type:datetime_immutable)\'');
        $this->addSql('COMMENT ON COLUMN zeszyt.updated_at10 IS \'(DC2Type:datetime_immutable)\'');
        $this->addSql('COMMENT ON COLUMN zeszyt.updated_at11 IS \'(DC2Type:datetime_immutable)\'');
        $this->addSql('COMMENT ON COLUMN zeszyt.updated_at12 IS \'(DC2Type:datetime_immutable)\'');
        $this->addSql('COMMENT ON COLUMN zeszyt.updated_at13 IS \'(DC2Type:datetime_immutable)\'');
        $this->addSql('COMMENT ON COLUMN zeszyt.updated_at14 IS \'(DC2Type:datetime_immutable)\'');
        $this->addSql('COMMENT ON COLUMN zeszyt.updated_at15 IS \'(DC2Type:datetime_immutable)\'');
        $this->addSql('COMMENT ON COLUMN zeszyt.updated_at16 IS \'(DC2Type:datetime_immutable)\'');
        $this->addSql('COMMENT ON COLUMN zeszyt.updated_at17 IS \'(DC2Type:datetime_immutable)\'');
        $this->addSql('COMMENT ON COLUMN zeszyt.updated_at18 IS \'(DC2Type:datetime_immutable)\'');
        $this->addSql('COMMENT ON COLUMN zeszyt.updated_at19 IS \'(DC2Type:datetime_immutable)\'');
        $this->addSql('COMMENT ON COLUMN zeszyt.updated_at20 IS \'(DC2Type:datetime_immutable)\'');
        $this->addSql('COMMENT ON COLUMN zeszyt.updated_at21 IS \'(DC2Type:datetime_immutable)\'');
        $this->addSql('COMMENT ON COLUMN zeszyt.updated_at22 IS \'(DC2Type:datetime_immutable)\'');
        $this->addSql('COMMENT ON COLUMN zeszyt.updated_at23 IS \'(DC2Type:datetime_immutable)\'');
        $this->addSql('COMMENT ON COLUMN zeszyt.updated_at24 IS \'(DC2Type:datetime_immutable)\'');
        $this->addSql('COMMENT ON COLUMN zeszyt.updated_at25 IS \'(DC2Type:datetime_immutable)\'');
        $this->addSql('COMMENT ON COLUMN zeszyt.updated_at26 IS \'(DC2Type:datetime_immutable)\'');
        $this->addSql('COMMENT ON COLUMN zeszyt.updated_at27 IS \'(DC2Type:datetime_immutable)\'');
        $this->addSql('COMMENT ON COLUMN zeszyt.updated_at28 IS \'(DC2Type:datetime_immutable)\'');
        $this->addSql('COMMENT ON COLUMN zeszyt.updated_at29 IS \'(DC2Type:datetime_immutable)\'');
        $this->addSql('COMMENT ON COLUMN zeszyt.updated_at30 IS \'(DC2Type:datetime_immutable)\'');
        $this->addSql('COMMENT ON COLUMN zeszyt.updated_at31 IS \'(DC2Type:datetime_immutable)\'');
        $this->addSql('COMMENT ON COLUMN zeszyt.updated_at32 IS \'(DC2Type:datetime_immutable)\'');
        $this->addSql('COMMENT ON COLUMN zeszyt.updated_at33 IS \'(DC2Type:datetime_immutable)\'');
        $this->addSql('COMMENT ON COLUMN zeszyt.updated_at34 IS \'(DC2Type:datetime_immutable)\'');
        $this->addSql('COMMENT ON COLUMN zeszyt.updated_at35 IS \'(DC2Type:datetime_immutable)\'');
        $this->addSql('COMMENT ON COLUMN zeszyt.updated_at36 IS \'(DC2Type:datetime_immutable)\'');
        $this->addSql('COMMENT ON COLUMN zeszyt.updated_at37 IS \'(DC2Type:datetime_immutable)\'');
        $this->addSql('COMMENT ON COLUMN zeszyt.updated_at38 IS \'(DC2Type:datetime_immutable)\'');
        $this->addSql('COMMENT ON COLUMN zeszyt.updated_at39 IS \'(DC2Type:datetime_immutable)\'');
        $this->addSql('COMMENT ON COLUMN zeszyt.updated_at40 IS \'(DC2Type:datetime_immutable)\'');
    }
}
