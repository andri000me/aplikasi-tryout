<?php
if(isset($_SESSION['id_admin'])){
	include ("koneksi.php");
	
	if (isset($_POST['submit'])){
		$id=htmlentities((trim($_POST['id'])));
		$pertanyaan=ucwords(htmlentities((trim($_POST['pertanyaan']))));
		$pilihan_a=ucwords(htmlentities((trim($_POST['pilihan_a']))));
		$pilihan_b=ucwords(htmlentities((trim($_POST['pilihan_b']))));
		$pilihan_c=ucwords(htmlentities((trim($_POST['pilihan_c']))));
		$pilihan_d=ucwords(htmlentities((trim($_POST['pilihan_d']))));
		
		$jawaban=ucwords(htmlentities((trim($_POST['jawaban']))));
		//$publish=htmlentities((trim($_POST['publish'])));
		//$tipe=htmlentities((trim($_POST['tipe'])));
		
		$query=mysql_query("update tabel_soal_latihan set pertanyaan='$pertanyaan',pilihan_a='$pilihan_a',pilihan_b='$pilihan_b',
		pilihan_c='$pilihan_c',pilihan_d='$pilihan_d',jawaban='$jawaban' where id_latihan='$id'");
		
		if($query){
			?><script language="javascript">document.location.href="?page=view1";</script><?php
		}else{
			echo mysql_error();
		}
		
	}else{
		unset($_POST['submit']);
	}
	?>

    <h1>Input Soal</h1>
    
    <?php
	$id=$_GET['id'];
	$query=mysql_query("select * from tabel_soal_latihan where id_latihan='$id'");
	$row=mysql_fetch_array($query);
	?>
  

<div class="col-md-6">
    <form action="?page=edit1" method="post">
	<input type="hidden" name="id" value="<?php echo $id;?>" />
	
	<div class="form-group">
	 <label>Input Pertanyaan</label>
    <textarea class="form-control" rows="3" name="pertanyaan" placeholder="Pertanyaan"><?php echo $row['pertanyaan']?></textarea>
    </div>
	
	<div class="form-group">
	<label>Pilihan A</label>
	<input name="pilihan_a" class="form-control" value="<?php echo $row['pilihan_a'];?>" />
    </div>
	
	<div class="form-group">
	<label>Pilihan B</label>
	<input name="pilihan_b" class="form-control" value="<?php echo $row['pilihan_b'];?>" />
    </div>
	
	<div class="form-group">
	<label>Pilihan C</label>
	<input name="pilihan_c" class="form-control" value="<?php echo $row['pilihan_c'];?>" />
    </div>
	
	<div class="form-group">
	<label>Pilihan D</label>
	<input name="pilihan_d" class="form-control" value="<?php echo $row['pilihan_d'];?>" />
    </div>
	
	<div class="form-group">
	<label>Jawaban</label>
	<select name="jawaban" class="btn btn-default dropdown-toggle">
        	<option value="a" <?php if($row['jawaban']=="A"){ echo "selected='selected'"; }?>>A</option>
            <option value="b" <?php if($row['jawaban']=="B"){ echo "selected='selected'"; }?>>B</option>
            <option value="c" <?php if($row['jawaban']=="C"){ echo "selected='selected'"; }?>>C</option>
            <option value="d" <?php if($row['jawaban']=="D"){ echo "selected='selected'"; }?>>D</option>
        </select>
		
		
		
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




    
