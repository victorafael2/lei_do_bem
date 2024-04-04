<?php // Verificar se a variável de sessão $_SESSION['email'] não está configurada
session_start();
if (!isset($_SESSION['email'])) {
    // Redirecionar para a página de login
    header("Location: index.php");
    exit();
}

?>


<?php  include ('./partials/html.php') ?>

    <head>
        <?php  include ("./partials/title-meta.php") ?>

        <?php  include ('./partials/head-css.php') ?>
    </head>

    <body>



        <!-- Begin page -->
        <div class="wrapper">

            <?php  include ('./partials/menu.php') ?>

            <!-- ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== -->

            <div class="content-page">
                <div class="content">

                    <!-- Start Content-->
                    <div class="container-fluid">

                        <?php
                                                        // Verificar se o parâmetro 'id' está presente na URL
                                if(isset($_GET['id'])) {
                                    // Pegar o valor do parâmetro 'id'
                                    $id = $_GET['id'];

                                    // Consulta SQL para buscar informações no banco de dados com base no 'id'
                                    $sql = "SELECT * FROM pages WHERE id = $id";

                                    // Executar a consulta
                                    $result = $conn->query($sql);

                                    if ($result->num_rows > 0) {
                                        // Se houver resultados, você pode processá-los aqui
                                        while($row = $result->fetch_assoc()) {
                                            // Dependendo dos dados do banco, você pode decidir qual página incluir
                                            // Vamos supor que você tenha uma coluna chamada 'pagina' que contenha o nome do arquivo a ser incluído
                                            $pagina = $row['endereco'];

                                            // Incluir a página com base no valor obtido do banco de dados
                                            include("./partials/paginas/$pagina");
                                        }
                                    } else {
                                        // echo "Nenhum resultado encontrado para o ID fornecido";
                                        include("./partials/paginas/page_title.php");
                                    }
                                } else {
                                    // echo "O parâmetro 'id' não está presente na URL";
                                    include("./partials/paginas/page-title.php");
                                }
                                ?>
                    </div>
                    <!-- container -->

                </div>
                <!-- content -->

                <?php  include ('./partials/footer.php') ?>

                <!-- <h2>Teste</h2> -->

            </div>

            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->

        </div>
        <!-- END wrapper -->

        <?php  include ('./partials/right-sidebar.php') ?>
        
        <?php  include ('./partials/footer-scripts.php') ?>

        <!-- App js -->
        <script src="assets/js/app.min.js"></script>

    </body>
</html> 