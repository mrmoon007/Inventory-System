<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
        <meta name="author" content="Coderthemes">

        {{-- <link rel="shortcut icon" href="images/favicon_1.ico">

        <title>Moltran - Responsive Admin Dashboard Template</title>

        <!-- Base Css Files -->
        <link href="css/bootstrap.min.css" rel="stylesheet" />

        <!-- Font Icons -->
        <link href="assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
        <link href="assets/ionicon/css/ionicons.min.css" rel="stylesheet" />
        <link href="css/material-design-iconic-font.min.css" rel="stylesheet">

        <!-- animate css -->
        <link href="css/animate.css" rel="stylesheet" />

        <!-- Waves-effect -->
        <link href="css/waves-effect.css" rel="stylesheet">

        <!-- Custom Files -->
        <link href="css/helper.css" rel="stylesheet" type="text/css" />
        <link href="css/style.css" rel="stylesheet" type="text/css" />

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->

        <script src="js/modernizr.min.js"></script> --}}
        @include('body.css')
        
    </head>



    <body class="fixed-left">
            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->                      
            {{-- <div class="content-page"> --}}
                <!-- Start content -->
                <div class="content print-container">
                    <div class="container">

                        <!-- Page-Title -->
                        <div class="row">
                            <div class="col-sm-12">
                                <h4 class="pull-left page-title">Invoice</h4>
                                <ol class="breadcrumb pull-right">
                                    <li><a href="{{route('home')}}">Moltran</a></li>
                                    <li><a href="#">Pages</a></li>
                                    <li class="active">Invoice</li>
                                </ol>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="panel panel-default">
                                    <!-- <div class="panel-heading">
                                        <h4>Invoice</h4>
                                    </div> -->
                                    <div class="panel-body">
                                        <div class="clearfix">
                                            <div class="pull-left">
                                                <h4 class="text-right"><img src="{{asset('moon/images/logo_dark.png')}}" alt="velonic"></h4>
                                                
                                            </div>
                                            <div class="pull-right">
                                                <h4>Invoice # <br>
                                                    <strong>{{date('d/m/y')}}</strong>
                                                </h4>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-md-12">
                                                
                                                <div class="pull-left m-t-30">
                                                    <address>
                                                      <strong>Name: {{$customer->name}}</strong><br>
                                                      Shop Name: {{$customer->shopname}}<br>
                                                      Address: {{$customer->address}}<br>
                                                      City: {{$customer->city}}<br>
                                                      <abbr title="Phone">Phone:</abbr> {{$customer->phone}}
                                                      </address>
                                                </div>
                                                <div class="pull-right m-t-30">
                                                    <p><strong>Order Date: </strong> {{date('M d,Y')}}</p>
                                                    <p class="m-t-10"><strong>Order Status: </strong> <span class="label label-pink">Pending</span></p>
                                                    <p class="m-t-10"><strong>Order ID: </strong> #123456</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="m-h-50"></div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="table-responsive">
                                                    <table class="table m-t-30">
                                                        <thead>
                                                            <tr><th>#</th>
                                                            <th>Item</th>
                                                            <th>Quantity</th>
                                                            <th>Unit Cost</th>
                                                            <th>Total</th>
                                                        </tr></thead>
                                                        <tbody>
                                                            @php
                                                                $sl=1;
                                                            @endphp
                                                            @foreach ($content as $item)
                                                                <tr>
                                                                    <td>{{$sl++}}</td>
                                                                    <td>{{ $item->name }}</td>
                                                                    <td>{{ $item->qty }}</td>
                                                                    <td>{{ $item->price }}</td>
                                                                    <td>{{ $item->qty*$item->price }}</td>
                                                                </tr>
                                                            @endforeach
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row" style="border-radius: 0px;">
                                            <div class="col-md-3 col-md-offset-9">
                                                <p class="text-right"><b>Sub-total:</b> {{Cart::subtotal()}}</p>
                                                {{-- <p class="text-right">Discout: 12.9%</p> --}}
                                                <p class="text-right">VAT: {{Cart::tax()}}</p>
                                                <hr>
                                                <h3 class="text-right">Total :  {{Cart::total()}}</h3>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="hidden-print">
                                            <div class="pull-right">
                                                <a href="#" onclick="window.print()" class="btn btn-inverse waves-effect waves-light"><i class="fa fa-print"></i></a>
                                                <a href="" class="btn btn-primary waves-effect waves-light" data-toggle="modal" data-target="#con-close-modal">Submit</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>



            {{-- </div> <!-- container -->
                               
                </div> <!-- content -->

                <footer class="footer text-right">
                    2015 © Moltran.
                </footer> --}}

            </div>



            <!-- ============================================================== -->
            <!-- add new -->
            <!-- ============================================================== -->
            
    <form action="{{ route('finalInvoice') }} " method="POST" enctype="multipart/form-data">
        @csrf
        <div id="con-close-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
            <div class="modal-dialog"> 
                <div class="modal-content"> 
                    <div class="modal-header"> 
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button> 
                        <h4 class="modal-title">Invoice of {{$customer->name}}
                        <span class="pull-right">Total : {{Cart::total()}} Tk</span>
                        </h4> 
                    </div> 
                    <div class="modal-body"> 
                        <div class="row"> 
                            <div class="col-md-4"> 
                                <div class="form-group"> 
                                    <label for="field-1" class="control-label">Payment</label> 
                                    <select class="form-control" name="payment_status">
                                        <option value="cash" >Hand Cash</option>
                                        <option value="cheque" >Cheque</option>
                                        <option value="due" >Due</option>
                                    </select>
                                </div> 
                            </div> 
                            <div class="col-md-4"> 
                                <div class="form-group"> 
                                    <label for="field-5" class="control-label">pay</label> 
                                    <input type="text" name="pay" class="form-control" id="field-5" > 
                                </div> 
                            </div> 
                            <div class="col-md-4"> 
                                <div class="form-group"> 
                                    <label for="field-6" class="control-label">Due</label> 
                                    <input type="text" name="due" class="form-control" id="field-6"> 
                                </div> 
                            </div> 
                        </div> 
                    </div>
                    <input type="hidden" name="customer_id" value="{{$customer->id}}"> 
                    <input type="hidden" name="order_date" value="{{date('d/m/y')}}"> 
                    <input type="hidden" name="oder_status" value="pending"> 
                    <input type="hidden" name="total_products" value="{{Cart::count()}}"> 
                    <input type="hidden" name="sub_total" value="{{Cart::subtotal()}}"> 
                    <input type="hidden" name="vat" value="{{Cart::tax()}}"> 
                    <input type="hidden" name="total" value="{{Cart::total()}}"> 
                    
                    <div class="modal-footer"> 
                        <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button> 
                        <button type="submit" class="btn btn-info waves-effect waves-light">Save changes</button> 
                    </div> 
                </div> 
            </div>
        </div><!-- /.modal -->

    </form>




            @include('body.js')
            {{-- <script>
                var resizefunc = [];
            </script>
    
            <!-- jQuery  -->
            <script src="js/jquery.min.js"></script>
            <script src="js/bootstrap.min.js"></script>
            <script src="js/waves.js"></script>
            <script src="js/wow.min.js"></script>
            <script src="js/jquery.nicescroll.js" type="text/javascript"></script>
            <script src="js/jquery.scrollTo.min.js"></script>
            <script src="assets/jquery-detectmobile/detect.js"></script>
            <script src="assets/fastclick/fastclick.js"></script>
            <script src="assets/jquery-slimscroll/jquery.slimscroll.js"></script>
            <script src="assets/jquery-blockui/jquery.blockUI.js"></script>
    
    
            <!-- CUSTOM JS -->
            <script src="js/jquery.app.js"></script> --}}
        
        </body>
    </html> 

