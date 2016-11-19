<div id='clase_error_div'>
<div class="alert alert-warning">
  					<strong>{!!Form::label('errors_clase','')!!}</strong> 
					</div>
					</div>
<div class="col-md-6">
	{!!Form::label('id',trans('messages.codigoDeLaClase'))!!}
	{!!Form::text('id',null,['class'=>'form-control','required','disabled'])!!}
</div>
<div class="col-md-6">
	{!!Form::label('nombre_aula',trans('messages.nombreDeLaClase'))!!}
	{!!Form::text('nombre',null,['class'=>'form-control','placeholder'=>trans('messages.ejemComputacionGrafica'),'required'])!!}
</div>
<div class="col-md-6">
	{!!Form::label('grupo',trans('messages.grupo'))!!}
	{!!Form::text('grupo',null,['class'=>'form-control','placeholder'=>trans('messages.ejemSis501')])!!}
</div>

<div class="col-md-6">
	{!!Form::label('creditos',trans('messages.numeroDeCreditos'))!!}
	{!!Form::number('creditos',null,['class'=>'form-control','min'=>'1','max'=>'5'])!!}
</div>
<div class="col-md-6">
	{!!Form::label('semestre',trans('messages.semestre'))!!}
	{!!Form::number('semestre',null,['class'=>'form-control jsemestre','min'=>'1','max'=>'10'])!!}
</div>
<div class="col-md-6">
	{!!Form::label('cant_estudiantes',trans('messages.cantidadDeEstudiantes'))!!}
	{!!Form::number('cant_estudiantes',null,['class'=>'form-control jestudiantes','min'=>'1','max'=>'44','required'])!!}
</div>
<div class="col-md-6">
	{!!Form::label('requerimientos',trans('messages.requerimientos'))!!}
	{!!Form::text('requerimientos',null,['class'=>'form-control'])!!}
</div>
		
        
       


	