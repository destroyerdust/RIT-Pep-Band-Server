					<h1>Let Me Clear My Throat</h1>
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
							<td class="pdf"><a href="/music/Let%20Me%20Clear%20My%20Throat/pdf/AltoSax.pdf" target="_blank">Click Here</a></td>
							<td class="jpeg"><a href="/music/Let%20Me%20Clear%20My%20Throat/jpg/AltoSax.jpg" target="_blank">Click Here</a></td>
						</tr>
						<tr class="even">
							<td>Bari Sax</td>
							<td class="pdf"><a href="/music/Let%20Me%20Clear%20My%20Throat/pdf/BariSax.pdf" target="_blank">Click Here</a></td>
							<td class="jpeg"><a href="/music/Let%20Me%20Clear%20My%20Throat/jpg/BariSax.jpg" target="_blank">Click Here</a></td>
						</tr>
						<tr class="odd">
							<td>Clarinet</td>
							<td class="pdf"><a href="/music/Let%20Me%20Clear%20My%20Throat/pdf/Clarinet.pdf" target="_blank">Click Here</a></td>
							<td class="jpeg"><a href="/music/Let%20Me%20Clear%20My%20Throat/jpg/Clarinet.jpg" target="_blank">Click Here</a></td>
						</tr>
						<tr class="even">
							<td>Flute</td>
							<td class="pdf"><a href="/music/Let%20Me%20Clear%20My%20Throat/pdf/Flute.pdf" target="_blank">Click Here</a></td>
							<td class="jpeg"><a href="/music/Let%20Me%20Clear%20My%20Throat/jpg/Flute.jpg" target="_blank">Click Here</a></td>
						</tr>
						<tr class="odd">
							<td>Horn in F</td>
							<td class="pdf"><a href="/music/Let%20Me%20Clear%20My%20Throat/pdf/Horn-F.pdf" target="_blank">Click Here</a></td>
							<td class="jpeg"><a href="/music/Let%20Me%20Clear%20My%20Throat/jpg/Horn-F.jpg" target="_blank">Click Here</a></td>
						</tr>
						<tr class="even">
							<td>Tenor Sax</td>
							<td class="pdf"><a href="/music/Let%20Me%20Clear%20My%20Throat/pdf/TenorSax.pdf" target="_blank">Click Here</a></td>
							<td class="jpeg"><a href="/music/Let%20Me%20Clear%20My%20Throat/jpg/TenorSax.jpg" target="_blank">Click Here</a></td>
						</tr>
						<tr class="odd">
							<td>Trombone</td>
							<td class="pdf"><a href="/music/Let%20Me%20Clear%20My%20Throat/pdf/Trombone.pdf" target="_blank">Click Here</a></td>
							<td class="jpeg"><a href="/music/Let%20Me%20Clear%20My%20Throat/jpg/Trombone.jpg" target="_blank">Click Here</a></td>
						</tr>
						<tr class="even">
							<td>Trumpet 1</td>
							<td class="pdf"><a href="/music/Let%20Me%20Clear%20My%20Throat/pdf/Trumpet-1.pdf" target="_blank">Click Here</a></td>
							<td class="jpeg"><a href="/music/Let%20Me%20Clear%20My%20Throat/jpg/Trumpet-1.jpg" target="_blank">Click Here</a></td>
						</tr>
						<tr class="odd">
							<td>Trumpet 2</td>
							<td class="pdf"><a href="/music/Let%20Me%20Clear%20My%20Throat/pdf/Trumpet-2.pdf" target="_blank">Click Here</a></td>
							<td class="jpeg"><a href="/music/Let%20Me%20Clear%20My%20Throat/jpg/Trumpet-2.jpg" target="_blank">Click Here</a></td>
						</tr>
						<tr class="even">
							<td>Tuba</td>
							<td class="pdf"><a href="/music/Let%20Me%20Clear%20My%20Throat/pdf/Tuba.pdf" target="_blank">Click Here</a></td>
							<td class="jpeg"><a href="/music/Let%20Me%20Clear%20My%20Throat/jpg/Tuba.jpg" target="_blank">Click Here</a></td>
						</tr>			
					</table>
					
					<h2>Roadmap</h2>
					<p>
						<?php
							$root = realpath($_SERVER["DOCUMENT_ROOT"]); 
							$roadmapFile = $root . "/music/Let Me Clear My Throat/roadmap.txt";
							$handler = fopen($roadmapFile, 'r');
							$roadmap = fread($handler, filesize($roadmapFile));
							echo $roadmap;
						?>
					</p>
					
					<h2>Recordings / Media</h2>
					<p>No Media available.</p>
					
					<h2>Revisions</h2>
					<p>
						<?php
							$root = realpath($_SERVER["DOCUMENT_ROOT"]); 
							$revisionsFile = $root . "/music/Let Me Clear My Throat/revisions.txt";
							$handler = fopen($revisionsFile, 'r');
							$revisions = fread($handler, filesize($revisionsFile));
							echo $revisions;
						?>
					</p>