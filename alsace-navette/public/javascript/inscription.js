function Prochecked() {
    // Get the checkbox
    var checkBox = document.getElementById("CheckPro");
    // Get the output text
    var inputPro = document.getElementById("InputPro");

    // If the checkbox is checked, display the output text
    if (checkBox.checked == true) {
        inputPro.style.display = "block";
    } else {
        inputPro.style.display = "none";
    }
}