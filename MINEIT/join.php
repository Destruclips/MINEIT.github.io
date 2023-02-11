<?php
$hostname="localhost:80";
$dbname="mineit";
$username="root";
$password="";

$conn=mysqli_connect("$hostname","$username","","$dbname");

if(mysqli_connect_errno())
{
	echo"Failed To Connect MySQL (phpMyAdmin) Database :".mysqli_connect-error();
}
$result=mysqli_query($conn,"select customer_details.Username,Email,Withdraw,Deposit,Balance from  customer_details inner join customer_funds on customer_details.Username=customer_funds.Username");
echo "<center>";
echo "<h1>join multiple table values into Html table</h1>";
echo "<h2>php - MySQL (phpMyAdmin)</h2>";
echo "<hr/>";

echo "<table border='1'>
<tr>
	<th>Username</th>
	<th>Withdraw</th>
	<th>Deposit</th>
    <th>Balance</th>
</tr>

while($row=mysqli_fetch_array($result)){
	echo "<tr>";
	echo"<td>".$row['Username']."</td>";
	echo"<td>".$row['Withdraw']."</td>";
	echo"<td>".$row['Deposit']."</td>";
    echo"<td>".$row['Balance']."</td>";
	echo "</tr>";
}


}

echo"</table>";
echo"</center>";
mysqli_close($conn);
