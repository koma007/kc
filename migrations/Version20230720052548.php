<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230720052548 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP INDEX uniq_7b83311e388c62f');
        $this->addSql('DROP INDEX uniq_7b83311f13d69c1');
        $this->addSql('DROP INDEX uniq_7b8331149810ea4');
        $this->addSql('DROP INDEX uniq_7b83311d456361d');
        $this->addSql('DROP INDEX uniq_7b833116cea5178');
        $this->addSql('DROP INDEX uniq_7b833117e5ffe96');
        $this->addSql('DROP INDEX uniq_7b83311c6e399f3');
        $this->addSql('DROP INDEX uniq_7b833119e8089a5');
        $this->addSql('DROP INDEX uniq_7b83311263ceec0');
        $this->addSql('DROP INDEX uniq_7b83311c5e2ff69');
        $this->addSql('DROP INDEX uniq_7b833117d5e980c');
        $this->addSql('DROP INDEX uniq_7b833116feb37e2');
        $this->addSql('DROP INDEX uniq_7b83311d7575087');
        $this->addSql('DROP INDEX uniq_7b833114a80683e');
        $this->addSql('DROP INDEX uniq_7b83311f23c0f5b');
        $this->addSql('DROP INDEX uniq_7b83311e089a0b5');
        $this->addSql('DROP INDEX uniq_7b833115835c7d0');
        $this->addSql('DROP INDEX uniq_7b8331156d786');
        $this->addSql('DROP INDEX uniq_7b83311b8eab0e3');
        $this->addSql('DROP INDEX uniq_7b83311824285b9');
        $this->addSql('DROP INDEX uniq_7b833113afee2dc');
        $this->addSql('DROP INDEX uniq_7b83311284b4d32');
        $this->addSql('DROP INDEX uniq_7b8331190f72a57');
        $this->addSql('DROP INDEX uniq_7b83311d2012ee');
        $this->addSql('DROP INDEX uniq_7b83311b59c758b');
        $this->addSql('DROP INDEX uniq_7b83311a729da65');
        $this->addSql('DROP INDEX uniq_7b833111f95bd00');
        $this->addSql('DROP INDEX uniq_7b8331147f6ad56');
        $this->addSql('DROP INDEX uniq_7b83311ff4aca33');
        $this->addSql('DROP INDEX uniq_7b83311bf22ac09');
        $this->addSql('DROP INDEX uniq_7b8331179ecb6c');
        $this->addSql('DROP INDEX uniq_7b83311152b6482');
        $this->addSql('DROP INDEX uniq_7b83311ad9703e7');
        $this->addSql('DROP INDEX uniq_7b8331130403b5e');
        $this->addSql('DROP INDEX uniq_7b8331188fc5c3b');
        $this->addSql('DROP INDEX uniq_7b833119a49f3d5');
        $this->addSql('DROP INDEX uniq_7b8331122f594b0');
        $this->addSql('DROP INDEX uniq_7b833117a9684e6');
        $this->addSql('DROP INDEX uniq_7b83311c22ae383');
        $this->addSql('DROP INDEX uniq_7b83311d027019');
        $this->addSql('CREATE INDEX IDX_7B83311E388C62F ON hurtowe (kompozycja1_id)');
        $this->addSql('CREATE INDEX IDX_7B83311F13D69C1 ON hurtowe (kompozycja2_id)');
        $this->addSql('CREATE INDEX IDX_7B8331149810EA4 ON hurtowe (kompozycja3_id)');
        $this->addSql('CREATE INDEX IDX_7B83311D456361D ON hurtowe (kompozycja4_id)');
        $this->addSql('CREATE INDEX IDX_7B833116CEA5178 ON hurtowe (kompozycja5_id)');
        $this->addSql('CREATE INDEX IDX_7B833117E5FFE96 ON hurtowe (kompozycja6_id)');
        $this->addSql('CREATE INDEX IDX_7B83311C6E399F3 ON hurtowe (kompozycja7_id)');
        $this->addSql('CREATE INDEX IDX_7B833119E8089A5 ON hurtowe (kompozycja8_id)');
        $this->addSql('CREATE INDEX IDX_7B83311263CEEC0 ON hurtowe (kompozycja9_id)');
        $this->addSql('CREATE INDEX IDX_7B83311C5E2FF69 ON hurtowe (kompozycja10_id)');
        $this->addSql('CREATE INDEX IDX_7B833117D5E980C ON hurtowe (kompozycja11_id)');
        $this->addSql('CREATE INDEX IDX_7B833116FEB37E2 ON hurtowe (kompozycja12_id)');
        $this->addSql('CREATE INDEX IDX_7B83311D7575087 ON hurtowe (kompozycja13_id)');
        $this->addSql('CREATE INDEX IDX_7B833114A80683E ON hurtowe (kompozycja14_id)');
        $this->addSql('CREATE INDEX IDX_7B83311F23C0F5B ON hurtowe (kompozycja15_id)');
        $this->addSql('CREATE INDEX IDX_7B83311E089A0B5 ON hurtowe (kompozycja16_id)');
        $this->addSql('CREATE INDEX IDX_7B833115835C7D0 ON hurtowe (kompozycja17_id)');
        $this->addSql('CREATE INDEX IDX_7B8331156D786 ON hurtowe (kompozycja18_id)');
        $this->addSql('CREATE INDEX IDX_7B83311B8EAB0E3 ON hurtowe (kompozycja19_id)');
        $this->addSql('CREATE INDEX IDX_7B83311824285B9 ON hurtowe (kompozycja20_id)');
        $this->addSql('CREATE INDEX IDX_7B833113AFEE2DC ON hurtowe (kompozycja21_id)');
        $this->addSql('CREATE INDEX IDX_7B83311284B4D32 ON hurtowe (kompozycja22_id)');
        $this->addSql('CREATE INDEX IDX_7B8331190F72A57 ON hurtowe (kompozycja23_id)');
        $this->addSql('CREATE INDEX IDX_7B83311D2012EE ON hurtowe (kompozycja24_id)');
        $this->addSql('CREATE INDEX IDX_7B83311B59C758B ON hurtowe (kompozycja25_id)');
        $this->addSql('CREATE INDEX IDX_7B83311A729DA65 ON hurtowe (kompozycja26_id)');
        $this->addSql('CREATE INDEX IDX_7B833111F95BD00 ON hurtowe (kompozycja27_id)');
        $this->addSql('CREATE INDEX IDX_7B8331147F6AD56 ON hurtowe (kompozycja28_id)');
        $this->addSql('CREATE INDEX IDX_7B83311FF4ACA33 ON hurtowe (kompozycja29_id)');
        $this->addSql('CREATE INDEX IDX_7B83311BF22AC09 ON hurtowe (kompozycja30_id)');
        $this->addSql('CREATE INDEX IDX_7B8331179ECB6C ON hurtowe (kompozycja31_id)');
        $this->addSql('CREATE INDEX IDX_7B83311152B6482 ON hurtowe (kompozycja32_id)');
        $this->addSql('CREATE INDEX IDX_7B83311AD9703E7 ON hurtowe (kompozycja33_id)');
        $this->addSql('CREATE INDEX IDX_7B8331130403B5E ON hurtowe (kompozycja34_id)');
        $this->addSql('CREATE INDEX IDX_7B8331188FC5C3B ON hurtowe (kompozycja35_id)');
        $this->addSql('CREATE INDEX IDX_7B833119A49F3D5 ON hurtowe (kompozycja36_id)');
        $this->addSql('CREATE INDEX IDX_7B8331122F594B0 ON hurtowe (kompozycja37_id)');
        $this->addSql('CREATE INDEX IDX_7B833117A9684E6 ON hurtowe (kompozycja38_id)');
        $this->addSql('CREATE INDEX IDX_7B83311C22AE383 ON hurtowe (kompozycja39_id)');
        $this->addSql('CREATE INDEX IDX_7B83311D027019 ON hurtowe (kompozycja40_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('DROP INDEX IDX_7B83311E388C62F');
        $this->addSql('DROP INDEX IDX_7B83311F13D69C1');
        $this->addSql('DROP INDEX IDX_7B8331149810EA4');
        $this->addSql('DROP INDEX IDX_7B83311D456361D');
        $this->addSql('DROP INDEX IDX_7B833116CEA5178');
        $this->addSql('DROP INDEX IDX_7B833117E5FFE96');
        $this->addSql('DROP INDEX IDX_7B83311C6E399F3');
        $this->addSql('DROP INDEX IDX_7B833119E8089A5');
        $this->addSql('DROP INDEX IDX_7B83311263CEEC0');
        $this->addSql('DROP INDEX IDX_7B83311C5E2FF69');
        $this->addSql('DROP INDEX IDX_7B833117D5E980C');
        $this->addSql('DROP INDEX IDX_7B833116FEB37E2');
        $this->addSql('DROP INDEX IDX_7B83311D7575087');
        $this->addSql('DROP INDEX IDX_7B833114A80683E');
        $this->addSql('DROP INDEX IDX_7B83311F23C0F5B');
        $this->addSql('DROP INDEX IDX_7B83311E089A0B5');
        $this->addSql('DROP INDEX IDX_7B833115835C7D0');
        $this->addSql('DROP INDEX IDX_7B8331156D786');
        $this->addSql('DROP INDEX IDX_7B83311B8EAB0E3');
        $this->addSql('DROP INDEX IDX_7B83311824285B9');
        $this->addSql('DROP INDEX IDX_7B833113AFEE2DC');
        $this->addSql('DROP INDEX IDX_7B83311284B4D32');
        $this->addSql('DROP INDEX IDX_7B8331190F72A57');
        $this->addSql('DROP INDEX IDX_7B83311D2012EE');
        $this->addSql('DROP INDEX IDX_7B83311B59C758B');
        $this->addSql('DROP INDEX IDX_7B83311A729DA65');
        $this->addSql('DROP INDEX IDX_7B833111F95BD00');
        $this->addSql('DROP INDEX IDX_7B8331147F6AD56');
        $this->addSql('DROP INDEX IDX_7B83311FF4ACA33');
        $this->addSql('DROP INDEX IDX_7B83311BF22AC09');
        $this->addSql('DROP INDEX IDX_7B8331179ECB6C');
        $this->addSql('DROP INDEX IDX_7B83311152B6482');
        $this->addSql('DROP INDEX IDX_7B83311AD9703E7');
        $this->addSql('DROP INDEX IDX_7B8331130403B5E');
        $this->addSql('DROP INDEX IDX_7B8331188FC5C3B');
        $this->addSql('DROP INDEX IDX_7B833119A49F3D5');
        $this->addSql('DROP INDEX IDX_7B8331122F594B0');
        $this->addSql('DROP INDEX IDX_7B833117A9684E6');
        $this->addSql('DROP INDEX IDX_7B83311C22AE383');
        $this->addSql('DROP INDEX IDX_7B83311D027019');
        $this->addSql('CREATE UNIQUE INDEX uniq_7b83311e388c62f ON hurtowe (kompozycja1_id)');
        $this->addSql('CREATE UNIQUE INDEX uniq_7b83311f13d69c1 ON hurtowe (kompozycja2_id)');
        $this->addSql('CREATE UNIQUE INDEX uniq_7b8331149810ea4 ON hurtowe (kompozycja3_id)');
        $this->addSql('CREATE UNIQUE INDEX uniq_7b83311d456361d ON hurtowe (kompozycja4_id)');
        $this->addSql('CREATE UNIQUE INDEX uniq_7b833116cea5178 ON hurtowe (kompozycja5_id)');
        $this->addSql('CREATE UNIQUE INDEX uniq_7b833117e5ffe96 ON hurtowe (kompozycja6_id)');
        $this->addSql('CREATE UNIQUE INDEX uniq_7b83311c6e399f3 ON hurtowe (kompozycja7_id)');
        $this->addSql('CREATE UNIQUE INDEX uniq_7b833119e8089a5 ON hurtowe (kompozycja8_id)');
        $this->addSql('CREATE UNIQUE INDEX uniq_7b83311263ceec0 ON hurtowe (kompozycja9_id)');
        $this->addSql('CREATE UNIQUE INDEX uniq_7b83311c5e2ff69 ON hurtowe (kompozycja10_id)');
        $this->addSql('CREATE UNIQUE INDEX uniq_7b833117d5e980c ON hurtowe (kompozycja11_id)');
        $this->addSql('CREATE UNIQUE INDEX uniq_7b833116feb37e2 ON hurtowe (kompozycja12_id)');
        $this->addSql('CREATE UNIQUE INDEX uniq_7b83311d7575087 ON hurtowe (kompozycja13_id)');
        $this->addSql('CREATE UNIQUE INDEX uniq_7b833114a80683e ON hurtowe (kompozycja14_id)');
        $this->addSql('CREATE UNIQUE INDEX uniq_7b83311f23c0f5b ON hurtowe (kompozycja15_id)');
        $this->addSql('CREATE UNIQUE INDEX uniq_7b83311e089a0b5 ON hurtowe (kompozycja16_id)');
        $this->addSql('CREATE UNIQUE INDEX uniq_7b833115835c7d0 ON hurtowe (kompozycja17_id)');
        $this->addSql('CREATE UNIQUE INDEX uniq_7b8331156d786 ON hurtowe (kompozycja18_id)');
        $this->addSql('CREATE UNIQUE INDEX uniq_7b83311b8eab0e3 ON hurtowe (kompozycja19_id)');
        $this->addSql('CREATE UNIQUE INDEX uniq_7b83311824285b9 ON hurtowe (kompozycja20_id)');
        $this->addSql('CREATE UNIQUE INDEX uniq_7b833113afee2dc ON hurtowe (kompozycja21_id)');
        $this->addSql('CREATE UNIQUE INDEX uniq_7b83311284b4d32 ON hurtowe (kompozycja22_id)');
        $this->addSql('CREATE UNIQUE INDEX uniq_7b8331190f72a57 ON hurtowe (kompozycja23_id)');
        $this->addSql('CREATE UNIQUE INDEX uniq_7b83311d2012ee ON hurtowe (kompozycja24_id)');
        $this->addSql('CREATE UNIQUE INDEX uniq_7b83311b59c758b ON hurtowe (kompozycja25_id)');
        $this->addSql('CREATE UNIQUE INDEX uniq_7b83311a729da65 ON hurtowe (kompozycja26_id)');
        $this->addSql('CREATE UNIQUE INDEX uniq_7b833111f95bd00 ON hurtowe (kompozycja27_id)');
        $this->addSql('CREATE UNIQUE INDEX uniq_7b8331147f6ad56 ON hurtowe (kompozycja28_id)');
        $this->addSql('CREATE UNIQUE INDEX uniq_7b83311ff4aca33 ON hurtowe (kompozycja29_id)');
        $this->addSql('CREATE UNIQUE INDEX uniq_7b83311bf22ac09 ON hurtowe (kompozycja30_id)');
        $this->addSql('CREATE UNIQUE INDEX uniq_7b8331179ecb6c ON hurtowe (kompozycja31_id)');
        $this->addSql('CREATE UNIQUE INDEX uniq_7b83311152b6482 ON hurtowe (kompozycja32_id)');
        $this->addSql('CREATE UNIQUE INDEX uniq_7b83311ad9703e7 ON hurtowe (kompozycja33_id)');
        $this->addSql('CREATE UNIQUE INDEX uniq_7b8331130403b5e ON hurtowe (kompozycja34_id)');
        $this->addSql('CREATE UNIQUE INDEX uniq_7b8331188fc5c3b ON hurtowe (kompozycja35_id)');
        $this->addSql('CREATE UNIQUE INDEX uniq_7b833119a49f3d5 ON hurtowe (kompozycja36_id)');
        $this->addSql('CREATE UNIQUE INDEX uniq_7b8331122f594b0 ON hurtowe (kompozycja37_id)');
        $this->addSql('CREATE UNIQUE INDEX uniq_7b833117a9684e6 ON hurtowe (kompozycja38_id)');
        $this->addSql('CREATE UNIQUE INDEX uniq_7b83311c22ae383 ON hurtowe (kompozycja39_id)');
        $this->addSql('CREATE UNIQUE INDEX uniq_7b83311d027019 ON hurtowe (kompozycja40_id)');
    }
}
