<div id="main" class="container-fluid">

    <h3 class="page-header">Editar endereço</h3>
    <form action="<?= base_url('enderecos/edit') ?>" method="post">
        <div class="row">
            <div class="form-group col-md-1">
                <label for="id">ID</label>
                <input type="number" class="form-control" id="id" name="id" value = <?= $user_edit['id'] ?> readonly>
            </div>
            <div class="form-group col-md-5">
                <label for="cep">CEP</label>
                <input type="text" class="form-control" id="cep" name="cep" value = <?= $user_edit['cep'] ?>>
            </div>
            <div class="form-group col-md-6">
                <label for="logradouro">Logradouro</label>
                <input type="text" class="form-control" id="logradouro" name="logradouro" value = <?= $user_edit['logradouro'] ?>>
            </div>
        </div>

        <div class="row">
            <div class="form-group col-md-4">
                <label for="bairro">Bairro</label>
                <input type="text" class="form-control" id="bairro" name="bairro" value = <?= $user_edit['bairro'] ?>>
            </div>
            <div class="form-group col-md-4">
                <label for="cidade">Cidade</label>
                <input type="text" class="form-control" id="cidade" name="cidade" value = <?= $user_edit['cidade'] ?>>
            </div>
            <div class="form-group col-md-4">
                <label for="estado">Estado</label>
                <input type="text" class="form-control" id="estado" name="estado" value = <?= $user_edit['estado'] ?>>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <button type="submit" class="btn btn-primary">Atualizar</button>
                <input type="hidden" name="submit" />
                <a href="<?= base_url('enderecos') ?>" class="btn btn-default">Cancelar</a>
            </div>
        </div>

    </form>
</div>