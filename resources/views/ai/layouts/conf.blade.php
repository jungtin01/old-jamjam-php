@extends('ai.master')
@section('content')
@include('ai.blocks.confModal')
<!-- Table -->
                <div class="container-fluid">
                    <div class="row">
                        <table id="miyazaki" class="table table-striped table-hover">
                            <thead>
                                <tr>
                                    <th class="info">ID</th>
                                    <th>Content</th>
                                    <th>Date Uploaded</th>
                                    <th class="warning">Check</th>
                                    <th class="danger">Delete</th>
                                </tr>
                            <tbody>
                                <tr class="line">
                                    <td class="username info">#129</td>
                                    <td><p>Tôi là người mong muốn được đăng confession này khá là nhiều rất là củ cải lá xanh màu vàng hoe con cú nó hú ra con cừu</p></td>
                                    <td>06/12/2018</td>
                                    <td><button type="button" class="btn btn-warning">Check !</button></td>
                                    <td><button type="button" class="btn btn-danger">DELETE</button></td>
                                </tr>
                        </table>
                        <!-- Button trigger modal -->
                    </div> <!-- end row table -->
                </div> <!-- end container -->
            <!-- end Table -->
@endsection