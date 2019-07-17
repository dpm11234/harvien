@extends('welcome')
@section('css')
<link href="{{ asset('css/pages/my-cart.css') }}" rel="stylesheet">
<link href="{{ asset('css/components/my-product.css') }}" rel="stylesheet">
@endsection
@section('content')

<div class="container">
    <div class="row">
        <div class="col-lg-8">
            <div class="harvee-title mt-4 mb-2">
                <div class="container line p-0">
                    <div class="row mb-2 font-weight-bold">
                        <div class="col-lg-7">
                            Product
                        </div>
                        <div class="col-lg-1">
                            Price
                        </div>
                        <div class="col-lg-2">
                            Amount
                        </div>
                        <div class="col-lg-2">
                            Subtotal
                        </div>
                    </div>
                </div>
            </div>
            @include('components.my-product');
        </div>
        <div class="col-lg-4">
            <div class="harvee-summary mt-4">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 line">
                            <h3 class="font-weight-bold my-2 mx-0 pb-2 ">
                                Summary
                            </h3>
                        </div>
                        <div class="col-lg-12">
                            <div id="accordion-1" class="harvee-accordion">
                                <div class="card">
                                    <div class="card-header mt-2" id="fashion">
                                        <h5 class="mb-0">
                                            <button class="btn text-uppercase font-weight-bold collapsed p-0" data-toggle="collapse" data-target="#collapseSummary" aria-expanded="false" aria-controls="collapseSummary">
                                                Estimate Shipping and Tax
                                            </button>
                                        </h5>
                                    </div>
                                    <div id="collapseSummary" class="collapse line" aria-labelledby="fashion" data-parent="#accordion-1">
                                        <div class="card-body mb-3">
                                            <div class="card-body">
                                                <label for="city" class="m-0"> City</label>
                                                <select class="w-100 p-2 my-2" name="city" id="cityChosen">
                                                    <option value="HCM">Saigon</option>
                                                </select>
                                                <label for="state" class="m-0"> State</label>
                                                <select class="w-100 p-2 my-2" name="state" id="stateChosen">
                                                    <option value="HCM">Thu Duc</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="col-lg-12 p-0 line">
                                <p class="my-2 mx-0 pb-2 ">
                                    Subtotal:
                                </p>
                            </div>
                            <div class="col-lg-12 p-0 line">
                                <p class="my-2 mx-0 pb-2 ">
                                    Promotion:
                                </p>
                            </div>
                            <div class="col-lg-12 p-0 my-4">
                                <button class="btn btn-primary w-100 text-uppercase">
                                    checkout
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
@push('script')

@endpush