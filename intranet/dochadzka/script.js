var datumy = new Array();
var nepritomnost_id = new Array();
var zamestnanec_id = new Array();
var prejdene = new Array();
var stav = new Array();
var down = false;

function ukaz()
{
    document.getElementById("save").value = false;
    document.getElementById("save").style.visibility="visible";
    document.getElementById("save2").style.visibility="visible";
    document.getElementById("cancel").style.visibility="visible";
    document.getElementById("cancel2").style.visibility="visible";
    document.getElementById("rok").setAttribute('disabled','disabled');
    document.getElementById("mesiac").setAttribute('disabled','disabled');
    document.getElementById("reason").removeAttribute('disabled');
    document.getElementById("reason2").removeAttribute('disabled');
    document.getElementById("show").setAttribute('disabled','disabled');
    document.getElementById("edit").setAttribute('disabled','disabled');
    edituj();
}
function skry()
{
    document.getElementById("save").value = true;
    document.getElementById("save").style.visibility="hidden";
    document.getElementById("save2").style.visibility="hidden";
    document.getElementById("cancel").style.visibility="hidden";
    document.getElementById("cancel2").style.visibility="hidden";
    document.getElementById("reason").setAttribute('disabled','disabled');
    document.getElementById("reason2").setAttribute('disabled','disabled');
    document.getElementById("show").removeAttribute('disabled');
    document.getElementById("rok").removeAttribute('disabled');
    document.getElementById("mesiac").removeAttribute('disabled');
    document.getElementById("edit").removeAttribute('disabled');
    uloz();
    posli2();
    datumy = [];
    nepritomnost_id = [];
    zamestnanec_id = [];
    stav = [];
}
function modal() {
    document.getElementById("myModal").setAttribute('style', 'display: block');
}
function modalClose() {
    document.getElementById("myModal").setAttribute('style', 'display: none');
}
function modalTable(id) {
    var cln = document.getElementById(id).cloneNode(true);
    var tbody = document.getElementById("tbody");
    tbody.removeChild(tbody.firstChild);
    tbody.appendChild(cln);
}
/*function userTable(id) {
    var cln = document.getElementById(id).cloneNode(true);
    var tbody = document.getElementById("tbody2");
    while (tbody.hasChildNodes()){
        tbody.removeChild(tbody.firstChild);
    }
    tbody.appendChild(cln);
    window.onbeforeunload = function() {
        return 0;
    }
}*/
function userTable() {
    var id;
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            id = xmlhttp.responseText;
            var cln = document.getElementById(id).cloneNode(true);
            cln.setAttribute("class","0");
            var list = cln.childNodes;
            for (var i = 1; i < list.length; i++)
                list[i].setAttribute("class", "0");
            var tbody = document.getElementById("tbody2");
            while (tbody.hasChildNodes()){
                tbody.removeChild(tbody.firstChild);
            }
            tbody.appendChild(cln);
        }
    }
    xmlhttp.open("GET", "dochadzka/tuSaPosielaID.php", true);
    xmlhttp.send();
    window.onbeforeunload = function() {
        return 0;
    }
}

function edituj() {
    var i = document.getElementById('tbody2').childElementCount;
    for(var j = 0; j < i; j++) {
        var riadok = document.getElementsByClassName(j);
        var id = riadok[0].getAttribute('id');
        for(var k = 1; k < riadok.length; k++){
            riadok[k].setAttribute('onclick',"posliVymaz(this, "+id+")");
            riadok[k].setAttribute('onmousedown',"mD(this)");
            riadok[k].setAttribute('onmouseup',"mU(this)");
            riadok[k].setAttribute('onmousemove',"mM(this, "+id+")");
        }
    }
}
function uloz() {
    var i = document.getElementById('tbody2').childElementCount;
    for(var j = 0; j < i; j++) {
        var riadok = document.getElementsByClassName(j);
        var id = riadok[0].getAttribute('id');
        for(var k = 1; k < riadok.length; k++){
            riadok[k].removeAttribute('onclick');
            riadok[k].removeAttribute('onmouseup');
            riadok[k].removeAttribute('onmousedown');
            riadok[k].removeAttribute('onmousemove');
        }
    }
}
function posliVymaz(objekt, ID) {
    var a = objekt.toString();
    if (a != "[object HTMLTableRowElement]") {
        var col = objekt.cellIndex;
        var r = document.getElementById('rok');
        var rok = r.options[r.selectedIndex].value;
        var m = document.getElementById('mesiac');
        var mesiac = m.options[m.selectedIndex].value;
        var sel = document.getElementById('reason');
        var val = sel.options[sel.selectedIndex].getAttribute("id");
        var datum = rok + "-" + mesiac + "-" + col;

        var a = objekt.hasAttribute("style");
        var checkB = document.getElementById("radioBtn1").checked;

        if (a == true && checkB == true) {
            objekt.innerHTML = "";
            objekt.removeAttribute('style');
            var index1 = datumy.indexOf(datum);
            var index2 = zamestnanec_id.indexOf(ID);
            if (index1 != -1 && index1 == index2) {
                datumy[index1] = datum;
                nepritomnost_id[index1] = val;
                zamestnanec_id[index1] = ID;
                stav[index1] = false;
            }
            else {
                datumy.push(datum);
                nepritomnost_id.push(val);
                zamestnanec_id.push(ID);
                stav.push(false);
            }

        }
        else {
            objekt.removeAttribute('style');
            objekt.style.color = "red";
            objekt.innerHTML = sel.options[sel.selectedIndex].value;
            var index1 = datumy.indexOf(datum);
            var index2 = zamestnanec_id.indexOf(ID);
            if (index1 != -1 && index1 == index2) {
                datumy[index1] = datum;
                nepritomnost_id[index1] = val;
                zamestnanec_id[index1] = ID;
                stav[index1] = true;
            }
            else {
                datumy.push(datum);
                nepritomnost_id.push(val);
                zamestnanec_id.push(ID);
                stav.push(true);
            }
        }
    }
}
function zmen() {
    var v = document.getElementById('reason');
    var val = v.options[v.selectedIndex].value;
    document.getElementById('reason2').value = val;
}
function zmen2() {
    var v = document.getElementById('reason2');
    var val = v.options[v.selectedIndex].value;
    document.getElementById('reason').value = val;
}
function zmen3() {
    var v = document.getElementById('radioBtn3').checked;
    if (v == true) {
        document.getElementById('radioBtn1').checked = false;
        document.getElementById('radioBtn2').checked = true;
    }
    else {
        document.getElementById('radioBtn1').checked = true;
        document.getElementById('radioBtn2').checked = false;
    }
}
function zmen4() {
    var v = document.getElementById('radioBtn1').checked;
    if (v == true) {
        document.getElementById('radioBtn3').checked = false;
        document.getElementById('radioBtn4').checked = true;
    }
    else {
        document.getElementById('radioBtn3').checked = true;
        document.getElementById('radioBtn4').checked = false;
    }
}
function posli2() {
    for(var i = 0; i < datumy.length; i++) {
        if (stav[i] == false) {
            $.post("dochadzka/vymaz.php", {
                "zamestnanec_id": zamestnanec_id[i],
                "datum": datumy[i]
            }, function (data, status) {
            });
        }
        else {
            $.post("dochadzka/vymaz.php", {
                "zamestnanec_id": zamestnanec_id[i],
                "datum": datumy[i]
            }, function (data, status) {
            });

            $.post("dochadzka/tabulka.php", {
                "column": datumy[i],
                "id": zamestnanec_id[i],
                "val": nepritomnost_id[i]
            }, function (data, status) {
            });
        }
    }
}
function mD(objekt) {
    var a = objekt.getAttribute("class");
    var i = document.getElementById('tbody2').childElementCount;
    for(var j = 0; j < i; j++) {
        if (j != a) {
            var riadok = document.getElementsByClassName(j);
            for (var k = 1; k < riadok.length; k++) {
                riadok[k].removeAttribute('onclick');
                riadok[k].removeAttribute('onmouseup');
                riadok[k].removeAttribute('onmousedown');
                riadok[k].removeAttribute('onmousemove');
            }
        }
    }
    down = true;
}
function mM(objekt, ID) {
        if (down === true && prejdene.indexOf(objekt) == -1) {
            prejdene.push(objekt);
            posliVymaz(objekt,ID);
            down = true;
        }
}
function mU(objekt) {
    prejdene = [];
    var i = document.getElementById('tbody2').childElementCount;
    for(var j = 0; j < i; j++) {
        var riadok = document.getElementsByClassName(j);
        var id = riadok[0].getAttribute('id');
        for(var k = 1; k < riadok.length; k++){
            riadok[k].setAttribute('onclick',"posliVymaz(this, "+id+")");
            riadok[k].setAttribute('onmousedown',"mD(this)");
            riadok[k].setAttribute('onmouseup',"mU(this)");
            riadok[k].setAttribute('onmousemove',"mM(this, "+id+")");
        }
    }
    down = false;
}
function rl() {
    document.getElementById("show").removeAttribute('disabled');
    document.getElementById("edit").removeAttribute('disabled');
    location.reload();
};



