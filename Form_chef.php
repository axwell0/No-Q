<?php
    session_start();
    if (!isset($_POST['Upload']))
    {
        if (empty($_GET["name"]))
        {
            echo '<script type="text/javascript">alert("Please log in first!");</script>';
            echo "<script> window.location.href = 'Chef_Login.php';</script>";
            exit;
        }
    }
$conn=mysqli_connect("localhost","root","","noq");
if (!$conn) {
    die("Failure to connect".mysqli_connect_error());
}
$req="SELECT * FROM meal ORDER BY meal_id DESC LIMIT 1";
$res = mysqli_query($conn,$req);
$row = mysqli_fetch_assoc($res);
?>

<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="styles/chef_form.css">
    <link rel="stylesheet" href="styles/navbar.css">
    <?php
    echo "<title>Welcome ".$_GET["name"]."</title>";
    ?>
</head>
<body>
<div class="topnav">
    <?php

    echo "<a onclick=".'"window.location.href = '."'Form_chef.php?chefid=".$_GET["chefid"].'&name='.$_GET["name"]."';".'"'." style='cursor:pointer;'".">"."Form</a>";
    ?>
    <?php
    echo "<a onclick=".'"window.location.href = '."'prev_meals.php?chefid=".$_GET["chefid"].'&name='.$_GET["name"]."';".'"'." style='cursor:pointer;'".">"."Previous Meals</a>";

    ?>
    <a class="sign_out" onclick="sessionStorage.clear(); window.location.href = 'Chef_Login.php';"  style="cursor:pointer;" >Sign Out</a>
</div>
<div class="form-container">
    <form method="POST" enctype="multipart/form-data">
        <?php
        echo "<center><h2>Welcome ".ucwords($_GET["name"])."</h2></center>";
        ?>
        <label for="m_name">Please Enter the meal's name:</label>
        <br>
        <Br>
        <input type="text" id="m_name" name="m_name" placeholder="Meal Name..">
        <br>
        <br>
        <label for="m_img">Please Enter the meal's photo:</label>
        <br>
        <br>
        <input type="file" id="m_img" name="m_img">
        <br>
        <br>
        <label for="m_ing">What are the main meal's ingredients: </label>
        <br>
        <br>
        <textarea id="m_ing" name="m_ing" rows="4" cols="50" placeholder="Please enter Meal's ingredients"></textarea>
        <br>
        <br>
        <input type="submit" value="upload" name="Upload">
    </form>
</div>
<?php
if (isset($_POST['Upload'])) {
    $chef_id=$_GET["chefid"];
    $m_name=$_POST["m_name"];
    $m_ing=$_POST["m_ing"];
    $m_date=date("Y/m/d");
    $target_dir = "Meal Images/";
    $target_file = $target_dir . basename($_FILES["m_img"]["name"]);
    $path = 'Meal Images/'.$target_file;
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    $check = getimagesize($_FILES["m_img"]["tmp_name"]);
    if($check !== false) {
        $uploadOk = 1;
    } else {
        echo "<script>alert('File is not an image')</script>";
        $uploadOk = 0;
    }
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif" ) {
        echo"<script>alert('Sorry, only JPG, JPEG, PNG & GIF files are allowed.')</script>";

        $uploadOk = 0;
    }
    if ($uploadOk == 0) {
        echo"<script>alert('Could not upload image.')</script>";

    } else {
        if (move_uploaded_file($_FILES["m_img"]["tmp_name"], $target_file)) {
            echo "The file ". basename( $_FILES["m_img"]["name"]). " has been uploaded.<br>";
            $query2 = "SELECT meal_id FROM meal ORDER BY meal_id DESC LIMIT 1";
            $res2 = mysqli_query($conn,$query2);
            if ($res2){
                if (mysqli_num_rows($res2) == 0){
                    $m_ID=1;
                }
                else{
                    $line = mysqli_fetch_assoc($res2);
                    $m_ID = intval($line["meal_id"])+1;
                }
            }
            $sql = "INSERT INTO meal (meal_id,chef_id,Name,Date,Ingredients,image,no_coming,no_bread) VALUES ($m_ID,'$chef_id','$m_name','$m_date','$m_ing','$target_file','0','0')";
            if(!mysqli_query($conn,$sql))
            {
                echo"<script>alert('Something went wrong. Please try again.')</script>";
            }
            else
            {
                echo"<script>alert('Meal has been successfully added!')</script>";
                echo '<script type="text/javascript">window.location.href = "prev_meals.php?chefid='.$_GET['chefid'].'&name='.$_GET['name'].'";</script>';
            }
            $conn->close();
        } else {
            echo"<script>alert('Sorry, there was an error uploading your file.')</script>";

            $conn->close();
        }
    }
}
?>
</body>
</html>



