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
        <form id="form-cadastro" onsubmit="criarUsuario(event)">
            <div>
                <label>
                    Nome de Usuário:
                </label>
                <input type="text" id="username" name="username" required>
                </input>
            </div>
            <div>
                <label>
                    E-Mail:
                </label>
                <input type="text" id="email" name="email" placeholder="Insira o seu e-mail" required>
                </input>
                <div id="emailMessage" class="message"></div>
            </div>
            <div>
                <label>
                    Senha:
                </label>
                <input type="password" id="password" name="password" required>
                </input>
            </div>
            <div>
                <label>
                    Confirmar senha:
                </label>
                <input type="password" id="password_confirma" name="password_confirma" required>
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
    const password = document.getElementById('password').value;
    const password_confirma = document.getElementById('password_confirma').value;

    const response = await fetch('api/users/create.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
        },
        body: JSON.stringify({
            username,
            email,
            password,
            password_confirma
        }),
    });

    const result = await response.json();
    alert(result.message);
}

    // Validador de e-mail

    document.addEventListener('DOMContentLoaded', () => {
        const emailInput = document.getElementById('email');
        const emailMessage = document.getElementById('emailMessage');

        emailInput.addEventListener('input', () => {
            const email = emailInput.value.trim();

            if (!email) {
                emailMessage.textContent = '';
                emailMessage.className = 'message';
                return;
            }

            if (validateEmail(email)) {
                emailMessage.textContent = '';
                emailMessage.className = 'message valid';
            } else {
                emailMessage.textContent = 'E-Mail inválido';
                emailMessage.className = 'message invalid';
            }
        });

        function validateEmail(email) {
            // Regex básico para validar e-mails
            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            return emailRegex.test(email);
        }
    });
</script>

</html>