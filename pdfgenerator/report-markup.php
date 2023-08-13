<?php include './pdfgenerator/report-style.php'; ?>
<div class="report__main">
	<div class="report__intro">
		<div class="report__intro-subheading">EXECUTIVE REPORT</div>
		<div class="report__intro-heading">
			CYBERSECURITY<br/>
			MATURITY<br/>
			ASSESSMENT
		</div>
	</div>
	<div class="page__break"></div>
	<ol class="report__table-of-contents no-padding">
		<li><strong>Executive Summary</strong></li>
		<li><strong>Cyber Maturity Assessment</strong>
			<ol>
				<li>Overall Cyber Maturity Posture</li>
				<li>Maturity Across Cyber Domains</li>
				<li>Maturity Across Core Functional Areas</li>
				<li>Maturity by Industry Comparison</li>
				<li>Maturity by Organization Size Comparison</li>
			</ol>
		</li>
		<li><strong>Cyber Program Assessment</strong>
			<ol>
				<li>Identify</li>
				<li>Protect</li>
				<li>Detect</li>
				<li>Respond & Recover</li>
			</ol>
		</li>
		<li><strong>Summary of recommended measures/countermeasures</strong>
			<ol>
				<li>Maturity Improvement Areas</li>
				<li>What Can SilverSky Do To Help?</li>
			</ol>
		</li>
		<li><strong>Benchmarking</strong></li>
	</ol>
	<br />
	<br />
	<ol class="no-padding">
		<li>
			<b>Executive Summary</b>
			<p>The SilverSky Cybersecurity Assessment is based off a combination of several industry frameworks to provide a simple best practice assessment that can measure your cyber program’s maturity. This report helps identify maturity improvement areas and provides recommendations to assist your organization in prioritizing risk mitigation improvements.  The report also provides insight into how your cyber maturity measures up to your industry peers and like sized organizations.</p>
		</li>
		<li>
			<b>Cyber Maturity Assessment</b>
			<ol>
				<li>
					<b>Overall Cyber Maturity Posture</b>
					<p>Based on the answers to the SilverSky’s Cyber Assessment your organization’s cyber maturity falls within the 40th percentile which classifies you within the Evolving phase of Maturity.</p>
					<br />
					<br />
					<div><img src="./pdfgenerator/charts/overall-cyber-maturity.png" /></div>
					<br />
					<br />
					<table class="report__overall-cyber-maturity-posture__table">
						<tbody>
							<tr class="report__overall-cyber-maturity-posture__table__tr--baseline">
								<td>Baseline</td>
								<td>Baseline maturity is characterized as those organizations meeting minimum expectations recommended by best practice security, industry frameworks and regulations. </td>
								<td><?php if($overall_cyber_maturity_average_check == 'baseline'): ?><img src="./pdfgenerator/assets/check.png" width="16" /><?php endif; ?></td>
							</tr>
							<tr class="report__overall-cyber-maturity-posture__table__tr--evolving">
								<td>Evolving</td>
								<td>Evolving maturity is characterized as those organizations that have begun to invested in Cyber security and may show strong maturity in one or more cyber domains but are still in need of maturing across multiple cyber domains. </td>
								<td><?php if($overall_cyber_maturity_average_check == 'evolving'): ?><img src="./pdfgenerator/assets/check.png" width="16" /><?php endif; ?></td>
							</tr>
							<tr class="report__overall-cyber-maturity-posture__table__tr--intermediate">
								<td>Intermediate</td>
								<td>Intermediate maturity is characterized as those organizations that have started their cyber journey by building solid maturity across multiple cyber domains but may be lacking maturity in a few cyber domains.</td>
								<td><?php if($overall_cyber_maturity_average_check == 'intermediate'): ?><img src="./pdfgenerator/assets/check.png" width="16" /><?php endif; ?></td>
							</tr>
							<tr class="report__overall-cyber-maturity-posture__table__tr--advance">
								<td>Advance</td>
								<td>Advanced maturity is characterized as those organizations that have committed to building a comprehensive cyber program and show solid maturity across all cyber domains but may be lacking maturity in a one or more cyber domains.</td>
								<td><?php if($overall_cyber_maturity_average_check == 'advance'): ?><img src="./pdfgenerator/assets/check.png" width="16" /><?php endif; ?></td>
							</tr>
							<tr class="report__overall-cyber-maturity-posture__table__tr--invested">
								<td>Invested</td>
								<td>Invested maturity is characterized as those organizations that have a strong commitment to cyber security and have invested in the people, processes and technologies to show comprehensive cyber maturity in all assessed cyber domains.</td>
								<td><?php if($overall_cyber_maturity_average_check == 'invested'): ?><img src="./pdfgenerator/assets/check.png" width="16" /><?php endif; ?></td>
							</tr>
						</tbody>
					</table>
					<div class="page__break"></div>
				</li>
				<li>
					<b>Maturity Across Cyber Domains</b>
					<p>Below is a single view of all capabilities covered in this assessment and their results.  SilverSky measured your organization’s cyber maturity across fourteen (14) common domains and four (4) key pillars or functions.  The questions represented in this survey are SilverSky’s representation of best practices relating to each of these domains and pillars and will assist in providing strategic guidance on where to focus time and energy in building additional cyber capabilities.</p>
					<br />
					<p>The red color in the chart represents  areas of low or no maturity, orange represents areas where some or weak maturity exists and green reresents areas of hightened maturity.</p>
					<br />
					<table class="report__maturity-across-cyber-domains__table">
						<tbody class="report__maturity-across-cyber-domains__table--identify">
							<tr>
								<td rowspan="4" class="report__maturity-across-cyber-domains__table-category"><span>Identify</span></td>
								<td>Oversight</td>
								<td class="report__maturity-across-cyber-domains__table-value report__maturity-across-cyber-domains__table-value--<?php echo val_class_range($identify_oversight) ?>"><?php echo to_whole_num($identify_oversight) ?>%</td>
							</tr>
							<tr>
								<td>IT Asset Management</td>
								<td class="report__maturity-across-cyber-domains__table-value report__maturity-across-cyber-domains__table-value--<?php echo val_class_range($identify_it_asset_management) ?>"><?php echo to_whole_num($identify_it_asset_management) ?>%</td>
							</tr>
							<tr>
								<td>Risk Assessment</td>
								<td class="report__maturity-across-cyber-domains__table-value report__maturity-across-cyber-domains__table-value--<?php echo val_class_range($identify_risk_assessment) ?>"><?php echo to_whole_num($identify_risk_assessment) ?>%</td>
							</tr>
							<tr>
								<td>Third Party Risk</td>
								<td class="report__maturity-across-cyber-domains__table-value report__maturity-across-cyber-domains__table-value--<?php echo val_class_range($identify_third_party_risk) ?>"><?php echo to_whole_num($identify_third_party_risk) ?>%</td>
							</tr>
						</tbody>
						<tbody class="report__maturity-across-cyber-domains__table--protect">
							<tr>
								<td rowspan="3" class="report__maturity-across-cyber-domains__table-category"><span>Protect</span></td>
								<td>Training/Culture</td>
								<td class="report__maturity-across-cyber-domains__table-value report__maturity-across-cyber-domains__table-value--<?php echo val_class_range($protect_training_culture) ?>"><?php echo to_whole_num($protect_training_culture) ?>%</td>
							</tr>
							<tr>
								<td>Infrastructure Management</td>
								<td class="report__maturity-across-cyber-domains__table-value report__maturity-across-cyber-domains__table-value--<?php echo val_class_range($protect_infrastructure_management) ?>"><?php echo to_whole_num($protect_infrastructure_management) ?>%</td>
							</tr>
							<tr>
								<td>Patch Management</td>
								<td class="report__maturity-across-cyber-domains__table-value report__maturity-across-cyber-domains__table-value--<?php echo val_class_range($protect_patch_management) ?>"><?php echo to_whole_num($protect_patch_management) ?>%</td>
							</tr>
						</tbody>
						<tbody class="report__maturity-across-cyber-domains__table--detect">
							<tr>
								<td rowspan="4" class="report__maturity-across-cyber-domains__table-category"><span>Detect</span></td>
								<td>Threat Intelligence and Information</td>
								<td class="report__maturity-across-cyber-domains__table-value report__maturity-across-cyber-domains__table-value--<?php echo val_class_range($detect_threat_intelligence_and_information) ?>"><?php echo to_whole_num($detect_threat_intelligence_and_information) ?>%</td>
							</tr>
							<tr>
								<td>Monitoring and Analyzing</td>
								<td class="report__maturity-across-cyber-domains__table-value report__maturity-across-cyber-domains__table-value--<?php echo val_class_range($detect_monitoring_and_analysis) ?>"><?php echo to_whole_num($detect_monitoring_and_analysis) ?>%</td>
							</tr>
							<tr>
								<td>Threat and Vulnerability Detection</th>
								<td class="report__maturity-across-cyber-domains__table-value report__maturity-across-cyber-domains__table-value--<?php echo val_class_range($detect_threat_and_vulnerability_detection) ?>"><?php echo to_whole_num($detect_threat_and_vulnerability_detection) ?>%</td>
							</tr>
							<tr>
								<td>Event Detection</td>
								<td class="report__maturity-across-cyber-domains__table-value report__maturity-across-cyber-domains__table-value--<?php echo val_class_range($detect_event_detection) ?>"><?php echo to_whole_num($detect_event_detection) ?>%</td>
							</tr>
						</tbody>
						<tbody class="report__maturity-across-cyber-domains__table--respond-recover">
							<tr>
								<td rowspan="3" class="report__maturity-across-cyber-domains__table-category">
									<span>Respond/Recover</span>
								</td>
								<td>Planning</td>
								<td class="report__maturity-across-cyber-domains__table-value report__maturity-across-cyber-domains__table-value--<?php echo val_class_range($respond_recover_planning) ?>"><?php echo to_whole_num($respond_recover_planning) ?>%</td>
							</tr>
							<tr>
								<td>Testing</td>
								<td class="report__maturity-across-cyber-domains__table-value report__maturity-across-cyber-domains__table-value--<?php echo val_class_range($respond_recover_testing) ?>"><?php echo to_whole_num($respond_recover_testing) ?>%</td>
							</tr>
							<tr>
								<td>Mitigation and Recovery</td>
								<td class="report__maturity-across-cyber-domains__table-value report__maturity-across-cyber-domains__table-value--<?php echo val_class_range($respond_recover_response_and_mitigation) ?>"><?php echo to_whole_num($respond_recover_response_and_mitigation) ?>%</td>
							</tr>
						</tbody>
					</table>
					<div class="page__break"></div>
				</li>
				<li>
					<b>Maturity Across Core Functional Areas</b>
					<p>The core functional assessment looks at your organizational cyber maturity across four (4) functional areas that help make up a cyber program.  Those functional areas are comprised of the Identify, Protect, Detect and Response/Recovery phases of a cyber program. These four functions, when combined, provide the key program areas for building out a comprehensive cyber program.</p>
					<ul>
						<li><strong>Identify</strong> – Assessment of the Organization’s ability to develop an organizational understanding to manage cyber security risk</li>
						<li><strong>Protect</strong> - Assessment of the Organization’s ability to develop and implement appropriate safeguards to ensure</li>
						<li><strong>Detect</strong> – Assessment of the Organization’s ability to develop and implement the appropriate activities to identify the occurrence of a cybersecurity event</li>
						<li><strong>Respond/Recover</strong> - Assessment of the Organization’s ability to develop and implement the appropriate activities to take action and restore operations from a detected cybersecurity event.</li>
					</ul>
					<br />
					<table class="report__maturity-across-core-functional-areas__table">
						<thead>
							<tr>
								<th>Functional Pillar</th>
								<th>Current Cyber Maturity</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>Identify</td>
								<td><?php echo to_whole_num($maturity_across_core_functional_areas_identify) ?>%</td>
							</tr>
							<tr>
								<td>Protect</td>
								<td><?php echo to_whole_num($maturity_across_core_functional_areas_protect) ?>%</td>
							</tr>
							<tr>
								<td>Detect</td>
								<td><?php echo to_whole_num($maturity_across_core_functional_areas_detect) ?>%</td>
							</tr>
							<tr>
								<td>Respond/Recover</td>
								<td><?php echo to_whole_num($maturity_across_core_functional_areas_respond_recover) ?>%</td>
							</tr>
							
						</tbody>
					</table>
					<br />
					<br />
					<img src="./pdfgenerator/charts/maturity-by-domain.png" />
					<div class="page__break"></div>
				</li>
				<li>
					<b>Maturity by Industry Comparison</b>
					<p>FUTURE AREA ONCE WE HAVE MORE SURVEYS COMPLETED</p>
					<img src="./pdfgenerator/charts/maturity-by-industry-comparison.png" />
					<br/>
					<br/>
				</li>
				<li>
					<b>Maturity by Organizational Size Comparison</b>
					<p>FUTURE AREA ONCE WE HAVE MORE SURVEYS COMPLETED</p>
				</li>
			</ol>
		</li>
		<li>
			<b>Cyber Program Assessment</b>
			<ol>
				<li>
					<b>Identify</b>
					<p>During the assessment your organization showed a Sixty Percent (60%) maturity score within Identify functional cyber capability area.  The Identify capability group assists in developing an organizational understanding of managing cybersecurity risks to systems, people, assets, data, and capabilities. Understanding the business context, the resources that support critical functions, and the related cybersecurity risks enables an organization to focus and prioritize its efforts, consistent with its risk management strategy and business needs.</p>
					<p>The Identify Category is made up of four domains as part of SilverSky’s assessment:</p>
					<strong>Oversight</strong><br/>
					<p>Measures if proper structure is in place including people, policies, procedures, and processes to manage and monitor the organization’s regulatory, legal, risk, environmental, and operational requirements. </p>
					<strong>Asset Management</strong><br/>
					<p>Measures the organizational process that exists to identify and manage the devices and systems that enable the organization to achieve business purposes are identified and managed consistent with their relative importance to organizational objectives and the organization’s risk strategy.</p>
					<div class="page__break"></div>
					<strong>Risk Assessment</strong><br/>
					<p>Measures if the organization understands the cybersecurity risks to organizational operations (including mission, functions, image, or reputation), organizational assets, and individuals.</p>
					<strong>Third Party Risk</strong><br/>
					<p>Measures the organizational maturity around its third party and supply chain risk management processes.</p>
					<p>Your maturity results for each domain within the Identify functional security area are as follows:</p>
					<table class="report__cyber-program-assessment__table">
						<thead>
							<tr>
								<th rowspan="2">CAPABILITY</th>
								<th colspan="5">CAPABILITY LEVEL</th>
							</tr>
							<tr>
								<th>VERY LOW</th>
								<th>LOW</th>
								<th>MEDIUM</th>
								<th>HIGH</th>
								<th>VERY HIGH</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>Oversight</td>
								<td><?php if($identify_capability_oversight == 1): ?><img src="./pdfgenerator/assets/check.png" width="16" /><?php endif; ?></td>
								<td><?php if($identify_capability_oversight == 2): ?><img src="./pdfgenerator/assets/check.png" width="16" /><?php endif; ?></td>
								<td><?php if($identify_capability_oversight == 3): ?><img src="./pdfgenerator/assets/check.png" width="16" /><?php endif; ?></td>
								<td><?php if($identify_capability_oversight == 4): ?><img src="./pdfgenerator/assets/check.png" width="16" /><?php endif; ?></td>
								<td><?php if($identify_capability_oversight == 5): ?><img src="./pdfgenerator/assets/check.png" width="16" /><?php endif; ?></td>
							</tr>
							<tr>
								<td>IT Asset Management</td>
								<td><?php if($identify_capability_it_asset_management == 1): ?><img src="./pdfgenerator/assets/check.png" width="16" /><?php endif; ?></td>
								<td><?php if($identify_capability_it_asset_management == 2): ?><img src="./pdfgenerator/assets/check.png" width="16" /><?php endif; ?></td>
								<td><?php if($identify_capability_it_asset_management == 3): ?><img src="./pdfgenerator/assets/check.png" width="16" /><?php endif; ?></td>
								<td><?php if($identify_capability_it_asset_management == 4): ?><img src="./pdfgenerator/assets/check.png" width="16" /><?php endif; ?></td>
								<td><?php if($identify_capability_it_asset_management == 5): ?><img src="./pdfgenerator/assets/check.png" width="16" /><?php endif; ?></td>
							</tr>
							<tr>
								<td>Risk Assessment</td>
								<td><?php if($identify_capability_risk_assessment == 1): ?><img src="./pdfgenerator/assets/check.png" width="16" /><?php endif; ?></td>
								<td><?php if($identify_capability_risk_assessment == 2): ?><img src="./pdfgenerator/assets/check.png" width="16" /><?php endif; ?></td>
								<td><?php if($identify_capability_risk_assessment == 3): ?><img src="./pdfgenerator/assets/check.png" width="16" /><?php endif; ?></td>
								<td><?php if($identify_capability_risk_assessment == 4): ?><img src="./pdfgenerator/assets/check.png" width="16" /><?php endif; ?></td>
								<td><?php if($identify_capability_risk_assessment == 5): ?><img src="./pdfgenerator/assets/check.png" width="16" /><?php endif; ?></td>
							</tr>
							<tr>
								<td>Third Party Risk</td>
								<td><?php if($identify_capability_third_party_risk == 1): ?><img src="./pdfgenerator/assets/check.png" width="16" /><?php endif; ?></td>
								<td><?php if($identify_capability_third_party_risk == 2): ?><img src="./pdfgenerator/assets/check.png" width="16" /><?php endif; ?></td>
								<td><?php if($identify_capability_third_party_risk == 3): ?><img src="./pdfgenerator/assets/check.png" width="16" /><?php endif; ?></td>
								<td><?php if($identify_capability_third_party_risk == 4): ?><img src="./pdfgenerator/assets/check.png" width="16" /><?php endif; ?></td>
								<td><?php if($identify_capability_third_party_risk == 5): ?><img src="./pdfgenerator/assets/check.png" width="16" /><?php endif; ?></td>
							</tr>
						</tbody>
					</table>
					<br/>
				</li>
				<li>
					<b>Protect</b>
					<p>During the assessment your organization showed a Thirty Nine Percent (39%) maturity score within the protect functional cyber capability area.  The Protect capability group outlines appropriate safeguards to ensure delivery of critical infrastructure services. The Protect Function supports the ability to limit or contain the impact of a potential cybersecurity event.</p>
					<p>The Protect Category is made up of three domains as part of SilverSky’s assessment:</p>
					<p><strong>Training/Culture –</strong> Measures the organization’s maturity around providing personnel and partners cybersecurity awareness education and testing to enforce their duties and responsibilities consistent with related policies, procedures, and agreements.</p>
					<p><strong>Infrastructure Management –</strong> Measures the organization’s maturity around the ability to manage and maintain information system components consistent with policies and procedures.</p>
					<div class="page__break"></div>
					<p><strong>Patch Management -</strong> Measures the organization's ability to patch systems from potential threats and vulnerabilities that can expose systems to comprimise.</p>
					<p>Your maturity results for each domain within the Protect functional security area are as follows:</p>
					<table class="report__cyber-program-assessment__table">
						<thead>
							<tr>
								<th rowspan="2">CAPABILITY</th>
								<th colspan="5">CAPABILITY LEVEL</th>
							</tr>
							<tr>
								<th>VERY LOW</th>
								<th>LOW</th>
								<th>MEDIUM</th>
								<th>HIGH</th>
								<th>VERY HIGH</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>Training/Culture</td>
								<td><?php if($protect_capability_training_culture == 1): ?><img src="./pdfgenerator/assets/check.png" width="16" /><?php endif; ?></td>
								<td><?php if($protect_capability_training_culture == 2): ?><img src="./pdfgenerator/assets/check.png" width="16" /><?php endif; ?></td>
								<td><?php if($protect_capability_training_culture == 3): ?><img src="./pdfgenerator/assets/check.png" width="16" /><?php endif; ?></td>
								<td><?php if($protect_capability_training_culture == 4): ?><img src="./pdfgenerator/assets/check.png" width="16" /><?php endif; ?></td>
								<td><?php if($protect_capability_training_culture == 5): ?><img src="./pdfgenerator/assets/check.png" width="16" /><?php endif; ?></td>
							</tr>
							<tr>
								<td>Infrastructure Management</td>
								<td><?php if($protect_capability_infrastructure_management == 1): ?><img src="./pdfgenerator/assets/check.png" width="16" /><?php endif; ?></td>
								<td><?php if($protect_capability_infrastructure_management == 2): ?><img src="./pdfgenerator/assets/check.png" width="16" /><?php endif; ?></td>
								<td><?php if($protect_capability_infrastructure_management == 3): ?><img src="./pdfgenerator/assets/check.png" width="16" /><?php endif; ?></td>
								<td><?php if($protect_capability_infrastructure_management == 4): ?><img src="./pdfgenerator/assets/check.png" width="16" /><?php endif; ?></td>
								<td><?php if($protect_capability_infrastructure_management == 5): ?><img src="./pdfgenerator/assets/check.png" width="16" /><?php endif; ?></td>
							</tr>
							<tr>
								<td>Patch Management</td>
								<td><?php if($protect_capability_patch_management == 1): ?><img src="./pdfgenerator/assets/check.png" width="16" /><?php endif; ?></td>
								<td><?php if($protect_capability_patch_management == 2): ?><img src="./pdfgenerator/assets/check.png" width="16" /><?php endif; ?></td>
								<td><?php if($protect_capability_patch_management == 3): ?><img src="./pdfgenerator/assets/check.png" width="16" /><?php endif; ?></td>
								<td><?php if($protect_capability_patch_management == 4): ?><img src="./pdfgenerator/assets/check.png" width="16" /><?php endif; ?></td>
								<td><?php if($protect_capability_patch_management == 5): ?><img src="./pdfgenerator/assets/check.png" width="16" /><?php endif; ?></td>
							</tr>
						</tbody>
					</table>
					<br/>
				</li>
				<li>
					<b>Detect</b>
					<p>During the assessment your organization showed maturity level of Fifteen Percent (15%)  within the detect functional cyber capability area.  The Detect Function enables timely discovery of cybersecurity events.</p>
					<p>The Detect Category is made up of four domains as part of SilverSky’s assessment:</p>
					<p><strong>Threat Intelligence and Information –</strong> Measures how well an organization can acquire and analyze information to identify, track, and predict cyber capabilities, intentions, and activities</p>
					<p><strong>Monitoring and Analyzing –</strong> Measures how well your information system and assets are monitored to identify cybersecurity events and verify the effectiveness of protective measures</p>
					<p><strong>Threat and Vulnerability Detection –</strong> Measures an organizations ability to detect and eradicate threats and vulnerabilities within their environment.</p>
					<div class="page__break"></div>
					<p><strong>Event Detection –</strong> Measures an organizations ability to detect malicious activity within their networks.</p>
					<p>Your maturity results for each domain within the Detect functional security area are as follows:</p>
					<table class="report__cyber-program-assessment__table">
						<thead>
							<tr>
								<th rowspan="2">CAPABILITY</th>
								<th colspan="5">CAPABILITY LEVEL</th>
							</tr>
							<tr>
								<th>VERY LOW</th>
								<th>LOW</th>
								<th>MEDIUM</th>
								<th>HIGH</th>
								<th>VERY HIGH</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>Threat Intelligence and Information</td>
								<td><?php if($detect_capability_threat_intelligence_and_information == 1): ?><img src="./pdfgenerator/assets/check.png" width="16" /><?php endif; ?></td>
								<td><?php if($detect_capability_threat_intelligence_and_information == 2): ?><img src="./pdfgenerator/assets/check.png" width="16" /><?php endif; ?></td>
								<td><?php if($detect_capability_threat_intelligence_and_information == 3): ?><img src="./pdfgenerator/assets/check.png" width="16" /><?php endif; ?></td>
								<td><?php if($detect_capability_threat_intelligence_and_information == 4): ?><img src="./pdfgenerator/assets/check.png" width="16" /><?php endif; ?></td>
								<td><?php if($detect_capability_threat_intelligence_and_information == 5): ?><img src="./pdfgenerator/assets/check.png" width="16" /><?php endif; ?></td>
							</tr>
							<tr>
								<td>Monitoring and Analyzing</td>
								<td><?php if($detect_capability_monitoring_and_analysis == 1): ?><img src="./pdfgenerator/assets/check.png" width="16" /><?php endif; ?></td>
								<td><?php if($detect_capability_monitoring_and_analysis == 2): ?><img src="./pdfgenerator/assets/check.png" width="16" /><?php endif; ?></td>
								<td><?php if($detect_capability_monitoring_and_analysis == 3): ?><img src="./pdfgenerator/assets/check.png" width="16" /><?php endif; ?></td>
								<td><?php if($detect_capability_monitoring_and_analysis == 4): ?><img src="./pdfgenerator/assets/check.png" width="16" /><?php endif; ?></td>
								<td><?php if($detect_capability_monitoring_and_analysis == 5): ?><img src="./pdfgenerator/assets/check.png" width="16" /><?php endif; ?></td>
							</tr>
							<tr>
								<td>Threat and Vulnerability Detection</td>
								<td><?php if($detect_capability_threat_and_vulnerability_detection == 1): ?><img src="./pdfgenerator/assets/check.png" width="16" /><?php endif; ?></td>
								<td><?php if($detect_capability_threat_and_vulnerability_detection == 2): ?><img src="./pdfgenerator/assets/check.png" width="16" /><?php endif; ?></td>
								<td><?php if($detect_capability_threat_and_vulnerability_detection == 3): ?><img src="./pdfgenerator/assets/check.png" width="16" /><?php endif; ?></td>
								<td><?php if($detect_capability_threat_and_vulnerability_detection == 4): ?><img src="./pdfgenerator/assets/check.png" width="16" /><?php endif; ?></td>
								<td><?php if($detect_capability_threat_and_vulnerability_detection == 5): ?><img src="./pdfgenerator/assets/check.png" width="16" /><?php endif; ?></td>
							</tr>
							<tr>
								<td>Event Detection</td>
								<td><?php if($detect_capability_event_detection == 1): ?><img src="./pdfgenerator/assets/check.png" width="16" /><?php endif; ?></td>
								<td><?php if($detect_capability_event_detection == 2): ?><img src="./pdfgenerator/assets/check.png" width="16" /><?php endif; ?></td>
								<td><?php if($detect_capability_event_detection == 3): ?><img src="./pdfgenerator/assets/check.png" width="16" /><?php endif; ?></td>
								<td><?php if($detect_capability_event_detection == 4): ?><img src="./pdfgenerator/assets/check.png" width="16" /><?php endif; ?></td>
								<td><?php if($detect_capability_event_detection == 5): ?><img src="./pdfgenerator/assets/check.png" width="16" /><?php endif; ?></td>
							</tr>
						</tbody>
					</table>
					<br/>
				</li>
				<li>
					<b>Respond & Recover</b>
					<p>During the assessment your organization showed a Forty Eight Percent (48%)  maturity within Respond and Recover functional cyber capability area.  The Respond and Recover capability group includes appropriate activities to take action regarding a detected cybersecurity incident. The Respond Function supports the ability to contain the impact of a potential cybersecurity incident.</p>
					<p>The Respond and Recover Category is made up of three domains as part of SilverSky’s assessment:</p>
					<p><strong>Response Planning</strong></p>
					<p>Measures the organizational maturity around how response processes and procedures are executed and maintained, to ensure response to detected cybersecurity incidents.</p>
					<p><strong>Testing</strong></p>
					<p>Measures the organizational readiness to handle an incident through its ability to communicate and test their incident response processes.</p>
					<div class="page__break"></div>
					<p><strong>Response and Mitigation</strong></p>
					<p>Measures the organizational capability to prevent expansion of an event, mitigate its effects, and resolve the incident.</p>
					<p>Your maturity results for each domain within the Respond/Recover functional security area are as follows:</p>
					<table class="report__cyber-program-assessment__table">
						<thead>
							<tr>
								<th rowspan="2">CAPABILITY</th>
								<th colspan="5">CAPABILITY LEVEL</th>
							</tr>
							<tr>
								<th>VERY LOW</th>
								<th>LOW</th>
								<th>MEDIUM</th>
								<th>HIGH</th>
								<th>VERY HIGH</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>Response Planning</td>
								<td><?php if($respond_recover_capability_planning == 1): ?><img src="./pdfgenerator/assets/check.png" width="16" /><?php endif; ?></td>
								<td><?php if($respond_recover_capability_planning == 2): ?><img src="./pdfgenerator/assets/check.png" width="16" /><?php endif; ?></td>
								<td><?php if($respond_recover_capability_planning == 3): ?><img src="./pdfgenerator/assets/check.png" width="16" /><?php endif; ?></td>
								<td><?php if($respond_recover_capability_planning == 4): ?><img src="./pdfgenerator/assets/check.png" width="16" /><?php endif; ?></td>
								<td><?php if($respond_recover_capability_planning == 5): ?><img src="./pdfgenerator/assets/check.png" width="16" /><?php endif; ?></td>
							</tr>
							<tr>
								<td>Testing</td>
								<td><?php if($respond_recover_capability_testing == 1): ?><img src="./pdfgenerator/assets/check.png" width="16" /><?php endif; ?></td>
								<td><?php if($respond_recover_capability_testing == 2): ?><img src="./pdfgenerator/assets/check.png" width="16" /><?php endif; ?></td>
								<td><?php if($respond_recover_capability_testing == 3): ?><img src="./pdfgenerator/assets/check.png" width="16" /><?php endif; ?></td>
								<td><?php if($respond_recover_capability_testing == 4): ?><img src="./pdfgenerator/assets/check.png" width="16" /><?php endif; ?></td>
								<td><?php if($respond_recover_capability_testing == 5): ?><img src="./pdfgenerator/assets/check.png" width="16" /><?php endif; ?></td>
							</tr>
							<tr>
								<td>Response and Mitigation</td>
								<td><?php if($respond_recover_capability_response_and_mitigation == 1): ?><img src="./pdfgenerator/assets/check.png" width="16" /><?php endif; ?></td>
								<td><?php if($respond_recover_capability_response_and_mitigation == 2): ?><img src="./pdfgenerator/assets/check.png" width="16" /><?php endif; ?></td>
								<td><?php if($respond_recover_capability_response_and_mitigation == 3): ?><img src="./pdfgenerator/assets/check.png" width="16" /><?php endif; ?></td>
								<td><?php if($respond_recover_capability_response_and_mitigation == 4): ?><img src="./pdfgenerator/assets/check.png" width="16" /><?php endif; ?></td>
								<td><?php if($respond_recover_capability_response_and_mitigation == 5): ?><img src="./pdfgenerator/assets/check.png" width="16" /><?php endif; ?></td>
							</tr>
						</tbody>
					</table>
				</li>
			</ol>
		</li>
		<li>
			<b>Summary of recommended measures/countermeasures</b>
			<div class="page__break"></div>
			<ol>
				<li>
					<b>Maturity Improvement Areas</b>
					<p>Based on the results of the assessment, your organization would experience the highest level of Cyber maturity growth by focusing on the following cyber domains:</p>
					<br/>
					<br/>
					<table class="report__maturity-improvement-areas__table">
						<thead>
							<tr>
								<th></th>
								<th>Domain</th>
								<th>Why is it Important?</th>
							</tr>
						</thead>
						<tbody>
							<?php $count = 1; ?>
							<?php foreach ($maturity_imporvement_areas as $key => $area): ?>
							<?php if(to_whole_num($area) <= 25): ?>
							<tr>
								<td><?php echo $count ?></td>
								<td><?php echo $key ?></td>
								<td><?php echo $why_is_it_important[$key] ?></td>
							</tr>
							<?php $count++ ?>
							<?php endif ?>
							<?php endforeach ?>
						</tbody>
					</table>
					<br/>
					<br/>
				</li>
				<li>
					<b>What Can SilverSky Do To Help?</b>
					<p>The matrix below contains a description for each of the measures/countermeasures and lists them in a ranked order with the highest benefit at the top.</p>
					<table class="report__maturity-improvement-areas__table">
						<thead>
							<tr>
								<th></th>
								<th>Domain</th>
								<th>How Can We Help?</th>
							</tr>
						</thead>
						<tbody>
						<?php $count = 1; ?>
							<?php foreach ($maturity_imporvement_areas as $key => $area): ?>
							<?php if(to_whole_num($area) <= 25): ?>
							<tr>
								<td><?php echo $count ?></td>
								<td><?php echo $key ?></td>
								<td><?php echo $how_can_we_help[$key] ?></td>
							</tr>
							<?php $count++ ?>
							<?php endif ?>
							<?php endforeach ?>
						</tbody>
					</table>
					<br/>
					<br/>
				</li>
			</ol>
		</li>
		<li>
			<b>Benchmarking</b>
			<p>The chart below shows your capability levels compared to the average responses.</p>
		</li>
	</ol>
	<div class="page__break"></div>
	<strong>Key</strong>
	<ol>
		<li>Response Planning</li>
		<li>Maintenance</li>
		<li>Device Hardening</li>
		<li>Information Protection Processes and Procedures</li>
		<li>Improvements</li>
		<li>Detection Processes</li>
		<li>Asset Management</li>
		<li>Governance</li>
		<li>Anomalies and Events</li>
		<li>Protective Technology</li>
		<li>Risk Assessment</li>
		<li>Mitigation</li>
		<li>Security Continuous Monitoring</li>
		<li>Analysis</li>
		<li>Data Security</li>
	</ol>
</div>