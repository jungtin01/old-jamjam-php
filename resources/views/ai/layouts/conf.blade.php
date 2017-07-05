@extends('ai.master')
@section('morejs')
<!-- Conf js -->
    <script type="text/javascript" src="{{ asset('public/js/ai/conf.js') }}"></script>
@endsection
@section('content')
<!-- Table -->
                <div class="container-fluid">
                    <div class="row">
                        <table id="miyazaki" class="table table-striped table-hover">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <input type="hidden" name="admin_id" value="{{ Auth::id() }}">
                            <thead>
                                <tr>
                                    <th class="info">ID</th>
                                    <th>Content</th>
                                    <th>Date Updated</th>
                                    <th class="warning">Check</th>
                                    <th class="danger">Delete</th>
                                </tr>
                            <tbody>
                                @foreach($confs as $conf)
                                <tr class="line">
                                    <td class="username info">#{{ $conf->id }}</td>
                                    <td>{!! $conf->content !!}</td>
                                    <td>{{ $conf->updated_at }}</td>
                                    @if($conf->level == 0)
                                        <td><button type="button" class="btn btn-success confCheck" value="1" data-route="{{ route('conf.update',$conf->id) }}" data-id="{{$conf->id}}">Check !</button></td>
                                    @else
                                        <td><button type="button" class="btn btn-warning confCheck" value="0" data-route="{{ route('conf.update',$conf->id) }}" data-id="{{$conf->id}}">Uncheck !</button></td>
                                    @endif
                                    <td><button type="button" class="btn btn-danger confDel" data-id="{{$conf->id}}">DELETE</button></td>
                                    <script type="text/javascript">
                                        user_id = "{{ Auth::id() }}";
                                    </script>
                                </tr>
                                @endforeach
                        </table>
                        <!-- Button trigger modal -->
                    </div> <!-- end row table -->
                </div> <!-- end container -->
            <!-- end Table -->
@endsection