<div id="main" class="container-fluid">

    <h3 class="page-header">Visualizar endereço</h3>

    <div class="row">
        <div class="col-md-4">
            <p><strong>ID</strong></p>
            <p><?= $user_view['id'] ?></p>
        </div>

        <div class="col-md-4">
            <p><strong>CEP</strong></p>
            <p><?= $user_view['cep'] ?></p>
        </div>

        <div class="col-md-4">
            <p><strong>Logradouro</strong></p>
            <p><?= $user_view['logradouro'] ?></p>
        </div>
    </div>

    <div class="row">
        <div class="col-md-4">
            <p><strong>Bairro</strong></p>
            <p><?= $user_view['bairro'] ?></p>
        </div>

        <div class="col-md-4">
            <p><strong>Cidade</strong></p>
            <p><?= $user_view['cidade'] ?></p>
        </div>

        <div class="col-md-4">
            <p><strong>Estado</strong></p>
            <p><?= $user_view['estado'] ?></p>
        </div>
    </div>
    <hr />
    <div id="actions" class="row">
        <div class="col-md-12">
            <a href="<?= base_url('enderecos/edit/' . $user_view['id']) ?>" class="btn btn-primary">Editar</a>
            <a href="<?= base_url('enderecos') ?>" class="btn btn-default">Fechar</a>
        </div>
    </div>

</div>
