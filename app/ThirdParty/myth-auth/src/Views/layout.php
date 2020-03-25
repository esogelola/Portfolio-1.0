<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>ADMIN</title>

    <!-- Bootstrap core CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
    <script src="https://cdn.tiny.cloud/1/66q0i97ii7fyjl6n67wwbkvkasa26lyaluxw8i6gjbr526yj/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>

   <style>
        body {
            padding-top: 5rem;
        }
    </style>
    <style>
    #contactForm {
        margin-top: -10px
    }

    #contactForm .form-group label.control-label {
        color: #8c8c8c
    }

    #contactForm .form-control {
        font-weight: 500;
        height: auto
    }

    .form-control,
    .form-group .form-control {
        border: 0;
        background-image: -webkit-gradient(linear, left top, left bottom, from(#009688), to(#009688)), -webkit-gradient(linear, left top, left bottom, from(#D2D2D2), to(#D2D2D2));
        background-image: -webkit-linear-gradient(#009688, #009688), -webkit-linear-gradient(#D2D2D2, #D2D2D2);
        background-image: -o-linear-gradient(#009688, #009688), -o-linear-gradient(#D2D2D2, #D2D2D2);
        background-image: linear-gradient(#009688, #009688), linear-gradient(#D2D2D2, #D2D2D2);
        -webkit-background-size: 0 2px, 100% 1px;
        background-size: 0 2px, 100% 1px;
        background-repeat: no-repeat;
        background-position: center bottom, center -webkit-calc(100% - 1px);
        background-position: center bottom, center calc(100% - 1px);
        background-color: rgba(0, 0, 0, 0);
        -webkit-transition: background 0s ease-out;
        -o-transition: background 0s ease-out;
        transition: background 0s ease-out;
        float: none;
        -webkit-box-shadow: none;
        box-shadow: none;
        border-radius: 0
    }

    .form-control::-moz-placeholder,
    .form-group .form-control::-moz-placeholder {
        color: #BDBDBD;
        font-weight: 400
    }

    .form-control:-ms-input-placeholder,
    .form-group .form-control:-ms-input-placeholder {
        color: #BDBDBD;
        font-weight: 400
    }

    .form-control::-webkit-input-placeholder,
    .form-group .form-control::-webkit-input-placeholder {
        color: #BDBDBD;
        font-weight: 400
    }

    .input-group-btn .btn {
        margin: 0 0 7px 0
    }
</style>
    <?= $this->renderSection('pageStyles') ?>
</head>

<body>

<?= view('Myth\Auth\Views\_navbar') ?>

<main role="main" class="container">
	<?= $this->renderSection('main') ?>
</main><!-- /.container -->


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<?= $this->renderSection('pageScripts') ?>
</body>
</html>
