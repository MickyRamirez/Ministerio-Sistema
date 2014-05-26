<?php
/**
 *  CakePHP HighCharts Plugin
 * 
 * 	Copyright (C) 2012 Kurn La Montagne / destinydriven
 *	<https://github.com/destinydriven> 
 * 
 * 	Multi-licensed under:
 * 		MPL <http://www.mozilla.org/MPL/MPL-1.1.html>
 * 		LGPL <http://www.gnu.org/licenses/lgpl.html>
 * 		GPL <http://www.gnu.org/licenses/gpl.html>
 * 		Apache License, Version 2.0 <http://www.apache.org/licenses/LICENSE-2.0.html>
 */
class CombinationDemoController extends HighChartsAppController {
    public $name = 'CombinationDemo';
    public $components = array('HighCharts.HighCharts');
    public $helpers = array('HighCharts.HighCharts');
    public $uses = array();
    public $layout = 'chart.demo';

    public function combo() {
        $janeData = array(70, 70, 20, 80, 40);
        $johnData = array(20, 30, 50, 70, 60);
        $joeData  = array(40, 30, 30, 90, 10);
        $avgData  = array(30, 20.67, 30, 60.33, 30.33);
		
        $pieData = array(   
            		array(
                        'name' => 'Jane',
	                    'y' => 13,
	                    'sliced' => true,
	                    'selected' => true
			    ),
			array('John', 23),
			array('Joe', 19)
                         );
				
	$chartName = 'Combination Chart';
	$mychart = $this->HighCharts->create( $chartName,'column' );
	
	$this->HighCharts->setChartParams
            (
                $chartName,
                array
                (
                    'renderTo'				=> 'combowrapper',  // div to display chart inside
                    'chartWidth'			=> 1000,
                    'chartHeight'			=> 750,
                    'chartBackgroundColorLinearGradient'=> array(0,0,0,300),
                    'chartBackgroundColorStops'		=> array(array(0,'rgb(217, 217, 217)'),array(1,'rgb(255, 255, 255)')),				
                    'title'				=> 'Combination Chart',
                    'subtitle'				=> 'Source: World Bank',
                    'xAxisLabelsEnabled' 		=> TRUE,				
                    'xAxisCategories'      		=> array( 'Apples','Oranges','Pears','Bananas','Plums'),				
                    'yAxisTitleText' 		=> 'Units',									
                    'enableAutoStep' 		=> FALSE,
                    'creditsEnabled'		=> FALSE						
                ) 
            );
	
        $janeSeries = $this->HighCharts->addChartSeries();
        $janeSeries->type = 'column';
        $janeSeries->addName('Jane')
            ->addData($janeData);

        $johnSeries = $this->HighCharts->addChartSeries();
        $johnSeries->type = 'column';
        $johnSeries->addName('John')
            ->addData($johnData);		

        $joeSeries  = $this->HighCharts->addChartSeries();
        $joeSeries->type = 'column';
        $joeSeries->addName('Joe')
            ->addData($joeData);		

        $avgSeries  = $this->HighCharts->addChartSeries();
        $avgSeries->type = 'spline';
        $avgSeries->addName('Average')
            ->addData($avgData);

        $pieSeries  = $this->HighCharts->addChartSeries();
        $pieSeries->type = 'pie';
        $pieSeries->center = array(200,150);

        $pieSeries->size = 250;
        $pieSeries->showInLegend = FALSE;
        $pieSeries->addName('Total consumption')->addData($pieData);	

        $mychart->addSeries($janeSeries);
        $mychart->addSeries($johnSeries);
        $mychart->addSeries($joeSeries);

        $mychart->addSeries($avgSeries);
        $mychart->addSeries($pieSeries);	

    }
	
}
