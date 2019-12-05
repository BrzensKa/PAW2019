<?php
	session_start();
?>
<!DOCTYPE html>
<html lang='en'>
	<head>
		<title>Halaman Detil Data 2</title>
		<link rel="stylesheet" href="index.css" type="text/css">
	</head>
	<body>
		<table class="center">
			<tr>
				<td colspan="3"><div class="boxlines1">RIWAYAT PENDIDIKAN</div></td>
			</tr>
			<tr><td><div class="img"><img src='pict/photo.jpg' alt='photo'></div></td>
				<td><div class="sublines">
						<ol class="li">
						<li>Nama Lengkap</li>
						<li>NIM</li>
						<li>Program Studi</li>
						<li>Fakultas</li>
						<li>Universitas</li>
						</ol>
					</div>
				</td>
				<td><div class="sublines">
						:Ananda Dharma Prayitno<br>
						:160411100134<br>
						:Teknik Informatika<br>
						:Teknik<br>
						:Trunojoyo Madura<br>
					</div>
				</td>
			</tr>
			<tr>
			<td colspan="3"><div class="boxlines2">RIWAYAT PENDIDIKAN TINGKAT SD-SMA</div></td>
			</tr>
			<tr>
				<td colspan="3">
				<ol type="I">
					<li>SDN BANYUAJUH 2 KAMAL
						<ul>
							<li>Tahun Masuk : 2004</li>
							<li>Tahun Lulus : 2010</li>
							<li>Website : <a href="http://sekolah.data.kemdikbud.go.id/index.php/chome/profil/60ABB77B-8D18-E111-812E-936A0BBD78AF">sdnbanyuajuh2Kamal</a></li>
						</ul>
					</li>
					<li>SMPN 1 Kamal
						<ul>
							<li>Tahun Masuk : 2010</li>
							<li>Tahun Lulus : 2013</li>
							<li>Website : <a href="http://smp1kamal.blogspot.com/">smp1kamal</a></li>
						</ul>
					</li>
					<li>SMAN 1 Kamal
						<ul>
							<li>Tahun Masuk : 2013</li>
							<li>Tahun Lulus : 2016</li>
							<li>Website : <a href="http://sman1kamal.sch.id/">sman1kamal</a></li>
						</ul>
					</li>
				</ol>
				</td>
			</tr>
			<tr>
			<td colspan="3"><div class="boxlines1">RIWAYAT PENDIDIKAN TINGKAT UNIVERSITAS </div></td>
			</tr>
			<tr><td colspan='3'>
				<ul>
					<li>Universitas Trunojoyo Madura</li>
					<li>Tahun Masuk : 2016</li>
					<li>Website : <a href="http://www.trunojoyo.ac.id/">trunojoyomadura</a></li>
					<li>Daftar seluruh mata kuliah yang telah diambil :</li>
				</ul>
						<ol>
							<li>TIK101 Pengantar Informatika</li>
							<li>TIK102 Algoritma Pemrograman</li>
							<li>TIK103 Logika Informatika</li>
							<li>TIK104 Matematika</li>
							<li>TIK105 Bahasa Indonesia (Tata Tulis Karya Ilmiah)</li>
							<li>UNG110 Bahasa Inggris</li>
							<li>UNG101 Pendidikan Agama Islam</li>
							<li>UNG108 Pancasila dan Kewarganegaraan</li>
							<li>TIK206 Statistika</li>
							<li>TIK205 Fisika Informatika</li>
							<li>TIK204 Organisasi Komputer</li>
							<li>TIK201 Komputasi Aljabar Linier</li>
							<li>TIK202 Struktur Data</li>
							<li>TIK203 Dasar Pemrograman Web</li>
							<li>TIK306 Pemrograman Desktop</li>
							<li>TIK305 Rekayasa Multimedia</li>
							<li>TIK304 Sistem Operasi</li>
							<li>TIK303 Pemrograman Berorientasi Objek</li>
							<li>TIK302 Sistem Basis Data</li>
							<li>TIK301 Matematika Diskrit</li>
							<li>TIK406 Komputasi Numerik</li>
							<li>TIK405 Pengelolaan Basis Data</li>
							<li>TIK404 Bahasa Formal dan Otomata</li>
							<li>TIK402 Grafika Komputer</li>
							<li>TIK403 Sistem Informasi</li>
							<li>TIK401 Jaringan Komputer</li>
							<li>TIK703 Technopreneurship</li>
							<li>TIK506 Interaksi Manusia dan Komputer</li>
							<li>TIK505 Pengolahan Citra</li>
							<li>TIK504 Strategi Algorima</li>
							<li>TIK503 Pengembangan Aplikasi Web</li>
							<li>TIK502 Penambangan Data</li>
							<li>TIK501 Analisa dan Perancangan Perangkat Lunak</li>	
							<li>TIK702 Keamanan Data dan Aplikasi</li>
							<li>TIK728 Penambangan dan Pencarian Web</li>
							<li>TIK606 Kerja Praktek (KP)</li>
							<li>TIK605 Pengujian Perangkat Lunak</li>
							<li>TIK604 Sistem Terdistribusi</li>
							<li>TIK603 Kecerdasan Komputasional</li>	
							<li>TIK601 Proyek Perangkat Lunak</li>
							<li>UNG111 Pemrograman Perangkat Bergerak</li>
						</ol>
			</td></tr>
										
			<tr>
				<td colspan="3"><div class="boxlines2">HALAMAN</div></td>
			</tr>
			<tr>
				<td colspan="3"><div class="sublines">
						<ul>
						<li><a href='index.php'>Halaman Utama</a></li>
						<li><a href="<?php if(isset($_SESSION['isAdmin'])){echo $_SESSION['data1'];} else{echo "login.php";}?>">Halaman Detil Data 1</a></li>
						<li><a href='logout.php'>Halaman Logout</a></li>
						</ul>
					</div>
				</td>
			</tr>
		</table>
	</body>
</html>