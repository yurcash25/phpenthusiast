<?php

class Users{
    
    protected $username;
    
    public function setUsername($name){
        
        $this->username = $name;
}

public function getUsername(){
    
    return $this->username;
}
}
interface Author{
    
     public function setAuthorPrivileges($array);
     public function getAuthorPrivileges();
}
interface Editor{
    
    public function setEditorsPrivileges($array);
    public function getEditorsPrivileges();
}
class AuthorEditor extends Users implements Author,Editor{
    
    private $authorPrivilegesArray = array();
    private $editorPrivilegesArray = array();
    
    public function setAuthorPrivileges($array){
        
        $this ->authorPrivilegesArray = $array;
        
    }
    public function getAuthorPrivileges() {
        return $this->authorPrivilegesArray;
    }
    public function setEditorsPrivileges($array) {
        
        $this->editorPrivilegesArray = $array;
        
    }
    public function getEditorsPrivileges() {
        return $this->editorsPrivilegesArray;
    }
}
$user111 = new AuthorEditor();
$user111->setUsername("Steve Carell");
$user111->setAuthorPrivileges(array("wright text", "add punctuation"));
$user111->setEditorsPrivileges(array("edit text", "edit punctuation"));
echo (array($user111->getAuthorsPrivileges()));
//echo $this->getUsername()." has following privileges: ".$this->getAuthorPrivileges();



?>
<br><br>
<br><br>
<a href="abstract_classes_methods.php"><button ><- To previous excercise</button></a> 
<a href="#"><button >To next excercise -></button></a> 
