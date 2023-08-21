<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230720091626 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE hurtowe ADD rodzaj1 VARCHAR(3) DEFAULT NULL');
        $this->addSql('ALTER TABLE hurtowe ADD rodzaj2 VARCHAR(3) DEFAULT NULL');
        $this->addSql('ALTER TABLE hurtowe ADD rodzaj3 VARCHAR(3) DEFAULT NULL');
        $this->addSql('ALTER TABLE hurtowe ADD rodzaj4 VARCHAR(3) DEFAULT NULL');
        $this->addSql('ALTER TABLE hurtowe ADD rodzaj5 VARCHAR(3) DEFAULT NULL');
        $this->addSql('ALTER TABLE hurtowe ADD rodzaj6 VARCHAR(3) DEFAULT NULL');
        $this->addSql('ALTER TABLE hurtowe ADD rodzaj7 VARCHAR(3) DEFAULT NULL');
        $this->addSql('ALTER TABLE hurtowe ADD rodzaj8 VARCHAR(3) DEFAULT NULL');
        $this->addSql('ALTER TABLE hurtowe ADD rodzaj9 VARCHAR(3) DEFAULT NULL');
        $this->addSql('ALTER TABLE hurtowe ADD rodzaj10 VARCHAR(3) DEFAULT NULL');
        $this->addSql('ALTER TABLE hurtowe ADD rodzaj11 VARCHAR(3) DEFAULT NULL');
        $this->addSql('ALTER TABLE hurtowe ADD rodzaj12 VARCHAR(3) DEFAULT NULL');
        $this->addSql('ALTER TABLE hurtowe ADD rodzaj13 VARCHAR(3) DEFAULT NULL');
        $this->addSql('ALTER TABLE hurtowe ADD rodzaj14 VARCHAR(3) DEFAULT NULL');
        $this->addSql('ALTER TABLE hurtowe ADD rodzaj15 VARCHAR(3) DEFAULT NULL');
        $this->addSql('ALTER TABLE hurtowe ADD rodzaj16 VARCHAR(3) DEFAULT NULL');
        $this->addSql('ALTER TABLE hurtowe ADD rodzaj17 VARCHAR(3) DEFAULT NULL');
        $this->addSql('ALTER TABLE hurtowe ADD rodzaj18 VARCHAR(3) DEFAULT NULL');
        $this->addSql('ALTER TABLE hurtowe ADD rodzaj19 VARCHAR(3) DEFAULT NULL');
        $this->addSql('ALTER TABLE hurtowe ADD rodzaj20 VARCHAR(3) DEFAULT NULL');
        $this->addSql('ALTER TABLE hurtowe ADD rodzaj21 VARCHAR(3) DEFAULT NULL');
        $this->addSql('ALTER TABLE hurtowe ADD rodzaj22 VARCHAR(3) DEFAULT NULL');
        $this->addSql('ALTER TABLE hurtowe ADD rodzaj23 VARCHAR(3) DEFAULT NULL');
        $this->addSql('ALTER TABLE hurtowe ADD rodzaj24 VARCHAR(3) DEFAULT NULL');
        $this->addSql('ALTER TABLE hurtowe ADD rodzaj25 VARCHAR(3) DEFAULT NULL');
        $this->addSql('ALTER TABLE hurtowe ADD rodzaj26 VARCHAR(3) DEFAULT NULL');
        $this->addSql('ALTER TABLE hurtowe ADD rodzaj27 VARCHAR(3) DEFAULT NULL');
        $this->addSql('ALTER TABLE hurtowe ADD rodzaj28 VARCHAR(3) DEFAULT NULL');
        $this->addSql('ALTER TABLE hurtowe ADD rodzaj29 VARCHAR(3) DEFAULT NULL');
        $this->addSql('ALTER TABLE hurtowe ADD rodzaj30 VARCHAR(3) DEFAULT NULL');
        $this->addSql('ALTER TABLE hurtowe ADD rodzaj31 VARCHAR(3) DEFAULT NULL');
        $this->addSql('ALTER TABLE hurtowe ADD rodzaj32 VARCHAR(3) DEFAULT NULL');
        $this->addSql('ALTER TABLE hurtowe ADD rodzaj33 VARCHAR(3) DEFAULT NULL');
        $this->addSql('ALTER TABLE hurtowe ADD rodzaj34 VARCHAR(3) DEFAULT NULL');
        $this->addSql('ALTER TABLE hurtowe ADD rodzaj35 VARCHAR(3) DEFAULT NULL');
        $this->addSql('ALTER TABLE hurtowe ADD rodzaj36 VARCHAR(3) DEFAULT NULL');
        $this->addSql('ALTER TABLE hurtowe ADD rodzaj37 VARCHAR(3) DEFAULT NULL');
        $this->addSql('ALTER TABLE hurtowe ADD rodzaj38 VARCHAR(3) DEFAULT NULL');
        $this->addSql('ALTER TABLE hurtowe ADD rodzaj39 VARCHAR(3) DEFAULT NULL');
        $this->addSql('ALTER TABLE hurtowe ADD rodzaj40 VARCHAR(3) DEFAULT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('ALTER TABLE hurtowe DROP rodzaj1');
        $this->addSql('ALTER TABLE hurtowe DROP rodzaj2');
        $this->addSql('ALTER TABLE hurtowe DROP rodzaj3');
        $this->addSql('ALTER TABLE hurtowe DROP rodzaj4');
        $this->addSql('ALTER TABLE hurtowe DROP rodzaj5');
        $this->addSql('ALTER TABLE hurtowe DROP rodzaj6');
        $this->addSql('ALTER TABLE hurtowe DROP rodzaj7');
        $this->addSql('ALTER TABLE hurtowe DROP rodzaj8');
        $this->addSql('ALTER TABLE hurtowe DROP rodzaj9');
        $this->addSql('ALTER TABLE hurtowe DROP rodzaj10');
        $this->addSql('ALTER TABLE hurtowe DROP rodzaj11');
        $this->addSql('ALTER TABLE hurtowe DROP rodzaj12');
        $this->addSql('ALTER TABLE hurtowe DROP rodzaj13');
        $this->addSql('ALTER TABLE hurtowe DROP rodzaj14');
        $this->addSql('ALTER TABLE hurtowe DROP rodzaj15');
        $this->addSql('ALTER TABLE hurtowe DROP rodzaj16');
        $this->addSql('ALTER TABLE hurtowe DROP rodzaj17');
        $this->addSql('ALTER TABLE hurtowe DROP rodzaj18');
        $this->addSql('ALTER TABLE hurtowe DROP rodzaj19');
        $this->addSql('ALTER TABLE hurtowe DROP rodzaj20');
        $this->addSql('ALTER TABLE hurtowe DROP rodzaj21');
        $this->addSql('ALTER TABLE hurtowe DROP rodzaj22');
        $this->addSql('ALTER TABLE hurtowe DROP rodzaj23');
        $this->addSql('ALTER TABLE hurtowe DROP rodzaj24');
        $this->addSql('ALTER TABLE hurtowe DROP rodzaj25');
        $this->addSql('ALTER TABLE hurtowe DROP rodzaj26');
        $this->addSql('ALTER TABLE hurtowe DROP rodzaj27');
        $this->addSql('ALTER TABLE hurtowe DROP rodzaj28');
        $this->addSql('ALTER TABLE hurtowe DROP rodzaj29');
        $this->addSql('ALTER TABLE hurtowe DROP rodzaj30');
        $this->addSql('ALTER TABLE hurtowe DROP rodzaj31');
        $this->addSql('ALTER TABLE hurtowe DROP rodzaj32');
        $this->addSql('ALTER TABLE hurtowe DROP rodzaj33');
        $this->addSql('ALTER TABLE hurtowe DROP rodzaj34');
        $this->addSql('ALTER TABLE hurtowe DROP rodzaj35');
        $this->addSql('ALTER TABLE hurtowe DROP rodzaj36');
        $this->addSql('ALTER TABLE hurtowe DROP rodzaj37');
        $this->addSql('ALTER TABLE hurtowe DROP rodzaj38');
        $this->addSql('ALTER TABLE hurtowe DROP rodzaj39');
        $this->addSql('ALTER TABLE hurtowe DROP rodzaj40');
    }
}
