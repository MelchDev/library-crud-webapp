use biblioteca_dap;

select * from usuario;

select max(ifnull(null, 0)) + 1;

select * from rol;

select * from libro;

select * from estado;

select * from inventario;

select * from sanciones;

select * from solicitud_prestamo;

select * from libro where autor like "#post gebne%";

SET FOREIGN_KEY_CHECKS = 0;
truncate table inventario;
SET FOREIGN_KEY_CHECKS = 1;






/*select (count(*) + 1) as COntep from rol;*/

select ID_rol, descripcion_rol from rol;

select max(id_usuario + 1)  from usuario;

update usuario set nombre_usuario= '', apellido_usuario='' where ID_usuario = '' ;
alter table libro add estado varchar (20);
