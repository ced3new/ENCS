<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="title" content="ENCS">
	<meta name="description" content="ENCS.">
	<meta name="keywords" content="">
	<meta name="language" content="en">

	<title>ENCS</title>

	<!-- Bootstrap core CSS -->
		<link href="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet">
	<!-- Bootstrap theme -->
		<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-theme.min.css">

	<!-- Custom styles for this template -->
		<link href="encscss.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
        <script src="../../assets/js/html5shiv.js"></script>
        <script src="../../assets/js/respond.min.js"></script>
    <![endif]-->

	
	

	<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
		<script src="/js/html5shiv.js"></script>
	<![endif]-->

	<!-- Fav and touch icons -->
	<link rel="apple-touch-glyphicon-precomposed" sizes="144x144" href="/img/apple-touch-glyphicon-144-precomposed.png">
	<link rel="apple-touch-glyphicon-precomposed" sizes="114x114" href="/img/apple-touch-glyphicon-114-precomposed.png">
	<link rel="apple-touch-glyphicon-precomposed" sizes="72x72" href="/img/apple-touch-glyphicon-72-precomposed.png">
	<link rel="apple-touch-glyphicon-precomposed" href="/img/apple-touch-glyphicon-57-precomposed.png">
	<link rel="shortcut icon" href="/img/favicon.png">
	
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script><style type="text/css"></style>
	<script type="text/javascript" src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
	<script type="text/javascript" src="http://cdn.transparensee.com/lib/jquery-plugin/touchpunch/0.2.2/jquery.ui.touch-punch.min.js"></script>
	<script type="text/javascript" src="/js/scripts.min.js"></script>
	
	
</head>

<!-- Wrap all page content here -->
<div id="wrap" class="">
    <!-- Fixed navbar -->
    <?php
    include 'navbar.php';
    ?>
            <!--/.nav-collapse -->
        </div>
    </div>
   <div class="container">
    <div class="page-header">
         <h1 class="droppedHover">Create New Patient</h1>

        <p class="">Follow M0 numbers in sequence unless otherwise directed.</p>
	</div>
	
        <div id="newpatient"
        class="">
            <form class="form-inline" role="form" align="center">
                <input type="radio" id="reasonforcare1" name="reasonForCare" value="start"
                class="">Start of Care &nbsp;
                <input type="radio" id="reasonforcare2" name="reasonForCare"
                value="resume" class="">Resumption of Care Date:
                <div class="form-group">Date:
                    <label class="sr-only" for="reasonforcaredate">date</label>
                    <input type="date" class="form-control" id="reasonforcaredate"
                    name="date">
                </div>
                <div class="form-group">Time In:
                    <label class="sr-only" for="timein">Time In</label>
                    <input type="time" class="form-control" id="timein" name="timeIn">
                </div>
                <div class="form-group">Time Out:
                    <label class="sr-only" for="timeout">Time Out</label>
                    <input type="time" class="form-control" id="timeout" name="timeOut">
                </div>
            </form>
            <hr class="">
            <form role="form" class="">
                <div class="col-md-6">M0D10)CMS Certification Number: (Locator 5)
                    <input type="text" class="form-control"
                    name="CMScertNum">Branch ID (M0014) Branch State:
                    <input type="text" class="form-control"
                    name="branchState">(M0016)Branch ID Number:
                    <input type="text" class="form-control" name="branchIDnum">(M0018)National Provider Identifier(NPI) for the attending physician who
                    has signed the plan of care
                    <input type="text" class="form-control" name="NPI"
                    id="NPI">
                    <input type="checkbox" name="NPI" value="unknown" id="chkNPI" class="">UK - Unknown or Not Available
                    <br class="">Phone: (Locator 24)
                    <input type="text" class="form-control" name="drTN"
                    placeholder="___-___-____">Name: (Locator 24)
                    <input type="text" class="form-control" name="drFName"
                    placeholder="First Name">
                    <input type="text" class="form-control" name="drMI" placeholder="M.I.">
                    <input type="text" class="form-control" name="drLName" placeholder="Last Name">Address:(Locator 24)
                    <input type="text" class="form-control" name="streetAdd"
                    placeholder="Street/Apt. No.">
                    <input type="text" class="form-control" name="cityAdd" placeholder="City">
                    <input type="text" class="form-control" name="stateAdd" placeholder="State">
                    <input type="text" class="form-control" name="zipAdd" placeholder="Zip Code">
                    <hr class="">Secondary Referring Physician ID:
                    <input type="text" class="form-control"
                    name="2ndNPI">Phone:
                    <input type="text" class="form-control" name="2nddrTN">Name: (Locator 24)
                    <input type="text" class="form-control" name="2nddrFName"
                    placeholder="First Name">
                    <br class="">
                    <input type="text" class="form-control" name="2nddrMI" placeholder="M.I.">
                    <br class="">
                    <input type="text" class="form-control" name="2nddrLName" placeholder="Last Name">
                    <hr class="">(M0020)(Locator 4) Patient ID Number:
                    <input type="text" class="form-control"
                    name="ptID">Medical Record Number if different then M0020:
                    <input type="text" class="form-control"
                    name="MRN">
                </div>
                <div class="col-md-6">(M0030)Start of Care Date:
                    <input type="date" class="form-control" name="SoCDate">(M0032)Resumption of Care Date:
                    <input type="date" class="form-control"
                    name="RoCDate">
                    <input type="checkbox" name="checkRoCDate" class="">NA-Not Applicable (M0040)
                    <br class="">Patient Name:
                    <input type="text" class="form-control" name="ptFName" placeholder="First Name">
                    <input type="text" class="form-control" name="ptMI" placeholder="M.I.">
                    <input type="text" class="form-control" name="ptLName" placeholder="Last Name">Patient Phone:
                    <input type="text" class="form-control" name="ptTN" placeholder="___-___-____">Patient Address(Locator 6):
                    <input type="text" class="form-control" name="ptStreetAdd"
                    placeholder="Street/Apt No.">
                    <input type="text" class="form-control" name="ptCityAdd" placeholder="City">(M0050)(Locator 6)Patient State Residence:
                    <input type="text" class="form-control"
                    name="ptStateAdd" placeholder="__">(M0060)(Locator 6)Patient Zip Code:
                    <input type="text" class="form-control"
                    name="ptZipAdd" placeholder="">(M0063)Medicare Number:
                    <input type="text" class="form-control" name="ptMedicare"
                    placeholder="include suffix">
                    <input type="checkbox" name="MedicareNA" class="">NA-No Medicare (M0064)
                    <br class="">Social Security Number:
                    <input type="text" class="form-control" name="ptSSS"
                    placeholder="___-__-____">
                    <input type="checkbox" name="SSSNA" class="">UK-Unknown or Not Available (M0065)
                    <br class="">Medicaid Number:
                    <input type="text" class="form-control" name="ptMedicaid">
                    <input type="checkbox" name="MedicaidNA" class="">NA-No Medicaid (M0066)
                    <br class="">(Locator 8)Birth Date:
                    <input type="date" class="form-control">(Locator 1)Patient HI Claim Number:
                    <input type="radio" name="ptHIclaim"
                    value="ptMedicare" class="">1-Same as M0063
                    <input type="radio" name="ptHIclaim" value="ptMedicaid"
                    class="">2-Same as M0065
                    <input type="radio" name="ptHIclaim" value="other" class="">Other:
                    <input type="text" class="form-control" name="ptHIclaim">
                </div>
            </form>
        </div>
    
</div>
</div>

<div id="footer" class="">
    <div class="container">
        <p class="text-muted credit">Designed and Developed by <a href="http://www.cmdtechnologies.com" class="">CMD Technologies</a> .</p>
    </div>
</div>

</html>
