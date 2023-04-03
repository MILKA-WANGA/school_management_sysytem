<?php

$array_data=$_POST;
$json_data=json_encode($array_data);


register($array_data);

function connect_to_db()
{
   return (mysqli_connect('localhost','root','','academic'));
   
}


function register($values=array())

{
    // print_r($values);
    $email=$values['email'];
    //check existence of user in the db
    if((mysqli_num_rows(mysqli_query(connect_to_db(),"SELECT * FROM student WHERE student_email LIKE '$email'")))){


       echo "<script>alert('user already exists')</script>";
       header('refresh:0,index.php');

    }
    else{
        $adm=$values['adm'];
        $fname=$values['fname'];
        $sname=$values['sname'];
        $surname=$values['surname'];
        $email=$values['email'];
        
        $query="INSERT INTO `student` (`student_id`, `student_fname`, `student_sname`, `student_surname`, `student_email`) VALUES ('$adm', '$fname', '$sname', '$surname', '$email')";
        if(mysqli_query(connect_to_db(),$query)){

            // print_r("Registration successfully");
        echo "<script>alert('Registration successfully')</script>";
        header('refresh:0,index.php');


        }
        else{

            echo "<script>alert('error occured while processing your request!try again')</script>";
            header('refresh:0,index.php');
    
        }
   }

    
   
        
    




}

?>