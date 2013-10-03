					<h1>Vehicle</h1>
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
								<td class="pdf"><a href="/music/Vehicle/pdf/AltoSax.pdf" target="_blank">Click Here</a></td>
								<td class="jpeg"><a href="/music/Vehicle/jpg/AltoSax.jpg" target="_blank">Click Here</a></td>
							</tr>
							<tr class="even">
								<td>Bari Sax</td>
								<td class="pdf"><a href="/music/Vehicle/pdf/BariSax.pdf" target="_blank">Click Here</a></td>
								<td class="jpeg"><a href="/music/Vehicle/jpg/BariSax.jpg" target="_blank">Click Here</a></td>
							</tr>
							<tr class="odd">
								<td>Clarinet</td>
								<td class="pdf"><a href="/music/Vehicle/pdf/Clarinet.pdf" target="_blank">Click Here</a></td>
								<td class="jpeg"><a href="/music/Vehicle/jpg/Clarinet.jpg" target="_blank">Click Here</a></td>
							</tr>
							<tr class="even">
								<td>Flute</td>
								<td class="pdf"><a href="/music/Vehicle/pdf/Flute.pdf" target="_blank">Click Here</a></td>
								<td class="jpeg"><a href="/music/Vehicle/jpg/Flute.jpg" target="_blank">Click Here</a></td>
							</tr>
							<tr class="odd">
								<td>Horn in F</td>
								<td class="pdf"><a href="/music/Vehicle/pdf/Horn-F.pdf" target="_blank">Click Here</a></td>
								<td class="jpeg"><a href="/music/Vehicle/jpg/Horn-F.jpg" target="_blank">Click Here</a></td>
							</tr>
							<tr class="even">
								<td>Percussion - Cymbals</td>
								<td class="pdf"><a href="/music/Vehicle/pdf/Percussion-Cymbals.pdf" target="_blank">Click Here</a></td>
								<td class="jpeg"><a href="/music/Vehicle/jpg/Percussion-Cymbals.jpg" target="_blank">Click Here</a></td>
							</tr>
							<tr class="odd">
								<td>Percussion - Quad Toms</td>
								<td class="pdf"><a href="/music/Vehicle/pdf/Percussion-QuadToms.pdf" target="_blank">Click Here</a></td>
								<td class="jpeg"><a href="/music/Vehicle/jpg/Percussion-QuadToms.jpg" target="_blank">Click Here</a></td>
							</tr>
							<tr class="even">
								<td>Percussion - Snare Drum</td>
								<td class="pdf"><a href="/music/Vehicle/pdf/Percussion-SnareDrum.pdf" target="_blank">Click Here</a></td>
								<td class="jpeg"><a href="/music/Vehicle/jpg/Percussion-SnareDrum.jpg" target="_blank">Click Here</a></td>
							</tr>
							<tr class="odd">
								<td>Rhythm - Electric Bass</td>
								<td class="pdf"><a href="/music/Vehicle/pdf/Rhythm-ElectricBass.pdf" target="_blank">Click Here</a></td>
								<td class="jpeg"><a href="/music/Vehicle/jpg/Rhythm-ElectricBass.jpg" target="_blank">Click Here</a></td>
							</tr>
							<tr class="even">
								<td>Rhythm - Keyboards</td>
								<td class="pdf"><a href="/music/Vehicle/pdf/Rhythm-Keyboards.pdf" target="_blank">Click Here</a></td>
								<td class="jpeg"><a href="/music/Vehicle/jpg/Rhythm-Keyboards.jpg" target="_blank">Click Here</a></td>
							</tr>
							<tr class="odd">
								<td>Tenor Sax 1</td>
								<td class="pdf"><a href="/music/Vehicle/pdf/TenorSax-1.pdf" target="_blank">Click Here</a></td>
								<td class="jpeg"><a href="/music/Vehicle/jpg/TenorSax-1.jpg" target="_blank">Click Here</a></td>
							</tr>
							<tr class="even">
								<td>Tenor Sax 2</td>
								<td class="pdf"><a href="/music/Vehicle/pdf/TenorSax-2.pdf" target="_blank">Click Here</a></td>
								<td class="jpeg"><a href="/music/Vehicle/jpg/TenorSax-2.jpg" target="_blank">Click Here</a></td>
							</tr>
							<tr class="odd">
								<td>Trombone 1</td>
								<td class="pdf"><a href="/music/Vehicle/pdf/Trombone-1.pdf" target="_blank">Click Here</a></td>
								<td class="jpeg"><a href="/music/Vehicle/jpg/Trombone-1.jpg" target="_blank">Click Here</a></td>
							</tr>
							<tr class="even">
								<td>Trombone 2</td>
								<td class="pdf"><a href="/music/Vehicle/pdf/Trombone-2.pdf" target="_blank">Click Here</a></td>
								<td class="jpeg"><a href="/music/Vehicle/jpg/Trombone-2.jpg" target="_blank">Click Here</a></td>
							</tr>
							<tr class="odd">
								<td>Trumpet 1</td>
								<td class="pdf"><a href="/music/Vehicle/pdf/Trumpet-1.pdf" target="_blank">Click Here</a></td>
								<td class="jpeg"><a href="/music/Vehicle/jpg/Trumpet-1.jpg" target="_blank">Click Here</a></td>
							</tr>
							<tr class="even">
								<td>Trumpet 2</td>
								<td class="pdf"><a href="/music/Vehicle/pdf/Trumpet-2.pdf" target="_blank">Click Here</a></td>
								<td class="jpeg"><a href="/music/Vehicle/jpg/Trumpet-2.jpg" target="_blank">Click Here</a></td>
							</tr>
							<tr class="odd">
								<td>Tuba</td>
								<td class="pdf"><a href="/music/Vehicle/pdf/Tuba.pdf" target="_blank">Click Here</a></td>
								<td class="jpeg"><a href="/music/Vehicle/jpg/Tuba.jpg" target="_blank">Click Here</a></td>
							</tr>
						</tbody>			
					</table>
					
					<h2>Roadmap</h2>
					<p>
						<?php
							$root = realpath($_SERVER["DOCUMENT_ROOT"]); 
							$roadmapFile = $root . "/music/Vehicle/roadmap.txt";
							$handler = fopen($roadmapFile, 'r');
							$roadmap = fread($handler, filesize($roadmapFile));
							echo $roadmap;
						?>
					</p>
					
					<h2>Recordings / Media</h2>
					<h3>Hockey Game Footage - 2011/2012 Season</h3>
					<div class="flex-video">
						<iframe width="560" height="315" src="https://www.youtube.com/embed/SGjMTUNPWi8?rel=0" frameborder="0" allowfullscreen></iframe>
					</div>
									
					<h2>Revisions</h2>
					<p>
						<?php
							$root = realpath($_SERVER["DOCUMENT_ROOT"]); 
							$revisionsFile = $root . "/music/Vehicle/revisions.txt";
							$handler = fopen($revisionsFile, 'r');
							$revisions = fread($handler, filesize($revisionsFile));
							echo $revisions;
						?>
					</p>