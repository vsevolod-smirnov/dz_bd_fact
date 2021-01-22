<?php
$hostname = 'localhost';
$username = 'SebAstyan';
$password = '1';
//$dbname = 'city';



/*
$db_conn = mysqli_connect($hostname,$username,$password,$dbname);
mysqli_set_charset($db_conn,'UTF-8');
//$sql = mysqli_query($db_conn,"INSERT INTO Name VALUES (NULL,'Bob',15,2)");
$sql2 =mysqli_query($db_conn,"select * from Name");
$arr_sql2=mysqli_fetch_all($sql2,MYSQLI_ASSOC);
echo '<pre>';
print_r($arr_sql2);
echo '</pre>';
/*for($i=0;$i<count($arr_sql2);$i++){
    echo '<br>';
    echo $arr_sql2[$i]['Name'];
}
foreach ($arr_sql2 as $value){
    echo "Name = {$value['Name']} <br>";
}
*/

$dbname='People';
$db_conn = mysqli_connect($hostname,$username,$password);
//$sql = mysqli_query($db_conn , "CREATE DATABASE $dbname" ); //cоздание базы данных , обновляем странциу и коментируем . проверяем в phpmyadmin
mysqli_select_db($db_conn,$dbname);
/*$sql= mysqli_query($db_conn , "CREATE TABLE people (
    ID_person int(5) unsigned AUTO_INCREMENT PRIMARY KEY,
    Name varchar(20) not null,
    Surname varchar(20) not null,
    Age INT(6) 
)");*/
//$insert1 = mysqli_query($db_conn, "INSERT INTO people VALUES (NULL,'Pavel','Ananyin','20')");
//$insert2 = mysqli_query($db_conn, "INSERT INTO people VALUES (NULL,'Batishev','Alex','25')");
//$insert3 = mysqli_query($db_conn, "INSERT INTO people VALUES (NULL,'Беликов','Александр','32')");
//$insert4 = mysqli_query($db_conn, "INSERT INTO people VALUES (NULL,'Демин','Евгений','35')");
//вывод данных
/*$sql =mysqli_query($db_conn,"select * from people");
$arr_sql=mysqli_fetch_all($sql,MYSQLI_ASSOC);
echo '<pre>';
print_r($arr_sql);
echo '</pre>';*/

$db_name2='Hobbies';
/*$sql_create = mysqli_query($db_conn , "CREATE TABLE $db_name2 (
    ID_hobbies int(5) unsigned AUTO_INCREMENT PRIMARY KEY,
    Name varchar(20) not null,
    Description varchar(100) not null
)" );*/
//$insert1 = mysqli_query($db_conn, "INSERT INTO Hobbies VALUES (NULL,'Сноуборд','спорт')");
//$insert2 = mysqli_query($db_conn, "INSERT INTO Hobbies VALUES (NULL,'Шахматы','интелектуальное')");
//$insert3 = mysqli_query($db_conn, "INSERT INTO Hobbies VALUES (NULL,'Бег','спорт')");
//$insert4 = mysqli_query($db_conn, "INSERT INTO Hobbies VALUES (NULL,'Кроссфит','спорт')");
//$insert1 = mysqli_query($db_conn, "INSERT INTO Hobbies VALUES (NULL,'карты','азартные')");
$sql_create = mysqli_query($db_conn , "CREATE TABLE Peoople_hobbies (
    ID_record int(5) unsigned AUTO_INCREMENT PRIMARY KEY,
    ID_people int(5),
    ID_hobbies int(5)
)" );