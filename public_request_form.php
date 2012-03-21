<?php
include('models/streetlight.php');

session_start(); 
//this is just for testing purposes
$_SESSION['SESSION_STATUS']=1;
$_SESSION['SESSION_USER_NAME']='mgordon';
$_SESSION['SESSION_USER_ID']=1;

$requestDate='';
$firstName='';
$lastName = '';
$address = '';
$organisation ='';
$organizationType = ''; 
$phone = '';
$cell='';
$fax='';
$email='';
$website='';
$remarks='';
$reference = '';
$street='';
$strtLightLocation = '';
$strtLightName = '';
$scheme = '';
$streetlightNo = '';
$council='';
$division = '';
$district = '';
$isStrtLightOperational='';
$streetLightDefect='';
$defectRemarks='';
$publicRequestStatus='';
$requestOpen='';
$longtitude = '';
$latitude = '';
$OfficialComments='';

if (isset($_POST['Streetlight_Submit']))
{
	$streetlightNo = $_POST['thisStreetlight_noField'];
	$userId = $_SESSION['SESSION_USER_ID'];
	
	$streetlightInfo = Streetlight::retrieve_StreetlightInfo($streetlightNo);
	$userInfo = User::retrieve_UserInfo($userId);
	$referenceNo = Public_Request::generate_Reference();
	
	//echo $userInfo->organizationType;

	$currentDateTime = getdate();
	//$year = substr($currentDateTime['year'],-2);
	$year = $currentDateTime['year'];
	$month = $currentDateTime['month'];
	$day = $currentDateTime['mday'];
	
	$currentDate = $month." ".$day.", ".$year;
	
	GLOBAL $requestDate;
	GLOBAL $firstName;
	GLOBAL $lastName;
	GLOBAL $address;
	GLOBAL $organisation;
	GLOBAL $organizationType; 
	GLOBAL $phone;
	GLOBAL $cell;
	GLOBAL $fax;
	GLOBAL $email;
	GLOBAL $website;
	GLOBAL $remarks;
	GLOBAL $reference;
	GLOBAL $street;
	GLOBAL $strtLightLocation;
	GLOBAL $strtLightName;
	GLOBAL $scheme;
	GLOBAL $streetlightNo;
	GLOBAL $council;
	GLOBAL $division;
	GLOBAL $district;
	GLOBAL $isStrtLightOperational;
	GLOBAL $streetLightDefect;
	GLOBAL $defectRemarks;
	GLOBAL $publicRequestStatus;
	GLOBAL $requestOpen;
	GLOBAL $longtitude;
	GLOBAL $latitude;
	GLOBAL $OfficialComments;
	
	$requestDate=$currentDate;
	$firstName= $userInfo->firstname;
	$lastName = $userInfo->surname;
	$address = '';
	$organisation = $userInfo->organization_name;
	$organizationType = '';
	$phone = '';
	$cell='';
	$fax='';
	$email='';
	$website='';
	$remarks='';
	$reference = $referenceNo;
	$street= $streetlightInfo->street;
	$strtLightLocation = '';
	$strtLightName = '';
	$scheme = '';
	$streetlightNo = '';
	$council='';
	$division = '';
	$district = '';
	$isStrtLightOperational='';
	$streetLightDefect='';
	$defectRemarks='';
	$publicRequestStatus='';
	$requestOpen='';
	$longtitude = '';
	$latitude = '';
	$OfficialComments='';

}

?>




<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<head>

<title>interior_template_blue</title>

	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	
	<meta name="title" content="" />
	
	<meta name="description" content="" />
	
	<meta name="keywords" content="" />
	
	<link type="text/css" rel="stylesheet" href="styles/reset/reset.css" />
	<link type="text/css" rel="stylesheet" href="styles/fonts/fonts.css" />
	<link type="text/css" rel="stylesheet" href="styles/grids/grids.css" />
	<link type="text/css" rel="stylesheet" href="styles/interior_default.css" />
	
    <link type="text/css" rel="stylesheet" href="../styles/interior_blue.css" />
</head>

<body id="yahoo-com">

<div id="doc" class="yui-t1">


	<div id="hd">

		<!-- begin GOJ banner -->
		<div id="banner">
			<div id="branchCrest"><a href="#" title="Ministry of X"><img src="images/banner-crest.jpg" alt="Ministry of X" width="380" height="50" /></a></div>
			<div id="goJamaicaLogo">Government of Jamaica</div>
		</div>

		<div id="gojHeader">
			<ul class="listNav floatLeft">
				<li><a href="/" title="Home">Home</a>&nbsp;&nbsp;|</li>
				<li><a href="#" title="About Us">About Us</a>&nbsp;&nbsp;|</li>
				<li class="last"><a href="#" title="Contact Us">Contact Us</a></li>
			</ul>
			<ul class="listNav floatRight" style="margin-bottom: 0;">
				<li><a href="#" title="Search the Government of Jamaica Main Site">Search</a>&nbsp;&nbsp;|</li>
				<li class="last"><a href="http://jamaica.gov.jm/" title="Government of Jamaica Main Site">jamaica.gov.jm</a></li>
			</ul>
		</div>
		<!-- end GOJ banner -->
	</div>


	<div id="bd">
		<div id="yui-main">
			<div class="yui-b">
				<div class="yui-gc"><img src="images/interior_top_blue.jpg" width="580" height="32" alt="" />
				    <div class="main_text">
				        <h1>Street Light Malfunction Reporter</h1>
<style type="text/css">

.tbl {
	width:95%;
	float:left;
	margin: 4px;
	padding: 3px;
	/*border:#CCC 1px solid;*/
}

.tr {
	width:100%;
}

.td {
	float:left;
	width:48%;
	padding: 2px;
}

.fieldtitle {
	font-weight:bold;
	text-align:right;
	width:45%;
	float:left;
	padding: 2px;
}

.ctr {
	width:auto;
	margin: 4px auto;
	text-align: center;
}

.clear {
	clear:both;
	/*border-bottom:thin #999 solid;*/
}

#userdata {
	min-width:300px;
	float:left;
	border:none;
	margin-right:14px;
}

input {
	width:200px;
}
textarea {
	width:200px;
}

.normwidth {
	width:auto;
}

form {
	border:#CCC 1px solid;
}

</style>

<form method="post" action="<?php $_SERVER['PHP_SELF']?>">
<div class="ctr">
  	<strong>Enter Streetlight # to be reported  : <input type="text" name="thisStreetlight_noField" size="14" value="" class="normwidth"> 
    <input type="submit" value="Submit" name="Streetlight_Submit" class="normwidth" /> </strong>
    
</div>
</form>

<div class="clear"></div>
<form name="public_requestForm" method="POST" action="">

<div class="tbl" id="userdata">
    <!--<div class="tr">
        <div class="td"> <div class="fieldtitle"> Public Request Id : </div> 
        <div class="td"> <input type="text" name="thisPublic_requestidField" size="20" value="">  </div> 
    </div>-->
    <div class="tr">
        <div class="fieldtitle"> Request date : </div> 
        <div class="td"> <input type="text" name="thisRequest_dateField" size="23" value="<?php echo $requestDate; ?>"  </div> 
    </div>
    <div class="tr">
        <div class="fieldtitle"> First name : </div> 
        <div class="td"> <input type="text" name="thisFirstnameField" size="23" value="<?php echo $firstName?>">  </div> 
    </div>
    <div class="tr">
        <div class="fieldtitle"> Last name : </div> 
        <div class="td"> <input type="text" name="thisLastnameField" size="23" value="<?php echo $lastName?>">  </div> 
    </div>
    <div class="tr">
        <div class="fieldtitle"> Address : </div> 
        <div class="td">
          <textarea name="thisAddressField" cols="19" rows="4"></textarea>
        </div> 
    </div>
    <div class="tr">
        <div class="fieldtitle"> Organization : </div> 
        <div class="td"> <input type="text" name="thisOrganizationField" size="23" value="<?php echo $organisation; ?>">  </div> 
    </div>
    <div class="tr">
        <div class="fieldtitle"> Organization type  : </div> 
        <div class="td"> <input type="text" name="thisOrganization_typeidField" size="23" value="<?php echo $organizationType; ?>">
        </div> 
    </div>
    <div class="tr">
        <div class="fieldtitle"> Phone : </div> 
        <div class="td"> <input type="text" name="thisPhoneField" size="23" value="">  </div> 
    </div>
    <div class="tr">
        <div class="fieldtitle"> Cell : </div> 
        <div class="td"> <input type="text" name="thisCellField" size="23" value="">  </div> 
    </div>
    <div class="tr">
        <div class="fieldtitle"> Fax : </div> 
        <div class="td"> <input type="text" name="thisFaxField" size="23" value="">  </div> 
    </div>
    <div class="tr">
        <div class="fieldtitle"> Email : </div> 
        <div class="td"> <input type="text" name="thisEmailField" size="23" value="">  </div> 
    </div>
    <div class="tr">
        <div class="fieldtitle"> Website : </div> 
        <div class="td"> <input type="text" name="thisWebsiteField" size="23" value="">  </div> 
    </div>
    <div class="tr">
        <div class="fieldtitle"> Remarks : </div> 
        <div class="td"> <textarea name="thisRemarksField" wrap="VIRTUAL" cols="19" rows="4" >  </textarea></div> 
    </div>
    <div class="tr">
        <div class="fieldtitle"> </div> 
        <div class="td"></div> 
    </div>
</div>
<div class="tbl">
    <div class="tr">
        <div class="fieldtitle"> Reference no : </div> 
        <div class="td"> <input name="thisReference_noField" type="text" value="<?php echo $reference; ?>" size="23" readonly="readonly">  </div> 
    </div>

    <div class="tr">
        <div class="fieldtitle"> Street : </div> 
        <div class="td"> <input type="text" name="thisStreetField" size="20" value="">  </div> 
    </div>
    <div class="tr">
        <div class="fieldtitle"> Streetlight location : </div> 
        <div class="td"> <input type="text" name="thisStreetlight_locationField" size="20" value="">  </div> 
    </div>
    <div class="tr">
        <div class="fieldtitle"> Streetlight name : </div> 
        <div class="td"> <input type="text" name="thisStreetlight_nameField" size="20" value="">  </div> 
    </div>
    <div class="tr">
        <div class="fieldtitle"> Scheme : </div> 
        <div class="td"> <input type="text" name="thisSchemeField" size="20" value="">  </div> 
    </div>
    <div class="tr">
        <div class="fieldtitle"> Streetlight no : </div> 
        <div class="td"> <input type="text" name="thisStreetlight_noField" size="20" value="">  </div> 
    </div>
    <div class="tr">
        <div class="fieldtitle"> Council  : </div> 
        <div class="td"> 
          <select name="thisCouncilidField" id="thisCouncilidField" style="min-width:100px;">
            <!-- pull from council tbl in db  -->
            <option value="id">name</option>
          </select>
        </div> 
    </div>
    <div class="tr">
        <div class="fieldtitle"> Division  : </div> 
        <div class="td">
          <select name="thisDivisionidField" id="thisDivisionidField" style="min-width:100px;">
            <!-- pull from division tbl in db  -->
            <option value="id">name</option>
          </select>
        </div> 
    </div>
    <div class="tr">
        <div class="fieldtitle"> District  : </div> 
        <div class="td"> <!--<input type="text" name="thisDistrictidField" size="20" value="">-->
          <select name="thisDistrictidField" id="thisDistrictidField" style="min-width:100px;">
            <!-- pull from discrict tbl in db  -->
            <option value="id">name</option>
          </select>
        </div> 
    </div>
    <div class="tr">
        <div class="fieldtitle"> Streetlight operational (y/n) : </div> 
        <div class="td"> 
            <label>
              <input type="radio" name="thisStreetlight_operational_ynField" value="y" id="RadioGroup1_2"  class="normwidth" />
              Yes</label>
            <label>
              <input type="radio" name="thisStreetlight_operational_ynField" value="n" id="RadioGroup1_3"  class="normwidth" />
              No</label>
        </div> 
    </div>
    <div class="tr">
        <div class="fieldtitle"> Streetlight defect typeid : </div> 
        <div class="td"> 
        	<input type="text" name="thisStreetlight_defect_typeidField" size="20" value="">  
        </div> 
    </div>
    <div class="tr">
        <div class="fieldtitle"> Streetlight defect type remarks : </div> 
        <div class="td"> <textarea name="thisStreetlight_defect_type_remarksField" wrap="VIRTUAL" cols="25" rows="4"></textarea>  </div> 
    </div>
    <div class="tr">
        <div class="fieldtitle"> Public request statusid : </div> 
        <div class="td"> <!--<input type="text" name="thisPublic_request_statusidField" size="20" value="">-->
          <select name="thisPublic_request_statusidField" id="thisPublic_request_statusidField" style="min-width:100px;">
            <!-- pull from discrict tbl in db  -->
            <option value="id">name</option>
          </select>
        </div> 
    </div>
    <div class="tr">
        <div class="fieldtitle"> Public request open (y/n) : </div> 
        <div class="td"> 
        <label>
        <input type="radio" name="thisPublic_request_open_ynField" value="y" id="RadioGroup1_0" class="normwidth" />
        Yes</label>
      	<label>
        <input type="radio" name="thisPublic_request_open_ynField" value="n" id="RadioGroup1_1" class="normwidth"  />
        No</label>
      </div> 
    </div>
    <!--<div class="tr">
        <div class="fieldtitle"> User Id : </div> 
        <div class="td"> <input type="text" name="thisUseridField" size="20" value="">  </div> 
    </div>-->
    <div class="tr">
        <div class="fieldtitle"> Longitude : </div> 
        <div class="td"> <input type="text" name="thisLongitudeField" size="20" value="">  </div> 
    </div>
    <div class="tr">
        <div class="fieldtitle"> Latitude : </div> 
        <div class="td"> <input type="text" name="thisLatitudeField" size="20" value="">  </div> 
    </div>
    <div class="tr">
        <div class="fieldtitle"> Official comments : </div> 
        <div class="td"> <textarea name="thisOfficial_commentsField" wrap="VIRTUAL" cols="20" rows="4"></textarea>  </div> 
    </div>
<!--    <div class="tr">
        <div class="td"> <div class="fieldtitle"> Create date : </div> 
        <div class="td"> <input type="text" name="thisCreate_dateField" size="20" value="">  </div> 
    </div>
    <div class="tr">
        <div class="td"> <div class="fieldtitle"> Update date : </div> 
        <div class="td"> <input type="text" name="thisUpdate_dateField" size="20" value="">  </div> 
    </div>
-->
</div>
<div class="clear"></div>
<div class="ctr">
    <input type="submit" name="submitEnterPublic_requestForm" value="Submit your report">
    <input type="reset" name="resetForm" value="Clear Form">
</div>
</form>
				      <!-- Begin Left Column -->
		</div>
				</div></div>
		</div>
        
        <div class="yui-b">
          <div class="left_column">
                <div class="section_title">Pellentesque
                      Portor</div>
                <ul>
                  
                <li><a href="#">Luctus
                            metus</a></li>
                      </ul>
                <br />
          </div>
		</div>
        <!-- End Left Column -->
	</div>


	<div id="ft">

		<div id="gojFooter">
			<ul class="listNav floatLeft">
				<li><a href="#" title="Important Notices">Important Notices</a>&nbsp;&nbsp;|</li>
				<li><a href="#" title="Help">Help</a>&nbsp;&nbsp;|</li>
				<li>&copy; 2007, Government of Jamaica. All Rights Reserved</li>
			</ul>
			<ul class="listNav floatRight" style="margin-bottom: 0;">
				<li>Last modified: June 7,
		        2007</li>
			</ul>
		</div>
	</div>
</div>
</body>
</html>
