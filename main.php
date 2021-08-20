<?php
        
        $emailfrom=$_POST['mailfrom'];
        $emailto=$_POST['mailto'];
        $account=$_POST['ac'];
        $conn=mysqli_connect ("localhost","root","","bankingsys");
        $sql1="SELECT * from user1 WHERE email='$emailfrom'  ";
        $sql2="SELECT * from user1 WHERE email='$emailto'  ";
        $result=$conn->query($sql1);
        $result1=$conn->query($sql2);
        $row1=$result->fetch_assoc();
        $row2=$result1->fetch_assoc();
        $row1['balance'] -=$account;
        $row2['balance'] +=$account;
        $B1=$row1['balance'];
        $B2=$row2['balance'];
        
        $sql = "update user1 set balance = '$B1' where email = '$emailfrom'";
        $sql3 = "update user1 set balance = '$B2' where email = '$emailto'";
        
        $result=$conn->query($sql);
        $result11=$conn->query($sql3);

        if($result && $result11)
        {
                header("location:redirect.html");
                exit();
        }


             
        

?>