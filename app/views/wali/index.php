<h2>Wali</h2>

<a href="<?php echo URL; ?>/wali/input" class="btn">Input Wali</a>

<table>
      <tr>
            <th>ID_WALI</th>
            <th>ID_KELAS</th>
            <th>NAMA_WALI</th>
            <th>TANGGAL_LAHIR</th>
            <th>EDIT</th>
            <th>DELETE</th>
      </tr>

      <?php foreach ($data['rows'] as $row) { ?>
            <tr>
                  <td><?php echo $row['id_wali']; ?></td>
                  <td><?php echo $row['id_kelas']; ?></td>
                  <td><?php echo $row['nama_wali']; ?></td>
                  <td><?php echo $row['tanggal_lahir']; ?></td>
                  <td><a href="<?php echo URL; ?>/wali/edit" class="btn">Edit</a></td>
                  <td><a href="<?php echo URL; ?>/wali/delete" class="btn">Delete</a></td>
            </tr>
      <?php } ?>

</table>