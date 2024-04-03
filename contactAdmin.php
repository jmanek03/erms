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
                    <a href="adminDashboard.php">Home</a>
                </li>
                <li>
                    <a href="aboutAdmin.php">About</a>
                    <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Remuneration</a>
                    <ul class="collapse list-unstyled" id="pageSubmenu">
                    <a href="#ISSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">In-Sem</a>
                    <ul class="collapse list-unstyled" id="ISSubmenu">    
                    <a href="#facultySubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Faculty</a>
                        <ul class="collapse list-unstyled" id="facultySubmenu">
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
            <div class="home">
                <h1>Contact</h1>
            </div>
            <div class="card-deck">
                <div class="card">
                    <h4 class="card-title text-center">GUIDED BY</h4>
                    <img class="card-img-top" src="..." alt="Card image">
                    <div class="card-body">
                        <a href="mailto:jayashreek@somaiya.edu "><img src="email_black_24dp.svg"> jayashreek@somaiya.edu</a>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">DR. JAYASHREE KHANAPURI</small>
                    </div>
                </div>
                <div class="card">
                    <h4 class="card-title text-center">DEVELOPED BY</h4>
                    <div class="text-center">
                        <img class="card-img-top rounded-circle mb-3" style="width:170px;height:200px;" src=".." alt="Card image">
                    </div>
                    <div class="card-body">
                        <p class="text-muted">Front-End Developer <span class="badge badge-dark">INTERMEDIATE</span></p>
                        <a href="mailto:j.manek@somaiya.edu "><img src="email_black_24dp.svg"> j.manek@somaiya.edu</a><br><br>
                        <a href="https://www.linkedin.com/in/jay-manek-840b15228/"><img src="linkedin.svg"> Jay Manek</a>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">JAY BHAVESH MANEK</small>
                    </div>
                </div>
                <div class="card">
                    <h4 class="card-title text-center">DEVELOPED BY</h4>
                    <div class="text-center">
                        <img class="card-img-top rounded-circle mb-3" style="width:170px;height:200px;" src="..." alt="Card image">
                    </div>
                    <div class="card-body">
                        <p class="text-muted">Back-End Developer <span class="badge badge-dark">INTERMEDIATE</span></p>
                        <a href="mailto:arrya.bhaik@somaiya.edu "><img src="email_black_24dp.svg"> arrya.bhaik@somaiya.edu</a><br><br>
                        <a href="https://www.linkedin.com/in/arrya-bhaik-283518258/"><img src="linkedin.svg"> Arrya Bhaik</a>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">ARRYA RAKESH BHAIK</small>
                    </div>
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