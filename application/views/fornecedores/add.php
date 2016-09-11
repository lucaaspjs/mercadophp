<div id="main" class="container-fluid">

    <h3 class="page-header">Adicionar fornecedor</h3>

    <form action="<?= base_url('fornecedores/add') ?>" method="post">
        <div class="row">
            <div class="form-group col-md-3">
                <label for="nome">Nome</label>
                <input type="text" class="form-control" id="nome" name="nome" placeholder="Digite o nome">
            </div>
            <div class="form-group col-md-3">
                <label for="cnpj">CNPJ</label>
                <input type="text" class="form-control" id="cnpj" name="cnpj" placeholder="Digite o cnpj">
            </div>
            <div class="form-group col-md-3">
                <label for="telefone">Telefone</label>
                <input type="text" class="form-control" id="telefone" name="telefone" placeholder="Digite o telefone">
            </div>
            <div class="form-group col-md-3">
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
                <a href="<?= base_url('fornecedores') ?>" class="btn btn-default">Cancelar</a>
            </div>
        </div>

    </form>
</div>
