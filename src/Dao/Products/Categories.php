<?php

namespace Dao\Products;

use Dao\Table;

class Categories extends Table {
    public static function obtenerCategories() {
        $sqlstr = "SELECT * FROM categorias";
        return self::obtenerRegistros(
            $sqlstr,
            []
        );
    }

    public static function getCategoriesById(int $id): array 
    {
        $sqlstr = "SELECT * FROM categorias WHERE id = :id";
        return self::obtenerUnRegistro($sqlstr,["id" => $id]);
    }
    
}
