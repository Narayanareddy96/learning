<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Tasks list</title>
  </head>
  <body>
    <ul>
      @foreach($tasks as $taks)
        <li>
          <a href="/task/{{$taks->id}}" >
            {{$taks->body}}
          </a>
        </li>
      @endforeach
    </ul>

  </body>
</html>
