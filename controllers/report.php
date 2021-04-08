<?php


include "../models/db.php";

if($_SERVER["REQUEST_METHOD"]==="POST" && !empty($_POST['id']))
{

  $sql="SELECT * FROM buyers where id='$_POST[id]'";

}
else
{
  $sql="SELECT * FROM buyers";
}
  $connect=new db();
  $conobj=$connect->OpenCon();
 
  $result=$connect->SelectQuery($conobj,$sql);


?>