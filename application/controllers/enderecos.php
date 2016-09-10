<?php

/**
 * Description of enderecos
 *
 * @author Lucaas
 */
class Enderecos extends Controller {

    public function __construct() {
        parent::__construct();
        $this->load->native_helper('URLHelper');
    }

    public function index($page = 0) {
        $this->load->native_helper('PaginationHelper');
        $endereco = new Endereco();
        $this->data['pagination'] = pagination('enderecos', $endereco, 10, 'index');
        $endereco->limit(10);
        $endereco->offset(($page * 10));
        $endereco->get();
        $this->data['rows'] = $endereco->all_to_array();
        $this->data['search'] = "";
        $this->render('enderecos/index');
    }

    public function search($page = 0) {
        $arr = $this->post_to_array(array('search'));
        $like = $arr['search'];
        if ($like != "") {
            $endereco = new Endereco();
            $endereco->like("logradouro", $like);
            #$endereco->limit(2);
            #$endereco->offset(($page * 2));     
            $endereco->get();
            $this->data['search'] = $arr['search'];
            $this->data['rows'] = $endereco->all_to_array();
            $this->data['pagination'] = "";
            $this->render('enderecos/index');
        }else {
            redirect('enderecos');
        }
    }

    public function add() {
        if (isset($_POST['submit'])) {
            $endereco = $this->post_to_obj(array('cep', 'logradouro', 'bairro', 'cidade', 'estado'), new Endereco);
            $endereco->save();
            redirect('enderecos');
        }
        $this->render('enderecos/add');
    }

    public function delete($id) {
        $endereco = new Endereco();
        $endereco->deleteById($id);
        redirect('enderecos');
    }

    public function edit($id) {
        if (isset($_POST['submit'])) {
            $endereco = $this->post_to_obj(array('id', 'cep', 'logradouro', 'bairro', 'cidade', 'estado'), new Endereco);
            $endereco->update();
            redirect('enderecos');
        }
        $endereco = new Endereco();
        $endereco->getById($id);
        $this->data['user_edit'] = $endereco->to_array();
        $this->render('enderecos/edit');
    }

    public function view_simple($id) {
        $endereco = new Endereco();
        $endereco->getById($id);
        $this->data['user_view'] = $endereco->to_array();
        $this->render('enderecos/view_simple');
    }

}
