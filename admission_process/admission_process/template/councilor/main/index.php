<?php
include("header.php");
?>






<br>











<div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-12">
                        <h4 class="page-title">Welcome to Maple Admin</h4>
                        <ol class="breadcrumb">
                            <li><a href="#">Dashboard</a></li>
                            <li class="active">Dashboard 1</li>
                        </ol>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
                <div class="row">
                    <div class="col-md-8 col-lg-8 col-sm-12">
                        <div class="white-box">
                            <h3>Product Report</h3>
                            <div class="row row-in">
                                <div class="total-revenue4 chartist-chart" style="height: 300px;"></div>
                                <div class="col-lg-4 col-sm-6">
                                    <div class="col-in text-center">
                                        <h3 class="counter">$5645</h3>
                                        <h5 class="text-muted">Sales Report</h5> </div>
                                </div>
                                <div class="col-lg-4 col-sm-6">
                                    <div class="col-in text-center b-r-none">
                                        <h3 class="counter">$4250</h3>
                                        <h5 class="text-muted">Annual Revenue </h5> </div>
                                </div>
                                <div class="col-lg-4 col-sm-6">
                                    <div class="col-in text-center">
                                        <h3 class="counter">$3450</h3>
                                        <h5 class="text-muted">Monthly Revenue</h5> </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12">
                        <div class="white-box">
                            <h3>Product Sales</h3>
                            <div class="ct-product-chart chartist-chart" style="height:327px; padding:30px;"></div>
                            <div class="text-center">
                                <ul class="list-inline m-t-20">
                                    <li>
                                        <h6 class="text-muted"><i class="fa fa-circle m-r-5" style="color:#ffbab9"></i>Product A</h6> </li>
                                    <li>
                                        <h6 class="text-muted"><i class="fa fa-circle m-r-5 text-primary"></i>Product B</h6> </li>
                                    <li>
                                        <h6 class="text-muted"><i class="fa fa-circle m-r-5 text-info"></i>Product C</h6> </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!--row -->
                <div class="row">
                    <div class="col-sm-6 col-xs-12 col-md-4 col-lg-4">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="white-box">
                                    <div class="bar-widget">
                                        <div class="table-box">
                                            <div class="cell text-left">
                                                <h2 class="m-t-0 m-b-5 font-light counter">3506</h2>
                                                <h5 class="text-muted m-b-0 m-t-0">Sales</h5> </div>
                                            <div class="cell text-right">
                                                <div id="sparkline1"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="white-box">
                                    <div class="bar-widget">
                                        <div class="table-box">
                                            <div class="cell text-left">
                                                <h2 class="m-t-0 m-b-5 font-light">18% Total</h2>
                                                <h5 class="text-muted m-b-0 m-t-0">Visitors</h5> </div>
                                            <div class="cell text-right">
                                                <div id="sparkline2"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Portlet -->
                    </div>
                    <div class="col-sm-6 col-xs-12 col-md-4 col-lg-4">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="white-box">
                                    <div class="col-md-5 col-sm-4">
                                        <h4 class="font-light">India,<br/>
                    Ahmedabad</h4>
                                        <p><b>1,20,000 <br/>
                    USD</b></p>
                                    </div>
                                    <div class="col-md-7 col-sm-8">
                                        <div id="sparkline3" class="text-right"></div>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xs-12 col-md-4 col-lg-4">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="white-box">
                                    <div class="bar-widget">
                                        <div class="table-box">
                                            <div class="cell text-left">
                                                <h2 class="m-t-0 m-b-5 font-light counter">2547</h2>
                                                <h5 class="text-muted m-b-0 m-t-0">clicks</h5> </div>
                                            <div class="cell text-right">
                                                <div id="sparkline4"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="white-box">
                                    <div class="bar-widget">
                                        <div class="table-box">
                                            <div class="cell text-left">
                                                <h2 class="m-t-0 m-b-5 font-light counter">1354</h2>
                                                <h5 class="text-muted m-b-0 m-t-0">Views</h5> </div>
                                            <div class="cell text-right">
                                                <div id="sparkline6"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/ row -->
                <!-- .row -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="white-box">
                            <h3>Analytics</h3>
                            <div class="row">
                                <div class="col-lg-8 col-md-7 col-sm-12">
                                    <div id="visitfromworld" style="height:450px;"></div>
                                </div>
                                <div class="col-lg-4 col-md-5 col-sm-12">
                                    <div class="white-box">
                                        <ul class="basic-list">
                                            <li>USA <span class="pull-right label-primary label">21.8%</span></li>
                                            <li>Australia<span class="pull-right label-info label">21.8%</span></li>
                                            <li>UK<span class="pull-right label-purple label">21.8%</span></li>
                                            <li>UAE<span class="pull-right label-warning label">21.8%</span></li>
                                            <li>Russia <span class="pull-right label-danger label">21.8%</span></li>
                                            <li>India <span class="pull-right label-success label">21.8%</span></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
                <!-- .row -->
                <div class="row">
                    <div class="col-md-4 col-lg-4 col-xs-12">
                        <div class="white-box">
                            <h3>Browser Stats</h3>
                            <ul class="basic-list">
                                <li>Google Chrome <span class="pull-right label-danger label">21.8%</span></li>
                                <li>Mozila Firefox <span class="pull-right label-purple label">21.8%</span></li>
                                <li>Apple Safari <span class="pull-right label-success label">21.8%</span></li>
                                <li>Internet Explorer <span class="pull-right label-info label">21.8%</span></li>
                                <li>Opera mini <span class="pull-right label-warning label">21.8%</span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-4 col-xs-12">
                        <div class="white-box">
                            <h3>Activity</h3>
                            <div class="steamline">
                                <div class="sl-item">
                                    <div class="sl-left"> <img class="img-circle" alt="user" src="../assets/images/users/genu.jpg"> </div>
                                    <div class="sl-right">
                                        <div><a class="text-info" href="#">John Doe</a> <span class="sl-date">5 minutes ago</span></div>
                                        <p>assign a new task <a href="#" class="text-info"> Design weblayout</a></p>
                                    </div>
                                </div>
                                <div class="sl-item">
                                    <div class="sl-left"> <img class="img-circle" alt="user" src="../assets/images/users/sonu.jpg"> </div>
                                    <div class="sl-right">
                                        <div><a class="text-info" href="#">John Doe</a> <span class="sl-date">5 minutes ago</span></div>
                                        <p>assign a new task <a href="#" class="text-info"> Design weblayout</a></p>
                                    </div>
                                </div>
                                <div class="sl-item">
                                    <div class="sl-left"> <img class="img-circle" alt="user" src="../assets/images/users/ritesh.jpg"> </div>
                                    <div class="sl-right">
                                        <div><a class="text-info" href="#">John Doe</a> <span class="sl-date">5 minutes ago</span></div>
                                        <p>assign a new task <a href="#" class="text-info"> Design weblayout</a></p>
                                    </div>
                                </div>
                                <div class="sl-item">
                                    <div class="sl-left"> <img class="img-circle" alt="user" src="../assets/images/users/govinda.jpg"> </div>
                                    <div class="sl-right">
                                        <div><a class="text-info" href="#">John Doe</a> <span class="sl-date">5 minutes ago</span></div>
                                        <p>assign a new task <a href="#" class="text-info"> Design weblayout</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-4 col-xs-12">
                        <div class="white-box">
                            <div class="user-bg"> <img src="../assets/images/large/img1.jpg" alt="user" class="img-responsive">
                                <div class="overlay-box bg-primary">
                                    <div class="user-content">
                                        <a href="javascript:void(0)"><img alt="img" class="thumb-lg img-circle" src="../assets/images/users/genu.jpg"></a>
                                        <h4 class="text-white">User Name</h4>
                                        <h5 class="text-white">info@myadmin.com</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="user-btm-box">
                                <div class="col-md-4 col-sm-4 text-center">
                                    <p class="text-purple"><i class="ti-facebook"></i></p>
                                    <h1>258</h1>
                                </div>
                                <div class="col-md-4 col-sm-4 text-center">
                                    <p class="text-blue"><i class="ti-twitter"></i></p>
                                    <h1>125</h1>
                                </div>
                                <div class="col-md-4 col-sm-4 text-center">
                                    <p class="text-danger"><i class="ti-dribbble"></i></p>
                                    <h1>556</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
                <!-- .row -->
                <div class="row">
                    <div class="col-md-4 col-lg-4 col-sm-6 ">
                        <div class="bg-primary m-b-30">
                            <div id="myCarousel" class="carousel vcarousel slide vertical p-20">
                                <!-- Carousel items -->
                                <div class="carousel-inner ">
                                    <div class="active item"> <i class="fa fa-map-marker fa-2x text-white"></i>
                                        <p class="text-white">25th Jan</p>
                                        <h2 class="text-white">Now Get <span class="font-bold">50% Off</span><br/>
                                        on buy</h2>
                                        <button class="btn btn-inverse waves-effect waves-light m-t-15">Default</button>
                                    </div>
                                    <div class="item"> <i class="fa fa-map-marker fa-2x text-white"></i>
                                        <p class="text-white">25th Jan</p>
                                        <h2 class="text-white">Now Get <span class="font-bold">50% Off</span><br/>
                                    on buy</h2>
                                        <button class="btn btn-inverse waves-effect waves-light m-t-15">Default</button>
                                    </div>
                                    <div class="item"> <i class="fa fa-map-marker fa-2x text-white"></i>
                                        <p class="text-white">25th Jan</p>
                                        <h2 class="text-white">Now Get <span class="font-bold">50% Off</span><br/>
                                    on buy</h2>
                                        <button class="btn btn-inverse waves-effect waves-light m-t-15">Default</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-4 col-sm-6">
                        <div class="bg-info m-b-30">
                            <div id="myCarouse2" class="carousel vcarousel slide p-20">
                                <!-- Carousel items -->
                                <div class="carousel-inner ">
                                    <div class="active item">
                                        <h2 class="text-white text-height">My Acting blown <span class="font-bold">Your Mind</span>
                                    the moment</h2>
                                        <div class="twi-user"><img src="../assets/images/users/hritik.jpg" alt="user" class="img-circle img-responsive pull-left">
                                            <h4 class="text-white m-b-0">Govinda</h4>
                                            <p class="text-white">Actor</p>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <h2 class="text-white text-height">My Acting blown <span class="font-bold">Your Mind</span>
                                    the moment</h2>
                                        <div class="twi-user"><img src="../assets/images/users/genu.jpg" alt="user" class="img-circle img-responsive pull-left">
                                            <h4 class="text-white m-b-0">Govinda</h4>
                                            <p class="text-white">Actor</p>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <h2 class="text-white text-height">My Acting blown <span class="font-bold">Your Mind</span>
                                    the moment</h2>
                                        <div class="twi-user"><img src="../assets/images/users/ritesh.jpg" alt="user" class="img-circle img-responsive pull-left">
                                            <h4 class="text-white m-b-0">Govinda</h4>
                                            <p class="text-white">Actor</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-4 col-sm-6 ">
                        <div class="bg-danger m-b-30">
                            <div class="carousel vcarousel slide vertical p-20">
                                <!-- Carousel items -->
                                <div class="carousel-inner">
                                    <div class="active item"> <i class="fa fa-google-plus fa-2x text-white"></i>
                                        <p class="text-white">25th Jan</p>
                                        <h2 class="text-white">Now Get <span class="font-bold">50% Off</span><br/>
                                        on buy</h2>
                                        <button class="btn btn-default waves-effect waves-light m-t-15">Default</button>
                                    </div>
                                    <div class="item"> <i class="fa fa-google-plus fa-2x text-white"></i>
                                        <p class="text-white">25th Jan</p>
                                        <h2 class="text-white">Now Get <span class="font-bold">50% Off</span><br/>
                                       on buy</h2>
                                        <button class="btn btn-default waves-effect waves-light m-t-15">Default</button>
                                    </div>
                                    <div class="item"> <i class="fa fa-google-plus fa-2x text-white"></i>
                                        <p class="text-white">25th Jan</p>
                                        <h2 class="text-white">Now Get <span class="font-bold">50% Off</span><br/>
                                        on buy</h2>
                                        <button class="btn btn-default waves-effect waves-light m-t-15">Default</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
                <!-- row -->
                <div class="row">
                    <div class="col-md-4 col-xs-12 col-sm-6">
                        <div class="white-box">
                            <h3>To Do List</h3>
                            <ul class="list-task list-group" data-role="tasklist">
                                <li class="list-group-item" data-role="task">
                                    <div class="checkbox checkbox-info">
                                        <input type="checkbox" id="inputSchedule" name="inputCheckboxesSchedule">
                                        <label for="inputSchedule"> <span>Schedule meeting</span> </label>
                                    </div>
                                </li>
                                <li class="list-group-item" data-role="task">
                                    <div class="checkbox checkbox-info">
                                        <input type="checkbox" id="inputCall" name="inputCheckboxesCall">
                                        <label for="inputCall"> <span>Call clients for follow-up</span> <span class="label label-danger">Today</span> </label>
                                    </div>
                                </li>
                                <li class="list-group-item" data-role="task">
                                    <div class="checkbox checkbox-info">
                                        <input type="checkbox" id="inputBook" name="inputCheckboxesBook">
                                        <label for="inputBook"> <span>Book flight for holiday</span> </label>
                                    </div>
                                </li>
                                <li class="list-group-item" data-role="task">
                                    <div class="checkbox checkbox-info">
                                        <input type="checkbox" id="inputForward" name="inputCheckboxesForward">
                                        <label for="inputForward"> <span>Forward important tasks</span> <span class="label label-info">2 weeks</span> </label>
                                    </div>
                                </li>
                                <li class="list-group-item" data-role="task">
                                    <div class="checkbox checkbox-info">
                                        <input type="checkbox" id="inputRecieve" name="inputCheckboxesRecieve">
                                        <label for="inputRecieve"> <span>Recieve shipment</span> </label>
                                    </div>
                                </li>
                                <li class="list-group-item" data-role="task">
                                    <div class="checkbox checkbox-info">
                                        <input type="checkbox" id="inputForward2" name="inputCheckboxesd">
                                        <label for="inputForward2"> <span>Important tasks</span> <span class="label label-primary">2 weeks</span> </label>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-4 col-xs-12 col-sm-6">
                        <div class="white-box">
                            <h3>You have 5 new messages</h3>
                            <div class="message-center">
                                <a href="#">
                                    <div class="user-img"> <img src="../assets/images/users/pawandeep.jpg" alt="user" class="img-circle"> <span class="profile-status online pull-right"></span> </div>
                                    <div class="mail-contnet">
                                        <h5>Pavan kumar</h5> <span class="mail-desc">Just see the my admin!</span> <span class="time">9:30 AM</span> </div>
                                </a>
                                <a href="#">
                                    <div class="user-img"> <img src="../assets/images/users/sonu.jpg" alt="user" class="img-circle"> <span class="profile-status busy pull-right"></span> </div>
                                    <div class="mail-contnet">
                                        <h5>Sonu Nigam</h5> <span class="mail-desc">I've sung a song! See you at</span> <span class="time">9:10 AM</span> </div>
                                </a>
                                <a href="#">
                                    <div class="user-img"> <img src="../assets/images/users/arijit.jpg" alt="user" class="img-circle"> <span class="profile-status away pull-right"></span> </div>
                                    <div class="mail-contnet">
                                        <h5>Arijit Sinh</h5> <span class="mail-desc">I am a singer!</span> <span class="time">9:08 AM</span> </div>
                                </a>
                                <a href="#">
                                    <div class="user-img"> <img src="../assets/images/users/genu.jpg" alt="user" class="img-circle"> <span class="profile-status online pull-right"></span> </div>
                                    <div class="mail-contnet">
                                        <h5>Genelia Deshmukh</h5> <span class="mail-desc">I love to do acting and dancing</span> <span class="time">9:08 AM</span> </div>
                                </a>
                                <a href="#" class="b-none">
                                    <div class="user-img"> <img src="../assets/images/users/pawandeep.jpg" alt="user" class="img-circle"> <span class="profile-status offline pull-right"></span> </div>
                                    <div class="mail-contnet">
                                        <h5>Pavan kumar</h5> <span class="mail-desc">Just see the my admin!</span> <span class="time">9:02 AM</span> </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-xs-12 col-sm-6">
                        <div class="white-box">
                            <h3>Chat</h3>
                            <div class="chat-box">
                                <ul class="chat-list nicescroll" style="overflow: hidden;" tabindex="5005">
                                    <li>
                                        <div class="chat-image"> <img alt="male" src="../assets/images/users/sonu.jpg"> </div>
                                        <div class="chat-body">
                                            <div class="chat-text">
                                                <h4>Sonu Nigam</h4>
                                                <p> Hi, All! </p> <b>10.00 am</b> </div>
                                        </div>
                                    </li>
                                    <li class="odd">
                                        <div class="chat-image"> <img alt="Female" src="../assets/images/users/genu.jpg"> </div>
                                        <div class="chat-body">
                                            <div class="chat-text">
                                                <h4>Genelia</h4>
                                                <p> Hi, How are you Sonu? ur next concert? </p> <b>10.03 am</b> </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="chat-image"> <img alt="male" src="../assets/images/users/ritesh.jpg"> </div>
                                        <div class="chat-body">
                                            <div class="chat-text">
                                                <h4>Ritesh</h4>
                                                <p> Hi, Sonu and Genelia, </p> <b>10.05 am</b> </div>
                                        </div>
                                    </li>
                                </ul>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="Say something"> <span class="input-group-btn">
                                            <button class="btn btn-info" type="button">Send</button>
                                            </span> </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
















<?php
include("footer.php");
?>