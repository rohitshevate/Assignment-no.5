<?php
include "connection.php";
if(isset($_POST['submits'])){
    $names = $_POST['name1'];
    $genders = $_POST['r'];
    $emails = $_POST['email1'];
    $ages = $_POST['age1'];
    $mobiles = $_POST['mobile1'];
    $states = $_POST['state1'];
    $comments = $_POST['comment1'];

    $insertquery = "insert into showregistration(
		name,gender,email,age,mobile,state,comment) values('$names','$genders',
        '$emails','$ages','$mobiles','$states','$comments') ";

        $res = mysqli_query($con,$insertquery);

        if($res){
           header('Location: index.php');
        }else{

                echo "data not inserted properly";
        }       
}


		

?>