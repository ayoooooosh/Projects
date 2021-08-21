
<?php

 $var1=$_GET['name'];
 $var2=$_GET['email'];
 $var3=$_GET['date'];
 ?>
<?php require 'head.php'?>




<div class="container pt-5" >
	
<div class="card bg-dark text-white">
  <img class="card-img" height="300px" src='images/windows-7-wallpapers-hd-free-download1.jpg' alt="Card image" >
  <div class="card-img-overlay text-center">
    <h5 class="card-title">hallo <?php echo $var1 ?></h5>
    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
    <p class="card-text"><?php echo $var3 ?></p>
  </div>
</div>
</div>
<?php 
  //echo dirname(__FILE__);
  $file='C:\xampp\htdocs\task_php1\aya.txt';
if(file_exists($file))
{
  //echo 'Good The File['.$file .'] Is Found';
  file_put_contents($file,"Name: ". $var1."\n"."E-mail: " .$var2 . "\n" ."Date: ".$var3."\n",FILE_APPEND);
}
else
{
  echo 'Sorry The File['.$file .'] Is Not Found';
}
require 'footer.php'


?>


