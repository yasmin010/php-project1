{!! Form::open() !!}

   {!! Form::label('name','Name:') !!}
   {!! Form::text('name') !!}

   <br>
   <br>

   {!! Form::label('email','Email:') !!}
   {!! Form::text('email') !!}

    <br>
    <br>

   {!! Form::label('Gender','gender:') !!}
   {!! Form::label('Male','Male') !!}
   {!! Form::radio('Male', 'value', true) !!}
   {!! Form::label('Female','Female') !!}
   {!! Form::radio('Female', 'value', false) !!}

   <br>
   <br>

   {!! Form::label('number', 'please insert number:') !!}
   {!! Form::number('number', 'value') !!}

   <br>
   <br>
   
   {!! Form::label('date', 'BirthDate:') !!}
   {!! Form::date('date', \Carbon\Carbon::now()) !!}

   <br>
   <br>

   {!! Form::label('image','Browse image:') !!}
   {!! Form::file('image') !!}

   <br>
   <br>
   
   {!! Form::label('languagepro', 'programming language') !!}
   {!! Form::select('languagepro', array('Java' => 'Java', 'C++' => 'C++','php' => 'PHP','Java')) !!}
   
   <br>
   <br>

   {!! Form::label('language','select language:') !!}
   {!! Form::select('language', array(
   'Arabic' => array('leopard' => 'AR'),
   'English' => array('spaniel' => 'EN'),
   )); !!}

   <br>
   <br>

   {!! Form::label('Range', 'Select Range:') !!}
   {!! Form::selectRange('Range', 10 ,20) !!}

   <br>
   <br>

   {!! Form::label('month', 'Selectmonth:') !!}
   {!! Form::selectMonth('month') !!}

   <br>
   <br>
   {!! Form::macro('myField', function(){
    return '<input type="awesome">'; }) !!}
    {!! Form::label('myfield', 'macro:') !!}
    {!! Form::myField(); !!}
    
    <br>
    <br>

    {!! Form::label('link', 'link to given url:') !!}
    {!! link_to('foo/bar', $title = null, $attributes = array(), $secure = null) !!}

    <br>
    <br>

    {!! Form::label('link', 'link to given asset:') !!}
    {!! link_to_asset('foo/bar.zip', $title = null, $attributes = array(), $secure = null) !!}
   

   <br>
   <br>

    
   {!! Form::submit('Submit') !!}


{!! Form::close() !!}