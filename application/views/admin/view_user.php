    <?php 
    $this->load->view('admin/header');
    ?>


    <div class="container">
        <h2>Manajemen User</h2><hr>
        <div class="alert alert-warning"><strong>Peringatan !</strong><br>Hak akses user pada aplikasi ini sangat sederhana, siapapun user yang memiliki hak akses dapat melakukan perubahan konten database. Meskipun aplikasi ini telah dilengkapi enkripsi untuk password, <strong>jangan</strong> menggunakan kata-kata yang umum sebagai password admin.</div>

        <div class="row">
            <div class="col-md-6">
                <table class="table table-bordered">
                    <thead><tr><th>#</th><th>Username</th><th><a href="<?= site_url('admin/user_tambah') ?>" class="btn btn-default btn-sm"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Tambah</a></th></tr></thead>
                    <tbody>
                    <?php 
                        foreach ($users->result_array() as $data) {
                        $no = 1;
                     ?>
                        <tr>
                            <td><?= $no ?></td>
                            <td><?= $data['username'] ?> </td>
                            <td><a href="<?= site_url('admin/user_edit/'.$data['UID']) ?>" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Edit</a> 
                                <a href="<?= site_url('admin/user_del/'.$data['UID']) ?>" class="btn btn-danger btn-sm" onclick="return confirm(\'Yakin akan menghapus user ini?\')"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span> Delete</a></td>
                            </tr>
                    <?php
                        }
                    ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <?php 
    $this->load->view('admin/footer');
    ?>