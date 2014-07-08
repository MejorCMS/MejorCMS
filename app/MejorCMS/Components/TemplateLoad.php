<?php
/**
 * Created by PhpStorm.
 * User: elefanteweb
 * Date: 28/06/14
 * Time: 10:07 PM
 */
namespace MejorCMS\Components;
/**
 * Class TemplateLoad
 * @package MejorCMS\Components
 *
 */
use MejorCMS\Components\HomeGenerate;
class TemplateLoad {
    protected  $template;
    protected  $home;
    public function __construct(HomeGenerate $home){
        $this->home=$home;
    }

    /*
     * Obtiene el nombre de plantilla
     */
    public function getTemplate($template_name='demo'){
       $this->template=file_get_contents('../app/templates/'.$template_name.'/index.php');
    }
    /*
     * Carga de plantilla
     */
    public function render(){
        $template=$this->template;
        $data=array(
            'head'      =>$this->generateHead(),
            'content'   =>$this->generateContent()
        );
        foreach ($data as $clave=>$valor) {
            $template = str_replace('mejor::'.$clave,$valor,$template);
        }
        return $template;
    }
    protected function generateHead(){
        $head='<meta name="generator" content="MejorCMS! - Open Source Content Management"/>'.
            '<title>MejorCMS</title>';
        return $head;
    }
    protected  function generateContent(){
        $content=$this->home->getFeatured();
        return $content;
    }


} 