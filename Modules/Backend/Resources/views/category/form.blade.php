@extends('layouts.backend.app')
@section('content')
<div class="row">
                    <div class="col">
                        <section class="card">
                        <header class="card-header">
                                    <h2 class="card-title">{{ isset($module) ? 'Edit' : 'Create'}} Category</h2>
                                </header>
                            {{-- <form enctype="multipart/form-data">
                            @csrf
                                <div class="card-body ch-input-wrap">
                                    <div class="add-post-content">
                                       <div class="row">
                                            <div class="col-xl-8 lg-mb-1">
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
                                                                        <textarea class="summernote" data-plugin-summernote data-plugin-options='{ "height": 180, "codemirror": { "theme": "ambiance" } }' name="description">
                                                                        {{$module->description ?? old('description')}}</textarea>
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
                                                                        {{$module->description_bn ?? old('description_bn')}}</textarea>
                                                                    </div>
                                                                    @error('description_bn')
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
                                            <div class="col-xl-4">
                                                <!-- Start Single Post Side -->
                                                <div class="single-post-side card">
                                                    <div class="card-body">
                                                        <div class="row">
                                                            <div class="col-12 mb-4">
                                                                <label class="control-label">Module
                                                                </label>
                                                                <div class="select-width-100-percent input-group">
                                                                    <span class="input-group-addon">
                                                                        <i class="fa fa-eye"></i>
                                                                    </span>
                                                                    <select class="form-control @error('module') is-invalid @enderror" data-plugin-selectTwo  data-plugin-options='{"dropdownAutoWidth": false, "width": "100%"}' name="module" id="module">

                                                                        <option>-- Select --</option>
                                                                        <option>Public</option>
                                                                        <option>Private</option>
                                                                    </select>
                                                                </div>
                                                                @error('module')
                                    <div class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                    </div>
                                    @enderror
                                                            </div>
                                                            <div class="col-12 form-group">
                                                                <label class="control-label">Status
                                                                </label>
                                                                <div class="switch switch-primary d-block">
                                                                    <input type="checkbox" name="status" id="status"
                                                                           data-plugin-ios-switch checked="checked" class="@error('status') is-invalid @enderror"/>
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
                                                <!-- End of Single Post Side -->
                                            </div>
                                        </div> 
                                    </div>               
                                    
                                </div>
                                <footer class="card-footer text-right">
                                    <button class="btn btn-sm btn-primary" type="submit">
                                     @isset($category)
                                        <i class="fa fa-arrow-circle-up"></i>&nbsp;Update
                                </button>
                                @else
                                    <i class="fa fa-plus-circle"></i>&nbsp;Create</button>
                                @endisset
                                    <button type="reset" class="btn btn-sm btn-default">Reset</button>
                                </footer>
                            </form> --}}
                            <br/>
                            <form>
                            <input type="text" class="form-control" name="name" id="name">
                            <input type="submit" value="Add">
                            </form>
                        </section>
                    </div>
                </div>

                <script>
const formElement = document.querySelector('form');
 formElement.addEventListener('submit', (event)=>{
     event.preventDefault();
     console.log(event.target.name.value);
     alert("ok");

});
</script>

@endsection
@push('js')

@endpush