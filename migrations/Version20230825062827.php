<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230825062827 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE wyceny_user (wyceny_id INT NOT NULL, user_id INT NOT NULL, PRIMARY KEY(wyceny_id, user_id))');
        $this->addSql('CREATE INDEX IDX_AA17718E8A86C280 ON wyceny_user (wyceny_id)');
        $this->addSql('CREATE INDEX IDX_AA17718EA76ED395 ON wyceny_user (user_id)');
        $this->addSql('CREATE TABLE wyceny_user_audit (wyceny_id INT NOT NULL, user_id INT NOT NULL, rev INT NOT NULL, revtype VARCHAR(4) NOT NULL, PRIMARY KEY(wyceny_id, user_id, rev))');
        $this->addSql('CREATE INDEX rev_d4bd5fdfd0039e9b8d1f2953d429aac1_idx ON wyceny_user_audit (rev)');
        $this->addSql('ALTER TABLE wyceny_user ADD CONSTRAINT FK_AA17718E8A86C280 FOREIGN KEY (wyceny_id) REFERENCES wyceny (id) ON DELETE CASCADE NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE wyceny_user ADD CONSTRAINT FK_AA17718EA76ED395 FOREIGN KEY (user_id) REFERENCES "user" (id) ON DELETE CASCADE NOT DEFERRABLE INITIALLY IMMEDIATE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('ALTER TABLE wyceny_user DROP CONSTRAINT FK_AA17718E8A86C280');
        $this->addSql('ALTER TABLE wyceny_user DROP CONSTRAINT FK_AA17718EA76ED395');
        $this->addSql('DROP TABLE wyceny_user');
        $this->addSql('DROP TABLE wyceny_user_audit');
    }
}
