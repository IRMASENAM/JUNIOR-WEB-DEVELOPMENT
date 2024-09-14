<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran Beasiswa</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        form {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 10px;
        }
        label {
            display: block;
            margin-top: 10px;
        }
        input, select, button {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
        }
        button:disabled {
            background-color: #ccc;
        }
    </style>
</head>
<body>
    <h1>Pendaftaran Beasiswa</h1>
    <form id="registrationForm">
        <label for="name">Nama:</label>
        <input type="text" id="name" required>

        <label for="email">Email:</label>
        <input type="email" id="email" required>

        <label for="phone">Nomor HP:</label>
        <input type="tel" id="phone" pattern="\d*" required>

        <label for="semester">Semester Saat Ini:</label>
        <select id="semester" required>
            <option value="">Pilih Semester</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
        </select>

        <label for="ipk">IPK:</label>
        <input type="text" id="ipk" value="3.4" readonly>

        <label for="beasiswa">Pilihan Beasiswa:</label>
        <select id="beasiswa" required disabled>
            <option value="">Pilih Beasiswa</option>
            <option value="A">Beasiswa A</option>
            <option value="B">Beasiswa B</option>
            <option value="C">Beasiswa C</option>
        </select>

        <label for="file">Upload Berkas Syarat:</label>
        <input type="file" id="file" accept=".pdf, .jpg, .jpeg, .zip" required disabled>

        <button type="button" id="submitButton" disabled>Daftar</button>
    </form>

    <h2>Hasil Pendaftaran</h2>
    <div id="result">
        <!-- Hasil pendaftaran akan muncul di sini -->
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const ipk = parseFloat(document.getElementById('ipk').value);
            const beasiswaSelect = document.getElementById('beasiswa');
            const fileInput = document.getElementById('file');
            const submitButton = document.getElementById('submitButton');

            if (ipk >= 3) {
                beasiswaSelect.disabled = false;
                fileInput.disabled = false;
            }

            document.getElementById('registrationForm').addEventListener('input', function () {
                const isFormValid = this.checkValidity();
                submitButton.disabled = !isFormValid || (ipk < 3);
            });

            submitButton.addEventListener('click', function () {
                const name = document.getElementById('name').value;
                const email = document.getElementById('email').value;
                const phone = document.getElementById('phone').value;
                const semester = document.getElementById('semester').value;
                const beasiswa = document.getElementById('beasiswa').value;
                const file = document.getElementById('file').files[0].name;

                const resultDiv = document.getElementById('result');
                resultDiv.innerHTML = `
                    <p><strong>Nama:</strong> ${name}</p>
                    <p><strong>Email:</strong> ${email}</p>
                    <p><strong>Nomor HP:</strong> ${phone}</p>
                    <p><strong>Semester Saat Ini:</strong> ${semester}</p>
                    <p><strong>IPK:</strong> ${ipk}</p>
                    <p><strong>Pilihan Beasiswa:</strong> ${beasiswa}</p>
                    <p><strong>Upload Berkas Syarat:</strong> ${file}</p>
                    <p><strong>Status Ajuan:</strong> Belum di verifikasi</p>
                `;
            });
        });
    </script>
</body>
</html>
