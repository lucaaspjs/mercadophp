<div id="main" class="container-fluid">

    <h3 class="page-header">Adicionar funcionário</h3>

    <form action="<?= base_url('funcionarios/add') ?>" method="post">
        <div class="row">
            <div class="form-group col-md-4">
                <label for="nome">Nome</label>
                <input type="text" class="form-control" id="nome" name="nome" placeholder="Digite o nome">
            </div>
            <div class="form-group col-md-4">
                <label for="entrada">Entrada</label>
                <input type="text" class="form-control" id="entrada" name="entrada"
                       value="<?= date("d/m/Y") ?>" readonly>
            </div>
            <div class="form-group col-md-4">
                <label for="telefone">Telefone</label>
                <input type="text" class="form-control" id="telefone" name="telefone" placeholder="Digite o telefone">
            </div>
        </div>

        <div class="row">
            <div class="form-group col-md-4">
                <label for="cargo">Cargo</label>
                <select name="cargo_id" id="cargo" class="form-control">
                    <?php foreach ($cargos_edit as $cargo) { ?>
                        <option value="<?= $cargo['id'] ?>"> <?= $cargo['name'] ?></option>
                    <?php } ?>
                </select>
            </div>
            <div class="form-group col-md-8">
                <label for="endereco">Endereço</label>
                <select name="endereco_id" id="endereco" class="form-control">
                    <?php foreach ($ends_edit as $end) { ?>
                        <option value="<?= $end['id'] ?>"> <?= $end['name'] ?></option>
                    <?php } ?>
                </select>
            </div>
        </div>

        <hr />

        <div class="row">
            <div class="col-md-12">
                <input type="hidden" name="submit" />
                <button type="submit" class="btn btn-primary">Salvar</button>
                <a href="<?= base_url('funcionarios') ?>" class="btn btn-default">Cancelar</a>
            </div>
        </div>

    </form>
</div>
