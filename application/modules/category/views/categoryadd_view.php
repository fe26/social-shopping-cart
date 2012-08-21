
								<div id="confirm">
									<form id="formaddkategori" method="post" action="<?php if(isset($post)) echo $post?>">
										<div class="success" style="display:none;"> 
											<!--p>
												Data berhasil Disimpan
											</p-->
										</div>
									<input type="hidden" name="category_id" value="<?php if(isset($category_id)) echo $category_id ?>" />
										<fieldset>
											<label class="name">
												<span class="caption">Nama Kategori : </span>
												<input type="text" name="category_name" value="<?php if(isset($category_name)) echo $category_name ?>">
												<span class="formInfo"><a name="Field Nama Kategori" id="1" class="jTip" rev="Nama Kategori digunakan untuk identitas kategori produk"> &nbsp;</a></span>
												<span class="error" style="display: none;">*This is not a valid name.</span> <span class="empty" style="display: none;">*This field is required.</span>
											</label>
											<label class="deskripsi">
											<span class="caption">Deskripsi : </span>
												<textarea name="description"><?php if(isset($description)) echo $description ?></textarea>
												<span class="formInfo">
													<a name="Field Deskripsi" id="6" class="jTip" rev="Field ini digunakan untuk mendeskripsikan kategory produk anda"> &nbsp;</a>
												</span>
												<span class="error" style="display: none;">*The message is too short.</span> <span class="empty" style="display: none;">*This field is required.</span>
											</label>

											<div class="clear"></div>
											<div class="btns">   
											<a data-type="submit" class="button-2" href="#">Submit</a></div>
										</fieldset>
									</form>
								</div>
