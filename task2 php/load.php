<?php 
    
     $name = $_GET['name'];
     $password = $_GET['password'];

       session_start();
       $arr1 = array("aya" ,"sara","mama","baba");
       $arr2 = array("12345" ,"123456","1234567"," 2345678");

       if($_SERVER['REQUEST_METHOD']=='GET')
       {
         if(in_array($name, $arr1) && in_array($password , $arr2))
         {
            //echo "name found";
            $_SESSION['user']=$name;
             //echo $_SESSION['user']=$name;
            header('REFRESH:5;URL=page wait.php');
         }
         else
         {
            echo "Name or password is wrong!";
         }
         
       }

       else
       {
         echo "Error";
       }
?>

