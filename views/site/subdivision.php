<h3><?= $message ?? ''; ?></h3>
	

	<div class="main">
		<div class="blocks">
		<?php
if (app()->auth::User()->id_role === 1):
    ?>
			<div class="podraz">
				<p>Добавление врача </p> 
			</div>
			<div class="create">
			
		<button><a href="subdivision_add">Создать</a></button>
<?php		
endif;
?>
			</div>
			<?php
if (app()->auth::User()->id_role === 1):
    ?>
			<div class="vidpodraz">
				<p>Специальность врача</p> 
			</div>
			<div class="create">
			
		<button><a href="vid_subdivision_add">Создать</a></button>
<?php		
endif;
?>
			</div>
		</div>
		<div class="all">


            <div class="bloc">
                <div class="block_room">
                    <?php

                    foreach ($subdivisions as $Subdivision) {
                        echo '<tr>';
                        echo '<div class="inside_block">' . '<td>' . '<h5>Специальность</h5>' . '<b>' . 'ФИО врача - ' . $Subdivision->NameSubdivision . '</b>' . '</td>' . '</div>';

                    }
                    ?>
                </div>

                <div class="block_room">
                    <?php

                    foreach ($users as $User) {
                        echo '<tr>';
                        echo '<div class="inside_block">' . '<td>' . '<h5>Пациент</h5>' . '<b>' . 'Пациент - ' . $User->FirstName . ' ' . $User->LastName . ' ' . $User->MiddleName . '<br>' . 'Врач - ' . $User->NameSubdivision . '<br>' . '</b>' . '</td>' . '</div>';
                    }
                    ?>

                </div>
            </div>
        </div>

    </div>

<style>
.blocks{
	display: flex;
	align-items: center;
	text-align: center;	
	margin-top: -19px;
    justify-content: center;

}
.all {
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

        .bloc {
            display: flex;
            justify-content: space-around;
            margin-top: 100px;
            width: 1032px;
            height: 637px;
            background-color: #AD8B79;
        }

        .create {
            width: 236px;
            height: 56px;
            padding-left: 20px;
        }

        .bloc {
            display: flex;
            justify-content: center;
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
   color: pink;
   font-size: 25px;
   border-radius: 10px;
   margin-top: 10px;
}

button > a{
	text-decoration: none;
	color: white;
}

</style>