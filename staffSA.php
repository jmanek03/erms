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
    $EMAIL = $_POST["EMAIL"];
    $DESIGNATION = $_POST["DESIGNATION"];
    $PARTICULARS = $_POST["PARTICULARS"];
    $NO_OF_STUDENTS = $_POST["NO_OF_STUDENTS"];
    $RS_PER_DAY = $_POST["RS_PER_DAY"];
    $TOTAL = $_POST["TOTAL"];

    $sql = "INSERT INTO `staff`(`exam_date`, `prep_date`, `no_of_days`, `semester`, `subject`, `name`, `email`, `designation`, `particular`, `no_of_students`, `rs_per_day`, `total`) VALUES (?,?,?,?,?,?,?,?,?,?,?,?)";
    $stmt = mysqli_stmt_init($conn);

    if (!mysqli_stmt_prepare($stmt, $sql)) {
        die("SQL prepare statement failed: " . mysqli_stmt_error($stmt));
    }

    mysqli_stmt_bind_param($stmt, "sssssssssiii", $EXAMDATE, $PREPDATE, $NO_OF_DAYS, $SEMESTER, $SUBJECT, $STAFF, $EMAIL, $DESIGNATION, $PARTICULARS, $NO_OF_STUDENTS, $RS_PER_DAY, $TOTAL);
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
                    <a href="sadminDashboard.php">Home</a>
                </li>
                <li>
                    <a href="aboutSAdmin.php">About</a>
                    <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Remuneration</a>
                    <ul class="collapse list-unstyled" id="pageSubmenu">
                    <a href="#ISSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">In-Sem</a>
                        <ul class="collapse list-unstyled" id="ISSubmenu">
                            <a href="#facultySubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Faculty</a>
                            <ul class="collapse list-unstyled" id="facultySubmenu">
                                <li>
                                    <a href="externalSA.php">External</a>
                                </li>
                                <li>
                                    <a href="internalSA.php">Internal</a>
                                </li>
                            </ul>
                            <li>
                                <a href="staffSA.php">Staff</a>
                            </li>
                        </ul>
                        <a href="#ESESubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">End-Sem</a>
                        <ul class="collapse list-unstyled" id="ESESubmenu">
                            <a href="#facultySubmenu1" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Faculty</a>
                            <ul class="collapse list-unstyled" id="facultySubmenu1">
                                <li>
                                    <a href="externalESESA.php">External</a>
                                </li>
                                <li>
                                    <a href="internalESESA.php">Internal</a>
                                </li>
                            </ul>
                            <li>
                                <a href="staffESESA.php">Staff</a>
                            </li>
                        </ul>
                    </ul>
                </li>
                <li>
                    <a href="contactSAdmin.php">Contact</a>
                </li>
                <li>
                    <a href="superadmin.php">User Information</a>
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
            <div class="home">
                <h1>Staff</h1>
            </div>
            <div class="container">
                <form class="form" action=staff.php method="post" name="remuneration-form">
                    <input type="hidden" name="CREATED" value="x-sheetmonkey-current-date-time" />
                    
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
                    <label for="Remuneration">Email:</label><br>
                    <input type="email" name="EMAIL" id="email" >
                    <br><hr>
                    <label for="Remuneration">Designation:</label><br>
                    <select id="designation" name="DESIGNATION" onchange="push(this.id,'rsperday')">
                        <option value="Lab-Attendant">Lab Attendant</option>
                        <option value="Lab-Assistant">Lab Assistant</option>
                        <option value="Expert">Expert</option>
                        <option value="Peon">Peon</option>
                    </select>
                    <br><hr>
                    <label for="Remuneration">Choose a Particular:</label><br>
                    <select id="particulars" name="PARTICULARS" onchange="push(this.id,'rsperday')">
                        <option value="TW">Term work</option>
                        <option value="Oral">Oral</option>
                        <option value="P&O">Oral With Practical</option>
                    </select>
                    <br><hr>
                    <label for="Remuneration">Number of Students:</label><br>
                    <input type="students" name="NO_OF_STUDENTS" id="noofstudents" oninput="calculateTotal()" required>
                    <br><hr>
                    <label for="Remuneration">Date of Exam:</label><label for="Remuneration" style="margin-left: 330px;">Date of Preparation:</label><br>
                    <input type="date" name="DATE_OF_EXAM" id="edate" required>
                    <input type="date" name="DATE_OF_PREPARATION" id="pdate" required style="margin-left: 125px;"><br><hr style="width: 640px; color: black;">
                    <label for="Remuneration">Number of Days:</label><br>
                    <input type="days" name="NO_OF_DAYS" id="no-of-days" required>
                    <br><hr>
                    <label for="Remuneration">Rs per day:</label><br>
                    <select id="rsperday" name="RS_PER_DAY" required>
                        <option value=""></option>
                    </select>
                    <br><hr>
                    <label for="Remuneration">TOTAL:</label><br>
                    <input type="number" name="TOTAL" id="total" required>
                    <input type="submit" name='submit' id="submit"><br>
                </form>
            </div>
            <h1 class="h-scroll-tables">STAFF REMUNERATION</h1>
            <table class="h-scroll-tables">
            <caption>APPLICATION HISTORY</caption>
                <thead>
                    <tr class="header">
                    <th scope="col">Semester</th>
                    <th scope="col">Subject</th>
                    <th scope="col">Staff</th>
                    <th scope="col">Email</th>
                    <th scope="col">Designation</th>
                    <th scope="col">Particulars</th>
                    <th scope="col">No. of Students</th>
                    <th scope="col">Date of Exam</th>
                    <th scope="col">Preparation Date</th>
                    <th scope="col">No. of Days</th>
                    <th scope="col">Total</th>
                    </tr>
                </thead>
                <tbody class="table-group-divider">
                <?php 
                    require_once 'database.php';
                    $conn = mysqli_connect($hostName, $dbUser, $dbPassword, $dbName);
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
                    <td>'.$data["semester"].'</td>
                    <td>'.$data["subject"].'</td>
                    <td>'.$data["name"].'</td>
                    <td>'.$data["email"].'</td>
                    <td>'.$data["designation"].'</td>
                    <td>'.$data["particular"].'</td>
                    <td>'.$data["no_of_students"].'</td>
                    <td>'.$data["exam_date"].'</td> 
                    <td>'.$data["prep_date"].'</td>
                    <td>'.$data["no_of_days"].'</td>
                    <td>'.$data["total"].'</td>   

                    </tr>';
                
            }
                
            ?>
                </tbody>

            </table>
            <div>
                <form action="" method="post">   
                <button type="submit" name="clear" class="noselect" style="float:right;">
                    <span class="text">Clear</span>
                    <span class="icon">
                        <img src="clear.svg">
                        </img>
                    </span>
                </button>
                <?php
                    require_once 'database.php';

                    $conn = mysqli_connect($hostName, $dbUser, $dbPassword, $dbName);

                    if (!$conn) {
                        die("Connection failed: " . mysqli_connect_error());
                    }

                    // Check if 'confirm_clear' button is submitted
                    if(isset($_POST['clear'])) {
                    // Delete query (replace with your table name)
                    $sql = "DELETE FROM staff";

                    if (mysqli_query($conn, $sql)) {
                        echo "Database cleared successfully!";
                    } else {
                        echo "Error clearing database: " . mysqli_error($conn);
                    }
                    }

                    mysqli_close($conn);
                    ?>
                </form>
                <div class="btn-container btn-toolbar">
                    <button class="Btn btn mr-3" onclick="csv()">
                        <svg class="svgIcon" viewBox="0 0 384 512" height="1em" xmlns="http://www.w3.org/2000/svg"><path d="M169.4 470.6c12.5 12.5 32.8 12.5 45.3 0l160-160c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L224 370.8 224 64c0-17.7-14.3-32-32-32s-32 14.3-32 32l0 306.7L54.6 265.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l160 160z"></path></svg>
                        <span class="icon2"></span>
                        <span class="tooltip">Download</span>
                    </button>
                </div>
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