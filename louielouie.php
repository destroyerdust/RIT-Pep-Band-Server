					<h1>Louie Louie</h1>
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
							<td class="pdf"><a href="/music/Louie%20Louie/pdf/AltoSax.pdf" target="_blank">Click Here</a></td>
							<td class="jpeg"><a href="/music/Louie%20Louie/jpg/AltoSax.jpg" target="_blank">Click Here</a></td>
						</tr>
						<tr class="even">
							<td>Bari Sax</td>
							<td class="pdf"><a href="/music/Louie%20Louie/pdf/BariSax.pdf" target="_blank">Click Here</a></td>
							<td class="jpeg"><a href="/music/Louie%20Louie/jpg/BariSax.jpg" target="_blank">Click Here</a></td>
						</tr>
						<tr class="odd">
							<td>Clarinet 1</td>
							<td class="pdf"><a href="/music/Louie%20Louie/pdf/Clarinet-1.pdf" target="_blank">Click Here</a></td>
							<td class="jpeg"><a href="/music/Louie%20Louie/jpg/Clarinet-1.jpg" target="_blank">Click Here</a></td>
						</tr>
						<tr class="even">
							<td>Clarinet 2</td>
							<td class="pdf"><a href="/music/Louie%20Louie/pdf/Clarinet-2.pdf" target="_blank">Click Here</a></td>
							<td class="jpeg"><a href="/music/Louie%20Louie/jpg/Clarinet-2.jpg" target="_blank">Click Here</a></td>
						</tr>
						<tr class="odd">
							<td>Flute</td>
							<td class="pdf"><a href="/music/Louie%20Louie/pdf/Flute.pdf" target="_blank">Click Here</a></td>
							<td class="jpeg"><a href="/music/Louie%20Louie/jpg/Flute.jpg" target="_blank">Click Here</a></td>
						</tr>
						<tr class="even">
							<td>Horn in F</td>
							<td class="pdf"><a href="/music/Louie%20Louie/pdf/Horn-F.pdf" target="_blank">Click Here</a></td>
							<td class="jpeg"><a href="/music/Louie%20Louie/jpg/Horn-F.jpg" target="_blank">Click Here</a></td>
						</tr>
						<tr class="odd">
							<td>Percussion - Drums</td>
							<td class="pdf"><a href="/music/Louie%20Louie/pdf/Percussion-Drums.pdf" target="_blank">Click Here</a></td>
							<td class="jpeg"><a href="/music/Louie%20Louie/jpg/Percussion-Drums.jpg" target="_blank">Click Here</a></td>
						</tr>
						<tr class="even">
							<td>Rhythm - Electric Guitar</td>
							<td class="pdf"><a href="/music/Louie%20Louie/pdf/Rhythm-ElectricGuitar.pdf" target="_blank">Click Here</a></td>
							<td class="jpeg"><a href="/music/Louie%20Louie/jpg/Rhythm-ElectricBass.jpg" target="_blank">Click Here</a></td>
						</tr>
						<tr class="odd">
							<td>Rhythm - Keyboards (Page 1)</td>
							<td class="pdf"><a href="/music/Louie%20Louie/pdf/Rhythm-Keyboards.pdf" target="_blank">Click Here</a></td>
							<td class="jpeg"><a href="/music/Louie%20Louie/jpg/Rhythm-Keyboards-1.jpg" target="_blank">Click Here</a></td>
						</tr>
						<tr class="even">
							<td>Rhythm - Keyboards (Page 2)</td>
							<td class="pdf"><a href="/music/Louie%20Louie/pdf/Rhythm-Keyboards.pdf" target="_blank">Click Here</a></td>
							<td class="jpeg"><a href="/music/Louie%20Louie/jpg/Rhythm-Keyboards-2.jpg" target="_blank">Click Here</a></td>
						</tr>
						<tr class="odd">
							<td>Tenor Sax 2</td>
							<td class="pdf"><a href="/music/Louie%20Louie/pdf/TenorSax-2.pdf" target="_blank">Click Here</a></td>
							<td class="jpeg"><a href="/music/Louie%20Louie/jpg/TenorSax-2.jpg" target="_blank">Click Here</a></td>
						</tr>
						<tr class="even">
							<td>Trombone 1</td>
							<td class="pdf"><a href="/music/Louie%20Louie/pdf/Trombone-1.pdf" target="_blank">Click Here</a></td>
							<td class="jpeg"><a href="/music/Louie%20Louie/jpg/Trombone-1.jpg" target="_blank">Click Here</a></td>
						</tr>
						<tr class="odd">
							<td>Trumpet 1</td>
							<td class="pdf"><a href="/music/Louie%20Louie/pdf/Trumpet-1.pdf" target="_blank">Click Here</a></td>
							<td class="jpeg"><a href="/music/Louie%20Louie/jpg/Trumpet-1.jpg" target="_blank">Click Here</a></td>
						</tr>
						<tr class="even">
							<td>Trumpet 2</td>
							<td class="pdf"><a href="/music/Louie%20Louie/pdf/Trumpet-2.pdf" target="_blank">Click Here</a></td>
							<td class="jpeg"><a href="/music/Louie%20Louie/jpg/Trumpet-2.jpg" target="_blank">Click Here</a></td>
						</tr>
						<tr class="odd">
							<td>Tuba</td>
							<td class="pdf"><a href="/music/Louie%20Louie/pdf/Tuba.pdf" target="_blank">Click Here</a></td>
							<td class="jpeg"><a href="/music/Louie%20Louie/jpg/Tuba.jpg" target="_blank">Click Here</a></td>
						</tr>			
					</table>
					
					<h2>Roadmap</h2>
					<p>
						<?php
							$root = realpath($_SERVER["DOCUMENT_ROOT"]); 
							$roadmapFile = $root . "/music/Louie Louie/roadmap.txt";
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
							$revisionsFile = $root . "/music/Louie Louie/revisions.txt";
							$handler = fopen($revisionsFile, 'r');
							$revisions = fread($handler, filesize($revisionsFile));
							echo $revisions;
						?>
					</p>