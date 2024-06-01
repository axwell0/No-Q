<!DOCTYPE html>
<html style="font-size: 16px;" lang="en"><head>

    <title>Sign up</title>
    <link rel="stylesheet" href="styles/theme.css" media="screen">
    <link rel="stylesheet" href="styles/Sign-up.css" media="screen">
    <script class="u-script" type="text/javascript" src="scripts/jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="scripts/theme.js" defer=""></script>
    <link id="u-page-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i">

</head>
<body class="u-body u-overlap u-overlap-transparent u-xl-mode" data-lang="en"><header class="u-clearfix u-header u-header" id="sec-3235"><div class="u-clearfix u-sheet u-sheet-1">
        <nav class="u-menu u-menu-one-level u-offcanvas u-menu-1">
            <div class="menu-collapse" style="font-size: 1rem; letter-spacing: 0;">
                <a class="u-button-style u-custom-left-right-menu-spacing u-custom-padding-bottom u-custom-text-active-color u-custom-text-color u-custom-text-hover-color u-custom-top-bottom-menu-spacing u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="#">
                    <svg class="u-svg-link" viewBox="0 0 24 24"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#menu-hamburger"></use></svg>
                    <svg class="u-svg-content"  id="menu-hamburger" viewBox="0 0 16 16" x="0px" y="0px" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"><g><rect y="1" width="16" height="2"></rect><rect y="7" width="16" height="2"></rect><rect y="13" width="16" height="2"></rect>
                        </g></svg>
                </a>
            </div>
            <div class="u-custom-menu u-nav-container">
                <ul class="u-nav u-unstyled u-nav-1"><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-white u-text-grey-40 u-text-hover-palette-1-light-2" href="Home.php" style="padding: 10px 20px;">Home</a>
                    </li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-white u-text-grey-40 u-text-hover-palette-1-light-2" href="Sign-up.php" style="padding: 10px 20px;">Sign up</a>
                    </li>
                    <li class="u-nav-item">
                        <div class="dropdown">
                            <button onclick="show_hide()" class="dropbtn" style="padding: 10px 20px;cursor:pointer;">Login</button>
                            <div id="myDropdown" class="dropdown-content">
                                <a href="Chef_Login.php"> Chef </a>
                                <a href="Student_Login.php"> Student</a>
                            </div>
                        </div>


                    </li></ul>
            </div>
            <div class="u-custom-menu u-nav-container-collapse">
                <div class="u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav">
                    <div class="u-inner-container-layout u-sidenav-overflow">
                        <div class="u-menu-close"></div>
                        <ul class="u-align-center u-nav u-popupmenu-items u-unstyled u-nav-2">
                            <li class="u-nav-item"><a class="u-button-style u-nav-link" href="Home.php">Home</a></li>
                            <li class="u-nav-item"><a class="u-button-style u-nav-link" href="Sign-up.php">Sign up</a></li>
                        </ul>
                    </div>
                </div>
                <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
            </div>
        </nav>
    </div></header>
<section class="u-clearfix u-image u-section-1" id="sec-423b4" data-image-width="961" data-image-height="362">
    <div class="u-clearfix u-sheet u-sheet-1">
        <h4 class="u-align-center u-custom-font u-font-montserrat u-text u-text-default u-text-white u-text-1">Student Sign up</h4>
        <div class="u-form u-login-control u-form-1">

            <form method="POST" class="u-clearfix u-form-custom-backend u-form-spacing-13 u-form-vertical u-inner-form" name="form" style="padding: 14px;">
                <div class="u-form-group u-form-name">
                    <label class="u-label u-text-grey-25 u-label-1">Name</label>
                    <input type="text" placeholder="Enter your Name" id="name" name="name" class="u-border-2 u-border-grey-10 u-grey-10 u-input u-input-rectangle u-input-1" required="">
                </div>
                <div class="u-form-group u-form-name">
                    <label class="u-label u-text-grey-25 u-label-1">Allergy</label>
                    <select name="allergy" id="allergies" class="u-border-2 u-border-grey-10 u-grey-10 u-input u-input-rectangle u-input-1">
                        <option value="yes">I have allergies</option>
                        <option value="no">I don't have allergies</option>
                    </select>
                </div>
                <div class="u-form-group u-form-name">

                </div>
                <div class="u-form-group u-form-name">
                    <label class="u-label u-text-grey-25 u-label-1">Email</label>
                    <input type="text" placeholder="Enter an Email" id="username-a30d" name="email" class="u-border-2 u-border-grey-10 u-grey-10 u-input u-input-rectangle u-input-1" required="">
                </div>
                <div class="u-form-group u-form-password">
                    <label class="u-label u-text-grey-25 u-label-3">Password</label>
                    <input type="password" placeholder="Enter a Password" id="password-a30d" name="password" class="u-border-2 u-border-grey-10 u-grey-10 u-input u-input-rectangle u-input-2" required="">
                </div>
                <div class="u-form-group u-form-name">
                    <label class="u-label u-text-grey-25 u-label-1">Phone number</label>
                    <input type="text" placeholder="Enter your Phone number" id="phone" name="phone" class="u-border-2 u-border-grey-10 u-grey-10 u-input u-input-rectangle u-input-1" required="">
                </div>
                <div class="u-align-center u-form-group u-form-submit">
                    <a href="#" class="u-btn u-btn-submit u-button-style u-palette-1-light-2 u-btn-1">Sign up</a>
                    <input type="submit" value="submit" name="Submit" class="u-form-control-hidden">
                </div>
            </form>
            <?php
            if (isset($_POST['Submit'])) {
                $conn = new mysqli("localhost", "root", "", "noq");
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }

                $name = $_POST['name'];
                $email = $_POST['email'];
                $password = $_POST['password'];
                $phone = $_POST['phone'];
                $allergy = $_POST['allergy'];
                $query2 = "SELECT * FROM student WHERE email='$email'";
                $res2 = mysqli_query($conn,$query2);
                if (mysqli_num_rows($res2) >0){
                    echo "<script>alert('This email already exists.')</script>";
                }
                else{
                    if (empty($name) || empty($email) || empty($password) || empty($phone))
                    {
                        echo "<script>alert('Please fill out all required fields.')</script>";
                    }
                    else
                    {

                        if (!filter_var($email, FILTER_VALIDATE_EMAIL))

                        {
                            echo "<script>alert('Please enter a valid email address.')</script>";
                        } else
                        {

                            $uppercase = preg_match('@[A-Z]@', $password);
                            $lowercase = preg_match('@[a-z]@', $password);
                            $number    = preg_match('@[0-9]@', $password);


                            if(!$uppercase || !$lowercase || !$number  || strlen($password) < 8) {
                                echo "<script>alert('Password should be at least 8 characters in length and should include at least one upper case letter, one lower case letter, and one number.')</script>";
                            } else {
                                if (strlen($phone) != 8){
                                    echo "<script>alert('Phone number is invalid.')</script>";

                                }
                                else{
                                    $query = "SELECT * FROM student ORDER BY student_id DESC LIMIT 1";
                                    $res = mysqli_query($conn,$query);
                                    $account= mysqli_fetch_assoc($res);
                                    $new_id = intval($account["student_id"]) +1;


                                    $sql = "INSERT INTO student(student_id, name, email, password, phone_number, allergy, last_meal_sub) VALUES ('$new_id','$name', '$email', '$password', '$phone','$allergy','0')";
                                    if ($conn->query($sql) === TRUE) {
                                        echo "<script>alert('Registration Complete. Please log in to continue')</script>";
                                        echo "<script> window.location.href = 'Student_Login.php';</script>";
                                    } else {
                                        echo "Error: " . $sql . "<br>" . $conn->error;
                                    }

                                    $conn->close();
                                }

                            }
                        }
                    }
                }


            }

            ?>
        </div>
    </div>
</section>





</body></html>