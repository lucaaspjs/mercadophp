<div id="main" class="container-fluid">

    <h3 class="page-header">Adicionar categoria</h3>

    <form action="<?= base_url('categorias/add') ?>" method="post">
        <div class="row">
            <div class="form-group col-md-7">
                <label for="nome">Descrição</label>
                <input type="text" class="form-control" id="nome" name="nome" placeholder="Digite o nome">
            </div>
        </div>

        <hr />

        <div class="row">
            <div class="col-md-12">
                <input type="hidden" name="submit" />
                <button type="submit" class="btn btn-primary">Salvar</button>
                <a href="<?= base_url('categorias') ?>" class="btn btn-default">Cancelar</a>
            </div>
        </div>

    </form>
</div>
