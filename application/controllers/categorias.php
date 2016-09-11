<?php

/**
 * Description of categorias
 *
 * @author Lucaas
 */
class Categorias extends Controller {

    public function __construct() {
        parent::__construct();
        $this->load->native_helper('URLHelper');
    }

    public function index($page = 0) {
        $this->load->native_helper('PaginationHelper');
        $categoria = new Categoria();
        $this->data['pagination'] = pagination('categorias', $categoria, 10);
        $categoria->limit(10);
        $categoria->offset(($page * 10));
        $categoria->get();
        $this->data['rows'] = $categoria->all_to_array();
        $this->data['search'] = "";
        $this->render('categorias/index');
    }

    public function search($page = 0) {
        $arr = $this->post_to_array(array('search'));
        $like = $arr['search'];
        if ($like != "") {
            $categoria = new Categoria();
            $categoria->like("nome", $like);
            #$categoria->limit(2);
            #$categoria->offset(($page * 2));     
            $categoria->get();
            $this->data['search'] = $arr['search'];
            $this->data['rows'] = $categoria->all_to_array();
            $this->data['pagination'] = "";
            $this->render('categorias/index');
        } else {
            redirect('categorias');
        }
    }

    public function add() {
        if (isset($_POST['submit'])) {
            $categoria = $this->post_to_obj(array('nome'), new Categoria());
            $categoria->save();
            redirect('categorias');
        }
        $this->render('categorias/add');
    }

    public function delete($id) {
        $categoria = new Categoria();
        $categoria->deleteById($id);
        redirect('categorias');
    }

    public function edit($id) {
        if (isset($_POST['submit'])) {
            $categoria = $this->post_to_obj(array('id', 'nome'), new Categoria());
            $categoria->update();
            redirect('categorias');
        }
        $categoria = new Categoria();
        $categoria->getById($id);
        $this->data['cat_edit'] = $categoria->to_array();
        $this->render('categorias/edit');
    }

    public function view_simple($id) {
        $categoria = new Categoria();
        $categoria->getById($id);
        $this->data['cat_view'] = $categoria->to_array();
        $this->render('categorias/view_simple');
    }

}
