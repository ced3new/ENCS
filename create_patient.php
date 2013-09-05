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
            
	<div class="row">
		<form class="form-inline" role="form">
			<div class="col-md-4">
				<div class="radio">
					<label class="label label-default">
						<input type="radio" name="reasonForCare" value="start"> 
						Start of Care &nbsp;
					</label>
				</div>			
				<div class="radio">
					<label class="label label-default">
						<input type="radio" id="reasonforcare2" name="reasonForCare" value="resume">
						Resumption of Care Date:
					</label>
				</div>  
			</div>
			<div class="col-md-8">
					<div class="form-group">
						<label class="label label-info" for="reasonforcaredate">Date:</label>
						<input type="date" class="form-control input-sm" id="reasonforcaredate" name="date">
					</div>
					<div class="form-group">
						<label class="label label-info" for="timein">Time In</label>
						<input type="time" class="form-control input-sm" id="timein" name="timeIn">
					</div>
					<div class="form-group">
						<label class="label label-info" for="timeout">Time Out</label>
						<input type="time" class="form-control input-sm" id="timeout" name="timeOut">
					</div>
			</div>
		</form>
	</div>           
            <hr class="">
            <form role="form" class="">
			<div class="row">
                <div class="col-md-6">
					<div class="form-group">
						<label class="label label-info" for="CMScertNum">M0D10)CMS Certification Number: (Locator 5)</label>					
						<input type="text" class="form-control input-sm" id="CMScertNum" name="CMScertNum">					
					</div>
					<div class="form-group">
						<label class="label label-info" for="branchState">Branch ID (M0014) Branch State:</label>					
						<input type="text" class="form-control input-sm" id="branchState" name="branchState">					
					</div>
					<div class="form-group">
						<label class="label label-info" for="branchIDnum">(M0016)Branch ID Number:</label>					
						<input type="text" class="form-control input-sm" id="branchIDnum" name="branchIDnum">					
					</div>
                    <div class="form-group">
						<label class="label label-info" for="NPI">(M0018)National Provider Identifier(NPI) for the attending physician who has signed the plan of care</label>					
						<input type="text" class="form-control input-sm" id="NPI" name="NPI">					
					</div>				
					<label class="checkbox">
						<input type="checkbox" name="NPI" value="unknown" id="chkNPI" class="">UK - Unknown or Not Available
                    </label>
					<br class="">
					<div class="form-group">
						<label class="label label-info" for="drTN">Phone: (Locator 24)</label>					
						<input type="text" class="form-control input-sm" id="drTN" name="drTN" placeholder="___-___-____">					
					</div>
					<div class="form-group">
						<label class="label label-info" for="drFName">Name: (Locator 24)</label>					
						<input type="text" class="form-control input-sm" id="drFName" name="drFName" placeholder="First Name">					
					</div>
					<div class="form-group">
						<label class="label label-info" class="sr-only" for="drMI">MI: (Locator24)</label>					
						<input type="text" class="form-control input-sm" id="drMI" name="drMI" placeholder="M.I.">					
					</div>
					<div class="form-group">
						<label class="label label-info" class="sr-only" for="drLName">Last Name: (Locator24)</label>					
						<input type="text" class="form-control input-sm" id="drLName" name="drLName" placeholder="Last Name">					
					</div>
                    <div class="form-group">
						<label class="label label-info" for="streetAdd">Address:(Locator 24)</label>					
						<input type="text" class="form-control input-sm" id="streetAdd" name="streetAdd" placeholder="Street/Apt. No.">					
					</div>
                    <div class="form-group">
						<label class="label label-info" class="sr-only" for="cityAdd">City (Locator 24)</label>					
						<input type="text" class="form-control input-sm" id="cityAdd" name="cityAdd" placeholder="City">					
					</div>
					<div class="form-group">
						<label class="label label-info" class="sr-only" for="stateAdd">State (Locator 24)</label>					
						<input type="text" class="form-control input-sm" id="stateAdd" name="stateAdd" placeholder="State">					
					</div>
					<div class="form-group">
						<label class="label label-info" class="sr-only" for="zipAdd">Zip Code (Locator 24)</label>					
						<input type="text" class="form-control input-sm" id="zipAdd" name="zipAdd" placeholder="Zip Code">					
					</div>
                    <div class="form-group">
						<label class="label label-info" for="2ndNPI">Secondary Referring Physician ID:</label>					
						<input type="text" class="form-control input-sm" id="2ndNPI" name="2ndNPI">					
					</div>
                    <div class="form-group">
						<label class="label label-info" for="2nddrTN">Phone:</label>					
						<input type="text" class="form-control input-sm" id="2nddrTN" name="2nddrTN">					
					</div>
                    <div class="form-group">
						<label class="label label-info" for="2nddrFName">Name: (Locator 24)</label>					
						<input type="text" class="form-control input-sm" id="2nddrFName" name="2nddrFName" placeholder="First Name">					
					</div>
                    <div class="form-group">
						<label class="label label-info" class="sr-only" for="2nddrMI">MI: (Locator 24)</label>					
						<input type="text" class="form-control input-sm" id="2nddrMI" name="2nddrMI" placeholder="M.I.">					
					</div>
                    <div class="form-group">
						<label class="label label-info" class="sr-only" for="2nddrLName">Last Name: (Locator 24)</label>					
						<input type="text" class="form-control input-sm" id="2nddrLName" name="2nddrLName" placeholder="Last Name">					
					</div>
                    <div class="form-group">
						<label class="label label-info" for="ptID">(M0020)(Locator 4) Patient ID Number:</label>					
						<input type="text" class="form-control input-sm" id="ptID" name="ptID">					
					</div>
					<div class="form-group">
						<label class="label label-info" for="MRN">Medical Record Number if different then M0020:</label>					
						<input type="text" class="form-control input-sm" id="MRN" name="MRN">			
					</div>   
                </div>
                <div class="col-md-6">
					<div class="form-group">
						<label class="label label-info" for="SoCDate">(M0030)Start of Care Date:</label>					
						<input type="date" class="form-control input-sm" id="SoCDate" name="SoCDate">			
					</div> 
					<div class="form-group">
						<label class="label label-info" for="RoCDate">(M0032)Resumption of Care Date:</label>					
						<input type="date" class="form-control input-sm" id="RoCDate" name="RoCDate">			
					</div>
					<label class="checkbox">
						<input type="checkbox" name="checkRoCDate" class="">NA-Not Applicable (M0040)
					</label>
                    <br class="">
					<div class="form-group">
						<label class="label label-info" for="ptFName">Patient Name:</label>					
						<input type="text" class="form-control input-sm" id="ptFName" name="ptFName" placeholder="First Name">			
					</div>
					<div class="form-group">
						<label class="label label-info" class="sr-only" for="ptMI">MI:</label>					
						<input type="text" class="form-control input-sm" id="ptMI" name="ptMI" placeholder="M.I.">			
					</div>
					<div class="form-group">
						<label class="label label-info" class="sr-only" for="ptLName">Last Name:</label>					
						<input type="text" class="form-control input-sm" id="ptLName" name="ptLName" placeholder="Last Name">			
					</div>
					<div class="form-group">
						<label class="label label-info" for="ptTN">Patient Phone:</label>					
						<input type="text" class="form-control input-sm" id="ptTN" name="ptTN" placeholder="___-___-____">			
					</div>
					<div class="form-group">
						<label class="label label-info" for="ptStreetAdd">Patient Address(Locator 6):</label>					
						<input type="text" class="form-control input-sm" id="ptStreetAdd" name="ptStreetAdd" placeholder="Street/Apt No.">			
					</div>
					<div class="form-group">
						<label class="label label-info" class="sr-only" for="ptCityAdd">City (Locator 6):</label>					
						<input type="text" class="form-control input-sm" id="ptCityAdd" name="ptCityAdd" placeholder="City">			
					</div>
					<div class="form-group">
						<label class="label label-info" for="ptStateAdd">(M0050)(Locator 6)Patient State Residence:</label>					
						<input type="text" class="form-control input-sm" id="ptStateAdd" name="ptStateAdd" placeholder="__">			
					</div>
                    <div class="form-group">
						<label class="label label-info" for="ptZipAdd">(M0060)(Locator 6)Patient Zip Code:</label>					
						<input type="text" class="form-control input-sm" id="ptZipAdd" name="ptZipAdd" placeholder="">			
					</div>
					<div class="form-group">
						<label class="label label-info" for="ptMedicare">(M0063)Medicare Number:</label>					
						<input type="text" class="form-control input-sm" id="ptMedicare" name="ptMedicare" placeholder="include suffix">			
					</div>
                    <label class="checkbox">
						<input type="checkbox" name="MedicareNA" class="">NA-No Medicare (M0064)
					</label>
                    <br class="">
					<div class="form-group">
						<label class="label label-info" for="ptSSS">Social Security Number:</label>					
						<input type="text" class="form-control input-sm" id="ptSSS" name="ptSSS" placeholder="___-__-____">			
					</div>
					<label class="checkbox">
						<input type="checkbox" name="SSSNA" class="">UK-Unknown or Not Available (M0065)
					</label>
                    <br class="">
                    <div class="form-group">
						<label class="label label-info" for="ptMedicaid">Medicaid Number:</label>					
						<input type="text" class="form-control input-sm" id="ptMedicaid" name="ptMedicaid" placeholder="">			
					</div>
					<label class="checkbox">
						<input type="checkbox" name="MedicaidNA" class="">NA-No Medicaid (M0066)
					</label>
                    <br class="">
                    <div class="form-group">
						<label class="label label-info" for="ptBD">(Locator 8)Birth Date:</label>					
						<input type="date" class="form-control input-sm" id="ptBD" name="ptBD" >			
					</div>
					
					<label class="label label-info">(Locator 1)Patient HI Claim Number:</label>
					<div class="radio">
						<label class="label label-default">
							<input type="radio" name="ptHIclaim" value="ptMedicare" class="">
							1-Same as M0063 
						</label>
					</div>
					<div class="radio">
						<label class="label label-default">
							<input type="radio" name="ptHIclaim" value="ptMedicaid" class="">
							2-Same as M0065 
						</label>
					</div>
					<div class="radio">
						<label class="label label-default">
							<input type="radio" name="ptHIclaim" value="other" class="">
							Other:
						</label>
					</div>
					<div class="form-group">
						<input type="text" class="form-control input-sm" name="ptHIclaim">
					</div>
					
				</div>
			</div>
				<hr>
			<div class="row">
				<div class="col-md-4">
						<div class="form-group">
							<label class="label label-info">(M0140) Race/Ethnicity: (Mark all that apply)</label>
						</div>
						<label class="checkbox">
						<input type="checkbox" name="ethnicity" value="American"/>1 - American Indian or Alaska Native
						</label>
						<label class="checkbox">
						<input type="checkbox" name="ethnicity" value="Asian"/>2 - Asian
						</label>
						<label class="checkbox">
						<input type="checkbox" name="ethnicity" value="Black"/>3 - Black or African-American
						</label>
						<label class="checkbox">
						<input type="checkbox" name="ethnicity" value="Hispanic"/>4 - Hispanic or Latino
						</label>						
						<label class="checkbox">					
						<input type="checkbox" name="ethnicity" value="Pacific"/>5 - Native Hawaiian or Pacific Islander
						</label>
						<label class="checkbox">
						<input type="checkbox" name="ethnicity" value="White"/>6 - White
						</label>
				</div>
				<div class="col-md-8">
						<div class="form-group">
							<label class="label label-info">(M0150)Current Payment Sources for Home Care:(Check all that apply)</label>
						</div>
						<label class="checkbox">
						<input type="checkbox" name="pay_source" value=""/>0 - None, no charge for current services
						</label>
						<label class="checkbox">
						<input type="checkbox" name="pay_source" value=""/>1 - Medicare (Traditional fee-for-service)
						</label>
						<label class="checkbox">
						<input type="checkbox" name="pay_source" value=""/>2 - Medicare (HMO/managed care/Advantage plan)
						</label>
						<label class="checkbox">
						<input type="checkbox" name="pay_source" value=""/>3 - Medicare ()
						</label>						
						<label class="checkbox">					
						<input type="checkbox" name="pay_source" value=""/>4 - Medicare (HMO/managed care)
						</label>
						<label class="checkbox">
						<input type="checkbox" name="pay_source" value=""/>5 - Workers Compensation
						</label>
						<label class="checkbox">
						<input type="checkbox" name="pay_source" value=""/>6 - Title Program (e.g. Title III, V, or XX)
						</label>
						<label class="checkbox">
						<input type="checkbox" name="pay_source" value=""/>7 - Other Government (e.g. Tricare, VA, etc.)
						</label>
						<label class="checkbox">
						<input type="checkbox" name="pay_source" value=""/>8 - Private Insurance
						</label>
						<label class="checkbox">
						<input type="checkbox" name="pay_source" value=""/>9 - Private HMO/managed care
						</label>
						<label class="checkbox">
						<input type="checkbox" name="pay_source" value=""/>10 - Self-pay
						</label>
						<label class="checkbox">
						<input type="checkbox" name="pay_source" value=""/>11 - Other (specify) <input type="text" class="form-control input-sm" name="other_pay_source"/>
						</label>
						<label class="checkbox">
						<input type="checkbox" name="pay_source" value=""/>12 - UK/unknown
						</label>
				</div>
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
