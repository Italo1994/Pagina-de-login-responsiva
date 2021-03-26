<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Systec Hortiz</title>
        
        <link rel="stylesheet" href="css/index.css" />

        <!--GOOGLE FONTS-->
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Rancho&display=swap" rel="stylesheet">

        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    </head>
    <body>
        <div class="container">

            <div id="wrapper-login">
                
                <div id="area-logo">
                    <h1>Systec Gestão</h1>
                </div>

                <div id="area-login">

                    <form class="form-login flex-column-center" name="form-login" action="" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="usuario">Usuário</label><br />
                            <input type="text" class="form-control" name="usuario" placeholder="Digite o nome de usuário" />
                        </div>

                        <div class="form-group">
                            <label for="senha">Senha</label><br/>
                            <input type="password" class="form-control" name="senha" placeholder="Digite a senha" />
                        </div>

                        <div class="form-group">
                            <!-- <input type="submit" class="button-login" name="button-login" value="Entrar" /> -->
                            <button type="button" class="btn btn-dark btn-mg">Entrar</button>
                        </div>
                    </form>

                </div>

            </div>

        </div>


        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

        <!-- Popper JS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    </body>
</html>