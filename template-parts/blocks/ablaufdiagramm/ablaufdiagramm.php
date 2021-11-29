<?php

/**
 * Accordion Repeater Block Interface .
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */



// Create id attribute allowing for custom "anchor" value.
$id = 'ablaufdiagramm-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

$className = 'ablaufdiagramm-animation-wrapper';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
    $className .= ' align' . $block['align'];
}

?>


	<section id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?>">	
	<div class="container">

		<div class="row">
			<div class="col-lg-7">	
				<div class="diagramm-grafik-grid" id="ablaufdiagrammContainer">


					<div class="grafikitem" data-diagram="1">Creation</div>
					<div class="grafikitem" data-diagram="2">Review</div>
					<div class="grafikitem" data-diagram="3">Approval</div>
					<div class="grafikitem" data-diagram="4">Training</div>
					<div class="grafikitem" data-diagram="5">Make Effective</div>
					<div class="grafikitem" data-diagram="6">Create new Revision</div>
					<div class="grafikitem" data-diagram="7">Withdraw</div>
					<div class="grafikitem" data-diagram="8">Distribution</div>
					<div class="grafikitem" data-diagram="9">Periodic Review</div>


					<div class="grafikline-container" style="grid-column: 5/span 4; grid-row: 1 / span 27"><hr class="grafikline-vertical"></div>

					<div class="grafikline-container" style="grid-column: 9 / span 1; grid-row: 18 / span 1; width: 50%"><hr class="grafikline-horizontal"></div>

					<div class="grafikline-container" style="grid-column: 9/span 1;
grid-row: 17 / span 3;
padding-left: 2px;"><hr class="grafikline-vertical"></div>

					
					<div class="grafikline-corner-tl" style=" grid-column: 9;  grid-row: 16;"></div>
					<div class="grafikline-corner-bl" style=" grid-column: 9;  grid-row: 20;"></div>


					<div class="grafikline-container" style="grid-column: 4 / span 3; grid-row: 22 / span 1;"><hr class="grafikline-horizontal" style=""></div>
					<div class="grafikline-container" style="grid-column: 1/span 1;
grid-row: 3 / span 18;
padding-left: 2px;"><hr class="grafikline-vertical"></div>
					<div class="grafikline-container" style="grid-column: 2 / span 3; grid-row: 2 / span 1;"><hr class="grafikline-horizontal" style=""></div>

					<div class="grafikline-corner-tl" style=" grid-column: 1;  grid-row: 2;"></div>

				</div>
			</div>
			<div class="col-lg-5" style="">
				<div class="diagramm-content">	


						<div class="animate-content" data-diagram="1">
							<h3 class="heading_lowercase">Erstellen / Bearbeiten</h3>
							<p>Mit der SOP Lösung der COI-PharmaSuite wird der Prozess der Dokumenterstellung auf Basis von Vorlagen unterstützt.</p>
						</div>
						<div class="animate-content" data-diagram="2">
							<h3 class="heading_lowercase">Prüfung</h3>
							<p>Nachdem das Autorenteam eine SOP erstellt hat, sieht der Workflow eine formale Prüfung durch weitere Funktionsträger vor. Die digitale Freigabe erfolgt mit wenigen Klicks auf Basis einer elektronischen Signatur und kommt ganz ohne Medienbrüche aus. Die Entscheidung über die Freigabe und die Signaturen werden selbstverständlich im Audit–Trail dokumentiert.</p>
						</div>
						<div class="animate-content" data-diagram="3">
							<h3 class="heading_lowercase">Signatur und Freigabe</h3>
							<p>Nach der Prüfung durchläuft jede SOP innerhalb des Workflows einen formale Freigabe-Schritt. Dieser kann Funktionsträger aus einer oder mehreren Abteilungen beinhalten.</p>
						</div>
						<div class="animate-content" data-diagram="4">
							<h3 class="heading_lowercase">Schulung</h3>
							<p>Das SOP-Management erfordert die lückenlose Dokumentation entsprechender Trainings bzw. Schulungen der Mitarbeiter. Diese wird innerhalb des Systems durch einen entsprechenden Workflow nachweisbar. Auch hier sorgt die elektronische Signatur des Schulungsteilnehmers als Beweis, dass die Schulung durchgeführt wurde für maximale Rechtssicherheit.</p>
						</div>
						<div class="animate-content" data-diagram="5">
							<h3 class="heading_lowercase">Inkrafttreten</h3>
							<p>Die SOP tritt mit Zeitstempel in Kraft. Der entsprechende Dokumenten Lifecycle bietet einen perfekten Audit Trail in regulierten Branchen.</p>
						</div>
						<div class="animate-content" data-diagram="6">
							<h3 class="heading_lowercase">Ersetzen</h3>
							<p>Neue Anforderungen oder geänderte Daten erfordern es eine SOP bzw. eine entsprechende Dokumentation wirksam zu ersetzen. Mit der COI-PharmaSuite ist diese Möglichkeit jederzeit gegeben – selbstverständlich dokumentiert der Audit Trail lückenlos alle Aktivitäten.</p>
						</div>
						<div class="animate-content" data-diagram="7">
							<h3 class="heading_lowercase">Zurückziehen</h3>
							<p>Auch das Zurückziehen einer SOP ist Teil des Lifecycles und mit der entsprechenden Berechtigung jederzeit möglich. Der Workflow unterstützt die notwendigen Maßnahmen.</p>
						</div>
						<div class="animate-content" data-diagram="8">
							<h3 class="heading_lowercase">Verteilung</h3>
							<p>Dank intelligenter Dokumentenmanagement Software ist die Verteilung und auch das Ersetzen der jeweils aktuellsten Version der SOPs ein einfacher und sicherer Prozess. </p>
						</div>
						<div class="animate-content" data-diagram="9">
							<h3 class="heading_lowercase">Periodische Prüfung und Review</h3>
							<p>Der vorgeschriebene, laufende Reviewprozess wird durch die automatisierte Erinnerungsfunktionen vereinfacht. </p>
						</div>

		
				</div>
			</div>
		</div>
	</div>

	</section>

