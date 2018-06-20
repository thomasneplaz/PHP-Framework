<?php

namespace DoctrineMigrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20180620133235 extends AbstractMigration
{
    /**
     * @param Schema $schema
     */
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

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

        $this->addSql('ALTER TABLE salles DROP FOREIGN KEY FK_799D45AA19EB6921');
        $this->addSql('DROP INDEX IDX_799D45AA19EB6921 ON salles');
        $this->addSql('ALTER TABLE salles DROP client_id');
    }
}
