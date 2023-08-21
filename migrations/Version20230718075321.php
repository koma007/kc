<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230718075321 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE hurtowe DROP CONSTRAINT fk_7b83311451381ba');
        $this->addSql('ALTER TABLE hurtowe DROP CONSTRAINT fk_7b8331157a62e54');
        $this->addSql('DROP INDEX uniq_7b8331157a62e54');
        $this->addSql('DROP INDEX uniq_7b83311451381ba');
        $this->addSql('ALTER TABLE hurtowe ADD skladowa1_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE hurtowe ADD skladowa2_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE hurtowe ADD nazwa1 VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE hurtowe ADD nazwa2 VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE hurtowe DROP nazwa1_id');
        $this->addSql('ALTER TABLE hurtowe DROP nazwa2_id');
        $this->addSql('ALTER TABLE hurtowe ADD CONSTRAINT FK_7B83311918A8721 FOREIGN KEY (skladowa1_id) REFERENCES wyceny (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE hurtowe ADD CONSTRAINT FK_7B83311833F28CF FOREIGN KEY (skladowa2_id) REFERENCES wyceny (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_7B83311918A8721 ON hurtowe (skladowa1_id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_7B83311833F28CF ON hurtowe (skladowa2_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('ALTER TABLE hurtowe DROP CONSTRAINT FK_7B83311918A8721');
        $this->addSql('ALTER TABLE hurtowe DROP CONSTRAINT FK_7B83311833F28CF');
        $this->addSql('DROP INDEX UNIQ_7B83311918A8721');
        $this->addSql('DROP INDEX UNIQ_7B83311833F28CF');
        $this->addSql('ALTER TABLE hurtowe ADD nazwa1_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE hurtowe ADD nazwa2_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE hurtowe DROP skladowa1_id');
        $this->addSql('ALTER TABLE hurtowe DROP skladowa2_id');
        $this->addSql('ALTER TABLE hurtowe DROP nazwa1');
        $this->addSql('ALTER TABLE hurtowe DROP nazwa2');
        $this->addSql('ALTER TABLE hurtowe ADD CONSTRAINT fk_7b83311451381ba FOREIGN KEY (nazwa1_id) REFERENCES wyceny (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE hurtowe ADD CONSTRAINT fk_7b8331157a62e54 FOREIGN KEY (nazwa2_id) REFERENCES wyceny (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('CREATE UNIQUE INDEX uniq_7b8331157a62e54 ON hurtowe (nazwa2_id)');
        $this->addSql('CREATE UNIQUE INDEX uniq_7b83311451381ba ON hurtowe (nazwa1_id)');
    }
}
