<div id="main" class="container-fluid">

    <h3 class="page-header">Adicionar cargo</h3>

    <form action="<?= base_url('cargos/add') ?>" method="post">
        <div class="row">
            <div class="form-group col-md-7">
                <label for="descricao">Descrição</label>
                <input type="text" class="form-control" id="descricao" name="descricao" placeholder="Digite a descricao">
            </div>
            <div class="form-group col-md-5">
                <label for="salario">Salário</label>
                <input type="text" class="form-control" id="salario" name="salario" placeholder="Digite o salario">
            </div>
        </div>

        <hr />

        <div class="row">
            <div class="col-md-12">
                <input type="hidden" name="submit">
                <button type="submit" class="btn btn-primary">Salvar</button>
                <a href="<?= base_url('cargos') ?>" class="btn btn-default">Cancelar</a>
            </div>
        </div>

    </form>
</div>
