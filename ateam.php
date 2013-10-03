					<h1>A-Team</h1>
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
							<td class="pdf"><a href="/music/A-Team/pdf/AltoSax.pdf" target="_blank">Click Here</a></td>
							<td class="jpeg"><a href="/music/A-Team/jpg/AltoSax.jpg" target="_blank">Click Here</a></td>
						</tr>
						<tr class="even">
							<td>Bari Sax</td>
							<td class="pdf"><a href="/music/A-Team/pdf/BariSax.pdf" target="_blank">Click Here</a></td>
							<td class="jpeg"><a href="/music/A-Team/jpg/BariSax.jpg" target="_blank">Click Here</a></td>
						</tr>
						<tr class="odd">
							<td>Clarinet 1</td>
							<td class="pdf"><a href="/music/A-Team/pdf/Clarinet-1.pdf" target="_blank">Click Here</a></td>
							<td class="jpeg"><a href="/music/A-Team/jpg/Clarinet-1.jpg" target="_blank">Click Here</a></td>
						</tr>
						<tr class="even">
							<td>Clarinet 2</td>
							<td class="pdf"><a href="/music/A-Team/pdf/Clarinet-2.pdf" target="_blank">Click Here</a></td>
							<td class="jpeg"><a href="/music/A-Team/jpg/Clarinet-2.jpg" target="_blank">Click Here</a></td>
						</tr>
						<tr class="odd">
							<td>Flute</td>
							<td class="pdf"><a href="/music/A-Team/pdf/Flute.pdf" target="_blank">Click Here</a></td>
							<td class="jpeg"><a href="/music/A-Team/jpg/Flute.jpg" target="_blank">Click Here</a></td>
						</tr>
						<tr class="even">
							<td>Horn 1</td>
							<td class="pdf"><a href="/music/A-Team/pdf/Horn-F-1.pdf" target="_blank">Click Here</a></td>
							<td class="jpeg"><a href="/music/A-Team/jpg/Horn-F-1.jpg" target="_blank">Click Here</a></td>
						</tr>
						<tr class="odd">
							<td>Horn 2</td>
							<td class="pdf"><a href="/music/A-Team/pdf/Horn-F-2.pdf" target="_blank">Click Here</a></td>
							<td class="jpeg"><a href="/music/A-Team/jpg/Horn-F-2.jpg" target="_blank">Click Here</a></td>
						</tr>
						<tr class="even">
							<td>Tenor Sax</td>
							<td class="pdf"><a href="/music/A-Team/pdf/TenorSax.pdf" target="_blank">Click Here</a></td>
							<td class="jpeg"><a href="/music/A-Team/jpg/TenorSax.jpg" target="_blank">Click Here</a></td>
						</tr>
						<tr class="odd">
							<td>Trombone</td>
							<td class="pdf"><a href="/music/A-Team/pdf/Trombone.pdf" target="_blank">Click Here</a></td>
							<td class="jpeg"><a href="/music/A-Team/jpg/Trombone.jpg" target="_blank">Click Here</a></td>
						</tr>
						<tr class="even">
							<td>Trumpet 1</td>
							<td class="pdf"><a href="/music/A-Team/pdf/Trumpet-1.pdf" target="_blank">Click Here</a></td>
							<td class="jpeg"><a href="/music/A-Team/jpg/Trumpet-1.jpg" target="_blank">Click Here</a></td>
						</tr>
						<tr class="odd">
							<td>Trumpet 2</td>
							<td class="pdf"><a href="/music/A-Team/pdf/Trumpet-2.pdf" target="_blank">Click Here</a></td>
							<td class="jpeg"><a href="/music/A-Team/jpg/Trumpet-2.jpg" target="_blank">Click Here</a></td>
						</tr>
						<tr class="even">
							<td>Trumpet 3</td>
							<td class="pdf"><a href="/music/A-Team/pdf/Trumpet-3.pdf" target="_blank">Click Here</a></td>
							<td class="jpeg"><a href="/music/A-Team/jpg/Trumpet-3.jpg" target="_blank">Click Here</a></td>
						</tr>
						<tr class="odd">
							<td>Tuba</td>
							<td class="pdf"><a href="/music/A-Team/pdf/Tuba.pdf" target="_blank">Click Here</a></td>
							<td class="jpeg"><a href="/music/A-Team/jpg/Tuba.jpg" target="_blank">Click Here</a></td>
						</tr>			
					</table>
					
					<h2>Roadmap</h2>
					<p>
						<?php 
							$root = realpath($_SERVER["DOCUMENT_ROOT"]);
							$roadmapFile = $root . "/music/A-Team/roadmap.txt";
							$handler = fopen($roadmapFile, 'r');
							$roadmap = fread($handler, filesize($roadmapFile));
							echo $roadmap;
						?>
					</p>
					
					<h2>Recordings / Media</h2>
					<h3>ImageRIT 2011</h3>
					<iframe width="420" height="315" src="https://www.youtube.com/embed/Ok5UaVKqH_U?rel=0" frameborder="0" allowfullscreen></iframe>
									
					<h2>Revisions</h2>
					<p>
						<?php
						
							$root = realpath($_SERVER["DOCUMENT_ROOT"]);						
							$revisionsFile = $root . "/music/A-Team/revisions.txt";
							$handler = fopen($revisionsFile, 'r');
							$revisions = fread($handler, filesize($revisionsFile));
							echo $revisions;
						?>
					</p>