<style>
.center{
	margin-top: 110px;
	display: flex;
	justify-content: center;
}

.blocks{
	background-color: #D9D9D9;
	width: 772px;
	height: 400px;
	display: flex;
	flex-direction: column;
	align-items: center;
    border-radius: 20px;
}

.block{
	background-color: #D9D9D9;
	width: 533px;
	height: 100px;	
	display: flex;
	align-items: center;
	justify-content: center;
	margin-top:30px;
}

.block > p {
	font-size: 24px;

}

button{
   width: 420px;
   height: 50px;
   color: red;
   font-size: 25px;
   border-radius: 10px;
}
input{
   padding: 10px;
   width: 400px;
   border: 0;
   color: grey;
   border-radius: 10px;
   font-size: 20px;
}

h2{
    font-size: 26px;
    text-align: center;
}

</style>

<h2>Авторизация</h2>
<h3><?= $message ?? ''; ?></h3>

<h3><?= app()->auth->user()->name ?? ''; ?></h3>
<?php
if (!app()->auth::check()):
   ?>
   <form method="post">
   <input name="csrf_token" type="hidden" value="<?= app()->auth::generateCSRF() ?>"/>
   <div class="center">
  	 <div class="blocks">
	   
		<div class="block">
			<input type="text" name="login"  placeholder="Логин" required>
		</div>
		<div class="block">
			<input type="password" name="password"  placeholder="Пароль" required>
		</div>
		<div class="block">
			<button>Войти</button>
	    </div>
	   </div>
   </form>
   </div>
<?php 
endif;

