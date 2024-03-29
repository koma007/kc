<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240203141040 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SEQUENCE zeszyt_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE TABLE zeszyt (id INT NOT NULL, kompozycja1_id INT DEFAULT NULL, kompozycja2_id INT DEFAULT NULL, kompozycja3_id INT DEFAULT NULL, kompozycja4_id INT DEFAULT NULL, kompozycja5_id INT DEFAULT NULL, kompozycja6_id INT DEFAULT NULL, kompozycja7_id INT DEFAULT NULL, kompozycja8_id INT DEFAULT NULL, kompozycja9_id INT DEFAULT NULL, kompozycja10_id INT DEFAULT NULL, kompozycja11_id INT DEFAULT NULL, kompozycja12_id INT DEFAULT NULL, kompozycja13_id INT DEFAULT NULL, kompozycja14_id INT DEFAULT NULL, kompozycja15_id INT DEFAULT NULL, kompozycja16_id INT DEFAULT NULL, kompozycja17_id INT DEFAULT NULL, kompozycja18_id INT DEFAULT NULL, kompozycja19_id INT DEFAULT NULL, kompozycja20_id INT DEFAULT NULL, kompozycja21_id INT DEFAULT NULL, kompozycja22_id INT DEFAULT NULL, kompozycja23_id INT DEFAULT NULL, kompozycja24_id INT DEFAULT NULL, kompozycja25_id INT DEFAULT NULL, kompozycja26_id INT DEFAULT NULL, kompozycja27_id INT DEFAULT NULL, kompozycja28_id INT DEFAULT NULL, kompozycja29_id INT DEFAULT NULL, kompozycja30_id INT DEFAULT NULL, kompozycja31_id INT DEFAULT NULL, kompozycja32_id INT DEFAULT NULL, kompozycja33_id INT DEFAULT NULL, kompozycja34_id INT DEFAULT NULL, kompozycja35_id INT DEFAULT NULL, kompozycja36_id INT DEFAULT NULL, kompozycja37_id INT DEFAULT NULL, kompozycja38_id INT DEFAULT NULL, kompozycja39_id INT DEFAULT NULL, kompozycja40_id INT DEFAULT NULL, sztuk1 INT DEFAULT NULL, cena1 DOUBLE PRECISION DEFAULT NULL, wartosc1 DOUBLE PRECISION DEFAULT NULL, wozek1 INT DEFAULT NULL, nazwa VARCHAR(255) DEFAULT NULL, nazwa1 VARCHAR(255) DEFAULT NULL, sztuk2 INT DEFAULT NULL, cena2 DOUBLE PRECISION DEFAULT NULL, wartosc2 DOUBLE PRECISION DEFAULT NULL, wozek2 INT DEFAULT NULL, nazwa2 VARCHAR(255) DEFAULT NULL, sztuk3 INT DEFAULT NULL, cena3 DOUBLE PRECISION DEFAULT NULL, wartosc3 DOUBLE PRECISION DEFAULT NULL, wozek3 INT DEFAULT NULL, nazwa3 VARCHAR(255) DEFAULT NULL, sztuk4 INT DEFAULT NULL, cena4 DOUBLE PRECISION DEFAULT NULL, wartosc4 DOUBLE PRECISION DEFAULT NULL, wozek4 INT DEFAULT NULL, nazwa4 VARCHAR(255) DEFAULT NULL, sztuk5 INT DEFAULT NULL, cena5 DOUBLE PRECISION DEFAULT NULL, wartosc5 DOUBLE PRECISION DEFAULT NULL, wozek5 INT DEFAULT NULL, nazwa5 VARCHAR(255) DEFAULT NULL, sztuk6 INT DEFAULT NULL, cena6 DOUBLE PRECISION DEFAULT NULL, wartosc6 DOUBLE PRECISION DEFAULT NULL, wozek6 INT DEFAULT NULL, nazwa6 VARCHAR(255) DEFAULT NULL, sztuk7 INT DEFAULT NULL, cena7 DOUBLE PRECISION DEFAULT NULL, wartosc7 DOUBLE PRECISION DEFAULT NULL, wozek7 INT DEFAULT NULL, nazwa7 VARCHAR(255) DEFAULT NULL, sztuk8 INT DEFAULT NULL, cena8 DOUBLE PRECISION DEFAULT NULL, wartosc8 DOUBLE PRECISION DEFAULT NULL, wozek8 INT DEFAULT NULL, nazwa8 VARCHAR(255) DEFAULT NULL, sztuk9 INT DEFAULT NULL, cena9 DOUBLE PRECISION DEFAULT NULL, wartosc9 DOUBLE PRECISION DEFAULT NULL, wozek9 INT DEFAULT NULL, nazwa9 VARCHAR(255) DEFAULT NULL, sztuk10 INT DEFAULT NULL, cena10 DOUBLE PRECISION DEFAULT NULL, wartosc10 DOUBLE PRECISION DEFAULT NULL, wozek10 INT DEFAULT NULL, nazwa10 VARCHAR(255) DEFAULT NULL, sztuk11 INT DEFAULT NULL, cena11 DOUBLE PRECISION DEFAULT NULL, wartosc11 DOUBLE PRECISION DEFAULT NULL, wozek11 INT DEFAULT NULL, nazwa11 VARCHAR(255) DEFAULT NULL, sztuk12 INT DEFAULT NULL, cena12 DOUBLE PRECISION DEFAULT NULL, wartosc12 DOUBLE PRECISION DEFAULT NULL, wozek12 INT DEFAULT NULL, nazwa12 VARCHAR(255) DEFAULT NULL, sztuk13 INT DEFAULT NULL, cena13 DOUBLE PRECISION DEFAULT NULL, wartosc13 DOUBLE PRECISION DEFAULT NULL, wozek13 INT DEFAULT NULL, nazwa13 VARCHAR(255) DEFAULT NULL, sztuk14 INT DEFAULT NULL, cena14 DOUBLE PRECISION DEFAULT NULL, wartosc14 DOUBLE PRECISION DEFAULT NULL, wozek14 INT DEFAULT NULL, nazwa14 VARCHAR(255) DEFAULT NULL, sztuk15 INT DEFAULT NULL, cena15 DOUBLE PRECISION DEFAULT NULL, wartosc15 DOUBLE PRECISION DEFAULT NULL, wozek15 INT DEFAULT NULL, nazwa15 VARCHAR(255) DEFAULT NULL, sztuk16 INT DEFAULT NULL, cena16 DOUBLE PRECISION DEFAULT NULL, wartosc16 DOUBLE PRECISION DEFAULT NULL, wozek16 INT DEFAULT NULL, nazwa16 VARCHAR(255) DEFAULT NULL, sztuk17 INT DEFAULT NULL, cena17 DOUBLE PRECISION DEFAULT NULL, wartosc17 DOUBLE PRECISION DEFAULT NULL, wozek17 INT DEFAULT NULL, nazwa17 VARCHAR(255) DEFAULT NULL, sztuk18 INT DEFAULT NULL, cena18 DOUBLE PRECISION DEFAULT NULL, wartosc18 DOUBLE PRECISION DEFAULT NULL, wozek18 INT DEFAULT NULL, nazwa18 VARCHAR(255) DEFAULT NULL, sztuk19 INT DEFAULT NULL, cena19 DOUBLE PRECISION DEFAULT NULL, wartosc19 DOUBLE PRECISION DEFAULT NULL, wozek19 INT DEFAULT NULL, nazwa19 VARCHAR(255) DEFAULT NULL, sztuk20 INT DEFAULT NULL, cena20 DOUBLE PRECISION DEFAULT NULL, wartosc20 DOUBLE PRECISION DEFAULT NULL, wozek20 INT DEFAULT NULL, nazwa20 VARCHAR(255) DEFAULT NULL, sztuk21 INT DEFAULT NULL, cena21 DOUBLE PRECISION DEFAULT NULL, wartosc21 DOUBLE PRECISION DEFAULT NULL, wozek21 INT DEFAULT NULL, nazwa21 VARCHAR(255) DEFAULT NULL, sztuk22 INT DEFAULT NULL, cena22 DOUBLE PRECISION DEFAULT NULL, wartosc22 DOUBLE PRECISION DEFAULT NULL, wozek22 INT DEFAULT NULL, nazwa22 VARCHAR(255) DEFAULT NULL, sztuk23 INT DEFAULT NULL, cena23 DOUBLE PRECISION DEFAULT NULL, wartosc23 DOUBLE PRECISION DEFAULT NULL, wozek23 INT DEFAULT NULL, nazwa23 VARCHAR(255) DEFAULT NULL, sztuk24 INT DEFAULT NULL, cena24 DOUBLE PRECISION DEFAULT NULL, wartosc24 DOUBLE PRECISION DEFAULT NULL, wozek24 INT DEFAULT NULL, nazwa24 VARCHAR(255) DEFAULT NULL, sztuk25 INT DEFAULT NULL, cena25 DOUBLE PRECISION DEFAULT NULL, wartosc25 DOUBLE PRECISION DEFAULT NULL, wozek25 INT DEFAULT NULL, nazwa25 VARCHAR(255) DEFAULT NULL, sztuk26 INT DEFAULT NULL, cena26 DOUBLE PRECISION DEFAULT NULL, wartosc26 DOUBLE PRECISION DEFAULT NULL, wozek26 INT DEFAULT NULL, nazwa26 VARCHAR(255) DEFAULT NULL, sztuk27 INT DEFAULT NULL, cena27 DOUBLE PRECISION DEFAULT NULL, wartosc27 DOUBLE PRECISION DEFAULT NULL, wozek27 INT DEFAULT NULL, nazwa27 VARCHAR(255) DEFAULT NULL, sztuk28 INT DEFAULT NULL, cena28 DOUBLE PRECISION DEFAULT NULL, wartosc28 DOUBLE PRECISION DEFAULT NULL, wozek28 INT DEFAULT NULL, nazwa28 VARCHAR(255) DEFAULT NULL, sztuk29 INT DEFAULT NULL, cena29 DOUBLE PRECISION DEFAULT NULL, wartosc29 DOUBLE PRECISION DEFAULT NULL, wozek29 INT DEFAULT NULL, nazwa29 VARCHAR(255) DEFAULT NULL, sztuk30 INT DEFAULT NULL, cena30 DOUBLE PRECISION DEFAULT NULL, wartosc30 DOUBLE PRECISION DEFAULT NULL, wozek30 INT DEFAULT NULL, nazwa30 VARCHAR(255) DEFAULT NULL, sztuk31 INT DEFAULT NULL, cena31 DOUBLE PRECISION DEFAULT NULL, wartosc31 DOUBLE PRECISION DEFAULT NULL, wozek31 INT DEFAULT NULL, nazwa31 VARCHAR(255) DEFAULT NULL, sztuk32 INT DEFAULT NULL, cena32 DOUBLE PRECISION DEFAULT NULL, wartosc32 DOUBLE PRECISION DEFAULT NULL, wozek32 INT DEFAULT NULL, nazwa32 VARCHAR(255) DEFAULT NULL, sztuk33 INT DEFAULT NULL, cena33 DOUBLE PRECISION DEFAULT NULL, wartosc33 DOUBLE PRECISION DEFAULT NULL, wozek33 INT DEFAULT NULL, nazwa33 VARCHAR(255) DEFAULT NULL, sztuk34 INT DEFAULT NULL, cena34 DOUBLE PRECISION DEFAULT NULL, wartosc34 DOUBLE PRECISION DEFAULT NULL, wozek34 INT DEFAULT NULL, nazwa34 VARCHAR(255) DEFAULT NULL, sztuk35 INT DEFAULT NULL, cena35 DOUBLE PRECISION DEFAULT NULL, wartosc35 DOUBLE PRECISION DEFAULT NULL, wozek35 INT DEFAULT NULL, nazwa35 VARCHAR(255) DEFAULT NULL, sztuk36 INT DEFAULT NULL, cena36 DOUBLE PRECISION DEFAULT NULL, wartosc36 DOUBLE PRECISION DEFAULT NULL, wozek36 INT DEFAULT NULL, nazwa36 VARCHAR(255) DEFAULT NULL, sztuk37 INT DEFAULT NULL, cena37 DOUBLE PRECISION DEFAULT NULL, wartosc37 DOUBLE PRECISION DEFAULT NULL, wozek37 INT DEFAULT NULL, nazwa37 VARCHAR(255) DEFAULT NULL, sztuk38 INT DEFAULT NULL, cena38 DOUBLE PRECISION DEFAULT NULL, wartosc38 DOUBLE PRECISION DEFAULT NULL, wozek38 INT DEFAULT NULL, nazwa38 VARCHAR(255) DEFAULT NULL, sztuk39 INT DEFAULT NULL, cena39 DOUBLE PRECISION DEFAULT NULL, wartosc39 DOUBLE PRECISION DEFAULT NULL, wozek39 INT DEFAULT NULL, nazwa39 VARCHAR(255) DEFAULT NULL, sztuk40 INT DEFAULT NULL, cena40 DOUBLE PRECISION DEFAULT NULL, wartosc40 DOUBLE PRECISION DEFAULT NULL, wozek40 INT DEFAULT NULL, nazwa40 VARCHAR(255) DEFAULT NULL, suma DOUBLE PRECISION DEFAULT NULL, rodzaj1 VARCHAR(255) DEFAULT NULL, rodzaj2 VARCHAR(255) DEFAULT NULL, rodzaj3 VARCHAR(255) DEFAULT NULL, rodzaj4 VARCHAR(255) DEFAULT NULL, rodzaj5 VARCHAR(255) DEFAULT NULL, rodzaj6 VARCHAR(255) DEFAULT NULL, rodzaj7 VARCHAR(255) DEFAULT NULL, rodzaj8 VARCHAR(255) DEFAULT NULL, rodzaj9 VARCHAR(255) DEFAULT NULL, rodzaj10 VARCHAR(255) DEFAULT NULL, rodzaj11 VARCHAR(255) DEFAULT NULL, rodzaj12 VARCHAR(255) DEFAULT NULL, rodzaj13 VARCHAR(255) DEFAULT NULL, rodzaj14 VARCHAR(255) DEFAULT NULL, rodzaj15 VARCHAR(255) DEFAULT NULL, rodzaj16 VARCHAR(255) DEFAULT NULL, rodzaj17 VARCHAR(255) DEFAULT NULL, rodzaj18 VARCHAR(255) DEFAULT NULL, rodzaj19 VARCHAR(255) DEFAULT NULL, rodzaj20 VARCHAR(255) DEFAULT NULL, rodzaj21 VARCHAR(255) DEFAULT NULL, rodzaj22 VARCHAR(255) DEFAULT NULL, rodzaj23 VARCHAR(255) DEFAULT NULL, rodzaj24 VARCHAR(255) DEFAULT NULL, rodzaj25 VARCHAR(255) DEFAULT NULL, rodzaj26 VARCHAR(255) DEFAULT NULL, rodzaj27 VARCHAR(255) DEFAULT NULL, rodzaj28 VARCHAR(255) DEFAULT NULL, rodzaj29 VARCHAR(255) DEFAULT NULL, rodzaj30 VARCHAR(255) DEFAULT NULL, rodzaj31 VARCHAR(255) DEFAULT NULL, rodzaj32 VARCHAR(255) DEFAULT NULL, rodzaj33 VARCHAR(255) DEFAULT NULL, rodzaj34 VARCHAR(255) DEFAULT NULL, rodzaj35 VARCHAR(255) DEFAULT NULL, rodzaj36 VARCHAR(255) DEFAULT NULL, rodzaj37 VARCHAR(255) DEFAULT NULL, rodzaj38 VARCHAR(255) DEFAULT NULL, rodzaj39 VARCHAR(255) DEFAULT NULL, rodzaj40 VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE INDEX IDX_C3D0E257E388C62F ON zeszyt (kompozycja1_id)');
        $this->addSql('CREATE INDEX IDX_C3D0E257F13D69C1 ON zeszyt (kompozycja2_id)');
        $this->addSql('CREATE INDEX IDX_C3D0E25749810EA4 ON zeszyt (kompozycja3_id)');
        $this->addSql('CREATE INDEX IDX_C3D0E257D456361D ON zeszyt (kompozycja4_id)');
        $this->addSql('CREATE INDEX IDX_C3D0E2576CEA5178 ON zeszyt (kompozycja5_id)');
        $this->addSql('CREATE INDEX IDX_C3D0E2577E5FFE96 ON zeszyt (kompozycja6_id)');
        $this->addSql('CREATE INDEX IDX_C3D0E257C6E399F3 ON zeszyt (kompozycja7_id)');
        $this->addSql('CREATE INDEX IDX_C3D0E2579E8089A5 ON zeszyt (kompozycja8_id)');
        $this->addSql('CREATE INDEX IDX_C3D0E257263CEEC0 ON zeszyt (kompozycja9_id)');
        $this->addSql('CREATE INDEX IDX_C3D0E257C5E2FF69 ON zeszyt (kompozycja10_id)');
        $this->addSql('CREATE INDEX IDX_C3D0E2577D5E980C ON zeszyt (kompozycja11_id)');
        $this->addSql('CREATE INDEX IDX_C3D0E2576FEB37E2 ON zeszyt (kompozycja12_id)');
        $this->addSql('CREATE INDEX IDX_C3D0E257D7575087 ON zeszyt (kompozycja13_id)');
        $this->addSql('CREATE INDEX IDX_C3D0E2574A80683E ON zeszyt (kompozycja14_id)');
        $this->addSql('CREATE INDEX IDX_C3D0E257F23C0F5B ON zeszyt (kompozycja15_id)');
        $this->addSql('CREATE INDEX IDX_C3D0E257E089A0B5 ON zeszyt (kompozycja16_id)');
        $this->addSql('CREATE INDEX IDX_C3D0E2575835C7D0 ON zeszyt (kompozycja17_id)');
        $this->addSql('CREATE INDEX IDX_C3D0E25756D786 ON zeszyt (kompozycja18_id)');
        $this->addSql('CREATE INDEX IDX_C3D0E257B8EAB0E3 ON zeszyt (kompozycja19_id)');
        $this->addSql('CREATE INDEX IDX_C3D0E257824285B9 ON zeszyt (kompozycja20_id)');
        $this->addSql('CREATE INDEX IDX_C3D0E2573AFEE2DC ON zeszyt (kompozycja21_id)');
        $this->addSql('CREATE INDEX IDX_C3D0E257284B4D32 ON zeszyt (kompozycja22_id)');
        $this->addSql('CREATE INDEX IDX_C3D0E25790F72A57 ON zeszyt (kompozycja23_id)');
        $this->addSql('CREATE INDEX IDX_C3D0E257D2012EE ON zeszyt (kompozycja24_id)');
        $this->addSql('CREATE INDEX IDX_C3D0E257B59C758B ON zeszyt (kompozycja25_id)');
        $this->addSql('CREATE INDEX IDX_C3D0E257A729DA65 ON zeszyt (kompozycja26_id)');
        $this->addSql('CREATE INDEX IDX_C3D0E2571F95BD00 ON zeszyt (kompozycja27_id)');
        $this->addSql('CREATE INDEX IDX_C3D0E25747F6AD56 ON zeszyt (kompozycja28_id)');
        $this->addSql('CREATE INDEX IDX_C3D0E257FF4ACA33 ON zeszyt (kompozycja29_id)');
        $this->addSql('CREATE INDEX IDX_C3D0E257BF22AC09 ON zeszyt (kompozycja30_id)');
        $this->addSql('CREATE INDEX IDX_C3D0E25779ECB6C ON zeszyt (kompozycja31_id)');
        $this->addSql('CREATE INDEX IDX_C3D0E257152B6482 ON zeszyt (kompozycja32_id)');
        $this->addSql('CREATE INDEX IDX_C3D0E257AD9703E7 ON zeszyt (kompozycja33_id)');
        $this->addSql('CREATE INDEX IDX_C3D0E25730403B5E ON zeszyt (kompozycja34_id)');
        $this->addSql('CREATE INDEX IDX_C3D0E25788FC5C3B ON zeszyt (kompozycja35_id)');
        $this->addSql('CREATE INDEX IDX_C3D0E2579A49F3D5 ON zeszyt (kompozycja36_id)');
        $this->addSql('CREATE INDEX IDX_C3D0E25722F594B0 ON zeszyt (kompozycja37_id)');
        $this->addSql('CREATE INDEX IDX_C3D0E2577A9684E6 ON zeszyt (kompozycja38_id)');
        $this->addSql('CREATE INDEX IDX_C3D0E257C22AE383 ON zeszyt (kompozycja39_id)');
        $this->addSql('CREATE INDEX IDX_C3D0E257D027019 ON zeszyt (kompozycja40_id)');
        $this->addSql('ALTER TABLE zeszyt ADD CONSTRAINT FK_C3D0E257E388C62F FOREIGN KEY (kompozycja1_id) REFERENCES wyceny (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE zeszyt ADD CONSTRAINT FK_C3D0E257F13D69C1 FOREIGN KEY (kompozycja2_id) REFERENCES wyceny (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE zeszyt ADD CONSTRAINT FK_C3D0E25749810EA4 FOREIGN KEY (kompozycja3_id) REFERENCES wyceny (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE zeszyt ADD CONSTRAINT FK_C3D0E257D456361D FOREIGN KEY (kompozycja4_id) REFERENCES wyceny (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE zeszyt ADD CONSTRAINT FK_C3D0E2576CEA5178 FOREIGN KEY (kompozycja5_id) REFERENCES wyceny (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE zeszyt ADD CONSTRAINT FK_C3D0E2577E5FFE96 FOREIGN KEY (kompozycja6_id) REFERENCES wyceny (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE zeszyt ADD CONSTRAINT FK_C3D0E257C6E399F3 FOREIGN KEY (kompozycja7_id) REFERENCES wyceny (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE zeszyt ADD CONSTRAINT FK_C3D0E2579E8089A5 FOREIGN KEY (kompozycja8_id) REFERENCES wyceny (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE zeszyt ADD CONSTRAINT FK_C3D0E257263CEEC0 FOREIGN KEY (kompozycja9_id) REFERENCES wyceny (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE zeszyt ADD CONSTRAINT FK_C3D0E257C5E2FF69 FOREIGN KEY (kompozycja10_id) REFERENCES wyceny (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE zeszyt ADD CONSTRAINT FK_C3D0E2577D5E980C FOREIGN KEY (kompozycja11_id) REFERENCES wyceny (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE zeszyt ADD CONSTRAINT FK_C3D0E2576FEB37E2 FOREIGN KEY (kompozycja12_id) REFERENCES wyceny (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE zeszyt ADD CONSTRAINT FK_C3D0E257D7575087 FOREIGN KEY (kompozycja13_id) REFERENCES wyceny (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE zeszyt ADD CONSTRAINT FK_C3D0E2574A80683E FOREIGN KEY (kompozycja14_id) REFERENCES wyceny (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE zeszyt ADD CONSTRAINT FK_C3D0E257F23C0F5B FOREIGN KEY (kompozycja15_id) REFERENCES wyceny (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE zeszyt ADD CONSTRAINT FK_C3D0E257E089A0B5 FOREIGN KEY (kompozycja16_id) REFERENCES wyceny (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE zeszyt ADD CONSTRAINT FK_C3D0E2575835C7D0 FOREIGN KEY (kompozycja17_id) REFERENCES wyceny (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE zeszyt ADD CONSTRAINT FK_C3D0E25756D786 FOREIGN KEY (kompozycja18_id) REFERENCES wyceny (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE zeszyt ADD CONSTRAINT FK_C3D0E257B8EAB0E3 FOREIGN KEY (kompozycja19_id) REFERENCES wyceny (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE zeszyt ADD CONSTRAINT FK_C3D0E257824285B9 FOREIGN KEY (kompozycja20_id) REFERENCES wyceny (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE zeszyt ADD CONSTRAINT FK_C3D0E2573AFEE2DC FOREIGN KEY (kompozycja21_id) REFERENCES wyceny (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE zeszyt ADD CONSTRAINT FK_C3D0E257284B4D32 FOREIGN KEY (kompozycja22_id) REFERENCES wyceny (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE zeszyt ADD CONSTRAINT FK_C3D0E25790F72A57 FOREIGN KEY (kompozycja23_id) REFERENCES wyceny (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE zeszyt ADD CONSTRAINT FK_C3D0E257D2012EE FOREIGN KEY (kompozycja24_id) REFERENCES wyceny (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE zeszyt ADD CONSTRAINT FK_C3D0E257B59C758B FOREIGN KEY (kompozycja25_id) REFERENCES wyceny (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE zeszyt ADD CONSTRAINT FK_C3D0E257A729DA65 FOREIGN KEY (kompozycja26_id) REFERENCES wyceny (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE zeszyt ADD CONSTRAINT FK_C3D0E2571F95BD00 FOREIGN KEY (kompozycja27_id) REFERENCES wyceny (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE zeszyt ADD CONSTRAINT FK_C3D0E25747F6AD56 FOREIGN KEY (kompozycja28_id) REFERENCES wyceny (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE zeszyt ADD CONSTRAINT FK_C3D0E257FF4ACA33 FOREIGN KEY (kompozycja29_id) REFERENCES wyceny (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE zeszyt ADD CONSTRAINT FK_C3D0E257BF22AC09 FOREIGN KEY (kompozycja30_id) REFERENCES wyceny (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE zeszyt ADD CONSTRAINT FK_C3D0E25779ECB6C FOREIGN KEY (kompozycja31_id) REFERENCES wyceny (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE zeszyt ADD CONSTRAINT FK_C3D0E257152B6482 FOREIGN KEY (kompozycja32_id) REFERENCES wyceny (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE zeszyt ADD CONSTRAINT FK_C3D0E257AD9703E7 FOREIGN KEY (kompozycja33_id) REFERENCES wyceny (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE zeszyt ADD CONSTRAINT FK_C3D0E25730403B5E FOREIGN KEY (kompozycja34_id) REFERENCES wyceny (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE zeszyt ADD CONSTRAINT FK_C3D0E25788FC5C3B FOREIGN KEY (kompozycja35_id) REFERENCES wyceny (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE zeszyt ADD CONSTRAINT FK_C3D0E2579A49F3D5 FOREIGN KEY (kompozycja36_id) REFERENCES wyceny (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE zeszyt ADD CONSTRAINT FK_C3D0E25722F594B0 FOREIGN KEY (kompozycja37_id) REFERENCES wyceny (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE zeszyt ADD CONSTRAINT FK_C3D0E2577A9684E6 FOREIGN KEY (kompozycja38_id) REFERENCES wyceny (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE zeszyt ADD CONSTRAINT FK_C3D0E257C22AE383 FOREIGN KEY (kompozycja39_id) REFERENCES wyceny (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE zeszyt ADD CONSTRAINT FK_C3D0E257D027019 FOREIGN KEY (kompozycja40_id) REFERENCES wyceny (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('DROP SEQUENCE zeszyt_id_seq CASCADE');
        $this->addSql('ALTER TABLE zeszyt DROP CONSTRAINT FK_C3D0E257E388C62F');
        $this->addSql('ALTER TABLE zeszyt DROP CONSTRAINT FK_C3D0E257F13D69C1');
        $this->addSql('ALTER TABLE zeszyt DROP CONSTRAINT FK_C3D0E25749810EA4');
        $this->addSql('ALTER TABLE zeszyt DROP CONSTRAINT FK_C3D0E257D456361D');
        $this->addSql('ALTER TABLE zeszyt DROP CONSTRAINT FK_C3D0E2576CEA5178');
        $this->addSql('ALTER TABLE zeszyt DROP CONSTRAINT FK_C3D0E2577E5FFE96');
        $this->addSql('ALTER TABLE zeszyt DROP CONSTRAINT FK_C3D0E257C6E399F3');
        $this->addSql('ALTER TABLE zeszyt DROP CONSTRAINT FK_C3D0E2579E8089A5');
        $this->addSql('ALTER TABLE zeszyt DROP CONSTRAINT FK_C3D0E257263CEEC0');
        $this->addSql('ALTER TABLE zeszyt DROP CONSTRAINT FK_C3D0E257C5E2FF69');
        $this->addSql('ALTER TABLE zeszyt DROP CONSTRAINT FK_C3D0E2577D5E980C');
        $this->addSql('ALTER TABLE zeszyt DROP CONSTRAINT FK_C3D0E2576FEB37E2');
        $this->addSql('ALTER TABLE zeszyt DROP CONSTRAINT FK_C3D0E257D7575087');
        $this->addSql('ALTER TABLE zeszyt DROP CONSTRAINT FK_C3D0E2574A80683E');
        $this->addSql('ALTER TABLE zeszyt DROP CONSTRAINT FK_C3D0E257F23C0F5B');
        $this->addSql('ALTER TABLE zeszyt DROP CONSTRAINT FK_C3D0E257E089A0B5');
        $this->addSql('ALTER TABLE zeszyt DROP CONSTRAINT FK_C3D0E2575835C7D0');
        $this->addSql('ALTER TABLE zeszyt DROP CONSTRAINT FK_C3D0E25756D786');
        $this->addSql('ALTER TABLE zeszyt DROP CONSTRAINT FK_C3D0E257B8EAB0E3');
        $this->addSql('ALTER TABLE zeszyt DROP CONSTRAINT FK_C3D0E257824285B9');
        $this->addSql('ALTER TABLE zeszyt DROP CONSTRAINT FK_C3D0E2573AFEE2DC');
        $this->addSql('ALTER TABLE zeszyt DROP CONSTRAINT FK_C3D0E257284B4D32');
        $this->addSql('ALTER TABLE zeszyt DROP CONSTRAINT FK_C3D0E25790F72A57');
        $this->addSql('ALTER TABLE zeszyt DROP CONSTRAINT FK_C3D0E257D2012EE');
        $this->addSql('ALTER TABLE zeszyt DROP CONSTRAINT FK_C3D0E257B59C758B');
        $this->addSql('ALTER TABLE zeszyt DROP CONSTRAINT FK_C3D0E257A729DA65');
        $this->addSql('ALTER TABLE zeszyt DROP CONSTRAINT FK_C3D0E2571F95BD00');
        $this->addSql('ALTER TABLE zeszyt DROP CONSTRAINT FK_C3D0E25747F6AD56');
        $this->addSql('ALTER TABLE zeszyt DROP CONSTRAINT FK_C3D0E257FF4ACA33');
        $this->addSql('ALTER TABLE zeszyt DROP CONSTRAINT FK_C3D0E257BF22AC09');
        $this->addSql('ALTER TABLE zeszyt DROP CONSTRAINT FK_C3D0E25779ECB6C');
        $this->addSql('ALTER TABLE zeszyt DROP CONSTRAINT FK_C3D0E257152B6482');
        $this->addSql('ALTER TABLE zeszyt DROP CONSTRAINT FK_C3D0E257AD9703E7');
        $this->addSql('ALTER TABLE zeszyt DROP CONSTRAINT FK_C3D0E25730403B5E');
        $this->addSql('ALTER TABLE zeszyt DROP CONSTRAINT FK_C3D0E25788FC5C3B');
        $this->addSql('ALTER TABLE zeszyt DROP CONSTRAINT FK_C3D0E2579A49F3D5');
        $this->addSql('ALTER TABLE zeszyt DROP CONSTRAINT FK_C3D0E25722F594B0');
        $this->addSql('ALTER TABLE zeszyt DROP CONSTRAINT FK_C3D0E2577A9684E6');
        $this->addSql('ALTER TABLE zeszyt DROP CONSTRAINT FK_C3D0E257C22AE383');
        $this->addSql('ALTER TABLE zeszyt DROP CONSTRAINT FK_C3D0E257D027019');
        $this->addSql('DROP TABLE zeszyt');
    }
}
