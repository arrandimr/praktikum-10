<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<style>
		.warning {color: #FF0000;}
		.container {
			padding-top: 25px;
		}
		body {
			background:#6c757d; 
		}
				
	</style>
</head>

<body>
<div class="bg-secondary">	
<div class="container rounded shadow bg-white modal-backdrop">
	<div class="card">
				<div class="card-header bg-info text-white shadow sticky-top" align="center">
					<p class="h4">FORMULIR PESERTA DIDIK</p>
				</div>
		
				<div class="card-body bg-dark text-white">
				<form method="post" action="tampil.php" >
					<div class="container form-inline">
   						<div class="form-group col-sm-1">   						
  						</div>
						
						<div class="form-group">
   							<label class="col-form-label col-sm-2">NISN</label>
    						<input type="text" name="nisn" class="form-control" placeholder="NISN">
  						</div>
  						<div class="form-group col-sm-5">
   							 <label class="col-form-label col-sm-4">Nama lengkap</label>
   							 <input type="text" name="nama" class="form-control" placeholder="Nama lengkap">
  						</div>
						<div class="form-group">
   							<button type="submit" class="btn btn-info" value="Get Selected Values">Cari</button>
  						</div>
					</div>
					<br>
					<div class="col-md-4"></div>
				<span class="d-block p-2 bg-secondary text-white rounded shadow-sm">DATA PRIBADI</span><br>
				
			
					</form>
</div>
</div>		
</div>
</div>
	
</body>
</html>