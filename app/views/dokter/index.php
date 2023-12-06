<h2>Dokter</h2>

<a href="<?php echo URL; ?>/dokter/input" class="btn">Input Dokter</a>

<table>
      <tr>
            <th>NO</th>
            <th>Nama</th>
            <th>Spesialis</th>
            <th>Alamat</th>
            <th>EDIT</th>
            <th>DELETE</th>
      </tr>

      <?php $no = 1;
      foreach ($data['rows'] as $row) { ?>
            <tr>
                  <td><?php echo $no; ?></td>
                  <td><?php echo $row['nama']; ?></td>
                  <td><?php echo $row['spesialis']; ?></td>
                  <td><?php echo $row['alamat']; ?></td>
                  <td><a href="<?php echo URL; ?>/dokter/edit/<?php echo $row['id']; ?>" class="btn">Edit</a></td>
                  <td><a href="<?php echo URL; ?>/dokter/delete/<?php echo $row['id']; ?>" class="btn" onclick="return confirm('Are you sure?')">Delete</a></td>
            </tr>
      <?php $no++;
      } ?>

</table>