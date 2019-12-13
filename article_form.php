<section class="bgwhite p-t-66 p-b-60">
			<div class="container text-center">
				

					<div class="col-md-12 p-b-30 text-left">
						<form class="leave-comment" method="post" action="<?php echo base_url()?>home/form_validation">
							<h4 class="m-text26 p-b-36 p-t-15">
								Article Upload
							</h4>
							
							<div class="form-group">
								<input class="form-control" type="text" name="title" placeholder="Title of Article">
							</div>

							<div class="form-group">
								<input class="form-control" type="text" name="writer" placeholder="Article Writer">
							</div>
							<div class="form-group">
								<select class="form-control" id="sel1" name="department">
							        <option>Select Department</option>
							        <option>BED</option>
							        <option>SHS</option>
							        <option>HED</option>
						        </select>
					        </div>
					        <div class="form-group">
							<select class="form-control" name="category">
						        <option>Select Category</option>
						        <option>Features and News</option>
						        <option>Events and Activities</option>
						        <option>Updates and Announcement</option>
						        <option>Campus Life and Community</option>
					        </select>
					        </div>

							<div class="form-group">
								 <input type="file" class="form-control-file" placeholder="Image" name="image">
							</div>

							<textarea class="dis-block s-text7 size20 bo4 p-l-22 p-r-22 p-t-13 m-b-15" name="para1" placeholder="Paragraph 1"></textarea>
							<textarea class="dis-block s-text7 size20 bo4 p-l-22 p-r-22 p-t-13 m-b-15" name="para2" placeholder="Paragraph 2"></textarea>
							<textarea class="dis-block s-text7 size20 bo4 p-l-22 p-r-22 p-t-13 m-b-15" name="para3" placeholder="Paragraph 3"></textarea>

							<div class="w-size25">
								<!-- Button -->
								<input type="submit" name="insert" value="Submit" class="flex-c-m size2 bg1 bo-rad-23 hov1 m-text3 trans-0-4">
							</div>
						</form>
					</div>
				</div>
			</div>
		</section>