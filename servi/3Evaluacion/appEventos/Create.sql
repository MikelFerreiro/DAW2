CREATE DATABASE IF NOT EXISTS APP_EVENTOS CHARACTER SET utf8 COLLATE utf8_spanish_ci;;

USE APP_EVENTOS;

CREATE TABLE IF NOT EXISTS LOCALES(
  ID_LOCAL INT AUTO_INCREMENT,
  NOMBRE VARCHAR (75),
  CATEGORIA VARCHAR (25),
  DIRECCION VARCHAR (100),
  TELEFONO VARCHAR (9),
  EMAIL VARCHAR (100),
  PRIMARY KEY (ID_LOCAL)
)ENGINE = InnoDB CHARSET=utf8 COLLATE utf8_unicode_ci;

CREATE TABLE IF NOT EXISTS EVENTOS(
  ID_EVENTO INT AUTO_INCREMENT,
  NOMBRE VARCHAR (75),
  TIPO VARCHAR (25),
  FECHA DATE,
  DESCRIPCION VARCHAR (1000),
  ID_LOCAL INT,
  PRIMARY KEY (ID_EVENTO),
  FOREIGN KEY (ID_LOCAL)
    REFERENCES LOCALES(ID_LOCAL)
)ENGINE = InnoDB CHARSET=utf8 COLLATE utf8_unicode_ci;

-- INSERT DE LOCALES
INSERT INTO LOCALES(NOMBRE, CATEGORIA, DIRECCION, TELEFONO, EMAIL) VALUES ('Buesa Arena','Estadio','Calle, Portal de Zurbano, 30, 01013 Vitoria-Gasteiz, Araba','945273400','baskonia@baskonia.com');
INSERT INTO LOCALES(NOMBRE, CATEGORIA, DIRECCION, TELEFONO, EMAIL) VALUES ('Palacio de Congresos Europa','Palacio de Congresos','Av. Gasteiz, 85, 01009 Vitoria-Gasteiz, Álava','945161261','congrestur@vitoria-gasteiz.org');
INSERT INTO LOCALES(NOMBRE, CATEGORIA, DIRECCION, TELEFONO, EMAIL) VALUES ('Jimmy Jazz','Sala de conciertos','Coronacion de la Virgen Blanca Kalea, 4, 01012 Vitoria-Gasteiz, Araba','945234960','info@jimmyjazzgasteiz.com');

-- INSERT DE EVENTOS
INSERT INTO EVENTOS(NOMBRE, TIPO, FECHA, DESCRIPCION, ID_LOCAL) VALUES ('KIROLBET Baskonia vs Maccabi Tel Aviv','Deportivo','2019-01-31','Partido de baloncesto',1);
INSERT INTO EVENTOS(NOMBRE, TIPO, FECHA, DESCRIPCION, ID_LOCAL) VALUES ('KIROLBET Baskonia vs Real Madrid','Deportivo','2019-03-22','Partido de baloncesto',1);

INSERT INTO EVENTOS(NOMBRE, TIPO, FECHA, DESCRIPCION, ID_LOCAL) VALUES ('Foro de Ecoturismo de Euskadi','Foro','2019-01-31','La organización señala que este año se contribuirá a definir las herramientas adecuadas para el desarrollo de una oferta ecoturística competitiva y de calidad. También se analizará el papel del Observatorio Ecoturismo en España puesto en marcha en 2018, y se contará con la presencia de representantes de la Reserva de Urdaibai, Geoparque de la Costa Vasca, Ataria, Ekoetxea, Aktiba o Nekatur, entre otros. En esta edición la comunidad invitada al evento es Extremadura.',2);
INSERT INTO EVENTOS(NOMBRE, TIPO, FECHA, DESCRIPCION, ID_LOCAL) VALUES ('Torneo FIRST LEGO League Euskadi','Torneo','2019-02-16','Evento para promover las vocaciones científico-tecnológicas, el espíritu creativo y la innovación entre escolares de 6 a 16 años. Equipos de todo el País Vasco participarán en este torneo clasificatorio, que busca impulsar la Educación STEAM (Science, Technology, Engineering, Arts and Maths), utilizando desafíos temáticos para involucrar a los jóvenes en la investigación, la resolución de problemas y la ciencia. En novena edición, a través del desafío Hydro Dynamics, el objetivo es que los equipos aprendan sobre el ciclo humano del agua: dónde y cómo encontrarla, transportarla y usarla correctamente. Incluirá una zona Opengune de exposiciones y talleres para todos los públicos.',2);
INSERT INTO EVENTOS(NOMBRE, TIPO, FECHA, DESCRIPCION, ID_LOCAL) VALUES ('TEDx','Charla','2019-05-04','TEDx modu independentean antolatutako biltzarrak dira, TED (Teknologia, Entretenimendua, Diseinua) irabazi asmorik gabeko erakundearen lizentzia esklusibo baten pean.',2);

INSERT INTO EVENTOS(NOMBRE, TIPO, FECHA, DESCRIPCION, ID_LOCAL) VALUES ('Gansos Rosas','Concierto','2019-02-01','Calificados por el batería original de Guns N Roses Steve Adl como el mejor grupo tributo de los Guns en Europa, Gansos Rosas están avalados también por los miles de aficionados y seguidores que les han seguido en los numerosos escenarios que han recorrido durante su primera década de vida. Tras celebrar durante el año 2016 su décimo aniversario, la banda madrileña Gansos Rosas nos proponen en 2019 seguir rememorando con total fidelidad los temas de una de las últimas bandas autenticas de la historia del Rock con una puesta en escena insuperable.',3);
INSERT INTO EVENTOS(NOMBRE, TIPO, FECHA, DESCRIPCION, ID_LOCAL) VALUES ('Letz Zep','Concierto','2019-02-08','Letz Zep son considerados hoy en día como el mejor grupo tributo a Led Zeppelin, dentro y fuera del Reino Unido. No son un ejercicio de nostalgia, sino de la rebelión contra el tiempo; un grito de representación del corazón contra la mediocridad y el olvido. Una banda formada por 4 músicos ingleses de enorme talento, experimentados y con todo lo necesario para llevar a cabo la tarea de acercar la música de Led Zeppelin a las nuevas generaciones.',3);
