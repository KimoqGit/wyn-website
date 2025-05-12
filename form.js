// Show the time preferred to call if "Call" is selected 
function showTimeField() {
  const selected = document.querySelector('input[name="answer-type"]:checked');
  const extra = document.getElementById("call-time-field");

  if (selected && selected.value === "Call") {
    extra.style.display = "block";
  } else {
    extra.style.display = "none";
  }
    
}

// Check the input of the "Phone Number field", if empty don't show "email or call", else show it
const phoneInput = document.getElementById("phone-number");
const methodContact = document.getElementById("method-to-contact");
const extra = document.getElementById("call-time-field");

phoneInput.addEventListener("input", function () {
  if (phoneInput.value.trim() !== "") {
    methodContact.style.display = "block";
  } else {
    methodContact.style.display = "none";
    extra.style.display = "none";
  }
});