{!! Form::open(array('route'=>'user.store')) !!}

   {!! Form::label('name','Name:') !!}
   {!! Form::text('name') !!}

   <br>
   <br>

   {!! Form::label('email','Email:') !!}
   {!! Form::text('email') !!}

    <br>
    <br>

   {!! Form::label('password','Password:') !!}
   {!! Form::text('password') !!}
    
    <br>
    <br>

    {!! Form::submit('Save') !!}


{!! Form::close() !!}