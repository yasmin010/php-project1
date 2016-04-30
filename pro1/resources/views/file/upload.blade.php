{!! Form::open(array('files'=>true)) !!}

   {!! Form::label('file','uploadfile:') !!}
   {!! Form::file('file') !!}
   <br>
   <br>
   {!! Form::submit("submit") !!}

{!! Form::close() !!}