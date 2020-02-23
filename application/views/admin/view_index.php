    <?php 
    $this->load->view('admin/header');
    ?>
    <div class="container">
    	<div class="jumbotron">
    		<div class="container">
    			<h1>Halo, administrator!</h1>
    			<p>Ini merupakan halaman administrasi untuk pengumuman <strong>Info Kelulusan <?=$this->fungsi->admin_konfigurasi()->tahun; ?></strong>.</p>
    			<p>Fasilitas yang tersedia saat ini adalah manajemen <strong>User</strong> yang diberi hak untuk mengelola aplikasi ini dan import <strong>Data</strong> kelulusan dengan format excel csv.</p>
    		</div>
    	</div>

    </div><!-- /.container -->
    <?php 
    $this->load->view('admin/footer');
    ?>