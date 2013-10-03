					<h1>Final Countdown</h1>
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
							<td class="pdf"><a href="/music/Final%20Countdown/pdf/AltoSax.pdf" target="_blank">Click Here</a></td>
							<td class="jpeg"><a href="/music/Final%20Countdown/jpg/AltoSax.jpg" target="_blank">Click Here</a></td>
						</tr>
						<tr class="even">
							<td>Bari Sax</td>
							<td class="pdf"><a href="/music/Final%20Countdown/pdf/BariSax.pdf" target="_blank">Click Here</a></td>
							<td class="jpeg"><a href="/music/Final%20Countdown/jpg/BariSax.jpg" target="_blank">Click Here</a></td>
						</tr>
						<tr class="odd">
							<td>Clarinet</td>
							<td class="pdf"><a href="/music/Final%20Countdown/pdf/Clarinet.pdf" target="_blank">Click Here</a></td>
							<td class="jpeg"><a href="/music/Final%20Countdown/jpg/Clarinet.jpg" target="_blank">Click Here</a></td>
						</tr>
						<tr class="even">
							<td>Flute</td>
							<td class="pdf"><a href="/music/Final%20Countdown/pdf/Flute.pdf" target="_blank">Click Here</a></td>
							<td class="jpeg"><a href="/music/Final%20Countdown/jpg/Flute.jpg" target="_blank">Click Here</a></td>
						</tr>
						<tr class="odd">
							<td>Horn-F</td>
							<td class="pdf"><a href="/music/Final%20Countdown/pdf/Horn-F.pdf" target="_blank">Click Here</a></td>
							<td class="jpeg"><a href="/music/Final%20Countdown/jpg/Horn-F.jpg" target="_blank">Click Here</a></td>
						</tr>
						<tr class="even">
							<td>Rhythm - Electric Bass</td>
							<td class="pdf"><a href="/music/Final%20Countdown/pdf/Rhythm-ElectricBass.pdf" target="_blank">Click Here</a></td>
							<td class="jpeg"><a href="/music/Final%20Countdown/jpg/Rhythm-ElectricBass.jpg" target="_blank">Click Here</a></td>
						</tr>
						<tr class="odd">
							<td>Rhythm - Electric Guitar</td>
							<td class="pdf"><a href="/music/Final%20Countdown/pdf/Rhythm-ElectricGuitar.pdf" target="_blank">Click Here</a></td>
							<td class="jpeg"><a href="/music/Final%20Countdown/jpg/Rhythm-ElectricGuitar.jpg" target="_blank">Click Here</a></td>
						</tr>
						<tr class="even">
							<td>Rhythm - Keyboards</td>
							<td class="pdf"><a href="/music/Final%20Countdown/pdf/Rhythm-Keyboards.pdf" target="_blank">Click Here</a></td>
							<td class="jpeg"><a href="/music/Final%20Countdown/jpg/Rhythm-Keyboards.jpg" target="_blank">Click Here</a></td>
						</tr>
						<tr class="odd">
							<td>Tenor Sax</td>
							<td class="pdf"><a href="/music/Final%20Countdown/pdf/TenorSax.pdf" target="_blank">Click Here</a></td>
							<td class="jpeg"><a href="/music/Final%20Countdown/jpg/TenorSax.jpg" target="_blank">Click Here</a></td>
						</tr>
						<tr class="even">
							<td>Trombone</td>
							<td class="pdf"><a href="/music/Final%20Countdown/pdf/Trombone.pdf" target="_blank">Click Here</a></td>
							<td class="jpeg"><a href="/music/Final%20Countdown/jpg/Trombone.jpg" target="_blank">Click Here</a></td>
						</tr>
						<tr class="odd">
							<td>Trumpet</td>
							<td class="pdf"><a href="/music/Final%20Countdown/pdf/Trumpet.pdf" target="_blank">Click Here</a></td>
							<td class="jpeg"><a href="/music/Final%20Countdown/jpg/Trumpet.jpg" target="_blank">Click Here</a></td>
						</tr>
						<tr class="even">
							<td>Tuba</td>
							<td class="pdf"><a href="/music/Final%20Countdown/pdf/Tuba.pdf" target="_blank">Click Here</a></td>
							<td class="jpeg"><a href="/music/Final%20Countdown/jpg/Tuba.jpg" target="_blank">Click Here</a></td>
						</tr>		
					</table>
					
					<h2>Roadmap</h2>
					<p>
						<?php
							$root = realpath($_SERVER["DOCUMENT_ROOT"]); 
							$roadmapFile = $root . "/music/Final Countdown/roadmap.txt";
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
							$revisionsFile = $root . "/music/Final Countdown/revisions.txt";
							$handler = fopen($revisionsFile, 'r');
							$revisions = fread($handler, filesize($revisionsFile));
							echo $revisions;
						?>
					</p>