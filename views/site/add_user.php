
<h2>Добавление на прием</h2>

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
            <h4>Дата Приема</h4>
         <input type="date"name="Birthday" required placeholder="Дата рождения">
			</div>
			

			<div class="block">
                <?php
                echo('Предполагаемый диагноз:');
                echo '<select id="" name="NameRoom">';
                foreach ($rooms as $Room) {
                    echo "<option value=\"$Room->NameRoom\">"
                        . $Room->NameRoom.
                        "</option>";
                }
                echo '</select>';
                ?>
            </div>

            <div class="block">
                <?php
                echo('Выбор врача:');
                echo '<select id="" name="NameSubdivision">';
                foreach ($subdivisions as $Subdivision) {
                    echo "<option value=\"$Subdivision->NameSubdivision\">"
                        . $Subdivision->NameSubdivision.
                        "</option>";
                }
                echo '</select>';
                ?>
            </div>

            <div class="block">
                <?php
                echo('Выбор кабинета:');
                echo '<select id="" name="number">';
                foreach ($usernums as $Usernum) {
                    echo "<option value=\"$Usernum->number\">"
                        . $Usernum->number.
                        "</option>";
                }
                echo '</select>';
                ?>
            </div>


		<div class="block">
                    <button>Записать</button>
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

h2{
    display: flex;
    justify-content: center;
    font-size: 26px;
}
button{
   background-color: white;
   width: 420px;
   height: 50px;
   color: grey;
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
select {
        background-color: white;
        width: 420px;
        height: 40px;
        color: grey;
        font-size: 25px;
        border-radius: 10px;
		align-items: center;
		justify-content: center;
        
    }

.block > p {
	font-size: 24px;
}
</style>
