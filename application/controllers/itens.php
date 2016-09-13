<?php

/**
 * Description of itens
 *
 * @author Lucaas
 */
class Itens extends Controller {

    public function __construct() {
        parent::__construct();
        $this->load->native_helper('URLHelper');
    }

    public function index($page = 0) {
        $this->load->native_helper('PaginationHelper');
        $item = new Item();
        $this->data['pagination'] = pagination('itens', $item, 10);
        $item->limit(10);
        $item->offset(($page * 10));
        $item->get();
        $this->setRowsIndexTable($item->all_to_array());
        $this->render('itens/index');
    }

    private function setRowsIndexTable(array $pedidos) {
        $array = array();

        foreach ($pedidos as $temp) {
            $produto = new Produto();
            $produto->getById($temp['produto_id']);
            $array[] = array("id" => $temp['id'], "produto_id" => $produto->data['descricao'], "valor_unitario" => $temp['valor_unitario'],
                "valor_total" => $temp['valor_total'], "quantidade" => $temp['quantidade'], "pedido_id" => $temp['pedido_id']);
        }
        $this->data['rows'] = $array;
    }

    public function add() {
        if (isset($_POST['submit'])) {
            $item = $this->post_to_obj(array('produto_id', 'pedido_id', 'quantidade'), new Item());
            $campo_calculado = $this->getValorTotal($_POST['produto_id'], $_POST['quantidade']);
            $item->data['valor_total'] = $campo_calculado['valor_total'];
            $item->data['valor_unitario'] = $campo_calculado['valor_unitario'];
            $item->save();
            redirect('itens');
        }
        $this->load->native_helper('RecursiveGetHelper');
        $this->data['prod_edit'] = getProdutos();
        $this->data['ped_edit'] = getPedidos();
        $this->render('itens/add');
    }

    private function getValorTotal($id, $quantidade) {
        $produto = new Produto();
        $produto->getById($id);
        $data = $produto->to_array();
        $vl_total = $data['valor'] * $quantidade;
        return array("valor_unitario" => $data['valor'], "valor_total" => $vl_total);
    }

    public function delete($id) {
        $item = new Item();
        $item->deleteById($id);
        redirect('itens');
    }

    public function edit($id) {
        if (isset($_POST['submit'])) {
            $item_post = $this->post_to_array(array('id', 'quantidade', 'valor_unitario', 'valor_total',
                'pedido_id', 'produto_id'));
            $item_post['valor_total'] = $item_post['quantidade'] * $item_post['valor_unitario'];
            $item = new Item();
            $item->id = $item_post['id'];
            $item->data['quantidade'] = $item_post['quantidade'];
            $item->data['valor_unitario'] = $item_post['valor_unitario'];
            $item->data['valor_total'] = $item_post['valor_total'];
            $item->data['pedido_id'] = $item_post['pedido_id'];
            $item->data['produto_id'] = $item_post['produto_id'];
            $item->update();
            redirect('itens');
        }
        $item = new Item();
        $item->getById($id);
        $this->data['item_edit'] = $item->to_array();
        $this->render('itens/edit');
    }

}
