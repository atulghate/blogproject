<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="log.css">
    <link rel="stylesheet" href="style.css">
    <style>
        table{
     margin-top:20px;
     padding: 5px;
     justify-content: center;
     /* border:1px solid black; */
     /* background: #000; */
 }
 th{ padding: 5px;
    margin:0;
     border:1px solid black;
 }
 td{  
     margin:0;
     padding: 5px;
     border:1px solid black;
 }
    </style>
</head>
<body>

<div class="navigation">
  <div  class="left">
     <a href="#">iBlog</a>
     <a href="index.php">Home</a>
 </div>
  <div class="right1">
      <a href="author_list.php">Authors List</a>
      <a href="logout.php">Logout</a>  
  </div>
   </div>
<?php 
include("dbcon.php");
 $qry="SELECT * FROM `author_info` ";
 $run = mysqli_query($conn,$qry);
 $count=0;
 foreach( $run as $f){ $count++; ?>
 <center>
 <table>
    <tr> <th><?php echo $count;?></th>
        <th>Author Name</th>
        <td><?php echo $f['fname'] ; ?></td>
        <th><a href="edit_author_info.php?id=<?php echo $f['author_id'] ?>">EDIT</a></th>
        <th><a href="delete_author_info.php?id=<?php echo $f['author_id'] ?>">DELETE</a></th>

    </tr>
 </table>
 <div>
     
 </div>
 </center>
<?php
 }
?>
</body>
</html>