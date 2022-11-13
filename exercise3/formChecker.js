function checker() {
  let user = document.getElementById("username").value;
  let pass = document.getElementById("password").value;
  let pineapples = document.getElementById("pinkPineapples").value;
  let chargers = document.getElementById("chargers").value;
  let trucks = document.getElementById("trucks").value;
  let regex = new RegExp("[a-z0-9]+@[a-z]+.[a-z]{2,3}");

  if (
    pineapples.length == 0 ||
    chargers.length == 0 ||
    trucks.length == 0 ||
    user.length == 0 ||
    pass.length == 0
  ) {
    window.alert("No empty fields allowed!");
    return false;
  }

  if (regex.test(user) == false) {
    window.alert("Username not in correct format!");
    return false;
  }

  if (pineapples < 0 || chargers < 0 || trucks < 0) {
    window.alert("Quantities cannot be negative!");
    return false;
  }

  if (document.querySelector('input[name="shipping"]:checked') == null) {
    window.alert("You need to choose a shipping option!");
    return false;
  }

  return true;
}
