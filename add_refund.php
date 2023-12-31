<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" />
    <link rel="stylesheet" href="css/dataTables.bootstrap5.min.css" />
    <link rel="stylesheet" href="css/style.css" />
    <title> Bootstrap 5 Admin Dashboard Template</title>
</head>

<body>
    <!-- top navigation bar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-info fixed-top">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#sidebar" aria-controls="offcanvasExample">
        <span class="navbar-toggler-icon" data-bs-target="#sidebar"></span>
      </button>
            <a class="navbar-brand me-auto ms-lg-0 ms-3 text-uppercase fw-bold" href="#">Bus management</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#topNavBar" aria-controls="topNavBar" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
            <div class="collapse navbar-collapse" id="topNavBar">
                <form class="d-flex ms-auto my-3 my-lg-0">
                    <div class="input-group">
                        <input class="form-control " type="search" placeholder="Search" aria-label="Search" />
                        <button class="btn btn-primary me-4" type="submit">
              <i class="bi bi-search search"></i>
            </button>
                    </div>
                </form>
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle ms-2" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="bi bi-person-fill"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- top navigation bar -->
    <!-- offcanvas -->
    <div class="offcanvas offcanvas-start sidebar-nav bg-light text-dark " id="sidebar">
        <div class="offcanvas-body p-0 flex-grow-0 ">
            <center>

                <a class="btn btn-dark w-100  text-light" href="dashboard.php" role="button" aria-expanded="false" aria-controls="collapseExample">Dashboard</a>
            </center>
        

        <!-----------Bus start--------------->
        <center><a class="btn btn-primary p-1 m-1 " data-bs-toggle="collapse" href="#busId" role="button" aria-expanded="false" aria-controls="collapseExample" style="width:90% ;">Bus</a></center>

        <div class="collapse" id="busId">
            <div class="bg-light text-dark p-1 m-1">
                <a class="dropdown-item text-start" href="bus_list.php" style="background-color: ivory ;" onmouseover="this.style.color='#00FF00	'" onmouseout="this.style.color='#000'">BUS LIST</a>
                <a class=" dropdown-item text-start " href="add_bus.php" style="background-color: ivory ;" onmouseover="this.style.color='#00FF00	'" onmouseout="this.style.color='#000'">Add Bus</a>
                <a class="dropdown-item text-start " href="update_bus.php" style="background-color: ivory ;" onmouseover="this.style.color='#00FF00	'" onmouseout="this.style.color='#000'">Update Bus Info</a>
            </div>


        </div>
        <!-----------Bus End--------------->

        <!-----------Route Start--------------->
        <center>
            <a class="btn btn-primary p-1 m-1 " data-bs-toggle="collapse" href="#routeId" role="button" aria-expanded="false" aria-controls="collapseExample" style="width:90% ;">Route line</a>
        </center>

        <div class="collapse" id="routeId">
            <div class="card card-body bg-light text-dark p-1 m-1">
                <a class="dropdown-item text-start" href="route_list.php" style="background-color: ivory ;" onmouseover="this.style.color='#00FF00	'" onmouseout="this.style.color='#000'">Route LIST</a>
                <a class=" dropdown-item text-start " href="add_route.php" style="background-color: ivory ;" onmouseover="this.style.color='#00FF00	'" onmouseout="this.style.color='#000'">Add Route</a>
                <a class="dropdown-item text-start " href="update_route.php" style="background-color: ivory ;" onmouseover="this.style.color='#00FF00'" onmouseout="this.style.color='#000'">Update Route</a>
            </div>
        </div>
        <!-----------route End--------------->
        <!-----------Booking Start--------------->
        <center>
            <a class="btn btn-primary p-1 m-1 " data-bs-toggle="collapse" href="#bookingId" role="button" aria-expanded="false" aria-controls="collapseExample" style="width:90% ;">Booking System</a>
        </center>

        <div class="collapse" id="bookingId">
            <div class="bg-light text-dark p-1 m-1">
                <a class="dropdown-item text-start" href="booking_list.php" style="background-color: ivory ;" onmouseover="this.style.color='#00FF00	'" onmouseout="this.style.color='#000'">Booking LIST</a>
                <a class=" dropdown-item text-start " href="add_booking.php" style="background-color: ivory ;" onmouseover="this.style.color='#00FF00	'" onmouseout="this.style.color='#000'">Add Booking</a>
                <a class="dropdown-item text-start " href="update_booking.php" style="background-color: ivory ;" onmouseover="this.style.color='#00FF00	'" onmouseout="this.style.color='#000'">Update Booking Info</a>
            </div>
        </div>
        <!-----------Booking End--------------->
        <!-----------user Start--------------->
        <center>
            <a class="btn btn-primary p-1 m-1 " data-bs-toggle="collapse" href="#userId" role="button" aria-expanded="false" aria-controls="collapseExample" style="width:90% ;">User</a>
        </center>

        <div class="collapse" id="userId">
            <div class="bg-light text-dark p-1 m-1">
                <a class="dropdown-item text-start" href="agent_list.php" style="background-color: ivory ;" onmouseover="this.style.color='#00FF00'" onmouseout="this.style.color='#000'">Agent LIST</a>
                <a class=" dropdown-item text-start " href="add_agent.php" style="background-color: ivory ;" onmouseover="this.style.color='#00FF00	'" onmouseout="this.style.color='#000'">Add Agent</a>
                <a class="dropdown-item text-start " href="update_agent.php" style="background-color: ivory ;" onmouseover="this.style.color='#00FF00'" onmouseout="this.style.color='#000'">Update Agent Info</a>
            </div>
        </div>
        <!-----------User End--------------->
        <!-----------refund Start--------------->
        <center>
            <a class="btn btn-primary p-1 m-1 " data-bs-toggle="collapse" href="#refundId" role="button" aria-expanded="false" aria-controls="collapseExample" style="width:90% ;">Refund</a>
        </center>

        <div class="collapse" id="refundId">
            <div class="bg-light text-dark p-1 m-1">
                <a class="dropdown-item text-start" href="refund_list.php" style="background-color: ivory ;" onmouseover="this.style.color='#00FF00	'" onmouseout="this.style.color='#000'">BUS LIST</a>
                <a class=" dropdown-item text-start " href="add_refund.php" style="background-color: ivory ;" onmouseover="this.style.color='#00FF00'" onmouseout="this.style.color='#000'">Add Bus</a>
                <a class="dropdown-item text-start " href="update_refund.php" style="background-color: ivory ;" onmouseover="this.style.color='#00FF00	'" onmouseout="this.style.color='#000'">Update Bus Info</a>
            </div>
        </div>
        <!-----------User End--------------->
        <!-----------account Start--------------->
        <center>
            <a class="btn btn-primary p-1 m-1 " data-bs-toggle="collapse" href="#accId" role="button" aria-expanded="false" aria-controls="collapseExample" style="width:90% ;">Account</a>
        </center>

        <div class="collapse" id="accId">
            <div class="bg-light text-dark p-1 m-1">
                <a class="dropdown-item text-start" href="account_list" style="background-color: ivory ;" onmouseover="this.style.color='#00FF00	'" onmouseout="this.style.color='#000'">BUS LIST</a>
                <a class=" dropdown-item text-start " href="add_account.php" style="background-color: ivory ;" onmouseover="this.style.color='#00FF00	'" onmouseout="this.style.color='#000'">Add Bus</a>
                <a class="dropdown-item text-start " href="update_account.php" style="background-color: ivory ;" onmouseover="this.style.color='#00FF00	'" onmouseout="this.style.color='#000'">Update Bus Info</a>
            </div>
        </div>
        <!-----------account  End--------------->
        <!-----------Counter Start--------------->
        <center>
            <a class="btn btn-primary p-1 m-1 " data-bs-toggle="collapse" href="#counterId" role="button" aria-expanded="false" aria-controls="collapseExample" style="width:90% ;">Counter</a>
        </center>

        <div class="collapse" id="counterId">
            <div class="bg-light text-dark p-1 m-1">
                <a class="dropdown-item text-start" href="counter_list.php" style="background-color: ivory ;" onmouseover="this.style.color='#00FF00'" onmouseout="this.style.color='#000'">BUS LIST</a>
                <a class=" dropdown-item text-start " href="add_counter.php" style="background-color: ivory ;" onmouseover="this.style.color='#00FF00'" onmouseout="this.style.color='#000'">Add Bus</a>
                <a class="dropdown-item text-start " href="update_counter.php" style="background-color: ivory ;" onmouseover="this.style.color='#00FF00	'" onmouseout="this.style.color='#000'">Update Bus Info</a>
            </div>
        </div>
        <!-----------User End--------------->
        <!-----------feedback Start--------------->
        <center>
            <a class="btn btn-primary p-1 m-1 " data-bs-toggle="collapse" href="#feedId" role="button" aria-expanded="false" aria-controls="collapseExample" style="width:90% ;">Feedback</a>
        </center>

        <div class="collapse" id="feedId">
            <div class="bg-light text-dark p-1 m-1">
                <a class="dropdown-item text-start" href="feedback_list.php" style="background-color: ivory ;" onmouseover="this.style.color='#00FF00	'" onmouseout="this.style.color='#000'">BUS LIST</a>
                <a class=" dropdown-item text-start " href="add_feedback.php" style="background-color: ivory ;" onmouseover="this.style.color='#00FF00	'" onmouseout="this.style.color='#000'">Add Bus</a>
                <a class="dropdown-item text-start " href="update_feedback.php" style="background-color: ivory ;" onmouseover="this.style.color='#00FF00	'" onmouseout="this.style.color='#000'">Update Bus Info</a>
            </div>
        </div>
        <!-----------counter End--------------->
        <!-----------Passenger Start--------------->
        <center>
            <a class="btn btn-primary p-1 m-1 " data-bs-toggle="collapse" href="#customerId" role="button" aria-expanded="false" aria-controls="collapseExample" style="width:90% ;">Passenger </a>
        </center>

        <div class="collapse" id="customerId">
            <div class="bg-light text-dark p-1 m-1">
                <a class="dropdown-item text-start" href="passenger_list.php" style="background-color: ivory ;" onmouseover="this.style.color='#00FF00'" onmouseout="this.style.color='#000'">Passenger LIST</a>
                <a class=" dropdown-item text-start " href="add_passenger.php" style="background-color: ivory ;" onmouseover="this.style.color='#00FF00'" onmouseout="this.style.color='#000'">Add Passenger</a>
                <a class="dropdown-item text-start " href="update_passenger.php" style="background-color: ivory ;" onmouseover="this.style.color='#00FF00'" onmouseout="this.style.color='#000'">Update Passenger Info</a>
            </div>
        </div>
        <!-----------Customer  End--------------->
        <!-----------Discount Start--------------->
        <center>
            <a class="btn btn-primary p-1 m-1 " data-bs-toggle="collapse" href="#discountId" role="button" aria-expanded="false" aria-controls="collapseExample" style="width:90% ;">Discount </a>
        </center>

        <div class="collapse" id="discountId">
            <div class="bg-light text-dark p-1 m-1">
                <a class="dropdown-item text-start" href="discount_list.php" style="background-color: ivory ;" onmouseover="this.style.color='#00FF00	'" onmouseout="this.style.color='#000'">Add discount</a>
                <a class=" dropdown-item text-start " href="add_discount.php" style="background-color: ivory ;" onmouseover="this.style.color='#00FF00	'" onmouseout="this.style.color='#000'">Add Bus</a>
                <a class="dropdown-item text-start " href="update_discount.php" style="background-color: ivory ;" onmouseover="this.style.color='#00FF00	'" onmouseout="this.style.color='#000'">Update Bus Info</a>
            </div>
        </div>
        <!-----------Discount  End--------------->
    </div>
    </div>





    <!-- offcanvas -->
    <main class="mt-5 pt-3 ">
    <h2>Bus</h2>
        <div class="container-fluid tab">
  <table class="tb table table-striped table-bordered table-hover mt-3 " >
    <thead class="table-info">
      <tr class="text-center">
        <th>Refund id</th>
        <th>Passenger id</th>
        <th>Cancellation fees</th>
        <th>Causes</th>
        <th>Comment</th>
        <th>Refund status</th>
        <th>Refund table</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody class ="table table-border">
    <tr>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td class="form-control text-center bg-light">
        <a href=""><i class="bi bi-trash text-danger"></i></a>
        <a href=""><i class="bi bi-pen text-infof"></i></a>
        </td>
    </tr>
    </tbody>
</table>
</div>
</div>
</main>





    <script src="./js/bootstrap.bundle.min.js "></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.0.2/dist/chart.min.js "></script>
    <script src="./js/jquery-3.5.1.js "></script>
    <script src="./js/jquery.dataTables.min.js "></script>
    <script src="./js/dataTables.bootstrap5.min.js "></script>
    <script src="./js/script.js "></script>
</body>

</html>