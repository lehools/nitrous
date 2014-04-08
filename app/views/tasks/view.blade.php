<h1>view</h1>

 @foreach($tasks as $task)
 {{{$task->id}}}
 {{{$task->title}}}
 {{{$task->done}}}
 @endforeach
