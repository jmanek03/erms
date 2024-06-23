<?php
require_once 'database.php';

$conn = mysqli_connect($hostName, $dbUser, $dbPassword, $dbName);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_POST['submit'])) {
    $NAME = $_POST["NAME"];
    $EMAIL = $_POST["EMAIL"];
    $COLLEGE = $_POST["COLLEGE"];
    $PHNO = $_POST["PHONE"];
    $RES_ADDR = $_POST["RES_ADDRESS"];
    $PROF_ADDR = $_POST["PROF_ADDRESS"];
    $BENEFICIARY = $_POST["BENEFICIARY"];
    $BANK = $_POST["BANK"];
    $BRANCH = $_POST["BRANCH"];
    $IFSC = $_POST["IFSC"];
    $ACC_NO = $_POST["ACC_NO"];
    $YEAR = $_POST["YEAR"];
    $SCHEME = $_POST["SCHEME"];
    $SEMESTER = $_POST["SEMESTER"];
    $SUBJECT = $_POST["SUBJECT"];
    $EXAM = $_POST["EXAM"];
    $PARTICULARS = $_POST["PARTICULARS"];
    $MARKS = $_POST["MARKS"];
    $NO_OF_STUDENTS = $_POST["NO_OF_STUDENTS"];
    $RS_PER_STUDENT = $_POST["RS_PER_STUDENT"];
    $AMT1= $_POST["AMT1"];
    $NO_OF_DAYS = $_POST["NO_OF_DAYS"];
    $TRAV_PER_DAY = $_POST["TRAV_PER_DAY"];
    $AMT2 = $_POST["TRAV_ALLOWANCE"];
    $TOTAL = $_POST["TOTAL"];

    $sql = "INSERT INTO external ( `name`, `email` , `college_name`, `phno`, `res_addr`, `prof_addr`, `beneficiary`, `bank`, `branch`, `ifsc`, `acc_no`, `academic_year`, `scheme`, `semester`, `subject`, `exam`, `particular`, `max_marks`, `no_of_students`, `rs_per_student`, `amount`, `no_of_days`, `trav_allow_per_day`, `trav_allowance`, `total`) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
    $stmt = mysqli_stmt_init($conn);

    if (!mysqli_stmt_prepare($stmt, $sql)) {
        die("SQL prepare statement failed: " . mysqli_stmt_error($stmt));
    }

    mysqli_stmt_bind_param($stmt, "sssisssssssssssssiiiiiiii", $NAME,$EMAIL, $COLLEGE, $PHNO, $RES_ADDR, $PROF_ADDR, $BENEFICIARY, $BANK, $BRANCH, $IFSC, $ACC_NO, $YEAR, $SCHEME, $SEMESTER, $SUBJECT, $EXAM, $PARTICULARS, $MARKS, $NO_OF_STUDENTS, $RS_PER_STUDENT, $AMT1, $NO_OF_DAYS, $TRAV_PER_DAY, $AMT2, $TOTAL);
    $e_id=null;

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

            <nav class="navbar navbar-expand-lg navbar-light bg-light mx-2">
                <div class="container-fluid">
                <button type="button" id="sidebarCollapse" class="navbar-btn">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
                <button class="no-print btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fas fa-align-justify"></i>
                </button>
                    
                    <img src="favicon.ico">
                    <h2 class="header mx-3"> K. J. SOMAIYA INSTITUTE OF TECHNOLOGY </h2>
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
                <h1>External Remuneration</h1>
            </div>
            <div class="btn-container btn-toolbar">
                <button class="Btn btn mr-3" onclick="csv()">
                    <svg class="svgIcon" viewBox="0 0 384 512" height="1em" xmlns="http://www.w3.org/2000/svg"><path d="M169.4 470.6c12.5 12.5 32.8 12.5 45.3 0l160-160c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L224 370.8 224 64c0-17.7-14.3-32-32-32s-32 14.3-32 32l0 306.7L54.6 265.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l160 160z"></path></svg>
                    <span class="icon2"></span>
                    <span class="tooltip">Download</span>
                </button>
            </div>
            <div class="container" >
                <form class="form" id="form" action=external.php method="post" name="remuneration-form">
                    <label for="Remuneration">Name of External Examiner:</label><br>
                    <input type="ext_name" name="NAME" id="ext_name" >
                    <br><hr>
                    <label for="Remuneration">Email:</label><br>
                    <input type="email" name="EMAIL" id="email" >
                    <br><hr>
                    <label for="Remuneration">College:</label><label for="Remuneration" style="margin-left: 300px;">Phone number:</label><br>
                    <input type="ext_clg" name="COLLEGE" id="ext_clg" >
                    <input type="phno" name="PHONE" id="phno" style="margin-left: 83px;" maxlength="10" >
                    <br><hr>
                    <label for="Remuneration">Address (Residential):</label><br>
                    <input type="resadd" name="RES_ADDRESS" id="resadd">
                    <br><hr>
                    <label for="Remuneration">Address (Professional):</label><br>
                    <input type="profadd" name="PROF_ADDRESS" id="profadd">
                    <br><hr>
                    <label for="Remuneration">Benefeciary Name:</label><br>
                    <input type="name" name="BENEFICIARY" id="bname">\
                    <br><hr>
                    <label for="Remuneration">Bank Name:</label><label style="margin-left:280px"for="Remuneration">Branch Address:</label><br>
                    <input type="name" name="BANK" id="bank">
                    <input type="name" name="BRANCH" id="branch" style="margin-left:100px">
                    <br><hr>
                    <label for="Remuneration">IFSC Code:</label><br>
                    <input type="text" name="IFSC" id="IFSC" inputmode="alphanumeric" pattern="[A-Z]{4}0[A-Z0-9]{6}" maxlength="14" />
                    <br><hr>
                    <label for="Remuneration">Account Number:</label><br>
                    <input type="text" inputmode="numeric" id="acno" name="ACC_NO" pattern="[0-9\s]{13,19}" autocomplete="cc-number" maxlength="19" placeholder="xxxx xxxx xxxx xxxx" />
                    <br><hr>
                    <label for="Remuneration">Academic Year:</label><label for="Remuneration" style="margin-left: 260px;">Scheme:</label><br>
                    <input type="year" name="YEAR" id="date" required>
                    <select id="scheme" name="SCHEME"required style="margin-left: 100px;">
                        <option value="">--Choose a Scheme--</option>
                        <option value="SCHEME-I">I</option>
                        <option value="SCHEME-II">II</option>
                        <option value="SCHEME-II B">II B</option>
                        <option value="SCHEME-III">III</option>
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
                    <label for="Remuneration">Exam:</label><label for="Remuneration" style="margin-left: 330px;">Particulars:</label><br>
                    <select name="EXAM" id="exam" required onchange="select(this.id,'particulars')">
                        <option value="">--Select--</option>
                        <option value="Regular">Regular</option>
                        <option value="KT">Supplementary</option>
                        
                    </select>
                    <select id="particulars" name="PARTICULARS" style="margin-left: 100px;" onchange="set(this.id,'rsperstudent')">
                        <option value="">--Choose a Particular--</option>
                        <option value=""></option>
                    </select>
                    <br><hr>
                    <label for="Remuneration">Number of Students:</label><br>
                    <input type="students" name="NO_OF_STUDENTS" id="noofstudents" oninput="calculateAllowance()" required>
                    <br><hr>
                    
                    <label for="Remuneration">Rs. Per Student:</label><br>
                    <select id="rsperstudent" name="RS_PER_STUDENT" oninput="calculateAllowance()" onchange="set(this.id,'max-marks')" required>
                        <option value="">--Rs. Per Student--</option>
                        <option value="8">8</option>
                        <option value="10">10</option>
                    </select>
                    <br><hr>
                    <label for="Remuneration">Amount:</label><br>
                    <input type="amount" name="AMT1" id="amount" required>
                    <br><hr>
                    <label for="Remuneration">Maximum Marks:</label><label for="Remuneration" style="margin-left: 280px;">Minimum Papers to be assessed/day:</label><br>
                    <select id="max-marks" name="MARKS" oninput="calculateNumberOfDays()" required>
                        <option value="">--Maximum Marks--</option>
                        <option value="45">45</option>
                        <option value="60">60</option>
                    </select>
                    <select id="number-of-papers" name="NO_OF_PAPERS" style="margin-left: 100px;" onchange="calculateNumberOfDays()" required>
                        <option value="">--Minimum No. of Papers--</option>
                        <option value="20">20</option>
                        <option value="30">30</option>
                        <option value="40">40</option>
                    </select>
                    <br><hr style="width: 640px; color: rgb(0, 0, 0);">
                    <label for="Remuneration">No. of Days:</label><br>
                    <input type="days" name="NO_OF_DAYS" id="noofdays" oninput="calculateAllowance()" required>
                    <br><hr>
                    <label for="Remuneration">Travelling Allowance/day:</label><br>
                    <input type="rs" name="TRAV_PER_DAY" id="travellingallowanceperday" oninput="calculateAllowance()" required>
                    <br><hr>
                    <label for="Remuneration">Travelling Allowance:</label><br>
                    <input type="rs" name="TRAV_ALLOWANCE" id="travellingallowance" required>
                    <br><hr>
                    <label for="Remuneration">Total:</label><br>
                    <input type="total" name="TOTAL" id="total" required>
                    
                    <input type="submit" name='submit' id="submit"><br>
                </form>
            </div>
            <div>
                <form action="" method="post">   
                <h1 class="text-center my-5">--External Remuneration--</h1>
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
                    $sql = "DELETE FROM external";

                    if (mysqli_query($conn, $sql)) {
                        echo "Database cleared successfully!";
                    } else {
                        echo "Error clearing database: " . mysqli_error($conn);
                    }
                    }

                    mysqli_close($conn);
                    ?>
                </form>
            </div>
            
            <table id="table" class="table table-striped table-hover table-sm">
            
                <thead>
                    <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">College</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Residential Address</th>
                    <th scope="col">Professional Address</th>
                    <th scope="col">Benefeciary</th>
                    <th scope="col">Bank</th>
                    <th scope="col">Branch</th>
                    <th scope="col">IFSC</th>
                    <th scope="col">Account Number</th>
                    <th scope="col">Year</th>
                    <th scope="col">Scheme</th>
                    <th scope="col">Semester</th>
                    <th scope="col">Subject</th>
                    <th scope="col">Division</th>
                    <th scope="col">Particulars</th>
                    <th scope="col">Marks</th>
                    <th scope="col">No. of Students</th>
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
                    $sql="SELECT * FROM external";
                    $result=mysqli_query($conn,$sql);
                    if (!$result) {
                        echo "Could not successfully run query ($sql) from DB: " . mysqli_error($conn);
                        exit;
                    }
                    
                    while( $data=mysqli_fetch_array($result, MYSQLI_ASSOC) ){
                    echo
                    '<tr>
                    <td>'.$data["name"].'</td>
                    <td>'.$data["email"].'</td> 
                    <td>'.$data["college_name"].'</td>
                    <td>'.$data["phno"].'</td>
                    <td>'.$data["res_addr"].'</td>
                    <td>'.$data["prof_addr"].'</td>
                    <td>'.$data["beneficiary"].'</td>
                    <td>'.$data["bank"].'</td> 
                    <td>'.$data["branch"].'</td> 
                    <td>'.$data["ifsc"].'</td> 
                    <td>'.$data["acc_no"].'</td> 
                    <td>'.$data["academic_year"].'</td>
                    <td>'.$data["scheme"].'</td> 
                    <td>'.$data["semester"].'</td> 
                    <td>'.$data["subject"].'</td>
                    <td>'.$data["exam"].'</td> 
                    <td>'.$data["particular"].'</td> 
                    <td>'.$data["max_marks"].'</td>  
                    <td>'.$data["no_of_students"].'</td>
                    <td>'.$data["no_of_days"].'</td>
                    <td>'.$data["total"].'</td>   

                    </tr>';
                
            }
                
            ?>
                </tbody>

            </table>
            
            <div>
                <!-- <button id="btn_print" type="button" onclick="printPage()">
                    <span id="button__text">Print Page</span>
                    <span id="button__icon"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-printer" viewBox="0 0 16 16">
                        <path d="M2.5 8a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1"/>
                        <path d="M5 1a2 2 0 0 0-2 2v2H2a2 2 0 0 0-2 2v3a2 2 0 0 0 2 2h1v1a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2v-1h1a2 2 0 0 0 2-2V7a2 2 0 0 0-2-2h-1V3a2 2 0 0 0-2-2zM4 3a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1v2H4zm1 5a2 2 0 0 0-2 2v1H2a1 1 0 0 1-1-1V7a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1h-1v-1a2 2 0 0 0-2-2zm7 2v3a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1v-3a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1"/>
                        </svg>
                    </span>
                </button>
                <br><br> -->
                
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
    <!-- <script>
            function printPage() {
                var printButton = document.getElementById("btn_print"); 
                var exportButton = document.getElementById("btnExport"); 
                printButton.style.visibility = 'hidden';
                exportButton.style.visibility = 'hidden';
                window.print();
                printButton.style.visibility = 'visible';
                exportButton.style.visibility = 'visible';
            }
        </script> -->
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