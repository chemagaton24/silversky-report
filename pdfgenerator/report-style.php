<style>
img {
	image-rendering: optimize-contrast;
	image-rendering: crisp-edges;
	image-rendering: -moz-crisp-edges;
	image-rendering: -o-crisp-edges;
	image-rendering: -webkit-optimize-contrast;
	-ms-interpolation-mode: nearest-neighbor;
}
table {
	font-size: 14px;
}
ol {
	padding: 0;
	counter-reset: item;
}
ol ol {
	padding-left: 32px;
	margin-top: 8px;
}
ol.no-padding, ol.no-padding ol {
	padding: 0;
}
ol > li {
	display: block;
	margin-bottom: 8px;
}
ol > li:before {
	content: counters(item, ".") ") ";
	counter-increment: item;
	font-weight: 900;
}
ol ul {
	margin: 24px 0;
}
ol ul > li {
	margin-bottom: 16px;
}
ol > li > b {
	color: #263C91;
}
.footer {
	position: fixed; 
	bottom: 0px; 
	left: 0px; 
	width: 100%;
	color: #939393;
	text-align: center;
	font-size: 14px;
}
.page__break { page-break-before: always; }
.report__main {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 15px;
}
.report__intro {
	position: absolute;
	left: 50%;
	top: 50%;
	transform: translate(-50%, -50%);
}
.report__intro-logo {
	position: absolute;
	left: 50%;
	top: -100px;
	transform: translate(-50%, -100%);
	width: 180px;
}
.report__intro-heading {
	font-size: 58px;
	margin: 0;
	color: #2a3b8a;
}
.report__intro-subheading {
	font-size: 14px;
	color: #69c0d6;
}
.report__table-of-contents {
	color: #263B91;
	font-family: Verdana, Geneva, Tahoma, sans-serif;
}
.report__overall-cyber-maturity-posture__table {
	width: 100%;
	border-spacing: 2px;
}
.report__overall-cyber-maturity-posture__table td {
	background-color: #edecec;
	padding: 12px;
}
.report__overall-cyber-maturity-posture__table td:first-child {
	color: #fff;
	font-size: 20px;
	text-align: center;
}
.report__overall-cyber-maturity-posture__table__tr--baseline td:first-child {
	background-color: #e0eaf5;
}
.report__overall-cyber-maturity-posture__table__tr--evolving td:first-child {
	background-color: #c2d5ec;
}
.report__overall-cyber-maturity-posture__table__tr--intermediate td:first-child {
	background-color: #a3c2e1;
}
.report__overall-cyber-maturity-posture__table__tr--advance td:first-child {
	background-color: #4172b0;
}
.report__overall-cyber-maturity-posture__table__tr--invested td:first-child {
	background-color: #2b4e76;
}
.report__maturity-across-cyber-domains__table {
	width: 100%;
	border-collapse: collapse;
}
.report__maturity-across-cyber-domains__table td {
	padding: 12px;
	border: 0;
}
.report__maturity-across-cyber-domains__table--identify {
	background-color: #CCC0DA;
}
.report__maturity-across-cyber-domains__table--protect {
	background-color: #00B0F0;
}
.report__maturity-across-cyber-domains__table--detect {
	background-color: #FFC000;
}
.report__maturity-across-cyber-domains__table--respond-recover {
	background-color: #92D050;
}
.report__maturity-across-cyber-domains__table-category {
	text-align: center;
	width: 60px;
}
.report__maturity-across-cyber-domains__table-category span {
	display: inline-block;
	transform: rotate(-90deg);
	transform-origin: 50% 50%;
	width: 60px;
}
.report__maturity-across-cyber-domains__table-value {
	text-align: center;
	width: 25%;
	outline: 1px solid #fff;
}
.report__maturity-across-cyber-domains__table-value--76-100 {
	background-color: #63BE7B;
}
.report__maturity-across-cyber-domains__table-value--51-75 {
	background-color: #86C97E;
}
.report__maturity-across-cyber-domains__table-value--26-50 {
	background-color: #FEDC81;
}
.report__maturity-across-cyber-domains__table-value--1-25 {
	background-color: #FCBF7B;
}
.report__maturity-across-cyber-domains__table-value--0 {
	background-color: #F8696B;
}
.report__maturity-across-core-functional-areas__table {
	width: 70%;
	text-align: center;
	margin: 0 auto;
	border-collapse: collapse;
	border-left: 1px solid #000;
	border-top: 1px solid #000;
}
.report__maturity-across-core-functional-areas__table thead {
	background-color: #9CC2E5;
}
.report__maturity-across-core-functional-areas__table th, .report__maturity-across-core-functional-areas__table td {
	border-right: 1px solid #000;
	border-bottom: 1px solid #000;
	padding: 12px;
}
.report__cyber-program-assessment__table {
	width: 100%;
	border-collapse: collapse;
}
.report__cyber-program-assessment__table thead {
	background-color: #263C91;
	color: #fff;
}
.report__cyber-program-assessment__table tbody {
	background-color: #EDEDED;
}
.report__cyber-program-assessment__table th, .report__cyber-program-assessment__table td {
	padding: 12px;
	outline: 3px solid #fff;
}
.report__cyber-program-assessment__table td {
	text-align: center;
}
.report__cyber-program-assessment__table td:first-child {
	text-align: left;
}
.report__maturity-improvement-areas__table {
	width: 100%;
	border-collapse: collapse;
	border-left: 1px solid #000;
	border-top: 1px solid #000;
}
.report__maturity-improvement-areas__table thead {
	background-color: #9CC2E5;
}
.report__maturity-improvement-areas__table td, .report__maturity-improvement-areas__table th {
	padding: 12px;
	border-right: 1px solid #000;
	border-bottom: 1px solid #000;
}
.report__maturity-improvement-areas__table td:first-child {
	background-color: #2F5496;
	color: #fff;
	text-align: center;
}
</style>