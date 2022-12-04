<?php
session_start();
if(isset($_REQUEST['CRYPTOCURRENCY'])){
$server="localhost:3325";
$username = "root";
$password = "";


// if(isset($_REQUEST['CRYPTOCURRENCY'])){
// $select = mysql_query("select * from 'customer_details' where CRYPTOCURRENCY = '$CRYPTOCURRENCY' and QUANTITY='$QUANTITY");
//     $fetch = mysql_fetch_array($select);
//     $CRYPTOCURRENCY = $fetch['CRYPTOCURRENCY'];
//     $QUANTITY = $fetch['QUANTITY'];
//     if($CRYPTOCURRENCY == $CRYPTOCURRENCY && $QUANTITY == $QUANTITY){
//         $_SESSION['CRYPTOCURRENCY']=$CRYPTOCURRENCY;
//         $_SESSION['QUANTITY']=$QUANTITY;
//         header("Location:index.php");
//     }
// $_SESSION['CRYPTOCURRENCY'] = "$CRYPTOCURRENCY";
// $_SESSION['QUANTITY'] = "$QUANTITY";

// echo $_SESSION['CRYPTOCURRENCY'];
// echo $_SESSION['QUANTITY'];
// }

$con = mysqli_connect($server,$username,$password);
if(!$con){
    die("connection to this database failed due to ". mysqli_connect_error());
}
// echo "Success connecting to the db"

$CRYPTOCURRENCY = $_POST['CRYPTOCURRENCY'];
$QUANTITY = $_POST['QUANTITY'];
$AMOUNT = $_POST['AMOUNT'];
$ORDERDATE = $_POST['ORDERDATE'];



// $sql = "INSERT INTO `mineit`.`customer_details` (`UserName`, `PhoneNumber`, `Email`, `PanNumber`, `Address`, `BankAccountNumber`) VALUES ('$UserName', '$PhoneNumber', '$Email', '$PanNumber', '$Address', '$BankAccountNumber')";
$sql = "INSERT INTO  `mineit`.`order_details` (`CRYPTOCURRENCY`, `QUANTITY`, `AMOUNT`, `ORDERDATE`) VALUES ('$CRYPTOCURRENCY', '$QUANTITY', '$AMOUNT', '$ORDERDATE')";
echo $sql;

if($con->query($sql) == true){
    echo "Successfully inserted";
}
echo "submitted";


$con->close();
}
else{
    echo "not subitted";
}
?>


<body>
    <img class="bg" src="orderbg.jpeg" alt="MINEIT">
    <div class="container">
        <h1>ORDER DETAILS </h3>
        <!-- <p>Enter your details and submit this form to confirm your participation in the trip </p> -->
       
        <!-- <p class='submitMsg'>!!ORDER PLACED SUCCESSFULLY!!</p> -->
        
        <form action="index.php" method="post">
            <input type="text" name="CRYPTOCURRENCY" id="name" placeholder="CRYPTOCURRENCY">
            <input type="text" name="QUANTITY" id="age" placeholder="QUANTITY">
            <input type="text" name="AMOUNT" id="gender" placeholder="AMOUNT">
            <input type="text" name="ORDERDATE" id="text" placeholder="ORDER DATE">
            <!-- <input type="phone" name="phone" id="phone" placeholder="Enter your phone"> -->
            <!-- <textarea name="desc" id="desc" cols="30" rows="10" placeholder="Enter any other information here"></textarea> -->
            <button class="btn">Submit</button> 
        </form>
    </div>
    <script src="index.js"></script>
    
</body>
</html>