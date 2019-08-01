<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Asset Software</title>

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
        <div class="col s12 grey-text text-darken-2"><b style="font-size: 37px">Asset Software</b>
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
                    <li><a class="waves-effect btn buttonWakwaw z-depth-0" href="<?= base_url('asset/add_software') ?>"><i class="material-icons left">add</i>Add Data</a></li>
                    <li><a class="waves-effect btn buttonWakwaw z-depth-0"><i class="material-icons left">file_copy</i>Download</a></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="card-content">
              <table class="responsive-table">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama Software</th>
                    <th>Owner App</th>
                    <th>Jenis App</th>
                    <th>Kondisi App</th>
                    <th>Nama Server</th>
                    <th>Fungsi</th>
                    <th style="padding-left: 20px;">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $no = 1;
                  foreach ($software as $key => $value) :
                    ?>
                    <tr>
                      <td><?php echo $no++ ?></td>
                      <td><a class="modal-trigger" href="#get<?php echo $value->ID_SW ?>" style="padding-left: 20px;">
                          <?php echo $value->Nama_Aplikasi ?>
                        </a></td>
                      <td><?php echo $value->Nama_Unit ?></td>
                      <td><?php echo $value->Jenis ?></td>
                      <td><?php echo $value->Kondisi_Asset ?></td>
                      <td><?php echo $value->Nama_Server ?></td>
                      <td><?php echo $value->Fungsi ?></td>
                      <td><a class="buttonWakwaw modal-trigger" href="#edit<?php echo $value->ID_SW ?>"><i class="material-icons">edit</i></a>
                        <a class="buttonWakwaw modal-trigger" href="#delete<?php echo $value->ID_SW ?>"><i class="material-icons">delete</i></a>
                    </tr>

                    <!-- Modal View data-->
                    <div class="modal modal-fixed-footer" id="get<?php echo $value->ID_SW ?>">
                      <div class="modal-content">
                        <h5><?php echo $value->Nama_Aplikasi ?></h5>
                        <br>
                        <div class="row">
                          <div class="col s6">
                            <label>Owner Aplikasi</label>
                            <p> <?php echo $value->Nama_Unit ?></p>
                            <label>Jenis Aplikasi</label>
                            <p><?php echo $value->Jenis ?></p>
                            <label>Vendor</label>
                            <p> <?php echo $value->Nama_Vendor ?></p>
                            <label>Kondisi Aplikasi</label>
                            <p> <?php echo $value->Kondisi_Asset ?></p>
                            <label>Status Aplikasi</label>
                            <p> <?php echo $value->Status ?></p>
                            <label>Fungsi</label>
                            <p> <?php echo $value->Fungsi ?></p>
                            <label>Harga</label>
                            <p> <?php echo $value->Harga ?></p>
                            <label>Deskripsi</label>
                            <p> <?php echo $value->Detail_Deskripsi ?></p>
                            <label>Spesifikasi</label>
                            <p> <?php echo $value->Spesifikasi ?></p>
                            <label>Lokasi</label>
                            <p> <?php echo $value->Nama_Lokasi ?></p>
                            <label>Lokasi Data Center</label>
                            <p> <?php echo $value->Nama_Lokasi_DC ?></p>
                          </div>
                          <div class="col s6">
                            <label>Nama Server</label>
                            <p> <?php echo $value->Nama_Server ?></p>
                            <label>Platform</label>
                            <p> <?php echo $value->Platform ?></p>
                            <label>Database</label>
                            <p> <?php echo $value->Database ?></p>
                            <label>IP Address</label>
                            <p> <?php echo $value->IP_Address ?></p>
                            <label>Hostname</label>
                            <p> <?php echo $value->Hostname ?></p>
                            <label>Memory</label>
                            <p> <?php echo $value->Memory ?></p>
                            <label>Storage</label>
                            <p> <?php echo $value->Storage ?></p>
                            <label>CPU</label>
                            <p> <?php echo $value->CPU ?></p>
                            <label>Mesin Server</label>
                            <p> <?php echo $value->Mesin_Server ?></p>
                            <label>Site</label>
                            <p> <?php echo $value->Site ?></p>
                            <label>Back Up Realtime</label>
                            <p> <?php echo $value->BackUp_Real_Time ?></p>
                            <label>Waktu Pembelian/Sewa</label>
                            <p> <?php echo $value->Tgl_Pembelian ?></p>
                          </div>
                        </div>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="modal-close waves-effect btn red darken-1">Close</button>
                      </div>
                    </div>

                    <!-- Modal edit -->
                    <div class="modal modal-fixed-footer" id="edit<?php echo $value->ID_SW ?>">
                      <form id="edit" action="<?php echo site_url('Software/update') ?>" method="post">
                        <div class="modal-content">
                          <div class="col s12">
                            <h5>Update Software</h5>
                          </div>
                          <br>

                          <div class="col s6">
                            <div class="row">
                              <input type="hidden" name="ID_SW" value="<?php echo $value->ID_SW ?>">
                              <div class="input-field col s12">

                                <input placeholder="Masukan Nama Software" name="Nama_Aplikasi" id="Nama_Aplikasi" value="<?php echo $value->Nama_Aplikasi ?>" type="text" class="validate">
                                <label>Nama Software</label>
                              </div>
                              <div class="input-field col s12">
                                <select name="Owner_App" id="Owner_App" form="edit">
                                  <option value="<?php echo $value->ID_Entity ?>" disabled selected><?php echo $value->Nama_Unit ?></option>
                                  <?php
                                  $sql = $this->db->query("SELECT * FROM entity");
                                  foreach ($sql->result_array() as $option) :
                                    ?>
                                    <option value="<?php echo $option['ID_Entity']; ?>"><?php echo $option['Nama_Unit']; ?></option>
                                  <?php endforeach; ?>
                                </select>
                                <label>Owner Software</label>
                              </div>
                              <div class="input-field col s12">
                                <select name="Jenis_App" form="edit">
                                  <option value="" disabled selected><?php echo $value->Jenis ?></option>
                                  <?php
                                  $sql = $this->db->query("SELECT * FROM jenis_software");
                                  foreach ($sql->result_array() as $option) :
                                    ?>
                                    <option value="<?php echo $option['ID_Jenis_SW']; ?>"><?php echo $option['Jenis']; ?></option>
                                  <?php endforeach; ?>
                                </select>
                                <label>Jenis Software</label>
                              </div>

                              <div class="input-field col s12">
                                <select name="Developed_By" id="Developed_By" form="edit">
                                  <option value="" disabled selected><?php echo $value->Nama_Vendor ?></option>
                                  <?php
                                  $sql = $this->db->query("SELECT * FROM vendor");
                                  foreach ($sql->result_array() as $option) :
                                    ?>
                                    <option value="<?php echo $option['ID_Vendor']; ?>"><?php echo $option['Nama_Vendor']; ?></option>
                                  <?php endforeach; ?>
                                </select>
                                <label>Developed By</label>
                              </div>

                              <div class="input-field col s12">
                                <select name="Kondisi_App" id="Kondisi_App" form="edit">
                                  <option value="" disabled selected><?php echo $value->Kondisi_Asset ?></option>
                                  <?php
                                  $sql = $this->db->query("SELECT * FROM kondisi_asset");
                                  foreach ($sql->result_array() as $option) :
                                    ?>
                                    <option value="<?php echo $option['ID_Kondisi']; ?>" name="Kondisi_App"><?php echo $option['Kondisi_Asset']; ?></option>
                                  <?php endforeach; ?>
                                </select>
                                <label>Kondisi Software</label>
                              </div>
                              <div class="input-field col s12">
                                <input placeholder="Masukan Fungsi" name="Fungsi" id="Fungsi" value="<?php echo $value->Fungsi ?>" type="text" class="validate">
                                <label>Fungsi</label>
                              </div>
                              <div class="input-field col s12">
                                <select name="Status_App" id="Status_App" form="edit">
                                  <option value="" disabled selected><?php echo $value->Status ?></option>
                                  <?php
                                  $sql = $this->db->query("SELECT * FROM status_asset");
                                  foreach ($sql->result_array() as $option) :
                                    ?>
                                    <option value="<?php echo $option['ID_Status']; ?>"><?php echo $option['Status']; ?></option>
                                  <?php endforeach; ?>
                                </select>
                                <label>Status Asset</label>
                              </div>
                              <div class="input-field col s12">
                                <input placeholder="Masukan Harga" name="Harga" id="Harga" value="<?php echo $value->Harga ?>" type="text" class="validate">
                                <label>Harga</label>
                              </div>
                              <div class="input-field col s12">
                                <input placeholder="Masukan Deskripsi" name="Detail_Deskripsi" id="Detail_Deskripsi" value="<?php echo $value->Detail_Deskripsi ?>" type="text" class="validate">
                                <label>Deskripsi</label>
                              </div>
                              <div class="input-field col s12">
                                <input placeholder="Masukan Spesifikasi" name="Spesifikasi" id="Spesifikasi" value="<?php echo $value->Spesifikasi ?>" type="text" class="validate">
                                <label>Spesifikasi</label>
                              </div>
                              <div class="input-field col s12">
                                <select name="Lokasi" id="Lokasi" form="edit">
                                  <option value="" disabled selected><?php echo $value->Nama_Lokasi ?></option>
                                  <?php
                                  $sql = $this->db->query("SELECT * FROM lokasi");
                                  foreach ($sql->result_array() as $option) :
                                    ?>
                                    <option value="<?php echo $option['ID_Lokasi']; ?>"><?php echo $option['Nama_Lokasi']; ?></option>
                                  <?php endforeach; ?>
                                </select>
                                <label>Lokasi</label>
                              </div>
                              <div class="input-field col s12">
                                <select name="Lokasi_DC" id="Lokasi_DC" form="edit">
                                  <option value="" disabled selected><?php echo $value->Nama_Lokasi_DC ?></option>
                                  <?php
                                  $sql = $this->db->query("SELECT * FROM lokasi_data_center");
                                  foreach ($sql->result_array() as $option) :
                                    ?>
                                    <option value="<?php echo $option['ID_Lokasi_DC']; ?>"><?php echo $option['Nama_Lokasi_DC']; ?>
                                    </option>
                                  <?php endforeach; ?>
                                </select>
                                <label>Lokasi Data Center</label>
                              </div>
                            </div>
                          </div>
                          <div class="col s6">
                            <div class="row">
                              <div class="input-field col s12">
                                <input placeholder="Masukan Nama Server" name="Nama_Server" id="Nama_Server" value="<?php echo $value->Nama_Server ?>" type="text" class="validate">
                                <label>Nama Server</label>
                              </div>
                              <div class="input-field col s12">
                                <select name="Region_Server" id="Region_Server" form="edit">
                                  <option value="" disabled selected><?php echo $value->GAS ?></option>
                                  <?php
                                  $sql = $this->db->query("SELECT * FROM region_server");
                                  foreach ($sql->result_array() as $option) :
                                    ?>
                                    <option value="<?php echo $option['ID_Region_Server']; ?>"><?php echo $option['GAS']; ?></option>
                                  <?php endforeach; ?>
                                </select>
                                <label>Region Server</label>
                              </div>
                              <div class="input-field col s12">
                                <input placeholder="Masukan Platform" name="Platform" id="Platform" value="<?php echo $value->Platform ?>" type="text" class="validate">
                                <label>Platform</label>
                              </div>
                              <div class="input-field col s12">
                                <input placeholder="Masukan Database" name="Database" id="Database" value="<?php echo $value->Database ?>" type="text" class="validate">
                                <label>Database</label>
                              </div>
                              <div class="input-field col s12">
                                <input placeholder="Masukan IP Address" name="IP_Address" id="IP_Address" value="<?php echo $value->IP_Address ?>" type="text" class="validate">
                                <label>IP Address</label>
                              </div>
                              <div class="input-field col s12">
                                <input placeholder="Masukan Hostname" name="Hostname" id="Hostname" value="<?php echo $value->Hostname ?>" type="text" class="validate">
                                <label>Hostname</label>
                              </div>
                              <div class="input-field col s12">
                                <input placeholder="Masukan Memory" name="Memory" id="Memory" value="<?php echo $value->Memory ?>" type="text" class="validate">
                                <label>Memory</label>
                              </div>
                              <div class="input-field col s12">
                                <input placeholder="Masukan Storage" name="Storage" id="Storage" value="<?php echo $value->Storage ?>" type="text" class="validate">
                                <label>Storage</label>
                              </div>
                              <div class="input-field col s12">
                                <input placeholder="Masukan CPU" name="CPU" id="CPU" value="<?php echo $value->CPU ?>" type="text" class="validate">
                                <label>CPU</label>
                              </div>
                              <div class="input-field col s12">
                                <input placeholder="Masukan Mesin Server" name="Mesin Server" id="Mesin Server" value="<?php echo $value->Mesin_Server ?>" type="text" class="validate">
                                <label>Mesin Server</label>
                              </div>
                              <div class="input-field col s12">
                                <select name="Site" form="edit">
                                  <option value="" disabled selected>Choose your option</option>
                                  <option value="google.com">google.com</option>
                                  <option value="youtube.com">youtube.com</option>
                                  <option value="gg.com">gg.com</option>
                                </select>
                                <label>Site</label>
                              </div>
                              <div class="input-field col s12">
                                <select name="BackUp_Real_Time" form="edit">
                                  <option value="" disabled selected>Choose your option</option>
                                  <option value="21/07/2019">21/07/2019</option>
                                  <option value="30/01/2016">30/01/2016</option>
                                  <option value="18/10/2013">18/10/2013</option>
                                </select>
                                <label>Backup Realtime</label>
                              </div>
                              <div class="input-field col s12" form="edit">
                                <label for="birthdate">Waktu Pembelian/Sewa</label>
                                <input placeholder="" name="Tgl_Pembelian" type="text" class="datepicker">
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="modal-footer">
                          <button class="waves-effect waves-light btn light-blue darken-4" type="submit">Update</button>
                          <button type="button" class="modal-close waves-effect btn red darken-1">Cancel</button>
                        </div>
                      </form>
                    </div>

                    <!-- Modal Delete -->
                    <div class="modal" id="delete<?php echo $value->ID_SW ?>">
                      <form action="<?php echo site_url('Software/delete') ?> " method="post">
                        <div class="modal-content">
                          <h5>WARNING!</h5>
                          <p>Are you sure you want to delete this data?</p>
                          <input type="hidden" name="ID_SW" value="<?php echo $value->ID_SW ?>">
                        </div>
                        <div class="modal-footer">
                          <button class="waves-effect waves-light btn red darken-1">Delete</button>
                          <button type="button" class="waves-effect waves-light btn white" onclick="$('#delete<?php echo $value->ID_SW ?>').modal('close')"><span class="black-text">Cancel</span></button>
                        </div>
                      </form>
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
  <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
  <script src="<?= base_url('assets') ?>/js/materialize.js"></script>
  <script src="<?= base_url('assets') ?>/js/init.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
  <script>
    $(document).ready(function() {
      $('.modal').modal();
    });
  </script>
</body>

</html>