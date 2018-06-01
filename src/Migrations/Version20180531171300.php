<?php declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20180531171300 extends AbstractMigration
{
    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE article CHANGE post_image post_image VARCHAR(255) DEFAULT NULL');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_23A0E66522688B0 ON article (post_image)');
        $this->addSql('ALTER TABLE contact_request ADD created_at DATETIME NOT NULL, CHANGE email email VARCHAR(25) DEFAULT NULL, CHANGE phone_number phone_number INT DEFAULT NULL');
        $this->addSql('ALTER TABLE team_member ADD photo VARCHAR(255) DEFAULT NULL');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_6FFBDA114B78418 ON team_member (photo)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP INDEX UNIQ_23A0E66522688B0 ON article');
        $this->addSql('ALTER TABLE article CHANGE post_image post_image VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci');
        $this->addSql('ALTER TABLE contact_request DROP created_at, CHANGE email email VARCHAR(50) NOT NULL COLLATE utf8mb4_unicode_ci, CHANGE phone_number phone_number INT NOT NULL');
        $this->addSql('DROP INDEX UNIQ_6FFBDA114B78418 ON team_member');
        $this->addSql('ALTER TABLE team_member DROP photo');
    }
}
