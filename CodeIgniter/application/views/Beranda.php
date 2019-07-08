<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
  <title>Beranda</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="../assets/css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="../assets/css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
<div class="navbar-fixed">
<nav class="z-depth-2" role="navigation" style="background-color: #003366">
  <div class="nav-wrapper">
    <img src="../assets/img/logo.jpg" style="height: 65px;">
    <a id="logo-container" href="#" class="brand-logo" style="font-weight: bold;color: #f8a55d; margin-left: 40px;">IT Service Catalogues</a>
    
    <ul class="right hide-on-med-and-down" style="margin-right: 40px;">
      <li><a class="white-text" href="#"><b>Logout<i class="material-icons right">exit_to_app</i></b></a></li>
    </ul>
    <ul id="nav-mobile" class="sidenav sidenav-fixed" style="top: 65px; width: 250px; z-index: -1; background-color:#004b66;">
      <li>
        <div style="margin-left: 25px; margin-top: 20px; display: flex;">
          <div style="width: 50px; margin-right: 10px; margin-top: 10px;"><img class="circle" style="width: 50px; height: 50px;" src="../assets/img/background2.jpg"></div>
          <div style="width: 200px;" style="margin-top: -10px;">
            <div style="height: 20px; word-wrap: break-word;"><b>John Doe</b></div>
            <div style="height: 0px;">Administrator</div>
          </div>
        </div>
      </li>
        <li><div class="divider"></div></li>  
        <li><a class="white-text" href="#!">Beranda</a></li>
        <li>
          <ul class="collapsible collapsible-accordion">
            <li>
              <a class="collapsible-header white-text" style="padding-left: 32px">Hardware</a>
              <div class="collapsible-body" style="background-color: #00769d">
                <ul style="padding-left: 20px;">
                  <li><a class="white-text" href="#!">Asset Hardware</a></li>
                  <li><a class="white-text" href="#!">Jenis Hardware</a></li>
                </ul>
              </div>
            </li>
          </ul>
        </li>
        <li>
            <ul class="collapsible collapsible-accordion">
              <li>
                <a class="collapsible-header white-text" style="padding-left: 32px">Sofware</a>
                <div class="collapsible-body" style="background-color: #00769d">
                  <ul style="padding-left: 20px;">
                    <li><a class="white-text" href="#!">Asset Software</a></li>
                    <li><a class="white-text" href="#!">Jenis Software</a></li>
                  </ul>
                </div>
              </li>
            </ul>
          </li>
        <li><a class="white-text" href="#!">Entitiy</a></li>
        <li><a class="white-text" href="#!">Kondisi Asset</a></li>
        <li><a class="white-text" href="#!">Lokasi Data Center</a></li>
        <li><a class="white-text" href="#!">Region Server</a></li>
        <li><a class="white-text" href="#!">User</a></li>
        <li><a class="white-text" href="#!">Vendor</a></li>
        <li><a class="white-text" href="#!"></a></li>

    </ul>
    <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
  </div>
</nav>
</div>
<body>
<main>
  <div class="container" style="margin-top: 20px;">
      <div class="row">
        <div class="col s12"><b style="font-size: 37px">Beranda</b></div>
      </div>
      <div class="row">
        <div class="col s12">
          <div class="card z-depth-3">
            <div class="card-content" style="padding: 15px 20px; background-color: #004b66">
              <i class="material-icons white-text left">info</i><b class="white-text">Information</b>
            </div>
            <div class="card-content">
              Layanan sistem informasi yang mengelola dan menyajikan data secara spesifik mengenai asset IT yang terdapat di Kantor Pusat BNI Syariah
            </div>
          </div>
        </div>
      </div>
      <div class="row">
          <div class="col s12">
            <div class="card z-depth-3">
              <div class="card-content orange" style="padding: 15px 20px; ">
                <i class="material-icons white-text left">notifications</i><b class="white-text">Notifications</b>
              </div>
              <div class="card-content" style="background-color: ">
                  <i class="material-icons left">warning</i> Software 01
              </div>
              <div class="card-content">
                  <i class="material-icons left">warning</i> Software 02
                </div>
                <div class="card-content">
                  <i class="material-icons left">warning</i> Software 03
                </div>
            </div>
          </div>
        </div>
  </div>
</main>



 


  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="../assets/js/materialize.js"></script>
  <script src="../assets/js/init.js"></script>

  </body>
</html>
