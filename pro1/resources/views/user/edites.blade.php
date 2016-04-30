{!! Form::open(array('method'=>'put','url'=>'user/' .$user->id)) !!}

   {!! Form::label('name','Name:') !!}
   {!! Form::text('name' , $user->name) !!}

   <br>
   <br>

   {!! Form::label('email','Email:') !!}
   {!! Form::text('email', $user->email) !!}

    <br>
    <br>

    {!! Form::submit('Edit') !!}


{!! Form::close() !!}