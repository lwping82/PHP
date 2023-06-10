	<?php 
	$rootPath = $_SERVER['DOCUMENT_ROOT'];
	?>
	<div>
        <nav class="navbar navbar-expand-lg bg-body-tertiary" style="background-color: white;">
          <div class="container-fluid">
            <!--a class="navbar-brand" href="#">Navbar</a-->
            <button class="navbar-toggler" type="button" style="margin-right:0;padding-right:0;" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-justify" viewBox="0 0 16 16">
                	<path fill-rule="evenodd" d="M2 12.5a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5zm0-3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5zm0-3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5zm0-3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5z"/>
                </svg>               
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Menu
                  </a>
                  <ul class="dropdown-menu">
                    <li><button type="button" id="creamCake" class="dropdown-item">Cream Cakes</button></li>
                    <li><button type="button" id="cheeseCake" class="dropdown-item">Cheese Cakes</button></li>
                    <li><button type="button" id="chocCake" class="dropdown-item">Chocolate Cakes</button></li>
                    <li><button type="button" id="artisanCake" class="dropdown-item">Artisan Cakes</button></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><button type="button" id="brownies" class="dropdown-item">Brownies</button></li>
                    <li><button type="button" id="cupcakes" class="dropdown-item">Cup Cakes</button></li>
                    <li><button type="button" id="desserts" class="dropdown-item">Desserts</button></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><button type="button" id="bread" class="dropdown-item">Bread</button></li>
                  </ul>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="promo.php">Promotions</a>
                </li>
                <form id="menuOptForm" action="menu.php" method="post">
                	<input type="hidden" id="opt" name="opt" value="creamCake">
                </form>  
              </ul>
              <form class="d-flex needs-validation" role="search" action="search.php" method="post">
                <input class="form-control" type="text" name="productSearch" placeholder="Search" required>&nbsp;
                <button class="btn btn-outline-success" type="submit">Search</button>
              </form>
            </div>
          </div>
        </nav>	
	</div>

	<script>
	$(document).ready(function () {
		const menuOptionList = [
			{targetId: '#creamCake', targetUrl:'./menu.php', formdata: {"opt":"CREAM"}},
			{targetId: '#cheeseCake', targetUrl:'./menu.php', formdata: {"opt":"CHEESE"}},
			{targetId: '#chocCake', targetUrl:'./menu.php', formdata: {"opt":"CHOC"}},
			{targetId: '#artisanCake', targetUrl:'./menu.php', formdata: {"opt":"ARTISAN"}},
			{targetId: '#brownies', targetUrl:'./menu.php', formdata: {"opt":"BROWNIES"}},
			{targetId: '#cupcakes', targetUrl:'./menu.php', formdata: {"opt":"CUP"}},
			{targetId: '#desserts', targetUrl:'./menu.php', formdata: {"opt":"DESSERT"}},
			{targetId: '#bread', targetUrl:'./menu.php', formdata: {"opt":"BREAD"}}
		];
		
		menuOptionList.forEach((element) => {
			$(element.targetId).click(function() {
				$('#opt').val(element.formdata.opt);
				$('#menuOptForm').submit();
			});
		});
		
		/*function submitMenu(targetUrl, formdata) {
			alert(targetUrl);
			alert(formdata);
			
			$.ajax({
				url: targetUrl,
				data: formdata,
				type: 'POST',
				success: function(data) {
					
				}
			});
		}*/
	});
	</script>
