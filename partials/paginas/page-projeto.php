<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Lei do Bem</a></li>
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Projetos</a></li>
                    <li class="breadcrumb-item active">Adicionar Projeto</li>
                </ol>
            </div>
            <h4 class="page-title">Projetos</h4>
        </div>
    </div>
</div>
<!-- end page title -->


<div class="row">


<form id="formProjeto">

<?php
// Conexão com o banco de dados




// Query para selecionar as opções do banco de dados
$sql = "SELECT id, company_name FROM empresas";
$result = $conn->query($sql);
?>

<label for="empresa">Empresa:</label><br>
<select class="form-control" id="tipo_projeto" name="tipo_projeto">
    <?php
    if ($result->num_rows > 0) {
        // Iterar sobre os resultados da consulta
        while ($row = $result->fetch_assoc()) {
            // Gerar as opções com base nos dados do banco de dados
            echo '<option value="' . $row['id'] . '">' . $row['company_name'] . '</option>';
        }
    } else {
        echo '<option value="">Nenhuma empresa encontrada</option>';
    }
    ?>
</select><br>

<?php
// Fechar conexão com o banco de dados
$conn->close();
?>



<label for="ano_base">Ano Base:</label><br>
<select class="form-control" id="ano_mes_base" name="ano_mes_base">
    <option value="">Selecione o ano</option>
    <?php
        $ano_atual = date("Y");
        for ($ano = $ano_atual; $ano >= $ano_atual - 20; $ano--) {
            echo "<option value='$ano'>$ano</option>";
        }
    ?>
</select><br>


        <label for="nome_projeto">Nome do Projeto:</label><br>
        <input class="form-control"  type="text" id="nome_projeto" name="nome_projeto"><br>

        <label for="detalhamento_projeto">Detalhamento do Projeto:</label><br>
        <textarea class="form-control"  id="detalhamento_projeto" name="detalhamento_projeto" rows="5" cols="50"></textarea><br>

        <label for="tipo_projeto">Tipo:</label><br>
        <select class="form-control"  id="tipo_projeto" name="tipo_projeto">
            <option value="pesquisa_basica">Pesquisa Básica</option>
            <option value="pesquisa_aplicada">Pesquisa Aplicada</option>
            <option value="desenvolvimento_experimental">Desenvolvimento Experimental</option>
        </select><br>

        <label for="area_projeto">Área do Projeto:</label><br>
        <input class="form-control"  type="text" id="area_projeto" name="area_projeto"><br>

        <label for="natureza_projeto">Natureza:</label><br>
        <select class="form-control"  id="natureza_projeto" name="natureza_projeto">
            <option value="produto">Produto</option>
            <option value="processo">Processo</option>
            <option value="servico">Serviço</option>
        </select><br>

        <label for="palavras_chave">Palavras-Chave:</label><br>
        <input class="form-control"  type="text" id="palavras_chave" name="palavras_chave"><br>

        <label for="elemento_tecnologico">Elemento Tecnológico Inovador:</label><br>
        <textarea class="form-control"  type="text" id="elemento_tecnologico" name="elemento_tecnologico" rows="5" cols="50"></textarea><br>

        <label for="metodologia">Metodologia:</label><br>
        <textarea class="form-control"  id="metodologia" name="metodologia" rows="5" cols="50"></textarea><br>

        <label for="barreiras_desafios">Barreiras/Desafios Tecnológicos:</label><br>
        <textarea class="form-control"  id="barreiras_desafios" name="barreiras_desafios" rows="5" cols="50"></textarea><br>

        <label for="plurianual">Plurianual:</label><br>
        <select class="form-control"  id="plurianual" name="plurianual">
            <option value="sim">Sim</option>
            <option value="nao">Não</option>
        </select><br>

        <label for="data_inicio">Data de Início:</label><br>
        <input class="form-control"  type="date" id="data_inicio" name="data_inicio"><br>

        <label for="data_termino">Data de Término:</label><br>
        <input class="form-control"  type="date" id="data_termino" name="data_termino"><br>

        <label for="resultados_economicos">Resultados Esperados Econômicos:</label><br>
        <textarea class="form-control"  id="resultados_economicos" name="resultados_economicos" rows="5" cols="50"></textarea><br>

        <label for="resultados_inovacao">Resultados Esperados Inovação:</label><br>
        <textarea class="form-control"  id="resultados_inovacao" name="resultados_inovacao" rows="5" cols="50"></textarea><br>

        <input class="btn btn-primary" type="submit" value="Enviar">
    </form>


</div>



<script>
        $(document).ready(function(){
            $('#formProjeto').submit(function(e){
                e.preventDefault();
                var formData = $(this).serialize();
                $.ajax({
                    type: 'POST',
                    url: 'forms/save/save_projetos.php',
                    data: formData,
                    success: function(response){
                        Swal.fire({
                            title: 'Sucesso!',
                            text: 'O projeto foi cadastrado com sucesso.',
                            icon: 'success',
                            confirmButtonText: 'OK'
                        });
                        // Limpar o formulário após o sucesso
                        $('#formProjeto')[0].reset();
                    },
                    error: function(xhr, status, error){
                        Swal.fire({
                            title: 'Erro!',
                            text: 'Ocorreu um erro ao cadastrar o projeto.',
                            icon: 'error',
                            confirmButtonText: 'OK'
                        });
                    }
                });
            });
        });
    </script>