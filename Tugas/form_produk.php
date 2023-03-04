<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belanja Online</title>
	<style>
        /* style untuk form */
		form {
			float: left;
			width: 67%;
		}

        /* style untuk table */
		table {
			float: right;
			width: 30%;
			border-collapse: collapse;
			margin-left: 1px;
		}

        /* style untuk th dan td */
		th, td {
			padding: 4%;
			text-align: left;
		}

        /* style untuk th bagian atas */
        th {
            background-color: #0074D9;
            color: white;
            text-align: left;
        }

        /* style untuk th bagian bawah */
        .bawah {
            background-color: #0074D9;
            color: white;
            caption-side: bottom;
        }

        /* Style untuk footer */
        .credits {
            position: fixed;
            left: 0;
            bottom: 0;
            width: 100%;
            background-color: #f2f2f2;
            padding: 20px;
            text-align: center;
        }
	</style>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div class="container">
        <h2>Belanja Online</h2>
        <form action="form_jumlah.php" method="GET">

        <!-- form belanja online -->
        <form>
            <!-- kolom untuk menulis nama costumer -->
            <div class="form-group row">
                <label for="costumer" class="col-4 col-form-label">Costumer</label> 
                <div class="col-8">
                <input id="costumer" name="costumer" placeholder="Nama Costumer" type="text" class="form-control" required="required">
                </div>
            </div>
            <!-- bagian radio berisi pilihan produk -->
            <div class="form-group row">
                <label class="col-4">Pilih Produk</label> 
                <div class="col-8">
                <div class="custom-control custom-radio custom-control-inline">
                    <input name="produk" id="tv" type="radio" class="custom-control-input" value="TV" required="required"> 
                    <label for="tv" class="custom-control-label">TV</label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                    <input name="produk" id="kulkas" type="radio" class="custom-control-input" value="Kulkas" required="required"> 
                    <label for="kulkas" class="custom-control-label">Kulkas</label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                    <input name="produk" id="mesin_cuci" type="radio" class="custom-control-input" value="Mesin Cuci" required="required"> 
                    <label for="mesin_cuci" class="custom-control-label">Mesin Cuci</label>
                </div>
                </div>
            </div>
            <!-- kolom jumlah -->
            <div class="form-group row">
                <label for="jumlah" class="col-4 col-form-label">Jumlah</label> 
                <div class="col-8">
                <input id="jumlah" name="jumlah" placeholder="Jumlah" type="text" class="form-control" required="required">
                </div>
            </div>
            <!-- bagian submit -->
            <div class="form-group row">
                <div class="offset-4 col-8">
                <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>

        <!-- Table daftar harga -->
        <table>
            <tr>
                <th>DAFTAR HARGA</th>
            </tr>
            <tr>
                <td>TV : Rp. 4.200.000</td>
            </tr>
            <tr class="table table-hover">
                <td>Kulkas : Rp. 3.100.000</td>
            </tr>
            <tr class="table table-hover">
                <td>Mesin Cuci : Rp. 3.800.000</td>
            </tr>
            <tr class="bawah">
                <th>HARGA DAPAT BERUBAH SETIAP SAAT</th>
            </tr>
        </table>

    </div>
    <!-- Footer halaman web -->
    <div class="me-md-auto text-center text-md-start">
        <div class="credits">
          Designed by <a href="#">Muhammad Ammar</a>
        </div>
    </div>
</body>
</html>