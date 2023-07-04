<?php
namespace App\Models;
use mysqli;
class Model{
    protected $db_host;
    protected $db_user;
    protected $db_pass;
    protected $db_name;
    protected $Connection;
    protected $Query;
    protected $table;

    public function __construct()
    {
        $this->db_host = $_ENV['DB_HOST'];
        $this->db_user = $_ENV['DB_USER'];
        $this->db_pass = $_ENV['DB_PASSWORD'];
        $this->db_name = $_ENV['DB_NAME'];
        $this->Connection();
    }

    public function Connection(){
        $this->Connection =  new mysqli($this->db_host, $this->db_user, $this->db_pass, $this->db_name);
        if($this->Connection->connect_error){
            die('Error de conexion: ' . $this->Connection->connect_error);
        }
    }

    public function query($sql){
        $this->Query =  $this->Connection->query($sql);
        return $this;
    }

    public function firts(){
        return $this->Query->fetch_assoc();
    }

    public function get(){
        return $this->Query->fetch_all(MYSQLI_ASSOC);
    }

    //Info: Consultas basicas
    public function All(){
        $sql = "SELECT * FROM {$this->table}";
        return $this->query($sql)->get();
    }

    public function FindById($Id){
        $sql = "SELECT * FROM {$this->table} WHERE id={$Id}";
        return $this->query($sql)->firts(); 
    }

    public function Where($Column, $Operator , $Value){
        $sql = "SELECT * FROM {$this->table} WHERE {$Column} {$Operator} '{$Value}' ";
        $this->query($sql); 
        return $this;
    }

    public function Create($data){
        $columns= array_keys($data);
        $columns= implode(',',$columns);
        $values=array_values($data);
        $values= "'" . implode("','",$values) . "'";
        $sql = "INSERT INTO {$this->table} ({$columns}) VALUES ({$values})";
        $this->query($sql);

        $InsertId = $this->Connection->insert_id;
        return $this->FindById($InsertId);
    }

    public function Update($id, $data){
        $fields = [];
        foreach ($data as $key => $value) {
            $fields[]= "{$key} = '{$value}'";
        }
        $fields = implode(',',$fields);
        $sql = "UPDATE {$this->table} SET ({$fields}) WHERE id= {$id}";
        $this->query($sql);
        return $this->FindById($id);
    }

    public function Delete($id){
        $sql="DELETE FROM {$this->table} WHERE id = {$id}";
        $this->query($sql);
    }
    
}
?>