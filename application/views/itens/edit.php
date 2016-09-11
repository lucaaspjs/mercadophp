<div id="main" class="container-fluid">

    <h3 class="page-header">Editar Itens</h3>
    <form action="<?= base_url('itens/edit') ?>" method="post">
        <div class="row">
            <div class="form-group col-md-4">
                <label for="id">ID</label>
                <input type="number" class="form-control" id="id" name="id" value = <?= $item_edit['id'] ?> readonly>
            </div>
            <div class="form-group col-md-4">
                <label for="quantidade">Quantidade</label>
                <input type="text" class="form-control" id="quantidade" name="quantidade" value = <?= $item_edit['quantidade'] ?>>
            </div>
            <div class="form-group col-md-4">
                <label for="valor_total">Valor Total</label>
                <input type="text" class="form-control" id="valor_total" name="valor_total"
                       value = <?= $item_edit['valor_total'] ?> readonly>
            </div>

        </div>

        <div class="row">
            <div class="col-md-12">
                <input type="hidden" name="submit" value="submit" />
                <input type="hidden" name="pedido_id" value="<?= $item_edit['pedido_id'] ?>" />
                <input type="hidden" name="produto_id" value="<?= $item_edit['produto_id'] ?>" />
                <input type="hidden" name="valor_unitario" value="<?= $item_edit['valor_unitario'] ?>" />
                <button type="submit" class="btn btn-primary">Atualizar</button>
                <a href="<?= base_url('itens') ?>" class="btn btn-default">Cancelar</a>
            </div>
        </div>

    </form>
</div>