<!DOCTYPE>
<html><head>
    <title></title>
</head><body>
    <table CELLPADDING="10">
	
        <?php foreach ($pengguna as $p) : ?>
            
		 <b>Selamat</b>
    </table>
    <p align="justify">Anda telah selesai melakukan registrasi awal dari Pendaftaran Mahasiswa Baru Universitas
        Ubudiyah Indonesia. Bersama email ini, kami Panitia Pendaftaran memberikan informasi
        bahwa Anda telah terdaftar sebagai calon mahasiswa Universitas Ubudiyah Indonesia,
        dengan informasi sebagai berikut:</p>
    <br>
    <table>
        <tr>
            <th>Email</th>
            <th>:</th>
            <th><?= $p['email']; ?></th>
        </tr>
        <tr>
            <th>Nama</th>
            <th>:</th>
            <th><?= $p['nama']; ?></th>
        </tr>
    </table>
<?php endforeach; ?>
<p align="justify">
    Pembayaran Formulir dapat dilakukan dengan: Transfer ke Bank Syariah Indonesia (BSI)
    dengan VIRTUAL ACCOUNT 700.174.113.8 Silakan melakukan Pembayaran Pendaftaran
    Mahasiswa Baru Universitas Ubudiyah Indonesia, dengan melakukan transfer sebesar Rp.
    250.000,- (Dua ratus lima puluh ribu rupiah)
    Bukti Pembayaran harus disimpan baik-baik sebagai bukti bila diperlukan.
    Dan harap konfirmasi pembayaran ke No. WA Pantia pendaftaran mahasiswa baru: 0822 6781 1082.
</p>
<p align="justify">
    Setelah melakukan pembayaran gunakan Username dan Password untuk melakukan login
    pada sistem Pendaftaran Mahasiswa Baru Universitas Ubudiyah Indonesia.
</p>
<p align="justify">
    SPada Halaman login akun anda proses pendaftaran dilakukan, dimulai dari pengisian formulir,
    mengupload bukti pembayaran pendaftaran dan kelengkapan lainnya sampai Anda
    dinyatakan Lulus sebagai Mahasiswa Universitas Ubudiyah Indonesia.
</p>
<p align="justify">
    Pastikan anda mencek login akun pendaftaran secara berkala. Panduan alur pendaftaran ada
    pada akun anda. Demikianlah informasi ini kami sampaikan untuk membantu Anda
    menyelesaikan tahap berikutnya dari proses Pendaftaran Mahasiswa Baru Universitas
    Ubudiyah Indonesia
</p>
<p align="justify">
    Terima kasih banyak, informasi ini juga disampaikan pada email yang didaftarkan, silakan cek
    email. Kontak lebih lanjut silakan melalui chat online pada web pendaftaran atau call center
    0822-6781-1082.
</p>
<font>
    <h2 align="right">(Panitia Pendaftaran Mahasiswa Baru UUI)</h2>
</font>
</body></html>