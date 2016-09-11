<?php

/**
 * Description of fornecedores
 *
 * @author Lucaas
 */
class Fornecedores extends Controller {

    public function __construct() {
        parent::__construct();
        $this->load->native_helper('URLHelper');
    }

    public function index($page = 0) {
        $this->load->native_helper('PaginationHelper');
        $fornecedor = new Fornecedor();
        $this->data['pagination'] = pagination('fornecedores', $fornecedor, 10);
        $fornecedor->limit(10);
        $fornecedor->offset(($page * 10));
        $fornecedor->get();
        $this->data['rows'] = $fornecedor->all_to_array();
        $this->data['search'] = "";
        $this->render('fornecedores/index');
    }

    public function search($page = 0) {
        $arr = $this->post_to_array(array('search'));
        $like = $arr['search'];
        if ($like != "") {
            $fornecedor = new Fornecedor();
            $fornecedor->like("nome", $like);
            #$fornecedor->limit(2);
            #$fornecedor->offset(($page * 2));     
            $fornecedor->get();
            $this->data['search'] = $arr['search'];
            $this->data['rows'] = $fornecedor->all_to_array();
            $this->data['pagination'] = "";
            $this->render('fornecedores/index');
        } else {
            redirect('fornecedores');
        }
    }

    public function add() {
        if (isset($_POST['submit'])) {
            $fornecedor = $this->post_to_obj(array('nome', 'telefone', 'cnpj', 'endereco_id'), new Fornecedor());
            $fornecedor->save();
            redirect('fornecedores');
        }
        $this->data['ends_edit'] = $this->getEnderecos();
        $this->render('fornecedores/add');
    }

    public function delete($id) {
        $fornecedor = new Fornecedor();
        $fornecedor->deleteById($id);
        redirect('fornecedores');
    }

    public function edit($id) {
        if (isset($_POST['submit'])) {
            $fornecedor = $this->post_to_obj(array('id', 'nome', 'telefone','cnpj','endereco_id'), new Fornecedor());
            $fornecedor->update();
            redirect('fornecedores');
        }
        $fornecedor = new Fornecedor();
        $fornecedor->getById($id);
        $this->data['forn_edit'] = $fornecedor->to_array();
        $this->data['ends_edit'] = $this->getEnderecos();
        $this->render('fornecedores/edit');
    }

    public function view_simple($id) {
        $fornecedor = new Fornecedor();
        $fornecedor->getById($id);
        $fornecedor->recursiveGet();
        $this->data['forn_view'] = $fornecedor->to_array();
        $this->data['end_view'] = $fornecedor->endereco->to_array();
        $this->render('fornecedores/view_simple');
    }

    private function getEnderecos() {
        $endereco = new Endereco();
        $endereco->select(array('id', 'logradouro', 'cidade', 'estado'));
        $endereco->get();
        $ends = $endereco->all_to_array();
        $return = array();
        foreach ($ends as $end) {
            $id = $end['id'];
            $name = $end['logradouro'] . ", " . $end['cidade'] . ", " . $end['estado'];
            $return[] = array('id' => $id, 'name' => $name);
        }
        return $return;
    }

}
