<DOCTYPE html>
<html>
<body>
<?php
echo'<table border="1px" width="800">';
echo"<tr>";

for($i=1;$i<=9;$i++)
{
    for($k=1;$k<=$i;$k++)
    {
        $sum=$i*$k;
        $r=mt_rand(0,255);
        $g=mt_rand(0,255);
        $b=mt_rand(0,255);
        echo"<td style='background:rgb(".$r.",".$g.",.".$b.")'>$i X $k= $sum</td>";
    }
    echo"<tr>";
}
echo'</table>';
?>
</body>
</html>
</DOCTYPE>
