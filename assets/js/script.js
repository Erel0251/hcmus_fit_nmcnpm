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

// Modal form 
const openModalButtons = document.querySelectorAll('[data-modal-target]');
const closeModalButtons = document.querySelectorAll('[data-close-button]');
const overlay = document.getElementById('overlay');

function openModal(modal) {
    if (modal == null) return;
    modal.classList.add('active');
    overlay.classList.add('active');
}



function closeModal(modal) {
    if (modal == null) return;
    modal.classList.remove('active');
    overlay.classList.remove('active');
}

openModalButtons.forEach(button => {
    button.addEventListener('click', () => {
        const modal = document.querySelector(button.dataset.modalTarget);
        openModal(modal);
    })
})

closeModalButtons.forEach(button => {
    button.addEventListener('click', () => {
        const modal = button.closest('.form-modal');
        closeModal(modal);
    })
})

overlay.addEventListener('click', () => {
    const modals = document.querySelectorAll('.form-modal.active');
    modals.forEach(modal => {
        closeModal(modal);
    })
})