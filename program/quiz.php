<?php
/*
#Q.1
	ini_set("allow_url_fopen", "1");
    $page = file_get_contents("http://www.codepunker.com");
    if($page!=FALSE)
    echo "Successfully fetched website contents";
    else
    echo "An error has occurred";
*/

/*
#Q.2
 class Disney
    {
        public $cartoon;

        function __construct($cartoon)
        {
            $this->cartoon = $cartoon;
        }
    }

    $disney = new Disney("The Beauty and The Beast");
    $waltDisney = $disney;
    $waltDisney->cartoon = "Pinocchio";
    echo $disney->cartoon;

*/
    #Q.3
      class foo
    {
      private $variable;

      function __construct()
      {
        $this->variable = 1;
      }

      function __get($name)
      {
        return $this->$name;
      }
    }
    $a = new foo;
    echo $a->variable;

?>