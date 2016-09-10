<div id="main" class="container-fluid">

    <h3 class="page-header">Adicionar endereço</h3>

    <form action="<?= base_url('enderecos/add') ?>" method="post">
        <div class="row">
            <div class="form-group col-md-5">
                <label for="cep">CEP</label>
                <input type="text" class="form-control" id="cep" name="cep" placeholder="Digite o CEP">
            </div>
            <div class="form-group col-md-7">
                <label for="logradouro">Logradouro</label>
                <input type="text" class="form-control" id="logradouro" name="logradouro" placeholder="Digite o logradouro">
            </div>
        </div>

        <div class="row">
            <div class="form-group col-md-4">
                <label for="bairro">Bairro</label>
                <input type="text" class="form-control" id="bairro" name="bairro" placeholder="Digite o bairro">
            </div>
            <div class="form-group col-md-4">
                <label for="cidade">Cidade</label>
                <input type="text" class="form-control" id="cidade" name="cidade" placeholder="Digite a cidade">
            </div>
            <div class="form-group col-md-4">
                <label for="estado">Estado</label>
                <input type="text" class="form-control" id="estado" name="estado" placeholder="Digite o estado">
            </div>
        </div>

        <hr />

        <div class="row">
            <div class="col-md-12">
                <button type="submit" class="btn btn-primary">Salvar</button>
                <input type="hidden" name="submit" />
                <a href="<?= base_url('enderecos') ?>" class="btn btn-default">Cancelar</a>
            </div>
        </div>

    </form>
</div>
