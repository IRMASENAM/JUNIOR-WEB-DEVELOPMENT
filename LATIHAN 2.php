<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portal Beasiswa</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        .header {
            background-color: #4CAF50;
            color: white;
            padding: 1rem;
            text-align: center;
        }
        .content {
            padding: 2rem;
        }
        .section {
            margin-bottom: 2rem;
        }
        .section h2 {
            color: #4CAF50;
        }
        .scholarship-list ul {
            list-style: none;
            padding: 0;
        }
        .scholarship-list li {
            background: white;
            margin-bottom: 1rem;
            padding: 1rem;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .footer {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 1rem;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>Selamat Datang di Portal Beasiswa Terbaik</h1>
        <p>Temukan Beasiswa Impian Anda di Sini</p>
    </div>
    <div class="content">
        <div class="section scholarship-list">
            <h2>Beasiswa Populer</h2>
            <ul>
                <li>
                    <h3>Beasiswa Prestasi Akademik</h3>
                    <p>Beasiswa ini ditujukan untuk siswa dengan prestasi akademik yang luar biasa. Dapatkan kesempatan untuk melanjutkan pendidikan di universitas terbaik di dalam dan luar negeri.</p>
                </li>
                <li>
                    <h3>Beasiswa Bidik Misi</h3>
                    <p>Beasiswa ini ditujukan untuk siswa dari keluarga kurang mampu yang memiliki potensi akademik yang baik. Dapatkan bantuan penuh untuk biaya kuliah dan biaya hidup.</p>
                </li>
                <li>
                    <h3>Beasiswa Riset dan Inovasi</h3>
                    <p>Beasiswa ini mendukung penelitian dan inovasi di berbagai bidang. Dapatkan dana untuk penelitian, pengembangan proyek, dan kesempatan untuk bekerja dengan para ahli.</p>
                </li>
            </ul>
        </div>
        <div class="section">
            <h2>Mengapa Memilih Kami?</h2>
            <ul>
                <li>Beragam Pilihan Beasiswa: Kami menawarkan berbagai macam beasiswa untuk memenuhi kebutuhan pendidikan Anda, mulai dari beasiswa prestasi hingga beasiswa riset.</li>
                <li>Informasi Terpercaya: Kami menyediakan informasi terbaru dan terpercaya tentang berbagai beasiswa dari berbagai institusi dan negara.</li>
                <li>Dukungan Penuh: Tim kami siap membantu Anda dalam proses pendaftaran beasiswa, dari persiapan dokumen hingga wawancara.</li>
            </ul>
        </div>
        <div class="section">
            <h2>Cara Mendaftar</h2>
            <ol>
                <li>Cari Beasiswa: Telusuri daftar beasiswa yang tersedia sesuai dengan kriteria dan minat Anda.</li>
                <li>Baca Syarat dan Ketentuan: Pastikan Anda memenuhi syarat dan ketentuan yang ditetapkan oleh pemberi beasiswa.</li>
                <li>Persiapkan Dokumen: Siapkan dokumen yang diperlukan seperti transkrip nilai, surat rekomendasi, dan esai.</li>
                <li>Daftar Online: Isi formulir pendaftaran online dan unggah dokumen yang diperlukan.</li>
                <li>Tunggu Pengumuman: Pantau email dan akun Anda untuk mengetahui status pendaftaran.</li>
            </ol>
        </div>
        <div class="section">
            <h2>Testimoni Penerima Beasiswa</h2>
            <p><strong>Ayu, Penerima Beasiswa Prestasi Akademik:</strong> "Saya sangat bersyukur mendapatkan beasiswa ini. Ini adalah kesempatan yang luar biasa untuk melanjutkan pendidikan saya di universitas ternama."</p>
            <p><strong>Budi, Penerima Beasiswa Bidik Misi:</strong> "Beasiswa ini sangat membantu saya dan keluarga. Saya bisa fokus belajar tanpa harus memikirkan biaya kuliah dan hidup."</p>
        </div>
        <div class="section">
            <h2>Hubungi Kami</h2>
            <p><strong>Alamat Kantor:</strong> Jl. Pendidikan No. 123, Jakarta, Indonesia</p>
            <p><strong>Email:</strong> info@beasiswamu.com</p>
            <p><strong>Telepon:</strong> (021) 123-4567</p>
            <p><strong>Media Sosial:</strong></p>
            <ul>
                <li>Facebook: @BeasiswaMu</li>
                <li>Instagram: @Beasiswa_Mu</li>
                <li>Twitter: @Beasiswa_Mu</li>
            </ul>
        </div>
        <div class="section">
            <h2>Newsletter</h2>
            <p>Daftarkan email Anda untuk mendapatkan informasi terbaru tentang beasiswa.</p>
            <form action="subscribe.php" method="POST">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
                <button type="submit">Daftar</button>
            </form>
        </div>
    </div>
    <div class="footer">
        <p>&copy; 2024 Portal Beasiswa. Semua hak dilindungi.</p>
    </div>
</body>
</html>
