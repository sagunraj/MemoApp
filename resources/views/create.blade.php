@extends('base')
@section('content')
    <form method="POST" action="{{route('memo.index')}}">
        {{csrf_field()}}
        <div class="form-group">
        <label>Title</label>
        <input name='title' type="text" class="form-control" required/><br/>
        <label>Content</label>
            <textarea name="content" class="form-control" required></textarea><br/>
        <input type="submit" value="Submit"/>
        </div>
    </form>
    @endsection