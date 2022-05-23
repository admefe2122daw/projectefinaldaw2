<?php
session_start();
if (!isset($_SESSION["user"])) {
    header("location:index.php");
}
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title> Clot Hotel</title>
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <link href="assets/css/font-awesome.css" rel="stylesheet" />

    <link href="assets/css/custom-styles.css" rel="stylesheet" />
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
    <link href="assets/js/dataTables/dataTables.bootstrap.css" rel="stylesheet" />
</head>

<body>
    <div id="wrapper">

        <nav class="navbar navbar-default top-navbar" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Navegación de palanca
                    </span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="home.php"><?php echo $_SESSION["user"]; ?> </a>
            </div>

            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li class="divider"></li>
                        <li><a href="logout.php"><i class="fa fa-sign-out fa-fw"></i> Cerrar sesión</a>
                        </li>
                    </ul>


                </li>

            </ul>
        </nav>

        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">

                    <li>
                        <a href="home.php"><i class="fa fa-dashboard"></i> Estado</a>
                    </li>

                    <li>
                        <a class="active-menu" href="payment.php"><i class="fa fa-qrcode"></i> Pago</a>
                    </li>
                    <li>
                        <a href="room.php"><i class="fa fa-qrcode"></i> Habitaciones</a>
                    </li>

                    <li>
                        <a href="logout.php"><i class="fa fa-sign-out fa-fw"></i> Cerrar sesión
                        </a>
                    </li>



            </div>

        </nav>

        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                            Detalles del pago<small> </small>
                        </h1>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                        <thead>
                                            <tr>
                                                <th>Nombre</th>
                                                <th> Tipo de habitación</th>
                                                <th>Tipo de cama</th>
                                                <th>Registrarse</th>
                                                <th>Revisa</th>
                                                <th>No de la habitación</th>
                                                <th>Tipo de comida</th>

                                                <th>Alquiler de la habitación</th>
                                                <th>Bed Rent</th>
                                                <th>Comidas </th>
                                                <th>Gr.Total</th>
                                                <th>Impresión</th>

                                            </tr>
                                        </thead>
                                        <tbody>

                                            <?php
                                            include('db.php');
                                            $sql = "select * from payment";
                                            $re = mysqli_query($con, $sql);
                                            while ($row = mysqli_fetch_array($re)) {

                                                $id = $row['id'];

                                                if ($id % 2 == 1) {
                                                    echo "<tr class='gradeC'>
													<td>" . $row['title'] . " " . $row['fname'] . " " . $row['lname'] . "</td>
													<td>" . $row['troom'] . "</td>
													<td>" . $row['tbed'] . "</td>
													<td>" . $row['cin'] . "</td>
													<td>" . $row['cout'] . "</td>
													<td>" . $row['nroom'] . "</td>
													<td>" . $row['meal'] . "</td>
													
													<td>" . $row['ttot'] . "</td>
													<td>" . $row['mepr'] . "</td>
													<td>" . $row['btot'] . "</td>
													<td>" . $row['fintot'] . "</td>
													<td><a href=print.php?pid=" . $id . " <button class='btn btn-primary'> <i class='fa fa-print' ></i> Print</button></td>
													</tr>";
                                                } else {
                                                    echo "<tr class='gradeU'>
													<td>" . $row['title'] . " " . $row['fname'] . " " . $row['lname'] . "</td>
													<td>" . $row['troom'] . "</td>
													<td>" . $row['tbed'] . "</td>
													<td>" . $row['cin'] . "</td>
													<td>" . $row['cout'] . "</td>
													<td>" . $row['nroom'] . "</td>
													<td>" . $row['meal'] . "</td>
													
													<td>" . $row['ttot'] . "</td>
													<td>" . $row['mepr'] . "</td>
													<td>" . $row['btot'] . "</td>
													<td>" . $row['fintot'] . "</td>
													<td><a href=print.php?pid=" . $id . " <button class='btn btn-primary'> <i class='fa fa-print' ></i> Print</button></td>
													</tr>";
                                                }
                                            }

                                            ?>

                                        </tbody>
                                    </table>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>


    </div>
    </div>

    <script src="assets/js/jquery-1.10.2.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.metisMenu.js"></script>
    <script src="assets/js/dataTables/jquery.dataTables.js"></script>
    <script src="assets/js/dataTables/dataTables.bootstrap.js"></script>
    <script>
        $(document).ready(function() {
            $('#dataTables-example').dataTable();
        });
    </script>
    <script src="assets/js/custom-scripts.js"></script>


</body>

</html>