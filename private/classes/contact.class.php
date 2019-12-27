<?php 

class Contact{

    static protected $database;
    static protected $db_columns = ['nom','prenom','email','message'];

    static public function set_database($database){
        Self::$database = $database;
    }

    static public function find_by_sql($sql){
        $result = Self::$database->query($sql);
        if(!$result){
            $msg = 'database viiiiiide';
            exit($msg);
        }
        //result into objects
        $object_array = [];
        while($record = $result->fetch_assoc()){
            $object_array[] = Self::instantiate($record);
        }
        $result->free();
        return $object_array;
    }

    static public function instantiate($record){
        $object = new self;
        foreach($record as $property => $value){
            if(property_exists($object, $property)){
                $object->$property = $value; 
            }
        }
        return $object;
    }

    static public function find_all_message(){
        $sql = "select * from message";
        return Self::find_by_sql($sql);
    }

    static public function find_all_admin(){
        $sql = "select * from admin";
        return Self::find_by_sql($sql);
    }

    public function create(){
        $attributes = self::sanitized_attributes();
        $sql = "insert into message (";
        $sql .= join(', ', array_keys($attributes));
        $sql .= ") values ('"; 
        $sql .= join("', '", array_values($attributes));
        $sql .= "')";

        $result = Self::$database->query($sql);
        if($result){
            $this->id = self::$database->insert_id;
        }
        
        return $result;
    }

    public function attributes(){
        $attributes = [];
        foreach(self::$db_columns as $column){
            if($column == 'id'){ continue; }
            $attributes[$column] = $this->$column;
        }
        return  $attributes;
    }

    protected function sanitized_attributes(){
        $sanitized = [];
        foreach($this::attributes() as $key => $value){
            $sanitized[$key] = self::$database->escape_string($value);
        }
        return $sanitized;
    }
    
    
    public $id;
    public $nom;
    public $prenom;
    public $email;
    public $message;

    
    
    public function __construct($args=[]){
        $this->nom = $args['nom'] ?? '';
        $this->prenom = $args['prenom'] ?? '';
        $this->email = $args['email'] ?? '';
        $this->message = $args['message'] ?? '';
        
        return $args;
    }

    
    
}

?>