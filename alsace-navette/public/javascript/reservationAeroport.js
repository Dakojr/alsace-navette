function AllerRetour() {
    // Get the checkbox
    var checkBox = document.getElementById("CheckAllerRetour");
    // Get the output text
    var FormAllerRetour = document.getElementById("FormAllerRetour");

    // If the checkbox is checked, display the output text
    if (checkBox.checked == true) {
        console.log(FormAllerRetour.style.display)
        FormAllerRetour.style.display = "block";
    } else {
        console.log(FormAllerRetour.style.display)

        FormAllerRetour.style.display = "none";
    }
}