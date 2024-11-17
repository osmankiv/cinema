<?php
    session_start();
    $_SESSION["admin"]="";
    if(isset($_POST['submail'])){
        $username =$_POST['adminname'];
        $adminpass =$_POST['adminpass'];
        if($username == "admin" && $adminpass == "admin123" ){
            $_SESSION["admin"]=true;
        }
        else{
            $_SESSION["admin"]="";
        }


    }
    header("location:index.php")





?>