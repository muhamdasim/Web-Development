<?php
$username= filter_input(INPUT_POST,'username');
$password=filter_input(INPUT_POST,'password');
$host="localhost";
$dbusername="root";
$dbpassword="";
$dbname="student";

 $conn=new mysqli($host,$dbusername,$dbpassword,$dbname);

if(mysqli_connect_error())
{
    die('connect error(' .mysqli_connect_errono().')'
        .mysqli_connect_error());
}
else
{
$sql = "select * from details where username='$username' and password='$password'";
$result=mysqli_query($conn,$sql);
    if (!$result) {
    printf("Error: %s\n", mysqli_error($conn));
    exit();
}
$row = mysqli_fetch_array($result,MYSQLI_ASSOC);

if($row["username"]==$username && $row["password"]==$password)
        header("location: welcome.php");

else
            header("location: invalid_details.php");

    
}
?>