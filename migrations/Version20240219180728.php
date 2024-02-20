<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240219180728 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE "user" ADD short_name VARCHAR(50) DEFAULT NULL');
        $this->addSql('ALTER TABLE "user" ADD nip VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE "user" ADD street_and_number VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE "user" ADD postal_code VARCHAR(10) DEFAULT NULL');
        $this->addSql('ALTER TABLE "user" ADD country_id VARCHAR(2) DEFAULT NULL');
        $this->addSql('ALTER TABLE "user" ADD phone VARCHAR(26) DEFAULT NULL');
        $this->addSql('ALTER TABLE "user" ADD bank_account_number VARCHAR(45) DEFAULT NULL');
        $this->addSql('ALTER TABLE user_audit ADD short_name VARCHAR(50) DEFAULT NULL');
        $this->addSql('ALTER TABLE user_audit ADD nip VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE user_audit ADD street_and_number VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE user_audit ADD postal_code VARCHAR(10) DEFAULT NULL');
        $this->addSql('ALTER TABLE user_audit ADD country_id VARCHAR(2) DEFAULT NULL');
        $this->addSql('ALTER TABLE user_audit ADD phone VARCHAR(26) DEFAULT NULL');
        $this->addSql('ALTER TABLE user_audit ADD bank_account_number VARCHAR(45) DEFAULT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('ALTER TABLE "user" DROP short_name');
        $this->addSql('ALTER TABLE "user" DROP nip');
        $this->addSql('ALTER TABLE "user" DROP street_and_number');
        $this->addSql('ALTER TABLE "user" DROP postal_code');
        $this->addSql('ALTER TABLE "user" DROP country_id');
        $this->addSql('ALTER TABLE "user" DROP phone');
        $this->addSql('ALTER TABLE "user" DROP bank_account_number');
        $this->addSql('ALTER TABLE user_audit DROP short_name');
        $this->addSql('ALTER TABLE user_audit DROP nip');
        $this->addSql('ALTER TABLE user_audit DROP street_and_number');
        $this->addSql('ALTER TABLE user_audit DROP postal_code');
        $this->addSql('ALTER TABLE user_audit DROP country_id');
        $this->addSql('ALTER TABLE user_audit DROP phone');
        $this->addSql('ALTER TABLE user_audit DROP bank_account_number');
    }
}
