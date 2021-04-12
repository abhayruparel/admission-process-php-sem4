<?php
include("admission_header.php");
?>

<head>
    <link href="../assets/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Menu CSS -->
    <link href="../assets/bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">
    <!-- chartist CSS -->
    <link href="../assets/bower_components/chartist-js/dist/chartist.min.css" rel="stylesheet">
    <link href="../assets/bower_components/chartist-js/dist/chartist-init.css" rel="stylesheet">
    <link href="../assets/bower_components/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.css" rel="stylesheet">
    <link href="../assets/bower_components/vectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="../css/style.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="enroll_form_style.php" />

    <!--Form CSS Start-->
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/main.css" rel="stylesheet" media="all">
    <!--Form CSS End-->
    <script src="admission_validation.js"></script>
</head>

<br>

<div id="page-wrapper">
    <div class="container-fluid">
        <!--
                <div class="row bg-title">
                    <div class="col-lg-12">
                        <h4 class="page-title">Welcome Students</h4>
                        <ol class="breadcrumb">
                        
                            <li><a href="#">Dashboard</a></li>
                            <li class="active">Dashboard 1</li>
                        
                        </ol>
                    </div>
                     /.col-lg-12 
                </div>
                -->
        <!-- /.row -->
        <div class="row">
            <div class="wrapper wrapper--w790">
                <div class="card card-5">
                    <div class="card-heading">
                        <h2 class="title">Admission Form</h2>
                    </div>
                    <div class="card-body">
                        <form name='registration' onSubmit="return formValidation();" action="enroll_form_connect.php" method="POST">
                            <div class="form-row m-b-55">
                                <div class="name">Name</div>
                                <div class="value">
                                    <div class="row row-space">
                                        <div class="col-2">
                                            <div class="input-group-desc">
                                                <input class="input--style-5" type="text" name="fname">
                                                <label class="label--desc">first name</label>
                                            </div>
                                        </div>
                                        <div class="col-2">
                                            <div class="input-group-desc">
                                                <input class="input--style-5" type="text" name="lname">
                                                <label class="label--desc">last name</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="name">Contact</div>
                                <div class="value">
                                    <div class="input-group">
                                        <input class="input--style-5" type="text" name="contact">
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="name">Email ID</div>
                                <div class="value">
                                    <div class="input-group">
                                        <input class="input--style-5" type="email" name="mail">
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="name">Gender</div>
                                <div class="value">
                                    <div class="input-group">
                                        <label class="radio-container m-r-55">Male
                                            <input type="radio" checked="checked" value="M" name="gender">
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="radio-container">Female
                                            <input type="radio" value="F" name="gender">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="name">D.O.B</div>
                                <div class="value">
                                    <div class="input-group">
                                        <input class="input--style-5" type="date" name="dob">
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="name">Guardian Name</div>
                                <div class="value">
                                    <div class="input-group">
                                        <input class="input--style-5" type="text" name="gname">
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="name">Guardian Contact</div>
                                <div class="value">
                                    <div class="input-group">
                                        <input class="input--style-5" type="text" name="gcontact">
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="name">Address</div>
                                <div class="value">
                                    <div class="input-group">
                                        <textarea class="input--style-5" name="add"></textarea>
                                    </div>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="name">Country</div>
                                <div class="value">
                                    <div class="input-group">
                                        <input class="input--style-5" type="text" name="country">
                                    </div>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="name">State</div>
                                <div class="value">
                                    <div class="input-group">
                                        <input class="input--style-5" type="text" name="state">
                                    </div>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="name">City</div>
                                <div class="value">
                                    <div class="input-group">
                                        <input class="input--style-5" type="text" name="city">
                                    </div>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="name">Pincode</div>
                                <div class="value">
                                    <div class="input-group">
                                        <input class="input--style-5" type="text" name="pin">
                                    </div>
                                </div>
                            </div>


                            <div class="form-row">
                                <div class="name">Degree Field</div>
                                <div class="value">
                                    <div class="input-group">
                                        <div class="rs-select2 js-select-simple select--no-search">
                                            <select name="deg" class="degree" id="degree" onchange="updateState();">degree
                                            </select>
                                            <div class="select-dropdown"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="name">Course</div>
                                <div class="value">
                                    <div class="input-group">
                                        <div class="rs-select2 js-select-simple select--no-search">
                                            <select name="course" class="course" id="course">course
                                            </select>
                                            <div class="select-dropdown"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div>
                                <button class="btn btn--radius-2 btn--blue" type="submit">ENROLL</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        function formValidation() {
            var ufname = document.registration.fname;
            var ulname = document.registration.lname;
            var umobile = document.registration.contact;
            var uemail = document.registration.mail;
            var umgender = document.registration.mgender;
            var ufgender = document.registration.fgender;
            var udob = document.registration.dob;
            var ugname = document.registration.gname;
            var ugmobile = document.registration.gcontact;
            var uadd = document.registration.add;
            var ucountry = document.registration.country;
            var ustate = document.registration.state;
            var ucity = document.registration.city;
            var upin = document.registration.pin;
            var udegree = document.registration.deg;
            var ucourse = document.registration.course;



            if (allalphabet(ufname)) {
                if (allLetter(ulname)) {
                    if (isMobile(umobile)) {
                        if (ValidateEmail(uemail)) {
                            // if(validgender(umgender,ufgender))
                            // {
                            if (allAlphabet(ugname)) {
                                if (phoneValid(ugmobile)) {
                                    if (alphanumeric(uadd)) {
                                        if (allCountry(ucountry)) {
                                            if (allState(ustate)) {
                                                if (allCity(ucity)) {
                                                    if (allnumeric(allnumeric(upin))) {
                                                        if (degreeselect(udegree)) {
                                                            // if(courseselect(ucourse))
                                                            // {

                                                            // }
                                                        }
                                                    }
                                                }
                                            }
                                        }
                                    }
                                }
                            }
                            // }
                        }
                    }
                }
            }


            return false;

        }



        function allCountry(ucountry) {
            var letters = /^[A-Za-z]+$/;
            if (ucountry.value.match(letters)) {
                return true;
            } else {
                alert('Username must have alphabet characters only');
                ucountry.focus();
                return false;
            }
        }

        function allState(ustate) {
            var letters = /^[A-Za-z]+$/;
            if (ustate.value.match(letters)) {
                return true;
            } else {
                alert('Username must have alphabet characters only');
                ustate.focus();
                return false;
            }
        }


        function allCity(ucity) {
            var letters = /^[A-Za-z]+$/;
            if (ucity.value.match(letters)) {
                return true;
            } else {
                alert('Username must have alphabet characters only');
                ucity.focus();
                return false;
            }
        }

        function allalphabet(ufname) {
            var letters = /^[A-Za-z]+$/;
            if (ufname.value.match(letters)) {
                return true;
            } else {
                alert('Username must have alphabet characters only');
                ufname.focus();
                return false;
            }
        }

        function allAlphabet(ugname) {
            var letters = /^[A-Za-z]+$/;
            if (ugname.value.match(letters)) {
                return true;
            } else {
                alert('Username must have alphabet characters only');
                ugname.focus();
                return false;
            }
        }

        function allLetter(ulname) {
            var letters = /^[A-Za-z]+$/;
            if (ulname.value.match(letters)) {
                return true;
            } else {
                alert('Username must have alphabet characters only');
                ulname.focus();
                return false;
            }
        }

        function alphanumeric(uadd) {
            var letters = /^[0-9a-zA-Z]+$/;
            if (uadd.value.match(letters)) {
                return true;
            } else {
                alert('User address must have alphanumeric characters only');
                uadd.focus();
                return false;
            }
        }

        function degreeselect(udegree) {
            if (udegree.value == "Default") {
                alert('Select your degree from the list');
                udegree.focus();
                return false;
            } else {
                return true;
            }
        }
        // function courseselect(ucourse)n.contact;
        var uemail = document.registration.mail;
        var umgender = document.registration.mgender;
        var ufgender = document.registration.fgender;
        var udob = document.registration.dob;
        var ugname = document.registration.gname;
        var ugmobile = document.registration.gcontact;
        var uadd = document.registration.add; {
            if (ucourse.value == "Default") {
                alert('Select your course from the list');
                ucourse.focus();
                return false;
            } else {
                return true;
            }
        }

        function allnumeric(upin) {
            var numbers = /^[0-9]+$/;
            if (upin.value.match(numbers)) {
                return true;
            } else {
                alert('ZIP code must have numeric characters only');
                uzip.focus();
                return false;
            }
        }

        function ValidateEmail(uemail) {
            var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
            if (uemail.value.match(mailformat)) {
                return true;
            } else {
                alert("You have entered an invalid email address!");
                uemail.focus();
                return false;
            }
        }

        function validgender(umgender, ufgender) {
            x = 0;

            if (umgender.checked) {
                x++;
            }
            if (ufgender.checked) {
                x++;
            }
            if (x == 0) {
                alert('Select Male/Female');
                umgender.focus();
                return false;
            }

        }

        function isMobile(umobile) {
            var phoneno = /^\d{10}$/;
            if ((umobile.value.match(phoneno))) {
                return true;
            } else {
                alert("Invalid number");
                umobile.focus();
                return false;
            }
        }

        function phoneValid(ugmobile) {
            var mobno = /^\d{10}$/;
            if ((ugmobile.value.match(mobno))) {
                return true;
            } else {
                alert("Invalid number");
                ugmobile.focus();
                return false;
            }
        }
        /*else
        {
            alert('Form Succesfully Submitted');
            window.location.reload()
            return true;
        }*/
    </script>

    <script>
        var myDegree = [{
                "degree": "B.Tech"
            },
            {
                "degree": "B.Arch"
            }
        ];

        function updateState() {
            var z = document.getElementById("degree");

            if (z.value == "B.Tech") {

                alert("You selected B.tech.");
                var myCourse = [{
                        "course": "CBA"
                    },
                    {
                        "course": "CS"
                    }
                ];
                courseFunction(myCourse)
            }

            if (z.value == "B.Arch") {

                alert("You selected B.Arch");
                var myCourse = [{
                        "course": "Landscape Architect"
                    },
                    {
                        "course": "Research Architect"
                    }
                ];
                courseFunction(myCourse)
            }
        }
        degreeFunction(myDegree);

        function degreeFunction(arr) {
            var out = "";
            var i;

            for (i = 0; i < arr.length; i++) {
                out += '<option value="' + arr[i].degree + '">' + arr[i].degree + '</option>' +
                    arr[i].display + '</a><br>';
            }
            document.getElementById("degree").innerHTML = out;
        }
        var myCourse = [{
                "course": "CBA"
            },
            {
                "course": "CS"
            }
        ];
        courseFunction(myCourse);

        function courseFunction(arr) {
            var out = "";
            var i;

            for (i = 0; i < arr.length; i++) {
                out += '<option value="' + arr[i].course + '">' + arr[i].course + '</option>' +
                    arr[i].display + '</a><br>';
            }
            document.getElementById("course").innerHTML = out;
        }
    </script>

    <!-- Jquery JS-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="js/global.js"></script>
    <?php
    include("admission_footer.php");
    ?>