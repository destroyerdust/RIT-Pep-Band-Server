<?php	
	function printTable($content_title)
	{
		$root = realpath($_SERVER["DOCUMENT_ROOT"]);
		$minutes_source = $root . '/' . 'minutes.content';
		$docs_source = $root . '/' . 'docs.content';
		
		/* Print the initial part of the table with a heredoc */
		echo <<<"EOT"
		<table class="document-table">
			<tr>
				<th class="table-content">Document Name</th>
				<th>Type</th>
				<th>Date</th>
			</tr>
EOT;
		
		/* Open the file, get rows, print them */
		if ($content_title == "documents" && file_exists($docs_source) && is_readable($docs_source))
		{
			$lines = file($docs_source);
			$count = 0;
			
			foreach ($lines as $line)
			{
				printRow($line, $count);
				$count++;
			}
		}
		
		elseif ($content_title == "minutes" && file_exists($minutes_source) && is_readable($minutes_source))
		{
			$lines = file($minutes_source);
			$count = 0;
			
			foreach ($lines as $line)
			{
				printRow($line, $count);
				$count++;
			}
		}
		
		echo "</table>";
	}
	
	function printRow($line, $count)
	{
		/* Explode the string. [0] Link, [1] Name, [2] Type, [3] Date */
		list ($link, $name, $type, $date) = explode(';', $line);
	
		$class = "even";
		if ($count % 2 == 0) { $class = "odd"; }
		
		$image = "/media/gdoc.png";
		if ($type == "PDF") { $image = "/media/pdf.png"; }
		elseif ($type == "PDF") { $image = "/media/docx.png"; }
		
		echo <<<"EOT"
			<tr class="$class">
				<td class="table-content"><a href="$link" target="_blank">$name</a></td>
				<td class="type"><img src="$image" alt="$type" height="12" width="12" />&#032;$type</td>
				<td class="date">$date</td>
			</tr>
EOT;
	}
	
	if (isset($_GET['id']))
	{		
		if ($id == "documents") 
		{
			echo "<h1>Documents</h1>";
			echo "<p>Click on a document title to download it.</p>";
			echo "<br />";
			printTable("documents");
		}
		
		elseif ($id == "minutes")
		{
			echo "<h1>Eboard Minutes</h1>";
			echo "<p>Click on a document title to download it.</p>";
			echo "<br />";
			printTable("minutes");
		}
	}
?>