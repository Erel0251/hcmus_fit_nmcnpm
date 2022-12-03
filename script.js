function myFunction(password, button) {
    let x = document.getElementById(password);
    let y = document.getElementById(button);
    if (x.type === "password") {
        x.type = "text";
        y.src = "./images/png/icons/003-show.png";

    } else {
        x.type = "password";
        y.src = "./images/png/icons/002-hide.png";
    }
  }