<div id="main" class="container-fluid">

    <h3 class="page-header">Adicionar Itens</h3>

    <form action="<?= base_url('itens/add') ?>" method="post">
        <div class="row">
            <div class="form-group col-md-4">
                <label for="pedido">Pedido</label>
                <select name="pedido_id" id="cargo" class="form-control">
                    <?php foreach ($ped_edit as $temp) { ?>
                        <option value="<?= $temp['id'] ?>"> <?= $temp['nome'] ?></option>
                    <?php } ?>
                </select>
            </div>

            <div class="form-group col-md-4">
                <label for="produto">Produto</label>
                <select name="produto_id" id="produto" class="form-control">
                    <?php foreach ($prod_edit as $temp) { ?>
                        <option value="<?= $temp['id'] ?>"> <?= $temp['nome'] ?></option>
                    <?php } ?>
                </select>
            </div>

            <div class="form-group col-md-4">
                <label for="quantidade">Quantidade</label>
                <input type="text" class="form-control" id="quantidade" name="quantidade"
                       placeholder="Digite a quantidade">
            </div>
        </div>

        <hr />

        <div class="row">
            <div class="col-md-12">
                <input type="hidden" name="submit" />
                <button type="submit" class="btn btn-primary">Salvar</button>
                <a href="<?= base_url('itens') ?>" class="btn btn-default">Cancelar</a>
            </div>
        </div>

    </form>
</div>
