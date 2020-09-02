<!DOCTYPE html>
<html>
<style>
.name{
  font-family: "Georgia";
  font-variant: small-caps;
  margin-bottom: 0px;
  margin-top: 5px;
  text-align: center;
  font-size: 50px;
  font-weight: bold;
}
.otherInfo{
  margin: 0px;
  text-align: center;
  font-size: 14px;
  font-family: "Cambria";
  color: gray;
  padding: 0px;
}
.subHeading{
  font-family: "Georgia";
  border: solid 3px black;
  padding: 5px;
  font-size: 22px;
  font-weight: bold;
  margin: 0px;
}
.objective{
  text-align: justify;
  margin-left: 20px;
  margin-right: 20px;
  font-family: "Cambria";
  font-size: 16px;
}
.education, .experience{
  width: 95%;
  text-align: left;
  margin-left: 20px;
  margin-right: 20px;
  font-family: "Cambria";
  font-size: 16px;
}
.grad, .experienceDate{
  text-align: right;
}
.projectDes{
  margin-left: 40px;
  margin-right: 20px;
  padding: 0px;
  text-align: justify;
}
.projectName{
  margin-left: 20px;
  margin-right: 20px;
  font-weight: bold;
  padding: 0px;
}
.moreInfo{
  text-align: justify;
}
.skill, .involvement{
  margin-right: 20px;
  font-family: "Cambria";
  font-size: 16px;
  text-align: justify;
}
.experienceDes{
  text-align: justify;
  margin-top: 0px;
}
</style>

<body>
<?php
  error_reporting(0);

  //Basic Info
  $firstName = $_POST["firstName"];
  $lastName = $_POST["lastName"];
  $pNum = $_POST["pNum"];
  $email = $_POST["email"];
  $streetAddress = $_POST["streetAddress"];
  $city = $_POST["city"];
  $state = $_POST["state"];
  $zipcode = $_POST["zipcode"];
  $linkedIn = $_POST["linkedIn"];
  $GitHub = $_POST["GitHub"];

  echo "<p class='name'>".$firstName."&nbsp".$lastName."</p>";
  echo "<p class='otherInfo'>".$pNum." • ".$email." • ";
  if($streetAddress == ""){
    echo $city . ", " . $state . " " . $zipcode;
  }
  else{
    echo $streetAddress . ", " . $city . ", " . $state . " " . $zipcode;
  } if($linkedIn != "" && $GitHub != ""){
    echo "<br>".$linkedIn." • ".$GitHub."</p>";
  } else if($linkedIn != "" && $GitHub == ""){
    echo "<br>".$linkedIn."</p>";
  } else if($linkedIn == "" && $GitHub != ""){
    echo "<br>".$GitHub."</p>";
  } else {
    echo "</p>";
  }


  //Objective
  $obj = $_POST["obj"];
  echo "<p class='subHeading'> Objective </p>";
  echo "<p class='objective'>" . $obj . "</p>";


  //Education
  $collegeName = $_POST["collegeName"];
  $collegeCity = $_POST["collegeCity"];
  $collegeState = $_POST["collegeState"];
  $graduation = $_POST["graduation"];
  $graduationDate = $_POST["graduationDate"];
  $graduationDate = date_create($_POST["graduationDate"]);
  $degreeMajor = $_POST["degreeMajor"];
  $gpa = $_POST["gpa"];
  $moreInfo = $_POST["moreInfo"];
  echo "<p class='subHeading'> Education </p><br>";
  echo "<table class='education'><tr><th> $collegeName - $collegeCity, $collegeState";
  if($graduation == "graduated"){
    $temp = "Graduated: ".date_format($graduationDate,"M Y");
  }else{
    $temp="Expected Graduation: ".date_format($graduationDate,"M-Y");
  }
  echo "<td class='grad'>$temp</td></tr>";
  echo "<tr><td colspan=2>&nbsp&nbsp&nbsp&nbsp&nbsp<i> $degreeMajor (GPA: $gpa) </i></td></tr>";
  echo "<tr><td colspan=2 class='moreInfo'>$moreInfo</td></tr>";
  echo "</table><br>";


  //Skills
  echo "<p class='subHeading'> Skills & Expertise </p>";
  $skill1 = $_POST["skill1"];$skill2 = $_POST["skill2"];$skill3 = $_POST["skill3"];
  $skill4 = $_POST["skill4"];$skill5 = $_POST["skill5"];$skill6 = $_POST["skill6"];
  $skill7 = $_POST["skill7"];$skill8 = $_POST["skill8"];$skill9 = $_POST["skill9"];
  $skill10 = $_POST["skill10"];
  echo "<ul class='skill'><li>$skill1</li><li>$skill2</li>";
  if($skill3 != ""){ echo "<li>$skill3</li>";}  else { echo ""; }
  if($skill4 != ""){ echo "<li>$skill4</li>";}  else { echo ""; }
  if($skill5 != ""){ echo "<li>$skill5</li>";}  else { echo ""; }
  if($skill6 != ""){ echo "<li>$skill6</li>";}  else { echo ""; }
  if($skill7 != ""){ echo "<li>$skill7</li>";}  else { echo ""; }
  if($skill8 != ""){ echo "<li>$skill8</li>";}  else { echo ""; }
  if($skill9 != ""){ echo "<li>$skill9</li>";}  else { echo ""; }
  if($skill10 != ""){ echo "<li>$skill10</li>";}  else { echo ""; }
  echo "</ul>";

  //Project
  echo "<p class='subHeading'> Project </p>";
  $projectName1 = $_POST["projectName1"]; $projectDes1 = $_POST["projectDes1"];
  $projectName2 = $_POST["projectName2"]; $projectDes2 = $_POST["projectDes2"];
  $projectName3 = $_POST["projectName3"]; $projectDes3 = $_POST["projectDes3"];
  $projectName4 = $_POST["projectName4"]; $projectDes4 = $_POST["projectDes4"];
  $projectName5 = $_POST["projectName5"]; $projectDes5 = $_POST["projectDes5"];
  if($projectName1 != "" && $projectDes1 != ""){
    echo "<br><div class='projectName'> Project Name: $projectName1 </div><div class='projectDes'>$projectDes1 </div><br>";
  }
  if($projectName2 != "" && $projectDes2 != ""){
    echo "<div class='projectName'> Project Name: $projectName2 </div><div class='projectDes'>$projectDes2 </div><br>";
  }
  if($projectName3 != "" && $projectDes3 != ""){
    echo "<div class='projectName'> Project Name: $projectName3 </div><div class='projectDes'>$projectDes3 </div><br>";
  }
  if($projectName4 != "" && $projectDes4 != ""){
    echo "<div class='projectName'> Project Name: $projectName4 </div><div class='projectDes'>$projectDes4 </div><br>";
  }
  if($projectName5 != "" && $projectDes5 != ""){
    echo "<div class='projectName'> Project Name: $projectName5 </div><div class='projectDes'>$projectDes5 </div><br>";
  }

  //Experience
  echo "<p class='subHeading'> Experience </p>";
  $employerName1 = $_POST["employerName1"]; $position1 = $_POST["position1"]; $startDate1 = date_create($_POST["startDate1"]); $employed1 = $_POST["employed1"]; $endDate1 = date_create($_POST["endDate1"]);
  $des1_1 = $_POST["des1_1"]; $des1_2 = $_POST["des1_2"]; $des1_3 = $_POST["des1_3"]; $des1_4 = $_POST["des1_4"];
  if($employerName1 != ""){
    echo "<br><table class='experience'><tr><th>$employerName1, $position1</th>";
    if($employed1 == "yes1"){
      echo "<td class='experienceDate'>".date_format($startDate1,"M Y")." - Present</td></tr>";
    } else {
      echo "<td class='experienceDate'>".date_format($startDate1,"M Y")." - ".date_format($endDate1,"M Y")." </td> </tr>";
    }
    echo "<tr><td colspan=2><ul class='experienceDes'> <li>$des1_1</li><li>$des1_2</li><li>$des1_3</li><li>$des1_4</li> </ul></td></tr></table>";
  }

  $employerName2 = $_POST["employerName2"]; $position2 = $_POST["position2"]; $startDate2 = date_create($_POST["startDate2"]); $employed2 = $_POST["employed2"]; $endDate2 = date_create($_POST["endDate2"]);
  $des2_1 = $_POST["des2_1"]; $des2_2 = $_POST["des2_2"]; $des2_3 = $_POST["des2_3"]; $des2_4 = $_POST["des2_4"];
  if($employerName2 != ""){
    echo "<table class='experience'><tr><th>$employerName2, $position2</th>";
    if($employed2 == "yes2"){
      echo "<td class='experienceDate'>".date_format($startDate2,"M Y")." - Present</td></tr>";
    } else {
      echo "<td class='experienceDate'>".date_format($startDate2,"M Y")." - ".date_format($endDate2,"M Y")." </td> </tr>";
    }
    echo "<tr><td colspan=2><ul> <li>$des2_1</li><li>$des2_2</li><li>$des2_3</li><li>$des2_4</li> </ul></td></tr></table>";
  }

  $employerName3 = $_POST["employerName3"]; $position3 = $_POST["position3"]; $startDate3 = date_create($_POST["startDate3"]); $employed3 = $_POST["employed3"]; $endDate3 = date_create($_POST["endDate3"]);
  $des3_1 = $_POST["des3_1"]; $des3_2 = $_POST["des3_2"]; $des3_3 = $_POST["des3_3"]; $des3_4 = $_POST["des3_4"];
  if($employerName3 != ""){
    echo "<table class='experience'><tr><th>$employerName3, $position3</th>";
    if($employed3 == "yes3"){
      echo "<td class='experienceDate'>".date_format($startDate3,"M Y")." - Present</td></tr>";
    } else {
      echo "<td class='experienceDate'>".date_format($startDate3,"M Y")." - ".date_format($endDate3,"M Y")." </td> </tr>";
    }
    echo "<tr><td colspan=2><ul> <li>$des3_1</li><li>$des3_2</li><li>$des3_3</li><li>$des3_4</li> </ul></td></tr></table>";
  }

  $employerName4 = $_POST["employerName4"]; $position4 = $_POST["position4"]; $startDate4 = date_create($_POST["startDate4"]); $employed4 = $_POST["employed4"]; $endDate4 = date_create($_POST["endDate4"]);
  $des4_1 = $_POST["des4_1"]; $des4_2 = $_POST["des4_2"]; $des4_3 = $_POST["des4_3"]; $des4_4 = $_POST["des4_4"];
  if($employerName4 != ""){
    echo "<table class='experience'><tr><th>$employerName4, $position4</th>";
    if($employed4 == "yes4"){
      echo "<td class='experienceDate'>".date_format($startDate4,"M Y")." - Present</td></tr>";
    } else {
      echo "<td class='experienceDate'>".date_format($startDate4,"M Y")." - ".date_format($endDate4,"M Y")." </td> </tr>";
    }
    echo "<tr><td colspan=2><ul> <li>$des4_1</li><li>$des4_2</li><li>$des4_3</li><li>$des4_4</li> </ul></td></tr></table>";
  }

  //Involvement
  echo "<p class='subHeading'> Involvement </p>";
  $involvement1 = $_POST["involvement1"];$involvement2 = $_POST["involvement2"];$involvement3 = $_POST["involvement3"];
  $involvement4 = $_POST["involvement4"];$involvement5 = $_POST["involvement5"];$involvement6 = $_POST["involvement6"];
  $involvement7 = $_POST["involvement7"];$involvement8 = $_POST["involvement8"];$involvement9 = $_POST["involvement9"];
  $involvement10 = $_POST["involvement10"];
  echo "<ul class='involvement'><li>$involvement1</li>";
  if($involvement2 != ""){ echo "<li>$involvement2</li>";}  else { echo ""; }
  if($involvement3 != ""){ echo "<li>$involvement3</li>";}  else { echo ""; }
  if($involvement4 != ""){ echo "<li>$involvement4</li>";}  else { echo ""; }
  if($involvement5 != ""){ echo "<li>$involvement5</li>";}  else { echo ""; }
  if($involvement6 != ""){ echo "<li>$involvement6</li>";}  else { echo ""; }
  if($involvement7 != ""){ echo "<li>$involvement7</li>";}  else { echo ""; }
  if($involvement8 != ""){ echo "<li>$involvement8</li>";}  else { echo ""; }
  if($involvement9 != ""){ echo "<li>$involvement9</li>";}  else { echo ""; }
  if($involvement10 != ""){ echo "<li>$involvement10</li>";}  else { echo ""; }
  echo "</ul>";

?>
</body>
</html>
