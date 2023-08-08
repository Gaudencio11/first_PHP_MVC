<?php
namespace app\controllers;

use app\models\Crud;

class Site extends Crud
{
    public function home(){
        require_once __DIR__ . '/../views/home.php';
    }

    public function galeria(){
        require_once __DIR__ . '/../views/galeria.php';
    }

    public function cadastro(){

        require_once __DIR__ . '/../views/cadastro.php';
    }

    public function cadastrado(){

        $cadastro = $this->create();
        header("Location:?router=Site/consulta/");
    }

    public function consulta(){
        $consulta =  $this->read();
        require_once __DIR__ . '/../views/consulta.php';
    }

    public function editar()
    {
        $read_one = $this->read_one();
        require_once __DIR__ .  '/../views/editar.php';
    }

    public function editado()
    {
        $editado = $this->update();
        header("Location:?router=Site/consulta/");
    }
    
    public function deletar()
    {
        $editado = $this->delete();
        header("Location:?router=Site/consulta/");
    }
}