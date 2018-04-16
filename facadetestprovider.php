<?php

    namespace Illuminate\facadetest;
    
    use Illuminate\facadetest\facadetestinterface;
    
    
    class facadetestprovider extends \Illuminate\Support\ServiceProvider{
        public function register(){
            $this->app->bind('testfacade',function(){
                return new facadetestinterface();
            });
        }
    }

?>
