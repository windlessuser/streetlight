<style type="text/css">

.tbl {
	width:450px;
	float:left;
}

.tr {
	width:100%;
}

.td {
	float:left;
	width:49%;
	padding: 2px;
}

.fieldtitle {
	font-weight:bold;
	text-align:right;
}
</style>


<form name="public_requestForm" method="POST" action="">

<div class="tbl">
    <!--<div class="tr">
        <div class="td"> <div class="fieldtitle"> Public Request Id : </div> </div>
        <div class="td"> <input type="text" name="thisPublic_requestidField" size="20" value="">  </div> 
    </div>-->
    <div class="tr">
        <div class="td"> <div class="fieldtitle"> Reference no : </div> </div>
        <div class="td"> <input type="text" name="thisReference_noField" size="20" value="">  </div> 
    </div>
    <div class="tr">
        <div class="td"> <div class="fieldtitle"> Request date : </div> </div>
        <div class="td"> <input type="text" name="thisRequest_dateField" size="20" value="">  </div> 
    </div>
    <div class="tr">
        <div class="td"> <div class="fieldtitle"> First name : </div> </div>
        <div class="td"> <input type="text" name="thisFirstnameField" size="20" value="">  </div> 
    </div>
    <div class="tr">
        <div class="td"> <div class="fieldtitle"> Last name : </div> </div>
        <div class="td"> <input type="text" name="thisLastnameField" size="20" value="">  </div> 
    </div>
    <div class="tr">
        <div class="td"> <div class="fieldtitle"> Address : </div> </div>
        <div class="td"> <input type="text" name="thisAddressField" size="20" value="">
        </div> 
    </div>
    <div class="tr">
        <div class="td"> <div class="fieldtitle"> Organization : </div> </div>
        <div class="td"> <input type="text" name="thisOrganizationField" size="20" value="">  </div> 
    </div>
    <div class="tr">
        <div class="td"> <div class="fieldtitle"> Organization type Id : </div> </div>
        <div class="td"> <input type="text" name="thisOrganization_typeidField" size="20" value="">  </div> 
    </div>
    <div class="tr">
        <div class="td"> <div class="fieldtitle"> Phone : </div> </div>
        <div class="td"> <input type="text" name="thisPhoneField" size="20" value="">  </div> 
    </div>
    <div class="tr">
        <div class="td"> <div class="fieldtitle"> Cell : </div> </div>
        <div class="td"> <input type="text" name="thisCellField" size="20" value="">  </div> 
    </div>
    <div class="tr">
        <div class="td"> <div class="fieldtitle"> Fax : </div> </div>
        <div class="td"> <input type="text" name="thisFaxField" size="20" value="">  </div> 
    </div>
    <div class="tr">
        <div class="td"> <div class="fieldtitle"> Email : </div> </div>
        <div class="td"> <input type="text" name="thisEmailField" size="20" value="">  </div> 
    </div>
    <div class="tr">
        <div class="td"> <div class="fieldtitle"> Website : </div> </div>
        <div class="td"> <input type="text" name="thisWebsiteField" size="20" value="">  </div> 
    </div>
    <div class="tr">
        <div class="td"> <div class="fieldtitle"> Remarks : </div> </div>
        <div class="td"> 
        	<textarea name="thisRemarksField" wrap="VIRTUAL" cols="25" rows="4">
            </textarea>  
        </div> 
    </div>
</div>
<div class="tbl">

    <div class="tr">
        <div class="td"> <div class="fieldtitle"> Council Id : </div> </div>
        <div class="td"> <input type="text" name="thisCouncilidField" size="20" value="">  </div> 
    </div>
    <div class="tr">
        <div class="td"> <div class="fieldtitle"> Division Id : </div> </div>
        <div class="td"> <input type="text" name="thisDivisionidField" size="20" value="">  </div> 
    </div>
    <div class="tr">
        <div class="td"> <div class="fieldtitle"> District Id : </div> </div>
        <div class="td"> <input type="text" name="thisDistrictidField" size="20" value="">  </div> 
    </div>
    <div class="tr">
        <div class="td"> <div class="fieldtitle"> Street : </div> </div>
        <div class="td"> <input type="text" name="thisStreetField" size="20" value="">  </div> 
    </div>
    <div class="tr">
        <div class="td"> <div class="fieldtitle"> Streetlight location : </div> </div>
        <div class="td"> <input type="text" name="thisStreetlight_locationField" size="20" value="">  </div> 
    </div>
    <div class="tr">
        <div class="td"> <div class="fieldtitle"> Streetlight name : </div> </div>
        <div class="td"> <input type="text" name="thisStreetlight_nameField" size="20" value="">  </div> 
    </div>
    <div class="tr">
        <div class="td"> <div class="fieldtitle"> Scheme : </div> </div>
        <div class="td"> <input type="text" name="thisSchemeField" size="20" value="">  </div> 
    </div>
    <div class="tr">
        <div class="td"> <div class="fieldtitle"> Streetlight no : </div> </div>
        <div class="td"> <input type="text" name="thisStreetlight_noField" size="20" value="">  </div> 
    </div>
    <div class="tr">
        <div class="td"> <div class="fieldtitle"> Streetlight operational (y/n) : </div> </div>
        <div class="td"> 
            <label>
              <input type="radio" name="thisStreetlight_operational_ynField" value="y" id="RadioGroup1_2" />
              Yes</label>
            <label>
              <input type="radio" name="thisStreetlight_operational_ynField" value="n" id="RadioGroup1_3" />
              No</label>
        </div> 
    </div>
    <div class="tr">
        <div class="td"> <div class="fieldtitle"> Streetlight defect typeid : </div> </div>
        <div class="td"> 
        	<input type="text" name="thisStreetlight_defect_typeidField" size="20" value="">  
        </div> 
    </div>
    <div class="tr">
        <div class="td"> <div class="fieldtitle"> Streetlight defect type remarks : </div> </div>
        <div class="td"> <textarea name="thisStreetlight_defect_type_remarksField" wrap="VIRTUAL" cols="25" rows="4"></textarea>  </div> 
    </div>
    <div class="tr">
        <div class="td"> <div class="fieldtitle"> Public request statusid : </div> </div>
        <div class="td"> <input type="text" name="thisPublic_request_statusidField" size="20" value="">  </div> 
    </div>
    <div class="tr">
        <div class="td"> <div class="fieldtitle"> Public request open (y/n) : </div> </div>
        <div class="td"> 
        <label>
        <input type="radio" name="thisPublic_request_open_ynField" value="y" id="RadioGroup1_0" />
        Yes</label>
      	<label>
        <input type="radio" name="thisPublic_request_open_ynField" value="n" id="RadioGroup1_1" />
        No</label>
      </div> 
    </div>
    <div class="tr">
        <div class="td"> <div class="fieldtitle"> User Id : </div> </div>
        <div class="td"> <input type="text" name="thisUseridField" size="20" value="">  </div> 
    </div>
    <div class="tr">
        <div class="td"> <div class="fieldtitle"> Longitude : </div> </div>
        <div class="td"> <input type="text" name="thisLongitudeField" size="20" value="">  </div> 
    </div>
    <div class="tr">
        <div class="td"> <div class="fieldtitle"> Latitude : </div> </div>
        <div class="td"> <input type="text" name="thisLatitudeField" size="20" value="">  </div> 
    </div>
    <div class="tr">
        <div class="td"> <div class="fieldtitle"> Official comments : </div> </div>
        <div class="td"> <textarea name="thisOfficial_commentsField" wrap="VIRTUAL" cols="20" rows="4"></textarea>  </div> 
    </div>
<!--    <div class="tr">
        <div class="td"> <div class="fieldtitle"> Create date : </div> </div>
        <div class="td"> <input type="text" name="thisCreate_dateField" size="20" value="">  </div> 
    </div>
    <div class="tr">
        <div class="td"> <div class="fieldtitle"> Update date : </div> </div>
        <div class="td"> <input type="text" name="thisUpdate_dateField" size="20" value="">  </div> 
    </div>
-->
</div>

<input type="submit" name="submitEnterPublic_requestForm" value="Enter Public_request">
<input type="reset" name="resetForm" value="Clear Form">

</form>
