<?php
//access the global array called $_POST to get the values from the text fields
$name = $_POST["name"];
$email = $_POST["email"];
$item1 = $_POST["tot1"];
$item2 = $_POST["tot2"];
$item3 = $_POST["tot3"];
$deliv = $_POST["del"];
//
// if($deliv == "50") $ship = 50.00;
// if($deliv == "5") $ship = 5.00;
// if($deliv == "0") $ship = 0.00;


echo "Name: " . $name . "<br>";
echo "Email: " . $email . "<br>";


echo "<table>";
  echo "<thead>";
  echo "<th> " . "             " . "</th>";
  echo "<th> " . "Quantity" . "</th>";
  echo "<th> " . "Cost per" . "</th>";
  echo "<th> " . "Subtotal" . "</th>";

  echo "</thead>";
  echo "<tbody>";
  echo "<tr>";
    echo "<th>" . "Special Pile of Dirt" . "</th>";
    echo "<td>". $item1 . "</td>";
    echo "<td> $50 </td>";
    echo "<td> $" . ($item1*50) . "</td>";
  echo "</tr>";
  echo "<tr>";
    echo "<th>" . "Tiny Robo-Rex" . "</th>";
    echo "<td>". $item2 . "</td>";
    echo "<td> $360 </td>";
    echo "<td> $" . ($item2*360) . "</td>";
  echo "</tr>";
  echo "<tr>";
  echo "<th>" . "Sceptor of World Domination" . "</th>";
    echo "<td>". $item3 . "</td>";
    echo "<td> $500 </td>";
    echo "<td> $" . ($item3*500) . "</td>";
  echo "</tr>";
  echo "<tr>";
    echo "<th>" . "Shipping" . "</th>";
    echo "<td> $" . $deliv . "</td>";
echo "</tr>";
echo "<tr>";
  echo "<th>" . "Total Cost" . "</th>";
echo "<td>       $" . ($deliv+($item1*50)+($item2*360)+($item3*500)) . "</td>";
echo "</tr>";
echo "</tbody>";
 echo "</table>";

?>
