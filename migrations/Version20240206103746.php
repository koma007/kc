<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240206103746 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE zeszyt ADD updated_at2 TIMESTAMP(0) WITHOUT TIME ZONE DEFAULT NULL');
        $this->addSql('ALTER TABLE zeszyt ADD updated_at3 TIMESTAMP(0) WITHOUT TIME ZONE DEFAULT NULL');
        $this->addSql('ALTER TABLE zeszyt ADD updated_at4 TIMESTAMP(0) WITHOUT TIME ZONE DEFAULT NULL');
        $this->addSql('ALTER TABLE zeszyt ADD updated_at5 TIMESTAMP(0) WITHOUT TIME ZONE DEFAULT NULL');
        $this->addSql('ALTER TABLE zeszyt ADD updated_at6 TIMESTAMP(0) WITHOUT TIME ZONE DEFAULT NULL');
        $this->addSql('ALTER TABLE zeszyt ADD updated_at7 TIMESTAMP(0) WITHOUT TIME ZONE DEFAULT NULL');
        $this->addSql('ALTER TABLE zeszyt ADD updated_at8 TIMESTAMP(0) WITHOUT TIME ZONE DEFAULT NULL');
        $this->addSql('ALTER TABLE zeszyt ADD updated_at9 TIMESTAMP(0) WITHOUT TIME ZONE DEFAULT NULL');
        $this->addSql('ALTER TABLE zeszyt ADD updated_at10 TIMESTAMP(0) WITHOUT TIME ZONE DEFAULT NULL');
        $this->addSql('ALTER TABLE zeszyt ADD updated_at11 TIMESTAMP(0) WITHOUT TIME ZONE DEFAULT NULL');
        $this->addSql('ALTER TABLE zeszyt ADD updated_at12 TIMESTAMP(0) WITHOUT TIME ZONE DEFAULT NULL');
        $this->addSql('ALTER TABLE zeszyt ADD updated_at13 TIMESTAMP(0) WITHOUT TIME ZONE DEFAULT NULL');
        $this->addSql('ALTER TABLE zeszyt ADD updated_at14 TIMESTAMP(0) WITHOUT TIME ZONE DEFAULT NULL');
        $this->addSql('ALTER TABLE zeszyt ADD updated_at15 TIMESTAMP(0) WITHOUT TIME ZONE DEFAULT NULL');
        $this->addSql('ALTER TABLE zeszyt ADD updated_at16 TIMESTAMP(0) WITHOUT TIME ZONE DEFAULT NULL');
        $this->addSql('ALTER TABLE zeszyt ADD updated_at17 TIMESTAMP(0) WITHOUT TIME ZONE DEFAULT NULL');
        $this->addSql('ALTER TABLE zeszyt ADD updated_at18 TIMESTAMP(0) WITHOUT TIME ZONE DEFAULT NULL');
        $this->addSql('ALTER TABLE zeszyt ADD updated_at19 TIMESTAMP(0) WITHOUT TIME ZONE DEFAULT NULL');
        $this->addSql('ALTER TABLE zeszyt ADD updated_at20 TIMESTAMP(0) WITHOUT TIME ZONE DEFAULT NULL');
        $this->addSql('ALTER TABLE zeszyt ADD updated_at21 TIMESTAMP(0) WITHOUT TIME ZONE DEFAULT NULL');
        $this->addSql('ALTER TABLE zeszyt ADD updated_at22 TIMESTAMP(0) WITHOUT TIME ZONE DEFAULT NULL');
        $this->addSql('ALTER TABLE zeszyt ADD updated_at23 TIMESTAMP(0) WITHOUT TIME ZONE DEFAULT NULL');
        $this->addSql('ALTER TABLE zeszyt ADD updated_at24 TIMESTAMP(0) WITHOUT TIME ZONE DEFAULT NULL');
        $this->addSql('ALTER TABLE zeszyt ADD updated_at25 TIMESTAMP(0) WITHOUT TIME ZONE DEFAULT NULL');
        $this->addSql('ALTER TABLE zeszyt ADD updated_at26 TIMESTAMP(0) WITHOUT TIME ZONE DEFAULT NULL');
        $this->addSql('ALTER TABLE zeszyt ADD updated_at27 TIMESTAMP(0) WITHOUT TIME ZONE DEFAULT NULL');
        $this->addSql('ALTER TABLE zeszyt ADD updated_at28 TIMESTAMP(0) WITHOUT TIME ZONE DEFAULT NULL');
        $this->addSql('ALTER TABLE zeszyt ADD updated_at29 TIMESTAMP(0) WITHOUT TIME ZONE DEFAULT NULL');
        $this->addSql('ALTER TABLE zeszyt ADD updated_at30 TIMESTAMP(0) WITHOUT TIME ZONE DEFAULT NULL');
        $this->addSql('ALTER TABLE zeszyt ADD updated_at31 TIMESTAMP(0) WITHOUT TIME ZONE DEFAULT NULL');
        $this->addSql('ALTER TABLE zeszyt ADD updated_at32 TIMESTAMP(0) WITHOUT TIME ZONE DEFAULT NULL');
        $this->addSql('ALTER TABLE zeszyt ADD updated_at33 TIMESTAMP(0) WITHOUT TIME ZONE DEFAULT NULL');
        $this->addSql('ALTER TABLE zeszyt ADD updated_at34 TIMESTAMP(0) WITHOUT TIME ZONE DEFAULT NULL');
        $this->addSql('ALTER TABLE zeszyt ADD updated_at35 TIMESTAMP(0) WITHOUT TIME ZONE DEFAULT NULL');
        $this->addSql('ALTER TABLE zeszyt ADD updated_at36 TIMESTAMP(0) WITHOUT TIME ZONE DEFAULT NULL');
        $this->addSql('ALTER TABLE zeszyt ADD updated_at37 TIMESTAMP(0) WITHOUT TIME ZONE DEFAULT NULL');
        $this->addSql('ALTER TABLE zeszyt ADD updated_at38 TIMESTAMP(0) WITHOUT TIME ZONE DEFAULT NULL');
        $this->addSql('ALTER TABLE zeszyt ADD updated_at39 TIMESTAMP(0) WITHOUT TIME ZONE DEFAULT NULL');
        $this->addSql('ALTER TABLE zeszyt ADD updated_at40 TIMESTAMP(0) WITHOUT TIME ZONE DEFAULT NULL');
        $this->addSql('COMMENT ON COLUMN zeszyt.updated_at2 IS \'(DC2Type:datetime_immutable)\'');
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

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('ALTER TABLE zeszyt DROP updated_at2');
        $this->addSql('ALTER TABLE zeszyt DROP updated_at3');
        $this->addSql('ALTER TABLE zeszyt DROP updated_at4');
        $this->addSql('ALTER TABLE zeszyt DROP updated_at5');
        $this->addSql('ALTER TABLE zeszyt DROP updated_at6');
        $this->addSql('ALTER TABLE zeszyt DROP updated_at7');
        $this->addSql('ALTER TABLE zeszyt DROP updated_at8');
        $this->addSql('ALTER TABLE zeszyt DROP updated_at9');
        $this->addSql('ALTER TABLE zeszyt DROP updated_at10');
        $this->addSql('ALTER TABLE zeszyt DROP updated_at11');
        $this->addSql('ALTER TABLE zeszyt DROP updated_at12');
        $this->addSql('ALTER TABLE zeszyt DROP updated_at13');
        $this->addSql('ALTER TABLE zeszyt DROP updated_at14');
        $this->addSql('ALTER TABLE zeszyt DROP updated_at15');
        $this->addSql('ALTER TABLE zeszyt DROP updated_at16');
        $this->addSql('ALTER TABLE zeszyt DROP updated_at17');
        $this->addSql('ALTER TABLE zeszyt DROP updated_at18');
        $this->addSql('ALTER TABLE zeszyt DROP updated_at19');
        $this->addSql('ALTER TABLE zeszyt DROP updated_at20');
        $this->addSql('ALTER TABLE zeszyt DROP updated_at21');
        $this->addSql('ALTER TABLE zeszyt DROP updated_at22');
        $this->addSql('ALTER TABLE zeszyt DROP updated_at23');
        $this->addSql('ALTER TABLE zeszyt DROP updated_at24');
        $this->addSql('ALTER TABLE zeszyt DROP updated_at25');
        $this->addSql('ALTER TABLE zeszyt DROP updated_at26');
        $this->addSql('ALTER TABLE zeszyt DROP updated_at27');
        $this->addSql('ALTER TABLE zeszyt DROP updated_at28');
        $this->addSql('ALTER TABLE zeszyt DROP updated_at29');
        $this->addSql('ALTER TABLE zeszyt DROP updated_at30');
        $this->addSql('ALTER TABLE zeszyt DROP updated_at31');
        $this->addSql('ALTER TABLE zeszyt DROP updated_at32');
        $this->addSql('ALTER TABLE zeszyt DROP updated_at33');
        $this->addSql('ALTER TABLE zeszyt DROP updated_at34');
        $this->addSql('ALTER TABLE zeszyt DROP updated_at35');
        $this->addSql('ALTER TABLE zeszyt DROP updated_at36');
        $this->addSql('ALTER TABLE zeszyt DROP updated_at37');
        $this->addSql('ALTER TABLE zeszyt DROP updated_at38');
        $this->addSql('ALTER TABLE zeszyt DROP updated_at39');
        $this->addSql('ALTER TABLE zeszyt DROP updated_at40');
    }
}
