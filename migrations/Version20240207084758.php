<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240207084758 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE zeszyt DROP wozek1');
        $this->addSql('ALTER TABLE zeszyt DROP wozek2');
        $this->addSql('ALTER TABLE zeszyt DROP wozek3');
        $this->addSql('ALTER TABLE zeszyt DROP wozek4');
        $this->addSql('ALTER TABLE zeszyt DROP wozek5');
        $this->addSql('ALTER TABLE zeszyt DROP wozek6');
        $this->addSql('ALTER TABLE zeszyt DROP wozek7');
        $this->addSql('ALTER TABLE zeszyt DROP wozek8');
        $this->addSql('ALTER TABLE zeszyt DROP wozek9');
        $this->addSql('ALTER TABLE zeszyt DROP wozek10');
        $this->addSql('ALTER TABLE zeszyt DROP wozek11');
        $this->addSql('ALTER TABLE zeszyt DROP wozek12');
        $this->addSql('ALTER TABLE zeszyt DROP wozek13');
        $this->addSql('ALTER TABLE zeszyt DROP wozek14');
        $this->addSql('ALTER TABLE zeszyt DROP wozek15');
        $this->addSql('ALTER TABLE zeszyt DROP wozek16');
        $this->addSql('ALTER TABLE zeszyt DROP wozek17');
        $this->addSql('ALTER TABLE zeszyt DROP wozek18');
        $this->addSql('ALTER TABLE zeszyt DROP wozek19');
        $this->addSql('ALTER TABLE zeszyt DROP wozek20');
        $this->addSql('ALTER TABLE zeszyt DROP wozek21');
        $this->addSql('ALTER TABLE zeszyt DROP wozek22');
        $this->addSql('ALTER TABLE zeszyt DROP wozek23');
        $this->addSql('ALTER TABLE zeszyt DROP wozek24');
        $this->addSql('ALTER TABLE zeszyt DROP wozek25');
        $this->addSql('ALTER TABLE zeszyt DROP wozek26');
        $this->addSql('ALTER TABLE zeszyt DROP wozek27');
        $this->addSql('ALTER TABLE zeszyt DROP wozek28');
        $this->addSql('ALTER TABLE zeszyt DROP wozek29');
        $this->addSql('ALTER TABLE zeszyt DROP wozek30');
        $this->addSql('ALTER TABLE zeszyt DROP wozek31');
        $this->addSql('ALTER TABLE zeszyt DROP wozek32');
        $this->addSql('ALTER TABLE zeszyt DROP wozek33');
        $this->addSql('ALTER TABLE zeszyt DROP wozek34');
        $this->addSql('ALTER TABLE zeszyt DROP wozek35');
        $this->addSql('ALTER TABLE zeszyt DROP wozek36');
        $this->addSql('ALTER TABLE zeszyt DROP wozek37');
        $this->addSql('ALTER TABLE zeszyt DROP wozek38');
        $this->addSql('ALTER TABLE zeszyt DROP wozek39');
        $this->addSql('ALTER TABLE zeszyt DROP wozek40');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('ALTER TABLE zeszyt ADD wozek1 INT DEFAULT NULL');
        $this->addSql('ALTER TABLE zeszyt ADD wozek2 INT DEFAULT NULL');
        $this->addSql('ALTER TABLE zeszyt ADD wozek3 INT DEFAULT NULL');
        $this->addSql('ALTER TABLE zeszyt ADD wozek4 INT DEFAULT NULL');
        $this->addSql('ALTER TABLE zeszyt ADD wozek5 INT DEFAULT NULL');
        $this->addSql('ALTER TABLE zeszyt ADD wozek6 INT DEFAULT NULL');
        $this->addSql('ALTER TABLE zeszyt ADD wozek7 INT DEFAULT NULL');
        $this->addSql('ALTER TABLE zeszyt ADD wozek8 INT DEFAULT NULL');
        $this->addSql('ALTER TABLE zeszyt ADD wozek9 INT DEFAULT NULL');
        $this->addSql('ALTER TABLE zeszyt ADD wozek10 INT DEFAULT NULL');
        $this->addSql('ALTER TABLE zeszyt ADD wozek11 INT DEFAULT NULL');
        $this->addSql('ALTER TABLE zeszyt ADD wozek12 INT DEFAULT NULL');
        $this->addSql('ALTER TABLE zeszyt ADD wozek13 INT DEFAULT NULL');
        $this->addSql('ALTER TABLE zeszyt ADD wozek14 INT DEFAULT NULL');
        $this->addSql('ALTER TABLE zeszyt ADD wozek15 INT DEFAULT NULL');
        $this->addSql('ALTER TABLE zeszyt ADD wozek16 INT DEFAULT NULL');
        $this->addSql('ALTER TABLE zeszyt ADD wozek17 INT DEFAULT NULL');
        $this->addSql('ALTER TABLE zeszyt ADD wozek18 INT DEFAULT NULL');
        $this->addSql('ALTER TABLE zeszyt ADD wozek19 INT DEFAULT NULL');
        $this->addSql('ALTER TABLE zeszyt ADD wozek20 INT DEFAULT NULL');
        $this->addSql('ALTER TABLE zeszyt ADD wozek21 INT DEFAULT NULL');
        $this->addSql('ALTER TABLE zeszyt ADD wozek22 INT DEFAULT NULL');
        $this->addSql('ALTER TABLE zeszyt ADD wozek23 INT DEFAULT NULL');
        $this->addSql('ALTER TABLE zeszyt ADD wozek24 INT DEFAULT NULL');
        $this->addSql('ALTER TABLE zeszyt ADD wozek25 INT DEFAULT NULL');
        $this->addSql('ALTER TABLE zeszyt ADD wozek26 INT DEFAULT NULL');
        $this->addSql('ALTER TABLE zeszyt ADD wozek27 INT DEFAULT NULL');
        $this->addSql('ALTER TABLE zeszyt ADD wozek28 INT DEFAULT NULL');
        $this->addSql('ALTER TABLE zeszyt ADD wozek29 INT DEFAULT NULL');
        $this->addSql('ALTER TABLE zeszyt ADD wozek30 INT DEFAULT NULL');
        $this->addSql('ALTER TABLE zeszyt ADD wozek31 INT DEFAULT NULL');
        $this->addSql('ALTER TABLE zeszyt ADD wozek32 INT DEFAULT NULL');
        $this->addSql('ALTER TABLE zeszyt ADD wozek33 INT DEFAULT NULL');
        $this->addSql('ALTER TABLE zeszyt ADD wozek34 INT DEFAULT NULL');
        $this->addSql('ALTER TABLE zeszyt ADD wozek35 INT DEFAULT NULL');
        $this->addSql('ALTER TABLE zeszyt ADD wozek36 INT DEFAULT NULL');
        $this->addSql('ALTER TABLE zeszyt ADD wozek37 INT DEFAULT NULL');
        $this->addSql('ALTER TABLE zeszyt ADD wozek38 INT DEFAULT NULL');
        $this->addSql('ALTER TABLE zeszyt ADD wozek39 INT DEFAULT NULL');
        $this->addSql('ALTER TABLE zeszyt ADD wozek40 INT DEFAULT NULL');
    }
}
