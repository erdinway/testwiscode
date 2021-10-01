<form method="post">
    <input type="text" name="angka">
    <input type="submit">
</form>
<?php
function dec_to_bin($desimal)
{
 bcscale(0);

 $binari = '';
 do
  {
   $binari = bcmod($desimal,'2') . $binari;
   $desimal = bcdiv($desimal,'2');
  } while (bccomp($desimal,'0'));

 return($binari);
}

if(@$_POST['angka']){
        echo dec_to_bin(@$_POST['angka']);
    }
?>