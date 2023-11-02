<?php
include __DIR__.'/db.php';
echo 'расположение '. $_FILES['personality-file']['tmp_name'];
echo 'имя '. $_FILES['personality-file']['name'];
$filename=$_FILES['personality-file']['name'];
if(move_uploaded_file($_FILES['personality-file']['tmp_name'],__DIR__.'\tmp\\'.$_FILES['personality-file']['name'])){
    echo 'файл загружен';
}
else{
    echo 'файл не загружен ';
}
$data = $db->prepare("INSERT INTO `photos`(path) VALUES ('$filename')");
$data->execute(['photos']);

$result=$data->fetchAll();
var_dump($result);
?>