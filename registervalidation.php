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
        $usname=$_POST['username'];
        $email=$_POST['email'];
        $phno=$_POST['phone'];
        $pass= PASSWORD_HASH($_POST["password"], PASSWORD_DEFAULT);
        
       
        $sql="INSERT users(user_id,fullname,username,email,phone,password) values('','$name','$usname','$email','$phno','$pass')";
        $query=mysqli_query($conn,$sql);
        if($sql)
        {
          header('Location:index.php');
        }
    }
  
    ?>