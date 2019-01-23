--
-- PostgreSQL database dump
--

-- Dumped from database version 10.6 (Ubuntu 10.6-0ubuntu0.18.10.1)
-- Dumped by pg_dump version 10.6 (Ubuntu 10.6-0ubuntu0.18.10.1)

-- Started on 2019-01-23 01:50:54 -04

SET statement_timeout = 0;
SET lock_timeout = 0;
SET idle_in_transaction_session_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;
SELECT pg_catalog.set_config('search_path', '', false);
SET check_function_bodies = false;
SET client_min_messages = warning;
SET row_security = off;

--
-- TOC entry 8 (class 2615 OID 16385)
-- Name: jonathan; Type: SCHEMA; Schema: -; Owner: postgres
--

CREATE SCHEMA jonathan;


ALTER SCHEMA jonathan OWNER TO postgres;

--
-- TOC entry 1 (class 3079 OID 13119)
-- Name: plpgsql; Type: EXTENSION; Schema: -; Owner: 
--

CREATE EXTENSION IF NOT EXISTS plpgsql WITH SCHEMA pg_catalog;


--
-- TOC entry 3001 (class 0 OID 0)
-- Dependencies: 1
-- Name: EXTENSION plpgsql; Type: COMMENT; Schema: -; Owner: 
--

COMMENT ON EXTENSION plpgsql IS 'PL/pgSQL procedural language';


SET default_tablespace = '';

SET default_with_oids = false;

--
-- TOC entry 198 (class 1259 OID 16388)
-- Name: Usuarios; Type: TABLE; Schema: jonathan; Owner: postgres
--

CREATE TABLE jonathan."Usuarios" (
    id integer NOT NULL,
    nombre character varying(255),
    email character varying(255),
    password character varying(255)
);


ALTER TABLE jonathan."Usuarios" OWNER TO postgres;

--
-- TOC entry 197 (class 1259 OID 16386)
-- Name: Usuarios_id_seq; Type: SEQUENCE; Schema: jonathan; Owner: postgres
--

CREATE SEQUENCE jonathan."Usuarios_id_seq"
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE jonathan."Usuarios_id_seq" OWNER TO postgres;

--
-- TOC entry 3002 (class 0 OID 0)
-- Dependencies: 197
-- Name: Usuarios_id_seq; Type: SEQUENCE OWNED BY; Schema: jonathan; Owner: postgres
--

ALTER SEQUENCE jonathan."Usuarios_id_seq" OWNED BY jonathan."Usuarios".id;


--
-- TOC entry 2868 (class 2604 OID 16391)
-- Name: Usuarios id; Type: DEFAULT; Schema: jonathan; Owner: postgres
--

ALTER TABLE ONLY jonathan."Usuarios" ALTER COLUMN id SET DEFAULT nextval('jonathan."Usuarios_id_seq"'::regclass);


--
-- TOC entry 2993 (class 0 OID 16388)
-- Dependencies: 198
-- Data for Name: Usuarios; Type: TABLE DATA; Schema: jonathan; Owner: postgres
--

COPY jonathan."Usuarios" (id, nombre, email, password) FROM stdin;
1	jonathan castro	admin@hotmail.com	123
2	maria gonzales	maria@hotmail.com	123
\.


--
-- TOC entry 3003 (class 0 OID 0)
-- Dependencies: 197
-- Name: Usuarios_id_seq; Type: SEQUENCE SET; Schema: jonathan; Owner: postgres
--

SELECT pg_catalog.setval('jonathan."Usuarios_id_seq"', 2, true);


--
-- TOC entry 2870 (class 2606 OID 16396)
-- Name: Usuarios pk_usuarios; Type: CONSTRAINT; Schema: jonathan; Owner: postgres
--

ALTER TABLE ONLY jonathan."Usuarios"
    ADD CONSTRAINT pk_usuarios PRIMARY KEY (id);


-- Completed on 2019-01-23 01:50:54 -04

--
-- PostgreSQL database dump complete
--

