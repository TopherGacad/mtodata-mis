//EXPORT FUNCTION 
function exportToExcel() {
    const table = document.getElementById("mem-table");
    const rows = table.getElementsByTagName("tr");
    let data = [];

    // Get headers from the first row
    const headers = [];
    const headerCells = rows[0].getElementsByTagName("th");
    for (let j = 0; j < headerCells.length - 1; j++) {
        headers.push(headerCells[j].innerText);
    }
    data.push(headers);

    // Iterate through each row (excluding the first row)
    for (let i = 1; i < rows.length; i++) {
        const cells = rows[i].getElementsByTagName("td");
        let rowData = [];

        // Iterate through each cell
        for (let j = 0; j < cells.length; j++) {
            rowData.push(cells[j].innerText);
        }

        data.push(rowData);
    }

    // Create a new Excel workbook and sheet
    let workbook = new ExcelJS.Workbook();
    let worksheet = workbook.addWorksheet("Members Information");

    // Add data to the worksheet
    for (let i = 0; i < data.length; i++) {
        worksheet.addRow(data[i]);
    }

    // Save the workbook
    workbook.xlsx.writeBuffer().then(function (buffer) {
        const blob = new Blob([buffer], { type: "application/vnd.openxmlformats-officedocument.spreadsheetml.sheet" });
        const url = URL.createObjectURL(blob);
        const a = document.createElement("a");
        a.href = url;
        a.download = "MTODA_Members.xlsx";
        a.click();
        URL.revokeObjectURL(url);
    });
}

// Attach exportToExcel function to the export button
const exportBtn = document.querySelector("#mem-export");
exportBtn.addEventListener("click", exportToExcel);