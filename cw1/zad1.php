<!DOCTYPE html>
<html>
<style>
tr,td,table
{
border: 1px solid black;
}
</style>
<body>


<table>
<tbody>
<tr>
  <?php
  $krotka = array("Naglowek1"=>"Kolumna1", "Naglowek2"=>"Kolumna2", "Naglowek3"=>"Kolumna3");

  foreach($krotka as $key => $val) {
    echo "<td>$key</td>";
  }
  ?>
</tr>
<tr>
  <?php
  $krotka = array("Naglowek1"=>"Kolumna1", "Naglowek2"=>"Kolumna2", "Naglowek3"=>"Kolumna3");

  foreach($krotka as $key => $val) {
    echo "<td>$val</td>";
  }
  ?>
</tr>
</tbody>
</table>

</body>
</html>