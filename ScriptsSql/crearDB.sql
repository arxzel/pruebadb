CREATE TABLE usuario (
	id_usuario			text			PRIMARY KEY,
	usuario_nombre		varchar(20)		NOT NULL,
	usuario_apellido	varchar(30)		NOT NULL,
	usuario_password	text			NOT NULL
);

INSERT INTO usuario values ('fabian@prueba','fabian','millan','hola');