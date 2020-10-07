<html>


<head>
    <link type="text/css" rel="stylesheet" href="log.css">

</head>
<body>

    <div class="signin">
        <form>
            <h2 style="color:white">Log In</h2>
        <input type ="text" name="username" placeholder="user name"/>
        <input type ="text" name ="password" placeholder="password"/>
<br><br>
<a href="cong.html"><input type="button" value="Log In"></a>
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

$query="select * from login where email='$email' && pass='$pass'";

$run=mysqli_query($conn,$query);

$total=mysqli_num_rows($run);

if ($total==1){
    header('Location:index_.php');
}
else{
    echo "Account not found register now";
}
}
?>


