<!DOCTYPE html>
<html>
<head>
	<?php include 'connection.php' ?>
	<title>acadamic</title>
	<style type="text/css">
		*{
		 font-family: Verdana,Arial,Helvetica;
		}
				.sticky{
            
				top:0px;
				
				position: sticky;
				float: left;
			    width:100%; 
              padding-top: 5px;
              padding-bottom: 5px;
              background-color: #ffffff70;

			}
	</style>
</head>
<body>

<p>
	<div class="sticky"><center><h2><font color="#864ede">General Information on Academic Courses</font></h2></center></div>
	<hr>
Courses- Under Graduate, Post Graduate, others.<br>
<h3>FOR ROOM APPLICATION <a href="PATIENT_FORM.php" style="color: #864ede; text-decoration: none;">CLICK HERE</a></h3>
<h3>FOR APPOINTMENT APPLICATION <a href="record.php" style="color: #864ede; text-decoration: none;">CLICK HERE</a></h3>
<h3>FOR DISCHARGE <a href="dishcarge.php" style="color: #864ede; text-decoration: none;">CLICK HERE</a></h3>
<h2><font color="#864ede">Under Graduate</font></h2>
<p><b>Method of Selection:-</b><br>

National Eligibility cum Entrance Test-Under graduate, NEET-UG.<br>

<b>Degree Awarded:</b> M.B.B.S.<br>

<b>Duration of the Course:</b> Five and a half years, which include one year internship.<br>

<b>Major subjects:</b>
<ol>
<li>Anatomy</li>
<li>Physiology</li>
<li>Biochemistry</li>
<li>Pharmacology</li>
<li>Pathology</li>
<li>Microbiology</li>
<li>Forensic & State Medicine</li>
<li>Community Medicine</li>
<li> Medicine</li>
<li>Surgery (which includes Orthopedics)</li>
<li>Pediatrics</li>
<li>Obstetrics & Gynaecology</li>
<li>Ophthalmology</li>
<li>Otorhinolaryngology</li>
</ol>
</p>
<h2><font color="#864ede">Post Graduate</font></h2>
<p>
<b>Method of Selection:</b><br>

National Eligibility cum Entrance Test-Post Graduate, NEET-PG.<br>

<b>Duration of Post Graduate course:</b> Degree 3 years; Diploma 2 years.<br>

<b>For Postgraduate (Degree) studies:</b> Thesis is compulsory.<br>

Details of PG Course And Their Sanctioned Intake By MCI<br>
<b>Post graduate degree courses:</b>
<ol>
	<li>MD Anatomy</li>
	<li>MD Physiology</li>
	<li>MD Biochemistry</li>
	<li>MD Microbiology</li>
	<li>MD Pharmacology</li>
	<li>MS Ophthalmology</li>
	<li>MS ENT</li>
	<li>MD Medicine</li>
	<li>MS Surgery</li>
	<li>MS O & G</li>
</ol>
</p>
<p>
	<h2><font color="#864ede">Other Courses:</font></h2>
	<ul>
<li>Bsc. Nursing.</li>
<li>Paramedical courses.</li>
<li>Pharmacy course.</li>
</ul>
</p>
</p>
</body>
</html>

<?php


	if (isset($_POST['submit'])) {
		$name = $_POST['name'];
		$address = $_POST['address'];
		$dob = $_POST['dob'];
		$mobile = $_POST['mobile'];
		$gender = $_POST['gender'];
		$doc_id = $_POST['doc_id'];
		$treatment = $_POST['treatment'];
		$room_no = $_POST['room_no'];

		$query = "insert into patient(p_name,p_address,dob,contact_no,p_gender,d_id,t_name,room_no) values('$name','$address','$dob','$mobile','$gender','$doc_id','$treatment','$room_no')";
		mysqli_query($cone,$query);

		$query2="update rooms set pa_id=(select p_id from patient where room_no='$room_no') where room_no=".$room_no;

		$res = mysqli_query($cone,$query2);

		if($res){
			?>
			<script type="text/javascript">
				
				alert("DATA INSERTED SUCCESSFULLY!!");
			</script>
			<?php
		}
		else{
			?>
			<script type="text/javascript">
				
				alert("DATA NOT INSERTED SUCCESSFULLY!!");
			</script>
			<?php
		}

	}
?>