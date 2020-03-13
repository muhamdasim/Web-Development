<?php
$username= filter_input(INPUT_POST,'username');
$password=filter_input(INPUT_POST,'password');
$fName=filter_input(INPUT_POST,'firstName');
$lName=filter_input(INPUT_POST,'lastName');


$host="localhost";
$dbusername="root";
$dbpassword="";
$dbname="portal";

$conn=new mysqli($host,$dbusername,$dbpassword,$dbname);

if(mysqli_connect_error())
{
    die('connect error(' .mysqli_connect_errono().')'
        .mysqli_connect_error());
}
else
{
    $sql = "insert into student_account(username,password,fName,LName) VALUES('$username','$password','$fName','$lName')";

    $result=mysqli_query($conn,$sql);
    if (!$result) {
        printf("Error: %s\n", mysqli_error($conn));
        exit();
    }
    else
    {
        echo "Your Account is Successfully Created. Now you can login";
    }


}
?>