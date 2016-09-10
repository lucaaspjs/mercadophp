<div id="main" class="container-fluid" style="margin-top: 50px">

    <div id="top" class="row">
        <div class="col-sm-3">
            <h2>Endereços</h2>
        </div>
        <div class="col-sm-6">
            <form action="<?= base_url('enderecos/search') ?>" method="post">
                <div class="input-group h2">
                    <input name = "search" class = "form-control" id = "search" type = "text"
                           placeholder = "Pesquisar Endereços" value ="<?= $search ?>">
                    <span class="input-group-btn">
                        <button class="btn btn-primary" type="submit">
                            <span class="glyphicon glyphicon-search"></span>
                        </button>
                    </span>
                </div>
            </form>
        </div>
        <div class="col-sm-3">
            <a href="<?= base_url('enderecos/add') ?>" class="btn btn-primary pull-right h2">Novo endereço</a>
        </div>
    </div> <!-- /#top -->
    <hr />
    <div id="list" class="row">

        <div class="table-responsive col-md-12">
            <table class="table table-striped" cellspacing="0" cellpadding="0">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>CEP</th>
                        <th>Logradouro</th>
                        <th>Bairro</th>
                        <th class="actions">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($rows as $row) { ?>
                        <tr id = "<?= $row['id'] ?>">
                            <td class="col-md-1"><?= $row['id'] ?></td>
                            <td class="col-md-2"><?= $row['cep'] ?></td>
                            <td class="col-md-3"><?= $row['logradouro'] ?></td>
                            <td class="col-md-3"><?= $row['bairro'] ?> </td>
                            <td class="actions" class="col-md-3">
                                <a class='btn btn-success btn-xs' href="<?= base_url("enderecos/view_simple/" . $row['id']) ?>">Visualizar</a>
                                <a class='btn btn-warning btn-xs' href="<?= base_url("enderecos/edit/" . $row['id']) ?>">Editar</a>
                                <a class="btn btn-danger btn-xs" id="<?= $row['id'] ?>" onclick="setId(this.id)" href="#"
                                   data-toggle="modal" data-target="#delete-modal">Excluir</a>

                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>

    </div> <!-- /#list -->

    <div id="bottom" class="row">
        <div class="col-md-12">
            <?= $pagination ?>
        </div>
    </div> <!-- /#bottom -->
</div> <!-- /#main -->

<!-- Modal -->
<div class="modal fade" id="delete-modal" tabindex="-1" role="dialog" aria-labelledby="modalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Fechar"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="modalLabel">Excluir Item</h4>
            </div>
            <div class="modal-body">
                Deseja realmente excluir este item?
            </div>
            <div class="modal-footer">
                <button type="button" onclick="apaga('enderecos')" class="btn btn-primary">Sim</button>
                <button type="button" class="btn btn-default" data-dismiss="modal">N&atilde;o</button>
            </div>
        </div>
    </div>
</div>