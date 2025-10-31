<?php
class View{

    private $template;

    public function __construct($template){
        $this->template = $template;
    }

    public function render(){
        $template = $this->template;
        ob_start();
        include_once(VIEW.$template.'.php');
        $contentpage = ob_get_clean();
        include_once(LAYOUT.'layout.php');
    }
}