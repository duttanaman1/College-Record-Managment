<html>
<?php
require("conection/connect.php"); ?>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" type="text/css" href="css/IWP_ass1.css" />
    <link rel="stylesheet" type="text/css" href="css/style_entry.css" />
    <style>
        body {
            margin: 0px;
            background: rgb(235, 237, 255);
        }

        .form-outer {
            margin-top: 0.75rem;
            margin-left: 3rem;
            margin-bottom: 3rem;

            background-color: #fff4fe;
            height: auto;
            width: auto;
            padding: 1.5rem;
            display: inline-block;
        }

        .table {
            margin: 20px;
        }

        .table td {
            padding: 0px 20px 0px 10px;
            background-color: rgba(0, 0, 0, 0.005);
            align-content: center;
        }
    </style>


</head>

<body>

    <div class="panel panel-default">
        <div class="panel-heading">
            <h1><span class="glyphicon glyphicon-star-empty"></span> Leave Request Form</h1>
        </div>
        <div class="panel-body" action="leaveStudent.php">
            <div class="container">
                <p style="text-align:center;">Fill the leave request</p>
            </div>

            <div class="form-outer">

                <table class="table">
                    <form class="form" method="POST" name="info">
                        <tr>
                            <td><label>Registration Number</label></td>
                            <td><input type="text" name="Reg" placeholder="Registration Number" class="input"></td>
                        </tr>
                        <tr>
                            <td><label>Name</label></td>
                            <td><input type="text" name="Name" placeholder="Name" class="input"></td>
                        </tr>
                        <tr>
                            <td><label>Type</label></td>
                            <td><select name="type" class="input">
                                    <option>With parents leave</option>
                                    <option>Medical Leave</option>
                                    <option>College Adminstration leave</option>
                                    <option>Visiting Local guradian Leave</option>
                                </select></td>
                        </tr>
                        <tr>
                            <td><label>Place of Visit</label></td>
                            <td><input type="text" name="Place" placeholder="Place of Visit" class="input"></td>
                        </tr>
                        <tr>
                            <td><label>From</label></td>
                            <td><input type="date" name="From" placeholder="From" class="input"></td>
                        </tr>
                        <tr>
                            <td><label>to</label></td>
                            <td><input type="date" name="to" placeholder="to" class="input"></td>
                        </tr>
                        <tr>
                            <td><label>Faculty</label></td>
                            <td><select name="faculty" class="input">
                                    <option>Faculties's name</option>
                                    <?php
                                    $fac_name = mysqli_query($con, "SELECT * FROM facuties_tbl");
                                    while ($row = mysqli_fetch_array($fac_name)) {
                                        if ($row['faculties_id'] == $rs_upd['faculties_id'])
                                            $iselect = "selected";
                                        else
                                            $iselect = "";
                                    ?>
                                        <option value="<?php echo $row['faculties_id']; ?>" <?php echo $iselect; ?>> <?php echo $row['faculties_name']; ?> </option>
                                    <?php
                                    }
                                    ?>
                                </select></td>
                        </tr>
                        <tr>
                            <td><label>Reason</label></td>
                            <td><textarea name="Reason" placeholder="Reason" class="input" style="height:7rem;padding:1rem"></textarea></td>
                        </tr>
                        <tr>
                            <td colspan="2" style="text-align: center; padding:0px 40px 0px 20px">
                                <input type="submit" class="btn" name="btn">
                                <input type="reset" class="btn">
                            </td>
                        </tr>

                    </form>
                </table>

            </div>
        </div>

    </div>

    <?php
    if (isset($_POST['submit'])) {
        $name = $_POST['Name'];
        $type = $_POST['Type'];
        $place = $_POST['place'];
        $from = $_POST['from'];
        $to = $_POST['to'];
        $faculty = $_POST['faculty'];
        $reason = $_POST['reason'];


        $sql_ins = mysqli_query($con, "INSERT INTO leave 
						VALUES('$name','$type','$place','$from','$to','$faculty','$reason','no respond','no respond')
					");
        if ($sql_ins == true)
            echo "1 Row Inserted";
    }

    ?>
</body>

</html>