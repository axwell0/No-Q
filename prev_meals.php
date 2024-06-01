<?php
session_start();

if (empty($_GET["name"]))
{
    echo '<script type="text/javascript">alert("Please log in first!");</script>';
    echo "<script> window.location.href = 'Chef_Login.php';</script>";
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="styles/navbar.css">
    <link rel="stylesheet" href="styles/prev_meals.css">

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
<div class="table-container">
    <table>
        <tr>
            <th>Meal Name</th>
            <th>Image</th>
            <th>Date</th>
            <th>#_Coming</th>
            <th>#_Bread</th>
        </tr>
        <?php
        $conn = mysqli_connect("localhost","root","","noq");
        if (!$conn){
            die("Connection failed");
        }
        $req="SELECT * FROM meal ORDER BY meal_id DESC LIMIT 5";
        $res = mysqli_query($conn,$req);
        if ($res)
        {
            if (mysqli_num_rows($res)>0)
            {
                for ($i=0;$i< mysqli_num_rows($res);$i++)
                {
                    $meal = mysqli_fetch_assoc($res);
                    echo "<tr><td>".$meal["Name"]."</td>"."<td><img src='".$meal["image"]."' width='150' height='100'></td><td>".$meal["Date"]."</td><td>".$meal["no_coming"]."</td><td>".$meal["no_bread"]."</td></tr>";

                }
            }
        }
        ?>
    </table>
</div>


</body>
</html>