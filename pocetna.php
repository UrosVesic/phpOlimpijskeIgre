<?php

require "dbBroker.php";
require "model/sportista.php";
require "model/sport.php";
require "model/zemlja.php";
session_start();

if (!isset($_SESSION['korisnik_username'])) {
  header('Location:index.php');
  exit();
}

$rezultat = Sportista::getAll($conn);
$zemlje = Zemlja::getAll($conn);
$sportovi = Sport::getAll($conn);

if (!$rezultat) {
  echo "<script>alert('Greska prilikom vracanja sportista');</script>";
  exit();
}

if (!$zemlje) {
  echo "<script>alert('Greska prilikom vracanja zemalja');</script>";
  exit();
}



if ($rezultat->num_rows ==  0) {
  echo 'nema sportista u bazi';
} else {
?>

  <!DOCTYPE html>
  <html lang="en">

  <head>
    <title>Olimpijada 2020</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <style>
      .fakeimg {
        height: 200px;
      }
    </style>
  </head>

  <body>

    <div class="jumbotron text-center" style="margin-bottom:0">
      <h1>Olimpijada 2020</h1>
      <p>Dobrodosli <?php echo $_SESSION['korisnik_username'] ?></p>
    </div>

    <nav class="navbar navbar-inverse">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>

        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Home</a></li>
          </ul>
        </div>
      </div>
    </nav>

    <div class="container">
      <div class="row">
        <div class="col-sm-4">
          <h2>Pretrazi sportistu po sportu</h2>
          <br>
          <div>
            <form id="pretrazi" action="#" method="POST">
              <input type='text' id='sportPretraga'>
              <button type="button" onclick="funkcijaZaPretragu()">Pretrazi sportistu</button>
            </form>
          </div>
        </div>

        <div class="col-sm-4">
          <h2>Dodaj sportistu</h2>
          <br>
          <div>
            <form id="dodaj" action="#" method="POST">
              <table>
                <tr>
                  <td>Ime:</td>
                  <td>
                    <input type='text' name='ime' required>
                  </td>
                </tr>
                <tr>
                  <td>Prezime:</td>
                  <td>
                    <input type='text' name='prezime' required>
                  </td>
                </tr>
                <tr>
                  <td>Zemlja:</td>
                  <td>
                    <select name='zemlja'>
                      <?php while ($zemlja = $zemlje->fetch_array()) :  ?>
                        <option> <?php echo $zemlja['Naziv']; ?> </option>
                      <?php endwhile; ?>
                    </select>
                  </td>
                </tr>
                <tr>
                  <td>Sport:</td>
                  <td>
                    <select name='sport'>
                      <?php while ($sport = $sportovi->fetch_array()) :  ?>
                        <option> <?php echo $sport['Naziv']; ?> </option>
                      <?php endwhile; ?>
                    </select>
                  </td>
                </tr>


                <tr>
                  <td colspan='2'>
                    <button type="submit" id="dodaj">Dodaj sportistu</button>
                    <button type="submit" id="azuriraj">Azuriraj sportistu</button>
                    <button type="submit" id="obrisi">Obrisi sportistu</button>


                  </td>
                </tr>

              </table>

          </div>
          <div>

            <div>
              <table id="myTable">
                <thead>
                  <tr>
                    <th>ime</th>
                    <th>prezime</th>
                    <th>sport</th>
                    <th>zemlja</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  while ($red = $rezultat->fetch_array()) : ?>
                    <tr>
                      <td><?php echo $red["Ime"] ?></td>
                      <td><?php echo $red["Prezime"] ?></td>
                      <td><?php
                          $sport = Sport::getById($red["Sport"], $conn)->fetch_array();
                          echo $sport["Naziv"] ?></td>
                      <td><?php
                          $zemlja = Zemlja::getById($red["Zemlja"], $conn)->fetch_array();
                          echo $zemlja["Naziv"] ?></td>
                      <td>
                        <label class="custom-radio-btn">
                          <input type="radio" name="checked-donut" value=<?php echo $red["idSportiste"] ?>>
                          <span class="checkmark"></span>
                        </label>
                      </td>
                  <?php endwhile;
                }
                  ?>
                    </tr>
                </tbody>
              </table>
              </form>
            </div>





            <br>
            <div class="row">

            </div>

            <br><br><br><br><br><br><br><br><br>
            <div class="jumbotron text-center" style="margin-bottom:0">
              <p></p>
            </div>





            <style>
              body {
                font-family: Arial, Helvetica, sans-serif;
              }

              /* Full-width input fields */
              input[type=text],
              input[type=password] {
                width: 100%;
                padding: 12px 20px;
                margin: 8px 0;
                display: inline-block;
                border: 1px solid #ccc;
                box-sizing: border-box;
              }

              /* Set a style for all buttons */
              button {
                background-color: #ff5e00;
                color: white;
                padding: 12px 18px;
                margin: 5px 0;
                border: none;
                cursor: pointer;
                width: 100%;
              }

              button:hover {
                opacity: 0.8;
              }




              .container {
                padding: 4px;
              }




              table1 {
                border-spacing: 0;
                width: 100%;
                border: 1px solid #ddd;
              }

              th,
              td {
                text-align: left;
                padding: 16px;
              }

              tr:nth-child(even) {
                background-color: #f2f2f2
              }
            </style>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
            <script src="js/main.js"></script>

            <script>
              function sortTable() {
                var table, rows, switching, i, x, y, shouldSwitch;
                table = document.getElementById("myTable");
                switching = true;

                while (switching) {
                  switching = false;
                  rows = table.rows;
                  for (i = 1; i < (rows.length - 1); i++) {
                    shouldSwitch = false;
                    x = rows[i].getElementsByTagName("TD")[1];
                    y = rows[i + 1].getElementsByTagName("TD")[1];
                    if (x.innerHTML.toLowerCase() > y.innerHTML.toLowerCase()) {
                      shouldSwitch = true;
                      break;
                    }
                  }
                  if (shouldSwitch) {
                    rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
                    switching = true;
                  }
                }
              }

              function funkcijaZaPretragu() {
                var input, filter, table, tr, td, i, txtValue;
                input = document.getElementById("sportPretraga");
                filter = input.value.toUpperCase();
                table = document.getElementById("myTable");
                tr = table.getElementsByTagName("tr");
                for (i = 0; i < tr.length; i++) {
                  td = tr[i].getElementsByTagName("td")[2];
                  if (td) {
                    txtValue = td.textContent || td.innerText;
                    if (txtValue.toUpperCase().indexOf(filter) > -1) {
                      tr[i].style.display = "";
                    } else {
                      tr[i].style.display = "none";
                    }
                  }
                }
              }
            </script>
  </body>

  </html>