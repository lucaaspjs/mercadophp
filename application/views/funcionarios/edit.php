<div id="main" class="container-fluid">

    <h3 class="page-header">Editar funcionário</h3>
    <form action="<?= base_url('funcionarios/edit') ?>" method="post">
        <div class="row">
            <div class="form-group col-md-1">
                <label for="id">ID</label>
                <input type="number" class="form-control" id="id" name="id" value = <?= $func_edit['id'] ?> readonly>
            </div>
            <div class="form-group col-md-6">
                <label for="nome">Nome</label>
                <input type="text" class="form-control" id="nome" name="nome" value = <?= $func_edit['nome'] ?>>
            </div>
            <div class="form-group col-md-5">
                <label for="entrada">Entrada</label>
                <input type="text" class="form-control" id="entrada" name="entrada"
                       value = <?= $func_edit['entrada'] ?> readonly>
            </div>

        </div>

        <div class="row">
            <div class="form-group col-md-4">
                <label for="telefone">Telefone</label>
                <input type="text" class="form-control" id="telefone" name="telefone" value = <?= $func_edit['telefone'] ?>>
            </div>
            <div class="form-group col-md-4">
                <label for="cargo">Cargo</label>
                <select name="cargo_id" id="cargo" class="form-control">
                    <?php foreach ($cargos_edit as $cargo) { ?>
                        <option value="<?= $cargo['id'] ?>" <?= $cargo['id'] == $func_edit['endereco_id'] ? "selected" : "" ?>> <?= $cargo['name'] ?></option>
                    <?php } ?>
                </select>
            </div>
            <div class="form-group col-md-4">
                <label for="endereco">Endereço</label>
                <select name="endereco_id" id="endereco" class="form-control">
                    <?php foreach ($ends_edit as $end) { ?>
                        <option value="<?= $end['id'] ?>" <?= $end['id'] == $func_edit['endereco_id'] ? "selected" : "" ?>> <?= $end['name'] ?></option>
                    <?php } ?>
                </select>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <input type="hidden" name="submit" />
                <button type="submit" class="btn btn-primary">Atualizar</button>
                <a href="<?= base_url('funcionarios') ?>" class="btn btn-default">Cancelar</a>
            </div>
        </div>

    </form>
</div>