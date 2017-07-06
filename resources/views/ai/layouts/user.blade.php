@extends('ai.master')
@section('morejs')
<!-- User JS  -->
    <script src="{{ asset('public/js/ai/user.js') }}"></script>
@endsection
@section('content')
@include('ai.blocks.userModal')
<!-- Table -->
                <div class="container-fluid">
                    <div class="row">
                        <table id="miyazaki" class="table table-striped table-hover">
                            <thead>
                                <tr>
                                    <th class="success">Username</th>
                                    <th>FB.account</th>
                                    <th class="warning"  style="width: 15rem;">Level</th>
                                    <th>Posts</th>
                                    <th class="danger">Delete</th>
                                </tr>
                            <tbody>
                                @foreach($users as $user)
                                <tr class="line">
                                    <td class="username success"><a role='button' data-id="{{ $user->id }}">{{ $user->username }}</a></td>
                                    <td><a href='javascript:void(0)'>None</a></td>
                                    <td class="form-group"><input type="text" name="level" value="@if($user->level == 0) User @else Admin @endif" class="form-control" disabled="disabled" data-level="{{ $user->level }}"></td>
                                    <td><a role='button' data-toggle="modal" data-target="#myModal">3 Posts</a></td>
                                    <td><button type="button" class="btn btn-danger userDel" data-id="{{ $user->id }}">DELETE</button></td>
                                </tr>
                                @endforeach
                        </table>
                        <!-- Button trigger modal -->
                    </div> <!-- end row table -->
                </div> <!-- end container -->
            <!-- end Table -->
@endsection