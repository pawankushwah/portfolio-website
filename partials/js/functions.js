function showAlert(message) {
    let template = document.getElementsByTagName("template")[0];
    let alertContainer = template.content.cloneNode(true);
    alertContainer.getElementsByClassName("alertMessage")[0].innerHTML = message;
    body.insertBefore(alertContainer, body.firstElementNode);
}