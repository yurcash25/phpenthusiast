

<?php

/* Test changes made
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
 class User {
            
            public $lastName;
            public $firstName;
            
            public function hello()
            {
                return "Hello, ".$this->firstName;
        }
         
        }
        
        $user1 = new User();
        
        $user1->firstName="John";
        $user1->lastName="Doe";
        
        //echo $user1->firstName.' '.$user1->lastName;
        
        echo $user1->hello().", ".$user1->firstName.' '.$user1->lastName."<br>";
        
        $user2 = new User();
        $user2->firstName="Jane";
        $user2->lastName="Doe";
        
        $hello=$user1->hello();
        
        echo $hello.', '.$user1->firstName.' '.$user1->lastName."<br>";
        echo $hello.', '.$user2->firstName.' '.$user2->lastName."<br>"."<br>";
        
        $user3 = new User();
        $user3->firstName="Jonnie";
        $user3->lastName="Roe";
        
        echo $user3->hello();
        ?>
<br><br>
<a href="The_$this_keyword.php"><button >To next excercise -></button></a> 
