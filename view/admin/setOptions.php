<?php
/*
 * Created on 11 May 2009
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */
?>


<div id="map" style="width:<?php echo $width; ?>px;height:<?php echo $height; ?>px;margin:0.5em auto 0px;padding:0px;"></div>
	
	<table class="optiontable form-table" style="margin-top:0"><tbody>
		<TR >
			<TD >
				<?php _e('GeoCoordinate', $this->textdomain_name); ?>
			</TD>
			<TD >
				<form method="post" action="<?php echo attribute_escape($form_action_url); ?>" class="media-upload-form type-form validate" id="<?php echo $type; ?>-form">
				<P><?php _e('Latitude', $this->textdomain_name); ?> <INPUT TYPE=TEXT NAME="lat1" SIZE=20 >
				<?php _e('Longitude', $this->textdomain_name); ?> <INPUT TYPE=TEXT NAME="lon1" SIZE=20 ></P>
				<P><?php _e('Perimeter', $this->textdomain_name); ?> <INPUT TYPE=TEXT NAME="perimeter1" VALUE="50" SIZE=20 >
				<?php _e('Limit', $this->textdomain_name); ?> <INPUT TYPE=TEXT NAME="limit1" SIZE=20 ></P>
				<input type="submit" class="button button-primary" name="insertonlybutton" value="<?php echo attribute_escape(__('Insert into Post')); ?>" /><br />
				</form>
			</TD>
		</TR>
		<TR >
			<TD >
				<?php _e('Bounding Box', $this->textdomain_name); ?>
			</TD>
			<TD >
				<form method="post" action="<?php echo attribute_escape($form_action_url); ?>" class="media-upload-form type-form validate" id="<?php echo $type; ?>-form">
				<P><?php _e('BBOX', $this->textdomain_name); ?> <INPUT TYPE=TEXT NAME="bbox2" VALUE="10,51,12,53" SIZE=20 ></P>
				<P><?php _e('Limit', $this->textdomain_name); ?> <INPUT TYPE=TEXT NAME="limit2" VALUE="20" SIZE=20 ></P>
				<input type="submit" class="button button-primary" name="insertonlybutton" value="<?php echo attribute_escape(__('Insert into Post')); ?>" /><br />
				</form>
			</TD>
		</TR>
		<TR >
			<TD >
				<?php _e('Zip or City', $this->textdomain_name); ?>
			</TD>
			<TD >
			<form method="post" action="<?php echo attribute_escape($form_action_url); ?>" class="media-upload-form type-form validate" id="<?php echo $type; ?>-form">
				<P><?php _e('Zip', $this->textdomain_name); ?> <INPUT TYPE=TEXT NAME="zip3" VALUE="02" SIZE=20 ></P>
				<P><?php _e('Country', $this->textdomain_name); ?> <INPUT TYPE=TEXT NAME="country3" VALUE="IT" SIZE=20 ></P>
				<P><?php _e('Limit', $this->textdomain_name); ?> <INPUT TYPE=TEXT NAME="limit3" VALUE="20" SIZE=20 ></P>
				<input type="submit" class="button button-primary" name="insertonlybutton" value="<?php echo attribute_escape(__('Insert into Post')); ?>" /><br />
				</form>
			</TD>
		</TR>
		<TR >
			<TD >
				<?php _e('Username', $this->textdomain_name); ?>
			</TD>
			<TD >
			<form method="post" action="<?php echo attribute_escape($form_action_url); ?>" class="media-upload-form type-form validate" id="<?php echo $type; ?>-form">
				<P><?php _e('Username', $this->textdomain_name); ?> <INPUT TYPE=TEXT NAME="username4" VALUE="GPSies" SIZE=20 ></P>
				<P><?php _e('Country', $this->textdomain_name); ?> <INPUT TYPE=TEXT NAME="country4" VALUE="IT" SIZE=20 ></P>
				<P><?php _e('Limit', $this->textdomain_name); ?> <INPUT TYPE=TEXT NAME="limit4" VALUE="20" SIZE=20 ></P>
				<input type="submit" class="button button-primary" name="insertonlybutton" value="<?php echo attribute_escape(__('Insert into Post')); ?>" /><br />
				</form>
			</TD>
		</TR>
		<TR >
			<TD >
				<?php _e('Parameter FiledId', $this->textdomain_name); ?>
			</TD>
			<TD >
			<form method="post" action="<?php echo attribute_escape($form_action_url); ?>" class="media-upload-form type-form validate" id="<?php echo $type; ?>-form">
				<P><?php _e('FileId', $this->textdomain_name); ?> <INPUT TYPE=TEXT NAME="limit5" VALUE="haublpggdenoekmb" SIZE=20 ></P>
				<input type="submit" class="button button-primary" name="insertonlybutton" value="<?php echo attribute_escape(__('Insert into Post')); ?>" /><br />
				</form>
			</TD>
		</TR>
		<TR >
			<TD >
				<?php _e('Country Code and Text or Username', $this->textdomain_name); ?>
			</TD>
			<TD >
			<form method="post" action="<?php echo attribute_escape($form_action_url); ?>" class="media-upload-form type-form validate" id="<?php echo $type; ?>-form">
				<P><?php _e('Search Text', $this->textdomain_name); ?><INPUT TYPE=TEXT NAME="searchtext6" SIZE=20 ></P>
				<P><?php _e('Country', $this->textdomain_name); ?> <INPUT TYPE=TEXT NAME="country6" VALUE="IT" SIZE=20 ></P>
				<P><?php _e('Username', $this->textdomain_name); ?> <INPUT TYPE=TEXT NAME="username6" VALUE="GPSies" SIZE=20 ></P>
				<P><?php _e('Limit', $this->textdomain_name); ?> <INPUT TYPE=TEXT NAME="limit6" VALUE="20" SIZE=20 ></P>
				<input type="submit" class="button button-primary" name="insertonlybutton" value="<?php echo attribute_escape(__('Insert into Post')); ?>" /><br />
				</form>
			</TD>
		</TR>
		<TR >
			<TD >
				<?php _e('Traverse all Country in a Track', $this->textdomain_name); ?>
			</TD>
			<TD >
			<form method="post" action="<?php echo attribute_escape($form_action_url); ?>" class="media-upload-form type-form validate" id="<?php echo $type; ?>-form">
				<P><?php _e('Country', $this->textdomain_name); ?> <INPUT TYPE=TEXT NAME="country7" VALUE="IT" SIZE=20 ></P>
				<P><?php _e('Limit', $this->textdomain_name); ?> <INPUT TYPE=TEXT NAME="limit7" VALUE="20" SIZE=20 ></P>
				<input type="submit" class="button button-primary" name="insertonlybutton" value="<?php echo attribute_escape(__('Insert into Post')); ?>" /><br />
				</form>
			</TD>
		</TR>
	</tbody></table>
	
</form>