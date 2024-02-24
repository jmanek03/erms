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
                <form class="form" action="https://api.sheetmonkey.io/form/sfAqfqFqhzDDMEK39TpVcj" method="post" name="remuneration-form">
                    <input type="hidden" name="CREATED" value="x-sheetmonkey-current-date-time" />
                    <label for="Remuneration">Date of Exam:</label><label for="Remuneration" style="margin-left: 200px;">Date of Preparation:</label><br>
                    <input type="date" name="DATE OF EXAM" id="edate" required>
                    <input type="date" name="DATE OF PREPARATION" id="pdate" required style="margin-left: 125px;"><br><hr style="width: 640px; color: black;">
                    <label for="Remuneration">Number of Days:</label><br>
                    <input type="days" name="NUMBER OF DAYS" id="no-of-days" required>
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
                    <input type="students" name="NO. OF STUDENTS" id="noofstudents" oninput="calculateTotal()" required>
                    <br><hr>
                    <label for="Remuneration">Rs. Per Student:</label><br>
                    <input type="rs" name="RS. PER STUDENT" id="rsperstudent" oninput="calculateTotal()" required>
                    <br><hr>
                    <label for="Remuneration">TOTAL:</label><br>
                    <input type="number" name="TOTAL" id="total" required>
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