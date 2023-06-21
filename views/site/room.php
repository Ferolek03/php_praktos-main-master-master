<h3><?= $message ?? ''; ?></h3>
	

	<form method="post">
	
		<div class="bloco">
		<?php
if (app()->auth::User()->id_role === 1):
    ?>
			<div class="podraz">
				<p>Диагноз</p> 
			</div>
			<div class="create">
			
		<button><a href="room_add">Cоздать</a></button>
<?php		
endif;
?>
		</div>
		<?php
if (app()->auth::User()->id_role === 1):
    ?>
		<div class="vidpodraz">
				<p>Симптомы</p> 
			</div>
			<div class="create2">
			
		<button><a href="vid_room_add">Создать</a></button>
<?php		
endif;
?>
		</div>
		</div>
		<div class="forma">
            <div class="bloc">
                <div class="block_room">
                    <?php

                    foreach ($rooms as $Room) {
                        echo '<tr>';
                        echo '<div class="inside_block">' . '<td>' . '<h5>Диагнозы</h5>' . '<b>' . 'Название диагноза - ' . $Room->NameRoom . '</b>' . '</td>' . '</div>';

                    }
                    ?>
                </div>
                <div class="block_room">
                    <?php

                    foreach ($users as $User) {
                        echo '<tr>';
                        echo '<div class="inside_block">' . '<td>' . '<h5>Пользователи</h5>' . '<b>' . 'пользователь - ' . $User->FirstName . ' ' . $User->LastName . ' ' . $User->MiddleName . '<br>' . 'диагноз - ' . $User->NameRoom . '<br>' . '</b>' . '</td>' . '</div>';
                    }
                    ?>

                </div>
            </div>

        </div>

</form>

	<style>
.bloco{
	display: flex;
    justify-content: center;
	align-items: center;
	text-align: center;	
	margin-top: -19px;
}
.bloc {
        display: flex;
        justify-content: space-around;
        margin-top: 100px;
        width: 1032px;
        height: 637px;
        background-color: #AD8B79;
    }
.forma {
        display: flex;
        justify-content: center;
    }

    .inside_block {
        justify-content: center;
        align-items: center;
        display: flex;
        flex-direction: column;
    }

    .block_room {
        display: flex;
        flex-direction: column;
        width: 200px;
    }
.podraz{
	width: 279px;
	height: 56px;
	background-color: #D9D9D9;
	margin-right: 20px;
	font-size: 20px;
    border-radius: 30px;
}
.vidpodraz{
	width: 279px;
	height: 56px;
	background-color: #D9D9D9;
	margin-right: 20px;
	font-size: 20px;
	margin-left: 40px;
    border-radius: 30px;
}

.create{
	width: 236px;
	height: 56px;

}

.bloc{
	margin-top: 100px;
	width: 1032px;
	height: 637px;
	background-color: #D9D9D9;
    border-radius: 30px;
}

button{
   background-color: grey;
   width: 200px;
   height: 35px;
   color: white;
   font-size: 25px;
   border-radius: 10px;
   margin-top: 10px;
}

button > a{
	text-decoration: none;
	color: white;
}

</style>
