<!DOCTYPE html>
<html>
<head>
  <title> View User  </title>
  <link rel="stylesheet" href="customer.css">

</head>

<body>
<nav>
        <div class="logo">
            <p>Sparks Bank</p>
        </div>
        <ul>
            <li><a href="home.html">Home</a></li>
            <li><a href="customer.php">View User</a></li>
            <li><a href="transaction.php">Transaction</a></li>
            <li><a href="">About me</a></li>

        </ul>
    </nav>
    <div class="marg">
    <table class="content-table">
        <tr>
            <th> E-Mail </th>
            <th> Customer Name </th>
            <th> Balance </th>
</tr>
<?php
$conn=mysqli_connect ("localhost","root","","bankingsys");
if ($conn->connect_error)
{
    die("connection failed".$conn->connect_error);

}
$sql="SELECT * from user1";
$result=$conn->query($sql);

if($result->num_rows>0)
{
    while($row=$result->fetch_assoc())
    {
        echo "<tr><td>".$row["email"]."</td><td>".$row["name"]."</td><td>".$row["balance"]."</td></tr>";

    }

    echo "</table>";
}
else{
    echo "0 result";
}
$conn->close();
?>
</div>
</table>
</body>
</html>