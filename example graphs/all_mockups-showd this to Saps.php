<!DOCTYPE html>
<html lang="en-US">
<head>
<title>Overboxd: An Overcart Recommerce Product For Businesses</title>
<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/themes/smoothness/jquery-ui.min.css">
<link href="<?php echo base_url(); ?>assets/css/template/jquery.comiseo.daterangepicker.css" rel="stylesheet" type="text/css">

<link href="<?php echo base_url(); ?>assets/css/template/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="<?php echo base_url(); ?>assets/css/template/pixel-admin.min.css" rel="stylesheet" type="text/css">
<link href="<?php echo base_url(); ?>assets/css/template/themes.min.css" rel="stylesheet" type="text/css">



<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.js"></script>
<script src="<?php echo base_url(); ?>assets/js/template/moment.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/template/jquery.comiseo.daterangepicker.js"></script>

<!--<script src="<?php// echo base_url(); ?>assets/js/template/amExtract/amcharts/amcharts.js" type="text/javascript"></script>--><!-- bar chart -->
<!--<script src="<?php// echo base_url(); ?>assets/js/template/amExtract/amcharts/serial.js" type="text/javascript"></script>--><!-- bar chart -->
<!--<script type="text/javascript" src="http://www.amcharts.com/lib/3/amcharts.js"></script>--><!-- stacked -->
<!--<script type="text/javascript" src="http://www.amcharts.com/lib/3/serial.js"></script>--><!-- stacked -->
<!--<script type="text/javascript" src="http://www.amcharts.com/lib/3/themes/none.js"></script>--><!-- stacked -->

<script src="http://code.highcharts.com/highcharts.js"></script><!-- highCharts: stacked graph -->
<script src="http://code.highcharts.com/modules/exporting.js"></script><!-- highCharts: stacked graph -->
<!-- <div id="container" style="min-width: 310px; height: 400px; margin: 0 auto"></div> --><!-- highCharts: stacked graph -->


<script>
        $(function() { 
        	$("#selector_dateRange").daterangepicker(); 

        	$("#submit_dateRange").click(function () 
        		{
        			// alert("Selected range is: ");
        			var selectedRange = $("#selector_dateRange").val();
        			if (selectedRange) //proceed only if selectedRange is truthy. i.e. selectedRange is neither null nor undefined
        			{
        				// alert("Input value is: " + selectedRange);	// {"START":"2015-04-25","END":"2015-05-01"}
        				// $('#content-wrapper > div.page-header > div > h1 > div').text(selectedRange);
        				var parsed = JSON.parse(selectedRange);
        				// console.log(parsed); 
        				// console.log(parsed.start);
        				var start = parsed.start;
        				var end = parsed.end;
        				console.log(start);
        				console.log(end);

                //ajax :
                $.ajax({
                  type: "POST",
                  url: '<?php echo site_url("admin_products").'/foobar';?>', 
                  data: {'barcode': 'abcd' }, 
                  dataType: 'json',
                  async: false, //This is deprecated in the latest version of jquery must use now callbacks
                  success: function(d)
                  {
                    alert('ajax '+d.status);
                    console.log('return:');
                    console.log(d);
                  },
                  error: function (jqXHR, textStatus, errorThrown) { alert("Connection error"); }   
                  
                });
              

                    			}
                    		});
             				
                    });
</script>
</head>
<body class="theme-default main-menu-animated">
<div id="main-wrapper"> 

  
  <!-- 2. $MAIN_NAVIGATION ===========================================================================

  Main navigation
-->
  <div id="main-navbar" class="navbar navbar-inverse" role="navigation"> 
    <!-- Main menu toggle --> 
    <!--<button type="button" id="main-menu-toggle"><i class="navbar-icon fa fa-bars icon"></i><span class="hide-menu-text">HIDE MENU</span></button>-->
    <div class="navbar-inner"> 
      <!-- Main navbar header -->
      <div class="navbar-header"> 
        
        <!-- Logo --> 
        <a href="../../index.html" class="navbar-brand"> <img src="<?php echo base_url(); ?>assets/images/template/logo.png"/> </a> 
        
        <!-- Main navbar toggle -->
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-navbar-collapse"><i class="navbar-icon fa fa-bars"></i></button>
      </div>
      <!-- / .navbar-header -->
      
      <div id="main-navbar-collapse" class="collapse navbar-collapse main-navbar-collapse">
        <div> 
          
          <!-- / .navbar-nav -->
          
          <div class="right clearfix">
            <div class="header_search">
              <form class="navbar-form pull-left">
                <input type="text" class="form-control" placeholder="Enter Keyword">
                <button class="search_btn" type="submit" value="submit"></button>
              </form>
            </div>
            <ul class="nav navbar-nav pull-right right-navbar-nav">
              

              <li class="nav-icon-btn nav-icon-btn-danger dropdown">
              <a href="#notifications" class="dropdown-toggle"> <img src="<?php echo base_url(); ?>assets/images/template/notifications.png"/> <span class="small-screen-text">Notifications</span> </a>
               <!--<a href="#notifications" class="dropdown-toggle" data-toggle="dropdown"> <img src="<?php echo base_url(); ?>assets/images/template/notifications.png"/> <span class="small-screen-text">Notifications</span> </a>--> 
                
                <!-- NOTIFICATIONS --> 
                
                <!-- Javascript --> 
                <script>
                  init.push(function () {
                    $('#main-navbar-notifications').slimScroll({ height: 250 });
                  });
                </script> 
                <!-- / Javascript -->
                
                <div class="dropdown-menu widget-notifications no-padding" style="width: 300px">
                  <div class="notifications-list" id="main-navbar-notifications">
                    <div class="notification">
                      <div class="notification-title text-danger">SYSTEM</div>
                      <div class="notification-description"><strong>Error 500</strong>: Syntax error in index.php at line <strong>461</strong>.</div>
                      <div class="notification-ago">12h ago</div>
                      <div class="notification-icon fa fa-hdd-o bg-danger"></div>
                    </div>
                    <!-- / .notification -->
                    
                    <div class="notification">
                      <div class="notification-title text-info">STORE</div>
                      <div class="notification-description">You have <strong>9</strong> new orders.</div>
                      <div class="notification-ago">12h ago</div>
                      <div class="notification-icon fa fa-truck bg-info"></div>
                    </div>
                    <!-- / .notification -->
                    
                    <div class="notification">
                      <div class="notification-title text-default">CRON DAEMON</div>
                      <div class="notification-description">Job <strong>"Clean DB"</strong> has been completed.</div>
                      <div class="notification-ago">12h ago</div>
                      <div class="notification-icon fa fa-clock-o bg-default"></div>
                    </div>
                    <!-- / .notification -->
                    
                    <div class="notification">
                      <div class="notification-title text-success">SYSTEM</div>
                      <div class="notification-description">Server <strong>up</strong>.</div>
                      <div class="notification-ago">12h ago</div>
                      <div class="notification-icon fa fa-hdd-o bg-success"></div>
                    </div>
                    <!-- / .notification -->
                    
                    <div class="notification">
                      <div class="notification-title text-warning">SYSTEM</div>
                      <div class="notification-description"><strong>Warning</strong>: Processor load <strong>92%</strong>.</div>
                      <div class="notification-ago">12h ago</div>
                      <div class="notification-icon fa fa-hdd-o bg-warning"></div>
                    </div>
                    <!-- / .notification --> 
                    
                  </div>
                  <!-- / .notifications-list --> 
                  <a href="#" class="notifications-link">MORE NOTIFICATIONS</a> </div>
                <!-- / .dropdown-menu --> 
              </li>
              <li class="nav-icon-btn nav-icon-btn-success dropdown"> 
              <a href="#messages" class="dropdown-toggle"> <img src="<?php echo base_url(); ?>assets/images/template/setting.png"/> <span class="small-screen-text">Setting</span> </a>
              <!--<a href="#messages" class="dropdown-toggle" data-toggle="dropdown"> <img src="<?php echo base_url(); ?>assets/images/template/setting.png"/> <span class="small-screen-text">Setting</span> </a>--> 
                
                <!-- MESSAGES --> 
                
                <!-- Javascript --> 
                <script>
                  init.push(function () {
                    $('#main-navbar-messages').slimScroll({ height: 250 });
                  });
                </script> 
                <!-- / Javascript -->
                
                <div class="dropdown-menu widget-messages-alt no-padding" style="width: 300px;">
                  <div class="messages-list" id="main-navbar-messages">
                    <div class="message"> <img src="../../assets/demo/avatars/2.jpg" alt="" class="message-avatar"> <a href="#" class="message-subject">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</a>
                      <div class="message-description"> from <a href="#">Robert Jang</a> &nbsp;&nbsp;·&nbsp;&nbsp;
                        2h ago </div>
                    </div>
                    <!-- / .message -->
                    
                    <div class="message"> <img src="../../assets/demo/avatars/3.jpg" alt="" class="message-avatar"> <a href="#" class="message-subject">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</a>
                      <div class="message-description"> from <a href="#">Michelle Bortz</a> &nbsp;&nbsp;·&nbsp;&nbsp;
                        2h ago </div>
                    </div>
                    <!-- / .message -->
                    
                    <div class="message"> <img src="../../assets/demo/avatars/4.jpg" alt="" class="message-avatar"> <a href="#" class="message-subject">Lorem ipsum dolor sit amet.</a>
                      <div class="message-description"> from <a href="#">Timothy Owens</a> &nbsp;&nbsp;·&nbsp;&nbsp;
                        2h ago </div>
                    </div>
                    <!-- / .message -->
                    
                    <div class="message"> <img src="../../assets/demo/avatars/5.jpg" alt="" class="message-avatar"> <a href="#" class="message-subject">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</a>
                      <div class="message-description"> from <a href="#">Denise Steiner</a> &nbsp;&nbsp;·&nbsp;&nbsp;
                        2h ago </div>
                    </div>
                    <!-- / .message -->
                    
                    <div class="message"> <img src="../../assets/demo/avatars/2.jpg" alt="" class="message-avatar"> <a href="#" class="message-subject">Lorem ipsum dolor sit amet.</a>
                      <div class="message-description"> from <a href="#">Robert Jang</a> &nbsp;&nbsp;·&nbsp;&nbsp;
                        2h ago </div>
                    </div>
                    <!-- / .message -->
                    
                    <div class="message"> <img src="../../assets/demo/avatars/2.jpg" alt="" class="message-avatar"> <a href="#" class="message-subject">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</a>
                      <div class="message-description"> from <a href="#">Robert Jang</a> &nbsp;&nbsp;·&nbsp;&nbsp;
                        2h ago </div>
                    </div>
                    <!-- / .message -->
                    
                    <div class="message"> <img src="../../assets/demo/avatars/3.jpg" alt="" class="message-avatar"> <a href="#" class="message-subject">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</a>
                      <div class="message-description"> from <a href="#">Michelle Bortz</a> &nbsp;&nbsp;·&nbsp;&nbsp;
                        2h ago </div>
                    </div>
                    <!-- / .message -->
                    
                    <div class="message"> <img src="../../assets/demo/avatars/4.jpg" alt="" class="message-avatar"> <a href="#" class="message-subject">Lorem ipsum dolor sit amet.</a>
                      <div class="message-description"> from <a href="#">Timothy Owens</a> &nbsp;&nbsp;·&nbsp;&nbsp;
                        2h ago </div>
                    </div>
                    <!-- / .message -->
                    
                    <div class="message"> <img src="../../assets/demo/avatars/5.jpg" alt="" class="message-avatar"> <a href="#" class="message-subject">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</a>
                      <div class="message-description"> from <a href="#">Denise Steiner</a> &nbsp;&nbsp;·&nbsp;&nbsp;
                        2h ago </div>
                    </div>
                    <!-- / .message -->
                    
                    <div class="message"> <img src="../../assets/demo/avatars/2.jpg" alt="" class="message-avatar"> <a href="#" class="message-subject">Lorem ipsum dolor sit amet.</a>
                      <div class="message-description"> from <a href="#">Robert Jang</a> &nbsp;&nbsp;·&nbsp;&nbsp;
                        2h ago </div>
                    </div>
                    <!-- / .message --> 
                    
                  </div>
                  <!-- / .messages-list --> 
                  <a href="#" class="messages-link">MORE MESSAGES</a> </div>
                <!-- / .dropdown-menu --> 
              </li>
              <!-- /3. $END_NAVBAR_ICON_BUTTONS -->
              
              <li class="dropdown"> <a href="#" class="dropdown-toggle user-menu" data-toggle="dropdown"> <img src="<?php echo base_url(); ?>assets/images/template/3.jpg"/> <span>John Doe</span> </a>
                <ul class="dropdown-menu">
                  <li><a href="#"><span class="label label-warning pull-right">New</span>Profile</a></li>
                  <li><a href="#"><span class="badge badge-primary pull-right">New</span>Account</a></li>
                  <li><a href="#"><i class="dropdown-icon fa fa-cog"></i>&nbsp;&nbsp;Settings</a></li>
                  <li class="divider"></li>
                  <li><a href="../../pages-signin.html"><i class="dropdown-icon fa fa-power-off"></i>&nbsp;&nbsp;Log Out</a></li>
                </ul>
              </li>
            </ul>
            <!-- / .navbar-nav --> 
          </div>
          <!-- / .right --> 
        </div>
      </div>
      <!-- / #main-navbar-collapse --> 
    </div>
    <!-- / .navbar-inner --> 
  </div>
  <!-- / #main-navbar --> 
  <div id="main-menu" role="navigation">
    <div id="main-menu-inner">
      <ul class="navigation">
        <li class="active"> <a href="#"><i class="menu-icon fa fa-dashboard"></i><span class="mm-text">Dashboard</span><span class="label label-new">1127</span></a> </li>
        <li> <a href="#"><i class="menu-icon fa fa-clock-o"></i><span class="mm-text">Logistics</span></a> </li>
        <li> <a href="../../stat-panels.html"><i class="menu-icon fa fa-bolt"></i><span class="mm-text">Support</span></a> </li>
        <li> <a href="../../widgets.html"><i class="menu-icon fa fa-envelope-o"></i><span class="mm-text">Quality</span></a> </li>
        <li> <a href="#"><i class="menu-icon fa fa fa-calendar"></i><span class="mm-text">Notifications</span><span class="label label-new">16</span></a></li>
        <li> <a href="#"><i class="menu-icon fa fa-user"></i><span class="mm-text">Contacts</span></a></li>
        <li> <a href="../../tables.html"><i class="menu-icon fa fa-gear"></i><span class="mm-text">Setting</span></a> </li>
        <li> <a href="../../charts.html"><i class="menu-icon fa-sign-out"></i><span class="mm-text">Logout</span></a> </li>
      </ul>
      <!-- / .navigation --> 
      
    </div>
    <!-- / #main-menu-inner --> 
  </div>
  <!-- / #main-menu --> 
  <!-- /4. $MAIN_MENU -->
  
  <div id="content-wrapper"> 
    <!--<ul class="breadcrumb breadcrumb-page">
      <div class="breadcrumb-label text-light-gray">You are here: </div>
      <li><a href="#">Home</a></li>
      <li class="active"><a href="#">Dashboard</a></li>
    </ul>-->
    <ul class="sorting_toolbar">
      <li>View:</li>
      <li class="sorting_icons active"><i class="fa fa-th-list"></i></li>
      <li class="sorting_icons"><i class="fa fa-th"></i></li>
    </ul>
    <div class="page-header">
      <div class="row"> 
        <!-- Page header, center on small screens -->
        <h1 class="col-xs-12 col-sm-8 text-center text-left-sm">Analytics<br>
          <div class="subheading">BUSINESS OVERVIEW AT A GLANCE</div>
        </h1>
        <div class="col-xs-12 col-sm-4">
          <div class="row" style="text-align:right"> 
           <input id="selector_dateRange" name="selector_dateRange" style="padding-right:8px" >
           <input type="button" class="btn btn-primary" id="submit_dateRange" value="Submit">
          </div>
        </div>
      </div>
    </div>
    <!-- / .page-header -->
  <?php
  $query = $this->db->query("SELECT concat(t2.name,' ',t1.sell_as) as catstat,count(t1.id) as quant FROM `products` as t1 left join categories as t2 on t1.category_id = t2.id group by catstat");
  $table = $query->result_array();
  // echo "<pre>";
  // var_dump($table);
  // echo "</pre>";

  $tableForChart =  array();
  $sellAsStatus = 'x';
  $qty = 'y';
  foreach ($table as $rowNumber => $array_ofRow)
  {
    foreach ($array_ofRow as $key => $value) 
    {
      // echo "key = ";var_dump($key); echo "value=";  var_dump($value); echo "<br/>" ;
      if ($key == "catstat") 
        $sellAsStatus = $value;
      elseif ($key == "quant")
        $qty = $value;
      else
      {
        echo "unknown key value";
        die;
      }
    }
    $tableForChart[$sellAsStatus] = $qty;
  }
  array_splice($tableForChart, 0, 1); // REMOVING 1ST element. (key,value ) => (, 2958)
  $tableForChart_keys = array_keys($tableForChart);
  $array_hardwareTypes = array();
  getHardwareTypes($tableForChart_keys, $array_hardwareTypes);

  function getHardwareTypes($tableForChart_keys, &$array_hardwareTypes)
  {
    foreach ($tableForChart_keys as $currentKey)
    {
      $exploded_currentKey = explode(" ", $currentKey);
      $firstWord_currentKey = $exploded_currentKey[0];
      if (! in_array($firstWord_currentKey, $array_hardwareTypes)) 
        $array_hardwareTypes[] = $firstWord_currentKey;
      
    }

    // change "Featured" hardware type to "Feaured Phone"
    if ($index_Feature = array_search("Feature", $array_hardwareTypes))
      $array_hardwareTypes[$index_Feature] = "Feaured Phone";
    
  }
  // var_dump(array(0,""));die;
    //now devide the inventory in Unboxed, Refurbished, ...
  $array_sellAsStatus = get_All_SellAsStatus($tableForChart_keys);
  function get_All_SellAsStatus($tableForChart_keys)
  {
    $returnArray = array();
    foreach ($tableForChart_keys as $currentKey)
    {
      $exploded_currentKey = explode(" ", $currentKey);
      $sellAs_currentKey = ( ( $exploded_currentKey[1] != "Phone") ? $exploded_currentKey[1] : $exploded_currentKey[2]); //find the 1st word that gives a clue about the sell as. "Send" in "Feature Phone Send to Service Center" tells us that its send to SC
      if (in_array($sellAs_currentKey, array('','0')))
        {
          continue;// remove "" and int(0) from arraay as they are not sellAs statuses
      }
      if (! in_array($sellAs_currentKey, $returnArray))
        $returnArray[] =  $sellAs_currentKey; 
    }

    // change "Send" hardware type to "Sent to Service center"
    if ($index_send = array_search("Send", $returnArray))
        $returnArray[$index_send] = "Send to Service center";

    // remove "" and int(0) from arraay as they are not sellAs statuses
    if (in_array("", $returnArray))
        $returnArray[array_search("", $returnArray)] = "(empty)";
    return $returnArray;
  }
  
  $array_accessories = getDistribution("Accessories", $array_sellAsStatus, $tableForChart);
  $array_Camera = getDistribution("Camera", $array_sellAsStatus, $tableForChart);
  $array_Computer = getDistribution("Computer", $array_sellAsStatus, $tableForChart);
  $array_Feaured_Phone = getDistribution("Feaured_Phone", $array_sellAsStatus, $tableForChart);
  $array_Smartphone = getDistribution("Smartphone", $array_sellAsStatus, $tableForChart);
  $array_Tablet = getDistribution("Tablet", $array_sellAsStatus, $tableForChart);
  $array_Television = getDistribution("Television", $array_sellAsStatus, $tableForChart);
//['Accessories', 'Camera', 'Computer', 'Feaured Phone', 'Smartphone', 'Tablet', 'Television']

  function getDistribution($hardwareType, $array_sellAsStatus, $tableForChart)
  {
  $returnArray = array_combine(array_values($array_sellAsStatus), makeAnArray(count($array_sellAsStatus), "0")); //needed an array of same no. of elements in the second argument. 
    foreach ($tableForChart as $key => $value) 
    {
      $exploded_currentKey = explode(" ", $key);
      if ($exploded_currentKey[0] == $hardwareType) 
      {
        $sellAs_iteration= ( ( $exploded_currentKey[1] != "Phone") ? $exploded_currentKey[1] : $exploded_currentKey[2]); //find the 1st word that gives a clue about the sell as. "Send" in "Feature Phone Send to Service Center" tells us that its send to SC
        if ( in_array($exploded_currentKey[1], array('','0')) )
        {
          continue;
        }
        $updating_thisIndex = array_search($sellAs_iteration, $returnArray);
        $returnArray[$sellAs_iteration] = $value;
      }
      
    }
    return $returnArray;
  }
  
  //   O C D
  // $chartArray_BER = getChartArray('BER',$array_accessories, $array_Camera, $array_Computer, $array_Feaured_Phone, $array_Smartphone, $array_Tablet, $array_Television);
  // function getChartArray($sellAs, $array_accessories, $array_Camera, $array_Computer, $array_Feaured_Phone, $array_Smartphone, $array_Tablet, $array_Television)
  // {
  //   $returnArray = array();
  //   foreach ($array_accessories as $key => $value) 
  //   {
  //       if ($key == $sell_as) 
  //       {
  //         $returnArray[]
  //       }
  //   }
  // }

  function makeAnArray($length, $element)
  {
    $returnArray = array();// Overcart.com
    for ($i=0; $i < $length; $i++) { 
      $returnArray[] = $element;
    }
    return $returnArray;
  }


  // echo "<hr/><pre/>";
  // var_dump($tableForChart);
  // foreach ($tableForChart as $key => $value) {echo "($key, $value)<br/>"; }
  // foreach ($tableForChart as $key => $value) {var_dump($key);echo "->";var_dump($value);}
  // foreach ($array_accessories as $key => $value) {echo "($key, $value)<br/>"; }
  // foreach ($array_accessories as $key => $value) {var_dump($key);echo "->";var_dump($value);}
  // foreach ($array_sellAsStatus as $key => $value) {echo "($key, $value)<br/>"; }
  // print_r($tableForChart_keys);
  // print_r($array_hardwareTypes);
  // echo "</pre>";die;
  // echo $tableForChart["Accessories BER"];
  // foreach ($tableForChart_keys as $this_key) 
  // {
  //   print_r($tableForChart[$this_key]);
    // echo "<br/>";die;
  // }
  // die;
  ?>

    <div class="row">
      <div class="col-md-8">
        <div class="stat-panel">
          <div class="stat-row">
            <div class="padding-sm-hr-custom">
              <div class="row"> <span class="order_total_count">147</span> <span class="order_confram">TOTAL ORDERS CONFIRMED<br/>
                56% OF BOOKED ORDERS</span> </div>
              <!-- <img src="<?php //echo base_url(); ?>assets/images/template/chart.jpg"/>  -->
              <div id="chartdiv" style="width: 100%; height: 550px;"><br/></div>
              </div>
          </div>
        </div>
      </div>
      <!-- /6. $EASY_PIE_CHARTS -->
      
      <div class="col-md-4">
        <div class="row">
          <div class="col-sm-4 col-md-12">
            <div class="stat-panel"> 
              <!-- Danger background, vertically centered text -->
              <div class="stat-cell valign-middle align_center"> <span class="text-bg">PERCENTAGE OF MONTHLY TARGET CONFIRMED ONLY </span><br>
                <!-- Small text --> 
                <span class="text-xlg"><strong>28</strong><span class="text-lg text-slim">%</span></span><br>
                <!-- Big text -->
                <div class="monthly_report"> <img src="<?php echo base_url(); ?>assets/images/template/monthly_target.jpg"/>
                  <div class="min_max_report"> <span class="min">Minimum</span><span class="max">Maximum</span> </div>
                </div>
                
                <!-- /.stat-cell --> 
              </div>
              <!-- /.stat-panel --> 
            </div>
          </div>
          <div class="col-sm-4 col-md-12">
            <div class="stat-panel"> 
              <!-- Danger background, vertically centered text -->
              <div class="stat-cell valign-middle align_center"> <span class="text-bg">TOTAL CONFIRMED REVENUE</span><br>
                <div class="totoal_revenue">Rs.245,967</div>
                
                <!-- /.stat-cell --> 
              </div>
              <!-- /.stat-panel --> 
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-xs-3"> 
        <!-- Centered text -->
        <div class="stat-panel text-center">
          <div class="stat-cell valign-middle align_center">
            <div class="text-bg"> LOGISTICS </div>
            <div class="status_per"> <span class="status_text">87%</span> </div>
            <span class="xlheading">SAME DAY SHIPS </span>
            <ul class="status_more">
              <li>28.18</li>
              <li><img src="<?php echo base_url(); ?>assets/images/template/green-arrow.png"/></li>
              <li>0.27%</li>
            </ul>
          </div>
          <!-- /.stat-row --> 
        </div>
        <!-- /.stat-panel --> 
      </div>
      <div class="col-xs-3"> 
        <!-- Centered text -->
        <div class="stat-panel text-center">
          <div class="stat-cell valign-middle align_center">
            <div class="text-bg">CUSTOMER SUPPORT</div>
            <div class="status_per status_per_green"> <span class="status_text">63%</span> </div>
            <span class="xlheading">CONFIRMATION</span>
            <ul class="status_more">
              <li>28.18</li>
              <li><img src="<?php echo base_url(); ?>assets/images/template/red-arrow.png"/></li>
              <li>-0.34%</li>
            </ul>
          </div>
          <!-- /.stat-row --> 
        </div>
        <!-- /.stat-panel --> 
      </div>
      <div class="col-xs-3"> 
      <?php 
        $hours = 200;
        $hours_compare = $hours*2 ;
        $query_quality = $this->db->query("SELECT count(id) FROM `status_update_log` where old_status = 'Under QC' and time_stamp > date_sub(now(),interval $hours hour)");
        $sqlArray_quality = $query_quality->result_array();

        $totalQCs = "";
        foreach ($sqlArray_quality as $key => $innerArray) 
        {
          foreach ($innerArray as $key1 => $value)
          {
            $totalQCs = $value;
          }
        }

        $query_quality_total = $this->db->query("SELECT count(id) FROM `status_update_log` where old_status = 'Under QC' and time_stamp > date_sub(now(),interval $hours_compare hour)");
        $sqlArray_quality_total = $query_quality_total->result_array();
        $totalQCs_total = "";
        foreach ($sqlArray_quality_total as $key => $innerArray) 
        {
          foreach ($innerArray as $key1 => $value)
          {
            $totalQCs_total = $value;
          }
        }

        $totalQCs_compare = $totalQCs_total - $totalQCs;
        $totalQCs_diff = $totalQCs - $totalQCs_compare;
        $qc_percent_rise = ($totalQCs_compare == 0) ? "Infinite" : ((double)($totalQCs_diff / $totalQCs_compare) * 100);

        // echo "<hr/><pre/>";
        // echo "total:<br/>";
        // var_dump($totalQCs_total);
        // echo "latest<br/>";
        // var_dump($totalQCs);
        // echo "compare<br/>";
        // var_dump($totalQCs_compare);
        // echo "diff<br/>";
        // var_dump($totalQCs_diff);
        // echo "</pre>";

      ?>
        <!-- Centered text -->
        <div class="stat-panel text-center">
          <div class="stat-cell valign-middle align_center">
            <div class="text-bg">QUALITY SUPPORT</div>
            <div class="status_per status_result"> <span class="status_text"><?php echo $totalQCs ?></span> </div>
            <span class="xlheading">CHECKS</span>
            <ul class="status_more">
              <li><?php echo $totalQCs_diff ?></li>
              <li><img 
              <?php 
                if($totalQCs_diff<0)
                {
                  echo "src=\"".base_url()."assets/images/template/red-arrow.png\"";
                }elseif ($totalQCs_diff > 0) 
                {
                  echo "src=\"".base_url()."assets/images/template/green-arrow.png\"";
                }else
                {
                  echo "src=\"".base_url()."assets/images/template/green-arrow.png\"";
                }
                ?>/></li>
              <li><?php echo ( (gettype($qc_percent_rise ) == "string" ) ? $qc_percent_rise :  number_format((float)$qc_percent_rise, 2, '.', ''));?>%</li>
            </ul>
          </div>
          <!-- /.stat-row --> 
        </div>
        <!-- /.stat-panel --> 
      </div>
      <div class="col-xs-3"> 
      <?php

        $hours = 240;
        $hours_compare = 2*$hours;

        $query_total = $this->db->query("SELECT count(id) FROM `status_update_log` where new_status = 'listed' and time_stamp > date_sub(now(),interval $hours_compare hour)");
        $table_sql_compare = $query_total->result_array();
        $mis_upload_count_total = "";
        foreach ($table_sql_compare as $outerArray) 
        {
          foreach ($outerArray as $key => $value) 
          {
            $mis_upload_count_total = $value;
          }
        }

        // var_dump( $mis_upload_count_total);die;

        $query = $this->db->query("SELECT count(id) FROM `status_update_log` where new_status = 'listed' and time_stamp > date_sub(now(),interval $hours hour)");
        $table_sql = $query->result_array();
        $mis_upload_count = "";

        foreach ($table_sql as $outerArray) 
        {
          foreach ($outerArray as $key => $value) 
          {
            $mis_upload_count = $value;
          }
        }
        $compare_mis = $mis_upload_count_total - $mis_upload_count ;
        $diff_mis= $mis_upload_count  - $compare_mis ;
        $percent_mis =   ($compare_mis == 0) ? "Infinite" : ((double)($diff_mis / $compare_mis) * 100);

      // echo "<hr/><pre/>";
      // // // var_dump($table_sql);
      // echo "(compare,latest)<br/>";
      // var_dump($compare_mis);
      // echo ",";
      // var_dump($mis_upload_count);
      // echo "</pre>";

      // echo "<hr/><pre/>";
      // echo "percent";
      // echo "($diff_mis / $compare_mis)";
      // var_dump($diff_mis);var_dump($compare_mis);
      // echo "compare_mis = $compare_mis | $compare_mis == 0 ->". ($compare_mis == 0);
      // echo "</pre>";

      // echo "<hr/><pre/>";
      // echo "diff:";
      // var_dump( gettype($percent_mis ) );

      // echo "</pre>";//die;

      ?>
        <!-- Centered text -->
        <div class="stat-panel text-center">
          <div class="stat-cell valign-middle align_center">
            <div class="text-bg">MIS</div>
            <div id="mis_uploaded" class="status_per status_result"> <span class="status_text"><?php echo $mis_upload_count?></span> </div>
            <span class="xlheading">Uploaded</span>
            <ul class="status_more">
              <li><?php echo $diff_mis?></li><!-- <li>28.18</li> -->
              <li><img <?php 
                          if($diff_mis < 0)
                          {
                            echo "src=\"". base_url() ."assets/images/template/red-arrow.png\"";
                          }elseif ($diff_mis > 0) 
                          {
                            echo "src=\"". base_url() ."assets/images/template/green-arrow.png\"";
                          }
                          else
                          {
                            echo "src=\"". base_url() ."assets/images/template/green-arrow.png\"";
                          }
                        ?>/>
              </li>
              <li><?php echo ( (gettype($percent_mis ) == "string" ) ? $percent_mis :  number_format((float)$percent_mis, 2, '.', ''));?>%</li><!-- <li>0.44%</li> -->
            </ul>
          </div>
          <!-- /.stat-row --> 
        </div>
        <!-- /.stat-panel --> 
      </div>
    </div>
	<?php 
    $clientName = 'W S Retail';

    $query_ageing = $this->db->query("select t1.id,t1.productid,t4.name as client,t1.old_status,t1.new_status,t1.time_stamp,datediff(now(),t1.time_stamp) from status_update_log as t1 inner join (SELECT max(id) as mid FROM `status_update_log` group by productid) as t2 on t1.id = t2.mid inner join products as t3 on t1.productid = t3.id left join compniesdata as t4 on t3.client_id = t4.id where t1.new_status = 'Listed' and t4.name = '$clientName'");
  	$array_allItems = $query_ageing->result_array();
  	// echo "<pre>";
  	// var_dump($array_allItems);
  	// echo "</pre>";die;
  	echo "<pre>";
  	foreach ($array_allItems as $currentItem)
  	{
  		// var_dump($currentItem);
  	}
  	echo "</pre>";
    ?>
    <script >
      $(function () {
      $('#graph_ageing').highcharts({
          title: {
              text: 'Inventory Overview',
              x: -20 //center
          }/*,
          subtitle: {
              text: 'Source: WorldClimate.com',
              x: -20
          }*/,
          xAxis: {
              categories: ['Pending Pickup', 'Inbound Holding','Pending QC', 'Under QC', 'Manager\'s escalation','Out for Repair',
               'Ready to upload', 'Listed', 'Returned to Client', 'Sell Offline', 'Inventory Review', 'Sold']
          },
          yAxis: {
              title: {
                  text: 'Items'
              },
              plotLines: [{
                  value: 0,
                  width: 1,
                  color: '#808080'
              }]
          }/*,
          tooltip: {
              valueSuffix: '°C'
          }*/,
          legend: {
              layout: 'vertical',
              align: 'right',
              verticalAlign: 'middle',
              borderWidth: 0
          },
          series: [{
              name: 'Karma',
              data: [7.0, 6.9, 9.5, 14.5, 18.2, 21.5, 25.2, 26.5, 23.3, 18.3, 13.9, 9.6]
          }, {
              name: 'Cloudtail',
              data: [-0.2, 0.8, 5.7, 11.3, 17.0, 22.0, 24.8, 24.1, 20.1, 14.1, 8.6, 2.5]
          }, {
              name: 'PB International',
              data: [-0.9, 0.6, 3.5, 8.4, 13.5, 17.0, 18.6, 17.9, 14.3, 9.0, 3.9, 1.0]
          }, {
              name: 'Saholic',
              data: [3.9, 4.2, 5.7, 8.5, 11.9, 15.2, 17.0, 16.6, 14.2, 10.3, 6.6, 4.8]
          }, {
              name: 'Technix',
              data: [ 7.0-5, 6.9-5, 9.5-5, 14.5-5, 18.2-5, 21.5-5, 25.2-5, 26.5-5, 23.3-5, 18.3-5, 13.9-5, 9.6]
          }, {
              name: 'Value Plus',
              data: [3.9+5, 4.2+5, 5.7+5, 8.5+5, 11.9+5, 15.2+5, 17.0+5, 16.6+5, 14.2+5, 10.3+5, 6.6+5, 4.8+3]
          }]
        });
      });
    </script>
    <div id="graph_ageing" style="width: 100%; height: 550px; border:1px solid black;" ></div>
    <div id="ageing_each" style="width: 100%; height: 550px; border:1px solid black;" ></div>
    <script type="text/javascript">
    $(function () { 
        $('#ageing_each').highcharts({
            chart: {
                type: 'bar'
            },
            title: {
                text: 'Saholic Inventory'
            },
            xAxis: {
                categories: ['1 May', '2 May', '3 May', 'Yesterday', 'Now']
            },
            yAxis: {
                min: 0,
                title: {
                    text: 'Inventory count'
                }
            },
            legend: {
                reversed: true
            },
            plotOptions: {
                series: {
                    stacking: 'normal'
                }
            },
            series: [{
                name: 'Pending Pickup',
                data: [5, 3, 4, 7, 2]
            }, {
                name: 'Inbound Holding',
                data: [2, 2, 3, 2, 1]
            }, {
                name: 'Pending QC',
                data: [3, 4, 4, 2, 5]
            }, {
                name: 'Under QC',
                data: [3, 4, 4, 2, 5]
            }, {
                name: 'Manager\'s escalation',
                data: [3, 4, 4, 2, 5]
            }, {
                name: 'Out for Repair',
                data: [3, 4, 4, 2, 5]
            }, {
                name: 'Ready to upload',
                data: [3, 4, 4, 2, 5]
            }, {
                name: 'Listed',
                data: [3, 4, 4, 2, 5]
            }, {
                name: 'Returned to Client',
                data: [3, 4, 4, 2, 5]
            }, {
                name: 'Sell Offline',
                data: [3, 4, 4, 2, 5]
            }, {
                name: 'Inventory Review',
                data: [3, 4, 4, 2, 5]
            }, {
                name: 'Sold',
                data: [3, 4, 4, 2, 5]
            }]
        });
    });
    </script>
    <div id="drilldown" style="width: 100%; height: 550px; border:1px solid black;" ></div>
    <script src="http://code.highcharts.com/modules/drilldown.js"></script>
    <!-- <pre id="tsv" style="display:none">Browser Version  Total Market Share
Microsoft Internet Explorer 8.0 26.61%
Microsoft Internet Explorer 9.0 16.96%
Chrome 18.0 8.01%
Chrome 19.0 7.73%
Firefox 12  6.72%
Microsoft Internet Explorer 6.0 6.40%
Firefox 11  4.72%
Microsoft Internet Explorer 7.0 3.55%
Safari 5.1  3.53%
Firefox 13  2.16%
Firefox 3.6 1.87%
Opera 11.x  1.30%
Chrome 17.0 1.13%
Firefox 10  0.90%
Safari 5.0  0.85%
Firefox 9.0 0.65%
Firefox 8.0 0.55%
Firefox 4.0 0.50%
Chrome 16.0 0.45%
Firefox 3.0 0.36%
Firefox 3.5 0.36%
Firefox 6.0 0.32%
Firefox 5.0 0.31%
Firefox 7.0 0.29%
Proprietary or Undetectable 0.29%
Chrome 18.0 - Maxthon Edition 0.26%
Chrome 14.0 0.25%
Chrome 20.0 0.24%
Chrome 15.0 0.18%
Chrome 12.0 0.16%
Opera 12.x  0.15%
Safari 4.0  0.14%
Chrome 13.0 0.13%
Safari 4.1  0.12%
Chrome 11.0 0.10%
Firefox 14  0.10%
Firefox 2.0 0.09%
Chrome 10.0 0.09%
Opera 10.x  0.09%
Microsoft Internet Explorer 8.0 - Tencent Traveler Edition  0.09%</pre> -->
    <script>
     $(function () {

    // Create the chart
    $('#drilldown').highcharts({
        chart: {
            type: 'column'
        },
        title: {
            text: 'Dashboard Inventory'
        },
        xAxis: {
            type: 'category'
        },

        legend: {
            enabled: false
        },

        plotOptions: {
            series: {
                borderWidth: 0,
                dataLabels: {
                    enabled: true
                }
            }
        },

        series: [{
            name: 'Overview',
            colorByPoint: true,
            data: [{
                name: 'Saholic',
                y: 5,
                drilldown: 'saholic'
            }, {
                name: 'Technix',
                y: 2,
                drilldown: 'technix'
            }, {
                name: 'Reglobe',
                y: 4,
                drilldown: 'reglobe'
            }, {
                name: 'Cloudtail',
                y: 4,
                drilldown: 'reglobe'
            }, {
                name: 'PB International',
                y: 4,
                drilldown: 'reglobe'
            }, {
                name: 'Technix',
                y: 4,
                drilldown: 'reglobe'
            }, {
                name: 'Value Plus',
                y: 4,
                drilldown: 'reglobe'
            }]

            /*Cloudtail'
PB International
Saholic
Technix
Value Plus*/
        }],
        drilldown: {
            series: [{
                id: 'saholic',
                data: [
                    ['Pending Pickup', 4],
                    ['Inbound Holding', 2],
                    ['Pending QC', 1],
                    ['Under QC', 2],
                    ['Manager\'s escalation', 1],
                    ['Out for Repair', 1],
                    ['Ready to upload', 1],
                    ['Listed', 1],
                    ['Returned to Client', 1],
                    ['Sell Offline', 1],
                    ['Inventory Review', 1],
                    ['Sold', 1]
                    ]
            }, {
                id: 'technix',
                data: [
                    ['Pending Pickup', 4],
                    ['Inbound Holding', 2],
                    ['Pending QC', 1],
                    ['Under QC', 2],
                    ['Manager\'s escalation', 1],
                    ['Out for Repair', 1],
                    ['Ready to upload', 1],
                    ['Listed', 1],
                    ['Returned to Client', 1],
                    ['Sell Offline', 1],
                    ['Inventory Review', 1],
                    ['Sold', 1]
                    ]/*['Pending Pickup', 'Inbound Holding','Pending QC', 'Under QC', 'Manager\'s escalation','Out for Repair',
               'Ready to upload', 'Listed', 'Returned to Client', 'Sell Offline', 'Inventory Review', 'Sold']*/
                ]
            }, {
                id: 'reglobe',
                data: [
                    ['Pending Pickup', 4],
                    ['Inbound Holding', 2],
                    ['Pending QC', 1],
                    ['Under QC', 2],
                    ['Manager\'s escalation', 1],
                    ['Out for Repair', 1],
                    ['Ready to upload', 1],
                    ['Listed', 1],
                    ['Returned to Client', 1],
                    ['Sell Offline', 1],
                    ['Inventory Review', 1],
                    ['Sold', 1]
                    ]
            }]
        }
    });
});


    </script>
  </div>
  <!-- / #content-wrapper -->
  <div id="main-menu-bg"></div>
</div>
<!-- highCharts:stacked -->
<script type="text/javascript">
  $(function () {
    $('#chartdiv').highcharts({
        chart: {
            type: 'column'
        },
        title: {
            text: 'Dashboard Inventory- LISTED'
        },
        xAxis: {
            categories: <?php echo "['". implode("', '", $array_hardwareTypes) ."']" ?>// ['Accessories', 'Camera', 'Computer', 'Feaured Phone', 'Smartphone', 'Tablet', 'Television']
        },
        yAxis: {
            min: 0,
            title: {
                text: 'Units'
            },
            stackLabels: {
                enabled: true,
                style: {
                    fontWeight: 'bold',
                    color: (Highcharts.theme && Highcharts.theme.textColor) || 'gray'
                }
            }
        },
        legend: {
            // margin: 9;
            width:580,
            align: 'center',
            // x: 0,
            verticalAlign: 'top',
            y: 25,
            floating: true,
            backgroundColor: '#FCFFC5', //(Highcharts.theme && Highcharts.theme.background2) || 'white',
            borderColor: '#CCC',
            borderWidth: 1,
            shadow: false
        },
        tooltip: {
            formatter: function () {
                return '<b>' + this.x + '</b><br/>' +
                    this.series.name + ': ' + this.y + '<br/>' +
                    'Total: ' + this.point.stackTotal;
            }
        },
        plotOptions: {
            column: {
                stacking: 'normal',
                dataLabels: {
                    enabled: true,
                    color: (Highcharts.theme && Highcharts.theme.dataLabelsColor) || 'white',
                    style: {
                        textShadow: '0 0 3px black'
                    }
                }
            }
        },
        series: [{
            name: 'BER',
            data: [<?php echo $array_accessories['BER'].", ".$array_Camera['BER'] . ", ". $array_Computer['BER'].", ". $array_Feaured_Phone['BER'] . ", ". $array_Smartphone['BER'] . ", ". $array_Tablet['BER']. ", ". $array_Television['BER'];?>]  
        }, { // ['Accessories', 'Camera', 'Computer', 'Feaured Phone', 'Smartphone', 'Tablet', 'Television']
            name: 'New',
            data: [<?php echo $array_accessories['New'].", ".$array_Camera['New'] . ", ". $array_Computer['New'].", ". $array_Feaured_Phone['New'] . ", ". $array_Smartphone['New'] . ", ". $array_Tablet['New']. ", ". $array_Television['New'];?>]
        }, {
            name: 'Preowned',
            data: [<?php echo $array_accessories['Preowned'].", ".$array_Camera['Preowned'] . ", ". $array_Computer['Preowned'].", ". $array_Feaured_Phone['Preowned'] . ", ". $array_Smartphone['Preowned'] . ", ". $array_Tablet['Preowned']. ", ". $array_Television['Preowned'];?>]
        }, {
            name: 'Refurbished',
            data: [<?php echo $array_accessories['Refurbished'].", ".$array_Camera['Refurbished'] . ", ". $array_Computer['Refurbished'].", ". $array_Feaured_Phone['Refurbished'] . ", ". $array_Smartphone['Refurbished'] . ", ". $array_Tablet['Refurbished']. ", ". $array_Television['Refurbished'];?>]
        }, {
            name: 'Sealed',
            data: [<?php echo $array_accessories['Sealed'].", ".$array_Camera['Sealed'] . ", ". $array_Computer['Sealed'].", ". $array_Feaured_Phone['Sealed'] . ", ". $array_Smartphone['Sealed'] . ", ". $array_Tablet['Sealed']. ", ". $array_Television['Sealed'];?>]
        }, {
            name: 'Unboxed',
            data: [<?php echo $array_accessories['Unboxed'].", ".$array_Camera['Unboxed'] . ", ". $array_Computer['Unboxed'].", ". $array_Feaured_Phone['Unboxed'] . ", ". $array_Smartphone['Unboxed'] . ", ". $array_Tablet['Unboxed']. ", ". $array_Television['Unboxed'];?>]
        }, {
            name: 'Send to Service center',
            data: [<?php echo $array_accessories['Send to Service center'].", ".$array_Camera['Send to Service center'] . ", ". $array_Computer['Send to Service center'].", ". $array_Feaured_Phone['Send to Service center'] . ", ". $array_Smartphone['Send to Service center'] . ", ". $array_Tablet['Send to Service center']. ", ". $array_Television['Send to Service center'];?>]
        }]
    });
});
</script>
</body>
</html>