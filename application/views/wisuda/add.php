<div class="card">
    <div class="card-body">
        <?= form_open(site_url('insert')) ?>
            <div class="form-group">
                <label>NIM</label>
                <input type="number" class="form-control" name="nim" placeholder="Enter NIM" required>
            </div>
            <div class="form-group">
                <label>Nama</label>
                <input type="text" class="form-control" name="nama" placeholder="Enter Nama" required>
            </div>
            <div class="form-group">
                <label>Alamat</label>
                <textarea name="alamat" class="form-control" cols="30" rows="5" required></textarea>
            </div>
            <div class="form-group">
                <label>No Telpon</label>
                <input type="number" class="form-control" name="notelp" placeholder="Enter No Telpon" required>
            </div>
            <div class="form-group">
                <label>Judul</label>
                <input type="text" class="form-control" name="judul" placeholder="Enter Judul Skripsi" required>
            </div>
            <div class="form-group">
                <label>Kode Pembimbing</label>
                <input type="text" class="form-control" name="kode" placeholder="Enter Kode Pembimbing" required>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            <?= anchor(site_url(), 'Batal', 'class="btn btn-warning"') ?>
        </form>
    </div>
</div>