<!-- /.card -->

<div class="card">
              <div class="card-header">
                <h3 class="card-title">Data Kamar</h3>
                <div class="col-sm-12">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="tambahfasilitas.php">Tambah Fasilitas</a></li>
                    </ol>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Jenis Fasilitas</th>
                    <th>Keterangan Fasilitas</th>
                    <th>Gambar Fasilitas</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php
                    include('../koneksi.php');
                    $no = 1;
                    $query = mysqli_query($koneksi,"SELECT * FROM fasilitas1");
                    while($row = mysqli_fetch_array($query)){
                      ?>
                  <tr>
                    <td><?php echo $no++ ?></td>
                    <td><?php echo $row ['nama_fasilitas'] ?></td>
                    <td><?php echo $row ['ket_fasilitas'] ?></td>
                    <td><img src="../img/<?php echo $row["gambar_fasilitas"]; ?>" width = 200 title="<?php echo $row['gambar_fasilitas']; ?>"></td>
                    <td> 
                      <a href="edit_fasilitas.php?id=<?php echo $row ['id_fasilitas'] ?>" class="btn btn-sm btn-primary">Edit</a>
                      <a href="hapus_fasilitas.php?id=<?php echo $row ['id_fasilitas'] ?>" class="btn btn-sm btn-danger">Hapus</a>
                    </td>
                  </tr>
                  <?php } ?>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->