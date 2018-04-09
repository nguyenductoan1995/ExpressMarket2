<?php $__env->startSection('content'); ?>
<?php

    class FusionCharts {
        
        private $constructorOptions = array();

        private $constructorTemplate = '
        <script type="text/javascript">
            FusionCharts.ready(function () {
                new FusionCharts(__constructorOptions__);
            });
        </script>';

        private $renderTemplate = '
        <script type="text/javascript">
            FusionCharts.ready(function () {
                FusionCharts("__chartId__").render();
            });
        </script>
        ';

        // constructor
        function __construct($type, $id, $width = 400, $height = 300, $renderAt, $dataFormat, $dataSource) {
            isset($type) ? $this->constructorOptions['type'] = $type : '';
            isset($id) ? $this->constructorOptions['id'] = $id : 'php-fc-'.time();
            isset($width) ? $this->constructorOptions['width'] = $width : '';
            isset($height) ? $this->constructorOptions['height'] = $height : '';
            isset($renderAt) ? $this->constructorOptions['renderAt'] = $renderAt : '';
            isset($dataFormat) ? $this->constructorOptions['dataFormat'] = $dataFormat : '';
            isset($dataSource) ? $this->constructorOptions['dataSource'] = $dataSource : '';

            $tempArray = array();
            foreach($this->constructorOptions as $key => $value) {
                if ($key === 'dataSource') {
                    $tempArray['dataSource'] = '__dataSource__';
                } else {
                    $tempArray[$key] = $value;
                }
            }
            
            $jsonEncodedOptions = json_encode($tempArray);
            
            if ($dataFormat === 'json') {
                $jsonEncodedOptions = preg_replace('/\"__dataSource__\"/', $this->constructorOptions['dataSource'], $jsonEncodedOptions);
            } elseif ($dataFormat === 'xml') { 
                $jsonEncodedOptions = preg_replace('/\"__dataSource__\"/', '\'__dataSource__\'', $jsonEncodedOptions);
                $jsonEncodedOptions = preg_replace('/__dataSource__/', $this->constructorOptions['dataSource'], $jsonEncodedOptions);
            } elseif ($dataFormat === 'xmlurl') {
                $jsonEncodedOptions = preg_replace('/__dataSource__/', $this->constructorOptions['dataSource'], $jsonEncodedOptions);
            } elseif ($dataFormat === 'jsonurl') {
                $jsonEncodedOptions = preg_replace('/__dataSource__/', $this->constructorOptions['dataSource'], $jsonEncodedOptions);
            }
            $newChartHTML = preg_replace('/__constructorOptions__/', $jsonEncodedOptions, $this->constructorTemplate);

            echo $newChartHTML;
        }

        // render the chart created
        // It prints a script and calls the FusionCharts javascript render method of created chart
        function render() {
           $renderHTML = preg_replace('/__chartId__/', $this->constructorOptions['id'], $this->renderTemplate);
           echo $renderHTML;
        }

    }

/* Include the `fusioncharts.php` file that contains functions    to embed the charts. */


/* The following 4 code lines contain the database connection information. Alternatively, you can move these code lines to a separate file and include the file here. You can also modify this code based on your database connection. */

   $hostdb = "localhost";  // MySQl host
   $userdb = "root";  // MySQL username
   $passdb = "";  // MySQL password
   $namedb = "expressmarket";  // MySQL database name

   // Establish a connection to the database
   $dbhandle = new mysqli($hostdb, $userdb, $passdb, $namedb);

   /*Render an error message, to avoid abrupt failure, if the database connection parameters are incorrect */
   if ($dbhandle->connect_error) {
      exit("There was an error with your connection: ".$dbhandle->connect_error);
   }
?>

<html>
<head>
   <title>FusionCharts XT - Column 2D Chart - Data from a database</title>
 <link  rel="stylesheet" type="text/css" href="css/style.css" />

   <!-- You need to include the following JS file to render the chart.
   When you make your own charts, make sure that the path to this JS file is correct.
   Else, you will get JavaScript errors. -->

   <script src="js/fusioncharts.js"></script>
</head>
<body>
<?php

$jsontest = ["chart" => 
                [
                    "caption" => "Doanh thu",
                    "subCaption" => "năm 2018",
                    "xAxisName" => "Day",
                    "yAxisName" => "Tổng thu( VNĐ)",
                    "numberPrefix" => "",
                    "theme" => "zune"
                ],
            "data" =>   [
                            [
                                "label" => "Tháng 1",
                                "value" => "$dh1"
                            ],
                            [
                                "label" => "Tháng 2",
                                "value" => "$dh2"
                            ],
                            [
                                "label" => "Tháng 3",
                                "value" => "$dh3"
                            ],
                            [
                                "label" => "Tháng 4",
                                "value" => "$dh4"
                            ]
                        ]
                ];
$cover  = json_encode($jsontest);
//var_dump($cover);

    /*
        Create a `area2DChart` chart object using the FusionCharts PHP class constructor. Syntax for the constructor is `FusionCharts("type of chart", "unique chart id", "width of chart", "height of chart", "div id to render the chart", "data format", "data source")`. To load data from a JSON string, `json` is passed as the value for the data format parameter of the constructor. The actual JSON data for the chart is passed as a string to the constructor.
     */
    $area2DChart = new FusionCharts("Area2D", "myFirstChart" , 1000, 500, "chart-1", "json",$cover);

    // Render the chart
    $area2DChart->render();
?>
<div id="chart-1">Fusion Charts will render here</div>
</body>
</html>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout.index', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>