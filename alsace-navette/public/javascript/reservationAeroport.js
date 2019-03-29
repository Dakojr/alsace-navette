function AllerRetour() {
    // Get the checkbox
    var checkBox = document.getElementById("CheckAllerRetour");
    // Get the output text
    var FormAllerRetour = document.getElementById("FormAllerRetour");

    // If the checkbox is checked, display the output text
    if (checkBox.checked == true) {
        FormAllerRetour.style.display = "block";
        document.getElementById("FormAllerSimple").style.display = "none";

    } else {
        FormAllerRetour.style.display = "none";
    }
}


function AllerSimple() {
    // Get the checkbox
    var checkBox = document.getElementById("CheckAllerSimple");
    // Get the output text
    var FormAllerRetour = document.getElementById("FormAllerSimple");

    // If the checkbox is checked, display the output text
    if (checkBox.checked == true) {
        FormAllerRetour.style.display = "block";
        document.getElementById("FormAllerRetour").style.display = "none";
    } else {
        FormAllerRetour.style.display = "none";
    }
}