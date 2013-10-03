					<h1>Rage!</h1>
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
								<td class="pdf"><a href="/music/Rage!/pdf/AltoSax.pdf" target="_blank">Click Here</a></td>
								<td class="jpeg"><a href="/music/Rage!/jpg/AltoSax.jpg" target="_blank">Click Here</a></td>
							</tr>
							<tr class="even">
								<td>Clarinet</td>
								<td class="pdf"><a href="/music/Rage!/pdf/Clarinet.pdf" target="_blank">Click Here</a></td>
								<td class="jpeg"><a href="/music/Rage!/jpg/Clarinet.jpg" target="_blank">Click Here</a></td>
							</tr>
							<tr class="odd">
								<td>Flute</td>
								<td class="pdf"><a href="/music/Rage!/pdf/Flute.pdf" target="_blank">Click Here</a></td>
								<td class="jpeg"><a href="/music/Rage!/jpg/Flute.jpg" target="_blank">Click Here</a></td>
							</tr>
							<tr class="even">
								<td>Horn in F</td>
								<td class="pdf"><a href="/music/Rage!/pdf/Horn-F.pdf" target="_blank">Click Here</a></td>
								<td class="jpeg"><a href="/music/Rage!/jpg/Horn-F.jpg" target="_blank">Click Here</a></td>
							</tr>
							<tr class="odd">
								<td>Percussion - Bass Drums</td>
								<td class="pdf"><a href="/music/Rage!/pdf/Percussion-BassDrum.pdf" target="_blank">Click Here</a></td>
								<td class="jpeg"><a href="/music/Rage!/jpg/Percussion-BassDrum.jpg" target="_blank">Click Here</a></td>
							</tr>
							<tr class="even">
								<td>Percussion - Cowbell</td>
								<td class="pdf"><a href="/music/Rage!/pdf/Percussion-Cowbell.pdf" target="_blank">Click Here</a></td>
								<td class="jpeg"><a href="/music/Rage!/jpg/Percussion-Cowbell.jpg" target="_blank">Click Here</a></td>
							</tr>
							<tr class="odd">
								<td>Percussion</td>
								<td class="pdf"><a href="/music/Rage!/pdf/Percussion.pdf" target="_blank">Click Here</a></td>
								<td class="jpeg"><a href="/music/Rage!/jpg/Percussion.jpg" target="_blank">Click Here</a></td>
							</tr>
							<tr class="even">
								<td>Tenor Sax</td>
								<td class="pdf"><a href="/music/Rage!/pdf/TenorSax.pdf" target="_blank">Click Here</a></td>
								<td class="jpeg"><a href="/music/Rage!/jpg/TenorSax.jpg" target="_blank">Click Here</a></td>
							</tr>
							<tr class="odd">
								<td>Trombone</td>
								<td class="pdf"><a href="/music/Rage!/pdf/Trombone.pdf" target="_blank">Click Here</a></td>
								<td class="jpeg"><a href="/music/Rage!/jpg/Trombone.jpg" target="_blank">Click Here</a></td>
							</tr>
							<tr class="even">
								<td>Trumpet 1</td>
								<td class="pdf"><a href="/music/Rage!/pdf/Trumpet-1.pdf" target="_blank">Click Here</a></td>
								<td class="jpeg"><a href="/music/Rage!/jpg/Trumpet-1.jpg" target="_blank">Click Here</a></td>
							</tr>
							<tr class="odd">
								<td>Trumpet 2</td>
								<td class="pdf"><a href="/music/Rage!/pdf/Trumpet-2.pdf" target="_blank">Click Here</a></td>
								<td class="jpeg"><a href="/music/Rage!/jpg/Trumpet-2.jpg" target="_blank">Click Here</a></td>
							</tr>
							<tr class="even">
								<td>Tuba</td>
								<td class="pdf"><a href="/music/Rage!/pdf/Tuba.pdf" target="_blank">Click Here</a></td>
								<td class="jpeg"><a href="/music/Rage!/jpg/Tuba.jpg" target="_blank">Click Here</a></td>
							</tr>
						</tbody>			
					</table>
					
					<h2>Roadmap</h2>
					<p>
						<?php
							$root = realpath($_SERVER["DOCUMENT_ROOT"]); 
							$roadmapFile = $root . "/music/Rage!/roadmap.txt";
							$handler = fopen($roadmapFile, 'r');
							$roadmap = fread($handler, filesize($roadmapFile));
							echo $roadmap;
						?>
					</p>
					
					<h2>Recordings / Media</h2>
					<h3>ImageRIT 2012</h3>
					<iframe width="420" height="315" src="https://www.youtube.com/embed/S7FQPq2z2Ik?rel=0" frameborder="0" allowfullscreen></iframe>
					
					<h3>2011/2012 Recording</h3>
					<a href="/audio/2012%20-%20Rage!.mp3" title="Download MP3">Download MP3</a>		
					<h2>Revisions</h2>
					<p>
						<?php
							$root = realpath($_SERVER["DOCUMENT_ROOT"]); 
							$revisionsFile = $root . "/music/Rage!/revisions.txt";
							$handler = fopen($revisionsFile, 'r');
							$revisions = fread($handler, filesize($revisionsFile));
							echo $revisions;
						?>
					</p>