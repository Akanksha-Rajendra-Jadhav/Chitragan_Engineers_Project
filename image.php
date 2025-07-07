<?php

$host="localhost";
$user="root";
$password="";
$dbname="chitragan";


$conn=mysqli_connect($host,$user,$password,$dbname);

$titl=$_POST['title'];
$des=$_POST['description'];
$dat=$_POST['dat'];
$filename = $_FILES["file"]["name"];
                    $tempname = $_FILES["file"]["tmp_name"];
                    $folder = "./img/" . $filename;

            $query="INSERT INTO image(file_name, title, description, created) VALUES ('$folder','$titl','$des','$dat')";

            mysqli_query($conn,$query);
            
            $ex=explode('.',$filename);
            $check=strtolower(end($ex));
            $na=array('png','jpg','jpeg');

            if (in_array($check,$na)) {
                $file=fopen("image.html","r");
    echo fread($file,filesize("image.html"));
            
        
                    if (move_uploaded_file($tempname, $folder)) {

                        echo "<script> alert ('Image Upload succhitraganssfully!');</script>";

                    } 
                    else {
                        echo "<script> alert ('Failed to upload Image!');</script>";
                    }

                    }

                else {
                    echo "<script> alert ('File should be Image!');</script>";
                }


?>