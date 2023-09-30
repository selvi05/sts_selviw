<?php 
$username =12345;
$password =1234;

if ($username == 12345 && $password == 1234){
    echo "berhasil login";
}else if ($username == 2323 && $password == 12345){
    echo "username salah";
}else if ($username == 12345 && $password ==8888){
    echo "password salah";
}else {
    echo "mohon maaf username atau password salah";
}
?>