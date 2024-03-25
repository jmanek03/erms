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
            <div class="home">
                <h1>About</h1>
            </div>
            <div class="description-container">
                <div class="dept_info">
                    <h2>Department of Electronics and Telecommunication Engineering</h2>
                    <ul class="new">
                        <li>The Department of Electronics and Telecommunication Engineering has a rich history of academic excellence and research contributions. 
                            Over the years, we have consistently adapted to technological advancements and industry demands, ensuring that our students receive a cutting-edge education.
                            The department is at the forefront of cutting-edge research. 
                            Our faculty and students are actively involved in pioneering projects that address real-world challenges and drive innovation in fields like wireless communication, embedded systems, and IoT.
                        </li>
                    </ul>
                    <h3>Strengths of the department include:</h3>
                    <ul class='new'>
                        <li>State-of-the-art infrastructure</li>
                        <li>Dynamic and dedicated faculty and staff members aligned with institutional goals</li>
                        <li>Focus on creation of engineers as leaders in the society</li>
                        <li>Myriad activities like student competitions, training programs, expert lectures, think-pair-share learning, cultural festivals, and more</li>
                        <li>Association with professional bodies IEEE, IETE, IET and CSI</li>
                    </ul>
                </div>
                <div class="dept_vision">
                    <h3>Vision of the department:</h3>
                    <ul class="new">
                        <li>To be recognised as a department of excellence that produces committed, responsible and skilled telecommunication engineers.</li>
                    </ul>
                    <h3>Mission of the department:</h3>
                    <ul class='new'>
                        <li>To offer quality training in Electronics and Telecommunication Engineering to groom students into successful professionals.</li>
                        <li>To instill the skills that enable students to design and implement the technical solution.</li>
                        <li>To inculcate ethical behaviour, soft skills and teamwork in students.</li>
                    </ul>
                </div>
                <div class="PO">
                    <h3>Program Educational Objectives(PEOs):</h3>
                    <ul class='new'>
                        <li>Analysing and applying engineering knowledge for solving engineering problems.</li>
                        <li>Demonstrating professional and ethical practices in the area of academia, research, career and entrepreneurship.</li>
                        <li>Applying the knowledge of engineering to solve societal and environmental problems as an individual or in a team.</li>
                        <li>Demonstrating effective oral and written communication skills and excellence in management and leadership.</li>                        
                    </ul>
                    <h3>Program Specific Outcomes(PSOs):</h3>
                    <ul class='new'>
                        <li>Design cost effective solutions using VLSI/ Embedded technologies for societal use.</li>
                        <li>Apply specific tools for design and development of RF communication systems.</li>
                        <li>Design and develop optimized hardware and software solutions for signal processing applications.</li>
                    </ul>
                </div>
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