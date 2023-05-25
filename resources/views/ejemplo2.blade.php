<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejemplo 2</title>
    <link rel="stylesheet" href="<?php echo asset('css/bootstrap.min.css')?>">
    <script src="<?php echo asset('js/jquery.min.js')?>"></script>
</head>
<body>
    <div class="container">
        <br>
        <div class="row">
            <div class="col-lg-6"></div>
            <div class="panel panel-success">
                <div class="panel-heading">
                    <label>FORMULARIO 2</label>
                </div>
                <div class="panel-body">
                    <form id = "ejemplo2_respuesta" method = "post">
                        @csrf
                        <div class="form-group">
                            <label>Numero 1</label>
                            <input type="text" class="form-control" id = "numero1" name="numero1" required autocomplete="off">
                        </div>
                        <div class="form-group">
                            <label>Numero 2</label>
                            <input type="text" class="form-control" id = "numero2" name = "numero2"required autocomplete="off">
                        </div>
                        <div class="form-group">
                            <label>Resultado</label>
                            <input type="text" class="form-control" id = "resultado" disabled>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-success btn-lg">CALCULAR</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script>
        $("#ejemplo2_respuesta").submit(function (event) { 
            event.preventDefault();
            $.ajax({
                type: 'POST',
                url: '<?php echo route('prueba.ejemplo2_respuesta') ?>',
                data: $("form").serialize(),
                
                success: function (response) {
                    var valores =  eval(response);
                    $('#resultado').val(valores[0]);
                }
            });
        });
    </script>
</body>
</html>