<?php  
	$title = 'Pendaftaraan';
	include 'header.php';
?>
	<style type="text/css">
		.row{
			margin: 0px;
		}
		
	</style>
	<div class="row">
		<div class="grey lighten-4 header col s12" >
			<p> Bergabunglah dalam program Penjual Terpilih Shopee! isi form di bawah ini & lampirkan foto diri berserta KTP </p>
		</div>
	</div>
	<div class="row">
		<div class="white lang1 col s12" >
			<h1>langkah 1</h1>
		</div>
	</div>
	<div class="row" style="margin: 0px;">
		<div class="white conktp col s12">
			<label>Masukan No. KTP</label>
			<input type="text" name="ktp" class="ktp" placeholder="No. KTP">
		</div>
	</div>
	<div class="row grey lighten-4" style="height: 30px;">
		
	</div>
	<div class="row">
		<div class="white lang1 col s12" style="border-top: 1px solid #CCCCCC" >
			<h1>langkah 2</h1>
		</div>
	</div>
	<div class="row">
		<div class="white col s12" >
			<p>Foto diri berserta KTP anda. Nomor KTP dan Wajah Anda harus terlihat jelas. dalam foto.</p>
			<div class="upload-box">
				<div class="upload-image">
					<i class="material-icons md-48 gambar-up">cloud_upload</i>

				</div>
				<p>Tambahkan Foto Anda</p>
			</div>
			<div class="upload-box">
				<div class="upload-image">
					<i class="material-icons md-48 gambar-up">cloud_upload</i>

				</div>
				<p>Tambahkan Foto KTP Anda</p>
			</div>
		</div>
	</div>

	<div class="row grey lighten-4" style="height: 30px;" style="border-top: 1px solid #CCCCCC;border-bottom: 1px solid #CCCCCC;">
		<i></i>
	</div>
	<div class="row">
		<div class="white col s12" style="padding: 20px; height: 80px;">
			<input type="checkbox" id="test5" />
			<label for="test5">Saya setuju dengan <a href="">Syarat & ketentuan</a> program Penjual Terpilih Shopee</label>
			
		</div>
	</div>
	<div class="row grey lighten-4" style="height: 70px;" style="border-top: 1px solid #CCCCCC;border-bottom: 1px solid #CCCCCC;">
		<i></i>
	</div>
	<div class="row">
		<div class="white col s12" style="padding-top: 10px;">
			<input type="submit" name="login" class="btn waves-effect waves-light orange darken-1" style="width: 100%;" value="Kirimkan">
			
		</div>
	</div>
</body>
</html>