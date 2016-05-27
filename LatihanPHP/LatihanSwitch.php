<html>
<body>
<h1>Latihan Switch</h1>
    <?php
    $favcolor = "hitam";

        switch ($favcolor) {
            case "merah":
                echo "Warna favoritmu adalah Merah!";
                break;
            case "biru":
                echo "Warna favoritmu adalah Biru!";
                break;
            case "hitam":
                echo "Warna favoritmu adalah Hitam!";
                break;
            default:
                echo "Warna favoritmu adalah antara Merah, Biru, atau Hitam!";
        }
    ?>
 
</body>
</html>