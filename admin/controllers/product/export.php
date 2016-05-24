<?php
 error_reporting(0);
if (!empty($_POST)) {
		extract($_POST);
                
	} else {
		extract($_GET);
	}
require_once( dirname(dirname(dirname(__FILE__))) . '/models/TMProductManagement.php');

$tm = new TMProductManagement();

$a = $tm->get_all($name);
$a = json_encode($a);
$data_array = json_decode($a, true);
//$data = $data_array ['data'];

$file_name = 'Product';
if($name==0)
{ $file_name.='forent';}
 elseif ($name==1) {
    $file_name.='forsale';
}
else{}
$date = date('d_m_Y');
$file_name = $file_name . "_" . $date;
$header = array(
    'ID',
    'Category',
    'Location',
    'Name',
    'Adress',
    'Date post',
    'Image',
    'Price',
    'Bathroom',
    'Bedroom',
    'Forsale',
    'Square',
);
$data_import = array();
$index = 0;
foreach ($data_array as $aRow) {
    $data_import[$index][] = $aRow [0];
    $data_import[$index][] = $aRow [1];
    $data_import[$index][] = $aRow [2];
    $data_import[$index][] = $aRow [3];
    $data_import[$index][] = $aRow [4];
    $data_import[$index][] = $aRow [5];
    $data_import[$index][] = $aRow [6];
    $data_import[$index][] = $aRow [7];
    $data_import[$index][] = $aRow [8];
    $data_import[$index][] = $aRow [9];
    $data_import[$index][] = $aRow [10];
    $data_import[$index][] = $aRow [11];
    
    $index++;
}

// Export Excel & CSV
//require_once(LIBRARY_DIR.DS.'exportExcelCSV.php');
require_once(dirname(dirname(dirname(dirname(__FILE__)))) . '/libs/exportExcelCSV.php');
$eEC = new ExportExcelCSV($file_name, $header, $data_import);
// If user want to export Excel
// $eEC->setLimitRowPhpExcel(1); // Set Limit recored for export by lib phpExcel, default is 3000
$eEC->exportExcel();
header('location:admin/views/export/index.php');
?>
