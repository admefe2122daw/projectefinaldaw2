<?php

error_reporting(0);

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

require '../vendor/autoload.php';


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <title>Reserva</title>
    <style>
        body {
            background-image: url("assets/img/reserva.jpg");
            background-color: #cccccc;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-5">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="../index.php"><i class="bi bi-arrow-left"></i> Volver
                            Atrás</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container">
        <form method="POST">
            <div class="d-flex flex-wrap justify-content-center gap-5">
                <div class="card" style="width: 20rem;">
                    <div class="card-body">
                        <h5 class="card-title">Información Personal</h5>
                        <label for="title">Titulo*</label>
                        <div class="form-group">
                            <select name="title" class="form-control" required>
                                <option disabled selected>Selecciona Una Opción</option>
                                <option value="Mr.">Mr.</option>
                                <option value="Mrs.">Mrs.</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Nombre</label>
                            <input name="fname" class="form-control" required>

                        </div>
                        <div class="form-group">
                            <label>Apellido</label>
                            <input name="lname" class="form-control" required>

                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input name="email" type="email" class="form-control" required>

                        </div>
                        <div class="form-group">
                            <label>Nacionalidad*</label>
                            <label class="radio-inline">
                                <input type="radio" name="nation" value="Español" checked="">Español
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="nation" value="No Español">No Español
                            </label>
                        </div>
                        <?php

                        $countries = array("Afghanistan", "Albania", "Algeria", "American Samoa", "Andorra", "Angola", "Anguilla", "Antarctica", "Antigua and Barbuda", "Argentina", "Armenia", "Aruba", "Australia", "Austria", "Azerbaijan", "Bahamas", "Bahrain", "Bangladesh", "Barbados", "Belarus", "Belgium", "Belize", "Benin", "Bermuda", "Bhutan", "Bolivia", "Bosnia and Herzegowina", "Botswana", "Bouvet Island", "Brazil", "British Indian Ocean Territory", "Brunei Darussalam", "Bulgaria", "Burkina Faso", "Burundi", "Cambodia", "Cameroon", "Canada", "Cape Verde", "Cayman Islands", "Central African Republic", "Chad", "Chile", "China", "Christmas Island", "Cocos (Keeling) Islands", "Colombia", "Comoros", "Congo", "Congo, the Democratic Republic of the", "Cook Islands", "Costa Rica", "Cote d'Ivoire", "Croatia (Hrvatska)", "Cuba", "Cyprus", "Czech Republic", "Denmark", "Djibouti", "Dominica", "Dominican Republic", "East Timor", "Ecuador", "Egypt", "El Salvador", "Equatorial Guinea", "Eritrea", "Estonia", "Ethiopia", "Falkland Islands (Malvinas)", "Faroe Islands", "Fiji", "Finland", "France", "France Metropolitan", "French Guiana", "French Polynesia", "French Southern Territories", "Gabon", "Gambia", "Georgia", "Germany", "Ghana", "Gibraltar", "Greece", "Greenland", "Grenada", "Guadeloupe", "Guam", "Guatemala", "Guinea", "Guinea-Bissau", "Guyana", "Haiti", "Heard and Mc Donald Islands", "Holy See (Vatican City State)", "Honduras", "Hong Kong", "Hungary", "Iceland", "India", "Indonesia", "Iran (Islamic Republic of)", "Iraq", "Ireland", "Israel", "Italy", "Jamaica", "Japan", "Jordan", "Kazakhstan", "Kenya", "Kiribati", "Korea, Democratic People's Republic of", "Korea, Republic of", "Kuwait", "Kyrgyzstan", "Lao, People's Democratic Republic", "Latvia", "Lebanon", "Lesotho", "Liberia", "Libyan Arab Jamahiriya", "Liechtenstein", "Lithuania", "Luxembourg", "Macau", "Macedonia, The Former Yugoslav Republic of", "Madagascar", "Malawi", "Malaysia", "Maldives", "Mali", "Malta", "Marshall Islands", "Martinique", "Mauritania", "Mauritius", "Mayotte", "Mexico", "Micronesia, Federated States of", "Moldova, Republic of", "Monaco", "Mongolia", "Montserrat", "Morocco", "Mozambique", "Myanmar", "Namibia", "Nauru", "Nepal", "Netherlands", "Netherlands Antilles", "New Caledonia", "New Zealand", "Nicaragua", "Niger", "Nigeria", "Niue", "Norfolk Island", "Northern Mariana Islands", "Norway", "Oman", "Pakistan", "Palau", "Panama", "Papua New Guinea", "Paraguay", "Peru", "Philippines", "Pitcairn", "Poland", "Portugal", "Puerto Rico", "Qatar", "Reunion", "Romania", "Russian Federation", "Rwanda", "Saint Kitts and Nevis", "Saint Lucia", "Saint Vincent and the Grenadines", "Samoa", "San Marino", "Sao Tome and Principe", "Saudi Arabia", "Senegal", "Seychelles", "Sierra Leone", "Singapore", "Slovakia (Slovak Republic)", "Slovenia", "Solomon Islands", "Somalia", "South Africa", "South Georgia and the South Sandwich Islands", "Spain", "Sri Lanka", "St. Helena", "St. Pierre and Miquelon", "Sudan", "Suriname", "Svalbard and Jan Mayen Islands", "Swaziland", "Sweden", "Switzerland", "Syrian Arab Republic", "Taiwan, Province of China", "Tajikistan", "Tanzania, United Republic of", "Thailand", "Togo", "Tokelau", "Tonga", "Trinidad and Tobago", "Tunisia", "Turkey", "Turkmenistan", "Turks and Caicos Islands", "Tuvalu", "Uganda", "Ukraine", "United Arab Emirates", "United Kingdom", "United States", "United States Minor Outlying Islands", "Uruguay", "Uzbekistan", "Vanuatu", "Venezuela", "Vietnam", "Virgin Islands (British)", "Virgin Islands (U.S.)", "Wallis and Futuna Islands", "Western Sahara", "Yemen", "Yugoslavia", "Zambia", "Zimbabwe");

                        ?>
                        <div class="form-group">
                            <label>Passport Country*</label>
                            <select name="country" class="form-control" required>
                                <option disabled selected>Selecciona Una Opción</option>
                                <?php
                                foreach ($countries as $key => $value) :
                                    echo '<option value="' . $value . '">' . $value . '</option>';
                                endforeach;
                                ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Phone Number</label>
                            <input name="phone" type="text" class="form-control" required>
                        </div>
                    </div>
                </div>
                <div class="card" style="width: 20rem;">
                    <div class="card-body">
                        <h5 class="card-title">Información De Reserva</h5>
                        <div class="form-group">
                            <label>Tipo de habitación*</label>
                            <select name="troom" class="form-control" required>
                                <option disabled selected>Seleccionar Opción</option>
                                <option value="Superior Room"> HABITACIÓN SUPERIOR</option>
                                <option value="Deluxe Room">HABITACIÓN DE LUJO</option>
                                <option value="Guest House">HABITACIÓN NORMAL</option>
                                <option value="Single Room">HABITACIÓN INDIVIDUAL
                                </option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Tipo de cama
                            </label>
                            <select name="bed" class="form-control" required>
                                <option value selected></option>
                                <option value="Single">Simple</option>
                                <option value="Double">Double</option>
                                <option value="Triple">Triple</option>
                                <option value="Quad">Cuatro</option>
                                <option value="None">Ninguna</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>No. de habitación *</label>
                            <select name="nroom" class="form-control" required>
                                <option value selected></option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Régimen de comidas</label>
                            <select name="meal" class="form-control" required>
                                <option value selected></option>
                                <option value="Room only">Sólo habitación
                                </option>
                                <option value="Breakfast">Desayuno</option>
                                <option value="Half Board">Media pension</option>
                                <option value="Full Board">Pensión completa</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Entrada</label>
                            <input name="cin" type="date" class="form-control">

                        </div>
                        <div class="form-group">
                            <label>Salida</label>
                            <input name="cout" type="date" class="form-control">
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-center gap-5 mt-5">
                <input type="submit" name="submit" class="btn btn-primary">
                <?php
                if (isset($_POST['submit'])) {
                    $con = mysqli_connect("localhost", "root", "", "hotel");
                    $check = "SELECT * FROM roombook WHERE email = '$_POST[email]'";
                    $rs = mysqli_query($con, $check);
                    $data = mysqli_fetch_array($rs, MYSQLI_NUM);
                    if ($data[0] > 1) {
                        echo "<script type='text/javascript'> alert('El usuario ya existe')</script>";
                    } else {
                        $new = "Not Conform";
                        $newUser = "INSERT INTO `roombook`(`Title`, `FName`, `LName`, `Email`, `National`, `Country`, `Phone`, `TRoom`, `Bed`, `NRoom`, `Meal`, `cin`, `cout`,`stat`,`nodays`) VALUES ('$_POST[title]','$_POST[fname]','$_POST[lname]','$_POST[email]','$_POST[nation]','$_POST[country]','$_POST[phone]','$_POST[troom]','$_POST[bed]','$_POST[nroom]','$_POST[meal]','$_POST[cin]','$_POST[cout]','$new',datediff('$_POST[cout]','$_POST[cin]'))";
                        if (mysqli_query($con, $newUser)) {
                            echo "<script type='text/javascript'> alert('Su solicitud de reserva ha sido enviadat')</script>";
                            $CORREU = $_POST["email"];
                            $NOMCOMPLET = $_POST["fname"] . ' ' . $_POST["lname"];
                            $FINICIO = $_POST["cin"];
                            $FSALIDA = $_POST["cout"];
                            $CORREUNOM = $CORREU . '' . $NOMCOMPLET;
                            $RESERVA = substr(strtoupper(sha1($CORREUNOM)), 0, 8);

                            //Create a new PHPMailer instance
                            $mail = new PHPMailer();

                            //Tell PHPMailer to use SMTP
                            $mail->isSMTP();
                            $mail->CharSet = 'UTF-8';

                            //Enable SMTP debugging
                            //SMTP::DEBUG_OFF = off (for production use)
                            //SMTP::DEBUG_CLIENT = client messages
                            //SMTP::DEBUG_SERVER = client and server messages
                            $mail->SMTPDebug = SMTP::DEBUG_OFF;

                            //Set the hostname of the mail server
                            $mail->Host = 'smtp.gmail.com';
                            //Use `$mail->Host = gethostbyname('smtp.gmail.com');`
                            //if your network does not support SMTP over IPv6,
                            //though this may cause issues with TLS

                            //Set the SMTP port number:
                            // - 465 for SMTP with implicit TLS, a.k.a. RFC8314 SMTPS or
                            // - 587 for SMTP+STARTTLS
                            $mail->Port = 465;

                            //Set the encryption mechanism to use:
                            // - SMTPS (implicit TLS on port 465) or
                            // - STARTTLS (explicit TLS on port 587)
                            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;

                            //Whether to use SMTP authentication
                            $mail->SMTPAuth = true;

                            //Username to use for SMTP authentication - use full email address for gmail
                            $mail->Username = '15585373.clot@fje.edu';

                            //Password to use for SMTP authentication
                            $mail->Password = '2be60ad0';

                            //Set who the message is to be sent from
                            //Note that with gmail you can only use your account address (same as `Username`)
                            //or predefined aliases that you have configured within your account.
                            //Do not use user-submitted addresses in here
                            $mail->setFrom('15585373.clot@fje.edu', 'CLOT HOTEL');

                            //Set an alternative reply-to address
                            //This is a good place to put user-submitted addresses
                            $mail->addReplyTo('15585373.clot@fje.edu', 'CLOT HOTEL');

                            //Set who the message is to be sent to
                            $mail->addAddress($CORREU, $NOMCOMPLET);

                            //Set the subject line
                            $mail->Subject = 'Confirmación de reserva Hotel Clot';

                            //Read an HTML message body from an external file, convert referenced images to embedded,
                            //convert HTML into a basic plain-text alternative body
                            //$mail->msgHTML(file_get_contents('contents.html'), __DIR__);
                            $mail->Body = '<h1>Hola ' . $NOMCOMPLET . ' tu reserva se ha completado con éxito</h1>
                            <h2>Código de reserva: <b>' . $RESERVA . '</b>, <br>
                            Fecha de Entrada: ' . $FINICIO . ', despues de las 12:00 <br>
                            Fecha de Salida: ' . $FSALIDA . ', antes de las 10:00</h2>
                            
                            <h3>Para más información no dude en contactarnos.</h3>
                            ';

                            //Replace the plain text body with one created manually
                            $mail->AltBody = 'This is a plain-text message body';

                            //Attach an image file
                            //$mail->addAttachment('images/phpmailer_mini.png');
                            header("Location: ../index.php");
                            //send the message, check for errors
                            if (!$mail->send()) {
                                echo 'Mailer Error: ' . $mail->ErrorInfo;
                            } else {
                                //echo 'Message sent!';
                                //Section 2: IMAP
                                //Uncomment these to save your message in the 'Sent Mail' folder.
                                #if (save_mail($mail)) {
                                #    echo "Message saved!";
                                #}
                            }

                            //Section 2: IMAP
                            //IMAP commands requires the PHP IMAP Extension, found at: https://php.net/manual/en/imap.setup.php
                            //Function to call which uses the PHP imap_*() functions to save messages: https://php.net/manual/en/book.imap.php
                            //You can use imap_getmailboxes($imapStream, '/imap/ssl', '*' ) to get a list of available folders or labels, this can
                            //be useful if you are trying to get this working on a non-Gmail IMAP server.
                            function save_mail($mail)
                            {
                                //You can change 'Sent Mail' to any other folder or tag
                                $path = '{imap.gmail.com:993/imap/ssl}[Gmail]/Sent Mail';

                                //Tell your server to open an IMAP connection using the same username and password as you used for SMTP
                                $imapStream = imap_open($path, $mail->Username, $mail->Password);

                                $result = imap_append($imapStream, $path, $mail->getSentMIMEMessage());
                                imap_close($imapStream);

                                return $result;
                            }
                        } else {
                            echo "<script type='text/javascript'> alert('Error al agregar usuario en la base de datos')</script>";
                        }
                    }
                    $msg = "Tu código es correcto";
                }
                ?>
            </div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>