<?php
    include_once("./app/tareas/model/tarea.model.php");

    class TareasRepository {
        private static $_intance = [];
        
        private mysqli $mysqli;

        private function __construct() {
            $this->mysqli = new mysqli("localhost", "root", "", "tudu");
        }
        
        public static function getInstance(): TareasRepository {
            $class = static::class;
            if ( !isset( $_intance[ $class ] ) ){
                $_intance[ $class ] = new static();
            }

            return $_intance[ $class ];
        }

        public function getMysqli(): mysqli {
            return $this->mysqli;
        }

        public function getAllTareas(): array {
            $tareas = array();
            $query = "SELECT * FROM tareas ORDER BY status DESC";

            $sentencia = $this->mysqli->prepare($query);

            $sentencia->execute();

            $sentencia->bind_result( $id, $titulo, $descripcion, $status );
            while ($sentencia->fetch() ){
                $tareas[] = new Tarea( $id, $titulo, $descripcion, $status );
            }
            return $tareas;
        }

        public function saveNewTarea( Tarea $tarea ): bool {
            $this->mysqli->begin_transaction();
            $query = "INSERT INTO tareas(titulo, descripcion) VALUES( ? , ? )";

            $sentencia = $this->mysqli->prepare($query);
            
            $titulo = $tarea->getTitulo();
            $descri = $tarea->getDescripcion();
            
            $sentencia->bind_param("ss", $titulo, $descri);

            if ( !$sentencia->execute() ){
                $this->mysqli->rollback();
                return false;
            }

            $this->mysqli->commit();
            return true;
        }
    }