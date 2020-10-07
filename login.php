
<html>
<head>
    <link type="text/css" rel="stylesheet" href="wer.css">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>
<body>
    <div class="signin">
        <form method ="POST" action="">
            <h2 style="color:white">Log In</h2>
        <input type ="text" name="email" placeholder="email"/>
        <input type="password" name="pass" placeholder="Password"><br><br>
<br><br>

<button type="submit" name="submit">Log in</button>
<br>
<br>
<div id="container">
<a href="reset.html" style ="margin-right:0px; font-size:13px; font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">
reset password?                  </a>
<p>                     </p>

<a href="forget.html" style ="margin-right:0px; font-size:13px; font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">
    forgot password</a>
</div>
<br>
<br><br><br><br>
Don't have account?<a href="signup.php">&nbsp;Sign Up</a>
</form>

    </div>
    

</body>
</html>

<?php

$conn = mysqli_connect("localhost", "root", "", "project");
if($conn->connect_error){
    die("Connection Failed : ". $conn->connect_error);
} 


if(isset($_POST['submit'])){


$email=$_POST[ 'email'];

$pass=$_POST['pass'];

$query="select * from login where email='$email' ";

$query2="select * from login where email='$email' && pass='$pass'";

$run2=mysqli_query($conn,$query2);

$total2=mysqli_num_rows($run2);



$run=mysqli_query($conn,$query);

$total=mysqli_num_rows($run);

if ($total!=1){
    echo '<script> swal("Error!", "Account not register", "error");</script>';
}
else if($total2==1){

    header('Location:index.php');
}
else{
    echo '<script> swal("Error!", "Incorrect Password", "error");</script>';
}
}
?>