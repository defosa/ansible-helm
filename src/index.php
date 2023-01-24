<!DOCTYPE HTML>
<html>
 <head>
  <meta charset="utf-8">
  <title>ip-address</title>
 </head>
 <body>

<?php

echo "Your address has been added to the database!";
echo "</br>"; 
$ip=$_SERVER['REMOTE_ADDR'];
$db_handle = pg_connect("host=pg-postgresql.pg.svc.cluster.local dbname=ipdata user=testuser password=12345678");
$add = "INSERT INTO inet_test (address) VALUES ('$ip')";
pg_query($add);
echo "show all ip";
echo "</br>"; 

$query = "SELECT * FROM inet_test";
$result = pg_query($query);
while ($row = pg_fetch_assoc($result)) {
    echo $row['address'];
    echo "</br>"; 
}
?>
 </body>
</html>

