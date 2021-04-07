<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>

  <link rel="stylesheet" href="../asset/css/style.css">
</head>

<body>

  
  <form id="buyer_form"  action="<?php echo htmlspecialchars(
                                  $_SERVER['PHP_SELF']
                                ); ?>" method="POST">




    <label for="">Amount</label>
    <input type="number" placeholder="Amount" name='amount' id='amount'> <span id='amounterror'></span><br><br>


    <label for="">Buyer</label>
    <input type="text" placeholder="Buyer" name='buyer' id='buyer'>
    <span id='buyererror'> </span>
    <br><br>



    <label for="">Receipt Id</label>
    <input type="text" placeholder="Receipt Id" name='receipt_id' id='receipt_id'>
    <span id='receipterror'> </span>
    <br><br>



    <label for="">Items</label>
    <input type="text" placeholder="Items" name='items' id='items'><span id='itemserror'> </span><br><br>


    <label for="">Buyer Email</label>
    <input type="text" placeholder="Buyer Email" name='buyer_email' id='buyer_email'>
    <span id='emailerror'> </span>
    <br><br>




    <label for="">Note</label>
    <input type="text" placeholder="Note" name='note' id='note'><span id='noteerror'> </span><br><br>

    <label for="">City</label>
    <input type="text" placeholder="City" name='city' id='city'><span id='cityerror'> </span><br><br>

    <label for="">Phone</label>
    <input type="text" placeholder="Phone" name='phone' id='phone'><span id='phoneerror'> </span><br><br>





    <label for="">Entry By</label>
    <input type="number" placeholder="Entry By" name='entry_by' id='entry_by'><span id='entryerror'> </span><br><br>



    <button type="submit">Submit</button>



  </form>





</body>

</html>