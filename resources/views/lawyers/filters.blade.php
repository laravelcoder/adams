	<div class="row admin-table-filters">
									<div class="col-lg-9">

										<form action="./" class="form-inline filters-form">
											<span>
												<label class="grey" for="with-selected">With Selected:</label>
												<select class="form-control with-selected" name="with-selected" id="with-selected">
													<option value="">-</option>
													<option value="approve">Approve</option>
													<option value="publish">Publish</option>
													<option value="delete">Delete</option>
												</select>
											</span>
											<span>
												<label class="grey" for="orderby">Sort By:</label>
												<select class="form-control orderby" name="orderby" id="orderby">
													<option value="date" selected>Date</option>
													<option value="author">Author</option>
													<option value="title">Title</option>
													<option value="status">Status</option>
												</select>
											</span>

											<span>
												<label class="grey" for="showcount">Show:</label>
												<select class="form-control showcount" name="showcount" id="showcount">
													<option value="10" selected>10</option>
													<option value="20">20</option>
													<option value="30">30</option>
													<option value="50">50</option>
													<option value="100">100</option>
												</select>
											</span>
										</form>

									</div>
									<!-- .col-* -->
									<div class="col-lg-3 text-lg-right">
										<div class="widget widget_search">

											<form method="get" class="searchform form-inline" action="./">
												<div class="form-group">
													<label class="screen-reader-text" for="widget-search">Search for:</label>
													<input id="widget-search" type="text" value="" name="search" class="form-control" placeholder="Search Keyword">
												</div>
												<button type="submit" class="theme_button">Search</button>
											</form>
										</div>

									</div>
									<!-- .col-* -->
								</div>
								<!-- .row -->
