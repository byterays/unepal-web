<?php




class WidgetLoader
{
    private $theme_path;

    function __construct(){
        global $config;
        $this->theme_path = $config["theme"]["path"];

    }
    

    public function RenderWidget($widget, $options = array(), $render = true)
    {

        
         $widget_file = ROOT_PATH."/".$this->theme_path . "/widgets/{$widget}.php";
      
        ob_start();
        require_once "$widget_file";
        $contents = ob_get_clean();
        if ($render==true)
            echo $contents;
        else
            return $contents;

        // echo $this->theme_path;
        // exit;
        // if($render==true) echo "render:($render): ".$this->theme_path;
        // else return $this->theme_path;
    }
}

$widgetloader = new WidgetLoader();
