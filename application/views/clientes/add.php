<div id="main" class="container-fluid">

    <h3 class="page-header">Adicionar cliente</h3>

    <form action="<?= base_url('clientes/add') ?>" method="post">
        <div class="row">
            <div class="form-group col-md-4">
                <label for="nome">Nome</label>
                <input type="text" class="form-control" id="nome" name="nome" placeholder="Digite o nome">
            </div>
            <div class="form-group col-md-4">
                <label for="cpf">CPF</label>
                <input type="text" class="form-control" id="cpf" name="cpf" placeholder="Digite o CPF">
            </div>
            <div class="form-group col-md-4">
                <label for="telefone">Telefone</label>
                <input type="text" class="form-control" id="telefone" name="telefone" placeholder="Digite o telefone">
            </div>
        </div>

        <div class="row">
            <div class="form-group col-md-4">
                <label for="renda">Renda</label>
                <input type="text" class="form-control" id="renda" name="renda" placeholder="Digite a renda">
            </div>
            <div class="form-group col-md-4">
                <label for="data_cadastro">Data de cadastro</label>
                <input type="text" class="form-control" id="data_cadastro" name="data_cadastro" value="<?= date("Y-m-d H:i:s") ?>" readonly >
            </div>
            <div class="form-group col-md-4">
                <label for="endereco">Endereço</label>
                <select name="endereco_id" id="endereco" class="form-control">
                    <?php foreach ($ends_edit as $end) { ?>
                        <option value="<?= $end['id'] ?>"> <?= $end['name'] ?></option>
                    <?php } ?>
                </select>
            </div>
        </div>

        <hr />

        <div class="row">
            <div class="col-md-12">
                <input type="hidden" name="submit" />
                <button type="submit" class="btn btn-primary">Salvar</button>
                <a href="<?= base_url('clientes') ?>" class="btn btn-default">Cancelar</a>
            </div>
        </div>

    </form>
</div>
