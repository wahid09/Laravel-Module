{{-- @extends('backend::layouts.master')

@section('content')
    <h1>Hello World</h1>

    <p>
        This view is loaded from module: {!! config('backend.name') !!}
    </p>
@endsection --}}

@extends('layouts.backend.app')
@section('content')
<div class="card">
<div class="card-header d-flex justify-content-between align-items-center">
<h5 class="">
  Title
</h5>
<a class="btn btn-primary" href="{{route('module.create')}}"><i class="fa fa-plus-circle"></i>&nbsp;<span>Create New</span></a>
</div>
<div class="card-body">
<div class="row">
                        <div class="col">
                            <div class="tabs tabs-dark">
                                
                                <div class="tab-content">
                                    <div id="all" class="tab-pane active">
                                        <div class="card">
                                            <div class="card-body">
                                                <table class="table table-bordered table-striped mb-0" id="datatable-all">
                                                    <thead>
                                                        <tr>
                                                            <th>S\N</th>
                                                            <th>Name(English)</th>
                                                            <th>Name(Bangle)</th>
                                                            <th>Status</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                    @foreach($moduleList as $item)
                                                        <tr>
                                                            <td>{{$loop->index+1}}</td>
                                                            <td>{{$item->name}}</td>
                                                            <td>{{$item->name_bn}}</td>
                                                            <td>
                                                            @if($item->status == 1)
                                                            <span>Active</span>
                                                            @else 
                                                            <span>Inactive</span>
                                                            @endif
                                                            </td>
                                                            <td class="table-action-btn">
                                                                <a href="{{ route('module.edit', $item->id)}}" class="btn btn-warning"><i class="fa fa-edit"></i></a>
                                                                
                                                                <button onclick="deleteData({{$item->id}})" type="button" class="btn btn-danger"><i class="fa fa-trash"></i></button>
                                    <form id="delete-{{$item->id}}" method="POST" action="{{ route('module.destroy', $item->id) }}" style="display:none;">
                                        @csrf
                                        @method('DELETE')
                                    </form>
                                                            </td>
                                                        </tr>
                
                                                    @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>                                   
                                </div>
                            </div>
                        </div>
                    </div>
</div>
</div>

@endsection
