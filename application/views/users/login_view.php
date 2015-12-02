<?php if ( $this->session->userdata( 'logged_in' )): ?>
	<h2>Logout</h2>

	<?php echo form_open('home/logout'); ?>
		<div class="form-group">
			<?php
				$data = array(
					'name' => 'logout',
					'class' => 'btn btn-danger',
					'type'  => 'submit',
					'value' => 'Logout'
					);

			 echo form_submit( $data ); ?>
		</div>
	<?php echo form_close(); ?>

<?php else : ?>	

<h2>Login Form</h2>
<div class="form-group">
	<?php 
		if ( $this->session->flashdata('errors') ) {
			
			echo $this->session->flashdata('errors' );
		}
	
	 ?>
	 <?php 
	 	if( $this->session->flashdata( 'Login_faild' ) ){
	 		echo $this->session->flashdata( 'Login_faild' );
	 	}
	  ?>
</div>

<?php 
	$attr = array(
		'class' => 'form-horizontal',
		'name'  => 'login_form'
		);
 ?>
<?php echo form_open('home/login', $attr ); ?>
<div class="form-group">
	<?php 
		echo form_label( 'Username' );
		$data = array(
			'name' => 'username',
			'class' => 'form-control',
			'placeholder' => 'Username',
			'type'   => 'text'

			);
		echo form_input( $data );
	 ?>
</div>
<div class="form-group">
	<?php 
		echo form_label( 'Password' );
		$data = array(
			'name' => 'password',
			'class' => 'form-control',
			'placeholder' => 'Password',
			'type'   => 'password'

			);
		echo form_password( $data );
	 ?>
</div>

<div class="form-group">
	<?php 
		echo form_label( 'Confirm Password' );
		$data = array(
			'name' => 'con_password',
			'class' => 'form-control',
			'placeholder' => 'Confirm Password',
			'type'   => 'password'

			);
		echo form_password( $data );
	 ?>
</div>
<div class="form-group">
	<?php 
		$data = array(
			'name' => 'log_submit',
			'class' => 'btn btn-primary',
			'value' => 'Login',
			'type'   => 'submit'

			);
		echo form_submit( $data );
	 ?>
</div>
<?php echo form_close(); ?>
<?php endif ?>