<html>
	<head>
		<title></title>
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
		<link rel="stylesheet" href="php.css" />
	</head>

	<body>
		<div align="center"><font size="6" face="Courier New, Courier, mono"><strong><span class="type"></span></strong></font></div>
			<form name="form1" method="post" action="proses.php"><br><br>
			<div class="container">
				<div class="input-control">
					<input name="nama" type="text" id="nama" placeholder="NAMA" onkeyup="validasiNama()">
					<span id="nama-error"></span>
				</div><br>
				<div class="input-control">
					<input name="alamat" type="text" id="alamat" placeholder="ALAMAT" onkeyup="validasiAlamat()">
					<span id="alamat-error"></span>
				</div><br>
				<div class="input-control">
					<input name="email" type="text" id="email" placeholder="EMAIL" onkeyup="validasiEmail()">
					<span id="email-error"></span>
				</div><br>
				<div class="input-control">
					<input name="phone" type="number" id="phone" placeholder="PHONE" onkeyup="validasiPhone()">
					<span id="phone-error"></span>
				</div><br>
				<div class="input-control">
					<textarea name="layanan" id="layanan" placeholder="SERVICE/LAYANAN" onkeyup="validasiLayanan()"></textarea>
					<span id="layanan-error"></span>
				</div><br><br>
			</div>
				<button onclick="return validasi()">Submit</button> <button type="reset">Ulang</button>
				<span id="subit-error"></span>
			</form>
		<div align="center"><br><strong><a href="lihat.php">::Lihat Daftar Pemesanan::
		</a></strong></div>
		<script src="javascript.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.11"></script>
        <script>
            var typed = new Typed('.type', {
                strings: ['BARBERSHOP FORM BOOKING'], 
                typeSpeed:100,
                backSpeed:70,
                loop:true,
            });
        </script>
	</body>
</html>