<?php
$con = mysqli_connect("localhost:3325", "root", "", "display_page");
if(isset($_POST['upload'])){
    $file = $_FILES['image']['name'];
    $DETAILS =  $_POST['DETAILS'];
    $query  = "INSERT INTO shop_rent(image,DETAILS) VALUES('$file', '$DETAILS')";
    


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
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" media="screen and (max-width: 1170px)" href="css/phone.css">
    <title>Display Page</title>
</head>
<body>
    <h1>display Page</h1>
    <section class="container">
        <form action="">
            <i class = "fas fa-search"> </i>
            <input type="text" name ="" id="search-item" placeholder = "Search Places" onkeyup = "search()">
        </form>
    </section>
    <?php
    $sel = "SELECT * FROM shop_rent";
    $que = mysqli_query($con,$sel);
    


    $output = "";
    if(mysqli_num_rows($que) < 1){
        $output .= " <h3 class='text-center'>no image uploaded</h3>";
    }
    $output .= "<div style= 'display:flex;align-items:center;justify-content:center;flex-direction:column'>" ;
    while($row = mysqli_fetch_array($que)){
        $output .= "<img src='".$row['IMAGE']."' class = 'photos'
        style = 'width:400px;height:400px; align-items: center;
        display: flex;
        justify-content: center;
        background-color: black;
       '>";
        $output .=  "<h2 class='details' >".$row['DETAILS']."</h2>" ;
    }
    $output .= "</div>";
    echo $output;
    ?>
    
</body>
</html>

