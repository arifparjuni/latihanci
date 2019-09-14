<div class="container">
    <div class="row">
        <div class="col-md-10">
            <h2>Daftar Mahasiswa</h2>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Nrp</th>
                        <th scope="col">Email</th>
                        <th scope="col">Jurusan</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; foreach($mahasiswa as $mhs) : ?>
                    <tr>
                        <th scope="row"><?= $i; ?></th>
                        <td><?= $mhs['nama']; ?></td>
                        <td><?= $mhs['nrp']; ?></td>
                        <td><?= $mhs['email']; ?></td>
                        <td><?= $mhs['jurusan']; ?></td>
                    </tr>
                    <?php $i++; ?>
                <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>