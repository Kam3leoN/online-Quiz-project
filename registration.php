 <?php

 
session_start();
header('location:login.php');
$con=mysqli_connect('localhost','root');
if($con){
echo" connection successful ";
}
else{
echo "no connection";
}
mysqli_select_db($con, 'sessionpractical');

$name =$_POST['user_name'];
$email =$_POST['email_name'];
$pass =$_POST['password_name'];
$country =$_POST['country_name'];

$q=" select * from signin where name = '$name' && email = '$email' && password = '$pass' && country = '$country' ";

$result= mysqli_query($con, $q);

$num = mysqli_num_rows($result);

if($num == 1){
echo "duplicate data";
}else{
$qy= " insert into signin(name, email, password, country) values ('$name' , '$email' , '$pass' , '$country') ";
mysqli_query($con, $qy);
}
?> 