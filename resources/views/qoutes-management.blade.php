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
                                        <li class="breadcrumb-item active" aria-current="page">Management</li>
                                    </ol>
                                </nav>
                                <h1 class="m-0">Qoutes</h1>
                            </div>
                            <a href="" class="btn btn-success ml-3">Create <i class="material-icons">add</i></a>
                        </div>
                    </div>



                    <div class="container-fluid page__container">

                        <div class="card card-form d-flex flex-column flex-sm-row">
                            <div class="card-form__body card-body-form-group flex">
                                <div class="row">
                                    <div class="col-sm-auto">
                                        <div class="form-group">
                                            <label for="filter_name">Name</label>
                                            <input id="filter_name" type="text" class="form-control" placeholder="Search by name">
                                        </div>
                                    </div>
                                    <div class="col-sm-auto">
                                        <div class="form-group">
                                            <label for="filter_category">Industry</label><br>
                                            <select id="filter_category" class="custom-select" style="width: 200px;">
                                                <option value="all">Any</option>
                                                <option value="all">Software</option>
                                                <option value="all">Production of Goods</option>
                                                <option value="all">Health</option>
                                                <option value="all">Sports</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-auto">
                                        <div class="form-group" style="width: 200px;">
                                            <label for="filter_date">Created Date</label>
                                            <input id="filter_date" type="text" class="form-control" placeholder="Select date ..." value="13/03/2018 to 20/03/2018" data-toggle="flatpickr" data-flatpickr-mode="range" data-flatpickr-alt-format="d/m/Y" data-flatpickr-date-format="d/m/Y">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="card">


                            <div class="table-responsive" data-toggle="lists" data-lists-values='["js-lists-values-employee-name"]'>

                                <table class="table mb-0 thead-border-top-0 table-striped">
                                    <thead>
                                        <tr>
                                            <th style="width: 30px;" class="text-center">#ID</th>
                                            <th>User Name</th>
                                            <th style="width: 120px;" class="text-center">Created</th>
                                            <th class="text-center">Status</th>
                                            <th class="text-center">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody class="list" id="companies">



                                        <tr>
                                            <td>
                                                <div class="badge badge-light">#29177</div>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center">


                                                    <div class="d-flex align-items-center">
                                                        <i class="material-icons icon-16pt mr-1 text-primary">business</i>
                                                        <a href="#">Moon Ltd</a>
                                                    </div>

                                                    <div class="badge badge-warning ml-2">PRO</div>

                                                </div>
                                                <div class="d-flex align-items-center">
                                                    <small class="text-muted"><i class="material-icons icon-16pt mr-1">pin_drop</i> Miami, Florida, USA</small>
                                                </div>
                                            </td>
                                            <td style="width: 140px;"><i class="material-icons icon-16pt text-muted-light mr-1">today</i> 05-05-2019</td>
                                            <td style="width:80px" class="text-center">


                                                <i class="material-icons icon-16pt text-muted mr-1">account_circle</i> <a href="#">1</a>

                                            </td>
                                            <td class="text-center"> <i class="material-icons icon-16pt">edit</i> <i class="material-icons icon-16pt">delete</i> <i class="material-icons icon-16pt">visibility</i></td>
                                        </tr>


                                        <tr>
                                            <td>
                                                <div class="badge badge-light">#29177</div>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center">


                                                    <div class="d-flex align-items-center">
                                                        <i class="material-icons icon-16pt mr-1 text-primary">business</i>
                                                        <a href="#">Blue Space Ltd</a>
                                                    </div>

                                                </div>
                                                <div class="d-flex align-items-center">
                                                    <small class="text-muted"><i class="material-icons icon-16pt mr-1">pin_drop</i> Miami, Florida, USA</small>
                                                </div>
                                            </td>
                                            <td style="width: 140px;"><i class="material-icons icon-16pt text-muted-light mr-1">today</i> 05-05-2019</td>
                                            <td style="width:80px" class="text-center">


                                                <i class="material-icons icon-16pt text-muted mr-1">account_circle</i> <a href="#">2</a>

                                            </td>
                                            <td class="text-center"> <i class="material-icons icon-16pt">edit</i> <i class="material-icons icon-16pt">delete</i> <i class="material-icons icon-16pt">visibilityf</i></td>
                                        </tr>


                                    </tbody>
                                </table>
                            </div>
                            <div class="card-body text-right">
                                15 <span class="text-muted">of 1,430</span> <a href="#" class="text-muted-light"><i class="material-icons ml-1">arrow_forward</i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- // END drawer-layout__content -->
        </div>
        @endsection;