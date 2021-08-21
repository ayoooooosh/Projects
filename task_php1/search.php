<?php
 $name=$_GET['nam']; 
 require 'head.php'; 
 $team = array('Aya', 'Sara', 'Hanan','Noura','Malak');

 ?>

<div class="container pt-5 tex-center">

   <div class="list-group">
	  <a href="#" class="list-group-item list-group-item-action active">
	    The Team are:
	  </a>
	  <?php
	    foreach ($team as $na)
	    {
	    	//echo $na;
	    ?>
	    <a href="#" class="list-group-item list-group-item-action"> <?php echo $na ?> </a>
	    <?php
      }
     ?>
 </div>
 <?php 
      $cla="danger";
       for($i=0 ;$i<count($team) ;$i++)
       {
       	//echo $team[$i];
       	if ($name==$team[$i]) {
       		 $cla="success";
       		 break;
       	}
       }

       function echoName($name)
          {
          	 //$GLOBALS['cla'];

	          	if($GLOBALS['cla']=="success")
	  	     	   {
	  	     	   	echo "The name is found The array : ".$name ;
	  	     	   }
	  	     	   else {
	  	     	   	echo "The name is not found The array : ".$name;
	  	     	   }

          }
       ?>

  	     	 <div class="alert alert-<?php echo $cla ?> mt-5 m-5 text-dark text-center" role="alert">
            <?php 
  	     	      echoName($name);
  	         ?>
  	     	</div>
    