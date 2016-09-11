<div id="main" class="container-fluid">

    <h3 class="page-header">Editar categoria</h3>
    <form action="<?= base_url('categorias/edit') ?>" method="post">
        <div class="row">
            <div class="form-group col-md-5">
                <label for="id">ID</label>
                <input type="number" class="form-control" id ="id" name="id" readonly value=<?= $cat_edit['id'] ?>>
            </div>
            <div class="form-group col-md-7">
                <label for="nome">Nome</label>
                <input type="text" class="form-control" id="nome" name="nome" value=<?= $cat_edit['nome'] ?>>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <input type="hidden" name="submit" />
                <button type="submit" class="btn btn-primary">Atualizar</button>
                <a href="<?= base_url('categorias') ?>" class="btn btn-default">Cancelar</a>
            </div>
        </div>

    </form>
</div>