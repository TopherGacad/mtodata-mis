document.getElementById('mem-pic').addEventListener('change', function(e) {
    var file = e.target.files[0];
    var imageType = /^image\//;

    if (!file || !imageType.test(file.type)) {
        alert('Please select an image file.');
        return;
    }

    var reader = new FileReader();

    reader.onload = function(e) {
        document.getElementById('profileImage').src = e.target.result;
    };

    reader.readAsDataURL(file);
});