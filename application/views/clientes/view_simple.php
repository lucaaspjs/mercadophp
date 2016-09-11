<div id="main" class="container-fluid">

    <h3 class="page-header">Visualizar cliente</h3>

    <div class="row">
        <div class="col-md-3">
            <p><strong>ID</strong></p>
            <p><?= $cli_view['id'] ?></p>
        </div>

        <div class="col-md-3">
            <p><strong>Nome</strong></p>
            <p><?= $cli_view['nome'] ?></p>
        </div>

        <div class="col-md-3">
            <p><strong>CPF</strong></p>
            <p><?= $cli_view['cpf'] ?></p>
        </div>
    </div>

    <div class="row">
        <div class="col-md-3">
            <p><strong>Telefone</strong></p>
            <p><?= $cli_view['telefone'] ?></p>
        </div>

        <div class="col-md-3">
            <p><strong>Renda</strong></p>
            <p><?= $cli_view['renda'] ?></p>
        </div>

        <div class="col-md-3">
            <p><strong>Data de cadastro</strong></p>
            <p><?= $cli_view['data_cadastro'] ?></p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-3">
            <p><strong>Endereço</strong></p>
            <p><?= $end_view['logradouro'] ?></p>
        </div>
        <div class="col-md-3">
            <p><strong>Bairro</strong></p>
            <p><?= $end_view['bairro'] ?></p>
        </div>
        <div class="col-md-3">
            <p><strong>Cidade</strong></p>
            <p><?= $end_view['cidade'] ?></p>
        </div>
        <div class="col-md-3">
            <p><strong>Estado</strong></p>
            <p><?= $end_view['estado'] ?></p>
        </div>
    </div>
    <hr />
    <div id="actions" class="row">
        <div class="col-md-12">
            <a href="<?= base_url('clientes/edit/' . $cli_view['id']) ?>" class="btn btn-primary">Editar</a>
            <a href="<?= base_url('clientes') ?>" class="btn btn-default">Fechar</a>
        </div>
    </div>

</div>
