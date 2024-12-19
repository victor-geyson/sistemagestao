<!DOCTYPE html>
<html lang="PT-BR">

<!-- 
Landpage do Site, serve para fazer Login no Sistema, e 
caso o usuário não possua cadastro, encaminha para uma 
página de cadastro no Sistema.
-->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Gestão</title>
</head>

<body>

    <!-- Formulário de login -->
    <div>
        <form id="form-login">
            <div>
                <label>
                    Usuário:
                </label>
                <input>
                </input>
            </div>
            <div>
                <label>
                    Senha:
                </label>
                <input>
                </input>
            </div>
            <input type="submit" value="Login">
            <label><a href = "cadastro.php">Cadastrar</a></label>
            <br>
            <label>Esqueci minha senha</label>
        </form>

    </div>

</body>

</html>