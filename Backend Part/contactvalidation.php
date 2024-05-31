 <?php

$servername = "localhost";
$username = "root";
$password = "";
$database= "explorebd";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
      if (isset($_POST['submit'])){
        $name=$_POST['name'];
        $email=$_POST['email'];
        $phno=$_POST['phone'];
		 $subject=$_POST['subject'];
		$message=$_POST['message'];
       
        
       
        $sql="INSERT contact(contact_id,name,email,phone,subject,message) values('','$name','$email','$phno','$subject','$message')";
        $query=mysqli_query($conn,$sql);
        if($sql)
        {
          header('Location:index.php');
        }
    }
  
    ?>