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

<?php   include './navbar.php' ?>


<div style="margin-left: 2rem;">

      <h2>Report page</h2>
      <button><a href="./reportui.php">Refresh</a></button><br><br>
      <form action="" method="POST">
        <input type="text" name='id' placeholder="Search by id">

        <button type="submit">Search</button>
      </form>


      

      


      <?php
      include('../controllers/report.php');

  echo "<table style='width:95%' border='1px'>";

  echo "<tr>";

  echo "<th>Id</th>";
  echo "<th>Amount</th>";
  echo "<th>Buyer</th>";

  echo "<th>Receipt Id</th>";
  echo "<th>Items</th>";
  echo "<th>Email</th>";

  echo "<th>buyer_ip</th>";
  echo "<th>Note</th>";

  echo "<th>City</th>";
  echo "<th>Phone</th>";
  echo "<th>Entry at</th>";
  echo "<th>Entry buy</th>";



      





  echo "</tr>";

  if ($result->num_rows> 0) {
    
    while($row = $result->fetch_assoc()) {
      echo "<tr>";
     

      echo "<td >$row[id]</td>";
      echo "<td >$row[amount]</td>";
      
      echo "<td >$row[buyer]</td>";
      echo "<td>$row[receipt_id]</td>";
      echo "<td >$row[items]</td>";


      echo "<td >$row[buyer_email]</td>";

      echo "<td >$row[buyer_ip]</td>";
      echo "<td >$row[note]</td>";

      echo "<td >$row[city]</td>";

      echo "<td >$row[phone]</td>";
      echo "<td >$row[entry_at]</td>";
      echo "<td >$row[entry_by]</td>";
      

     
      
      echo "<br>";





  echo "</tr>";


      

    }

    echo "</table>";
    
  } else {
    echo "0 results";
  }

  $connect->CloseCon($conobj);
  
?>

  
</div>
  
</body>
</html>