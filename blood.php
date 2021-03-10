<!-- A Modal -->
			<div id="bloodyA" class="modal fade" role="dialog" tabindex="-1">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h4 class="modal-title align-center"></h4><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button></div>
						<div class="modal-body">
							<div class="table-responsive">
								<table class="table table-striped table-sm table-borderless table-hover">
									<thead class="thead-dark">
										<tr>
											<th scope="col">Name</th>
											<th scope="col">Email</th>
											<th scope="col">Phone</th>
											<th scope="col">Location</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<?php
											$query = "SELECT * FROM `donors` WHERE `bloodtype`='A' ";
											$resultx = $db_handle->runQuery($query);

											if (!empty($resultx)){
												foreach ($resultx as $donor):
											?>
												<td><?=htmlspecialchars($donor['name'], ENT_QUOTES, 'UTF-8')?></td>
												<td><p><?=htmlspecialchars($donor['email'], ENT_QUOTES, 'UTF-8')?></p></td>
												<td><p><?=htmlspecialchars($donor['phone'], ENT_QUOTES, 'UTF-8')?></p></td>
												<td><p><?=htmlspecialchars($donor['location'], ENT_QUOTES, 'UTF-8')?></p></td>

										</tr>
										<?php
												endforeach;
											}else{
												echo '<p>No donors available!</p>';
											}
										?>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>

<!-- B Modal -->
			<div id="bloodyB" class="modal fade" role="dialog" tabindex="-1">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h4 class="modal-title"></h4><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button></div>
						<div class="modal-body">
							<div class="table-responsive">
								<table class="table table-striped table-sm table-borderless table-hover">
									<thead class="thead-dark">
										<tr>
											<th scope="col">Name</th>
											<th scope="col">Email</th>
											<th scope="col">Phone</th>
											<th scope="col">Location</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<?php
											$query = "SELECT * FROM `donors` WHERE `bloodtype`='B' ";
											$resultx = $db_handle->runQuery($query);

											if (!empty($resultx)){
												foreach ($resultx as $donor):
											?>
												<td><?=htmlspecialchars($donor['name'], ENT_QUOTES, 'UTF-8')?></td>
												<td><p><?=htmlspecialchars($donor['email'], ENT_QUOTES, 'UTF-8')?></p></td>
												<td><p><?=htmlspecialchars($donor['phone'], ENT_QUOTES, 'UTF-8')?></p></td>
												<td><p><?=htmlspecialchars($donor['location'], ENT_QUOTES, 'UTF-8')?></p></td>

										</tr>
										<?php
												endforeach;
											}else{
												echo '<p>No donors available!</p>';
											}
										?>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>

<!-- AB Modal -->
			<div id="bloodyAB" class="modal fade" role="dialog" tabindex="-1">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h4 class="modal-title"></h4><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button></div>
						<div class="modal-body">
							<div class="table-responsive">
								<table class="table table-striped table-sm table-borderless table-hover">
									<thead class="thead-dark">
										<tr>
											<th scope="col">Name</th>
											<th scope="col">Email</th>
											<th scope="col">Phone</th>
											<th scope="col">Location</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<?php
											$query = "SELECT * FROM `donors` WHERE `bloodtype`='AB' ";
											$resultx = $db_handle->runQuery($query);

											if (!empty($resultx)){
												foreach ($resultx as $donor):
											?>
												<td><?=htmlspecialchars($donor['name'], ENT_QUOTES, 'UTF-8')?></td>
												<td><p><?=htmlspecialchars($donor['email'], ENT_QUOTES, 'UTF-8')?></p></td>
												<td><p><?=htmlspecialchars($donor['phone'], ENT_QUOTES, 'UTF-8')?></p></td>
												<td><p><?=htmlspecialchars($donor['location'], ENT_QUOTES, 'UTF-8')?></p></td>

										</tr>
										<?php
												endforeach;
											}else{
												echo '<p>No donors available!</p>';
											}
										?>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>

<!-- O Modal -->
			<div id="bloodyO" class="modal fade" role="dialog" tabindex="-1">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h4 class="modal-title"></h4><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button></div>
						<div class="modal-body">
							<div class="table-responsive">
								<table class="table table-striped table-sm table-borderless table-hover">
									<thead class="thead-dark">
										<tr>
											<th scope="col">Name</th>
											<th scope="col">Email</th>
											<th scope="col">Phone</th>
											<th scope="col">Location</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<?php
											$query = "SELECT * FROM `donors` WHERE `bloodtype`='O' ";
											$resultx = $db_handle->runQuery($query);

											if (!empty($resultx)){
												foreach ($resultx as $donor):
											?>
												<td><?=htmlspecialchars($donor['name'], ENT_QUOTES, 'UTF-8')?></td>
												<td><p><?=htmlspecialchars($donor['email'], ENT_QUOTES, 'UTF-8')?></p></td>
												<td><p><?=htmlspecialchars($donor['phone'], ENT_QUOTES, 'UTF-8')?></p></td>
												<td><p><?=htmlspecialchars($donor['location'], ENT_QUOTES, 'UTF-8')?></p></td>

										</tr>
										<?php
												endforeach;
											}else{
												echo '<p>No donors available!</p>';
											}
										?>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>

<!-- A- Modal -->
			<div id="bloodyAm" class="modal fade" role="dialog" tabindex="-1">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h4 class="modal-title"></h4><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button></div>
						<div class="modal-body">
							<div class="table-responsive">
								<table class="table table-striped table-sm table-borderless table-hover">
									<thead class="thead-dark">
										<tr>
											<th scope="col">Name</th>
											<th scope="col">Email</th>
											<th scope="col">Phone</th>
											<th scope="col">Location</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<?php
											$query = "SELECT * FROM `donors` WHERE `bloodtype`='A-' ";
											$resultx = $db_handle->runQuery($query);

											if (!empty($resultx)){
												foreach ($resultx as $donor):
											?>
												<td><?=htmlspecialchars($donor['name'], ENT_QUOTES, 'UTF-8')?></td>
												<td><p><?=htmlspecialchars($donor['email'], ENT_QUOTES, 'UTF-8')?></p></td>
												<td><p><?=htmlspecialchars($donor['phone'], ENT_QUOTES, 'UTF-8')?></p></td>
												<td><p><?=htmlspecialchars($donor['location'], ENT_QUOTES, 'UTF-8')?></p></td>

										</tr>
										<?php
												endforeach;
											}else{
												echo '<p>No donors available!</p>';
											}
										?>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>

<!-- B- Modal -->
			<div id="bloodyBm" class="modal fade" role="dialog" tabindex="-1">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h4 class="modal-title"></h4><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button></div>
						<div class="modal-body">
							<div class="table-responsive">
								<table class="table table-striped table-sm table-borderless table-hover">
									<thead class="thead-dark">
										<tr>
											<th scope="col">Name</th>
											<th scope="col">Email</th>
											<th scope="col">Phone</th>
											<th scope="col">Location</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<?php
											$query = "SELECT * FROM `donors` WHERE `bloodtype`='B-' ";
											$resultx = $db_handle->runQuery($query);

											if (!empty($resultx)){
												foreach ($resultx as $donor):
											?>
												<td><?=htmlspecialchars($donor['name'], ENT_QUOTES, 'UTF-8')?></td>
												<td><p><?=htmlspecialchars($donor['email'], ENT_QUOTES, 'UTF-8')?></p></td>
												<td><p><?=htmlspecialchars($donor['phone'], ENT_QUOTES, 'UTF-8')?></p></td>
												<td><p><?=htmlspecialchars($donor['location'], ENT_QUOTES, 'UTF-8')?></p></td>

										</tr>
										<?php
												endforeach;
											}else{
												echo '<p>No donors available!</p>';
											}
										?>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>

<!-- AB- Modal -->
			<div id="bloodyABm" class="modal fade" role="dialog" tabindex="-1">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h4 class="modal-title"></h4><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button></div>
						<div class="modal-body">
							<div class="table-responsive">
								<table class="table table-striped table-sm table-borderless table-hover">
									<thead class="thead-dark">
										<tr>
											<th scope="col">Name</th>
											<th scope="col">Email</th>
											<th scope="col">Phone</th>
											<th scope="col">Location</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<?php
											$query = "SELECT * FROM `donors` WHERE `bloodtype`='AB-' ";
											$resultx = $db_handle->runQuery($query);

											if (!empty($resultx)){
												foreach ($resultx as $donor):
											?>
												<td><?=htmlspecialchars($donor['name'], ENT_QUOTES, 'UTF-8')?></td>
												<td><p><?=htmlspecialchars($donor['email'], ENT_QUOTES, 'UTF-8')?></p></td>
												<td><p><?=htmlspecialchars($donor['phone'], ENT_QUOTES, 'UTF-8')?></p></td>
												<td><p><?=htmlspecialchars($donor['location'], ENT_QUOTES, 'UTF-8')?></p></td>

										</tr>
										<?php
												endforeach;
											}else{
												echo '<p>No donors available!</p>';
											}
										?>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>

<!-- O- Modal -->
			<div id="bloodyOm" class="modal fade" role="dialog" tabindex="-1">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h4 class="modal-title"></h4><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button></div>
						<div class="modal-body">
							<div class="table-responsive">
								<table class="table table-striped table-sm table-borderless table-hover">
									<thead class="thead-dark">
										<tr>
											<th scope="col">Name</th>
											<th scope="col">Email</th>
											<th scope="col">Phone</th>
											<th scope="col">Location</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<?php
											$query = "SELECT * FROM `donors` WHERE `bloodtype`='O-' ";
											$resultx = $db_handle->runQuery($query);

											if (!empty($resultx)){
												foreach ($resultx as $donor):
											?>
												<td><?=htmlspecialchars($donor['name'], ENT_QUOTES, 'UTF-8')?></td>
												<td><p><?=htmlspecialchars($donor['email'], ENT_QUOTES, 'UTF-8')?></p></td>
												<td><p><?=htmlspecialchars($donor['phone'], ENT_QUOTES, 'UTF-8')?></p></td>
												<td><p><?=htmlspecialchars($donor['location'], ENT_QUOTES, 'UTF-8')?></p></td>

										</tr>
										<?php
												endforeach;
											}else{
												echo '<p>No donors available!</p>';
											}
										?>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
