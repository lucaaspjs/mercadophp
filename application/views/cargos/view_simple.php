<div id="main" class="container-fluid">

    <h3 class="page-header">Visualizar cargo</h3>

    <div class="row">
        <div class="col-md-4">
            <p><strong>ID</strong></p>
            <p><?= $cargo_view['id'] ?></p>
        </div>

        <div class="col-md-4">
            <p><strong>Descrição</strong></p>
            <p><?= $cargo_view['descricao'] ?></p>
        </div>

        <div class="col-md-4">
            <p><strong>Salário</strong></p>
            <p><?= $cargo_view['salario'] ?></p>
        </div>
    </div>
    <hr />
    <div id="actions" class="row">
        <div class="col-md-12">
            <a href="<?= base_url('cargos/edit/' . $cargo_view['id']) ?>" class="btn btn-primary">Editar</a>
            <a href="<?= base_url('cargos') ?>" class="btn btn-default">Fechar</a>
        </div>
    </div>

</div>
