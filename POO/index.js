function lee_json() {
            $.getJSON("datos.json", function(datos) {
                alert("Dato: " + datos["dato"]);

                $.each(datos["PERSONAS"]) {
                    alert("Numero primo: " + primo);
                });
            });}
