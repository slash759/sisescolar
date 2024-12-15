
CREATE TABLE usuarios (
    id_usuario  INT (11) NOT NULL AUTO_INCREMENT  PRIMARY KEY ,
    nombres     VARCHAR (255) NOT NULL,
    cargo       VARCHAR (255) NOT NULL,
    email       VARCHAR (255) NOT NULL UNIQUE KEY,
    password    TEXT NOT NULL,
    fyh_creacion DATETIME,
    fyh_actualizacion DATETIME,
    estado VARCHAR (11);
)ENGINE = InnoDB;

INSERT INTO 'usuarios' ('nombres','cargo','email','password', 'fyh_creacion', 'estado')
VALUES ('nombre del admin Bv', 'ADMINISTRADOR', 'admin@admin.com', 'password', '2024-12-11 15:13:46', '1'); 


CREATE TABLE roles (
    id_rol  INT (11) NOT NULL AUTO_INCREMENT  PRIMARY KEY ,
    nombre_rol     VARCHAR (255) NOT NULL UNIQUE KEY,
    fyh_creacion DATETIME,
    fyh_actualizacion DATETIME,
    estado VARCHAR (11)
)ENGINE = InnoDB;    

INSERT INTO roles (nombre_rol,fyh_creacion,estado) VALUES ('ADMINISTRADOR','2024-11-14','1');
INSERT INTO roles (nombre_rol,fyh_creacion,estado) VALUES ('DIRECTOR ACADEMICO','2024-11-14','1');
INSERT INTO roles (nombre_rol,fyh_creacion,estado) VALUES ('DIRECTOR ADMINISTRATIVO','2024-11-14','1');
INSERT INTO roles (nombre_rol,fyh_creacion,estado) VALUES ('CONTADOR','2024-11-14','1');
INSERT INTO roles (nombre_rol,fyh_creacion,estado) VALUES ('SECRETARIA','2024-11-14','1');