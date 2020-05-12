
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../assets/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>
    </title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <!-- CSS Files -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="../assets/css/paper-dashboard.css?v=2.0.1" rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="../assets/demo/demo.css" rel="stylesheet" />
</head>

<body >


        <div class="card align-content-center col-md-12">

            <div class="col-md-4">

                <form class="uk-form-stacked uk-margin-medium-top" method = 'POST' id="platform" action='{!!route("Postzoom")!!}' accept-charset="UTF-8" enctype="multipart/form-data">


                {{ Form::open(['action' => 'discoverController@Postzoom']) }}

            <div class="row">
                    <h2 class="text-center">Add Zoom Link</h2>

            </div>


                <div class="uk-margin-medium-bottom">
                    <div class="uk-form-controls">
                        <div class="form-group">
                            {{Form::label('descriptionLabel', 'Description')}}
                            {{Form::text('description', '',array('class' => 'form-control rounded-0 uk-input uk-form-large uk-border-rounded', 'style'=>' resize:vertical; ', 'id' => 'id'))}}
                        </div>
                    </div>
                </div>

                    <div class="uk-margin-medium-bottom">
                        <div class="uk-form-controls">
                            <div class="form-group">
                                {{Form::label('descriptionLabel', 'Link')}}
                                {{Form::text('data', '',array('class' => 'form-control rounded-0 uk-input uk-form-large uk-border-rounded', 'style'=>' resize:vertical; ', 'id' => 'id'))}}
                            </div>
                        </div>
                    </div>


                <div>
                    <input type="hidden" name="_next" value="https://docs.jekyll.plus/thanks/">
                    <input type="text" name="_gotcha" style="display:none">
                    <input class="uk-button uk-button-primary uk-button-large uk-width-1-1v btn btn-primary mr-2 mb-2" type="submit" value="Post">
                </div>



                {{ Form::close() }}


            </div>


        </div>








<!--   Core JS Files   -->
<script src="../assets/js/core/jquery.min.js"></script>
<script src="../assets/js/core/popper.min.js"></script>
<script src="../assets/js/core/bootstrap.min.js"></script>
<script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
<!--  Google Maps Plugin    -->
<script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
<!-- Chart JS -->
<script src="../assets/js/plugins/chartjs.min.js"></script>
<!--  Notifications Plugin    -->
<script src="../assets/js/plugins/bootstrap-notify.js"></script>
<!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
<script src="../assets/js/paper-dashboard.min.js?v=2.0.1" type="text/javascript"></script><!-- Paper Dashboard DEMO methods, don't include it in your project! -->
<script src="../assets/demo/demo.js"></script>
</body>

</html>
