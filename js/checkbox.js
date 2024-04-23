document.addEventListener("DOMContentLoaded", function() {
    const roundtripCheckbox = document.getElementById("roundtrip");
    const onewayCheckbox = document.getElementById("oneway");
    const departureDateInput = document.getElementById("departure-date");
    const returnDateInput = document.getElementById("return-date");
    const returnDateLabel = document.querySelector("label[for='return-date']");
    const destinationSelect = document.getElementById("destination");
    const departingShipSelect = document.getElementById("departing-ship");
    const returningShipSelect = document.getElementById("returning-ship");

    // Initially hide the return date input and its label
    returnDateInput.style.display = "none";
    returnDateLabel.style.display = "none";

    roundtripCheckbox.addEventListener("change", function() {
        if (roundtripCheckbox.checked) {
            onewayCheckbox.checked = false;
            departureDateInput.style.display = "block";
            returnDateInput.style.display = "block";
            returnDateLabel.style.display = "block";
            departingShipSelect.style.display = "block"; // Show the departing ship select
            returningShipSelect.style.display = "block"; // Show the returning ship select
            populateShipsForDestination(destinationSelect.value); // Populate ships for the selected destination
        } else {
            departureDateInput.style.display = "block";
            returnDateInput.style.display = "none";
            returnDateLabel.style.display = "none";
            departingShipSelect.style.display = "none"; // Hide the departing ship select
            returningShipSelect.style.display = "none"; // Hide the returning ship select
        }
    });

    onewayCheckbox.addEventListener("change", function() {
        if (onewayCheckbox.checked) {
            roundtripCheckbox.checked = false;
            departureDateInput.style.display = "block";
            returnDateInput.style.display = "none";
            returnDateLabel.style.display = "none";
            departingShipSelect.style.display = "block"; // Show the departing ship select
            returningShipSelect.style.display = "none"; // Hide the returning ship select
            populateShipsForDestination(destinationSelect.value); // Populate ships for the selected destination
        } else {
            departureDateInput.style.display = "block";
            returnDateInput.style.display = "block";
            returnDateLabel.style.display = "block";
            departingShipSelect.style.display = "block"; // Show the departing ship select
            returningShipSelect.style.display = "block"; // Show the returning ship select
            populateShipsForDestination(destinationSelect.value); // Populate ships for the selected destination
        }
    });

    // Function to populate ships for the selected destination
    function populateShipsForDestination(destinationID) {
        fetch("../script/fetch-ships.php?destinationID=" + destinationID)
            .then(response => {
                if (!response.ok) {
                    throw new Error('Server response was not ok: ' + response.statusText);
                }
                return response.json(); // Read the response as JSON
            })
            .then(data => {
                console.log("Server Response:", data); // Log the response to check its content
                // Clear previous options
                departingShipSelect.innerHTML = '';
                returningShipSelect.innerHTML = '';
                // Populate ship options
                data.forEach(ship => {
                    const option = document.createElement('option');
                    option.value = ship.cruiseID;
                    option.textContent = ship.CruiseName;
                    departingShipSelect.appendChild(option);
                    returningShipSelect.appendChild(option.cloneNode(true));
                });
            })
            .catch(error => console.error("Error fetching ships:", error));
    }

    // Event listener for destination select change
    destinationSelect.addEventListener("change", function() {
        populateShipsForDestination(this.value);
    });
});
