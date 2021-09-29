<?php

  function insert(string $nombre, array $campos) : string{
    $sql = "insert into %s (%s) values (%s)";
    return sprintf($sql, $nombre, implode(", ", array_keys($campos)), ":" . implode(", :", array_keys($campos)));

  }
  function insertReferencia(string $nombre, array $campos, string &$sql){
    $sql = str_replace("tabla", $nombre, $sql);
    $sql = str_replace("campos",  implode(", ", array_keys($campos)), $sql);
    $sql = str_replace("valores", ":" . implode(", :", array_keys($campos)), $sql);
  }
  function getUpdates(array $parameters)
    {
        $updates = "";
        $i = 0;
        foreach ($parameters as $key => $value) {
            if ($i == 0)
                continue;
            
            $updates .= $key . "=:" . $key ", ";
            
            $i++;
        }
        return substr($updates, 0, -2);
        
  }
  function update(string $nombre, array $campos) : string{
    
        $sql = sprintf(
            'UPDATE %s SET %s WHERE %s = %s ',
            $nombre,
            getUpdates($campos),
            array_key_first($campos),
            array_key_first($campos)
        );
		return $sql;
   }
  function realizaOperacion(callable $operacion, string $simbolo, int $operando1, int $operando2){
    echo "$operando1 $simbolo $operando2 =  {$operacion($operando1, $operando2)}";
  }
  $suma = function (int $operando1, int $operando2) {
    return $operando1 + $operando2;
  };
  $resta = function (int $operando1, int $operando2) {
    return $operando1 - $operando2;
  };
  
  $multiplicacion = function (int $operando1, int $operando2) {
    return $operando1 * $operando2;
  };
  $division = function (int $operando1, int $operando2) {
    return $operando1 / $operando2;
  };

  $tabla = "alumnos";
  $campos = array("nombre" => "Juan", "apellidos" => "Martínez");
  $sql = insert($tabla, $campos);
  $sqlReferencia = "insert into tabla (campos) values (valores)";
  $campos = array("id" => 1, "nombre" => "Juan", "apellidos" => "Martínez");
  $sqlUpdate  = update($tabla, $campos);
  insertReferencia($tabla, $campos, $sqlReferencia);
 ?>