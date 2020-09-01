--
-- PostgreSQL database dump
--

SET statement_timeout = 0;
SET lock_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;
SET check_function_bodies = false;
SET client_min_messages = warning;

--
-- Name: plpgsql; Type: EXTENSION; Schema: -; Owner: 
--

CREATE EXTENSION IF NOT EXISTS plpgsql WITH SCHEMA pg_catalog;


--
-- Name: EXTENSION plpgsql; Type: COMMENT; Schema: -; Owner: 
--

COMMENT ON EXTENSION plpgsql IS 'PL/pgSQL procedural language';


SET search_path = public, pg_catalog;

SET default_tablespace = '';

SET default_with_oids = false;

--
-- Name: capacitacion; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE capacitacion (
    idca character varying(10) NOT NULL,
    tipo character varying(30) NOT NULL,
    lugar character varying(30) NOT NULL,
    certificado character varying(20),
    nombre character varying(30) NOT NULL,
    intensidad character varying(10) NOT NULL,
    fecha date
);


ALTER TABLE public.capacitacion OWNER TO postgres;

--
-- Name: cliente; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE cliente (
    cedula character varying(10) NOT NULL,
    nombre character varying(30) NOT NULL,
    apellidos character varying(30) NOT NULL,
    telefono character varying(10) NOT NULL,
    correo character varying(30) NOT NULL,
    ciudad character varying(20) NOT NULL,
    direccion character varying(50) NOT NULL,
    estrato character(1) NOT NULL,
    genero character varying(10) NOT NULL,
    nacionali character varying(30),
    fk_usuario_id character varying(10) NOT NULL
);


ALTER TABLE public.cliente OWNER TO postgres;

--
-- Name: color; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE color (
    idcolor character varying(10) NOT NULL,
    nombre_color character varying(20) NOT NULL
);


ALTER TABLE public.color OWNER TO postgres;

--
-- Name: color_telefono; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE color_telefono (
    fk_idt2 character varying(10) NOT NULL,
    fk_idcolor character varying(10) NOT NULL
);


ALTER TABLE public.color_telefono OWNER TO postgres;

--
-- Name: contrato; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE contrato (
    idco character varying(10) NOT NULL,
    fechaini date NOT NULL,
    fechafin date NOT NULL,
    salario bigint NOT NULL,
    cargo character varying(30) NOT NULL,
    horaentra time without time zone NOT NULL,
    horasali time without time zone NOT NULL,
    vacaciones character varying(10) NOT NULL,
    fk_ide3 character varying(10) NOT NULL
);


ALTER TABLE public.contrato OWNER TO postgres;

--
-- Name: empleado; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE empleado (
    ide character varying(10) NOT NULL,
    cedula character varying(10) NOT NULL,
    nombre character varying(30) NOT NULL,
    apellidos character varying(30) NOT NULL,
    telefono character varying(10) NOT NULL,
    fecha_nacimiento date NOT NULL,
    genero character varying(10) NOT NULL,
    tipo_sangre character(2) NOT NULL,
    hijos character varying(1),
    fecha_pension date NOT NULL,
    estado_civil character varying(20) NOT NULL,
    estrato character(1) NOT NULL,
    nacionalidad character varying(20),
    fk_ideps character varying(10) NOT NULL,
    fk_usuario_id character varying(10)
);


ALTER TABLE public.empleado OWNER TO postgres;

--
-- Name: empleado_capacitacion; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE empleado_capacitacion (
    fk_ide2 character varying(10) NOT NULL,
    fk_idca character varying(10) NOT NULL
);


ALTER TABLE public.empleado_capacitacion OWNER TO postgres;

--
-- Name: eps; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE eps (
    ideps character varying(10) NOT NULL,
    nombre_eps character varying(50) NOT NULL,
    direccion_eps character varying(50) NOT NULL,
    telefono_eps character varying(10) NOT NULL
);


ALTER TABLE public.eps OWNER TO postgres;

--
-- Name: factura; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE factura (
    idf character varying(10) NOT NULL,
    fecha date NOT NULL,
    valor_neto bigint NOT NULL,
    descuento real NOT NULL,
    impuesto real,
    valor_total bigint NOT NULL,
    fk_cedulac character varying(10) NOT NULL,
    fk_ide character varying(10) NOT NULL,
    fk_idt character varying(10) NOT NULL
);


ALTER TABLE public.factura OWNER TO postgres;

--
-- Name: proveedor; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE proveedor (
    idp character varying(10) NOT NULL,
    nombre character varying(20) NOT NULL,
    telefono character varying(10) NOT NULL,
    ciudad character varying(20),
    pais character varying(20) NOT NULL
);


ALTER TABLE public.proveedor OWNER TO postgres;

--
-- Name: telefono; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE telefono (
    idt character varying(10) NOT NULL,
    modelo character varying(20) NOT NULL,
    marca character varying(20) NOT NULL,
    valor bigint NOT NULL,
    garantia character varying(10) NOT NULL,
    inventario integer NOT NULL,
    ventas integer,
    especificacion character varying(300),
    descuento real,
    fecha_lanzamiento date,
    fk_idp character varying(10) NOT NULL
);


ALTER TABLE public.telefono OWNER TO postgres;

--
-- Name: usuario; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE usuario (
    idu character varying(10) NOT NULL,
    nombre character varying(20) NOT NULL
);


ALTER TABLE public.usuario OWNER TO postgres;

--
-- Data for Name: capacitacion; Type: TABLE DATA; Schema: public; Owner: postgres
--

INSERT INTO capacitacion VALUES ('1', 'Capacitación técnica', 'Corporación Syspro', NULL, 'Merchandising', '120', '2016-08-26');
INSERT INTO capacitacion VALUES ('4', 'Capacitación técnica', 'Business School Intelligent', NULL, 'Prospección y mercadeo', '150', '2017-01-29');
INSERT INTO capacitacion VALUES ('3', 'Capacitación técnica', 'Centro de Estudios CCC', NULL, 'Técnica de ventas básico', '60', '2015-11-19');
INSERT INTO capacitacion VALUES ('2', 'Capacitación de inducción', 'Corporación Educativa ITSE', NULL, 'Decisiones', '200', '2019-01-09');


--
-- Data for Name: cliente; Type: TABLE DATA; Schema: public; Owner: postgres
--

INSERT INTO cliente VALUES ('67978801', 'Sandra', 'Muñoz Leon', '3159002287', 'Lyun@gmail.com', 'Bucaramanga', 'Callejón Cercassin, 185A 8ºD', '3', 'Femenino', 'Venezolano', '1');
INSERT INTO cliente VALUES ('65401918', 'Nicolás', 'Diaz Santos', '3071217295', 'nicala148@gmail.com', 'Bucaramanga', 'Calle Desherbava, 175 17ºA', '4', 'Masculino', 'Colombia', '3');
INSERT INTO cliente VALUES ('2171714', 'sergio', 'Carrillo Muñoz', '3156422216', 'checho223076@hotmail.com', 'Bucaramanga', 'CR 21A #99-17', '9', 'Masculino', 'colombiano', '3');


--
-- Data for Name: color; Type: TABLE DATA; Schema: public; Owner: postgres
--

INSERT INTO color VALUES ('1', 'Negro');
INSERT INTO color VALUES ('2', 'Rojo');
INSERT INTO color VALUES ('3', 'Dorado');
INSERT INTO color VALUES ('5', 'Plateado');
INSERT INTO color VALUES ('6', 'Rosado');
INSERT INTO color VALUES ('7', 'Azul');
INSERT INTO color VALUES ('4', 'Blanco');


--
-- Data for Name: color_telefono; Type: TABLE DATA; Schema: public; Owner: postgres
--

INSERT INTO color_telefono VALUES ('1', '1');
INSERT INTO color_telefono VALUES ('1', '3');
INSERT INTO color_telefono VALUES ('1', '6');
INSERT INTO color_telefono VALUES ('2', '4');
INSERT INTO color_telefono VALUES ('2', '5');
INSERT INTO color_telefono VALUES ('2', '7');
INSERT INTO color_telefono VALUES ('3', '1');
INSERT INTO color_telefono VALUES ('3', '4');
INSERT INTO color_telefono VALUES ('4', '7');
INSERT INTO color_telefono VALUES ('4', '1');
INSERT INTO color_telefono VALUES ('4', '4');
INSERT INTO color_telefono VALUES ('4', '2');


--
-- Data for Name: contrato; Type: TABLE DATA; Schema: public; Owner: postgres
--

INSERT INTO contrato VALUES ('5', '2019-01-01', '2020-01-01', 2400000, 'Responsable de marketing', '06:00:00', '18:00:00', '45', '5');
INSERT INTO contrato VALUES ('2', '2019-01-01', '2020-01-01', 3500000, 'Director Ejecutivo', '09:00:00', '16:30:00', '40', '2');
INSERT INTO contrato VALUES ('4', '2019-01-01', '2020-01-01', 1800000, 'Responsable Financiero', '07:00:00', '17:00:00', '30', '4');
INSERT INTO contrato VALUES ('3', '2019-01-01', '2020-01-01', 2100000, 'Vigilante', '07:00:00', '17:00:00', '30', '3');
INSERT INTO contrato VALUES ('1', '2019-01-01', '2020-01-01', 1250000, 'Seguridad', '06:00:00', '18:00:00', '30', '1');


--
-- Data for Name: empleado; Type: TABLE DATA; Schema: public; Owner: postgres
--

INSERT INTO empleado VALUES ('5', '683781201', 'Gabriel', 'Alvarez Herrero', '3152642949', '1998-09-02', 'Masculino', 'A+', NULL, '2051-11-26', 'Soltero', '3', 'Colombiano', '2', '2');
INSERT INTO empleado VALUES ('4', '693970933', 'Alma', 'Gallardo Dominguez', '3111628385', '1958-01-30', 'Femenino', 'B+', '5', '2020-11-10', 'Viuda', '1', 'Colombiana', '4', '2');
INSERT INTO empleado VALUES ('3', '610202907', 'Iris', 'Vargas Cano', '3045504786', '1990-09-26', 'Femenino', 'O+', NULL, '2040-07-13', 'Casada', '6', 'Colombiana', '3', '2');
INSERT INTO empleado VALUES ('2', '684483696', 'Santiago', 'Duran Pastor', '3014941029', '1972-08-04', 'Masculino', 'A-', '1', '2026-11-19', 'Viudo', '3', 'Colombiano', '2', '2');
INSERT INTO empleado VALUES ('100', '2171714', 'sergio', 'carrillo', '54545', '1984-08-10', 'Masculino', 'a+', '1', '1988-08-10', 'soltero', '4', '', '1', '2');
INSERT INTO empleado VALUES ('1', '613491947', 'Samuel', 'Carmona', '3164902736', '1984-08-10', 'Masculino', 'A+', '3', '2034-11-19', 'Casado', '4', 'Colombiano', '1', '2');


--
-- Data for Name: empleado_capacitacion; Type: TABLE DATA; Schema: public; Owner: postgres
--

INSERT INTO empleado_capacitacion VALUES ('1', '2');
INSERT INTO empleado_capacitacion VALUES ('1', '4');
INSERT INTO empleado_capacitacion VALUES ('2', '2');
INSERT INTO empleado_capacitacion VALUES ('3', '2');
INSERT INTO empleado_capacitacion VALUES ('3', '1');
INSERT INTO empleado_capacitacion VALUES ('4', '2');
INSERT INTO empleado_capacitacion VALUES ('4', '3');
INSERT INTO empleado_capacitacion VALUES ('5', '2');
INSERT INTO empleado_capacitacion VALUES ('5', '4');


--
-- Data for Name: eps; Type: TABLE DATA; Schema: public; Owner: postgres
--

INSERT INTO eps VALUES ('1', 'Salud Colmena E.P.S. S.A.', 'Cuesta Recelar desertívol, 284 19ºF', '3025904328');
INSERT INTO eps VALUES ('2', 'Salud Total S.A. E.P.S.', 'Alameda Curullesses, 132A', '3074033772');
INSERT INTO eps VALUES ('3', 'Cafesalud E.P.S. S.A.', 'Calle Arribes desagreujaríem sojornés, 192 11ºE', '3014139541');
INSERT INTO eps VALUES ('4', 'E.P.S. Sanitas S.A.', 'C. Comercial Emmordassésseu, 93B 12ºG', '3042585824');


--
-- Data for Name: factura; Type: TABLE DATA; Schema: public; Owner: postgres
--

INSERT INTO factura VALUES ('2', '2019-02-08', 1000000, 100000, 10000, 910000, '65401918', '4', '4');
INSERT INTO factura VALUES ('3', '2018-12-24', 740000, 0, 74000, 814000, '67978801', '5', '2');


--
-- Data for Name: proveedor; Type: TABLE DATA; Schema: public; Owner: postgres
--

INSERT INTO proveedor VALUES ('1', 'Nokia', '3002651477', 'París', 'Francia');
INSERT INTO proveedor VALUES ('2', 'Motorola', '3104411437', 'Tokio', 'Japón');
INSERT INTO proveedor VALUES ('3', 'Huawei', '3105517073', 'Seúl	', 'Corea del Sur');
INSERT INTO proveedor VALUES ('4', 'Xiaomi ', '3107229859', 'El Cairo', 'Egipto');


--
-- Data for Name: telefono; Type: TABLE DATA; Schema: public; Owner: postgres
--

INSERT INTO telefono VALUES ('1', 'Huawei Mate 30 Pro', 'Huawei', 2750000, '12', 50, 0, 'Tipo:OLED

Tamaño:6.53 pulgadas

Resolución:2400 x 1176

Táctil:Capacitiva multitáctil

Protección:Corning Gorilla Glass 6

Formato:Barra', 250000, '2019-09-19', '3');
INSERT INTO telefono VALUES ('4', 'Nokia 7.1 Plus', 'Nokia', 1000000, '24', 41, 9, 'Tipo:IPS

Tamaño:6.18 pulgadas

Resolución:2280 x 1080

Colores:24 bits (16777216 colores)

Brillo:500 nits

Táctil:Capacitiva multitáctil

Densidad:408 ppi

Relación de aspecto:19:9

Formato:Barra', 100000, '2018-11-12', '1');
INSERT INTO telefono VALUES ('3', 'Motorola Moto E5 ', 'Motorola', 390000, '12', 50, 0, 'Tipo:IPS

Tamaño:5.34 pulgadas

Resolución:960 x 480

Colores:24 bits (16777216 colores)

Táctil:Capacitiva multitáctil

Densidad:201 ppi

Relación de aspecto:18:9

Formato:Barra', 45000, '2018-07-13', '2');
INSERT INTO telefono VALUES ('5', 'Motorola Moto E6', 'Motorola', 570000, '6', 100, 1, '', 150000, '2014-08-10', '2');
INSERT INTO telefono VALUES ('6', 'Nokia 7.2', 'Nokia', 1400000, '5', 45, 0, '', 140000, '2016-08-09', '1');
INSERT INTO telefono VALUES ('7', 'Xiaomi Redmi Note 8', 'Xiaomi', 2100000, '12', 15, 7, '', 400000, '2018-10-12', '4');
INSERT INTO telefono VALUES ('8', 'Huawei P30 Pro', 'Huawei', 3200000, '12', 30, 0, '', 500000, '2019-01-11', '3');
INSERT INTO telefono VALUES ('2', 'Huawei P20 Lite', 'Huawei', 740000, '6', 48, 2, 'Tipo:IPS LCD



Tamaño:6.4 pulgadas



Resolución:2310 x 1080



Colores:24 bits (16777216 colores)



Táctil:Capacitiva multitáctil



Densidad:398 ppi



Relación de aspecto:19.5:9



Formato:Barra', 100000, '2019-06-10', '3');


--
-- Data for Name: usuario; Type: TABLE DATA; Schema: public; Owner: postgres
--

INSERT INTO usuario VALUES ('1', 'cliente');
INSERT INTO usuario VALUES ('2', 'administrador');
INSERT INTO usuario VALUES ('3', 'cliente_premium');


--
-- Name: capacitacion_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY capacitacion
    ADD CONSTRAINT capacitacion_pkey PRIMARY KEY (idca);


--
-- Name: cliente_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY cliente
    ADD CONSTRAINT cliente_pkey PRIMARY KEY (cedula);


--
-- Name: color_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY color
    ADD CONSTRAINT color_pkey PRIMARY KEY (idcolor);


--
-- Name: color_telefono_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY color_telefono
    ADD CONSTRAINT color_telefono_pkey PRIMARY KEY (fk_idt2, fk_idcolor);


--
-- Name: contrato_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY contrato
    ADD CONSTRAINT contrato_pkey PRIMARY KEY (idco);


--
-- Name: empleado_capacitacion_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY empleado_capacitacion
    ADD CONSTRAINT empleado_capacitacion_pkey PRIMARY KEY (fk_ide2, fk_idca);


--
-- Name: empleado_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY empleado
    ADD CONSTRAINT empleado_pkey PRIMARY KEY (ide);


--
-- Name: eps_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY eps
    ADD CONSTRAINT eps_pkey PRIMARY KEY (ideps);


--
-- Name: factura_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY factura
    ADD CONSTRAINT factura_pkey PRIMARY KEY (idf);


--
-- Name: proveedor_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY proveedor
    ADD CONSTRAINT proveedor_pkey PRIMARY KEY (idp);


--
-- Name: telefono_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY telefono
    ADD CONSTRAINT telefono_pkey PRIMARY KEY (idt);


--
-- Name: usuario_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY usuario
    ADD CONSTRAINT usuario_pkey PRIMARY KEY (idu);


--
-- Name: cliente_fk_usuario_id_fkey; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY cliente
    ADD CONSTRAINT cliente_fk_usuario_id_fkey FOREIGN KEY (fk_usuario_id) REFERENCES usuario(idu);


--
-- Name: color_telefono_fk_idcolor_fkey; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY color_telefono
    ADD CONSTRAINT color_telefono_fk_idcolor_fkey FOREIGN KEY (fk_idcolor) REFERENCES color(idcolor) ON UPDATE CASCADE ON DELETE CASCADE;


--
-- Name: color_telefono_fk_idt2_fkey; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY color_telefono
    ADD CONSTRAINT color_telefono_fk_idt2_fkey FOREIGN KEY (fk_idt2) REFERENCES telefono(idt) ON UPDATE CASCADE ON DELETE CASCADE;


--
-- Name: contrato_fk_ide3_fkey; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY contrato
    ADD CONSTRAINT contrato_fk_ide3_fkey FOREIGN KEY (fk_ide3) REFERENCES empleado(ide) ON UPDATE CASCADE ON DELETE CASCADE;


--
-- Name: empleado_capacitacion_fk_idca_fkey; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY empleado_capacitacion
    ADD CONSTRAINT empleado_capacitacion_fk_idca_fkey FOREIGN KEY (fk_idca) REFERENCES capacitacion(idca) ON UPDATE CASCADE ON DELETE CASCADE;


--
-- Name: empleado_capacitacion_fk_ide2_fkey; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY empleado_capacitacion
    ADD CONSTRAINT empleado_capacitacion_fk_ide2_fkey FOREIGN KEY (fk_ide2) REFERENCES empleado(ide) ON UPDATE CASCADE ON DELETE CASCADE;


--
-- Name: empleado_fk_ideps_fkey; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY empleado
    ADD CONSTRAINT empleado_fk_ideps_fkey FOREIGN KEY (fk_ideps) REFERENCES eps(ideps) ON UPDATE CASCADE ON DELETE CASCADE;


--
-- Name: empleado_fk_usuaro_id2_fkey; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY empleado
    ADD CONSTRAINT empleado_fk_usuaro_id2_fkey FOREIGN KEY (fk_usuario_id) REFERENCES usuario(idu);


--
-- Name: factura_fk_cedulac_fkey; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY factura
    ADD CONSTRAINT factura_fk_cedulac_fkey FOREIGN KEY (fk_cedulac) REFERENCES cliente(cedula) ON UPDATE CASCADE ON DELETE CASCADE;


--
-- Name: factura_fk_ide_fkey; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY factura
    ADD CONSTRAINT factura_fk_ide_fkey FOREIGN KEY (fk_ide) REFERENCES empleado(ide) ON UPDATE CASCADE ON DELETE CASCADE;


--
-- Name: factura_fk_idt_fkey; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY factura
    ADD CONSTRAINT factura_fk_idt_fkey FOREIGN KEY (fk_idt) REFERENCES telefono(idt) ON UPDATE CASCADE ON DELETE CASCADE;


--
-- Name: telefono_fk_idp_fkey; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY telefono
    ADD CONSTRAINT telefono_fk_idp_fkey FOREIGN KEY (fk_idp) REFERENCES proveedor(idp) ON UPDATE CASCADE ON DELETE CASCADE;


--
-- Name: public; Type: ACL; Schema: -; Owner: postgres
--

REVOKE ALL ON SCHEMA public FROM PUBLIC;
REVOKE ALL ON SCHEMA public FROM postgres;
GRANT ALL ON SCHEMA public TO postgres;
GRANT ALL ON SCHEMA public TO PUBLIC;


--
-- PostgreSQL database dump complete
--

