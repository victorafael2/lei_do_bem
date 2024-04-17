

<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Lei do Bem</a></li>
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Home</a></li>
                    <li class="breadcrumb-item active">Lista de Projetos</li>
                </ol>
            </div>
            <h4 class="page-title">Lista de Projetos</h4>
        </div>
    </div>
</div>
<!-- end page title -->


<div class="row">

    <div class="table-responsive">


    <?php
// Supondo que você já tenha uma conexão com o banco de dados estabelecida

// Consulta para selecionar os projetos do banco de dados
$sql = "SELECT * FROM projetos";
$resultado = mysqli_query($conn, $sql);

// Verifica se existem resultados
if (mysqli_num_rows($resultado) > 0) {
    ?>
    <table class="table table-centered table-nowrap mb-0">
        <thead class="table-light">
            <tr>
                <th style="width: 20px;">
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="customCheck1">
                        <label class="form-check-label" for="customCheck1">&nbsp;</label>
                    </div>
                </th>
                <th>ID</th>
                <th>Nome do Projeto</th>
                <th>Tipo do Projeto</th>
                <th>Natureza do Projeto</th>
                <th>Data Inicio</th>
                <th>Data Fim</th>
                <th style="width: 125px;">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            // Loop através dos resultados do banco de dados
            while ($row = mysqli_fetch_assoc($resultado)) {
                ?>
                <tr>
                    <td>
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="customCheck2">
                            <label class="form-check-label" for="customCheck2">&nbsp;</label>
                        </div>
                    </td>
                    <td><a href="apps-ecommerce-orders-details.html" class="text-body fw-bold">#<?php echo $row['id']; ?></a> </td>
                    <td>
                        <?php echo $row['nome_projeto']; ?>
                    </td>
                    <td>
                        <h5><span class="badge badge-success-lighten"><i class="mdi mdi-bitcoin"></i> <?php echo $row['tipo_projeto']; ?></span></h5>
                    </td>
                    <td>
                        <?php echo $row['natureza_projeto']; ?>
                    </td>
                    <td>
                    <h5><span class="badge badge-info-lighten"><?php echo $row['data_inicio']; ?></span></h5>
                    </td>
                    <td>
                        <h5><span class="badge badge-info-lighten"><?php echo $row['data_termino']; ?></span></h5>
                    </td>
                    <td>
    <a href="#" class="action-icon view-project" data-project-id="<?php echo $row['id']; ?>"> <i class="mdi mdi-eye"></i></a>
    <a href="#" class="action-icon edit-project" data-project-id="<?php echo $row['id']; ?>"> <i class="mdi mdi-square-edit-outline"></i></a>
    <a href="#" class="action-icon delete-project" data-project-id="<?php echo $row['id']; ?>"> <i class="mdi mdi-delete"></i></a>
</td>

                </tr>
            <?php } ?>
        </tbody>
    </table>
<?php
} else {
    // Se não houver resultados no banco de dados
    echo "Nenhum projeto encontrado.";
}
?>



    </div>


</div>



<script>
    $(document).ready(function() {
        // Evento de clique para visualizar o projeto
        $('.view-project').click(function(e) {
            e.preventDefault();
            var projectId = $(this).data('project-id');
            // Redirecionar para a página de detalhes do projeto com o ID do projeto
            window.location.href = 'page.php?id=4&id_projeto=' + projectId;
        });

        // Evento de clique para editar o projeto
        $('.edit-project').click(function(e) {
            e.preventDefault();
            var projectId = $(this).data('project-id');
            // Redirecionar para a página de edição do projeto com o ID do projeto
            window.location.href = 'edit_project.php?id=' + projectId;
        });

        // Evento de clique para excluir o projeto
        $('.delete-project').click(function(e) {
            e.preventDefault();
            var projectId = $(this).data('project-id');
            if (confirm('Tem certeza de que deseja excluir este projeto?')) {
                // Aqui você pode enviar uma solicitação AJAX para excluir o projeto com o ID projectId
                // Exemplo de solicitação AJAX usando jQuery:
                // $.post('delete_project.php', { id: projectId }, function(response) {
                //     if (response.success) {
                //         // Atualizar a tabela ou redirecionar para a página principal, etc.
                //     } else {
                //         alert('Erro ao excluir o projeto.');
                //     }
                // });
            }
        });
    });
</script>
