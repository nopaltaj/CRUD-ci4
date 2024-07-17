<?php



namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\TamuModel;
use \Hermawan\DataTables\DataTable;
use CodeIgniter\HTTP\ResponseInterface;


class Tamu extends BaseController
{
    public function index()
    {
        $data = ['title' => 'User List'];
        $tamu_model = new TamuModel();
        $all_data_tamu = $tamu_model->findAll();
        return view('tamu', ['all_data_tamu' => $all_data_tamu], $data);
    }

    public function register()
    {
        return view('register');
    }

    public function registerProses()
    {
        $tamu_model = new TamuModel();
        $tamu_model->insert($this->request->getPost());

        $time_input = strtotime('created_at');


        return redirect()->to(base_url('tamu'));
    }

    public function edit($id = false)
    {
        $tamu_model = new TamuModel();
        $data_tamu = $tamu_model->find($id);
        return view('edit', ['data_tamu' => $data_tamu]);
    }

    public function editProses()
    {
        $tamu_model = new TamuModel();
        $tamu_model->update($this->request->getPost('id'), $this->request->getPost());
        return redirect()->to(base_url('tamu'));
    }

    public function delete($id = false)
    {
        $tamu_model = new TamuModel();
        $tamu_model->delete($id);
        return redirect()->to(base_url('tamu'));
    }
    
    public function basic()
{
    $db = db_connect();
    $builder = $db->table('register')->select('created_at, name, email, password');
    
    return DataTable::of($builder)->toJson();
}
}
