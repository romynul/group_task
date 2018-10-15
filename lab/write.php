<?php
	$menu = $_POST['menu'];
	$item = $_POST['item'];
	$price = $_POST['price'];


	
		
		$fileName = "menu.xml";
		$xml = new XMLWriter();
		$xml->openmemory();
		$xml->setIndent(true);
		//$xml->startDocument();
		
		
		$xml->startElement("menudata");
			$xml->writeElement("menu",$menu);
			$xml->startElement("item");
				$xml->writeElement("name",$item);
				$xml->writeElement("price",$price);
			$xml->endElement();

		$xml->endElement();
		//$xml->endDocument();
		
		$file = $xml->outputMemory();
		file_put_contents($fileName,$file,FILE_APPEND);
	
	echo "Input Successful";
?>