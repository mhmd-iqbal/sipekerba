<?php
include "templates/header.php";
include "templates/sidebar-report.php"
?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Filter Report</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item active">Report</li>
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
          <h3 class="card-title"><i class="fas fa-calendar-day mr-3"></i>Report Harian</h3>
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
          <form action="report-harian.php" method="POST">
            <div class="col-md-12">
            <p>Note : Jika hanya ingin menampilkan 1 hari saja, maka pilih tanggal yang sama di kedua kolom dibawah</p>
                <div class="row">
                    <div class="col-md-4">
                    <label for="tgl1">Dari Tanggal</label>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text fas fa-calendar-alt bg-dark"></span>
                            </div>
                            <input name="tgl1" id="datepicker1" class="form-control" style="cursor: pointer;" placeholder="Dari Tanggal" readonly>
                        </div>
                    </div>
                    <div class="col-md-4">
                    <label for="tgl2">Ke Tanggal</label>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text fas fa-calendar-alt bg-dark"></span>
                            </div>
                            <input name="tgl2" id="datepicker2" class="form-control" style="cursor: pointer;" placeholder="Ke Tanggal" readonly>
                        </div>
                    </div>
                </div>
                <div class="row">
                <div class="col-md-6">  
                        <button type="submit" value="searchHari" class="btn btn-outline-success mr-2" style="width: 100px;"><span class="fas fa-search mr-2"></span>Search</button>
                        <button type="reset" class="btn btn-outline-danger" style="width: 100px;"><span class="fas fa-times mr-2"></span>Reset</button>
                    </div>
                </div>
            </div>
          </form>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title"><i class="fas fa-calendar-week mr-3"></i>Report Bulanan</h3>
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
        <form action="report-bulanan.php" method="POST">
            <div class="col-md-12" id="month">
                <div class="row">
                <div class="col-md-2">
                        <label for="month">Bulan</label>
                        <select id="month" name="month" class="custom-select mb-3" required>
                            <option selected disabled>Pilih Bulan</option>
                            <option value="1">Januari</option>
                            <option value="2">Februari</option>
                            <option value="3">Maret</option>
                            <option value="4">April</option>
                            <option value="5">Mei</option>
                            <option value="6">Juni</option>
                            <option value="7">Juli</option>
                            <option value="8">Agustus</option>
                            <option value="9">September</option>
                            <option value="10">Oktober</option>
                            <option value="11">November</option>
                            <option value="12">Desember</option>
                        </select>
                    </div>
                    <div class="col-md-2">
                        <label for="year">Tahun</label>
                        <select id="year" name="year" class="custom-select mb-3" required>
                            <option selected disabled>Pilih Tahun</option>
                            <option value="2020">2020</option>
                            <option value="2021">2021</option>
                            <option value="2022">2022</option>
                            <option value="2023">2023</option>
                            <option value="2024">2024</option>
                            <option value="2025">2025</option>
                            <option value="2026">2026</option>
                            <option value="2027">2027</option>
                            <option value="2028">2028</option>
                            <option value="2029">2029</option>
                            <option value="2030">2030</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">  
                        <button type="submit" value="searchBulan" class="btn btn-outline-success mr-2" style="width: 100px;"><span class="fas fa-search mr-2"></span>Search</button>
                        <button type="reset" class="btn btn-outline-danger" style="width: 100px;"><span class="fas fa-times mr-2"></span>Reset</button>
                    </div>
                </div>
            </div>
          </form>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title"><i class="fas fa-calendar-alt mr-3"></i>Report Tahunan</h3>
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
        <form action="report-tahunan.php" method="POST">
            <div class="col-md-12">
            <p>Note : Jika hanya ingin menampilkan 1 tahun saja, maka pilih tahun yang sama di kedua opsi dibawah</p>
                <div class="row">
                    <div class="col-md-2">
                        <label for="year1">Dari Tahun</label>
                        <select id="year1" name="year1" class="custom-select mb-3" required>
                            <option selected disabled>Pilih Tahun</option>
                            <option value="2020">2020</option>
                            <option value="2021">2021</option>
                            <option value="2022">2022</option>
                            <option value="2023">2023</option>
                            <option value="2024">2024</option>
                            <option value="2025">2025</option>
                            <option value="2026">2026</option>
                            <option value="2027">2027</option>
                            <option value="2028">2028</option>
                            <option value="2029">2029</option>
                            <option value="2030">2030</option>
                        </select>
                    </div>
                    <div class="col-md-2">
                        <label for="year2">Ke Tahun</label>
                        <select id="year2" name="year2" class="custom-select mb-3" required>
                            <option selected disabled>Pilih Tahun</option>
                            <option value="2020">2020</option>
                            <option value="2021">2021</option>
                            <option value="2022">2022</option>
                            <option value="2023">2023</option>
                            <option value="2024">2024</option>
                            <option value="2025">2025</option>
                            <option value="2026">2026</option>
                            <option value="2027">2027</option>
                            <option value="2028">2028</option>
                            <option value="2029">2029</option>
                            <option value="2030">2030</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">  
                        <button type="submit" value="searchTahun" class="btn btn-outline-success mr-2" style="width: 100px;"><span class="fas fa-search mr-2"></span>Search</button>
                        <button type="reset" class="btn btn-outline-danger" style="width: 100px;"><span class="fas fa-times mr-2"></span>Reset</button>
                    </div>
                </div>
            </div>
        </div>
        </form>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
</div>
<?php
include "templates/footer.php";
?>
