@extends('ai.master')
@section('morejs')
<!-- Cate Handle -->
<script type="text/javascript" src="{{ asset('public/js/ai/cate.js') }}"></script>
<script type="text/javascript" src="{{ asset('public/js/ai/post.js') }}"></script>
@endsection
@section('content')
@include('ai.blocks.postModal')
<!-- Table -->
                <div class="container-fluid">
                    <div class="row">
                        <table id="miyazaki" class="table table-striped table-hover">
                            <thead>
                                <tr>
                                    <th class="info">ID</th>
                                    <th>Title</th>
                                    <th>Cate</th>
                                    <th>Author</th>
                                    <th>Date Uploaded</th>
                                    <th>View</th>
                                    <th class="warning">Check</th>
                                    <th class="danger">Delete</th>
                                </tr>
                            <tbody>
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <input type="hidden" name="user_id" value="{{ auth::id() }}">
                            @foreach($posts as $post)
                                <tr class="line">
                                    <td class="username info">#{{ $post->id }}</td>
                                    <td><a role='button' data-toggle="modal" data-target="#myModal">{{ $post->title }}</a></td>
                                    <td>{{ $post->cate->name }}</td>
                                    <td><a href="javascript:void(0)">{{ $post->user->username }}</a></td>
                                    <td>{{ $post->updated_at }}</td>
                                    <td><button class="btn btn-info btn-sm" type="button">View</button></td>
                                    <td>
                                        @if($post->level == 0)
                                        <button type="button" class="btn btn-success check" value="1" data-route="{{ route('post.check',$post->id) }}" data-id="{{$post->id}}">Check !</button>
                                    @else
                                        <button type="button" class="btn btn-warning check" value="0" data-id="{{$post->id}}">Uncheck !</button>
                                    @endif
                                    </td>
                                    <td><button type="button" class="btn btn-danger postDel" data-id="{{$post->id}}">DELETE</button></td>
                                </tr>
                            @endforeach
                        </table>
                        <!-- Button trigger modal -->
                    </div> <!-- end row table -->
                </div> <!-- end container -->
            <!-- end Table -->
@endsection