					<h1>Tequila</h1>
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
							<td class="pdf"><a href="/music/Tequila/pdf/AltoSax.pdf" target="_blank">Click Here</a></td>
							<td class="jpeg"><a href="/music/Tequila/jpg/AltoSax.jpg" target="_blank">Click Here</a></td>
						</tr>
						<tr class="even">
							<td>Bari Sax</td>
							<td class="pdf"><a href="/music/Tequila/pdf/BariSax.pdf" target="_blank">Click Here</a></td>
							<td class="jpeg"><a href="/music/Tequila/jpg/BariSax.jpg" target="_blank">Click Here</a></td>
						</tr>
						<tr class="odd">
							<td>Clarinet 1</td>
							<td class="pdf"><a href="/music/Tequila/pdf/Clarinet-1.pdf" target="_blank">Click Here</a></td>
							<td class="jpeg"><a href="/music/Tequila/jpg/Clarinet-1.jpg" target="_blank">Click Here</a></td>
						</tr>
						<tr class="even">
							<td>Clarinet 2</td>
							<td class="pdf"><a href="/music/Tequila/pdf/Clarinet-2.pdf" target="_blank">Click Here</a></td>
							<td class="jpeg"><a href="/music/Tequila/jpg/Clarinet-2.jpg" target="_blank">Click Here</a></td>
						</tr>
						<tr class="odd">
							<td>Flute</td>
							<td class="pdf"><a href="/music/Tequila/pdf/Flute.pdf" target="_blank">Click Here</a></td>
							<td class="jpeg"><a href="/music/Tequila/jpg/Flute.jpg" target="_blank">Click Here</a></td>
						</tr>
						<tr class="even">
							<td>Horn in F</td>
							<td class="pdf"><a href="/music/Tequila/pdf/Horn-F.pdf" target="_blank">Click Here</a></td>
							<td class="jpeg"><a href="/music/Tequila/jpg/Horn-F.jpg" target="_blank">Click Here</a></td>
						</tr>
						<tr class="odd">
							<td>Percussion - Drum Set</td>
							<td class="pdf"><a href="/music/Tequila/pdf/Percussion-Drums.pdf" target="_blank">Click Here</a></td>
							<td class="jpeg"><a href="/music/Tequila/jpg/Percussion-Drums.jpg" target="_blank">Click Here</a></td>
						</tr>
						<tr class="even">
							<td>Rhythm - Electric Guitar</td>
							<td class="pdf"><a href="/music/Tequila/pdf/Rhythm-ElectricGuitar.pdf" target="_blank">Click Here</a></td>
							<td class="jpeg"><a href="/music/Tequila/jpg/Rhythm-ElectricGuitar.jpg" target="_blank">Click Here</a></td>
						</tr>
						<tr class="odd">
							<td>Rhythm - Keyboards</td>
							<td class="pdf"><a href="/music/Tequila/pdf/Rhythm-Keyboards.pdf" target="_blank">Click Here</a></td>
							<td class="jpeg"><a href="/music/Tequila/jpg/Rhythm-Keyboards.jpg" target="_blank">Click Here</a></td>
						</tr>
						<tr class="even">
							<td>Tenor Sax 2</td>
							<td class="pdf"><a href="/music/Tequila/pdf/TenorSax-2.pdf" target="_blank">Click Here</a></td>
							<td class="jpeg"><a href="/music/Tequila/jpg/TenorSax-2.jpg" target="_blank">Click Here</a></td>
						</tr>
						<tr class="odd">
							<td>Trombone 1</td>
							<td class="pdf"><a href="/music/Tequila/pdf/Trombone-1.pdf" target="_blank">Click Here</a></td>
							<td class="jpeg"><a href="/music/Tequila/jpg/Trombone-1.jpg" target="_blank">Click Here</a></td>
						</tr>
						<tr class="even">
							<td>Trumpet 1</td>
							<td class="pdf"><a href="/music/Tequila/pdf/Trumpet-1.pdf" target="_blank">Click Here</a></td>
							<td class="jpeg"><a href="/music/Tequila/jpg/Trumpet-1.jpg" target="_blank">Click Here</a></td>
						</tr>
						<tr class="odd">
							<td>Trumpet 2</td>
							<td class="pdf"><a href="/music/Tequila/pdf/Trumpet-2.pdf" target="_blank">Click Here</a></td>
							<td class="jpeg"><a href="/music/Tequila/jpg/Trumpet-2.jpg" target="_blank">Click Here</a></td>
						</tr>
						<tr class="even">
							<td>Tuba</td>
							<td class="pdf"><a href="/music/Tequila/pdf/Tuba.pdf" target="_blank">Click Here</a></td>
							<td class="jpeg"><a href="/music/Tequila/jpg/Tuba.jpg" target="_blank">Click Here</a></td>
						</tr>			
					</table>
					
					<h2>Roadmap</h2>
					<p>
						<?php
							$root = realpath($_SERVER["DOCUMENT_ROOT"]); 
							$roadmapFile = $root . "/music/Tequila/roadmap.txt";
							$handler = fopen($roadmapFile, 'r');
							$roadmap = fread($handler, filesize($roadmapFile));
							echo $roadmap;
						?>
					</p>
					
					<h2>Recordings / Media</h2>
					<p>No media available.</p>					
									
					<h2>Revisions</h2>
					<p>
						<?php
							$root = realpath($_SERVER["DOCUMENT_ROOT"]); 
							$revisionsFile = $root . "/music/Tequila/revisions.txt";
							$handler = fopen($revisionsFile, 'r');
							$revisions = fread($handler, filesize($revisionsFile));
							echo $revisions;
						?>
					</p>