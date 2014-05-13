{{Form::open(array('route'=>'blog.store')) }}
<div>
    {{Form::label('title','Title')}}
    {{Form::text('title')}}
    <br/>
    {{Form::label('content','Content')}}
    {{Form::text('content')}}
    <br/>
</div>

<button type="submit" class="btn btn-default">Create Blog</button>
{{Form::close()}}