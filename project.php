<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=devichitragan-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  <link rel="shortcut icon" href="./favicon.svg" type="image/svg+xml">
  <link rel="stylesheet" href="css bunch/css/projet.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600;700;800&family=Poppins:wght@400;500;600;700&display=swap"
    rel="stylesheet">
    <style>
      .btn{
        position: fixed;
        top: 95%;
        left: 87%;
        transform: translate( -50%, -50%);
       }
      </style>
</head>

<body id="top">
<div class="btn">
    <button class="btn btn-primary"><a href="index.php" style="color:alichitraganblue; display:fixed; float: right;">BACK</a></button>
  
  </div>
    <section class="project" id="project">
        <div class="container">
          <p class="section-subtitle">Projects</p>

          <h2 class="h2 section-title">Done From Chitragan Engineers</h2>
         
                
    <?php
$host="localhost";
$user="root";
$password="";
$dbname="chitragan";


$conn=mysqli_connect($host,$user,$password,$dbname);

$query="select * from image";
$query_run = mysqli_query($conn,$query);
while($row = mysqli_fetch_assoc($query_run)){


    
$host="localhost";
$user="root";
$password="";
$dbname="chitragan";


$conn=mysqli_connect($host,$user,$password,$dbname);



$ka = "select * from  image";
$co = mysqli_query($conn,$ka);

$tabl=mysqli_fetch_array($co);
  ?>
  
   <div class="row d-flex">
            <div class="col-md-6 col-lg-4 d-flex ftco-animate">
              <div class="blog-entry align-self-stretch">
                 <!-- Image -->
                </a>
                <div class="text mt-3 px-4">
                  <div class="posted mb-3 d-flex">
                    <div class="img author" style="background-image: url(images/person_2.jpg);"></div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-4 d-flex ftco-animate">
              <div class="blog-entry align-self-stretch">
                
                <div class="card">
                  <div class="card-body">
                    
                    <hr><hr>
                    <img src="<?php echo $row['file_name'] ?>" alt="" srcset="" width="300px"><br>
                    <h1><u><?php echo $row['title'];?></u></h1><br>
                    <div class="desc pl-3">
                      <span><b>Posted by Chitragan Engineers</b></span>
                    </div>
     <h4><?php echo $row['created'];?></h4>
     <h3 class="heading">Project Summery</h3>
                    <h4><u><?php echo $row['description'];?></u></h4><br>
      <hr size="5" color="white" >
    </div>
  </div>
  <?php
}     
    ?> 
      
</body>
</html>