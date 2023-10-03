<div class="col-md-12">
    <div class="card card-primary">
        <div class="card-header">
                <h3 class="card-title">Data Gambar Slider</h3>

            <div class="card-tools">
                  <a href="<?= base_url('/add')?>" type="button" class="btn btn-primary btn-sm">
                    <i class="fas fa-plus"></i>Add
                </a>
            </div>
                <!-- /.card-tools -->
        </div>
              <!-- /.card-header -->
     <div class="card-body">
                <?php
                if($this->session->flashdata('pesan'))
                {
                    echo '<div class="alert alert-success alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <h5><i class="icon fas fa-check"></i>';
                    echo $this->session->flashdata('pesan');
                    echo '</h5></div>';
                }
                ?>
            <table class="table table-bordered" id="example1">
                <thead class="text-center">
                    <tr>
                        <th>No</th>
                        <th>Gambar Slider</th>
                        <th>Action</th>     
                    </tr>
                </thead>
                <tbody>
                    
                    <tr>
                       <td></td> 
                       <td></td>
                       <td></td>
                    </tr>
                   
                </tbody>
            </table>
     </div>
              <!-- /.card-body -->
    </div>
            <!-- /.card -->
</div>
