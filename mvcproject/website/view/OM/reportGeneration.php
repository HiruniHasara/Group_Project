<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reports</title>
    <link rel="stylesheet" type="text/css" href="<?php echo URL; ?>public/css/OM/div3.css">
    <link rel="stylesheet" type="text/css" href="<?php echo URL; ?>public/css/OM/report2.css">
    <link rel="stylesheet" href="<?php echo URL; ?>public/css/Common/template.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" charset="utf-8"></script>
  </head>
  <body>
  <style>
	 		body {
       			background-color: white;
                background-image: url("<?php echo URL; ?>public/img/homeback.jpg");
	 		}
		</style>
    <input type="checkbox" id="check">
    <!--header area start-->
    <header>
      <label for="check">
        <i class="fas fa-bars" id="sidebar_btn"></i>
      </label>
      <div class="left_area">
        <h3>BrandLink <span>Overseas</span></h3>
      </div>
      <div class="right_area">
        <a href="../Login/log" class="logout_btn">Logout</a>
      </div>
    </header>
    <!--header area end-->
    <!--mobile navigation bar start-->
    <div class="mobile_nav">
      <div class="nav_bar">
        <i class="fa fa-bars nav_btn"></i>
      </div>
      <div class="mobile_nav_items">
        <a href="home"><i class="fas fa-home"></i><span>Home</span></a>
        <a href="orders"><i class="fab fa-shopify"></i><span>Approved Orders</span></a>
        <a href="stockMomali"><i class="fas fa-cubes"></i><span>Stock</span></a>
        <a href="sparePartMomali"><i class="fas fa-tools"></i><span>Spare Parts Stock</span></a>
        <a href="report"><i class="fas fa-tools"></i><span>Reports</span></a>
        <a href="settings"><i class="fas fa-sliders-h"></i><span>Settings</span></a>
      </div>
    </div>
    <!--mobile navigation bar end-->
    <!--sidebar start-->
    <div class="sidebar">
      <div class="profile_info">
      <img src=".././public/img/Profile pic.png" class="mobile_profile_image" width="100px" height="100px">
        <h4>Operational Manager</h4>
      </div>
        <a href="home"><i class="fas fa-home"></i><span>Home</span></a>
        <a href="orders"><i class="fab fa-shopify"></i><span>Approved Orders</span></a>
        <a href="stockMomali"><i class="fas fa-cubes"></i><span>Stock</span></a>
        <a href="sparePartMomali"><i class="fas fa-tools"></i><span>Spare Parts Stock</span></a>
        <a href="report"><i class="fas fa-tools"></i><span>Reports</span></a>
        <a href="settings"><i class="fas fa-sliders-h"></i><span>Settings</span></a>
    </div>
    <!--sidebar end-->

    <div class="content">  
        <div class="clearfix">
            <div class="dropdown1">
    					<button class="dropbtn1"><i class="fa fa-sort" aria-hidden="true"></i>	Stock Issue Report
      					</button>
    					<div class="dropdown1-content1">
      						<a href="#">Monthly</a>
      						<a href="#">Annualy </a>
     					</div>
			  </div> 
		

              <div class="dropdown2">
    					<button class="dropbtn2"><i class="fa fa-sort" aria-hidden="true"></i>	Spare Part Stock Issue Report
      					</button>
    					<div class="dropdown2-content2">
      						<a href="#">Monthly</a>
      						<a href="#">Annualy </a>
     					</div>
              </div> 
        </div>

        <div class="clearfix">
            <div class="date">
                <input type="date" id="date" name="date">
                <input type="button" value="Generate">
            </div>
           
            <div class="date1">
                <input type="date" id="date" name="date">
                <input type="button" value="Generate">
            </div>
            
        </div>

        <div class="clearfix">
            <div class="content1">
                <table id="table1">
     					<thead>
        					<tr>
								<th style="width:15%"> Part No </th>
								<th style="width:45%"> Name </th>
								<th style="width:20%"> Unit Price </th>
								<th style="width:20%"> Quantity </th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td> 1 </td>
									<td> faucet shower </td>
									<td> 500 </td>
									<td> 300 </td>
								</tr>
								<tr>
									<td> 2 </td>
									<td> basin tap </td>	
									<td> 300 </td>
									<td> 500 </td>
								</tr>
								<tr>
									<td> 3 </td>
									<td> shower head </td>	
									<td> 200 </td>
									<td> 100 </td>
								</tr>
								<tr>
									<td> 4 </td>
									<td> cubo </td>
									<td> 500 </td>
									<td> 300 </td>
								</tr>
								<tr>
									<td> 5 </td>
									<td> HBO </td>	
									<td> 1000 </td>
									<td> 200 </td>
								</tr>
								<tr>
									<td> 6 </td>
									<td> verdi-SE </td>	
									<td> 1500 </td>
									<td> 300 </td>
								</tr>
								<tr>
									<td> 7 </td>
									<td> flush plate </td>
									<td> 200 </td>
									<td> 100 </td>
								</tr>
								<tr>
									<td> 8 </td>
									<td> shower head </td>
									<td> 500 </td>
									<td> 100 </td>
								</tr>
								<tr>
									<td> 9 </td>
									<td> bathtub </td>
									<td> 6000 </td>
									<td> 100 </td>
								</tr>
								<tr>
									<td> 10 </td>
									<td> wall mounted tumbler </td>
									<td> 2000 </td>
									<td> 100 </td>
								</tr>
								<tr>
									<td> 11 </td>
									<td> soap basket </td>
									<td> 500 </td>
									<td> 100 </td>
								</tr>
								<tr>
									<td> 12 </td>
									<td> bath mixer </td>
									<td> 1700 </td>
									<td> 300 </td>
								</tr>
							<tr>
								<td> 13 </td>
								<td> single handle mixer </td>
								<td> 4000 </td>
								<td> 300 </td>
							</tr>
						</tbody>
					</table>
			</div>
		</div>
          
    <div class="footercontent">
		<?php require_once(realpath(dirname(__FILE__) . '/../Common/footer.php'));?>
    </div>
	</div>
    <script type="text/javascript">
    $(document).ready(function(){
      $('.nav_btn').click(function(){
        $('.mobile_nav_items').toggleClass('active');
      });
    });
    </script>

  </body>
</html>