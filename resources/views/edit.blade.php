@extends('base')

@section('content')
 <form method="POST" action="{{route('memo.update', $memo->id)}}">
        {{method_field('PUT')}}
        {{csrf_field()}}
        <div class="form-group">
            <label>Title</label>
            <input name="title" type="text" class="form-control" value="{{$memo->title}}" required/><br/>
            <label>Content</label>
            <textarea name="content" class="form-control">{{$memo->content}}</textarea><br/>
            <input type="submit" value="Submit"/>
        </div>
    </form>

@endsection
