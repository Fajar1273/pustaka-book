<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Form Input Matakuliah</title>
	<!-- bootstraps style  -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
  <div class="container-luar" style="width: 100%; margin:15px auto ;">
    <div class="background-solid" style="max-width: 30%; background-color: #474bff; border-radius: 5px; margin: 15px auto; padding: 15px;">
			<form action="<?= base_url('matakuliah/cetak'); ?>" method="post">
        <center>
          <h4>Form Input Data Mata Kuliah</h4>
        </center>
        <hr>
        <div class="row">
          <div class="col-md-12">
            <label for="">Kode MTK</label>
            <input class="form-control" type="text" name="kode" id="kode">
          </div>
          <div class="col-md-12">
            <label for="">Nama MTK</label>
            <input class="form-control" type="text" name="nama" id="nama">
          </div>
          <div class="col-md-12">
            <label for="">SKS</label>
            <select class="form-control" name="sks" id="sks">
              <option value="">Pilih SKS</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
            </select>
          </div>
          <center>
            <input type="submit" class="btn btn-success col-md-6" style="margin-top: 10px;" value="Submit">
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
