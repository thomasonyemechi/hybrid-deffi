@extends('layout.main')

@section('page_content')
    <div class="container-fluid content-inner pb-0">
        <div class="row pt-2">
            <div class="col-lg-12">
                <div class="card card-block card-stretch custom-scroll">
                    <div class="card-header d-flex flex-wrap justify-content-between align-items-center gap-3">
                        <div class="caption">
                            <h4 class="font-weight-bold mb-2">Received Funds</h4>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table data-table mb-0">
                                <thead>
                                    <tr>
                                        <th scope="col">Amount</th>
                                        <th scope="col">Sender</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Description</th>
                                        <th scope="col">Timestamp</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($received as $dep)
                                        <tr class="white-space-no-wrap">
                                            <td class="pe-2"> {!! depositAmount($dep->amount) !!} </td>
                                            <td class="pe-2"> {{ $dep->sender->username }} </td>
                                            <td>
                                                <div class="badge  bg-success">
                                                    successful
                                                </div>
                                            </td>
                                            <td> Fund received </td>
                                            <td> {{ $dep->created_at }} </td>
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
@endsection
