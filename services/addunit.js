var a = document.getElementById('unit-bodyno');
var b = document.getElementById('unit-franno');
var c = document.getElementById('unit-motorno');

var a_error = document.getElementById('error_1');
var b_error = document.getElementById('error_2');
var c_error = document.getElementById('error_3');

var d = document.getElementById('error-con');

const toastContainer = document.querySelector('.toast-container');

function validate_isNum() {

    var isValidA = !isNaN(a.value);
    var isValidB = !isNaN(b.value);
    var isValidC = !isNaN(c.value);

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

    return isValidA && isValidB && isValidC;

}

function validate_form() {

    const is_Valid = validate_isNum();

    if (is_Valid) {
        toastContainer.style.visibility = 'hidden';
        return true;
    } else {
        toastContainer.style.visibility = 'visible';
        d.innerHTML = 'Error: Input fields contains value that did not match the expected value';
        setTimeout(function () {
            toastContainer.style.visibility = 'hidden';
        }, 5000);
        return false;
    }
}
