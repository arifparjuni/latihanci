<div class="container mt-5">
    <h2>Daftar Mahasiswa</h2>
    <div class="row">
        <div class="col-md-5">
            <a href="<?= base_url('mahasiswa/tambah'); ?>" class="btn btn-primary">Tambah Data</a>
        </div>
        <div class="col-md-10">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Nrp</th>
                        <th scope="col">Email</th>
                        <th scope="col">Jurusan</th>
                        <th scope="col">Action</th>
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
                        <td>
                        <a href="" class="btn btn-success">Edit</a>
                        <a href="" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                    <?php $i++; ?>
                <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>