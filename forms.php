<?php

include 'config/koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title></title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    

    </ul>

    <!-- SEARCH FORM -->
    

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
        
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="#" class="dropdown-item">
          
          </a>
            
        
      
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
    
          
          
          
          
        </div>
      </li>
      
    
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="dashboard.php" class="brand-link">
      <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Penilaian Angka Kredit</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      

      <!-- SidebarSearch Form -->
    

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-open">
          
          </li>         
  
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
                Forms 
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="forms.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Forms Input</p>
                </a>
              </li>
            </ul>
          </li>
          
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Tables
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="tabelpenilaian.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tabel Penilaian</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="tabelpns.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tabel PNS</p>
                </a>
              </li>
              
            </ul>
          </li>
         
          
          
          
          
       
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <div class="box box-primary">
              <div class="box-header with-border">
            <h3 class="box-title">FORM INPUT DATA</h3>
          </div><!-- /.col -->
          <form action="submit.php" method="post">
            <div class="box-body">
              <div class="form-group">



                <label for="exampleInputTanggal_Bulan_Tahun1">Tanggal_Bulan_Tahun</label>
                 <input type="date" class="form-control" id="Tanggal_Bulan_Tahun" name="Tanggal_Bulan_Tahun" placeholder="">
                 <label for="exampleInputKeterangan1">Nama</label>
    <input type="text" class="form-control" id="exampleInputKeterangan1" name="Nama" placeholder="">
    <label for="exampleInputButirKegiatan1">ButirKegiatan</label>
    <br>      
 
    <select class="form-control" id="nilai" name="Butirkegiatan" onchange="validasi();">
      <option hidden>--- Pilih Butir Kegiatan ---</option>
<?php
      $query="SELECT * FROM butirkegiatan";
      $result= mysqli_query($conn, $query);
      while ($data_kegiatan=mysqli_fetch_assoc($result))
      {
        echo '<option value="'.$data_kegiatan['Nilai'].'">'.$data_kegiatan['NamaButirKegiatan'].'</option>';
      }
      ?>      
      <input type="hidden" id="butir" name="ButirKegiatan" />
    </select>
    <br>                      
 
    <div class="form-group">
      <label for="exampleInputAngka/Skor1">Nilai</label>                  
      <input type="text" class="form-control" id="exampleInputAngkaSkor1" name="Nilai" placeholder="" onkeyup="totalnilai();" readonly/>
 
      <script>
       function validasi (){
        var vbiaya4text =document.getElementById("nilai");
        var ddtk1 = vbiaya4text.options[vbiaya4text.selectedIndex].value;
        document.getElementById("exampleInputAngkaSkor1").value = ddtk1;
 
        var selectedText= $("#nilai option:selected").text();
        document.getElementById("butir").value = selectedText;
      };  
    </script>
 
 
 
<!--                </div>
 <div class="form-group">-->
  <label for="exampleInputJumlah1">Jumlah</label>
  <input type="text" class="form-control" id="exampleInputJumlah1" placeholder="" name="Jumlah" onkeyup="totalnilai();"/>
<!--                </div>
  <div class="form-group">-->
    <label for="exampleInputTotalNilai1">TotalNilai</label>
    <input type="text" class="form-control" id="exampleInputTotalNilai1" name="TotalNilai" placeholder="" readonly/>
 
 
   <script>
      function totalnilai() {
        var txtFirstNumberValue = document.getElementById('exampleInputAngkaSkor1').value;
        var txtSecondNumberValue = document.getElementById('exampleInputJumlah1').value;
        var result = parseFloat(txtFirstNumberValue) * parseFloat(txtSecondNumberValue);
        if (!isNaN(result)) {
         document.getElementById('exampleInputTotalNilai1').value = result;
       }
     }
   </script>
 
 
 
 </div>
 
</div>
<!-- /.box-body -->
 
<div class="box-footer">
 
  <button type="submit"  name="submit" class="btn btn-primary">Submit</button>
</div>
 
</form>
</div>
                 
<!-- /.box -->
 
<!-- Form Element sizes -->
 
 
 
<!-- /.box-body -->
<!-- /.row -->
 
 
 
 
 
 
<!-- /btn-group -->
 
<!-- /btn-group -->
 
 
 
 
<!-- /input-group -->
</div>
<!-- /.box-body -->
</div>
<!-- /.box -->
 
</div>
<!--/.col (left) -->
<!-- right column -->
<div class="col-md-6">
  <!-- Horizontal Form -->
  <div class="box box-info">
 
    <!-- /.box-header -->
    <!-- form start -->
 
  </div>
  <!-- /.box -->
  <!-- general form elements disabled -->
  <div class="box box-warning">
 
  </div>
 
  <!-- textarea -->
 
 
 
  <!-- input states -->
 
 
 
 
  <!-- checkbox -->
 
 
 
 
</div>
 
<!-- radio -->
 
 
 
 
 
<!-- select -->
 
 
<!-- Select multiple-->
 
 
 
</div>
<!-- /.box-body -->
</div>
<!-- /.box -->
</div>
<!--/.col (right) -->
</div>
 
 
</div><!-- /#wrapper -->





            

















          </form>
          
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
      
          
          
          
          
          <!-- ./col -->
          
            <!-- small box -->
          
          
          
          <!-- ./col -->

        <!-- /.row -->
        <!-- Main row -->
        <div class="row">
          <!-- Left col -->
          <section class="col-lg-7 connectedSortable">
            <!-- Custom tabs (Charts with tabs)-->
            
            <!-- /.card -->

            <!-- DIRECT CHAT -->
            
             
             

                
              </div>
              <!-- /.card-header -->
              
              <!-- /.card-body -->
              
              <!-- /.card-footer-->
            </div>

              
              
                </ul>
              </div>
              <!-- /.card-body -->
              
            <!-- /.card -->
          </section>
          <!-- /.Left col -->
          <!-- right col (We are only adding the ID to make the widgets sortable)-->
          <section class="col-lg-5 connectedSortable">

            <!-- Map card -->
           
           
                <!-- card tools -->
           
                <!-- /.card-tools -->
              </div>
              
              <!-- /.card-body-->
                <!-- /.row -->
              </div>
            </div>
            <!-- /.card -->

            <!-- solid sales graph -->
            
               

                
              
              
              <!-- /.card-body -->
              
                  <!-- ./col -->
              
                  <!-- ./col -->
                  
                  <!-- ./col -->
                
            <!-- /.card -->

            <!-- Calendar -->
            
                
                <!-- tools card -->
            
              <!-- /.card-header -->
              
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </section>
          <!-- right col -->
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
</body>
</html>
