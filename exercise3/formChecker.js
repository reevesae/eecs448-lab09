function validateForm() {
  if(checkQuantities() && checkShip() && checkLogin()){
      return true
  }
  else{
      alert("Order form is incomplete or values are invalid, please check your order and try again!")
      return false
  }
}

function checkQuantities() {
    if(document.getElementById("handNum").value >= 0 && document.getElementById("mowNum").value >= 0 && document.getElementById("mikeNum").value >= 0 && document.getElementById("mikeNum").value <= 1){
        return true
    }
    else{
        return false
    }
}

function checkShip() {
    if(document.getElementById("fso").checked || document.getElementById("tso").checked || document.getElementById("oso").checked){
        return true
    }
    else{
        return false
    }
}

function checkLogin() {
    mailformat = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
    if(document.getElementById("user").value.match(mailformat) && document.getElementById("pass").value.length > 0){
        return true
    }
    else{
        return false
    }
}
