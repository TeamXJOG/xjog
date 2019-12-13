@foreach($datakomen as $d)
<p>{{$d->user->name}}</p>
<p>{{$d->komen}}</p>
<hr>    
@endforeach