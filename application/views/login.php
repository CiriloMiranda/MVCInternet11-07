<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <?= form_error('email')?>
    <div class="container">
        <div class="row justify-content-lg-center">
            <div class="col-lg-6">
                <form action="<?= base_url('login/validate') ?>" method="POST">
                    <div class="form-group">
                        <h1>LOGIN</h1>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail">Correo</label>
                        <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                       
                        <div class="invalid-feedback">
                            Please provide a valid city.
                        </div>
                    </div>
                    <div class="from-group">
                        <label for="exampleInputPassword1">Contraseña</label>
                        <input type="password" name="password" class="form-control" id="exampleInputPassword1">
                    </div>
                    <button type="submit" class="btn btn-primary">Ingresar</button>

                </form>

            </div>

        </div>

    </div>
    
</body>
</html>