<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Camada OSI</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body style="background:#2C2C2C">
<div class="col-sm-12">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <br>
                <h3 class="mb-0" style="color:#fff">
                    Camadas OSI
                </h3>
                <br>
            </div>
            <div class="col-sm-5">
                <form class="card p-4" method="POST">
                    <div class="input-group">
                        <select name="camada" class="form-control">
                            <option value="">Selecione a camada</option>
                            <option value="fisica">Física</option>
                            <option value="enlace">Enlace</option>
                            <option value="rede">Rede</option>
                            <option value="transporte">Trasporte</option>
                            <option value="sessao">Sessão</option>
                            <option value="apresentacao">Apresentação</option>
                            <option value="aplicacao">Aplicação</option>
                        </select>
                    </div>
                </form>
            </div>
            <div class="col-sm-7" id="path"></div>
        </div>
    </div>
</div>
<script>
    document.querySelector("[name=camada]").addEventListener("change", function () {
        var camada = document.querySelector("[name=camada]").value;

        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("path").innerHTML = this.responseText;
            }
        };
        xhttp.open("GET", "get_class.php?camada=" + camada, true);
        xhttp.send();
    });
</script>
</body>
</html>