<?php
session_start();
if (!isset($_POST['submit'])){


    if (empty($_GET["name"]))
    {
        echo '<script type="text/javascript">alert("Please log in first!");</script>';
        echo "<script> window.location.href = 'Student_Login.php';</script>";
        exit;
    }

}
?>

<html>
<head>
    <script>
        function valled(x){
            if(x===1){
                document.getElementById("xtra").style.visibility="visible";
            } else if(x===2 && document.getElementById("xtra").style.visibility==="visible"){
                document.getElementById("xtra").style.visibility="hidden";
            }
        }
        function check(){
            let bread = parseInt(document.getElementById("bread").value);

            if(!Number.isInteger(bread) || bread < 0 || bread > 4) {
                alert("Please enter an integer value between 0 and 4 in the bread field.");
            }
        }
    </script>
    <?php
    echo "<title>Welcome ".ucwords($_GET["name"])."</title>";
    ?>

    <link rel="stylesheet" href="styles/navbar.css">
    <link rel="stylesheet" href="styles/chef_form.css">
    <link rel="stylesheet" href="styles/student_style.css">
</head>
<body>
<div class="topnav">
    <a class="active" href="#">Dashboard</a>

    <a class="sign_out" onclick="sessionStorage.clear(); window.location.href = 'Student_Login.php';"  style="cursor:pointer;" >Sign Out</a>

</div>
<?php
$conn=mysqli_connect("localhost","root","","noq");
if (!$conn)
{
    die("connexion failed".mysqli_connect_error());
}
$req="SELECT * FROM meal ORDER BY meal_id DESC LIMIT 1";
$res=mysqli_query($conn,$req);
$row = mysqli_fetch_assoc($res);




if ($res)
{
    if  (mysqli_num_rows($res)!=0)
    {
        $student_id = $_GET["studentid"];
        echo "<div class='container'>";
        echo "<h2>The Meal of The Day is:"." ".ucwords($row['Name'])."</h2><br>";
        echo "<img src='".$row['image']."' width = 350 height = 350 >";
        $_SESSION["meal_id"] = $row["meal_id"];

        $req1="SELECT * FROM student WHERE student_id='$student_id'";
        $res1=mysqli_query($conn,$req1);
        $row1=mysqli_fetch_assoc($res1);
        if ($row1["allergy"] == "yes"){
            echo "<h4>The ingredients are:"." ".$row['Ingredients']."</h4><br></div>";
        }
        else{
            echo "</div>";
        }
        if (intval($row1["last_meal_sub"]) == intval($row["meal_id"])){
           echo "<div class='container'". "style='margin-top: 50; margin-bottom: 20'>"."<h2>You have already responded to this form.</h2>
        </div>";
        }
        else
        {
            echo '<div style="margin-top: 50; margin-bottom: 20">
        <form method="POST">
        Coming?
        <br>
        <input type="radio"  name="coming" value="Yes" onchange="valled(1)">Yes<br>
        <input type="radio"  name="coming" value="No" onchange="valled(2)">No<br>
        <div id="xtra" style="visibility:hidden;">How many pieces of bread will you eat?<br>
            <input type="text" name="bread" id="bread" onblur="check()"></div>



        <br>
        <br>
        <input type="submit" value="submit" name="submit">    </form>
        </div>';
        }


    }
    else{
        echo "<div class='container'> No Meal for the Day!<br></div>";
    }
}
?>

<?php
if (isset($_POST['submit'])) {
    $conn = mysqli_connect("localhost", "root", "", "noq");
    if (!$conn) {
        die("Failure to connect" . mysqli_connect_error());
    }

    $_com = $_POST["coming"];
    $_bread = intval($_POST["bread"]);
    $meal_id= $_SESSION["meal_id"];


    if ($_com == "Yes") {
        $req1 = "UPDATE meal set no_coming = no_coming+1  where meal_id='$meal_id' ";
        $req2 = "UPDATE meal set no_bread=no_bread+'$_bread' where meal_id='$meal_id' ";

        $res1 = mysqli_query($conn, $req1);
        $res2 = mysqli_query($conn, $req2);
        if (($res1) and ($res2)){
            $req3 = "UPDATE student set last_meal_sub= '$meal_id' WHERE student_id='$student_id'";
            $res3 = mysqli_query($conn,$req3);
            if ($res3)
            {
                echo '<script type="text/javascript">alert("Your response has been Recorded!");</script>';
                echo '<script type="text/javascript">window.location.href = "Student_dashboard.php?name='.$_GET["name"].'&studentid='.$_GET['studentid'].'";</script>';


            }

        }

    }
    elseif ($_com == "No"){
        $req3 = "UPDATE student set last_meal_sub= '$meal_id' WHERE student_id='$student_id'";
        $res3 = mysqli_query($conn,$req3);
        if ($res3)
        {
            echo '<script type="text/javascript">alert("Your response has been Recorded!");</script>';
            echo '<script type="text/javascript">window.location.href = "Student_dashboard.php?name='.$_GET["name"].'&studentid='.$_GET['studentid'].'";</script>';


        }
    }
    $conn->close();
}
?>
</body>
</html>