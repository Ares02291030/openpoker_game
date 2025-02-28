<?php
class System_Template_Template {
	private $filename;
	private $directory;
	private $content;
	private $data = array();
        public $error;
  
	function __construct($directory) {
		$this->directory = $directory;
	}
	
	function set($filename) {
            if(is_file($this->directory . '/'. $filename)) {
		$this->filename = $filename;
            } else {
                echo '<br>Could not load the template file: ' . $this->directory.'/'.$this->filename;
            }
	}
	
	function add($name, $value) {
		array_push($this->data, array($name=>$value));
	}
	
	function showData() {
		foreach ($this->data as $row => $value) {
			echo '<br><pre>' . print_r($this->data) . '</pre>';
		}		
	}
	
	function getData() {
		return $this->data;
	}
	
	function load() {
		foreach ($this->data as $variables)
		extract($variables);

                ob_start(); // start buffer
                include ($this->directory.'/'.$this->filename);              
                $this->content = ob_get_contents(); // assign buffer contents to variable
                ob_end_clean(); // end buffer and remove buffer contents		
	}
	
	function show() {
		//$this->load();
		echo ($this->content);
	}
}


?>
