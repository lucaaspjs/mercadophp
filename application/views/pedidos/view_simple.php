<div id="main" class="container-fluid">

    <h3 class="page-header">Visualizar pedido</h3>

    <div class="row">
        <div class="col-md-3">
            <p><strong>ID</strong></p>
            <p><?= $ped_view['id'] ?></p>
        </div>

        <div class="col-md-3">
            <p><strong>Data de cadastro</strong></p>
            <p><?= $ped_view['data_cadastro'] ?></p>
        </div>

    </div>
    <div class="row">
        <div class="col-md-3">
            <p><strong>Funcionário</strong></p>
            <p><?= $func_view['nome'] ?></p>
        </div>

        <div class="col-md-3">
            <p><strong>Telefone do Funcionário</strong></p>
            <p><?= $func_view['telefone'] ?></p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-3">
            <p><strong>Cliente</strong></p>
            <p><?= $cli_view['nome'] ?></p>
        </div>
        <div class="col-md-3">
            <p><strong>CPF do Cliente</strong></p>
            <p><?= $cli_view['cpf'] ?></p>
        </div>
        <div class="col-md-3">
            <p><strong>Telefone do Cliente</strong></p>
            <p><?= $cli_view['telefone'] ?></p>
        </div>
    </div>
    <hr />
    <div id="actions" class="row">
        <div class="col-md-12">
            <a href="<?= base_url('pedidos') ?>" class="btn btn-default">Fechar</a>
        </div>
    </div>

</div>
