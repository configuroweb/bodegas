<h1 class="text-dark">Bienvenid@ al <?php echo $_settings->info('name') ?></h1>
<hr class="border-dark">
<div class="row">
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box">
              <span class="info-box-icon bg-navy elevation-1"><i class="fas fa-warehouse"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Total de Bodegas</span>
                <span class="info-box-number">
                  <?php 
                    $unit = $conn->query("SELECT * FROM unit_list")->num_rows;
                    echo number_format($unit);
                  ?>
                  <?php ?>
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-success elevation-1"><i class="fas fa-warehouse"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Bodegas Disponibles</span>
                <span class="info-box-number">
                  <?php 
                     $unit = $conn->query("SELECT * FROM unit_list where `status` =0 ")->num_rows;
                     echo number_format($unit);
                  ?>
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
           <!-- /.col -->
           <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-primary elevation-1"><i class="fas fa-warehouse"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Bodegas Utilizadas</span>
                <span class="info-box-number">
                  <?php 
                     $unit = $conn->query("SELECT * FROM unit_list where `status` =1 ")->num_rows;
                     echo number_format($unit);
                  ?>
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <!-- /.col -->
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-warehouse"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Bodegas en Mantenimiento</span>
                <span class="info-box-number">
                  <?php 
                     $unit = $conn->query("SELECT * FROM unit_list where `status` =2 ")->num_rows;
                     echo number_format($unit);
                  ?>
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
        </div>
<div class="container">
  
</div>