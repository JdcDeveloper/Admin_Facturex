-- Table: jonathan."Usuarios"

-- DROP TABLE jonathan."Usuarios";

CREATE TABLE jonathan."Usuarios"
(
  id serial NOT NULL,
  nombre character varying(255),
  email character varying(255),
  password character varying(255),
  imagen character varying(255),
  role character varying(255),
  fecha character varying(255),
  CONSTRAINT pk_usuarios PRIMARY KEY (id),
  CONSTRAINT uq_email_usuarios UNIQUE (email)
)
WITH (
  OIDS=FALSE
);
ALTER TABLE jonathan."Usuarios"
  OWNER TO postgres;




