let popup = document.getElementById("popup")
var form = document.getElementById("formid")
let formm = document.getElementById("form")
function openPopup(){
    popup.classList.remove("hidden");
    popup.classList.add("upload-column");
    formm.classList.add("hidden");
}

function submitForm(event){
    event.preventDefault();
}

form.addEventListener('submit', submitForm)
