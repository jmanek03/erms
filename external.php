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

            <nav class="navbar navbar-expand-lg navbar-light bg-light mx-2">
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
            <div class="container">
                <form class="form" action="https://api.sheetmonkey.io/form/cJUsyK58LBpEB8cHgDou7i" method="post" name="remuneration-form">
                    <label for="Remuneration">Name of External Examiner:</label><br>
                    <input type="ext_name" name="NAME" id="ext_name" >
                    <br><hr>
                    <label for="Remuneration">College:</label><label for="Remuneration" style="margin-left: 350px;">Phone number:</label><br>
                    <input type="ext_clg" name="COLLEGE" id="ext_clg" >
                    <input type="phno" name="PHONE NUMBER" id="phno" style="margin-left: 83px;" maxlength="10" >
                    <br><hr>
                    <label for="Remuneration">Address (Residential):</label><br>
                    <input type="resadd" name="ADDRESS(RESIDENTIAL)" id="resadd">
                    <br><hr>
                    <label for="Remuneration">Address (Professional):</label><br>
                    <input type="profadd" name="ADDRESS(PROFESSIONAL)" id="profadd">
                    <br><hr>
                    <label for="Remuneration">Benefeciary Name:</label><br>
                    <input type="name" name="BENEFICIARY NAME" id="bname">
                    <br><hr>
                    <label for="Remuneration">Bank Name:</label><label style="margin-left:325px"for="Remuneration">Branch Address:</label><br>
                    <input type="name" name="BANK" id="bank">
                    <input type="name" name="BRANCH" id="branch" style="margin-left:100px">
                    <br><hr>
                    <label for="Remuneration">IFSC Code:</label><br>
                        <div id="inputs" class="inputs" >
                            <input class="input" type="text" inputmode="numeric" maxlength="1" name="IFSC CODE">
                            <input class="input" type="text" inputmode="numeric" maxlength="1" name="IFSC CODE">
                            <input class="input" type="text" inputmode="numeric" maxlength="1" name="IFSC CODE">
                            <input class="input" type="text" inputmode="numeric" maxlength="1" name="IFSC CODE">
                            <input class="input" type="text" inputmode="numeric" maxlength="1" name="IFSC CODE">
                            <input class="input" type="text" inputmode="numeric" maxlength="1" name="IFSC CODE">
                            <input class="input" type="text" inputmode="numeric" maxlength="1" name="IFSC CODE">
                            <input class="input" type="text" inputmode="numeric" maxlength="1" name="IFSC CODE">
                            <input class="input" type="text" inputmode="numeric" maxlength="1" name="IFSC CODE">
                            <input class="input" type="text" inputmode="numeric" maxlength="1" name="IFSC CODE">
                            <input class="input" type="text" inputmode="numeric" maxlength="1" name="IFSC CODE"/>    
                        </div><br><hr>
                    <label for="Remuneration">Account Number:</label><br>
                    <div id="inputs" class="inputs" name="ACCOUNT NUMBER">
                        <input class="acc_no" type="text" inputmode="numeric" maxlength="1" name="ACCOUNT NUMBER"/>
                        <input class="acc_no" type="text" inputmode="numeric" maxlength="1" name="ACCOUNT NUMBER"/>
                        <input class="acc_no" type="text" inputmode="numeric" maxlength="1" name="ACCOUNT NUMBER"/>
                        <input class="acc_no" type="text" inputmode="numeric" maxlength="1" name="ACCOUNT NUMBER"/>
                        <input class="acc_no" type="text" inputmode="numeric" maxlength="1" name="ACCOUNT NUMBER"/>
                        <input class="acc_no" type="text" inputmode="numeric" maxlength="1" name="ACCOUNT NUMBER"/>
                        <input class="acc_no" type="text" inputmode="numeric" maxlength="1" name="ACCOUNT NUMBER"/>
                        <input class="acc_no" type="text" inputmode="numeric" maxlength="1" name="ACCOUNT NUMBER"/>
                        <input class="acc_no" type="text" inputmode="numeric" maxlength="1" name="ACCOUNT NUMBER"/>
                        <input class="acc_no" type="text" inputmode="numeric" maxlength="1" name="ACCOUNT NUMBER"/>
                        <input class="acc_no" type="text" inputmode="numeric" maxlength="1" name="ACCOUNT NUMBER"/>
                        <input class="acc_no" type="text" inputmode="numeric" maxlength="1" name="ACCOUNT NUMBER"/>
                        <input class="acc_no" type="text" inputmode="numeric" maxlength="1" name="ACCOUNT NUMBER"/>
                        <input class="acc_no" type="text" inputmode="numeric" maxlength="1" name="ACCOUNT NUMBER"/>
                        <input class="acc_no" type="text" inputmode="numeric" maxlength="1" name="ACCOUNT NUMBER"/>
                        <input class="acc_no" type="text" inputmode="numeric" maxlength="1" name="ACCOUNT NUMBER"/>    
                    </div>
                    <br><hr>
                    <label for="Remuneration">Academic Year:</label><label for="Remuneration" style="margin-left: 300px;">Scheme:</label><br>
                    <input type="year" name="AY" id="date" required>
                    <select id="scheme" name="SCHEME"required style="margin-left: 100px;">
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
                    <select name="BATCH" id="batch" style="margin-left: 100px;" required>
                        <option value=""></option>
                    </select>
                    <br><hr>
                    <label for="Remuneration">Exam:</label><label for="Remuneration" style="margin-left: 370px;">Choose a Particular:</label><br>
                    <select name="EXAM" id="exam" required onchange="select(this.id,'particulars')">
                        <option value="">--Select--</option>
                        <option value="Regular">Regular</option>
                        <option value="KT">KT</option>
                        
                    </select>
                    <select id="particulars" name="PARTICULARS" style="margin-left: 100px;">
                        <option value="">--Choose a Particular--</option>
                        <option value=""></option>
                    </select>
                    <br><hr>
                    <label for="Remuneration">Maximum Marks:</label><br>
                    <input type="marks" name="MARKS" id="max-marks" required>
                    <br><hr style="width: 640px; color: rgb(0, 0, 0);">
                    <label for="Remuneration">Number of Students:</label><br>
                    <input type="students" name="NO. OF STUDENTS" id="noofstudents" oninput="calculateAllowance()" required>
                    <br><hr>
                    <label for="Remuneration">Rs. Per Student:</label><br>
                    <input type="rs" name="RS. PER STUDENT" id="rsperstudent" oninput="calculateAllowance()" required>
                    <br><hr>
                    <label for="Remuneration">Amount:</label><br>
                    <input type="amount" name="AMOUNT" id="amount" required>
                    <br><hr>
                    <label for="Remuneration">No. of Days:</label><br>
                    <input type="days" name="NO. OF DAYS" id="noofdays" oninput="calculateAllowance()" required>
                    <br><hr>
                    <label for="Remuneration">Travelling Allowance /day:</label><br>
                    <input type="rs" name="TRAVELLING ALLOWANCE /DAY" id="travellingallowanceperday" oninput="calculateAllowance()" required>
                    <br><hr>
                    <label for="Remuneration">Travelling Allowance:</label><br>
                    <input type="rs" name="TRAVELLING ALLOWANCE" id="travellingallowance" required>
                    <br><hr>
                    <label for="Remuneration">Total:</label><br>
                    <input type="total" name="TOTAL" id="total" required>
                    
                    <input type="submit" id="submit"><br>
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