CREATE TABLE `doombook`.`usuario` ( `Cod_usuario` MEDIUMINT NOT NULL ,
    `Nombre_usuario` VARCHAR(11) NOT NULL ,  
    `Apellido` VARCHAR(20) NOT NULL ,  `Telefono` INT(9) NOT NULL ,  `Alias` VARCHAR(10) NOT NULL , 
    `Password` VARCHAR(32) NOT NULL ,  `Direccion` VARCHAR(30) NOT NULL ,  
    `Cod_tipo_usuario` INT(1) NOT NULL, PRIMARY KEY (`Cod_usuario`)) ;


CREATE TABLE `doombook`.`tipo_usuario` ( `Cod_tipo_usuario` INT(1) NOT NULL, 
`Descripcion_Usuario` VARCHAR (10) NOT NULL ,PRIMARY KEY (`Cod_tipo_usuario`));

CREATE TABLE `doombook`.`pedido` ( `Cod_pedido` MEDIUMINT NOT NULL , 
    `Cod_usuario` MEDIUMINT NOT NULL  , 
    `Valor_total_pedido` FLOAT (6) NOT NULL ,PRIMARY KEY (`Cod_pedido`));


CREATE TABLE `doombook`.`publicacion` ( `Cod_interno` MEDIUMINT NOT NULL , 
    `Cod_publico` INT(10) NOT NULL, 
     `Descripcion_publicacion` TEXT NOT NULL,
     `Cod_editorial` MEDIUMINT NOT NULL  ,  
    `img` LONGBLOB  NOT NULL,`Stock_publicacion` INT(3) NOT NULL,
    `Precio_publicacion` FLOAT(4) NOT NULL, PRIMARY KEY (`Cod_interno`));

CREATE TABLE `doombook`.`editorial` ( `Cod_editorial` MEDIUMINT NOT NULL , 
    `Nombre_editorial` VARCHAR (15) NOT NULL ,PRIMARY KEY (`Cod_editorial`));

CREATE TABLE `doombook`.`tipo` ( `Cod_tipo` MEDIUMINT NOT NULL , 
    `Descripcion_Tipo` VARCHAR (10) NOT NULL ,PRIMARY KEY (`Cod_tipo`));

CREATE TABLE `doombook`.`autor` ( `Dni_autor` MEDIUMINT NOT NULL , 
    `Nombre_autor` VARCHAR (15) NOT NULL ,PRIMARY KEY (`Dni_autor`));

CREATE TABLE `doombook`.`publicacion_tipo` ( `Cod_tipo` MEDIUMINT NOT NULL ,
    `Cod_interno` MEDIUMINT NOT NULL  );

CREATE TABLE `doombook`.`publicacion_autor` ( `Cod_autor` MEDIUMINT NOT NULL ,
    `Cod_interno` MEDIUMINT NOT NULL  );


CREATE TABLE `doombook`.`pedido_publicacion` ( `Cod_pedido` MEDIUMINT NOT NULL ,
    `Cod_interno` MEDIUMINT NOT NULL , `Fecha_hora` DATETIME NOT NULL );







