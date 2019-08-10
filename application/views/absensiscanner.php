<div class="content-wrapper">
    <section class="content-header">
    <h1>
        Absensi 
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Data Santri</li>
      </ol>
    </section>

    <section class="content">
      <div class="row">
        <div class="col-md-6">
          <div class="box box-default">
            <div class="box-header with-border">
              <i class="fa fa-warning"></i>

              <h3 class="box-title">Data Santri</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
            <form role="form">
              <div class="box-body">
              <div class="form-group">
                  <label>Nama</label>
                  <input type="text" class="form-control" placeholder="Enter ...">
                </div>
                <div class="form-group">
                  <label>NIK</label>
                  <input type="text" class="form-control" placeholder="Enter ...">
                </div>
                <div class="form-group">
                  <label>Sakan</label>
                  <input type="text" class="form-control" placeholder="Enter ...">
                </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-default">Cancel</button>
                <button type="submit" class="btn btn-info pull-right">Sign in</button>
              </div>
            </form>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->

        <div class="col-md-6">
          <div class="box box-default">
            <div class="box-header with-border">
              <i class="fa fa-bullhorn"></i>

              <h3 class="box-title">Callouts</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
            <div id="loadingMessage">🎥 Unable to access video stream (please make sure you have a webcam enabled)</div>
            <canvas id="canvas" hidden></canvas>
            <div id="output" hidden>
              <div id="outputMessage">No QR code detected.</div>
              <div hidden><b>Data:</b> <span id="outputData"></span></div>
            </div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>

</div>




