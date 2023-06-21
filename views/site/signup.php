
<h2>Регистрация нового администратора</h2>

<h3><?= $message ?? ''; ?></h3>
<div class="center">
<form method="post">
<input name="csrf_token" type="hidden" value="<?= app()->auth::generateCSRF() ?>"/>
		<div class="blocks">
			<div class="block">
         <input type="text" name="FirstName"required placeholder="Фамилия">
			</div>
			<div class="block">
         <input type="text" name="LastName" required placeholder="Имя">
			</div>
			<div class="block">
         <input type="text"name="MiddleName" required placeholder="Отчество">
			</div>
			<div class="block">
         <input type="date"name="Birthday" required placeholder="Дата рождения">
			</div>

			<div class="block">
         <input type="text"name="login" required placeholder="Логин">
			</div>
         <div class="block">
         <input type="password"name="password" required placeholder="Пароль">
			</div>
         
		<div class="block">
			<select name="id_role" id="id_role">
                            <option value="1">Администратор</option>
							<option value="0">Администратор поменьше</option>
            </select>
		</div>

		<div class="block">
				<button>Регистрация</button>
			</div>
		</div>
</form>
	</div>
   <style>
   .center{
	margin-top: 50px;
	display: flex;
	justify-content: center;
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
.blocks{
	background-color: #D9D9D9;
	width: 772px;
	height: 739px;
	display: flex;
	flex-direction: column;
	align-items: center;
    margin: 0;
    border-radius: 30px;
}

.block{
	background-color: #D9D9D9;
	width: 450px;
	height: 70px;	
	display: flex;
	align-items: center;
	justify-content: center;
	margin-top: 20px;
    border-radius: 20px;

}

.block > p {
	font-size: 24px;
}

h2{
    font-size: 26px;
    text-align: center;
}
</style>
