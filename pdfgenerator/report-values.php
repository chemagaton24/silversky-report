<?php
$q1 = 1;
$q2 = 1;
$q3 = 1;
$q4 = 1;
$q5 = 1;
$q6 = 1;
$q7 = 0;
$q8 = 1;
$q9 = 0;
$q10 = 0;
$q11 = 1;
$q12 = 1;
$q13 = 0;
$q14 = 1;
$q15 = 1;
$q16 = 1;
$q17 = 1;
$q18 = 1;
$q19 = 1;
$q20 = 0;
$q21 = 1;
$q22 = 0;
$q23 = 1;
$q24 = 1;
$q25 = 0;
$q26 = 1;
$q27 = 1;
$q28 = 1;
$q29 = 1;
$q30 = 0;
$q31 = 1;
$q32 = 0;
$q33 = 0;
$q34 = 0;
$q35 = 0;
$q36 = 1;
$q37 = 1;
$q38 = 0;
$q39 = 0;
$q40 = 0;
$q41 = 1;
$q42 = 0;
$q43 = 1;
$q44 = 1;
$q45 = 1;
$q46 = 1;
$q47 = 0;
$q48 = 1;
$q49 = 1;
$q50 = 1;
$q51 = 1;
$q52 = 0;
$q53 = 1;
$q54 = 0;
$q55 = 0;

//Maturity Across Cyber Domains
$identify_oversight = ($q1 + $q2 + $q3 + $q4) / 4;
$identify_it_asset_management = ($q5 + $q6 + $q7 + $q8) / 4;
$identify_risk_assessment = ($q9 + $q10 + $q11) / 3;
$identify_third_party_risk = ($q42 + $q43 + $q44 + $q45) / 4;
$protect_training_culture = ($q12 + $q13 + $q14 + $q15) / 4;
$protect_infrastructure_management = ($q23 + $q24 + $q25 + $q26 + $q27 + $q27) / 6;
$protect_patch_management = ($q39 + $q40 + $q41) / 3;
$detect_threat_intelligence_and_information = ($q16 + $q17 + $q18) / 3;
$detect_monitoring_and_analysis = ($q19 + $q20 + $q21 + $q22) / 4;
$detect_threat_and_vulnerability_detection = ($q29 + $q30 + $q31 + $q32 + $q33) / 5;
$detect_event_detection = ($q34 + $q35 + $q36 + $q37 + $q38) / 5;
$respond_recover_planning = ($q46 + $q47 + $q48 + $q49 + $q50) / 5;
$respond_recover_testing = ($q51 + $q52 + $q53) / 3;
$respond_recover_response_and_mitigation = ($q54 + $q55) / 2;

//Overall Cyber Maturity Average
$overall_cyber_maturity_average = round(($identify_oversight +
$identify_it_asset_management +
$identify_risk_assessment +
$identify_third_party_risk +
$protect_training_culture +
$protect_infrastructure_management +
$protect_patch_management +
$detect_threat_intelligence_and_information +
$detect_monitoring_and_analysis +
$detect_threat_and_vulnerability_detection +
$detect_event_detection +
$respond_recover_planning +
$respond_recover_testing +
$respond_recover_response_and_mitigation) / 14, 2);


//Overall Cyber Maturity Check
$overall_cyber_maturity_average_check = "";
if($overall_cyber_maturity_average >= .91 && $overall_cyber_maturity_average <= 1) {
    $overall_cyber_maturity_average_check = "innovative";
} else if($overall_cyber_maturity_average >= .76 && $overall_cyber_maturity_average <= .9) {
    $overall_cyber_maturity_average_check = "advanced";
} else if($overall_cyber_maturity_average >= .51 && $overall_cyber_maturity_average <= 75) {
    $overall_cyber_maturity_average_check = "intermediate";
} else if($overall_cyber_maturity_average >= .26 && $overall_cyber_maturity_average <= .5) {
    $overall_cyber_maturity_average_check = "evolving";
} else {
    $overall_cyber_maturity_average_check = "baseline";
}

//Maturity Across Core Functional Areas
$maturity_across_core_functional_areas_identify = ($identify_oversight +
$identify_it_asset_management +
$identify_risk_assessment +
$identify_third_party_risk) / 4;

$maturity_across_core_functional_areas_protect = ($protect_training_culture +
$protect_infrastructure_management +
$protect_patch_management) / 3;

$maturity_across_core_functional_areas_detect = ($detect_threat_intelligence_and_information +
$detect_monitoring_and_analysis +
$detect_threat_and_vulnerability_detection +
$detect_event_detection) / 4;

$maturity_across_core_functional_areas_respond_recover = ($respond_recover_planning +
$respond_recover_testing +
$respond_recover_response_and_mitigation) / 3;

//Identify Capability
$identify_capability_oversight = getCapability($identify_oversight);
$identify_capability_it_asset_management = getCapability($identify_it_asset_management);
$identify_capability_risk_assessment = getCapability($identify_risk_assessment);
$identify_capability_third_party_risk = getCapability($identify_third_party_risk);

//Protect Capability
$protect_capability_training_culture = getCapability($protect_training_culture);
$protect_capability_infrastructure_management = getCapability($protect_infrastructure_management);
$protect_capability_patch_management = getCapability($protect_patch_management);

//Detect Capability
$detect_capability_threat_intelligence_and_information = getCapability($detect_threat_intelligence_and_information);
$detect_capability_monitoring_and_analysis = getCapability($detect_monitoring_and_analysis);
$detect_capability_threat_and_vulnerability_detection = getCapability($detect_threat_and_vulnerability_detection);
$detect_capability_event_detection = getCapability($detect_event_detection);

//Response and Mitigation
$respond_recover_capability_planning = getCapability($respond_recover_planning);
$respond_recover_capability_testing = getCapability($respond_recover_testing);
$respond_recover_capability_response_and_mitigation = getCapability($respond_recover_response_and_mitigation);
?>