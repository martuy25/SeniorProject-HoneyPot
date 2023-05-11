<?php
	ini_set('display_errors', 1);
	include 'dbconnection(dan).php';
	session_start();
	if(isset($_POST['loginbutton'])) {

      $username = $_POST['unamel'];
      $password = $_POST['passwl'];

	  
      
	  $SQL = "SELECT Uid, username FROM users WHERE username = '$username' AND password = '$password'";
	  /* $stmt = $conn->prepare("SELECT Uid, username FROM users WHERE username = ? AND password = ? ")
		$stmt->bind_param("ss", $username, $password)
		
		$username = $_POST['unamel'];
		$password = $_POST['passwl'];
		
		$stmt->execute();
		$result = $stmt->get_result();
	  
	  */
	  $result = mysqli_query($conn,$SQL);
	  
	  
	  
	  if ($row = mysqli_fetch_assoc($result)) {
         
         
		 $_SESSION['login_user'] = $username;
         
         echo("Successfully Logged in as "); echo($row['username']);
		 /* ' AND 0 UNION SELECT 1, @@VERSION -- */
		 /* ' OR 1=1 -- */
		 /* ' AND 0 UNION SELECT 1,GROUP_CONCAT(table_name,0x2e,column_name) FROM information_schema.columns WHERE table_schema=database() --  */
      }else {
         echo "Your Login Name or Password is invalid";
      }
   
	}	
	mysqli_close($conn)
	
?>