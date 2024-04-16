@extends('layout.main')

@section('page_content')
    <div class="container-fluid content-inner pb-0">
        <div class="row pt-2">
            <div class="col-lg-12">
                {{-- <div>
                    <div class="d-flex mb-3 justify-content-lg-start">
                        <input type="text" id="input_field" readonly
                            class="form-control shadow text-danger bg-light form-control-sm fw-bold me-2"
                            style="border: 2px solid red;" value="http://hybriddefi.com/launch?ref={{ auth()->user()->ref }}">
                        <button class="btn bg-light fw-bold text-danger shadow " style="border: 2px solid red;"
                            type="submit">Copy</button>
                    </div>
                </div> --}}




                <div class="card card-block card-stretch custom-scroll">
                    <div class="card-header d-flex flex-wrap justify-content-between align-items-center gap-3">
                        <div class="caption">
                            <h4 class="font-weight-bold mb-2">Earnings</h4>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table data-table mb-0">
                                <thead>
                                    <tr>
                                        <th scope="col">Amount</th>
                                        <th scope="col">Participant</th>
                                        <th scope="col">Description</th>
                                        <th scope="col">Timestamp</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($earnings as $dep)
                                        <tr class="white-space-no-wrap">
                                            <td class="pe-2"> {!! depositAmount($dep->amount) !!} </td>
                                            <td class="pe-2"> {{ $dep->downliner->username }} </td>

                                            <td> Earned </td>
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