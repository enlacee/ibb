create DATABASE BD_IBBPP;

USE BD_IBBPP;


CREATE TABLE ASISTENCIA
(
	cod_asistencia  integer  NOT NULL ,
	cod_per  integer  NULL ,
	cod_servicio  integer  NULL,
	fec_asistencia datetime 
)
;


ALTER TABLE ASISTENCIA
	ADD  PRIMARY KEY (cod_asistencia  ASC)
;



CREATE TABLE UBIGEO
(
	cod_ubigeo INT not null ,
	departamento  varchar(70) NULL ,
	provincia  varchar(70)  NULL ,
	distrito  varchar(70)  NULL 
)
;


ALTER TABLE UBIGEO
	ADD  PRIMARY KEY (cod_ubigeo  ASC)
;



CREATE TABLE IGLESIA
(
	cod_iglesia  integer  NOT NULL ,
	nom_iglesia  varchar(50)  NULL ,
	dir_iglesia  varchar(300)  NULL ,
	urb_iglesia  varchar(300)  NULL ,
	ref_iglesia  varchar(300)  NULL ,
	obs_iglesia  varchar(500)  NULL ,
	tel_iglesia  varchar(25)  NULL ,
	tip_iglesia  char(1) NULL,
	cod_ubigeo int  NULL 
)
;

ALTER TABLE IGLESIA
	ADD  PRIMARY KEY (cod_iglesia  ASC)
;


CREATE TABLE PERSONA
(
	cod_per  integer  NOT NULL ,
	nom_per  varchar(150)  NULL ,
	ape_patper  varchar(150)  NULL ,
	ape_matpe  varchar(150)  NULL ,
	dni_per  char(8)  NULL ,
	fec_nacper  datetime  NULL ,
	est_civilper  char(1)  NULL ,
	miembro_per  char(1)  NULL ,
	fec_conversionper  datetime  NULL ,
	dir_per  varchar(300)  NULL ,
	ref_per  varchar(300)  NULL ,
	tel_per  varchar(10)  NULL ,
	cel_per  varchar(10)  NULL ,
	obs_per varchar(500)  NULL ,
	cod_iglesia  integer  NULL, 
	cod_ubigeo integer  NULL 
)
;


ALTER TABLE PERSONA
	ADD  PRIMARY KEY (cod_per  ASC)
;


CREATE TABLE SERVICIO
(
	cod_servicio  integer  NOT NULL ,
	dia_servicio  varchar(20)  NOT NULL ,
	horario_servicio  varchar(30)  NOT NULL ,
	des_servicio  varchar(300)  NULL 
)
;


ALTER TABLE SERVICIO
	ADD  PRIMARY KEY (cod_servicio  ASC)
;

CREATE TABLE USUARIO
(
	cod_usuario  integer  NOT NULL ,
	usuario  varchar(30)  NULL ,
	clave  varchar(40)  NULL ,
	tip_usuario  varchar(50)  NULL ,
	act_usuario  char(1)  NULL ,
	cod_per  integer  NULL 
)
;


ALTER TABLE USUARIO
	ADD  PRIMARY KEY (cod_usuario  ASC)
;

ALTER TABLE ASISTENCIA
	ADD  FOREIGN KEY (cod_per) REFERENCES PERSONA(cod_per)
		ON DELETE NO ACTION
		ON UPDATE NO ACTION
;


ALTER TABLE ASISTENCIA
	ADD  FOREIGN KEY (cod_servicio) REFERENCES SERVICIO(cod_servicio)
		ON DELETE NO ACTION
		ON UPDATE NO ACTION
;





ALTER TABLE IGLESIA
	ADD  FOREIGN KEY (cod_ubigeo) REFERENCES UBIGEO(cod_ubigeo)
		ON DELETE NO ACTION
		ON UPDATE NO ACTION
;




ALTER TABLE PERSONA
	ADD  FOREIGN KEY (cod_iglesia) REFERENCES IGLESIA(cod_iglesia)
		ON DELETE NO ACTION
		ON UPDATE NO ACTION
;


ALTER TABLE PERSONA
	ADD  FOREIGN KEY (cod_ubigeo) REFERENCES UBIGEO(cod_ubigeo)
		ON DELETE NO ACTION
		ON UPDATE NO ACTION
;


ALTER TABLE USUARIO
	ADD  FOREIGN KEY (cod_per) REFERENCES PERSONA(cod_per)
		ON DELETE NO ACTION
		ON UPDATE NO ACTION
;


