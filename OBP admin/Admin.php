<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style4.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <title>Admin Autoverhuur Inloggen</title>
</head>
<body>
    <div class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="navbar-header">
                        <button class="navbar-toggle" data-target="#mobile_menu" data-toggle="collapse">
                            <span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
                        </button>
                        <a href="#" class="navbar-brand">TopDriveVerhuur</a>
                    </div>
                    <div class="navbar-collapse collapse" id="mobile_menu">
                        <ul class="nav navbar-nav">
                            <li class="active"><a href="#">Home</a></li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">About Us <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">About One</a></li>
                                    <li><a href="#">About Two</a></li>
                                    <li><a href="#">About Three</a></li>
                                    <li><a href="#">About Four</a></li>
                                    <li><a href="#">About Five</a></li>
                                    <li><a href="#">About Six</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Welcome</a></li>
                            <li><a href="#">Services</a></li>
                            <li><a href="#">Gallery</a></li>
                            <li><a href="#">Contact Us</a></li>
                        </ul>
                        <ul class="nav navbar-nav">
                            <li>
                                <form action="" class="navbar-form">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <input type="search" name="search" id="" placeholder="Search Anything Here..." class="form-control">
                                            <span class="input-group-addon"><span class="glyphicon glyphicon-search"></span></span>
                                        </div>
                                    </div>
                                </form>
                            </li>
                        </ul>
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="#"><span class="glyphicon glyphicon-user"></span> Profile</a></li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-log-in"></span> Login / Sign Up <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Login</a></li>
                                    <li><a href="#">Sign Up</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="login-container">
        <h1>Welcome Back Admin</h1>
        <form action="#">
            <div class="form-group">
                <label for="AdminName">Gebruikersnaam</label>
                <input type="text" id="AdminName" placeholder="AdminName" name="AdminName">
            </div>
            <div class="form-group">
                <label for="AdminPassword">Wachtwoord</label>
                <input type="password" id="AdminPassword" placeholder="AdminPassword" name="AdminPassword"> 
            </div>
            <div class="row">
                <div class="col-md-6">
                    <button type="button" onclick= "login()">Inloggen</button>
                </div>
                <div class="col-md-6 text-right">
                    <a href="#" class="forgot-password">Forgot Password?</a>
                </div>
            </div>
            <div class="form-group text-center">
                <label>
                    <input type="checkbox" name="remember"> Remember me
                </label>
            </div>
        </form>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<script>

// Simpele authenticatie - vervang dit met echte authenticatie

function login() {

    const username = document.getElementById('AdminName').value;

    const password = document.getElementById('AdminPassword').value;

 

    // Voer hier je eigen authenticatielogica uit

    if (username === 'medewerker' && password === 'wachtwoord') {

        window.location.href = 'werkrooster.html';

    } else {

        alert('Ongeldige inloggegevens. Probeer opnieuw.');

    }
}
</script>
    
</body>
</html>
