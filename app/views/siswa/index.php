<h2>Siswa</h2>

<a href="<?php echo URL; ?>/siswa/input" class="btn">Input Wali</a>

<table>
      <tr>
            <th>ID_SISWA</th>
            <th>ID_KELAS</th>
            <th>ID_WALI</th>
            <th>NAMA_SISWA</th>
            <th>TANGGAL_LULUS</th>
            <th>EDIT</th>
            <th>DELETE</th>
      </tr>

      <?php foreach ($data['rows'] as $row) { ?>
            <tr>
                  <td><?php echo $row['id_siswa']; ?></td>
                  <td><?php echo $row['id_kelas']; ?></td>
                  <td><?php echo $row['id_wali']; ?></td>
                  <td><?php echo $row['nama_siswa']; ?></td>
                  <td><?php echo $row['tanggal_lulus']; ?></td>
                  <td><a href="<?php echo URL; ?>/wali/edit" class="btn">Edit</a></td>
                  <td><a href="<?php echo URL; ?>/wali/delete" class="btn">Delete</a></td>
            </tr>
      <?php } ?>

</table>