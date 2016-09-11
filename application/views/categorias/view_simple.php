<div id="main" class="container-fluid">

    <h3 class="page-header">Visualizar categoria</h3>

    <div class="row">
        <div class="col-md-5">
            <p><strong>ID</strong></p>
            <p><?= $cat_view['id'] ?></p>
        </div>

        <div class="col-md-7">
            <p><strong>Nome</strong></p>
            <p><?= $cat_view['nome'] ?></p>
        </div>
    </div>
    <hr />
    <div id="actions" class="row">
        <div class="col-md-12">
            <a href="<?= base_url('categorias/edit/' . $cat_view['id']) ?>" class="btn btn-primary">Editar</a>
            <a href="<?= base_url('categorias') ?>" class="btn btn-default">Fechar</a>
        </div>
    </div>

</div>
