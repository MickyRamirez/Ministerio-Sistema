<style type="text/css">
	#degradado{ 
		height:100px;
	    width:100px;
	    float: left;
	    margin:10px;
	    background-image: linear-gradient(bottom, rgb(0,145,255) -1%, rgb(125,210,255) 57%);
		background-image: -o-linear-gradient(bottom, rgb(0,145,255) -1%, rgb(125,210,255) 57%);
		background-image: -moz-linear-gradient(bottom, rgb(0,145,255) -1%, rgb(125,210,255) 57%);
		background-image: -webkit-linear-gradient(bottom, rgb(0,145,255) -1%, rgb(125,210,255) 57%);
		background-image: -ms-linear-gradient(bottom, rgb(0,145,255) -1%, rgb(125,210,255) 57%);
	};	
</style>
<html>
<style type="text/css"></style>
<table bgcolor="#DFDFDF" width="100%">	
		<td align="center" width="100%">
		<br/><br/>
			<table width="650">
				<tr>
					<td height="50px" bgcolor="#333333">
						<table>
							<tr>
								<td style="padding: 20px 15px 20px 30px; font-size:35px; text-align:justify" height="50px" bgcolor="#333333">
									<font color="#FFFFFF">
										Verifica tu dirección de correo electrónico
									</font>				
								</td>
							</tr>
						</table>													
					</td>					
				</tr>	
				<tr>
					<td height="50px" bgcolor="#333333">
						<table>
							<tr>
								<td bgcolor="#FFFFFF" style="padding: 20px 15px 0px 27px; font-family: Helvetica,Arial,sans-serif; font-size:20px; text-align:justify; font-weight:bold;">
									<font color="#000000">
										Sr. Usuario del Complejo Productivo Integral <?php echo $value2; ?>, copie el siguiente código para completar su inscripción en el area de contraseña y así poder ingresar al sistema: <br/><br/>
										<table align="center">
												<td align="center" height="30" valign="center" bgcolor="#ffe86c" style="
												background-color:#ffe86c;border:1px solid #e8b463;border-radius:3px; font-size: 20px;">
													<p style="padding: 10px 10px 5px 10px;">
														<?php echo $value; ?>
													</p>			 	
												</td>
										</table>
										<p style="padding: 20px 0px 20px 0px;">
											Gracias por registrarse. Saludos.
										</p>										
									</font>												
								</td>
							</tr>
						</table>									
					</td>
				</tr>	
				<tr>
					<td height="20px" bgcolor="#333333">											
					</td>
				</tr>				
			</table>
			<br/><br/>
		</td>			
		
</table>
</html>