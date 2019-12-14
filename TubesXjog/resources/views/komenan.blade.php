@foreach($datakomen as $d)
<tr>
    <td><p>{{$d->user->name}}</p></td>
    <td><p>{{$d->created_at}}</p></td>
</tr>
<tr>
    <td colspan="2"><p>{{$d->komen}}</p></td>
    <td></td>
</tr>    
<tr>
    <td colspan="2"><hr></td>
    <td></td>
</tr>
@endforeach