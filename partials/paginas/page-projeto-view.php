<?php
// Supondo que você já tenha uma conexão com o banco de dados estabelecida

// Verifica se o ID do projeto foi fornecido na URL
if(isset($_GET['id_projeto'])) {
    $id_projeto = $_GET['id_projeto'];

    // Consulta para buscar os detalhes do projeto com base no ID fornecido
    $sql = "SELECT * FROM projetos WHERE id = $id_projeto";
    $resultado = mysqli_query($conn, $sql);

    // Verifica se há resultados
    if(mysqli_num_rows($resultado) > 0) {
        $projeto = mysqli_fetch_assoc($resultado);
        // Preencha os campos do formulário com os detalhes do projeto
?>




<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Lei do Bem</a></li>
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Projetos</a></li>
                    <li class="breadcrumb-item active">Projeto</li>
                </ol>
            </div>
            <h4 class="page-title">Projeto <?php echo $projeto['nome_projeto']; ?></h4>
        </div>
    </div>
</div>
<!-- end page title -->


<div class="row">

    <ul class="nav nav-tabs nav-justified nav-bordered mb-3">
        <li class="nav-item">
            <a href="#home-b2" data-bs-toggle="tab" aria-expanded="false" class="nav-link active">
                <i class="mdi mdi-home-variant d-md-none d-block"></i>
                <span class="d-none d-md-block">Projeto</span>
            </a>
        </li>
        <li class="nav-item">
            <a href="#profile-b2" data-bs-toggle="tab" aria-expanded="true" class="nav-link ">
                <i class="mdi mdi-account-circle d-md-none d-block"></i>
                <span class="d-none d-md-block">Dispêndios Lei do Bem</span>
            </a>
        </li>
        <li class="nav-item">
            <a href="#settings-b2" data-bs-toggle="tab" aria-expanded="false" class="nav-link">
                <i class="mdi mdi-settings-outline d-md-none d-block"></i>
                <span class="d-none d-md-block">Patentes/Registro Cultivar</span>
            </a>
        </li>
        <li class="nav-item">
            <a href="#settings-b3" data-bs-toggle="tab" aria-expanded="false" class="nav-link">
                <i class="mdi mdi-settings-outline d-md-none d-block"></i>
                <span class="d-none d-md-block">Fonte de Financiamento externo</span>
            </a>
        </li>
        <li class="nav-item">
            <a href="#equip-b4" data-bs-toggle="tab" aria-expanded="false" class="nav-link">
                <i class="mdi mdi-settings-outline d-md-none d-block"></i>
                <span class="d-none d-md-block">Equipamento</span>
            </a>
        </li>
    </ul>

    <div class="tab-content">
        <div class="tab-pane show active" id="home-b2">


            <?php include ('forms/form_projeto.php') ?>

            <?php
                        } else {
                            echo "Projeto não encontrado.";
                        }
                    } else {
                        echo "ID do projeto não fornecido.";
                    }
                    ?>

        </div>
        <div class="tab-pane " id="profile-b2">
            <!-- dispendio  -->

            <div class="row">
                <div class="col-sm-3 mb-2 mb-sm-0">
                    <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                        <a class="nav-link active show" id="v-pills-home-tab" data-bs-toggle="pill" href="#v-pills-home"
                            role="tab" aria-controls="v-pills-home" aria-selected="true">
                            <i class="mdi mdi-home-variant d-md-none d-block"></i>
                            <span class="d-none d-md-block">Recursos Humanos CLT</span>
                        </a>
                        <a class="nav-link" id="v-pills-profile-tab" data-bs-toggle="pill" href="#v-pills-profile"
                            role="tab" aria-controls="v-pills-profile" aria-selected="false">
                            <i class="mdi mdi-account-circle d-md-none d-block"></i>
                            <span class="d-none d-md-block">Serviços de Terceiro</span>
                        </a>
                        <a class="nav-link" id="v-pills-settings-tab" data-bs-toggle="pill" href="#v-pills-settings"
                            role="tab" aria-controls="v-pills-settings" aria-selected="false">
                            <i class="mdi mdi-settings-outline d-md-none d-block"></i>
                            <span class="d-none d-md-block">Material de Consumo</span>
                        </a>
                    </div>
                </div> <!-- end col-->

                <div class="col-sm-9">
                    <div class="tab-content" id="v-pills-tabContent">
                        <div class="tab-pane fade active show" id="v-pills-home" role="tabpanel"
                            aria-labelledby="v-pills-home-tab">

                            <?php include ('forms/form_rh.html') ?>

                            <p>
                                <button class="btn btn-primary" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#list_rh" aria-expanded="false"
                                    aria-controls="collapseWidthExample">
                                    Lista de Colaboradores
                                </button>
                            </p>
                            <div>
                                <div class="collapse " id="list_rh">
                                    <div class="card card-body mb-0">
                                        <button class="btn btn-sm btn-soft-primary" id="updateButton">Atualizar
                                            Tabela</button>
                                        <div class="table-responsive">
                                            <table class="table table-sm table-centered mb-0">
                                                <thead>
                                                    <tr>
                                                        <th>CPF</th>
                                                        <th>Nome</th>
                                                        <th>Titulação</th>
                                                        <th>Total de Horas</th>
                                                        <th>Dedicação</th>
                                                        <th>Horas Dedicadas</th>
                                                        <th>Mês</th>
                                                        <th>Salário + Encargos</th>

                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <!-- Aqui será preenchido com os dados da tabela via JavaScript -->
                                                </tbody>
                                            </table>
                                        </div>

                                    </div>
                                </div>
                            </div>


                        </div>
                        <div class="tab-pane fade" id="v-pills-profile" role="tabpanel"
                            aria-labelledby="v-pills-profile-tab">

                            <?php include ('forms/form_serv_terc.html') ?>


                            <p>
                                <button class="btn btn-primary" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#list_terc" aria-expanded="false"
                                    aria-controls="collapseWidthExample">
                                    Lista de Materiais
                                </button>
                            </p>

                            <div>
                                <div class="collapse " id="list_terc">
                                    <div class="card card-body mb-0">
                                        <button class="btn btn-sm btn-soft-primary" id="updateButton_terc">Atualizar
                                            Tabela</button>
                                        <div class="table-responsive">
                                            <table class="table table-sm table-centered mb-0" id="list_terc">
                                                <thead>
                                                    <tr>
                                                        <th>CPF</th>
                                                        <th>Nome</th>
                                                        <th>Tipo</th>
                                                        <th>Situação</th>


                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <!-- Aqui será preenchido com os dados da tabela via JavaScript -->
                                                </tbody>
                                            </table>
                                        </div>

                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="tab-pane fade" id="v-pills-settings" role="tabpanel"
                            aria-labelledby="v-pills-settings-tab">

                            <?php include ('forms/form_material.html') ?>

                            <p>
                                <button class="btn btn-primary" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#list_material" aria-expanded="false"
                                    aria-controls="collapseWidthExample">
                                    Lista de Materiais
                                </button>
                            </p>

                            <div>
                                <div class="collapse " id="list_material">
                                    <div class="card card-body mb-0">
                                        <button class="btn btn-sm btn-soft-primary" id="updateButton_material">Atualizar
                                            Tabela</button>
                                        <div class="table-responsive">
                                            <table class="table table-sm table-centered mb-0" id="list_material">
                                                <thead>
                                                    <tr>
                                                        <th>Descrição</th>
                                                        <th>Valor</th>
                                                        <th>Detalhe</th>



                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <!-- Aqui será preenchido com os dados da tabela via JavaScript -->
                                                </tbody>
                                            </table>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> <!-- end tab-content-->
                </div> <!-- end col-->
            </div>
            <!-- end row-->



















        </div>

        <div class="tab-pane " id="settings-b2">

            <?php
                        // Supondo que você já tenha uma conexão com o banco de dados estabelecida

                        // Verifica se o ID do projeto foi fornecido na URL
                        if(isset($_GET['id_projeto'])) {
                            $id_projeto = $_GET['id_projeto'];

                            // Consulta para buscar os detalhes do projeto com base no ID fornecido
                            $sql = "SELECT * FROM propriedade WHERE projeto_id = $id_projeto AND id = (SELECT MAX(id) FROM propriedade  WHERE projeto_id = $id_projeto)";
                            $resultado = mysqli_query($conn, $sql);

                            // Verifica se há resultados
                            if(mysqli_num_rows($resultado) > 0) {
                                $projeto_propriedade = mysqli_fetch_assoc($resultado);
                                // Preencha os campos do formulário com os detalhes do projeto


                        ?>


            <form action="#" method="post" id="form_patente">

                <input class="form-control d-none" type="text" id="projeto_id" name="projeto_id" required
                    value="<?php echo $id_projeto?>">

                <label class="form-label" for="propriedade_intelectual">Decorrente da utilização dos incentivos, a
                    empresa obteve concessão de patente, registro de cultivar ou outros direitos de propriedade
                    intelectual em escritório de patentes no Brasil ou exterior ou está pleiteando?</label><br>
                <select class="form-select" id="propriedade_intelectual" name="propriedade_intelectual">
                    <option value="nao"
                        <?php if($projeto_propriedade['propriedade_intelectual'] == 'nao') echo 'selected'; ?>>Não
                    </option>
                    <option value="sim"
                        <?php if($projeto_propriedade['propriedade_intelectual'] == 'sim') echo 'selected'; ?>>Sim
                    </option>
                </select><br><br>

                <label for="gastos">Gastos destinados ao registro e à manutenção de marcas, patentes e cultivares, ainda
                    que pagos no exterior:</label><br>
                <textarea id="gastos" name="gastos" cols="50" class="form-control" id="example-textarea"
                    rows="5"><?php echo $projeto_propriedade['gastos']; ?></textarea><br><br>

                <label for="simpleinput" class="form-label">Valor</label>
                <input type="text" id="valor" name="valor" class="form-control"
                    value="<?php echo $projeto_propriedade['valor']; ?>"><br><br>

                <input class="btn btn-success" id="btnSalvar" type="submit" value="Enviar">

            </form>
        </div>

        <?php
                        } else {
                            echo "Projeto não encontrado.";
                        }
                    } else {
                        echo "ID do projeto não fornecido.";
                    }
                    ?>




    <div class="tab-pane " id="settings-b3">


        <?php
                    // Supondo que você já tenha uma conexão com o banco de dados estabelecida

                    // Verifica se o ID do projeto foi fornecido na URL
                    if(isset($_GET['id_projeto'])) {
                        $id_projeto = $_GET['id_projeto'];

                        // Consulta para buscar os detalhes do projeto com base no ID fornecido
                        $sql = "SELECT * FROM financiamento WHERE projeto_id = $id_projeto AND id = (SELECT MAX(id) FROM financiamento  WHERE projeto_id = $id_projeto)";
                        $resultado = mysqli_query($conn, $sql);

                        // Verifica se há resultados
                        if(mysqli_num_rows($resultado) >= 0) {
                            $projeto_financiamento = mysqli_fetch_assoc($resultado);
                            // Preencha os campos do formulário com os detalhes do projeto


                    ?>
        <form action="#" method="post" id="form_financiamento">

            <input class="form-control d-none" type="text" id="projeto_id" name="projeto_id" required
                value="<?php echo $id_projeto?>">

            <label for="example-select" class="form-label">Financiamento</label>
            <select class="form-select" id="financiamento" name="financiamento">
                <option value="Finep">Finep</option>
                <option value="FAP">FAP</option>
                <option value="BNDES">BNDES</option>
                <option value="BNB">BNB</option>
            </select> <br><br>

            <label for="simpleinput" class="form-label">Valor</label>
            <input type="text" id="valor" name="valor" class="form-control"
                value="<?php echo $projeto_financiamento['valor']; ?>"><br><br>

            <input class="btn btn-success" id="btnSalvar" type="submit" value="Enviar">

        </form>

        <?php
                                } else {
                                    echo "Projeto não encontrado.";
                                }
                            } else {
                                echo "ID do projeto não fornecido.";
                            }
                            ?>
    </div>



    <div class="tab-pane " id="equip-b4">



    <div class="row">
    <div class="col-sm-3 mb-2 mb-sm-0">
        <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
            <a class="nav-link active show" id="v-pills-home-tab" data-bs-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home"
                aria-selected="true">
                <i class="mdi mdi-home-variant d-md-none d-block"></i>
                <span class="d-none d-md-block">Equipamento Nacional</span>
            </a>
            <a class="nav-link" id="v-pills-profile-tab" data-bs-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile"
                aria-selected="false">
                <i class="mdi mdi-account-circle d-md-none d-block"></i>
                <span class="d-none d-md-block">Equipamento Importado</span>
            </a>

        </div>
    </div> <!-- end col-->

    <div class="col-sm-9">
        <div class="tab-content" id="v-pills-tabContent">
            <div class="tab-pane fade active show" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                <p class="mb-0">...</p>
            </div>
            <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                <p class="mb-0">...</p>
            </div>

        </div> <!-- end tab-content-->
    </div> <!-- end col-->
</div>
<!-- end row-->





    </div>




    </div>

    <script>
    $(document).ready(function() {
        $('#formProjeto').submit(function(e) {
            e.preventDefault();
            var formData = $(this).serialize();
            $.ajax({
                type: 'POST',
                url: 'forms/save/editar_projetos.php',
                data: formData,
                success: function(response) {
                    Swal.fire({
                        title: 'Sucesso!',
                        text: 'O projeto foi atualizado com sucesso.',
                        icon: 'success',
                        confirmButtonText: 'OK'
                    }).then(function() {
                        // Chama a função updateTable() após o usuário fechar o SweetAlert2
                        updateTable();
                    });
                    // Limpar o formulário após o sucesso
                    $('#formProjeto')[0].reset();
                    // Não é necessário recarregar a página, pois já estamos atualizando a tabela
                },
                error: function(xhr, status, error) {
                    Swal.fire({
                        title: 'Erro!',
                        text: 'Ocorreu um erro ao atualizar o projeto.',
                        icon: 'error',
                        confirmButtonText: 'OK'
                    });
                }
            });
        });
    });
    </script>




    <script>
    $(document).ready(function() {
        // Obtenha o valor do id_projeto da página atual
        var id_projeto = <?php echo json_encode($id_projeto); ?>;

        // Função para carregar e atualizar a tabela
        function updateTable() {
            $.ajax({
                url: 'partials/paginas/forms/list_rh.php',
                type: 'POST',
                dataType: 'json',
                data: {
                    id_projeto: id_projeto
                }, // Passa o valor do id_projeto via POST
                success: function(data) {
                    // Limpa a tabela antes de preencher com os novos dados
                    $('table tbody').empty();

                    // Preenche a tabela com os dados recebidos
                    $.each(data, function(index, row) {
                        $('table tbody').append('<tr>' +
                            '<td>' + row.cpf + '</td>' +
                            '<td>' + row.nome + '</td>' +
                            '<td>' + row.titulacao + '</td>' +
                            '<td>' + row.total_horas + '</td>' +
                            '<td>' + row.dedicacao + '</td>' +
                            '<td>' + row.horas_dedicadas + '</td>' +
                            '<td>' + row.mes + '</td>' +
                            '<td>' + row.salario_encargos + '</td>' +

                            '</tr>');
                    });
                },
                error: function(xhr, status, error) {
                    console.error(xhr.responseText);
                }
            });
        }

        // Chame a função updateTable() quando a página carregar
        updateTable();

        // Adicione um evento de clique ao botão para atualizar a tabela
        $('#updateButton').click(function() {
            updateTable(); // Chama a função para atualizar a tabela
        });
    });
    </script>


    <script>
    $(document).ready(function() {
        // Obtenha o valor do id_projeto da página atual
        var id_projeto = <?php echo json_encode($id_projeto); ?>;

        // Função para carregar e atualizar a tabela
        function updateTable_terc() {
            // Seleciona a tabela com a id 'list_terc'
            var tabela = $('#list_terc');

            $.ajax({
                url: 'partials/paginas/forms/list_terc.php',
                type: 'POST',
                dataType: 'json',
                data: {
                    id_projeto: id_projeto
                }, // Passa o valor do id_projeto via POST
                success: function(data) {
                    // Limpa a tabela antes de preencher com os novos dados
                    tabela.find('tbody').empty();

                    // Preenche a tabela com os dados recebidos
                    $.each(data, function(index, row) {
                        tabela.find('tbody').append('<tr>' +
                            '<td>' + row.cpf_cnpj + '</td>' +
                            '<td>' + row.nome + '</td>' +
                            '<td>' + row.tipo + '</td>' +
                            '<td>' + row.situacao + '</td>' +

                            '</tr>');
                    });
                },
                error: function(xhr, status, error) {
                    console.error(xhr.responseText);
                }
            });
        }

        // Chame a função updateTable() quando a página carregar
        updateTable_terc();

        // Adicione um evento de clique ao botão para atualizar a tabela
        $('#updateButton_terc').click(function() {
            updateTable_terc(); // Chama a função para atualizar a tabela
        });
    });
    </script>


    <script>
    $(document).ready(function() {
        // Obtenha o valor do id_projeto da página atual
        var id_projeto = <?php echo json_encode($id_projeto); ?>;

        // Função para carregar e atualizar a tabela
        function updateTable_material() {
            // Seleciona a tabela com a id 'list_terc'
            var tabela = $('#list_material');

            $.ajax({
                url: 'partials/paginas/forms/list_material.php',
                type: 'POST',
                dataType: 'json',
                data: {
                    id_projeto: id_projeto
                }, // Passa o valor do id_projeto via POST
                success: function(data) {
                    // Limpa a tabela antes de preencher com os novos dados
                    tabela.find('tbody').empty();

                    // Preenche a tabela com os dados recebidos
                    $.each(data, function(index, row) {
                        tabela.find('tbody').append('<tr>' +
                            '<td>' + row.descricao + '</td>' +
                            '<td>' + row.valor + '</td>' +
                            '<td>' + row.detail + '</td>' +


                            '</tr>');
                    });
                },
                error: function(xhr, status, error) {
                    console.error(xhr.responseText);
                }
            });
        }

        // Chame a função updateTable() quando a página carregar
        updateTable_material();

        // Adicione um evento de clique ao botão para atualizar a tabela
        $('#updateButton_material').click(function() {
            updateTable_material(); // Chama a função para atualizar a tabela
        });
    });
    </script>



    <script>
    $(document).ready(function() {
        $('#form_patente').submit(function(e) {
            e.preventDefault();
            var formData = $(this).serialize();
            $.ajax({
                type: 'POST',
                url: 'forms/save/save_patente.php',
                data: formData,
                success: function(response) {
                    Swal.fire({
                        title: 'Sucesso!',
                        text: 'O projeto foi atualizado com sucesso.',
                        icon: 'success',
                        confirmButtonText: 'OK'
                    }).then(function() {
                        // Chama a função updateTable() após o usuário fechar o SweetAlert2
                        updateTable();
                    });
                    // Limpar o formulário após o sucesso
                    $('#form_patente')[0].reset();
                    // Não é necessário recarregar a página, pois já estamos atualizando a tabela
                },
                error: function(xhr, status, error) {
                    Swal.fire({
                        title: 'Erro!',
                        text: 'Ocorreu um erro ao atualizar o projeto.',
                        icon: 'error',
                        confirmButtonText: 'OK'
                    });
                }
            });
        });
    });
    </script>


    <script>
    $(document).ready(function() {
        $('#form_financiamento').submit(function(e) {
            e.preventDefault();
            var formData = $(this).serialize();
            $.ajax({
                type: 'POST',
                url: 'forms/save/save_financiamento.php',
                data: formData,
                success: function(response) {
                    Swal.fire({
                        title: 'Sucesso!',
                        text: 'O projeto foi atualizado com sucesso.',
                        icon: 'success',
                        confirmButtonText: 'OK'
                    }).then(function() {
                        // Chama a função updateTable() após o usuário fechar o SweetAlert2
                        updateTable();
                    });
                    // Limpar o formulário após o sucesso
                    $('#form_financiamento')[0].reset();
                    // Não é necessário recarregar a página, pois já estamos atualizando a tabela
                },
                error: function(xhr, status, error) {
                    Swal.fire({
                        title: 'Erro!',
                        text: 'Ocorreu um erro ao atualizar o projeto.',
                        icon: 'error',
                        confirmButtonText: 'OK'
                    });
                }
            });
        });
    });
    </script>