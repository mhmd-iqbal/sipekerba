<?php
include "templates/header.php";
include "templates/sidebar-pengaduan.php"
?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Data Pengaduan Kerusakan Barang</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item active">Data Pengaduan</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title"><i class="fas fa-user-clock mr-3"></i>Belum Diproses</h3>
          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
              <i class="fas fa-times"></i>
            </button>
          </div>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-hover" id="table" width="100%">
              <thead align="center">
                <th>No.</th>
                <th>Nama Pegawai</th>
                <th>Nama Barang</th>
                <th>Keterangan</th>
                <th>Tgl. Lapor</th>
                <th width="160">Action</th>
              </thead>
              <tbody align="center">
                <?php
                $data = query("SELECT * FROM pengaduan WHERE status='Sedang diajukan'");
                foreach ($data as $d) :
                ?>
                <tr>
                  <td><?= $d['id']; ?></td>
                  <td><?= $d['n_pelapor']; ?></td>
                  <td><?= $d['n_barang']; ?></td>
                  <td><?= $d['ket']; ?></td>
                  <td><?= $d['tgl_lapor']; ?></td>
                  <td><a href="detail-pengaduan.php?id=<?= $d['id']; ?>" class="btn btn-sm btn-outline-info mr-2" style="font-size: 15px; width: 80px;"><i class="fas fa-search mr-1"></i>Detail</a>
                      <a href="delete-pengaduan.php?id=<?= $d['id']; ?>" class="btn btn-sm btn-outline-danger" style="font-size: 15px; width: 80px;"><i class="fas fa-trash-alt mr-1"></i>Delete</a>
                  </td>
                </tr>
                <?php
                endforeach;
                ?>
              </tbody>
              <tfoot align="center">
                <th>No.</th>
                <th>Nama Pegawai</th>
                <th>Nama Barang</th>
                <th>Keterangan</th>
                <th>Tgl. Lapor</th>
                <th>Action</th>
              </tfoot>
            </table>
          </div>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title"><i class="fas fa-hourglass-half mr-3"></i>Sedang Diproses</h3>
          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
              <i class="fas fa-times"></i>
            </button>
          </div>
        </div>
        <div class="card-body">
        <div class="table">
            <table class="table-hover" id="table2" width="100%">
              <thead align="center">
                <th>No.</th>
                <th>Nama Pegawai</th>
                <th>Nama Barang</th>
                <th>Keterangan</th>
                <th>Tgl. Lapor</th>
                <th width="160px">Action</th>
              </thead>
              <tbody align="center">
                <?php
                $data = query("SELECT * FROM pengaduan WHERE status='Sedang diproses'");
                foreach ($data as $d) :
                ?>
                <tr>
                <td><?= $d['id']; ?></td>
                  <td><?= $d['n_pelapor']; ?></td>
                  <td><?= $d['n_barang']; ?></td>
                  <td><?= $d['ket']; ?></td>
                  <td><?= $d['tgl_lapor']; ?></td>
                  <td><a href="detail-pengaduan.php?id=<?= $d['id']; ?>" class="btn btn-sm btn-outline-info mr-2" style="font-size: 15px; width: 80px;"><i class="fas fa-search mr-1"></i>Detail</a>
                      <a href="delete-pengaduan.php?id=<?= $d['id']; ?>" class="btn btn-sm btn-outline-danger" style="font-size: 15px; width: 80px;"><i class="fas fa-trash-alt mr-1"></i>Delete</a>
                  </td>
                </tr>
                <?php
                endforeach;
                ?>
              </tbody>
              <tfoot align="center">
                <th>No.</th>
                <th>Nama Pegawai</th>
                <th>Nama Barang</th>
                <th>Keterangan</th>
                <th>Tgl. Lapor</th>
                <th>Action</th>
              </tfoot>
            </table>
          </div>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
      <!-- Default box -->
      <div class="card mb-auto">
        <div class="card-header">
          <h3 class="card-title"><i class="fas fa-tasks mr-3"></i>Telah Diproses</h3>
          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
              <i class="fas fa-times"></i>
            </button>
          </div>
        </div>
        <div class="card-body">
          <div class="table">
            <table class="table-hover" id="table3" width="100%">
              <thead align="center">
              <th>No.</th>
                <th>Nama Pegawai</th>
                <th>Nama Barang</th>
                <th>Keterangan</th>
                <th>Tgl. Lapor</th>
                <th width="160">Action</th>
              </thead>
              <tbody align="center">
                <?php
                $data = query("SELECT * FROM pengaduan WHERE status='Selesai diproses'");
                foreach ($data as $d) :
                ?>
                <tr>
                  <td><?= $d['id']; ?></td>
                  <td><?= $d['n_pelapor']; ?></td>
                  <td><?= $d['n_barang']; ?></td>
                  <td><?= $d['ket']; ?></td>
                  <td><?= $d['tgl_lapor']; ?></td>
                  <td><a href="detail-pengaduan.php?id=<?= $d['id']; ?>" class="btn btn-sm btn-outline-info mr-2" style="font-size: 15px; width: 80px;"><i class="fas fa-search mr-1"></i>Detail</a>
                      <a href="delete-pengaduan.php?id=<?= $d['id']; ?>" class="btn btn-sm btn-outline-danger" style="font-size: 15px; width: 80px;"><i class="fas fa-trash-alt mr-1"></i>Delete</a>
                  </td>
                </tr>
                <?php
                endforeach;
                ?>
              </tbody>
              <tfoot align="center">
              <th>No.</th>
                <th>Nama Pegawai</th>
                <th>Nama Barang</th>
                <th>Keterangan</th>
                <th>Tgl. Lapor</th>
                <th>Action</th>
              </tfoot>
            </table> 
          </div>
        </div>
      </div> 
      <!-- /.card -->
    </section>
    <!-- /.content -->
</div>
<?php
include "templates/footer.php";
?>
