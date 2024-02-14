use mydb;
/*Datos de la bdd*/
insert into usuario (nombre, apellido, sexo, edad, complexion, telefono)
values ('Ramon', 'Gallardo', 'M', '20', 'Mr Olimpia', '+34 601148031'),
       ('Pedro', 'Gonzalez', 'M', '25', 'Sobrepeso', '+34 666666666'),
       ('Almudena', 'Pedrosa', 'F', '19', 'Bajopeso', '+34 777777777'),
       ('Rosa', 'Del olmo', 'F', '45', 'Peso ideal', '+34 601033033'),
       ('Roberto', 'Mora', 'M', '32', 'Peso ideal', '+34 102398810'),
       ('Pilar', 'Caballos', 'F', '23', 'Peso ideal', '+34 1829380123'),
       ('Ruben', 'Rubio', 'M', '60', 'Peso ideal', '+34 1920381012'),
       ('Paula', 'Perez', 'F', '35', 'Peso ideal', '+34 0318928083'),
       ('Alvaro', 'Martinez', 'M', '37', 'Peso ideal', '+34 19283012'),
       ('Diego', 'Herrera', 'M', '48', 'Peso ideal', '+34 218032192');

insert into lugar (nombre, descripcion, tipo, provincia, localidad, direccion)
values ('Plaza España', 'Plaza de España ', 1, 'Cadiz', 'El puerto de Santa Maria', 'C Valdes 4D'),
       ('Ayuntamiento', 'Plaza ayuntamiento ', 1, 'Cadiz', 'El puerto de Santa Maria', 'C Larga 2F'),
       ('Inventada', 'Calle inventada  ', 1, 'Cadiz', 'Jerez', 'C Inventada 10P'),
       ('Parque del mar', 'Parque del mar', 1, 'Barcelona', 'Pineda del mar', 'Avda Libertad'),
       ('Plaza leones', 'Plaza fuente de leones', 1, 'Granada', 'Motril', 'Avda Niidea'),
       ('Parque Paseo', 'Parque paseo maritimo ', 1, 'Granada', 'Calahonda', 'C undostres 4D'),
       ('Dunkin donuts', 'Cafeteria dunkin donuts', 1, 'Sevilla', 'Sevilla', 'C micaf 10f'),
       ('Gruta de las maravillas', 'Gruta de las maravillas', 1, 'Huelva', 'Aracena', 'C ultima 4z');

insert into review(Descripcion, puntuacion, usuario_idusuario)
values ('La mejor experiencia de mi vida', 10, 1),
       ('La peor experiencia de mi vida', 1, 2),
       ('Una buena experiencia', 7, 3),
       ('No estubo mal', 5, 4),
       ('Me cambio la vida', 10, 5),
       ('Experiencia recomendable', 8, 6),
       ('Muy buena experiencia ', 9, 7),
       ('La mejor experiencia de mi vida', 10, 8),
       ('Esperaba mas', 4, 9),
       ('No esta mal del todo', 6, 10);


insert into cita (usuario_propone, usuario_acepta, fecha, descripcion, lugar_idlugar, review_idreviewpropone,
                  review_idreview)
values (1, 2, curdate(), 'Cita en plaza esp', 1, 1, 2),
       (3, 4, curdate(), 'Ayunta ', 2, 3, 4),
       (5, 6, curdate(), 'Cita 3', 3, 5, 6),
       (7, 8, curdate(), 'Cita 4', 4, 7, 8),
       (9, 10, curdate(), 'Cita 5', 5, 9, 10);

