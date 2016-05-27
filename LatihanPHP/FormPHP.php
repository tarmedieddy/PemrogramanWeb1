<html>
    <head>
        <style>
            .error {color: #FF0000;}
        </style>
    </head>
    <body>  

        <?php
        // define variables and set to empty values
        $nameErr = $emailErr = $genderErr = $websiteErr = "";
        $name = $email = $gender = $comment = $website = "";
        
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
          if (empty($_POST["name"])) {
            $nameErr = "Harap input Nama";
          } else {
            $name = test_input($_POST["name"]);
            // check if name only contains letters and whitespace
            if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
              $nameErr = "Hanya huruf dan spasi diperbolehkan"; 
            }
          }
          
          if (empty($_POST["email"])) {
            $emailErr = "Harap input e-Mail";
          } else {
            $email = test_input($_POST["email"]);
            // check if e-mail address is well-formed
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
              $emailErr = "Format e-Mail salah"; 
            }
          }
            
          if (empty($_POST["website"])) {
            $website = "";
          } else {
            $website = test_input($_POST["website"]);
            // check if URL address syntax is valid (this regular expression also allows dashes in the URL)
            if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
              $websiteErr = "URL Salah"; 
            }
          }
        
          if (empty($_POST["comment"])) {
            $comment = "";
          } else {
            $comment = test_input($_POST["comment"]);
          }
        
          if (empty($_POST["gender"])) {
            $genderErr = "Harap Pilih Jenis Kelamin";
          } else {
            $gender = test_input($_POST["gender"]);
          }
        }
        
        function test_input($data) {
          $data = trim($data);
          $data = stripslashes($data);
          $data = htmlspecialchars($data);
          return $data;
        }
        ?>
    
        <h2>PHP Form</h2>
        <p><span class="error">* Kolom yang dibutuhkan.</span></p>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
          Nama: <input type="text" name="name" value="<?php echo $name;?>">
          <span class="error">* <?php echo $nameErr;?></span>
          <br><br>
          E-mail: <input type="text" name="email" value="<?php echo $email;?>">
          <span class="error">* <?php echo $emailErr;?></span>
          <br><br>
          Website: <input type="text" name="website" value="<?php echo $website;?>">
          <span class="error"><?php echo $websiteErr;?></span>
          <br><br>
          Komentar: <textarea name="comment" rows="5" cols="40"><?php echo $comment;?></textarea>
          <br><br>
          Jenis Kelamin:
          <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="Perempuan">Perempuan
          <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="Laki-Laki">Laki-Laki
          <span class="error">* <?php echo $genderErr;?></span>
          <br><br>
          <input type="submit" name="submit" value="Submit">  
        </form>
    
        <?php
            echo "<h2>Data Input:</h2>";
            echo $name;
            echo "<br>";
            echo $email;
            echo "<br>";
            echo $website;
            echo "<br>";
            echo $comment;
            echo "<br>";
            echo $gender;
    ?>

    </body>
</html>
