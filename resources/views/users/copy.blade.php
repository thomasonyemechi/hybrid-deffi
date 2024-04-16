@extends('layout.main')

@section('page_content')
    @php
        $vr = $errors->any() ? 1 : 0;
        $er = session('success') || $errors->any() ? 1 : 0;
        $sr = session('success') ? 1 : 0;
    @endphp
    <div class="container-fluid content-inner pb-0">
        <div class="row pt-2">
            <div class="col-lg-12">
                <div class="card card-block card-stretch custom-scroll">
                    <div class="card-header d-flex flex-wrap justify-content-between align-items-center gap-3">
                        <div class="caption">
                            <h4 class="font-weight-bold mb-2">Deposit History</h4>
                        </div>
                        <div class="btn-group" role="group" aria-label="Basic checkbox toggle button group">
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                data-bs-target="#depositModal">Deposit USDT</button>
                        </div>
                    </div>
                    <div class="card-body">



                        
                        <div class="d-flex justify-content-lg-start">
                            <input type="text" id="wallet_address" readonly class="form-control"   value="TGnKCtgYQgJZGn5EH9xb93aRR8EB6fMxda">
                            <button class="btn btn-primary" onclick="myFunction()" type="submit" >Copy</button>
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
            er = `{{ $er }}`
            vr = `{{ $vr }}`
            sr = `{{ $sr }}`
            if (er > 0) {
                $('#depositModal').modal('show')
            }
            if (vr > 0) {
                $('#dep_1').hide('slowly');
                $('#dep_2').show('slowly');
            }
            if (sr > 0) {
                $('#dep_1').hide('slowly');
                $('#dep_2').hide('slowly');
                $('#dep_3').show('slowly');
            }
            console.log(er);


            $('#depositusdt').on('submit', function() {
                $('.depositusdtbtn').attr('disabled', 'disabled');
            })


            $('.got02').on('click', function() {
                $('#dep_1').hide('slowly');
                $('#dep_2').show('slowly');
            })

            $('.done').on('click', function() {
                $('#depositModal').modal('hide')
                $('#dep_1').show('slowly');
                $('#dep_2').hide('slowly');
                $('#dep_3').hide('slowly');
            })
        })
    </script>


    <script>
        function myFunction() {
            // Get the text field
            var copyText = document.getElementById("wallet_address");

            // Select the text field
            copyText.select();
            copyText.setSelectionRange(0, 99999); // For mobile devices

            // Copy the text inside the text field
            navigator.clipboard.writeText(copyText.value);

            // Alert the copied text
            alert("Wallet address has been copied");
        }
    </script>
@endpush
