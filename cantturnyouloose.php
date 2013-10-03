					<h1>Can't Turn You Loose</h1>
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
								<td class="pdf"><a href="/music/Can't%20Turn%20You%20Loose/pdf/AltoSax.pdf" target="_blank">Click Here</a></td>
								<td class="jpeg"><a href="/music/Can't%20Turn%20You%20Loose/jpg/AltoSax.jpg" target="_blank">Click Here</a></td>
							</tr>
							<tr class="even">
								<td>Bari Sax</td>
								<td class="pdf"><a href="/music/Can't%20Turn%20You%20Loose/pdf/BariSax.pdf" target="_blank">Click Here</a></td>
								<td class="jpeg"><a href="/music/Can't%20Turn%20You%20Loose/jpg/BariSax.jpg" target="_blank">Click Here</a></td>
							</tr>
							<tr class="odd">
								<td>Clarinet</td>
								<td class="pdf"><a href="/music/Can't%20Turn%20You%20Loose/pdf/Clarinet.pdf" target="_blank">Click Here</a></td>
								<td class="jpeg"><a href="/music/Can't%20Turn%20You%20Loose/jpg/Clarinet.jpg" target="_blank">Click Here</a></td>
							</tr>
							<tr class="even">
								<td>Flute</td>
								<td class="pdf"><a href="/music/Can't%20Turn%20You%20Loose/pdf/Flute.pdf" target="_blank">Click Here</a></td>
								<td class="jpeg"><a href="/music/Can't%20Turn%20You%20Loose/jpg/Flute.jpg" target="_blank">Click Here</a></td>
							</tr>
							<tr class="odd">
								<td>Horn in F</td>
								<td class="pdf"><a href="/music/Can't%20Turn%20You%20Loose/pdf/Horn-F.pdf" target="_blank">Click Here</a></td>
								<td class="jpeg"><a href="/music/Can't%20Turn%20You%20Loose/jpg/Horn-F.jpg" target="_blank">Click Here</a></td>
							</tr>
							<tr class="even">
								<td>Percussion - Snare Drum</td>
								<td class="pdf"><a href="/music/Can't%20Turn%20You%20Loose/pdf/Percussion-SnareDrum.pdf" target="_blank">Click Here</a></td>
								<td class="jpeg"><a href="/music/Can't%20Turn%20You%20Loose/jpg/Percussion-SnareDrum.jpg" target="_blank">Click Here</a></td>
							</tr>
							<tr class="odd">
								<td>Rhythm - Electric Bass</td>
								<td class="pdf"><a href="/music/Can't%20Turn%20You%20Loose/pdf/Rhythm-ElectricBass.pdf" target="_blank">Click Here</a></td>
								<td class="jpeg"><a href="/music/Can't%20Turn%20You%20Loose/jpg/Rhythm-ElectricBass.jpg" target="_blank">Click Here</a></td>
							</tr>
							<tr class="even">
								<td>Rhythm - Electric Guitar</td>
								<td class="pdf"><a href="/music/Can't%20Turn%20You%20Loose/pdf/Rhythm-ElectricGuitar.pdf" target="_blank">Click Here</a></td>
								<td class="jpeg"><a href="/music/Can't%20Turn%20You%20Loose/jpg/Rhythm-ElectricGuitar.jpg" target="_blank">Click Here</a></td>
							</tr>
							<tr class="odd">
								<td>Rhythm - Keyboards</td>
								<td class="pdf"><a href="/music/Can't%20Turn%20You%20Loose/pdf/Rhythm-Keyboards.pdf" target="_blank">Click Here</a></td>
								<td class="jpeg"><a href="/music/Can't%20Turn%20You%20Loose/jpg/Rhythm-Keyboards.jpg" target="_blank">Click Here</a></td>
							</tr>
							<tr class="even">
								<td>Tenor Sax</td>
								<td class="pdf"><a href="/music/Can't%20Turn%20You%20Loose/pdf/TenorSax.pdf" target="_blank">Click Here</a></td>
								<td class="jpeg"><a href="/music/Can't%20Turn%20You%20Loose/jpg/TenorSax.jpg" target="_blank">Click Here</a></td>
							</tr>
							<tr class="odd">
								<td>Trombone</td>
								<td class="pdf"><a href="/music/Can't%20Turn%20You%20Loose/pdf/Trombone.pdf" target="_blank">Click Here</a></td>
								<td class="jpeg"><a href="/music/Can't%20Turn%20You%20Loose/jpg/Trombone.jpg" target="_blank">Click Here</a></td>
							</tr>
							<tr class="even">
								<td>Trumpet</td>
								<td class="pdf"><a href="/music/Can't%20Turn%20You%20Loose/pdf/Trumpet.pdf" target="_blank">Click Here</a></td>
								<td class="jpeg"><a href="/music/Can't%20Turn%20You%20Loose/jpg/Trumpet.jpg" target="_blank">Click Here</a></td>
							</tr>
							<tr class="odd">
								<td>Tuba</td>
								<td class="pdf"><a href="/music/Can't%20Turn%20You%20Loose/pdf/Tuba.pdf" target="_blank">Click Here</a></td>
								<td class="jpeg"><a href="/music/Can't%20Turn%20You%20Loose/jpg/Tuba.jpg" target="_blank">Click Here</a></td>
							</tr>
						</tbody>			
					</table>
					
					<h2>Roadmap</h2>
					<p>
						<?php
							$root = realpath($_SERVER["DOCUMENT_ROOT"]); 
							$roadmapFile = $root . "/music/Can't Turn You Loose/roadmap.txt";
							$handler = fopen($roadmapFile, 'r');
							$roadmap = fread($handler, filesize($roadmapFile));
							echo $roadmap;
						?>
					</p>
					
					<h2>Recordings / Media</h2>
					<h3>ImageRIT 2012</h3>
					<div class="flex-video">
						<iframe width="420" height="315" src="https://www.youtube.com/embed/hegAi_o9d9E?rel=0" frameborder="0" allowfullscreen></iframe>
					</div>
				
					<h2>Revisions</h2>
					<p>
						<?php
							$root = realpath($_SERVER["DOCUMENT_ROOT"]); 
							$revisionsFile = $root . "/music/Can't Turn You Loose/revisions.txt";
							$handler = fopen($revisionsFile, 'r');
							$revisions = fread($handler, filesize($revisionsFile));
							echo $revisions;
						?>
					</p>