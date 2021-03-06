<div>
	<a class="hiddenanchor" id="signup"></a>
	<div class="login_wrapper">
		<div class="animate form login_form">
			<section class="login_content" >
				<?php echo $this->Form->create('AdminUser', array('label' => false)); ?>
					<h4 style="font-size:15px">MyanAnts</h4>
					<font color='red'><b><?php echo $this->Session->flash(); ?></b></font>
					<div>
						<?php if ($name) : ?>
							<?php echo $this->Form->input('name', array( 'class' => 'form-control', 'placeholder' => 'User name', 'autofocus' => true, 'autocomplete' => 'off','label' => false,'value'=> $name)); ?>
						<?php else : ?>
							<?php echo $this->Form->input('name', array( 'class' => 'form-control', 'placeholder' => 'User name', 'autofocus' => true, 'autocomplete' => 'off','label' => false)); ?>
						<?php endif; ?>

					</div>
					<div>
						<?php if ($password) : ?>
							<?php echo $this->Form->input('password', array( 'class' => 'form-control', 'placeholder' => 'password', 'autocomplete' => 'off','label' => false,'value' =>$password)); ?>
						<?php else: ?>
							<?php echo $this->Form->input('password', array( 'class' => 'form-control', 'placeholder' => 'password', 'autocomplete' => 'off','label' => false)); ?>
						<?php endif; ?>
					</div>
					<p class="remember_check">
						<?php echo $this->Form->checkbox('remember_me',array('checked'=> !empty($password)? true : false)); ?>
						<?php echo $this->Form->label('remember_me', 'save password'); ?>
					</p>
					<div>
						<?php echo $this->Form->button('Login', array('class' => 'btn btn-default submit')); ?>
					</div>
					<p class="current_limit">
						<?php echo $this->Html->link("Click here if you forgot your password", array('controller' => 'admin_users', 'action' => 'remind'),array( 'label' => false)); ?>
					</p>

					<div class="clearfix"></div>

					<div class="separator">
						<div class="clearfix"></div>
						<br />
						<div>
							<h1><i><img src="http://myanants.com/staging/img/logo/myanants-black.png" style="width: 50%;margin-top: -36%;margin-bottom: -32%;"></i></h1>
							<p>Copyright © MyanAnts All rights reserved. </p>
						</div>
					</div>
				<?php echo $this->Form->end() ?>
			</section>
		</div>
	</div>
</div>