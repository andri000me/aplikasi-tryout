                            <div >
                                    <h3>Form Pendaftaran</h3>
                                    <form enctype="multipart/form-data" action="?page=upload" method="post">
									
                                        <div class="form-group">
                                            <label>Nama anda</label>
                                            <input name="nama" class="form-control" placeholder="Nama anda" />
                                        </div>
										
										<div class="form-group">
                                            <label>NISN</label>
                                            <input name="nisn" class="form-control" placeholder="nisn anda" />
                                        </div>
										
										<div class="form-group">
                                            <label>Nomor Telepon</label>
                                            <input name="notlp" class="form-control" placeholder="Nomor Telepon" />
                                        </div>
										
										<div class="form-group">
                                            <label>Alamat Rumah</label>
                                            <input name="alamat" class="form-control" placeholder="alamat anda" />
                                        </div>
										
										
										 <div class="form-group">
                                            <label>Username</label>
                                            <input name="username" class="form-control" placeholder="username" />
                                        </div>
										
										 <div class="form-group">
                                            <label>Password</label>
                                            <input name="password" class="form-control" placeholder="password" />
                                        </div>
										 <div class="form-group">
                                            <label>Gambar</label>
                                            <input type="file" name="Gambar"/>
                                        </div>
										
										
											<input class="btn btn-primary" name="submit" type="submit" value="Submit" />
											<input class="btn btn-primary" name="cansel" type="reset" value="Cancel" />
											</form>
                            </div>
							<br />
							<br />
							<br />
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
			
  
							
							

        


