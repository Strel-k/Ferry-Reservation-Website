let currentPassenger = 1; // Variable to track the current passenger being entered
let paymentCompleted = false; // Flag to track whether payment is completed

document.getElementById("booking-form").addEventListener("submit", function(event) {
    event.preventDefault(); // Prevent form submission

    // Get form data
    const origin = document.getElementById("origin").value;
    const destination = document.getElementById("destination").value;
    const date = document.getElementById("date").value;
    const passengerCount = parseInt(document.getElementById("passenger-count").value);

    // Hide the original form
    document.getElementById("input-body").style.display = "none";

    showPassengerPopup(passengerCount);
});

function showPassengerPopup(passengerCount) {
    if (currentPassenger <= passengerCount) {
        const popup = document.createElement("div");
        popup.classList.add("popup");
        popup.innerHTML = `
            <h3>Passenger ${currentPassenger}</h3>
            <input type="text" placeholder="Name">
            <input type="text" placeholder="Email">
            <label for="trip-type">Departure Date</label>

            <input type="date" id="date" name="DepartDate">
            <label for="trip-type">Return Date</label>

            <input type="date" id="date" name="ReturnDate">
            <input type="text" placeholder="Phone Number">
            <input type="text" placeholder="Address">
            <input type="text" placeholder="Date of Birth">
            <button class="submit-passenger-btn">Submit Passenger ${currentPassenger}</button>
        `;
        document.body.appendChild(popup);

        const submitPassengerButton = popup.querySelector(".submit-passenger-btn");
        submitPassengerButton.addEventListener("click", function() {
            const passengerInputs = popup.querySelectorAll("input");
            const passengerData = Array.from(passengerInputs).map(input => input.value);
            console.log("Passenger data:", passengerData);
            popup.remove();
            currentPassenger++;
            if (currentPassenger > passengerCount) {
                showPaymentPopup(); 
            } else {
                showPassengerPopup(passengerCount);
            }
        });
    }
}

function showPaymentPopup() {
    const popup = document.createElement("div");
    popup.classList.add("popup");
    popup.innerHTML = `
    <form id='paymentMethod'>
        <h3>Payment</h3>
        <select id="PaymentMethod" name="PaymentMethod">
        <option value="Credit Cart">Credit Card</option>
        <option value="Debit">Debit Card</option>
        <option value="Bank Transfer">Bank Transfer</option>
    </select>
    <input type="text" placeholder="UserName">
    <input type="text" placeholder="Card Number">
    <input type="text" placeholder="Expiration Date">
    <h4>Total: P100.25</h4>

        <button class="submit-payment-btn">Make Payment</button>
        </form>
    `;
    document.body.appendChild(popup);

    const submitPaymentButton = popup.querySelector(".submit-payment-btn");
    submitPaymentButton.addEventListener("click", function() {
        console.log("Payment completed!");
        popup.remove(); 
        paymentCompleted = true;
        showSuccessPopup(); 
    });
}

function showSuccessPopup() {
    const successPopup = document.createElement("div");
    successPopup.classList.add("popup");
    successPopup.innerHTML = `
        <h3>Success!</h3>
        <p style='text-align:center;'>Your booking has been successfully submitted.<br>Please Wait for an Email Confirmation.</p>
    `;
    document.body.appendChild(successPopup);
    setTimeout(function() {
        window.location.href = "index.php"; 
    }, 3000); 
}
