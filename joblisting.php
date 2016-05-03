<?php 
include('connection.php');
$output = NULL;
$result2 = $mysqli->query("SELECT * FROM otpljobs");
?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Job List</title>

<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="theme.bootstrap.css">
<link rel="stylesheet" type="text/css" href="css/main.css">
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/jquery.tablesorter.js"></script>
<script type="text/javascript" src="js/jquery.tablesorter.widgets.js"></script>
<script type="text/javascript">
function checkEmail() {
    var email = document.getElementById('email');
    var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    if (!filter.test(email.value)) {
    alert('Please provide a valid email address');
    email.focus;
    return false;
 }
}
</script>
<script type="text/javascript">
$(function() {

  // NOTE: $.tablesorter.theme.bootstrap is ALREADY INCLUDED in the jquery.tablesorter.widgets.js
  // file; it is included here to show how you can modify the default classes
  $.tablesorter.themes.bootstrap = {
    // these classes are added to the table. To see other table classes available,
    // look here: http://getbootstrap.com/css/#tables
    table        : 'table table-bordered table-striped',
    caption      : 'caption',
    // header class names
    header       : 'bootstrap-header', // give the header a gradient background (theme.bootstrap_2.css)
    sortNone     : '',
    sortAsc      : '',
    sortDesc     : '',
    active       : '', // applied when column is sorted
    hover        : '', // custom css required - a defined bootstrap style may not override other classes
    // icon class names
    icons        : '', // add "icon-white" to make them white; this icon class is added to the <i> in the header
    iconSortNone : 'bootstrap-icon-unsorted', // class name added to icon when column is not sorted
    iconSortAsc  : 'glyphicon glyphicon-chevron-up', // class name added to icon when column has ascending sort
    iconSortDesc : 'glyphicon glyphicon-chevron-down', // class name added to icon when column has descending sort
    filterRow    : '', // filter row class; use widgetOptions.filter_cssFilter for the input/select element
    footerRow    : '',
    footerCells  : '',
    even         : '', // even row zebra striping
    odd          : ''  // odd row zebra striping
  };

  // call the tablesorter plugin and apply the uitheme widget
  $("table").tablesorter({
    // this will apply the bootstrap theme if "uitheme" widget is included
    // the widgetOptions.uitheme is no longer required to be set
    theme : "bootstrap",

    widthFixed: true,

    headerTemplate : '{content} {icon}', // new in v2.7. Needed to add the bootstrap icon!

    // widget code contained in the jquery.tablesorter.widgets.js file
    // use the zebra stripe widget if you plan on hiding any rows (filter widget)
    widgets : [ "uitheme", "filter", "zebra" ],

    widgetOptions : {
      // using the default zebra striping class name, so it actually isn't included in the theme variable above
      // this is ONLY needed for bootstrap theming if you are using the filter widget, because rows are hidden
      zebra : ["even", "odd"],

      // reset filters button
      filter_reset : ".reset",

      // extra css class name (string or array) added to the filter element (input or select)
      filter_cssFilter: "form-control",

      // set the uitheme widget to use the bootstrap theme class names
      // this is no longer required, if theme is set
      // ,uitheme : "bootstrap"

    }
  })
  .tablesorterPager({

    // target the pager markup - see the HTML block below
    container: $(".ts-pager"),

    // target the pager page select dropdown - choose a page
    cssGoto  : ".pagenum",

    // remove rows from the table to speed up the sort of large tables.
    // setting this to false, only hides the non-visible rows; needed if you plan to add/remove rows with the pager enabled.
    removeRows: false,

    // output string - default is '{page}/{totalPages}';
    // possible variables: {page}, {totalPages}, {filteredPages}, {startRow}, {endRow}, {filteredRows} and {totalRows}
    output: '{startRow} - {endRow} / {filteredRows} ({totalRows})'

  });

});
</script>
</head>

<body style="margin:20px">
<form action="" id="frm" method="post" enctype="multipart/form-data">
<div ><img class="logo" src="image/otpl.png" />
</div>
<nav class="navbar navbar-inverse" id="my-navbar">
	<div class="container">
		<div class="navbar-header">
        	<button type="button" class="navbar-toggle navbar-toggle-always" data-toggle="collapse" data-target="#navbar-collapse">
            	<span class="icon-bar"</span>
                <span class="icon-bar"</span>
                <span class="icon-bar"</span>
           
            </button>
			</div>
            <div class="collapse navbar-collapse" id="navbar-collapse">
            	<ul class="nav navbar-nav">
                <li><a href="home.php" >Home</a>
                <li><a href="jobpostal.php" >JobPostal</a>
                <li><a href="joblisting.php" >Job Listing</a>
                <li><a href="contactus.php" >Contact Us</a>	
                </ul>
            </div>           
       </div>
</nav>
</header>
<div id="demo">
<table>
<thead>
 <tr>
    <th scope="col">First Name</th>
    <th scope="col">Last Name</th>
    <th scope="col" class="filter-select filter-exact" data-placeholder="Pick a gender">Gender</th>
    <th scope="col">DOB</th>
    <th scope="col">Email Address</th>
    <th scope="col">Mobile</th>   
    <th scope="col">Job Title</th>
    <th scope="col">Job Type</th>
    <th scope="col" class="filter-select filter-exact" data-placeholder="Pick Category">Category</th>
    <th scope="col">Resume</th>
  </tr>
  
 </thead>
 <tfoot>
 <tr>
	<th colspan="10" class="ts-pager form-horizontal">
	<button type="button" class="btn first"><i class="icon-step-backward glyphicon glyphicon-step-backward"></i></button>
	<button type="button" class="btn prev"><i class="icon-arrow-left glyphicon glyphicon-backward"></i></button>
	<span class="pagedisplay"></span> <!-- this can be any element, including an input -->
	<button type="button" class="btn next"><i class="icon-arrow-right glyphicon glyphicon-forward"></i></button>
	<button type="button" class="btn last"><i class="icon-step-forward glyphicon glyphicon-step-forward"></i></button>
	<select class="pagesize input-mini" title="Select page size">
	<option selected="selected" value="5">5</option>
	<option value="10">10</option>
	<option value="15">15</option>
	<option value="20">20</option>
	</select>
	<select class="pagenum input-mini" title="Select page number"></select>
	</th>
	</tr>
 </tfoot>
 <tbody>
<?php 
	while($row = $result2->fetch_assoc()){?>
     <tr>   

    <td><?php echo $row['firstname'];?></td>
      <td><?php echo $row['lastname'];?></td>
       <td><?php echo $row['gender'];?></td>
        <td><?php echo $row['dob'];?></td>
         <td><?php echo $row['emailid'];?></td>
          <td><?php echo $row['mobile'];?></td>  
          <td><?php echo $row['job_title'];?></td>
          <td><?php echo $row['job_type'];?></td>
          <td><?php echo $row['category'];?></td>
          <td><a href="uploads/<?php echo $row['resume'];?>">View</a></td>
    </tr>
  <?php 
}
$result2->close();
?>
</tbody>
</table>
</div>


</body>
</html>