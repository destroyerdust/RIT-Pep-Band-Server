					<h1>Soul Man</h1>
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
							<td class="pdf"><a href="/music/Soul%20Man/pdf/AltoSax.pdf" target="_blank">Click Here</a></td>
							<td class="jpeg"><a href="/music/Soul%20Man/jpg/AltoSax.jpg" target="_blank">Click Here</a></td>
						</tr>
						<tr class="even">
							<td>Bari Sax</td>
							<td class="pdf"><a href="/music/Soul%20Man/pdf/BariSax.pdf" target="_blank">Click Here</a></td>
							<td class="jpeg"><a href="/music/Soul%20Man/jpg/BariSax.jpg" target="_blank">Click Here</a></td>
						</tr>
						<tr class="odd">
							<td>Clarinet 1</td>
							<td class="pdf"><a href="/music/Soul%20Man/pdf/Clarinet-1.pdf" target="_blank">Click Here</a></td>
							<td class="jpeg"><a href="/music/Soul%20Man/jpg/Clarinet-1.jpg" target="_blank">Click Here</a></td>
						</tr>
						<tr class="even">
							<td>Clarinet 2</td>
							<td class="pdf"><a href="/music/Soul%20Man/pdf/Clarinet-2.pdf" target="_blank">Click Here</a></td>
							<td class="jpeg"><a href="/music/Soul%20Man/jpg/Clarinet-2.jpg" target="_blank">Click Here</a></td>
						</tr>
						<tr class="odd">
							<td>Flute</td>
							<td class="pdf"><a href="/music/Soul%20Man/pdf/Flute.pdf" target="_blank">Click Here</a></td>
							<td class="jpeg"><a href="/music/Soul%20Man/jpg/Flute.jpg" target="_blank">Click Here</a></td>
						</tr>
						<tr class="even">
							<td>Horn in F</td>
							<td class="pdf"><a href="/music/Soul%20Man/pdf/Horn-F.pdf" target="_blank">Click Here</a></td>
							<td class="jpeg"><a href="/music/Soul%20Man/jpg/Horn-F.jpg" target="_blank">Click Here</a></td>
						</tr>
						<tr class="odd">
							<td>Percussion - Drum Set</td>
							<td class="pdf"><a href="/music/Soul%20Man/pdf/Percussion-Drums.pdf" target="_blank">Click Here</a></td>
							<td class="jpeg"><a href="/music/Soul%20Man/jpg/Percussion-Drums.jpg" target="_blank">Click Here</a></td>
						</tr>
						<tr class="even">
							<td>Rhythm - Electric Guitar</td>
							<td class="pdf"><a href="/music/Soul%20Man/pdf/Rhythm-ElectricGuitar.pdf" target="_blank">Click Here</a></td>
							<td class="jpeg"><a href="/music/Soul%20Man/jpg/Rhythm-ElectricGuitar.jpg" target="_blank">Click Here</a></td>
						</tr>
						<tr class="odd">
							<td>Rhythm - Keyboards (Page 1)</td>
							<td class="pdf"><a href="/music/Soul%20Man/pdf/Rhythm-Keyboards.pdf" target="_blank">Click Here</a></td>
							<td class="jpeg"><a href="/music/Soul%20Man/jpg/Rhythm-Keyboards.jpg" target="_blank">Click Here</a></td>
						</tr>
						<tr class="even">
							<td>Tenor Sax 2</td>
							<td class="pdf"><a href="/music/Soul%20Man/pdf/TenorSax-2.pdf" target="_blank">Click Here</a></td>
							<td class="jpeg"><a href="/music/Soul%20Man/jpg/TenorSax-2.jpg" target="_blank">Click Here</a></td>
						</tr>
						<tr class="odd">
							<td>Trombone 1</td>
							<td class="pdf"><a href="/music/Soul%20Man/pdf/Trombone-1.pdf" target="_blank">Click Here</a></td>
							<td class="jpeg"><a href="/music/Soul%20Man/jpg/Trombone-1.jpg" target="_blank">Click Here</a></td>
						</tr>
						<tr class="even">
							<td>Trumpet 1</td>
							<td class="pdf"><a href="/music/Soul%20Man/pdf/Trumpet-1.pdf" target="_blank">Click Here</a></td>
							<td class="jpeg"><a href="/music/Soul%20Man/jpg/Trumpet-1.jpg" target="_blank">Click Here</a></td>
						</tr>
						<tr class="odd">
							<td>Trumpet 2</td>
							<td class="pdf"><a href="/music/Soul%20Man/pdf/Trumpet-2.pdf" target="_blank">Click Here</a></td>
							<td class="jpeg"><a href="/music/Soul%20Man/jpg/Trumpet-2.jpg" target="_blank">Click Here</a></td>
						</tr>
						<tr class="even">
							<td>Tuba</td>
							<td class="pdf"><a href="/music/Soul%20Man/pdf/Tuba.pdf" target="_blank">Click Here</a></td>
							<td class="jpeg"><a href="/music/Soul%20Man/jpg/Tuba.jpg" target="_blank">Click Here</a></td>
						</tr>			
					</table>
					
					<h2>Roadmap</h2>
					<p>
						<?php
							$root = realpath($_SERVER["DOCUMENT_ROOT"]); 
							$roadmapFile = $root . "/music/Soul Man/roadmap.txt";
							$handler = fopen($roadmapFile, 'r');
							$roadmap = fread($handler, filesize($roadmapFile));
							echo $roadmap;
						?>
					</p>
					
					<h2>Recordings / Media</h2>
					<h3>ImageRIT 2012</h3>
					<iframe width="420" height="315" src="https://www.youtube.com/embed/zGM_8ZuMbOs?rel=0" frameborder="0" allowfullscreen></iframe>					
									
					<h2>Revisions</h2>
					<p>
						<?php
							$root = realpath($_SERVER["DOCUMENT_ROOT"]); 
							$revisionsFile = $root . "/music/Soul Man/revisions.txt";
							$handler = fopen($revisionsFile, 'r');
							$revisions = fread($handler, filesize($revisionsFile));
							echo $revisions;
						?>
					</p>