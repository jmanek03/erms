<?php 
    session_start();
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
    <link rel="stylesheet" href="teacher.css">

    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>

</head>

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
                </li>
                <li>
                <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Remuneration</a>
                    <ul class="collapse list-unstyled" id="pageSubmenu">

                        <a href="#teacherSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Faculty</a>
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
                    <button class="no-print btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
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
                <h1>External Remuneration</h1>
            </div>
            <h1 class="h-scroll-tables">EXTERNAL REMUNERATION</h1>
            <table class="h-scroll-tables">
                <thead>
                    <tr class="header">
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
            </div>
        </div>
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