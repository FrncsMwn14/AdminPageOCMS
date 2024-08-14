<?php 
session_start();
require_once('connect.php');

$query="select * from tb_admin where tb_admin.Username='".$_POST['Usern']."' and tb_admin.Password='".$_POST['Password']."' ";
$result=mysqli_query($con,$query);

if(mysqli_fetch_assoc($result))
{
    $_SESSION['User']=$_POST['Usern'];
    header("location:dashboard.php");
}
else
{
    //header("location:admin.php?Invalid=Please enter correct Username and Password");
    echo "<script>alert('username or password incorrect!')</script>";
    echo "<script>location.href='admin.php'</script>";
   
   
}
?>