<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230718151813 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE hurtowe ADD kompozycja11_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE hurtowe ADD kompozycja12_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE hurtowe ADD kompozycja13_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE hurtowe ADD kompozycja14_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE hurtowe ADD kompozycja15_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE hurtowe ADD kompozycja16_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE hurtowe ADD kompozycja17_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE hurtowe ADD kompozycja18_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE hurtowe ADD kompozycja19_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE hurtowe ADD kompozycja20_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE hurtowe ADD sztuk11 INT DEFAULT NULL');
        $this->addSql('ALTER TABLE hurtowe ADD cena11 DOUBLE PRECISION DEFAULT NULL');
        $this->addSql('ALTER TABLE hurtowe ADD wartosc11 DOUBLE PRECISION DEFAULT NULL');
        $this->addSql('ALTER TABLE hurtowe ADD wozek11 INT DEFAULT NULL');
        $this->addSql('ALTER TABLE hurtowe ADD nazwa11 VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE hurtowe ADD sztuk12 INT DEFAULT NULL');
        $this->addSql('ALTER TABLE hurtowe ADD cena12 DOUBLE PRECISION DEFAULT NULL');
        $this->addSql('ALTER TABLE hurtowe ADD wartosc12 DOUBLE PRECISION DEFAULT NULL');
        $this->addSql('ALTER TABLE hurtowe ADD wozek12 INT DEFAULT NULL');
        $this->addSql('ALTER TABLE hurtowe ADD nazwa12 VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE hurtowe ADD sztuk13 INT DEFAULT NULL');
        $this->addSql('ALTER TABLE hurtowe ADD cena13 DOUBLE PRECISION DEFAULT NULL');
        $this->addSql('ALTER TABLE hurtowe ADD wartosc13 DOUBLE PRECISION DEFAULT NULL');
        $this->addSql('ALTER TABLE hurtowe ADD wozek13 INT DEFAULT NULL');
        $this->addSql('ALTER TABLE hurtowe ADD nazwa13 VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE hurtowe ADD sztuk14 INT DEFAULT NULL');
        $this->addSql('ALTER TABLE hurtowe ADD cena14 DOUBLE PRECISION DEFAULT NULL');
        $this->addSql('ALTER TABLE hurtowe ADD wartosc14 DOUBLE PRECISION DEFAULT NULL');
        $this->addSql('ALTER TABLE hurtowe ADD wozek14 INT DEFAULT NULL');
        $this->addSql('ALTER TABLE hurtowe ADD nazwa14 VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE hurtowe ADD sztuk15 INT DEFAULT NULL');
        $this->addSql('ALTER TABLE hurtowe ADD cena15 DOUBLE PRECISION DEFAULT NULL');
        $this->addSql('ALTER TABLE hurtowe ADD wartosc15 DOUBLE PRECISION DEFAULT NULL');
        $this->addSql('ALTER TABLE hurtowe ADD wozek15 INT DEFAULT NULL');
        $this->addSql('ALTER TABLE hurtowe ADD nazwa15 VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE hurtowe ADD sztuk16 INT DEFAULT NULL');
        $this->addSql('ALTER TABLE hurtowe ADD cena16 DOUBLE PRECISION DEFAULT NULL');
        $this->addSql('ALTER TABLE hurtowe ADD wartosc16 DOUBLE PRECISION DEFAULT NULL');
        $this->addSql('ALTER TABLE hurtowe ADD wozek16 INT DEFAULT NULL');
        $this->addSql('ALTER TABLE hurtowe ADD nazwa16 VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE hurtowe ADD sztuk17 INT DEFAULT NULL');
        $this->addSql('ALTER TABLE hurtowe ADD cena17 DOUBLE PRECISION DEFAULT NULL');
        $this->addSql('ALTER TABLE hurtowe ADD wartosc17 DOUBLE PRECISION DEFAULT NULL');
        $this->addSql('ALTER TABLE hurtowe ADD wozek17 INT DEFAULT NULL');
        $this->addSql('ALTER TABLE hurtowe ADD nazwa17 VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE hurtowe ADD sztuk18 INT DEFAULT NULL');
        $this->addSql('ALTER TABLE hurtowe ADD cena18 DOUBLE PRECISION DEFAULT NULL');
        $this->addSql('ALTER TABLE hurtowe ADD wartosc18 DOUBLE PRECISION DEFAULT NULL');
        $this->addSql('ALTER TABLE hurtowe ADD wozek18 INT DEFAULT NULL');
        $this->addSql('ALTER TABLE hurtowe ADD nazwa18 VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE hurtowe ADD sztuk19 INT DEFAULT NULL');
        $this->addSql('ALTER TABLE hurtowe ADD cena19 DOUBLE PRECISION DEFAULT NULL');
        $this->addSql('ALTER TABLE hurtowe ADD wartosc19 DOUBLE PRECISION DEFAULT NULL');
        $this->addSql('ALTER TABLE hurtowe ADD wozek19 INT DEFAULT NULL');
        $this->addSql('ALTER TABLE hurtowe ADD nazwa19 VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE hurtowe ADD sztuk20 INT DEFAULT NULL');
        $this->addSql('ALTER TABLE hurtowe ADD cena20 DOUBLE PRECISION DEFAULT NULL');
        $this->addSql('ALTER TABLE hurtowe ADD wartosc20 DOUBLE PRECISION DEFAULT NULL');
        $this->addSql('ALTER TABLE hurtowe ADD wozek20 INT DEFAULT NULL');
        $this->addSql('ALTER TABLE hurtowe ADD nazwa20 VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE hurtowe ADD CONSTRAINT FK_7B833117D5E980C FOREIGN KEY (kompozycja11_id) REFERENCES wyceny (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE hurtowe ADD CONSTRAINT FK_7B833116FEB37E2 FOREIGN KEY (kompozycja12_id) REFERENCES wyceny (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE hurtowe ADD CONSTRAINT FK_7B83311D7575087 FOREIGN KEY (kompozycja13_id) REFERENCES wyceny (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE hurtowe ADD CONSTRAINT FK_7B833114A80683E FOREIGN KEY (kompozycja14_id) REFERENCES wyceny (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE hurtowe ADD CONSTRAINT FK_7B83311F23C0F5B FOREIGN KEY (kompozycja15_id) REFERENCES wyceny (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE hurtowe ADD CONSTRAINT FK_7B83311E089A0B5 FOREIGN KEY (kompozycja16_id) REFERENCES wyceny (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE hurtowe ADD CONSTRAINT FK_7B833115835C7D0 FOREIGN KEY (kompozycja17_id) REFERENCES wyceny (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE hurtowe ADD CONSTRAINT FK_7B8331156D786 FOREIGN KEY (kompozycja18_id) REFERENCES wyceny (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE hurtowe ADD CONSTRAINT FK_7B83311B8EAB0E3 FOREIGN KEY (kompozycja19_id) REFERENCES wyceny (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE hurtowe ADD CONSTRAINT FK_7B83311824285B9 FOREIGN KEY (kompozycja20_id) REFERENCES wyceny (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_7B833117D5E980C ON hurtowe (kompozycja11_id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_7B833116FEB37E2 ON hurtowe (kompozycja12_id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_7B83311D7575087 ON hurtowe (kompozycja13_id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_7B833114A80683E ON hurtowe (kompozycja14_id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_7B83311F23C0F5B ON hurtowe (kompozycja15_id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_7B83311E089A0B5 ON hurtowe (kompozycja16_id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_7B833115835C7D0 ON hurtowe (kompozycja17_id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_7B8331156D786 ON hurtowe (kompozycja18_id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_7B83311B8EAB0E3 ON hurtowe (kompozycja19_id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_7B83311824285B9 ON hurtowe (kompozycja20_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('ALTER TABLE hurtowe DROP CONSTRAINT FK_7B833117D5E980C');
        $this->addSql('ALTER TABLE hurtowe DROP CONSTRAINT FK_7B833116FEB37E2');
        $this->addSql('ALTER TABLE hurtowe DROP CONSTRAINT FK_7B83311D7575087');
        $this->addSql('ALTER TABLE hurtowe DROP CONSTRAINT FK_7B833114A80683E');
        $this->addSql('ALTER TABLE hurtowe DROP CONSTRAINT FK_7B83311F23C0F5B');
        $this->addSql('ALTER TABLE hurtowe DROP CONSTRAINT FK_7B83311E089A0B5');
        $this->addSql('ALTER TABLE hurtowe DROP CONSTRAINT FK_7B833115835C7D0');
        $this->addSql('ALTER TABLE hurtowe DROP CONSTRAINT FK_7B8331156D786');
        $this->addSql('ALTER TABLE hurtowe DROP CONSTRAINT FK_7B83311B8EAB0E3');
        $this->addSql('ALTER TABLE hurtowe DROP CONSTRAINT FK_7B83311824285B9');
        $this->addSql('DROP INDEX UNIQ_7B833117D5E980C');
        $this->addSql('DROP INDEX UNIQ_7B833116FEB37E2');
        $this->addSql('DROP INDEX UNIQ_7B83311D7575087');
        $this->addSql('DROP INDEX UNIQ_7B833114A80683E');
        $this->addSql('DROP INDEX UNIQ_7B83311F23C0F5B');
        $this->addSql('DROP INDEX UNIQ_7B83311E089A0B5');
        $this->addSql('DROP INDEX UNIQ_7B833115835C7D0');
        $this->addSql('DROP INDEX UNIQ_7B8331156D786');
        $this->addSql('DROP INDEX UNIQ_7B83311B8EAB0E3');
        $this->addSql('DROP INDEX UNIQ_7B83311824285B9');
        $this->addSql('ALTER TABLE hurtowe DROP kompozycja11_id');
        $this->addSql('ALTER TABLE hurtowe DROP kompozycja12_id');
        $this->addSql('ALTER TABLE hurtowe DROP kompozycja13_id');
        $this->addSql('ALTER TABLE hurtowe DROP kompozycja14_id');
        $this->addSql('ALTER TABLE hurtowe DROP kompozycja15_id');
        $this->addSql('ALTER TABLE hurtowe DROP kompozycja16_id');
        $this->addSql('ALTER TABLE hurtowe DROP kompozycja17_id');
        $this->addSql('ALTER TABLE hurtowe DROP kompozycja18_id');
        $this->addSql('ALTER TABLE hurtowe DROP kompozycja19_id');
        $this->addSql('ALTER TABLE hurtowe DROP kompozycja20_id');
        $this->addSql('ALTER TABLE hurtowe DROP sztuk11');
        $this->addSql('ALTER TABLE hurtowe DROP cena11');
        $this->addSql('ALTER TABLE hurtowe DROP wartosc11');
        $this->addSql('ALTER TABLE hurtowe DROP wozek11');
        $this->addSql('ALTER TABLE hurtowe DROP nazwa11');
        $this->addSql('ALTER TABLE hurtowe DROP sztuk12');
        $this->addSql('ALTER TABLE hurtowe DROP cena12');
        $this->addSql('ALTER TABLE hurtowe DROP wartosc12');
        $this->addSql('ALTER TABLE hurtowe DROP wozek12');
        $this->addSql('ALTER TABLE hurtowe DROP nazwa12');
        $this->addSql('ALTER TABLE hurtowe DROP sztuk13');
        $this->addSql('ALTER TABLE hurtowe DROP cena13');
        $this->addSql('ALTER TABLE hurtowe DROP wartosc13');
        $this->addSql('ALTER TABLE hurtowe DROP wozek13');
        $this->addSql('ALTER TABLE hurtowe DROP nazwa13');
        $this->addSql('ALTER TABLE hurtowe DROP sztuk14');
        $this->addSql('ALTER TABLE hurtowe DROP cena14');
        $this->addSql('ALTER TABLE hurtowe DROP wartosc14');
        $this->addSql('ALTER TABLE hurtowe DROP wozek14');
        $this->addSql('ALTER TABLE hurtowe DROP nazwa14');
        $this->addSql('ALTER TABLE hurtowe DROP sztuk15');
        $this->addSql('ALTER TABLE hurtowe DROP cena15');
        $this->addSql('ALTER TABLE hurtowe DROP wartosc15');
        $this->addSql('ALTER TABLE hurtowe DROP wozek15');
        $this->addSql('ALTER TABLE hurtowe DROP nazwa15');
        $this->addSql('ALTER TABLE hurtowe DROP sztuk16');
        $this->addSql('ALTER TABLE hurtowe DROP cena16');
        $this->addSql('ALTER TABLE hurtowe DROP wartosc16');
        $this->addSql('ALTER TABLE hurtowe DROP wozek16');
        $this->addSql('ALTER TABLE hurtowe DROP nazwa16');
        $this->addSql('ALTER TABLE hurtowe DROP sztuk17');
        $this->addSql('ALTER TABLE hurtowe DROP cena17');
        $this->addSql('ALTER TABLE hurtowe DROP wartosc17');
        $this->addSql('ALTER TABLE hurtowe DROP wozek17');
        $this->addSql('ALTER TABLE hurtowe DROP nazwa17');
        $this->addSql('ALTER TABLE hurtowe DROP sztuk18');
        $this->addSql('ALTER TABLE hurtowe DROP cena18');
        $this->addSql('ALTER TABLE hurtowe DROP wartosc18');
        $this->addSql('ALTER TABLE hurtowe DROP wozek18');
        $this->addSql('ALTER TABLE hurtowe DROP nazwa18');
        $this->addSql('ALTER TABLE hurtowe DROP sztuk19');
        $this->addSql('ALTER TABLE hurtowe DROP cena19');
        $this->addSql('ALTER TABLE hurtowe DROP wartosc19');
        $this->addSql('ALTER TABLE hurtowe DROP wozek19');
        $this->addSql('ALTER TABLE hurtowe DROP nazwa19');
        $this->addSql('ALTER TABLE hurtowe DROP sztuk20');
        $this->addSql('ALTER TABLE hurtowe DROP cena20');
        $this->addSql('ALTER TABLE hurtowe DROP wartosc20');
        $this->addSql('ALTER TABLE hurtowe DROP wozek20');
        $this->addSql('ALTER TABLE hurtowe DROP nazwa20');
    }
}
