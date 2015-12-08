<?php include 'koneksi.php'; ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>The Smiling Campus LP3I</title>
    <link rel="stylesheet" href="sayangsayang.css" type="text/css" charset="utf-8">
    <link rel="stylesheet" href="custom.css" type="text/css" charset="utf-8">

    <!--
    Tiga baris javascipt di bawah ini hanya terdapat satu-satunya pada
    tag head halaman ini saja! Dibuku, tidak diulas juga isi dari script ini.
    -->
    <script type="text/javascript" src="input.js"></script>
    <script type="text/javascript" src="cekuser.js"></script>
    <script type="text/javascript" src="detail.js"></script>

    <!-- SpryEffects.js was here (dan hanya satu-satunya) -->
  </head>

  <body id="login-page">
    <header>
      <div class="wrapper row">
        <h1 class="logo col">E-management LP3I</h1>
      </div>
    </header>

    <main>
      <div class="wrapper">
        <form class="login" action="cekuser.pphp" method="post">
          <h2>Login Management</h2>
          <div class="alert">
            <?php echo (isset($pesan)) ? $pesan : "" ; ?>
          </div>
          <div>
            <label for="ouser">User ID</label>
            <input type="text" name="ouser">
          </div>
          <div>
            <label for="opwd">Password</label>
            <input type="password" name="opwd">
          </div>
          <div>
            <label for="aslog">User ID</label>
            <select name="aslog">
              <option value="">--- Pilih Login Sebagai ---</option>
              <option value="1">Administrasi</option>
              <option value="2">Marketing</option>
              <option value="3">Keuangan</option>
              <option value="4">Pendidikan</option>
              <option value="5">Pemagangn Kerja</option>
            </select>
          </div>
          <input type="submit" name="B1" value="Login">
        </form>
      </div>
    </main>

    <footer>
      <div class="wrapper row">
        <div class="col" style="width: 18%;">CyberLP3I 2009</div>
        <div class="col" style="width: 43%;">
          <a href="//www.lp3i.ac.id">HOME</a>
          | <a href="//itsupport.lp3i.ac.id">IT Support</a>
          | <a href="//lp3igroup.lp3i.ac.id">LINK LP3I GROUP</a>
        </div>
        <div class="col" style="width: 39%; text-align: right;">best view in IE7 Latest and Mozilla Firefox</div>
      </div>
    </footer>

  </body>
</html>
