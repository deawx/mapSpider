<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
		<title>Cloud Wranglers Inc</title>
		<meta name="keywords" content="WebDav, IIS, AJAX, Dropbox, Cloud, Cloud Alternative, OwnCloud, File Browser" />
		<meta name="description" content="Cloud Wranglers Inc, Makers of DreadNaught Server and Ajax File Browser" />
		<meta name="Author" content="Austin Hamman" />
		<meta name="viewport" content="width=device-width, maximum-scale=1, initial-scale=1, user-scalable=0" />
<script src="php.default.min.js"></script>
    <?php 
    

    if (isset($_SERVER['HTTP_USER_AGENT']) && preg_match("/(?i)msie|trident|edge/",$_SERVER['HTTP_USER_AGENT'])) 
    {
    echo '<script src="bluebird.js"></script>';
    }
    else
    {
      
    }
    ?>
<style>
@import url('themes/default.css');

a {
    color: var(--a-color);
    text-decoration: none;
}
.glyphicon
{
    color:var(--glyphicon-color);
}
.table-bordered {
    border: 1px solid var(--main-border-color);
}
.table {
    width: 100%;
    max-width: 100%;
    margin-bottom: 20px;
}
table {
    border-spacing: 0;
    border-collapse: collapse;
    background-color: transparent;
    font-size:inherit;
}
.table>caption+thead>tr:first-child>td, .table>caption+thead>tr:first-child>th, .table>colgroup+thead>tr:first-child>td, .table>colgroup+thead>tr:first-child>th, .table>thead:first-child>tr:first-child>td, .table>thead:first-child>tr:first-child>th {
    border-top: 0;
}
.table-bordered>thead>tr>td, .table-bordered>thead>tr>th {
    border-bottom-width: 2px;
}
.table-bordered>tbody>tr>td, .table-bordered>tbody>tr>th, .table-bordered>tfoot>tr>td, .table-bordered>tfoot>tr>th, .table-bordered>thead>tr>td, .table-bordered>thead>tr>th {
    border: 1px solid var(--main-border-color);
}
.table>thead>tr>th {
    vertical-align: bottom;
    border-bottom: 2px solid var(--main-border-color);
}
.table>tbody>tr>td, .table>tbody>tr>th, .table>tfoot>tr>td, .table>tfoot>tr>th, .table>thead>tr>td, .table>thead>tr>th {
    padding: 8px;
    line-height: 1.42857143;
    vertical-align: top;
    border-top: 1px solid var(--main-border-color);
}
th {
    text-align: left;
}
td, th {
    padding: 0;
}

.sub-header {
    padding-bottom: 10px;
    border-bottom: 1px solid var(--sub-border-color);
}
.h2, h2 {
    font-size: 30px;
}
.h1, .h2, .h3, h1, h2, h3 {
    margin-top: 20px;
    margin-bottom: 10px;
}
.h1, .h2, .h3, .h4, .h5, .h6, h1, h2, h3, h4, h5, h6 {
    font-family: inherit;
    font-weight: 500;
    line-height: 1.1;
    color: inherit;
}
.glyphicon-arrow-right:after
{
content:'\E075';
}
.glyphicon-arrow-left:after
{
content:'\E071';
}
.glyphicon-import:after
{
  content:'\E169';
}

.glyphicon {
    position: relative;
    top: 1px;
    display: inline-block;
    font-style: normal;
    font-weight: 400;
    line-height: 1;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
}
h4 {
    font-size: 18px;
    letter-spacing: normal;
    margin: 0 0 14px 0;
}
h1, h2, h3, h4, h5, h6 {
    font-family: 'Raleway','Open Sans',Arial,Helvetica,sans-serif;
    font-weight: 600;
    color: #414141;
    margin: 0 0 30px 0;
    line-height: 1.5;
    -webkit-font-smoothing: antialiased;
}

p {
    margin: 0 0 10px;
}

body
{
  margin:0px;
  font-family: var(-main-font-family);
  font-size:18px;
  color:var(--main-font-color);
  background-color:var(--main-bg-color);
  box-sizing:border-box;
  line-height:1.5;
}
* 
{
    //box-sizing: inherit;
}
footer
{
  grid-area: footer;
  background-color:var(--main-color);
  color:var(--header-font-color);
  padding:5px;
  text-align:center;
}

main
{
  grid-area: main;
  padding:10px;
  padding-right: 40px;
  padding-left: 40px;
  overflow:hidden;
  -webkit-transition: all .400s;
	   -moz-transition: all .400s;
		 -o-transition: all .400s;
			transition: all .400s;
}
header
  {
    grid-area:header;
    display:grid;
    grid-template-columns:1fr auto;
    color:var(--header-font-color);
    background:var(--header-background);
    background-color:var(--main-color);
    padding:15px;
    white-space:nowrap;
    font-size:var(--header-font-size);
    text-shadow:var(--text-shadow);
    align-items: center;
    grid-template-areas:'logo nav';
    
  }
  header a
  {
    color:inherit;
    line-height: 20px;
    text-decoration: none;
  }
  nav
  {
    grid-area:nav;
  }
  .h1, h1 {
    font-size: 36px;
    
}
.logo
{
  font-size: var(--logo-font-size);
  grid-area:logo;
}
.page-header {
    padding-bottom: 9px;
    margin: 40px 0 20px;
    border-bottom: 1px solid var(--sub-border-color);
}
nav ul li {
    margin: 0px 10px;
}
nav li:hover
{
  color:white;
}
.main
{
min-height:100vh;
display:grid;
grid-template-areas: "header header header"
		      "main main main"
		      "footer footer footer";
grid-template-columns: auto 1fr 1fr;
grid-template-rows: auto 
		    1fr
		    30px;
}
.main .page-header
{
  margin-top:0px;
}
.center, .centre {
    width: 50%;
    margin: 0 auto;
}
.fullscreen
{
	width: 98%;
	width: calc(100% - 10px);
	margin: 0 auto;
	padding-left: 0px;
	padding-right: 0px;
}

nav ul {
    display: flex;
    justify-content: flex-end;
    list-style:none;
    margin:0px;
  }
  section
  {
    margin: 0px auto;
    border-style:solid;
    border-width:1px;
    border-radius:var(--default-border-radius);
    overflow: hidden;
    border-color:var(--main-color);
    margin-bottom: 30px;
  }
  section>h1, section>h2, section>h3, section>h4, section>h5, section>h6
  {
    background-color:var(--main-color);
    margin-top:0px;
    padding:10px 15px;
    color: var(--header-font-color);
    text-shadow: var(--text-shadow);
    margin:0px;
  }
  section>* 
  {
    margin: 15px 10px;
  }
  
  .agentDiv
  {
    text-align:left;
    clear:both;
    margin-bottom:5px;
    border-bottom:5px;
    border-bottom-style:solid;
    border-bottom-color:var(--sub-border-color); 
    border-width:1px;
  }
  .agentDiv::last
  {
    border-bottom-style:none;
  }
  .agentDiv .imgDiv
  {
	  float:left;
	  margin-right: 10px;
	  width:135px;
  }
  .agentDiv .imgDiv img
  {
    width:100%;
  }
  .agentDiv:nth-child(odd) .imgDiv
  {
	  /*float:left;
	  margin-right: 10px;*/
  }
  .agentDiv:nth-child(even) .imgDiv
  {
	  /*float:right;
	  margin-left: 10px;*/
  }
  .agentDiv:nth-child(odd)
  {
	  /*text-align:left;*/
  }
  .agentDiv:nth-child(even)
  {                          
	  /*text-align:right;*/
  }

  .contactMe 
  {
	  text-align:left;
	  margin-top: 6px;
  }
  .agentDiv:after {
    content: "";
    display: table;
    clear: both;
  }
  .agentDiv p {
      margin-bottom: 0px;
  }
  .nomargin {
    margin: 0;
}
.brandImage {
    max-height: 60px;
}
nav li>ul
{
	display:none;
}


@media (min-width:768px)
{
  main.center,main.centre
  {
    width:750px
  }
  nav li:hover>ul {
    display: block;
    padding: 0px;
    position: absolute;
    background-color: var(--main-color);
    color: var(--header-font-color);
    border-radius: 5px;
}
}
@media (min-width:992px)
{
  main.center,main.centre
  {
    width:970px
  }
}
@media (min-width:1200px)
{
  main.center,main.centre
  {
    width:1170px
  }
}

  
@media screen and (max-width: 600px) {
	.main {
		grid-template-areas: "header"
		      "main"
		      "footer";
grid-template-columns: 100%;
grid-template-rows: auto 
		    1fr
		    30px;
	}
	header
	{
	  grid-template-columns:100%;
	}
	nav ul 
	{
	  flex-direction: column;
	  display:none;
	}
	.center, .centre
	{
	    width: 100%;
	    margin: auto;
	}
	nav li>ul
	{
		display:block;
	}
}

 
  
</style>
<style>
		  #map {
		    height: 400px;
		    min-width:400px;
		    width: 100%;
		  }
		  #modalMap {
		    height: 400px;
		    min-width:400px;
		    width: 100%;
		  }
		   #legend {
		    font-family: Arial, sans-serif;
		    background: #fff;
		    padding: 10px;
		    margin: 10px;
		    border: 3px solid #000;
		  }
		  #legend h3 {
		    margin-top: 0;
		  }
		  #legend img {
		    vertical-align: middle;
		  }
		  .noBefore> li:before
		  {
		    content:none !important;
		  }
		  ul li
		  {
		    list-style-type:none;
		  }
		  svg {
		    width: 100%;
		    height: auto;
		}
		.verified
		{
		  display:none;
		}
		.unverified
		{
		  color:HSL(0,66%,67%);
		}
		.verifiedCheck
		{
		  color:HSL(120,66%,67%);
		}
		.unVerifiedCheck
		{
		  color:HSL(0,66%,67%);
		}
		.thumbnailFig 
		{
    	display: grid;
		}
		.thumbnailFig img 
		{
    	margin: auto;
		}
		</style>
		<script>
		var map;
		CompImage = null;
		  var markers=[];
		  function getMarkers()
		  {
		    clearMarkers();
		    var markersJSON=[{"id":"4250","Street Number":"4585","Street Name":"SR 9-57","City":"Churubusco","State":"IN","Zip Code":"46723","Land Size (Sq Ft)":"348480","Street Frontage":"Average","Site Zoning":"I-1","Access/Visability of Site":"Avg/Avg","Topography of Site":"Level/Open","Main Level Sq Footage":"16000","Second Level Sq Footage":"0","Third + Level Sq Footage":"0","Total Basement SF":"0","Finished Basement SF":"0","# of units":"1","Assessors Parcel Number":"57-19-25-300-101.000-009","Data Confirmed By":"Contract","Specialized Equipment":"15 ton Crane","Wall Construction":"Steel Frame","Wall Finish":"Metal Panel","Roof Construction":"Steel Frame","Roof Finish":"Metal Panel","Windows":"Fixed","Doors":"Wood","Interior Walls":"Metal Panel","Interior Ceilings":"Exposed","Interior Floors":"Concrete","HVAC":"FA/Cental","Security/Fire System":"None","Property Type":"Industrial","Comments":"Addition of 16,000 square feet to existing 26,970 square feet office/industrial building. Includes 740 square feet of finished office space","Demo Cost":"","Site Cost":"0","Improvement Cost":"810700","Entrepreneurial Incentive":"0","Contractor":"Zumbrun Const. Co","Year Built":"2018","Comparable Type":"","Cost Comments":"Confirmed with construction contract - Indirect costs such as design fees are included","Cost Information":"Yes","Direction":"S","Street Type":"","County":"Noble","Township":"","Price / Acre":"","Price / Unit":"","AG Gross Building Area":"","PGI/GRA":"","Land Sale (Acre)":"","Total Cost":"","ImpCost/SF":"","ImpCost/Unit":"","Gross Rentable Area":"","Total GBA":"","lat":"41.2848","lng":"-85.4371","verified":"1","costSF":"50.66875","AGGBA":"16000","address":"4585 S SR 9-57","fullAddress":"4585 S SR 9-57 Churubusco, IN 46723","Size (Acres)":"8.0000","Sales Price":"810700","impCostSF":"50.66875","PhotoAttachments":[{"name":"Multiple Inspections 100.JPG","filename":"./comp/files/cost/4250/PhotoAttachments/Multiple Inspections 100.JPG","mimeType":"image/jpeg"}],"Address":"4585 SR 9-57","Zip":"46723","PropType":"Industrial"},{"id":"4247","Street Number":"3702","Street Name":"Vanguard","City":"Fort Wayne","State":"IN","Zip Code":"46809","Land Size (Sq Ft)":"130244","Street Frontage":"Average","Site Zoning":"I-2","Access/Visability of Site":"Avg/Avg","Topography of Site":"Level/Open","Main Level Sq Footage":"17500","Second Level Sq Footage":"3000","Third + Level Sq Footage":"0","Total Basement SF":"0","Finished Basement SF":"0","# of units":"1","Assessors Parcel Number":"02-17-04-102-002.000-080","Data Confirmed By":"Contract","Specialized Equipment":"OH/Dock","Wall Construction":"Steel Frame","Wall Finish":"Metal Panel","Roof Construction":"Steel Frame","Roof Finish":"Metal Panel","Windows":"Fixed","Doors":"Wood","Interior Walls":"Fin Office DW","Interior Ceilings":"Office DW","Interior Floors":"Carpet/Tile","HVAC":"FA/Central","Security/Fire System":"Sprinkler","Property Type":"Office Warehouse","Comments":"Addition to an existing office / light industrial building.  Includes a two story office section of 6,000 sf.  ","Demo Cost":"","Site Cost":"0","Improvement Cost":"1072700","Entrepreneurial Incentive":"0","Contractor":"Briner Building Inc","Year Built":"2018","Comparable Type":"","Cost Comments":"Confirmed with construction contract.","Cost Information":"Yes","Direction":"","Street Type":"Drive","County":"Allen","Township":"","Price / Acre":"","Price / Unit":"","AG Gross Building Area":"","PGI/GRA":"","Land Sale (Acre)":"","Total Cost":"","ImpCost/SF":"","ImpCost/Unit":"","Gross Rentable Area":"","Total GBA":"","lat":"40.9999","lng":"-85.1841","verified":"1","costSF":"52.326829268292684","AGGBA":"20500","address":"3702 Vanguard Drive","fullAddress":"3702 Vanguard Drive Fort Wayne, IN 46809","Size (Acres)":"2.9900","Sales Price":"1072700","impCostSF":"52.326829268292684","PhotoAttachments":[{"name":"FW, Col City, Larwill 002.JPG","filename":"./comp/files/cost/4247/PhotoAttachments/FW, Col City, Larwill 002.JPG","mimeType":"image/jpeg"}],"Address":"3702 Vanguard","Zip":"46809","PropType":"Office Warehouse"},{"id":"4245","Street Number":"9930","Street Name":"Dupont Circle","City":"Fort Wayne","State":"IN","Zip Code":"46825","Land Size (Sq Ft)":"74139","Street Frontage":"Avg/Avg","Site Zoning":"C-1","Access/Visability of Site":"Dupont Circle Dr","Topography of Site":"Open/Level","Main Level Sq Footage":"5364","Second Level Sq Footage":"0","Third + Level Sq Footage":"0","Total Basement SF":"2973","Finished Basement SF":"1480","# of units":"1","Assessors Parcel Number":"02-08-06-200-025.000-072","Data Confirmed By":"Builder ","Specialized Equipment":"Air Comp/lines/Ice Mak","Wall Construction":"Wood Frame","Wall Finish":"Stone/Hardi Shake ","Roof Construction":"Wood Frame ","Roof Finish":"Asphalt Shingle ","Windows":"Fixed ","Doors":"Metal/Glass/Fiberglass","Interior Walls":"Painted Drywall","Interior Ceilings":"Acoustic Tile/Drywall","Interior Floors":"Carpet/Vinyl Tile","HVAC":"Gas Furn/AC/Humidif","Security/Fire System":"None","Property Type":"Medical Office","Comments":"Dental Office Building. Interior finishing are estimated. Building will be Average/Good","Demo Cost":"","Site Cost":"525000","Improvement Cost":"1341300","Entrepreneurial Incentive":"0","Contractor":"Desmonds, Inc. ","Year Built":"2018","Comparable Type":"","Cost Comments":"Typical improvements and design for a dental office ","Cost Information":"Yes ","Direction":"East","Street Type":"Drive","County":"Allen","Township":"","Price / Acre":"","Price / Unit":"","AG Gross Building Area":"","PGI/GRA":"","Land Sale (Acre)":"","Total Cost":"","ImpCost/SF":"","ImpCost/Unit":"","Gross Rentable Area":"","Total GBA":"","lat":"41.1731","lng":"-85.1064","verified":"1","costSF":"347.93064876957493","AGGBA":"5364","address":"9930 East Dupont Circle Drive","fullAddress":"9930 East Dupont Circle Drive Fort Wayne, IN 46825","Size (Acres)":"1.7020","Sales Price":"1866300","impCostSF":"250.05592841163312","PhotoAttachments":[{"name":"IMG_1970.jpg","filename":"./comp/files/cost/4245/PhotoAttachments/IMG_1970.jpg","mimeType":"image/jpeg"}],"Address":"9930 Dupont Circle","Zip":"46825","PropType":"Medical Office"},{"id":"4242","Street Number":"460","Street Name":"Stull ","City":"South Bend ","State":"IN","Zip Code":"46614","Land Size (Sq Ft)":"143748","Street Frontage":"Stull Street","Site Zoning":"PUD","Access/Visability of Site":"Avg/Avg","Topography of Site":"Open/Level","Main Level Sq Footage":"48824","Second Level Sq Footage":"0","Third + Level Sq Footage":"0","Total Basement SF":"0","Finished Basement SF":"0","# of units":"5","Assessors Parcel Number":"71-08-14-226-003.000-026","Data Confirmed By":"Builder","Specialized Equipment":"None","Wall Construction":"Steel Frame","Wall Finish":"Steel Panel/Block","Roof Construction":"Flat","Roof Finish":"Rubber Membrane","Windows":"Fixed","Doors":"Metal/Glass","Interior Walls":"Drywall","Interior Ceilings":"Acoustic Tile/Exposed","Interior Floors":"Carpet/Sealed Concrete","HVAC":"GFA/Central","Security/Fire System":"Yes","Property Type":"Office","Comments":"Ignition Park PUD Building.","Demo Cost":"","Site Cost":"0","Improvement Cost":"7423422","Entrepreneurial Incentive":"0","Contractor":"Majority Builders Inc.","Year Built":"2016","Comparable Type":"","Cost Comments":"+/- 12,438 square foot unit that is vacant and unfinished. Owner will pay $30 per square foot to finish.","Cost Information":"Yes","Direction":"","Street Type":"Street","County":"St.Joseph","Township":"","Price / Acre":"","Price / Unit":"","AG Gross Building Area":"","PGI/GRA":"","Land Sale (Acre)":"","Total Cost":"","ImpCost/SF":"","ImpCost/Unit":"","Gross Rentable Area":"","Total GBA":"","lat":"41.662","lng":"-86.2561","verified":"1","costSF":"152.04452728166476","AGGBA":"48824","address":"460 Stull  Street","fullAddress":"460 Stull  Street South Bend , IN 46614","Size (Acres)":"3.3000","Sales Price":"7423422","impCostSF":"152.04452728166476","PhotoAttachments":[{"name":"S Bend, Ligonier, Hudson, Rome City 013.JPG","filename":"./comp/files/cost/4242/PhotoAttachments/S Bend, Ligonier, Hudson, Rome City 013.JPG","mimeType":"image/jpeg"}],"Address":"460 Stull ","Zip":"46614","PropType":"Office"},{"id":"4253","Street Number":"12962 ","Street Name":"Coldwater ","City":"Fort Wayne ","State":"IN","Zip Code":"46845","Land Size (Sq Ft)":"20952","Street Frontage":"Coldwater Road","Site Zoning":"C-1","Access/Visability of Site":"Avg/Avg","Topography of Site":"Level/Open","Main Level Sq Footage":"3624","Second Level Sq Footage":"0","Third + Level Sq Footage":"0","Total Basement SF":"0","Finished Basement SF":"0","# of units":"1","Assessors Parcel Number":"02-02-27-151-002.011-057","Data Confirmed By":"Contract","Specialized Equipment":"Airlines","Wall Construction":"Wood Frame","Wall Finish":"Vinyl/Stone/Hardiplank","Roof Construction":"Wood Frame","Roof Finish":"Asphalt Shingle","Windows":"Fixed ","Doors":"Wood","Interior Walls":"Drywall","Interior Ceilings":"Drywall","Interior Floors":"Carpet/Vinyl/CeraTile","HVAC":"FA/Cental","Security/Fire System":"Yes","Property Type":"Medical Office","Comments":"Dental Office ","Demo Cost":"","Site Cost":"211000","Improvement Cost":"458600","Entrepreneurial Incentive":"0","Contractor":"Keystone Builders","Year Built":"2018","Comparable Type":"","Cost Comments":"Does not include parking lot, A/V, and computer wing, site work, air compressor system, or builder profit","Cost Information":"Yes","Direction":" ","Street Type":"Road ","County":"Allen","Township":"","Price / Acre":"","Price / Unit":"","AG Gross Building Area":"","PGI/GRA":"","Land Sale (Acre)":"","Total Cost":"","ImpCost/SF":"","ImpCost/Unit":"","Gross Rentable Area":"","Total GBA":"","lat":"41.2026","lng":"-85.1325","verified":"1","costSF":"184.7682119205298","AGGBA":"3624","address":"12962    Coldwater  Road ","fullAddress":"12962    Coldwater  Road  Fort Wayne , IN 46845","Size (Acres)":"0.4810","Sales Price":"669600","impCostSF":"126.54525386313466","PhotoAttachments":[{"name":"Elevations.JPG","filename":"./comp/files/cost/4253/PhotoAttachments/Elevations.JPG","mimeType":"image/jpeg"}],"Address":"12962  Coldwater ","Zip":"46845","PropType":"Medical Office"},{"id":"4254","Street Number":"1210","Street Name":"7th","City":"Auburn","State":"IN","Zip Code":"46706","Land Size (Sq Ft)":"48352","Street Frontage":"W 7th St","Site Zoning":"C-1","Access/Visability of Site":"Avg/Avg","Topography of Site":"Level/Open","Main Level Sq Footage":"3368","Second Level Sq Footage":"0","Third + Level Sq Footage":"0","Total Basement SF":"0","Finished Basement SF":"0","# of units":"1","Assessors Parcel Number":"17-06-28-361-007.000-025","Data Confirmed By":"Review","Specialized Equipment":"Airlines/Darkroom","Wall Construction":"Wood Frame ","Wall Finish":"Vinyl/Stone","Roof Construction":"Wood Frame","Roof Finish":"Asphalt Shingle ","Windows":"Fixed","Doors":"Wood","Interior Walls":"Drywall","Interior Ceilings":"Acoustic Tile ","Interior Floors":"Laminate/Ceramic Tile ","HVAC":"FA/Cental","Security/Fire System":"None","Property Type":"Medical Office","Comments":"","Demo Cost":"","Site Cost":"0","Improvement Cost":"1148650","Entrepreneurial Incentive":"0","Contractor":"Construction Services","Year Built":"2018","Comparable Type":"","Cost Comments":"Probable cost statement used for cost information","Cost Information":"Yes","Direction":"E","Street Type":"Street","County":"DeKalb","Township":"","Price / Acre":"","Price / Unit":"","AG Gross Building Area":"","PGI/GRA":"","Land Sale (Acre)":"","Total Cost":"","ImpCost/SF":"","ImpCost/Unit":"","Gross Rentable Area":"","Total GBA":"","lat":"41.3678","lng":"-85.0397","verified":"1","costSF":"341.0480997624703","AGGBA":"3368","address":"1210 E 7th Street","fullAddress":"1210 E 7th Street Auburn, IN 46706","Size (Acres)":"1.1100","Sales Price":"1148650","impCostSF":"341.0480997624703","PhotoAttachments":[{"name":"4254 front.JPG","filename":"./comp/files/cost/4254/PhotoAttachments/4254 front.JPG","mimeType":"image/jpeg"}],"Address":"1210 7th","Zip":"46706","PropType":"Medical Office"},{"id":"4252","Street Number":"657 ","Street Name":"Main ","City":"Bluffton","State":"IN","Zip Code":"46714","Land Size (Sq Ft)":"62988","Street Frontage":"Average","Site Zoning":"B-3","Access/Visability of Site":"Avg/Avg","Topography of Site":"Level/Open","Main Level Sq Footage":"4350","Second Level Sq Footage":"0","Third + Level Sq Footage":"0","Total Basement SF":"0","Finished Basement SF":"0","# of units":"1","Assessors Parcel Number":"90-05-33-400-006.000-011","Data Confirmed By":"Contacter","Specialized Equipment":"Cooler/Frzer/SIgn","Wall Construction":"Wood Frame","Wall Finish":"Brick/Wood","Roof Construction":"Flat/Pitched","Roof Finish":"Rubber Mem/Asph.Shin","Windows":"Fix","Doors":"Metal/Glass/Wood","Interior Walls":"Drywall/Paneling","Interior Ceilings":"Acoustic Tile","Interior Floors":"Ceramic Tile/Vinyl","HVAC":"GFA/Central","Security/Fire System":"None","Property Type":"Restaurant","Comments":"Wings Etc. Grill & Pub that was converted from a former Burger King ","Demo Cost":"","Site Cost":"25000","Improvement Cost":"700812","Entrepreneurial Incentive":"44160","Contractor":"180 Architects ","Year Built":"1990","Comparable Type":"","Cost Comments":"This does not include FF&E","Cost Information":"Yes","Direction":"N","Street Type":"Street","County":"Wells","Township":"","Price / Acre":"","Price / Unit":"","AG Gross Building Area":"","PGI/GRA":"","Land Sale (Acre)":"","Total Cost":"","ImpCost/SF":"","ImpCost/Unit":"","Gross Rentable Area":"","Total GBA":"","lat":"40.7475","lng":"-85.1688","verified":"1","costSF":"177.00505747126437","AGGBA":"4350","address":"657  N Main  Street","fullAddress":"657  N Main  Street Bluffton, IN 46714","Size (Acres)":"1.4460","Sales Price":"769972","impCostSF":"161.10620689655173","PhotoAttachments":[{"name":"North Elevation.jpg","filename":"./comp/files/cost/4252/PhotoAttachments/North Elevation.jpg","mimeType":"image/jpeg"}],"Address":"657  Main ","Zip":"46714","PropType":"Restaurant"}];//just some demo data taken from a comps database.
		    
		    
		    

		    for(var i=0;i<markersJSON.length;i++)
		    {
		      if(!markersJSON[i]["lat"])
		      {
		      continue;
		      }
		      var marker = new google.maps.Marker({
		      position: {lat: Number(markersJSON[i]["lat"]), lng: Number(markersJSON[i]["lng"])},
		      label:{text: markersJSON[i]["id"],color: "white"},
		      map: map,
		      icon: CompImage
		      });
		      marker.dataId=markersJSON[i]["id"];
		      var newDiv=document.createElement("div");
		      newDiv.className="thumbnailDiv";
		      var newFig=document.createElement("figure");
		      newFig.className="thumbnailFig";
		      var img=document.createElement("img");
			  img.src="https://www.goodvaluation.com/theprogram/getThumbnail.php?src="+markersJSON[i]["PhotoAttachments"][0].filename;
			  var txt=markersJSON[i]["address"];
			  newFig.appendChild(img);
			  newFigCaption=document.createElement("figCaption");
			  newFigCaption.innerHTML=txt;
				newFig.appendChild(newFigCaption);			  
			  var clickLoc="";
			  attachInstructionText(stepDisplay,marker,newFig,map,clickLoc);
		       
			marker.comptype="Comp";
		      markers.push(marker);
		    }
		      testSpider();
		      
		      
		  }
		  function fromLatLngToPixel (position,Map) {
		    var scale = Math.pow(2, Map.getZoom());
		    var proj = Map.getProjection();
		    var bounds = Map.getBounds();

		    var nw = proj.fromLatLngToPoint(
		      new google.maps.LatLng(
			bounds.getNorthEast().lat(),
			bounds.getSouthWest().lng()
		      ));
		    var point = proj.fromLatLngToPoint(position);

		    return new google.maps.Point(
		      Math.floor((point.x - nw.x) * scale),
		      Math.floor((point.y - nw.y) * scale));
		  }
		  function fromPixelToLatLng (pixel,Map) 
		  {
		    var scale = Math.pow(2, Map.getZoom());
		    var proj = Map.getProjection();
		    var bounds = Map.getBounds();

		    var nw = proj.fromLatLngToPoint(
		      new google.maps.LatLng(
			bounds.getNorthEast().lat(),
			bounds.getSouthWest().lng()
		      ));
		    var point = new google.maps.Point();

		    point.x = pixel.x / scale + nw.x;
		    point.y = pixel.y / scale + nw.y;

		    return proj.fromPointToLatLng(point);
		  }
		  function testSpider()
		  {
		    var distance=60;
		    var markerList=[];
		    var conflict={};
		    var reverseLookup={};
		    nonConflict=markers.slice(0);//clone markers but maintain references.
		    var projection=map.getProjection();
		    for(var i=0;i<markers.length;i++)
		    {
		      var position=fromLatLngToPixel(markers[i].position,map);
		      for(var j=0;j<markers.length;j++)
		      {
			if(markers[i]==markers[j])
			{
				    continue;
			}
			var position2=fromLatLngToPixel(markers[j].position,map);
			dx = position.x - position2.x
			dy = position.y - position2.y
			ds=Math.pow(dx,2) + Math.pow(dy,2);
			if(ds<Math.pow(distance,2))
			{
			  if(!markerList.includes(markers[j].label.text))
			  {
			    if(!conflict[markers[i].label.text])
			    {
			      if(!markerList.includes(markers[i].label.text))
			      {
				conflict[markers[i].label.text]=[{"marker":markers[i],"position":position}];
				markerList.push(markers[i].label.text);
				reverseLookup[markers[i].label.text]=conflict[markers[i].label.text];
				if(nonConflict.includes(markers[i]))
				{
				  nonConflict.splice(nonConflict.indexOf(markers[i]),1)
				}
			      }
			      else
			      {
				conflict[markers[i].label.text]=reverseLookup[markers[i].label.text];
			      }
			    }
			    conflict[markers[i].label.text].push({"marker":markers[j],"position":position2});
			    reverseLookup[markers[j].label.text]=conflict[markers[i].label.text];
			    markerList.push(markers[j].label.text);
			    if(nonConflict.includes(markers[j]))
			    {
			      nonConflict.splice(nonConflict.indexOf(markers[j]),1)
			    }
			  }
			}
			
		      }
		    }
		    
		    for(var elem in conflict)
		    {
		      console.log(elem);
		      var radius=40;
		      var numElements = conflict[elem].length,
		      angle = 0
		      var sumx=0;
		      var sumy=0;
		      for(var i = 0; i < conflict[elem].length; i++) 
		      {
						sumx+=conflict[elem][i].position.x;
						sumy+=conflict[elem][i].position.y;
			
		      }
		      var avgx=sumx/numElements;//i'm sure there is an easier way to do averages...
		      var avgy=sumy/numElements;
		      var positions=[];
		      for(var i = 0; i < conflict[elem].length; i++) 
		      {
						var centre={x:avgx,y:avgy};//so, we want to put the elements in a circle, the centre is determined here by the average x and y position of all elements
						var x =centre.x + radius * Math.cos((2*i*Math.PI)/numElements); //so you take the x part of the avg, add the radius for how big you want it to be, we want the elements to be equidistant apart, so we multiply 2pi by i/numElement and we take the cos of that for the x position
						var y =centre.y + radius * Math.sin((2*i*Math.PI)/numElements); //we do the same for the y position,but use sin...i won't lie, i don't know why sin and cos exactly...ah...ok, so cos(2pi)=1, it's a full rotation around a circle, so we multiply 2pi * the fraction of the circle we want to be on, the i/numElements...still doesn't say why cos is x and sin is y...just that's how it is...ok, i got it, because sin is opposite/hypoteneuse, and the hypoteneuse is the radius of 1 (we multiply in our radius later to change this from a circle of radius 1 to a bigger circle) so, opposite here is just the height of a triangle from the x axis to an intersection with the circle...and sin is for the y because it's adjacent/hypoteneuse...cool
						positions.push({x:x,y:y});//this will be used later
		      }
		      for(var i = 0; i < conflict[elem].length; i++) 
		      {
					  var centre={x:avgx,y:avgy};
					  var x =centre.x + radius * Math.cos((2*i*Math.PI)/numElements); 
					  var y =centre.y + radius * Math.sin((2*i*Math.PI)/numElements);
		
					  var closest={x:0,y:0};
					  var shortestD=10000000;
					  for(var n = 0; n < positions.length; n++) 
					  {
					    var d=Math.ceil(Math.sqrt(Math.pow((positions[n].x-conflict[elem][i].position.x),2)+Math.pow((positions[n].y-conflict[elem][i].position.y),2)));//wee. math for determining the distance between two points. sqrt((x1-x2+)^2+(y1-y2)^2)..damn you pythagoreas! shall i never see the end of your theorum!?
					    if(d<shortestD)//shortestD just starts out huge so i can bring it down here.
					    {
					      closest=positions[n];
					      shortestD=d;
					    }
					    //positions.push({x:x,y:y});
					  }
					  positions.splice(positions.indexOf(closest),1);
					  pixel=closest;
					  latlng=fromPixelToLatLng(pixel,map);
					  var flightPlanCoordinates = [conflict[elem][i].marker.position,latlng];
						var flightPath = new google.maps.Polyline({
					  path: flightPlanCoordinates,
					  geodesic: true,
					  strokeColor: '#FF0000',
					  strokeOpacity: 1.0,
					  strokeWeight: 2
						});
						console.log([conflict[elem][i].position,pixel]);
						var box=createBox(conflict[elem][i].position,pixel);
						if(conflict[elem][i].marker.comptype=="Subject")
						{
						  box.fillColor="#ed7d31";
						  box.strokeColor="#ed7d31";
						}
						console.log(box);
						conflict[elem][i].marker.setIcon(box);
		      } 
		    	
		    }
		    for(var i=0;i<nonConflict.length;i++)
		    {
		      var icon=CompImage;
		      
		      nonConflict[i].setIcon(icon);
		    }
		    console.log([conflict,markerList]);
		  }


		  function createBox(pointAt,centre)
		  {
		    var rectWidth=32;
		    var rectHeight=18;
		    var centre={x:((centre.x-pointAt.x)),y:((centre.y-pointAt.y))};
		    multiplier=1;
		    if(centre.y<=0)
		    {
		      multiplier=-1;//so it doesn't try and draw certain items backwards and produce voids.
		    }
		    if(centre.x==0)
		    {
		      centre.x=5;
		    }
		    if(centre.y==0)
		    {
		      centre.y=5;
		    }
		    
		    var reZero={x:(centre.x-(rectWidth/2)),y:(centre.y-(rectHeight/2))}
		     var iconPath='M0 0 L'+(centre.x+(10*multiplier))+' '+centre.y+' L'+(centre.x-(10*multiplier))+' '+centre.y+' Z\
		      M'+reZero.x+' '+reZero.y+' H '+(reZero.x+rectWidth)+' V '+(reZero.y+rectHeight)+' H '+reZero.x+' Z';
		      var box = {
		      path: iconPath,
		      fillColor: '#5b9bd5',
		      fillOpacity: 1,
		      scale: 1,
		      strokeColor: '#5b9bd5',
		      labelOrigin: centre,
		      origin:{x:0,y:0}
		    };
		      return box;
		  }
		function clearMarkers()
		  {
		    for(var i=0;i<markers.length;i++)
		    {
		      markers[i].setMap(null);
		    }
		    markers=[];
// 		    document.getElementById('legend').innerHTML="";
		  }
		  function resetCentre()
		  {
		      map.setCenter({lat : 41.3669942,
			    lng : -85.0588575 });
		    map.setZoom(7);
		  }
		  var modalMap=null;
		  var geocoder=null;
		  var customStyled = 
		  [
		    {
		      featureType: "landscape",
		      elementType: "labels",
		      stylers: [
			{ visibility: "off" }
		      ]
		    },
		    {
		      featureType: "poi",
		      elementType: "labels",
		      stylers: [
			{ visibility: "off" }
		      ]
		    },
		    {
		      featureType: "water",
		      elementType: "labels",
		      stylers: [
			{ visibility: "off" }
		      ]
		    },
		    {
		      featureType: "transit",
		      elementType: "labels",
		      stylers: [
			{ visibility: "off" }
		      ]
		    }
		  ]
		function initMap() {
		  
		    var uluru = {lat: -25.363, lng: 131.044};
		    var uluru2 = {lat: -27.363, lng: 138.044};
		    stepDisplay = new google.maps.InfoWindow;
		    map = new google.maps.Map(document.getElementById('map'), {
		      zoom: 7,
		      center: {lat : 41.3669942,
			  lng : -85.0588575 }
		    });
		      var icons = {
		      Selected: {
			name: 'Comp',
			icon: './blueBox.png'
		      },
		    };
		    google.maps.event.addListener(map, 'zoom_changed',testSpider);
		    CompImage = {
		      url: 'blueBox.png',
		      size: new google.maps.Size(32, 32),
		      origin: new google.maps.Point(0, 0),
		      anchor: new google.maps.Point(3, 29),
		      labelOrigin: new google.maps.Point(16, 13)
		    };
		    
		    
		    var legend = document.getElementById('legend');
		    if(legend)
		    {
		      console.log("legend found");
		      /*var newI=document.createElement("i");
		      newI.classList.add("glyphicon");
		      newI.classList.add("glyphicon-arrow-up");
		      newI.innerHTML="North";
		      legend.appendChild(newI);*/
		      for (var key in icons) {
			var type = icons[key];
			var name = type.name;
			var icon = type.icon;
			var div = document.createElement('div');
			div.innerHTML = '<img src="' + icon + '"> ' + name;
			legend.appendChild(div);
		      }
		      
		      console.log("clearing controls");
		      map.controls[google.maps.ControlPosition.RIGHT_BOTTOM].clear();
		      console.log("controls cleared, adding legend");
		      map.controls[google.maps.ControlPosition.RIGHT_BOTTOM].push(legend);
		      console.log("legend added");
		    }
		    else
		    {
		      console.log("legend not found");
		    }
		    map.set('styles',customStyled);
		    google.maps.event.addListenerOnce(map, "tilesloaded", getMarkers);
// 		    getMarkers();
		  }
		  var stepDisplay=null;
		   function attachInstructionText(stepDisplay, marker, image, map,clickLoc) {
        google.maps.event.addListener(marker, 'mouseover', function() {
          // Open an info window when the marker is clicked on, containing the text
          // of the step.
          stepDisplay.setContent(image);
          stepDisplay.open(map, marker);
        });
        google.maps.event.addListener(marker, "mouseout", function() {
          // Open an info window when the marker is clicked on, containing the text
          // of the step.
          stepDisplay.close();
        });
        
      }
		</script>
  <main class="center">
  <section>  
    <h2>Map </h2>
    <div class="mapDiv">
    	<div id="map"></div>
      <div id="legend"><h3>Legend</h3></div>
    </div>
  </section>
  </main>
  
    <script>
  function initMapsAndCharts()
  {
    initMap();  
  }
      
    </script>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCnKSHVf9qTZFMXAm_cPbReiDLf2NykqkU&callback=initMapsAndCharts"></script>
<?php require_once("newFooter.php"); ?>