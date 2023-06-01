<?php
if(!empty($_COOKIE))
{
foreach ($_COOKIE as $key=>$val)
{
echo $key.' is '.$val."<br>\n";
}
}
else {
echo 'There are no Cookies, you must set some cookies.';
}
?>