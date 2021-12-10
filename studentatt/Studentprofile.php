<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="https://apps.strathmore.edu/attachment/img/favicon.png">
    <meta name="csrf-token" content="GW34n6FZGBpccwXG92E55YuleFVqKgdO7bhLxJJu">

    <title>Attachment</title>
    <link href="https://apps.strathmore.edu/attachment/DataTables/datatables.min.css" rel="stylesheet">
    <link href="https://apps.strathmore.edu/attachment/select2/css/select2.min.css" rel="stylesheet">
    <link href="https://apps.strathmore.edu/attachment/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://apps.strathmore.edu/attachment/css/simple-line-icons.css" rel="stylesheet">
    <link href="https://apps.strathmore.edu/attachment/css/style.css" rel="stylesheet">
    <link href="https://apps.strathmore.edu/attachment/daterangepicker/daterangepicker.css" rel="stylesheet">
    <link rel="stylesheet" href="https://apps.strathmore.edu/attachment/css/custom.css">
    </head>

<body class="app header-fixed sidebar-fixed aside-menu-fixed aside-menu-hidden">
    <header class="app-header navbar">
        <button class="navbar-toggler mobile-sidebar-toggler d-lg-none mr-auto" type="button">
                    <span class="navbar-toggler-icon"></span>
                </button>
        <a class="navbar-brand" href="#"></a>
        <button class="navbar-toggler sidebar-toggler d-md-down-none" type="button">
                    <span class="navbar-toggler-icon"></span>
                </button>

        <ul class="nav navbar-nav d-md-down-none">
            <li class="nav-item px-3">
                <a class="nav-link" href="https://apps.strathmore.edu/attachment/dashboard">Dashboard</a>
            </li>
        </ul>
        <span class="navbar-text ml-auto">
                    <strong>John, Doe David</strong>
                    <!--The name displayed here should correspong with the user who logs in,basically retriving data from database-->
                </span>
        <ul class="nav navbar-nav ml-auto">
            <li class="nav-item d-md-down-none">
                <a class="nav-link" href="https://apps.strathmore.edu/attachment/dashboard"><i class="icon-user"></i> John</a>
            </li>
            <li class="nav-item d-md-down-none">
                <button data-toggle="modal" data-target="#modal-logout" class="btn btn-link"><span class="fa fa-sign-out"></span>Logout </button>                
            </li>
        </ul>
    </header>


    <div class="app-body" id="app">
        <div class="modal fade" id="modal-logout" tabindex="-1" role="dialog" aria-labelledby="Logout" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                        <div class="modal-header">
                            <p class="modal-title">Confirm System Logout</p>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                        </div>
                        <!--LOGOUT FORM-->
                    <div class="modal-body">
                        <p>This will log you out and clear all your sessions. Do you wan to proceed?</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                         <form action="https://apps.strathmore.edu/attachment/logout" method="POST">
                             <input type="hidden" name="_token" value="GW34n6FZGBpccwXG92E55YuleFVqKgdO7bhLxJJu">                         <button type="submit" class="btn btn-danger">Yes, Log me out</button>
                        </form>
                        
                    </div>
                </div>
            </div>            
        </div>

        <div class="sidebar">
            <nav class="sidebar-nav">
                <ul class="nav">
                    <li class="nav-item">
                        <a class="nav-link" href="https://apps.strathmore.edu/attachment/dashboard"><i class="icon-graph"></i> Dashboard </a>
                    </li>

                                        <li class="nav-title">Student Menu</li>
                    <li class="nav-item">
                        <a class="nav-link" href="https://apps.strathmore.edu/attachment/student-profile"><i class="icon-list"></i> Profile </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="https://apps.strathmore.edu/attachment/attachments"><i class="icon-list"></i> My Attachments </a>
                    </li>
                       
                    

                                                         </ul>
            </nav>
            <button class="sidebar-minimizer brand-minimizer" type="button"></button>
        </div>
        <main class="main">
              
        </main>
    </div>
    <footer class="app-footer">
        <span>&copy; <a href="http://strathmore.edu" target="_blank">Strathmore University</a> 2021.</span>
    </footer>
    <script src="https://apps.strathmore.edu/attachment/js/app.js"></script>
    
    <script src="https://apps.strathmore.edu/attachment/js/vendor/popper.min.js"></script>
    <script src="https://apps.strathmore.edu/attachment/js/vendor/bootstrap.min.js"></script>
    <script src="https://apps.strathmore.edu/attachment/js/vendor/pace.min.js"></script>
    <script src="https://apps.strathmore.edu/attachment/js/vendor/Chart.min.js"></script>
    <script src="https://apps.strathmore.edu/attachment/DataTables/datatables.min.js"></script>
    <script src="https://apps.strathmore.edu/attachment/select2/js/select2.min.js"></script>
    <script src="https://apps.strathmore.edu/attachment/js/vendor/jquery.easy-autocomplete.js"></script>
    <script src="https://apps.strathmore.edu/attachment/daterangepicker/moment.js"></script>
    <script src="https://apps.strathmore.edu/attachment/daterangepicker/daterangepicker.js"></script>
    <script src="https://apps.strathmore.edu/attachment/js/custom.js"></script>
    </body>

</html>