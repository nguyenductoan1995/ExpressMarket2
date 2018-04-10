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
       // $sp1 = SELECT COUNT(*) FROM sanpham WHERE id_loai=8;
            /* `$arrData` is the associative array that is initialized to store the chart attributes. */
            $arrData = array(
                "chart" => array(
                    "caption"=> "Thống kê sản phẩm ",
                    "subCaption"=> "Theo loại sản phẩm",
                    "enableSmartLabels"=> "0",
                    "showPercentValues"=> "1",
                    "showLegend"=> "1",
                    "decimals"=> "1",
                    "theme"=> "zune"
                )
            );
            /*
                The data to be plotted on the chart is stored in the `$actualData` array in the key-value form.
            */
            $actualData = array(
                "{$ten->ten_loai}" => $sanpham,
                "{$ten2->ten_loai}" => $sanpham2,
                "{$ten3->ten_loai}" => $sanpham3,
               // "Senior" => 491000
            );
            /*
                Convert the data in the `$actualData` array into a format that can be consumed by FusionCharts. The data for the chart should be in an array wherein each element of the array is a JSON object having the "label" and “value” as keys.
            */
            $arrData['data'] = array();
            // Iterate through the data in `$actualData` and insert in to the `$arrData` array.
            foreach ($actualData as $key => $value) {
                array_push($arrData['data'],
                    array(
                        'label' => $key,
                        'value' => $value
                    )
                );
            }

            /*
                JSON Encode the data to retrieve the string containing the JSON representation of the data in the array.
            */
            $jsonEncodedData = json_encode($arrData);
            /*
                Create an object for the pie chart  using the FusionCharts PHP class constructor. Syntax for the constructor is ` FusionCharts("type of chart", "unique chart id", width of the chart, height of the chart, "div id to render the chart", "data format", "data source")`. Because we are using JSON data to render the chart, the data format will be `json`. The variable `$jsonEncodeData` holds all the JSON data for the chart, and will be passed as the value for the data source parameter of the constructor.
            */
            $pieChart = new FusionCharts("pie2D", "myFirstChart" , 900, 400, "chart-1", "json", $jsonEncodedData);
            // Render the chart
            $pieChart->render();
        ?>
        <div id="chart-1">Fusion Charts will render here</div>
    </body>
</html>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout.index', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>