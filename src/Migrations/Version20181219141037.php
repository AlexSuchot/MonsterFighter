<?php declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20181219141037 extends AbstractMigration
{
    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE icon');
        $this->addSql('DROP TABLE image');
        $this->addSql('ALTER TABLE pokemon ADD stage TINYTEXT NOT NULL COMMENT \'(DC2Type:array)\', ADD description LONGTEXT NOT NULL');
        $this->addSql('DROP INDEX UNIQ_8D93D64986CC499D ON user');
        $this->addSql('ALTER TABLE user ADD team LONGTEXT NOT NULL COMMENT \'(DC2Type:array)\', CHANGE pseudo nickname VARCHAR(180) NOT NULL');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_8D93D649A188FE64 ON user (nickname)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE icon (id INT AUTO_INCREMENT NOT NULL, icon VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE image (id INT AUTO_INCREMENT NOT NULL, img VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE pokemon DROP stage, DROP description');
        $this->addSql('DROP INDEX UNIQ_8D93D649A188FE64 ON user');
        $this->addSql('ALTER TABLE user DROP team, CHANGE nickname pseudo VARCHAR(180) NOT NULL COLLATE utf8mb4_unicode_ci');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_8D93D64986CC499D ON user (pseudo)');
    }
}
