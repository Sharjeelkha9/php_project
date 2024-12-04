<?php
include "connection.php";
$catimagesaddress="img/categories/";

//add Category 

if(isset($_POST['addCategory'])){
    $name=$_POST['catName'];
    $imagename=$_FILES['catImage']['name'];
    $imageobject=$_FILES['catImage']['tmp_name'];
    $extension= pathinfo($imagename,PATHINFO_EXTENSION);
    $pathdirectory="img/categories/".$imagename;
    if($extension == "jpg" || $extension == "png" || $extension == "jpeg" || $extension == "webp"){
        if(move_uploaded_file($imageobject,$pathdirectory)){
            //query Prepration
            $query=$pdo ->prepare("insert into categories(name,image) values (:pn,:pimg)");
            $query->bindParam("pn",$name);
            $query->bindParam("pimg",$imagename);
            $query->execute();
            echo "<script>alert('Data Submitted Successfully')</script>";
        }
    }else{
        echo "<script>alert('Invalid file type use only jpg, jpeg, png or webp')</script>";
    }
}
?>