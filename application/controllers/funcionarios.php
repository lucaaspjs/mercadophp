<?php

/**
 * Description of funcionarios
 *
 * @author Lucaas
 */
class Funcionarios extends Controller {

    public function __construct() {
        parent::__construct();
        $this->load->native_helper('URLHelper');
    }

    public function index($page = 0) {
        $this->load->native_helper('PaginationHelper');
        $funcionario = new Funcionario();
        $this->data['pagination'] = pagination('funcionarios', $funcionario, 10);
        $funcionario->limit(10);
        $funcionario->offset(($page * 10));
        $funcionario->get();
        $this->data['rows'] = $funcionario->all_to_array();
        $this->data['search'] = "";
        $this->render('funcionarios/index');
    }

    public function search($page = 0) {
        $arr = $this->post_to_array(array('search'));
        $like = $arr['search'];
        if ($like != "") {
            $funcionario = new Funcionario();
            $funcionario->like("nome", $like);
            #$funcionario->limit(2);
            #$funcionario->offset(($page * 2));     
            $funcionario->get();
            $this->data['search'] = $arr['search'];
            $this->data['rows'] = $funcionario->all_to_array();
            $this->data['pagination'] = "";
            $this->render('funcionarios/index');
        } else {
            redirect('funcionarios');
        }
    }

    public function add() {
        if (isset($_POST['submit'])) {
            $funcionario = $this->post_to_obj(array('nome', 'telefone', 'entrada',
                'cargo_id', 'endereco_id'), new Funcionario());
            $funcionario->save();
            redirect('funcionarios');
        }
        $this->load->native_helper('RecursiveGetHelper');
        $this->data['ends_edit'] = getEnderecos();
        $this->data['cargos_edit'] = getCargos();
        $this->render('funcionarios/add');
    }

    public function delete($id) {
        $funcionario = new Funcionario();
        $funcionario->deleteById($id);
        redirect('funcionarios');
    }

    public function edit($id) {
        if (isset($_POST['submit'])) {
            $funcionario = $this->post_to_obj(array('id', 'nome', 'telefone', 'entrada',
                'cargo_id', 'endereco_id'), new Funcionario());
            $funcionario->update();
            redirect('funcionarios');
        }
        $funcionario = new Funcionario();
        $funcionario->getById($id);
        $this->data['func_edit'] = $funcionario->to_array();
        $this->load->native_helper('RecursiveGetHelper');
        $this->data['ends_edit'] = getEnderecos();
        $this->data['cargos_edit'] = getCargos();
        $this->render('funcionarios/edit');
    }

    public function view_simple($id) {
        $funcionario = new Funcionario();
        $funcionario->getById($id);
        $funcionario->recursiveGet();
        $this->data['func_view'] = $funcionario->to_array();
        $this->data['end_view'] = $funcionario->endereco->to_array();
        $this->data['cargo_view'] = $funcionario->cargo->to_array();
        $this->render('funcionarios/view_simple');
    }

}
