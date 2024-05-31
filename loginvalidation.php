 <?php
     
$servername = "localhost";
$username = "root";
$password = "";
$database= "explorebd";

// Create connection
$conn = new mysqli($servername, $username, $password, $database); 
  $email=$_POST['email'];
  $pass= $_POST["password"];
$sql = "Select * from users where email='$email'";
    $result = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($result);
    if ($num == 1){
        while($row=mysqli_fetch_assoc($result)){
            if (password_verify($pass, $row['password'])){ 
                 echo '<script type="text/javascript">'; 
                echo 'alert("Login Sucessful");';
              echo 'window.location.href = "index.php";';
               echo '</script>';
                
				
            } 
            else{
                 echo '<script type="text/javascript">'; 
                echo 'alert("Login Failed, Your password or username is wrong.");';
              echo 'window.location.href = "index.php";';
               echo '</script>';
            }
        }
	}


  
    ?>