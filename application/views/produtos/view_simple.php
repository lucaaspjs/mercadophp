<div id="main" class="container-fluid">

    <h3 class="page-header">Visualizar produto</h3>

    <div class="row">
        <div class="col-md-3">
            <p><strong>ID</strong></p>
            <p><?= $prod_view['id'] ?></p>
        </div>

        <div class="col-md-3">
            <p><strong>Descrição</strong></p>
            <p><?= $prod_view['descricao'] ?></p>
        </div>

        <div class="col-md-3">
            <p><strong>Quantidade</strong></p>
            <p><?= $prod_view['quantidade'] ?></p>
        </div>
        
        <div class="col-md-3">
            <p><strong>Valor</strong></p>
            <p><?= $prod_view['valor'] ?></p>
        </div>

    </div>

    <div class="row">
        <div class="col-md-3">
            <p><strong>Categoria</strong></p>
            <p><?= $cat_view['nome'] ?></p>
        </div>

        <div class="col-md-3">
            <p><strong>Fornecedor</strong></p>
            <p><?= $forn_view['nome'] ?></p>
        </div>

        <div class="col-md-3">
            <p><strong>CNPJ do fornecedor</strong></p>
            <p><?= $forn_view['cnpj'] ?></p>
        </div>
        <div class="col-md-3">
            <p><strong>Telefone do fornecedor</strong></p>
            <p><?= $forn_view['telefone'] ?></p>
        </div>
    </div>
    <hr />
    <div id="actions" class="row">
        <div class="col-md-12">
            <a href="<?= base_url('produtos/edit/' . $prod_view['id']) ?>" class="btn btn-primary">Editar</a>
            <a href="<?= base_url('produtos') ?>" class="btn btn-default">Fechar</a>
        </div>
    </div>

</div>
