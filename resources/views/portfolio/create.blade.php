@extends('layouts.app', ['activePage' => 'Portfolio Images', 'titlePage' => __('Create Portfolio Images')])

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <form method="post" action="{{ route('portfolio.store') }}" autocomplete="off" class="form-horizontal" enctype="multipart/form-data">
                        @csrf
                        @method('post')

                        <div class="card ">
                            <div class="card-header card-header-primary">
                                <h4 class="card-title">{{ __('Create Portfolio Images') }}</h4>

                            </div>
                            <div class="card-body ">
                                @if (session('status'))
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="alert alert-success">
                                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                    <i class="material-icons">close</i>
                                                </button>
                                                <span>{{ session('status') }}</span>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                                <div class="row">

                                    <label class="col-sm-2 col-form-label">{{ __('Name') }}</label>
                                    <div class="col-sm-7">
                                        <div class="form-group{{ $errors->has('question') ? ' has-danger' : '' }}">
                                            <input
                                                class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}"
                                                name="name" id="input-name" type="text"
                                                placeholder="{{ __('Image Name') }}" value="{{ old('name') }}"
                                                required="true" aria-required="true" />
                                            @if ($errors->has('name'))
                                                <span id="name-error" class="error text-danger"
                                                    for="input-name">{{ $errors->first('name') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="row">

                                    <label class="col-sm-2 col-form-label">{{ __('Service') }}</label>
                                    <div class="col-sm-7">
                                        <div class="form-group{{ $errors->has('service') ? ' has-danger' : '' }}">
                                            <select
                                                class="selectpicker form-control{{ $errors->has('service') ? ' is-invalid' : '' }}"
                                                name="service" id="input-service" type="text"
                                                placeholder="{{ __('Image Name') }}"
                                                required="true" aria-required="true" >

                                                @foreach($services as $service)

                                                    <option value="{{ $service->id }}" @if($service->id == old('service')) selected @endif >{{  $service->name }}</option>

                                                @endforeach

                                            </select>
                                            @if ($errors->has('service'))
                                                <span id="service-error" class="error text-danger"
                                                    for="input-service">{{ $errors->first('service') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-sm-2 col-form-label">{{ __('Description') }}</label>
                                    <div class="col-sm-7">
                                        <div class="form-group{{ $errors->has('description') ? ' has-danger' : '' }}">
                                            <textarea
                                                class="form-control{{ $errors->has('description') ? ' is-invalid' : '' }}"
                                                name="description" id="description" placeholder="{{ __('Description') }}"
                                                required>{{ old('description') }}</textarea>
                                            @if ($errors->has('description'))
                                                <span id="phone_no-error" class="error text-danger"
                                                    for="input-phone_no">{{ $errors->first('description') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                {{-- <div class="row">
                                    <label class="col-sm-2 col-form-label">{{ __('Banner') }}</label>
                                    <div class="col-sm-7">

                                        <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                                            <div class="fileinput-new thumbnail">
                                              <img src="{{ asset('material') }}/img/image_placeholder.jpg" alt="...">
                                            </div>
                                            <div class="fileinput-preview fileinput-exists thumbnail"></div>
                                            <div>
                                              <span class="btn btn-rose btn-round btn-file">
                                                <span class="fileinput-new">Select image</span>
                                                <span class="fileinput-exists">Change</span>
                                                <input type="file" name="portfolio_banner_image" accept="image/x-png,image/jpg,image/jpeg" >
                                              </span>
                                              <a href="#pablo" class="btn btn-danger btn-round fileinput-exists" data-dismiss="fileinput"><i class="fa fa-times"></i> Remove</a>
                                            </div>
                                          </div>
                                          @if ($errors->has('portfolio_banner_image'))
                                                <span id="name-error" class="error text-danger"
                                                    for="input-name">{{ $errors->first('portfolio_banner_image') }}</span>
                                          @endif
                                    </div>
                                </div> --}}
                                <div class="row">
                                    <h2 class="col-sm-2 col-form-label ">
                                        Portfolio Images
                                    </h2>
                                </div>

                                <div class="row">
                                    <div class="col-sm-2"></div>
                                    <div class="col-sm-7">
                                        <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                                                <input type="file" name="portfolio_images[]" accept="image/x-png,image/jpg,image/jpeg" multiple>
                                          </div>
                                          @if ($errors->has('portfolio_images'))
                                                <span id="name-error" class="error text-danger"
                                                    for="input-name">{{ $errors->first('portfolio_images') }}</span>
                                          @endif
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer ml-auto mr-auto">
                                <a href="{{ route('portfolio.index') }}" class="btn btn-info">{{ __('Cancel') }}</a>

                                <button type="submit" class="btn btn-primary">{{ __('Save') }}</button>

                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
