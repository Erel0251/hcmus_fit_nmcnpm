function myFunction(password, button) {
    let x = document.getElementById(password);
    let y = document.getElementById(button);
    if (x.type === "password") {
        x.type = "text";
        console.log(y);
        y.src = y.src.replace("002-hide.png", "003-show.png");
        console.log(y);
    } else {
        x.type = "password";
        //y.src = "./images/png/icons/002-hide.png";
        y.src = y.src.replace("003-show.png", "002-hide.png");
    }
  }