<?php

namespace DoctrineMigrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20180621080141 extends AbstractMigration
{
    /**
     * @param Schema $schema
     */
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');
        $this->addSql('DROP TABLE location');
        $this->addSql('CREATE TABLE location (id INT AUTO_INCREMENT NOT NULL, salle_id INT NOT NULL, date_deb DATE NOT NULL, date_fin DATE NOT NULL, INDEX IDX_5E9E89CBDC304035 (salle_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        //$this->addSql('CREATE TABLE module_location (id INT AUTO_INCREMENT NOT NULL, id_module INT NOT NULL, id_location INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE location ADD CONSTRAINT FK_5E9E89CBDC304035 FOREIGN KEY (salle_id) REFERENCES salles (id)');
        $this->addSql('ALTER TABLE salles ADD client_id INT NOT NULL');
        $this->addSql('ALTER TABLE salles ADD CONSTRAINT FK_799D45AA19EB6921 FOREIGN KEY (client_id) REFERENCES app_users (id)');
        $this->addSql('CREATE INDEX IDX_799D45AA19EB6921 ON salles (client_id)');
    }

    /**
     * @param Schema $schema
     */
    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE location');
        //$this->addSql('DROP TABLE module_location');
        $this->addSql('ALTER TABLE salles DROP FOREIGN KEY FK_799D45AA19EB6921');
        $this->addSql('DROP INDEX IDX_799D45AA19EB6921 ON salles');
        $this->addSql('ALTER TABLE salles DROP client_id');
    }
}
