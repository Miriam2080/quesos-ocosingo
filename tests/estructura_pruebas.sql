-- Tabla reducida EXCLUSIVA para CI; no representa la estructura completa de producción.
CREATE TABLE IF NOT EXISTS productos_prueba (
 id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
 descripcion VARCHAR(200) NOT NULL,
 cantidad INT NOT NULL,
 fecha_cadu DATE NOT NULL,
 id_tipo_producto INT NOT NULL,
 id_marca INT NOT NULL,
 id_proveedor INT NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
