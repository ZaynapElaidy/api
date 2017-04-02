
  <!DOCTYPE html>
<html>
<head>
    <title>print name from view</title>
</head>
<body>
<h1>Add Task</h1>
<div>
<ul>
  @foreach($Tasks as $task)
     <li>{{$task->id}}</li>
     <li>{{$task->name}}</li>
     <a href="{{URL('delete')}}/{{$task->id}}"> delete</a>
     <a href="{{URL('edit')}}/{{$task->id}}"> edit</a>
  @endforeach
  </ul>
</div>
<form method="post" action="/">
    <input type="text" name="name"> <br>
    <input type="hidden" name="_token" value="{{csrf_token()}}">
    <button type="submit" name="submit" >create</button> <br>
</form>

</body>
</html>
  	
 