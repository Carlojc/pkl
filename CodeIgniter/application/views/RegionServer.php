<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Region Server</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="<?= base_url('assets') ?>/css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection" />
  <link href="<?= base_url('assets') ?>/css/style.css" type="text/css" rel="stylesheet" media="screen,projection" />

  <style>
    ul#menu li {
      display: inline;
      margin: 10px;
    }

    .buttonWakwaw {
      background-color: transparent;
      border: solid white 1px;
      border-radius: 5px;
    }

    .buttonWakwaw:hover {
      background-color: white;
      border: solid white 1px;
      color: black;
    }
  </style>
</head>
<div class="navbar-fixed">
  <nav class="z-depth-2" role="navigation" style="background-color: #003366">
    <div class="nav-wrapper">
      <img src="<?= base_url('assets') ?>/img/logo.jpg" style="height: 65px;">
      <a id="logo-container" href="#" class="brand-logo" style="font-weight: bold;color: #f8a55d; margin-left: 40px;">IT Service Catalogues</a>

      <ul class="right hide-on-med-and-down" style="margin-right: 40px;">
        <li><a class="white-text" href="<?= base_url('asset/logout') ?>"><b>Logout<i class="material-icons right">exit_to_app</i></b></a></li>
      </ul>
      <ul id="nav-mobile" class="sidenav sidenav-fixed" style="top: 65px; width: 250px; z-index: -1; background-color:#004b66;">
        <li>
          <div style="margin-left: 25px; margin-top: 20px; display: flex;">
            <div style="width: 50px; margin-right: 10px; margin-top: 10px;"><img class="circle" style="width: 50px; height: 50px;" src="<?= base_url('assets') ?>/img/background2.jpg"></div>
            <div style="width: 200px;" style="margin-top: -10px;">
              <div style="height: 20px; word-wrap: break-word;"><b>John Doe</b></div>
              <div style="height: 0px;">Administrator</div>
            </div>
          </div>
        </li>
        <li>
          <div class="divider"></div>
        </li>
        <li><a class="white-text" href="<?= base_url('asset/beranda') ?>">Beranda</a></li>
        <li>
          <ul class="collapsible collapsible-accordion">
            <li>
              <a class="collapsible-header white-text" style="padding-left: 32px">Hardware</a>
              <div class="collapsible-body" style="background-color: #00769d">
                <ul style="padding-left: 20px;">
                  <li><a class="white-text" href="<?= base_url('asset/hardware') ?>">Asset Hardware</a></li>
                  <li><a class="white-text" href="<?= base_url('asset/jenis_hardware') ?>">Jenis Hardware</a></li>
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
                  <li><a class="white-text" href="<?= base_url('asset/software') ?>">Asset Software</a></li>
                  <li><a class="white-text" href="<?= base_url('asset/jenis_software') ?>">Jenis Software</a></li>
                </ul>
              </div>
            </li>
          </ul>
        </li>
        <li><a class="white-text" href="<?= base_url('asset/entity') ?>">Entitiy</a></li>
        <li><a class="white-text" href="<?= base_url('asset/kondisi_asset') ?>">Kondisi Asset</a></li>
        <li><a class="white-text" href="<?= base_url('asset/lokasidatacentre') ?>">Lokasi Data Center</a></li>
        <li><a class="white-text" href="<?= base_url('asset/regionserver') ?>">Region Server</a></li>
        <li><a class="white-text" href="<?= base_url('asset/user') ?>">User</a></li>
        <li><a class="white-text" href="<?= base_url('asset/vendor') ?>">Vendor</a></li>
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
        <div class="col s12 grey-text text-darken-2"><b style="font-size: 37px">Region Server</b>
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
                    <li><a class="waves-effect btn buttonWakwaw z-depth-0" href="<?= base_url('asset/addRegion') ?>"><i class="material-icons left">add</i>Add Data</a></li>
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
                    <th>GAS</th>
                    <th>DEV</th>
                    <th>PROD</th>
                    <th style="padding-left: 40px">Aksi</th>
                  </tr>
                </thead>

                <tbody>
                  <?php
                  $count = 0;
                  $sql = $this->db->query("SELECT * FROM region_server");
                  foreach ($sql->result_array() as $row) :
                    $count++;
                    ?>
                    <tr>
                      <th scope="row"><?php echo $count; ?></th>
                      <td><?php echo $row['GAS']; ?></td>
                      <td><?php echo $row['DEV']; ?></td>
                      <td><?php echo $row['PROD']; ?></td>
                      <td><a class="buttonWakwaw" data-toggle="modal" data-target="#edit<?php echo $row['ID_Region_Server'] ?>" style="padding-left: 20px;" href="#"><i class="material-icons">edit</i></a>
                        <a class="buttonWakwaw" data-toggle="modal" data-target="#delete<?php echo $row['ID_Region_Server'] ?>" href="#"><i class="material-icons">delete</i></a>
                      </td>
                    </tr>

                    <!-- Modal Edit Mahasiswa-->
                    <div class="modal" id="edit<?php echo $row['ID_Region_Server'] ?>">
                      <div class="modal-content">
                        <h5>Update Data Region</h5>
                        <form action="<?php echo site_url('Region/update') ?>" method="post">
                          <?php
                          $id = $row['ID_Region_Server'];
                          $sql = $this->db->query("SELECT * FROM region_server where ID_Region_Server = '$id'");

                          foreach ($sql->result_array() as $row) :
                            ?>

                            <input type="hidden" name="ID_Region_Server" value="<?php echo $row['ID_Region_Server']; ?>">

                            <div class="form-group">
                              <label>GAS</label>
                              <input type="text" name="GAS" class="materialize-textarea" value="<?php echo $row['GAS']; ?>">
                            </div>

                            <div class="form-group">
                              <label>DEV</label>
                              <input type="text" name="DEV" class="materialize-textarea" value="<?php echo $row['DEV']; ?>">
                            </div>

                            <div class="form-group">
                              <label>PROD</label>
                              <input type="text" name="PROD" class="materialize-textarea" value="<?php echo $row['PROD']; ?>">
                            </div>

                            <div class="modal-footer">
                              <button type="submit" class="waves-effect waves-light btn light-blue darken-4">Update</button>
                              <button type="button" class="waves-effect waves-light btn red darken-1" data-dismiss="modal">Cancel</button>
                            </div>
                          <?php
                          endforeach;
                          ?>
                        </form>
                      </div>
                    </div>

                     <!-- Modal Delete -->
                     <div class="modal" id="delete<?php echo $row['ID_Region_Server'] ?>">
                      <form action="<?php echo base_url('Region/delete') ?> " method="post">
                        <?php
                        $id = $row['ID_Region_Server'];
                        $sql = $this->db->query("SELECT * FROM region_server where ID_Region_Server = '$id'");

                        foreach ($sql->result_array() as $row) :
                          ?>
                          <div class="modal-content">
                            <h5>WARNING!</h5>
                            <p>Are you sure you want to delete this data?</p>
                          </div>

                          <div class="modal-footer">
                            <input type="hidden" name="ID_Region_Server" value="<?php echo $row['ID_Region_Server']; ?>">
                            <button class="waves-effect waves-light btn red darken-1">Delete</button>
                            <button type="button" class="waves-effect waves-light btn white" data-dismiss="modal"><span class="black-text">Cancel</span></button>
                          </div>
                        <?php endforeach; ?>
                    </div>
                  <?php endforeach; ?>
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
  <script src="<?= base_url('assets') ?>/js/materialize.js"></script>
  <script src="<?= base_url('assets') ?>/js/init.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

</body>

</html>