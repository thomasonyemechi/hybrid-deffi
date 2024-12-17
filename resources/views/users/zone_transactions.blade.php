@extends('layout.main')

@section('page_content')
    <div class="container-fluid content-inner pb-0">





        <div class="row">
            <div class="col-lg-12">
                <h4 class="font-weight-bold mb-3">Recent Transaction</h4>

                <div class="table-responsive shadow p-1 rounded-3">
                    <table class="table data-table mb-0">
                        <thead>
                            <tr>
                                <th scope="col">Amount</th>
                                <th scope="col">Description</th>
                                <th scope="col">Slot</th>
                                <th scope="col">Timestamp</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($transactions as $trno)
                                <tr>

                                    <td>

                                        <img src="{{ $trno->currency == 'usdt' ? '../../assets/images/coins/01.png' : '../../assets/images/coins/00.png' }}"
                                            class="img-fluid avatar avatar-30 avatar-rounded" alt="">
                                        <span class="fw-bold">
                                            @if ($trno->amount < 0)
                                                <span class="text-danger">
                                                    <svg width="10" height="8" viewBox="0 0 8 5" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M4 4.5L0.535898 0L7.4641 0L4 4.5Z" fill="#FF2E2E">
                                                        </path>
                                                    </svg>
                                                    {{ number_format(abs($trno->amount), 2) }}
                                                    {{ $trno->currency }}
                                                </span>
                                            @else
                                                <span class="text-success">
                                                    <svg width="10" height="8" viewBox="0 0 8 5" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M4 0.5L7.4641 5H0.535898L4 0.5Z" fill="#00EC42">
                                                        </path>
                                                    </svg>
                                                    {{ number_format($trno->amount, 2) }}
                                                    {{ $trno->currency }}

                                                </span>
                                            @endif
                                        </span>
                                    </td>

                                    <td> {{ $trno->remark }} </td>
                                    <td>
                                        @if ($trno->slot_ref > 0)
                                            <div class="badge" style="background-color: {{ $trno->slot->color }} " >
                                                slot {{ $trno->slot_ref }}
                                            </div>
                                        @endif
                                    </td>
                                    <td> {{ formatDate($trno->created_at) }} </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                <div class="mt-2 d-flex  justify-content-end ">
                    {{ $transactions->links('pagination::bootstrap-4') }}
                </div>
            </div>
        </div>
    </div>
@endsection


@push('scripts')
@endpush
