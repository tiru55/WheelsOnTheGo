<div class="brand clearfix">
	<a href="dashboard.php" style="font-size: 25px;">Car Rental Portal | Admin Panel</a>  
		<span class="menu-btn"><i class="fa fa-bars"></i></span>
		<ul class="ts-profile-nav">
			<li style="float:left,position:relative">
				<a href="new-bookings.php">
					<i class="fa fa-bell" aria-hidden="true"></i>
					<div style="width:20px;height:20px;background-color:red;color:#fff;position:absolute;display:flex;align-items:center;justify-content:center;border-radius:20px;top:10px;right:8px">
					<?php
						$sql = "SELECT COUNT(*) as total FROM `tblbooking` WHERE Status=0";
						$query = $dbh->prepare($sql);
						$query->execute();
						$result = $query->fetch(PDO::FETCH_ASSOC);

						if ($result !== false) {
							echo $result['total'];
						} else {
							echo "Error fetching count.";
						}
					?>
					</div>
				</a>
			</li>
			<li class="ts-account">
				<a href="#"><img src="img/ts-avatar.jpg" class="ts-avatar hidden-side" alt=""> Account <i class="fa fa-angle-down hidden-side"></i></a>
				<ul>
					<li><a href="change-password.php">Change Password</a></li>
					<li><a href="logout.php">Logout</a></li>
				</ul>
			</li>
		</ul>
	</div>
