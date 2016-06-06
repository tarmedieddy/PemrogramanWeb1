<?php
//$conn = mysql_connect("localhost", "root", "123");
//$db = mysql_select_db("dbsttb", $conn);
//var_dump($conn);
//if($conn){
//    echo "true";
//}

if(mysqli_connect("localhost","root","123")){
    echo "true";
}else{
    echo "false";
}
?>