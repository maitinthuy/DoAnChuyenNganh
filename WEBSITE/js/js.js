// JavaScript Document
    function validateForm() {
        //Họ phải được điền
        var hoten = document.forms["myForm"]["txtHT"].value;
        if (hoten == "") {
            alert("Họ tên không được để trống");
            return false;
        }
        var diachi = document.forms["myForm"]["txtDC"].value;
        if (diachi == "") {
            alert("Họ tên không được để trống");
            return false;
        }
        
          //Nhập số điện thoại
          var dienThoai = document.forms["myForm"]["txtDT"].value;
          var kiemTraDT = isNaN(dienThoai);
          if (dienThoai == "") {
              alert("Điện thoại không được để trống");
              return false;
          }
          if (kiemTraDT == true) {
              alert("Điện thoại phải để ở định dạng số");
              return false;
          }
          
    //Chọn kiểu thanh toán
          var ck = document.getElementById("ck");
          var tt = document.getElementById("hinhthuc");
    if ((ck.checked == false) && (tt.checked == false)) {
     alert("Bạn phải chọn một kiểu thanh toán");
     return false;
     }
}