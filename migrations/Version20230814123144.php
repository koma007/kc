<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230814123144 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE wyceny ALTER sztuk1 TYPE DOUBLE PRECISION');
        $this->addSql('ALTER TABLE wyceny ALTER sztuk2 TYPE DOUBLE PRECISION');
        $this->addSql('ALTER TABLE wyceny ALTER sztuk3 TYPE DOUBLE PRECISION');
        $this->addSql('ALTER TABLE wyceny ALTER sztuk4 TYPE DOUBLE PRECISION');
        $this->addSql('ALTER TABLE wyceny ALTER sztuk5 TYPE DOUBLE PRECISION');
        $this->addSql('ALTER TABLE wyceny ALTER sztuk6 TYPE DOUBLE PRECISION');
        $this->addSql('ALTER TABLE wyceny ALTER sztuk7 TYPE DOUBLE PRECISION');
        $this->addSql('ALTER TABLE wyceny ALTER sztuk8 TYPE DOUBLE PRECISION');
        $this->addSql('ALTER TABLE wyceny ALTER sztuk9 TYPE DOUBLE PRECISION');
        $this->addSql('ALTER TABLE wyceny ALTER sztuk10 TYPE DOUBLE PRECISION');
        $this->addSql('ALTER TABLE wyceny ALTER sztuk11 TYPE DOUBLE PRECISION');
        $this->addSql('ALTER TABLE wyceny ALTER sztuk12 TYPE DOUBLE PRECISION');
        $this->addSql('ALTER TABLE wyceny ALTER sztuk13 TYPE DOUBLE PRECISION');
        $this->addSql('ALTER TABLE wyceny ALTER sztuk14 TYPE DOUBLE PRECISION');
        $this->addSql('ALTER TABLE wyceny ALTER sztuk15 TYPE DOUBLE PRECISION');
        $this->addSql('ALTER TABLE wyceny ALTER sztuk16 TYPE DOUBLE PRECISION');
        $this->addSql('ALTER TABLE wyceny ALTER sztuk17 TYPE DOUBLE PRECISION');
        $this->addSql('ALTER TABLE wyceny ALTER sztuk18 TYPE DOUBLE PRECISION');
        $this->addSql('ALTER TABLE wyceny ALTER sztuk19 TYPE DOUBLE PRECISION');
        $this->addSql('ALTER TABLE wyceny ALTER sztuk20 TYPE DOUBLE PRECISION');
        $this->addSql('ALTER TABLE wyceny ALTER sztuk21 TYPE DOUBLE PRECISION');
        $this->addSql('ALTER TABLE wyceny ALTER sztuk22 TYPE DOUBLE PRECISION');
        $this->addSql('ALTER TABLE wyceny ALTER sztuk23 TYPE DOUBLE PRECISION');
        $this->addSql('ALTER TABLE wyceny ALTER sztuk24 TYPE DOUBLE PRECISION');
        $this->addSql('ALTER TABLE wyceny ALTER sztuk25 TYPE DOUBLE PRECISION');
        $this->addSql('ALTER TABLE wyceny ALTER sztuk26 TYPE DOUBLE PRECISION');
        $this->addSql('ALTER TABLE wyceny ALTER sztuk27 TYPE DOUBLE PRECISION');
        $this->addSql('ALTER TABLE wyceny ALTER sztuk28 TYPE DOUBLE PRECISION');
        $this->addSql('ALTER TABLE wyceny ALTER sztuk29 TYPE DOUBLE PRECISION');
        $this->addSql('ALTER TABLE wyceny ALTER sztuk30 TYPE DOUBLE PRECISION');
        $this->addSql('ALTER TABLE wyceny ALTER sztuk31 TYPE DOUBLE PRECISION');
        $this->addSql('ALTER TABLE wyceny ALTER sztuk32 TYPE DOUBLE PRECISION');
        $this->addSql('ALTER TABLE wyceny ALTER sztuk33 TYPE DOUBLE PRECISION');
        $this->addSql('ALTER TABLE wyceny ALTER sztuk34 TYPE DOUBLE PRECISION');
        $this->addSql('ALTER TABLE wyceny ALTER sztuk35 TYPE DOUBLE PRECISION');
        $this->addSql('ALTER TABLE wyceny ALTER sztuk36 TYPE DOUBLE PRECISION');
        $this->addSql('ALTER TABLE wyceny ALTER sztuk37 TYPE DOUBLE PRECISION');
        $this->addSql('ALTER TABLE wyceny ALTER sztuk38 TYPE DOUBLE PRECISION');
        $this->addSql('ALTER TABLE wyceny ALTER sztuk39 TYPE DOUBLE PRECISION');
        $this->addSql('ALTER TABLE wyceny_audit ALTER sztuk1 TYPE DOUBLE PRECISION');
        $this->addSql('ALTER TABLE wyceny_audit ALTER sztuk2 TYPE DOUBLE PRECISION');
        $this->addSql('ALTER TABLE wyceny_audit ALTER sztuk3 TYPE DOUBLE PRECISION');
        $this->addSql('ALTER TABLE wyceny_audit ALTER sztuk4 TYPE DOUBLE PRECISION');
        $this->addSql('ALTER TABLE wyceny_audit ALTER sztuk5 TYPE DOUBLE PRECISION');
        $this->addSql('ALTER TABLE wyceny_audit ALTER sztuk6 TYPE DOUBLE PRECISION');
        $this->addSql('ALTER TABLE wyceny_audit ALTER sztuk7 TYPE DOUBLE PRECISION');
        $this->addSql('ALTER TABLE wyceny_audit ALTER sztuk8 TYPE DOUBLE PRECISION');
        $this->addSql('ALTER TABLE wyceny_audit ALTER sztuk9 TYPE DOUBLE PRECISION');
        $this->addSql('ALTER TABLE wyceny_audit ALTER sztuk10 TYPE DOUBLE PRECISION');
        $this->addSql('ALTER TABLE wyceny_audit ALTER sztuk11 TYPE DOUBLE PRECISION');
        $this->addSql('ALTER TABLE wyceny_audit ALTER sztuk12 TYPE DOUBLE PRECISION');
        $this->addSql('ALTER TABLE wyceny_audit ALTER sztuk13 TYPE DOUBLE PRECISION');
        $this->addSql('ALTER TABLE wyceny_audit ALTER sztuk14 TYPE DOUBLE PRECISION');
        $this->addSql('ALTER TABLE wyceny_audit ALTER sztuk15 TYPE DOUBLE PRECISION');
        $this->addSql('ALTER TABLE wyceny_audit ALTER sztuk16 TYPE DOUBLE PRECISION');
        $this->addSql('ALTER TABLE wyceny_audit ALTER sztuk17 TYPE DOUBLE PRECISION');
        $this->addSql('ALTER TABLE wyceny_audit ALTER sztuk18 TYPE DOUBLE PRECISION');
        $this->addSql('ALTER TABLE wyceny_audit ALTER sztuk19 TYPE DOUBLE PRECISION');
        $this->addSql('ALTER TABLE wyceny_audit ALTER sztuk20 TYPE DOUBLE PRECISION');
        $this->addSql('ALTER TABLE wyceny_audit ALTER sztuk21 TYPE DOUBLE PRECISION');
        $this->addSql('ALTER TABLE wyceny_audit ALTER sztuk22 TYPE DOUBLE PRECISION');
        $this->addSql('ALTER TABLE wyceny_audit ALTER sztuk23 TYPE DOUBLE PRECISION');
        $this->addSql('ALTER TABLE wyceny_audit ALTER sztuk24 TYPE DOUBLE PRECISION');
        $this->addSql('ALTER TABLE wyceny_audit ALTER sztuk25 TYPE DOUBLE PRECISION');
        $this->addSql('ALTER TABLE wyceny_audit ALTER sztuk26 TYPE DOUBLE PRECISION');
        $this->addSql('ALTER TABLE wyceny_audit ALTER sztuk27 TYPE DOUBLE PRECISION');
        $this->addSql('ALTER TABLE wyceny_audit ALTER sztuk28 TYPE DOUBLE PRECISION');
        $this->addSql('ALTER TABLE wyceny_audit ALTER sztuk29 TYPE DOUBLE PRECISION');
        $this->addSql('ALTER TABLE wyceny_audit ALTER sztuk30 TYPE DOUBLE PRECISION');
        $this->addSql('ALTER TABLE wyceny_audit ALTER sztuk31 TYPE DOUBLE PRECISION');
        $this->addSql('ALTER TABLE wyceny_audit ALTER sztuk32 TYPE DOUBLE PRECISION');
        $this->addSql('ALTER TABLE wyceny_audit ALTER sztuk33 TYPE DOUBLE PRECISION');
        $this->addSql('ALTER TABLE wyceny_audit ALTER sztuk34 TYPE DOUBLE PRECISION');
        $this->addSql('ALTER TABLE wyceny_audit ALTER sztuk35 TYPE DOUBLE PRECISION');
        $this->addSql('ALTER TABLE wyceny_audit ALTER sztuk36 TYPE DOUBLE PRECISION');
        $this->addSql('ALTER TABLE wyceny_audit ALTER sztuk37 TYPE DOUBLE PRECISION');
        $this->addSql('ALTER TABLE wyceny_audit ALTER sztuk38 TYPE DOUBLE PRECISION');
        $this->addSql('ALTER TABLE wyceny_audit ALTER sztuk39 TYPE DOUBLE PRECISION');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('ALTER TABLE wyceny ALTER sztuk1 TYPE INT');
        $this->addSql('ALTER TABLE wyceny ALTER sztuk2 TYPE INT');
        $this->addSql('ALTER TABLE wyceny ALTER sztuk3 TYPE INT');
        $this->addSql('ALTER TABLE wyceny ALTER sztuk4 TYPE INT');
        $this->addSql('ALTER TABLE wyceny ALTER sztuk5 TYPE INT');
        $this->addSql('ALTER TABLE wyceny ALTER sztuk6 TYPE INT');
        $this->addSql('ALTER TABLE wyceny ALTER sztuk7 TYPE INT');
        $this->addSql('ALTER TABLE wyceny ALTER sztuk8 TYPE INT');
        $this->addSql('ALTER TABLE wyceny ALTER sztuk9 TYPE INT');
        $this->addSql('ALTER TABLE wyceny ALTER sztuk10 TYPE INT');
        $this->addSql('ALTER TABLE wyceny ALTER sztuk11 TYPE INT');
        $this->addSql('ALTER TABLE wyceny ALTER sztuk12 TYPE INT');
        $this->addSql('ALTER TABLE wyceny ALTER sztuk13 TYPE INT');
        $this->addSql('ALTER TABLE wyceny ALTER sztuk14 TYPE INT');
        $this->addSql('ALTER TABLE wyceny ALTER sztuk15 TYPE INT');
        $this->addSql('ALTER TABLE wyceny ALTER sztuk16 TYPE INT');
        $this->addSql('ALTER TABLE wyceny ALTER sztuk17 TYPE INT');
        $this->addSql('ALTER TABLE wyceny ALTER sztuk18 TYPE INT');
        $this->addSql('ALTER TABLE wyceny ALTER sztuk19 TYPE INT');
        $this->addSql('ALTER TABLE wyceny ALTER sztuk20 TYPE INT');
        $this->addSql('ALTER TABLE wyceny ALTER sztuk21 TYPE INT');
        $this->addSql('ALTER TABLE wyceny ALTER sztuk22 TYPE INT');
        $this->addSql('ALTER TABLE wyceny ALTER sztuk23 TYPE INT');
        $this->addSql('ALTER TABLE wyceny ALTER sztuk24 TYPE INT');
        $this->addSql('ALTER TABLE wyceny ALTER sztuk25 TYPE INT');
        $this->addSql('ALTER TABLE wyceny ALTER sztuk26 TYPE INT');
        $this->addSql('ALTER TABLE wyceny ALTER sztuk27 TYPE INT');
        $this->addSql('ALTER TABLE wyceny ALTER sztuk28 TYPE INT');
        $this->addSql('ALTER TABLE wyceny ALTER sztuk29 TYPE INT');
        $this->addSql('ALTER TABLE wyceny ALTER sztuk30 TYPE INT');
        $this->addSql('ALTER TABLE wyceny ALTER sztuk31 TYPE INT');
        $this->addSql('ALTER TABLE wyceny ALTER sztuk32 TYPE INT');
        $this->addSql('ALTER TABLE wyceny ALTER sztuk33 TYPE INT');
        $this->addSql('ALTER TABLE wyceny ALTER sztuk34 TYPE INT');
        $this->addSql('ALTER TABLE wyceny ALTER sztuk35 TYPE INT');
        $this->addSql('ALTER TABLE wyceny ALTER sztuk36 TYPE INT');
        $this->addSql('ALTER TABLE wyceny ALTER sztuk37 TYPE INT');
        $this->addSql('ALTER TABLE wyceny ALTER sztuk38 TYPE INT');
        $this->addSql('ALTER TABLE wyceny ALTER sztuk39 TYPE INT');
        $this->addSql('ALTER TABLE wyceny_audit ALTER sztuk1 TYPE INT');
        $this->addSql('ALTER TABLE wyceny_audit ALTER sztuk2 TYPE INT');
        $this->addSql('ALTER TABLE wyceny_audit ALTER sztuk3 TYPE INT');
        $this->addSql('ALTER TABLE wyceny_audit ALTER sztuk4 TYPE INT');
        $this->addSql('ALTER TABLE wyceny_audit ALTER sztuk5 TYPE INT');
        $this->addSql('ALTER TABLE wyceny_audit ALTER sztuk6 TYPE INT');
        $this->addSql('ALTER TABLE wyceny_audit ALTER sztuk7 TYPE INT');
        $this->addSql('ALTER TABLE wyceny_audit ALTER sztuk8 TYPE INT');
        $this->addSql('ALTER TABLE wyceny_audit ALTER sztuk9 TYPE INT');
        $this->addSql('ALTER TABLE wyceny_audit ALTER sztuk10 TYPE INT');
        $this->addSql('ALTER TABLE wyceny_audit ALTER sztuk11 TYPE INT');
        $this->addSql('ALTER TABLE wyceny_audit ALTER sztuk12 TYPE INT');
        $this->addSql('ALTER TABLE wyceny_audit ALTER sztuk13 TYPE INT');
        $this->addSql('ALTER TABLE wyceny_audit ALTER sztuk14 TYPE INT');
        $this->addSql('ALTER TABLE wyceny_audit ALTER sztuk15 TYPE INT');
        $this->addSql('ALTER TABLE wyceny_audit ALTER sztuk16 TYPE INT');
        $this->addSql('ALTER TABLE wyceny_audit ALTER sztuk17 TYPE INT');
        $this->addSql('ALTER TABLE wyceny_audit ALTER sztuk18 TYPE INT');
        $this->addSql('ALTER TABLE wyceny_audit ALTER sztuk19 TYPE INT');
        $this->addSql('ALTER TABLE wyceny_audit ALTER sztuk20 TYPE INT');
        $this->addSql('ALTER TABLE wyceny_audit ALTER sztuk21 TYPE INT');
        $this->addSql('ALTER TABLE wyceny_audit ALTER sztuk22 TYPE INT');
        $this->addSql('ALTER TABLE wyceny_audit ALTER sztuk23 TYPE INT');
        $this->addSql('ALTER TABLE wyceny_audit ALTER sztuk24 TYPE INT');
        $this->addSql('ALTER TABLE wyceny_audit ALTER sztuk25 TYPE INT');
        $this->addSql('ALTER TABLE wyceny_audit ALTER sztuk26 TYPE INT');
        $this->addSql('ALTER TABLE wyceny_audit ALTER sztuk27 TYPE INT');
        $this->addSql('ALTER TABLE wyceny_audit ALTER sztuk28 TYPE INT');
        $this->addSql('ALTER TABLE wyceny_audit ALTER sztuk29 TYPE INT');
        $this->addSql('ALTER TABLE wyceny_audit ALTER sztuk30 TYPE INT');
        $this->addSql('ALTER TABLE wyceny_audit ALTER sztuk31 TYPE INT');
        $this->addSql('ALTER TABLE wyceny_audit ALTER sztuk32 TYPE INT');
        $this->addSql('ALTER TABLE wyceny_audit ALTER sztuk33 TYPE INT');
        $this->addSql('ALTER TABLE wyceny_audit ALTER sztuk34 TYPE INT');
        $this->addSql('ALTER TABLE wyceny_audit ALTER sztuk35 TYPE INT');
        $this->addSql('ALTER TABLE wyceny_audit ALTER sztuk36 TYPE INT');
        $this->addSql('ALTER TABLE wyceny_audit ALTER sztuk37 TYPE INT');
        $this->addSql('ALTER TABLE wyceny_audit ALTER sztuk38 TYPE INT');
        $this->addSql('ALTER TABLE wyceny_audit ALTER sztuk39 TYPE INT');
    }
}
