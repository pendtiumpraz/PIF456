<?php
function data_handler($root){
        if(isset($_GET['act']) && $_GET['act'] == 'add'){
                data_editor($root);
                return;
        }
        $res = mysql_query("SELECT count(*) AS total FROM " . MHS );
        if(mysql_num_rows($res)){
                if(isset($_GET['act']) && $_GET['act'] != ''){
                        switch ($_GET['act']){
                                case 'edit':
                                        if(isset($_GET['id']) && ctype_digit($_GET['id'])){
                                                data_editor($root, $_GET['id']);
                                        }else{
                                                show_admin_data($root);
                                        }
                                        break;
                                case 'view':
                                        if(isset($_GET['id']) && ctype_digit($_GET['id'])){
                                                data_detail($root, $_GET['id'], 1);
                                        }else{
                                                show_admin_data($root);
                                        }
                                        break;
                                case 'del':
                                        if(isset($_GET['id']) && ctype_digit($_GET['id'])){
                                                $id = $_GET['id'];
                                                $ok = "DELETE FROM mahasiswa WHERE nim='$id'";
                                                $res = mysql_query($ok);
                                                if($res){
                                                        
                                                        ?>

                                                <?php
                                                }else{
                                                        echo 'Gagal menghapus data';
                                                }
                                        }else{
                                                show_admin_data($root);
                                        }
                                        break;
                                default:
                                        show_admin_data($root);
                                        break;
                        }
                }else{
                        show_admin_data($root);
                }
                @mysql_close(res);
        }else{
                echo 'Data Tidak ditemukan';
        }
}

function show_admin_data($root){ ?>
        <h2 class="heading"> Administrasi Data</h2>
        <?php
        $sql = 'SELECT nim, nama, alamat FROM mahasiswa';
        $res = mysql_query($sql);

        if($res){
                $num = mysql_num_rows($res);
                if($num){
                        ?>
                        <div class="tabel">
                                <div style="padding:5px;">
  
										<input type=button value='Tambah Data' onclick=location.href="<?php echo $root; ?>&amp;act=add" class='btn btn-success'>
                                </div>
								
								<div class="panel panel-default">
  <!-- Default panel contents -->
  <div class="panel-heading">Tabel Mahasiswa</div>


		<table class="table">
                        <table width=780 cellpadding=4 cellspacing=0>
                                <tr>
                                        <th width=30>#</th>
                                        <th width=200>NIM</th>
                                        <th width=300>Nama</th>
                                        <th width=150>Alamat</th>
                                        <th width=200>Menu</th>
                                </tr>
                        <?php
                        $i=1;
                        while($row = mysql_fetch_row($res)){
                                $bg = (($i % 2) != 0) ? '' : 'even';
                                $id = $row[0]; ?>
                                <tr class="<?php echo $bg; ?>">
                                        <td width="2%"><?php echo $i;?></td>
                                        <td>
                                                <a href="<?php echo $root;?>&amp;act=view&amp;id=<?php echo $id;?>" title="Lihat Data"><?php echo $id;?></a>
                                        </td>
                                        <td><?php echo $row[1];?></td>
                                        <td><?php echo $row[2];?></td>
                                        <td align="center">
										
											<div class='btn-group drodown pull-center'>
											  <button class='btn btn-info'><i class='glyphicon-ok-circle glyphicon'></i> Manipulasi Data</button>
											  <button class='btn btn-info dropdown-toggle' data-toggle='dropdown'>
												<span class='caret'></span>
											  </button>
											  <ul class='dropdown-menu'>
												<li><a href ="<?php echo $root;?>&amp;act=edit&amp;id=<?php echo $id;?>"><i class='glyphicon-pencil glyphicon'></i>  Edit Data</a></li>
												<li><a href ="<?php echo $root;?>&amp;act=del&amp;id=<?php echo $id;?>" onClick=\"return confirm('Apakah Anda benar-benar mau mengaktifkannya?')\"><i class='glyphicon-trash glyphicon'></i>  Hapus</a></li>

											  </ul>
											</div>
                                        </td>
                                </tr>
                                <?php
                                $i++;
                                }
                                ?>
                        </table>
                </div>
        <?php
        }else{
                echo 'Belum ada data, isi <a href="' . $root.'&amp;act=add">di sini</a>';
        }
        mysql_close();
        }
}

function data_detail($root, $id){
        $sql = "SELECT nim, nama, alamat FROM mahasiswa WHERE nim ='$id'";
        $res = mysql_query($sql);
        if($res){
                if(mysql_num_rows($res)){ ?>
                        
                         <div class="table"> <table width=780 cellpadding=4 cellspacing=0>
                                        <?php
                                        $row = mysql_fetch_row($res); ?>
                                        <tr>
                                                <td>NIM</td>
                                                <td><?php echo $row[0];?></td>
                                        </tr>        
                                        <tr>
                                                <td>Nama</td>
                                                <td><?php echo $row[1];?></td>
                                        </tr>
                                        <tr>
                                                <td>Alamat</td>
                                                <td><?php echo $row[2];?></td>
                                        </tr>
                                </table>
                        </div>
                        <?php
                }else{
                        echo 'Data Tidak Ditemukan';
                }
                mysql_close();
        }
}

function data_editor($root, $id = 0){
        $view = true;
        if(isset($_POST['nim']) && $_POST['nim']){
                if(!$id){
                        $nim         = $_POST['nim'];
                        $nama         = $_POST['nama'];
                        $alamat = $_POST['alamat'];
                        $res = mysql_query("INSERT INTO mahasiswa VALUES ('".$nim."', '" .$nama."', '" .$alamat."')");
                        if($res){ ?>
                        <script type="text/javascript">
                                document.location.href="<?php echo $root;?>";
                        </script>
                <?php
                }else{
                        echo 'Gagal menambah data';
                }
                }else{
                        $nim         = $_POST['nim'];
                        $nama         = $_POST['nama'];
                        $alamat = $_POST['alamat'];
                        $res = mysql_query("UPDATE mahasiswa SET nim='$nim', nama='$nama', alamat='$alamat' WHERE nim='$id'");
                        if($res){ ?>

                <?php
                }else{
                        echo 'Gagal Modifikasi';
                }
                }
        }
        if($view){
                if($id){
                        $sql = "SELECT nim, nama, alamat FROM mahasiswa WHERE nim ='$id'";
                        $res = mysql_query($sql);
                        if($res){
                                if(mysql_num_rows($res)){
                                        $row = mysql_fetch_row($res);
                                        $nim = $row[0];
                                        $nama = $row[1];
                                        $alamat = $row[2];
                                }else{
                                        show_admin_data();
                                        return;
                                }
                        }
                }else{
                        $nim = @$_POST['nim'];
                        $nama = @$_POST['nama'];
                        $alamat = @$_POST['alamat'];
                }
                ?>
                <h2> <?php echo $id ? 'Edit' : 'Tambah';?> Data </h2>
                <form action="" method="post">
                        <table border=1 cellpadding=4 cellspacing=0>
                                <tr>
                                        <td width=100>NIM*</td>
                                        <td><input type="text" name="nim" class="form-control" placeholder="NIM" size=10 value="<?php echo $nim;?>"/></td>
                                </tr>
                                <tr>
                                        <td>Nama</td>
                                        <td><input type="text" name="nama" class="form-control" placeholder="Nama" size=40 value="<?php echo $nama;?>"/></td>
                                </tr>
                                <tr>
                                        <td>Alamat</td>
                                        <td><input type="text" name="alamat" class="form-control" placeholder="Alamat" size=60 value="<?php echo $alamat;?>"/></td>
                                </tr>
								<tr><td></td>		
								<td><input type="submit" class="btn btn-primary" value="Submit"/> <input type="button" value="Batal" onclick="self.history.back()" class="btn btn-danger"></td>
                                 </table>
					
                               
								     
                </form> <br/>
                <p> Ket: * Harus diisi</p>
                <?php
        }
        return false;
        }

?>