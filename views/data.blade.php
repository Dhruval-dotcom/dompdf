@foreach($users as $user)
<ul>
    <li>{{$user['id']}}</li>
    <li>{{$user['title']}}</li>
    <li>{{$user['image1']}}</li>
    <li>{{$user['para1']}}</li>
</ul>
@endforeach