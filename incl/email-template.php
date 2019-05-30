<?php //inputi, ki so obvezni jim daj class "required" ?>
<form action="index.php#order-now" method="post" enctype="multipart/form-data" role="form" class="ajax-form">
	<div class="row">
	<div class="col-md-12">
		<input type="hidden" name="packet" id="packet" value="" />
		<dl id="sample" class="dropdown">
		<dt><a><span>Choose A LogoMatic Logo Package</span></a></dt>
		<dd>
			<ul>
				<li class="simple"><a>Simple - 69$</a></li>
				<li class="best"><a>Best - 149$</a></li>
				<li class="pro"><a>PRO - 229$</a></li>
			</ul>
		</dd>
		</dl>
	</div>
	</div><!-- /.row -->
	<div class="row">
		<div class="col-md-6"><input type="text" class="required" name="name" id="name" placeholder="FIRST NAME"></div>
		<div class="col-md-6"><input type="text" class="required" name="surname" id="surname" placeholder="LAST NAME"></div>
	</div><!-- /.row -->
	<div class="row">
		<div class="col-md-6"><input type="text" class="required" name="email" id="email" placeholder="EMAIL"></div>
		<div class="col-md-6"><input type="text" name="website" id="website" placeholder="WEBSITE"></div>
	</div><!-- /.row -->
	<div class="row">
		<div class="col-md-12"><textarea name="note" id="note" placeholder="NOTES"></textarea></div>
	</div><!-- /.row -->
	<div class="row">
		<div class="upload">
			<?php 
				if ($file_types_text == "") {
					if (empty($file_types) == TRUE) {
						$file_types_text_tmp = "All";
					}
					else {
						$file_types_text_tmp = "";
						foreach ($file_types as $key => $value) {
							if ($file_types_text_tmp == "") {
								$file_types_text_tmp = $key;
							}
							else {
								$file_types_text_tmp = $file_types_text_tmp . ", " . $key;
							}
						}
					}
				}
				else {
					$file_types_text_tmp = $file_types_text;
				};
			?>
			<div class="col-md-9 col-sm-9"><input type="text" id="path" placeholder="ATTACHMENT (MAX: <?php echo $max_file_size; ?>MB; FILE TYPES: <?php echo $file_types_text_tmp; ?>)" ></div>
			<div class="col-md-3 col-sm-3"><div class="add-photo-btn">BROWSE<input type="file" id="myfile" name="myfile" /></div></div>
		</div>
	</div><!-- /.row -->
	<div class="row submit-row">
		<div class="col-md-12 text-right"><span class="provide"><?php echo $submit_label; ?></span><button class="pull-right btn submit" type="submit">SUBMIT</button></div>
	</div><!-- /.row -->
</form>