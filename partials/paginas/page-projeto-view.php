<?php
// Supondo que você já tenha uma conexão com o banco de dados estabelecida

// Verifica se o ID do projeto foi fornecido na URL
if (isset($_GET['id_projeto'])) {
    $id_projeto = $_GET['id_projeto'];

    // Consulta para buscar os detalhes do projeto com base no ID fornecido
    $sql = "SELECT * FROM projetos WHERE id = $id_projeto";
    $resultado = mysqli_query($conn, $sql);

    // Verifica se há resultados
    if (mysqli_num_rows($resultado) > 0) {
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


                    <?php include('forms/form_projeto.php') ?>

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
                                <a class="nav-link active show" id="v-pills-home-tab" data-bs-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">
                                    <i class="mdi mdi-home-variant d-md-none d-block"></i>
                                    <span class="d-none d-md-block">Recursos Humanos CLT</span>
                                </a>
                                <a class="nav-link" id="v-pills-profile-tab" data-bs-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">
                                    <i class="mdi mdi-account-circle d-md-none d-block"></i>
                                    <span class="d-none d-md-block">Serviços de Terceiro</span>
                                </a>
                                <a class="nav-link" id="v-pills-settings-tab" data-bs-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">
                                    <i class="mdi mdi-settings-outline d-md-none d-block"></i>
                                    <span class="d-none d-md-block">Material de Consumo</span>
                                </a>
                            </div>
                        </div> <!-- end col-->

                        <div class="col-sm-9">
                            <div class="tab-content" id="v-pills-tabContent">
                                <div class="tab-pane fade active show" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">

                                    <?php include('forms/form_rh.html') ?>

                                    <p>
                                        <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#list_rh" aria-expanded="false" aria-controls="collapseWidthExample">
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
                                <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">

                                    <?php include('forms/form_serv_terc.html') ?>


                                    <p>
                                        <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#list_terc" aria-expanded="false" aria-controls="collapseWidthExample">
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
                                <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">

                                    <?php include('forms/form_material.html') ?>

                                    <p>
                                        <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#list_material" aria-expanded="false" aria-controls="collapseWidthExample">
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
                    if (isset($_GET['id_projeto'])) {
                        $id_projeto = $_GET['id_projeto'];

                        // Consulta para buscar os detalhes do projeto com base no ID fornecido
                        $sql = "SELECT * FROM propriedade WHERE projeto_id = $id_projeto AND id = (SELECT MAX(id) FROM propriedade  WHERE projeto_id = $id_projeto)";
                        $resultado = mysqli_query($conn, $sql);

                        // Verifica se há resultados
                        if (mysqli_num_rows($resultado) >= 0) {
                            $projeto_propriedade = mysqli_fetch_assoc($resultado);
                            // Preencha os campos do formulário com os detalhes do projeto


                    ?>


                            <form action="#" method="post" id="form_patente">

                                <input class="form-control d-none" type="text" id="projeto_id" name="projeto_id" required value="<?php echo isset($id_projeto) ? $id_projeto : ''; ?>">

                                <label class="form-label" for="propriedade_intelectual">Decorrente da utilização dos incentivos, a empresa obteve concessão de patente, registro de cultivar ou outros direitos de propriedade intelectual em escritório de patentes no Brasil ou exterior ou está pleiteando?</label><br>
                                <select class="form-select" id="propriedade_intelectual" name="propriedade_intelectual">
                                    <option value="" <?php if (!isset($projeto_propriedade['propriedade_intelectual'])) echo 'selected'; ?>>Escolha uma opção</option>
                                    <option value="nao" <?php if (isset($projeto_propriedade['propriedade_intelectual']) && $projeto_propriedade['propriedade_intelectual'] == 'nao') echo 'selected'; ?>>Não</option>
                                    <option value="sim" <?php if (isset($projeto_propriedade['propriedade_intelectual']) && $projeto_propriedade['propriedade_intelectual'] == 'sim') echo 'selected'; ?>>Sim</option>
                                </select><br><br>

                                <label for="gastos">Gastos destinados ao registro e à manutenção de marcas, patentes e cultivares, ainda que pagos no exterior:</label><br>
                                <textarea id="gastos" name="gastos" cols="50" class="form-control" id="example-textarea" rows="5"><?php echo isset($projeto_propriedade['gastos']) ? $projeto_propriedade['gastos'] : ''; ?></textarea><br><br>

                                <label for="simpleinput" class="form-label">Valor</label>
                                <input type="text" id="valor" name="valor" class="form-control" value="<?php echo isset($projeto_propriedade['valor']) ? $projeto_propriedade['valor'] : ''; ?>"><br><br>

                                <input class="btn btn-success" id="btnSalvar" type="submit" value="Enviar">

                            </form>




                            <div id="tabela_projetos_patentes">
                            </div>


                    <?php
                        } else {
                            echo "Projeto não encontrado.";
                        }
                    } else {
                        echo "ID do projeto não fornecido.";
                    }
                    ?>

                </div>


                <div class="tab-pane " id="settings-b3">


                    <?php
                    // Supondo que você já tenha uma conexão com o banco de dados estabelecida

                    // Verifica se o ID do projeto foi fornecido na URL
                    if (isset($_GET['id_projeto'])) {
                        $id_projeto = $_GET['id_projeto'];

                        // Consulta para buscar os detalhes do projeto com base no ID fornecido
                        $sql = "SELECT * FROM financiamento WHERE projeto_id = $id_projeto AND id = (SELECT MAX(id) FROM financiamento  WHERE projeto_id = $id_projeto)";
                        $resultado = mysqli_query($conn, $sql);

                        // Verifica se há resultados
                        if (mysqli_num_rows($resultado) >= 0) {
                            $projeto_financiamento = mysqli_fetch_assoc($resultado);
                            // Preencha os campos do formulário com os detalhes do projeto
                    ?>
                            <form action="#" method="post" id="form_financiamento">

                                <input class="form-control d-none" type="text" id="projeto_id" name="projeto_id" required value="<?php echo isset($id_projeto) ? $id_projeto : ''; ?>">

                                <label for="example-select" class="form-label">Financiamento</label>
                                <select class="form-select" id="financiamento" name="financiamento">
                                    <option value="">Escolha uma opção</option>
                                    <option value="Finep" <?php if (isset($projeto_financiamento['financiamento']) && $projeto_financiamento['financiamento'] == 'Finep') echo 'selected'; ?>>Finep</option>
                                    <option value="FAP" <?php if (isset($projeto_financiamento['financiamento']) && $projeto_financiamento['financiamento'] == 'FAP') echo 'selected'; ?>>FAP</option>
                                    <option value="BNDES" <?php if (isset($projeto_financiamento['financiamento']) && $projeto_financiamento['financiamento'] == 'BNDES') echo 'selected'; ?>>BNDES</option>
                                    <option value="BNB" <?php if (isset($projeto_financiamento['financiamento']) && $projeto_financiamento['financiamento'] == 'BNB') echo 'selected'; ?>>BNB</option>
                                </select> <br><br>

                                <label for="simpleinput" class="form-label">Valor</label>
                                <input type="text" id="valor" name="valor" class="form-control" value="<?php echo isset($projeto_financiamento['valor']) ? $projeto_financiamento['valor'] : ''; ?>"><br><br>

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



                    <div id="tabela_projetos_financiamento">
                    </div>
                </div>



                <div class="tab-pane " id="equip-b4">



                    <div class="row">
                        <div class="col-sm-3 mb-2 mb-sm-0">
                            <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                <a class="nav-link active show" id="e_nacional-tab" data-bs-toggle="pill" href="#e_nacional" role="tab" aria-controls="e_nacional" aria-selected="true">
                                    <i class="mdi mdi-home-variant d-md-none d-block"></i>
                                    <span class="d-none d-md-block">Equipamento Nacional</span>
                                </a>
                                <a class="nav-link" id="e_importado-tab" data-bs-toggle="pill" href="#e_importado" role="tab" aria-controls="e_importado" aria-selected="false">
                                    <i class="mdi mdi-account-circle d-md-none d-block"></i>
                                    <span class="d-none d-md-block">Equipamento Importado</span>
                                </a>

                            </div>
                        </div> <!-- end col-->

                        <div class="col-sm-9">
                            <div class="tab-content" id="v-pills-tabContent">
                                <div class="tab-pane fade active show" id="e_nacional" role="tabpanel" aria-labelledby="e_nacional-tab">

                                    <form action="#" method="post" id="form_equipamento_nacional">

                                        <input class="form-control d-none" type="text" id="projeto_id" name="projeto_id" required value="<?php echo $id_projeto ?>">

                                        <label for="example-select" class="form-label">Identificação do Equipamento</label>
                                        <input type="text" class="form-control" id="n_equipamento_nacional" name="n_equipamento_nacional">

                                        </input> <br>
                                        <label for="example-select" class="form-label">Nº Nota Fiscal</label>
                                        <input type="text" class="form-control" id="nota_fiscal_equipamento_nacional" name="nota_fiscal_equipamento_nacional">

                                        </input> <br>

                                        <label for="simpleinput" class="form-label">Valor</label>
                                        <input type="text" id="valor_equipamento_nacional" name="valor_equipamento_nacional" class="form-control"><br>

                                        <label for="example-textarea" class="form-label">Especificação</label>
                                        <textarea class="form-control" id="especificacao_equipamento_nacional" name="especificacao_equipamento_nacional" rows="5"></textarea> <br>



                                        <input class="btn btn-success" id="btnSalvar" type="submit" value="Salvar">

                                    </form>

                                    <div id="tabela_projetos_equipamento_nacional">
                                    </div>


                                </div>
                                <div class="tab-pane fade" id="e_importado" role="tabpanel" aria-labelledby="e_importado-tab">


                                    <form action="#" method="post" id="form_equipamento_internacional">

                                        <input class="form-control d-none" type="text" id="projeto_id" name="projeto_id" required value="<?php echo $id_projeto ?>">

                                        <label for="example-select" class="form-label">Identificação do Equipamento</label>
                                        <input type="text" class="form-control" id="n_equipamento_internacional" name="n_equipamento_internacional">

                                        </input> <br>
                                        <label for="example-select" class="form-label">Nº Nota Fiscal</label>
                                        <input type="text" class="form-control" id="nota_fiscal_equipamento_internacional" name="nota_fiscal_equipamento_internacional">

                                        </input> <br>

                                        <label for="simpleinput" class="form-label">Valor</label>
                                        <input type="text" id="valor_equipamento_internacional" name="valor_equipamento_internacional" class="form-control"><br>

                                        <label for="example-textarea" class="form-label">Especificação</label>
                                        <textarea class="form-control" id="especificacao_equipamento_internacional" name="especificacao_equipamento_internacional" rows="5"></textarea> <br>



                                        <input class="btn btn-success" id="btnSalvar" type="submit" value="Salvar">

                                    </form>

                                    <div id="tabela_projetos_equipamento_internacional">
                                    </div>

                                </div>

                            </div> <!-- end tab-content-->
                        </div> <!-- end col-->
                    </div>
                    <!-- end row-->





                </div>


                <!-- Modal de Edição -->
                <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-full-width" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="editModalLabel">Editar Registro</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"></button>
                            </div>
                            <div class="modal-body">
                            <form id="rh_form">
                                            <div class="form-group row mb-2">
                                                <input class="form-control d-none" type="text" id="projeto_id"
                                                    name="projeto_id" required value="<?php echo $id_projeto?>">
                                                <label for="cpfField" class="col-sm-2 col-form-label">CPF:</label>
                                                <div class="col-sm-4">
                                                    <input class="form-control" type="text" id="cpfField" name="cpfField"
                                                        required>
                                                </div>

                                                <label for="nomeField" class="col-sm-2 col-form-label">Nome:</label>
                                                <div class="col-sm-4">
                                                    <input class="form-control" type="text" id="nomeField" name="nomeField"
                                                        required>
                                                </div>
                                            </div>

                                            <div class="form-group row mb-2">
                                                <label for="titulacaoField"
                                                    class="col-sm-2 col-form-label">Titulação:</label>
                                                <div class="col-sm-4">
                                                    <select class="form-control" id="titulacaoField" name="titulacaoField"
                                                        required>
                                                        <option value="">Selecione...</option>
                                                        <option value="">Selecione...</option>
                                                        <option value="Tecnólogo">Tecnólogo</option>
                                                        <option value="Técnico de Nível Médio">Técnico de Nível Médio
                                                        </option>
                                                        <option value="Graduado">Graduado</option>
                                                        <option value="Pós Graduado">Pós Graduado</option>
                                                        <option value="Mestre">Mestre</option>
                                                        <option value="Doutor">Doutor</option>
                                                    </select>
                                                </div>

                                                <label for="totalHorasField" class="col-sm-2 col-form-label">Total de Horas
                                                    -
                                                    mês:</label>
                                                <div class="col-sm-4">

                                                    <input type="text" class="form-control" id="totalHorasField"
                                                        name="totalHorasField" placeholder="hh:mm" required>

                                                </div>
                                            </div>

                                            <div class="form-group row mb-2">
                                                <label for="dedicacaoField"
                                                    class="col-sm-2 col-form-label">Dedicação:</label>
                                                <div class="col-sm-4">
                                                    <select class="form-control" id="dedicacaoField" name="dedicacaoField"
                                                        required>
                                                        <option value="">Selecione...</option>
                                                        <option value="Exclusiva">Exclusiva</option>
                                                        <option value="Parcial">Parcial</option>
                                                    </select>
                                                </div>

                                                <label for="horasDedicadasField" class="col-sm-2 col-form-label">Horas
                                                    Dedicadas:</label>
                                                <div class="col-sm-4">

                                                    <input type="text" class="form-control" id="horasDedicadasField"
                                                        name="horasDedicadasField" placeholder="hh:mm" required>
                                                </div>
                                            </div>

                                            <div class="form-group row mb-2">
                                                <label for="mesField" class="col-sm-2 col-form-label">Mês:</label>
                                                <div class="col-sm-4">
                                                    <select class="form-control" id="mesField" name="mesField" required>
                                                        <option value="">Selecione...</option>
                                                        <option value="Janeiro">Janeiro</option>
                                                        <option value="Fevereiro">Fevereiro</option>
                                                        <option value="Março">Março</option>
                                                        <option value="Abril">Abril</option>
                                                        <option value="Maio">Maio</option>
                                                        <option value="Junho">Junho</option>
                                                        <option value="Julho">Julho</option>
                                                        <option value="Agosto">Agosto</option>
                                                        <option value="Setembro">Setembro</option>
                                                        <option value="Outubro">Outubro</option>
                                                        <option value="Novembro">Novembro</option>
                                                        <option value="Dezembro">Dezembro</option>
                                                    </select>
                                                </div>

                                                <label for="salarioEncargosField" class="col-sm-2 col-form-label">Salário +
                                                    encargos
                                                    (filtro para os meses do ano):</label>
                                                <div class="col-sm-4">
                                                    <input class="form-control" type="text" id="salarioEncargosField"
                                                        name="salarioEncargosField" required>
                                                </div>
                                            </div>

                                            <div class="form-group row mb-2">

                                                <label for="cargo" class="col-sm-2 col-form-label">Cargo:</label>
                                                <div class="col-sm-4">
                                                    <input class="form-control" type="text" id="cargo" name="cargo"
                                                        required>
                                                </div>

                                                <label for="funcao" class="col-sm-2 col-form-label">Função:</label>
                                                <div class="col-sm-4">
                                                    <input class="form-control" type="text" id="funcao" name="funcao"
                                                        required>
                                                </div>


                                            </div>

                                            <div class="form-group row mb-2">

                                                <label for="funcionario_novo" class="col-sm-2 col-form-label">Funcionário Novo:</label>
                                                <div class="col-sm-4">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" id="funcionario_novo" name="funcionario_novo" value="novo" required>
                                                        <label class="form-check-label" for="funcionario_novo">Novo</label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" id="funcionario_desligado" name="funcionario_novo" value="desligado">
                                                        <label class="form-check-label" for="funcionario_desligado">Desligado</label>
                                                    </div>
                                                </div>



                                                <label for="dt_contratacao" class="col-sm-2 col-form-label">Data da Contratação:</label>
                                                <div class="col-sm-4">
                                                    <input class="form-control" type="date" id="dt_contratacao" name="dt_contratacao"
                                                        required>
                                                </div>


                                            </div>

                                            <div class="form-group row mt-2">
                                                <div class="col-sm-10 offset-sm-2">
                                                    <input class="btn btn-success" type="submit" value="Salvar">
                                                    <input class="btn btn-info" type="reset" value="Limpar">
                                                </div>
                                            </div>
                                        </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary" id="saveChangesButton">Salvar Alterações</button>
                            </div>
                        </div>
                    </div>
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
                                    var newRow = $('<tr>' +
                                        '<td>' + row.cpf + '</td>' +
                                        '<td>' + row.nome + '</td>' +
                                        '<td>' + row.titulacao + '</td>' +
                                        '<td>' + row.total_horas + '</td>' +
                                        '<td>' + row.dedicacao + '</td>' +
                                        '<td>' + row.horas_dedicadas + '</td>' +
                                        '<td>' + row.mes + '</td>' +
                                        '<td>' + row.salario_encargos + '</td>' +
                                        '<td><div class="btn-group" role="group">' +
                                        '<button type="button" class="btn btn-soft-info btn-sm editButton">Editar</button>' +
                                        '<button type="button" class="btn btn-soft-danger btn-sm deleteButton">Excluir</button>' +
                                        '</div></td>' +
                                        '</tr>');

                                    // Armazena o ID do registro como um atributo de dados nos botões
                                    newRow.find('.editButton').data('id', row.id);
                                    newRow.find('.deleteButton').data('id', row.id);

                                    // Adiciona a nova linha à tabela
                                    $('table tbody').append(newRow);

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


                    // Evento de clique no botão de edição
                    $('table').on('click', '.editButton', function() {
                        var id = $(this).data('id');
                        // AJAX para obter os dados do registro com o ID selecionado
                        $.ajax({
                            url: 'forms/list/list_rh_id.php', // Substitua 'get_record.php' pelo seu script PHP para obter os dados do registro
                            type: 'POST',
                            dataType: 'json',
                            data: {
                                id: id
                            },
                            success: function(data) {
                                // Preencher os campos do modal com os dados recebidos
                                $('#cpfField').val(data.cpf);
                                $('#nomeField').val(data.nome);
                                $('#titulacaoField').val(data.titulacao);
                                $('#totalHorasField').val(data.total_horas);
                                $('#dedicacaoField').val(data.dedicacao);
                                $('#horasDedicadasField').val(data.horas_dedicadas);
                                $('#mesField').val(data.mes);
                                $('#salarioEncargosField').val(data.salario_encargos);

                                // Abrir o modal de edição
                                $('#editModal').modal('show');
                            },
                            error: function(xhr, status, error) {
                                console.error(xhr.responseText);
                            }
                        });
                    });

                    // Evento de clique no botão de exclusão
                    $('table').on('click', '.deleteButton', function() {
                        var id = $(this).data('id');

                        // Confirmar com o usuário se deseja excluir o registro
                        if (confirm("Tem certeza que deseja excluir este registro?")) {
                            // AJAX para excluir o registro do banco de dados
                            $.ajax({
                                url: 'forms/delete/delete_rh.php', // Substitua 'delete_record.php' pelo seu script PHP para excluir o registro
                                type: 'POST',
                                data: {
                                    id: id
                                },
                                success: function(response) {
                                    // Atualizar a tabela após a exclusão
                                    updateTable();
                                },
                                error: function(xhr, status, error) {
                                    console.error(xhr.responseText);
                                }
                            });
                        }
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
                    updateTable_patente()
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
                                    updateTable_patente();
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

                function updateTable_patente() {
                    // Obter o ID do projeto
                    var id_projeto = $('#projeto_id').val();
                    // Fazer uma solicitação AJAX para buscar os dados atualizados do projeto
                    $.ajax({
                        type: 'GET',
                        url: 'forms/list/list_patente.php?id_projeto=' + id_projeto,
                        success: function(response) {
                            // Atualizar a tabela com os novos dados
                            $('#tabela_projetos_patentes').html(response);
                        },
                        error: function(xhr, status, error) {
                            console.error('Erro ao buscar dados do projeto:', error);
                        }
                    });
                }
            </script>


            <script>
                $(document).ready(function() {
                    updateTable_financiamento();
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
                                    updateTable_financiamento();
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

                function updateTable_financiamento() {
                    // Obter o ID do projeto
                    var id_projeto = $('#projeto_id').val();
                    // Fazer uma solicitação AJAX para buscar os dados atualizados do projeto
                    $.ajax({
                        type: 'GET',
                        url: 'forms/list/list_financiamento.php?id_projeto=' + id_projeto,
                        success: function(response) {
                            // Atualizar a tabela com os novos dados
                            $('#tabela_projetos_financiamento').html(response);
                        },
                        error: function(xhr, status, error) {
                            console.error('Erro ao buscar dados do projeto:', error);
                        }
                    });
                }
            </script>




            <script>
                // Função para formatar números com separador de milhares e vírgula como separador decimal
                function formatarNumero(numero) {
                    // Converte o número para uma string
                    var numeroString = numero.toString();
                    // Separa a parte inteira da parte decimal
                    var partes = numeroString.split('.');
                    var parteInteira = partes[0];
                    var parteDecimal = partes.length > 1 ? partes[1] : '';

                    // Adiciona o separador de milhares na parte inteira
                    parteInteira = parteInteira.replace(/\B(?=(\d{3})+(?!\d))/g, ".");

                    // Formata a parte decimal com duas casas decimais
                    parteDecimal = parteDecimal.length > 0 ? ',' + parteDecimal.padEnd(2, '0') : ',00';

                    // Retorna a concatenação da parte inteira com a parte decimal
                    return parteInteira + parteDecimal;
                }

                // Função para validar o campo de valor como decimal
                function validarDecimal(input) {
                    // Remove todos os pontos de milhares para evitar erros de validação
                    input.value = input.value.replace(/\./g, '');
                    // Substitui vírgulas por pontos
                    input.value = input.value.replace(/,/g, '.');

                    // Verifica se o valor inserido é um número válido
                    if (isNaN(input.value)) {
                        // Se não for um número válido, limpa o campo
                        input.value = '';
                        // Exibe uma mensagem de erro
                        alert("Por favor, insira um valor numérico válido.");
                        return;
                    }

                    // Formata o valor inserido com separador de milhares e duas casas decimais
                    input.value = formatarNumero(parseFloat(input.value).toFixed(2));
                }

                // Adiciona um ouvinte de evento para chamar a função de validação quando o campo perder o foco
                document.getElementById('valor_equipamento_nacional').addEventListener('blur', function() {
                    validarDecimal(this);
                });
            </script>

            <script>
                $(document).ready(function() {
                    updateTable_equipamento_nacional();
                    $('#form_equipamento_nacional').submit(function(e) {
                        e.preventDefault();
                        var formData = $(this).serialize();
                        $.ajax({
                            type: 'POST',
                            url: 'forms/save/save_equipamento_nacional.php',
                            data: formData,
                            success: function(response) {
                                Swal.fire({
                                    title: 'Sucesso!',
                                    text: 'O Equipamento foi salvo com sucesso.',
                                    icon: 'success',
                                    confirmButtonText: 'OK'
                                }).then(function() {
                                    // Chama a função updateTable() após o usuário fechar o SweetAlert2
                                    updateTable_equipamento_nacional();
                                });
                                // Limpar o formulário após o sucesso
                                $('#form_equipamento_nacional')[0].reset();
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

                function updateTable_equipamento_nacional() {
                    // Obter o ID do projeto
                    var id_projeto = $('#projeto_id').val();
                    // Fazer uma solicitação AJAX para buscar os dados atualizados do projeto
                    $.ajax({
                        type: 'GET',
                        url: 'forms/list/list_equipamentos_nacionais.php?id_projeto=' + id_projeto,
                        success: function(response) {
                            // Atualizar a tabela com os novos dados
                            $('#tabela_projetos_equipamento_nacional').html(response);
                        },
                        error: function(xhr, status, error) {
                            console.error('Erro ao buscar dados do projeto:', error);
                        }
                    });
                }
            </script>



            <script>
                // Função para formatar números com separador de milhares e vírgula como separador decimal
                function formatarNumero(numero) {
                    // Converte o número para uma string
                    var numeroString = numero.toString();
                    // Separa a parte inteira da parte decimal
                    var partes = numeroString.split('.');
                    var parteInteira = partes[0];
                    var parteDecimal = partes.length > 1 ? partes[1] : '';

                    // Adiciona o separador de milhares na parte inteira
                    parteInteira = parteInteira.replace(/\B(?=(\d{3})+(?!\d))/g, ".");

                    // Formata a parte decimal com duas casas decimais
                    parteDecimal = parteDecimal.length > 0 ? ',' + parteDecimal.padEnd(2, '0') : ',00';

                    // Retorna a concatenação da parte inteira com a parte decimal
                    return parteInteira + parteDecimal;
                }

                // Função para validar o campo de valor como decimal
                function validarDecimal(input) {
                    // Remove todos os pontos de milhares para evitar erros de validação
                    input.value = input.value.replace(/\./g, '');
                    // Substitui vírgulas por pontos
                    input.value = input.value.replace(/,/g, '.');

                    // Verifica se o valor inserido é um número válido
                    if (isNaN(input.value)) {
                        // Se não for um número válido, limpa o campo
                        input.value = '';
                        // Exibe uma mensagem de erro
                        alert("Por favor, insira um valor numérico válido.");
                        return;
                    }

                    // Formata o valor inserido com separador de milhares e duas casas decimais
                    input.value = formatarNumero(parseFloat(input.value).toFixed(2));
                }

                // Adiciona um ouvinte de evento para chamar a função de validação quando o campo perder o foco
                document.getElementById('valor_equipamento_internacional').addEventListener('blur', function() {
                    validarDecimal(this);
                });
            </script>

            <script>
                $(document).ready(function() {
                    updateTable_equipamento_internacional();
                    $('#form_equipamento_internacional').submit(function(e) {
                        e.preventDefault();
                        var formData = $(this).serialize();
                        $.ajax({
                            type: 'POST',
                            url: 'forms/save/save_equipamento_internacional.php',
                            data: formData,
                            success: function(response) {
                                Swal.fire({
                                    title: 'Sucesso!',
                                    text: 'O Equipamento foi salvo com sucesso.',
                                    icon: 'success',
                                    confirmButtonText: 'OK'
                                }).then(function() {
                                    // Chama a função updateTable() após o usuário fechar o SweetAlert2
                                    updateTable_equipamento_internacional();
                                });
                                // Limpar o formulário após o sucesso
                                $('#form_equipamento_internacional')[0].reset();
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

                function updateTable_equipamento_internacional() {
                    // Obter o ID do projeto
                    var id_projeto = $('#projeto_id').val();
                    // Fazer uma solicitação AJAX para buscar os dados atualizados do projeto
                    $.ajax({
                        type: 'GET',
                        url: 'forms/list/list_equipamentos_internacionais.php?id_projeto=' + id_projeto,
                        success: function(response) {
                            // Atualizar a tabela com os novos dados
                            $('#tabela_projetos_equipamento_internacional').html(response);
                        },
                        error: function(xhr, status, error) {
                            console.error('Erro ao buscar dados do projeto:', error);
                        }
                    });
                }
            </script>