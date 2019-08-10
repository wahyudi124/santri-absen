<div class="content-wrapper">
    <section class="content-header">
    <h1>
        Data Santri 
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Data Santri</li>
      </ol>
      <br>
      <button class="btn btn-primary" data-toggle="modal" data-target="#modal-default"> <i class="fa fa-plus"></i> Tambah Data</button>
      <button class="btn btn-primary"> <i class="fa fa-plus"></i> Tambah Data</button>
    </section>
    
    <section class="content">
    <div class="box">
        <!-- /.box-header -->
        <div class="box-body">
            <table id="example2" class="table table-bordered table-striped">
            <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>No Induk</th>
                <th>Tempat Lahir</th>
                <th>Tanggal Lahir</th>
                <th>Alamat</th>
                <th>Sakan</th>
                <th > Hapus </th>
                <th > Edit </th>
            </tr>
            </thead>
            <tbody>

            <?php
            $no  = 1;
            foreach ($santri as $str) : ?>
            <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $str->nama ?></td>
                <td><?php echo $str->no_induk ?></td>
                <td><?php echo $str->tempat_lahir ?></td>
                <td><?php echo $str->tanggal_lahir ?></td>
                <td><?php echo $str->alamat ?></td>
                <td><?php echo $str->sakan ?></td>
                <td><a href="<?php echo base_url().'santri/delete_data/'.$str->id?>" class = "btn btn-danger btn-sm"><i class="fa fa-trash"></i></a></td>
                <td><a href="" class = "btn btn-primary btn-sm"><i class="fa fa-edit"></i></a></td>
            </tr>
            <?php endforeach; ?>

            </tbody>
            </table>
        </div>
        <!-- /.box-body -->
        </div>
    </section>
</div>


<div class="modal fade" id="modal-default">
<div class="modal-dialog">
<div class="modal-content">
    <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span></button>
    <h4 class="modal-title">Tambah Data Santri</h4>
    </div>
    <div class="modal-body">
    <form class="form-horizontal" role="form" method="post" action = "<?php echo base_url().'santri/insert_data'?>">
              <div class="box-body">
                <div class="form-group">
                    <label class="col-sm-2 control-label">Nama</label>
                    <div class="col-sm-10">
                    <input type="text" name="nama" class="form-control" placeholder="Nama">
                    </div>
                </div>

                <div class="form-group">
                    <label  class="col-sm-2 control-label">No. Induk</label>
                    <div class="col-sm-10">
                    <input type="text" name="no_induk" class="form-control" placeholder="Nomor Induk">
                    </div>
                </div>
                <div class="form-group">
                    <label  class="col-sm-2 control-label">Tempat Lahir</label>
                    <div class="col-sm-10">
                    <input type="text" name="tempat_lahir" class="form-control" placeholder="Tempat Lahir">
                    </div>
                </div>

                <div class="form-group">
                    <label  class="col-sm-2 control-label">Tanggal Lahir</label>
                    <div class="col-sm-10">
                    <input type="text" name="tanggal_lahir" class="form-control" id="datepicker" placeholder="Tanggal Lahir">
                    </div>
                </div>
                
                <div class="form-group">
                    <label  class="col-sm-2 control-label">Alamat</label>
                    <div class="col-sm-10">
                    <textarea class="form-control" name="alamat" rows="3" placeholder="Alamat"></textarea>
                    </div>
                </div>

                <div class="form-group">
                    <label  class="col-sm-2 control-label">Sakan</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control" name="sakan" placeholder="Sakan">
                    </div>
                </div>
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="reset" class="btn btn-default">Batal</button>
                <button type="submit" class="btn btn-info pull-right">Simpan</button>
              </div>
              <!-- /.box-footer -->
            </form>
    </div>
    </div>
</div>
<!-- /.modal-content -->
</div>
<!-- /.modal-dialog -->
</div>


