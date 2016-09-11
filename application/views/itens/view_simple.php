<div id="main" class="container-fluid">

    <h3 class="page-header">Visualizar funcionário</h3>

    <div class="row">
        <div class="col-md-3">
            <p><strong>ID</strong></p>
            <p><?= $func_view['id'] ?></p>
        </div>
        <div class="col-md-3">
            <p><strong>Nome</strong></p>
            <p><?= $func_view['nome'] ?></p>
        </div>
        <div class="col-md-3">
            <p><strong>Entrada</strong></p>
            <p><?= $func_view['entrada'] ?></p>
        </div>
        <div class="col-md-3">
            <p><strong>Telefone</strong></p>
            <p><?= $func_view['telefone'] ?></p>
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

    <div class="row"> 
        <div class="col-md-3">
            <p><strong>Cargo</strong></p>
            <p><?= $cargo_view['descricao'] ?></p>
        </div>
        
        <div class="col-md-3">
            <p><strong>Salário</strong></p>
            <p><?= $cargo_view['salario'] ?></p>
        </div>
    </div>
    <hr />
    <div id="actions" class="row">
        <div class="col-md-12">
            <a href="<?= base_url('funcionarios/edit/' . $func_view['id']) ?>" class="btn btn-primary">Editar</a>
            <a href="<?= base_url('funcionarios') ?>" class="btn btn-default">Fechar</a>
        </div>
    </div>

</div>
