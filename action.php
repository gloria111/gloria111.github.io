
<?php
// header('Access-Control-Allow-Origin:http://127.0.0.1');



$q = isset($_GET["q"]) ? intval($_GET["q"]) : '';
header("Content-Type:text/html;charset-utf-8");
header("Access-Conet=utf-8 ");
header("Access-Control-Allow-Origin: *");
if(empty($q)) {
    echo '请选择一个学期';
    exit;
}
  
  
class MyDB extends SQLite3
{ 
   function __construct()
   {
      $this->open('成绩sample2.db');
   }
}
$db = new MyDB();
if(!$db){
   echo $db->lastErrorMsg();
} else {
   echo "Opened database successfully\n";
}

$sql =<<<EOF
   SELECT * from test;
EOF;

$ret = $db->query($sql);

 
echo "<table border='1' class='table>
<tr>
<th>成绩s1</th>
<th>成绩s2</th>
<th>s3</th>
<th>s4</th>
<th>s5</th>
<th>s6</th>
<th>s7</th>
<th>s8</th>
</tr>";

while($row = $ret->fetchArray(SQLITE3_ASSOC) )
{
    echo "<tr>";
    echo "<td>" . $row['s1'] . "</td>";
    echo "<td>" . $row['s2'] . "</td>";
    echo "<td>" . $row['s3'] . "</td>";
    echo "<td>" . $row['s4'] . "</td>";
    echo "<td>" . $row['s5'] . "</td>";
    echo "<td>" . $row['s6'] . "</td>";
    echo "<td>" . $row['s7'] . "</td>";
    echo "<td>" . $row['s8'] . "</td>";
    echo "</tr>";
}
echo "</table>";
echo "Operation done successfully\n";
   $db->close();
?>