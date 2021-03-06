<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4-4.1.1/dt-1.10.21/sp-1.1.0/datatables.min.css" />

    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/v/bs4-4.1.1/dt-1.10.21/sp-1.1.0/datatables.min.js"></script>
    <!--<script src="../includes/AdminTables.js"></script> -->
    <link href="./star-rating.css" media="all" rel="stylesheet" type="text/css" />
    <script src="./star-rating.js" type="text/javascript"></script>

    <style>
        .back-to-top {
            cursor: pointer;
            position: fixed;
            bottom: 20px;
            right: 20px;
            display: none;
        }

        html,
        body {
            background-image: url("../../../public/resources/back2.jpg");
            height: 100%;
        }

        .dataTables_wrapper .dataTables_filter {
            float: right;
            text-align: right;
            visibility: hidden;
        }

        h2 {
            color: rgb(248, 245, 245);
            background-color: rgb(91, 92, 91);
        }

        #side_links {
            background-color: rgb(91, 92, 91);
            color: wheat;
        }

        .sidebar {
            position: -webkit-sticky;
            position: sticky;
            top: 0;
        }
    </style>

</head>

<body style="background-color:rgba(255, 255, 255, 0) ">
    <header>
        <nav class="navbar sticky-top navbar-expand-lg navbar navbar-dark bg-dark">
            <a class="navbar-brand" href="#">Content-Rating-System</a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto ml-auto">
                    <li class="nav-item ml-auto mx-sm-5">
                        <form class="form-inline my-1 my-lg-0">
                            <input id="search" class="form-control mr-sm-3" type="search" placeholder="Search" aria-label="Search">

                        </form>
                    </li>
                </ul>
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item text-white pt-1 mr-2">
                        <h4><?php echo $_SESSION["id"]; ?></h4>
                    </li>
                    <li class="nav-item active">
                        <a class="btn btn-primary mr-3" href="../LoginController/logout">Logout<span class="sr-only">(current)</span></a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>


    <div class="h-100">
        <div class="row h-100">
            <div class="row h-100 ml-3 mr-2 col-md-2  mt-0" id="sidebar" style="background-color: rgba(128, 240, 147, 0)  ;">
                <div class="col " align="center">
                    <a name="watch_list" href="../../UserController/index" id="side_links" class="m-3 mt-5  p-2 btn btn-block btn-light">Home</a><br>

                    <a name="watch_list" id="side_links" class="m-3  p-2 btn btn-block btn-light">Watch list
                    </a><br>
                    <a name="profile" id="side_links" class="m-3 p-2 btn btn-block btn-light">Profile</a><br>
                </div>
            </div>
            <div class="col-md-8 overflow-auto" style="height: 100%;">
                <div class="w-100 h-100">
                    <div class="row">
                        <div class="col-xs-auto">
                            <img class="mt-5 p-2" src="https://i.pinimg.com/originals/ab/2f/a2/ab2fa2a5256097eb9cab5c6c9025215e.jpg" alt="" height="300px" width="200px">
                        </div>

                        <div class="col-xl-auto">
                            <div class="">
                                <h1 class="display">TODO: Movie Name</h1>
                                <h3 class="display float-right">TODO: Rating</h3>
                                <div class="row ml-2">
                                    <h6>TODO: Duration</h6>
                                    <h6>TODO: Category</h6>
                                    <h6>TODO: Release Date</h6>
                                </div>
                                <iframe width="560" height="315" src="https://www.youtube.com/embed/hA6hldpSTF8?autoplay=1" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

                                <div>
                                    <div class="container">
                                        Rating: https://codepen.io/alisuarez/pen/RWGNLm
                                    </div>

                                    <div class="row p-3">
                                        <h6 class="mr-2">Comment: </h6>
                                        <textarea name="" id="" cols="40" rows="2"></textarea>
                                    </div>

                                    <div class="row p-3">
                                        <h6 class="mr-2">Previous Comments: </h6>
                                    </div>


                                </div>
                            </div>
                        </div>

                    </div>



                </div>


            </div>

        </div>
    </div>

    </div>

</body>

<script>
    $("#input-").rating();
</script>

</html>