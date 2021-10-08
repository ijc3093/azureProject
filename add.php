<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Museai RIT</title>

    <!-- Bootstrap core CSS -->
    <link href="../../../../dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <!-- Custom styles for this template -->
    <link href="style.css" rel="stylesheet">
  </head>

  <body>
    <nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0">
      <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">Museai RIT</a>
      <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">
      <ul class="navbar-nav px-3">
        <li class="nav-item text-nowrap">
          <a class="nav-link" href="#">Sign out</a>
        </li>
      </ul>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <nav class="col-md-2 d-none d-md-block bg-light sidebar">
          <div class="sidebar-sticky">
            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link active" href="#">
                <span data-feather="layers"></span>
                  Dashboard <span class="sr-only">(current)</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                <span data-feather="layers"></span>
                  National Technical Institute for the Deaf
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                <span data-feather="layers"></span>
                  Golisano College of Computing and Information Sciences
                </a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="#">
                <span data-feather="layers"></span>
                 Student Alumni Union
                </a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="#">
                <span data-feather="layers"></span>
                  College of Liberal Arts
                </a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="#">
                <span data-feather="layers"></span>
                  College of Liberal Arts
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                <span data-feather="layers"></span>
                  College of Art and Design
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="layers"></span>
                  Saunders College of Business
                </a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="layers"></span>
                  College of Engineering Technology
                </a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="layers"></span>
                  School of Individualized Study
                </a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="layers"></span>
                  Kate Gleason College of Engineering
                </a>
              </li>
            </ul>

            <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
              <span>Saved reports</span>
              <a class="d-flex align-items-center text-muted" href="#">
                <span data-feather="plus-circle"></span>
              </a>
            </h6>
            <ul class="nav flex-column mb-2">
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="file-text"></span>
                  Current month
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="file-text"></span>
                  Last quarter
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="file-text"></span>
                  Social engagement
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="file-text"></span>
                  Year-end post
                </a>
              </li>
            </ul>
          </div>
        </nav>

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
            <h1 class="h2">Dashboard</h1>
            <div class="btn-toolbar mb-2 mb-md-0">
              <div class="btn-group mr-2">
                <button class="btn btn-sm btn-outline-secondary">Add</button>
                <button class="btn btn-sm btn-outline-secondary">Share</button>
                <button class="btn btn-sm btn-outline-secondary">Export</button>
              </div>
              <button class="btn btn-sm btn-outline-secondary dropdown-toggle">
                <span data-feather="calendar"></span>
                This week
              </button>
            </div>
          </div>


            <form method="post" action="?action=add" enctype="multipart/form-data" >  
            Emp Id <input type="text" name="t_emp_id" id="t_emp_id"/></br>  
            Name <input type="text" name="t_name" id="t_name"/></br>  
            Education <input type="text" name="t_education" id="t_education"/></br>  
            E-mail address <input type="text" name="t_email" id="t_email"/></br>  
            <input type="submit" name="submit" value="Submit" />  
            </form>  
            <?php 

            // This is for connecting SQL SERVER Management Studio from PHP
            $serverName = "tcp:servermuseai.database.windows.net,1433"; //serverName\instanceName
            //Since UID PWD are not specified in the $connectionInfo array,
            //The connection will attempted using Windows Authentication.
            $connectionOptions = array(
                "Database" => "museaiDB",
                "Uid" => "admintest",
                "PWD" => "Merciful#100"
            );

            $conn = sqlsrv_connect($serverName, $connectionOptions);
            if($conn){
                echo "Connection established. <br/>";
            }else{
                echo "Connection could not be established. <br/>";
                die(print_r(sqlsrv_errors(), true));
            }
            $conn = sqlsrv_connect($serverName, $connectionOptions);


            if ($conn === false)  
                {  
                die(print_r(sqlsrv_errors() , true));  
                }  
                if (isset($_GET['action']))  
                {  
                if ($_GET['action'] == 'add')  
                    {  
                    /*Insert data.*/  
                    $insertSql = "INSERT INTO museai.emp2 (emp_id,name,education,email)   
            VALUES (?,?,?,?)";  
                    $params = array(&$_POST['t_emp_id'], &$_POST['t_name'], &$_POST['t_education'], &$_POST['t_email']  
                    );  
                    $stmt = sqlsrv_query($conn, $insertSql, $params);  
                    if ($stmt === false)  
                        {  
                        /*Handle the case of a duplicte e-mail address.*/  
                        $errors = sqlsrv_errors();  
                        if ($errors[0]['code'] == 2601)  
                            {  
                            echo "The e-mail address you entered has already been used.</br>";  
                            }  
            
                        /*Die if other errors occurred.*/  
                        else  
                            {  
                            die(print_r($errors, true));  
                            }  
                        }  
                    else  
                        {  
                        echo "Registration complete.</br>";  
                        }  
                    }  
                } 
            ?>
        </main>
      </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../../../../assets/js/vendor/popper.min.js"></script>
    <script src="../../../../dist/js/bootstrap.min.js"></script>

    <!-- Icons -->
    <script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
    <script>
      feather.replace()
    </script>

    <!-- Graphs -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js"></script>
    <script>
      var ctx = document.getElementById("myChart");
      var myChart = new Chart(ctx, {
        type: 'line',
        data: {
          labels: ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"],
          datasets: [{
            data: [15339, 21345, 18483, 24003, 23489, 24092, 12034],
            lineTension: 0,
            backgroundColor: 'transparent',
            borderColor: '#007bff',
            borderWidth: 4,
            pointBackgroundColor: '#007bff'
          }]
        },
        options: {
          scales: {
            yAxes: [{
              ticks: {
                beginAtZero: false
              }
            }]
          },
          legend: {
            display: false,
          }
        }
      });
    </script>
  </body>
</html>