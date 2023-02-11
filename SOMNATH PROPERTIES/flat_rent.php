<?php
$con = mysqli_connect("localhost:3325", "root", "", "display_page");
if(isset($_POST['upload'])){
    $file = $_FILES['image']['name'];
    $DETAILS =  $_POST['DETAILS'];
    $query  = "INSERT INTO flat_rent(image,DETAILS) VALUES('$file', '$DETAILS')";



    $res = mysqli_query($con,$query);

    if($res){
        move_uploaded_file($_FILES['image']['tmp_name'],"$file");
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display Page</title>
</head>
<body>
    <h1>display Page</h1>
    <?php
    $sel = "SELECT * FROM flat_rent";
    $que = mysqli_query($con,$sel);



    $output = "";
    if(mysqli_num_rows($que) < 1){
        $output .= " <h3 class='text-center'>no image uploaded</h3>";
    }

    while($row = mysqli_fetch_array($que)){
        $output .= "<img src='".$row['IMAGE']."' class = 'my-3'
        style = 'width:400px;height:400px;'>";
        $output .=  "<h2 class='details' >".$row['DETAILS']."</h2>" ;
    }
    echo $output;
    ?>
    
</body>
</html>

