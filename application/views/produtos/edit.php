<div id="main" class="container-fluid">

    <h3 class="page-header">Editar produto</h3>
    <form action="<?= base_url('produtos/edit') ?>" method="post">
        <div class="row">
            <div class="form-group col-md-1">
                <label for="id">ID</label>
                <input type="number" class="form-control" id="id" name="id" value = <?= $prod_edit['id'] ?> readonly>
            </div>
            <div class="form-group col-md-2">
                <label for="descricao">Descrição</label>
                <input type="text" class="form-control" id="descricao" name="descricao"
                       value = <?= $prod_edit['descricao'] ?>>
            </div>
            <div class="form-group col-md-2">
                <label for="fonecedor">Fornecedor</label>
                <select name="fornecedor_id" id="fornecedor" class="form-control">
                    <?php foreach ($forn_edit as $forn) { ?>
                        <option value="<?= $forn['id'] ?>"  <?= $forn['id'] == $prod_edit['fornecedor_id'] ? "selected" : "" ?>> <?= $forn['nome'] ?></option>
                    <?php } ?>
                </select>
            </div>
            <div class="form-group col-md-2">
                <label for="categoria">Categoria</label>
                <select name="categoria_id" id="categoria" class="form-control">
                    <?php foreach ($cat_edit as $cat) { ?>
                        <option value="<?= $cat['id'] ?>"  <?= $cat['id'] == $prod_edit['categoria_id'] ? "selected" : "" ?>> <?= $cat['nome'] ?></option>
                    <?php } ?>
                </select>
            </div>
            <div class="form-group col-md-2">
                <label for="quantidade">Quantidade</label>
                <input type="text" class="form-control" id="quantidade" name="quantidade"
                       value = <?= $prod_edit['quantidade'] ?>>
            </div>
            <div class="form-group col-md-2">
                <label for="valor">Valor</label>
                <input type="text" class="form-control" id="valor" name="valor" value = <?= $prod_edit['valor'] ?> >
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <input type="hidden" name="submit" />
                <button type="submit" class="btn btn-primary">Atualizar</button>
                <a href="<?= base_url('produtos') ?>" class="btn btn-default">Cancelar</a>
            </div>
        </div>

    </form>
</div>