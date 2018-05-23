		<div class="content">
				<div class="items">
					<div class="item">
						<form action="Mathematic" method="POST">
						<?php 
							if(isset($testsList)){
										
								foreach ($testsList as $tests) {
									if (isset($tests['question'])) {
										$id=$tests['id'];
							?>
							<span><?=$tests['question'];?></span><br>
						<?php 
										}
										if (isset($tests['answer'])) {
									 	
									 	?>
						<input type="checkbox" name="<?=$id; ?>[]"value="<?=$tests['answer'];?>"> <?=$tests['answer'];?><br>
									 	<?php
										}
									}
								}

							?>
							<input type="submit" name="sub" value="Ответить">
						</form>
						<?php if(isset($counter)){
							echo 'Ви правильно відповіли на  '.$counter.' питань(ня)';
						} ?>
					</div>
				</div>
			</div>
