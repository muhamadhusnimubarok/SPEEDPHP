<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subscribe</title>
    <style>
      body {
        margin: 0;
        height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
        background-color: #E0D8B0;
      }

      .container {
        display: flex;
        flex-direction: column;
        align-items: center;
        width: 100%;
        max-width: 800px;
        padding: 20px;
        box-sizing: border-box;
      }

      .subscribe {
        position: relative;
        height: 140px;
        width: 240px;
        padding: 20px;
        background-color: #FFF;
        border-radius: 4px;
        color: #333;
        box-shadow: 0px 0px 60px 5px rgba(0, 0, 0, 0.4);
        margin-bottom: 20px;
      }

      .subscribe:after {
        position: absolute;
        content: "";
        right: -10px;
        bottom: 18px;
        width: 0;
        height: 0;
        border-left: 0px solid transparent;
        border-right: 10px solid transparent;
        border-bottom: 10px solid #1a044e;
      }

      .subscribe p {
        text-align: center;
        font-size: 20px;
        font-weight: bold;
        letter-spacing: 4px;
        line-height: 28px;
      }

      .subscribe input {
        position: absolute;
        bottom: 30px;
        border: none;
        border-bottom: 1px solid #d4d4d4;
        padding: 10px;
        width: 82%;
        background: transparent;
        transition: all .25s ease;
      }

      .subscribe input:focus {
        outline: none;
        border-bottom: 1px solid #0d095e;
      }

      .subscribe .submit-btn {
        position: absolute;
        border-radius: 30px;
        border-bottom-right-radius: 0;
        border-top-right-radius: 0;
        background-color: #0f0092;
        color: #FFF;
        padding: 12px 25px;
        display: inline-block;
        font-size: 12px;
        font-weight: bold;
        letter-spacing: 5px;
        right: -10px;
        bottom: -20px;
        cursor: pointer;
        transition: all .25s ease;
        box-shadow: -5px 6px 20px 0px rgba(26, 26, 26, 0.4);
      }

      .subscribe .submit-btn:hover {
        background-color: #07013d;
        box-shadow: -5px 6px 20px 0px rgba(88, 88, 88, 0.569);
      }

      .results-container {
        width: 100%;
        max-width: 600px;
        max-height: 300px;
        overflow-y: auto;
        border: 1px solid #ddd;
        background-color: #FFF;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
        padding: 10px;
        box-sizing: border-box;
      }

      table {
        border-collapse: collapse;
        width: 100%;
      }

      th, td {
        border: 1px solid #ddd;
        padding: 8px;
        text-align: center;
      }

      th {
        background-color: #0f0092;
        color: #FFF;
      }

      td {
        background-color: #f9f9f9;
      }
    </style>
</head>
<body>

<div class="container">
  <form method="POST" action="" class="subscribe">
    <p>Perulangan 5 tanpa angka 0</p>
    <input placeholder="Masukkan Angka" name="nomor" type="number" required>
    <br>
    <button type="submit" class="submit-btn">SUBMIT</button>
  </form>

  <div class="results-container">
    <?php
      if ($_SERVER['REQUEST_METHOD'] === 'POST') {
          $nomor = $_POST['nomor'];
          echo "<table>";
          echo "<tr><th>Perulangan</th><th>Hasil</th></tr>";

          for ($z = 1; $z <= $nomor; $z++) {
              $hasil = 5 * $z;
              if (strpos($hasil, '0') === false) {
                  echo "<tr><td>$z x 5</td><td>$hasil</td></tr>";
              }
          }

          echo "</table>";
      }
    ?>
  </div>
</div>

</body>
</html>
