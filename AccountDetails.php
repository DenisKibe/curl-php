<?php
//to get the user account details
session_start();
include_once 'corefunc.php';

$header='Authorization:'.$_SESSION['Type'].' '.$_SESSION['Usession'];

$get_data=callAPI('GET', 'http://api.pennyinc.co.ke/api/Account/UserInfo','false',$header);

$response=json_decode($get_data, true);

echo "Name: ".$response.name;
echo "<br>";
echo "NickName: ".$response.nickname;
echo "<br>";
echo "Username: ".$response.username;
echo "<br>";
echo "Email: ".$response.email;
echo "<br>";
echo "PhoneNumber: ".$response.phoneNumber;
echo "<br>";
echo "IdNumber: ".$response.idNumber;
echo "<br>";
echo "Gender: ".$response.gender;
echo "<br>";
echo "Date of birth: ".$response.dob;
echo "<br>";
echo "Confirm Email: ".$response.emailConfirmed;
echo "<br>";
echo "Confirm PhoneNumber: ".$response.phoneNumberConfirmed;
echo "<br>";
?>