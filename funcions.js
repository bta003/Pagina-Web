
function filterfunction() {

    var input = document.getElementById("cerca"),
        filter = input.value.toUpperCase(),
        taula = document.getElementById("taula"),
        files = taula.getElementsByTagName("tr");

    for (i = 0; i < files.length; i++) {

        console.log("textContent: " + files[i].textContent);
        console.log("innerText: " + files[i].innerText);

        textCercat = files[i].textContent || files[i].innerText;

        if (textCercat.toUpperCase().indexOf(filter) > -1) {

            files[i].style.display = ""

        } else {

            files[i].style.display = "none";

        }

    }

}