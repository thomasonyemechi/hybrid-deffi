@extends('layout.admin02')
@section('page_content')
    <div class="container-fluid content-inner pb-0">



        <div class="row">
            <div class="col-lg-12 col-md-12 col-12">
                <div class=" pb-4 mb-4 d-md-flex justify-content-between align-items-center">
                    <div class="mb-3 mb-md-0">
                        <h1 class="mb-0 h2 fw-bold">Slot {{ $slot->id }} Missed Earnings ( {{\App\Models\MissedEarning::where(['zone_id' => $slot->id])->sum('amount')  }} USDT ) </h1>
                    </div>
                </div>
            </div>
        </div>


        <div class="row mb-4">


            <div class="row">
                <div class="col-md-12">
                    <div class="card card-block card-stretch custom-scroll">
                        <div class="card-body p-0">
                            <div class="caption d-flex justify-content-between  p-2">
                                <h4 class="font-weight-bold mt-2">Slot Missed Earnings</h4>

                                <a class="btn btn-outline-warning" href="/admin/slot/{{ $slot->id }}"> <i class="fa fa-arrow-left" ></i>  Back to Slot</a>
                            </div>
                            <div class="table-responsive">



                                <table class="table data-table mb-0">
                                    <thead>
                                        <tr>
                                            <th scope="col">User Walelt </th>
                                            <th scope="col">Amount</th>
                                            <th scope="col" class="text-end">Date  </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($earnings as $missed)
                                            <tr>
                                                <td>
                                                    <span class="title fw-bold">
                                                        {{ substr($missed->user->wallet, 0, 6) . '...' . substr($missed->user->wallet, -6) }}
                                                    </span>
                                                </td>

                                                <td>
                                                    <span class="text-danger">
                                                        <svg width="10" height="8" viewBox="0 0 8 5" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M4 4.5L0.535898 0L7.4641 0L4 4.5Z" fill="#FF2E2E">
                                                            </path>
                                                        </svg>
                                                        {{ number_format($missed->amount, 2)}} USDT
                                                    </span>
                                                </td>
                                                <td class="text-end"> {{ $missed->created_at }} </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>

                            <div class="d-flex justify-content-end mt-3 ">
                                {{ $earnings->links('pagination::bootstrap-4') }}
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
        $(function() {
            $('.editSlot').on('click', function() {
                $('#editSlot').modal('show')
            })
        })
    </script>
@endpush
