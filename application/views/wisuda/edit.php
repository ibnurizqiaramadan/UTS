<div class="card">
    <div class="card-body">
        <?= form_open(site_url('update')) ?>

        <input type="hidden" name="noreg" , value="<?= $data->no_reg ?>">
        <div class="form-group">
            <label>NIM</label>
            <input type="number" class="form-control" name="nim" placeholder="Enter NIM" value="<?= $data->nim ?>" required>
        </div>
        <div class="form-group">
            <label>Nama</label>
            <input type="text" class="form-control" name="nama" placeholder="Enter Nama" value="<?= $data->nama ?>" required>
        </div>
        <div class="form-group">
            <label>Alamat</label>
            <textarea name="alamat" class="form-control" cols="30" rows="5" required><?= $data->alamat ?></textarea>
        </div>
        <div class="form-group">
            <label>No Telpon</label>
            <input type="number" class="form-control" name="notelp" placeholder="Enter No Telpon" value="<?= $data->noTelp ?>" required>
        </div>
        <div class="form-group">
            <label>judul</label>
            <input type="text" class="form-control" name="judul" placeholder="Enter Judul Skripsi" value="<?= $data->judulSkripsi ?>" required>
        </div>
        <div class="form-group">
            <label>Kode Pembimbing</label>
            <input type="text" class="form-control" name="kode" placeholder="Enter Kode Pembimbing" value="<?= $data->kodePemb ?>" required>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        <?= anchor(site_url(), 'Batal', 'class="btn btn-warning"') ?>
        </form>
    </div>
</div>