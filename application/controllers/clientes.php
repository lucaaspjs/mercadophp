<?php

/**
 * Description of clientes
 *
 * @author Lucaas
 */
class Clientes extends Controller {

    public function __construct() {
        parent::__construct();
        $this->load->native_helper('URLHelper');
    }

    public function index($page = 0) {
        $this->load->native_helper('PaginationHelper');
        $cliente = new Cliente();
        $this->data['pagination'] = pagination('clientes', $cliente, 10);
        $cliente->limit(10);
        $cliente->offset(($page * 10));
        $cliente->get();
        $this->data['rows'] = $cliente->all_to_array();
        $this->data['search'] = "";
        $this->render('clientes/index');
    }

    public function search($page = 0) {
        $arr = $this->post_to_array(array('search'));
        $like = $arr['search'];
        if ($like != "") {
            $cliente = new Cliente();
            $cliente->like("nome", $like);
            #$cliente->limit(2);
            #$cliente->offset(($page * 2));     
            $cliente->get();
            $this->data['search'] = $arr['search'];
            $this->data['rows'] = $cliente->all_to_array();
            $this->data['pagination'] = "";
            $this->render('clientes/index');
        } else {
            redirect('clientes');
        }
    }

    public function add() {
        if (isset($_POST['submit'])) {
            $cliente = $this->post_to_obj(array('nome', 'telefone', 'cpf', 'renda',
                'data_cadastro', 'endereco_id'), new Cliente());
            $cliente->save();
            redirect('clientes');
        }
        $this->load->native_helper('RecursiveGetHelper');
        $this->data['ends_edit'] = getEnderecos();
        $this->render('clientes/add');
    }

    public function delete($id) {
        $cliente = new Cliente();
        $cliente->deleteById($id);
        redirect('clientes');
    }

    public function edit($id) {
        if (isset($_POST['submit'])) {
            $cliente = $this->post_to_obj(array('id', 'nome', 'telefone', 'cpf', 'renda',
                'data_cadastro', 'endereco_id'), new Cliente());
            $cliente->update();
            redirect('clientes');
        }
        $cliente = new Cliente();
        $cliente->getById($id);
        $this->data['cli_edit'] = $cliente->to_array();
        $this->load->native_helper('RecursiveGetHelper');
        $this->data['ends_edit'] = getEnderecos();
        $this->render('clientes/edit');
    }

    public function view_simple($id) {
        $cliente = new Cliente();
        $cliente->getById($id);
        $cliente->recursiveGet();
        $this->data['cli_view'] = $cliente->to_array();
        $this->data['end_view'] = $cliente->endereco->to_array();
        $this->render('clientes/view_simple');
    }

}
