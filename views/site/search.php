<?php

$connect = mysqli_connect("localhost", "root", "", "mvc") or die("Error");

?>

<!doctype html>
<html>
<head>
    <title>Document</title>
</head>

<body>
<form method="post" action="/php_praktos-main-master/result_search" class="discipline">
    <input name="csrf_token" type="hidden" value="<?= app()->auth::generateCSRF() ?>"/>
    <label> Введите фамилию:<br><input type="text" name="search1" required=""  ></label>

    <button class="but" >Выбрать</button>
</form>

<?php
//if (isset($_POST['submit'])) {
//    $search = $_POST['search'];
//    $query = mysqli_query($connect, "SELECT * FROM users WHERE 'login' LIKE '%$search%' ");
//    while ($row = mysqli_fetch_assoc($query)) echo " " . $row['FirstName'] ;
//}
//
//?>


