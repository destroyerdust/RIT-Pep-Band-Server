					<h1>Yells</h1>
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
							<td class="pdf"><a href="/music/Yells/pdf/AltoSax.pdf" target="_blank">Click Here</a></td>
							<td class="jpeg"><a href="/music/Yells/jpg/AltoSax.jpg" target="_blank">Click Here</a></td>
						</tr>
						<tr class="even">
							<td>Bari Sax</td>
							<td class="pdf"><a href="/music/Yells/pdf/BariSax.pdf" target="_blank">Click Here</a></td>
							<td class="jpeg"><a href="/music/Yells/jpg/BariSax.jpg" target="_blank">Click Here</a></td>
						</tr>
						<tr class="odd">
							<td>Clarinet</td>
							<td class="pdf"><a href="/music/Yells/pdf/Trumpet.pdf" target="_blank">Click Here</a></td>
							<td class="jpeg"><a href="/music/Yells/jpg/Trumpet.jpg" target="_blank">Click Here</a></td>
						</tr>
						<tr class="even">
							<td>Flute</td>
							<td class="pdf"><a href="/music/Yells/pdf/Flute.pdf" target="_blank">Click Here</a></td>
							<td class="jpeg"><a href="/music/Yells/jpg/Flute.jpg" target="_blank">Click Here</a></td>
						</tr>
						<tr class="odd">
							<td>Horn in F</td>
							<td class="pdf"><a href="/music/Yells/pdf/Horn-F.pdf" target="_blank">Click Here</a></td>
							<td class="jpeg"><a href="/music/Yells/jpg/Horn-F.jpg" target="_blank">Click Here</a></td>
						</tr>
						<tr class="even">
							<td>Rhythm - Electric Guitar</td>
							<td class="pdf"><a href="/music/Yells/pdf/Rhythm-ElectricGuitar.pdf" target="_blank">Click Here</a></td>
							<td class="jpeg"><a href="/music/Yells/jpg/Rhythm-ElectricGuitar.jpg" target="_blank">Click Here</a></td>
						</tr>
						<tr class="odd">
							<td>Rhythm - Electric Bass</td>
							<td class="pdf"><a href="/music/Yells/pdf/Rhythm-ElectricBass.pdf" target="_blank">Click Here</a></td>
							<td class="jpeg"><a href="/music/Yells/jpg/Rhythm-ElectricBass.jpg" target="_blank">Click Here</a></td>
						</tr>
						<tr class="even">
							<td>Tenor Sax</td>
							<td class="pdf"><a href="/music/Yells/pdf/TenorSax.pdf" target="_blank">Click Here</a></td>
							<td class="jpeg"><a href="/music/Yells/jpg/TenorSax.jpg" target="_blank">Click Here</a></td>
						</tr>
						<tr class="odd">
							<td>Trombone</td>
							<td class="pdf"><a href="/music/Yells/pdf/Trombone.pdf" target="_blank">Click Here</a></td>
							<td class="jpeg"><a href="/music/Yells/jpg/Trombone.jpg" target="_blank">Click Here</a></td>
						</tr>
						<tr class="even">
							<td>Trumpet</td>
							<td class="pdf"><a href="/music/Yells/pdf/Trumpet.pdf" target="_blank">Click Here</a></td>
							<td class="jpeg"><a href="/music/Yells/jpg/Trumpet.jpg" target="_blank">Click Here</a></td>
						</tr>
						<tr class="odd">
							<td>Tuba</td>
							<td class="pdf"><a href="/music/Yells/pdf/Tuba.pdf" target="_blank">Click Here</a></td>
							<td class="jpeg"><a href="/music/Yells/jpg/Tuba.jpg" target="_blank">Click Here</a></td>
						</tr>			
					</table>
					
					<h2>Roadmap</h2>
					<p>
						<?php
							$root = realpath($_SERVER["DOCUMENT_ROOT"]); 
							$roadmapFile = $root . "/music/Yells/roadmap.txt";
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
							$revisionsFile = $root . "/music/Yells/revisions.txt";
							$handler = fopen($revisionsFile, 'r');
							$revisions = fread($handler, filesize($revisionsFile));
							echo $revisions;
						?>
					</p>