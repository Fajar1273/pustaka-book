<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Tampil Data Matakuliah</title>
	<!-- bootstraps style  -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
	<div class="container-luar" style="width: 100%; margin:15px auto ;">
    <div class="background-solid" style="max-width: 30%; background-color: #474bff; border-radius: 5px; margin: 15px auto; padding: 15px;">
			<form action="<?= base_url('matakuliah/cetak'); ?>" method="post">
        <center>
          <h4>Tampil Data Mata Kuliah</h4>
        </center>
        <hr>
        <div class="row">
          <div class="col-md-12">
            <label for="">Kode MTK</label>
            <input class="form-control" type="text" name="kode" id="kode" value="<?= $kode; ?>" readonly>
          </div>
          <div class="col-md-12">
            <label for="">Nama MTK</label>
            <input class="form-control" type="text" name="nama" id="nama" value="<?= $nama; ?>" readonly>
          </div>
          <div class="col-md-12" style="margin-bottom: 15px;">
            <label for="">SKS</label>
            <input class="form-control" type="text" name="sks" id="sks" value="<?= $sks; ?>" readonly>
          </div>
          <center>
            <button class="btn btn-success col-md-6"><a style="text-decoration: none; color: white;" href="<?= base_url('Matakuliah'); ?>">Kembali</a></button>
          </center>
        </div>
			</form>
		</div>
  </div>
	<!-- js bootstraps  -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
		integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
	</script>
</body>

</html>
