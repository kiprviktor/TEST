<?php

create table sportsmens
(
 sportsmens_id integer not null auto_increment primary key,
 sportsmens_name varchar(53), /*ФИО */
  sportsmens_telefon varchar(11) /*телефон*/
   sportsmens_birthday DATE /*дата рождения*/
 sportsmens_yearold integer /*возраст*/
 sportsmens_passport varchar(10) /*паспорт*/
 sportsmens_email varchar(44) /*email*/
  sportsmens_time DATETIME /*время создания*/
   sportsmens_mesto FLOAT /*среднее место*/
    sportsmens_biografy TEXT /*биография*/
	 sportsmens_video LONGBLOB /*видеопрезентация*/

 
);

create table sporevnovanie
(
 sporevnovanie_id integer not null auto_increment primary key,
 sporevnovanie_name varchar(53), /*название соревнования */
  sporevnovanie_data DATE), /*год*/
   sporevnovanie_city varchar(11),/*город*/
 
);

create table pruzery
(
 pruzery_id integer not null auto_increment primary key,
 pruzery_sorevovanie varchar(53), /*название соревнования */
   pruzery_year DATE), /*год*/
  pruzery_place integer), /*место*/
   pruzery_vremya varchar(11),/*результат*/
    pruzery_name varchar(53), /*ФИО */
 
);
create table rezultaty
(
 rezultaty_id integer not null auto_increment primary key,
 rezultaty_sorevovanie varchar(53), /*название соревнования */
   rezultaty_year DATE), /*год*/
  rezultaty_place integer), /*место*/
  rezultaty_vremya varchar(11),/*результат*/
    rezultaty_name varchar(53), /*ФИО */
 
);

 select
    r.rezultaty_name,
    count(*)
from rezultaty r
group by r.rezultaty_name
order by 2 desc
limit 5;

?>

