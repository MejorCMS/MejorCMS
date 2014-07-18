<?php
use MejorCMS\Components\TemplateLoad;
class Frontend_MainController extends \BaseController {
    protected $template;
    public function __construct(TemplateLoad $template)
    {
        $this->template = $template;
    }
    public function home(){
       $this->template->getTemplate('demo2');
       $data=$this->template->render();
        return View::make('system.index',compact('data'));
    }
}