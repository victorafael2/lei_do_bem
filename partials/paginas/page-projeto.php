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
        <label for="ano_base">Ano Base:</label><br>
        <input type="text" id="ano_base" name="ano_base"><br>

        <label for="nome_projeto">Nome do Projeto:</label><br>
        <input type="text" id="nome_projeto" name="nome_projeto"><br>

        <label for="detalhamento_projeto">Detalhamento do Projeto:</label><br>
        <textarea id="detalhamento_projeto" name="detalhamento_projeto" rows="5" cols="50"></textarea><br>

        <label for="tipo_projeto">Tipo:</label><br>
        <select id="tipo_projeto" name="tipo_projeto">
            <option value="pesquisa_basica">Pesquisa Básica</option>
            <option value="pesquisa_aplicada">Pesquisa Aplicada</option>
            <option value="desenvolvimento_experimental">Desenvolvimento Experimental</option>
        </select><br>

        <label for="area_projeto">Área do Projeto:</label><br>
        <input type="text" id="area_projeto" name="area_projeto"><br>

        <label for="natureza_projeto">Natureza:</label><br>
        <select id="natureza_projeto" name="natureza_projeto">
            <option value="produto">Produto</option>
            <option value="processo">Processo</option>
            <option value="servico">Serviço</option>
        </select><br>

        <label for="palavras_chave">Palavras-Chave:</label><br>
        <input type="text" id="palavras_chave" name="palavras_chave"><br>

        <label for="elemento_tecnologico">Elemento Tecnológico Inovador:</label><br>
        <input type="text" id="elemento_tecnologico" name="elemento_tecnologico"><br>

        <label for="metodologia">Metodologia:</label><br>
        <textarea id="metodologia" name="metodologia" rows="5" cols="50"></textarea><br>

        <label for="barreiras_desafios">Barreiras/Desafios Tecnológicos:</label><br>
        <textarea id="barreiras_desafios" name="barreiras_desafios" rows="5" cols="50"></textarea><br>

        <label for="plurianual">Plurianual:</label><br>
        <select id="plurianual" name="plurianual">
            <option value="sim">Sim</option>
            <option value="nao">Não</option>
        </select><br>

        <label for="data_inicio">Data de Início:</label><br>
        <input type="date" id="data_inicio" name="data_inicio"><br>

        <label for="data_termino">Data de Término:</label><br>
        <input type="date" id="data_termino" name="data_termino"><br>

        <label for="resultados_economicos">Resultados Esperados Econômicos:</label><br>
        <textarea id="resultados_economicos" name="resultados_economicos" rows="5" cols="50"></textarea><br>

        <label for="resultados_inovacao">Resultados Esperados Inovação:</label><br>
        <textarea id="resultados_inovacao" name="resultados_inovacao" rows="5" cols="50"></textarea><br>

        <input type="submit" value="Enviar">
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