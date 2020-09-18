<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
    <link href='http://fonts.googleapis.com/css?family=Ropa+Sans' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/responsiveslides.css">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <script src="js/responsiveslides.min.js"></script>

    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css" />
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css.map" />
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap-theme.css" />
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap-theme.css.map" />
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap-theme.min.css" />
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="bootstrap/js/bootstrap.js"></script>
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/login.css" />
    <style>
        body {
            margin: 0px;
            background: rgb(0, 3, 32);
        }

        .header {
            height: 7rem;
            border-bottom: 4px solid #f16622;
            background: #1b0101;
        }

        .logo {
            width: 10%;
            height: 1.25rem;
            border: 0.5px solid black;
            padding: 20px;
            margin-left: 2rem;
            background-color: rgb(236, 138, 9);
            font-size: 27px;
        }

        .logo:hover {
            font-size: 30px;
        }

        .form-outer {
            margin-top: 5%;
            margin-left: 3rem;
            margin-bottom: 3rem;

            background-color: #fff4fe;
            height: auto;
            width: 50%;
            padding: 1.5rem;
            display: inline-block;
        }


        .table {
            margin: 20px;
            display: none;
        }

        .table td {
            padding: 0px 20px 0px 10px;
            background-color: rgba(0, 0, 0, 0.005);
            align-content: center;
            width: auto;
        }

        .table td:nth-child(even) {}

        .form {}

        .label {
            width: auto;
            color: black;
            font-size: 15px;
        }

        .input {
            padding: 12px 20px;
            margin: 5px 0;
            box-sizing: border-box;
            border-radius: 2px 2px 10px 10px;
            width: 20rem;
        }

        .select {
            background: white;
            border: none;
            font-size: 14px;
            padding: 10px;
            width: 268px;
            box-sizing: border-box;
            border-radius: 2px 2px 10px 10px;
            border-top: 1.5px solid grey;
            border-left: 1.5px solid grey;
            border-bottom: 1.5px solid rgb(182, 182, 182);
            border-right: 1.5px solid rgb(182, 182, 182);
        }

        .btn {
            margin: 30px 30px 10px 30px;
            background-color: rgb(209, 101, 0);
            color: white;
            padding: 10px 25px;
            text-align: center;
            display: inline-block;
            font-size: 16px;
            cursor: pointer;
            border-radius: 10px 10px 10px 10px;
        }

        .terms {
            color: rgb(255, 123, 0);
            font-size: 20px;
        }

        .terms:hover {
            box-shadow: 0 10px 12px 0 rgba(0, 0, 0, 0.24),
                0 15px 40px 0 rgba(0, 0, 0, 0.19);
        }

        .btn:disabled:hover {
            margin: 30px 30px 10px 30px;
            background-color: rgb(119, 112, 106);
            color: white;
            padding: 10px 25px;
            text-align: center;
            display: inline-block;
            font-size: 16px;
            cursor: pointer;
            border-radius: 10px 10px 10px 10px;
        }

        .btn:hover {
            box-shadow: 0 12px 16px 0 rgba(0, 0, 0, 0.24),
                0 17px 50px 0 rgba(0, 0, 0, 0.19);
            background-color: rgb(204, 145, 35);
        }

        .side {
            margin-top: 0.75rem;
            background-color: #fff4fe;
            height: auto;
            width: 25rem;
            padding: 1.5rem;

            float: right;
            margin-right: 2rem;
        }

        .about {
            background-color: rgb(197, 227, 255);
            padding: 1.5rem;
            height: 20rem;
            width: 22rem;
            margin-right: 0px;
            display: inline-block;
        }

        .login {
            background-color: #fff4fe;
            width: 25rem;
            height: auto;
            margin-bottom: 2rem;
            display: inline-block;
            box-shadow: 0 12px 16px 0 rgba(0, 0, 0, 0.24),
                0 17px 50px 0 rgba(0, 0, 0, 0.19);
        }

        .below {
            background-color: #004492;
            width: 96%;
            margin-top: 10px;
            height: auto;
            border-top: 5px solid #f16622;
            padding: 10px 30px 5px 30px;
        }

        .skills {
            list-style-type: none;
            color: rgb(110, 9, 9);
            font-size: 20px;
        }

        .skills li {
            padding: 5px;
            margin: 1px;
        }

        .skills li:hover {
            color: rgb(92, 5, 5);
            font-size: 25px;
            cursor: grabbing;
        }

        .image-slider {
            display: inline-block;
            width: 63%;
            height: 36rem;
        }

        .mySlides {
            width: 100%;
            height: 100%;
        }

        .comment {
            background-color: rgb(197, 227, 255);
            width: auto;
            display: inline-block;
            margin-top: 2rem;
            padding: 1px;
            box-shadow: 0 12px 16px 0 rgba(0, 0, 0, 0.24),
                0 17px 50px 0 rgba(0, 0, 0, 0.19);
        }

        .comment-input {
            padding: 12px 20px;
            margin: 5px 0;
            box-sizing: border-box;
            border-radius: 2px 2px 10px 10px;
            width: 20rem;
            height: 8rem;
        }

        .footer {
            background-color: black;
            width: 100%;
            height: 3rem;
            border-top: rgb(97, 96, 96);
        }

        .footer-list {
            list-style-type: none;

            padding-top: 11px;
            margin-bottom: 3px;
            color: #004492;
        }

        .footer-list li {
            display: inline;
            padding-left: 20px;
        }

        .footer-list li a {
            text-decoration: none;
            font-size: 20px;
            color: rgb(158, 158, 158);
        }
    </style>
    <title>Vellore Institute Technology | College management System.</title>
</head>

<body>
    <div class="header">
        <div class="logo">
            <a href="index.php">
                <font color="white">
                    <center>HOME</center>
                </font>
            </a>
        </div>
    </div>
    <div class="form-outer">
        <span style="color:rgb(255, 123, 0);font-size:28px">
            <p id="heading">ADMISSION FORM</p>
        </span><br>

        <table class="table">
            <form class="form" action="admission.php" method="POST" name="info">

                <tr>
                    <td>
                        <label for='First name' class="label">First Name<font color='red' size=4px>*</font></label>:
                    </td>
                    <td>
                        <input type='text' name="first_name" placeholder='First Name' class='input'><br>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for='Last Name' class="label">Last Name<font color='red' size=4px>*</font></label>:
                    </td>
                    <td>
                        <input type='text' name="last_name" placeholder='Last Name' class='input'><br>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for='Email' class="label">Email<font color='red' size=4px>*</font></label>:
                    </td>
                    <td>
                        <input type='email' name="email" placeholder='Email' class='input'><br>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for='Password' class="label">Password<font color='red' size=4px>*</font></label>:
                    </td>
                    <td>
                        <input type='password' name="password" placeholder='Password' class='input'><br>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for='confirm_Password' class="label">Confirm Password<font color='red' size=4px>*</font></label>:
                    </td>
                    <td>
                        <input type='password' name="confirm" placeholder='Confirm Password' class='input'><br>
                    </td>
                </tr>
                <tr>
                    <td><label for='Mobile' class="label">Mobile<font color='red' size=4px>*</font></label>:</td>
                    <td><input type="text" placeholder="+91" value="+91" class="input" style="width:30px;margin-right: 10px; padding: 12px 0px 10px 2px;">
                        <input type="text" name="mobile" placeholder='Mobile' class='input' style="width:17.25rem"><br></td>
                </tr>
                <tr>
                    <td>
                        <label for='DOB' class="label">Date Of Birth<font color='red' size=4px>*</font></label>:
                    </td>
                    <td>
                        <input type='date' name="DOB" placeholder='Date Of Birth' class='input'>
                    </td>
                </tr>
                <tr>
                    <td><label for='sex' class="label">sex<font color='red' size=4px>*</font></label>:</td>
                    <td><input type="radio" name="sex" value="male"> Male<br>
                        <input type="radio" name="sex" value="female"> Female<br>
                        <input type="radio" name="sex" value="other"> Other<br>
                    </td>
                </tr>
                <tr>
                    <td><label for='city' class="label">City<font color='red' size=4px>*</font></label>:</td>
                    <td>
                        <select class="select" placeholder="Select Current City" name="city">
                            <option value="Mumbai">Mumbai</option>
                            <option value="Delhi">Delhi</option>
                            <option value="Bangalore">Bangalore</option>
                            <option value="Hyderabad">Hyderabad</option>
                            <option value="Ahmedabad">Ahmedabad</option>
                            <option value="Chennai">Chennai</option>
                            <option value="Kolkata">Kolkata</option>
                            <option value="Surat">Surat</option>
                            <option value="Pune">Pune</option>
                            <option value="Jaipur">Jaipur</option>
                            <option value="Lucknow">Lucknow</option>
                            <option value="Kanpur">Kanpur</option>
                            <option value="Nagpur">Nagpur</option>
                            <option value="Visakhapatnam">Visakhapatnam</option>
                            <option value="Indore">Indore</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for='country' class="label">Country<font color='red' size=4px>*</font></label>:
                    </td>
                    <td>
                        <input type='text' name="country" placeholder='country' class='input'><br>
                    </td>
                </tr>
                <tr>
                    <td><label for='pin' class="label">pin<font color='red' size=4px>*</font></label>:</td>
                    <td><input type="number" name="pin" placeholder='pincode' class='input'></td>
                </tr>
                <tr>
                    <td>
                        <label for='State' class="label">State<font color='red' size=4px>*</font></label>:
                    </td>
                    <td>
                        <input type='text' name="state" placeholder='State' class='input'><br>
                    </td>
                </tr>
                <tr>

                <tr>
                    <td><label for='qualification' class="label">Highest qualification<font color='red' size=4px>*</font></label>:</td>
                    <td><input type="file" class="input" id="file-id" accept=".docx,.pdf,.rtf,.doc" name="file" style="display: block;float: left; background: skyblue"><br>
                        <p style="color:blue">Upload .docx,.pdf,.rtf,.doc file only</p>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" style="text-align: center">
                        <input type="checkbox" id="checkme" />

                        <a href="#" class="terms"> I have read terms and condition</a></td>
                </tr>
                <tr>
                    <td colspan="2" style="text-align: center; padding:0px 40px 0px 20px">
                        <input type="submit" class="btn" id="submit">
                        <input type="reset" class="btn">
                    </td>
                </tr>
            </form>
        </table>

    </div>

</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>
    $(document).ready(function() {
        $(".form-outer").click(function() {

            $(".table").slideDown(2200);
            $("#heading").slideUp(1000);
            $("#heading").text("Fill in the details", 3000)




        });

    });
</script>

</html>
<?php
require("conection/connect.php");
if ($_POST['submit'] = !NULL) {
    $f = $_POST['first_name'];
    $l = $_POST['last_name'];
    $sex = $_POST['sex'];
    $dob = $_POST['DOB'];
    $coun = $_POST['country'];
    $city = $_POST['city'];
    $mob = $_POST['mobile'];
    $email = $_POST['email'];
    $pin = $_POST['pin'];
    $sql_ins = mysqli_query($con, "INSERT INTO stu_tbl VALUES(
				
							NULL,
							'$f',
							'$l' ,
							'$sex',
							'$dob',
							'$coun',
							'$city',
							'$mob',
							'$email',
                            '$pin'
                            );");
}
?>