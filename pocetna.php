<!DOCTYPE html>
<html lang="en">

<head>
  <title>Olimpijada 2020</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
    .fakeimg {
      height: 200px;
    }
  </style>
</head>

<body>

  <div class="jumbotron text-center" style="margin-bottom:0">
    <h1>Olimpijada 2020</h1>
    <p>Dobrodosli</p>
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
          <li><a href="registracija">Registracija</a></li>
          <!-- <li><a href="prikaz">Page 3</a></li> -->
        </ul>
      </div>
    </div>
  </nav>

  <div class="container">
    <div class="row">
      <div class="col-sm-4">

        <div class="fakeimg">

        </div>
      </div>

      <div class="col-sm-4">
        <h2>Pretrazi sportistu</h2>
        <br>
        <div>
          <table>
            <tr>
              <td>Ime i prezime:</td>
              <td>
                <input type='text' name='imeIPrezime'>
              </td>
            </tr>
            <tr>
              <td>Zemlja:</td>
              <td>
                <select name='zemlja'>
                </select>
              </td>
            </tr>
            <tr>
              <td>Sport:</td>
              <td>
                <select name='sport'>

                </select>
              </td>
            </tr>
            <tr>
              <td>Disciplina:</td>
              <td>
                <select name='disciplina'>
                </select>
              </td>
            </tr>
            <tr>
              <td>Pol:</td>
              <td>
                <input type='radio' name='pol' value="z">z
                <input type='radio' name='pol' value="m">m
              </td>
            </tr>
            <tr>
              <td colspan='2'>
                <button>pretraziSportistu</button>
              </td>
            </tr>

          </table>

        </div>
        <div>
          <div>
            Broj elemenata po stranici: <select>
              <option selected disabled>broj</option>
              <option value="10">10</option>
              <option value="20">20</option>
              <option value="50">50</option>
              <option value="100">100</option>
            </select>
          </div>
          <div>
            <table>
              <tr>
                <th>ime</th>
                <th>prezime</th>
                <th>sport</th>
                <th>disciplina</th>
                <th>nacionalnost</th>
              </tr>
              <?php for ($i = 1; $i <= 10; $i++) : ?>
                <tr>
                  <td>{{r.ime}}</td>
                  <td>{{r.prezime}}</td>
                  <td>{{r.sport}}</td>
                  <td>{{r.disciplina}}</td>
                  <td>{{r.nacionalnost}}</td>
                <?php endfor ?>
                </tr>
            </table>
          </div>





          <br>
          <div class="row">

          </div>

          <br><br><br><br><br><br><br><br><br>
          <div class="jumbotron text-center" style="margin-bottom:0">
            <p></p>
          </div>




          <!DOCTYPE html>
          <html>

          <head>
            <meta name="viewport" content="width=device-width, initial-scale=1">
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

              /* Extra styles for the cancel button */
              /* .cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
} */



              .container {
                padding: 4px;
              }

              /* span.psw {
  float: right;
  padding-top: 16px;
} */

              /* The Modal (background) */


              /* Modal Content/Box */


              /* The Close Button (x) */




              /* Add Zoom Animation */




              /* Change styles for span and cancel button on extra small screens */
            </style>
          </head>

          <body>



            <script>
              // Get the modal
            </script>

          </body>

          </html>

          <!DOCTYPE html>
          <html>

          <head>
            <style>
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
          </head>

          </html>