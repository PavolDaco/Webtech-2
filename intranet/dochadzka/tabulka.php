<?php
require __DIR__ . '/config.php';

class Zamestnanec{
    private $id;
    private $meno;
    private $priezvisko;

    public function setId($id){
       $this->id = $id;
    }
    public function setMeno($meno){
        $this->meno = $meno;
    }
    public function setPriezvisko($priezvisko){
        $this->priezvisko = $priezvisko;
    }

    public function getId(){
        return $this->id;
    }
    public function getMeno(){
        return $this->meno;
    }
    public function getPriezvisko(){
        return $this->priezvisko;
    }
}
class Zaznam{
    private $id;
    private $zamestnanec_id;
    private $nepritomnost_id;
    private $datum;

    public function setId($id){
        $this->id = $id;
    }
    public function setZamestnanec_id($zamestnanec_id){
        $this->zamestnanec_id = $zamestnanec_id;
    }
    public function setNepritomnost_id($nepritomnost_id){
        $this->nepritomnost_id = $nepritomnost_id;
    }
    public function setDatum($datum){
        $this->datum = $datum;
    }

    public function getId(){
        return $this->id;
    }
    public function getZamestnanec_id(){
        return $this->zamestnanec_id;
    }
    public function getNepritomnost_id(){
        return $this->nepritomnost_id;
    }
    public function getDatum(){
        return $this->datum;
    }
}
class Nepritomnost{
    private $id;
    private $typ;
    private $nazov;
    private $farba;

    public function setId($id){
        $this->id = $id;
    }
    public function setTyp($typ){
        $this->typ = $typ;
    }
    public function setNazov($nazov){
        $this->nazov = $nazov;
    }
    public function setFarba($farba){
        $this->farba = $farba;
    }

    public function getId(){
        return $this->id;
    }
    public function getTyp(){
        return $this->typ;
    }
    public function getNazov(){
        return $this->nazov;
    }
    public function getFarba(){
        return $this->farba;
    }
}
class Firma{
    public $zamestnanci;
    public $zaznamy = array();
    public $nepritomnost = array();
    public $zamestnanci_id = array();
    public $zaznamy_id = array();
    public $nepritomnost_id = array();
}

$firma = new Firma();
if (!empty($_POST)) {
    $mesiac = $_POST['mesiac'];
    $rok = $_POST['rok'];
} else {
    $mesiac = 3;
    $rok = 2017;
}
$number = cal_days_in_month(CAL_GREGORIAN, $mesiac, $rok);
$mons = array(1 => "Január", 2 => "Február", 3 => "Marec", 4 => "Apríl", 5 => "Máj", 6 => "Jún",
    7 => "Júl", 8 => "August", 9 => "September", 10 => "Október", 11 => "November", 12 => "December");
$od = 2017;
$do = 2025;
$dbh = connect_to_db();

function nacitajDb(){
    global $firma, $dbh;

    for($j = 0; $j < 3; $j++){
        switch ($j) {
            case 0:
                $request = $dbh->prepare(" SELECT * FROM zamestnanci ORDER BY surname ASC");
                $bunky =  $request->execute() ? $request->fetchAll() : false;
                if ($bunky == false)
                    echo "zamestnanci: ziadne data na citanie";
                else {
                    for ($i = 0; $i < sizeof($bunky); $i++) {
                        $zamestnanec = new Zamestnanec();
                        $zamestnanec->setId($bunky[$i]->id);
                        $zamestnanec->setMeno($bunky[$i]->name);
                        $zamestnanec->setPriezvisko($bunky[$i]->surname);
                        $firma->zamestnanci[$bunky[$i]->id] = $zamestnanec;
                        array_push($firma->zamestnanci_id, $bunky[$i]->id);
                    }
                }
                break;
            case 1:
                $request = $dbh->prepare(" SELECT * FROM zaznam");
                $bunky =  $request->execute() ? $request->fetchAll() : false;
                if ($bunky == false)
                    echo "zaznam: ziadne data na citanie";
                else {
                    for ($i = 0; $i < sizeof($bunky); $i++) {
                        $zaznam = new Zaznam();
                        $zaznam->setId($bunky[$i]->id);
                        $zaznam->setDatum($bunky[$i]->datum);
                        $zaznam->setNepritomnost_id($bunky[$i]->nepritomnost_id);
                        $zaznam->setZamestnanec_id($bunky[$i]->zamestnanec_id);
                        $firma->zaznamy[$bunky[$i]->id] = $zaznam;
                        array_push($firma->zaznamy_id, $bunky[$i]->id);
                    }
                }
                break;
            case 2:
                $request = $dbh->prepare(" SELECT * FROM nepritomnost");
                $bunky =  $request->execute() ? $request->fetchAll() : false;
                if ($bunky == false)
                    echo "nepritomnost: ziadne data na citanie";
                else {
                    for ($i = 0; $i < sizeof($bunky); $i++) {
                        $nepritomnost = new Nepritomnost();
                        $nepritomnost->setId($bunky[$i]->id);
                        $nepritomnost->setFarba($bunky[$i]->farba);
                        $nepritomnost->setNazov($bunky[$i]->nazov);
                        $nepritomnost->setTyp($bunky[$i]->typ);
                        $firma->nepritomnost[$bunky[$i]->id] = $nepritomnost;
                        array_push($firma->nepritomnost_id, $bunky[$i]->id);
                    }
                }
                break;
        }
    }
}
function spravStlpce(){
    global $mesiac, $rok, $number;


    for ($i = 1; $i <= $number; $i++) {
        $date = $rok . "-" . $mesiac . "-" . $i;
        $day = date('l', strtotime($date));
        if (isWeekend($date)) {
            echo "<th style='text-align:center; color: white; border-radius: 5px; background-color: black'>". substr($day, 0, 2) .'<br>' . $i . '</th>';
        } else {
            echo "<th style='text-align:center'>". substr($day, 0, 2) .'<br>'.$i.'</th>';
        }
    }
}
function isWeekend($date) {
    return (date('N', strtotime($date)) >= 6);
}
function spravRiadky(){
    global $firma, $mesiac, $rok, $number;
    $status = false;
    for ($i = 0; $i < sizeof($firma->zamestnanci_id); $i++){
        $ID = $firma->zamestnanci_id[$i];
        echo "<tr class='$i' id='$ID'>";
        /*echo "<th ><a onclick='modal(), modalTable($ID)' class='opener'>" . $firma->zamestnanci[$ID]->getMeno() . " " . $firma->zamestnanci[$ID]->getPriezvisko() . "</a></th>";*/
        echo "<th ><a onclick='modalTable($ID)' data-toggle='modal' data-target='#myModal'>" . $firma->zamestnanci[$ID]->getMeno() . " " . $firma->zamestnanci[$ID]->getPriezvisko() . "</a></th>";

        for ($k = 1; $k <= $number; $k++){
            for ($j = 0; $j < sizeof($firma->zaznamy_id); $j++) {
                $ID2 = $firma->zaznamy_id[$j];
                $data = explode('-', $firma->zaznamy[$ID2]->getDatum());
                if($firma->zaznamy[$ID2]->getZamestnanec_id() == $ID && $data[2] == $k && $data[1] == $mesiac && $data[0] == $rok) {
                    $ID3 = $firma->zaznamy[$ID2]->getNepritomnost_id();
                    $farba = $firma->nepritomnost[$ID3]->getFarba();
                    $typ = $firma->nepritomnost[$ID3]->getTyp();
                    $status = true;
                }
            }
            if($status == true){
                echo "<td class='$i' style='text-align: center; color:white; background-color: $farba; border-radius: 5px;'>$typ</td>";
                $status = false;
            }
            else
                echo "<td class='$i'></td>";
        }
    }
    echo "</tr>";
}
function selectMesiac(){
    global $mesiac, $mons;
    $i = 0;
    foreach ($mons as $i => $i_value) {
        if($i == $mesiac) {
            echo "<option value= $i  selected> $i_value </option>";
            $i++;
        }
        else
            echo "<option value= $i> $i_value </option>";
    }
}
function selectReason(){
    global $firma;
    for ($i = 0; $i < sizeof($firma->nepritomnost_id); $i++) {
        $ID = $firma->nepritomnost_id[$i];
        $typ = $firma->nepritomnost[$ID]->getTyp();
        echo "<option id='$ID' value= $typ> $typ </option>";
    }
}

function selectReasonPD(){
        echo "<option id='6' value='PD' selected> PD </option>";
}

function selectRok(){
    global $od, $do, $rok;
    for ($i = $od; $i < $do; $i++) {
        if ($i == $rok) {
            echo "<option value= $i selected> $i </option>";
        }
        else
            echo "<option value= $i > $i </option>";
    }
}
if(isset($_POST['column']) && isset($_POST['id']) && isset($_POST['val'])){
    $column = strval($_POST['column']);
    $time = strtotime($column);
    $newformat = date('Y-m-d', $time);
    $id = intval($_POST['id']);
    $val = intval($_POST['val']);
    $sql = "INSERT INTO zaznam (zamestnanec_id, nepritomnost_id, datum) VALUES ( $id , $val, '".$newformat."' )";

    return $dbh->exec($sql);
}
?>

