					<h1>Bang on the Drum</h1>
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
								<td>Alto Sax 1</td>
								<td class="pdf"><a href="/music/Bang%20On%20the%20Drum/pdf/AltoSax-1.pdf" target="_blank">Click Here</a></td>
								<td class="jpeg"><a href="/music/Bang%20On%20the%20Drum/jpg/AltoSax-1.jpg" target="_blank">Click Here</a></td>
							</tr>
							<tr class="even">
								<td>Alto Sax 2</td>
								<td class="pdf"><a href="/music/Bang%20On%20the%20Drum/pdf/AltoSax-2.pdf" target="_blank">Click Here</a></td>
								<td class="jpeg"><a href="/music/Bang%20On%20the%20Drum/jpg/AltoSax-2.jpg" target="_blank">Click Here</a></td>
							</tr>
							<tr class="odd">
								<td>Bari Sax</td>
								<td class="pdf"><a href="/music/Bang%20On%20the%20Drum/pdf/BariSax.pdf" target="_blank">Click Here</a></td>
								<td class="jpeg"><a href="/music/Bang%20On%20the%20Drum/jpg/BariSax.jpg" target="_blank">Click Here</a></td>
							</tr>
							<tr class="even">
								<td>Clarinet</td>
								<td class="pdf"><a href="/music/Bang%20On%20the%20Drum/pdf/Clarinet.pdf" target="_blank">Click Here</a></td>
								<td class="jpeg"><a href="/music/Bang%20On%20the%20Drum/jpg/Clarinet.jpg" target="_blank">Click Here</a></td>
							</tr>
							<tr class="odd">
								<td>Flute</td>
								<td class="pdf"><a href="/music/Bang%20On%20the%20Drum/pdf/Flute.pdf" target="_blank">Click Here</a></td>
								<td class="jpeg"><a href="/music/Bang%20On%20the%20Drum/jpg/Flute.jpg" target="_blank">Click Here</a></td>
							</tr>
							<tr class="even">
								<td>Horn in F</td>
								<td class="pdf"><a href="/music/Bang%20On%20the%20Drum/pdf/Horn-F.pdf" target="_blank">Click Here</a></td>
								<td class="jpeg"><a href="/music/Bang%20On%20the%20Drum/jpg/Horn-F.jpg" target="_blank">Click Here</a></td>
							</tr>
							<tr class="odd">
								<td>Percussion - Bass Drums</td>
								<td class="pdf"><a href="/music/Bang%20On%20the%20Drum/pdf/Percussion-BassDrums.pdf" target="_blank">Click Here</a></td>
								<td class="jpeg"><a href="/music/Bang%20On%20the%20Drum/jpg/Percussion-BassDrums.jpg" target="_blank">Click Here</a></td>
							</tr>
							<tr class="even">
								<td>Rhythm - Electric Bass</td>
								<td class="pdf"><a href="/music/Bang%20On%20the%20Drum/pdf/Rhythm-ElectricBass.pdf" target="_blank">Click Here</a></td>
								<td class="jpeg"><a href="/music/Bang%20On%20the%20Drum/jpg/Rhythm-ElectricBass.jpg" target="_blank">Click Here</a></td>
							</tr>
							<tr class="odd">
								<td>Tenor Sax</td>
								<td class="pdf"><a href="/music/Bang%20On%20the%20Drum/pdf/TenorSax.pdf" target="_blank">Click Here</a></td>
								<td class="jpeg"><a href="/music/Bang%20On%20the%20Drum/jpg/TenorSax.jpg" target="_blank">Click Here</a></td>
							</tr>
							<tr class="even">
								<td>Trombone</td>
								<td class="pdf"><a href="/music/Bang%20On%20the%20Drum/pdf/Trombone.pdf" target="_blank">Click Here</a></td>
								<td class="jpeg"><a href="/music/Bang%20On%20the%20Drum/jpg/Trombone.jpg" target="_blank">Click Here</a></td>
							</tr>
							<tr class="odd">
								<td>Trumpet 1</td>
								<td class="pdf"><a href="/music/Bang%20On%20the%20Drum/pdf/Trumpet-1.pdf" target="_blank">Click Here</a></td>
								<td class="jpeg"><a href="/music/Bang%20On%20the%20Drum/jpg/Trumpet-1.jpg" target="_blank">Click Here</a></td>
							</tr>
							<tr class="even">
								<td>Trumpet 2</td>
								<td class="pdf"><a href="/music/Bang%20On%20the%20Drum/pdf/Trumpet-2.pdf" target="_blank">Click Here</a></td>
								<td class="jpeg"><a href="/music/Bang%20On%20the%20Drum/jpg/Trumpet-2.jpg" target="_blank">Click Here</a></td>
							</tr>
							<tr class="odd">
								<td>Trumpet 3</td>
								<td class="pdf"><a href="/music/Bang%20On%20the%20Drum/pdf/Trumpet-3.pdf" target="_blank">Click Here</a></td>
								<td class="jpeg"><a href="/music/Bang%20On%20the%20Drum/jpg/Trumpet-3.jpg" target="_blank">Click Here</a></td>
							</tr>
							<tr class="even">
								<td>Tuba</td>
								<td class="pdf"><a href="/music/Bang%20On%20the%20Drum/pdf/Tuba.pdf" target="_blank">Click Here</a></td>
								<td class="jpeg"><a href="/music/Bang%20On%20the%20Drum/jpg/Tuba.jpg" target="_blank">Click Here</a></td>
							</tr>
						</tbody>
					</table>
					
					<h2>Roadmap</h2>
					<p>
						<?php
							$root = realpath($_SERVER["DOCUMENT_ROOT"]); 
							$roadmapFile = $root . "/music/Bang On the Drum/roadmap.txt";
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
							$revisionsFile = $root . "/music/Bang On the Drum/revisions.txt";
							$handler = fopen($revisionsFile, 'r');
							$revisions = fread($handler, filesize($revisionsFile));
							echo $revisions;
						?>
					</p>
