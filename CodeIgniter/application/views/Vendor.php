<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
  <title>Vendor</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="<?=base_url('assets')?>/css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="<?=base_url('assets')?>/css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>

  <style>
    /* label color */
    .input-field label {
     color: #fff !important;
   }
   .input-field input[type=text] {
     border-bottom: 1px solid #fff !important;
    }
   /* label focus color */
   .input-field input[type=text]:focus + label {
     color: #fff !important;
   }
   /* label underline focus color */
   .input-field input[type=text]:focus {
     border-bottom: 1px solid #fff !important;
     box-shadow: 0 1px 0 0 #fff !important;
   }
   /* valid color */
   .input-field input[type=text].valid {
     border-bottom: 1px solid #fff !important;
     box-shadow: 0 1px 0 0 #fff !important;
   }
   /* invalid color */
   .input-field input[type=text].invalid {
     border-bottom: 1px solid #fff;
     box-shadow: 0 1px 0 0 #fff;
   }
   /* icon prefix focus color */
   .input-field .prefix.active {
     color: #fff !important;
   }
    ul#menu li {
      display:inline;
      margin: 10px;
    }
    .buttonWakwaw {
      background-color: transparent;
      border : solid white 1px;
      border-radius: 5px;
    }
    .buttonWakwaw:hover {
      background-color: white;
      border : solid white 1px;
      color: black;
    }

   </style>
</head>
<div class="navbar-fixed">
<nav class="z-depth-2" role="navigation" style="background-color: #003366">
  <div class="nav-wrapper">
    <img src="../assets/img/logo.jpg" style="height: 65px;">
    <a id="logo-container" href="#" class="brand-logo" style="font-weight: bold;color: #f8a55d; margin-left: 40px;">IT Service Catalogues</a>
    
    <ul class="right hide-on-med-and-down" style="margin-right: 40px;">
      <li><a class="white-text" href="#"><b>Logout<i class="material-icons right">exit_to_app</i></b></a></li>
    </ul>
    <ul id="nav-mobile" class="sidenav sidenav-fixed" style="top: 65px; width: 250px; z-index: -1; background-color: #004b66;">
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
        <div class="col s12 grey-text text-darken-2"><b style="font-size: 37px">Vendor</b>
          <br>
        Last Update : 20 April 2019 08:08:08
        </div>
      </div>
      <div class="row">
        <div class="col s12">
          <div class="card z-depth-3">
            <div class="card-content" style="padding: 5px 20px; background-color: #004b66;">
                <div class="row" style="margin-bottom: 0px;">
                    <div class="input-field col s4" style="margin-bottom: 0px; ">
                      <i class="material-icons white-text prefix">search</i>
                      <input id="icon_prefix" type="text" placeholder="Masukan Keyword disini" class="validate white-text">
                      <label for="icon_prefix">Cari</label>
                    </div>
                    <div class="col s8">
                        <ul class="right" id="menu" style="margin-right: 20px; margin-top: 15px;">
                            <li><a class="waves-effect btn buttonWakwaw z-depth-0" href=""><i class="material-icons left">add</i>Add Data</a></li>
                            <li><a class="waves-effect btn buttonWakwaw z-depth-0"><i class="material-icons left">file_copy</i>Download</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="card-content">
                <table>
                    <thead>
                      <tr>
                          <th>No</th>
                          <th>Nama Vendor</th>
                          <th>Alamat</th>
                          <th>No.Telp</th>
                          <th>No.Fax</th>
                          <th>E-Mail</th>
                          <th style="padding-left: 40px">Aksi</th>
                      </tr>
                    </thead>  
            
                    <tbody>
                      <tr>
                        <td>1</td>
                        <td>Asus</td>
                        <td>Jalan</td>
                        <td>021</td>
                        <td>022</td>
                        <td>a@gmail.com</td>
                        <td><a class="buttonWakwaw" style="padding-left: 20px;"><i class="material-icons">edit</i></a>
                        <a class="buttonWakwaw"><i class="material-icons">delete</i></a>
                        </td>
                      </tr>
                      <tr>
                        <td>2</td>
                        <td>Dell</td>
                        <td>Jalan</td>
                        <td>031</td>
                        <td>032</td>
                        <td>b@gmail.com</td>
                        <td><a class="buttonWakwaw" style="padding-left: 20px;"><i class="material-icons">edit</i></a>
                        <a class="buttonWakwaw"><i class="material-icons">delete</i></a>
                        </td>
                      </tr>
                    </tbody>
                  </table>
            </div>
          </div>
        </div>
      </div>
  </div>
</main>



 


  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="<?=base_url('assets')?>/js/materialize.js"></script>
  <script src="<?=base_url('assets')?>/js/init.js"></script>

  </body>
</html>
