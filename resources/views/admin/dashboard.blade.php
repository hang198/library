@extends('layouts.app')

@section('content')
    <section class="content">
        <div class="container">
            <div class="row">

                <div class="col-lg-4 col-12">
                    <div class="box pull-up">
                        <div class="box-body py-40">
                            <div class="text-center">
                                <h6 class="text-fade mb-20">Your Balance</h6>
                                <h1>$125,000</h1>
                                <h6 class="text-fade mb-10">Total</h6>
                                <button type="button" class="btn btn-rounded btn-primary mt-10 btn-sm">Statistics
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-12">
                    <div class="box pull-up">
                        <div class="box-body py-40">
                            <div class="text-center">
                                <h6 class="text-fade mb-20">Your saving this month</h6>
                                <h1>+$3,5000</h1>
                                <h6 class="text-fade mb-10">of your $2,600 goal.</h6>
                                <button type="button" class="btn btn-rounded btn-success mt-10 btn-sm">Adjust Goal
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-12">
                    <div class="box pull-up">
                        <div class="box-body px-0 py-30">
                            <div class="text-center">
                                <span class="donut"
                                      data-peity='{ "fill": ["#fda006", "#eeeeee"],"innerRadius": 78, "radius": 86.5 }'>1/4</span>
                                <div class="ovd">
                                    <h1 class="mb-0">1/4</h1>
                                    <p>Overdue invoices</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-12">
                    <div class="box pull-up">
                        <div class="box-body py-40">
                            <div class="text-center">
                                <h6 class="text-fade mb-20">Your credit limit</h6>
                                <h1>$8,000</h1>
                                <h6 class="text-fade mb-10">You're good!</h6>
                                <button type="button" class="btn btn-rounded btn-warning mt-10 btn-sm">Credit History
                                </button>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-lg-4 col-12">
                    <div class="box pull-up">
                        <div class="box-body py-40">
                            <div class="text-center">
                                <h6 class="text-fade mb-20">Recent transaction</h6>
                                <h1>+$250</h1>
                                <h6 class="text-fade mb-10">From <span class="text-success">Johen Doe</span></h6>
                                <button type="button" class="btn btn-rounded btn-danger mt-10 btn-sm">Recent
                                    transactions
                                </button>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-lg-4 col-12">
                    <div class="box pull-up">
                        <div class="box-body py-40">
                            <div class="text-center">
                                <h6 class="text-fade mb-20">Interest</h6>
                                <h1>+$2,500</h1>
                                <h6 class="text-fade mb-10">Since 15 March, 2019</h6>
                                <button type="button" class="btn btn-rounded btn-info mt-10 btn-sm">Interest
                                    Statistics
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
