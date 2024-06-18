<?php

namespace App\Controllers\api;
use App\Models\ContenidoModel;
use CodeIgniter\RESTful\ResourceController;
use PHPUnit\Util\Json;

use CodeIgniter\API\ResponseTrait;
use CodeIgniter\Controller;

class listaContenidos extends ResourceController
{
    use ResponseTrait;
    
    protected $format = 'json';

    public function __construct()
    {
        $this -> model = $this->setModel(new ContenidoModel());
    }
    
    public function index()
    {
        $contenidos = $this->model->findAll();
        return $this->respond($contenidos);
        //return $this->load->view('listaArticulos',$articulos);
        //return view('Plantilla/header').view('Vista',).view('Plantilla/footer');
    }

    public function show($id = null)
    {
        $contenidos[$id] = $this->model->find($id);
        return $this->respond($contenidos[$id]);
        //echo '<br>Metodo show' . $id;
    }
    
    public function create()
    {
        
        $model = new ContenidoModel();
        // Obtén los datos del cuerpo de la solicitud
        $data = $this->request->getJSON();

        // Inserta los datos en la base de datos
        $model->insert($data);
        
        // Envía una respuesta JSON
        return $this->respondCreated(['mensaje' => 'Registro insertado exitosamente']);

    }

    
    public function edit($id = null)
    {
        
    }

    public function update($id = null)
    {
         // Obtén los datos del cuerpo de la solicitud
        $data = $this->request->getJSON();
         // Validar y procesar los datos según tus necesidades
 
        // Ejemplo de actualización en la base de datos
        $model = new ContenidoModel();
        $model->update($id,$data);

        return $this->respondUpdated(['mensaje' => 'Registro actualizado exitosamente']);
    }

    
    public function delete($id = null)
    {
        $model = new ContenidoModel();
        $model ->delete($id);

        return $this->respondDeleted(['mensaje' => 'Registro borrado exitosamente']);
    }
}
