
<?php

session_start();
 $nameeeror="";
 $amount=$buyer=$receiptId=$items=$email=$note=$phone=$city=$entry="";
 $valid=true;


 $amounterror=$buyererror=$receipterror=$itemserror=$emailerror=$noteerror=$phoneerror=$cityerror=$entryerror="";
 

  if($_SERVER["REQUEST_METHOD"]=="POST")
  {

    

    $amount=$_POST["amount"];
    $buyer=$_POST["buyer"];
    $receiptId=$_POST['receipt_id'];
    $items=$_POST['items'];
    $email=$_POST['buyer_email'];
    $note=$_POST['note'];
    $phone=$_POST['phone'];
    $city=$_POST['city'];
    $entry=$_POST['entry_by'];

    echo $amount;
   
    
     
      
    
    
    if(!preg_match('/^[0-9]+$/', $amount))
    {
      $amounterror= "Amount should be contain only number.";
      
      $valid=false;
    }
    

    if(!preg_match("/^[\\w ]+$/", $buyer))
    {
      $buyererror= "Buyer should be contain only text, number and spaces .";
      $valid=false;
      
     
    }


    
    
   if(!preg_match("/^[a-zA-Z]+$/",$receiptId))
   {
     $receipterror="Receipt id should be contain only text";
     $valid=false;
    }

   if(!preg_match("/^[a-zA-Z]+$/",$items))
   {
     $itemserror="Items should be contain only text";
     $valid=false;
   }

    

    if(!filter_var($email, FILTER_VALIDATE_EMAIL))
    {
      $emailerror= "Must be a email .";
      $valid=false;

      
    }



    if(!preg_match("/^[a-zA-Z ]+$/",$city))
   {
     $cityerror="City should be contain only text and space";
     $valid=false;
   }

   if(!preg_match('/^[0-9]+$/',$phone))
   {
     $phoneerror="Phone number should be contain only numbers";
     $valid=false;
   }

   if(!preg_match('/^[0-9]+$/',$entry))
   {
     $entryerror="Entry id should be contain only numbers";
     $valid=false;
   }



   if($valid)
   {
     include('../models/db.php');
     $date=date("Y/m/d");
     $sql="INSERT INTO  buyers
  VALUES ('',$amount,'$buyer','$receiptId','$items','$email','$_SERVER[REMOTE_ADDR]','$note','$city','$phone','$date',$entry)";
     
     

     
     $connect=new db();
     $conobj=$connect->OpenCon();
     
     $connect->InsertQuery($conobj,$sql);
     $connect->CloseCon($conobj);
     
   }
    
    
    
  }


?>
