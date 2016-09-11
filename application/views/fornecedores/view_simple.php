<div id="main" class="container-fluid">

    <h3 class="page-header">Visualizar fornecedor</h3>

    <div class="row">
        <div class="col-md-2">
            <p><strong>ID</strong></p>
            <p><?= $forn_view['id'] ?></p>
        </div>

        <div class="col-md-2">
            <p><strong>Nome</strong></p>
            <p><?= $forn_view['nome'] ?></p>
        </div>

        <div class="col-md-2">
            <p><strong>CNPJ</strong></p>
            <p><?= $forn_view['cnpj'] ?></p>
        </div>
        <div class="col-md-2">
            <p><strong>Telefone</strong></p>
            <p><?= $forn_view['telefone'] ?></p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-2">
            <p><strong>Endereço</strong></p>
            <p><?= $end_view['logradouro'] ?></p>
        </div>
        <div class="col-md-2">
            <p><strong>Bairro</strong></p>
            <p><?= $end_view['bairro'] ?></p>
        </div>
        <div class="col-md-2">
            <p><strong>Cidade</strong></p>
            <p><?= $end_view['cidade'] ?></p>
        </div>
        <div class="col-md-2">
            <p><strong>Estado</strong></p>
            <p><?= $end_view['estado'] ?></p>
        </div>
    </div>

    <hr />
    <div id="actions" class="row">
        <div class="col-md-12">
            <a href="<?= base_url('fornecedores/edit/' . $forn_view['id']) ?>" class="btn btn-primary">Editar</a>
            <a href="<?= base_url('fornecedores') ?>" class="btn btn-default">Fechar</a>
        </div>
    </div>

</div>
