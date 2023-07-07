const button = document.getElementById('save');

function save_generate() {

    const element = document.getElementById('container');
    var options = {
        margin: [0.5, 1, 1, 1],
        image: { type: 'jpeg', quality: 0.98 },
        html2canvas: { scale: 2 },
        jsPDF: { unit: 'in', format: 'letter', orientation: 'portrait' }
    }
    html2pdf().set(options).from(element).toPdf().get('pdf').then(function (pdf) {
        const totalPages = pdf.internal.getNumberOfPages();

        for (let i = 1; i <= totalPages; i++) {
            pdf.setFont('Arial', 'italic');
            pdf.setFontSize(10);
            pdf.setTextColor(128);
            pdf.setPage(i);
            pdf.text(i + ' of ' + totalPages, pdf.internal.pageSize.getWidth() - 0.75, pdf.internal.pageSize.getHeight() - 0.5);
        }

        pdf.save();
    })


}


button.addEventListener('click', save_generate);

