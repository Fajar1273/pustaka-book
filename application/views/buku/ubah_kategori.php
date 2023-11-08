<!-- Begin Page Content -->
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-9">
            <?= form_open_multipart(`buku/ubahKategori/$id_kategori`); ?>
            <?php foreach ($kategori as $k) { ?>
                <input type="text" hidden name="id" value="<?= $k['id_kategori'] ?>">
                <div class="form-group row">
                    <label for="kategori" class="col-sm-2 col-form-label">Kategori</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="kategori" name="nama_kategori"
                            value="<?= $k['nama_kategori'] ?>">
                        <?= form_error('nama_kategori', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                </div>
            <?php } ?>
            <div class="form-group row justify-content-end">
                <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary">Ubah</button>
                    <button class="btn btn-dark" onclick="window.history.go(-1)"> Kembali</button>
                </div>
            </div>
            </form>
        </div>
    </div>
</div>
<!-- /.container-fluid -->
</div>
<!-- End of Main Content -->