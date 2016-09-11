<div id="main" class="container-fluid">

    <h3 class="page-header">Editar fornecedor</h3>
    <form action="<?= base_url('fornecedores/edit') ?>" method="post">
        <div class="row">
            <div class="form-group col-md-1">
                <label for="id">ID</label>
                <input type="number" class="form-control" id="id" name="id" value = <?= $forn_edit['id'] ?> readonly>
            </div>
            <div class="form-group col-md-3">
                <label for="nome">Nome</label>
                <input type="text" class="form-control" id="nome" name="nome" value = <?= $forn_edit['nome'] ?>>
            </div>
            <div class="form-group col-md-2">
                <label for="cnpj">CNPJ</label>
                <input type="text" class="form-control" id="cnpj" name="cnpj" value = <?= $forn_edit['cnpj'] ?>>
            </div>
            <div class="form-group col-md-3">
                <label for="telefone">Telefone</label>
                <input type="text" class="form-control" id="telefone" name="telefone" value = <?= $forn_edit['telefone'] ?>>
            </div>

            <div class="form-group col-md-3">
                <label for="endereco">Endereço</label>
                <select name="endereco_id" id="endereco" class="form-control">
                    <?php foreach ($ends_edit as $end) { ?>
                        <option value="<?= $end['id'] ?>" <?= $end['id'] == $forn_edit['endereco_id'] ? "selected" : "" ?>> <?= $end['name'] ?></option>
                    <?php } ?>
                </select>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <input type="hidden" name="submit" />
                <button type="submit" class="btn btn-primary">Atualizar</button>
                <a href="<?= base_url('fornecedores') ?>" class="btn btn-default">Cancelar</a>
            </div>
        </div>

    </form>
</div>