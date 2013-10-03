					<h1>Smooth Criminal</h1>
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
								<td class="pdf"><a href="/music/Smooth%20Criminal/pdf/AltoSax.pdf" target="_blank">Click Here</a></td>
								<td class="jpeg"><a href="/music/Smooth%20Criminal/jpg/AltoSax.jpg" target="_blank">Click Here</a></td>
							</tr>
							<tr class="even">
								<td>Clarinet 1</td>
								<td class="pdf"><a href="/music/Smooth%20Criminal/pdf/Clarinet-1.pdf" target="_blank">Click Here</a></td>
								<td class="jpeg"><a href="/music/Smooth%20Criminal/jpg/Clarinet-1.jpg" target="_blank">Click Here</a></td>
							</tr>
							<tr class="odd">
								<td>Clarinet 2</td>
								<td class="pdf"><a href="/music/Smooth%20Criminal/pdf/Clarinet-2.pdf" target="_blank">Click Here</a></td>
								<td class="jpeg"><a href="/music/Smooth%20Criminal/jpg/Clarinet-2.jpg" target="_blank">Click Here</a></td>
							</tr>
							<tr class="even">
								<td>Flute</td>
								<td class="pdf"><a href="/music/Smooth%20Criminal/pdf/Flute.pdf" target="_blank">Click Here</a></td>
								<td class="jpeg"><a href="/music/Smooth%20Criminal/jpg/Flute.jpg" target="_blank">Click Here</a></td>
							</tr>
							<tr class="odd">
								<td>Horn in F</td>
								<td class="pdf"><a href="/music/Smooth%20Criminal/pdf/Horn-F.pdf" target="_blank">Click Here</a></td>
								<td class="jpeg"><a href="/music/Smooth%20Criminal/jpg/Horn-F.jpg" target="_blank">Click Here</a></td>
							</tr>
							<tr class="even">
								<td>Percussion - Aux</td>
								<td class="pdf"><a href="/music/Smooth%20Criminal/pdf/Percussion-Aux.pdf" target="_blank">Click Here</a></td>
								<td class="jpeg"><a href="/music/Smooth%20Criminal/jpg/Percussion-Aux.jpg" target="_blank">Click Here</a></td>
							</tr>
							<tr class="odd">
								<td>Tenor Sax 1</td>
								<td class="pdf"><a href="/music/Smooth%20Criminal/pdf/TenorSax-1.pdf" target="_blank">Click Here</a></td>
								<td class="jpeg"><a href="/music/Smooth%20Criminal/jpg/TenorSax-1.jpg" target="_blank">Click Here</a></td>
							</tr>
							<tr class="even">
								<td>Tenor Sax 2</td>
								<td class="pdf"><a href="/music/Smooth%20Criminal/pdf/TenorSax-2.pdf" target="_blank">Click Here</a></td>
								<td class="jpeg"><a href="/music/Smooth%20Criminal/jpg/TenorSax-2.jpg" target="_blank">Click Here</a></td>
							</tr>
							<tr class="odd">
								<td>Trombone 1</td>
								<td class="pdf"><a href="/music/Smooth%20Criminal/pdf/Trombone-1.pdf" target="_blank">Click Here</a></td>
								<td class="jpeg"><a href="/music/Smooth%20Criminal/jpg/Trombone-1.jpg" target="_blank">Click Here</a></td>
							</tr>
							<tr class="even">
								<td>Trombone 2</td>
								<td class="pdf"><a href="/music/Smooth%20Criminal/pdf/Trombone-2.pdf" target="_blank">Click Here</a></td>
								<td class="jpeg"><a href="/music/Smooth%20Criminal/jpg/Trombone-2.jpg" target="_blank">Click Here</a></td>
							</tr>
							<tr class="odd">
								<td>Trumpet 1</td>
								<td class="pdf"><a href="/music/Smooth%20Criminal/pdf/Trumpet-1.pdf" target="_blank">Click Here</a></td>
								<td class="jpeg"><a href="/music/Smooth%20Criminal/jpg/Trumpet-1.jpg" target="_blank">Click Here</a></td>
							</tr>
							<tr class="even">
								<td>Trumpet 2</td>
								<td class="pdf"><a href="/music/Smooth%20Criminal/pdf/Trumpet-2.pdf" target="_blank">Click Here</a></td>
								<td class="jpeg"><a href="/music/Smooth%20Criminal/jpg/Trumpet-2.jpg" target="_blank">Click Here</a></td>
							</tr>
							<tr class="odd">
								<td>Trumpet 3</td>
								<td class="pdf"><a href="/music/Smooth%20Criminal/pdf/Trumpet-3.pdf" target="_blank">Click Here</a></td>
								<td class="jpeg"><a href="/music/Smooth%20Criminal/jpg/Trumpet-3.jpg" target="_blank">Click Here</a></td>
							</tr>
							<tr class="even">
								<td>Tuba</td>
								<td class="pdf"><a href="/music/Smooth%20Criminal/pdf/Tuba.pdf" target="_blank">Click Here</a></td>
								<td class="jpeg"><a href="/music/Smooth%20Criminal/jpg/Tuba.jpg" target="_blank">Click Here</a></td>
							</tr>
						</tbody>			
					</table>
					
					<h2>Roadmap</h2>
					<p>
						<?php
							$root = realpath($_SERVER["DOCUMENT_ROOT"]); 
							$roadmapFile = $root . "/music/Smooth Criminal/roadmap.txt";
							$handler = fopen($roadmapFile, 'r');
							$roadmap = fread($handler, filesize($roadmapFile));
							echo $roadmap;
						?>
					</p>
					
					<h2>Recordings / Media</h2>
					<h3>ImageRIT 2012</h3>
					<iframe width="420" height="315" src="https://www.youtube.com/embed/f15K_tQM3W4?rel=0" frameborder="0" allowfullscreen></iframe>
										
					<h3>2011/2012 Recording</h3>
					<a href="/audio/2012%20-%20Smooth%20Criminal.mp3" title="Download MP3">Download MP3</a>	
					
					<h3>Original Recording</h3>
					<a href="/music/Smooth%20Criminal/Smooth%20Criminal%20(arr%20Dave%20Henning).mp3" title="Download MP3">Download MP3</a>	
						
					<h2>Revisions</h2>
					<p>
						<?php
							$root = realpath($_SERVER["DOCUMENT_ROOT"]); 
							$revisionsFile = $root . "/music/Smooth Criminal/revisions.txt";
							$handler = fopen($revisionsFile, 'r');
							$revisions = fread($handler, filesize($revisionsFile));
							echo $revisions;
						?>
					</p>