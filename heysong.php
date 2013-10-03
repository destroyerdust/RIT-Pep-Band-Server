					<h1>Hey Song</h1>
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
								<td class="pdf"><a href="/music/Hey%20Song/pdf/AltoSax.pdf" target="_blank">Click Here</a></td>
								<td class="jpeg"><a href="/music/Hey%20Song/jpg/AltoSax.jpg" target="_blank">Click Here</a></td>
							</tr>
							<tr class="even">
								<td>Bari Sax</td>
								<td class="pdf"><a href="/music/Hey%20Song/pdf/BariSax.pdf" target="_blank">Click Here</a></td>
								<td class="jpeg"><a href="/music/Hey%20Song/jpg/BariSax.jpg" target="_blank">Click Here</a></td>
							</tr>
							<tr class="odd">
								<td>Clarinet 1</td>
								<td class="pdf"><a href="/music/Hey%20Song/pdf/Clarinet-1.pdf" target="_blank">Click Here</a></td>
								<td class="jpeg"><a href="/music/Hey%20Song/jpg/Clarinet-1.jpg" target="_blank">Click Here</a></td>
							</tr>
							<tr class="even">
								<td>Clarinet 2</td>
								<td class="pdf"><a href="/music/Hey%20Song/pdf/Clarinet-2.pdf" target="_blank">Click Here</a></td>
								<td class="jpeg"><a href="/music/Hey%20Song/jpg/Clarinet-2.jpg" target="_blank">Click Here</a></td>
							</tr>
							<tr class="odd">
								<td>Flute</td>
								<td class="pdf"><a href="/music/Hey%20Song/pdf/Flute.pdf" target="_blank">Click Here</a></td>
								<td class="jpeg"><a href="/music/Hey%20Song/jpg/Flute.jpg" target="_blank">Click Here</a></td>
							</tr>
							<tr class="even">
								<td>Horn in F</td>
								<td class="pdf"><a href="/music/Hey%20Song/pdf/Horn-F.pdf" target="_blank">Click Here</a></td>
								<td class="jpeg"><a href="/music/Hey%20Song/jpg/Horn-F.jpg" target="_blank">Click Here</a></td>
							</tr>
							<tr class="odd">
								<td>Rhythm - Electric Bass</td>
								<td class="pdf"><a href="/music/Hey%20Song/pdf/Rhythm-ElectricBass.pdf" target="_blank">Click Here</a></td>
								<td class="jpeg"><a href="/music/Hey%20Song/jpg/Rhythm-ElectricBass.jpg" target="_blank">Click Here</a></td>
							</tr>
							<tr class="even">
								<td>Rhythm - Keyboards</td>
								<td class="pdf"><a href="/music/Hey%20Song/pdf/Rhythm-Keyboards.pdf" target="_blank">Click Here</a></td>
								<td class="jpeg"><a href="/music/Hey%20Song/jpg/Rhythm-Keyboards.jpg" target="_blank">Click Here</a></td>
							</tr>
							<tr class="odd">
								<td>Tenor Sax 1</td>
								<td class="pdf"><a href="/music/Hey%20Song/pdf/TenorSax-1.pdf" target="_blank">Click Here</a></td>
								<td class="jpeg"><a href="/music/Hey%20Song/jpg/TenorSax-1.jpg" target="_blank">Click Here</a></td>
							</tr>
							<tr class="even">
								<td>Tenor Sax 2</td>
								<td class="pdf"><a href="/music/Hey%20Song/pdf/TenorSax-2.pdf" target="_blank">Click Here</a></td>
								<td class="jpeg"><a href="/music/Hey%20Song/jpg/TenorSax-2.jpg" target="_blank">Click Here</a></td>
							</tr>
							<tr class="odd">
								<td>Trombone 1</td>
								<td class="pdf"><a href="/music/Hey%20Song/pdf/Trombone-1.pdf" target="_blank">Click Here</a></td>
								<td class="jpeg"><a href="/music/Hey%20Song/jpg/Trombone-1.jpg" target="_blank">Click Here</a></td>
							</tr>
							<tr class="even">
								<td>Trombone 2</td>
								<td class="pdf"><a href="/music/Hey%20Song/pdf/Trombone-2.pdf" target="_blank">Click Here</a></td>
								<td class="jpeg"><a href="/music/Hey%20Song/jpg/Trombone-2.jpg" target="_blank">Click Here</a></td>
							</tr>
							<tr class="odd">
								<td>Trumpet 1</td>
								<td class="pdf"><a href="/music/Hey%20Song/pdf/Trumpet-1.pdf" target="_blank">Click Here</a></td>
								<td class="jpeg"><a href="/music/Hey%20Song/jpg/Trumpet-1.jpg" target="_blank">Click Here</a></td>
							</tr>
							<tr class="even">
								<td>Trumpet 2</td>
								<td class="pdf"><a href="/music/Hey%20Song/pdf/Trumpet-2.pdf" target="_blank">Click Here</a></td>
								<td class="jpeg"><a href="/music/Hey%20Song/jpg/Trumpet-2.jpg" target="_blank">Click Here</a></td>
							</tr>
							<tr class="odd">
								<td>Tuba</td>
								<td class="pdf"><a href="/music/Hey%20Song/pdf/Tuba.pdf" target="_blank">Click Here</a></td>
								<td class="jpeg"><a href="/music/Hey%20Song/jpg/Tuba.jpg" target="_blank">Click Here</a></td>
							</tr>
						</tbody>			
					</table>
					
					<h2>Roadmap</h2>
					<p>
						<?php
							$root = realpath($_SERVER["DOCUMENT_ROOT"]); 
							$roadmapFile = $root . "/music/Hey Song/roadmap.txt";
							$handler = fopen($roadmapFile, 'r');
							$roadmap = fread($handler, filesize($roadmapFile));
							echo $roadmap;
						?>
					</p>
					
					<h2>Recordings / Media</h2>
					<h3>ImageRIT 2012</h3>
					<div class="flex-video">
						<iframe width="420" height="315" src="https://www.youtube.com/embed/reoL8YFfSh0?rel=0" frameborder="0" allowfullscreen></iframe>					
					</div>
									
					<h2>Revisions</h2>
					<p>
						<?php
							$root = realpath($_SERVER["DOCUMENT_ROOT"]); 
							$revisionsFile = $root . "/music/Hey Song/revisions.txt";
							$handler = fopen($revisionsFile, 'r');
							$revisions = fread($handler, filesize($revisionsFile));
							echo $revisions;
						?>
					</p>