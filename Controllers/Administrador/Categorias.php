<?php
namespace Controllers\Administrador;
// require_once $_SERVER['DOCUMENT_ROOT'] . '/Models/ProductoModel.php';

// use Models\Categoria as CategoriaModel;

class Categorias {
    public function indexCategorias()
    {
        // echo 'asss';
        require_once($_SERVER['DOCUMENT_ROOT'] . "/Views/Administrador/categorias.php");
    }
    
}