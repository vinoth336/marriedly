@extends('layouts.app', ['activePage' => 'typography', 'titlePage' => __('Typography')])

@section('content')

    <link rel="stylesheet" href="{{ asset('web/css/draganddrop.css') }}" type="text/css" />
    <script src="{{ asset('web/js/draganddrop.js') }}"></script>
    <script>
        $(document).ready(function() {
            $("#sortable")
                .sortable({
                    handle: '.hand',
                    group: true,
                    update: function(event, ui) {
                        updateSequence();
                    }
                })
        });

    </script>
    <div class="content">
        <div class="container-fluid">
            <div class="row">

                @if (session('status'))

                    <div class="col-md-12">
                        <div class="alert alert-success">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <i class="material-icons">close</i>
                            </button>
                            <span>{{ session('status') }}</span>
                        </div>
                    </div>

                @endif

                <div class="col-md-12">
                    <div class="card ">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title float-left">{{ __('Enquiries') }}</h4>
                        </div>
                        <?php
                            $sno = 1;
                        ?>
                        <div class="card-body ">
                            <div class="table-responsive">
                                <table id="datatables" class="table table-striped table-no-bordered table-hover dataTable dtr-inline">
                                    <thead class=" text-dark text-bold">
                                        <th>
                                            S NO
                                        </th>
                                        <th>
                                            Name
                                        </th>
                                        <th>
                                            Subject
                                        </th>
                                        <th>
                                            Message
                                        </th>
                                        <th>
                                            Phone No
                                        </th>
                                        <th>
                                            Email
                                        </th>
                                        <th>
                                            On
                                        </th>
                                        <th>
                                            Status
                                        </th>
                                        <th>
                                            Actions
                                        </th>
                                    </thead>
                                    <tbody>
                                        @foreach ($enquiries as $enquiry )
                                            <tr>
                                                <td>{{ $sno++ }}</td>
                                                <td>{{ $enquiry->name }}</td>
                                                <td>{{ $enquiry->subject }}</td>
                                                <td>{{ $enquiry->message }}</td>
                                                <td><a href="tel:{{ $enquiry->phone_no }}">{{ $enquiry->phone_no }}</a></td>
                                                <td><a href="mail:{{ $enquiry->email }}">{{ $enquiry->email }}</a></td>
                                                <td>{{ $enquiry->created_at }}</td>
                                                <td>{{ $enquiry->status }}<i class="material-icons">pencil</i></td>
                                                <td class="text-right">
                                                    <form method="post" action="{{ route('enquiries.destroy', $enquiry->id) }}">
                                                        @csrf
                                                        @method('delete')
                                                    <a href="#" class="btn btn-link btn-warning btn-just-icon show"><i class="material-icons">eye</i></a>
                                                    <button type="submit" class="btn btn-link btn-danger btn-just-icon remove"><i class="material-icons">close</i><div class="ripple-container"></div></button>
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
    <script>

        $(document).ready(function() {

               $("#datatables").dataTable();
        });

        function updateStatus(enquiries_id, status) {
            $.ajax({
                "url": "/admin/enquiries/" + enquiries_id,
                "type": "put",
                "dataType": "json",
                "data": {
                    'status': status
                },
                "success": function(data) {
                    alert("Update Successfully");
                }
            });

        }

    </script>

@endsection
