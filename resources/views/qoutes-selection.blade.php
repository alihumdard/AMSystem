        
@extends('layout.app')
@section('main')

            <div class="mdk-drawer-layout js-mdk-drawer-layout" data-push data-responsive-width="992px">
            
                <div class="mdk-drawer-layout__content page">

                    <div class="container-fluid page__heading-container">
                        <div class="page__heading d-flex align-items-center">
                            <div class="flex">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb mb-0">
                                        <li class="breadcrumb-item"><a href="#"><i class="material-icons icon-20pt">home</i></a></li>
                                        <li class="breadcrumb-item">Qoutes</li>
                                        <li class="breadcrumb-item active" aria-current="page">Templete</li>
                                    </ol>
                                </nav>
                            </div>
                            <a href="#" class="btn btn-primary"><i class="material-icons">file_download</i> Download</a>
                        </div>
                    </div>

                    <div class="container-fluid page__container">

                        <div class="row">
                            <div class="col-md-8 offset-md-2">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="badge badge-danger">OVERDUE</div>

                                        <div class="px-3">
                                            <div class="d-flex justify-content-center flex-column text-center my-5 navbar-light">
                                                <a href="index.html" class="navbar-brand d-flex flex-column m-0" style="min-width: 0">
                                                    <img class="navbar-brand-icon mb-2" src="assets/images/stack-logo-blue.svg" width="25" alt="Stack">
                                                    <span>Invoice</span>
                                                </a>
                                                <div class="text-muted">Invoice #MPS1234AD</div>
                                            </div>
                                            <div class="row mb-5">
                                                <div class="col-lg">
                                                    <div class="text-label">FROM</div>
                                                    <p class="mb-4">
                                                        <strong class="text-body">Adrian Demian</strong><br>
                                                        959 Emerson Road<br>
                                                        Winnfield, LA<br>
                                                    </p>
                                                    <div class="text-label">Invoice NUMBER</div>
                                                    #MPS1234AD
                                                </div>
                                                <div class="col-lg text-right">
                                                    <div class="text-label">TO (CUSTOMER)</div>
                                                    <p class="mb-4">
                                                        <strong class="text-body">Daniel J. Batiste</strong><br>
                                                        3700 George Avenue<br>
                                                        Mobile, AL 36602<br>
                                                    </p>
                                                    <div class="text-label">Due date</div>
                                                    Nov 1st, 2018
                                                </div>
                                            </div>

                                            <div class="table-responsive">
                                                <table class="table border-bottom mb-5">
                                                    <thead>
                                                        <tr class="bg-light">
                                                            <th>Description</th>
                                                            <th>Hours</th>
                                                            <th class="text-right">Cost</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>Layout &amp; Sidebar Design</td>
                                                            <td>200</td>
                                                            <td class="text-right">&dollar;2,500</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Concept</td>
                                                            <td>2</td>
                                                            <td class="text-right">&dollar;1000</td>
                                                        </tr>
                                                        <tr>
                                                            <td><strong>Total amount due</strong></td>
                                                            <td colspan="2" class="text-right"><strong>&dollar;3,500</strong></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>

                                            <div class="text-label">Notes</div>
                                            <p class="text-muted">We appreciate your business. Should you need us to add VAT or extra notes let us know!</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>


                </div>
                <!-- // END drawer-layout__content -->
    </div>
    @endsection;