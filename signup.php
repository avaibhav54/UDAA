
<?php
$conn = mysqli_connect("localhost", "root", "", "project");
if($conn->connect_error){
    die("Connection Failed : ". $conn->connect_error);
} 


if(isset($_POST['submit'])){
    $email= $_POST['email'];
    $name= $_POST['name'];
    $phone=$_POST['phone'];
    $pass= $_POST['pass'];
    $confpass= $_POST['confpass'];
   

    $query="INSERT INTO `login`( `email`,`name`, `phone`, `pass`, `confpass`) VALUES ('$email','$name','$phone','$pass','$confpass')";
    $run=mysqli_query($conn,$query);

    if ($run==True) {

        header('Location:login.php');
    }
    else{
        echo "Data insertion failed";
    }
}



?>


<html>
<head>
    <link href="signup.css" rel="stylesheet" type="text/css"/>
    <link href="https://fonts.googleapis.com/css?family=Play"rel="stylesheet">
    <style>
#msg{
    visibility: hidden;
    min-width: 250px;
    background-color: yellow;
    color: #000;
    text-align: center;
    border-radius: 2px;
    padding: 16px;
    position: fixed;
    z-index: 1;
    right: 30%;
    top:30px;
    font-size: 17px;
    margin-right: 30px;
}

#msg.show{
    visibility: visible;
    -webkit-animation: fadein 0.5s,fadeout 0.5s 2.5s;
    animation: fadein 0.5s,fadeout 0.5s 2.5s;
}
@-webkit-keyframes fadein{
    
    from{ top:0;opacity: 0;}
    to{top:30px;opacity:1;}
}
@keyframes fadein{
    
    from{ top:0;opacity: 0;}
    to{top:30px;opacity:1;}
}
        @-webkit-keyframes fadeout{
            
    from{ top:30px;opacity: 1;}
    to{top:0;opacity:0;}
        }
@keyframes fadeout{
    from{ top:30px;opacity: 1;}
    to{top:0;opacity:0;}
}
        </style>
</head>


<body>
<div class="signup">

    <form method="POST" action="">
        <h2 style="color:#fff;">Sign Up</h2>
        <input type="text"require name="name" placeholder=" name"><br><br>
        <input type="text" name="phone" placeholder="phone number"><br><br>
        <input type="text"  name="email" placeholder="email"><br><br>
        <input type="password" name="pass" placeholder="Password"><br><br>
        <input type="password" name="confpass" placeholder="confirm Password"><br><br>
        <input type="submit" name="submit" value="signup" ><br><br>
        </form>
<div id="msg">Congratulation you  signup
    Successfully!!!
</div>
<script>
    function me(){
        var x= document.getElementById("msg");
        x.className="show";
        setTimeout(function(){

            x.className=x.className.replace("show","");},3000);
        }
    </script>

Already have account?<a href="login.php" style="color:yellow;text-decoration: none; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">&nbsp;Log in</a>
   
</div>

</body>
</html>
