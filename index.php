﻿<?php 
error_reporting(0);
session_start();
include "koneksi.php";
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Tryout Online App</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
     <!-- MORRIS CHART STYLES-->
   
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
     <!-- TABLE STYLES-->
    <link href="assets/js/dataTables/dataTables.bootstrap.css" rel="stylesheet" />
</head>

<style>
    .row1 {
  margin-top: 40px;
  margin-bottom: 20px;
  background-color: #FAEBD7;
  border: 1px solid #DCDCDC;
  border-radius: 4px;
  -webkit-box-shadow: 0 1px 1px rgba(0, 0, 0, .05);
          box-shadow: 0 1px 1px rgba(0, 0, 0, .05);
  padding-right: 15px;
  padding-left: 15px;
  padding-bottom: 15px;
}
    .row2 {
margin-top: 50px;
  margin-bottom: 20px;
  background-color: #87CEFA;
  border: 1px solid #DCDCDC;
  border-radius: 4px;
  -webkit-box-shadow: 0 1px 1px rgba(0, 0, 0, .05);
          box-shadow: 0 1px 1px rgba(0, 0, 0, .05);
  padding-right: 25px;
  padding-left: 25px;
  padding-bottom: 15px;
}
</style>

<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php"><?php if(isset($_SESSION['id_user'])){ echo ucwords($_SESSION['username']);} else {echo"tryoutonline.com";}?></a> 
            </div>
  <div style="color: black;
padding: 15px 50px 5px 50px;
float: right;
font-size: 16px;">

<?php
				$echo = base64_decode($acak);
				if(!isset($_SESSION['id_user'])){
				?>
					<form class="form-group input-group input-group-lg" action="?page=login" method="post">
					<div class="form-group">
                        <input type="text" placeholder="username" name="username"/> 
                        <input type="password" placeholder="password" name="password"/> 
                        <input type="submit" name="login" class="btn btn-danger square-btn-adjust" value="Login" />
						
						</div>
					</form>
				<?php
				}
				else{
				
						echo "<div style='color: white'><script language=Javascript>var d = new Date();
var h = d.getHours();
if (h < 11) { document.write('Selamat pagi, $_SESSION[username]...&nbsp;'); }
else { if (h < 15) { document.write('Selamat siang, pengunjung...'); }
else { if (h < 19) { document.write('Selamat sore, pengunjung...'); }
else { if (h <= 23) { document.write('Selamat malam, pengunjung...'); }
}}}</script><a class='btn btn-danger square-btn-adjust' href='?page=logout'> Logout</a></div>";	
					}
				?>
				


				
        	</a></li>

        </div>
        </nav>   
           <!-- /. NAV TOP  -->
                <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
				<li class="text-center">
				
				<?php
				
					if(isset($_SESSION['id_user'])){ ?>
					<?php
						include "koneksi.php";
			 $tampil=mysql_query("select * from tabel_user where id_user=$_SESSION[id_user]");
					  
                      while($k=mysql_fetch_array($tampil)){
               
					  echo "<td><center><strong></strong><img src =images/".$k['Gambar']." width='147' height='144' style = &rdquo;float:left;&rdquo><center /></td>";
					  echo "<td>$k[nama]</td>";
	
                    }  

             
                    ?>
					
				<?php
					}else{
						?>
				        <img src="gambar/user_online.png" width="147" height="144"></li>
				
				<li class="text-center">
				  <?php
					}
					?>      
				  </li>
				<?php include "menu.php";	?>
                </ul>
               
            </div>
            
        </nav>  
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
               
               
            <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             MTSN.02 MAKASSAR  
                        </div>
                        <div class="panel-body">
                            
							
					<?php
					if(isset($_SESSION['id_user'])){						
					}
					?>
					
                   
		                 <?php 
							if(isset($_GET['page'])){
								$page=htmlentities($_GET['page']);
							}else{
								$page="welcome";
							}
							
							$file="$page.php";
							$cek=strlen($page);
							
							if($cek>10 || !file_exists($file) || empty($page)){
								include ("welcome.php");
							}else{
								include ($file);

							}
						
					      ?>		
							
                            
                        </div>

                    </div>
                    <!--End Advanced Tables -->
                </div>
            </div>
                <!-- /. ROW  -->
            <?php if(isset($_SESSION['id_user'])){ ?>
                <div class = 'row2' style="text-align: justify; font-family: 'Times New Roman, serif';">               
                <h3>
                   <span style="font-weight: bold;"> Untuk Menjawab Soal,</span><br> <br>
                   Caranya pilih menu mata pelajaran -> lalu pilih paket dari mata pelajaran yang dipilih, lalu isi soal yang ada di aplikasi tersebut, setelah mengisi jawaban klik tombol selesai. Setelah itu anda akan langsung mendapatkan nilai dari pertanyaan yang anda jawab.
                </h3> </div>
                <?php
                } else {?>
            <div class = "row1" style= "text-align: justify; font-family: 'Times New Roman, serif' ;">
                <h3>
                Tryout sebagai salah satu upaya mengukur kemampuan siswa sudah ada pada jalur yang tepat karena kegiatan itu dapat memberikan gambaran tentang kompetensi yang telah dicapai/dikuasai oleh siswa, dan memberikan pengalaman kepada siswa mengerjakan tes sebagaimana yang akan dilakukan pada UN.
                </h3>
            </div>
            <div class = "row2" style="text-align: center; font-family: 'Times New Roman, serif' ;">
                <h3>
                Silahkan mengisi username dan password terlebih dahulu untuk melakukan kegiatan tryout online 
                </h3>
            </div>

        <?php } ?>
        </div>

    </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
     <!-- DATA TABLE SCRIPTS -->
    <script src="assets/js/dataTables/jquery.dataTables.js"></script>
    <script src="assets/js/dataTables/dataTables.bootstrap.js"></script>
        <script>
            $(document).ready(function () {
                $('#dataTables-example').dataTable();
            });
    </script>
         <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
    
   
                   

</body>
</html>
