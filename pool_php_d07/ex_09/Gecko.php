<?php

/*_ EXERCICE 9 _ (1 PT)
**_____
**Hand in: pool_php_d07/ex_09/Gecko.php
**Create a class “Gecko” that will have 2 public attributes: “friends” of type array and “skills” of type Skill, a
**class we will define ourselves. You do not have to hand in this “Skill” class.
**The constructor will take these 2 attributes as parameter (in the same order as mentioned above).
**Make sure that it is not possible to pass a type which is different than the initial type of each attribute.
**In addition, it will be possible to pass the type “null” to the argument corresponding to the attribute “friends”.
*/

class Gecko
{

    public $friends = array();
    public $skill ;

    public function __construct(array $friends = NULL, skill $skill)

    {    
        $this->friends=$friends;
        $this->skill = $skill;
    }
}