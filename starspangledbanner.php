					<h1>Star Spangled Banner</h1>
					<h2>Parts</h2>
					<p>Click on the link to download the appropriate part.</p>
					<br />
					<table class="music-table">
						<thead>
							<tr>
								<th width="300"><!-- Filler --></th>
								<th width="150"><img src="/media/pdf.png" alt="PDF" height="16" width="16" />&#032;PDF</th>
								<th width="150"><img src="/media/picture.png" alt="JPEG" height="16" width="16" />&#032;JPEG</th>
							</tr>
						</thead>
						<tbody>
							<tr class="odd">
								<td>Alto Sax</td>
								<td class="pdf"><a href="/music/Star%20Spangled%20Banner/pdf/AltoSax.pdf" target="_blank">Click Here</a></td>
								<td class="jpeg"><a href="/music/Star%20Spangled%20Banner/jpg/AltoSax.jpg" target="_blank">Click Here</a></td>
							</tr>
							<tr class="even">
								<td>Bari Sax</td>
								<td class="pdf"><a href="/music/Star%20Spangled%20Banner/pdf/BariSax.pdf" target="_blank">Click Here</a></td>
								<td class="jpeg"><a href="/music/Star%20Spangled%20Banner/jpg/BariSax.jpg" target="_blank">Click Here</a></td>
							</tr>
							<tr class="odd">
								<td>Clarinet 1</td>
								<td class="pdf"><a href="/music/Star%20Spangled%20Banner/pdf/Clarinet-1.pdf" target="_blank">Click Here</a></td>
								<td class="jpeg"><a href="/music/Star%20Spangled%20Banner/jpg/Clarinet-1.jpg" target="_blank">Click Here</a></td>
							</tr>
							<tr class="even">
								<td>Clarinet 2</td>
								<td class="pdf"><a href="/music/Star%20Spangled%20Banner/pdf/Clarinet-2.pdf" target="_blank">Click Here</a></td>
								<td class="jpeg"><a href="/music/Star%20Spangled%20Banner/jpg/Clarinet-2.jpg" target="_blank">Click Here</a></td>
							</tr>
							<tr class="odd">
								<td>Flute</td>
								<td class="pdf"><a href="/music/Star%20Spangled%20Banner/pdf/Flute.pdf" target="_blank">Click Here</a></td>
								<td class="jpeg"><a href="/music/Star%20Spangled%20Banner/jpg/Flute.jpg" target="_blank">Click Here</a></td>
							</tr>
							<tr class="even">
								<td>Horn in F</td>
								<td class="pdf"><a href="/music/Star%20Spangled%20Banner/pdf/Horn-F.pdf" target="_blank">Click Here</a></td>
								<td class="jpeg"><a href="/music/Star%20Spangled%20Banner/jpg/Horn-F.jpg" target="_blank">Click Here</a></td>
							</tr>
							<tr class="odd">
								<td>Percussion - Drums</td>
								<td class="pdf"><a href="/music/Star%20Spangled%20Banner/pdf/Percussion-Drums.pdf" target="_blank">Click Here</a></td>
								<td class="jpeg"><a href="/music/Star%20Spangled%20Banner/jpg/Percussion-Drums.jpg" target="_blank">Click Here</a></td>
							</tr>
							<tr class="even">
								<td>Rhythm - Electric Guitar</td>
								<td class="pdf"><a href="/music/Star%20Spangled%20Banner/pdf/Rhythm-ElectricGuitar.pdf" target="_blank">Click Here</a></td>
								<td class="jpeg"><a href="/music/Star%20Spangled%20Banner/jpg/Rhythm-ElectricGuitar.jpg" target="_blank">Click Here</a></td>
							</tr>
							<tr class="odd">
								<td>Rhythm - Keyboards (Page 1)</td>
								<td class="pdf"><a href="/music/Star%20Spangled%20Banner/pdf/Rhythm-Keyboards.pdf" target="_blank">Click Here</a></td>
								<td class="jpeg"><a href="/music/Star%20Spangled%20Banner/jpg/Rhythm-Keyboards-1.jpg" target="_blank">Click Here</a></td>
							</tr>
							<tr class="even">
								<td>Rhythm - Keyboards (Page 2)</td>
								<td class="pdf"><a href="/music/Star%20Spangled%20Banner/pdf/Rhythm-Keyboards.pdf" target="_blank">Click Here</a></td>
								<td class="jpeg"><a href="/music/Star%20Spangled%20Banner/jpg/Rhythm-Keyboards-2.jpg" target="_blank">Click Here</a></td>
							</tr>
							<tr class="odd">
								<td>Tenor Sax 2</td>
								<td class="pdf"><a href="/music/Star%20Spangled%20Banner/pdf/TenorSax-2.pdf" target="_blank">Click Here</a></td>
								<td class="jpeg"><a href="/music/Star%20Spangled%20Banner/jpg/TenorSax-2.jpg" target="_blank">Click Here</a></td>
							</tr>
							<tr class="even">
								<td>Trombone 1</td>
								<td class="pdf"><a href="/music/Star%20Spangled%20Banner/pdf/Trombone-1.pdf" target="_blank">Click Here</a></td>
								<td class="jpeg"><a href="/music/Star%20Spangled%20Banner/jpg/Trombone-1.jpg" target="_blank">Click Here</a></td>
							</tr>
							<tr class="odd">
								<td>Trumpet 1</td>
								<td class="pdf"><a href="/music/Star%20Spangled%20Banner/pdf/Trumpet-1.pdf" target="_blank">Click Here</a></td>
								<td class="jpeg"><a href="/music/Star%20Spangled%20Banner/jpg/Trumpet-1.jpg" target="_blank">Click Here</a></td>
							</tr>
							<tr class="even">
								<td>Trumpet 2</td>
								<td class="pdf"><a href="/music/Star%20Spangled%20Banner/pdf/Trumpet-2.pdf" target="_blank">Click Here</a></td>
								<td class="jpeg"><a href="/music/Star%20Spangled%20Banner/jpg/Trumpet-2.jpg" target="_blank">Click Here</a></td>
							</tr>
							<tr class="odd">
								<td>Tuba</td>
								<td class="pdf"><a href="/music/Star%20Spangled%20Banner/pdf/Tuba.pdf" target="_blank">Click Here</a></td>
								<td class="jpeg"><a href="/music/Star%20Spangled%20Banner/jpg/Tuba.jpg" target="_blank">Click Here</a></td>
							</tr>
						</tbody>			
					</table>
					
					<h2>Roadmap</h2>
					<p>
						<?php
							$root = realpath($_SERVER["DOCUMENT_ROOT"]); 
							$roadmapFile = $root . "/music/Star Spangled Banner/roadmap.txt";
							$handler = fopen($roadmapFile, 'r');
							$roadmap = fread($handler, filesize($roadmapFile));
							echo $roadmap;
						?>
					</p>
					
					<h2>Recordings / Media</h2>
					<p>No media available</p>
									
					<h2>Revisions</h2>
					<p>
						<?php
							$root = realpath($_SERVER["DOCUMENT_ROOT"]); 
							$revisionsFile = $root . "/music/Star Spangled Banner/revisions.txt";
							$handler = fopen($revisionsFile, 'r');
							$revisions = fread($handler, filesize($revisionsFile));
							echo $revisions;
						?>
					</p>