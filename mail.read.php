
<?php 
// استخراج بيانات الاميل
$mail = get_mail($id);  

// تعديل البيانات الى تمت قرائته
$db->update('st_emails',['seen'=>'1'],['id'=>$id]); ?>
    
					<!-- Detached content -->
					<div class="container-detached">
						<div class="content-detached">

							<!-- Single mail -->
							<div class="panel panel-white">



								<!-- Mail details -->
								<div class="media stack-media-on-mobile mail-details-read no-border-top">
									

									<div class="media-body">
										<h2 class="media-heading"><?php echo $mail->subject; ?></h2>
										<div class="letter-icon-title text-semibold"><?php echo $mail->name; ?> <a href="#">&lt;<?php echo $mail->email; ?>&gt;</a>
										<br>
										<?php echo $mail->sent; ?>
										</div>
									</div>
								</div>
								<!-- /mail details -->


								<!-- Mail container -->
								<div class="mail-container-read">
                                    <?php echo $mail->message; ?>
								</div>
								<!-- /mail container -->

							</div>
							<!-- /single mail -->

						</div>
					</div>
					<!-- /detached content -->