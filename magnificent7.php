					<h1>Magnificent 7</h1>
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
							<td class="pdf"><a href="/music/Magnificent%207/pdf/AltoSax.pdf" target="_blank">Click Here</a></td>
							<td class="jpeg"><a href="/music/Magnificent%207/jpg/AltoSax.jpg" target="_blank">Click Here</a></td>
						</tr>
						<tr class="even">
							<td>Bari Sax</td>
							<td class="pdf"><a href="/music/Magnificent%207/pdf/BariSax.pdf" target="_blank">Click Here</a></td>
							<td class="jpeg"><a href="/music/Magnificent%207/jpg/BariSax.jpg" target="_blank">Click Here</a></td>
						</tr>
						<tr class="odd">
							<td>Clarinet 1</td>
							<td class="pdf"><a href="/music/Magnificent%207/pdf/Clarinet-1.pdf" target="_blank">Click Here</a></td>
							<td class="jpeg"><a href="/music/Magnificent%207/jpg/Clarinet-1.jpg" target="_blank">Click Here</a></td>
						</tr>
						<tr class="even">
							<td>Clarinet 2</td>
							<td class="pdf"><a href="/music/Magnificent%207/pdf/Clarinet-2.pdf" target="_blank">Click Here</a></td>
							<td class="jpeg"><a href="/music/Magnificent%207/jpg/Clarinet-2.jpg" target="_blank">Click Here</a></td>
						</tr>
						<tr class="odd">
							<td>Flute</td>
							<td class="pdf"><a href="/music/Magnificent%207/pdf/Flute.pdf" target="_blank">Click Here</a></td>
							<td class="jpeg"><a href="/music/Magnificent%207/jpg/Flute.jpg" target="_blank">Click Here</a></td>
						</tr>
						<tr class="even">
							<td>Horn in F</td>
							<td class="pdf"><a href="/music/Magnificent%207/pdf/Horn-F.pdf" target="_blank">Click Here</a></td>
							<td class="jpeg"><a href="/music/Magnificent%207/jpg/Horn-F.jpg" target="_blank">Click Here</a></td>
						</tr>
						<tr class="odd">
							<td>Percussion - Bass Drums</td>
							<td class="pdf"><a href="/music/Magnificent%207/pdf/Percussion-BassDrum.pdf" target="_blank">Click Here</a></td>
							<td class="jpeg"><a href="/music/Magnificent%207/jpg/Percussion-BassDrum.jpg" target="_blank">Click Here</a></td>
						</tr>
						<tr class="even">
							<td>Percussion - Bells</td>
							<td class="pdf"><a href="/music/Magnificent%207/pdf/Percussion-Bells.pdf" target="_blank">Click Here</a></td>
							<td class="jpeg"><a href="/music/Magnificent%207/jpg/Percussion-Bells.jpg" target="_blank">Click Here</a></td>
						</tr>
						<tr class="odd">
							<td>Percussion - Quad Toms</td>
							<td class="pdf"><a href="/music/Magnificent%207/pdf/Percussion-QuadToms.pdf" target="_blank">Click Here</a></td>
							<td class="jpeg"><a href="/music/Magnificent%207/jpg/Percussion-QuadToms.jpg" target="_blank">Click Here</a></td>
						</tr>
						<tr class="even">
							<td>Percussion - Snare Drum</td>
							<td class="pdf"><a href="/music/Magnificent%207/pdf/Percussion-SnareDrum.pdf" target="_blank">Click Here</a></td>
							<td class="jpeg"><a href="/music/Magnificent%207/jpg/Percussion-SnareDrum.jpg" target="_blank">Click Here</a></td>
						</tr>
						<tr class="odd">
							<td>Tenor Sax</td>
							<td class="pdf"><a href="/music/Magnificent%207/pdf/TenorSax.pdf" target="_blank">Click Here</a></td>
							<td class="jpeg"><a href="/music/Magnificent%207/jpg/TenorSax.jpg" target="_blank">Click Here</a></td>
						</tr>
						<tr class="even">
							<td>Trombone 1</td>
							<td class="pdf"><a href="/music/Magnificent%207/pdf/Trombone-1.pdf" target="_blank">Click Here</a></td>
							<td class="jpeg"><a href="/music/Magnificent%207/jpg/Trombone-1.jpg" target="_blank">Click Here</a></td>
						</tr>
						<tr class="odd">
							<td>Trombone 2</td>
							<td class="pdf"><a href="/music/Magnificent%207/pdf/Trombone-2.pdf" target="_blank">Click Here</a></td>
							<td class="jpeg"><a href="/music/Magnificent%207/jpg/Trombone-2.jpg" target="_blank">Click Here</a></td>
						</tr>
						<tr class="even">
							<td>Trumpet 1</td>
							<td class="pdf"><a href="/music/Magnificent%207/pdf/Trumpet-1.pdf" target="_blank">Click Here</a></td>
							<td class="jpeg"><a href="/music/Magnificent%207/jpg/Trumpet-1.jpg" target="_blank">Click Here</a></td>
						</tr>
						<tr class="odd">
							<td>Trumpet 2</td>
							<td class="pdf"><a href="/music/Magnificent%207/pdf/Trumpet-2.pdf" target="_blank">Click Here</a></td>
							<td class="jpeg"><a href="/music/Magnificent%207/jpg/Trumpet-2.jpg" target="_blank">Click Here</a></td>
						</tr>
						<tr class="even">
							<td>Tuba</td>
							<td class="pdf"><a href="/music/Magnificent%207/pdf/Tuba.pdf" target="_blank">Click Here</a></td>
							<td class="jpeg"><a href="/music/Magnificent%207/jpg/Tuba.jpg" target="_blank">Click Here</a></td>
						</tr>			
					</table>
					
					<h2>Roadmap</h2>
					<p>
						<?php
							$root = realpath($_SERVER["DOCUMENT_ROOT"]); 
							$roadmapFile = $root . "/music/Magnificent 7/roadmap.txt";
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
							$revisionsFile = $root . "/music/Magnificent 7/revisions.txt";
							$handler = fopen($revisionsFile, 'r');
							$revisions = fread($handler, filesize($revisionsFile));
							echo $revisions;
						?>
					</p>