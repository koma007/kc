<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230718152340 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE hurtowe ADD kompozycja21_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE hurtowe ADD kompozycja22_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE hurtowe ADD kompozycja23_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE hurtowe ADD kompozycja24_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE hurtowe ADD sztuk21 INT DEFAULT NULL');
        $this->addSql('ALTER TABLE hurtowe ADD cena21 DOUBLE PRECISION DEFAULT NULL');
        $this->addSql('ALTER TABLE hurtowe ADD wartosc21 DOUBLE PRECISION DEFAULT NULL');
        $this->addSql('ALTER TABLE hurtowe ADD wozek21 INT DEFAULT NULL');
        $this->addSql('ALTER TABLE hurtowe ADD nazwa21 VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE hurtowe ADD sztuk22 INT DEFAULT NULL');
        $this->addSql('ALTER TABLE hurtowe ADD cena22 DOUBLE PRECISION DEFAULT NULL');
        $this->addSql('ALTER TABLE hurtowe ADD wartosc22 DOUBLE PRECISION DEFAULT NULL');
        $this->addSql('ALTER TABLE hurtowe ADD wozek22 INT DEFAULT NULL');
        $this->addSql('ALTER TABLE hurtowe ADD nazwa22 VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE hurtowe ADD sztuk23 INT DEFAULT NULL');
        $this->addSql('ALTER TABLE hurtowe ADD cena23 DOUBLE PRECISION DEFAULT NULL');
        $this->addSql('ALTER TABLE hurtowe ADD wartosc23 DOUBLE PRECISION DEFAULT NULL');
        $this->addSql('ALTER TABLE hurtowe ADD wozek23 INT DEFAULT NULL');
        $this->addSql('ALTER TABLE hurtowe ADD nazwa23 VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE hurtowe ADD sztuk24 INT DEFAULT NULL');
        $this->addSql('ALTER TABLE hurtowe ADD cena24 DOUBLE PRECISION DEFAULT NULL');
        $this->addSql('ALTER TABLE hurtowe ADD wartosc24 DOUBLE PRECISION DEFAULT NULL');
        $this->addSql('ALTER TABLE hurtowe ADD wozek24 INT DEFAULT NULL');
        $this->addSql('ALTER TABLE hurtowe ADD nazwa24 VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE hurtowe ADD CONSTRAINT FK_7B833113AFEE2DC FOREIGN KEY (kompozycja21_id) REFERENCES wyceny (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE hurtowe ADD CONSTRAINT FK_7B83311284B4D32 FOREIGN KEY (kompozycja22_id) REFERENCES wyceny (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE hurtowe ADD CONSTRAINT FK_7B8331190F72A57 FOREIGN KEY (kompozycja23_id) REFERENCES wyceny (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE hurtowe ADD CONSTRAINT FK_7B83311D2012EE FOREIGN KEY (kompozycja24_id) REFERENCES wyceny (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_7B833113AFEE2DC ON hurtowe (kompozycja21_id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_7B83311284B4D32 ON hurtowe (kompozycja22_id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_7B8331190F72A57 ON hurtowe (kompozycja23_id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_7B83311D2012EE ON hurtowe (kompozycja24_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('ALTER TABLE hurtowe DROP CONSTRAINT FK_7B833113AFEE2DC');
        $this->addSql('ALTER TABLE hurtowe DROP CONSTRAINT FK_7B83311284B4D32');
        $this->addSql('ALTER TABLE hurtowe DROP CONSTRAINT FK_7B8331190F72A57');
        $this->addSql('ALTER TABLE hurtowe DROP CONSTRAINT FK_7B83311D2012EE');
        $this->addSql('DROP INDEX UNIQ_7B833113AFEE2DC');
        $this->addSql('DROP INDEX UNIQ_7B83311284B4D32');
        $this->addSql('DROP INDEX UNIQ_7B8331190F72A57');
        $this->addSql('DROP INDEX UNIQ_7B83311D2012EE');
        $this->addSql('ALTER TABLE hurtowe DROP kompozycja21_id');
        $this->addSql('ALTER TABLE hurtowe DROP kompozycja22_id');
        $this->addSql('ALTER TABLE hurtowe DROP kompozycja23_id');
        $this->addSql('ALTER TABLE hurtowe DROP kompozycja24_id');
        $this->addSql('ALTER TABLE hurtowe DROP sztuk21');
        $this->addSql('ALTER TABLE hurtowe DROP cena21');
        $this->addSql('ALTER TABLE hurtowe DROP wartosc21');
        $this->addSql('ALTER TABLE hurtowe DROP wozek21');
        $this->addSql('ALTER TABLE hurtowe DROP nazwa21');
        $this->addSql('ALTER TABLE hurtowe DROP sztuk22');
        $this->addSql('ALTER TABLE hurtowe DROP cena22');
        $this->addSql('ALTER TABLE hurtowe DROP wartosc22');
        $this->addSql('ALTER TABLE hurtowe DROP wozek22');
        $this->addSql('ALTER TABLE hurtowe DROP nazwa22');
        $this->addSql('ALTER TABLE hurtowe DROP sztuk23');
        $this->addSql('ALTER TABLE hurtowe DROP cena23');
        $this->addSql('ALTER TABLE hurtowe DROP wartosc23');
        $this->addSql('ALTER TABLE hurtowe DROP wozek23');
        $this->addSql('ALTER TABLE hurtowe DROP nazwa23');
        $this->addSql('ALTER TABLE hurtowe DROP sztuk24');
        $this->addSql('ALTER TABLE hurtowe DROP cena24');
        $this->addSql('ALTER TABLE hurtowe DROP wartosc24');
        $this->addSql('ALTER TABLE hurtowe DROP wozek24');
        $this->addSql('ALTER TABLE hurtowe DROP nazwa24');
    }
}
