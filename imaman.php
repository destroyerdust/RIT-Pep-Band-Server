					<h1>I'm a Man</h1>
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
							<td class="pdf"><a href="/music/I'm%20a%20Man/pdf/AltoSax.pdf" target="_blank">Click Here</a></td>
							<td class="jpeg"><a href="/music/I'm%20a%20Man/jpg/AltoSax.jpg" target="_blank">Click Here</a></td>
						</tr>
						<tr class="even">
							<td>Bari Sax</td>
							<td class="pdf"><a href="/music/I'm%20a%20Man/pdf/BariSax.pdf" target="_blank">Click Here</a></td>
							<td class="jpeg"><a href="/music/I'm%20a%20Man/jpg/BariSax.jpg" target="_blank">Click Here</a></td>
						</tr>
						<tr class="odd">
							<td>Clarinet 1</td>
							<td class="pdf"><a href="/music/I'm%20a%20Man/pdf/Clarinet-1.pdf" target="_blank">Click Here</a></td>
							<td class="jpeg"><a href="/music/I'm%20a%20Man/jpg/Clarinet-1.jpg" target="_blank">Click Here</a></td>
						</tr>
						<tr class="even">
							<td>Clarinet 2</td>
							<td class="pdf"><a href="/music/I'm%20a%20Man/pdf/Clarinet-2.pdf" target="_blank">Click Here</a></td>
							<td class="jpeg"><a href="/music/I'm%20a%20Man/jpg/Clarinet-2.jpg" target="_blank">Click Here</a></td>
						</tr>
						<tr class="odd">
							<td>Flute</td>
							<td class="pdf"><a href="/music/I'm%20a%20Man/pdf/Flute.pdf" target="_blank">Click Here</a></td>
							<td class="jpeg"><a href="/music/I'm%20a%20Man/jpg/Flute.jpg" target="_blank">Click Here</a></td>
						</tr>
						<tr class="even">
							<td>Horn in F</td>
							<td class="pdf"><a href="/music/I'm%20a%20Man/pdf/Horn-F.pdf" target="_blank">Click Here</a></td>
							<td class="jpeg"><a href="/music/I'm%20a%20Man/jpg/Horn-F.jpg" target="_blank">Click Here</a></td>
						</tr>
						<tr class="odd">
							<td>Percussion - Bass Drums</td>
							<td class="pdf"><a href="/music/I'm%20a%20Man/pdf/Percussion-BassDrum.pdf" target="_blank">Click Here</a></td>
							<td class="jpeg"><a href="/music/I'm%20a%20Man/jpg/Percussion-BassDrum.jpg" target="_blank">Click Here</a></td>
						</tr>
						<tr class="even">
							<td>Percussion - Snare Drum</td>
							<td class="pdf"><a href="/music/I'm%20a%20Man/pdf/Percussion-SnareDrum.pdf" target="_blank">Click Here</a></td>
							<td class="jpeg"><a href="/music/I'm%20a%20Man/jpg/Percussion-SnareDrum.jpg" target="_blank">Click Here</a></td>
						</tr>
						<tr class="odd">
							<td>Tenor Sax</td>
							<td class="pdf"><a href="/music/I'm%20a%20Man/pdf/TenorSax.pdf" target="_blank">Click Here</a></td>
							<td class="jpeg"><a href="/music/I'm%20a%20Man/jpg/TenorSax.jpg" target="_blank">Click Here</a></td>
						</tr>
						<tr class="even">
							<td>Trombone 1</td>
							<td class="pdf"><a href="/music/I'm%20a%20Man/pdf/Trombone-1.pdf" target="_blank">Click Here</a></td>
							<td class="jpeg"><a href="/music/I'm%20a%20Man/jpg/Trombone-1.jpg" target="_blank">Click Here</a></td>
						</tr>
						<tr class="odd">
							<td>Trombone 2</td>
							<td class="pdf"><a href="/music/I'm%20a%20Man/pdf/Trombone-2.pdf" target="_blank">Click Here</a></td>
							<td class="jpeg"><a href="/music/I'm%20a%20Man/jpg/Trombone-2.jpg" target="_blank">Click Here</a></td>
						</tr>
						<tr class="even">
							<td>Trumpet 1</td>
							<td class="pdf"><a href="/music/I'm%20a%20Man/pdf/Trumpet-1.pdf" target="_blank">Click Here</a></td>
							<td class="jpeg"><a href="/music/I'm%20a%20Man/jpg/Trumpet-1.jpg" target="_blank">Click Here</a></td>
						</tr>
						<tr class="odd">
							<td>Trumpet 2</td>
							<td class="pdf"><a href="/music/I'm%20a%20Man/pdf/Trumpet-2.pdf" target="_blank">Click Here</a></td>
							<td class="jpeg"><a href="/music/I'm%20a%20Man/jpg/Trumpet-2.jpg" target="_blank">Click Here</a></td>
						</tr>
						<tr class="even">
							<td>Tuba</td>
							<td class="pdf"><a href="/music/I'm%20a%20Man/pdf/Tuba.pdf" target="_blank">Click Here</a></td>
							<td class="jpeg"><a href="/music/I'm%20a%20Man/jpg/Tuba.jpg" target="_blank">Click Here</a></td>
						</tr>			
					</table>
					
					<h2>Roadmap</h2>
					<p>
						<?php
							$root = realpath($_SERVER["DOCUMENT_ROOT"]); 
							$roadmapFile = $root . "/music/I'm a Man/roadmap.txt";
							$handler = fopen($roadmapFile, 'r');
							$roadmap = fread($handler, filesize($roadmapFile));
							echo $roadmap;
						?>
					</p>
					
					<h2>Recordings / Media</h2>
					<h3>ImageRIT 2011</h3>
					<iframe width="420" height="315" src="https://www.youtube.com/embed/ebPJvNWUyqw?rel=0" frameborder="0" allowfullscreen></iframe>					
					<h3>2010/2011 Recording</h3>
					<a href="/audio/2011%20-%20I'm%20a%20Man.mp3" title="Download MP3">Download MP3</a>
									
					<h2>Revisions</h2>
					<p>
						<?php
							$root = realpath($_SERVER["DOCUMENT_ROOT"]); 
							$revisionsFile = $root . "/music/I'm a Man/revisions.txt";
							$handler = fopen($revisionsFile, 'r');
							$revisions = fread($handler, filesize($revisionsFile));
							echo $revisions;
						?>
					</p>