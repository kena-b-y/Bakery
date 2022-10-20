<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Ideal Admin</title>
	<link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha256-eZrrJcwDc/3uDhsdt61sL2oOBY362qM3lon1gyExkL0=" crossorigin="anonymous" />
	<link rel="stylesheet" type="text/css" href="Admin.css">
</head>
<body>
	<input type="checkbox" name="">
	<div class="sidebar">
		<div class="sidebar-brand">
			<h2><span><img src="https://img.icons8.com/ios-filled/45/000000/bakery.png"/></span> <span>The Ideal Bakery</span></h2>
		</div>

		<div class="sidebar-menu">
			<ul>
				<li>
					<a href="" class="active"> <span class="las la-igloo"></span>
						<span>DashBoard</span></a>
				</li>
				<li>
					<a href="table.php"><span class="fas fa-birthday-cake"></i></span>
						<span>Menu</span></a>
				</li>
				<li>
					<a href="signup.php"><span class="las la-clipboard-list"></span>
						<span>Customers</span></a>
				</li>
				<li>
					<a href=""><span class="las la-shopping-bag"></span>
						<span>Orders</span></a>
				</li>
				<li>
					<a href=""><span class="las la-user-circle"></span>
						<span>Admin</span></a>
				</li>
			</ul>
			<form action="admin_login.html" method="POST">
			<button id="login" class="button" onclick="loginbutton()">Logout</button>
			</form>
</select>
</div>
</div>
		</div>
	</div>

	<div class="main-content">
		<header>
			<h2>
				<label for="">
					<span class="las la-bars"></span>
				</label>
				Dashboard
			</h2>
			<div class="search-wrapper">
				<span class="las la-search"></span>
				<input type="search" placeholder="Search here" />
			</div>
			<div class="user-wrapper">
				<img src="img2.jpg" width="30px" height="40px" alt="" >
				<div>
					<h4>Ideal Admin</h4>
					<small>Yuda Betty</small>
				</div>
			</div>
		</header>
		<main>
			
			<div class="dashboard-cards">

				<div class="card-single">
					<div>
						<h1>6</h1>
						<span>Customers</span>
					</div>
					<div>
						<span class="las la-users"></span>
					</div>
				</div>

				<div class="card-single">
					<div>
						<h1>9</h1>
						<span>Projects</span>
					</div>
					<div>
						<span class="las la-clipboard-list"></span>
					</div>
				</div>

				<div class="card-single">
					<div>
						<h1>24</h1>
						<span>Orders</span>
					</div>
					<div>
						<span class="las la-shopping-bag"></span>
					</div>
				</div>

				<div class="card-single">
					<div>

						<h1>$6k</h1>

						<span>Income</span>

					</div>

					<div>
						<span class="lab la-google-wallet"></span>
					</div>

				</div>

			</div>

			<div class="recent-grid">
				<div class="Projects">
					<div class="card">
						<div class="card-header">
							<h3>Recent projects</h3>
							<button> View all <span class="las la-arrow-right"></span></button>
						</div>
						<div class="card-body">
							<table width="100%">
								<thead>
									<tr>
										<td>Project Title</td>
									    <td>Department</td>
										<td>Status</td>
									</tr>
								</thead>
								<tbody>
									<tr>
									     <td>Storage</td>
								         <td>Storage room</td>
									     <td>
									     	<span class="Status purple"></span>
									     	Review
									     </td>										
									</tr>
									<tr>
										<td>Kneading</td>
										<td>Kneading room</td>
									     <td>
									     	<span class="Status pink"></span>
									     	in progress
									     </td>	
									</tr>
									<tr>
										<td>Fermentation</td>
										<td>Fermentation room</td>
									     <td>
									     	<span class="Status orange"></span>
									     	pending
									     </td>	
									</tr>
									<tr>
									     <td>Ovens</td>
								         <td>oven room</td>
									     <td>
									     	<span class="Status purple"></span>
									     	Review
									     </td>										
									</tr>
									<tr>
										<td>Coolers</td>
										<td>Cooling room for finished products</td>
									     <td>
									     	<span class="Status pink"></span>
									     	in progress
									     </td>	
									</tr>
									<tr>
										<td>Packages</td>
										<td>Packaging room</td>
									     <td>
									     	<span class="Status orange"></span>
									     	pending
									     </td>	
									</tr>

									<tr>
									     <td>Delivery</td>
								         <td>Delivery room for wholesale trade</td>
									     <td>
									     	<span class="Status purple"></span>
									     	Review
									     </td>										
									</tr>
									<tr>
										<td>Retail shops</td>
										<td>Shop for retail sales</td>
									     <td>
									     	<span class="Status pink"></span>
									     	in progress
									     </td>	
									</tr>
									<tr>
										<td>Personnel</td>
										<td>Area for personnel</td>
									     <td>
									     	<span class="Status orange"></span>
									     	pending
									     </td>	
									</tr>
									
								</tbody>
							</table>
							<div class="table-responsive">
								
							</div>
						</div>
					</div>
				</div>
				<div class="Customers">
					<div class="card">
						<div class="card-header">
							<h3>New customer</h3>
							<button> View all <span class="las la-arrow-right"></span></button>
						</div>
						<div class="card-body">
							<div class="customer">
								<div class="info">
								<img src="img2.jpg" width="40px" height="40px" alt="">
								<div>
									<h4>Betty Yuda</h4>
									<small>CEO expert</small>
								</div>
							    </div>
							    <div class="contact">
							    	<span class="las la-user-circle"></span>
							    	<span class="las la-comment"></span>
							    	<span class="las la-phone"></span>
							    </div>
							</div>

							<div class="customer">
								<div class="info">
								<img src="img2.jpg" width="40px" height="40px" alt="">
								<div>
									<h4>Betty Yuda</h4>
									<small>CEO expert</small>
								</div>
							    </div>
							    <div class="contact">
							    	<span class="las la-user-circle"></span>
							    	<span class="las la-comment"></span>
							    	<span class="las la-phone"></span>
							    </div>
							</div>

							<div class="customer">
								<div class="info">
								<img src="img2.jpg" width="40px" height="40px" alt="">
								<div>
									<h4>Betty Yuda</h4>
									<small>CEO expert</small>
								</div>
							    </div>
							    <div class="contact">
							    	<span class="las la-user-circle"></span>
							    	<span class="las la-comment"></span>
							    	<span class="las la-phone"></span>
							    </div>
							</div>

							<div class="customer">
								<div class="info">
								<img src="img2.jpg" width="40px" height="40px" alt="">
								<div>
									<h4>Betty Yuda</h4>
									<small>CEO expert</small>
								</div>
							    </div>
							    <div class="contact">
							    	<span class="las la-user-circle"></span>
							    	<span class="las la-comment"></span>
							    	<span class="las la-phone"></span>
							    </div>
							</div>

							<div class="customer">
								<div class="info">
								<img src="img2.jpg" width="40px" height="40px" alt="">
								<div>
									<h4>Betty Yuda</h4>
									<small>CEO expert</small>
								</div>
							    </div>
							    <div class="contact">
							    	<span class="las la-user-circle"></span>
							    	<span class="las la-comment"></span>
							    	<span class="las la-phone"></span>
							    </div>
							</div>

							<div class="customer">
								<div class="info">
								<img src="img2.jpg" width="40px" height="40px" alt="">
								<div>
									<h4>Betty Yuda</h4>
									<small>CEO expert</small>
								</div>
							    </div>
							    <div class="contact">
							    	<span class="las la-user-circle"></span>
							    	<span class="las la-comment"></span>
							    	<span class="las la-phone"></span>
							    </div>
							</div>


						</div>
					</div>
				</div>
			</div>

		</main>
	</div>


</body>
</html>