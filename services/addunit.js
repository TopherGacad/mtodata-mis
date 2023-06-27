var a = document.getElementById('unit-bodyno');
var b = document.getElementById('unit-franno');
var c = document.getElementById('unit-motorno');
var e = document.getElementById('unit-area');

var a_error = document.getElementById('error_1');
var b_error = document.getElementById('error_2');
var c_error = document.getElementById('error_3');
var e_error = document.getElementById('error_4');

var d = document.getElementById('error-con');

const toastContainer = document.querySelector('.toast-container');
const errorToast = document.querySelector('.errortoast-container')

function validate_isNum() {

    var isValidA = !isNaN(a.value);
    var isValidB = !isNaN(b.value);
    var isValidC = !isNaN(c.value);
    var isValidE = !isNaN(e.value);


    if (!isValidA) {
        a.style.border = '2px solid red';
        a_error.innerHTML = 'Invalid Input';
        a_error.style.fontSize = '8pt';
    } else {
        a.style.border = '';
        a_error.innerHTML = '*';
        a_error.style.fontSize = '14px';
    }

    if (!isValidB) {
        b.style.border = '2px solid red';
        b_error.innerHTML = 'Invalid Input';
        b_error.style.fontSize = '8pt';
    } else {
        b.style.border = '';
        b_error.innerHTML = '*';
        b_error.style.fontSize = '14px';
    }

    if (!isValidC) {
        c.style.border = '2px solid red';
        c_error.innerHTML = 'Invalid Input';
        c_error.style.fontSize = '8pt';
    } else {
        c.style.border = '';
        c_error.innerHTML = '*';
        c_error.style.fontSize = '14px';
    }

    if (!isValidE) {
        e.style.border = '2px solid red';
        e_error.innerHTML = 'Invalid Input';
        e_error.style.fontSize = '8pt';
    } else {
        e.style.border = '';
        e_error.innerHTML = '*';
        e_error.style.fontSize = '14px';
    }


    return isValidA && isValidB && isValidC && isValidE;
}

function validate_form() {

    const is_Valid = validate_isNum();

    if (is_Valid) {
        errorToast.style.visibility = 'hidden';
        return true;
    } else {
        errorToast.style.visibility = 'visible';
        d.innerHTML = `<strong>Error</strong> Input fields contains value that did not match the expected value`;
        setTimeout(function () {
            errorToast.style.visibility = 'hidden';
        }, 5000);
        return false;
    }
}

function updateUnitFranvalid() {
    var issue_Date = document.getElementById('unit-franissue');
    var valid_Date = document.getElementById('unit-franvalid');

    var issueDate = new Date(issue_Date.value);
    var validDate = new Date(issueDate.getFullYear() + 5, issueDate.getMonth(), issueDate.getDate());
    valid_Date.value = validDate.toISOString().slice(0, 10);
}

document.addEventListener('DOMContentLoaded', function () {
    var issue_Date = document.getElementById('unit-franissue');
    var valid_Date = document.getElementById('unit-franvalid');

    issue_Date.addEventListener('change', updateUnitFranvalid);
    updateUnitFranvalid();

});


document.addEventListener('DOMContentLoaded', () => {
    const urlParams = new URLSearchParams(window.location.search);
    const suc = urlParams.get('success');
    const toastContainers = document.getElementById('toast-success');

    if (suc === '0') {
        toastContainers.style.visibility = 'visible';
        document.getElementById('success-con').innerHTML = `<strong>Successful!</strong>Data inserted successfully.`;
        setTimeout(() => {
            toastContainers.style.visibility = 'hidden';
        }, 3000);
    }

});