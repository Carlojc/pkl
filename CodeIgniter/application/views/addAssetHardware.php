<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
  <title>Add AssetHardware</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="<?=base_url('assets')?>/css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="<?=base_url('assets')?>/css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <style>
      .buttonWakwaw {
      background-color: transparent;
      border : solid #2196f3  1px;
      border-radius: 5px;
    }
    .buttonWakwaw:hover {
      background-color: white;
      border : solid #2196f3  1px;
      color: black;
    }
    </style>
</head>
<div class="navbar-fixed">
<nav class="z-depth-2" role="navigation" style="background-color: #003366">
  <div class="nav-wrapper">
    <img src="<?=base_url('assets')?>/img/logo.jpg" style="height: 65px;">
    <a id="logo-container" href="#" class="brand-logo" style="font-weight: bold;color: #f8a55d; margin-left: 40px;">IT Service Catalogues</a>
    
    <ul class="right hide-on-med-and-down" style="margin-right: 40px;">
      <li><a class="white-text" href="<?=base_url('asset/logout')?>"><b>Logout<i class="material-icons right">exit_to_app</i></b></a></li>
    </ul>
    <ul id="nav-mobile" class="sidenav sidenav-fixed" style="top: 65px; width: 250px; z-index: -1; background-color:#004b66;">
      <li>
        <div style="margin-left: 25px; margin-top: 20px; display: flex;">
          <div style="width: 50px; margin-right: 10px; margin-top: 10px;"><img class="circle" style="width: 50px; height: 50px;" src="<?=base_url('assets')?>/img/background2.jpg"></div>
          <div style="width: 200px;" style="margin-top: -10px;">
            <div style="height: 20px; word-wrap: break-word;"><b>John Doe</b></div>
            <div style="height: 0px;">Administrator</div>
          </div>
        </div>
      </li>
        <li><div class="divider"></div></li>  
        <li><a class="white-text" href="<?=base_url('asset/beranda')?>">Beranda</a></li>
        <li>
          <ul class="collapsible collapsible-accordion">
            <li>
              <a class="collapsible-header white-text" style="padding-left: 32px">Hardware</a>
              <div class="collapsible-body" style="background-color: #00769d">
                <ul style="padding-left: 20px;">
                  <li><a class="white-text" href="<?=base_url('asset/hardware')?>">Asset Hardware</a></li>
                  <li><a class="white-text" href="<?=base_url('asset/jenis_hardware')?>">Jenis Hardware</a></li>
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
                    <li><a class="white-text" href="<?=base_url('asset/software')?>">Asset Software</a></li>
                    <li><a class="white-text" href="<?=base_url('asset/jenis_software')?>">Jenis Software</a></li>
                  </ul>
                </div>
              </li>
            </ul>
          </li>
        <li><a class="white-text" href="<?=base_url('asset/entity')?>">Entitiy</a></li>
        <li><a class="white-text" href="<?=base_url('asset/kondisi_asset')?>">Kondisi Asset</a></li>
        <li><a class="white-text" href="<?=base_url('asset/lokasidatacentre')?>">Lokasi Data Center</a></li>
        <li><a class="white-text" href="<?=base_url('asset/regionserver')?>">Region Server</a></li>
        <li><a class="white-text" href="<?=base_url('asset/user')?>">User</a></li>
        <li><a class="white-text" href="<?=base_url('asset/vendor')?>">Vendor</a></li>
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
        <div class="col s12 grey-text text-darken-2"><b style="font-size: 37px">Asset Hardware</b>
          <br>
        Last Update : 20 April 2019 08:08:08
        </div>
      </div>
      <div class="row">
        <div class="col s12">
          <div class="card z-depth-3">
            <div class="card-content">
                <div class="row">
                  <form action="<?php echo site_url('Hardware/save') ?>" method="post">
                    <div class="col s6">
                    <div class="row">
                      <div class="input-field col s12">
                        <input placeholder="Masukan Nama Hardware" name="Nama_HW" id="first_name" type="text" class="validate">
                        <label for="first_name">Nama Hardware</label>
                      </div>
                      <div class="input-field col s12">
                        <select name="Owner_HW" id="Owner_HW">
                        <option value="" disabled selected>Choose your option</option>
                        <?php
                        $sql = $this->db->query("SELECT * FROM entity");
                        foreach ($sql->result_array() as $option) :
                          ?>
                          <option value="<?php echo $option['ID_Entity'];?>" name="Owner_HW"><?php echo $option['Nama_Unit']; ?></option>
                        <?php endforeach; ?>
                        </select>
                        <label>Owner Hardware</label>
                      </div>
                      <div class="input-field col s12">
                        <select name="Jenis_HW" id="Jenis_HW">
                          <option value="" disabled selected>Choose your option</option>
                        <?php
                        $sql = $this->db->query("SELECT * FROM jenis_hardware");
                        foreach ($sql->result_array() as $option) :
                          ?>
                          <option value="<?php echo $option['ID_Jenis_HW']; ?>" name="Jenis_HW"><?php echo $option['Jenis_HW']; ?></option>
                        <?php endforeach; ?>
                        </select>
                        <label>Jenis Hardware</label>
                      </div>
                      <div class="input-field col s12">
                        <select name="Kondisi_HW" id="Kondisi_HW">
                          <option value="" disabled selected>Choose your option</option>
                        <?php
                        $sql = $this->db->query("SELECT * FROM kondisi_asset");
                        foreach ($sql->result_array() as $option) :
                          ?>
                          <option value="<?php echo $option['ID_Kondisi']; ?>" name="Kondisi_HW"><?php echo $option['Kondisi_Asset']; ?></option>
                        <?php endforeach; ?>
                        </select>
                        <label>Kondisi Hardware</label>
                      </div>
                      <div class="input-field col s12">
                          <input id="last_name" placeholder="Masukan fungsi" name="Fungsi" type="text" class="validate">
                          <label for="last_name">Fungsi</label>
                      </div>
                      <div class="input-field col s12">
                        <select name="Status_HW" id="Status_HW">
                          <option value="" disabled selected>Choose your option</option>
                        <?php
                        $sql = $this->db->query("SELECT * FROM status_asset");
                        foreach ($sql->result_array() as $option) :
                          ?>
                          <option value="<?php echo $option['ID_Status']; ?>" name="Status_HW" ><?php echo $option['Status']; ?></option>
                        <?php endforeach; ?>
                        </select>
                        <label>Status Hardware</label>
                      </div>
                      <div class="input-field col s12">
                        <input id="last_name" placeholder="Rp. 0101 " name="Harga" type="number" class="validate">
                        <label for="last_name">Harga</label>
                      </div>
                    </div>
                    </div>
                    <div class="col s6">
                      <div class="row">
                        
                        <div class="input-field col s12">
                          <textarea id="textarea1" placeholder="" name="Detail_Deskripsi" class="materialize-textarea"></textarea>
                          <label for="textarea1">Deskripsi Hardware</label>
                      </div>
                     
                      
                          <div class="input-field col s12">
                            <textarea id="textarea1" placeholder="" name="Spesifikasi" class="materialize-textarea"></textarea>
                            <label for="textarea1">Spesifikasi Hardware</label>
                        </div>
                        <div class="input-field col s12">
                        <select name="Penyedia_HW" id="Penyedia_HW">
                          <option value="" disabled selected>Choose your option</option>
                        <?php
                        $sql = $this->db->query("SELECT * FROM vendor");
                        foreach ($sql->result_array() as $option) :
                          ?>
                          <option value="<?php echo $option['ID_Vendor']; ?>" name="Penyedia_HW"><?php echo $option['Nama_Vendor']; ?></option>
                        <?php endforeach; ?>
                        </select>
                        <label>Penyedia Hardware</label>
                      </div>
                        <div class="input-field col s12">
                        <select name="Lokasi_HW" id="Lokasi_HW">
                          <option value="" disabled selected>Choose your option</option>
                        <?php
                        $sql = $this->db->query("SELECT * FROM lokasi");
                        foreach ($sql->result_array() as $option) :
                          ?>
                          <option value="<?php echo $option['ID_Lokasi']; ?>" name="Lokasi_HW"><?php echo $option['Nama_Lokasi']; ?></option>
                        <?php endforeach; ?>
                        </select>
                        <label>Lokasi</label>
                      </div>
                        <div class="input-field col s12">
                            <label for="birthdate">Waktu Pembelian/Sewa</label>
                            <input placeholder="" name="Tgl_Pembelian" type="text" class="datepicker">
                          </div>
                        </div>
                    </div>
                    <div class="col s12 center">
                      <button class="btn waves-effect waves-light blue-text buttonWakwaw z-depth-0" type="submit" name="action" style="margin-right: 20px;">Cancel</button>
                      <button class="btn waves-effect waves-light blue" type="submit" name="action">Add
                        <i class="material-icons right">send</i>
                      </button>
                    </div>
                    
                  </form>
                  </div>
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
