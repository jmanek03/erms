<?php
require_once 'database.php';

$conn = mysqli_connect($hostName, $dbUser, $dbPassword, $dbName);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_POST['submit'])) {
    $EDATE = $_POST["DATE_OF_EXAM"];
    $EXAMDATE = date('Y-m-d', strtotime($EDATE));
    $PDATE = $_POST["DATE_OF_PREPARATION"];
    $PREPDATE = date('Y-m-d', strtotime($PDATE));
    $NO_OF_DAYS = $_POST["NO_OF_DAYS"];
    $SEMESTER = $_POST["SEMESTER"];
    $SUBJECT = $_POST["SUBJECT"];
    $STAFF = $_POST["STAFF"];
    $DESIGNATION = $_POST["DESIGNATION"];
    $PARTICULARS = $_POST["PARTICULARS"];
    $NO_OF_STUDENTS = $_POST["NO_OF_STUDENTS"];
    $RS_PER_STUDENT = $_POST["RS_PER_STUDENT"];
    $TOTAL = $_POST["TOTAL"];

    $sql = "INSERT INTO `staff`(`exam_date`, `prep_date`, `no_of_days`, `semester`, `subject`, `name`, `designation`, `particular`, `no_of_students`, `rs_per_student`, `total`) VALUES (?,?,?,?,?,?,?,?,?,?,?)";
    $stmt = mysqli_stmt_init($conn);

    if (!mysqli_stmt_prepare($stmt, $sql)) {
        die("SQL prepare statement failed: " . mysqli_stmt_error($stmt));
    }

    mysqli_stmt_bind_param($stmt, "ssssssssiii", $EXAMDATE, $PREPDATE, $NO_OF_DAYS, $SEMESTER, $SUBJECT, $STAFF, $DESIGNATION, $PARTICULARS, $NO_OF_STUDENTS, $RS_PER_STUDENT, $TOTAL);
    $s_id=null;

    if (!mysqli_stmt_execute($stmt)) {
        die("SQL execute statement failed: " . mysqli_stmt_error($stmt));
    }

    mysqli_stmt_close($stmt);
    mysqli_close($conn);
}

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>K.J. SOMAIYA INSTITUTE OF TECHNOLOGY</title>

    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="adminDashboard.css">
    <link rel="stylesheet" type="text/css" href="teacher.css">

    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>

</head>

<body>

    <div class="wrapper">
        <!-- Sidebar Holder -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <h2>DASHBOARD</h2>
            </div>

            <ul class="list-unstyled components">
                <li>
                    <a href="adminDashboard.php">Home</a>
                </li>
                <li>
                    <a href="aboutAdmin.php">About</a>
                    <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Remuneration</a>
                    <ul class="collapse list-unstyled" id="pageSubmenu">
                        
                        <a href="#teacherSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Teachers</a>
                        <ul class="collapse list-unstyled" id="teacherSubmenu">
                            <li>
                              <a href="external.php">External</a>
                            </li>
                            <li>
                              <a href="internal.php">Internal</a>
                            </li>
                        </ul>
                        <li>
                            <a href="staff.php">Staff</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="contactAdmin.php">Contact</a>
                </li>
            </ul>
        </nav>

        <!-- Page Content Holder -->
        <div id="content">

            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">

                    <button type="button" id="sidebarCollapse" class="navbar-btn">
                        <span></span>
                        <span></span>
                        <span></span>
                    </button>
                    <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fas fa-align-justify"></i>
                    </button>
                    <img src="favicon.ico">
                    <h2 class="header mx-3">
                        K. J. SOMAIYA INSTITUTE OF TECHNOLOGY
                    </h2>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="nav navbar-nav ml-auto">
                            <li class="nav-item active">
                                <a class="nav-link" href="logout.php">LOGOUT</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <div class="container">
                <form class="form" action=staff.php method="post" name="remuneration-form">
                    <input type="hidden" name="CREATED" value="x-sheetmonkey-current-date-time" />
                    <label for="Remuneration">Date of Exam:</label><label for="Remuneration" style="margin-left: 200px;">Date of Preparation:</label><br>
                    <input type="date" name="DATE_OF_EXAM" id="edate" required>
                    <input type="date" name="DATE_OF_PREPARATION" id="pdate" required style="margin-left: 125px;"><br><hr style="width: 640px; color: black;">
                    <label for="Remuneration">Number of Days:</label><br>
                    <input type="days" name="NO_OF_DAYS" id="no-of-days" required>
                    <br><hr>
                    <label for="Remuneration">Semester:</label><br>
                    <select name="SEMESTER" id="semester" required onchange="populate(this.id,'subject')">
                        <option value="">--Choose a Semester--</option>
                        <option value="I(Odd)">I(odd)</option>
                        <option value="II(Even)">II(Even)</option>
                        <option value="III(Odd)">III(Odd)</option>
                        <option value="IV(Even)">IV(Even)</option>
                        <option value="V(Odd)">V(Odd)</option>
                        <option value="VI(Even)">VI(Even)</option>
                        <option value="VII(Odd)">VII(Odd)</option>
                        <option value="VIII(Even)">VIII(Even)</option>
                    </select>
                    <br><hr>
                    <label for="Remuneration">Subject:</label><br>
                    <select name="SUBJECT" id="subject" required>
                        <option value=""></option>
                    </select>
                    <br><hr>
                    <label for="Remuneration">Name:</label><br>
                    <select id="staff" name="STAFF">
                        <option value="">--Select--</option>
                        <option value="Punam Alway">Punam Alway</option>
                        <option value="Harshala Patil">Harshala Patil</option>
                        <option value="Yuvraj Chavan">Yuvraj Chavan</option>
                        <option value="Sunita Tikekar">Sunita Tikekar</option>
                        <option value="Kishor Mugale">Kishor Mugale</option>
                        <option value="Chaitra Wagh">Chaitra Wagh</option>
                        <option value="Nilka Adsul">Nilka Adsul</option>
                        <option value="Mahesh Sawant">Mahesh Sawant</option>
                        <option value="Tika Singh">Tika Singh</option>
                        <option value="Vimal Pawar">Vimal Pawar</option>
                        <option value="Manjula Jadhav">Manjula Jadhav</option>
                    </select>
                    <br><hr>
                    <label for="Remuneration">Designation:</label><br>
                    <select id="designation" name="DESIGNATION">
                        <option value="Lab-Attendant">Lab Attendant</option>
                        <option value="Lab-Assistant">Lab Assitant</option>
                        <option value="Expert">Expert</option>
                    </select>
                    <br><hr>
                    <label for="Remuneration">Choose a Particular:</label><br>
                    <select id="particulars" name="PARTICULARS">
                        <option value="TW">Term work</option>
                        <option value="Oral">Oral</option>
                        <option value="P&O">Practical & Oral</option>
                    </select>
                    <br><hr>
                    <label for="Remuneration">Number of Students:</label><br>
                    <input type="students" name="NO_OF_STUDENTS" id="noofstudents" oninput="calculateTotal()" required>
                    <br><hr>
                    <label for="Remuneration">Rs. Per Student:</label><br>
                    <input type="rs" name="RS_PER_STUDENT" id="rsperstudent" oninput="calculateTotal()" required>
                    <br><hr>
                    <label for="Remuneration">TOTAL:</label><br>
                    <input type="number" name="TOTAL" id="total" required>
                    <input type="submit" name='submit' id="submit"><br>
                </form>
            </div>
            <h1 class="text-center my-5">Staff Remuneration</h1>
            <table id="table" class="table table-striped table-hover">
                <thead>
                    <tr>
                    <th scope="col">Date of Exam</th>
                    <th scope="col">Preparation Date</th>
                    <th scope="col">No. of Days</th>
                    <th scope="col">Semester</th>
                    <th scope="col">Subject</th>
                    <th scope="col">Staff</th>
                    <th scope="col">Designation</th>
                    <th scope="col">Particulars</th>
                    <th scope="col">No. of Students</th>
                    <th scope="col">Total</th>
                    </tr>
                </thead>
                <tbody class="table-group-divider">
                <?php 
                    require_once 'database.php';
                    if (!$conn) {
                        die("Connection failed: " . mysqli_connect_error());
                    }
                    $sql="SELECT * FROM staff";
                    $result=mysqli_query($conn,$sql);
                    if (!$result) {
                        echo "Could not successfully run query ($sql) from DB: " . mysqli_error($conn);
                        exit;
                    }
                    
                    while( $data=mysqli_fetch_array($result, MYSQLI_ASSOC) ){
                    echo
                    '<tr>
                    <td>'.$data["exam_date"].'</td> 
                    <td>'.$data["prep_date"].'</td>
                    <td>'.$data["no_of_days"].'</td>
                    <td>'.$data["semester"].'</td>
                    <td>'.$data["subject"].'</td>
                    <td>'.$data["name"].'</td>
                    <td>'.$data["designation"].'</td>
                    <td>'.$data["particular"].'</td>
                    <td>'.$data["no_of_students"].'</td>
                    <td>'.$data["total"].'</td>   

                    </tr>';
                
            }
                
            ?>
                </tbody>

            </table>
        <div>
                <button id="btnExport" type="button" onclick="csv()">
                    <span id="button__text">CSV File</span>
                    <span id="button__icon"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-filetype-csv" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M14 4.5V14a2 2 0 0 1-2 2h-1v-1h1a1 1 0 0 0 1-1V4.5h-2A1.5 1.5 0 0 1 9.5 3V1H4a1 1 0 0 0-1 1v9H2V2a2 2 0 0 1 2-2h5.5zM3.517 14.841a1.13 1.13 0 0 0 .401.823q.195.162.478.252.284.091.665.091.507 0 .859-.158.354-.158.539-.44.187-.284.187-.656 0-.336-.134-.56a1 1 0 0 0-.375-.357 2 2 0 0 0-.566-.21l-.621-.144a1 1 0 0 1-.404-.176.37.37 0 0 1-.144-.299q0-.234.185-.384.188-.152.512-.152.214 0 .37.068a.6.6 0 0 1 .246.181.56.56 0 0 1 .12.258h.75a1.1 1.1 0 0 0-.2-.566 1.2 1.2 0 0 0-.5-.41 1.8 1.8 0 0 0-.78-.152q-.439 0-.776.15-.337.149-.527.421-.19.273-.19.639 0 .302.122.524.124.223.352.367.228.143.539.213l.618.144q.31.073.463.193a.39.39 0 0 1 .152.326.5.5 0 0 1-.085.29.56.56 0 0 1-.255.193q-.167.07-.413.07-.175 0-.32-.04a.8.8 0 0 1-.248-.115.58.58 0 0 1-.255-.384zM.806 13.693q0-.373.102-.633a.87.87 0 0 1 .302-.399.8.8 0 0 1 .475-.137q.225 0 .398.097a.7.7 0 0 1 .272.26.85.85 0 0 1 .12.381h.765v-.072a1.33 1.33 0 0 0-.466-.964 1.4 1.4 0 0 0-.489-.272 1.8 1.8 0 0 0-.606-.097q-.534 0-.911.223-.375.222-.572.632-.195.41-.196.979v.498q0 .568.193.976.197.407.572.626.375.217.914.217.439 0 .785-.164t.55-.454a1.27 1.27 0 0 0 .226-.674v-.076h-.764a.8.8 0 0 1-.118.363.7.7 0 0 1-.272.25.9.9 0 0 1-.401.087.85.85 0 0 1-.478-.132.83.83 0 0 1-.299-.392 1.7 1.7 0 0 1-.102-.627zm8.239 2.238h-.953l-1.338-3.999h.917l.896 3.138h.038l.888-3.138h.879z"/>
                        </svg>
                    </span>
                </button>
            </div>
            <script src="admin.js"></script>
        </div>
    </div>
    <!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
    <script src="csvExport.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
                $(this).toggleClass('active');
            });
        });
    </script>
</body>

</html>