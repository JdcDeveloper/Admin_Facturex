  -- constraint
  alter table jonathan."Usuarios"
  add constraint UQ_Email_Usuarios
  unique (email);
