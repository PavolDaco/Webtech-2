function demoFromHTML() {
    var pdf = new jsPDF('p', 'pt', 'letter');

    pdf.cellInitialize();
    pdf.setFontSize(5);
    $.each( $('#divToPDF tr'), function (i, row){
        $.each( $(row).find("td, th"), function(j, cell){
            var txt = $(cell).text().trim() || " ";
            var width = (j==0) ? 70 : 15; //make 4th column smaller
            pdf.cell(10, 10, width, 10, txt, i);
        });
    });

    pdf.save('dochadzka.pdf');
}