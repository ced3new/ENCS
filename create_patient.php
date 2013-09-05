

<html>
<head>
<link href="patient.css" rel="stylesheet" type="text/css">
</head>

<body>
   <form action="#" method="POST">
   <div id="newPatient">
      Follow M0 numbers in sequence unless otherwise directed.
      <hr>
      <input type="radio" name="reasonForCare" value="start">Start of Care
      <input type="radio" name="reasonForCare" value="resume">Resumption of Care
      Date: <input type="date" name="date" />
      Time In: <input type="time" name="timeIn" />
      Time Out: <input type="time" name="timeOut" />


      <hr>
      
      

      (M0D10)CMS Certification Number: (Locator 5) <input type="text" name="CMScertNum"/>

      <div id="box">
         Branch ID (M0014) Branch State: <input type="text" name="branchState"/>
         (M0016)Branch ID Number: <input type="text" name="branchIDnum"/>
      </div>

      <div id="box">
         (M0018)National Provider Identifier(NPI) for the attending physician who has signed the plan of care <input type="text" name="NPI" id="NPI"/><input type="checkbox" name="NPI" value="unknown" id="chkNPI"/> UK - Unknown or Not Available
         Phone: (Locator 24) <input type="text" name="drTN" placeholder="___-___-____"/>
         Name: (Locator 24) <input type="text" name="drFName" placeholder="First Name"/> <input type="text" name="drMI" placeholder="M.I."/> <input type="text" name="drLName" placeholder="Last Name"/>
         Address:(Locator 24) <input type="text" name="streetAdd" placeholder="Street/Apt. No."/> <input type="text" name="cityAdd" placeholder="City"/> <input type="text" name="stateAdd" placeholder="State"/> <input type="text" name="zipAdd" placeholder="Zip Code"/>


       <hr>


         Secondary Referring Physician ID: <input type="text" name="2ndNPI"/>
         Phone: <input type="text" name="2nddrTN"/>
         Name: (Locator 24) <input type="text" name="2nddrFName" placeholder="First Name"/> <input type="text" name="2nddrMI" placeholder="M.I."/> <input type="text" name="2nddrLName" placeholder="Last Name"/>

       <hr>


         (M0020)(Locator 4) Patient ID Number: <input type="text" name="ptID"/>
         Medical Record Number if different then M0020: <input type="text" name="MRN"/>
       </div>

       <div id="box">
         (M0030)Start of Care Date: <input type="date" name="SoCDate"/>
         (M0032)Resumption of Care Date: <input type="date" name="RoCDate"/>
            <input type="checkbox" name="checkRoCDate"/>NA-Not Applicable

         (M0040)Patient Name:<input type="text" name="ptFName" placeholder="First Name"/><input type="text" name="ptMI" placeholder="M.I."/><input type="text" name="ptLName" placeholder="Last Name"/>


         Patient Phone:<input type="text" name="ptTN" placeholder="___-___-____"/>
         Patient Address(Locator 6):
                    <input type="text" name="ptStreetAdd" placeholder="Street/Apt No."/>
                    <input type="text" name="ptCityAdd" placeholder="City"/>

         (M0050)(Locator 6)Patient State Residence:<input type="text" name="ptStateAdd" placeholder="__"/>
         (M0060)(Locator 6)Patient Zip Code: <input type="text" name="ptZipAdd" placeholder=""/>

         (M0063)Medicare Number: <input type="text" name="ptMedicare" placeholder="include suffix"/><input type="checkbox" name="MedicareNA"/>NA-No Medicare
         (M0064)Social Security Number: <input type="text" name="ptSSS" placeholder="___-__-____"/><input type="checkbox" name="SSSNA"/>UK-Unknown or Not Available
         (M0065)Medicaid Number: <input type="text" name="ptMedicaid"/><input type="checkbox" name="MedicaidNA"/>NA-No Medicaid
         (M0066)(Locator 8)Birth Date:<input type="date"/>
         (Locator 1)Patient HI Claim Number:
         <input type="radio" name="ptHIclaim" value="ptMedicare"/> 1-Same as M0063
         <input type="radio" name="ptHIclaim" value="ptMedicaid"/> 2-Same as M0065
         <input type="radio" name="ptHIclaim" value="other"/> Other: <input type="text" name="ptHIclaim"/>
       </div>
   </div>
   </form>

</body>
</html>