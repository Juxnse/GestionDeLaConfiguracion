function guardarTexto() {
    var nuevoTexto = document.getElementById("texto").value;
    var textosGuardados = JSON.parse(localStorage.getItem("textosGuardados")) || [];
    textosGuardados.push(nuevoTexto);
    localStorage.setItem("textosGuardados", JSON.stringify(textosGuardados));
    alert("Texto guardado correctamente.");
}



function buscarTexto() {
    var textoBusqueda = document.getElementById("busquedaTexto").value.trim().toLowerCase();
    var textosGuardados = JSON.parse(localStorage.getItem("textosGuardados")) || [];
    var resultadosDiv = document.getElementById("resultadosBusqueda");

    if (textosGuardados.length === 0) {
        resultadosDiv.innerHTML = "<p>No hay textos guardados.</p>";
        return;
    }

    var conteoPalabras = {}; // Objeto para almacenar el conteo de palabras

    textosGuardados.forEach(function(texto) {
        var palabras = texto.toLowerCase().split(/\s+/); // Dividir el texto en palabras
        palabras.forEach(function(palabra) {
            if (palabra === textoBusqueda) {
                if (conteoPalabras[palabra]) {
                    conteoPalabras[palabra]++;
                } else {
                    conteoPalabras[palabra] = 1;
                }
            }
        });
    });

    if (Object.keys(conteoPalabras).length === 0) {
        resultadosDiv.innerHTML = "<p>No se encontraron coincidencias.</p>";
    } else {
        resultadosDiv.innerHTML = "<p>Resultados de la búsqueda:</p><ul>";
        for (var palabra in conteoPalabras) {
            resultadosDiv.innerHTML += "<li>" + palabra + ": " + conteoPalabras[palabra] + " veces</li>";
        }
        resultadosDiv.innerHTML += "</ul>";
    }
}