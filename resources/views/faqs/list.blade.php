@extends('layouts.app', ['activePage' => 'typography', 'titlePage' => __('Typography')])

@section('content')

<link rel="stylesheet" href="{{ asset('web/css/draganddrop.css') }}" type="text/css" />
    <script src="{{ asset('web/js/draganddrop.js') }}"></script>
    <script>
        $(document).ready(function() {
            $("#sortable")
                .sortable({
                    handle: '.hand',
                    group: true
                })
        });

    </script>
    <div class="content">
        <div class="container-fluid">
            <div class="row">

                <div class="col-md-12">
                    <form method="post" action="{{ route('profile.update') }}" autocomplete="off" class="form-horizontal">
                        @csrf
                        @method('put')

                        <div class="card ">
                            <div class="card-header card-header-primary">
                                <h4 class="card-title">{{ __('Faqs') }}</h4>

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


                                <ul class="accordion" id="sortable">
                                    <li class="card">
                                        <div class="card-header" id="headingOne">
                                            <h5 class="mb-0" data-toggle="collapse"
                                                    data-target="#collapseOne" aria-expanded="true"
                                                    aria-controls="collapseOne">
                                                    <a class="hand"><b>Handle</b></a>
                                                    Collapsible Group Item #1
                                            </h5>
                                        </div>

                                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                                            data-parent="#accordionExample">
                                            <div class="card-body">
                                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                                                richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard
                                                dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon
                                                tempor, sunt aliqua put a bird on it squid single-origin coffee nulla
                                                assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore
                                                wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher
                                                vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic
                                                synth nesciunt you probably haven't heard of them accusamus labore
                                                sustainable VHS.
                                            </div>
                                        </div>
                                    </li>
                                    <li class="card">
                                        <div class="card-header" id="headingTwo">
                                            <h5 class="mb-0" data-toggle="collapse"
                                                    data-target="#collapseTwo" aria-expanded="false"
                                                    aria-controls="collapseTwo">
                                                    <a class="hand"><b>Handle</b></a>
                                                        Collapsible Group Item #2
                                            </h5>
                                        </div>
                                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                                            data-parent="#accordionExample">
                                            <div class="card-body">
                                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                                                richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard
                                                dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon
                                                tempor, sunt aliqua put a bird on it squid single-origin coffee nulla
                                                assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore
                                                wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher
                                                vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic
                                                synth nesciunt you probably haven't heard of them accusamus labore
                                                sustainable VHS.
                                            </div>
                                        </div>
                                    </li>
                                    <li class="card">
                                        <div class="card-header" id="headingThree">
                                            <h5 class="mb-0" data-toggle="collapse"
                                                    data-target="#collapseThree" aria-expanded="false"
                                                    aria-controls="collapseThree">
                                                    <a class="hand"><b>Handle</b></a>
                                                        Collapsible Group Item #3
                                            </h5>
                                        </div>
                                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                                            data-parent="#accordionExample">
                                            <div class="card-body">
                                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                                                richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard
                                                dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon
                                                tempor, sunt aliqua put a bird on it squid single-origin coffee nulla
                                                assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore
                                                wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher
                                                vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic
                                                synth nesciunt you probably haven't heard of them accusamus labore
                                                sustainable VHS.
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="card-footer ml-auto mr-auto">
                                <button type="submit" class="btn btn-primary">{{ __('Save') }}</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
