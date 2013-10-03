					<h1>Holiday</h1>
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
								<td class="pdf"><a href="/music/Holiday/pdf/AltoSax-1.pdf" target="_blank">Click Here</a></td>
								<td class="jpeg"><a href="/music/Holiday/jpg/AltoSax-1.jpg" target="_blank">Click Here</a></td>
							</tr>	
							<tr class="even">
								<td>Alto Sax 2</td>
								<td class="pdf"><a href="/music/Holiday/pdf/AltoSax-2.pdf" target="_blank">Click Here</a></td>
								<td class="jpeg"><a href="/music/Holiday/jpg/AltoSax-2.jpg" target="_blank">Click Here</a></td>
							</tr>	
							<tr class="odd">
								<td>Clarinet 1</td>
								<td class="pdf"><a href="/music/Holiday/pdf/Clarinet-1.pdf" target="_blank">Click Here</a></td>
								<td class="jpeg"><a href="/music/Holiday/jpg/Clarinet-1.jpg" target="_blank">Click Here</a></td>
							</tr>
							<tr class="even">
								<td>Clarinet 2</td>
								<td class="pdf"><a href="/music/Holiday/pdf/Clarinet-2.pdf" target="_blank">Click Here</a></td>
								<td class="jpeg"><a href="/music/Holiday/jpg/Clarinet-2.jpg" target="_blank">Click Here</a></td>
							</tr>
							<tr class="odd">
								<td>Flute 1</td>
								<td class="pdf"><a href="/music/Holiday/pdf/Flute-1.pdf" target="_blank">Click Here</a></td>
								<td class="jpeg"><a href="/music/Holiday/jpg/Flute-1.jpg" target="_blank">Click Here</a></td>
							</tr>
							<tr class="even">
								<td>Flute 2</td>
								<td class="pdf"><a href="/music/Holiday/pdf/Flute-2.pdf" target="_blank">Click Here</a></td>
								<td class="jpeg"><a href="/music/Holiday/jpg/Flute-2.jpg" target="_blank">Click Here</a></td>
							</tr>
							<tr class="odd">
								<td>Horn in F</td>
								<td class="pdf"><a href="/music/Holiday/pdf/Horn-F.pdf" target="_blank">Click Here</a></td>
								<td class="jpeg"><a href="/music/Holiday/jpg/Horn-F.jpg" target="_blank">Click Here</a></td>
							</tr>
							<tr class="even">
								<td>Percussion - Bass Drums</td>
								<td class="pdf"><a href="/music/Holiday/pdf/Percussion-BassDrums.pdf" target="_blank">Click Here</a></td>
								<td class="jpeg"><a href="/music/Holiday/jpg/Percussion-BassDrums.jpg" target="_blank">Click Here</a></td>
							</tr>
							<tr class="odd">
								<td>Percussion - Cymbals</td>
								<td class="pdf"><a href="/music/Holiday/pdf/Percussion-Cymbals.pdf" target="_blank">Click Here</a></td>
								<td class="jpeg"><a href="/music/Holiday/jpg/Percussion-Cymbals.jpg" target="_blank">Click Here</a></td>
							</tr>
							<tr class="even">
								<td>Percussion - Quad Toms</td>
								<td class="pdf"><a href="/music/Holiday/pdf/Percussion-QuadToms.pdf" target="_blank">Click Here</a></td>
								<td class="jpeg"><a href="/music/Holiday/jpg/Percussion-QuadToms.jpg" target="_blank">Click Here</a></td>
							</tr>
							<tr class="odd">
								<td>Percussion - Snare Drum</td>
								<td class="pdf"><a href="/music/Holiday/pdf/Percussion-SnareDrum.pdf" target="_blank">Click Here</a></td>
								<td class="jpeg"><a href="/music/Holiday/jpg/Percussion-SnareDrum.jpg" target="_blank">Click Here</a></td>
							</tr>
							<tr class="even">
								<td>Tenor Sax</td>
								<td class="pdf"><a href="/music/Holiday/pdf/TenorSax.pdf" target="_blank">Click Here</a></td>
								<td class="jpeg"><a href="/music/Holiday/jpg/TenorSax.jpg" target="_blank">Click Here</a></td>
							</tr>
							<tr class="odd">
								<td>Trombone 1</td>
								<td class="pdf"><a href="/music/Holiday/pdf/Trombone-1.pdf" target="_blank">Click Here</a></td>
								<td class="jpeg"><a href="/music/Holiday/jpg/Trombone-1.jpg" target="_blank">Click Here</a></td>
							</tr>
							<tr class="even">
								<td>Trombone 2</td>
								<td class="pdf"><a href="/music/Holiday/pdf/Trombone-2.pdf" target="_blank">Click Here</a></td>
								<td class="jpeg"><a href="/music/Holiday/jpg/Trombone-2.jpg" target="_blank">Click Here</a></td>
							</tr>
							<tr class="odd">
								<td>Trumpet 1</td>
								<td class="pdf"><a href="/music/Holiday/pdf/Trumpet-1.pdf" target="_blank">Click Here</a></td>
								<td class="jpeg"><a href="/music/Holiday/jpg/Trumpet-1.jpg" target="_blank">Click Here</a></td>
							</tr>
							<tr class="even">
								<td>Trumpet 2</td>
								<td class="pdf"><a href="/music/Holiday/pdf/Trumpet-2.pdf" target="_blank">Click Here</a></td>
								<td class="jpeg"><a href="/music/Holiday/jpg/Trumpet-2.jpg" target="_blank">Click Here</a></td>
							</tr>
							<tr class="odd">
								<td>Trumpet 3</td>
								<td class="pdf"><a href="/music/Holiday/pdf/Trumpet-3.pdf" target="_blank">Click Here</a></td>
								<td class="jpeg"><a href="/music/Holiday/jpg/Trumpet-3.jpg" target="_blank">Click Here</a></td>
							</tr>
							<tr class="even">
								<td>Tuba</td>
								<td class="pdf"><a href="/music/Holiday/pdf/Tuba.pdf" target="_blank">Click Here</a></td>
								<td class="jpeg"><a href="/music/Holiday/jpg/Tuba.jpg" target="_blank">Click Here</a></td>
							</tr>	
						</tbody>		
					</table>
					
					<h2>Roadmap</h2>
					<p>
						<?php
							$root = realpath($_SERVER["DOCUMENT_ROOT"]); 
							$roadmapFile = $root . "/music/Holiday/roadmap.txt";
							$handler = fopen($roadmapFile, 'r');
							$roadmap = fread($handler, filesize($roadmapFile));
							echo $roadmap;
						?>
					</p>
					
					<h2>Recordings / Media</h2>
					<p>Original Recording</p>
						<audio controls preload="auto">
							<source src="/music/Holiday/Holiday%20(arr.%20Jay%20Dawson).mp3" />
							<source src="/music/Holiday/Holiday%20(arr.%20Jay%20Dawson).ogg" />
							<a href="/music/Holiday/Holiday%20(arr.%20Jay%20Dawson).mp3">Download MP3</a>
						</audio>
						
					
					<h2>Revisions</h2>
					<p>
						<?php
							$root = realpath($_SERVER["DOCUMENT_ROOT"]); 
							$revisionsFile = $root . "/music/Holiday/revisions.txt";
							$handler = fopen($revisionsFile, 'r');
							$revisions = fread($handler, filesize($revisionsFile));
							echo $revisions;
						?>
					</p>