@extends('layout.main')

@section('page_content')
    <div class="container-fluid content-inner pb-0">
        <div class="row pt-2">
            <div class="col-lg-12">
                <div>
                    <div class="d-flex mb-3 justify-content-lg-start">
                        <input type="text" id="input_field" readonly
                            class="form-control shadow text-danger bg-light form-control-sm fw-bold me-2"
                            style="border: 2px solid red;"
                            value="https://hybriddefi.com/launch?ref={{ auth()->user()->ref }}">
                        <button class="btn bg-light fw-bold text-danger shadow " style="border: 2px solid red;"
                            onclick="yourFunction()" type="submit">Copy</button>
                    </div>
                </div>

                <div class="card card-block card-stretch custom-scroll">
                    <div class="card-header d-flex flex-wrap justify-content-between align-items-center gap-3">
                        <div class="caption">
                            <h4 class="font-weight-bold mb-2">Partners</h4>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-sm mb-0">
                                <thead>
                                    <tr>
                                        <th scope="col">Wallet</th>
                                        <th scope="col">Timestamp</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($direct_downlines as $user)
                                        <tr class="white-space-no-wrap">
                                            <td class="pe-2">
                                                {{ isset($user->wallet) ? $user->wallet : $user->username }} </td>
                                            <td> {{ $user->created_at }} </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>



                
                <div class="card card-block card-stretch custom-scroll">
                    <div class="card-header d-flex flex-wrap justify-content-between align-items-center gap-3">
                        <div class="caption">
                            <h4 class="font-weight-bold mb-2">Statistics</h4>
                        </div>
                    </div>
                    <div class="card-body">

                        <div class="row">
                            <div class="col-md-4 ">
                                <div class="card border-bottom border-1 border-warning ">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div>
                                                <span>Total Partners </span>
                                            </div>
                                            <div>
                                                <span class="counter" style="visibility: visible;"> $
                                                    {{ number_format(0) }}
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="col-md-4 ">
                                <div class="card border-bottom border-1 border-danger">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div>
                                                <span>Valid Partners </span>
                                            </div>
                                            <div>
                                                <span class="counter" style="visibility: visible;"> $
                                                    {{ number_format(0) }}
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="col-md-4 ">
                                <div class="card border-bottom border-1 border-info">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div>
                                                <span>Royalty Strength </span>
                                            </div>
                                            <div>
                                                <span class="counter" style="visibility: visible;"> $
                                                    {{ number_format(0) }}
                                                </span>
                                            </div>
                                        </div>
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

@push('scripts')
    <script>
        const input_field = document.getElementById('input_field')

        function yourFunction() {
            input_field.select(); // select the input field
            input_field.setSelectionRange(0, 99999); // For mobile devices
            navigator.clipboard.writeText(input_field.value)

        }
    </script>
@endpush
