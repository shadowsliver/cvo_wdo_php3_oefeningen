/**
 * Created by guy on 11/02/16.
 */
function checkTitle (event) {
    title = document.querySelector("input[name='title']");
    var warning = document.querySelector("form #title-warning");

    if(title.value === "") {
        event.preventDefault();
        warning.innerHTML="* You must write a title for the entry!";
    }
}

function init(){
    console.log('Your browser understands DOMContentLoaded');
    var editorForm = document.querySelector("form#editor ");
    editorForm.addEventListener("submit", checkTitle, false);


}
document.addEventListener("DOMContentLoaded", init, false);