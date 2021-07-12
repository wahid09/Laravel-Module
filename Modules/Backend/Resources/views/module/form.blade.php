@extends('layouts.backend.app')
@section('content')
<div class="row">
                    <div class="col">
                        <section class="card">
                        <header class="card-header">
                                    <h2 class="card-title">{{ isset($module) ? 'Edit' : 'Create'}} Module</h2>
                                </header>
                            <form action="{{ isset($module) ? route('module.update', $module->id) : route('module.store')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @isset($module)
                             @method('PUT')
                            @endisset
                                <div class="card-body ch-input-wrap">
                                    <div class="add-post-content">
                                       <div class="row">
                                            <div class="col-xl-12 lg-mb-1">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <div class="row">
                                                            <div class="col-12 mb-4">
                                                                <label class="control-label">Name(English) 
                                                                </label>
                                                                <div class="input-group">
                                                                    <span class="input-group-addon">
                                                                        <i class="fa fa-hand-o-right"></i>
                                                                    </span>
                                                                    <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror" value="{{ $module->name ?? old('name') }}"/>

                                                                    
                                                                </div>
                                                                @error('name')
                                    <div class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                    </div>
                                    @enderror
                                                            </div>
                                                            <div class="col-12 mb-4">
                                                                <label class="control-label">Name(Bangla)
                                                                </label>
                                                                <div class="input-group">
                                                                    <span class="input-group-addon">
                                                                        <i class="fa fa-external-link-square"></i>
                                                                    </span>
                                                                    <input type="text" name="name_bn" id="name_bn" class="form-control @error('name_bn') is-invalid @enderror" value="{{ $module->name_bn ?? old('name_bn') }}"/>
                                                                </div>
                                                                @error('name_bn')
                                    <div class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                    </div>
                                    @enderror
                                                            </div>

                                                            <div class="col-12 form-group">
                                                                <label class="control-label">Description(English)
                                                                </label>
                                                                <div class="pageContent">
                                                                    <div class="form-group">
                                                                        <textarea class="summernote" data-plugin-summernote data-plugin-options='{ "height": 180, "codemirror": { "theme": "ambiance" } }' name="description">{{ $module->description ?? old('description') }}</textarea>
                                                                    </div>
                                                                    @error('description')
                                    <div class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                    </div>
                                    @enderror
                                                                </div>
                                                            </div>

                                                            <div class="col-12 form-group">
                                                                <label class="control-label">Description(Bangla)
                                                                </label>
                                                                <div class="pageContent">
                                                                    <div class="form-group">
                                                                        <textarea class="summernote" data-plugin-summernote data-plugin-options='{ "height": 180, "codemirror": { "theme": "ambiance" } }' name="description_bn">
                                                                        {{ $module->description_bn ?? old('description_bn') }}
                                                                        </textarea>
                                                                    </div>
                                                                    @error('description_bn')
                                    <div class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                    </div>
                                    @enderror
                                                                </div>
                                                            </div>
                                                            <div class="col-12 form-group">
                                                                <label class="control-label">Status
                                                                </label>
                                                                <div class="switch switch-primary d-block">
                                                                    <input type="checkbox" name="status" id="status"
                                                                           data-plugin-ios-switch checked="checked"/>
                                                                </div>
                                                                @error('status')
                                    <div class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                    </div>
                                    @enderror
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                        </div> 
                                    </div>               
                                    
                                </div>
                                <footer class="card-footer text-right">
                                    <button class="btn btn-sm btn-primary">Add </button>
                                    <button type="reset" class="btn btn-sm btn-default">Reset</button>
                                </footer>
                            </form>
                        </section>
                    </div>
                </div>

@endsection