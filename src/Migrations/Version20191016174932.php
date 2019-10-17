<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20191016174932 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'sqlite', 'Migration can only be executed safely on \'sqlite\'.');

        $this->addSql('CREATE TEMPORARY TABLE __temp__jobs AS SELECT id, job, company, pay, discription FROM jobs');
        $this->addSql('DROP TABLE jobs');
        $this->addSql('CREATE TABLE jobs (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, job VARCHAR(255) NOT NULL COLLATE BINARY, company VARCHAR(255) NOT NULL COLLATE BINARY, pay DOUBLE PRECISION DEFAULT NULL, description CLOB DEFAULT NULL)');
        $this->addSql('INSERT INTO jobs (id, job, company, pay, description) SELECT id, job, company, pay, discription FROM __temp__jobs');
        $this->addSql('DROP TABLE __temp__jobs');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'sqlite', 'Migration can only be executed safely on \'sqlite\'.');

        $this->addSql('CREATE TEMPORARY TABLE __temp__jobs AS SELECT id, job, company, pay, description FROM jobs');
        $this->addSql('DROP TABLE jobs');
        $this->addSql('CREATE TABLE jobs (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, job VARCHAR(255) NOT NULL, company VARCHAR(255) NOT NULL, pay DOUBLE PRECISION DEFAULT NULL, discription CLOB DEFAULT NULL COLLATE BINARY, pay_max DOUBLE PRECISION DEFAULT NULL)');
        $this->addSql('INSERT INTO jobs (id, job, company, pay, discription) SELECT id, job, company, pay, description FROM __temp__jobs');
        $this->addSql('DROP TABLE __temp__jobs');
    }
}
