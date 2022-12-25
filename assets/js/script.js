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

// Cập nhật cột ở purchase.php và inventory.php
function editButton(no) {
    let button = document.getElementById('editButton' + no);
    let image = document.getElementById('image' + no);

    let row = document.getElementById('row' + no);
    let query = row.querySelectorAll('td > input');


    let searchValue = 'form-control-plaintext';
    let newValue = 'form-control';
    let value = null;

    if (button.classList.contains('btn-outline-warning')) {
        image.src = image.src.replace('editing.png', 'checked.png');
        button.classList.remove('btn-outline-warning');
        button.classList.add('btn-outline-info');

        value = false;

    } else if (button.classList.contains('btn-outline-info')) {
        image.src = image.src.replace('checked.png', 'editing.png');
        button.classList.remove('btn-outline-info');
        button.classList.add('btn-outline-warning');

        value = true;
        [searchValue, newValue] = [newValue, searchValue];
    }

    for (let i = 0; i < query.length; i++) {
        query[i].classList.replace(searchValue, newValue);
        if (value)
            query[i].setAttribute('readonly', value);
        else
            query[i].removeAttribute('readonly');
    }

}

// Xác nhận xóa dòng trong bảng ở inventory.php
function deleteButton(no) {
    let button = document.getElementById('deleteButton' + no);

    let text = "Bạn có chắc muốn xóa đơn này?";
    if (confirm(text)) {
        button.type = "submit";
    }
}

// Xác nhận thêm dòng vào database ở inventory.php
function updateButton(no) {
    let button = document.getElementById('updateButton' + no);

    let text = "Bạn có chắc muốn cập nhật đơn này?";
    if (confirm(text)) {
        button.type = "submit";
    }
}

// Xóa dòng trong bảng ở purchase.php
function removeButton(no) {
    let body = document.getElementById('body_table');
    let length = body.childElementCount;

    let row = document.getElementById('row' + no);

    //row.innerHTML = "";
    row.remove();

    for (let i = 0; i < length - 2; i++) {
        body.children[i].firstElementChild.innerHTML = i + 1;
    }
}

// Giới hạn username có thể nhập ở purchase.php
function checkUserList(el) {
    let fullname = document.getElementById('fullname');
    let gender = document.getElementById('gender');

    if (el.value == "")
        return;

    let options = el.list.options;
    for (let i = 0; i < options.length; i++) {
        if (el.value == options[i].value) {
            fullname.value = options[i].dataset.fullname;
            gender.value = options[i].dataset.gender;
            return;
        }
    }

    el.value = "";
    fullname.value = "";
    gender.value = "";

    el.setAttribute('placeholder', 'Ko tồn tại user');
}

// Chuẩn bị dữ liệu form cho món được nhập ở purchase.php
function checkItemList(el) {
    let row = el.parentElement.parentElement;
    let index = row.firstElementChild.innerHTML;

    let dongia = el.previousElementSibling;
    let mahang = dongia.previousElementSibling;

    if (el.value == "")
        return;

    let options = el.list.options;
    for (let i = 0; i < options.length; i++) {
        if (el.value == options[i].value) {
            mahang.value = options[i].dataset.mahang;
            dongia.value = options[i].dataset.dongia;
            return;
        }
    }

    el.value = "";
    mahang.value = "";
    dongia.value = "";

    el.setAttribute('placeholder', 'Món không tồn tại');
}

// Từ số lượng mặt hàng cập nhật đến tổng giá của món đó
function checkCount(el) {
    let row = el.parentElement.parentElement;
    el.value = el.value || 1;

    let dongia = row.children[1].children[1].value ?? 0;
    let soluong = row.children[3].firstElementChild;

    soluong.value = el.value * dongia;

    updateTotal();

    return;
}

// Cập nhật tổng số tiền cần thanh toán
function updateTotal() {
    let body = document.getElementById('body_table');
    let length = body.childElementCount;
    let total = document.getElementById('total');
    let sum = 0;

    for (let i = 0; i < length - 1; i++) {
        sum += parseInt(body.children[i].children[3].firstElementChild.value);
    }

    total.innerText = sum;

}

// Thêm dòng món hàng muốn mua vào đơn thanh toán trong purchase.php
function addRow() {
    let body = document.getElementById('body_table');
    let lastRow = body.lastElementChild;
    let index = body.childElementCount;


    let plainRow = document.createElement('tr');
    plainRow.setAttribute('id', 'row' + index);
    plainRow.innerHTML =
        `<td>${index}</td>

    <!-- Tên mặt hàng nhập về -->
    <td>
        <input type="hidden" name="mahang\[\]" value="" required/>
        <input type="hidden" name="dongia\[\]" value=""/>
        <input list="mat_hang" name="tenhang\[\]" class="form-control-plaintext" onchange="checkItemList(this)" readonly/>
    </td>

    <!-- Số lượng nhập -->
    <td>
        <input type="number" name="soluong\[\]" class="form-control-plaintext" onchange="checkCount(this)"  min="0" max="100000" value="0" readonly required/>
    </td>

    <!-- Thành tiền -->
    <td>
        <input type="number" name="thanhtien\[\]" class="form-control-plaintext" value="0" readonly required/>
    </td>
    <td class="p-0">
    <!-- cập nhật dữ liệu thuần ở front-end -->
    <button type="button" id="editButton${index}" onclick="editButton('${index}')" class="btn btn-outline-warning m-1">
        <img src="../assets/images/png/icons/editing.png" id="image${index}" style="width: 18px; height: 18px" alt="">
    </button>

    <!-- xóa dòng dữ liệu thuần ở front-end-->
    <button type="button" id="removeButton${index}" onclick="removeButton('${index}')" class="btn btn-outline-danger m-1">
        <img src="../assets/images/png/icons/delete.png" style="width: 18px; height: 18px" alt="">
    </button>
    </td>`;

    body.insertBefore(plainRow, lastRow);
    updateTotal();
}

// Xác nhận thanh toán
function purchaseSubmit() {
    let button = document.getElementById('btnSubmit');
    let total = document.getElementById('total');

    let text = "Bạn có chắc muốn thanh toán đơn này?";
    if (confirm(text)) {
        if (total.innerText == 0)
            alert('Đơn trống không thể thanh toán')
        else
            button.type = "submit";
    }
}

// Cập nhật món ăn (mặt hàng)
function updateModal(no){
    // dữ liệu gốc
    let mahang = document.getElementById('mahang' + no).dataset.mahang;
    let tenhang = document.getElementById('tenhang' + no).innerText;
    let img = document.getElementById('img' + no).dataset.src;
    let loaihang = document.getElementById('mahang' + no).dataset.loaihang;
    let dongia = document.getElementById('dongia' + no).innerText.replace(/\,/g, "");
    let soluong = document.getElementById('soluong' + no).innerText;

    // Form
    let value_mahang = document.getElementById('id');
    let input_mahang = document.getElementById('mahang');
    let input_tenhang = document.getElementById('tenhang');
    let input_image = document.getElementById('image');
    let input_loaihang = document.getElementById('loaihang');
    let input_dongia = document.getElementById('dongia');
    let input_soluong = document.getElementById('soluong');
    let title = document.getElementById('ModalThemLabel');
    let btn = document.getElementById('submit');

    btn.setAttribute('name', 'update');
    btn.innerText = "Cập nhật";
    title.innerText = "Sửa món ăn";
    value_mahang.value = input_mahang.value = mahang;
    input_tenhang.value = tenhang;
    input_image.value = img;
    input_loaihang.value = loaihang;
    input_dongia.value = dongia;
    input_soluong.value = soluong;
}

function addModal(mahang){
    // Form
    let value_mahang = document.getElementById('id');
    let input_mahang = document.getElementById('mahang');
    let input_tenhang = document.getElementById('tenhang');
    let input_image = document.getElementById('image');
    let input_loaihang = document.getElementById('loaihang');
    let input_dongia = document.getElementById('dongia');
    let input_soluong = document.getElementById('soluong');
    let title = document.getElementById('ModalThemLabel');
    let btn = document.getElementById('submit');

    btn.setAttribute('name', 'add');
    btn.innerText = "Thêm";
    title.innerText = "Thêm món ăn";
    value_mahang.value = input_mahang.value = mahang;
    input_tenhang.value = '';
    input_image.value = '';
    input_loaihang.value = '';
    input_dongia.value = 0;
    input_soluong.value = 0;
}

function submitButton(){
    let title = document.getElementById('ModalThemLabel');
    let btn = document.getElementById('submit');
    let text;
    if (title.innerText == "Thêm món ăn"){
        text = "Bạn có chắc muốn thêm món này?";
    } else{
        text = "Bạn có chắc muốn sửa món này?";
    }

    if (confirm(text)) 
        btn.type = "submit";
    
}