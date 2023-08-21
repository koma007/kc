<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230718075438 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE hurtowe DROP CONSTRAINT fk_7b83311918a8721');
        $this->addSql('ALTER TABLE hurtowe DROP CONSTRAINT fk_7b83311833f28cf');
        $this->addSql('DROP INDEX uniq_7b83311833f28cf');
        $this->addSql('DROP INDEX uniq_7b83311918a8721');
        $this->addSql('ALTER TABLE hurtowe ADD kompozycja1_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE hurtowe ADD kompozycja2_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE hurtowe DROP skladowa1_id');
        $this->addSql('ALTER TABLE hurtowe DROP skladowa2_id');
        $this->addSql('ALTER TABLE hurtowe ADD CONSTRAINT FK_7B83311E388C62F FOREIGN KEY (kompozycja1_id) REFERENCES wyceny (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE hurtowe ADD CONSTRAINT FK_7B83311F13D69C1 FOREIGN KEY (kompozycja2_id) REFERENCES wyceny (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_7B83311E388C62F ON hurtowe (kompozycja1_id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_7B83311F13D69C1 ON hurtowe (kompozycja2_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('ALTER TABLE hurtowe DROP CONSTRAINT FK_7B83311E388C62F');
        $this->addSql('ALTER TABLE hurtowe DROP CONSTRAINT FK_7B83311F13D69C1');
        $this->addSql('DROP INDEX UNIQ_7B83311E388C62F');
        $this->addSql('DROP INDEX UNIQ_7B83311F13D69C1');
        $this->addSql('ALTER TABLE hurtowe ADD skladowa1_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE hurtowe ADD skladowa2_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE hurtowe DROP kompozycja1_id');
        $this->addSql('ALTER TABLE hurtowe DROP kompozycja2_id');
        $this->addSql('ALTER TABLE hurtowe ADD CONSTRAINT fk_7b83311918a8721 FOREIGN KEY (skladowa1_id) REFERENCES wyceny (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE hurtowe ADD CONSTRAINT fk_7b83311833f28cf FOREIGN KEY (skladowa2_id) REFERENCES wyceny (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('CREATE UNIQUE INDEX uniq_7b83311833f28cf ON hurtowe (skladowa2_id)');
        $this->addSql('CREATE UNIQUE INDEX uniq_7b83311918a8721 ON hurtowe (skladowa1_id)');
    }
}
