<div id="main" class="container-fluid">

    <h3 class="page-header">Adicionar produto</h3>

    <form action="<?= base_url('produtos/add') ?>" method="post">
        <div class="row">
            <div class="form-group col-md-2">
                <label for="descricao">Descrição</label>
                <input type="text" class="form-control" id="descricao" name="descricao" placeholder="Digite a descrição">
            </div>
            <div class="form-group col-md-2">
                <label for="categoria">Categoria</label>
                <select name="categoria_id" id="categoria" class="form-control">
                    <?php foreach ($cat_edit as $cat) { ?>
                        <option value="<?= $cat['id'] ?>"> <?= $cat['nome'] ?></option>
                    <?php } ?>
                </select>
            </div>
            <div class="form-group col-md-2">
                <label for="fonecedor">Fornecedor</label>
                <select name="fornecedor_id" id="fornecedor" class="form-control">
                    <?php foreach ($forn_edit as $forn) { ?>
                        <option value="<?= $forn['id'] ?>"> <?= $forn['nome'] ?></option>
                    <?php } ?>
                </select>
            </div>
            <div class="form-group col-md-2">
                <label for="quantidade">Quantidade</label>
                <input type="text" class="form-control" id="quantidade" name="quantidade" placeholder="Digite a quantidade">
            </div>
            <div class="form-group col-md-4">
                <label for="valor">Valor</label>
                <input type="text" class="form-control" id="valor" name="valor" placeholder="Digite o valor" >
            </div>
        </div>

        <hr />

        <div class="row">
            <div class="col-md-12">
                <input type="hidden" name="submit" />
                <button type="submit" class="btn btn-primary">Salvar</button>
                <a href="<?= base_url('produtos') ?>" class="btn btn-default">Cancelar</a>
            </div>
        </div>

    </form>
</div>
