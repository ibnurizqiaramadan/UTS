<div class="card">
    <div class="card-body">
        <?php echo validation_errors(); ?>
        <?= form_open(site_url('insert')) ?>
            <div class="form-group">
                <label>NIM</label>
                <input type="number" class="form-control" name="nim" placeholder="Enter NIM">
            </div>
            <div class="form-group">
                <label>Nama</label>
                <input type="text" class="form-control" name="nama" placeholder="Enter Nama">
            </div>
            <div class="form-group">
                <label>Alamat</label>
                <textarea name="alamat" class="form-control" cols="30" rows="5"></textarea>
            </div>
            <div class="form-group">
                <label>No Telpon</label>
                <input type="number" class="form-control" name="notelp" placeholder="Enter No Telpon">
            </div>
            <div class="form-group">
                <label>Judul</label>
                <input type="text" class="form-control" name="judul" placeholder="Enter Judul Skripsi">
            </div>
            <div class="form-group">
                <label>Kode Pembimbing</label>
                <input type="text" class="form-control" name="kode" placeholder="Enter Kode Pembimbing">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            <?= anchor(site_url(), 'Batal', 'class="btn btn-warning"') ?>
        </form>
    </div>
</div>