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
    <title>Cadastro de Usuário</title>
</head>

<body>

    <!-- Formulário de Cadastro de Usuário -->
    <div>
        <form id="form-cadastro" onsubmit = "criarUsuario(event)">
            <div>
                <label>
                    Nome de Usuário:
                </label>
                <input id = "username" name = "username" required>
                </input>
            </div>
            <div>
                <label>
                    E-Mail:
                </label>
                <input  id = "email" name = "email" required>
                </input>
            </div>
            <div>
                <label>
                    Senha:
                </label>
                <input>
                </input>
            </div>
            <div>
                <label>
                    Confirmar senha:
                </label>
                <input>
                </input>
            </div>
            <input type="submit" value="Cadastrar">
        </form>

    </div>

</body>

<script>
        async function criarUsuario(event) {
            event.preventDefault();

            const username = document.getElementById('username').value;
            const email = document.getElementById('email').value;

            const response = await fetch('api/users/create.php', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                },
                body: JSON.stringify({ username, email}),
            });

            const result = await response.json();
            alert(result.message);
        }
    </script>

</html>