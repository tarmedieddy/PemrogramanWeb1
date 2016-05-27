<html>
<body>
    <h1>Latihan If dan Else</h1>
    <?php
    $t = date("H");
    echo "<p>Jam (di server) yaitu " . $t; 
    echo ", dan saya akan memberikan pesan:</p>";
    
    if ($t < "10") {
        echo "Selamat Pagi!";
    } elseif ($t < "20") {
        echo "Selamat Siang!";
    } else {
        echo "Selamat Malam!";
    }
    ?>
</body>
</html>
