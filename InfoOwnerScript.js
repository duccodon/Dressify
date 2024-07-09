console.log("Script loaded");
document.getElementById('avatar-upload').addEventListener('change', function(event) {
    const file = event.target.files[0];
    if (file) {
        const reader = new FileReader();
        reader.onload = function(e) {
            document.querySelector('.avatar img').src = e.target.result;
        }
        reader.readAsDataURL(file);
    }
});
