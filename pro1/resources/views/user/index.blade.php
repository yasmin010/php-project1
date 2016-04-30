@foreach($users as $user)
 <li> {!! HTML::link('user/' . $user->id .'/edit' ,$user->name) $user->name !!} </li>
 @endforeach