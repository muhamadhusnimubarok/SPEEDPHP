<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mengecek Angka</title>
    <style>
      * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
      }

      body, html {
        height: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
        background-color: #E0D8B0;
        font-family: Arial, sans-serif;
      }

      .container {
        max-width: 350px;
        background: #F8F9FD;
        background: linear-gradient(0deg, rgb(255, 255, 255) 0%, rgb(244, 247, 251) 100%);
        border-radius: 40px;
        padding: 50px 35px;
        border: 5px solid rgb(255, 255, 255);
        box-shadow: rgba(133, 189, 215, 0.8784313725) 0px 30px 30px -20px;
      }

      .heading {
        text-align: center;
        font-weight: 900;
        font-size: 30px;
        color: rgb(16, 137, 211);
        padding-bottom: 20px;
      }

      .form .input {
        width: 100%;
        background: white;
        border: none;
        padding: 15px 20px;
        border-radius: 20px;
        margin-top: 15px;
        box-shadow: #cff0ff 0px 10px 10px -5px;
        border-inline: 2px solid transparent;
      }

      .form .input:focus {
        outline: none;
        border-inline: 2px solid #12B1D1;
      }

      .form .login-button {
        display: block;
        width: 100%;
        font-weight: bold;
        background: linear-gradient(45deg, rgb(16, 137, 211) 0%, rgb(18, 177, 209) 100%);
        color: white;
        padding-block: 15px;
        margin: 20px auto;
        border-radius: 20px;
        box-shadow: rgba(133, 189, 215, 0.8784313725) 0px 20px 10px -15px;
        border: none;
        transition: all 0.2s ease-in-out;
      }

      .form .login-button:hover {
        transform: scale(1.03);
        box-shadow: rgba(133, 189, 215, 0.8784313725) 0px 23px 10px -20px;
      }
      
      .result {
        margin-top: 20px;
        text-align: center;
      }
    </style>
</head>
<body> 
<div class="container">
    <div class="heading">Mengecek Bilangan yang Sama</div>
    <form action="" method="POST" class="form">
      <p><b>Masukkan angka pertama :</b></p>
      <input class="input" type="text" name="text" required placeholder="Contoh: 1,2,3,4,5">
      
      <p><b>Masukkan angka kedua :</b></p>
      <input class="input" type="text" name="number" required placeholder="Contoh: 3,4,5,6,7">

      <input class="login-button" type="submit" value="Kirim">
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {

        $bilangan1 = explode(',', $_POST['text']);
        $bilangan2 = explode(',', $_POST['number']);
    
        $bilangan1 = array_map('trim', $bilangan1);
        $bilangan2 = array_map('trim', $bilangan2);
    
        $bilsama = array_intersect($bilangan1, $bilangan2);
        $biltidaksama = array_merge(array_diff($bilangan1, $bilangan2), array_diff($bilangan2, $bilangan1));
    
        echo "<div class='result'>";
        echo "<b>Bilangan yang ada di kedua variabel:</b><br>" . implode(', ', $bilsama) . "<hr>";
        echo "<b>Bilangan yang tidak ada di kedua variabel:</b><br>" . implode(', ', $biltidaksama) . "<br>";
        echo "</div>";
    }
    ?>
    <script>
window.onload = function() {
    document.querySelector('form').reset();
};
</script>

</div>
</body>
</html>
