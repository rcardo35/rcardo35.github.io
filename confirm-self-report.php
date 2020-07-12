<?php
    require_once("config/database_config.php");
    require_once("controller/database_queries.php");
    
    if ($_POST['status'] == "Student") {
        (new Queries\ProcessQueries($conn))->insertStudentSurvey();
    } else {
        (new Queries\ProcessQueries($conn))->insertNonStudentSurvey();
    }
?>

<!DOCTYPE html>
<html lang="zxx" class="no-js">
<head>
    <!-- Mobile Specific Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon-->
    <link rel="shortcut icon" href="assets/img/fav.png">
    <!-- Author Meta -->
    <meta name="author" content="colorlib">
    <!-- Meta Description -->
    <meta name="description" content="">
    <!-- Meta Keyword -->
    <meta name="keywords" content="">
    <!-- meta character set -->
    <meta charset="UTF-8">
    <!-- Site Title -->
    <title>Education</title>

    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
    <!--
    CSS
    ============================================= -->
    <link rel="stylesheet" href="assets/css/linearicons.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/nice-select.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.css">
    <link rel="stylesheet" href="assets/css/jquery-ui.css">
    <link rel="stylesheet" href="assets/css/main.css">

    <link rel="stylesheet" href="assets/css/panelcss.css">

    <script type="text/javascript">
		
		$(document).ready(function () {
			
			$('#exp_date').datepicker({
				changeMonth: true, changeYear: true, weekStart: 1,
			});
		});
		
		$('#submit').click(function () {
			console.log("entered method");
			checked = $("input[type=checkbox]:checked").length;
			
			if($("input[type=checkbox]:checked").length > 0) {
				alert("You must check at least one checkbox.");
				return false;
			}
			
		});
		
		function toggleSymptoms() {
			var noSymptoms = document.getElementById("no_symptoms");
			
			var symp1 = document.getElementById("fever");
			var symp2 = document.getElementById("cough");
			var symp3 = document.getElementById("shortness_of_breath");
			
			if(noSymptoms.checked) {
				symp1.disabled = true;
				symp2.disabled = true;
				symp3.disabled = true;
			} else {
				symp1.disabled = false;
				symp2.disabled = false;
				symp3.disabled = false;
			}
		}
		
		$('.optionBox input:checkbox').click(function () {
			var $inputs = $('.optionBox input:checkbox');
			if($(this).value() === "No Symptoms") {
				console.log($(this).value());
				if($(this).is(':checked')) {  // <-- check if clicked box is currently checked
					$inputs.not(this).prop('disabled', true); // <-- disable all but checked checkbox
				} else {  //<-- if checkbox was unchecked
					$inputs.prop('disabled', false); // <-- enable all checkboxes
				}
			}
		});

    </script>

    <style>
        .form-wrapper {
            display: flex;
            align-items: center;
            flex-direction: column;
            justify-content: center;
            width: 100%;
            min-height: 100%;
            padding: 20px;
        }

        .req {
            color: #C00;
            font-size: 12px;
        }

        .center {
            text-align: center;
        }

    </style>
</head>
<body>
<header id="header" id="home">
    <?php require_once "navbar.php"; ?>
</header><!-- #header -->

<!-- start banner Area -->
<section class="banner-area relative about-banner" id="home">
    <div class="overlay overlay-bg"></div>
    <div class="container">
        <div class="row d-flex align-items-center justify-content-center">
            <div class="about-content col-lg-12">
<!--                <h1 class="text-white">-->
<!--                    Self-Reporting-->
<!--                </h1>-->
<!--                <p class="text-white link-nav"><a href="index.php">Home </a> <span class="lnr lnr-arrow-right"></span> <a href="self-reporting.php">Self-Reporting</a></p>-->
            </div>
        </div>
    </div>
</section>
<!-- End banner Area -->

<!-- Start contact-page Area -->
<section class="contact-page-area section-gap">
    <div class="container" align="center">
        <div class="panel panel-info" style="width: 90%">
            <div class="panel-heading"><h3><b style="color: black">Confidential Health Form</b></h3></div>
            <div class="panel-body" align="left">
                <p align="center">
                    Thank you for submitting your answers. Your personal information will not be shared with anyone and will only be used to improve campus reopening efforts! You will be contacted by a school administrator soon.
                </p>
            </div>
        </div>
        <a href="index.php" class="primary-btn" style="float: none; font-size: 16px">Home</a>
        <br><br>
    </div>
    <!--    </div>-->
</section>
<!-- End contact-page Area -->

<!-- start footer Area -->
<?php
    require_once("footer.php");
?>
<!-- End footer Area -->


<script src="assets/js/vendor/jquery-2.2.4.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
<script src="assets/js/vendor/bootstrap.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
<script src="assets/js/easing.min.js"></script>
<script src="assets/js/hoverIntent.js"></script>
<script src="assets/js/superfish.min.js"></script>
<script src="assets/js/jquery.ajaxchimp.min.js"></script>
<script src="assets/js/jquery.magnific-popup.min.js"></script>
<script src="assets/js/jquery.tabs.min.js"></script>
<script src="assets/js/jquery.nice-select.min.js"></script>
<script src="assets/js/owl.carousel.min.js"></script>
<script src="assets/js/main.js"></script>
<script src="assets/js/vendor/bootstrap.min.js" type="text/javascript"></script>


</body>
</html>