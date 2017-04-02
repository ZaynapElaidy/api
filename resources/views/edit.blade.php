
  <!DOCTYPE html>
<html>
<head>
    <title>print name from view</title>
</head>
<body>
<h1>Edit Your Task</h1>


<form action="/edit/{{ $task->id }}/task"  method="post">
    <input type="text" name="name"  value="{{$task->name}}"> <br>
      <input type="hidden" name="_token" value="{{ csrf_token() }}">
      <input type="hidden" name="id" value="{{$task->id}}">
    <button type="submit" name="submit" >create</button> <br>
</form>

</body>
</html>
  	
 