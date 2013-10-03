					<h1>Looney Tunes Theme</h1>
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
								<td class="pdf"><a href="/music/Looney%20Tunes%20Theme/pdf/AltoSax.pdf" target="_blank">Click Here</a></td>
								<td class="jpeg"><a href="/music/Looney%20Tunes%20Theme/jpg/AltoSax.jpg" target="_blank">Click Here</a></td>
							</tr>
							<tr class="even">
								<td>Bari Sax</td>
								<td class="pdf"><a href="/music/Looney%20Tunes%20Theme/pdf/BariSax.pdf" target="_blank">Click Here</a></td>
								<td class="jpeg"><a href="/music/Looney%20Tunes%20Theme/jpg/BariSax.jpg" target="_blank">Click Here</a></td>
							</tr>
							<tr class="odd">
								<td>Clarinet</td>
								<td class="pdf"><a href="/music/Looney%20Tunes%20Theme/pdf/Clarinet.pdf" target="_blank">Click Here</a></td>
								<td class="jpeg"><a href="/music/Looney%20Tunes%20Theme/jpg/Clarinet.jpg" target="_blank">Click Here</a></td>
							</tr>
							<tr class="even">
								<td>Flute</td>
								<td class="pdf"><a href="/music/Looney%20Tunes%20Theme/pdf/Flute.pdf" target="_blank">Click Here</a></td>
								<td class="jpeg"><a href="/music/Looney%20Tunes%20Theme/jpg/Flute.jpg" target="_blank">Click Here</a></td>
							</tr>
							<tr class="odd">
								<td>Horn</td>
								<td class="pdf"><a href="/music/Looney%20Tunes%20Theme/pdf/Horn-F.pdf" target="_blank">Click Here</a></td>
								<td class="jpeg"><a href="/music/Looney%20Tunes%20Theme/jpg/Horn-F.jpg" target="_blank">Click Here</a></td>
							</tr>
							<tr class="even">
								<td>Tenor Sax</td>
								<td class="pdf"><a href="/music/Looney%20Tunes%20Theme/pdf/TenorSax.pdf" target="_blank">Click Here</a></td>
								<td class="jpeg"><a href="/music/Looney%20Tunes%20Theme/jpg/TenorSax.jpg" target="_blank">Click Here</a></td>
							</tr>
							<tr class="odd">
								<td>Trombone</td>
								<td class="pdf"><a href="/music/Looney%20Tunes%20Theme/pdf/Trombone.pdf" target="_blank">Click Here</a></td>
								<td class="jpeg"><a href="/music/Looney%20Tunes%20Theme/jpg/Trombone.jpg" target="_blank">Click Here</a></td>
							</tr>
							<tr class="even">
								<td>Trumpet</td>
								<td class="pdf"><a href="/music/Looney%20Tunes%20Theme/pdf/Trumpet.pdf" target="_blank">Click Here</a></td>
								<td class="jpeg"><a href="/music/Looney%20Tunes%20Theme/jpg/Trumpet.jpg" target="_blank">Click Here</a></td>
							</tr>
							<tr class="odd">
								<td>Tuba</td>
								<td class="pdf"><a href="/music/Looney%20Tunes%20Theme/pdf/Tuba.pdf" target="_blank">Click Here</a></td>
								<td class="jpeg"><a href="/music/Looney%20Tunes%20Theme/jpg/Tuba.jpg" target="_blank">Click Here</a></td>
							</tr>
						</tbody>			
					</table>
					
					<h2>Roadmap</h2>
					<p>
						<?php 
							$root = realpath($_SERVER["DOCUMENT_ROOT"]);
							$roadmapFile = $root . "/music/Looney Tunes Theme/roadmap.txt";
							$handler = fopen($roadmapFile, 'r');
							$roadmap = fread($handler, filesize($roadmapFile));
							echo $roadmap;
						?>
					</p>
					
					<h2>Recordings / Media</h2>
					<h3>Original Recording</h3>
					<a title="Download MP3" href="/music/Looney%20Tunes%20Theme/Looney%20Tunes%20Theme.mp3">Download MP3</a>
									
					<h2>Revisions</h2>
					<p>
						<?php
							$root = realpath($_SERVER["DOCUMENT_ROOT"]);						
							$revisionsFile = $root . "/music/Looney Tunes Theme/revisions.txt";
							$handler = fopen($revisionsFile, 'r');
							$revisions = fread($handler, filesize($revisionsFile));
							echo $revisions;
						?>
					</p>