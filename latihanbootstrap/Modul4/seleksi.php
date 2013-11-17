<?php

require_once './koneksi.php';

$sql = 'SELECT * FROM mahasiswa';
$res = mysql_query($sql);
if($res){
	if (mysql_num_rows($res)) { ?>
<div class="panel panel-default">
  <!-- Default panel contents -->
  <div class="panel-heading">Tabel Mahasiswa</div>


		<table class="table">
			<tr>
				<th>#</th>
				<th width=200>NIM</th>
				<th width=300>Nama</th>
				<th>Alamat</th>
			</tr>

				<?php

				$i = 1;
				while ($row = mysql_fetch_row($res)) { ?>
				<tr>
					<td>
						<?php echo $i;?>
					</td>
					<td>
						<?php echo $row[0];?>
					</td>
					<td>
						<?php echo $row[1];?>
					</td>
					<td>
						<?php echo $row[2];?>
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
		echo 'Data Tidak Ditemukan';
	}
} 
 
?>