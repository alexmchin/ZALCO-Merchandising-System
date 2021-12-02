<?php 

class UserValidator {

  private $data;
  private $errors = [];
  private static $fields = ['compName', 'brandName', 'notes'];

  public function __construct($post_data){
    $this->data = $post_data;
  }

  public function validateForm(){

    foreach(self::$fields as $field){
      if(!array_key_exists($field, $this->data)){
        trigger_error("'$field' is not present in the data");
        return;
      }
    }

    $this->validateCompName();
    $this->validateBrandName();
    $this->validateComActivity();
    return $this->errors;

  }

  private function validateCompName(){

    $val = trim($this->data['compName']);

    if(empty($val)){
      $this->addError('compName', 'Competitor Name field cannot be empty');
    } else {
      if(!preg_match("/^[a-zA-Z\s\d\.]+$/", $val)){
        $this->addError('compName','Competitor Name field must be alphanumeric');
      }
    }

  }

  private function validateBrandName(){

    $val = trim($this->data['brandName']);

    if(empty($val)){
      $this->addError('brandName', 'Brand Name field cannot be empty');
    } else {
        if(!preg_match("/^[a-zA-Z\s\d\.]+$/", $val)){
            $this->addError('brandName','Brand Name field must be alphanumeric');
        }
    }

  }

  private function validateComActivity(){

    $val = trim($this->data['notes']);

    if(empty($val)){
      $this->addError('notes', 'Competitor Activity field cannot be empty');
    } else {
        if(!preg_match("/^[a-zA-Z\s\d\.]+$/", $val)){
            $this->addError('notes','Competitor Activity field must be alphanumeric');
        }
    }

  }
  private function addError($key, $val){
    $this->errors[$key] = $val;
  }

}

?>