<?php
namespace App\Controllers;
use App\Models\RepartidorModel;

class Repartidor extends BaseController
{
    public function index()
    {
        $model = new RepartidorModel();
        $data['repartidores'] = $model->findAll();
        return view('repartidores_basico', $data);
    }

    public function guardar()
    {
        $model = new RepartidorModel();
        $id = $this->request->getPost('id_repartidor');

        $data = [
            'nombre'   => $this->request->getPost('nombre'),
            'telefono' => $this->request->getPost('telefono'),
            'vehiculo' => $this->request->getPost('vehiculo')
        ];

        if ($id) {
            $model->update($id, $data);
        } else {
            $model->insert($data);
        }

        return redirect()->to('/repartidor');
    }

    public function eliminar($id)
    {
        $model = new RepartidorModel();
        $model->delete($id);
        return redirect()->to('/repartidor');
    }
}