@extends('ai.master')
@section('morejs')
<!-- Cate Handle -->
<script type="text/javascript" src="{{ asset('public/js/ai/cate.js') }}"></script>
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
                                    <th>Author</th>
                                    <th>Date Uploaded</th>
                                    <th>View</th>
                                    <th class="warning">Check</th>
                                    <th class="danger">Delete</th>
                                </tr>
                            <tbody>
                                <tr class="line">
                                    <td class="username info">#129</td>
                                    <td><a role='button' data-toggle="modal" data-target="#myModal">Học như thế nào là tốt cho bộ não ?</a></td>
                                    <td><a role='button' data-toggle="modal" data-target="#myModal">Jakcalie</a></td>
                                    <td>06/12/2018</td>
                                    <td><button class="btn btn-info btn-sm" type="button">View</button></td>
                                    <td><button type="button" class="btn btn-warning">Check !</button></td>
                                    <td><button type="button" class="btn btn-danger">DELETE</button></td>
                                </tr>
                                <tr class="line">
                                    <td class="username info">#129</td>
                                    <td><a role='button' data-toggle="modal" data-target="#myModal">Học như thế nào là tốt cho bộ não ?</a></td>
                                    <td><a role='button' data-toggle="modal" data-target="#myModal">Jakcalie</a></td>
                                    <td>06/12/2018</td>
                                    <td><button class="btn btn-info btn-sm" type="button">View</button></td>
                                    <td><button type="button" class="btn btn-success">Checked</button></td>
                                    <td><button type="button" class="btn btn-danger">DELETE</button></td>
                                </tr>
                        </table>
                        <!-- Button trigger modal -->
                    </div> <!-- end row table -->
                </div> <!-- end container -->
            <!-- end Table -->
@endsection