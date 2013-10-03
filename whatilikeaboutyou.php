					<h1>What I Like About You</h1>
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
							<td class="pdf"><a href="/music/What%20I%20Like%20About%20You/pdf/AltoSax.pdf" target="_blank">Click Here</a></td>
							<td class="jpeg"><a href="/music/What%20I%20Like%20About%20You/jpg/AltoSax.jpg" target="_blank">Click Here</a></td>
						</tr>
						<tr class="even">
							<td>Bari Sax</td>
							<td class="pdf"><a href="/music/What%20I%20Like%20About%20You/pdf/BariSax.pdf" target="_blank">Click Here</a></td>
							<td class="jpeg"><a href="/music/What%20I%20Like%20About%20You/jpg/BariSax.jpg" target="_blank">Click Here</a></td>
						</tr>
						<tr class="odd">
							<td>Clarinet</td>
							<td class="pdf"><a href="/music/What%20I%20Like%20About%20You/pdf/Clarinet.pdf" target="_blank">Click Here</a></td>
							<td class="jpeg"><a href="/music/What%20I%20Like%20About%20You/jpg/Clarinet.jpg" target="_blank">Click Here</a></td>
						</tr>
						<tr class="even">
							<td>Flute</td>
							<td class="pdf"><a href="/music/What%20I%20Like%20About%20You/pdf/Flute.pdf" target="_blank">Click Here</a></td>
							<td class="jpeg"><a href="/music/What%20I%20Like%20About%20You/jpg/Flute.jpg" target="_blank">Click Here</a></td>
						</tr>
						<tr class="odd">
							<td>Horn in F</td>
							<td class="pdf"><a href="/music/What%20I%20Like%20About%20You/pdf/Horn-F.pdf" target="_blank">Click Here</a></td>
							<td class="jpeg"><a href="/music/What%20I%20Like%20About%20You/jpg/Horn-F.jpg" target="_blank">Click Here</a></td>
						</tr>
						<tr class="even">
							<td>Percussion - Bass Drums</td>
							<td class="pdf"><a href="/music/What%20I%20Like%20About%20You/pdf/Percussion-BassDrums.pdf" target="_blank">Click Here</a></td>
							<td class="jpeg"><a href="/music/What%20I%20Like%20About%20You/jpg/Percussion-BassDrums.jpg" target="_blank">Click Here</a></td>
						</tr>
						<tr class="odd">
							<td>Percussion - Quad Toms</td>
							<td class="pdf"><a href="/music/What%20I%20Like%20About%20You/pdf/Percussion-QuadToms.pdf" target="_blank">Click Here</a></td>
							<td class="jpeg"><a href="/music/What%20I%20Like%20About%20You/jpg/Percussion-QuadToms.jpg" target="_blank">Click Here</a></td>
						</tr>
						<tr class="even">
							<td>Percussion - Snare Drum</td>
							<td class="pdf"><a href="/music/What%20I%20Like%20About%20You/pdf/Percussion-SnareDrum.pdf" target="_blank">Click Here</a></td>
							<td class="jpeg"><a href="/music/What%20I%20Like%20About%20You/jpg/Percussion-SnareDrum.jpg" target="_blank">Click Here</a></td>
						</tr>
						<tr class="odd">
							<td>Tenor Sax</td>
							<td class="pdf"><a href="/music/What%20I%20Like%20About%20You/pdf/TenorSax.pdf" target="_blank">Click Here</a></td>
							<td class="jpeg"><a href="/music/What%20I%20Like%20About%20You/jpg/TenorSax.jpg" target="_blank">Click Here</a></td>
						</tr>
						<tr class="even">
							<td>Trombone</td>
							<td class="pdf"><a href="/music/What%20I%20Like%20About%20You/pdf/Trombone.pdf" target="_blank">Click Here</a></td>
							<td class="jpeg"><a href="/music/What%20I%20Like%20About%20You/jpg/Trombone.jpg" target="_blank">Click Here</a></td>
						</tr>
						<tr class="odd">
							<td>Trumpet 1</td>
							<td class="pdf"><a href="/music/What%20I%20Like%20About%20You/pdf/Trumpet-1.pdf" target="_blank">Click Here</a></td>
							<td class="jpeg"><a href="/music/What%20I%20Like%20About%20You/jpg/Trumpet-1.jpg" target="_blank">Click Here</a></td>
						</tr>
						<tr class="even">
							<td>Trumpet 2</td>
							<td class="pdf"><a href="/music/What%20I%20Like%20About%20You/pdf/Trumpet-2.pdf" target="_blank">Click Here</a></td>
							<td class="jpeg"><a href="/music/What%20I%20Like%20About%20You/jpg/Trumpet-2.jpg" target="_blank">Click Here</a></td>
						</tr>
						<tr class="odd">
							<td>Trumpet 3</td>
							<td class="pdf"><a href="/music/What%20I%20Like%20About%20You/pdf/Trumpet-3.pdf" target="_blank">Click Here</a></td>
							<td class="jpeg"><a href="/music/What%20I%20Like%20About%20You/jpg/Trumpet-3.jpg" target="_blank">Click Here</a></td>
						</tr>
						<tr class="even">
							<td>Tuba</td>
							<td class="pdf"><a href="/music/What%20I%20Like%20About%20You/pdf/Tuba.pdf" target="_blank">Click Here</a></td>
							<td class="jpeg"><a href="/music/What%20I%20Like%20About%20You/jpg/Tuba.jpg" target="_blank">Click Here</a></td>
						</tr>			
					</table>
					
					<h2>Roadmap</h2>
					<p>
						<?php
							$root = realpath($_SERVER["DOCUMENT_ROOT"]); 
							$roadmapFile = $root . "/music/What I Like About You/roadmap.txt";
							$handler = fopen($roadmapFile, 'r');
							$roadmap = fread($handler, filesize($roadmapFile));
							echo $roadmap;
						?>
					</p>
					
					<h2>Recordings / Media</h2>
					<h3>Original Recording</h3>
					<a href="/music/What%20I%20Like%20About%20You/What%20I%20Like%20About%20You%20(arr%20Michael%20Sweeney).mp3" title="Download MP3">Download MP3</a>
									
					<h2>Revisions</h2>
					<p>
						<?php
							$root = realpath($_SERVER["DOCUMENT_ROOT"]); 
							$revisionsFile = $root . "/music/What I Like About You/revisions.txt";
							$handler = fopen($revisionsFile, 'r');
							$revisions = fread($handler, filesize($revisionsFile));
							echo $revisions;
						?>
					</p>
