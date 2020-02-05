<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200204054214 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE carrera_relacionada (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(100) NOT NULL, description LONGTEXT DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE dias (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(50) NOT NULL, description LONGTEXT DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE estudiante_oferta (id INT AUTO_INCREMENT NOT NULL, id_estudiante_id INT NOT NULL, fecha_postu DATETIME NOT NULL, INDEX IDX_5A417850E771DD5C (id_estudiante_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE horarios (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(100) NOT NULL, description LONGTEXT DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE ofertas (id INT AUTO_INCREMENT NOT NULL, ofo_pas_id INT NOT NULL, tiempo_id INT NOT NULL, carrera_relacionada_id INT NOT NULL, tiempo_horarios_id INT NOT NULL, dias_id INT NOT NULL, user_id INT DEFAULT NULL, nombre_empresa VARCHAR(100) NOT NULL, conocimientos LONGTEXT NOT NULL, descripcion LONGTEXT NOT NULL, salario DOUBLE PRECISION DEFAULT NULL, horarios DATETIME NOT NULL, INDEX IDX_48C925F37FB3A480 (ofo_pas_id), INDEX IDX_48C925F3EA915999 (tiempo_id), INDEX IDX_48C925F3D189FA1B (carrera_relacionada_id), INDEX IDX_48C925F360A84E57 (tiempo_horarios_id), INDEX IDX_48C925F389B6A4B7 (dias_id), INDEX IDX_48C925F3A76ED395 (user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE ofo_pas (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(50) NOT NULL, description LONGTEXT DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE postulaciones (id INT AUTO_INCREMENT NOT NULL, id_estudiante_id INT NOT NULL, id_oferta_id INT NOT NULL, fecha_postu DATETIME NOT NULL, INDEX IDX_8D5D7A83E771DD5C (id_estudiante_id), INDEX IDX_8D5D7A837ACE4A03 (id_oferta_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE tiempo (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(50) NOT NULL, description LONGTEXT DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE estudiante_oferta ADD CONSTRAINT FK_5A417850E771DD5C FOREIGN KEY (id_estudiante_id) REFERENCES ofertas (id)');
        $this->addSql('ALTER TABLE ofertas ADD CONSTRAINT FK_48C925F37FB3A480 FOREIGN KEY (ofo_pas_id) REFERENCES ofo_pas (id)');
        $this->addSql('ALTER TABLE ofertas ADD CONSTRAINT FK_48C925F3EA915999 FOREIGN KEY (tiempo_id) REFERENCES tiempo (id)');
        $this->addSql('ALTER TABLE ofertas ADD CONSTRAINT FK_48C925F3D189FA1B FOREIGN KEY (carrera_relacionada_id) REFERENCES carrera_relacionada (id)');
        $this->addSql('ALTER TABLE ofertas ADD CONSTRAINT FK_48C925F360A84E57 FOREIGN KEY (tiempo_horarios_id) REFERENCES horarios (id)');
        $this->addSql('ALTER TABLE ofertas ADD CONSTRAINT FK_48C925F389B6A4B7 FOREIGN KEY (dias_id) REFERENCES dias (id)');
        $this->addSql('ALTER TABLE ofertas ADD CONSTRAINT FK_48C925F3A76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE postulaciones ADD CONSTRAINT FK_8D5D7A83E771DD5C FOREIGN KEY (id_estudiante_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE postulaciones ADD CONSTRAINT FK_8D5D7A837ACE4A03 FOREIGN KEY (id_oferta_id) REFERENCES ofertas (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE ofertas DROP FOREIGN KEY FK_48C925F3D189FA1B');
        $this->addSql('ALTER TABLE ofertas DROP FOREIGN KEY FK_48C925F389B6A4B7');
        $this->addSql('ALTER TABLE ofertas DROP FOREIGN KEY FK_48C925F360A84E57');
        $this->addSql('ALTER TABLE estudiante_oferta DROP FOREIGN KEY FK_5A417850E771DD5C');
        $this->addSql('ALTER TABLE postulaciones DROP FOREIGN KEY FK_8D5D7A837ACE4A03');
        $this->addSql('ALTER TABLE ofertas DROP FOREIGN KEY FK_48C925F37FB3A480');
        $this->addSql('ALTER TABLE ofertas DROP FOREIGN KEY FK_48C925F3EA915999');
        $this->addSql('DROP TABLE carrera_relacionada');
        $this->addSql('DROP TABLE dias');
        $this->addSql('DROP TABLE estudiante_oferta');
        $this->addSql('DROP TABLE horarios');
        $this->addSql('DROP TABLE ofertas');
        $this->addSql('DROP TABLE ofo_pas');
        $this->addSql('DROP TABLE postulaciones');
        $this->addSql('DROP TABLE tiempo');
    }
}
