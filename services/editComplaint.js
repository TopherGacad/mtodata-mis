//Added Function fo Description limiting 350
function countChar(val) {
    var len = val.value.length;
    if (len >= 350) {
        val.value = val.value.substring(0, 350);
    } else {
        var remaining = 350 - len;
        if (remaining > 0) {
            $('#charNum').text('Remaining: ' + remaining);
        } else {
            $('#charNum').text('Remaining: 0');
        }
    }
}