    <?php 
    $this->load->view('admin/header');
    ?>

<div class="container">
    <h2>Data Kelulusan</h2><hr>
    <div class="row col-sm-8">
        <form class="form-horizontal well" method="post" action="<?= site_url('admin/data_import') ?>" enctype="multipart/form-data">
            <div class="form-group">
                <label for="importCsv" class="col-sm-3 control-label">CSV/Excel File</label>
                <div class="col-sm-9">
                    <div class="fileinput fileinput-new input-group" data-provides="fileinput">
                        <div class="form-control" data-trigger="fileinput">
                            <i class="glyphicon glyphicon-file fileinput-exists"></i> <span class="fileinput-filename"></span>
                        </div>
                        <span class="input-group-addon btn btn-default btn-file">
                            <span class="fileinput-new">Pilih file</span>
                            <span class="fileinput-exists">Ganti</span>
                            <input type="file" name="file">
                        </span>
                        <a href="#" class="input-group-addon btn btn-default fileinput-exists" data-dismiss="fileinput">Buang</a>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-9">
                    <button type="submit" name="importSubmit" class="btn btn-default">Upload</button>
                </div>
            </div>
        </form>
    </div>
</div>
<div class="row">
    <div class="container">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th rowspan="2" style="text-align: center; vertical-align: middle;">No. Ujian</th>
                    <th rowspan="2" style="text-align: center; vertical-align: middle;">Nama Siswa</th>
                    <th rowspan="2" style="text-align: center; vertical-align: middle;">Kompetensi Keahlian</th>
                    <th colspan="4" style="text-align: center; ">Nilai UN</th>
                    <th rowspan="2" style="text-align: center; vertical-align: middle;">Status</th>
                </tr>
                <tr>
                    <th style="text-align: center; ">Bahasa Indonesia</th>
                    <th style="text-align: center; ">Bahasa Inggris</th>
                    <th style="text-align: center; ">Matematika</th>
                    <th style="text-align: center; ">Kejuruan</th>
                </tr>
            </thead>
            <tbody>
            <?php
             if ($siswas->num_rows() > 0 ) {

                foreach ($siswas->result_array() as $data) {
                    echo '<tr>';
                    echo '<td>'.$data['no_ujian'].'</td>';
                    echo '<td>'.$data['nama'].'</td>';
                    echo '<td>'.$data['komli'].'</td>';
                    echo '<td style="text-align: center; ">'.$data['n_bin'].'</td>';
                    echo '<td style="text-align: center; ">'.$data['n_big'].'</td>';
                    echo '<td style="text-align: center; ">'.$data['n_mat'].'</td>';
                    echo '<td style="text-align: center; ">'.$data['n_kejuruan'].'</td>';
                    echo '<td>';
                    echo ($data['status']==1) ? 'Lulus' : '<em>Tidak Lulus</em>';
                    echo '</td>';
                    echo '</tr>';
                }
            } else {
                echo '<tr><td colspan="8"><em>Belum ada data! Segera lakukan upload data.</em></td></tr>';
            }
            ?>
            </tbody>
        </table>
    </div>
</div>
    <?php 
    $this->load->view('admin/footer');
    ?>