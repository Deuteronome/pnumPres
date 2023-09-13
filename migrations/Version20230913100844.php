<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230913100844 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE carousel (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE carousel_pictures (carousel_id INT NOT NULL, pictures_id INT NOT NULL, INDEX IDX_53C88DDAC1CE5B98 (carousel_id), INDEX IDX_53C88DDABC415685 (pictures_id), PRIMARY KEY(carousel_id, pictures_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE pictures (id INT AUTO_INCREMENT NOT NULL, path VARCHAR(255) NOT NULL, delay INT DEFAULT 2000 NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE carousel_pictures ADD CONSTRAINT FK_53C88DDAC1CE5B98 FOREIGN KEY (carousel_id) REFERENCES carousel (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE carousel_pictures ADD CONSTRAINT FK_53C88DDABC415685 FOREIGN KEY (pictures_id) REFERENCES pictures (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE carousel_pictures DROP FOREIGN KEY FK_53C88DDAC1CE5B98');
        $this->addSql('ALTER TABLE carousel_pictures DROP FOREIGN KEY FK_53C88DDABC415685');
        $this->addSql('DROP TABLE carousel');
        $this->addSql('DROP TABLE carousel_pictures');
        $this->addSql('DROP TABLE pictures');
    }
}
