					<h1>Hey Baby</h1>
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
								<td class="pdf"><a href="/music/Hey%20Baby/pdf/AltoSax.pdf" target="_blank">Click Here</a></td>
								<td class="jpeg"><a href="/music/Hey%20Baby/jpg/AltoSax.jpg" target="_blank">Click Here</a></td>
							</tr>
							<tr class="even">
								<td>Bari Sax</td>
								<td class="pdf"><a href="/music/Hey%20Baby/pdf/BariSax.pdf" target="_blank">Click Here</a></td>
								<td class="jpeg"><a href="/music/Hey%20Baby/jpg/BariSax.jpg" target="_blank">Click Here</a></td>
							</tr>
							<tr class="odd">
								<td>Clarinet 1</td>
								<td class="pdf"><a href="/music/Hey%20Baby/pdf/Clarinet-1.pdf" target="_blank">Click Here</a></td>
								<td class="jpeg"><a href="/music/Hey%20Baby/jpg/Clarinet-1.jpg" target="_blank">Click Here</a></td>
							</tr>
							<tr class="even">
								<td>Clarinet 2</td>
								<td class="pdf"><a href="/music/Hey%20Baby/pdf/Clarinet-2.pdf" target="_blank">Click Here</a></td>
								<td class="jpeg"><a href="/music/Hey%20Baby/jpg/Clarinet-2.jpg" target="_blank">Click Here</a></td>
							</tr>
							<tr class="odd">
								<td>Flute</td>
								<td class="pdf"><a href="/music/Hey%20Baby/pdf/Flute.pdf" target="_blank">Click Here</a></td>
								<td class="jpeg"><a href="/music/Hey%20Baby/jpg/Flute.jpg" target="_blank">Click Here</a></td>
							</tr>
							<tr class="even">
								<td>Horn in F</td>
								<td class="pdf"><a href="/music/Hey%20Baby/pdf/Horn-F.pdf" target="_blank">Click Here</a></td>
								<td class="jpeg"><a href="/music/Hey%20Baby/jpg/Horn-F.jpg" target="_blank">Click Here</a></td>
							</tr>
							<tr class="odd">
								<td>Percussion - Bass Drums</td>
								<td class="pdf"><a href="/music/Hey%20Baby/pdf/Percussion-BassDrum.pdf" target="_blank">Click Here</a></td>
								<td class="jpeg"><a href="/music/Hey%20Baby/jpg/Percussion-BassDrum.jpg" target="_blank">Click Here</a></td>
							</tr>
							<tr class="even">
								<td>Percussion - Quad Toms</td>
								<td class="pdf"><a href="/music/Hey%20Baby/pdf/Percussion-QuadToms.pdf" target="_blank">Click Here</a></td>
								<td class="jpeg"><a href="/music/Hey%20Baby/jpg/Percussion-QuadToms.jpg" target="_blank">Click Here</a></td>
							</tr>
							<tr class="odd">
								<td>Percussion - Snare Drum</td>
								<td class="pdf"><a href="/music/Hey%20Baby/pdf/Percussion-SnareDrum.pdf" target="_blank">Click Here</a></td>
								<td class="jpeg"><a href="/music/Hey%20Baby/jpg/Percussion-SnareDrum.jpg" target="_blank">Click Here</a></td>
							</tr>
							<tr class="even">
								<td>Tenor Sax</td>
								<td class="pdf"><a href="/music/Hey%20Baby/pdf/TenorSax.pdf" target="_blank">Click Here</a></td>
								<td class="jpeg"><a href="/music/Hey%20Baby/jpg/TenorSax.jpg" target="_blank">Click Here</a></td>
							</tr>
							<tr class="odd">
								<td>Trombone 1</td>
								<td class="pdf"><a href="/music/Hey%20Baby/pdf/Trombone-1.pdf" target="_blank">Click Here</a></td>
								<td class="jpeg"><a href="/music/Hey%20Baby/jpg/Trombone-1.jpg" target="_blank">Click Here</a></td>
							</tr>
							<tr class="even">
								<td>Trombone 2</td>
								<td class="pdf"><a href="/music/Hey%20Baby/pdf/Trombone-2.pdf" target="_blank">Click Here</a></td>
								<td class="jpeg"><a href="/music/Hey%20Baby/jpg/Trombone-2.jpg" target="_blank">Click Here</a></td>
							</tr>
							<tr class="odd">
								<td>Trumpet 1</td>
								<td class="pdf"><a href="/music/Hey%20Baby/pdf/Trumpet-1.pdf" target="_blank">Click Here</a></td>
								<td class="jpeg"><a href="/music/Hey%20Baby/jpg/Trumpet-1.jpg" target="_blank">Click Here</a></td>
							</tr>
							<tr class="even">
								<td>Trumpet 2</td>
								<td class="pdf"><a href="/music/Hey%20Baby/pdf/Trumpet-2.pdf" target="_blank">Click Here</a></td>
								<td class="jpeg"><a href="/music/Hey%20Baby/jpg/Trumpet-2.jpg" target="_blank">Click Here</a></td>
							</tr>
							<tr class="odd">
								<td>Trumpet 3</td>
								<td class="pdf"><a href="/music/Hey%20Baby/pdf/Trumpet-3.pdf" target="_blank">Click Here</a></td>
								<td class="jpeg"><a href="/music/Hey%20Baby/jpg/Trumpet-3.jpg" target="_blank">Click Here</a></td>
							</tr>
							<tr class="even">
								<td>Tuba</td>
								<td class="pdf"><a href="/music/Hey%20Baby/pdf/Tuba.pdf" target="_blank">Click Here</a></td>
								<td class="jpeg"><a href="/music/Hey%20Baby/jpg/Tuba.jpg" target="_blank">Click Here</a></td>
							</tr>
						</tbody>			
					</table>
					
					<h2>Roadmap</h2>
					<p>
						<?php
							$root = realpath($_SERVER["DOCUMENT_ROOT"]); 
							$roadmapFile = $root . "/music/Hey Baby/roadmap.txt";
							$handler = fopen($roadmapFile, 'r');
							$roadmap = fread($handler, filesize($roadmapFile));
							echo $roadmap;
						?>
					</p>
					
					<h2>Recordings / Media</h2>
					<h3>ImageRIT 2012</h3>
					<div class="flex-video">
						<iframe width="420" height="315" src="https://www.youtube.com/embed/zRYd0Xa-EEU?rel=0" frameborder="0" allowfullscreen></iframe>
					</div>
					<h3>ImageRIT 2011</h3>
					<div class="flex-video">
						<iframe width="420" height="315" src="https://www.youtube.com/embed/JdjpIUfRSvo?rel=0" frameborder="0" allowfullscreen></iframe>
					</div>
					<h3>2010/2011 Recording</h3>
					<a href="/audio/2011%20-%20Hey%20Baby.mp3" title="Download MP3">Download MP3</a>
									
					<h2>Revisions</h2>
					<p>
						<?php
							$root = realpath($_SERVER["DOCUMENT_ROOT"]); 
							$revisionsFile = $root . "/music/Hey Baby/revisions.txt";
							$handler = fopen($revisionsFile, 'r');
							$revisions = fread($handler, filesize($revisionsFile));
							echo $revisions;
						?>
					</p>