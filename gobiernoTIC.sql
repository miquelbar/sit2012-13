SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

CREATE SCHEMA IF NOT EXISTS `gobiernoTIC` DEFAULT CHARACTER SET utf8 ;
SHOW WARNINGS;
USE `gobiernoTIC` ;

-- -----------------------------------------------------
-- Table `gobiernoTIC`.`PERSONA`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `gobiernoTIC`.`PERSONA` ;

SHOW WARNINGS;
CREATE  TABLE IF NOT EXISTS `gobiernoTIC`.`PERSONA` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `nombre` VARCHAR(100) NOT NULL ,
  `apellido1` VARCHAR(100) NULL ,
  `apellido2` VARCHAR(100) NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB;

SHOW WARNINGS;

-- -----------------------------------------------------
-- Table `gobiernoTIC`.`USUARIO`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `gobiernoTIC`.`USUARIO` ;

SHOW WARNINGS;
CREATE  TABLE IF NOT EXISTS `gobiernoTIC`.`USUARIO` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `correo` VARCHAR(100) NOT NULL ,
  `clave` VARCHAR(100) NOT NULL ,
  `bloqueado` TINYINT(1) NOT NULL DEFAULT false ,
  `persona_id` INT NOT NULL ,
  PRIMARY KEY (`id`) ,
  CONSTRAINT `FK_PERSONA`
    FOREIGN KEY (`persona_id` )
    REFERENCES `gobiernoTIC`.`PERSONA` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

SHOW WARNINGS;
CREATE UNIQUE INDEX `correo_UNIQUE` ON `gobiernoTIC`.`USUARIO` (`correo` ASC) ;

SHOW WARNINGS;
CREATE INDEX `FK_PERSONA_idx` ON `gobiernoTIC`.`USUARIO` (`persona_id` ASC) ;

SHOW WARNINGS;

-- -----------------------------------------------------
-- Table `gobiernoTIC`.`PERFIL`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `gobiernoTIC`.`PERFIL` ;

SHOW WARNINGS;
CREATE  TABLE IF NOT EXISTS `gobiernoTIC`.`PERFIL` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `nombre` VARCHAR(45) NOT NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB;

SHOW WARNINGS;

-- -----------------------------------------------------
-- Table `gobiernoTIC`.`PERFIL_USUARIO`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `gobiernoTIC`.`PERFIL_USUARIO` ;

SHOW WARNINGS;
CREATE  TABLE IF NOT EXISTS `gobiernoTIC`.`PERFIL_USUARIO` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `usuario_id` INT NOT NULL ,
  `perfil_id` INT NOT NULL ,
  PRIMARY KEY (`id`) ,
  CONSTRAINT `FK_USUARIO`
    FOREIGN KEY (`usuario_id` )
    REFERENCES `gobiernoTIC`.`USUARIO` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_PERFIL_USUARIO_PERFIL1`
    FOREIGN KEY (`perfil_id` )
    REFERENCES `gobiernoTIC`.`PERFIL` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

SHOW WARNINGS;
CREATE INDEX `fk_PERFIL_USUARIO_PERFIL1_idx` ON `gobiernoTIC`.`PERFIL_USUARIO` (`perfil_id` ASC) ;

SHOW WARNINGS;

-- -----------------------------------------------------
-- Table `gobiernoTIC`.`CARTERA`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `gobiernoTIC`.`CARTERA` ;

SHOW WARNINGS;
CREATE  TABLE IF NOT EXISTS `gobiernoTIC`.`CARTERA` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `fecha_creacion` DATETIME NOT NULL ,
  `fecha_inicio_periodo` DATETIME NOT NULL COMMENT 'Para aceptar propuestas' ,
  `fecha_fin_periodo` DATETIME NOT NULL COMMENT 'Para aceptar propuestas' ,
  `fecha_ultima_discusion` DATETIME NULL ,
  `fecha_obtencion_definitiva` DATETIME NULL ,
  `fecha_inicio_validez` DATETIME NULL ,
  `fecha_fin_validez` DATETIME NULL ,
  `fecha_ultima_modificacion` DATETIME NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB;

SHOW WARNINGS;

-- -----------------------------------------------------
-- Table `gobiernoTIC`.`VALORACION_CIO`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `gobiernoTIC`.`VALORACION_CIO` ;

SHOW WARNINGS;
CREATE  TABLE IF NOT EXISTS `gobiernoTIC`.`VALORACION_CIO` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `descripcion` VARCHAR(45) NOT NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB;

SHOW WARNINGS;

-- -----------------------------------------------------
-- Table `gobiernoTIC`.`TIPO_PRO`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `gobiernoTIC`.`TIPO_PRO` ;

SHOW WARNINGS;
CREATE  TABLE IF NOT EXISTS `gobiernoTIC`.`TIPO_PRO` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `nombre` VARCHAR(45) NOT NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB;

SHOW WARNINGS;

-- -----------------------------------------------------
-- Table `gobiernoTIC`.`PROPUESTA`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `gobiernoTIC`.`PROPUESTA` ;

SHOW WARNINGS;
CREATE  TABLE IF NOT EXISTS `gobiernoTIC`.`PROPUESTA` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `fecha_creacion` DATETIME NOT NULL ,
  `descripcion` VARCHAR(4000) NOT NULL ,
  `resumen` VARCHAR(500) NOT NULL ,
  `justificacion` VARCHAR(4000) NOT NULL ,
  `fecha_limite` DATETIME NOT NULL ,
  `estado` INT NOT NULL COMMENT 'ENUM(\'PENDIENTE_VISTO_BUENO\',\'EN_DISCUSION\',\'ANULADA\',\'ACEPTADA\',\'RECHAZADA\',\'SEGUN_DISPONIBILIDAD\')' ,
  `solicitante_id` INT NOT NULL ,
  `cartera_id` INT NOT NULL ,
  `valoracion_cio_id` INT NULL ,
  `tecnico_id` INT NULL ,
  `patrocinador_id` INT NULL ,
  `responsable_id` INT NULL ,
  `tipo_pro_id` INT NULL ,
  PRIMARY KEY (`id`) ,
  CONSTRAINT `fk_PROPUESTA_PERSONA1`
    FOREIGN KEY (`solicitante_id` )
    REFERENCES `gobiernoTIC`.`PERSONA` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_PROPUESTA_PERSONA2`
    FOREIGN KEY (`tecnico_id` )
    REFERENCES `gobiernoTIC`.`PERSONA` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_PROPUESTA_PERSONA4`
    FOREIGN KEY (`patrocinador_id` )
    REFERENCES `gobiernoTIC`.`PERSONA` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_PROPUESTA_PERSONA5`
    FOREIGN KEY (`responsable_id` )
    REFERENCES `gobiernoTIC`.`PERSONA` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_PROPUESTA_CARTERA1`
    FOREIGN KEY (`cartera_id` )
    REFERENCES `gobiernoTIC`.`CARTERA` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_PROPUESTA_VALORACION_CIO1`
    FOREIGN KEY (`valoracion_cio_id` )
    REFERENCES `gobiernoTIC`.`VALORACION_CIO` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_PROPUESTA_TIPO_PRO1`
    FOREIGN KEY (`tipo_pro_id` )
    REFERENCES `gobiernoTIC`.`TIPO_PRO` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

SHOW WARNINGS;
CREATE INDEX `fk_PROPUESTA_PERSONA1_idx` ON `gobiernoTIC`.`PROPUESTA` (`solicitante_id` ASC) ;

SHOW WARNINGS;
CREATE INDEX `fk_PROPUESTA_PERSONA2_idx` ON `gobiernoTIC`.`PROPUESTA` (`tecnico_id` ASC) ;

SHOW WARNINGS;
CREATE INDEX `fk_PROPUESTA_PERSONA4_idx` ON `gobiernoTIC`.`PROPUESTA` (`patrocinador_id` ASC) ;

SHOW WARNINGS;
CREATE INDEX `fk_PROPUESTA_PERSONA5_idx` ON `gobiernoTIC`.`PROPUESTA` (`responsable_id` ASC) ;

SHOW WARNINGS;
CREATE INDEX `fk_PROPUESTA_CARTERA1_idx` ON `gobiernoTIC`.`PROPUESTA` (`cartera_id` ASC) ;

SHOW WARNINGS;
CREATE INDEX `fk_PROPUESTA_VALORACION_CIO1_idx` ON `gobiernoTIC`.`PROPUESTA` (`valoracion_cio_id` ASC) ;

SHOW WARNINGS;
CREATE INDEX `fk_PROPUESTA_TIPO_PRO1_idx` ON `gobiernoTIC`.`PROPUESTA` (`tipo_pro_id` ASC) ;

SHOW WARNINGS;

-- -----------------------------------------------------
-- Table `gobiernoTIC`.`TIPO_NOTIFICACION`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `gobiernoTIC`.`TIPO_NOTIFICACION` ;

SHOW WARNINGS;
CREATE  TABLE IF NOT EXISTS `gobiernoTIC`.`TIPO_NOTIFICACION` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `mensaje` VARCHAR(45) NOT NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB;

SHOW WARNINGS;

-- -----------------------------------------------------
-- Table `gobiernoTIC`.`NOTIFICACION`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `gobiernoTIC`.`NOTIFICACION` ;

SHOW WARNINGS;
CREATE  TABLE IF NOT EXISTS `gobiernoTIC`.`NOTIFICACION` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `persona_id` INT NOT NULL ,
  `tipo_notificacion_id` INT NOT NULL ,
  `texto` VARCHAR(500) NULL ,
  PRIMARY KEY (`id`) ,
  CONSTRAINT `fk_NOTIFICACION_PERSONA1`
    FOREIGN KEY (`persona_id` )
    REFERENCES `gobiernoTIC`.`PERSONA` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_NOTIFICACION_TIPO_NOTIFICACION1`
    FOREIGN KEY (`tipo_notificacion_id` )
    REFERENCES `gobiernoTIC`.`TIPO_NOTIFICACION` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

SHOW WARNINGS;
CREATE INDEX `fk_NOTIFICACION_PERSONA1_idx` ON `gobiernoTIC`.`NOTIFICACION` (`persona_id` ASC) ;

SHOW WARNINGS;
CREATE INDEX `fk_NOTIFICACION_TIPO_NOTIFICACION1_idx` ON `gobiernoTIC`.`NOTIFICACION` (`tipo_notificacion_id` ASC) ;

SHOW WARNINGS;

-- -----------------------------------------------------
-- Table `gobiernoTIC`.`COMENTARIO`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `gobiernoTIC`.`COMENTARIO` ;

SHOW WARNINGS;
CREATE  TABLE IF NOT EXISTS `gobiernoTIC`.`COMENTARIO` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `propuesta_id` INT NOT NULL ,
  `persona_id` INT NOT NULL ,
  `comentario` VARCHAR(4000) NOT NULL ,
  `fecha` DATETIME NOT NULL ,
  PRIMARY KEY (`id`) ,
  CONSTRAINT `fk_COMENTARIO_PROPUESTA1`
    FOREIGN KEY (`propuesta_id` )
    REFERENCES `gobiernoTIC`.`PROPUESTA` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_COMENTARIO_PERSONA1`
    FOREIGN KEY (`persona_id` )
    REFERENCES `gobiernoTIC`.`PERSONA` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

SHOW WARNINGS;
CREATE INDEX `fk_COMENTARIO_PROPUESTA1_idx` ON `gobiernoTIC`.`COMENTARIO` (`propuesta_id` ASC) ;

SHOW WARNINGS;
CREATE INDEX `fk_COMENTARIO_PERSONA1_idx` ON `gobiernoTIC`.`COMENTARIO` (`persona_id` ASC) ;

SHOW WARNINGS;

-- -----------------------------------------------------
-- Table `gobiernoTIC`.`METRICA`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `gobiernoTIC`.`METRICA` ;

SHOW WARNINGS;
CREATE  TABLE IF NOT EXISTS `gobiernoTIC`.`METRICA` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `titulo` VARCHAR(45) NOT NULL ,
  `descripcion` VARCHAR(45) NULL ,
  `para_propuesta` TINYINT(1) NOT NULL DEFAULT false ,
  `para_proyecto` TINYINT(1) NOT NULL DEFAULT false ,
  `para_servicio` TINYINT(1) NOT NULL DEFAULT false ,
  `unidades` VARCHAR(45) NOT NULL ,
  `dominio` VARCHAR(3) NOT NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB;

SHOW WARNINGS;

-- -----------------------------------------------------
-- Table `gobiernoTIC`.`ESTADO_PROYECTO`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `gobiernoTIC`.`ESTADO_PROYECTO` ;

SHOW WARNINGS;
CREATE  TABLE IF NOT EXISTS `gobiernoTIC`.`ESTADO_PROYECTO` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `nombre` VARCHAR(100) NOT NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB;

SHOW WARNINGS;

-- -----------------------------------------------------
-- Table `gobiernoTIC`.`PROYECTO`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `gobiernoTIC`.`PROYECTO` ;

SHOW WARNINGS;
CREATE  TABLE IF NOT EXISTS `gobiernoTIC`.`PROYECTO` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `cartera_id` INT NOT NULL ,
  `propuesta_id` INT NULL ,
  `tipo_pro_id` INT NOT NULL ,
  `estado_proyecto_id` INT NOT NULL ,
  `patrocinador_id` INT NOT NULL ,
  `responsable_id` INT NOT NULL ,
  `codigo` VARCHAR(15) NOT NULL ,
  `nombre` VARCHAR(250) NOT NULL ,
  `fecha_inicio_prevista` DATETIME NOT NULL ,
  `fecha_fin_prevista` DATETIME NOT NULL ,
  `fecha_inicio_real` DATETIME NULL ,
  `fecha_fin_real` DATETIME NULL ,
  `descripcion` VARCHAR(4000) NULL ,
  `justificacion` VARCHAR(4000) NULL ,
  PRIMARY KEY (`id`) ,
  CONSTRAINT `fk_PROYECTO_CARTERA1`
    FOREIGN KEY (`cartera_id` )
    REFERENCES `gobiernoTIC`.`CARTERA` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_PROYECTO_PROPUESTA1`
    FOREIGN KEY (`propuesta_id` )
    REFERENCES `gobiernoTIC`.`PROPUESTA` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_PROYECTO_PERSONA1`
    FOREIGN KEY (`patrocinador_id` )
    REFERENCES `gobiernoTIC`.`PERSONA` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_PROYECTO_PERSONA2`
    FOREIGN KEY (`responsable_id` )
    REFERENCES `gobiernoTIC`.`PERSONA` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_PROYECTO_ESTADO_PROYECTO1`
    FOREIGN KEY (`estado_proyecto_id` )
    REFERENCES `gobiernoTIC`.`ESTADO_PROYECTO` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_PROYECTO_TIPO_PRO1`
    FOREIGN KEY (`tipo_pro_id` )
    REFERENCES `gobiernoTIC`.`TIPO_PRO` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

SHOW WARNINGS;
CREATE INDEX `fk_PROYECTO_CARTERA1_idx` ON `gobiernoTIC`.`PROYECTO` (`cartera_id` ASC) ;

SHOW WARNINGS;
CREATE INDEX `fk_PROYECTO_PROPUESTA1_idx` ON `gobiernoTIC`.`PROYECTO` (`propuesta_id` ASC) ;

SHOW WARNINGS;
CREATE INDEX `fk_PROYECTO_PERSONA1_idx` ON `gobiernoTIC`.`PROYECTO` (`patrocinador_id` ASC) ;

SHOW WARNINGS;
CREATE INDEX `fk_PROYECTO_PERSONA2_idx` ON `gobiernoTIC`.`PROYECTO` (`responsable_id` ASC) ;

SHOW WARNINGS;
CREATE INDEX `fk_PROYECTO_ESTADO_PROYECTO1_idx` ON `gobiernoTIC`.`PROYECTO` (`estado_proyecto_id` ASC) ;

SHOW WARNINGS;
CREATE INDEX `fk_PROYECTO_TIPO_PRO1_idx` ON `gobiernoTIC`.`PROYECTO` (`tipo_pro_id` ASC) ;

SHOW WARNINGS;

-- -----------------------------------------------------
-- Table `gobiernoTIC`.`SERVICIO`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `gobiernoTIC`.`SERVICIO` ;

SHOW WARNINGS;
CREATE  TABLE IF NOT EXISTS `gobiernoTIC`.`SERVICIO` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `fecha_inicio` VARCHAR(45) NOT NULL ,
  `fecha_final` VARCHAR(45) NULL ,
  `responsable_id` INT NULL ,
  `nombre` VARCHAR(100) NOT NULL ,
  PRIMARY KEY (`id`) ,
  CONSTRAINT `fk_SERVICIO_PERSONA1`
    FOREIGN KEY (`responsable_id` )
    REFERENCES `gobiernoTIC`.`PERSONA` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

SHOW WARNINGS;
CREATE INDEX `fk_SERVICIO_PERSONA1_idx` ON `gobiernoTIC`.`SERVICIO` (`responsable_id` ASC) ;

SHOW WARNINGS;

-- -----------------------------------------------------
-- Table `gobiernoTIC`.`VALOR_METRICA`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `gobiernoTIC`.`VALOR_METRICA` ;

SHOW WARNINGS;
CREATE  TABLE IF NOT EXISTS `gobiernoTIC`.`VALOR_METRICA` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `metrica_id` INT NOT NULL ,
  `proyecto_id` INT NULL ,
  `propuesta_id` INT NULL ,
  `servicio_id` INT NULL ,
  `fecha` DATETIME NULL ,
  `valor` VARCHAR(100) NOT NULL ,
  PRIMARY KEY (`id`) ,
  CONSTRAINT `fk_VALOR_METRICA_METRICA1`
    FOREIGN KEY (`metrica_id` )
    REFERENCES `gobiernoTIC`.`METRICA` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_VALOR_METRICA_PROYECTO1`
    FOREIGN KEY (`proyecto_id` )
    REFERENCES `gobiernoTIC`.`PROYECTO` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_VALOR_METRICA_PROPUESTA1`
    FOREIGN KEY (`propuesta_id` )
    REFERENCES `gobiernoTIC`.`PROPUESTA` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_VALOR_METRICA_SERVICIO1`
    FOREIGN KEY (`servicio_id` )
    REFERENCES `gobiernoTIC`.`SERVICIO` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

SHOW WARNINGS;
CREATE INDEX `fk_VALOR_METRICA_METRICA1_idx` ON `gobiernoTIC`.`VALOR_METRICA` (`metrica_id` ASC) ;

SHOW WARNINGS;
CREATE INDEX `fk_VALOR_METRICA_PROYECTO1_idx` ON `gobiernoTIC`.`VALOR_METRICA` (`proyecto_id` ASC) ;

SHOW WARNINGS;
CREATE INDEX `fk_VALOR_METRICA_PROPUESTA1_idx` ON `gobiernoTIC`.`VALOR_METRICA` (`propuesta_id` ASC) ;

SHOW WARNINGS;
CREATE INDEX `fk_VALOR_METRICA_SERVICIO1_idx` ON `gobiernoTIC`.`VALOR_METRICA` (`servicio_id` ASC) ;

SHOW WARNINGS;

-- -----------------------------------------------------
-- Table `gobiernoTIC`.`AREA_FUNCIONAL`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `gobiernoTIC`.`AREA_FUNCIONAL` ;

SHOW WARNINGS;
CREATE  TABLE IF NOT EXISTS `gobiernoTIC`.`AREA_FUNCIONAL` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `nombre` VARCHAR(45) NOT NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB;

SHOW WARNINGS;

-- -----------------------------------------------------
-- Table `gobiernoTIC`.`AREA_PROPUESTA`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `gobiernoTIC`.`AREA_PROPUESTA` ;

SHOW WARNINGS;
CREATE  TABLE IF NOT EXISTS `gobiernoTIC`.`AREA_PROPUESTA` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `area_funcional_id` INT NOT NULL ,
  `propuesta_id` INT NOT NULL ,
  PRIMARY KEY (`id`) ,
  CONSTRAINT `fk_AREA_FUNCIONAL_has_PROPUESTA_AREA_FUNCIONAL1`
    FOREIGN KEY (`area_funcional_id` )
    REFERENCES `gobiernoTIC`.`AREA_FUNCIONAL` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_AREA_FUNCIONAL_has_PROPUESTA_PROPUESTA1`
    FOREIGN KEY (`propuesta_id` )
    REFERENCES `gobiernoTIC`.`PROPUESTA` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

SHOW WARNINGS;
CREATE INDEX `fk_AREA_FUNCIONAL_has_PROPUESTA_PROPUESTA1_idx` ON `gobiernoTIC`.`AREA_PROPUESTA` (`propuesta_id` ASC) ;

SHOW WARNINGS;
CREATE INDEX `fk_AREA_FUNCIONAL_has_PROPUESTA_AREA_FUNCIONAL1_idx` ON `gobiernoTIC`.`AREA_PROPUESTA` (`area_funcional_id` ASC) ;

SHOW WARNINGS;

-- -----------------------------------------------------
-- Table `gobiernoTIC`.`AREA_PROYECTO`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `gobiernoTIC`.`AREA_PROYECTO` ;

SHOW WARNINGS;
CREATE  TABLE IF NOT EXISTS `gobiernoTIC`.`AREA_PROYECTO` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `proyecto_id` INT NOT NULL ,
  `area_funcional_id` INT NOT NULL ,
  PRIMARY KEY (`id`) ,
  CONSTRAINT `fk_PROYECTO_has_AREA_FUNCIONAL_PROYECTO1`
    FOREIGN KEY (`proyecto_id` )
    REFERENCES `gobiernoTIC`.`PROYECTO` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_PROYECTO_has_AREA_FUNCIONAL_AREA_FUNCIONAL1`
    FOREIGN KEY (`area_funcional_id` )
    REFERENCES `gobiernoTIC`.`AREA_FUNCIONAL` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

SHOW WARNINGS;
CREATE INDEX `fk_PROYECTO_has_AREA_FUNCIONAL_AREA_FUNCIONAL1_idx` ON `gobiernoTIC`.`AREA_PROYECTO` (`area_funcional_id` ASC) ;

SHOW WARNINGS;
CREATE INDEX `fk_PROYECTO_has_AREA_FUNCIONAL_PROYECTO1_idx` ON `gobiernoTIC`.`AREA_PROYECTO` (`proyecto_id` ASC) ;

SHOW WARNINGS;

-- -----------------------------------------------------
-- Table `gobiernoTIC`.`AREA_PERSONA`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `gobiernoTIC`.`AREA_PERSONA` ;

SHOW WARNINGS;
CREATE  TABLE IF NOT EXISTS `gobiernoTIC`.`AREA_PERSONA` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `area_funcional_id` INT NOT NULL ,
  `persona_id` INT NOT NULL ,
  PRIMARY KEY (`id`) ,
  CONSTRAINT `fk_AREA_FUNCIONAL_has_PERSONA_AREA_FUNCIONAL1`
    FOREIGN KEY (`area_funcional_id` )
    REFERENCES `gobiernoTIC`.`AREA_FUNCIONAL` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_AREA_FUNCIONAL_has_PERSONA_PERSONA1`
    FOREIGN KEY (`persona_id` )
    REFERENCES `gobiernoTIC`.`PERSONA` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

SHOW WARNINGS;
CREATE INDEX `fk_AREA_FUNCIONAL_has_PERSONA_PERSONA1_idx` ON `gobiernoTIC`.`AREA_PERSONA` (`persona_id` ASC) ;

SHOW WARNINGS;
CREATE INDEX `fk_AREA_FUNCIONAL_has_PERSONA_AREA_FUNCIONAL1_idx` ON `gobiernoTIC`.`AREA_PERSONA` (`area_funcional_id` ASC) ;

SHOW WARNINGS;

-- -----------------------------------------------------
-- Table `gobiernoTIC`.`AREA_SERVICIO`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `gobiernoTIC`.`AREA_SERVICIO` ;

SHOW WARNINGS;
CREATE  TABLE IF NOT EXISTS `gobiernoTIC`.`AREA_SERVICIO` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `area_funcional_id` INT NOT NULL ,
  `servicio_id` INT NOT NULL ,
  PRIMARY KEY (`id`) ,
  CONSTRAINT `fk_AREA_FUNCIONAL_has_SERVICIO_AREA_FUNCIONAL1`
    FOREIGN KEY (`area_funcional_id` )
    REFERENCES `gobiernoTIC`.`AREA_FUNCIONAL` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_AREA_FUNCIONAL_has_SERVICIO_SERVICIO1`
    FOREIGN KEY (`servicio_id` )
    REFERENCES `gobiernoTIC`.`SERVICIO` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

SHOW WARNINGS;
CREATE INDEX `fk_AREA_FUNCIONAL_has_SERVICIO_SERVICIO1_idx` ON `gobiernoTIC`.`AREA_SERVICIO` (`servicio_id` ASC) ;

SHOW WARNINGS;
CREATE INDEX `fk_AREA_FUNCIONAL_has_SERVICIO_AREA_FUNCIONAL1_idx` ON `gobiernoTIC`.`AREA_SERVICIO` (`area_funcional_id` ASC) ;

SHOW WARNINGS;

-- -----------------------------------------------------
-- Table `gobiernoTIC`.`PROYECTO_SERVICIO`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `gobiernoTIC`.`PROYECTO_SERVICIO` ;

SHOW WARNINGS;
CREATE  TABLE IF NOT EXISTS `gobiernoTIC`.`PROYECTO_SERVICIO` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `servicio_id` INT NOT NULL ,
  `proyecto_id` INT NOT NULL ,
  `fecha` DATETIME NOT NULL ,
  `implicacion` VARCHAR(100) NOT NULL ,
  PRIMARY KEY (`id`) ,
  CONSTRAINT `fk_SERVICIO_has_PROYECTO_SERVICIO1`
    FOREIGN KEY (`servicio_id` )
    REFERENCES `gobiernoTIC`.`SERVICIO` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_SERVICIO_has_PROYECTO_PROYECTO1`
    FOREIGN KEY (`proyecto_id` )
    REFERENCES `gobiernoTIC`.`PROYECTO` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

SHOW WARNINGS;
CREATE INDEX `fk_SERVICIO_has_PROYECTO_PROYECTO1_idx` ON `gobiernoTIC`.`PROYECTO_SERVICIO` (`proyecto_id` ASC) ;

SHOW WARNINGS;
CREATE INDEX `fk_SERVICIO_has_PROYECTO_SERVICIO1_idx` ON `gobiernoTIC`.`PROYECTO_SERVICIO` (`servicio_id` ASC) ;

SHOW WARNINGS;

-- -----------------------------------------------------
-- Table `gobiernoTIC`.`PRINCIPIO_TIC`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `gobiernoTIC`.`PRINCIPIO_TIC` ;

SHOW WARNINGS;
CREATE  TABLE IF NOT EXISTS `gobiernoTIC`.`PRINCIPIO_TIC` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `nombre` VARCHAR(45) NOT NULL ,
  `descripcion` VARCHAR(4000) NOT NULL ,
  `fecha_inicio` DATE NOT NULL ,
  `fecha_fin` DATE NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB;

SHOW WARNINGS;

-- -----------------------------------------------------
-- Table `gobiernoTIC`.`OBJETIVO_ESTRATEGICO`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `gobiernoTIC`.`OBJETIVO_ESTRATEGICO` ;

SHOW WARNINGS;
CREATE  TABLE IF NOT EXISTS `gobiernoTIC`.`OBJETIVO_ESTRATEGICO` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `nombre` VARCHAR(45) NOT NULL ,
  `descripcion` VARCHAR(4000) NOT NULL ,
  `principio_tic_id` INT NOT NULL ,
  `fecha_inicio` DATE NOT NULL ,
  `fecha_fin` DATE NULL ,
  PRIMARY KEY (`id`) ,
  CONSTRAINT `fk_OBJETIVO_ESTRATEGICO_PRINCIPIO_TIC1`
    FOREIGN KEY (`principio_tic_id` )
    REFERENCES `gobiernoTIC`.`PRINCIPIO_TIC` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

SHOW WARNINGS;
CREATE INDEX `fk_OBJETIVO_ESTRATEGICO_PRINCIPIO_TIC1_idx` ON `gobiernoTIC`.`OBJETIVO_ESTRATEGICO` (`principio_tic_id` ASC) ;

SHOW WARNINGS;

-- -----------------------------------------------------
-- Table `gobiernoTIC`.`OBJETIVO_TACTICO`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `gobiernoTIC`.`OBJETIVO_TACTICO` ;

SHOW WARNINGS;
CREATE  TABLE IF NOT EXISTS `gobiernoTIC`.`OBJETIVO_TACTICO` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `nombre` VARCHAR(45) NOT NULL ,
  `descripcion` VARCHAR(4000) NOT NULL ,
  `objetivo_estrategico_id` INT NOT NULL ,
  `fecha_inicio` DATE NOT NULL ,
  `fecha_fin` DATE NULL ,
  PRIMARY KEY (`id`) ,
  CONSTRAINT `fk_OBJETIVO_TACTICO_OBJETIVO_ESTRATEGICO1`
    FOREIGN KEY (`objetivo_estrategico_id` )
    REFERENCES `gobiernoTIC`.`OBJETIVO_ESTRATEGICO` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

SHOW WARNINGS;
CREATE INDEX `fk_OBJETIVO_TACTICO_OBJETIVO_ESTRATEGICO1_idx` ON `gobiernoTIC`.`OBJETIVO_TACTICO` (`objetivo_estrategico_id` ASC) ;

SHOW WARNINGS;

-- -----------------------------------------------------
-- Table `gobiernoTIC`.`OBJETIVO_PROPUESTA`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `gobiernoTIC`.`OBJETIVO_PROPUESTA` ;

SHOW WARNINGS;
CREATE  TABLE IF NOT EXISTS `gobiernoTIC`.`OBJETIVO_PROPUESTA` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `objetivo_tactico_id` INT NOT NULL ,
  `propuesta_id` INT NOT NULL ,
  PRIMARY KEY (`id`) ,
  CONSTRAINT `fk_OBJETIVO_TACTICO_has_PROPUESTA_OBJETIVO_TACTICO1`
    FOREIGN KEY (`objetivo_tactico_id` )
    REFERENCES `gobiernoTIC`.`OBJETIVO_TACTICO` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_OBJETIVO_TACTICO_has_PROPUESTA_PROPUESTA1`
    FOREIGN KEY (`propuesta_id` )
    REFERENCES `gobiernoTIC`.`PROPUESTA` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

SHOW WARNINGS;
CREATE INDEX `fk_OBJETIVO_TACTICO_has_PROPUESTA_PROPUESTA1_idx` ON `gobiernoTIC`.`OBJETIVO_PROPUESTA` (`propuesta_id` ASC) ;

SHOW WARNINGS;
CREATE INDEX `fk_OBJETIVO_TACTICO_has_PROPUESTA_OBJETIVO_TACTICO1_idx` ON `gobiernoTIC`.`OBJETIVO_PROPUESTA` (`objetivo_tactico_id` ASC) ;

SHOW WARNINGS;

-- -----------------------------------------------------
-- Table `gobiernoTIC`.`OBJETIVO_PROYECTO`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `gobiernoTIC`.`OBJETIVO_PROYECTO` ;

SHOW WARNINGS;
CREATE  TABLE IF NOT EXISTS `gobiernoTIC`.`OBJETIVO_PROYECTO` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `objetivo_tactico_id` INT NOT NULL ,
  `proyecto_id` INT NOT NULL ,
  PRIMARY KEY (`id`) ,
  CONSTRAINT `fk_OBJETIVO_TACTICO_has_PROYECTO_OBJETIVO_TACTICO1`
    FOREIGN KEY (`objetivo_tactico_id` )
    REFERENCES `gobiernoTIC`.`OBJETIVO_TACTICO` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_OBJETIVO_TACTICO_has_PROYECTO_PROYECTO1`
    FOREIGN KEY (`proyecto_id` )
    REFERENCES `gobiernoTIC`.`PROYECTO` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

SHOW WARNINGS;
CREATE INDEX `fk_OBJETIVO_TACTICO_has_PROYECTO_PROYECTO1_idx` ON `gobiernoTIC`.`OBJETIVO_PROYECTO` (`proyecto_id` ASC) ;

SHOW WARNINGS;
CREATE INDEX `fk_OBJETIVO_TACTICO_has_PROYECTO_OBJETIVO_TACTICO1_idx` ON `gobiernoTIC`.`OBJETIVO_PROYECTO` (`objetivo_tactico_id` ASC) ;

SHOW WARNINGS;
USE `gobiernoTIC` ;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;

-- -----------------------------------------------------
-- Data for table `gobiernoTIC`.`PERSONA`
-- -----------------------------------------------------
START TRANSACTION;
USE `gobiernoTIC`;
INSERT INTO `gobiernoTIC`.`PERSONA` (`id`, `nombre`, `apellido1`, `apellido2`) VALUES (1, 'Alejandro', NULL, NULL);
INSERT INTO `gobiernoTIC`.`PERSONA` (`id`, `nombre`, `apellido1`, `apellido2`) VALUES (2, 'Francisco', NULL, NULL);
INSERT INTO `gobiernoTIC`.`PERSONA` (`id`, `nombre`, `apellido1`, `apellido2`) VALUES (3, 'Miguel', 'Juan', 'Ríos');
INSERT INTO `gobiernoTIC`.`PERSONA` (`id`, `nombre`, `apellido1`, `apellido2`) VALUES (4, 'Miquel', NULL, NULL);
INSERT INTO `gobiernoTIC`.`PERSONA` (`id`, `nombre`, `apellido1`, `apellido2`) VALUES (5, 'Patrocinador', 'Guay', NULL);
INSERT INTO `gobiernoTIC`.`PERSONA` (`id`, `nombre`, `apellido1`, `apellido2`) VALUES (6, 'CIO', 'Chachi', NULL);

COMMIT;

-- -----------------------------------------------------
-- Data for table `gobiernoTIC`.`USUARIO`
-- -----------------------------------------------------
START TRANSACTION;
USE `gobiernoTIC`;
INSERT INTO `gobiernoTIC`.`USUARIO` (`id`, `correo`, `clave`, `bloqueado`, `persona_id`) VALUES (3, 'miguel@uib.es', 'miguel', false, 3);
INSERT INTO `gobiernoTIC`.`USUARIO` (`id`, `correo`, `clave`, `bloqueado`, `persona_id`) VALUES (1, 'alejandro@uib.es', 'alejandro', false, 1);
INSERT INTO `gobiernoTIC`.`USUARIO` (`id`, `correo`, `clave`, `bloqueado`, `persona_id`) VALUES (2, 'francisco@uib.es', 'francisco', false, 2);
INSERT INTO `gobiernoTIC`.`USUARIO` (`id`, `correo`, `clave`, `bloqueado`, `persona_id`) VALUES (4, 'miquel@uib.es', 'miquel', false, 4);
INSERT INTO `gobiernoTIC`.`USUARIO` (`id`, `correo`, `clave`, `bloqueado`, `persona_id`) VALUES (5, 'patrocinador@uib.es', 'patrocinador', false, 5);
INSERT INTO `gobiernoTIC`.`USUARIO` (`id`, `correo`, `clave`, `bloqueado`, `persona_id`) VALUES (6, 'cio@uib.es', 'cio', false, 6);

COMMIT;

-- -----------------------------------------------------
-- Data for table `gobiernoTIC`.`PERFIL`
-- -----------------------------------------------------
START TRANSACTION;
USE `gobiernoTIC`;
INSERT INTO `gobiernoTIC`.`PERFIL` (`id`, `nombre`) VALUES (1, 'Administrador');
INSERT INTO `gobiernoTIC`.`PERFIL` (`id`, `nombre`) VALUES (2, 'Solicitante');
INSERT INTO `gobiernoTIC`.`PERFIL` (`id`, `nombre`) VALUES (3, 'CIO');
INSERT INTO `gobiernoTIC`.`PERFIL` (`id`, `nombre`) VALUES (4, 'Responsable');
INSERT INTO `gobiernoTIC`.`PERFIL` (`id`, `nombre`) VALUES (5, 'Patrocinador');
INSERT INTO `gobiernoTIC`.`PERFIL` (`id`, `nombre`) VALUES (6, 'Técnico');

COMMIT;

-- -----------------------------------------------------
-- Data for table `gobiernoTIC`.`PERFIL_USUARIO`
-- -----------------------------------------------------
START TRANSACTION;
USE `gobiernoTIC`;
INSERT INTO `gobiernoTIC`.`PERFIL_USUARIO` (`id`, `usuario_id`, `perfil_id`) VALUES (1, 1, 1);
INSERT INTO `gobiernoTIC`.`PERFIL_USUARIO` (`id`, `usuario_id`, `perfil_id`) VALUES (2, 2, 4);
INSERT INTO `gobiernoTIC`.`PERFIL_USUARIO` (`id`, `usuario_id`, `perfil_id`) VALUES (3, 3, 6);
INSERT INTO `gobiernoTIC`.`PERFIL_USUARIO` (`id`, `usuario_id`, `perfil_id`) VALUES (4, 4, 2);
INSERT INTO `gobiernoTIC`.`PERFIL_USUARIO` (`id`, `usuario_id`, `perfil_id`) VALUES (5, 5, 5);
INSERT INTO `gobiernoTIC`.`PERFIL_USUARIO` (`id`, `usuario_id`, `perfil_id`) VALUES (6, 6, 3);

COMMIT;

-- -----------------------------------------------------
-- Data for table `gobiernoTIC`.`CARTERA`
-- -----------------------------------------------------
START TRANSACTION;
USE `gobiernoTIC`;
INSERT INTO `gobiernoTIC`.`CARTERA` (`id`, `fecha_creacion`, `fecha_inicio_periodo`, `fecha_fin_periodo`, `fecha_ultima_discusion`, `fecha_obtencion_definitiva`, `fecha_inicio_validez`, `fecha_fin_validez`, `fecha_ultima_modificacion`) VALUES (1, '10/12/2012', '10/12/2012', '31/03/2013', NULL, NULL, NULL, NULL, NULL);

COMMIT;

-- -----------------------------------------------------
-- Data for table `gobiernoTIC`.`VALORACION_CIO`
-- -----------------------------------------------------
START TRANSACTION;
USE `gobiernoTIC`;
INSERT INTO `gobiernoTIC`.`VALORACION_CIO` (`id`, `descripcion`) VALUES (1, 'Realizar');
INSERT INTO `gobiernoTIC`.`VALORACION_CIO` (`id`, `descripcion`) VALUES (2, 'No realizar');
INSERT INTO `gobiernoTIC`.`VALORACION_CIO` (`id`, `descripcion`) VALUES (3, 'Según disponibilidad');

COMMIT;

-- -----------------------------------------------------
-- Data for table `gobiernoTIC`.`TIPO_PRO`
-- -----------------------------------------------------
START TRANSACTION;
USE `gobiernoTIC`;
INSERT INTO `gobiernoTIC`.`TIPO_PRO` (`id`, `nombre`) VALUES (1, 'Infraestructura');
INSERT INTO `gobiernoTIC`.`TIPO_PRO` (`id`, `nombre`) VALUES (2, 'Arquitectura');
INSERT INTO `gobiernoTIC`.`TIPO_PRO` (`id`, `nombre`) VALUES (3, 'Negocio');

COMMIT;

-- -----------------------------------------------------
-- Data for table `gobiernoTIC`.`TIPO_NOTIFICACION`
-- -----------------------------------------------------
START TRANSACTION;
USE `gobiernoTIC`;
INSERT INTO `gobiernoTIC`.`TIPO_NOTIFICACION` (`id`, `mensaje`) VALUES (1, 'Hay propuestas pendientes de asignar');
INSERT INTO `gobiernoTIC`.`TIPO_NOTIFICACION` (`id`, `mensaje`) VALUES (2, 'Hay propuestas pendientes de evaluar');
INSERT INTO `gobiernoTIC`.`TIPO_NOTIFICACION` (`id`, `mensaje`) VALUES (3, 'Su propuesta ha sido aceptada por la dirección');
INSERT INTO `gobiernoTIC`.`TIPO_NOTIFICACION` (`id`, `mensaje`) VALUES (4, 'Su propuesta ha sido rechazada por la dirección');

COMMIT;

-- -----------------------------------------------------
-- Data for table `gobiernoTIC`.`METRICA`
-- -----------------------------------------------------
START TRANSACTION;
USE `gobiernoTIC`;
INSERT INTO `gobiernoTIC`.`METRICA` (`id`, `titulo`, `descripcion`, `para_propuesta`, `para_proyecto`, `para_servicio`, `unidades`, `dominio`) VALUES (1, 'Personal necesario', 'Personas necesarias para realizar el proyecto o mantener el servicio', true, true, true, 'personas/mes', 'FLT');
INSERT INTO `gobiernoTIC`.`METRICA` (`id`, `titulo`, `descripcion`, `para_propuesta`, `para_proyecto`, `para_servicio`, `unidades`, `dominio`) VALUES (2, 'Número de incidencias', NULL, false, true, true, 'incidencias', 'INT');
INSERT INTO `gobiernoTIC`.`METRICA` (`id`, `titulo`, `descripcion`, `para_propuesta`, `para_proyecto`, `para_servicio`, `unidades`, `dominio`) VALUES (3, 'Ratio de uso', NULL, false, false, true, 'accesos/día', 'FLT');
INSERT INTO `gobiernoTIC`.`METRICA` (`id`, `titulo`, `descripcion`, `para_propuesta`, `para_proyecto`, `para_servicio`, `unidades`, `dominio`) VALUES (4, 'Satisfacción', 'Grado de satisfacción en una escala del 1 al 10 en la realización de un proyecto', false, true, false, '-', 'INT');
INSERT INTO `gobiernoTIC`.`METRICA` (`id`, `titulo`, `descripcion`, `para_propuesta`, `para_proyecto`, `para_servicio`, `unidades`, `dominio`) VALUES (5, 'Updtime', NULL, false, false, true, '%', 'PCT');

COMMIT;

-- -----------------------------------------------------
-- Data for table `gobiernoTIC`.`ESTADO_PROYECTO`
-- -----------------------------------------------------
START TRANSACTION;
USE `gobiernoTIC`;
INSERT INTO `gobiernoTIC`.`ESTADO_PROYECTO` (`id`, `nombre`) VALUES (1, 'Pendiente de inicio');
INSERT INTO `gobiernoTIC`.`ESTADO_PROYECTO` (`id`, `nombre`) VALUES (2, 'Iniciado');
INSERT INTO `gobiernoTIC`.`ESTADO_PROYECTO` (`id`, `nombre`) VALUES (3, 'Finalizado');
INSERT INTO `gobiernoTIC`.`ESTADO_PROYECTO` (`id`, `nombre`) VALUES (4, 'Anulado');
INSERT INTO `gobiernoTIC`.`ESTADO_PROYECTO` (`id`, `nombre`) VALUES (5, 'Congelado');

COMMIT;

-- -----------------------------------------------------
-- Data for table `gobiernoTIC`.`AREA_FUNCIONAL`
-- -----------------------------------------------------
START TRANSACTION;
USE `gobiernoTIC`;
INSERT INTO `gobiernoTIC`.`AREA_FUNCIONAL` (`id`, `nombre`) VALUES (1, 'Académica');
INSERT INTO `gobiernoTIC`.`AREA_FUNCIONAL` (`id`, `nombre`) VALUES (2, 'Patrimonio');
INSERT INTO `gobiernoTIC`.`AREA_FUNCIONAL` (`id`, `nombre`) VALUES (3, 'Recursos humanos');
INSERT INTO `gobiernoTIC`.`AREA_FUNCIONAL` (`id`, `nombre`) VALUES (4, 'Contabilidad');
INSERT INTO `gobiernoTIC`.`AREA_FUNCIONAL` (`id`, `nombre`) VALUES (5, 'Bibliotecas');

COMMIT;

-- -----------------------------------------------------
-- Data for table `gobiernoTIC`.`PRINCIPIO_TIC`
-- -----------------------------------------------------
START TRANSACTION;
USE `gobiernoTIC`;
INSERT INTO `gobiernoTIC`.`PRINCIPIO_TIC` (`id`, `nombre`, `descripcion`, `fecha_inicio`, `fecha_fin`) VALUES (1, 'Reconeixement', 'Transparència, visibilitat i comunicació de serveis, projectes, etc. des del CTI cap a la UIB', '01/12/2012', NULL);
INSERT INTO `gobiernoTIC`.`PRINCIPIO_TIC` (`id`, `nombre`, `descripcion`, `fecha_inicio`, `fecha_fin`) VALUES (2, 'Responsabilitat', 'Governança i gestió integrada i compresa pel CTI.', '01/12/2012', NULL);
INSERT INTO `gobiernoTIC`.`PRINCIPIO_TIC` (`id`, `nombre`, `descripcion`, `fecha_inicio`, `fecha_fin`) VALUES (3, 'Assoliment', 'Esponsorització clara de les actuacions, acompanyament institucional identificat i la seva difusió.', '01/12/2012', NULL);

COMMIT;

-- -----------------------------------------------------
-- Data for table `gobiernoTIC`.`OBJETIVO_ESTRATEGICO`
-- -----------------------------------------------------
START TRANSACTION;
USE `gobiernoTIC`;
INSERT INTO `gobiernoTIC`.`OBJETIVO_ESTRATEGICO` (`id`, `nombre`, `descripcion`, `principio_tic_id`, `fecha_inicio`, `fecha_fin`) VALUES (1, 'Canviar la cultura ', 'Canviar la cultura', 1, '01/12/2012', NULL);
INSERT INTO `gobiernoTIC`.`OBJETIVO_ESTRATEGICO` (`id`, `nombre`, `descripcion`, `principio_tic_id`, `fecha_inicio`, `fecha_fin`) VALUES (2, 'Avançar en la gestió integral del EEES', 'Avançar en la gestió integral del EEES', 1, '01/01/2012', NULL);
INSERT INTO `gobiernoTIC`.`OBJETIVO_ESTRATEGICO` (`id`, `nombre`, `descripcion`, `principio_tic_id`, `fecha_inicio`, `fecha_fin`) VALUES (3, 'Desenvolupar els valors comuns TIC', 'Desenvolupar els valors comuns TIC', 2, '01/01/2012', NULL);

COMMIT;

-- -----------------------------------------------------
-- Data for table `gobiernoTIC`.`OBJETIVO_TACTICO`
-- -----------------------------------------------------
START TRANSACTION;
USE `gobiernoTIC`;
INSERT INTO `gobiernoTIC`.`OBJETIVO_TACTICO` (`id`, `nombre`, `descripcion`, `objetivo_estrategico_id`, `fecha_inicio`, `fecha_fin`) VALUES (1, 'Comunicar progrés a través d\'indicadors de valor', 'Comunicar progrés a través d\'indicadors de valor', 1, '01/12/2012', NULL);
INSERT INTO `gobiernoTIC`.`OBJETIVO_TACTICO` (`id`, `nombre`, `descripcion`, `objetivo_estrategico_id`, `fecha_inicio`, `fecha_fin`) VALUES (2, 'Desenvolupar estàndards de gestió', 'Desenvolupar estàndards de gestió', 1, '01/12/2012', NULL);
INSERT INTO `gobiernoTIC`.`OBJETIVO_TACTICO` (`id`, `nombre`, `descripcion`, `objetivo_estrategico_id`, `fecha_inicio`, `fecha_fin`) VALUES (3, 'Desenvolupar la governança TIC com a canvi cultural', 'Desenvolupar la governança TIC com a canvi cultural', 1, '01/12/2012', NULL);
INSERT INTO `gobiernoTIC`.`OBJETIVO_TACTICO` (`id`, `nombre`, `descripcion`, `objetivo_estrategico_id`, `fecha_inicio`, `fecha_fin`) VALUES (4, 'Comunicar i fer transparent la gestió  ', 'Comunicar i fer transparent la gestió  ', 1, '01/12/2012', NULL);
INSERT INTO `gobiernoTIC`.`OBJETIVO_TACTICO` (`id`, `nombre`, `descripcion`, `objetivo_estrategico_id`, `fecha_inicio`, `fecha_fin`) VALUES (5, 'Modernitzar el Centre', 'Modernitzar el Centre', 1, '01/12/2012', NULL);
INSERT INTO `gobiernoTIC`.`OBJETIVO_TACTICO` (`id`, `nombre`, `descripcion`, `objetivo_estrategico_id`, `fecha_inicio`, `fecha_fin`) VALUES (6, 'Continuar amb l’adaptació del programari d\'ordenació acadèmica al EEES', 'Continuar amb l’adaptació del programari d\'ordenació acadèmica al EEES', 2, '01/12/2012', NULL);
INSERT INTO `gobiernoTIC`.`OBJETIVO_TACTICO` (`id`, `nombre`, `descripcion`, `objetivo_estrategico_id`, `fecha_inicio`, `fecha_fin`) VALUES (7, 'Desplegament d’aules informàtiques virtuals', 'Desplegament d’aules informàtiques virtuals', 2, '01/12/2012', NULL);
INSERT INTO `gobiernoTIC`.`OBJETIVO_TACTICO` (`id`, `nombre`, `descripcion`, `objetivo_estrategico_id`, `fecha_inicio`, `fecha_fin`) VALUES (8, 'Potenciar el campus virtual com a canal addicional de comunicació docent', 'Potenciar el campus virtual com a canal addicional de comunicació docent', 2, '01/12/2012', NULL);
INSERT INTO `gobiernoTIC`.`OBJETIVO_TACTICO` (`id`, `nombre`, `descripcion`, `objetivo_estrategico_id`, `fecha_inicio`, `fecha_fin`) VALUES (9, 'Desplegament Nova web institucional', 'Desplegament Nova web institucional', 3, '01/12/2012', NULL);
INSERT INTO `gobiernoTIC`.`OBJETIVO_TACTICO` (`id`, `nombre`, `descripcion`, `objetivo_estrategico_id`, `fecha_inicio`, `fecha_fin`) VALUES (10, 'Integració de dades i interoperabilitat ', 'Integració de dades i interoperabilitat ', 3, '01/12/2012', NULL);

COMMIT;
