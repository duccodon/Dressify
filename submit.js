function validateForm(event) {
    event.preventDefault();

    let itemName = document.getElementById('item-name').value;
    let price = document.getElementById('price').value;
    let category = document.getElementById('category').value;
    let description = document.getElementById('description').value;
    let modelCount = document.getElementById('model-count').value;
    let imageUpload = document.getElementById('image-upload').files[0];
    let error = document.getElementById('error');
    let errorMessage = '';

    let popup = document.getElementById("popup")
    let field = document.getElementById("field")
    let formm = document.getElementById("form")
    let form = document.getElementById("formid")


    if (itemName === ''||itemName == null) {
      errorMessage += '*Item Name is required.<br>';
    }
    if (price === '' || isNaN(price) || price <= 0) {
      errorMessage += '*Valid Price is required.<br>';
    }
    if (category === ''||category == null) {
      errorMessage += '*Category is required.<br>';
    }
    if (description === ''||description == null) {
      errorMessage += '*Description is required.<br>';
    }
    if (modelCount === '' || isNaN(modelCount) || modelCount <= 0) {
      errorMessage += '*Valid Stock count is required.<br>';
    }
    if (!imageUpload) {
        errorMessage += '*Image is required.<br>';
      } else {
        let allowedExtensions = /(\.jpg|\.jpeg|\.png)$/i;
        if (!allowedExtensions.exec(imageUpload.name)) {
          errorMessage += 'Invalid file type. Only JPG, JPEG, and PNG are allowed.<br>';
        }
        if (imageUpload.size > 5 * 1024 * 1024) { // 5MB
          errorMessage += 'File size must be less than 5MB.<br>';
        }
      }
    
    if (errorMessage !== '') {
      error.innerHTML = errorMessage;
      field.classList.remove("hidden");
      return false;
    } else {
        popup.classList.remove("hidden");
        popup.classList.add("upload-column");
        formm.classList.add("hidden");
        form.submit();
       
    }

}

document.getElementById('image-upload').addEventListener('change', function(event) {
  const files = event.target.files;
  const previewContainer = document.querySelector('.image-preview');
  const maxImages = 3;

  // Clear previous images
  previewContainer.innerHTML = '';

  // Loop through selected files and display them
  for (let i = 0; i < files.length && i < maxImages; i++) {
      const file = files[i];
      const reader = new FileReader();

      reader.onload = function(e) {
          const img = document.createElement('img');
          img.src = e.target.result;
          img.alt = `Image ${i + 1}`;
          previewContainer.appendChild(img);
      };

      reader.readAsDataURL(file);
  }
});
