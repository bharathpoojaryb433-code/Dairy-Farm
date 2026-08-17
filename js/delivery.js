function trackOrder() {

    const orderId =
        document.getElementById("orderSearch").value.trim();

    if (!orderId) {

        alert("Please enter Order ID");

        return;

    }

    alert(
        "Tracking Order: " +
        orderId +
        "\n\n🚚 Your order is being processed."
    );

}