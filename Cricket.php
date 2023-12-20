<?php
$cricketers=array();
$cricketers=
array("a"=>"Kuldeep Yadav",
"b"=>"Cheteshwar Pujara",
"c"=>"Virat Kohli",
"d"=>"Axar Patel",
"e"=>"Ravichandran Ashwin",
"f"=>"Shubman Gill",
"g"=>"Arjun Tendulkar");
?>
<html>
<body>
<center>
<table border="2" width="500" height="500" align="center">
<tr bgcolor="cyan">
<th>Name of cricketers</th>
</tr>
<tr>
<td align="center"><?php echo $cricketers["a"];?></td>
</tr>
<tr>
<td align="center"><?php echo $cricketers["b"];?></td>
</tr>
<tr>
<td align="center"><?php echo $cricketers["c"];?></td>
</tr>
<tr>
<td align="center"><?php echo $cricketers["d"];?></td>
</tr>
<tr>
<td align="center"><?php echo $cricketers["e"];?></td>
</tr>
<tr>
<td align="center"><?php echo $cricketers["f"];?></td>
</tr>
<tr>
<td align="center"><?php echo $cricketers["g"];?></td>
</tr>
</table>
</center>
</body>
</html>
