{{Form::open(array('route'=>'category.store')) }}
<div>
    {{Form::label('title','Title')}}
    {{Form::text('title')}}
</div>

<button type="submit" class="btn btn-default">Submit</button>
{{Form::close()}}