<div id="main" class="container-fluid">

    <h3 class="page-header">Adicionar pedido</h3>

    <form action="<?= base_url('pedidos/add') ?>" method="post">
        <div class="row">
            <div class="form-group col-md-4">
                <label for="funcionario">Funcionário</label>
                <select name="funcionario_id" id="funcionario" class="form-control">
                    <?php foreach ($func_edit as $end) { ?>
                        <option value="<?= $end['id'] ?>"> <?= $end['nome'] ?></option>
                    <?php } ?>
                </select>
            </div>
            <div class="form-group col-md-4">
                <label for="cliente">Cliente</label>
                <select name="cliente_id" id="cliente" class="form-control">
                    <?php foreach ($cli_edit as $end) { ?>
                        <option value="<?= $end['id'] ?>"> <?= $end['nome'] ?></option>
                    <?php } ?>
                </select>
            </div>
            <div class="form-group col-md-4">
                <label for="data">Data de cadastro</label>
                <input type="text" class="form-control" id="data" name="data_cadastro"
                       value =<?= date("Y-m-d H:i:s") ?> readonly>
            </div>
        </div>

        <hr />

        <div class="row">
            <div class="col-md-12">
                <input type="hidden" name="submit" />
                <button type="submit" class="btn btn-primary">Salvar</button>
                <a href="<?= base_url('pedidos') ?>" class="btn btn-default">Cancelar</a>
            </div>
        </div>

    </form>
</div>
