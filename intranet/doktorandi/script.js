function pridajDokument() {
    var documentName = document.getElementById("documentName").value;
    if (documentName == "" || documentName == null)
        alert("nesprávne vyplnené")
    else {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function () {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                // tento kód se provede v okamžiku navrácení hodnoty ze serveru
                location.reload();
            }
        }
        xmlhttp.open("GET", "doktorandi/pridajDokument.php?dokument=" + documentName, true);
        xmlhttp.send();
    }
}
function pridajPrilohu(id) {
    var URL = document.getElementById("URLPrilohy").value;
    var prilohaMeno = document.getElementById("nazovPrilohy").value;
    if (prilohaMeno == "" || prilohaMeno == null || URL == "" || URL == null)
        alert("nesprávne vyplnené")
    else {
        var dokumentMeno = document.getElementById(id).innerHTML;
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function () {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                // tento kód se provede v okamžiku navrácení hodnoty ze serveru
                location.reload();
            }
        }
        xmlhttp.open("GET", "doktorandi/pridajPrilohu.php?dokument=" + dokumentMeno + "&priloha=" + prilohaMeno + "&href=" + URL, true);
        xmlhttp.send();
    }
}

function nacitajTabulku() {
    var tbody = document.getElementById("tbody");
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            // tento kód se provede v okamžiku navrácení hodnoty ze serveru
            var result = xmlhttp.responseText.split(";");
            var predosly;
            for (var i = 0; i < result.length - 1; i = i + 3) {
                if (i == 3)
                    predosly = document.getElementsByClassName("" + (i - 3));
                if (i > 2) {
                    if (result[i] == result[i - 3]) {
                        var riadok = document.createElement("BR");
                        predosly[0].appendChild(riadok);
                        var colContent = document.createElement("a");
                        //var index = parseInt(predosly[0].getAttribute("class")) + 1;
                        //colContent.setAttribute("class", "" + index);
                        colContent.innerHTML = result[i + 1];
                        colContent.setAttribute("href", result[i+2]);
                        colContent.setAttribute("download", result[i+1]);
                        predosly[0].appendChild(colContent);
                    }
                    else {
                        predosly = document.getElementsByClassName("" + i);
                        var newRow = document.createElement("TR");
                        var firstCol = document.createElement("TD");
                        var secondCol = document.createElement("TD");
                        var firstColContent = document.createElement("a");
                        var secondColContent = document.createElement("a");
                        firstColContent.setAttribute("data-toggle", "modal");
                        firstColContent.setAttribute("data-target", "#myModal");
                        firstColContent.setAttribute("onclick", "modalDokument(this)");
                        firstColContent.setAttribute("id", "" + i);
                        firstColContent.setAttribute("class", "disabled");
                        secondColContent.setAttribute("href", result[i+2]);
                        secondColContent.setAttribute("download", result[i+1]);
                        secondCol.setAttribute("class", "" + i);
                        firstColContent.innerHTML = result[i];
                        secondColContent.innerHTML = result[i + 1];
                        firstCol.appendChild(firstColContent);
                        secondCol.appendChild(secondColContent);
                        newRow.appendChild(firstCol);
                        newRow.appendChild(secondCol);
                        tbody.appendChild(newRow);
                    }
                }
                else {
                    var newRow = document.createElement("TR");
                    var firstCol = document.createElement("TD");
                    var secondCol = document.createElement("TD");
                    var firstColContent = document.createElement("a");
                    var secondColContent = document.createElement("a");
                    firstColContent.setAttribute("data-toggle", "modal");
                    firstColContent.setAttribute("data-target", "#myModal");
                    firstColContent.setAttribute("onclick", "modalDokument(this)");
                    firstColContent.setAttribute("id", "" + i);
                    firstColContent.setAttribute("class", "disabled");
                    secondColContent.setAttribute("href", result[i+2]);
                    secondColContent.setAttribute("download", result[i+1]);
                    secondCol.setAttribute("class", "" + i);
                    firstColContent.innerHTML = result[i];
                    secondColContent.innerHTML = result[i + 1];
                    firstCol.appendChild(firstColContent);
                    secondCol.appendChild(secondColContent);
                    newRow.appendChild(firstCol);
                    newRow.appendChild(secondCol);
                    tbody.appendChild(newRow);
                }
            }
        }
    }
    xmlhttp.open("GET", "doktorandi/nacitajDB.php", true);
    xmlhttp.send();
}
function modalDokument(object) {
    var a = document.getElementById("dwn");
    var id = object.getAttribute("id");
    var modalTitle = document.getElementsByClassName("modal-title");
    modalTitle[0].innerHTML = "Dokument: " + object.innerHTML;
    var modalBody = document.getElementsByClassName("modal-body");
    while (modalBody[0].hasChildNodes()) {
        modalBody[0].removeChild(modalBody[0].firstChild);
    }
    var btn1 = document.createElement("BUTTON");
    var t = document.createTextNode("vymazať dokument");
    btn1.setAttribute("class", "form-control");
    btn1.setAttribute("onclick", "vymazDokument(" + id + ")");
    btn1.appendChild(t);
    modalBody[0].appendChild(btn1);

    var prilohy = document.getElementsByClassName(id);
    var table = document.createElement("TABLE");
    table.setAttribute("class", "table table-striped");
    var header = table.createTHead();
    var row = header.insertRow(0);
    var cell = row.insertCell(0);
    cell.innerHTML = "<b>Prílohy</b>";
    var tBody = document.createElement('tbody');
    var children = prilohy[0].childNodes;
    for (var i = 0; i < children.length; i = i + 2) {
        var newRow = document.createElement("TR");
        var newCol = document.createElement("TD");
        var colContent = document.createElement("a");
        colContent.setAttribute("data-toggle", "modal");
        colContent.setAttribute("data-target", "#myModal2");
        colContent.setAttribute("onclick", "modalPriloha(" + id + ",this)");
        colContent.innerHTML = children[i].innerHTML;
        newCol.appendChild(colContent);
        newRow.appendChild(newCol);
        tBody.appendChild(newRow);
    }
    table.appendChild(tBody);
    modalBody[0].appendChild(table);

    var form = document.createElement("FORM");
    form.setAttribute("id", "myForm");
    form.setAttribute("action", "doktorandi/upload.php");
    form.setAttribute("method", "post");
    form.setAttribute("enctype", "multipart/form-data");
    modalBody[0].appendChild(form);

    var radio1 = document.createElement("INPUT");
    radio1.setAttribute("type", "radio");
    radio1.setAttribute("name", "vyber");
    radio1.setAttribute("id", "radio1");
    radio1.setAttribute("onclick", "radioBtnsChange()");

    var radio2 = document.createElement("INPUT");
    radio2.setAttribute("type", "radio");
    radio2.setAttribute("name", "vyber");
    radio2.setAttribute("id", "radio2");
    radio2.setAttribute("onclick", "radioBtnsChange()");

    radio2.checked = true;
    document.getElementById("myForm").appendChild(radio1);
    document.getElementById("myForm").appendChild(radio2);

    var file = document.createElement("INPUT");
    file.setAttribute("type", "file");
    file.setAttribute("id", "fileToUpload");
    file.setAttribute("name", "fileToUpload");

    var hidden = document.createElement("INPUT");
    hidden.setAttribute("type", "hidden");
    hidden.setAttribute("id", "dokumentID");
    hidden.setAttribute("name", "dokumentID");
    hidden.setAttribute("value", document.getElementById(id).innerHTML);


    var submit = document.createElement("INPUT");
    submit.setAttribute("type", "submit");
    submit.setAttribute("value", "Upload file");
    submit.setAttribute("name", "submit");
    submit.setAttribute("id", "submit");


    document.getElementById("myForm").appendChild(hidden);
    document.getElementById("myForm").appendChild(file);
    document.getElementById("myForm").appendChild(submit);

       var input = document.createElement("INPUT");
    input.setAttribute("type", "text");
    input.setAttribute("id", "nazovPrilohy");
    input.setAttribute("class", "form-control");
    input.setAttribute("placeholder", "zadaj názov prílohy");
    input.style.visibility = "hidden";
    modalBody[0].appendChild(input);
    input.style.visibility = "hidden";

    var inputURL = document.createElement("INPUT");
    inputURL.setAttribute("type", "text");
    inputURL.setAttribute("id", "URLPrilohy");
    inputURL.setAttribute("class", "form-control");
    inputURL.setAttribute("placeholder", "zadaj URL prílohy: https://");
    modalBody[0].appendChild(inputURL);
    inputURL.style.visibility = "hidden";

    var btn2 = document.createElement("BUTTON");
    var t2 = document.createTextNode("pridať prílohu");
    btn2.setAttribute("class", "form-control");
    btn2.setAttribute("id", "btn2");
    btn2.setAttribute("onclick", "pridajPrilohu(" + id + ")");
    btn2.appendChild(t2);
    modalBody[0].appendChild(btn2);
    btn2.style.visibility = "hidden";

    var label1 = document.createElement("LABEL");
    var text1 = document.createTextNode("www");
    label1.setAttribute("for", "radio1");
    label1.appendChild(text1);
    document.getElementById("myForm").insertBefore(label1,document.getElementById("radio1"));
    var label2 = document.createElement("LABEL");
    var text2 = document.createTextNode("File");
    label2.setAttribute("for", "radio2");
    label2.appendChild(text2);
    document.getElementById("myForm").insertBefore(label2,document.getElementById("radio2"));
}
function modalPriloha(id, object) {
    var modalTitle = document.getElementsByClassName("modal-title");
    modalTitle[1].innerHTML = "Dokument: " + object.innerHTML;
    var modalBody = document.getElementsByClassName("modal-body");
    while (modalBody[1].hasChildNodes()) {
        modalBody[1].removeChild(modalBody[1].firstChild);
    }
    var btn1 = document.createElement("BUTTON");
    var t = document.createTextNode("vymazať prílohu");
    btn1.setAttribute("class", "form-control");
    btn1.setAttribute("onclick", "vymazPrilohu(" + id + ",'" + object.innerHTML + "')");
    btn1.appendChild(t);
    modalBody[1].appendChild(btn1);
}
function vymazDokument(id) {
    var documentName = document.getElementById(id).innerHTML;
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            // tento kód se provede v okamžiku navrácení hodnoty ze serveru
            location.reload();
        }
    }
    xmlhttp.open("GET", "doktorandi/vymazDokument.php?dokument=" + documentName, true);
    xmlhttp.send();
}
function vymazPrilohu(id, prilohaMeno) {
    var documentName = document.getElementById(id).innerHTML;
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            // tento kód se provede v okamžiku navrácení hodnoty ze serveru
            location.reload();
        }
    }
    xmlhttp.open("GET", "doktorandi/vymazPrilohu.php?dokument=" + documentName + "&priloha=" + prilohaMeno, true);
    xmlhttp.send();
}
function radioBtnsChange() {
    if (document.getElementById("radio1").checked == true){
        document.getElementById("nazovPrilohy").style.visibility="visible";
        document.getElementById("URLPrilohy").style.visibility="visible";
        document.getElementById("btn2").style.visibility="visible";

    }
    else {
        document.getElementById("nazovPrilohy").style.visibility="hidden";
        document.getElementById("URLPrilohy").style.visibility="hidden";
        document.getElementById("btn2").style.visibility="hidden";
    }
    if (document.getElementById("radio2").checked == true){
        document.getElementById("fileToUpload").style.visibility="visible";
        document.getElementById("submit").style.visibility="visible";
    }
    else {
        document.getElementById("fileToUpload").style.visibility="hidden";
        document.getElementById("submit").style.visibility="hidden";
    }
}
function edit() {
    document.getElementById("documentName").style.visibility = "visible";
    document.getElementById("pridatDokumentBtn").style.visibility = "visible";
    var tbody = document.getElementById("tbody");
    var child = tbody.childNodes;
    for (var i = 1; i < child.length; i++){
        var a = child[i].firstChild.firstChild;
        a.removeAttribute("class");
    }
}

