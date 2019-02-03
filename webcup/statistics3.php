
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Student and Employee Website</title>
<link href="css/multiColumnTemplate.css" rel="stylesheet" type="text/css">
<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    
    <script src="https://cdn.zingchart.com/zingchart.min.js"></script>
  <script>
    zingchart.MODULESDIR = "https://cdn.zingchart.com/modules/";
    ZC.LICENSE = ["569d52cefae586f634c54f86dc99e6a9", "ee6b7db5b51705a13dc2339db3edaf6d"];
  </script>
  <style>
    @import 'https://fonts.googleapis.com/css?family=Montserrat';
    @import 'https://fonts.googleapis.com/css?family=Lato:400';
    #myChart a {
      display: none;
    }
    
    .zc-ref {
      display: none;
    }
  </style>
</head>
<body>
<div class="container">
  <header>
    <div class="primary_header">
      <h1 class="title"> Student &amp; Employee Website</h1>
    </div>
    <nav class="secondary_header" id="menu">
      <ul>
        <li>
       <a href="index.php" style="text-decoration: none;cursor:pointer; color: inherit;" >Home</a>
        </li>
        
        <li><a href="memberseng.php" style="text-decoration: none;cursor:pointer; color: inherit;" >Members</a></li>
        
       	<li> <div class="dropdown">
			  <button class="dropbtn">Statistics</button>
				  <div class="dropdown-content">
					<a href="statistics.php">Stats Department</a>
					<a href="statistics2.php">Stats Boys</a>
					<a href="statistics3.php">Stats Girls</a>
				  </div>
			</div> 
       </li>
    <li>
       <a href="comment/forum.php" style="text-decoration: none;cursor:pointer; color: inherit;" >Project Forum</a>
        </li>
        
        
       
    	
        <li><a href="register/login.php" style="text-decoration: none;cursor:pointer; color: inherit;">Login/Register</a></li>
        

        <li>
       <a href="profile.php" style="text-decoration: none;cursor:pointer; color: inherit;" >Profile</a>
        </li>
        
      </ul>
    </nav>

  </header>



   <h1 style="background-color: orange" align="center">Statistics Based on Girls</h1>






  <section>

    <div id='myChart'><a class="zc-ref" href="https://www.zingchart.com/">Powered by ZingChart</a></div>
  </section>
  <?php 

  $dbhost = 'localhost';
  $dbuser = 'root';
  $dbpass = '';
  $dbname = 'demo';

  $connect = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname) or die(mysqli_error($connect));

      $query1= mysqli_query($connect,"SELECT COUNT(*) FROM `users` WHERE fieldOfStudy ='Engineering' AND gender ='female'");
      while($row1 = mysqli_fetch_assoc($query1)){
      foreach($row1 as $cname1 => $cvalue1){
      }}

      $query2= mysqli_query($connect,"SELECT COUNT(*) FROM `users` WHERE fieldOfStudy ='Law' AND gender ='female' ");
      while($row2 = mysqli_fetch_assoc($query2)){
      foreach($row2 as $cname2 => $cvalue2){
      }}

      $query3= mysqli_query($connect,"SELECT COUNT(*) FROM `users` WHERE fieldOfStudy ='Medicine' AND gender ='female'");
      while($row3 = mysqli_fetch_assoc($query3)){
      foreach($row3 as $cname3 => $cvalue3){
      }}

      $query4= mysqli_query($connect,"SELECT COUNT(*) FROM `users` WHERE fieldOfStudy ='Hospitality' AND gender ='female'");
      while($row4 = mysqli_fetch_assoc($query4)){
      foreach($row4 as $cname4 => $cvalue4){
      }}

      $query5= mysqli_query($connect,"SELECT COUNT(*) FROM `users` WHERE fieldOfStudy ='Finance' AND gender ='female'");
      while($row5 = mysqli_fetch_assoc($query5)){
      foreach($row5 as $cname5 => $cvalue5){
      }}
      $query6= mysqli_query($connect,"SELECT COUNT(*) FROM `users` WHERE fieldOfStudy ='Accounting' AND gender ='female'");
      while($row6 = mysqli_fetch_assoc($query6)){
      foreach($row6 as $cname6 => $cvalue6){
      }}

    ?>
    

    
   
  
  <script>
        

var a = <?php echo json_encode($cvalue1); ?>;
var eng = parseInt(a);

var b = <?php echo json_encode($cvalue2); ?>;
var law1 = parseInt(b);

var c = <?php echo json_encode($cvalue3); ?>;
var med = parseInt(c);

var d = <?php echo json_encode($cvalue4); ?>;
var hos = parseInt(d);

var e = <?php echo json_encode($cvalue5); ?>;
var fin = parseInt(e);

var e = <?php echo json_encode($cvalue5); ?>;
var acc = parseInt(e);
    
    var myConfig = {
      backgroundColor: '#FBFCFE',
      type: "ring",
      title: {
        
        text: "Department",
        fontFamily: 'Lato',
        fontSize: 14,
        // border: "1px solid black",
        padding: "15",
        fontColor: "#1E5D9E",
      },
      subtitle: {
        text: "06/10/18 - 07/11/18",
        fontFamily: 'Lato',
        fontSize: 12,
        fontColor: "#777",
        padding: "5"
      },
      plot: {
        slice: '50%',
        borderWidth: 0,
        backgroundColor: '#FBFCFE',
        animation: {
          effect: 2,
          sequence: 3
        },
        valueBox: [{
          type: 'all',
          text: '%t',
          placement: 'out'
        }, {
          type: 'all',
          text: '%npv%',
          placement: 'in'
        }]
      },
      tooltip: {
        fontSize: 16,
        anchor: 'c',
        x: '50%',
        y: '50%',
        sticky: true,
        backgroundColor: 'none',
        borderWidth: 0,
        thousandsSeparator: ',',
        text: '<span style="color:%color">Page Url: %t</span><br><span style="color:%color">Pageviews: %v</span>',
        mediaRules: [{
          maxWidth: 500,
          y: '54%',
        }]
      },
      plotarea: {
        backgroundColor: 'transparent',
        borderWidth: 0,
        borderRadius: "0 0 0 10",
        margin: "70 0 10 0"
      },
      legend: {
        toggleAction: 'remove',
        backgroundColor: '#FBFCFE',
        borderWidth: 0,
        adjustLayout: true,
        align: 'center',
        verticalAlign: 'bottom',
        marker: {
          type: 'circle',
          cursor: 'pointer',
          borderWidth: 0,
          size: 5
        },
        item: {
          fontColor: "#777",
          cursor: 'pointer',
          offsetX: -6,
          fontSize: 12
        },
        mediaRules: [{
          maxWidth: 500,
          visible: false
        }]
      },
      scaleR: {
        refAngle: 270
      },
      series: [{
        text: "Engineering",
        values: [eng],  //+++++++++++++++++++++++++++++++++++++++++++++++++++++++++
        lineColor: "#00BAF2",
        backgroundColor: "#00BAF2",
        lineWidth: 1,
        marker: {
          backgroundColor: '#00BAF2'
        }
      }, {
        text: "Law",
        values: [law1], //+++++++++++++++++++++++++++++++++++++++++++++++++++++++++
        lineColor: "#E80C60",
        backgroundColor: "#E80C60",
        lineWidth: 1,
        marker: {
          backgroundColor: '#E80C60'
        }
      }, {
        text: "Medicine",
        values: [med], //+++++++++++++++++++++++++++++++++++++++++++++++++++++++++
        lineColor: "#9B26AF",
        backgroundColor: "#9B26AF",
        lineWidth: 1,
        marker: {
          backgroundColor: '#9B26AF'
        }
      }
        , {
        text: "Hospitality",
        values: [hos], //+++++++++++++++++++++++++++++++++++++++++++++++++++++++++
        lineColor: "#9Bd6AF",
        backgroundColor: "#9Bd6AF",
        lineWidth: 1,
        marker: {
          backgroundColor: '#9Bd6AF'
        }
      }
      , {
        text: "Finance",
        values: [fin], //+++++++++++++++++++++++++++++++++++++++++++++++++++++++++
        lineColor: "#9Bd6AF",
        backgroundColor: "#9Bd6AF",
        lineWidth: 1,
        marker: {
          backgroundColor: '#9Bd6AF'
        }
      }
        , {
        text: "Accounting",
        values: [acc], //+++++++++++++++++++++++++++++++++++++++++++++++++++++++++
        lineColor: "#9d26AF",
        backgroundColor: "#9d26AF",
        lineWidth: 1,
        marker: {
          backgroundColor: '#9d26AF'
        }
      }]
    };

    zingchart.render({
      id: 'myChart',
      data: {
        gui: {
          contextMenu: {
            button: {
              visible: true,
              lineColor: "#2D66A4",
              backgroundColor: "#2D66A4"
            },
            gear: {
              alpha: 1,
              backgroundColor: "#2D66A4"
            },
            position: "right",
            backgroundColor: "#306EAA",
            /*sets background for entire contextMenu*/
            docked: true,
            item: {
              backgroundColor: "#306EAA",
              borderColor: "#306EAA",
              borderWidth: 0,
              fontFamily: "Lato",
              color: "#fff"
            }

          },
        },
        graphset: [myConfig]
      },
      height: '499',
      width: '99%'
    });
  </script>
  

  <br>
  <footer class="mainfooter">
      <br>
      <a href="https://www.facebook.com/Curepipe-Starlight-Sports-Club-105270796211751/" target="_blank"><img src="images/fblogo1.png" style="width: 40px;height: 40px;"></a> &nbsp;
      <a href=""><img src="images/instalogo1.png" style="width: 40px;height: 40px;"></a> <br> <br>
      <a id="homepage" href="../csscfrontpage.html">Homepage</a>
      <p><a id="homepage" href="#"> Webmaster</a>
      <br>
      University of Mauritius | Reduit | Mauritius <br> | Tel : (230) 52 25 25 25 , E-Mail Address: admin@myweb.uom.ac.mu
      
      
      </p>
    </footer>
</div>
</body>
</html>
