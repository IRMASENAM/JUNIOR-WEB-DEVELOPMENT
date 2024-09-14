<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portal Beasiswa</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <style>
        body {
            font-family: 'Times New Roman', Times, serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        .header {
            background-color: #dbc5ae;
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
            color: #bf875d;
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
            padding: 1px;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>
<body>
    <div class="container">
    <?php
    include 'nav.php'
    ?>
    </div>

    <div class="header">
        <h1>Selamat Datang di Portal Beasiswa</h1>
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
                    <h3>Beasiswa Non Akademik</h3>
                    <p>Beasiswa ini ditujukan untuk yang memiliki bakat atau kontribusi di luar bidang akademik.</p>
                </li>
                <li>
                    <h3>Beasiswa Luar Negeri/Internasional</h3>
                    <p>Beasiswa ini merupakan Beasiswa luar negeri atau internasional yang memiliki tujuan sangat luas dan beragam, yang dirancang untuk mendorong pertukaran budaya, memperluas wawasan akademis, dan meningkatkan keterampilan profesional di berbagai bidang.</p>
                </li>
                <li>
                    <h3>Beasiswa S1/S2</h3>
                    <p>Beasiswa ini ditujukan kepada calon mahasiswa yang akan melanjutkan ke tingkat perkuliahan namun terkendala adanya biaya.</p>
                </li>
                <li>
                    <h3>Beasiswa S3</h3>
                    <p>Beasiswa ini ditujukan kepada beliau tingkat sarjana atau magister yang ingin melanjutkan ke tingkat terakhir untuk meraih gelar doktornya.</p>
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
            <p><strong>Alamat Kantor:</strong> Jl. Kawi No. 23, Cilacap, Indonesia</p>
            <p><strong>Email:</strong> info@besmas.com</p>
            <p><strong>Telepon:</strong> (082) 2209-98854</p>
            <p><strong>Media Sosial:</strong></p>
            <ul>
                <li>Facebook: @besmas</li>
                <li>Instagram: @besmas</li>
                <li>Twitter: @besmas</li>
            </ul>
        </div>
    </div>
    <div class="footer">
        <p>&copy; 2024 Portal Beasiswa. Semua hak dilindungi.</p>
    </div>
    <script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>