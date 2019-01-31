--
-- PostgreSQL database dump
--

-- Dumped from database version 10.6 (Ubuntu 10.6-0ubuntu0.18.10.1)
-- Dumped by pg_dump version 10.6 (Ubuntu 10.6-0ubuntu0.18.10.1)

-- Started on 2019-01-31 18:07:01 -04

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
-- TOC entry 3037 (class 0 OID 0)
-- Dependencies: 1
-- Name: EXTENSION plpgsql; Type: COMMENT; Schema: -; Owner: 
--

COMMENT ON EXTENSION plpgsql IS 'PL/pgSQL procedural language';


SET default_tablespace = '';

SET default_with_oids = false;

--
-- TOC entry 204 (class 1259 OID 16443)
-- Name: Presupuesto; Type: TABLE; Schema: jonathan; Owner: postgres
--

CREATE TABLE jonathan."Presupuesto" (
    id integer NOT NULL,
    presupuesto character varying(255)
);


ALTER TABLE jonathan."Presupuesto" OWNER TO postgres;

--
-- TOC entry 203 (class 1259 OID 16441)
-- Name: Presupuesto_id_seq; Type: SEQUENCE; Schema: jonathan; Owner: postgres
--

CREATE SEQUENCE jonathan."Presupuesto_id_seq"
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE jonathan."Presupuesto_id_seq" OWNER TO postgres;

--
-- TOC entry 3038 (class 0 OID 0)
-- Dependencies: 203
-- Name: Presupuesto_id_seq; Type: SEQUENCE OWNED BY; Schema: jonathan; Owner: postgres
--

ALTER SEQUENCE jonathan."Presupuesto_id_seq" OWNED BY jonathan."Presupuesto".id;


--
-- TOC entry 202 (class 1259 OID 16409)
-- Name: Proyectos; Type: TABLE; Schema: jonathan; Owner: postgres
--

CREATE TABLE jonathan."Proyectos" (
    id integer NOT NULL,
    email character varying(255),
    nombre character varying(255),
    presupuesto character varying(255),
    descripcion character varying(255),
    updated_at character varying(255),
    created_at character varying(255)
);


ALTER TABLE jonathan."Proyectos" OWNER TO postgres;

--
-- TOC entry 201 (class 1259 OID 16407)
-- Name: Proyectos_id_seq; Type: SEQUENCE; Schema: jonathan; Owner: postgres
--

CREATE SEQUENCE jonathan."Proyectos_id_seq"
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE jonathan."Proyectos_id_seq" OWNER TO postgres;

--
-- TOC entry 3039 (class 0 OID 0)
-- Dependencies: 201
-- Name: Proyectos_id_seq; Type: SEQUENCE OWNED BY; Schema: jonathan; Owner: postgres
--

ALTER SEQUENCE jonathan."Proyectos_id_seq" OWNED BY jonathan."Proyectos".id;


--
-- TOC entry 200 (class 1259 OID 16401)
-- Name: Roles; Type: TABLE; Schema: jonathan; Owner: postgres
--

CREATE TABLE jonathan."Roles" (
    id integer NOT NULL,
    role character varying(255)
);


ALTER TABLE jonathan."Roles" OWNER TO postgres;

--
-- TOC entry 199 (class 1259 OID 16399)
-- Name: Roles_id_seq; Type: SEQUENCE; Schema: jonathan; Owner: postgres
--

CREATE SEQUENCE jonathan."Roles_id_seq"
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE jonathan."Roles_id_seq" OWNER TO postgres;

--
-- TOC entry 3040 (class 0 OID 0)
-- Dependencies: 199
-- Name: Roles_id_seq; Type: SEQUENCE OWNED BY; Schema: jonathan; Owner: postgres
--

ALTER SEQUENCE jonathan."Roles_id_seq" OWNED BY jonathan."Roles".id;


--
-- TOC entry 198 (class 1259 OID 16388)
-- Name: Usuarios; Type: TABLE; Schema: jonathan; Owner: postgres
--

CREATE TABLE jonathan."Usuarios" (
    id integer NOT NULL,
    nombre character varying(255),
    email character varying(255),
    password character varying(255),
    imagen character varying(255),
    role character varying(255),
    updated_at character varying(255),
    created_at character varying(255)
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
-- TOC entry 3041 (class 0 OID 0)
-- Dependencies: 197
-- Name: Usuarios_id_seq; Type: SEQUENCE OWNED BY; Schema: jonathan; Owner: postgres
--

ALTER SEQUENCE jonathan."Usuarios_id_seq" OWNED BY jonathan."Usuarios".id;


--
-- TOC entry 2890 (class 2604 OID 16446)
-- Name: Presupuesto id; Type: DEFAULT; Schema: jonathan; Owner: postgres
--

ALTER TABLE ONLY jonathan."Presupuesto" ALTER COLUMN id SET DEFAULT nextval('jonathan."Presupuesto_id_seq"'::regclass);


--
-- TOC entry 2889 (class 2604 OID 16412)
-- Name: Proyectos id; Type: DEFAULT; Schema: jonathan; Owner: postgres
--

ALTER TABLE ONLY jonathan."Proyectos" ALTER COLUMN id SET DEFAULT nextval('jonathan."Proyectos_id_seq"'::regclass);


--
-- TOC entry 2888 (class 2604 OID 16404)
-- Name: Roles id; Type: DEFAULT; Schema: jonathan; Owner: postgres
--

ALTER TABLE ONLY jonathan."Roles" ALTER COLUMN id SET DEFAULT nextval('jonathan."Roles_id_seq"'::regclass);


--
-- TOC entry 2887 (class 2604 OID 16391)
-- Name: Usuarios id; Type: DEFAULT; Schema: jonathan; Owner: postgres
--

ALTER TABLE ONLY jonathan."Usuarios" ALTER COLUMN id SET DEFAULT nextval('jonathan."Usuarios_id_seq"'::regclass);


--
-- TOC entry 3029 (class 0 OID 16443)
-- Dependencies: 204
-- Data for Name: Presupuesto; Type: TABLE DATA; Schema: jonathan; Owner: postgres
--

COPY jonathan."Presupuesto" (id, presupuesto) FROM stdin;
1	100/500 BsS
2	500/1000 BsS
3	1000/1500 BsS
4	1500 /2000 BsS
5	5000/10000 BsS
6	10000/50000 BsS
\.


--
-- TOC entry 3027 (class 0 OID 16409)
-- Dependencies: 202
-- Data for Name: Proyectos; Type: TABLE DATA; Schema: jonathan; Owner: postgres
--

COPY jonathan."Proyectos" (id, email, nombre, presupuesto, descripcion, updated_at, created_at) FROM stdin;
1	maria@hotmail.com	cafe feliz	1000/1500 BsS	un cafe donde la gente disfrute	2019-01-31 18:03:42	2019-01-31 18:03:42
\.


--
-- TOC entry 3025 (class 0 OID 16401)
-- Dependencies: 200
-- Data for Name: Roles; Type: TABLE DATA; Schema: jonathan; Owner: postgres
--

COPY jonathan."Roles" (id, role) FROM stdin;
1	admin
2	user
\.


--
-- TOC entry 3023 (class 0 OID 16388)
-- Dependencies: 198
-- Data for Name: Usuarios; Type: TABLE DATA; Schema: jonathan; Owner: postgres
--

COPY jonathan."Usuarios" (id, nombre, email, password, imagen, role, updated_at, created_at) FROM stdin;
10	jonathan castro	admin@hotmail.com	$2y$10$TW.t5SyIpi6I7vE1bdNRfOiNywyq.u9UgBouHce/4I4JQ9IQdx2du	user.png	admin	2019-01-26 18:33:28	2019-01-26 18:33:28
11	maria gonzalez	maria@hotmail.com	$2y$10$l3We5jLH5DDj88zitw55TOTUvAEYSIEFr2LGcjg4yvZIQbqq3S.Si	user.png	user	2019-01-26 18:33:58	2019-01-26 18:33:58
12	carlos pacheco	carlos@hotmail.com	$2y$10$YjEF8jJxVTvyVaGwWeqpeu7xaYki2n7dDXvnNvKKrbEvBGfS.PI1S	user.png	user	2019-01-27 00:25:48	2019-01-27 00:25:48
16	carlos pulido	pulido@hotmail.com	$2y$10$dSNce3zkuyeFC/QIQOzSEuNAhao8HUOKUwVzmTtAsU9zkRFBuRCfi	user.png	user	2019-01-27 01:08:54	2019-01-27 01:08:54
17	mariana martinez	mariana@hotmail.com	$2y$10$0.JcFO.Xywu/o2tuSukr7uY6hr8HUaun263B1ahWRwbgC9uptYcUO	user.png	user	2019-01-27 01:09:10	2019-01-27 01:09:10
18	paola ferreira	paola@hotmail.com	$2y$10$FiWe88f/TlAhInGbTxwr1O1BSbsbVCA4oRpP7GDiod1vDL.viaV6u	user.png	user	2019-01-30 21:41:20	2019-01-27 01:09:33
\.


--
-- TOC entry 3042 (class 0 OID 0)
-- Dependencies: 203
-- Name: Presupuesto_id_seq; Type: SEQUENCE SET; Schema: jonathan; Owner: postgres
--

SELECT pg_catalog.setval('jonathan."Presupuesto_id_seq"', 1, false);


--
-- TOC entry 3043 (class 0 OID 0)
-- Dependencies: 201
-- Name: Proyectos_id_seq; Type: SEQUENCE SET; Schema: jonathan; Owner: postgres
--

SELECT pg_catalog.setval('jonathan."Proyectos_id_seq"', 1, true);


--
-- TOC entry 3044 (class 0 OID 0)
-- Dependencies: 199
-- Name: Roles_id_seq; Type: SEQUENCE SET; Schema: jonathan; Owner: postgres
--

SELECT pg_catalog.setval('jonathan."Roles_id_seq"', 1, false);


--
-- TOC entry 3045 (class 0 OID 0)
-- Dependencies: 197
-- Name: Usuarios_id_seq; Type: SEQUENCE SET; Schema: jonathan; Owner: postgres
--

SELECT pg_catalog.setval('jonathan."Usuarios_id_seq"', 22, true);


--
-- TOC entry 2900 (class 2606 OID 16448)
-- Name: Presupuesto pk_presupuesto; Type: CONSTRAINT; Schema: jonathan; Owner: postgres
--

ALTER TABLE ONLY jonathan."Presupuesto"
    ADD CONSTRAINT pk_presupuesto PRIMARY KEY (id);


--
-- TOC entry 2898 (class 2606 OID 16417)
-- Name: Proyectos pk_proyectos; Type: CONSTRAINT; Schema: jonathan; Owner: postgres
--

ALTER TABLE ONLY jonathan."Proyectos"
    ADD CONSTRAINT pk_proyectos PRIMARY KEY (id);


--
-- TOC entry 2896 (class 2606 OID 16406)
-- Name: Roles pk_roles; Type: CONSTRAINT; Schema: jonathan; Owner: postgres
--

ALTER TABLE ONLY jonathan."Roles"
    ADD CONSTRAINT pk_roles PRIMARY KEY (id);


--
-- TOC entry 2892 (class 2606 OID 16396)
-- Name: Usuarios pk_usuarios; Type: CONSTRAINT; Schema: jonathan; Owner: postgres
--

ALTER TABLE ONLY jonathan."Usuarios"
    ADD CONSTRAINT pk_usuarios PRIMARY KEY (id);


--
-- TOC entry 2894 (class 2606 OID 16398)
-- Name: Usuarios uq_email_usuarios; Type: CONSTRAINT; Schema: jonathan; Owner: postgres
--

ALTER TABLE ONLY jonathan."Usuarios"
    ADD CONSTRAINT uq_email_usuarios UNIQUE (email);


-- Completed on 2019-01-31 18:07:02 -04

--
-- PostgreSQL database dump complete
--

