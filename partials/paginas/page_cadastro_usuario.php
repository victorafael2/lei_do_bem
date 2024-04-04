<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Lei do Bem</a></li>
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Cadastro de Usuário</a></li>
                    <li class="breadcrumb-item active">Cadastro de Usuário</li>
                </ol>
            </div>
            <h4 class="page-title">Novo Usuário</h4>
        </div>
    </div>
</div>
<!-- end page title -->


<div class="row">

    <h2>Novo Usuário</h2>
    <form id="formEmpresa">
        <label for="username">Nome de Usuário:</label><br>
        <input class="form-control" type="text" id="username" name="username"><br>

        <label for="cpf">CPF:</label><br>
        <input class="form-control" type="text" id="cpf" name="cpf"><br>

        <label for="company_name">Nome da Empresa:</label><br>
        <input class="form-control" type="text" id="company_name" name="company_name"><br>

        <label for="cnpj">CNPJ:</label><br>
        <input class="form-control" type="text" id="cnpj" name="cnpj"><br>

        <label for="organization_type">Tipo de Organismo:</label><br>
        <select class="form-control" id="organization_type" name="organization_type">
            <option value="publico">Público</option>
            <option value="privado">Privado</option>
            <option value="misto">Misto</option>
        </select><br>

        <label for="company_status">Situação da Empresa:</label><br>
        <select class="form-control" id="company_status" name="company_status">
            <option value="em_operacao">Em Operação</option>
            <option value="fusao_ou_cisao_total">Fusão ou Cisão Total</option>
            <option value="incorporacao">Incorporação de/por Empresa</option>
            <option value="cisao_parcial">Cisão Parcial</option>
            <option value="alteracao_cnpj">Alteração de CNPJ por Motivos Distintos</option>
        </select><br>

        <label for="capital_origin">Origem do Capital Controlador da Empresa:</label><br>
        <select class="form-control" id="capital_origin" name="capital_origin">
            <option value="nacional">Nacional</option>
            <option value="estrangeiro">Estrangeiro</option>
            <option value="misto">Misto</option>
        </select><br>

        <label for="relationship_group">Relação com o Grupo:</label><br>
        <select class="form-control" id="relationship_group" name="relationship_group">
            <option value="controladora">Controladora</option>
            <option value="controlada">Controlada</option>
            <option value="coligada">Coligada</option>
            <option value="independente">Independente</option>
        </select><br>

        <label for="total_employees">Número Total de Funcionários:</label><br>
        <input class="form-control" type="number" id="total_employees" name="total_employees" required><br>

        <label for="fiscal_incentives">A empresa se beneficia dos incentivos fiscais previstos na Lei no 8.248/1991?</label><br>
        <select class="form-control" id="fiscal_incentives" name="fiscal_incentives">
            <option value="nao">Não</option>
            <option value="sim">Sim</option>
        </select><br>

        <label for="login">Login (email)</label><br>
        <input class="form-control" type="email" id="login" name="login"><br>

        <label for="password">Senha:</label><br>
        <input class="form-control" type="password" id="password" name="password"><br>

        <input class="btn btn-sm btn-soft-success mt-2" type="submit" value="Enviar">
    </form>



</div>




<script>
        $(document).ready(function(){
            $('#formEmpresa').submit(function(e){
                e.preventDefault();
                var formData = $(this).serialize();
                $.ajax({
                    type: 'POST',
                    url: 'forms/save/save_empresa.php',
                    data: formData,
                    success: function(response){
                        Swal.fire({
                            title: 'Sucesso!',
                            text: 'Os dados foram salvos com sucesso.',
                            icon: 'success',
                            confirmButtonText: 'OK'
                        });
                        // Limpar o formulário após o sucesso
                        $('#formEmpresa')[0].reset();
                    },
                    error: function(xhr, status, error){
                        Swal.fire({
                            title: 'Erro!',
                            text: 'Ocorreu um erro ao salvar os dados.',
                            icon: 'error',
                            confirmButtonText: 'OK'
                        });
                    }
                });
            });
        });
    </script>