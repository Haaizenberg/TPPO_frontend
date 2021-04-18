<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="../css/analisation.css">
  <title>Распознавание</title>
</head>
<body>
  <div class="wrapper">
    <header>
      <h1 class="header_title">Анализатор активности</h1>
      <div class="navigation">
        <button class="nav-button">О сервисе</button>
        <button class="nav-button">Выход</button>
      </div>
    </header>
    <div class="main">
      <div class="container">
        <div class="params">
          <div class="checkboxes-header">
            <h3>Распознавать</h3>
          </div>
          <div class="checkboxes">
            <div class="row">
              <div class="left-column"><input id="check1" type="checkbox" name="check" value="check1"></div>
              <div class="right-column"><label for="check1">Силуэты людей</label></div>
            </div>

            <div class="row">
              <div class="left-column"><input id="check2" type="checkbox" name="check" value="check2"></div>
              <div class="right-column"><label for="check2">Вид активности</label></div>
            </div>

            <div class="row">
              <div class="left-column"><input id="check3" type="checkbox" name="check" value="check3"></div>
              <div class="right-column"><label for="check3">Скорость движения</label></div>
            </div>

            <div class="row">
              <div class="left-column"><input id="check4" type="checkbox" name="check" value="check4"></div>
              <div class="right-column"><label for="check4">Направление движения</label></div>
            </div>
          </div>
        </div>

        <div class="video">
          <video></video>
        </div>
      </div>

      <div class="cam-button">
        <button class="blue-button">Выбрать камеру</button>
      </div>
    </div>
    <footer>
      <h3 class="footer_sign">Разработано командой NSTeam</h3>
    </footer>
  </div>
</body>
</html>
