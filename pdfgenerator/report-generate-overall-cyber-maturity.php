<?php
require_once('./pdfgenerator/quickchart/QuickChart.php');

$qc = new QuickChart(array(
	'width' => 720,
	'height' => 300,
	'version' => '2',
));

$qc->setApiKey('q-3kgf39bpqfy6lh4ah0bvoz7yj6rqi96l');

$chart_val_overall_cyber_maturity_average = round($overall_cyber_maturity_average * 100);

$config = <<<EOD
{
  "type": "horizontalBar",
  "data": {
    "datasets": [
      {
        "label": "Overall Cyber Posture",
        "backgroundColor": "rgba(184,204,228, 0.5)",
        "borderColor": "rgb(184,204,228)",
        "borderWidth": 1,
        "data": [
          $chart_val_overall_cyber_maturity_average,
          0,
          100
        ],
        "fill": false,
        "spanGaps": false,
        "lineTension": 0.4,
        "pointRadius": 3,
        "pointHoverRadius": 3,
        "pointStyle": "circle",
        "borderDash": [
          0,
          0
        ],
        "barPercentage": 0.9,
        "categoryPercentage": 0.4,
        "type": "horizontalBar",
        "hidden": false
      }
    ],
    "labels": []
  },
  "options": {
    "title": {
      "display": true,
      "text": "Overall Cyber Maturity",
      "position": "top",
      "fontSize": 12,
      "fontFamily": "sans-serif",
      "fontColor": "#666666",
      "fontStyle": "bold",
      "padding": 10,
      "lineHeight": 1.2
    },
    "layout": {
      "padding": {},
      "left": 0,
      "right": 0,
      "top": 0,
      "bottom": 0
    },
    "legend": {
      "position": "bottom",
      "display": true,
      "align": "center",
      "fullWidth": true,
      "reverse": false,
      "labels": {
        "fontSize": 12,
        "fontFamily": "sans-serif",
        "fontColor": "#666666",
        "fontStyle": "normal",
        "padding": 10
      }
    },
    "scales": {
      "xAxes": [
        {
          "id": "X1",
          "display": true,
          "position": "bottom",
          "type": "linear",
          "stacked": false,
          "offset": true,
          "time": {
            "unit": false,
            "stepSize": 1,
            "displayFormats": {
              "millisecond": "h:mm:ss.SSS a",
              "second": "h:mm:ss a",
              "minute": "h:mm a",
              "hour": "hA",
              "day": "MMM D",
              "week": "ll",
              "month": "MMM YYYY",
              "quarter": "[Q]Q - YYYY",
              "year": "YYYY"
            }
          },
          "distribution": "linear",
          "gridLines": {
            "display": true,
            "color": "rgba(0, 0, 0, 0.1)",
            "borderDash": [
              0,
              0
            ],
            "lineWidth": 1,
            "drawBorder": true,
            "drawOnChartArea": true,
            "drawTicks": true,
            "tickMarkLength": 10,
            "zeroLineWidth": 1,
            "zeroLineColor": "rgba(0, 0, 0, 0.25)",
            "zeroLineBorderDash": [
              0,
              0
            ]
          },
          "angleLines": {
            "display": true,
            "color": "rgba(0, 0, 0, 0.1)",
            "borderDash": [
              0,
              0
            ],
            "lineWidth": 1
          },
          "pointLabels": {
            "display": true,
            "fontColor": "#666",
            "fontSize": 10,
            "fontStyle": "normal"
          },
          "ticks": {
            "display": true,
            "fontSize": 12,
            "fontFamily": "sans-serif",
            "fontColor": "#666666",
            "fontStyle": "normal",
            "padding": 0,
            "stepSize": null,
            "minRotation": 0,
            "maxRotation": 50,
            "mirror": false,
            "reverse": false
          },
          "scaleLabel": {
            "display": false,
            "labelString": "Axis label",
            "lineHeight": 1.2,
            "fontColor": "#666666",
            "fontFamily": "sans-serif",
            "fontSize": 12,
            "fontStyle": "normal",
            "padding": 4
          }
        }
      ],
      "yAxes": [
        {
          "id": "Y1",
          "display": true,
          "position": "left",
          "type": "category",
          "stacked": false,
          "offset": true,
          "time": {
            "unit": false,
            "stepSize": 1,
            "displayFormats": {
              "millisecond": "h:mm:ss.SSS a",
              "second": "h:mm:ss a",
              "minute": "h:mm a",
              "hour": "hA",
              "day": "MMM D",
              "week": "ll",
              "month": "MMM YYYY",
              "quarter": "[Q]Q - YYYY",
              "year": "YYYY"
            }
          },
          "distribution": "linear",
          "gridLines": {
            "display": true,
            "color": "rgba(0, 0, 0, 0.1)",
            "borderDash": [
              0,
              0
            ],
            "lineWidth": 1,
            "drawBorder": true,
            "drawOnChartArea": true,
            "drawTicks": true,
            "tickMarkLength": 10,
            "zeroLineWidth": 1,
            "zeroLineColor": "rgba(0, 0, 0, 0.25)",
            "zeroLineBorderDash": [
              0,
              0
            ]
          },
          "angleLines": {
            "display": true,
            "color": "rgba(0, 0, 0, 0.1)",
            "borderDash": [
              0,
              0
            ],
            "lineWidth": 1
          },
          "pointLabels": {
            "display": true,
            "fontColor": "#666",
            "fontSize": 10,
            "fontStyle": "normal"
          },
          "ticks": {
            "display": true,
            "fontSize": 12,
            "fontFamily": "sans-serif",
            "fontColor": "#666666",
            "fontStyle": "normal",
            "padding": 0,
            "stepSize": null,
            "minRotation": 0,
            "maxRotation": 50,
            "mirror": false,
            "reverse": false
          },
          "scaleLabel": {
            "display": false,
            "labelString": "Axis label",
            "lineHeight": 1.2,
            "fontColor": "#666666",
            "fontFamily": "sans-serif",
            "fontSize": 12,
            "fontStyle": "normal",
            "padding": 4
          }
        }
      ]
    },
    "plugins": {
      "datalabels": {
        "display": true,
        "align": "center",
        "anchor": "center",
        "backgroundColor": "#ffffff",
        "borderColor": "#ffffff",
        "borderRadius": 6,
        "borderWidth": 1,
        "padding": 4,
        "color": "#666666",
        "font": {
          "family": "sans-serif",
          "size": 16,
          "style": "normal"
        }
      },
      "datalabelsZAxis": {
        "enabled": false
      },
      "googleSheets": {},
      "airtable": {},
      "tickFormat": ""
    },
    "elements": {
      "rectangle": {
        "borderWidth": 2
      }
    },
    "responsive": true,
    "cutoutPercentage": 50,
    "rotation": -1.5707963267948966,
    "circumference": 6.283185307179586,
    "startAngle": -1.5707963267948966
  }
}
EOD;

// Chart config can be set as a string or as a nested array
$qc->setConfig($config);

// Or write it to a file
$qc->toFile('./pdfgenerator/charts/overall-cyber-maturity.png')
?>
