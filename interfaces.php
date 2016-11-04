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
        return $this->editorPrivilegesArray;
    }
}
$user111 = new AuthorEditor();
$user111->setUsername("Steve Carell");
$user111->setAuthorPrivileges(array("wright text", "add punctuation"));
$user111->setEditorsPrivileges(array("edit text", "edit punctuation"));

$privileges=array_merge($user111->getAuthorPrivileges(),$user111->getEditorsPrivileges());
$username=$user111->getUsername();


$userPrivileges=  implode(", ", $privileges);

echo $username." has following privileges: ".$userPrivileges.".";



?>
<br><br>
<br><br>
<a href="abstract_classes_methods.php"><button ><- To previous excercise</button></a> 
<a href="#"><button >To next excercise -></button></a> 
