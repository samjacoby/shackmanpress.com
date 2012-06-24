<?php 
include 'includes/php/mysql.authentication.php';
session_start();

if(isset($_SESSION['logged']) && ($_SESSION['logged'])) {
} else {
header("Location: login.php");
}
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Shackman Press | Admin</title>
<style>
key { display: none; }
</style>

<script language="javascript" type="text/javascript" src="includes/jquery-1.4.2.min.js"></script>
<script language="javascript" type="text/javascript" src="includes/jquery.tablesorter.js"></script>
<script language="javascript" type="text/javascript" src="includes/jquery.tableEditor.js"></script>
<script language="javascript" type="text/javascript">
$(document).ready(function() 
    { 
        $("#contacts").tablesorter().tableEditor({
		EDIT_HTML: 'edit',
		SAVE_HTML: 'save',
		EVENT_LINK_SELECTOR: 'button.eventLink',
		FUNC_PRE_EDIT: 'preEdit',
		FUNC_POST_EDIT: 'postEdit',
		FUNC_PRE_SAVE: 'preSave',
		FUNC_UPDATE: 'updateTable'
	});

function updateTable(o) {
	alert('FUNC_UPDATE called');
}

function preSave(o) {
	alert('FUNC_PRE_SAVE called');
}

function postEdit(o) {
	alert('FUNC_POST_EDIT called');
}

function preEdit(o) {
	alert('FUNC_PRE_EDIT called');
}

});
</script>
</head>
<body>
<?php
include 'includes/header.php';

// Connect
$db = db_connect();

// Table
$table = "contacts";

$query = sprintf("SHOW COLUMNS FROM %s", $table);
$result = mysql_query($query);
if (!$result) {
    $message  = 'Invalid query: ' . mysql_error() . "\n";
    $message .= 'Whole query: ' . $query;
    die($message);
}

echo '<table id="contacts" class="tablesorter"><thead><tr>';
$colCounter = 0;
while ($row = mysql_fetch_array($result, MYSQL_NUM)) {
	echo '<th>'.$row[0].'</th>';
	$colCounter++;
}
echo '</thead></tr>';

mysql_free_result($result);

$query = sprintf("SELECT * FROM %s", $table);
$result = mysql_query($query);
if (!$result) {
    $message  = 'Invalid query: ' . mysql_error() . "\n";
    $message .= 'Whole query: ' . $query;
    die($message);
}

echo '<tbody>';
while ($row = mysql_fetch_array($result, MYSQL_NUM)) {
	echo '<tr>';
	for($i = 0; $i < $colCounter; $i++) {
		if($i == 0) {
			echo '<td><key>'.$row[$i].'</key><button id='.$row[$i].' class="eventLink">edit</button></td>';
		} else {
			echo '<td>'.$row[$i].'</td>';
		}
	}
}
echo '</tbody></table>';
?>

</body>
</html>
