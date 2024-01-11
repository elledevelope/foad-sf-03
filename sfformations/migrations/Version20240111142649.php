<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240111142649 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE formations DROP resume, DROP created_at, CHANGE description description LONGTEXT NOT NULL, CHANGE duree duree INT NOT NULL, CHANGE niveau niveau VARCHAR(20) NOT NULL, CHANGE lieu lieu VARCHAR(15) NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE formations ADD resume VARCHAR(255) NOT NULL, ADD created_at DATETIME DEFAULT NULL, CHANGE description description VARCHAR(255) NOT NULL, CHANGE duree duree VARCHAR(255) NOT NULL, CHANGE niveau niveau VARCHAR(255) NOT NULL, CHANGE lieu lieu VARCHAR(255) NOT NULL');
    }
}
