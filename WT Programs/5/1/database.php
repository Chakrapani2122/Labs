<?php
$user=$_REQUEST['username'];
$pass=$_REQUEST['password'];
$server = "localhost";
$usern = "liet";
$passw = "liet";
$database = "wtprograms";
$tablename = "user_detail";
if($user && $pass)
    {
$connect = mysql_connect($server,$usern,$passw) or die("not connecting");
mysql_select_db($database) or die("no db :");
$query = mysql_query("SELECT * FROM $tablename WHERE username='$user' and
password='$pass'");
$numrows = mysql_num_rows($query);
if ($numrows!=0)
{
echo "\n\n\nHello " . $user. "  welcome to this page";
}
else{
echo  $user ."   does not exist!";
}
}