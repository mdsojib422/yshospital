<?php 
require_once "auth/Db.php";
$db = new DB();
session_start();
$id = $_SESSION['usrid'];

 if($_FILES['profile_img']['name'] != ''){
    $photo = $_FILES['profile_img'];    
    $explodeVal = explode(".",$photo['name']);
    $ext = end($explodeVal);
    $mdimgname = $explodeVal[0].'_u'.$id.'.'.$ext;
    $path = "../uploads/profile/".$mdimgname;
    if(move_uploaded_file($photo["tmp_name"],$path)){
        $sql = "UPDATE ys_users SET images = '$mdimgname' WHERE id = '$id'";
        $stmt = $db->pdo->prepare($sql);
        $result = $stmt->execute();
        if($result){
            echo $path;
        }
    }

}
 