<?php
if(isset($_POST['UserName'])){
$server="localhost:3325";
$username = "root";
$password = "";

$con = mysqli_connect($server,$username,$password);
if(!$con){
    die("connection to this database failed due to ". mysqli_connect_error());
}
// echo "Success connecting to the db"

$UserName = $_POST['UserName'];
$PhoneNumber = $_POST['PhoneNumber'];
$Email = $_POST['Email'];
$PanNumber = $_POST['PanNumber'];
$Address = $_POST['Address'];
$BankAccountNumber= $_POST['BankAccountNumber'];
$sql = "INSERT INTO `mineit`.`customer_details` (`UserName`, `PhoneNumber`, `Email`, `PanNumber`, `Address`, `BankAccountNumber`) VALUES ('$UserName', '$PhoneNumber', '$Email', '$PanNumber', '$Address', '$BankAccountNumber')";
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
    <header class="header">
        <!-- Left box for logo -->
        <div class="left">
            <img src="img/bgcust.jpeg" alt="">
            <div>MINEIT</div>
        </div>
        <!-- Mid box for navbar -->
        <div class="mid">
            <!-- <ul class="navbar">
                <li><a href="#" class="active">Home</a></li>
                <li><a href="#">About Us</a></li>
                <li><a href="#">Fitness Calculator</a></li>
                <li><a href="#">Contact Us</a></li>
            </ul>
        </div> -->

        <!-- Right box for buttons -->
        <div class="right">
            <button class="btn">Call Us Now</button>
            <button class="btn">Email Us</button>
        </div>
    </header>
    <div class="container">
        <h1>SIGN UP</h1>
        <form action="noaction.php" method="post">
            <div class="form-group">
                <input type="text" name="UserName" id="UserName" placeholder="Enter your UserName">
            </div>
            <div class="form-group">
                <input type="phone" name="PhoneNumber"  id="PhoneNumber"  placeholder="Enter your Phone Number">
            </div>
            <div class="form-group">
                <input type="email" name="Email"  id="Email" placeholder="Enter your Email">
            </div>
            <div class="form-group">
                <input type="text" name="PanNumber" id="PanNumber" placeholder="Enter your Pan Number">
            </div>
            <div class="form-group">
                <input type="text" name="Address"  id="Address" placeholder="Enter your Address">
            </div>
            <div class="form-group">
                <input type="text" name="BankAccountNumber" id="BankAccountNumber" placeholder="Enter your Bank Account Number">
            </div>
            <button class="btn">Submit</button>
        </form>
    </div>
    <script src="index.js">
        // INSERT INTO `customer_details`.`customer_details` (`UserName`, `PhoneNumber`, `Email`, `PanNumber`, `Address`, `BankAccountNumber`) VALUES ('destruclips', '222222222', 'abc@acc.com', 'SD2020202020', 'uigevdubduicea', '222222');
    </script>
</body>