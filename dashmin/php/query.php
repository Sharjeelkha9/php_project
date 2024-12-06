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

//update category
if(isset($_POST['updateCategory'])){
    $name = $_POST['catName'];
    $id=$_POST['catid'];
    if(!empty($_FILES['catImage']['name'])){
    $imagename=$_FILES['catImage']['name'];
    $imageobject=$_FILES['catImage']['tmp_name'];
    $extension= pathinfo($imagename,PATHINFO_EXTENSION);
    $pathdirectory="img/categories/".$imagename;
    if($extension == "jpg" || $extension == "png" || $extension == "jpeg" || $extension == "webp"){
        if(move_uploaded_file($imageobject,$pathdirectory)){
            //query Prepration
            $query=$pdo ->prepare("update categories set name = :catName, image = :catImage where id = :catid");
            $query->bindParam("catid",$id);
            $query->bindParam("catName",$name);
            $query->bindParam("catImage",$imagename);
            $query->execute();
            echo "<script>alert('Data Updated Successfully')</script>";
        }
    }else{
        echo "<script>alert('Invalid file type use only jpg, jpeg, png or webp')</script>";
    }
}else{
    $query=$pdo ->prepare("update categories set name = :catName where id = :catid");
            $query->bindParam("catid",$id);
            $query->bindParam("catName",$name);
            $query->execute();
            echo "<script>alert('Data Updated Successfully')</script>";
}
}

//delete category

if(isset($_POST['deleteCategory'])){
    $id=$_POST['catid'];
    $query=$pdo ->prepare("delete from categories where id = :catid");
    $query->bindParam("catid",$id);
    $query->execute();
    echo "<script>alert('Data Deleted Successfully')</script>";
}


?>