<?php
if (isset($_GET['menu'])) {
	if ($_GET['menu'] == 'profil-sekolah') {
		echo "
			<ul>
				<li><a href='index.php'>Halaman Utama</a></li>
				<li><a href='#' class='active'>Profil Sekolah</a></li>
				<li><a href='semua-ptk.php'>PTK</a>
					<ul>
						<li><a href='semua-ptk.php'>Semua PTK</a></li>
						<li><a href='ptk-terdaftar.php'>PTK Terdaftar</a></li>
						<li><a href='riwayat-kepangkatan.php'>Riwayat Pangkat Gol</a></li>
						<li><a href='riwayat-kgb.php'>Riwayat KGB</a></li>
					</ul>
				</li>
				<li><a href='peserta-didik.php'>Peserta Didik</a>
					<ul>
						<li><a href='peserta-didik.php'>Semua Peserta Didik</a></li>
						<li><a href='anggota-rombel.php'>Anggota Rombel</a></li>
					</ul>
				</li>	
				<li><a href='#'>Sarpras</a></li>
				<li><a href='#'>Tentang Kami</a></li>
			</ul>
		";
	}
	else if ($_GET['menu'] == 'ptk') {
		echo "
			<ul>
				<li><a href='index.php'>Halaman Utama</a></li>
				<li><a href='#'>Profil Sekolah</a></li>
				<li><a href='#' class='active'>PTK</a>
					<ul>
						<li><a href='semua-ptk.php'>Semua PTK</a></li>
						<li><a href='ptk-terdaftar.php'>PTK Terdaftar</a></li>
						<li><a href='riwayat-kepangkatan.php'>Riwayat Pangkat Gol</a></li>
						<li><a href='riwayat-kgb.php'>Riwayat KGB</a></li>
					</ul>
				</li>
				<li><a href='peserta-didik.php'>Peserta Didik</a>
					<ul>
						<li><a href='peserta-didik.php'>Semua Peserta Didik</a></li>
						<li><a href='anggota-rombel.php'>Anggota Rombel</a></li>
					</ul>
				</li>	
				<li><a href='#'>Sarpras</a></li>
				<li><a href='#'>Tentang Kami</a></li>
			</ul>
		";
	} 
	else if ($_GET['menu'] == 'peserta-didik') {
		echo "
			<ul>
				<li><a href='index.php'>Halaman Utama</a></li>
				<li><a href='#'>Profil Sekolah</a></li>
				<li><a href='semua-ptk.php'>PTK</a>
					<ul>
						<li><a href='semua-ptk.php'>Semua PTK</a></li>
						<li><a href='ptk-terdaftar.php'>PTK Terdaftar</a></li>
						<li><a href='riwayat-kepangkatan.php'>Riwayat Pangkat Gol</a></li>
						<li><a href='riwayat-kgb.php'>Riwayat KGB</a></li>
					</ul>
				</li>
				<li><a href='peserta-didik.php' class='active'>Peserta Didik</a>
					<ul>
						<li><a href='peserta-didik.php'>Semua Peserta Didik</a></li>
						<li><a href='anggota-rombel.php'>Anggota Rombel</a></li>
					</ul>
				</li>	
				<li><a href='#'>Sarpras</a></li>
				<li><a href='#'>Tentang Kami</a></li>
			</ul>
		";
	}
	else if ($_GET['menu'] == 'sarpras') {
		echo "
			<ul>
				<li><a href='index.php'>Halaman Utama</a></li>
				<li><a href='#'>Profil Sekolah</a></li>
				<li><a href='semua-ptk.php'>PTK</a>
					<ul>
						<li><a href='semua-ptk.php'>Semua PTK</a></li>
						<li><a href='ptk-terdaftar.php'>PTK Terdaftar</a></li>
						<li><a href='riwayat-kepangkatan.php'>Riwayat Pangkat Gol</a></li>
						<li><a href='riwayat-kgb.php'>Riwayat KGB</a></li>
					</ul>
				</li>
				<li><a href='peserta-didik.php'>Peserta Didik</a>
					<ul>
						<li><a href='peserta-didik.php'>Semua Peserta Didik</a></li>
						<li><a href='anggota-rombel.php'>Anggota Rombel</a></li>
					</ul>
				</li>
				<li><a href='#' class='active'>Sarpras</a></li>
				<li><a href='#'>Tentang Kami</a></li>
			</ul>
		";
	}
	else if ($_GET['menu'] == 'tentang-kami') {
		echo "
			<ul>
				<li><a href='index.php'>Halaman Utama</a></li>
				<li><a href='#'>Profil Sekolah</a></li>
				<li><a href='semua-ptk.php'>PTK</a>
					<ul>
						<li><a href='semua-ptk.php'>Semua PTK</a></li>
						<li><a href='ptk-terdaftar.php'>PTK Terdaftar</a></li>
						<li><a href='riwayat-kepangkatan.php'>Riwayat Pangkat Gol</a></li>
						<li><a href='riwayat-kgb.php'>Riwayat KGB</a></li>
					</ul>
				</li>
				<li><a href='peserta-didik.php'>Peserta Didik</a>
					<ul>
						<li><a href='peserta-didik.php'>Semua Peserta Didik</a></li>
						<li><a href='anggota-rombel.php'>Anggota Rombel</a></li>
					</ul>
				</li>
				<li><a href='#'>Sarpras</a></li>
				<li><a href='#' class='active'>Tentang Kami</a></li>
			</ul>
		";
	}
	 
} else {
	echo "
			<ul>
				<li><a href='index.php' class='active'>Halaman Utama</a></li>
				<li><a href='#'>Profil Sekolah</a></li>
				<li><a href='semua-ptk.php'>PTK</a>
					<ul>
						<li><a href='semua-ptk.php'>Semua PTK</a></li>
						<li><a href='ptk-terdaftar.php'>PTK Terdaftar</a></li>
						<li><a href='riwayat-kepangkatan.php'>Riwayat Pangkat Gol</a></li>
						<li><a href='riwayat-kgb.php'>Riwayat KGB</a></li>
					</ul>
				</li>
				<li><a href='peserta-didik.php'>Peserta Didik</a>
					<ul>
						<li><a href='peserta-didik.php'>Semua Peserta Didik</a></li>
						<li><a href='anggota-rombel.php'>Anggota Rombel</a></li>
					</ul>
				</li>	
				<li><a href='#'>Sarpras</a></li>
				<li><a href='#'>Tentang Kami</a></li>
			</ul>
	";
}		
?>
