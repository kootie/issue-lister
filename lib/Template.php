<?php 
class Template{
    //path to template
    protected $template;

    //vars passed in
    protected $vars = array();

    //constructor - set to path proerty
    public function __construct($template)
    {
        $this->template = $template;
    }

    // get template vars
    public function __get($key){
        return $this->vars[$key];
    }

   // set template vars
    public function __set($key, $value){
        $this->vars[$key] = $value;
    }

   //allow for $template->name - $name - use as a string
    public function __toString(){
        extract($this->vars);
        chdir(dirname($this->template));
        ob_start(); //start buffer

        include basename($this->template);

        return ob_get_clean(); //clear buffer
    }

}