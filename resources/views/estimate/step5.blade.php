@extends('layouts.app')`
<!-- Preview Invoice -->

@section('styles')
    <style> 
        @import url('https://fonts.googleapis.com/css?family=Ubuntu&display=swap');
        
        *{
            font-family: 'Ubuntu', sans-serif;
            font-weight: bold;
            margin: 0;}
        
        body{
            background-color: #F2F3F3;;
        }
        .container-a{
            display:flex;
            background: white;
            font-size: 0.8em !important;
            height: 50px;
            align-items: center;
        }

        .container-a > div{
            border: 1px solid #ccc;
            padding: 10px;
            text-align: center;
            font-size: 1rem;
            height: 50px;
        }
        .box-1{
            color: #C4C4C4;
            flex-flow: column wrap;
            flex-grow: 1;
            color: #C4C4C4;
        }
        
        .container-a>.box-2{
            flex:1;
            color: #C4C4C4;
            
        }
        
        .container-a>.box-3{
            flex:2;
            cursor: pointer;
            
        }
        .container-a>.box-4{
            flex:4;
            
        }
        .box-1:hover, .box-2:hover, .box-3:hover {
            background:#0ABAB5;
            transition: all 0.3s ease 0s;
            border-color: #0ABAB5;
            color: white;
            cursor: pointer;

        }
        .container-a>.box-5{
            flex:2; 
            background: #0ABAB5;
            cursor: pointer;
            border: none;
        }
        .container-a>.box-5:hover{
            background:  rgb(5, 128, 123);
            transition: all 0.3s ease 0s;
        }

        .sendInvoice {
            color: white;
            border: none;
            background:none;
            height: 100%;
            cursor: pointer;
        }

        img:hover{
            color: white;
        }

        .card {
            border: 0px
        }
        
        .mainContent {
            margin-left: 20px;
            margin-right: 20px;
            margin: auto;
            margin-top: 100px;
            max-width: 550px;
            position: relative;
            background: #FFFFFF;
            /* Secondary blue */

            border: 5px solid #0ABAB5;
            box-sizing: border-box;
        }
        
        .mainContentBelowLogo {
            margin-left: 20px;
            margin-right: 20px;
            margin-top: 200px;
        }
        
        .topMenu {
            margin-left: auto;
            margin-right: auto;
            margin-top: 15px
        }

        .editInvoice {
            background-color: #00FFA3;
            color: #333333;
            font-weight: 700;
            border: none;
            border-radius: 0%;
            font-size: 0.8rem;
            padding-top: 10px;
            padding-bottom: 10px;
            max-width: 200px;
        }

        .editInvoice:hover {
            background-color: #03E493;
            color: #333333;
        }

        .invoiceSettings{
            color: #B1B1B1;
            font-size: 0.8em;
        }

        .invoiceSettings p{
            margin-top: auto;
            margin-bottom: auto;
        }
        
        .addressAndPayment{
            margin: auto;
            font-size: 0.8em;
            margin-top: 30px;
        }
        
        .address {
            width: 99px;
            height: 77px;
            margin: auto;

        }
        
        .payment {
            max-width: 300px;
            font-weight: bold;
        }
        
        .issueDate {
            margin-right: 30px;
        }
        
        .paymentButton {
            font-style: normal;
            font-weight: bold;
            font-size: 1em;
            border: 0px;
            border-radius: 0px;
            line-height: 32px;
            text-align: center;
            background-color: #0ABAB5;
            color: #FFFFFF;
            padding: 2px;
        }
        
        .invoiceDetails {
            margin-left: auto;
            margin-right: auto;
        }


        th, td {
            padding-left: 0px !important;
            padding-right: 28px !important;
        }

        .table-card {
            width: 100%;
        }

        .card-body {
            margin: 0px;
            padding: 0px !important;
            width: 100%
        }

        .bottomSpace{
            margin-bottom: 50px;
        }

        .address{
            margin-right: 30px;
        }

        .menuForSmallScreens {
                display: none;
            }

        /* Media Queries to make things look better on mobile devices including switching the navbar to a more mobile friendly version */
        @media only screen and (max-width: 600px) {
            .mainContent{
                margin-top: 50px;
            }

            .addressCard{
                display: none;
            }

            .addressAndPayment.row {
                padding: 0% !important;
            }
            .payment{
                margin-left: auto !important;
                margin-right: auto !important;
                margin-bottom: 20px !important;
                width: 100% !important;
                max-width: 100% !important;
                
            }

            .menuForLargeScreens {
                display: none;
            }

            .menuForSmallScreens {
                display: flex;
            }
        }
        a:hover{cursor: pointer;}
    </style>
@endsection


@section('content')
<div class="pageBackground">
    <!-- This is the navbar for small screens -->
    <header class="container-a menuForSmallScreens">
            <div class="box-1" style="max-width: 50px">
                    <i class="fa fa-times" aria-hidden="true"></i>
            </div>
            <div class="box-2" style="max-width: 50px">
                <i class="fa fa-chevron-left" aria-hidden="true"></i>
            </div>
    
            <div class="box-3">
                Save
            </div>
            <div class="box-4">
                Invoice
            </div>
            <div class="box-5">
                <form method="post" id="form">
                @csrf
                </form>
                <a href="#"><button  onClick="sendInvoice( {{$data['invoice_no']}} )" class="sendInvoice">SEND</button></a>
            </div>
    </header>

    <!-- This is the navbar for large screens -->
    <header class="container-a menuForLargeScreens">
            <!-- <header> -->
            <div class="box-1" style="max-width: 50px">
                    <i class="fa fa-times" aria-hidden="true"></i>
            </div>
            <div class="box-2" style="max-width: 50px">
                <i class="fa fa-chevron-left" aria-hidden="true"></i>
            </div>
    
            <div class="box-3" style="max-width: 150px">
                Save and Close
            </div>
            <div class="box-4">
                Invoice
            </div>
            <div class="box-5" style="max-width: 150px">
                <a href="#" onClick="sendInvoice( {{$data['invoice_no']}} )"><button class="sendInvoice">SEND INVOICE</button></a>
            </div>
    </header>
    <main>
    <div class=" container mainContent">
            <section>
                <div class="row topMenu">
                    <button type="button" class="btn btn-sm editInvoice "><i class="fa fa-pencil" aria-hidden="true"></i>&nbsp;EDIT INVOICE</button>
                    <div class="ml-auto">
                        <a class="invoiceSettings" href=""></a>
                            <p>
                                <i class="fas fa-cog"></i> Invoice Settings
                            </p>
                    </div>
                </div>
            </section>

            <section class="mainContentBelowLogo">
                <section>
                
                <div class="addressAndPayment row">
                    <div class="card addressCard" style="font-weight: normal">
                        <div style="font-weight: bold">{{$data['company']}}</div>
                        {{$data['company_address']}}<br>
                        {{$data['company_country']}}
                    </div>

                    <div class="card payment ml-auto">
                        <div style="font-size: 0.8em; color: #B1B1B1">Amount Due</div>

                        <div class="Amount" style="font-size: 2em; font-weight: bold">{{$data['currency_symbol']}}{{$data['total']}} <span style="font-size: 0.5em">{{$data['currency']}}</span></div>

                        <div>
                            <div class="issueDate float-left">
                                <div style="font-size: 0.8em; color: #B1B1B1">Issued <p style="font-size: 1.2em; color: black">{{$data['issued_date']}}</p></div>
                            </div>

                            <div class="dueDate float-left">
                                <div style="font-size: 0.8em; color: #B1B1B1">Due<p style="font-size: 1.2em; color: black">{{$data['due']}}</p></div>
                            </div>
                        </div>

                        <button type="button" class="btn btn-primary paymentButton">Pay with Flutterwave</button>
                    </div>
                </div>
                
                </section>

            <section class="invoiceDetails row">
                <div class=" table-card" style="margin-top: 10px">
                    <div class="">
                        Invoice <span style="font-weight: bold; font-size: 0.6em; color: #B1B1B1">No. {{$data['invoice_no']}}</span> <p class="serviceRendered" style="margin-top: 10px">Glacier Fintech App</p>
                    </div>
                    <div class="tableSection" style="font-size: 0.8em; width: 100%; overflow-x: scroll">
                        <table class="table">
                            <thead>
                            <tr style="border-top-style: hidden">
                                <th style="width: 70%">Description</th>
                                <th scope="col">Qty</th>
                                <th scope="col">Price</th>
                                <th scope="col">Amount</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr scope="row">
                                <td style="font-weight:normal">Workmanship</td>
                                <td style="font-weight:normal">1</td>
                                <td style="font-weight:normal">{{$data['currency_symbol']}}{{$data['workmanship']}}</td>
                                <td style="font-weight:normal">{{$data['currency_symbol']}}{{$data['workmanship']}}</td>
                            </tr>
                            <tr scope="row">
                                <td style="font-weight:normal">Equipment</td>
                                <td style="font-weight:normal">1</td>
                                <td style="font-weight:normal">{{$data['currency_symbol']}}{{$data['equipment_cost']}}</td>
                                <td style="font-weight:normal">{{$data['currency_symbol']}}{{$data['equipment_cost']}}</td>
                            </tr>
                            <tr scope="row">
                                <td style="font-weight:normal">Sub Contractor</td>
                                <td style="font-weight:normal">1</td>
                                <td style="font-weight:normal">{{$data['currency_symbol']}}{{$data['sub_contractors_cost']}}</td>
                                <td style="font-weight:normal">{{$data['currency_symbol']}}{{$data['sub_contractors_cost']}}</td>
                            </tr>
                            <tr scope="row">
                                <td></td>
                                <td></td>
                                <td style="font-weight:bold">Subtotal<br>Amount Due
                                </td>
                                <td style="font-weight:normal">{{$data['currency_symbol']}}{{$data['total']}}
                                <br>{{$data['currency_symbol']}}{{$data['total']}}</td>
                            </tr>
                            </tbody>
                        </table>
                        <div style="min-height: 50px"></div>
                    </div>
                    <hr>
                    <span style="font-size: 0.8em;">{{$data['lancer_name']}}</span>
                    <div style="margin-bottom: 40px"></div>
                </div>
            </section>

            <section class="footer"></section>
            </section>
        </div>
    </main>

    <footer>
        <div class="bottomSpace"></div>
    </footer>
</div>
@endsection

@section('script')
    <script>
        function sendInvoice(invoice){
            let form = document.querySelector('#form');
            form.action = "/invoice/send/"+invoice;
            form.submit();
        }
    </script>
@endsection