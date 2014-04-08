<h1>create</h1>
{{ Form::model('task', array('action' => 'TasksController@store')) }}

{{ Form::label('title','Title') }}
{{ Form::text('title', null) }}
{{ Form::submit('Create') }}
{{ Form::close() }}
{{link_to_action('TasksController@view', 'View task')}}

{{ Form::model('task2', array('action' => 'TasksController@view')) }}
{{ Form::submit('View') }}
{{ Form::close() }}