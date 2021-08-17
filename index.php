<?php
session_start();
  ?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Indexpage</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Ropa+Sans:ital@1&family=Ubuntu:wght@300;400&display=swap" rel="stylesheet">
   </head>
<body>
   <div class="navigation">
    
    <div class="left">
    <h2>iBlog</h2>
   <a href="index.php">Home</a>
    </div>
 <div class="right">
 <ul>
  <li><a href="contact.php">Contact Us</a></li>
  <li><a href="admin_dash.php">Admin</a></li>

  <!-- <li><a href="login.php">LogIn</a></li> -->
  <!-- <li><a href="registretion.php">Register </a></li> -->
  <?php
 if(isset($_SESSION['pass'])){
 ?> 
  <!-- <li><a href="admin_dash.php">Author</a></li> -->
 <li><a href="author_dash.php">Author</a></li>
 <li><a href="author_info.php">My Details</a></li>
 <li><a href="logout.php">Logout</a></li>
 <?php
}else{
  ?> <li><a href="login.php">LogIn</a></li>
   <li><a href="registretion.php">Register </a></li>
<?php
}
?>

</ul>
 </div>
 <?php
 include("dbcon.php");
  $qry="SELECT * FROM `post` INNER JOIN author_info ON post.author_id = author_info.author_id ORDER BY cid DESC ";
 $run=mysqli_query($conn,$qry);
  $count=0;
  while($data = mysqli_fetch_assoc($run)){
    $count++;
 ?>
   </div>
   <div class="content">
  <div class="title">
     <h2> <?php  echo "#".''.$count.'  '.$data['title'];?></h2>  
  </div>
  <div class="time">
     Posted On : <?php echo $data['datetime'];?>
     </div>
   <div class="desc">
     <?php echo $data['short_desc'];?>
   </div>
   <div class="time1">
       Author : <?php echo $data['fname'];?>
   </div>
   <div class="btnn">
   <a href="content.php?id=<?php echo $data['cid']?>"  name="edit">READ MORE</a>

   </div>
   </div>
   <?php } ?>
   <div class="footer">

   </div>
</body>
</html>