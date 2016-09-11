<?php

/**
 * Description of pedidos
 *
 * @author Lucaas
 */
class Pedidos extends Controller {

    public function __construct() {
        parent::__construct();
        $this->load->native_helper('URLHelper');
    }

    public function index($page = 0) {

        $this->load->native_helper('PaginationHelper');
        $pedido = new Pedido();
        $this->data['pagination'] = pagination('pedidos', $pedido, 10);
        $pedido->limit(10);
        $pedido->offset(($page * 10));
        $pedido->get();
        $this->setRowsIndexTable($pedido->all_to_array());
        $this->data['search'] = "";
        $this->render('pedidos/index');
    }

    #Este método tem a mesma função do Model::RecursiveGet, mas só busca pelo relacionamento uma vez

    private function setRowsIndexTable(array $data) {
        $rows = array();

        foreach ($data as $pedido) {
            $cliente = new Cliente();
            $cliente->getById($pedido['cliente_id']);
            $tempCli = $cliente->to_array();
            $funcionario = new Funcionario();
            $funcionario->getById($pedido['funcionario_id']);
            $tempFunc = $funcionario->to_array();
            $rows[] = array("id" => $pedido['id'], "data_cadastro" => $pedido['data_cadastro'],
                "cliente_nome" => $tempCli['nome'], "funcionario_nome" => $tempFunc['nome']);
        }
        $this->data['rows'] = $rows;
    }

    public function search($page = 0) {
        $arr = $this->post_to_array(array('search'));
        $like = $arr['search'];
        if ($like != "") {
            $pedido = new Pedido();
            $pedido->like("data_cadastro", $like);
            #$pedido->limit(2);
            #$pedido->offset(($page * 2));     
            $pedido->get();
            $this->setRowsIndexTable($pedido->all_to_array());
            $this->data['search'] = $arr['search'];
            $this->data['pagination'] = "";
            $this->render('pedidos/index');
        } else {
            redirect('pedidos');
        }
    }

    public function add() {
        if (isset($_POST['submit'])) {
            $pedido = $this->post_to_obj(array('funcionario_id', 'cliente_id', 'data_cadastro'), new Pedido());
            $pedido->save();
            redirect('pedidos');
        }
        $this->load->native_helper('RecursiveGetHelper');
        $this->data['func_edit'] = getFuncionarios();
        $this->data['cli_edit'] = getClientes();
        $this->render('pedidos/add');
    }

    public function delete($id) {
        $pedido = new Pedido();
        $pedido->deleteById($id);
        redirect('pedidos');
    }

    public function edit($id) {
        if (isset($_POST['submit'])) {
            redirect('pedidos');
        }
        $pedido = new Pedido();
        $pedido->getById($id);
        $pedido->recursiveGet();
        $this->data['ped_edit'] = $pedido->to_array();
        $this->data['func_edit'] = $pedido->funcionario->to_array();
        $this->data['cli_edit'] = $pedido->cliente->to_array();
        $this->render('pedidos/edit');
    }

    private function getItens($pedido_id) {
        $itens = new Item();
        $itens->where("pedido_id", $pedido_id);
        $itens->get();
        $array = array();

        foreach ($itens->all_to_array() as $item) {
            $prod = new Produto();
            $prod->getById($item['produto_id']);
            $produto = $prod->to_array();
            $array[] = array('produto' => $produto['descricao'], 'valor_unit' => $produto['valor'],
                'quantidade' => $item['quantidade'], 'valor_total' => $item['valor_total']);
        }

        $this->data['itens'] = $array;
    }

    public function view_simple($id) {
        $pedido = new Pedido();
        $pedido->getById($id);
        $pedido->recursiveGet();
        $this->data['ped_view'] = $pedido->to_array();
        $this->data['func_view'] = $pedido->funcionario->to_array();
        $this->data['cli_view'] = $pedido->cliente->to_array();
        $this->getItens($id);
        $this->render('pedidos/view_simple');
    }

}
