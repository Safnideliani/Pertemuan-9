<h2>Kelas</h2>

<a href="<?php echo URL; ?>/kelas/input" class="btn">Input Kelas</a>

<table>
      <tr>
            <th>ID_KELAS</th>
            <th>KELAS</th>
            <th>EDIT</th>
            <th>DELETE</th>
      </tr>

      <?php foreach ($data['rows'] as $row) { ?>
            <tr>
                  <td><?php echo $row['id_kelas']; ?></td>
                  <td><?php echo $row['kelas']; ?></td>
                  <td><a href="<?php echo URL; ?>/kelas/edit" class="btn">Edit</a></td>
                  <td><a href="<?php echo URL; ?>/kelas/delete" class="btn">Delete</a></td>
            </tr>
      <?php } ?>

</table>