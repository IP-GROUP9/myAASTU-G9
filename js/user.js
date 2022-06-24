function revealhide() {
    var checkBox = document.getElementById("myCheck");
    var textreveal = document.getElementById("revealtxt");
    var hidetxt = document.getElementById("hidetxt");
    var idlabel = document.getElementById("idnolabel");
    var id = document.getElementById("idno");

    const removereq = document.querySelectorAll(".form-input");

    if (checkBox.checked == true) {
        textreveal.style.display = "block";
        hidetxt.style.display = "none";
        idlabel.style.display = "block";
        id.style.display = "block";
        removereq.removeAttribute('required');

    } else {
        textreveal.style.display = "none";
        hidetxt.style.display = "block";
        idlabel.style.display = "none";
        id.style.display = "none";
        removereq.setAttribute('required', '');
    }
}