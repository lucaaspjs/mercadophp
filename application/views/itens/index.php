<div id="main" class="container-fluid" style="margin-top: 50px">

    <div id="top" class="row">
        <div class="col-sm-3">
            <h2>Itens</h2>
        </div>

        <div class="col-sm-9">
            <a href="<?= base_url('itens/add') ?>" class="btn btn-primary pull-right h2">Novo Item</a>
        </div>
    </div> <!-- /#top -->


    <hr />
    <div id="list" class="row">

        <div class="table-responsive col-md-12">
            <table class="table table-striped" cellspacing="0" cellpadding="0">
                <thead>
                    <tr>
                        <th class="col-md-1">ID</th>
                        <th class="col-md-1">Pedido</th>
                        <th class="col-md-2">Produto</th>
                        <th class="col-md-2">Valor Unitario</th>
                        <th class="col-md-1">Quantidade</th>
                        <th class="col-md-2">Valor Total</th>
                        <th class="actions" class="col-md-3">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($rows as $row) { ?>
                        <tr>
                            <td><?= $row['id'] ?></td>
                            <td><?= $row['pedido_id'] ?></td>
                            <td><?= $row['produto_id'] ?></td>
                            <td><?= $row['valor_unitario'] ?></td>
                            <td><?= $row['quantidade'] ?></td>
                            <td><?= $row['valor_total'] ?></td>
                            <td class='actions'>
                                <a class='btn btn-warning btn-xs' href="<?= base_url("itens/edit/" . $row['id']) ?>">Editar</a>
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
                <button type="button" onclick="apaga('itens')" class="btn btn-primary">Sim</button>
                <button type="button" class="btn btn-default" data-dismiss="modal">N&atilde;o</button>
            </div>
        </div>
    </div>
</div>