<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="aplikasi sederhana untuk menampilkan pengumuman hasil ujian nasional secara online">
    <meta name="author" content="slamet.bsan@gmail.com">
    <title>Pengumuman Kelulusan</title>
    <link href="<?= base_url('assets/') ?>css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url('assets/') ?>css/jasny-bootstrap.min.css" rel="stylesheet">
	<link href="<?= base_url('assets/') ?>css/kelulusan.css" rel="stylesheet">
</head>

<body>
    <nav class="navbar navbar-inverse navbar-static-top">
        <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="./">Info Kelulusan <?=$qKon->sekolah ?></a>
            </div>
            <div id="navbar" class="collapse navbar-collapse">
              <ul class="nav navbar-nav navbar-right">
                <li><a href="./">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#contact">Contact</a></li>
              </ul>
            </div><!--/.nav-collapse -->
        </div>
    </nav>
    
    <div class="container">

        <h2>Pengumuman Kelulusan <?=$qKon->tahun ?></h2>
		<!-- countdown -->
    <div id="xform">

        <p>Masukkan nomor ujianmu pada form yang disediakan.</p>
        
        <form method="post" id="myform">
            <div class="input-group">
                <input type="text" name="nomor" id="keyword" class="form-control" data-mask="23-101-999-9" placeholder="Nomor Ujian" required>
                <!-- <input type="text" name="nomor" id="keyword" class="form-control" data-mask="23-101-999-9" placeholder="Nomor Ujian" required> -->
                <span class="input-group-btn">
                    <button class="btn btn-primary" type="submit" name="check" id="check">Periksa!</button>
                </span>
            </div>
        </form>
		<?php
		// }
		?>
		</div>
		
		<br>
		<br>
		<div id="xpengumuman">

    	</div>    
		<div id="clock" class="lead"></div>
    </div><!-- /.container -->
	
	<footer class="footer">
		<div class="container">
			<p class="text-muted">&copy; <?=$qKon->tahun ?>  &middot; Tim IT <?=$qKon->sekolah ?></p>
		</div>
	</footer>
    
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="<?= base_url('assets/') ?>js/jquery.min.js"></script>
    <script src="<?= base_url('assets/') ?>js/jquery.countdown.min.js"></script>
    <script src="<?= base_url('assets/') ?>js/bootstrap.min.js"></script>
	<script src="<?= base_url('assets/') ?>js/jasny-bootstrap.min.js"></script>
	<script type="text/javascript">
		$( document ).ready(function() {

			$( "#clock" ).show();
			$( "#xpengumuman" ).hide();
			$( "#xform" ).hide();
			var skrg = Date.now();

			$('#clock').countdown("<?=$qKon->tgl_pengumuman ?>", {elapse: true}).on('update.countdown', function(event) {
				var $this = $(this);
				if (event.elapsed) {
					$( "#clock" ).hide();
					$( "#xpengumuman" ).show();
					$( "#xform" ).show();
					//return false;
				} else {
					$this.html(event.strftime('Pengumuman dapat dilihat: <span>%D Hari %H Jam %M Menit %S Detik</span> lagi'));
					$( "#xpengumuman" ).hide();
					$( "#xform" ).hide();
				}
			});



		    // $('#myform').on('submit', function(event){
		    $("#check").on('click', function(event){ // Ketika tombol simpan di klik
			    event.preventDefault();
			    $(this).html("SEARCHING...").attr("disabled", "disabled");
			    
			  	$.ajax({
				      url: "<?php echo site_url(); ?>/welcome/check", 
				      type: 'POST', 
				      data: {keyword: $("#keyword").val()}, 
				      dataType: "json",
				      success: function(response){ 
				        $("#check").html("Periksa!").removeAttr("disabled");
				        $('#xpengumuman').html(response);
				        $( "#xpengumuman" ).show();
						// $( "#xform" ).hide();	
				      },
				      error: function (xhr, ajaxOptions, thrownError) { // Ketika terjadi error
				        alert(xhr.responseText); // munculkan alert
				      }
				});
				return false;
			});
		});

	</script>
</body>
</html>