<?php
$xml=simplexml_load_file("file.xml");
$name=$_REQUEST['username'];
$pass=$_REQUEST['password'];
if($name==$xml->username && $pass==$xml->password)
{
echo("login success");
return true;
}
else
{
echo("invalid username and password ");
return false;
}