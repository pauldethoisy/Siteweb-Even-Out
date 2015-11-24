<?php
$connect = mysqli_connect("localhost", "root", "root", "app_exemple");
if (!$connect) {
    printf("Ã‰chec de la connexion : %s\n", mysqli_connect_error());
    exit();
}
function update_users($nom,$prenom,$id) {
    global $connect;
    mysqli_query($connect, "update users set nom = '$nom', prenom = '$prenom' where id='$id'") or die("MySQL Erreur : " . mysqli_error());
}

function insert_users($nom,$prenom) {
    global $connect;
    mysqli_query($connect, "insert into users (nom,prenom) values ('$nom', '$prenom')") or die("MySQL Erreur : " . mysqli_error());
}

function select_users() {
    global $connect;
    $result=mysqli_query($connect,"select * from users") or die("MySQL Erreur : " . mysqli_error());
    return $result;
}
function select_one_user($id) {
    global $connect;
     $result=mysqli_query($connect,"select * from users where id=".$id) or die("MySQL Erreur : " . mysqli_error());
     return $result;
}
?>