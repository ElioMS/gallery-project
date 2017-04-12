<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class MacroServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        \Form::macro('preguntas' , function($paramP = null , $paramR = null){
            $preguntas = '<div class="ui segment">';
            $preguntas .= \Form::label('Pregunta');
            $preguntas .= \Form::text('preguntas[]' , $paramP , ['class' => 'form-control']); 
            $preguntas .= \Form::label('Respuesta');
            $preguntas .= \Form::text('respuestas[]', $paramR , ['class' => 'form-control']);
            $preguntas .= '</div>';
            return $preguntas;
        });

        \Form::macro('imagen' , function($name, $path = null){
            $nombre_imagen = '';

            if ($path)  $nombre_imagen = array_last(explode('/', $path));
            
            $imagen  = '<label class="col-md-2 control-label"> Imagen </label>';
            $imagen .= '<div class="imagen-array col-md-10">';
            $imagen .= '<p class="title-image-flm">'.$nombre_imagen.'</p>';
            $imagen .= '<div class="ui fluid left action input">';
            $imagen .= '<div  data-input="'.$name.'" class="btn btn-primary fm-button">  <i class="fa fa-search"></i> Ver Galeria </div>';
            $imagen .= \Form::text($name, null , ['class' => 'input-flm' , 'id' => $name , 'hidden' => true]);
            if ($path) {
                $imagen .= '<a class="btn btn-default preview-flm" data-name="'.$path.'"> Preview </a>';
            }
            $imagen .= '</div>';
            $imagen .= '</div>';

            return $imagen;
        });

        \Form::macro('datePicker' , function($name){
      
            $datepicker = \Form::label($name , null , ['class' => 'col-md-2 control-label']);
            $datepicker .= '<div class="col-md-3">';
            $datepicker .= '<div class="input-group input-medium date date-picker">';
            $datepicker .= '<span class="input-group-addon" id="basic-addon1"><a class="date-button-adm"><i class="fa fa-calendar" aria-hidden="true"></i></a></span>';
            $datepicker .= \Form::text($name , null , ['class' => 'form-control pull-right input-fecha']); 
            $datepicker .= '</div>';
            // $datepicker .= '</div>';
 
            return $datepicker;
        });

        \Form::macro('stdCheckbox', function($name, $message){
            $checkbox = '<div class="ui checkbox">';
            $checkbox .= \Form::checkbox($name);
            $checkbox .= '<label> '.$message .' </label>';
            $checkbox .= '</div>';

            return $checkbox;
        });

        \Form::macro('imageText', function($count, $path = null, $tag = null){
            $image_name = '';
            $name  = 'image'.$count;

            if ($path)  $image_name = array_last(explode('/', $path));

            $imagen  = '<div class="form-group">';
            $imagen .= '<div class="ui segment">';
            $imagen .= '<label> Images and tags </label>';
            $imagen .= '<div class="imagen-array">';
            $imagen .= '<p class="title-image-flm">'.$image_name.'</p>';
            $imagen .= '<div class="ui fluid left action input">';
            $imagen .= '<div  data-input="'.$name.'" class="ui teal button fm-button it-image">  <i class="image icon"></i> Browse </div>';
            // $imagen .= \Form::text('images[]', null , ['class' => 'input-flm' , 'id' => $name , 'hidden' => true]);
            if ($path) {
                $imagen .= '<input type="hidden" id="'.$name.'" name="images[]" class="input-flm" value="'.$path.'" >';
                $imagen .= '<a class="ui button preview-flm" data-name="'.$path.'">Preview</a>';
            }else{
                $imagen .= '<input type="hidden" id="'.$name.'" name="images[]" class="input-flm" >';
            }
            $imagen .= '</div>';
            $imagen .= '</div>';
            $imagen .= '<br>';
            $imagen  .= \Form::label('tag');
            $imagen  .= \Form::text('tag[]' , $tag , ['class' => 'form-control'] );

            $imagen .= '</div>';
            $imagen .= '</div>';

            return $imagen;
        });
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
