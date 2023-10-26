function inquiry(orderId) {
    // Construct the URL with parameters
    const orderUrl = `order_history.php?order_id=${orderId}`;

    // Redirect to the constructed URL
    // window.location.href = orderUrl;
}

function openPopup(orderId) { 
    var popup = document.getElementById('popup' + orderId);console.log('open',popup)
    popup.style.display = "block";
}

function closePopup(orderId) {
    var popup = document.getElementById('popup' + orderId);
    popup.style.display = "none";
}

