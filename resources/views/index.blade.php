@extends('base')
@section('content')
    <a href="{{route('memo.create')}}" class="btn btn-primary">Add New Entry</a>

    @if(count($memodata)==0)
        <h3>No data available.</h3>
    @else
        <h3>List of all entries</h3>
    <table class="table table-responsive table-striped table-hover">
        <thead>
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Content</th>
            <th class="col-xs-2">Created at</th>
            <th class="col-xs-3">Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach($memodata as $memodatum)
        <tr>
            <td>{{$memodatum->id}}</td>
            <td>{{$memodatum->title}}</td>
            <td>{{$memodatum->content}}</td>
            <td>{{$memodatum->created_at}}</td>
            <td>
                <form method="POST" action="{{route('memo.delete', $memodatum->id)}}">
                    {{method_field('DELETE')}}
                    {{csrf_field()}}
                <a href="{{route('memo.edit', $memodatum->id)}}" class="btn btn-primary">Edit</a>
                <input type="submit" value="Delete" class="btn btn-danger"/>
                </form>
            </td>
        </tr>
            @endforeach
        </tbody>
    </table>
@endif
    @endsection