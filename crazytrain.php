					<h1>Crazy Train</h1>
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
							<td class="pdf"><a href="/music/Crazy%20Train/pdf/AltoSax.pdf" target="_blank">Click Here</a></td>
							<td class="jpeg"><a href="/music/Crazy%20Train/jpg/AltoSax.jpg" target="_blank">Click Here</a></td>
						</tr>
						<tr class="even">
							<td>Bari Sax</td>
							<td class="pdf"><a href="/music/Crazy%20Train/pdf/BariSax.pdf" target="_blank">Click Here</a></td>
							<td class="jpeg"><a href="/music/Crazy%20Train/jpg/BariSax.jpg" target="_blank">Click Here</a></td>
						</tr>
						<tr class="odd">
							<td>Clarinet</td>
							<td class="pdf"><a href="/music/Crazy%20Train/pdf/Clarinet.pdf" target="_blank">Click Here</a></td>
							<td class="jpeg"><a href="/music/Crazy%20Train/jpg/Clarinet.jpg" target="_blank">Click Here</a></td>
						</tr>
						<tr class="even">
							<td>Flute</td>
							<td class="pdf"><a href="/music/Crazy%20Train/pdf/Flute.pdf" target="_blank">Click Here</a></td>
							<td class="jpeg"><a href="/music/Crazy%20Train/jpg/Flute.jpg" target="_blank">Click Here</a></td>
						</tr>
						<tr class="odd">
							<td>Horn in F</td>
							<td class="pdf"><a href="/music/Crazy%20Train/pdf/Horn-F.pdf" target="_blank">Click Here</a></td>
							<td class="jpeg"><a href="/music/Crazy%20Train/jpg/Horn-F.jpg" target="_blank">Click Here</a></td>
						</tr>
						<tr class="even">
							<td>Percussion - Bass Drums</td>
							<td class="pdf"><a href="/music/Crazy%20Train/pdf/Percussion-BassDrum.pdf" target="_blank">Click Here</a></td>
							<td class="jpeg"><a href="/music/Crazy%20Train/jpg/Percussion-BassDrum.jpg" target="_blank">Click Here</a></td>
						</tr>
						<tr class="odd">
							<td>Percussion - Bells</td>
							<td class="pdf"><a href="/music/Crazy%20Train/pdf/Percussion-Bells.pdf" target="_blank">Click Here</a></td>
							<td class="jpeg"><a href="/music/Crazy%20Train/jpg/Percussion-Bells.jpg" target="_blank">Click Here</a></td>
						</tr>
						<tr class="even">
							<td>Percussion - Cymbals</td>
							<td class="pdf"><a href="/music/Crazy%20Train/pdf/Percussion-Cymbals.pdf" target="_blank">Click Here</a></td>
							<td class="jpeg"><a href="/music/Crazy%20Train/jpg/Percussion-Cymbals.jpg" target="_blank">Click Here</a></td>
						</tr>
						<tr class="odd">
							<td>Percussion - Quad Toms</td>
							<td class="pdf"><a href="/music/Crazy%20Train/pdf/Percussion-QuadToms.pdf" target="_blank">Click Here</a></td>
							<td class="jpeg"><a href="/music/Crazy%20Train/jpg/Percussion-QuadToms.jpg" target="_blank">Click Here</a></td>
						</tr>
						<tr class="even">
							<td>Percussion - Snare Drum</td>
							<td class="pdf"><a href="/music/Crazy%20Train/pdf/Percussion-SnareDrum.pdf" target="_blank">Click Here</a></td>
							<td class="jpeg"><a href="/music/Crazy%20Train/jpg/Percussion-SnareDrum.jpg" target="_blank">Click Here</a></td>
						</tr>
						<tr class="odd">
							<td>Tenor Sax</td>
							<td class="pdf"><a href="/music/Crazy%20Train/pdf/TenorSax.pdf" target="_blank">Click Here</a></td>
							<td class="jpeg"><a href="/music/Crazy%20Train/jpg/TenorSax.jpg" target="_blank">Click Here</a></td>
						</tr>
						<tr class="even">
							<td>Trombone 1</td>
							<td class="pdf"><a href="/music/Crazy%20Train/pdf/Trombone-1.pdf" target="_blank">Click Here</a></td>
							<td class="jpeg"><a href="/music/Crazy%20Train/jpg/Trombone-1.jpg" target="_blank">Click Here</a></td>
						</tr>
						<tr class="odd">
							<td>Trombone 2</td>
							<td class="pdf"><a href="/music/Crazy%20Train/pdf/Trombone-2.pdf" target="_blank">Click Here</a></td>
							<td class="jpeg"><a href="/music/Crazy%20Train/jpg/Trombone-2.jpg" target="_blank">Click Here</a></td>
						</tr>
						<tr class="even">
							<td>Trumpet 1</td>
							<td class="pdf"><a href="/music/Crazy%20Train/pdf/Trumpet-1.pdf" target="_blank">Click Here</a></td>
							<td class="jpeg"><a href="/music/Crazy%20Train/jpg/Trumpet-1.jpg" target="_blank">Click Here</a></td>
						</tr>
						<tr class="odd">
							<td>Trumpet 2</td>
							<td class="pdf"><a href="/music/Crazy%20Train/pdf/Trumpet-2.pdf" target="_blank">Click Here</a></td>
							<td class="jpeg"><a href="/music/Crazy%20Train/jpg/Trumpet-2.jpg" target="_blank">Click Here</a></td>
						</tr>
						<tr class="even">
							<td>Trumpet 3</td>
							<td class="pdf"><a href="/music/Crazy%20Train/pdf/Trumpet-3.pdf" target="_blank">Click Here</a></td>
							<td class="jpeg"><a href="/music/Crazy%20Train/jpg/Trumpet-3.jpg" target="_blank">Click Here</a></td>
						</tr>
						<tr class="odd">
							<td>Tuba</td>
							<td class="pdf"><a href="/music/Crazy%20Train/pdf/Tuba.pdf" target="_blank">Click Here</a></td>
							<td class="jpeg"><a href="/music/Crazy%20Train/jpg/Tuba.jpg" target="_blank">Click Here</a></td>
						</tr>			
					</table>
					
					<h2>Roadmap</h2>
					<p>
						<?php
							$root = realpath($_SERVER["DOCUMENT_ROOT"]); 
							$roadmapFile = $root . "/music/Crazy Train/roadmap.txt";
							$handler = fopen($roadmapFile, 'r');
							$roadmap = fread($handler, filesize($roadmapFile));
							echo $roadmap;
						?>
					</p>
					
					<h2>Recordings / Media</h2>
					<h3>2011/2012 Recording</h3>
					<a href="/audio/2012%20-%20Crazy%20Train.mp3" title="Download MP3">Download MP3</a>
					<h3>Original Recording</h3>
					<a href="/music/Crazy%20Train/Crazy%20Train%20(arr%20Paul%20Murtha).mp3" title="Download MP3">Download MP3</a>
									
					<h2>Revisions</h2>
					<p>
						<?php
							$root = realpath($_SERVER["DOCUMENT_ROOT"]); 
							$revisionsFile = $root . "/music/Crazy Train/revisions.txt";
							$handler = fopen($revisionsFile, 'r');
							$revisions = fread($handler, filesize($revisionsFile));
							echo $revisions;
						?>
					</p>