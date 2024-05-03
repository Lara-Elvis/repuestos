use bd_repuestos;

-- Crear tabla Modulo
CREATE TABLE Modulo (
    IdModulo INT AUTO_INCREMENT PRIMARY KEY,
    DescModulo VARCHAR(100)
);

-- Crear tabla TipoUsuario
CREATE TABLE TipoUsuario (
    IdTipoUsuario INT AUTO_INCREMENT PRIMARY KEY,
    DesTipoUsuario VARCHAR(100)
);

-- Crear tabla Usuario
CREATE TABLE Usuario (
    IdUsuario INT AUTO_INCREMENT PRIMARY KEY,
    Nombre VARCHAR(100),
    Correo VARCHAR(100),
    Contraseña VARCHAR(100)
);

-- Crear tabla TipoProveedor
CREATE TABLE TipoProveedor (
    IdTipoProveedor INT AUTO_INCREMENT PRIMARY KEY,
    DescTipoProveedor VARCHAR(100)
);

-- Crear tabla Proveedor
CREATE TABLE Proveedor (
    IdProveedor INT AUTO_INCREMENT PRIMARY KEY,
    Nombre VARCHAR(100),
    NIT VARCHAR(20),
    IdTipoProveedor INT,
    FOREIGN KEY (IdTipoProveedor) REFERENCES TipoProveedor(IdTipoProveedor)
);

-- Crear tabla TipoProducto
CREATE TABLE TipoProducto (
    IdTipoProducto INT AUTO_INCREMENT PRIMARY KEY,
    DescTipoProducto VARCHAR(100)
);

-- Crear tabla Producto
CREATE TABLE Producto (
    IdProducto INT AUTO_INCREMENT PRIMARY KEY,
    DescProducto VARCHAR(100),
    Precio DECIMAL(10, 2),
    IdProveedor INT,
    IdTipoProducto INT,
    FOREIGN KEY (IdProveedor) REFERENCES Proveedor(IdProveedor),
    FOREIGN KEY (IdTipoProducto) REFERENCES TipoProducto(IdTipoProducto)
);

-- Crear tabla Factura
CREATE TABLE Factura (
    IdFactura INT AUTO_INCREMENT PRIMARY KEY,
    NIT VARCHAR(20),
    Serie VARCHAR(10),
    Total DECIMAL(10, 2),
    Fecha DATE,
    IdUsuario INT,
    FOREIGN KEY (IdUsuario) REFERENCES Usuario(IdUsuario)
);

-- Crear tabla DetalleFactura
CREATE TABLE DetalleFactura (
    IdDetalleFactura INT AUTO_INCREMENT PRIMARY KEY,
    IdFactura INT,
    IdProducto INT,
    Cantidad INT,
    Subtotal DECIMAL(10, 2),
    FOREIGN KEY (IdFactura) REFERENCES Factura(IdFactura),
    FOREIGN KEY (IdProducto) REFERENCES Producto(IdProducto)
);

-- Crear tabla Privilegio
CREATE TABLE Privilegio (
    IdPrivilegio INT AUTO_INCREMENT PRIMARY KEY,
    IdTipoUsuario INT,
    IdModulo INT,
    Fecha DATE,
    FOREIGN KEY (IdTipoUsuario) REFERENCES TipoUsuario(IdTipoUsuario),
    FOREIGN KEY (IdModulo) REFERENCES Modulo(IdModulo)
);

-- Crear tabla Envio
CREATE TABLE Envio (
    IdEnvio INT AUTO_INCREMENT PRIMARY KEY,
    IdProducto INT,
    Piloto VARCHAR(100),
    NIT VARCHAR(20),
    Serie VARCHAR(10),
    FOREIGN KEY (IdProducto) REFERENCES Producto(IdProducto)
);
