					<h1>Wooly Bully</h1>
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
								<td class="pdf"><a href="/music/Wooly%20Bully/pdf/AltoSax.pdf" target="_blank">Click Here</a></td>
								<td class="jpeg"><a href="/music/Wooly%20Bully/jpg/AltoSax.jpg" target="_blank">Click Here</a></td>
							</tr>
							<tr class="even">
								<td>Bari Sax</td>
								<td class="pdf"><a href="/music/Wooly%20Bully/pdf/BariSax.pdf" target="_blank">Click Here</a></td>
								<td class="jpeg"><a href="/music/Wooly%20Bully/jpg/BariSax.jpg" target="_blank">Click Here</a></td>
							</tr>
							<tr class="odd">
								<td>Clarinet</td>
								<td class="pdf"><a href="/music/Wooly%20Bully/pdf/Clarinet.pdf" target="_blank">Click Here</a></td>
								<td class="jpeg"><a href="/music/Wooly%20Bully/jpg/Clarinet.jpg" target="_blank">Click Here</a></td>
							</tr>
							<tr class="even">
								<td>Flute</td>
								<td class="pdf"><a href="/music/Wooly%20Bully/pdf/Flute.pdf" target="_blank">Click Here</a></td>
								<td class="jpeg"><a href="/music/Wooly%20Bully/jpg/Flute.jpg" target="_blank">Click Here</a></td>
							</tr>
							<tr class="odd">
								<td>Horn in F</td>
								<td class="pdf"><a href="/music/Wooly%20Bully/pdf/Horn-F.pdf" target="_blank">Click Here</a></td>
								<td class="jpeg"><a href="/music/Wooly%20Bully/jpg/Horn-F.jpg" target="_blank">Click Here</a></td>
							</tr>
							<tr class="even">
								<td>Percussion - Bass Drums</td>
								<td class="pdf"><a href="/music/Wooly%20Bully/pdf/Percussion-BassDrum.pdf" target="_blank">Click Here</a></td>
								<td class="jpeg"><a href="/music/Wooly%20Bully/jpg/Percussion-BassDrum.jpg" target="_blank">Click Here</a></td>
							</tr>
							<tr class="odd">
								<td>Percussion - Cymbals</td>
								<td class="pdf"><a href="/music/Wooly%20Bully/pdf/Percussion-Cymbals.pdf" target="_blank">Click Here</a></td>
								<td class="jpeg"><a href="/music/Wooly%20Bully/jpg/Percussion-Cymbals.jpg" target="_blank">Click Here</a></td>
							</tr>
							<tr class="even">
								<td>Percussion - Quad Toms</td>
								<td class="pdf"><a href="/music/Wooly%20Bully/pdf/Percussion-QuadToms.pdf" target="_blank">Click Here</a></td>
								<td class="jpeg"><a href="/music/Wooly%20Bully/jpg/Percussion-QuadToms.jpg" target="_blank">Click Here</a></td>
							</tr>
							<tr class="odd">
								<td>Percussion - Snare Drum</td>
								<td class="pdf"><a href="/music/Wooly%20Bully/pdf/Percussion-SnareDrum.pdf" target="_blank">Click Here</a></td>
								<td class="jpeg"><a href="/music/Wooly%20Bully/jpg/Percussion-SnareDrum.jpg" target="_blank">Click Here</a></td>
							</tr>
							<tr class="even">
								<td>Tenor Sax</td>
								<td class="pdf"><a href="/music/Wooly%20Bully/pdf/TenorSax.pdf" target="_blank">Click Here</a></td>
								<td class="jpeg"><a href="/music/Wooly%20Bully/jpg/TenorSax.jpg" target="_blank">Click Here</a></td>
							</tr>
							<tr class="odd">
								<td>Trombone</td>
								<td class="pdf"><a href="/music/Wooly%20Bully/pdf/Trombone.pdf" target="_blank">Click Here</a></td>
								<td class="jpeg"><a href="/music/Wooly%20Bully/jpg/Trombone.jpg" target="_blank">Click Here</a></td>
							</tr>
							<tr class="even">
								<td>Trumpet 1</td>
								<td class="pdf"><a href="/music/Wooly%20Bully/pdf/Trumpet-1.pdf" target="_blank">Click Here</a></td>
								<td class="jpeg"><a href="/music/Wooly%20Bully/jpg/Trumpet-1.jpg" target="_blank">Click Here</a></td>
							</tr>
							<tr class="odd">
								<td>Trumpet 2</td>
								<td class="pdf"><a href="/music/Wooly%20Bully/pdf/Trumpet-2.pdf" target="_blank">Click Here</a></td>
								<td class="jpeg"><a href="/music/Wooly%20Bully/jpg/Trumpet-2.jpg" target="_blank">Click Here</a></td>
							</tr>
							<tr class="even">
								<td>Tuba</td>
								<td class="pdf"><a href="/music/Wooly%20Bully/pdf/Tuba.pdf" target="_blank">Click Here</a></td>
								<td class="jpeg"><a href="/music/Wooly%20Bully/jpg/Tuba.jpg" target="_blank">Click Here</a></td>
							</tr>
						</tbody>			
					</table>
					
					<h2>Roadmap</h2>
					<p>
						<?php
							$root = realpath($_SERVER["DOCUMENT_ROOT"]); 
							$roadmapFile = $root . "/music/Wooly Bully/roadmap.txt";
							$handler = fopen($roadmapFile, 'r');
							$roadmap = fread($handler, filesize($roadmapFile));
							echo $roadmap;
						?>
					</p>
					
					<h2>Recordings / Media</h2>
					<h3>Original Recording</h3>
					<a href="/music/Wooly%20Bully/Wooly%20Bully%20(arr%20Doug%20Adams).mp3" title="Download MP3">Download MP3</a>
									
					<h2>Revisions</h2>
					<p>
						<?php
							$root = realpath($_SERVER["DOCUMENT_ROOT"]); 
							$revisionsFile = $root . "/music/Wooly Bully/revisions.txt";
							$handler = fopen($revisionsFile, 'r');
							$revisions = fread($handler, filesize($revisionsFile));
							echo $revisions;
						?>
					</p>
