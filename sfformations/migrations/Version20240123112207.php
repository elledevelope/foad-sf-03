<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240123112207 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE category DROP FOREIGN KEY FK_64C19C13BF5B0C2');
        $this->addSql('DROP INDEX IDX_64C19C13BF5B0C2 ON category');
        $this->addSql('ALTER TABLE category DROP formations_id');
        $this->addSql('ALTER TABLE formations DROP description, DROP niveau, DROP lieu, DROP resume, CHANGE duree category_id INT NOT NULL');
        $this->addSql('ALTER TABLE formations ADD CONSTRAINT FK_4090213712469DE2 FOREIGN KEY (category_id) REFERENCES category (id)');
        $this->addSql('CREATE INDEX IDX_4090213712469DE2 ON formations (category_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE category ADD formations_id INT NOT NULL');
        $this->addSql('ALTER TABLE category ADD CONSTRAINT FK_64C19C13BF5B0C2 FOREIGN KEY (formations_id) REFERENCES formations (id)');
        $this->addSql('CREATE INDEX IDX_64C19C13BF5B0C2 ON category (formations_id)');
        $this->addSql('ALTER TABLE formations DROP FOREIGN KEY FK_4090213712469DE2');
        $this->addSql('DROP INDEX IDX_4090213712469DE2 ON formations');
        $this->addSql('ALTER TABLE formations ADD description LONGTEXT NOT NULL, ADD niveau VARCHAR(20) NOT NULL, ADD lieu VARCHAR(15) NOT NULL, ADD resume LONGTEXT NOT NULL, CHANGE category_id duree INT NOT NULL');
    }
}
