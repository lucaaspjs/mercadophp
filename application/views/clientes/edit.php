<div id="main" class="container-fluid">

    <h3 class="page-header">Editar cliente</h3>
    <form action="<?= base_url('clientes/edit') ?>" method="post">
        <div class="row">
            <div class="form-group col-md-1">
                <label for="id">ID</label>
                <input type="number" class="form-control" id="id" name="id" value = <?= $cli_edit['id'] ?> readonly>
            </div>
            <div class="form-group col-md-4">
                <label for="nome">Nome</label>
                <input type="text" class="form-control" id="nome" name="nome" value = <?= $cli_edit['nome'] ?>>
            </div>
            <div class="form-group col-md-3">
                <label for="cpf">CPF</label>
                <input type="text" class="form-control" id="cpf" name="cpf" value = <?= $cli_edit['cpf'] ?>>
            </div>
            <div class="form-group col-md-4">
                <label for="telefone">Telefone</label>
                <input type="text" class="form-control" id="telefone" name="telefone" value = <?= $cli_edit['telefone'] ?>>
            </div>
        </div>

        <div class="row">
            <div class="form-group col-md-4">
                <label for="renda">Renda</label>
                <input type="text" class="form-control" id="renda" name="renda" value = <?= $cli_edit['renda'] ?>>
            </div>
            <div class="form-group col-md-4">
                <label for="data_cadastro">Data de cadastro</label>
                <input type="text" class="form-control" id="data_cadastro" name="data_cadastro"
                       value = <?= $cli_edit['data_cadastro'] ?> readonly >
            </div>
            <div class="form-group col-md-4">
                <label for="endereco">Endereço</label>
                <select name="endereco_id" id="endereco" class="form-control">
                    <?php foreach ($ends_edit as $end) { ?>
                        <option value="<?= $end['id'] ?>" <?= $end['id'] == $cli_edit['endereco_id'] ? "selected" : "" ?>> <?= $end['name'] ?></option>
                    <?php } ?>
                </select>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <input type="hidden" name="submit" />
                <button type="submit" class="btn btn-primary">Atualizar</button>
                <a href="<?= base_url('clientes') ?>" class="btn btn-default">Cancelar</a>
            </div>
        </div>

    </form>
</div>