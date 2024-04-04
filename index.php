<?php  include ('./partials/html.php') ?>

    <head>
    <?php  include ("./partials/title-meta.php") ?>

<?php  include ('./partials/head-css.php') ?>

</head>

<body class="authentication-bg pb-0">

    <div class="auth-fluid">
        <!--Auth fluid left content -->
        <div class="auth-fluid-form-box">
            <div class="card-body d-flex flex-column h-80 gap-3">

                <!-- Logo -->
                <div class="auth-brand text-center text-lg-start">
                    <a href="index.html" class="logo-dark">
                        <span><img src="assets/images/logo_m.png" alt="dark logo" height="100"></span>
                    </a>
                    <a href="index.html" class="logo-light">
                        <span><img src="assets/images/logo_m.png" alt="logo" height="100"></span>
                    </a>
                </div>

                <div class="my-auto">
                    <!-- title-->
                    <h4 class="mt-0">Acessar</h4>
                    <p class="text-muted mb-4">Entre com seu email e senha</p>

                    <!-- form -->
                                <?php
                                session_start();



                            // Verificar se o formulário foi submetido
                            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                                // Recuperar dados do formulário
                                $email = $_POST['email'];
                                $senha = $_POST['senha'];

                                // Consulta SQL para verificar se o usuário existe
                                $sql = "SELECT * FROM empresas WHERE login = '$email' AND password = '$senha'";
                                $result = $conn->query($sql);

                                if ($result->num_rows > 0) {
                                    session_start();
                                    $_SESSION['email'] = $email;
                                    // Usuário autenticado com sucesso
                                    // Redirecionar para a página de destino
                                    header("Location: page.php");
                                    exit();
                                } else {
                                    $error = "Credenciais inválidas. Por favor, tente novamente.";
                                }
                            }
                            ?>

                    <!-- Se houver erro, exibir mensagem de erro -->
                    <?php if(isset($error)): ?>
                        <div class="alert alert-danger"><?php echo $error; ?></div>
                    <?php endif; ?>

                    <!-- Se não houver erro, exibir o formulário de login -->
                   <!-- Adicione um ID ao formulário para referenciá-lo no JavaScript -->
<form id="loginForm" method="post">
    <div class="mb-3">
        <label for="emailaddress" class="form-label">Email</label>
        <input class="form-control" type="email" id="emailaddress" name="email" required="" placeholder="Enter your email">
    </div>
    <div class="mb-3">
        <label for="password" class="form-label">Senha</label>
        <input class="form-control" type="password" required="" id="password" name="senha" placeholder="Enter your password">
    </div>
    <div class="d-grid mb-0 text-center">
        <button id="loginButton" class="btn btn-primary" type="button"><i class="mdi mdi-login"></i> Log In </button>
    </div>
</form>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

<script>
    document.getElementById("loginButton").addEventListener("click", function() {
        var form = document.getElementById("loginForm");
        var formData = new FormData(form);

        var xhr = new XMLHttpRequest();
        xhr.open("POST", "<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>", true);
        xhr.onreadystatechange = function() {
            if (xhr.readyState == 4 && xhr.status == 200) {
                var response = xhr.responseText;
                if (response.indexOf("Credenciais inválidas") === -1) {
                    // Se não houver mensagem de erro, redirecione após um curto atraso
                    Swal.fire({
                        icon: 'success',
                        title: 'Login bem-sucedido!',
                        showConfirmButton: false,
                        timer: 1500
                    }).then(() => {
                        window.location.href = "page.php";
                    });
                } else {
                    // Se houver mensagem de erro, exiba o alerta de erro
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: 'Usuário ou Senha Invalidos'
                    });
                }
            }
        };
        xhr.send(formData);
    });
</script>


                    <!-- end form-->
                </div>

                <!-- Footer-->
                <footer class="footer footer-alt">
                    <p class="text-muted">Don't have an account? <a href="pages-register-2.html" class="text-muted ms-1"><b>Sign Up</b></a></p>
                </footer>

            </div> <!-- end .card-body -->
        </div>
        <!-- end auth-fluid-form-box-->

        <!-- Auth fluid right content -->
        <div class="auth-fluid-right text-center">
            <div class="auth-user-testimonial">
                <h2 class="mb-3">I love the color!</h2>
                <p class="lead"><i class="mdi mdi-format-quote-open"></i> It's a elegent templete. I love it very much! . <i class="mdi mdi-format-quote-close"></i>
                </p>
                <p>
                    - Hyper Admin User
                </p>
            </div> <!-- end auth-user-testimonial-->
        </div>
        <!-- end Auth fluid right content -->
    </div>
    <!-- end auth-fluid-->
    <?php  include ('./partials/footer-scripts.php') ?>

    <!-- App js -->
    <script src="assets/js/app.min.js"></script>

</body>

</html>