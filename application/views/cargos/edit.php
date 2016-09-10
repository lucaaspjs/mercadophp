<div id="main" class="container-fluid">

    <h3 class="page-header">Editar cargo</h3>
    <form action="<?= base_url('cargos/edit') ?>" method="post">
        <div class="row">
            <div class="form-group col-md-4">
                <label for="id">ID</label>
                <input type="number" class="form-control" id ="id" name="id" readonly value=<?= $cargo_edit['id'] ?>>
            </div>
            <div class="form-group col-md-4">
                <label for="descricao">Descrição</label>
                <input type="text" class="form-control" id="descricao" name="descricao" value=<?= $cargo_edit['descricao'] ?>>
            </div>
            <div class="form-group col-md-4">
                <label for="salario">Salário</label>
                <input type="text" class="form-control" id="salario" name="salario" value=<?= $cargo_edit['salario'] ?>>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <input type="hidden" name="submit">
                <button type="submit" class="btn btn-primary">Atualizar</button>
                <a href="<?= base_url('cargos') ?>" class="btn btn-default">Cancelar</a>
            </div>
        </div>

    </form>
</div>