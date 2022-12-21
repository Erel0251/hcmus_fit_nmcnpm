// Hide/show button
function passwordButton(password, button) {
    let x = document.getElementById(password);
    let y = document.getElementById(button);

    if (x.type === "password") {
        x.type = "text";
        y.src = y.src.replace("002-hide.png", "003-show.png");
    } else {
        x.type = "password";
        y.src = y.src.replace("003-show.png", "002-hide.png");
    }
}

//let name_data, date_data, count_data, location_data;

function editButton(no){
    let name = document.getElementById('name' + no);
    let date = document.getElementById('date' + no);
    let count = document.getElementById('count' + no);
    let location = document.getElementById('location' + no);
    
    let button = document.getElementById('button' + no);
    let image = document.getElementById('image' + no);

    if (button.classList.contains('btn-outline-warning')){
        image.src = image.src.replace('editing.png', 'checked.png');
        button.classList.remove('btn-outline-warning');
        button.classList.add('btn-outline-info');

        name.classList.replace('form-control-plaintext', 'form-control');
        date.classList.replace('form-control-plaintext', 'form-control');
        count.classList.replace('form-control-plaintext', 'form-control');
        location.classList.replace('form-control-plaintext', 'form-control');

        name.removeAttribute('readonly');
        date.removeAttribute('readonly');
        count.removeAttribute('readonly');
        location.removeAttribute('readonly');
    } else if (button.classList.contains('btn-outline-info')){
        image.src = image.src.replace('checked.png', 'editing.png');
        button.classList.remove('btn-outline-info');
        button.classList.add('btn-outline-warning');

        name.classList.replace('form-control', 'form-control-plaintext');
        date.classList.replace('form-control', 'form-control-plaintext');
        count.classList.replace('form-control', 'form-control-plaintext');
        location.classList.replace('form-control', 'form-control-plaintext');

        name.setAttribute('readonly', 'true');
        date.setAttribute('readonly', 'true');
        count.setAttribute('readonly', 'true');
        location.setAttribute('readonly', 'true');
    }
}
