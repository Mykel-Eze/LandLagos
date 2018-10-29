<!DOCTYPE html>
<html lang="en">

<head>
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1.0" name="viewport">
    <title>LandLagos - Login</title>
    <link rel="shortcut icon" href="img/logo2.png">

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="css/materialize.css" media="screen" rel="stylesheet" type="text/css">
    <link href="css/fonts.css" media="screen" rel="stylesheet" type="text/css">
    <link href="css/styles.css" rel="stylesheet" type="text/css">
    <link href="css/dashboard-style.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Karla:400,400i,700,700i&amp;subset=latin-ext" rel="stylesheet">

    <style>
        body{
            min-height: 100vh;
            /* overflow: hidden; */
        }

        .btn-div{
            margin-top: 30px;
        }

        .section{
            padding-top: 7rem;
        }

        .row .form-div{
            border: 1px solid var(--pry-color);
            padding-top: 30px;
            padding-bottom: 30px;
            border-radius: 2px;
        }

        .head-txt{
            margin-bottom: 1.5rem;
            font-family: var(--font);
            font-weight: lighter;
        }

        footer{
            position: absolute;
            width: 100%;
            bottom: 0;
        }
    </style>


    <!--== Modenizer installed ==-->
    <script src="js/modernizr.js"></script>

</head>

<body class="rel">
    <!-- Menu -->
    <nav class="grey darken-4" role="navigation">
        <div class="nav-wrapper container">
            <a class="brand-logo" href="/" id="logo-container">
                <img alt="#" src="img/logo2.png">
            </a>
            <ul class="right hide-on-med-and-down">
                <li>
                    <a href="/">HOME</a>
                </li>
                <!-- <li>
                    <a href="/register">REGISTER</a>
                </li> -->
            </ul>
            <ul class="side-nav" id="nav-mobile">
                <li>
                    <a href="/">HOME</a>
                </li>
                <!-- <li>
                    <a href="/register">REGISTER</a>
                </li> -->
            </ul>
            <a class="button-collapse" data-activates="nav-mobile" href="#">
                <i class="material- icons">menu</i>
            </a>
        </div>
    </nav>
    <!-- end of Menu -->

    <div class="section">

        <div class="container">
            <div class="row">
                <h4 class="center-align head-txt">LOGIN</h4>
                <div  class="col s12 m4 offset-m4 form-div">
                    <form method="POST" action="">
                        @csrf

                        <div class="input-field col s12">
                            <input id="email" type="email" class="form-control" name="email" value="" required autofocus>
                            <label for="email">Email</label>
                        </div>

                        <div class="input-field col s12">
                            <input id="password" type="password" class="validate" name="password" required>
                            <label for="password">Password</label>
                        </div>

                        <div class="col s12">
                            <a href="/reset-email" class="pry-color">Forgot Password?</a>
                        </div>

                        <div class="center col s12 btn-div">
                            <button type="submit" class="waves-effect waves-light btn">
                                LOGIN
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>


    <!-- Footer -->
    <footer class="page-foo bter blacked" id=''>

        <br>
        <div class="footer-copyright">
            <div class="container">
                <div class="row">
                    <div class="col s12 center">
                        <a class="grey-text">Copyright &copy; LANDLAGOS 2018</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- end of Footer -->
    <!-- Script -->
    <script src="js/jquery.min.js"></script>
    <script src="js/materialize.js"></script>
    <script src="js/init.js"></script>
    <script>
        $(document).ready(function () {
            $('.materialboxed').materialbox();
            $('.parallax').parallax();
            $('.modal').modal();

        });

    </script>


    <!-- end of Scripts-->
</body>

</html>
