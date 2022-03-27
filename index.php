<?php
require "model/korisnik.php";
require "dbBroker.php";

session_start();
if (isset($_POST['username']) && isset($_POST['password'])) {
  $uname = $_POST['username'];
  $upass = $_POST['password'];

  $korisnik = new Korisnik($uname, $upass, null);
  $odgovor = $korisnik->prijaviSe($conn);


  if ($odgovor->num_rows == 1) {
    $_SESSION['korisnik_username'] = $korisnik->username;
    header('Location: pocetna.php');
    $message = "Uspesno";
    exit();
    echo "<script>alert('$message');</script>";
  } else {
    $message = "Neuspesno";
    echo "<script>alert('$message');</script>";
  }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <title>Prijava</title>
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
        </ul>
      </div>
    </div>
  </nav>

  <div class="container">
    <div class="row">
      <div class="col-sm-4">
        <h2>Prijava</h2>

        <div class="fakeimg">
          <form method="POST">
            <table>
              <tr>
                <td>Korime:</td>
                <td>
                  <input type='text' name='username' required>
                </td>
              </tr>
              <tr>
                <td>Lozinka:</td>
                <td>
                  <input type='password' name='password' required>
                </td>
              </tr>

              <tr>
                <td colspan='2'>
                  <button type="submit" name="submit">Prijavi se</button>
                </td>
              </tr>

            </table>

          </form>
        </div>
      </div>


    </div>
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