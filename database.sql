-- Base de Datos para Futuro Inversión
CREATE DATABASE IF NOT EXISTS futuro_inversion DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE futuro_inversion;

-- Tabla: usuarios (Sin campos demográficos ni tipo de sangre)
CREATE TABLE IF NOT EXISTS usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL,
    correo VARCHAR(100) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    rol VARCHAR(20) DEFAULT 'inversionista',
    fecha_registro DATETIME DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB;

-- Tabla: activos (Criptos, Activos Comerciales, Trading)
CREATE TABLE IF NOT EXISTS activos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL,
    simbolo VARCHAR(20) NOT NULL,
    tipo ENUM('cripto', 'activo_comercial', 'trading') NOT NULL,
    precio_actual DECIMAL(15, 2) NOT NULL,
    fecha_actualizacion DATETIME DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB;

-- Tabla: portafolios
CREATE TABLE IF NOT EXISTS portafolios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    usuario_id INT NOT NULL,
    nombre VARCHAR(100) NOT NULL,
    descripcion TEXT,
    fecha_creacion DATETIME DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (usuario_id) REFERENCES usuarios(id) ON DELETE CASCADE
) ENGINE=InnoDB;

-- Tabla: transacciones
CREATE TABLE IF NOT EXISTS transacciones (
    id INT AUTO_INCREMENT PRIMARY KEY,
    portafolio_id INT NOT NULL,
    activo_id INT NOT NULL,
    tipo_transaccion ENUM('compra', 'venta') NOT NULL,
    cantidad DECIMAL(15, 4) NOT NULL,
    precio_unitario DECIMAL(15, 2) NOT NULL,
    total DECIMAL(15, 2) GENERATED ALWAYS AS (cantidad * precio_unitario) STORED,
    fecha_transaccion DATETIME DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (portafolio_id) REFERENCES portafolios(id) ON DELETE CASCADE,
    FOREIGN KEY (activo_id) REFERENCES activos(id) ON DELETE CASCADE
) ENGINE=InnoDB;

-- Tabla: parametrica
CREATE TABLE IF NOT EXISTS parametrica (
    id INT AUTO_INCREMENT PRIMARY KEY,
    clave VARCHAR(50) NOT NULL UNIQUE,
    valor VARCHAR(255) NOT NULL,
    descripcion VARCHAR(255)
) ENGINE=InnoDB;

-- Datos de prueba iniciales
INSERT INTO usuarios (nombre, correo, password, rol) VALUES 
('Usuario Demo', 'admin@futuroinversion.com', '123456', 'admin');

INSERT INTO activos (nombre, simbolo, tipo, precio_actual) VALUES 
('Bitcoin', 'BTC', 'cripto', 65000.00),
('Ethereum', 'ETH', 'cripto', 3500.00),
('Local Comercial Dorada', 'LCD-01', 'activo_comercial', 120000000.00),
('Acción Apple', 'AAPL', 'trading', 220.50);

INSERT INTO portafolios (usuario_id, nombre, descripcion) VALUES 
(1, 'Portafolio Principal', 'Portafolio de prueba inicial con varios activos');
