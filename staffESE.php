<?php
require_once 'database.php';

$conn = mysqli_connect($hostName, $dbUser, $dbPassword, $dbName);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_POST['submit'])) {
    // $EDATE = $_POST["DATE_OF_EXAM"];
    // $EXAMDATE = date('Y-m-d', strtotime($EDATE));
    // $PDATE = $_POST["DATE_OF_PREPARATION"];
    // $PREPDATE = date('Y-m-d', strtotime($PDATE));
    // $NO_OF_DAYS = $_POST["NO_OF_DAYS"];
    $SEMESTER = $_POST["SEMESTER"];
    $SUBJECT = $_POST["SUBJECT"];
    $STAFF = $_POST["STAFF"];
    $EMAIL = $_POST["EMAIL"];
    $PARTICULARS = $_POST["PARTICULARS"];
    $DESIGNATION = $_POST["DESIGNATION"];
    $NO_OF_DUTIES = $_POST["NO_OF_DUTIES"];
    $RPERDUTY = $_POST["R/DUTY"];
    $TOTAL = $_POST["TOTAL"];

    $sql = "INSERT INTO `staffese`(`semester`, `subject`, `name`, `email`, `particular`,`designation`, `no_of_duties`, `rperday`, `total`) VALUES (?,?,?,?,?,?,?,?,?)";
    $stmt = mysqli_stmt_init($conn);

    if (!mysqli_stmt_prepare($stmt, $sql)) {
        die("SQL prepare statement failed: " . mysqli_stmt_error($stmt));
    }

    mysqli_stmt_bind_param($stmt, "ssssssiii", $SEMESTER, $SUBJECT, $STAFF, $EMAIL, $PARTICULARS, $DESIGNATION, $NO_OF_DUTIES, $RPERDUTY, $TOTAL);
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
                </li>
                <li>
                    <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Remuneration</a>
                    <ul class="collapse list-unstyled" id="pageSubmenu">
                    <a href="#ISSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">In-Sem</a>
                    <ul class="collapse list-unstyled" id="ISSubmenu">
                        <a href="#teacherSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Faculty</a>
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
                    <a href="#ESESubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">End-Sem</a>
                        <ul class="collapse list-unstyled" id="ESESubmenu">
                            <a href="#facultySubmenu1" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Faculty</a>
                            <ul class="collapse list-unstyled" id="facultySubmenu1">
                                <li>
                                    <a href="externalESE.php">External</a>
                                </li>
                                <li>
                                    <a href="internalESE.php">Internal</a>
                                </li>
                            </ul>
                            <li>
                                <a href="staffESE.php">Staff</a>
                            </li>
                        </ul>
                </li>
                </ul>
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
            <div class="home">
                <h1>Staff</h1>
            </div>
            <div class="btn-container btn-toolbar">
                <button class="Btn btn mr-3" onclick="">
                    <svg class="svgIcon" viewBox="0 0 640 512" fill="white" height="1em" xmlns="http://www.w3.org/2000/svg"><path d="M144 480C64.5 480 0 415.5 0 336c0-62.8 40.2-116.2 96.2-135.9c-.1-2.7-.2-5.4-.2-8.1c0-88.4 71.6-160 160-160c59.3 0 111 32.2 138.7 80.2C409.9 102 428.3 96 448 96c53 0 96 43 96 96c0 12.2-2.3 23.8-6.4 34.6C596 238.4 640 290.1 640 352c0 70.7-57.3 128-128 128H144zm79-217c-9.4 9.4-9.4 24.6 0 33.9s24.6 9.4 33.9 0l39-39V392c0 13.3 10.7 24 24 24s24-10.7 24-24V257.9l39 39c9.4 9.4 24.6 9.4 33.9 0s9.4-24.6 0-33.9l-80-80c-9.4-9.4-24.6-9.4-33.9 0l-80 80z"></path></svg>
                    <span class="icon2"></span>
                    <span class="tooltip">Upload</span>
                </button>
                <button class="Btn btn mr-3" onclick="csv()">
                    <svg class="svgIcon" viewBox="0 0 384 512" height="1em" xmlns="http://www.w3.org/2000/svg"><path d="M169.4 470.6c12.5 12.5 32.8 12.5 45.3 0l160-160c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L224 370.8 224 64c0-17.7-14.3-32-32-32s-32 14.3-32 32l0 306.7L54.6 265.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l160 160z"></path></svg>
                    <span class="icon2"></span>
                    <span class="tooltip">Download</span>
                </button>
            </div>
            <div class="container">
                <form class="form" action="staffESE.php" method="post" name="remuneration-form">
                    
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
                    <label for="Remuneration">Choose a Particular:</label><br>
                    <select id="particulars" name="PARTICULARS" required>
                        <option value="EC">Exam Conduction</option>
                    </select>
                    <br><hr>
                    <label for="Remuneration">Designation:</label><br>
                    <select id="designation" name="DESIGNATION" onchange="put(this.id,'rperduty')" required>
                        <option value="">--Choose a Designation--</option>
                        <option value="US">Understudy Supervisor</option>
                        <option value="P">Peon/Bellman/Waterman</option>
                    </select>
                    <br><hr>
                    <label for="Remuneration">Number of Duties:</label><br>
                    <input type="students" name="NO_OF_DUTIES" id="noofduties" oninput="calculateRemuneration()" required>
                    <br><hr>
                    
                    <label for="Remuneration">Remuneration/duty:</label><br>
                    <select id="rperduty" name="R/DUTY" oninput="calculateRemuneration()" required>
                        <option value="">--Remuneration/duty--</option>
                        <option value="225">225</option>
                        <option value="175">175</option>
                        <option value="160">160</option>
                        <option value="125">125</option>
                        <option value="80">80</option>
                    </select>
                    <br><hr style="width: 640px; color: rgb(0, 0, 0);">
                    <label for="Remuneration">TOTAL:</label><br>
                    <input type="number" name="TOTAL" id="total" required>
                    <input type="submit" name='submit' id="submit"><br>
                </form>
            </div>
            <h1 class="text-center my-5">Staff Remuneration</h1>
            <table id="table" class="table table-striped table-hover">
                <thead>
                    <tr>
                    <th scope="col">Semester</th>
                    <th scope="col">Subject</th>
                    <th scope="col">Staff</th>
                    <th scope="col">Email</th>
                    <th scope="col">Designation</th>
                    <th scope="col">Particulars</th>
                    <th scope="col">Designation</th>
                    <th scope="col">Number of Duties</th>
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
                    $sql="SELECT * FROM staffese";
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
                    <td>'.$data["designation"].'</td>
                    <td>'.$data["no_of_duties"].'</td>
                    <td>'.$data["total"].'</td>   

                    </tr>';
                
            }
                
            ?>
                </tbody>

            </table>
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