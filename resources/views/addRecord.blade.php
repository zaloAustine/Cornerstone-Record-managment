
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

<body class="">

<div class="col-md-6 mb-3 mb-md-0">

<form class="uk-form-stacked uk-margin-medium-top" method = 'POST' id="platform" action='{!!route("AddPaymentRecord")!!}' accept-charset="UTF-8" enctype="multipart/form-data">
    @csrf

    <h2 class="h4 text-black mb-5">Contact Form</h2>

    <div class="row form-group">
        <div class="col-md-6 mb-3 mb-md-0">
            <label class="text-black" for="name">Full Name</label>
            <input type="text" id="name" name="name" class="form-control rounded-0">
        </div>
    </div>

    <div class="row form-group">
        <div class="col-md-6">
            <label class="text-black" for="email">Email</label>
            <input type="email" id="email" name="email" class="form-control rounded-0">
        </div>
    </div>

    <div class="row form-group">
        <div class="uk-margin-medium-bottom">
            <div class="uk-form-controls">
                <div class="form-group">
                    {!! Form::Label('item', 'Item:') !!}
                    {!! Form::select('item', $item, ['name','id'], array('class' => 'uk-input uk-form-large uk-border-rounded', 'style'=>' resize:vertical; ', 'id' => 'id')),null !!}
                </div>
            </div>
        </div>
    </div>

<div class="row form-group">
    <div class="col-md-6">
        <label class="text-black" for="email">Amount</label>
        <input type="number" id="amount" name="amount" class="form-control rounded-0">
    </div>
</div>
    <div class="row form-group">
        <div class="col-md-12">
            <input type="submit"  value="Add Record" class="btn btn-primary mr-2 mb-2">
        </div>
    </div>


</form>

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
