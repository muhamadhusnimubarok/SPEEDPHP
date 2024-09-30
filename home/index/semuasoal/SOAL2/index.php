<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
html, body {
  height: 100%;
  margin: 0;
}

body {
  display: flex;
  justify-content: center;
  align-items: center;
  background-color: #E0D8B0; 
}

.form-container {
  display: flex;
  flex-direction: column;
  align-items: center;
}

.form {
  --input-focus: #2d8cf0;
  --font-color: #323232;
  --font-color-sub: #666;
  --bg-color: beige;
  --main-color: black;
  padding: 20px;
  background: lightblue;
  display: flex;
  flex-direction: column;
  align-items: flex-start;
  justify-content: center;
  gap: 20px;
  border-radius: 5px;
  border: 2px solid var(--main-color);
  box-shadow: 4px 4px var(--main-color);
}

.title {
  color: var(--font-color);
  font-weight: 900;
  font-size: 20px;
  margin-bottom: 25px;
}

.title span {
  color: var(--font-color-sub);
  font-weight: 600;
  font-size: 17px;
}

.input {
  width: 250px;
  height: 40px;
  border-radius: 5px;
  border: 2px solid var(--main-color);
  background-color: var(--bg-color);
  box-shadow: 4px 4px var(--main-color);
  font-size: 15px;
  font-weight: 600;
  color: var(--font-color);
  padding: 5px 10px;
  outline: none;
}

.input::placeholder {
  color: var(--font-color-sub);
  opacity: 0.8;
}

.input:focus {
  border: 2px solid var(--input-focus);
}

.login-with {
  display: flex;
  gap: 20px;
}

.button-log {
  cursor: pointer;
  width: 40px;
  height: 40px;
  border-radius: 100%;
  border: 2px solid var(--main-color);
  background-color: var(--bg-color);
  box-shadow: 4px 4px var(--main-color);
  color: var(--font-color);
  font-size: 25px;
  display: flex;
  justify-content: center;
  align-items: center;
}

.icon {
  width: 24px;
  height: 24px;
  fill: var(--main-color);
}

.button-log:active, .button-confirm:active {
  box-shadow: 0px 0px var(--main-color);
  transform: translate(3px, 3px);
}

.button-confirm {
  margin: 50px auto 0 auto;
  width: 120px;
  height: 40px;
  border-radius: 5px;
  border: 2px solid var(--main-color);
  background-color: var(--bg-color);
  box-shadow: 4px 4px var(--main-color);
  font-size: 17px;
  font-weight: 600;
  color: var(--font-color);
  cursor: pointer;
}

.output {
  margin-top: 20px;
  padding: 20px;
  border: 2px solid var(--main-color);
  background-color:#6A9C89;
  border-radius: 5px;
  box-shadow: 4px 4px var(--main-color);
  color: var(--font-color);
  text-align: center;
}
    </style>
</head>
<body>

<div class="form-container">
  <form class="form" method="POST">
    <div class="title">Welcome,<br><span>menghitung kompensasi dari hasil lembur🤒</span></div>
    <input class="input" name="masuk" placeholder="Jam Masuk (HH:MM)" type="text" required>
    <input class="input" name="pulang" placeholder="Jam Pulang (HH:MM)" type="text" required>
    <div class="login-with">
      <div class="button-log"><b></b></div>
      <div class="button-log"></div>
      <div class="button-log"></div>
    </div>
    <button class="button-confirm" type="submit">Masukkan →</button>
  </form>

  <?php
  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
      function hitung_kompensasi($jam_masuk, $jam_pulang) {
          $total = (strtotime($jam_pulang) - strtotime($jam_masuk)) / 3600; 
          $total = min(floor($total), 14); 

          $jam_lembur = max(0, $total - 8);
          if ($jam_lembur > 0 ) {
              $kompensasi = 50000 + min($jam_lembur - 1, 5) * 25000;
          } else {
              $kompensasi = 0;
          }

          return [
              'kompensasi' => $kompensasi,
              'total' => $total,
              'jam_lembur' => $jam_lembur
          ];
      }

      $jam_masuk = $_POST['masuk'] ?? '08:00'; // Default value if not set
      $jam_pulang = $_POST['pulang'] ?? '17:00'; // Default value if not set

      $hasil = hitung_kompensasi($jam_masuk, $jam_pulang);

      echo "<div class='output'>";
      echo "<div class='title'>Hasil Kompensasi</div>";
      echo "Lama kerja: " . $hasil['total'] . " jam <br>";
      echo "Jam lembur: " . $hasil['jam_lembur'] . " jam <br>";
      echo "Kompensasi yang diterima: Rp." . number_format($hasil['kompensasi'], 0, ',', '.') . "<br>";
      echo "</div>";
  }
  ?>
</div>

</body>
</html>
