					<h1>Dragnet</h1>
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
								<td class="pdf"><a href="/music/Dragnet%20(Penalty)/pdf/AltoSax.pdf" target="_blank">Click Here</a></td>
								<td class="jpeg"><a href="/music/Dragnet%20(Penalty)/jpg/AltoSax.jpg" target="_blank">Click Here</a></td>
							</tr>
							<tr class="even">
								<td>Bari Sax</td>
								<td class="pdf"><a href="/music/Dragnet%20(Penalty)/pdf/BariSax.pdf" target="_blank">Click Here</a></td>
								<td class="jpeg"><a href="/music/Dragnet%20(Penalty)/jpg/BariSax.jpg" target="_blank">Click Here</a></td>
							</tr>
							<tr class="odd">
								<td>Clarinet</td>
								<td class="pdf"><a href="/music/Dragnet%20(Penalty)/pdf/Clarinet.pdf" target="_blank">Click Here</a></td>
								<td class="jpeg"><a href="/music/Dragnet%20(Penalty)/jpg/Clarinet.jpg" target="_blank">Click Here</a></td>
							</tr>
							<tr class="even">
								<td>Rhythm - Electric Bass</td>
								<td class="pdf"><a href="/music/Dragnet%20(Penalty)/pdf/Rhythm-ElectricBass.pdf" target="_blank">Click Here</a></td>
								<td class="jpeg"><a href="/music/Dragnet%20(Penalty)/jpg/Rhythm-ElectricBass.jpg" target="_blank">Click Here</a></td>
							</tr>
							<tr class="odd">
								<td>Rhythm - Electric Guitar</td>
								<td class="pdf"><a href="/music/Dragnet%20(Penalty)/pdf/Rhythm-ElectricGuitar.pdf" target="_blank">Click Here</a></td>
								<td class="jpeg"><a href="/music/Dragnet%20(Penalty)/jpg/Rhythm-ElectricGuitar.jpg" target="_blank">Click Here</a></td>
							</tr>
							<tr class="even">
								<td>Rhythm - Keyboards</td>
								<td class="pdf"><a href="/music/Dragnet%20(Penalty)/pdf/Rhythm-Keyboards.pdf" target="_blank">Click Here</a></td>
								<td class="jpeg"><a href="/music/Dragnet%20(Penalty)/jpg/Rhythm-Keyboards.jpg" target="_blank">Click Here</a></td>
							</tr>
							<tr class="odd">
								<td>Tenor Sax</td>
								<td class="pdf"><a href="/music/Dragnet%20(Penalty)/pdf/TenorSax.pdf" target="_blank">Click Here</a></td>
								<td class="jpeg"><a href="/music/Dragnet%20(Penalty)/jpg/TenorSax.jpg" target="_blank">Click Here</a></td>
							</tr>
							<tr class="even">
								<td>Trombone</td>
								<td class="pdf"><a href="/music/Dragnet%20(Penalty)/pdf/Trombone.pdf" target="_blank">Click Here</a></td>
								<td class="jpeg"><a href="/music/Dragnet%20(Penalty)/jpg/Trombone.jpg" target="_blank">Click Here</a></td>
							</tr>
							<tr class="odd">
								<td>Trumpet</td>
								<td class="pdf"><a href="/music/Dragnet%20(Penalty)/pdf/Trumpet.pdf" target="_blank">Click Here</a></td>
								<td class="jpeg"><a href="/music/Dragnet%20(Penalty)/jpg/Trumpet.jpg" target="_blank">Click Here</a></td>
							</tr>
						</tbody>		
					</table>
					
					<h2>Roadmap</h2>
					<p>
						<?php
							$root = realpath($_SERVER["DOCUMENT_ROOT"]); 
							$roadmapFile = $root . "/music/Dragnet (Penalty)/roadmap.txt";
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
							$revisionsFile = $root . "/music/Dragnet (Penalty)/revisions.txt";
							$handler = fopen($revisionsFile, 'r');
							$revisions = fread($handler, filesize($revisionsFile));
							echo $revisions;
						?>
					</p>