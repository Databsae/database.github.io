<?php

$host="localhost"; // Host name
$username="root"; // Mysql username
$password=""; // Mysql password
$db_name="laundry"; // Database name
$tbl_name="laundry_info"; // Table name

// Connect to server and select database.
mysql_connect("$host", "$username", "$password")or die("cannot connect");
mysql_select_db("$db_name")or die("cannot select DB");

// Get values from form
$name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$city=$_POST['city'];
$address=$_POST['address'];
$pincode=$_POST['pincode'];
$delivery=$_POST['delivery'];
$detail_of_clothes=$_POST['detail_of_clothes'];

// Insert data into mysql
$sql="INSERT INTO $tbl_name(name,email,phone,city,address,pincode,delivery,detail_of_clothes)VALUES('$name', '$email' , '$phone' , '$city' , '$address' , '$pincode' , '$delivery' , '$detail_of_clothes')";
$result=mysql_query($sql);

// if successfully insert data into database, displays message "Successful".
if($result){
echo "You have booked our service, our representative will touch with you soon.";

}

else {
echo "ERROR";
}
?>

<?php
// close connection
mysql_close();
?>
