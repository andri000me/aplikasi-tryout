<?php
if(isset($_SESSION['id_admin'])){
	include ("koneksi.php");
	
	if (isset($_POST['submit'])){
		//$kategori=ucwords(htmlentities((trim($_POST['kategori']))));
		$pertanyaan=ucwords(htmlentities((trim($_POST['pertanyaan']))));
		$pilihan_a=ucwords(htmlentities((trim($_POST['pilihan_a']))));
		$pilihan_b=ucwords(htmlentities((trim($_POST['pilihan_b']))));
		$pilihan_c=ucwords(htmlentities((trim($_POST['pilihan_c']))));
		$pilihan_d=ucwords(htmlentities((trim($_POST['pilihan_d']))));
		
		$jawaban=ucwords(htmlentities((trim($_POST['jawaban']))));
	
		
		$query=mysql_query("insert into tabel_soal_latihan values('','$pertanyaan','$pilihan_a','$pilihan_b','$pilihan_c','$pilihan_d','$jawaban')");
		
		if($query){
			?><script language="javascript">document.location.href="?page=view1";</script><?php
		}else{
			echo mysql_error();
		}
		
	}else{
		unset($_POST['submit']);
	}
	?>
	
	
	                     <div class="panel panel-back noti-box">
                <span class="icon-box bg-color-green set-icon">
                    <i class="fa fa-desktop"></i>
                </span>
                <div class="text-box" >
                    <p class="main-text">Input Soal latihan </p>
                   
                </div>
             </div>


    <div class="col-md-6">
    <form action="?page=soal1" method="post">
	 
	 <div class="form-group">
     <label></label>
	 </div>
	 
	<div class="form-group">
	  <textarea class="form-control" rows="3" name="pertanyaan" placeholder="Pertanyaan"></textarea>
	</div>
	
	<div class="form-group">
	<input name="pilihan_a" class="form-control" placeholder="Pilihan A" />
    </div>
	
	<div class="form-group">
	<input name="pilihan_b" class="form-control" placeholder="Pilihan B" />
    </div>
	
	<div class="form-group">
	<input name="pilihan_c" class="form-control" placeholder="Pilihan C" />
    </div>
	
	<div class="form-group">
	<input name="pilihan_d" class="form-control" placeholder="Pilihan D" />
    </div>
	
	<div class="form-group">
	<label>Jawaban</label>
	<select name="jawaban" class="btn btn-default dropdown-toggle">
        	<option value="a">A</option>
            <option value="b">B</option>
            <option value="c">C</option>
            <option value="d">D</option>
      </select>
		
		<label></label>
	</div>
	
	<div class="form-group">
	<input name="submit" type="submit" value="Submit" class="btn btn-danger btn-lg" />&nbsp;
    </div>
	
	
    </form>
</div>
    
<?php
}else{
	?><p>Anda belum login. silahkan <a href="index.php">Login</a></p><?php
}
?>


    
