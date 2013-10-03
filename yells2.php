					<h1>Yells 2.0</h1>
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
								<td class="pdf"><a href="/music/Yells%202.0/pdf/AltoSax.pdf" target="_blank">Click Here</a></td>
								<td class="jpeg"><a href="/music/Yells%202.0/jpg/AltoSax.jpg" target="_blank">Click Here</a></td>
							</tr>
							<tr class="even">
								<td>Bari Sax</td>
								<td class="pdf"><a href="/music/Yells%202.0/pdf/BariSax.pdf" target="_blank">Click Here</a></td>
								<td class="jpeg"><a href="/music/Yells%202.0/jpg/BariSax.jpg" target="_blank">Click Here</a></td>
							</tr>
							<tr class="odd">
								<td>Clarinet</td>
								<td class="pdf"><a href="/music/Yells%202.0/pdf/Clarinet.pdf" target="_blank">Click Here</a></td>
								<td class="jpeg"><a href="/music/Yells%202.0/jpg/Clarinet.jpg" target="_blank">Click Here</a></td>
							</tr>
							<tr class="even">
								<td>Flute</td>
								<td class="pdf"><a href="/music/Yells%202.0/pdf/Flute.pdf" target="_blank">Click Here</a></td>
								<td class="jpeg"><a href="/music/Yells%202.0/jpg/Flute.jpg" target="_blank">Click Here</a></td>
							</tr>
							<tr class="odd">
								<td>Horn in F</td>
								<td class="pdf"><a href="/music/Yells%202.0/pdf/Horn-F.pdf" target="_blank">Click Here</a></td>
								<td class="jpeg"><a href="/music/Yells%202.0/jpg/Horn-F.jpg" target="_blank">Click Here</a></td>
							</tr>
							<tr class="even">
								<td>Percussion - Bass Drums</td>
								<td class="pdf"><a href="/music/Yells%202.0/pdf/Percussion-BassDrums.pdf" target="_blank">Click Here</a></td>
								<td class="jpeg"><a href="/music/Yells%202.0/jpg/Percussion-BassDrums.jpg" target="_blank">Click Here</a></td>
							</tr>
							<tr class="odd">
								<td>Percussion - Cymbals</td>
								<td class="pdf"><a href="/music/Yells%202.0/pdf/Percussion-Cymbals.pdf" target="_blank">Click Here</a></td>
								<td class="jpeg"><a href="/music/Yells%202.0/jpg/Percussion-Cymbals.jpg" target="_blank">Click Here</a></td>
							</tr>
							<tr class="even">
								<td>Percussion - Quad Toms - Page 1</td>
								<td class="pdf"><a href="/music/Yells%202.0/pdf/Percussion-QuadToms.pdf" target="_blank">Click Here</a></td>
								<td class="jpeg"><a href="/music/Yells%202.0/jpg/Percussion-QuadToms-1.jpg" target="_blank">Click Here</a></td>
							</tr>
							<tr class="odd">
								<td>Percussion - Quad Toms - Page 2</td>
								<td class="pdf"><a href="/music/Yells%202.0/pdf/Percussion-QuadToms.pdf" target="_blank">Click Here</a></td>
								<td class="jpeg"><a href="/music/Yells%202.0/jpg/Percussion-QuadToms-2.jpg" target="_blank">Click Here</a></td>
							</tr>
							<tr class="even">
								<td>Percussion - Snare Drum</td>
								<td class="pdf"><a href="/music/Yells%202.0/pdf/Percussion-SnareDrum.pdf" target="_blank">Click Here</a></td>
								<td class="jpeg"><a href="/music/Yells%202.0/jpg/Percussion-SnareDrum.jpg" target="_blank">Click Here</a></td>
							</tr>
							<tr class="odd">
								<td>Tenor Sax</td>
								<td class="pdf"><a href="/music/Yells%202.0/pdf/TenorSax.pdf" target="_blank">Click Here</a></td>
								<td class="jpeg"><a href="/music/Yells%202.0/jpg/TenorSax.jpg" target="_blank">Click Here</a></td>
							</tr>
							<tr class="even">
								<td>Trombone</td>
								<td class="pdf"><a href="/music/Yells%202.0/pdf/Trombone.pdf" target="_blank">Click Here</a></td>
								<td class="jpeg"><a href="/music/Yells%202.0/jpg/Trombone.jpg" target="_blank">Click Here</a></td>
							</tr>
							<tr class="odd">
								<td>Trumpet</td>
								<td class="pdf"><a href="/music/Yells%202.0/pdf/Trumpet.pdf" target="_blank">Click Here</a></td>
								<td class="jpeg"><a href="/music/Yells%202.0/jpg/Trumpet.jpg" target="_blank">Click Here</a></td>
							</tr>
							<tr class="even">
								<td>Tuba</td>
								<td class="pdf"><a href="/music/Yells%202.0/pdf/Tuba.pdf" target="_blank">Click Here</a></td>
								<td class="jpeg"><a href="/music/Yells%202.0/jpg/Tuba.jpg" target="_blank">Click Here</a></td>
							</tr>	
						</tbody>		
					</table>
					
					<h2>Roadmap</h2>
					<p>
						<?php
							$root = realpath($_SERVER["DOCUMENT_ROOT"]); 
							$roadmapFile = $root . "/music/Yells 2.0/roadmap.txt";
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
							$revisionsFile = $root . "/music/Yells 2.0/revisions.txt";
							$handler = fopen($revisionsFile, 'r');
							$revisions = fread($handler, filesize($revisionsFile));
							echo $revisions;
						?>
					</p>