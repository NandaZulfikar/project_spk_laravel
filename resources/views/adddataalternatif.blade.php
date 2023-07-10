@extends('page')

@section('content')
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Add Alternatif</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Add Alternatif</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- Horizontal Form -->
            <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">Add Alternatif</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="POST" action="{{ url('/alternatif/store')}}" class="form-horizontal">
                @csrf
                <div class="card-body">
                  <div class="form-group row">
                    <label for="alternatif" class="col-sm-2 col-form-label">Alternatif</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="alternatif" placeholder="Alternatif" required>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="harga_motor" class="col-sm-2 col-form-label">C1</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="harga_motor" placeholder="Nilai Kriteria (Harga Motor)" required>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="kapasitas_mesin" class="col-sm-2 col-form-label">C2</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="kapasitas_mesin" placeholder="Nilai Kriteria (Kapasitas Mesin)" required>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="kapasitas_tangki" class="col-sm-2 col-form-label">C3</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="kapasitas_tangki" placeholder="Nilai Kriteria (Kapasitas Tangki)" required>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="jarak_tempuh" class="col-sm-2 col-form-label">C4</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="jarak_tempuh" placeholder="Nilai Kriteria (Jarak Tempuh)" required>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="tahun_pembuatan" class="col-sm-2 col-form-label">C5</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="tahun_pembuatan" placeholder="Nilai Kriteria (Tahun Pembuatan)" required>
                    </div>
                  </div>
                </div>
                  <div class="form-group row">
                    <label for="volume_silinder" class="col-sm-2 col-form-label">C6</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="volume_silinder" placeholder="Nilai Kriteria (Volume Silinder)" required>
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-success float-right">Create</button>
                </div>
                <!-- /.card-footer -->
              </form>
            </div>
            <!-- /.card -->

          </div>
          <!--/.col (left) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  
  @endsection