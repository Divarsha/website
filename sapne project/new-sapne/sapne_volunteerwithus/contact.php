<?php
$servername = "localhost";
$username = "root";
$password = "";
$db_name = "register";

//$data = $_POST['name'];
$name = $_POST['name'];
$email = $_POST['email'];
$contact = $_POST['contact'];
$dob = $_POST['dob'];
$city = $_POST['city'];
$comments = $_POST['comments'];

if(!$name or !$email or !$contact){
    echo "**All fields are required";
}



else{
    

// Create connection
    $conn = new mysqli($servername, $username, $password, $db_name);

// Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }     
    else{
         $sql = "INSERT into users(name, email, contact, comments) 
         VALUES ('$name', '$email', $contact, '$comments')";
        
        
        if ($conn->query($sql) === TRUE) {
            
         echo "Thank you user : ".$name." for registering with us. We will revert back to you within 24 hrs.";     
	
     	  $to = "";
 	      $subject = "Contact us";
	       $txt = "Name: $name \r\n";
 	      $txt .= "Number: $contact \r\n";
	       $txt .= "email: $email \r\n";
 	      $txt .= "Message: $comments \r\n";
 	      $headers = "";

	      // mail($to,$subject,$txt,$headers);

            }
            else
            {
	           echo "Error: " . $sql . "<br>" . $conn->error;
            }
        $conn->close();
        
       
        }  
    
    
}

?>
