<?php
 $connect= mysqli_connect('localhost','root','mysql','registration');

 if(!$connect){
    echo "not connected to database";

 }


?>
<?php
if(isset($_POST['submit'])) {
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $password= $_POST['password'];
    $phoneno= $_POST['phoneno'];
    $gender= $_POST['gender'];
    $country= $_POST['country'];
    $date= $_POST['date'];

    //echo $firstname.' '.$country; exit; 

    $sql = "INSERT INTO users (firstname, lastname,email,password,phoneno,gender,country,date) 
    VALUES ('$firstname', '$lastname','$email','$password','$phoneno','$gender','$country',NOW())";


    $result = mysqli_query($connect, $sql);

    if(!$result) {

        die(mysqli_error($connect));
    }
    else{
        echo "submitted successfuly!";
    }
    
    

}

?>
