<p><?= anchor(site_url('add'), "Add data Wisuda", 'class="btn btn-sm btn-info"') ?></p>

<div class="card">
    <div class="card-body">
        <table class="table">
            <thead>
                <th>No Reg</th>
                <th>NIM</th>
                <th>NAMA</th>
                <th>ALAMAT</th>
                <th>NO TELPON</th>
                <th>JUDUL SKRIPSI</th>
                <th>KODE PEMBIMBING</th>
                <th>AKSI</th>
            </thead>
            <tbody>
                <?php foreach ($wisuda as $key) : ?>
                    <tr>
                        <td><?= $key->no_reg ?></td>
                        <td><?= $key->nim ?></td>
                        <td><?= $key->nama ?></td>
                        <td><?= $key->alamat ?></td>
                        <td><?= $key->noTelp ?></td>
                        <td><?= $key->judulSkripsi ?></td>
                        <td><?= $key->kodePemb ?></td>
                        <td>
                            <?= anchor(site_url("edit/$key->no_reg"), "Edit", 'class="btn btn-sm btn-success"') ?>
                            <?= anchor(site_url("delete/$key->no_reg"), "Delete", 'class="btn btn-sm btn-danger"') ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
            <tfoot>
                <th>No Reg</th>
                <th>NIM</th>
                <th>NAMA</th>
                <th>ALAMAT</th>
                <th>NO TELPON</th>
                <th>JUDUL SKRIPSI</th>
                <th>KODE PEMBIMBING</th>
                <th>AKSI</th>
            </tfoot>
        </table>
    </div>
</div>