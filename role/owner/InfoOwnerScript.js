document.getElementById('avatar-upload').addEventListener('change', function(e) {
    if (e.target.files && e.target.files[0]) {
        var reader = new FileReader();
        reader.onload = function(e) {
            document.querySelector('.avatar-background').src = e.target.result;
        }
        reader.readAsDataURL(e.target.files[0]);
    }
});
