<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200807094330 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE proveedores (id INT AUTO_INCREMENT NOT NULL, nombre VARCHAR(100) NOT NULL, password VARCHAR(50) NOT NULL, telefono VARCHAR(20) NOT NULL, email VARCHAR(100) NOT NULL, direccion VARCHAR(200) NOT NULL, poblacion VARCHAR(100) NOT NULL, codigoPostal VARCHAR(7) NOT NULL, provincia VARCHAR(30) NOT NULL, fechaCreacion DATE NOT NULL, activo TINYINT(1) NOT NULL, idPerfil INT DEFAULT NULL, INDEX fechaCreacion (fechaCreacion), INDEX proveedoresperfil (idPerfil), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE proveedores ADD CONSTRAINT FK_864FA8F1F574DEDD FOREIGN KEY (idPerfil) REFERENCES perfil (id)');
        $this->addSql('DROP TABLE autocomplete');
        $this->addSql('DROP TABLE geoname');
        $this->addSql('ALTER TABLE clientes DROP FOREIGN KEY clienteperfil');
        $this->addSql('ALTER TABLE clientes DROP admin1code, DROP admin2code, DROP admin3code, DROP admin4code, CHANGE apellidos apellidos VARCHAR(50) DEFAULT NULL, CHANGE email email VARCHAR(100) NOT NULL, CHANGE password password VARCHAR(10000) NOT NULL, CHANGE idPerfil idPerfil INT DEFAULT NULL, CHANGE activo activo TINYINT(1) NOT NULL');
        $this->addSql('ALTER TABLE clientes ADD CONSTRAINT FK_50FE07D7F574DEDD FOREIGN KEY (idPerfil) REFERENCES perfil (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE comentarioshospedaje DROP FOREIGN KEY comentariocliente');
        $this->addSql('ALTER TABLE comentarioshospedaje CHANGE idHabitacion idHabitacion INT DEFAULT NULL, CHANGE idCliente idCliente INT DEFAULT NULL, CHANGE activo activo TINYINT(1) NOT NULL');
        $this->addSql('ALTER TABLE comentarioshospedaje ADD CONSTRAINT FK_37EB8646E4A5F0D7 FOREIGN KEY (idCliente) REFERENCES clientes (id)');
        $this->addSql('ALTER TABLE habitaciones DROP FOREIGN KEY habitacionhospedaje');
        $this->addSql('ALTER TABLE habitaciones CHANGE idHospedaje idHospedaje INT DEFAULT NULL, CHANGE activo activo TINYINT(1) NOT NULL');
        $this->addSql('ALTER TABLE habitaciones ADD CONSTRAINT FK_E10783B2C7846A0 FOREIGN KEY (idHospedaje) REFERENCES hospedaje (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE hospedaje DROP admin1code, DROP admin2code, DROP admin3code, DROP admin4code, CHANGE idTipoHospedaje idTipoHospedaje INT DEFAULT NULL, CHANGE idProveedor idProveedor INT DEFAULT NULL, CHANGE activo activo TINYINT(1) NOT NULL');
        $this->addSql('ALTER TABLE multimedia DROP FOREIGN KEY multimediahabitacion');
        $this->addSql('ALTER TABLE multimedia CHANGE idHabitacion idHabitacion INT DEFAULT NULL, CHANGE principal principal TINYINT(1) NOT NULL, CHANGE activo activo TINYINT(1) NOT NULL');
        $this->addSql('ALTER TABLE multimedia ADD CONSTRAINT FK_6131286376AD8B50 FOREIGN KEY (idHabitacion) REFERENCES habitaciones (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE perfil CHANGE activo activo TINYINT(1) NOT NULL');
        $this->addSql('ALTER TABLE reservas DROP FOREIGN KEY reservasclientes');
        $this->addSql('ALTER TABLE reservas DROP FOREIGN KEY reservashabitacion');
        $this->addSql('ALTER TABLE reservas CHANGE idCliente idCliente INT DEFAULT NULL, CHANGE idHabitacion idHabitacion INT DEFAULT NULL, CHANGE activo activo TINYINT(1) NOT NULL');
        $this->addSql('ALTER TABLE reservas ADD CONSTRAINT FK_AA1DAB01E4A5F0D7 FOREIGN KEY (idCliente) REFERENCES clientes (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE reservas ADD CONSTRAINT FK_AA1DAB0176AD8B50 FOREIGN KEY (idHabitacion) REFERENCES habitaciones (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE servicios CHANGE activo activo TINYINT(1) NOT NULL');
        $this->addSql('ALTER TABLE servicioshabitaciones DROP FOREIGN KEY servhab_hab');
        $this->addSql('ALTER TABLE servicioshabitaciones DROP FOREIGN KEY servhab_serv');
        $this->addSql('ALTER TABLE servicioshabitaciones CHANGE idHabitacion idHabitacion INT DEFAULT NULL, CHANGE idServicio idServicio INT DEFAULT NULL, CHANGE activo activo TINYINT(1) NOT NULL');
        $this->addSql('ALTER TABLE servicioshabitaciones ADD CONSTRAINT FK_4313BF4E76AD8B50 FOREIGN KEY (idHabitacion) REFERENCES habitaciones (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE servicioshabitaciones ADD CONSTRAINT FK_4313BF4E9825D871 FOREIGN KEY (idServicio) REFERENCES servicios (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE servicioshabitaciones RENAME INDEX servhab.serv TO servhab_serv');
        $this->addSql('ALTER TABLE tipohospedaje CHANGE activo activo TINYINT(1) NOT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE autocomplete (id INT AUTO_INCREMENT NOT NULL, textobusqueda VARCHAR(600) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, tipo VARCHAR(2) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, admin1code VARCHAR(20) CHARACTER SET utf8mb4 DEFAULT \'NULL\' COLLATE `utf8mb4_unicode_ci`, admin2code VARCHAR(80) CHARACTER SET utf8mb4 DEFAULT \'NULL\' COLLATE `utf8mb4_unicode_ci`, admin3code VARCHAR(20) CHARACTER SET utf8mb4 DEFAULT \'NULL\' COLLATE `utf8mb4_unicode_ci`, admin4code VARCHAR(20) CHARACTER SET utf8mb4 DEFAULT \'NULL\' COLLATE `utf8mb4_unicode_ci`, idhospedaje INT DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE geoname (geonameid INT NOT NULL, name VARCHAR(200) CHARACTER SET utf8mb4 DEFAULT \'NULL\' COLLATE `utf8mb4_general_ci`, asciiname VARCHAR(200) CHARACTER SET utf8mb4 DEFAULT \'NULL\' COLLATE `utf8mb4_general_ci`, alternatenames VARCHAR(10000) CHARACTER SET utf8mb4 DEFAULT \'NULL\' COLLATE `utf8mb4_general_ci`, latitude NUMERIC(10, 5) DEFAULT \'NULL\', altitude NUMERIC(10, 5) DEFAULT \'NULL\', featureclass CHAR(1) CHARACTER SET utf8mb4 DEFAULT \'NULL\' COLLATE `utf8mb4_general_ci`, featurecode VARCHAR(10) CHARACTER SET utf8mb4 DEFAULT \'NULL\' COLLATE `utf8mb4_general_ci`, countrycode CHAR(2) CHARACTER SET utf8mb4 DEFAULT \'NULL\' COLLATE `utf8mb4_general_ci`, cc2 VARCHAR(200) CHARACTER SET utf8mb4 DEFAULT \'NULL\' COLLATE `utf8mb4_general_ci`, admin1code VARCHAR(20) CHARACTER SET utf8mb4 DEFAULT \'NULL\' COLLATE `utf8mb4_general_ci`, admin2code VARCHAR(80) CHARACTER SET utf8mb4 DEFAULT \'NULL\' COLLATE `utf8mb4_general_ci`, admin3code VARCHAR(20) CHARACTER SET utf8mb4 DEFAULT \'NULL\' COLLATE `utf8mb4_general_ci`, admin4code VARCHAR(20) CHARACTER SET utf8mb4 DEFAULT \'NULL\' COLLATE `utf8mb4_general_ci`, population INT DEFAULT NULL, elevation INT DEFAULT NULL, dem INT DEFAULT NULL, timezone VARCHAR(40) CHARACTER SET utf8mb4 DEFAULT \'NULL\' COLLATE `utf8mb4_general_ci`, modificationdate DATE DEFAULT \'NULL\', PRIMARY KEY(geonameid)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('DROP TABLE proveedores');
        $this->addSql('ALTER TABLE clientes DROP FOREIGN KEY FK_50FE07D7F574DEDD');
        $this->addSql('ALTER TABLE clientes ADD admin1code VARCHAR(20) CHARACTER SET utf8mb4 DEFAULT \'NULL\' COLLATE `utf8mb4_general_ci`, ADD admin2code VARCHAR(80) CHARACTER SET utf8mb4 DEFAULT \'NULL\' COLLATE `utf8mb4_general_ci`, ADD admin3code VARCHAR(20) CHARACTER SET utf8mb4 DEFAULT \'NULL\' COLLATE `utf8mb4_general_ci`, ADD admin4code VARCHAR(20) CHARACTER SET utf8mb4 DEFAULT \'NULL\' COLLATE `utf8mb4_general_ci`, CHANGE apellidos apellidos VARCHAR(50) CHARACTER SET utf8mb4 DEFAULT \'NULL\' COLLATE `utf8mb4_general_ci`, CHANGE email email VARCHAR(250) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, CHANGE password password VARCHAR(100) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, CHANGE activo activo TINYINT(1) DEFAULT \'0\' NOT NULL, CHANGE idPerfil idPerfil INT NOT NULL');
        $this->addSql('ALTER TABLE clientes ADD CONSTRAINT clienteperfil FOREIGN KEY (idPerfil) REFERENCES perfil (id) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('ALTER TABLE comentarioshospedaje DROP FOREIGN KEY FK_37EB8646E4A5F0D7');
        $this->addSql('ALTER TABLE comentarioshospedaje CHANGE activo activo TINYINT(1) DEFAULT \'0\' NOT NULL, CHANGE idCliente idCliente INT NOT NULL, CHANGE idHabitacion idHabitacion INT NOT NULL');
        $this->addSql('ALTER TABLE comentarioshospedaje ADD CONSTRAINT comentariocliente FOREIGN KEY (idCliente) REFERENCES clientes (id) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE habitaciones DROP FOREIGN KEY FK_E10783B2C7846A0');
        $this->addSql('ALTER TABLE habitaciones CHANGE activo activo TINYINT(1) DEFAULT \'0\' NOT NULL, CHANGE idHospedaje idHospedaje INT NOT NULL');
        $this->addSql('ALTER TABLE habitaciones ADD CONSTRAINT habitacionhospedaje FOREIGN KEY (idHospedaje) REFERENCES hospedaje (id) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE hospedaje ADD admin1code VARCHAR(20) CHARACTER SET utf8mb4 DEFAULT \'NULL\' COLLATE `utf8mb4_general_ci`, ADD admin2code VARCHAR(80) CHARACTER SET utf8mb4 DEFAULT \'NULL\' COLLATE `utf8mb4_general_ci`, ADD admin3code VARCHAR(20) CHARACTER SET utf8mb4 DEFAULT \'NULL\' COLLATE `utf8mb4_general_ci`, ADD admin4code VARCHAR(20) CHARACTER SET utf8mb4 DEFAULT \'NULL\' COLLATE `utf8mb4_general_ci`, CHANGE activo activo TINYINT(1) DEFAULT \'0\' NOT NULL, CHANGE idProveedor idProveedor INT NOT NULL, CHANGE idTipoHospedaje idTipoHospedaje INT NOT NULL');
        $this->addSql('ALTER TABLE multimedia DROP FOREIGN KEY FK_6131286376AD8B50');
        $this->addSql('ALTER TABLE multimedia CHANGE principal principal TINYINT(1) DEFAULT \'0\' NOT NULL, CHANGE activo activo TINYINT(1) DEFAULT \'0\' NOT NULL, CHANGE idHabitacion idHabitacion INT NOT NULL');
        $this->addSql('ALTER TABLE multimedia ADD CONSTRAINT multimediahabitacion FOREIGN KEY (idHabitacion) REFERENCES habitaciones (id) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE perfil CHANGE activo activo TINYINT(1) DEFAULT \'0\' NOT NULL');
        $this->addSql('ALTER TABLE reservas DROP FOREIGN KEY FK_AA1DAB01E4A5F0D7');
        $this->addSql('ALTER TABLE reservas DROP FOREIGN KEY FK_AA1DAB0176AD8B50');
        $this->addSql('ALTER TABLE reservas CHANGE activo activo TINYINT(1) DEFAULT \'0\' NOT NULL, CHANGE idCliente idCliente INT NOT NULL, CHANGE idHabitacion idHabitacion INT NOT NULL');
        $this->addSql('ALTER TABLE reservas ADD CONSTRAINT reservasclientes FOREIGN KEY (idCliente) REFERENCES clientes (id) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE reservas ADD CONSTRAINT reservashabitacion FOREIGN KEY (idHabitacion) REFERENCES habitaciones (id) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE servicios CHANGE activo activo TINYINT(1) DEFAULT \'0\' NOT NULL');
        $this->addSql('ALTER TABLE servicioshabitaciones DROP FOREIGN KEY FK_4313BF4E76AD8B50');
        $this->addSql('ALTER TABLE servicioshabitaciones DROP FOREIGN KEY FK_4313BF4E9825D871');
        $this->addSql('ALTER TABLE servicioshabitaciones CHANGE activo activo TINYINT(1) DEFAULT \'0\' NOT NULL, CHANGE idHabitacion idHabitacion INT NOT NULL, CHANGE idServicio idServicio INT NOT NULL');
        $this->addSql('ALTER TABLE servicioshabitaciones ADD CONSTRAINT servhab_hab FOREIGN KEY (idHabitacion) REFERENCES habitaciones (id) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE servicioshabitaciones ADD CONSTRAINT servhab_serv FOREIGN KEY (idServicio) REFERENCES servicios (id) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE servicioshabitaciones RENAME INDEX servhab_serv TO servhab.serv');
        $this->addSql('ALTER TABLE tipohospedaje CHANGE activo activo TINYINT(1) DEFAULT \'0\' NOT NULL');
    }
}
