function validateForm() {
    let so1 = document.forms["myForm"]["so1"].value;
    let so2 = document.forms["myForm"]["so2"].value;
    let pheptinh = document.forms["myForm"]["pheptinh"].value;
    let flag = true;
    let error = "";
    if (pheptinh == "") {
        error = error.concat("Bạn vui lòng chọn phép tính<br/>");
        flag = false;
    }
    if (so1 == "") {
        error = error.concat("Bạn vui lòng nhập số 1<br/>");
        flag = false;
    }
    else if (isNaN(Number(so1)))
    {
        error = error.concat("Bạn vui lòng nhập số 1 là giá trị kiểu số<br/>");
        flag = false;
    }
    if (so2 == "") {
        error = error.concat("Bạn vui lòng nhập số 2<br/>");
        flag = false;
    }
    else if (isNaN(Number(so2)))
    {
        error = error.concat("Bạn vui lòng nhập số 2 là giá trị kiểu số<br/>");
        flag = false;
    }
    document.getElementById("error").innerHTML = error;
    return flag;
  }