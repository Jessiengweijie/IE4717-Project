function openPopup(orderId) {
    var popup = document.getElementById('popup' + orderId);
    popup.style.display = "block";
}

function closePopup(orderId) {
    var popup = document.getElementById('popup' + orderId);
    popup.style.display = "none";
}

