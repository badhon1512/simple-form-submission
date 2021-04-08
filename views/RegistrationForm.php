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

  
  <?php
  include('./navbar.php');
  require '../controllers/registration.php'; ?>
  <form id="buyer_form" onsubmit="return  formValidation()" action="<?php echo htmlspecialchars( $_SERVER['PHP_SELF']); ?>"method="POST">

    <table>

      <tr>

        <td><label for="">Amount</label></td>

        <td><input type="number" placeholder="Amount" name='amount' id='amount' value="<?php echo $amount ?>"> <span id='amounterror'></span> <?php echo $amounterror; ?> </td>
      </tr>



      <tr>

        <td><label for="">Buyer</label></td>
        <td> <input type="text" placeholder="Buyer" name='buyer' id='buyer' value="<?php echo $buyer ?>">
          <span id='buyererror'> </span>
          <?php echo $buyererror; ?>
        </td>
      </tr>



      <tr>

        <td><label for="">Receipt Id</label></td>

        <td><input type="text" placeholder="Receipt Id" name='receipt_id' id='receipt_id' value="<?php echo $receiptId ?>">
          <span id='receipterror'> </span>
          <?php echo $receipterror; ?>
          
        </td>
      </tr>




      <tr>


        <td><label for="">Items</label></td>
        <td><input type="text" placeholder="Items" name='items' id='items' value="<?php echo $items ?>"><span id='itemserror'> </span>

          <?php echo $itemserror; ?></td>
      </tr>



      <tr>
        <td><label for="">Buyer Email</label></td>
        <td><input type="text" placeholder="Buyer Email" name='buyer_email' id='buyer_email' value="<?php echo $email ?>">
          <span id='emailerror'> </span>
          <?php echo $emailerror; ?>
          <br>
        </td>
      </tr>



      <tr>
        <td><label for="">Note</label></td>
        <td><input type="text" placeholder="Note" name='note' id='note' value="<?php echo $note ?>"><span id='noteerror'> </span>
          <?php echo $noteerror; ?></td>
      </tr>

      <tr>
        <td><label for="">City</label></td>
        <td> <input type="text" placeholder="City" name='city' id='city' value="<?php echo $city ?>"><span id='cityerror'> </span>
          <?php echo $cityerror; ?></td>
      </tr>
      <tr>
        <td><label for="">Phone</label></td>
        <td><input type="text" placeholder="Phone" name='phone' id='phone' value="<?php echo $phone ?>"><span id='phoneerror'> </span>
          <?php echo $phoneerror; ?></td>
      </tr>

      <tr>
        <td><label for="">Entry By</label></td>
        <td><input type="number" value="<?php echo $entry ?>" placeholder="Entry By" name='entry_by' id='entry_by'><span id='entryerror'> </span>
          <?php echo $entryerror; ?></td>
      </tr>















      <tr>
        <td></td>
        <td><button id='btn-submit' type="submit">Submit</button></td>
      </tr>






    </table>
  </form>




  <script>
    const formValidation = () => {

      let valid = true;

      if (document.forms['buyer_form']['amount'].value == "") {
        document.getElementById('amounterror').textContent = "Amount must be filled up";

        valid = false;

      } else {
        document.getElementById('amounterror').textContent = "";
      }

      if (document.forms['buyer_form']['buyer'].value == "") {
        document.getElementById('buyererror').textContent = "Buyer must be filled up";
        valid = false;
      } else {
        document.getElementById('buyererror').textContent = "";
      }



      if (document.forms['buyer_form']['receipt_id'].value == "") {
        document.getElementById('receipterror').textContent = "Receipt Id must be filled up";
        valid = false;
      } else {
        document.getElementById('receipterror').textContent = "";

      }

      if (document.forms['buyer_form']['items'].value == "") {
        document.getElementById('itemserror').textContent = "Items must be filled up";
        valid = false;
      } else {
        document.getElementById('itemserror').textContent = "";
      }


      if (document.forms['buyer_form']['buyer_email'].value == "") {
        document.getElementById('emailerror').textContent = "Email must be filled up";
        valid = false;
      } else {
        document.getElementById('emailerror').textContent = "";
      }

      if (document.forms['buyer_form']['note'].value == "") {
        document.getElementById('noteerror').textContent = "Note must be filled up";
        valid = false;
      } else {
        document.getElementById('noteerror').textContent = "";
      }

      if (document.forms['buyer_form']['city'].value == "") {
        document.getElementById('cityerror').textContent = "City must be filled up";
        valid = false;
      } else {
        document.getElementById('cityerror').textContent = "";
      }

      if (document.forms['buyer_form']['phone'].value == "") {
        document.getElementById('phoneerror').textContent = "Phone must be filled up";
        valid = false;
      } else {
        document.getElementById('phoneerror').textContent = "";
      }
      if (document.forms['buyer_form']['entry_by'].value == "") {
        document.getElementById('entryerror').textContent = "Entry By must be filled up";
        valid = false;
      } else {
        document.getElementById('entryerror').textContent = "";
      }








      if (valid) {
        return true;
      } else {
        return false;
      }



    }
  </script>


</body>

</html>