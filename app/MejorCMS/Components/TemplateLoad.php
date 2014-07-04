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
class TemplateLoad {
    protected  $template;
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
        $content='Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido usó una galería de textos y los mezcló de tal manera que logró hacer un libro de textos especimen. No sólo sobrevivió 500 años, sino que tambien ingresó como texto de relleno en documentos electrónicos, quedando esencialmente igual al original. Fue popularizado en los 60s con la creación de las hojas "Letraset", las cuales contenian pasajes de Lorem Ipsum, y más recientemente con software de autoedición, como por ejemplo Aldus PageMaker, el cual incluye versiones de Lorem Ipsum.';
        return $content;
    }


} 