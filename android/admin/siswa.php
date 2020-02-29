<style type="text/css">
<!--
.style1 {font-size: 12px}
.style3 {font-size: 10px}
.style4 {
	color: #000000;
	font-weight: bold;
}
-->
</style>
        <br/>
		<br/>
		<div class="panel panel-default">
		<div class="panel panel-default">
<div class="panel-heading">
  <table width="804" border="0">
    <tr>
      <td width="353">Tabel Hasil </td>
      <td width="441"><div align="right" class="style4"><a href="cetak.php" ><img src="images/icons8-print-26.png" width="26" height="26" /></a></div></td>
    </tr>
  </table>
</div>
                        <div class="panel-body">        
           <div class="table-responsive">
                                <span class="style3">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                </span>
                <thead>
                    <tr>
					<th width="1%">No</th>
		            <th>Tanggal Ujian</th>
					<th width="20%">Nama</th>
					<th width="10%">NISN</th>
					<th>Alamat</th>
					<th>No Tlp</th>
					<th>Point</th>  
					<th>Status</th>  
			
                    </tr>
</thead>
                <tbody>
                    <?php
               	    include "koneksi.php";
				 	  //$tgl = date('Y-m-d');
					   $tampil=mysql_query("select tabel_nilai.tanggal, tabel_nilai.point, tabel_user.nama_user, tabel_user.nisn, tabel_user.alamat, tabel_user.notlp from tabel_nilai inner join tabel_user on tabel_nilai.id_user = tabel_user.id_user ");
					  $no = 1;	  
                      while($k=mysql_fetch_array($tampil)){
                      echo "<tr>";
                      echo "<td>$no</td>";						
					  echo "<td>$k[tanggal]</td>";
					  echo "<td>$k[nama_user]</td>";
					  echo "<td>$k[nisn]</td>";
					   echo "<td>$k[alamat]</td>";
					   echo "<td>$k[notlp]</td>";
					    echo "<td>$k[point]</td>";
						  ?> <td><?php if  ($k['point'] >75) {echo "<span class='btn btn-success btn-lg'>lulus</span>";} else {echo"<span class='btn btn-danger btn-lg'>tidak lulus</span>";}?></span></td><?php
					  
					  echo "</tr>";
                      $no++;
                    }  
					

   
echo "</tbody></table> ";         
                    ?>
			 </div>
			 </div>
			 </div>
			 
			 
  