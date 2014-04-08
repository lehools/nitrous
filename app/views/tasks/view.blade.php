<h1>view</h1>

 @foreach($tasks as $task)
 {{{$task->id}}}
 {{{$task->title}}}
 {{{$task->done}}}
<br/>
 @endforeach

@if ($tasks->getLastPage() > 1)
<ul class="ui pagination menu">
  <a href="{{ $tasks->getUrl($tasks->getCurrentPage()-1) }}"
    class="item{{ ($tasks->getCurrentPage() == 1) ? ' disabled' : '' }}">
        <i class="icon left arrow"></i> Previous
      </a>
      @for ($i = 1; $i <= $tasks->getLastPage(); $i++)
      <a href="{{ $tasks->getUrl($i) }}"
    class="item{{ ($tasks->getCurrentPage() == $i) ? ' active' : '' }}">
        {{ $i }}
      </a>
      @endfor
      <a href="{{ $tasks->getUrl($tasks->getCurrentPage()+1) }}"
    class="item{{ ($tasks->getCurrentPage() == $tasks->getLastPage()) ? ' disabled' : '' }}">
        Next <i class="icon right arrow"></i>
      </a>
    
  
</ul>
@endif


{{link_to_action('TasksController@create', 'create')}}
