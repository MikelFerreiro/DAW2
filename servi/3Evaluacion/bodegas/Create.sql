CREATE DATABASE IF NOT EXISTS EJBODEGAS;

USE EJBODEGAS;

CREATE TABLE IF NOT EXISTS BODEGAS(
  ID_BODEGA INT AUTO_INCREMENT,
  NOMBRE VARCHAR (50),
  DIRECCION VARCHAR (100),
  LOCALIZACION VARCHAR (25),
  EMAIL VARCHAR (50),
  TELEFONO VARCHAR (9),
  CONTACTO VARCHAR (50),
  FUNDACION INT,
  RESTAURANTE BOOLEAN,
  HOTEL BOOLEAN,
  PRIMARY KEY (ID_BODEGA)
);

CREATE TABLE IF NOT EXISTS VINOS(
  ID_VINO INT AUTO_INCREMENT,
  NOMBRE VARCHAR (50),
  DESCRIPCION VARCHAR (200),
  ANIO INT,
  ALCOHOL FLOAT,
  TIPO VARCHAR (25),
  ID_BODEGA INT NOT NULL,
  PRIMARY KEY (ID_VINO),
  FOREIGN KEY (ID_BODEGA)
        REFERENCES BODEGAS(ID_BODEGA)
        ON DELETE CASCADE
);

INSERT INTO `bodegas` (`ID_BODEGA`, `NOMBRE`, `DIRECCION`, `LOCALIZACION`, `EMAIL`, `TELEFONO`, `CONTACTO`, `FUNDACION`, `RESTAURANTE`, `HOTEL`) VALUES (NULL, 'Bodegas Majuelo', 'Bodegas Majuelo', 'Vitoria', 'majuelo@majuelo.com', '945140450', 'Jose', '1912', b'1', b'0'), (NULL, 'Bodegas San Cepito', 'Santa Isabel Kalea, 7', 'Vitoria-Gasteiz', 'cepito@sancepito.com', '945260413', 'Santos', '1994', b'0', b'1'), (NULL, 'Bodega Bat', 'Médico Tornay Kalea', 'Vitoria-Gasteiz', 'info@bodegabat.com', '651550566', 'Carla', '1800', b'1', b'0');
INSERT INTO `vinos` (`ID_VINO`, `NOMBRE`, `DESCRIPCION`, `ANIO`, `ALCOHOL`, `TIPO`, `ID_BODEGA`) VALUES (NULL, 'Tres Picos', 'Color cereza picota muy intenso con tonos morados. En nariz muestra una gran concentración de aromas de frutas rojas maduras con matices florales. En boca es un vino ric y bien estructurado que evoca sabores a mora, ciruela y tonos de cuero y vainilla con un tanino dulce y sedoso.', '2017', '15', 'Tinto rosado', 1), (NULL, 'Protos', 'Color Rojo cereza oscuro intenso y brillante, con ribete granate.Expresivo, potente, complejo, elegante, café tostado, chocolate negro, fruta caramelizada.', '2013', '4.5', 'Tinto gran reserva', 1);