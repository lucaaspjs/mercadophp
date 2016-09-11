<?php

/**
 * Description of cargos
 *
 * @author Lucaas
 */
class Cargos extends Controller {

    public function __construct() {
        parent::__construct();
        $this->load->native_helper('URLHelper');
    }

    public function index($page = 0) {
        $this->load->native_helper('PaginationHelper');
        $cargo = new Cargo();
        $this->data['pagination'] = pagination('cargos', $cargo, 10);
        $cargo->limit(10);
        $cargo->offset(($page * 10));
        $cargo->get();
        $this->data['rows'] = $cargo->all_to_array();
        $this->data['search'] = "";
        $this->render('cargos/index');
    }

    public function search($page = 0) {
        $arr = $this->post_to_array(array('search'));
        $like = $arr['search'];
        if ($like != "") {
            $cargo = new Cargo();
            $cargo->like("descricao", $like);
            #$cargo->limit(2);
            #$cargo->offset(($page * 2));     
            $cargo->get();
            $this->data['search'] = $arr['search'];
            $this->data['rows'] = $cargo->all_to_array();
            $this->data['pagination'] = "";
            $this->render('cargos/index');
        } else {
            redirect('cargos');
        }
    }

    public function add() {
        if (isset($_POST['submit'])) {
            $cargo = $this->post_to_obj(array('descricao', 'salario'), new Cargo());
            $cargo->save();
            redirect('cargos');
        }
        $this->render('cargos/add');
    }

    public function delete($id) {
        $cargo = new Cargo();
        $cargo->deleteById($id);
        redirect('cargos');
    }

    public function edit($id) {
        if (isset($_POST['submit'])) {
            $cargo = $this->post_to_obj(array('id', 'descricao', 'salario'), new Cargo());
            $cargo->update();
            redirect('cargos');
        }
        $cargo = new Cargo();
        $cargo->getById($id);
        $this->data['cargo_edit'] = $cargo->to_array();
        $this->render('cargos/edit');
    }

    public function view_simple($id) {
        $cargo = new Cargo();
        $cargo->getById($id);
        $this->data['cargo_view'] = $cargo->to_array();
        $this->render('cargos/view_simple');
    }

}
