<?php
session_start();
include 'includes/dbh.php';
if (isset($_SESSION['login'])) {
    include 'includes/intro_bocne_menu.php';
    include 'includes/intro_horne_menu.php';
}
require 'dochadzka/tabulka.php';
mysqli_set_charset($conn, "utf8");
?>

<title>Dochádzka</title>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
      integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<script src="https://code.jquery.com/jquery-1.10.2.js"></script>
<script src="https://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.4/jspdf.debug.js"></script>

<script src="dochadzka/script.js"></script>
<script type="text/javascript" src="dochadzka/jspdf.debug.js"></script>
<link rel="stylesheet" href="includes/style.css">

<div class="container" style="position: absolute; top: 40px; left: 160px; width: 85%; min-width: 500px">

    <?php nacitajDb(); ?>
    <h1 style="text-align: center">Dochádzkový systém</h1><br>
    <div style="margin-bottom: 10px; width: 1050px; height: 400px; overflow: scroll">
    <table id="tableID1" class="table table-striped">
        <thead>
        <tr>
            <th>Meno</th>
            <?php spravStlpce(); ?>
        </tr>
        </thead>
        <tbody id="tbody2">
        <?php spravRiadky(); ?>
        </tbody>
    </table>
    </div>
    <div class="container">
        <form method="post" action="">
            <div class="col-xs-2">
                <div id="month" class="input-group">
                    <span class="input-group-addon form-control-sm">Mesiac</span>
                    <select id="mesiac" class="form-control form-control-sm" name="mesiac">
                        <?php selectMesiac() ?>
                    </select>
                </div>
            </div>

            <div class="col-xs-2">
                <div id="year" class="input-group">
                    <span class="input-group-addon form-control-sm">Rok</span>
                    <select id="rok" class="form-control form-control-sm" name="rok">
                        <?php selectRok() ?>
                    </select>
                </div>
            </div>
            <div class="container">
                <div class="col-xs-2">
                    <?php
                    if (isset($_SESSION['isHr']) OR isset($_SESSION['isAdmin'])) {
                        echo "<div id='year' class='input-group'>
                        <span class='input-group-addon form-control-sm'>Dôvod</span>
                        <select id='reason' onchange='zmen()' class='form-control form-control-sm' name='reason' disabled>";
                        selectReason();
                        echo "</select>
                    </div>";
                    } else if (isset($_SESSION['isUser'])) {
                        echo "<div id='year' class='input-group'>
                        <span class='input-group-addon form-control-sm'>Dôvod</span>
                        <select id='reason' onchange='zmen()' class='form-control form-control-sm' name='reason' disabled>";
                        selectReasonPD();
                        echo "</select>
                    </div>";
                    }
                    ?>
                </div>
                <label id="label1" style="visibility: hidden" class="btn btn-default">
                    <input  onchange="zmen4()" type="radio" name="vyber" value="mazať" checked="checked" id="radioBtn1">
                    pridávať/mazať
                </label>
                <label id="label2" style="visibility: hidden" class="btn btn-default">
                    <input  onchange="zmen4()" type="radio" name="vyber" value="editovať" id="radioBtn2">
                    pridávať/editovať
                </label>
                <button value="false" style="visibility: hidden" type="button" id="save" class="btn btn-primary"
                        onclick="skry()">Uložiť
                </button>
                <button style="visibility: hidden" type="button" id="cancel" class="btn btn-primary" onclick="rl()">
                    Zrušiť
                </button>
                <button style="margin-top: 30px; border-color: deepskyblue" class="form-control" type="submit"
                        id="show">
                    zmeniť dátum
                </button>
                <?php
                if (isset($_SESSION['isHr']) OR isset($_SESSION['isAdmin']) OR isset($_SESSION['isUser'])) {
                    echo "<button style='margin-top: 5px; border-color: deepskyblue' class='form-control' type='button' id='edit' onclick='ukaz()'>editovací mód
                </button>";
                }
                ?>
                <?php
                if (isset($_SESSION['isHr']) OR isset($_SESSION['isAdmin'])) {
                    echo "<button onclick='javascript:demoFromHTML()'>PDF</button>";
                }
                ?>
        </form>

        <?php
        if (isset($_SESSION['isUser']) AND !isset($_SESSION['isAdmin']) AND !isset($_SESSION['isHr'])) {
            echo '<script type="text/javascript">',
            'userTable();',
            '</script>';
        }
        ?>

    </div>
    <!-- Modal -->
    <div style="width: 100%" class="modal fade" id="myModal" role="dialog">
        <div style="width: 100%" class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Dochádzkový systém</h4>
                </div>
                <div class="modal-body">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th>Meno</th>
                            <?php spravStlpce(); ?>
                        </tr>
                        </thead>
                        <tbody id="tbody">
                        </tbody>
                    </table>
                    <div class="col-xs-2">
                        <?php
                        if (isset($_SESSION['isHr']) OR isset($_SESSION['isAdmin'])) {
                            echo "<div id='year' class='input-group'>
                            <span class='input-group-addon form-control-sm'>Dôvod</span>
                            <select id='reason2' onchange='zmen2()' class='form-control form-control-sm' name='reason'
                                    disabled>";
                            selectReason();
                            echo "</select>
                        </div>";
                        } else if (isset($_SESSION['isUser'])) {
                            echo "<div id='year' class='input-group'>
                            <span class='input-group-addon form-control-sm'>Dôvod</span>
                            <select id='reason2' onchange='zmen2()' class='form-control form-control-sm' name='reason'
                                    disabled>";
                            selectReasonPD();
                            echo "</select>
                        </div>";
                        }
                        ?>
                    </div>
                    <label id="label3" style="visibility: hidden" class="btn btn-default">
                        <input  onchange="zmen3()" type="radio" name="vyber" value="mazať" checked="checked"
                               id="radioBtn4"> pridávať/mazať
                    </label>
                    <label id="label4" style="visibility: hidden" class="btn btn-default">
                        <input onchange="zmen3()" type="radio" name="vyber" value="editovať" id="radioBtn3">
                        pridávať/editovať
                    </label>
                    <button style="visibility: hidden" type="button" id="save2" class="btn btn-primary"
                            onclick="skry()">
                        Uložiť
                    </button>
                    <button style="visibility: hidden" type="button" id="cancel2" class="btn btn-primary"
                            onclick="rl()">
                        Zrušiť
                    </button>

                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>