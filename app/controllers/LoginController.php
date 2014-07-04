<?php
/*
 * LoginController
 * Creado el 27 de julio de 2014
 */
class LoginController extends BaseController {

    public function getRegister(){
        return View::make('backend.login.register');
    }
    public function getLogin(){
        return View::make('backend.login.login');
    }
    public function postRegister(){
        if(Request::ajax()){
            try{
                $user=Sentry::createUser(array(
                    'first_name'    =>Input::json('first_name'),
                    'last_name'     =>Input::json('last_name'),
                    'email'         =>Input::json('email'),
                    'password'      =>Input::json('password'),
                    'activated'     =>true,
                ));
                return Response::json(array(
                    'success' =>true,
                    'msg'     =>'successful register'
                ));
            }
            catch (Cartalyst\Sentry\Users\UserExistsException $e)
            {
                return Response::json(array(
                    'success' =>false,
                    'msg'     =>''
                ));
            }
        }
    }
    public function postLogin(){
            $credentials=array(
                'email'=>Input::get('email'),
                'password'=>Input::get('password')
            );
            try{
                $user=Sentry::authenticate($credentials, false);
                if($user){
                    return Response::json(array(
                        'success' =>true,
                        'msg'     =>'successful login'
                    ),500);

                }
            }
            catch(\Exception $e){
                return Response::json(array(
                    'success' =>false,
                    'msg'     => $e->getMessage()
                    )
                );
            }
     }
    public function logout(){
        Sentry::logout();
        return Response::json(array(
            'success' =>true,
            'msg'     =>'successful logout'
        ));
    }
}
