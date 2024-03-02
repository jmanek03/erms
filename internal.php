<?php
require_once 'database.php';

$conn = mysqli_connect($hostName, $dbUser, $dbPassword, $dbName);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";

if (isset($_POST['submit'])) {
    $DATE = $_POST["DATE"];
    $SCHEME = $_POST["SCHEME"];
    $SEMESTER = $_POST["SEMESTER"];
    $SUBJECT = $_POST["SUBJECT"];
    $DIVISION = $_POST["DIVISION"];
    $BATCH = $_POST["BATCH"];
    $TEACHER = $_POST["TEACHER"];
    $EXAM = $_POST["EXAM"];
    $PARTICULARS = $_POST["PARTICULARS"];
    $MARKS = $_POST["MARKS"];
    $NO_OF_STUDENTS = $_POST["NO_OF_STUDENTS"];
    $RS_PER_STUDENT = $_POST["RS_PER_STUDENT"];
    $TOTAL = $_POST["TOTAL"];

    $sql = "INSERT INTO internal ('t_id','academic year', 'scheme', 'semester', 'subject', 'division', 'batch', 't_name', 'exam', 'particular', 'max_marks', 'no_of_students', 'rs_per_students', 'total') VALUES ('',?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
    $stmt = mysqli_stmt_init($conn);
    $prepareStmt = mysqli_stmt_prepare($stmt, $sql);

    if ($prepareStmt) {
        mysqli_stmt_bind_param($stmt, "sssssssssiiii", $DATE, $SCHEME, $SEMESTER, $SUBJECT, $DIVISION, $BATCH, $TEACHER, $EXAM, $PARTICULARS, $MARKS, $NO_OF_STUDENTS, $RS_PER_STUDENT, $TOTAL);
        mysqli_stmt_execute($stmt);
    } else {
        die("Something went wrong!");
    }
}

echo "Form submitted";
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
                <form class="form" action=internal.php method="post" name="remuneration-form">
                    <label for="Remuneration">Academic Year:</label><label for="Remuneration" style="margin-left: 300px;">Scheme:</label><br>
                    <input type="year" name="DATE" id="date" required>
                    <select id="scheme" name="SCHEME"required style="margin-left: 83px;">
                        <option value="">--Choose a Scheme--</option>
                        <option value="SCHEME-I">I</option>
                        <option value="SCHEME-II">II</option>
                    </select>
                    <br><hr>
                    <label for="Remuneration">Semester:</label><br>
                    <select name="SEMESTER" id="semester" required onchange="populate(this.id,'subject')">
                        <option value="">--Choose a Semester--</option>
                        <option value="I(Odd)">I(Odd)</option>
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
                    <label for="Remuneration">Division:</label><label for="Remuneration" style="margin-left: 350px;">Batch:</label><br>
                    <select id="division" name="DIVISION" required onchange="get(this.id,'batch')">
                        <option value="">--Choose a Division--</option>
                        <option value="A">A</option>
                        <option value="B">B</option>
                    </select>
                    <select name="BATCH" id="batch" style="margin-left: 83px;" required>
                        <option value=""></option>
                    </select>
                    <br><hr>
                    <label for="Remuneration">Teacher Name:</label><br>
                    <select id="teacher" name="TEACHER">
                        <option value="">--Select--</option>
                        <option value="Jayashree Khanapuri">Jayashree Khanapuri</option>
                        <option value="Namrata Ansari">Namrata Ansari</option>
                        <option value="Vricha Chavan">Vricha Chavan</option>
                        <option value="Sandhya Kadam">Sandhya Kadam</option>
                        <option value="Tilottama Dhake">Tilottama Dhake</option>
                        <option value="Rashmi Adatkar">Rashmi Adatkar</option>
                        <option value="Kiran Rathod">Kiran Rathod</option>
                        <option value="Pradnya Kamble">Pradnya Kamble</option>
                        <option value="Prashant Upadhyay">Prashant Upadhyay</option>
                        <option value="Martand Jha">Martand Jha</option>
                        <option value="Sandeep Mishra">Sandeep Mishra</option>
                        <option value="Rupali Satpute">Rupali Satpute</option>
                        <option value="Sunil Patil">Sunil Patil</option>
                        <option value="Harshwardhan Ahire">Harshwardhan Ahire</option>
                        <option value="Pranali Hatode">Pranali Hatode</option>
                        <option value="Amit Kukreja">Amit Kukreja</option>
                        <option value="Rupali Kadu">Rupali Kadu</option>
                        <option value="Sandhya Deshpande">Sandhya Deshpande</option>
                        <option value="Priya Hankare">Priya Hankare</option>
                        <option value="Swati Shinde">Swati Shinde</option>
                        <option value="Sagar Mhatre">Sagar Mhatre</option>
                        <option value="Priya Gupta">Priya Gupta</option>
                        <option value="Reshma Rasal">Reshma Rasal</option>
                        <option value="Archana Kshirsagar">Archana Kshirsagar</option>
                    </select>
                    <br><hr>
                    <label for="Remuneration">Exam:</label><label for="Remuneration" style="margin-left: 370px;">Choose a Particular:</label><br>
                    <select name="EXAM" id="exam" required onchange="select(this.id,'particulars')">
                        <option value="">--Select--</option>
                        <option value="Regular">Regular</option>
                        <option value="KT">KT</option>
                        
                    </select>
                    <select id="particulars" name="PARTICULARS" style="margin-left: 83px;">
                        <option value="">--Choose a Particular--</option>
                        <option value=""></option>
                    </select>
                    <br><hr>
                    <label for="Remuneration">Maximum Marks:</label><br>
                    <input type="marks" name="MARKS" id="max-marks" required>
                    <br><hr style="width: 640px; color: rgb(0, 0, 0);">
                    <label for="Remuneration">Number of Students:</label><br>
                    <input type="students" name="NO_OF_STUDENTS" id="noofstudents" oninput="calculateTotal()" required>
                    <br><hr>
                    <label for="Remuneration">Rs. Per Student:</label><br>
                    <input type="rs" name="RS_PER_STUDENT" id="rsperstudent" oninput="calculateTotal()" required>
                    <br><hr>
                    <label for="Remuneration">TOTAL:</label><br>
                    <input type="total" name="TOTAL" id="total" required>
                    <input type="hidden" name="CREATED" value="x-sheetmonkey-current-date-time" />
                    <input type="submit" name='submit' id="submit"><br>
                </form>
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