<header>
	<div id="logo">
		<div id="logo_text">
			<!-- class="logo_colour", allows you to change the colour of the text -->
			<h1><a href="index.php">Safe<span class="logo_colour">Food</span></a></h1>
		</div>
	</div>
	<nav>
		<div id="menu_container">
			<ul class="sf-menu" id="nav">
				<li><a href="index.php">Home</a>
				</li>
				<li><a href="#">資料檢索</a>
					<ul>
						<li><a href="#">檢驗項目<br>實驗室清單</a>
						</li>
						<li><a href="reproduct.php">更換油品後上架清冊</a>
						</li>
						<li><a href="industry.php">劣質油品品項</a>
						</li>
						<li><a href="company_product.php">下游業者之下架產品清單</a>
						</li>
					</ul>
				</li>
				<li><a href="gossip_display.php">爆料清單</a>
				</li>
				<li><a href="gossip.php">我要爆料</a>
				</li>
				<?php
				if(!isset($_SESSION['id'])){
					
					print"<li><a href='login.php'>登入</a></li>";
				}
				else{
					print"<li>";
					print "<a href='mem.php'>管理員版面</a>";
					print"</li>";
					print"<li><a href='logout.php'>登出</a></li>";
				}
				?>
			</ul>
		</div>
	</nav>
</header>