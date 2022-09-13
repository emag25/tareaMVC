<?php

require_once 'config/Conexion.php';

class UsuariosDAO {

    private $con;

    public function __construct() {
        $this->con = Conexion::getConexion();
    }

    
    /*--  CONSULTAR  --*/

    public function selectAll() {      
        $sql = "SELECT * FROM usuario";
        $stmt = $this->con->prepare($sql);
        $stmt->execute();
        $resultados = $stmt->fetchAll(PDO::FETCH_OBJ);
      
        return $resultados;
    }

    public function selectByName($name) { 
        $sql = "SELECT * FROM usuario WHERE (usuario like :name)";
        $stmt = $this->con->prepare($sql);
        $conlike = '%' . $name . '%';
        $data = array('name' => $conlike);
        $stmt->execute($data);
        $resultados = $stmt->fetchAll(PDO::FETCH_OBJ);
        
        return $resultados;
    }

    

    


    /*--  INSERTAR  --*/

    public function selectByRol($rol) {      
        $sql = "SELECT * FROM rol WHERE rol = :rol";
        $stmt = $this->con->prepare($sql);
        $data = ['rol' => $rol];
        $stmt->execute($data);
        $resultado = $stmt->fetch(PDO::FETCH_OBJ);
        
        if ($stmt->rowCount() <= 0) {
            return -1;
        }else{
            return $resultado->id_rol;
        }
    }

    public function insert($usu) {
        try{
            $sql = "INSERT INTO usuario (usuario, contrasenia, rol_id) VALUES (:usuario, :contrasenia, :rol_id)";
        
            $sentencia = $this->con->prepare($sql);
            $data = [
                'usuario' =>  $usu->getNombre(),
                'contrasenia' =>  $usu->getContrasenia(),
                'rol_id' =>  $usu->getRol()                
            ];
            $sentencia->execute($data);
            
            if ($sentencia->rowCount() <= 0) {
                return false;
            }
            
        }catch(Exception $e){
            return false;
        }
        return true;
    }




    /*--  EDITAR  --*/

    public function selectById($id){
        $sql = "SELECT * FROM usuario WHERE id_usuario = :id";
        $stmt = $this->con->prepare($sql);
        $data = ['id' => $id];
        $stmt->execute($data);
        $resultado = $stmt->fetch(PDO::FETCH_OBJ);

        return $resultado;
    }

    public function update($usu){
        try{
            $sql = "UPDATE usuario SET usuario = :usuario, contrasenia = :contrasenia, rol_id = :rol_id WHERE id_usuario=:id";

            $sentencia = $this->con->prepare($sql);
            $data = [            
                'usuario' =>  $usu->getNombre(),
                'contrasenia' =>  $usu->getContrasenia(),
                'rol_id' =>  $usu->getRol(),   
                'id' =>  $usu->getUsuarioId()
            ];
            $sentencia->execute($data);

            if ($sentencia->rowCount() <= 0) {
                return false;
            }
        }catch(Exception $e){
            return false;
        }    
        return true;        
    }




    /*--  ELIMINAR  --*/

    public function delete($usu){
        try{             
                          
        $sql = "DELETE FROM usuario WHERE id_usuario = :id";
        $sentencia = $this->con->prepare($sql); 
        $data = ['id' =>  $usu->getUsuarioId()];
        $sentencia->execute($data);

        if ($sentencia->rowCount() <= 0) {
            return false;
        }      
            
        }catch(Exception $e){
            return false;
        }
        return true;
    }    
}
