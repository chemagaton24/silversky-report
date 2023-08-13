<?php
require_once('./pdfgenerator/quickchart/QuickChart.php');

$qc = new QuickChart(array(
	'width' => 720,
	'height' => 280,
	'version' => '2',
));

$qc->setApiKey('q-3kgf39bpqfy6lh4ah0bvoz7yj6rqi96l');

$config = <<<EOD
{
  "type": "line",
  "data": {
    "datasets": [
      {
        "label": "Your response",
        "backgroundColor": "rgb(236,199,64)",
        "borderColor": "rgb(236,199,64)",
        "data": [
          8,
          9,
          8,
          7,
          8,
          9,
          8,
          7,
          8,
          7,
          10,
          7,
          7,
          8,
          9,
          1,
          15
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
        "categoryPercentage": 0.8,
        "type": "line",
        "borderWidth": 3,
        "hidden": false
      },
      {
        "label": "Average response",
        "fill": false,
        "backgroundColor": "rgb(54, 162, 235)",
        "borderColor": "rgb(54, 162, 235)",
        "data": [
          6,
          7,
          7,
          5,
          6,
          7,
          8,
          8,
          6,
          6,
          7,
          5,
          6,
          7,
          8,
          1,
          15
        ],
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
        "categoryPercentage": 0.8,
        "type": "line",
        "borderWidth": 3,
        "hidden": false
      }
    ],
    "labels": [
      "1",
      "2",
      "3",
      "4",
      "5",
      "6",
      "7",
      "8",
      "9",
      "10",
      "11",
      "12",
      "13",
      "14",
      "15"
    ]
  },
  "options": {
    "title": {
      "display": false,
      "text": "Chart.js Line Chart",
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
      "display": true,
      "position": "bottom",
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
          "type": "category",
          "stacked": false,
          "offset": false,
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
          "type": "linear",
          "stacked": false,
          "offset": false,
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
            "display": false,
            "fontSize": 12,
            "fontFamily": "sans-serif",
            "fontColor": "transparent",
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
        "display": false,
        "align": "center",
        "anchor": "center",
        "backgroundColor": "#eee",
        "borderColor": "#ddd",
        "borderRadius": 6,
        "borderWidth": 1,
        "padding": 4,
        "color": "#666666",
        "font": {
          "family": "sans-serif",
          "size": 10,
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
$qc->toFile('./pdfgenerator/charts/maturity-by-industry-comparison.png');
?>
