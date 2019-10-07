<?php
echo "<table>";
$row =1;
// echo"<tr>";
// echo "<td>" . row . "</td>";
// echo "</tr>";



for($i =1;$i<101;$i++)
{
  echo "<th>" . $i . "</th>";


 }


 for($j =1;$j<101;$j++)
 {
   echo "<tr><th>" . $j . "  </th>";
    for($i =1;$i<101;$i++)
    {
      echo "<td>" . ($i*$j) . "  </td>";
    }
    echo "</tr>";
 }
 echo "</table>"

?>
