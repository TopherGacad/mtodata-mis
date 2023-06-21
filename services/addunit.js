function validate_isNum() {
    var a = document.getElementById('unit-bodyno');
    var b = document.getElementById('unit-franno');
    var c = document.getElementById('unit-motorno');

    var isValidA = !isNaN(a.value);
    var isValidB = !isNaN(b.value);
    var isValidC = !isNaN(c.value);

    const toastContainer = document.querySelector('.toast-container');

    if (!isValidA) {
        a.style.border = '2px solid red';
        toastContainer.style.visibility = 'visible';
        setTimeout(function() {
            toastContainer.style.visibility = 'hidden';
        }, 5000);
    } else {
        a.style.border = '';
    }

    if (!isValidB) {
        b.style.border = '2px solid red';
        toastContainer.style.visibility = 'visible';
        setTimeout(function() {
            toastContainer.style.visibility = 'hidden';
        }, 5000);
    } else {
        b.style.border = '';

    }

    if (!isValidC) {
        c.style.border = '2px solid red';
        toastContainer.style.visibility = 'visible';
        setTimeout(function() {
            toastContainer.style.visibility = 'hidden';
        }, 5000);
    } else {
        c.style.border = '';
    }

    if (isValidA && isValidB && isValidC) {
        toastContainer.style.visibility = 'hidden';
        return true;
    } else {
        toastContainer.style.visibility = 'visible';
        setTimeout(function() {
            toastContainer.style.visibility = 'hidden';
        }, 5000);
        return false;
    }
}
