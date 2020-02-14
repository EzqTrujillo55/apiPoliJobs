<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200214193414 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE hoja_vida (id INT AUTO_INCREMENT NOT NULL, nombre_completo VARCHAR(255) NOT NULL, telefono VARCHAR(255) DEFAULT NULL, escuela VARCHAR(255) NOT NULL, colegio VARCHAR(255) NOT NULL, universidad VARCHAR(255) NOT NULL, idiomas VARCHAR(255) DEFAULT NULL, otros_conocimientos VARCHAR(255) DEFAULT NULL, numero_cedula VARCHAR(255) NOT NULL, sexo VARCHAR(255) DEFAULT NULL, nacionalidad VARCHAR(255) DEFAULT NULL, descripcion VARCHAR(255) DEFAULT NULL, fecha_nacimiento VARCHAR(255) NOT NULL, ciudad VARCHAR(255) DEFAULT NULL, direccion VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('DROP INDEX UNIQ_8D93D649444F97DD ON user');
        $this->addSql('ALTER TABLE user DROP phone');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE hoja_vida');
        $this->addSql('ALTER TABLE user ADD phone VARCHAR(180) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_8D93D649444F97DD ON user (phone)');
    }
}
