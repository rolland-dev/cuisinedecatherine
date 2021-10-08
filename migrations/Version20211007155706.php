<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20211007155706 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE niveaux (id INT AUTO_INCREMENT NOT NULL, niveau VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE recettes ADD niveaux_id INT DEFAULT NULL, CHANGE categories_id categories_id INT NOT NULL, CHANGE categorie categorie VARCHAR(255)  NULL');
        $this->addSql('ALTER TABLE recettes ADD CONSTRAINT FK_EB48E72CAAC4B70E FOREIGN KEY (niveaux_id) REFERENCES niveaux (id)');
        $this->addSql('CREATE INDEX IDX_EB48E72CAAC4B70E ON recettes (niveaux_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE recettes DROP FOREIGN KEY FK_EB48E72CAAC4B70E');
        $this->addSql('DROP TABLE niveaux');
        $this->addSql('DROP INDEX IDX_EB48E72CAAC4B70E ON recettes');
        $this->addSql('ALTER TABLE recettes DROP niveaux_id, CHANGE categories_id categories_id INT DEFAULT NULL, CHANGE categorie categorie VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`');
    }
}
