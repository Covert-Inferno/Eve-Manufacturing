<html>
	<head>
	
	</head>
	<body>

		<?php
			$ROOT = dirname(__FILE__);
			include_once($ROOT.'/lib/php/SQLServerCredentials.php');
			include_once($ROOT.'/lib/php/Log.php');
			require_once($ROOT.'/lib/php/PDOConnection.php');
			require_once($ROOT.'/lib/php/SQLControls.php');
			require_once($ROOT.'/lib/php/TableReader.php');
			
			$testTable = TableReader::get_table("items.js");
			SQLControls::create_table($testTable);
			$testTable = TableReader::get_table("classifications.js");
			SQLControls::create_table($testTable);
			$testTable = TableReader::get_table("classification_relations.js");
			SQLControls::create_table($testTable);
		?>
	
	</body>
</html>