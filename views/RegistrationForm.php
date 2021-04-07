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

  <script>
    const fromValidation = () => {

      let valid = true;

      if (document.forms['buyer_form']['amount'].value == "") {
        document.getElementById('amounterror').textContent = "Amount must be filled up";

        valid = false;

      }
      else{
        document.getElementById('amounterror').textContent ="";
      }

      if (document.forms['buyer_form']['buyer'].value == "") {
        document.getElementById('buyererror').textContent = "Buyer must be filled up";
        valid = false;
      }
      else{
        document.getElementById('buyererror').textContent = "";
      }



      if (document.forms['buyer_form']['receipt_id'].value == "") {
        document.getElementById('receipterror').textContent = "Receipt Id must be filled up";
        valid = false;
      }

      else{
        document.getElementById('receipterror').textContent = "";

      }

      if (document.forms['buyer_form']['items'].value == "") {
        document.getElementById('itemserror').textContent = "Items must be filled up";
        valid = false;
      }
      else{
        document.getElementById('itemserror').textContent = "";
      }


      if (document.forms['buyer_form']['buyer_email'].value == "") {
        document.getElementById('emailerror').textContent = "Email must be filled up";
        valid = false;
      }

      else{
        document.getElementById('emailerror').textContent = "";
      }

      if (document.forms['buyer_form']['note'].value == "") {
        document.getElementById('noteerror').textContent = "Note must be filled up";
        valid = false;
      }
      else{
        document.getElementById('noteerror').textContent = "";
      }

      if (document.forms['buyer_form']['city'].value == "") {
        document.getElementById('cityerror').textContent = "City must be filled up";
        valid = false;
      }
      else{
        document.getElementById('cityerror').textContent = "";
      }

      if (document.forms['buyer_form']['phone'].value == "") {
        document.getElementById('phoneerror').textContent = "Phone must be filled up";
        valid = false;
      }
      else{
        document.getElementById('phoneerror').textContent = "";
      }
      if (document.forms['buyer_form']['entry_by'].value == "") {
        document.getElementById('entryerror').textContent = "Entry By must be filled up";
        valid = false;
      }
      else{
        document.getElementById('entryerror').textContent = "";
      }








      if (valid) {
        return true;
      } else {
        return false;
      }



    }
  </script>
  
  <form id="buyer_form"  action="<?php echo htmlspecialchars(
                                  $_SERVER['PHP_SELF']
                                ); ?>" method="POST">




    <label for="">Amount</label>
    <input type="number" placeholder="Amount" name='amount' id='amount'> <span id='amounterror'></span>  <br><br>


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