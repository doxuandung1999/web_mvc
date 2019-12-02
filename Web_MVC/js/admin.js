function hienNguoiDung() {
    document.getElementById("btnguoidung").onclick = function() {
        document.getElementById("nguoidung").style.display = 'block';
        document.getElementById("baidang").style.display = 'none'
    };
}
function hienBaiDang() {
    document.getElementById("btbaidang").onclick = function() {
        document.getElementById("baidang").style.display = 'block';
        document.getElementById("nguoidung").style.display = 'none'
    };
}
