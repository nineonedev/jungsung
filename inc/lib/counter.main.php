<?

$ToDay_Year		= date("Y");
$ToDay_Month		= date("m");
$ToDay_Day			= date("d");
$Select_Year		= $ToDay_Year;
$Select_Month		= $ToDay_Month;
$Select_Day			= $ToDay_Day;

# 전체방문자수
$result=mysql_query("SELECT sum(Visit_Num) as CDSV FROM nb_counter_data WHERE Year='$Select_Year' AND month = '$Select_Month'");
$data = mysql_fetch_array($result);
$TotalVisit = $data[CDSV];

# 오늘방문자수
$result=mysql_query("SELECT sum(Visit_Num) as CDSV FROM nb_counter_data WHERE Year='$Select_Year' AND month = '$Select_Month' AND Day = '$Select_Day'");
$data = mysql_fetch_array($result);
$TotalVisitToday = $data[CDSV];

?>