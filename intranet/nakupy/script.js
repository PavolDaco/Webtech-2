function nacitajTabulku() {
    var tbody = document.getElementById("tbody");
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            // tento kód se provede v okamžiku navrácení hodnoty ze serveru
            var result = xmlhttp.responseText.split("~");
            for (var i = 0; i < result.length - 1; i = i + 2) {
                var btn = document.createElement('BUTTON');
                btn.setAttribute("class", "btn btn-default")
                var t = document.createTextNode("aktualizovať");
                btn.appendChild(t);
                btn.style.width = "100%";
                btn.setAttribute("onclick","update("+result[i]+")");
                btn.setAttribute("disabled","disabled");

                var btn2 = document.createElement('BUTTON');
                btn2.setAttribute("class", "btn btn-default")
                var t2 = document.createTextNode("vymazať");
                btn2.appendChild(t2);
                btn2.style.width = "100%";
                btn2.setAttribute("onclick","deleteText("+result[i]+")");
                btn2.setAttribute("disabled","disabled");

                var newRow = document.createElement("TR");
                var firstCel = document.createElement("TD");
                firstCel.style.width = "10px";
                var secondCel = document.createElement("TD");
                var thirdCel = document.createElement("TD");
                thirdCel.style.width = "20px";

                var secondCelContent = document.createElement('TEXTAREA');
                secondCelContent.setAttribute("class", "form-control");
                secondCelContent.setAttribute("onkeyup", "textAreaAdjust(this)");
                secondCelContent.setAttribute("id", "" + result[i]);
                secondCelContent.style.width = "100%"

                firstCel.innerHTML = ""+(Math.floor((i)/2)+1);
                secondCelContent.innerHTML = result[i + 1];
                secondCel.appendChild(secondCelContent);
                thirdCel.appendChild(btn);
                thirdCel.appendChild(btn2);
                newRow.appendChild(firstCel);
                newRow.appendChild(secondCel);
                newRow.appendChild(thirdCel);
                tbody.appendChild(newRow);
            }
        }
    }
    xmlhttp.open("GET", "nakupy/nacitajDB.php", true);
    xmlhttp.send();
}
function textAreaAdjust(o) {
    o.style.height = "1px";
    o.style.height = (25 + o.scrollHeight) + "px";
}
function update(id) {
    var text = $('#'+id).val();
    $.post('nakupy/update.php', { id: id, text: text }, function(result) {
        location.reload();
    });
}
function deleteText(id) {
    $.post('nakupy/delete.php', { id: id }, function(result) {
        location.reload();
    });
}
function pridajText() {
    var text = $('#novyText').val();
    $.post('nakupy/pridajText.php', { text: text }, function(result) {
        location.reload();
    });
}
function edit() {
    document.getElementById("novyText").style.visibility = "visible";
    document.getElementById("novyTextBtn").style.visibility = "visible";
    document.getElementById("novyTextLabel").style.visibility = "visible";

    var tbody = document.getElementById("tbody");
    var child = tbody.childNodes;
    for (var i = 1; i < child.length; i++){
        var child2 = child[i].lastChild.childNodes;
        for (var j = 0; j < child2.length; j++) {
            child2[j].removeAttribute("disabled");
        }
    }
}