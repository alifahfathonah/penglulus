    <?php 
    $this->load->view('admin/header');
    ?>

    <div class="container">
    	<h2>Manajemen User <small><?= ucfirst($page) ?></small></h2><hr>

    	<form class="form-horizontal" method="post" action="<?= site_url('admin/user_proses') ?>">
    		<div class="form-group">
    			<label for="username" class="col-sm-2 control-label">Username</label>
    			<div class="col-sm-3">
    				<input type="text" name="username" class="form-control" id="username" placeholder="Username" value="<?= $data['username']; ?>" required autofocus autocomplete="off">
    			</div>
    		</div>
    		<div class="form-group">
    			<label for="password" class="col-sm-2 control-label">Password</label>
    			<div class="col-sm-3">
    				<input type="password" name="password" class="form-control" id="password" placeholder="Password">
    				<span id="helpBlock" class="help-block">Biarkan kosong jika tidak ingin merubah password.</span>
    			</div>
    		</div>
    		<div class="form-group">
    			<div class="col-sm-offset-2 col-sm-3">
    				<input type="hidden" name="page" value="<?= $page ?>">
    				<input type="hidden" name="id" value="<?= $data['UID']; ?>">
    				<button type="submit" name="submit" class="btn btn-primary">Update</button>
    				<a href="<?= site_url('admin/user') ?>" class="btn btn-link">Batal</a>
    			</div>
    		</div>
    	</form>
    </div>
    <?php 
    $this->load->view('admin/footer');
    ?>