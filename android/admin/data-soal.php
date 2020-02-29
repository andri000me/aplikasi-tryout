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
                  
</thead>
                <tbody>
                    <?php
                   
				   $tampil=mysql_query("select * from tabel_soal_latihan ORDER BY id_latihan ");
					  $no = 1;	  
                      while($k=mysql_fetch_array($tampil)){
                      echo "<tr>";
                      echo "$no";echo".";			echo "$k[pertanyaan]";
					  echo"<br>"; echo"A.";			echo "$k[pilihan_a]";
					  echo"<br>"; echo"B.";			echo "$k[pilihan_b]";
					  echo"<br>"; echo"C.";			echo "$k[pilihan_c]";
					  echo"<br>"; echo"D.";			echo "$k[pilihan_d]";
					  echo"<br>"; echo"jawaban = "; echo "$k[jawaban]";
					  echo "<br>";
					    echo "<br>";
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
			 
			 
  