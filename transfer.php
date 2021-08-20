<?php

$email=$_GET['email'];

$conn=mysqli_connect ("localhost","root","","bankingsys");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transfer Money</title>
    <link rel="stylesheet" href="transferstyle.css">
</head>
<body>

<nav>
<div class="logo">
            <p>Sparks Bank</p>
</div>
        <ul>
            <li><a href="">Home</a></li>
            <li><a href="customer.php">View User</a></li>
            <li><a href="transaction.php">Transaction</a></li>
            <li><a href="">About me</a></li>

        </ul>
    </nav>
<div class="bal">
    <?php
    $sql="SELECT * from user1 WHERE email='$email' ";
    $result=$conn->query($sql);

    $row=$result->fetch_assoc();
    echo 'Your Balance Is:';
    $balance=$row['balance'];
    echo $balance;
    ?>
</div>
<form method='POST' action='main.php' name="alert" onsubmit="return check()">
    
        <input type="hidden" name="mailfrom" value="<?php echo $_GET['email'];?>">
        <input type="hidden" id="balance" value="<?php echo $balance;?>">
        <div class="mer">
        
            <table>
            <?php
            $sql="SELECT * from user1";
            $result=$conn->query($sql);
            
            while($row=$result->fetch_assoc())
            {
                 echo "<tr><td>".$row["name"]."</td><td>".$row["email"]."<br>"."</td></tr>";

            }

            ?>
            </table>
        </div>
            
            
            <div class="form">
                <div class="paragraph">
                <p>  Tranfer Money Here &#128176; <p>
        </div>
            <label for="mailid"> Enter Recepient Mail I'd &#128231;</label>
            <br><br>
            <input type="email" id="mail" placeholder="Enter Recepient mail id here....."  name="mailto">
            <br>
            <br>
            <label for="Account"> Enter Transfer Amount &#8377;</label> 
            <br><br>
            <input type="number" id="Account"  placeholder="&#8377; Enter the amount........" name="ac">
             <br><br>
            <button type='submit'>Transfer Now &#9193;</button>
        </div>
        </form>
<script src="javas.js"></script>
</body>
</html>