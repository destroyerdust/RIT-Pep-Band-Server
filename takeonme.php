					<h1>Take On Me</h1>
					<h2>Parts</h2>
					<p>Click on the link to download the appropriate part.</p>
					<br />
					<table class="music-table">
						<tr>
							<th><!-- Filler --></th>
							<th><img src="/media/pdf.png" alt="PDF" height="16" width="16" />&#032;PDF</th>
							<th><img src="/media/picture.png" alt="JPEG" height="16" width="16" />&#032;JPEG</th>
						</tr>
						<tr class="odd">
							<td>Alto Sax</td>
							<td class="pdf"><a href="/music/Take%20On%20Me/pdf/AltoSax.pdf" target="_blank">Click Here</a></td>
							<td class="jpeg"><a href="/music/Take%20On%20Me/jpg/AltoSax.jpg" target="_blank">Click Here</a></td>
						</tr>
						<tr class="even">
							<td>Bari Sax</td>
							<td class="pdf"><a href="/music/Take%20On%20Me/pdf/BariSax.pdf" target="_blank">Click Here</a></td>
							<td class="jpeg"><a href="/music/Take%20On%20Me/jpg/BariSax.jpg" target="_blank">Click Here</a></td>
						</tr>
						<tr class="odd">
							<td>Clarinet</td>
							<td class="pdf"><a href="/music/Take%20On%20Me/pdf/Clarinet.pdf" target="_blank">Click Here</a></td>
							<td class="jpeg"><a href="/music/Take%20On%20Me/jpg/Clarinet.jpg" target="_blank">Click Here</a></td>
						</tr>
						<tr class="even">
							<td>Flute</td>
							<td class="pdf"><a href="/music/Take%20On%20Me/pdf/Flute.pdf" target="_blank">Click Here</a></td>
							<td class="jpeg"><a href="/music/Take%20On%20Me/jpg/Flute.jpg" target="_blank">Click Here</a></td>
						</tr>
						<tr class="odd">
							<td>Horn in F</td>
							<td class="pdf"><a href="/music/Take%20On%20Me/pdf/Horn-F.pdf" target="_blank">Click Here</a></td>
							<td class="jpeg"><a href="/music/Take%20On%20Me/jpg/Horn-F.jpg" target="_blank">Click Here</a></td>
						</tr>
						<tr class="even">
							<td>Percussion - Page 1</td>
							<td class="pdf"><a href="/music/Take%20On%20Me/pdf/Percussion.pdf" target="_blank">Click Here</a></td>
							<td class="jpeg"><a href="/music/Take%20On%20Me/jpg/Percussion-1.jpg" target="_blank">Click Here</a></td>
						</tr>
						<tr class="odd">
							<td>Percussion - Page 2</td>
							<td class="pdf"><a href="/music/Take%20On%20Me/pdf/Percussion.pdf" target="_blank">Click Here</a></td>
							<td class="jpeg"><a href="/music/Take%20On%20Me/jpg/Percussion-2.jpg" target="_blank">Click Here</a></td>
						</tr>
						<tr class="even">
							<td>Tenor Sax</td>
							<td class="pdf"><a href="/music/Take%20On%20Me/pdf/TenorSax.pdf" target="_blank">Click Here</a></td>
							<td class="jpeg"><a href="/music/Take%20On%20Me/jpg/TenorSax.jpg" target="_blank">Click Here</a></td>
						</tr>
						<tr class="odd">
							<td>Trombone 1</td>
							<td class="pdf"><a href="/music/Take%20On%20Me/pdf/Trombone-1.pdf" target="_blank">Click Here</a></td>
							<td class="jpeg"><a href="/music/Take%20On%20Me/jpg/Trombone-1.jpg" target="_blank">Click Here</a></td>
						</tr>
						<tr class="even">
							<td>Trombone 2</td>
							<td class="pdf"><a href="/music/Take%20On%20Me/pdf/Trombone-2.pdf" target="_blank">Click Here</a></td>
							<td class="jpeg"><a href="/music/Take%20On%20Me/jpg/Trombone-2.jpg" target="_blank">Click Here</a></td>
						</tr>
						<tr class="odd">
							<td>Trombone 3</td>
							<td class="pdf"><a href="/music/Take%20On%20Me/pdf/Trombone-3.pdf" target="_blank">Click Here</a></td>
							<td class="jpeg"><a href="/music/Take%20On%20Me/jpg/Trombone-3.jpg" target="_blank">Click Here</a></td>
						</tr>
						<tr class="even">
							<td>Trumpet 1</td>
							<td class="pdf"><a href="/music/Take%20On%20Me/pdf/Trumpet-1.pdf" target="_blank">Click Here</a></td>
							<td class="jpeg"><a href="/music/Take%20On%20Me/jpg/Trumpet-1.jpg" target="_blank">Click Here</a></td>
						</tr>
						<tr class="odd">
							<td>Trumpet 2</td>
							<td class="pdf"><a href="/music/Take%20On%20Me/pdf/Trumpet-2.pdf" target="_blank">Click Here</a></td>
							<td class="jpeg"><a href="/music/Take%20On%20Me/jpg/Trumpet-2.jpg" target="_blank">Click Here</a></td>
						</tr>
						<tr class="even">
							<td>Trumpet 3</td>
							<td class="pdf"><a href="/music/Take%20On%20Me/pdf/Trumpet-3.pdf" target="_blank">Click Here</a></td>
							<td class="jpeg"><a href="/music/Take%20On%20Me/jpg/Trumpet-3.jpg" target="_blank">Click Here</a></td>
						</tr>
						<tr class="odd">
							<td>Tuba</td>
							<td class="pdf"><a href="/music/Take%20On%20Me/pdf/Tuba.pdf" target="_blank">Click Here</a></td>
							<td class="jpeg"><a href="/music/Take%20On%20Me/jpg/Tuba.jpg" target="_blank">Click Here</a></td>
						</tr>			
					</table>
					
					<h2>Roadmap</h2>
					<p>
						<?php
							$root = realpath($_SERVER["DOCUMENT_ROOT"]); 
							$roadmapFile = $root . "/music/Take On Me/roadmap.txt";
							$handler = fopen($roadmapFile, 'r');
							$roadmap = fread($handler, filesize($roadmapFile));
							echo $roadmap;
						?>
					</p>
					
					<h2>Recordings / Media</h2>
					<h3>ImageRIT 2012</h3>
					<iframe width="420" height="315" src="https://www.youtube.com/embed/i34ObGb9MAQ?rel=0" frameborder="0" allowfullscreen></iframe>				
					<h2>Revisions</h2>
					<p>
						<?php
							$root = realpath($_SERVER["DOCUMENT_ROOT"]); 
							$revisionsFile = $root . "/music/Take On Me/revisions.txt";
							$handler = fopen($revisionsFile, 'r');
							$revisions = fread($handler, filesize($revisionsFile));
							echo $revisions;
						?>
					</p>