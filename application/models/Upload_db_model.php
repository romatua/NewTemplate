<?php

class Upload_db_model extends CI_Model {
	
	public function upload_data_validasi($fullpath){
		ini_set('memory_limit', '-1');
		$inputFileName = $fullpath;
		try {
			$objPHPExcel = PHPExcel_IOFactory::load($inputFileName);
		} catch(Exception $e) {
			die('Error loading file :' . $e->getMessage());
		}
		
		$worksheet = $objPHPExcel->getActiveSheet()->toArray(null,true,true,true);
		$numRows = count($worksheet);
		
		//get only the Cell Collection
		$cell_collection = $objPHPExcel->getActiveSheet()->getCellCollection();
		
		//extract to a PHP readable array format
		foreach ($cell_collection as $cell) {
			$column = $objPHPExcel->getActiveSheet()->getCell($cell)->getColumn();
			$row = $objPHPExcel->getActiveSheet()->getCell($cell)->getRow();
			$data_value = $objPHPExcel->getActiveSheet()->getCell($cell)->getValue();
			//header will/should be in row 1 only. of course this can be modified to suit your need.
			if ($row == 1) {
				$header[$row][$column] = $data_value;
				print_r($data_value);
				echo '<br>';
			} else {
				$arr_data[$row][$column] = $data_value;
				print_r($data_value);
				echo '<br>';
			}
			
// 			print_r($data_value);			
		}
						
		$data['header'] = $header;
		$data['values'] = $arr_data;
	}
	
}