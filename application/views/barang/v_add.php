<div class="col-md-12">
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Form Add barang</h3>

                <!-- /.card-tools -->
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                    <?php 
                    // Notifikasi form kosong
                    echo validation_errors(' <div class="alert alert-danger alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <h5><i class="icon fas fa-ban"></i>', '</div>');


                    // Notifikasi gagal upload gambar
                    if (isset($error_upload)) {
                        echo '  <div class="alert alert-danger alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <h5><i class="icon fas fa-ban"></i>' .$error_upload. '</div>';
                    }    


                    
                    echo form_open_multipart('barang/add') ?>
 <div class="form-group">
                        <label>Nama Barang</label>
                        <input name="nama_barang" class="form-control" autocomplete="off" placeholder="Nama Barang"
                         value="<?= set_value('nama_barang') ?>">
            </div>
            <div class="row">
                    <div class="col-sm-6">
                    <div class="form-group">
                        <label>Kategori</label>
                            <select name="id_kategori" class="form-control">
                       <option value="">--Pilih Kategori--</option>
                        <?php foreach ($kategori as $key => $value) {?>
                            <option value="<?= $value->id_kategori?>">
                            <?= $value->nama_kategori?></option>
                        <?php }?>
                       </select>
                      </div>
                    </div>
            
                    <div class="col-sm-6">
                        <div class="form-group">
                             <label>Harga Barang</label>
                             <input name="harga" class="form-control" placeholder="Harga Barang"
                              value="<?= set_value('harga') ?>">
                        </div>
                    </div>
                </div>
                     <div class="form-group">
                        <label for="inputDeskripsi" class="form-label">Deskripsi Produk</label>
                        <textarea name="deskripsi" class="form-control" placeholder="Deskripsi Produk" cols="20" rows="6"><?= set_value('deskripsi') ?></textarea>
                    </div>
                    <div class="row">
                    <div class="col-sm-6">
                    <div class="mb-3">
                        <label for="inputGambar" class="form-label">Gambar</label>
                        <input type="file" name="gambar" class="form-control" id="preview_gambar" required>
                    </div>
                    </div>
                    <div class="col-sm-5">
                    <div class="mb-3">
                      <img src="<?= base_url('assets/gambar/noimgs.jpg') ?>" id="gambar_load" width="250px">
                    </div>
                    </div>
                    </div> 
                    <div class="form-group">
                       <button type="submit" class="btn btn-primary btn-sm">Simpan</button>
                       <a href="<?= base_url('barang')?>" class="btn btn-success btn-sm">Kembali</a>
                    </div>


                  <?php echo form_close('')?>
                </div>
                        <nav aria-label="...">

                    </div>
                </div>
            </div><!-- End Left side columns -->
        </div>
    </section>
</main>

<!-- Pastikan Anda telah menyertakan jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
    // Pastikan skrip ini berada dalam dokumen siap
    $(document).ready(function() {
        // Ketika input file dengan ID "preview_gambar" berubah
        $("#preview_gambar").change(function() {
            bacaGambar(this);
        });

        // Fungsi untuk memuat gambar
        function bacaGambar(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    // Menetapkan sumber gambar ke elemen dengan ID "gambar_load"
                    $('#gambar_load').attr('src', e.target.result);
                }
                reader.readAsDataURL(input.files[0]);
            }
        }
    });
</script>