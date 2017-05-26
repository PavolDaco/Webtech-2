<?php
 session_start();
if (isset($_SESSION['login'])){
     include 'includes/intro_bocne_menu.php';
     include 'includes/intro_horne_menu.php';
}   
 mysqli_set_charset($conn, "utf8");

if (isset($_SESSION['isEditor']) OR isset($_SESSION['isAdmin']) OR isset($_SESSION['isUser'])) {
 echo'
    <title>Nákupy</title>
    <script src="nakupy/script.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
    <script src="https://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style>
        table {
            border: 1px solid lightgray;
        }

    </style>
</head>
<body onload="nacitajTabulku()">

<h1 style="text-align: center">Nákupy</h1><br>
<div class="container">
    <table id="tableID1" class="table table-striped">
        <thead>
        <tr>
            <th>Č.</th>
            <th>Text</th>
            <th></th>
        </tr>
        </thead>
        <tbody id="tbody">
        </tbody>
    </table>';
  if (isset($_SESSION['isEditor']) OR isset($_SESSION['isAdmin'])) {
    echo'<button style="margin: 10px" class="btn btn-default" onclick="edit()">editovací mód</button>';
  } 
 echo'
    <div class="form-group">
        <label id="novyTextLabel" style="visibility: hidden" for="comment">Nový text:</label>
        <textarea style="visibility: hidden; width: 100%" class="form-control" id="novyText" onkeyup="textAreaAdjust(this)"></textarea>
        <button id="novyTextBtn" style="visibility: hidden; margin: 10px" class="btn btn-default" onclick="pridajText()">pridať text</button>
    </div>
</div>';

}

 else echo "<div id='okno_profil' class='okno_profil'>
                <h3>Nie ste prihlásený, alebo nemáte práva na prezeranie tejto stránky</h3>
                 <a href='../login.php'>Login</a><br>
            </div>";

