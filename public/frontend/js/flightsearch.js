// Handle Trip Type Change for International
function handleTripTypeChange() {
  const tripType = document.getElementById("tripType").value;
  const oneTwoWayLayout = document.querySelector(".oneTwoWayLayout");
  const multiCityDiv = document.querySelector(".international-multi-city");
  const returnDateCol = document.querySelector(".ret-date-col");

  if (tripType === "one-way") {
    oneTwoWayLayout.style.display = "flex";
    multiCityDiv.style.display = "none";
    returnDateCol.style.opacity = "0.4";
  } else if (tripType === "two-way") {
    oneTwoWayLayout.style.display = "flex";
    multiCityDiv.style.display = "none";
    returnDateCol.style.opacity = "1";
  } else if (tripType === "multi-city") {
    oneTwoWayLayout.style.display = "none";
    multiCityDiv.style.display = "flex";
  }
}

function handleReturnClick() {
  const returnDateCol = document.querySelector(".ret-date-col");
  selectDropdownOption("two-way");
  returnDateCol.style.opacity = "1";
}

function handleReturnCrossClick(event) {
  event.stopPropagation(); 
  const returnDateCol = document.querySelector(".ret-date-col");
  selectDropdownOption("one-way");
  returnDateCol.style.opacity = "0.4";
}

function selectDropdownOption(value) {
  const tripType = document.getElementById("tripType");
  for (let i = 0; i < tripType.options.length; i++) {
    if (tripType.options[i].value === value) {
      tripType.selectedIndex = i;
      tripType.options[i].selected = true;
    } else {
      tripType.options[i].selected = false;
    }
  }
  tripType.dispatchEvent(new Event("change"));
}

// Handle Trip Type Change for Domestic
function handleDomesticTripTypeChange() {
  const tripType = document.getElementById("domesticTripType").value;
  const returnDateCol = document.querySelector(".ret-date-col-domestic");

  if (tripType === "one-way") {
    returnDateCol.style.opacity = "0.4";
  } else if (tripType === "two-way") {
    returnDateCol.style.opacity = "1";
  }
}

function handleDomesticReturnClick() {
  const returnDateCol = document.querySelector(".ret-date-col-domestic");
  domesticSelectDropdownOption("two-way");
  returnDateCol.style.opacity = "1";
}

function handleDomesticReturnCrossClick(event) {
  event.stopPropagation(); 
  const returnDateCol = document.querySelector(".ret-date-col-domestic");
  domesticSelectDropdownOption("one-way");
  returnDateCol.style.opacity = "0.4";
}

function domesticSelectDropdownOption(value) {
  const tripType = document.getElementById("domesticTripType");
  for (let i = 0; i < tripType.options.length; i++) {
    if (tripType.options[i].value === value) {
      tripType.selectedIndex = i;
      tripType.options[i].selected = true;
    } else {
      tripType.options[i].selected = false;
    }
  }
  tripType.dispatchEvent(new Event("change"));
}

// Input Swap Functions for International and Domestic
function displayCityAndAirport() {
  const depCity = document.getElementById("depcity").value;
  const depAirport = document.getElementById("depairport").value;
  const arrCity = document.getElementById("arrcity").value;
  const arrAirport = document.getElementById("arrairport").value;

  document.getElementById("d-depcity").textContent = depCity;
  document.getElementById("d-depairport").textContent = depAirport;
  document.getElementById("d-arrcity").textContent = arrCity;
  document.getElementById("d-arrairport").textContent = arrAirport;
}

function swapCitiesAndAirports() {
  const depCityInput = document.getElementById("depcity");
  const depAirportInput = document.getElementById("depairport");
  const arrCityInput = document.getElementById("arrcity");
  const arrAirportInput = document.getElementById("arrairport");

  const tempCity = depCityInput.value;
  const tempAirport = depAirportInput.value;

  depCityInput.value = arrCityInput.value;
  depAirportInput.value = arrAirportInput.value;

  arrCityInput.value = tempCity;
  arrAirportInput.value = tempAirport;

  displayCityAndAirport();
}

function displayDomesticCityAndAirport() {
  const depCityDomestic = document.getElementById("depcity-domestic").value;
  const depAirportDomestic = document.getElementById(
    "depairport-domestic"
  ).value;
  const arrCityDomestic = document.getElementById("arrcity-domestic").value;
  const arrAirportDomestic = document.getElementById(
    "arrairport-domestic"
  ).value;

  document.getElementById("d-domestic-depcity").textContent = depCityDomestic;
  document.getElementById("d-domestic-depairport").textContent =
    depAirportDomestic;
  document.getElementById("d-domestic-arrcity").textContent = arrCityDomestic;
  document.getElementById("d-domestic-arrairport").textContent =
    arrAirportDomestic;
}

function swapDomesticCitiesAndAirports() {
  const depCityInputDomestic = document.getElementById("depcity-domestic");
  const depAirportInputDomestic = document.getElementById(
    "depairport-domestic"
  );
  const arrCityInputDomestic = document.getElementById("arrcity-domestic");
  const arrAirportInputDomestic = document.getElementById(
    "arrairport-domestic"
  );

  const tempCityDomestic = depCityInputDomestic.value;
  const tempAirportDomestic = depAirportInputDomestic.value;

  depCityInputDomestic.value = arrCityInputDomestic.value;
  depAirportInputDomestic.value = arrAirportInputDomestic.value;

  arrCityInputDomestic.value = tempCityDomestic;
  arrAirportInputDomestic.value = tempAirportDomestic;

  displayDomesticCityAndAirport();
}

// MultiCity Container Functions
function getMultiDisplayedRowCount() {
  let rows = document.querySelectorAll(".multi-container > div");
  let count = 0;
  rows.forEach((row) => {
    if (row.style.display !== "none") {
      count++;
    }
  });
  return count;
}

function toggleMultiButtons() {
  let displayedRowCount = getMultiDisplayedRowCount();
  let addBtn = document.querySelector(".addmultibtn");
  let removeBtn = document.querySelector(".removemultibtn");

  if (displayedRowCount > 1) {
    removeBtn.style.display = "flex";
  } else {
    removeBtn.style.display = "none";
  }

  if (displayedRowCount === 4) {
    addBtn.style.display = "none";
  } else {
    addBtn.style.display = "flex";
  }
}

function addMultiRow(event) {
  event.preventDefault(); 
  let rows = document.querySelectorAll(".multi-container > div");
  for (let i = 0; i < rows.length; i++) {
    if (rows[i].style.display === "none") {
      rows[i].style.display = "flex";
      toggleMultiButtons();
      return;
    }
  }
}

function removeMultiRow(event) {
  event.preventDefault(); 

  let rows = document.querySelectorAll(".multi-container > div");
  for (let i = rows.length - 1; i >= 0; i--) {
    if (rows[i].style.display !== "none") {
      rows[i].style.display = "none";
      toggleMultiButtons();
      return;
    }
  }
}

// Initialize everything on page load
window.addEventListener("load", function () {
  // Trip Type Change Events
  document
    .getElementById("tripType")
    .addEventListener("change", handleTripTypeChange);
  document
    .querySelector(".ret-date-col")
    .addEventListener("click", handleReturnClick);
  document
    .getElementById("intReturnCross")
    .addEventListener("click", handleReturnCrossClick);

  // Domestic Trip Type Change Events
  document
    .getElementById("domesticTripType")
    .addEventListener("change", handleDomesticTripTypeChange);
  document
    .querySelector(".ret-date-col-domestic")
    .addEventListener("click", handleDomesticReturnClick);
  document
    .getElementById("domReturnCross")
    .addEventListener("click", handleDomesticReturnCrossClick);

  // Input Swap Events
  displayCityAndAirport();
  displayDomesticCityAndAirport();
  document
    .querySelector(".swipesector")
    .addEventListener("click", swapCitiesAndAirports);
  document
    .querySelector(".domestic-swipesector")
    .addEventListener("click", swapDomesticCitiesAndAirports);

  // MultiCity Button Events
  document.querySelector(".addmultibtn").addEventListener("click", addMultiRow);
  document
    .querySelector(".removemultibtn")
    .addEventListener("click", removeMultiRow);

  // Initialize multi city buttons
  toggleMultiButtons();
});
