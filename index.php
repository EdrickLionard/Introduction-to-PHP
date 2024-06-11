<!DOCTYPE html>
<html>
<head>
    <title>Halaman PHP</title>
</head>
<body>
    <?php
    // 1. Menampilkan "Hello World"
    echo "<h1>Hello World</h1>";

    // 2. Menampilkan list berisi nama bulan dari Januari hingga Desember
    $months = array(
        "Januari", "Februari", "Maret", "April", "Mei", "Juni",
        "Juli", "Agustus", "September", "Oktober", "November", "Desember"
    );
    echo "<h2>Daftar Bulan:</h2>";
    echo "<ul>";
    foreach ($months as $month) {
        echo "<li>$month</li>";
    }
    echo "</ul>";
    ?>

    <!-- 3. Menampilkan sebuah tabel berisi apapun -->
    <h2>Tabel Data</h2>
    <table border="1">
        <tr>
            <th>Nama</th>
            <th>Usia</th>
            <th>Kota</th>
        </tr>
        <tr>
            <td>Alice</td>
            <td>25</td>
            <td>Jakarta</td>
        </tr>
        <tr>
            <td>Bob</td>
            <td>30</td>
            <td>Bandung</td>
        </tr>
        <tr>
            <td>Charlie</td>
            <td>35</td>
            <td>Surabaya</td>
        </tr>
    </table>

    <!-- 4. Menampilkan formulir -->
    <h2>Formulir Kontak</h2>
    <form action="submit.php" method="post">
        <label for="name">Nama:</label><br>
        <input type="text" id="name" name="name"><br>
        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email"><br>
        <label for="message">Pesan:</label><br>
        <textarea id="message" name="message"></textarea><br>
        <input type="submit" value="Kirim">
    </form>
</body>
</html>
