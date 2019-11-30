<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20191121085909 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE prise (id INT AUTO_INCREMENT NOT NULL, especes_id INT NOT NULL, sortie_id INT NOT NULL, spot_id INT DEFAULT NULL, taille INT DEFAULT NULL, INDEX IDX_800A3088578C3C19 (especes_id), INDEX IDX_800A3088CC72D953 (sortie_id), INDEX IDX_800A30882DF1D37C (spot_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE prise ADD CONSTRAINT FK_800A3088578C3C19 FOREIGN KEY (especes_id) REFERENCES especes (id)');
        $this->addSql('ALTER TABLE prise ADD CONSTRAINT FK_800A3088CC72D953 FOREIGN KEY (sortie_id) REFERENCES sortie (id)');
        $this->addSql('ALTER TABLE prise ADD CONSTRAINT FK_800A30882DF1D37C FOREIGN KEY (spot_id) REFERENCES spot (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE prise');
    }
}
