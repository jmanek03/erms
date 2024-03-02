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
                    <a href="userDashboard.php">Home</a>
                </li>
                <li>
                    <a href="aboutUser.php">About</a>
                    <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Remuneration</a>
                    <ul class="collapse list-unstyled" id="pageSubmenu">
                        
                        <a href="#teacherSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Teachers</a>
                        <ul class="collapse list-unstyled" id="teacherSubmenu">
                            <li>
                              <a href="externalInfo.php">External</a>
                            </li>
                            <li>
                              <a href="internalInfo.php">Internal</a>
                            </li>
                        </ul>
                        <li>
                            <a href="staffInfo.php">Staff</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="contactUser.php">Contact</a>
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
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="https://kjsit.somaiya.edu.in/assets/kjsieit/images/infra/blg.jpg" alt="First slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="https://kjsit.somaiya.edu.in/assets/kjsieit/images/infra/two.jpg" alt="Second slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="https://www.somaiya.edu/upload_file/images20/images/New%20Project%20(60).jpg" alt="Third slide">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
            <div class="description-container">
            <p>This second Engineering College established by the Somaiya Trust in the year 2001, at Ayurvihar campus, Sion, was initiated with a first batch of 180 undergraduate students and three branches in Engineering—namely Electronics and Telecommunication Engineering, Computer Engineering, and Information Technology.</p>

            <p>Subsequently, The Electronics Department was founded in the year 2004 and since then the Institute has strived towards providing the necessary dynamism to all its stakeholders in the light of expanding knowledge and changing socio-economic requirements of the modern society.</p>
                    
            <p>KJSIT is recognized by the All India Council for Technical Education (AICTE) & the Govt. of Maharashtra with a permanent affiliation to the University of Mumbai (UOM). It is accredited with “A” Grade and 3.21 CGPA in its 1 st cycle for 5 years duration by National Assessment and Accreditation Council (NAAC) and it’s three programs - Computer Engineering, Electronics and Telecommunication Engineering and Electronics Engineering - are accredited by National Board of Accreditation.</p>
                    
            <p>Moreover, KJSIT has introduced a Post Graduate engineering program in Artificial Intelligence from the Academic Year 2019-20.
                    
            Additionally, an undergraduate engineering program - Artificial Intelligence and Data Science - has been offered by KJSIT from the academic year 2020-21 with the intake capacity of 60 seats leading the total intake increased to 360. KJSIT is constantly identifying and developing latest and nascent technologies such as Artificial Intelligence, Machine Learning, Deep Learning and Block Chain Technology, etc. for enhancing student learning and growth.
            </p>
                    <a href="https://kjsit.somaiya.edu.in/" style="color: blue;"> KJ Somaiya Institute Of Technology</a>
            </div>
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