<html>
    <head>
<link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
    </head>
    <body>
<div class="container">
    <div class="row">
		<div class="span12">
			<form class="form-horizontal" action='' method="POST">
			  <fieldset>
			    <div id="legend">
			      <legend class="">Register</legend>
			    </div>
			    <div class="control-group">
			      <!-- Username -->
			      <label class="control-label">StudentID</label>
			      <div class="controls">
			        <input type="text" id="username" name="studentid" placeholder="" class="input-xlarge">
			      </div>
			    </div>
                            <div class="control-group">
			      <!-- Username -->
			      <label class="control-label">Username</label>
			      <div class="controls">
			        <input type="text" id="username" name="username" placeholder="" class="input-xlarge">
			      </div>
			    </div>
			    <div class="control-group">
			      <!-- Password-->
			      <label class="control-label">Password</label>
			      <div class="controls">
			        <input type="password" id="password" name="password" placeholder="" class="input-xlarge">
			      </div>
			    </div>
			    <div class="control-group">
			      <!-- Button -->
			      <div class="controls">
			        <button class="btn btn-success">Register</button>
			      </div>
			    </div>
			  </fieldset>
                            <!-- https://www.w3schools.com/sql/sql_insert.asp -->            
   <?php
$servername = "localhost";
$username = "root";
$password = "albertroad";
$dbname = "fypdatabase";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO tutors (student_id, username, password)
VALUES ('$_POST[studentid]','$_POST[username]', '$_POST[password]');";

if ($conn->query($sql) === TRUE) {
    echo "New member created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
			</form>
                </body>
		</div>
	</div>
</div>
</html>