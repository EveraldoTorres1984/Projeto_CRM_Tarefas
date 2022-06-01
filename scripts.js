function validarTarefa() {
    var nomeTarefa = document.getElementById("inserirTarefa").value;
    if (nomeTarefa != "") {
        return true;
    } else {
        return false;
    }
}

function validarOK() {
    if (validarTarefa()) {
        return true;
    } else {
        alert("Por Favor Preencha o Campo");
        return false;
    }
}


