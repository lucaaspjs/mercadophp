<?php

/**
 * Description of produtos
 *
 * @author Lucaas
 */
class Produtos extends Controller {

    public function __construct() {
        parent::__construct();
        $this->load->native_helper('URLHelper');
    }

    public function index($page = 0) {
        $this->load->native_helper('PaginationHelper');
        $produto = new Produto();
        $this->data['pagination'] = pagination('produtos', $produto, 10);
        $produto->limit(10);
        $produto->offset(($page * 10));
        $produto->get();
        $this->data['rows'] = $produto->all_to_array();
        $this->data['search'] = "";
        $this->render('produtos/index');
    }

    public function search($page = 0) {
        $arr = $this->post_to_array(array('search'));
        $like = $arr['search'];
        if ($like != "") {
            $produto = new Produto();
            $produto->like("descricao", $like);
            #$produto->limit(2);
            #$produto->offset(($page * 2));     
            $produto->get();
            $this->data['search'] = $arr['search'];
            $this->data['rows'] = $produto->all_to_array();
            $this->data['pagination'] = "";
            $this->render('produtos/index');
        } else {
            redirect('produtos');
        }
    }

    public function add() {
        if (isset($_POST['submit'])) {
            $produto = $this->post_to_obj(array('descricao', 'fornecedor_id', 'categoria_id',
                'quantidade', 'valor'), new Produto());
            $produto->save();
            redirect('produtos');
        }
        $this->load->native_helper('RecursiveGetHelper');
        $this->data['forn_edit'] = getFornecedores();
        $this->data['cat_edit'] = getCategorias();
        $this->render('produtos/add');
    }

    public function delete($id) {
        $produto = new Produto();
        $produto->deleteById($id);
        redirect('produtos');
    }

    public function edit($id) {
        if (isset($_POST['submit'])) {
            $produto = $this->post_to_obj(array('id', 'descricao', 'fornecedor_id', 'categoria_id',
                'quantidade', 'valor'), new Produto());
            $produto->update();
            redirect('produtos');
        }
        $produto = new Produto();
        $produto->getById($id);
        $this->data['prod_edit'] = $produto->to_array();
        $this->load->native_helper('RecursiveGetHelper');
        $this->data['forn_edit'] = getFornecedores();
        $this->data['cat_edit'] = getCategorias();
        $this->render('produtos/edit');
    }

    public function view_simple($id) {
        $produto = new Produto();
        $produto->getById($id);
        $produto->recursiveGet();
        $this->data['prod_view'] = $produto->to_array();
        $this->data['forn_view'] = $produto->fornecedor->to_array();
        $this->data['cat_view'] = $produto->categoria->to_array();
        $this->render('produtos/view_simple');
    }

}
