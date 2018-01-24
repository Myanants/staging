<div class="x_panel">
	<div class="x_title">
		<h2>Service Request Detail</h2>
		<div class="clearfix"></div>
	</div>

	<h4><label>Customer Informations</label></h4>
	<div class="x_content">
		<table class="table-st">
			<tbody>
				<tr>
					<td class="left">Customer ID</td>
					<td class="right">
						<?php echo $data['Customer']['customer_id']; ?>
					</td>
				</tr>

				<tr>
					<td class="left">Name</td>
					<td class="right"><?php echo $data['Customer']['name'] ; ?></td>
				</tr>

				<tr>
					<td class="left"> Email </td>
					<td class="right">
						<?php if (!empty($data['Customer']['email'])) { ?>
							<?php echo $data['Customer']['email'] ; ?>
						<?php } ?>						
					</td>
				</tr>

				<tr>
					<td class="left"> Phone Number </td>
					<td class="right">
						<?php echo $data['Customer']['phone_number'] ; ?>
					</td>
				</tr>

				<tr>
					<td class="left">Address</td>
					<td class="right"> 
						<?php echo nl2br($data['Customer']['address']) ; ?>						
					</td>
				</tr>
				
			</tbody>
		</table>
		
	</div>

	<h4><label>Service Request Informations</label></h4>
	<div class="x_content">
		<table class="table-st">
			<tbody>
				
				<tr>
					<td class="left">Service Name</td>
					<td class="right"> 
						<?php echo $data['Service']['name']; ?>						
					</td>
				</tr>

				<tr>
					<td class="left">Service Rrequest ID</td>
					<td class="right"> 
						<?php echo $data['ServiceRequest']['service_request_id']; ?>						
					</td>
				</tr>

				<tr>
					<td class="left">Status</td>
					<td class="right">
						<?php
							if ($data['ServiceRequest']['status'] == 1) {
								echo "Canceled from Customer";
							} elseif ($data['ServiceRequest']['status'] == 2) {
								echo "Canceled from Service Provider";
							} elseif ($data['ServiceRequest']['status'] == 3) {
								echo "Not Confirmed Yet";
							} elseif ($data['ServiceRequest']['status'] == 4) {
								echo "";
							}
						?>
					</td>
				</tr>

				<tr>
					<td class="left">Request Time</td>
					<td class="right">
						<?php echo $data['ServiceRequest']['request_datetime']; ?>	
					</td>
				</tr>

			</tbody>
		</table>

		<div class="ln_solid"></div>
		<div class="form-group">
			<div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-4">
				<?php echo $this->Html->link('Back', 'javascript:history.back()', array('class' => 'btn btn-default btn-sm')); ?>
				<?php //echo $this->Html->link('Edit', array('controller' => 'admin_companys', 'action' => 'edit', h($data['Customer']['id'])), array('class' =>'btn btn-orange btn-sm')); ?>
			</div>
		</div>
	</div>

</div>

<style type="text/css" media="screen">
	table.table-st {
		width:100%;
	}
	table.table-st tr {
		border-bottom: 1px solid #D9DEE4;
	}
	table.table-st tbody tr td.left{
		width:93%;
		padding:10px;
	}
	table.table-st tbody tr td.right{
		width:71%;
		text-align: left;
		padding:10px;
	}

</style>