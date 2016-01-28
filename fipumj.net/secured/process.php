<?php
session_start();
// $_SESSION['pin'] = $_POST['pin'];
function renameDirAdmin()
{
	$new_suffix = '';
	$letter = 'Fc6wAEGO1H3PQRSTUVmnW04XZ5bY7yz8D9astudI2efKLijkClBopJMghNqrvx';
	$count_letter = strlen($letter);
	for ($i=0;$i<=8;$i++)
	{
		$get_letter_position = rand(0,($count_letter - 1));
		$get_letter = substr($letter,$get_letter_position, 1);
		$new_suffix .= $get_letter;
	}

	$base_dir_old_name = dirname(dirname(__FILE__));
	$new_base_dir_name = $base_dir_old_name.'\_'.$new_suffix;

	foreach (glob($base_dir_old_name.'/_*') as $dir)
	{
		$dir_old_name = $dir;
		break;
	}
	rename($dir_old_name, $new_base_dir_name);
	return '_'.$new_suffix;
}
// function loginAdmin()
// {
	// $pin = $_POST['pin'];
	// if ($pin == $_SESSION['pin'])
	// {
		// $base_dir = dirname(dirname(__FILE__));
		// foreach (glob($base_dir.'/_*') as $dir)
			// header('Location: ../'.basename($dir).'/');
	// }
	// else
		// echo '<script>alert("You aren\'t allowed !");location.href="../index.php"</script>';
// }
if (isset($_POST['data']))
{
	if ($_POST['data'] == $_SESSION['pin'])
		echo json_encode(array(1,renameDirAdmin()));
	else
		echo json_encode(array(0,'You aren\'t allowed !'));
}
?>