<?php
 session_start();
if (isset($_SESSION['login'])){
     include 'includes/intro_bocne_menu.php';
     include 'includes/intro_horne_menu.php';
}   
 mysqli_set_charset($conn, "utf8");

if (isset($_SESSION['isEditor']) OR isset($_SESSION['isAdmin']) OR isset($_SESSION['isUser'])) {
 echo'
    <title>Pedagogika</title>
    <link rel="stylesheet" href="includes/style.css">
    <script src="pedagogika/script.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
    <script src="https://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style>
        button, input{
            margin: 10px;
        }
        table {
            border: 1px solid lightgray;
        }
        .disabled {
            pointer-events: none;
            cursor: default;
            color: black;
        }
        a {
            cursor: hand;
        }
    </style>
</head>
<body onload="nacitajTabulku()">
<h1 style="text-align: center">Pedagogika</h1><br>
<div class="container">
    <table id="tableID1" class="table table-striped">
        <thead>
        <tr>
            <th>Dokument</th>
            <th>Príloha</th>
        </tr>
        </thead>
        <tbody id="tbody">
        </tbody>
    </table>';
}
if (isset($_SESSION['isEditor']) OR isset($_SESSION['isAdmin']) OR isset($_SESSION['isUser'])) {
     if (isset($_SESSION['isEditor']) OR isset($_SESSION['isAdmin'])) {
        echo '<button class="btn btn-default" onclick="edit()">editovací mód</button>';
     }
  echo'
    <input style="visibility: hidden" class="btn btn-default" type="text" id="documentName" placeholder="zadaj názov dokumentu">
    <button style="visibility: hidden" id="pridatDokumentBtn" class="btn btn-default" onclick="pridajDokument()">pridať dokument</button>

  
    <div class="modal fade" id="myModal" role="dialog">
        <div style="width: 90%" class="modal-dialog">

            
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Modal Header</h4>
                </div>
                <div class="modal-body">
                    <p>Možnosti:</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>

        </div>
    </div>
    
    <div class="modal fade" id="myModal2" role="dialog">
        <div style="width: 90%" class="modal-dialog">

          
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Modal Header</h4>
                </div>
                <div class="modal-body">
                    <p>Možnosti:</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>

        </div>
    </div>
</div>';
}

 else echo "<div id='okno_profil' class='okno_profil'>
                <h3>Nie ste prihlásený, alebo nemáte práva na prezeranie tejto stránky</h3>
                 <a href='../login.php'>Login</a><br>
            </div>";
