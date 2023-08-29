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
                                        <li class="breadcrumb-item">Add User</li>
                                        <li class="breadcrumb-item active" aria-current="page">User</li>
                                    </ol>
                                </nav>
                                <h1 class="m-0">User</h1>
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
                                        <div class="form-group">
                                            <label for="filter_stock">Has Sales</label>
                                            <div class="custom-control custom-checkbox mt-sm-2">
                                                <input type="checkbox" class="custom-control-input" id="filter_stock" checked="">
                                                <label class="custom-control-label" for="filter_stock">Yes</label>
                                            </div>
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
                            <button class="btn bg-white border-left border-top border-top-sm-0 rounded-top-0 rounded-top-sm rounded-left-sm-0"><i class="material-icons text-primary icon-20pt">refresh</i></button>
                        </div>


                        <div class="card">


                            <div class="table-responsive" data-toggle="lists" data-lists-values='["js-lists-values-employee-name"]'>

                                <table class="table mb-0 thead-border-top-0 table-striped">
                                    <thead>
                                        <tr>

                                            <th style="width: 18px;">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input js-toggle-check-all" data-target="#companies" id="customCheckAll">
                                                    <label class="custom-control-label" for="customCheckAll"><span class="text-hide">Toggle all</span></label>
                                                </div>
                                            </th>

                                            <th style="width: 30px;" class="text-center">#ID</th>
                                            <th>Company Name</th>
                                            <th style="width: 120px;" class="text-center">Created</th>
                                            <th class="text-center">Members</th>
                                            <th class="text-center">Growth</th>
                                            <th style="width: 50px;">#INV</th>
                                            <th style="width: 120px;" class="text-right">Total Sales</th>
                                            <th style="width: 50px;">
                                                <div class="dropdown pull-right">
                                                    <a href="#" data-toggle="dropdown" class="dropdown-toggle">Bulk</a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a href="javascript:void(0)" class="dropdown-item"><i class="material-icons  mr-1">work</i> Update Status</a>
                                                        <a href="javascript:void(0)" class="dropdown-item"><i class="material-icons  mr-1">pin_drop</i> Add Location</a>
                                                        <div class="dropdown-divider"></div>
                                                        <a href="javascript:void(0)" class="dropdown-item"><i class="material-icons  mr-1">archive</i> Archive</a>
                                                    </div>
                                                </div>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody class="list" id="companies">



                                        <tr>

                                            <td class="text-center">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input js-check-selected-row" id="customCheck1_1">
                                                    <label class="custom-control-label" for="customCheck1_1"><span class="text-hide">Check</span></label>
                                                </div>
                                            </td>
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
                                            <td class="text-center">3% <i class="material-icons icon-16pt text-success">arrow_upward</i></td>
                                            <td class="text-center">1</td>
                                            <td class="text-right"><strong>$32,124</strong></td>
                                            <td><a href="#" class="btn btn-sm btn-link"><i class="material-icons icon-16pt">arrow_forward</i></a> </td>
                                        </tr>


                                        <tr>

                                            <td class="text-center">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input js-check-selected-row" id="customCheck1_2">
                                                    <label class="custom-control-label" for="customCheck1_2"><span class="text-hide">Check</span></label>
                                                </div>
                                            </td>
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
                                            <td class="text-center">5% <i class="material-icons icon-16pt text-success">arrow_upward</i></td>
                                            <td class="text-center">2</td>
                                            <td class="text-right"><strong>$13,593</strong></td>
                                            <td><a href="#" class="btn btn-sm btn-link"><i class="material-icons icon-16pt">arrow_forward</i></a> </td>
                                        </tr>


                                        <tr>

                                            <td class="text-center">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input js-check-selected-row" id="customCheck1_3">
                                                    <label class="custom-control-label" for="customCheck1_3"><span class="text-hide">Check</span></label>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="badge badge-light">#29177</div>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center">


                                                    <div class="d-flex align-items-center">
                                                        <i class="material-icons icon-16pt mr-1 text-primary">business</i>
                                                        <a href="#">Visual Design</a>
                                                    </div>

                                                </div>
                                                <div class="d-flex align-items-center">
                                                    <small class="text-muted"><i class="material-icons icon-16pt mr-1">pin_drop</i> Miami, Florida, USA</small>
                                                </div>
                                            </td>
                                            <td style="width: 140px;"><i class="material-icons icon-16pt text-muted-light mr-1">today</i> 05-05-2019</td>
                                            <td style="width:80px" class="text-center">


                                                <i class="material-icons icon-16pt text-muted mr-1">account_circle</i> <a href="#">3</a>

                                            </td>
                                            <td class="text-center">12% <i class="material-icons icon-16pt text-danger">arrow_upward</i></td>
                                            <td class="text-center">3</td>
                                            <td class="text-right"><strong>$2,229</strong></td>
                                            <td><a href="#" class="btn btn-sm btn-link"><i class="material-icons icon-16pt">arrow_forward</i></a> </td>
                                        </tr>


                                        <tr>

                                            <td class="text-center">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input js-check-selected-row" id="customCheck1_4">
                                                    <label class="custom-control-label" for="customCheck1_4"><span class="text-hide">Check</span></label>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="badge badge-light">#29177</div>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center">


                                                    <div class="d-flex align-items-center">
                                                        <i class="material-icons icon-16pt mr-1 text-primary">business</i>
                                                        <a href="#">Fox Technologies</a>
                                                    </div>

                                                </div>
                                                <div class="d-flex align-items-center">
                                                    <small class="text-muted"><i class="material-icons icon-16pt mr-1">pin_drop</i> Miami, Florida, USA</small>
                                                </div>
                                            </td>
                                            <td style="width: 140px;"><i class="material-icons icon-16pt text-muted-light mr-1">today</i> 05-05-2019</td>
                                            <td style="width:80px" class="text-center">


                                                <i class="material-icons icon-16pt text-muted mr-1">account_circle</i> <a href="#">4</a>

                                            </td>
                                            <td class="text-center">54% <i class="material-icons icon-16pt text-success">arrow_upward</i></td>
                                            <td class="text-center">4</td>
                                            <td class="text-right"><strong>$41,139</strong></td>
                                            <td><a href="#" class="btn btn-sm btn-link"><i class="material-icons icon-16pt">arrow_forward</i></a> </td>
                                        </tr>


                                        <tr>

                                            <td class="text-center">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input js-check-selected-row" id="customCheck1_5">
                                                    <label class="custom-control-label" for="customCheck1_5"><span class="text-hide">Check</span></label>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="badge badge-light">#29177</div>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center">


                                                    <div class="d-flex align-items-center">
                                                        <i class="material-icons icon-16pt mr-1 text-primary">business</i>
                                                        <a href="#">JMS Ltd</a>
                                                    </div>

                                                    <div class="badge badge-warning ml-2">PRO</div>

                                                </div>
                                                <div class="d-flex align-items-center">
                                                    <small class="text-muted"><i class="material-icons icon-16pt mr-1">pin_drop</i> Miami, Florida, USA</small>
                                                </div>
                                            </td>
                                            <td style="width: 140px;"><i class="material-icons icon-16pt text-muted-light mr-1">today</i> 05-05-2019</td>
                                            <td style="width:80px" class="text-center">


                                                <i class="material-icons icon-16pt text-muted mr-1">account_circle</i> <a href="#">5</a>

                                            </td>
                                            <td class="text-center">5% <i class="material-icons icon-16pt text-danger">arrow_upward</i></td>
                                            <td class="text-center">5</td>
                                            <td class="text-right"><strong>$3,002</strong></td>
                                            <td><a href="#" class="btn btn-sm btn-link"><i class="material-icons icon-16pt">arrow_forward</i></a> </td>
                                        </tr>


                                        <tr>

                                            <td class="text-center">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input js-check-selected-row" id="customCheck1_6">
                                                    <label class="custom-control-label" for="customCheck1_6"><span class="text-hide">Check</span></label>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="badge badge-light">#29177</div>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center">


                                                    <div class="d-flex align-items-center">
                                                        <i class="material-icons icon-16pt mr-1 text-primary">business</i>
                                                        <a href="#">Langston Corp</a>
                                                    </div>

                                                    <div class="badge badge-warning ml-2">PRO</div>

                                                </div>
                                                <div class="d-flex align-items-center">
                                                    <small class="text-muted"><i class="material-icons icon-16pt mr-1">pin_drop</i> Miami, Florida, USA</small>
                                                </div>
                                            </td>
                                            <td style="width: 140px;"><i class="material-icons icon-16pt text-muted-light mr-1">today</i> 05-05-2019</td>
                                            <td style="width:80px" class="text-center">


                                                <i class="material-icons icon-16pt text-muted mr-1">account_circle</i> <a href="#">6</a>

                                            </td>
                                            <td class="text-center">9% <i class="material-icons icon-16pt text-success">arrow_upward</i></td>
                                            <td class="text-center">6</td>
                                            <td class="text-right"><strong>$2,884</strong></td>
                                            <td><a href="#" class="btn btn-sm btn-link"><i class="material-icons icon-16pt">arrow_forward</i></a> </td>
                                        </tr>


                                        <tr>

                                            <td class="text-center">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input js-check-selected-row" id="customCheck1_7">
                                                    <label class="custom-control-label" for="customCheck1_7"><span class="text-hide">Check</span></label>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="badge badge-light">#29177</div>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center">


                                                    <div class="d-flex align-items-center">
                                                        <i class="material-icons icon-16pt mr-1 text-primary">business</i>
                                                        <a href="#">Compare Solutions</a>
                                                    </div>

                                                </div>
                                                <div class="d-flex align-items-center">
                                                    <small class="text-muted"><i class="material-icons icon-16pt mr-1">pin_drop</i> Miami, Florida, USA</small>
                                                </div>
                                            </td>
                                            <td style="width: 140px;"><i class="material-icons icon-16pt text-muted-light mr-1">today</i> 05-05-2019</td>
                                            <td style="width:80px" class="text-center">


                                                <i class="material-icons icon-16pt text-muted mr-1">account_circle</i> <a href="#">7</a>

                                            </td>
                                            <td class="text-center">3% <i class="material-icons icon-16pt text-success">arrow_upward</i></td>
                                            <td class="text-center">7</td>
                                            <td class="text-right"><strong>$15,844</strong></td>
                                            <td><a href="#" class="btn btn-sm btn-link"><i class="material-icons icon-16pt">arrow_forward</i></a> </td>
                                        </tr>


                                        <tr>

                                            <td class="text-center">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input js-check-selected-row" id="customCheck1_8">
                                                    <label class="custom-control-label" for="customCheck1_8"><span class="text-hide">Check</span></label>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="badge badge-light">#29177</div>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center">


                                                    <div class="d-flex align-items-center">
                                                        <i class="material-icons icon-16pt mr-1 text-primary">business</i>
                                                        <a href="#">Hill Enterprises</a>
                                                    </div>

                                                    <div class="badge badge-warning ml-2">PRO</div>

                                                </div>
                                                <div class="d-flex align-items-center">
                                                    <small class="text-muted"><i class="material-icons icon-16pt mr-1">pin_drop</i> Miami, Florida, USA</small>
                                                </div>
                                            </td>
                                            <td style="width: 140px;"><i class="material-icons icon-16pt text-muted-light mr-1">today</i> 05-05-2019</td>
                                            <td style="width:80px" class="text-center">


                                                <i class="material-icons icon-16pt text-muted mr-1">account_circle</i> <a href="#">8</a>

                                            </td>
                                            <td class="text-center">12% <i class="material-icons icon-16pt text-success">arrow_upward</i></td>
                                            <td class="text-center">8</td>
                                            <td class="text-right"><strong>$9,772</strong></td>
                                            <td><a href="#" class="btn btn-sm btn-link"><i class="material-icons icon-16pt">arrow_forward</i></a> </td>
                                        </tr>


                                        <tr>

                                            <td class="text-center">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input js-check-selected-row" id="customCheck1_9">
                                                    <label class="custom-control-label" for="customCheck1_9"><span class="text-hide">Check</span></label>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="badge badge-light">#29177</div>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center">


                                                    <div class="d-flex align-items-center">
                                                        <i class="material-icons icon-16pt mr-1 text-primary">business</i>
                                                        <a href="#">Monday Ltd</a>
                                                    </div>

                                                </div>
                                                <div class="d-flex align-items-center">
                                                    <small class="text-muted"><i class="material-icons icon-16pt mr-1">pin_drop</i> Miami, Florida, USA</small>
                                                </div>
                                            </td>
                                            <td style="width: 140px;"><i class="material-icons icon-16pt text-muted-light mr-1">today</i> 05-05-2019</td>
                                            <td style="width:80px" class="text-center">


                                                <i class="material-icons icon-16pt text-muted mr-1">account_circle</i> <a href="#">9</a>

                                            </td>
                                            <td class="text-center">17% <i class="material-icons icon-16pt text-success">arrow_upward</i></td>
                                            <td class="text-center">9</td>
                                            <td class="text-right"><strong>$44,172</strong></td>
                                            <td><a href="#" class="btn btn-sm btn-link"><i class="material-icons icon-16pt">arrow_forward</i></a> </td>
                                        </tr>


                                        <tr>

                                            <td class="text-center">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input js-check-selected-row" id="customCheck1_10">
                                                    <label class="custom-control-label" for="customCheck1_10"><span class="text-hide">Check</span></label>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="badge badge-light">#29177</div>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center">


                                                    <div class="d-flex align-items-center">
                                                        <i class="material-icons icon-16pt mr-1 text-primary">business</i>
                                                        <a href="#">Hexio Enterprise</a>
                                                    </div>

                                                </div>
                                                <div class="d-flex align-items-center">
                                                    <small class="text-muted"><i class="material-icons icon-16pt mr-1">pin_drop</i> Miami, Florida, USA</small>
                                                </div>
                                            </td>
                                            <td style="width: 140px;"><i class="material-icons icon-16pt text-muted-light mr-1">today</i> 05-05-2019</td>
                                            <td style="width:80px" class="text-center">


                                                <i class="material-icons icon-16pt text-muted mr-1">account_circle</i> <a href="#">10</a>

                                            </td>
                                            <td class="text-center">31% <i class="material-icons icon-16pt text-success">arrow_upward</i></td>
                                            <td class="text-center">10</td>
                                            <td class="text-right"><strong>$21,984</strong></td>
                                            <td><a href="#" class="btn btn-sm btn-link"><i class="material-icons icon-16pt">arrow_forward</i></a> </td>
                                        </tr>


                                        <tr>

                                            <td class="text-center">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input js-check-selected-row" id="customCheck1_11">
                                                    <label class="custom-control-label" for="customCheck1_11"><span class="text-hide">Check</span></label>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="badge badge-light">#29177</div>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center">


                                                    <div class="d-flex align-items-center">
                                                        <i class="material-icons icon-16pt mr-1 text-primary">business</i>
                                                        <a href="#">Moon Ltd</a>
                                                    </div>

                                                </div>
                                                <div class="d-flex align-items-center">
                                                    <small class="text-muted"><i class="material-icons icon-16pt mr-1">pin_drop</i> Miami, Florida, USA</small>
                                                </div>
                                            </td>
                                            <td style="width: 140px;"><i class="material-icons icon-16pt text-muted-light mr-1">today</i> 05-05-2019</td>
                                            <td style="width:80px" class="text-center">


                                                <i class="material-icons icon-16pt text-muted mr-1">account_circle</i> <a href="#">11</a>

                                            </td>
                                            <td class="text-center">3% <i class="material-icons icon-16pt text-success">arrow_upward</i></td>
                                            <td class="text-center">11</td>
                                            <td class="text-right"><strong>$32,124</strong></td>
                                            <td><a href="#" class="btn btn-sm btn-link"><i class="material-icons icon-16pt">arrow_forward</i></a> </td>
                                        </tr>


                                        <tr>

                                            <td class="text-center">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input js-check-selected-row" id="customCheck1_12">
                                                    <label class="custom-control-label" for="customCheck1_12"><span class="text-hide">Check</span></label>
                                                </div>
                                            </td>
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


                                                <i class="material-icons icon-16pt text-muted mr-1">account_circle</i> <a href="#">12</a>

                                            </td>
                                            <td class="text-center">5% <i class="material-icons icon-16pt text-success">arrow_upward</i></td>
                                            <td class="text-center">12</td>
                                            <td class="text-right"><strong>$13,593</strong></td>
                                            <td><a href="#" class="btn btn-sm btn-link"><i class="material-icons icon-16pt">arrow_forward</i></a> </td>
                                        </tr>


                                        <tr>

                                            <td class="text-center">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input js-check-selected-row" id="customCheck1_13">
                                                    <label class="custom-control-label" for="customCheck1_13"><span class="text-hide">Check</span></label>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="badge badge-light">#29177</div>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center">


                                                    <div class="d-flex align-items-center">
                                                        <i class="material-icons icon-16pt mr-1 text-primary">business</i>
                                                        <a href="#">Visual Design</a>
                                                    </div>

                                                </div>
                                                <div class="d-flex align-items-center">
                                                    <small class="text-muted"><i class="material-icons icon-16pt mr-1">pin_drop</i> Miami, Florida, USA</small>
                                                </div>
                                            </td>
                                            <td style="width: 140px;"><i class="material-icons icon-16pt text-muted-light mr-1">today</i> 05-05-2019</td>
                                            <td style="width:80px" class="text-center">


                                                <i class="material-icons icon-16pt text-muted mr-1">account_circle</i> <a href="#">13</a>

                                            </td>
                                            <td class="text-center">12% <i class="material-icons icon-16pt text-danger">arrow_upward</i></td>
                                            <td class="text-center">13</td>
                                            <td class="text-right"><strong>$2,229</strong></td>
                                            <td><a href="#" class="btn btn-sm btn-link"><i class="material-icons icon-16pt">arrow_forward</i></a> </td>
                                        </tr>


                                        <tr>

                                            <td class="text-center">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input js-check-selected-row" id="customCheck1_14">
                                                    <label class="custom-control-label" for="customCheck1_14"><span class="text-hide">Check</span></label>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="badge badge-light">#29177</div>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center">


                                                    <div class="d-flex align-items-center">
                                                        <i class="material-icons icon-16pt mr-1 text-primary">business</i>
                                                        <a href="#">Fox Technologies</a>
                                                    </div>

                                                </div>
                                                <div class="d-flex align-items-center">
                                                    <small class="text-muted"><i class="material-icons icon-16pt mr-1">pin_drop</i> Miami, Florida, USA</small>
                                                </div>
                                            </td>
                                            <td style="width: 140px;"><i class="material-icons icon-16pt text-muted-light mr-1">today</i> 05-05-2019</td>
                                            <td style="width:80px" class="text-center">


                                                <i class="material-icons icon-16pt text-muted mr-1">account_circle</i> <a href="#">14</a>

                                            </td>
                                            <td class="text-center">54% <i class="material-icons icon-16pt text-success">arrow_upward</i></td>
                                            <td class="text-center">14</td>
                                            <td class="text-right"><strong>$41,139</strong></td>
                                            <td><a href="#" class="btn btn-sm btn-link"><i class="material-icons icon-16pt">arrow_forward</i></a> </td>
                                        </tr>


                                        <tr>

                                            <td class="text-center">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input js-check-selected-row" id="customCheck1_15">
                                                    <label class="custom-control-label" for="customCheck1_15"><span class="text-hide">Check</span></label>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="badge badge-light">#29177</div>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center">


                                                    <div class="d-flex align-items-center">
                                                        <i class="material-icons icon-16pt mr-1 text-primary">business</i>
                                                        <a href="#">JMS Ltd</a>
                                                    </div>

                                                </div>
                                                <div class="d-flex align-items-center">
                                                    <small class="text-muted"><i class="material-icons icon-16pt mr-1">pin_drop</i> Miami, Florida, USA</small>
                                                </div>
                                            </td>
                                            <td style="width: 140px;"><i class="material-icons icon-16pt text-muted-light mr-1">today</i> 05-05-2019</td>
                                            <td style="width:80px" class="text-center">


                                                <i class="material-icons icon-16pt text-muted mr-1">account_circle</i> <a href="#">15</a>

                                            </td>
                                            <td class="text-center">5% <i class="material-icons icon-16pt text-danger">arrow_upward</i></td>
                                            <td class="text-center">15</td>
                                            <td class="text-right"><strong>$3,002</strong></td>
                                            <td><a href="#" class="btn btn-sm btn-link"><i class="material-icons icon-16pt">arrow_forward</i></a> </td>
                                        </tr>


                                        <tr>

                                            <td class="text-center">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input js-check-selected-row" id="customCheck1_16">
                                                    <label class="custom-control-label" for="customCheck1_16"><span class="text-hide">Check</span></label>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="badge badge-light">#29177</div>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center">


                                                    <div class="d-flex align-items-center">
                                                        <i class="material-icons icon-16pt mr-1 text-primary">business</i>
                                                        <a href="#">Langston Corp</a>
                                                    </div>

                                                </div>
                                                <div class="d-flex align-items-center">
                                                    <small class="text-muted"><i class="material-icons icon-16pt mr-1">pin_drop</i> Miami, Florida, USA</small>
                                                </div>
                                            </td>
                                            <td style="width: 140px;"><i class="material-icons icon-16pt text-muted-light mr-1">today</i> 05-05-2019</td>
                                            <td style="width:80px" class="text-center">


                                                <i class="material-icons icon-16pt text-muted mr-1">account_circle</i> <a href="#">16</a>

                                            </td>
                                            <td class="text-center">9% <i class="material-icons icon-16pt text-success">arrow_upward</i></td>
                                            <td class="text-center">16</td>
                                            <td class="text-right"><strong>$2,884</strong></td>
                                            <td><a href="#" class="btn btn-sm btn-link"><i class="material-icons icon-16pt">arrow_forward</i></a> </td>
                                        </tr>


                                        <tr>

                                            <td class="text-center">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input js-check-selected-row" id="customCheck1_17">
                                                    <label class="custom-control-label" for="customCheck1_17"><span class="text-hide">Check</span></label>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="badge badge-light">#29177</div>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center">


                                                    <div class="d-flex align-items-center">
                                                        <i class="material-icons icon-16pt mr-1 text-primary">business</i>
                                                        <a href="#">Compare Solutions</a>
                                                    </div>

                                                </div>
                                                <div class="d-flex align-items-center">
                                                    <small class="text-muted"><i class="material-icons icon-16pt mr-1">pin_drop</i> Miami, Florida, USA</small>
                                                </div>
                                            </td>
                                            <td style="width: 140px;"><i class="material-icons icon-16pt text-muted-light mr-1">today</i> 05-05-2019</td>
                                            <td style="width:80px" class="text-center">


                                                <i class="material-icons icon-16pt text-muted mr-1">account_circle</i> <a href="#">17</a>

                                            </td>
                                            <td class="text-center">3% <i class="material-icons icon-16pt text-success">arrow_upward</i></td>
                                            <td class="text-center">17</td>
                                            <td class="text-right"><strong>$15,844</strong></td>
                                            <td><a href="#" class="btn btn-sm btn-link"><i class="material-icons icon-16pt">arrow_forward</i></a> </td>
                                        </tr>


                                        <tr>

                                            <td class="text-center">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input js-check-selected-row" id="customCheck1_18">
                                                    <label class="custom-control-label" for="customCheck1_18"><span class="text-hide">Check</span></label>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="badge badge-light">#29177</div>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center">


                                                    <div class="d-flex align-items-center">
                                                        <i class="material-icons icon-16pt mr-1 text-primary">business</i>
                                                        <a href="#">Hill Enterprises</a>
                                                    </div>

                                                </div>
                                                <div class="d-flex align-items-center">
                                                    <small class="text-muted"><i class="material-icons icon-16pt mr-1">pin_drop</i> Miami, Florida, USA</small>
                                                </div>
                                            </td>
                                            <td style="width: 140px;"><i class="material-icons icon-16pt text-muted-light mr-1">today</i> 05-05-2019</td>
                                            <td style="width:80px" class="text-center">


                                                <i class="material-icons icon-16pt text-muted mr-1">account_circle</i> <a href="#">18</a>

                                            </td>
                                            <td class="text-center">12% <i class="material-icons icon-16pt text-success">arrow_upward</i></td>
                                            <td class="text-center">18</td>
                                            <td class="text-right"><strong>$9,772</strong></td>
                                            <td><a href="#" class="btn btn-sm btn-link"><i class="material-icons icon-16pt">arrow_forward</i></a> </td>
                                        </tr>


                                        <tr>

                                            <td class="text-center">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input js-check-selected-row" id="customCheck1_19">
                                                    <label class="custom-control-label" for="customCheck1_19"><span class="text-hide">Check</span></label>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="badge badge-light">#29177</div>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center">


                                                    <div class="d-flex align-items-center">
                                                        <i class="material-icons icon-16pt mr-1 text-primary">business</i>
                                                        <a href="#">Monday Ltd</a>
                                                    </div>

                                                </div>
                                                <div class="d-flex align-items-center">
                                                    <small class="text-muted"><i class="material-icons icon-16pt mr-1">pin_drop</i> Miami, Florida, USA</small>
                                                </div>
                                            </td>
                                            <td style="width: 140px;"><i class="material-icons icon-16pt text-muted-light mr-1">today</i> 05-05-2019</td>
                                            <td style="width:80px" class="text-center">


                                                <i class="material-icons icon-16pt text-muted mr-1">account_circle</i> <a href="#">19</a>

                                            </td>
                                            <td class="text-center">17% <i class="material-icons icon-16pt text-success">arrow_upward</i></td>
                                            <td class="text-center">19</td>
                                            <td class="text-right"><strong>$44,172</strong></td>
                                            <td><a href="#" class="btn btn-sm btn-link"><i class="material-icons icon-16pt">arrow_forward</i></a> </td>
                                        </tr>


                                        <tr>

                                            <td class="text-center">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input js-check-selected-row" id="customCheck1_20">
                                                    <label class="custom-control-label" for="customCheck1_20"><span class="text-hide">Check</span></label>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="badge badge-light">#29177</div>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center">


                                                    <div class="d-flex align-items-center">
                                                        <i class="material-icons icon-16pt mr-1 text-primary">business</i>
                                                        <a href="#">Hexio Enterprise</a>
                                                    </div>

                                                </div>
                                                <div class="d-flex align-items-center">
                                                    <small class="text-muted"><i class="material-icons icon-16pt mr-1">pin_drop</i> Miami, Florida, USA</small>
                                                </div>
                                            </td>
                                            <td style="width: 140px;"><i class="material-icons icon-16pt text-muted-light mr-1">today</i> 05-05-2019</td>
                                            <td style="width:80px" class="text-center">


                                                <i class="material-icons icon-16pt text-muted mr-1">account_circle</i> <a href="#">20</a>

                                            </td>
                                            <td class="text-center">31% <i class="material-icons icon-16pt text-success">arrow_upward</i></td>
                                            <td class="text-center">20</td>
                                            <td class="text-right"><strong>$21,984</strong></td>
                                            <td><a href="#" class="btn btn-sm btn-link"><i class="material-icons icon-16pt">arrow_forward</i></a> </td>
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