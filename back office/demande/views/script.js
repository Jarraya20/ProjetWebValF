function validateForm() {
  var x = document.forms["form"]["ref"].value;
  if (x == "") {
    alert("Reference must be filled out");
    return false;
  }
}
