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
      
         
      
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                </span>
                <thead>
                    <tr>
					<th>No</th>
		            <th>nama siswa</th>
					<th>Nisn</th>
					<th>Nomor Telepon</th>
					<th>alamat</th>
				
                    </tr>
</thead>
                <tbody>
                    <?php
                   
				   $tampil=mysql_query("select * from tabel_user ORDER BY id_user ");
					  $no = 1;	  
                      while($k=mysql_fetch_array($tampil)){
                      echo "<tr>";
                      echo "<td>$no</td>";						
					  echo "<td>$k[nama_user]</td>";
					  echo "<td>$k[nisn]</td>";
					   echo "<td>$k[notlp]</td>";
					   echo "<td>$k[alamat]</td>";
					  //echo "<td>$k[jam]</td>";
					  //echo "<td>$k[status]</td>";
					 //echo "<td>$k[tanggal_lahir]</td>";
					  //echo "<td>$k[jenis_kelamin]</td>";
					  //echo "<td>$k[jabatan]</td>";
					  //echo "<td>$k[alamat]</td>";
					  //echo "<td>$k[agama]</td>";
					  //echo "<td>$k[kewarganegaraan]</td>";
					  echo "</tr>";
                      $no++;
                    }  

   
echo "</tbody></table> ";         
                    ?>
			 </div>
			 </div>
			 </div>
			 
			 
  