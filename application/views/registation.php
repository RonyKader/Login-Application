<div class="container">
	<div class="row">
	<?php if ( $this->session->userdata( 'logged_in' ) ): ?>
		
	
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<div class="registation-area">
			<?php if ( $this->session->flashdata('errors') ): ?>
				<?php echo $this->session->flashdata('errors'); ?>
			<?php endif ?>

			<?php if ( $this->session->flashdata('Reg') ): ?>
				<?php echo $this->session->flashdata('Reg'); ?>
			<?php endif ?>

			<?php 
				if( $this->session->userdata( 'logged_in' ) ) : ?>
				<h4><?php	echo $this->session->userdata( 'logged_in' );  ?></h4>
			<?php endif; ?>
			<h2>Registation Form</h2>
			<?php 
				$attr = array(
					'class' => 'form-horizontal',
					'name'  => 'registation_form'
					);
			 ?>
			<?php echo form_open('home/register', $attr); ?>
		
			<div class="form-group">
				<?php
				echo form_label('Username' );				
				$data = array(
					'name' => 'username',
					'type' => 'text',
					'class'=> 'form-control',
					'placeholder' => 'Username' 
					);	
				 echo form_input( $data );
				 ?>
			</div>
		
			<div class="form-group">
				<?php
				echo form_label('E-mail address' );				
				$data = array(
					'name' => 'email',
					'type' => 'email',
					'class'=> 'form-control',
					'placeholder' => 'E-mail address' 
					);	
				 echo form_input( $data );
				 ?>
			</div>

			<div class="form-group">
				<?php
				echo form_label('Password' );
				$data = array(
					'name' => 'password',
					'type' => 'password',
					'class'=> 'form-control',
					'placeholder' => 'password' 
					);	
				 echo form_password( $data );
				 ?>
			</div>

			<div class="form-group">
				<?php
				echo form_label('Confirm Password' );
				$data = array(
					'name' => 'con_password',
					'type' => 'password',
					'class'=> 'form-control',
					'placeholder' => 'Confirm Password' 
					);	
				 echo form_password( $data );
				 ?>
			</div>

			<div class="form-group">
				<?php
				echo form_label('I have a Car' );				  
				$data = array(
					'name' => 'transport',
					'type' => 'checkbox',
					'value' => 'car',
					'checked' => 'checked'					
					
					);	
				 echo " ".form_checkbox( $data );
				 ?>

				 <?php
				 echo form_label('I have a Bike' );				  
				 $data = array(
				 	'name' => 'transport',
				 	'type' => 'checkbox',
				 	'value' => 'bike',
				 	'checked' => ''					
				 	
				 	);	
				  echo " ".form_checkbox( $data );
				  ?>
			</div>

			<div class="form-group">
				<?php
				echo form_label('Write your message' );
				$data = array(
					'name' => 'message',
					'type' => 'textarea',
					'class'=> 'form-control',
					'placeholder' => 'Write your message' 
					);	
				 echo form_textarea( $data );
				 ?>
			</div>
			<div class="form-group">
				<?php
				echo form_label('Are you Ready Yes ' );
				$data = array(
					'name' => 'chose',
					'type' => 'radio',
					'value' => 2,
					'class'=> '',
					);	
				 echo " ".form_radio( $data );
				 ?>

				 <?php
				 echo form_label('No' );
				 $data = array(
				 	'name' => 'chose',
				 	'type' => 'radio',
				 	'value' => 1,
				 	'class'=> '',
				 	);	
				  echo " ". form_radio( $data );
				  ?>
			</div>
		<div class="form-group">
			<?php
			$data = array(
				'name' => 'register',
				'type' => 'submit',
				'class'=> 'btn btn-primary',
				'value' => 'Registation' 
				);	
			 echo form_submit( $data );
			 ?>
		</div>
			<?php echo form_close(); ?>
			</div>
		</div>
	</div>
</div>
<?php else: ?>
	<h2 class="text-center">If you want registation page then please at first login</h2>
<?php endif ?>