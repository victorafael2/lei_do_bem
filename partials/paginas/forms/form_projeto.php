<form id="formProjeto">

                <input class="form-control d-none" type="text" id="id_projeto" name="id_projeto"
                    value="<?php echo $projeto['id']; ?>"><br>


                <label for="ano_mes_base">Ano Base:</label><br>
                <input class="form-control" type="month" id="ano_mes_base" name="ano_mes_base"
                    value="<?php echo $projeto['ano_base']; ?>"><br>

                <label for="nome_projeto">Nome do Projeto:</label><br>
                <input class="form-control" type="text" id="nome_projeto" name="nome_projeto"
                    value="<?php echo $projeto['nome_projeto']; ?>"><br>

                <label for="detalhamento_projeto">Detalhamento do Projeto:</label><br>
                <textarea class="form-control" id="detalhamento_projeto" name="detalhamento_projeto" rows="5"
                    cols="50"><?php echo $projeto['detalhamento_projeto']; ?></textarea><br>

                <label for="tipo_projeto">Tipo:</label><br>
                <select class="form-control" id="tipo_projeto" name="tipo_projeto">
                    <option value="pesquisa_basica"
                        <?php if($projeto['tipo_projeto'] == 'pesquisa_basica') echo 'selected'; ?>>Pesquisa Básica
                    </option>
                    <option value="pesquisa_aplicada"
                        <?php if($projeto['tipo_projeto'] == 'pesquisa_aplicada') echo 'selected'; ?>>Pesquisa Aplicada
                    </option>
                    <option value="desenvolvimento_experimental"
                        <?php if($projeto['tipo_projeto'] == 'desenvolvimento_experimental') echo 'selected'; ?>>
                        Desenvolvimento Experimental</option>
                </select><br>

                <label for="area_projeto">Área do Projeto:</label><br>
                <input class="form-control" type="text" id="area_projeto" name="area_projeto"
                    value="<?php echo $projeto['area_projeto']; ?>"><br>

                <label for="natureza_projeto">Natureza:</label><br>
                <select class="form-control" id="natureza_projeto" name="natureza_projeto">
                    <option value="produto" <?php if($projeto['natureza_projeto'] == 'produto') echo 'selected'; ?>>
                        Produto</option>
                    <option value="processo" <?php if($projeto['natureza_projeto'] == 'processo') echo 'selected'; ?>>
                        Processo</option>
                    <option value="servico" <?php if($projeto['natureza_projeto'] == 'servico') echo 'selected'; ?>>
                        Serviço</option>
                </select><br>

                <label for="palavras_chave">Palavras-Chave:</label><br>
                <input class="form-control" type="text" id="palavras_chave" name="palavras_chave"
                    value="<?php echo $projeto['palavras_chave']; ?>"><br>

                <label for="elemento_tecnologico">Elemento Tecnológico Inovador:</label><br>
                <textarea class="form-control" type="text" id="elemento_tecnologico" name="elemento_tecnologico"
                    rows="5" cols="50"><?php echo $projeto['elemento_tecnologico']; ?></textarea><br>

                <label for="metodologia">Metodologia:</label><br>
                <textarea class="form-control" id="metodologia" name="metodologia" rows="5"
                    cols="50"><?php echo $projeto['metodologia']; ?></textarea><br>

                <label for="barreiras_desafios">Barreiras/Desafios Tecnológicos:</label><br>
                <textarea class="form-control" id="barreiras_desafios" name="barreiras_desafios" rows="5"
                    cols="50"><?php echo $projeto['barreiras_desafios']; ?></textarea><br>

                <label for="plurianual">Plurianual:</label><br>
                <select class="form-control" id="plurianual" name="plurianual">
                    <option value="sim" <?php if($projeto['plurianual'] == 'sim') echo 'selected'; ?>>Sim</option>
                    <option value="nao" <?php if($projeto['plurianual'] == 'nao') echo 'selected'; ?>>Não</option>
                </select><br>

                <label for="data_inicio">Data de Início:</label><br>
                <input class="form-control" type="date" id="data_inicio" name="data_inicio"
                    value="<?php echo $projeto['data_inicio']; ?>"><br>

                <label for="data_termino">Data de Término:</label><br>
                <input class="form-control" type="date" id="data_termino" name="data_termino"
                    value="<?php echo $projeto['data_termino']; ?>"><br>

                <label for="resultados_economicos">Resultados Esperados Econômicos:</label><br>
                <textarea class="form-control" id="resultados_economicos" name="resultados_economicos" rows="5"
                    cols="50"><?php echo $projeto['resultados_economicos']; ?></textarea><br>

                <label for="resultados_inovacao">Resultados Esperados Inovação:</label><br>
                <textarea class="form-control" id="resultados_inovacao" name="resultados_inovacao" rows="5"
                    cols="50"><?php echo $projeto['resultados_inovacao']; ?></textarea><br>

                <input type="submit" class="btn btn-primary mb-2" value="Editar">
            </form>



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
                });
                // Limpar o formulário após o sucesso
                $('#formProjeto')[0].reset();
                // Recarregar a página após o sucesso
                window.location.reload();
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