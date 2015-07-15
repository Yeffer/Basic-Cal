<!DOCTYPE html>
<html>
  <head>
        <meta charset="UTF-8">
        <title>Basic Calculadora</title>
        <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css"> 
        <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap-theme.min.css"> 
    </head>
    <body>

   <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
            	<h2><i>Calculadora</i></h2>
							<form action="" method="post">								
									 <div class="form-group">
						          <label class="col-sm-2 control-label">Valor 1:</label>
						          <div class="col-sm-10">
						              <input class="form-control" type="text"  name="n1">
						          </div>
						      </div>
						      <div class="form-group">
						          <label class="col-sm-2 control-label">Valor 2:</label>
						          <div class="col-sm-10">
						              <input class="form-control" type="text"  name="n2">
						          </div>
						      </div>
						      <div class="form-group">                                                        
							      <label name="operador"  type="text" class="col-sm-2 control-label">Operador:</label>
							        <div class="col-md-6">                                                                                                                                                                                                                                                                
							            <select name="operador" class="form-control">
							                	<option value=''></option>
																<option value='+'>Adición</option>
																<option value='-'>Diferecia</option>
																<option value='*'>Multiplicación</option>
																<option value='/'>División</option>
												        <option value='%'>Modulo</option>
												        <option value='sen'>Sen</option>
												        <option value='cos'>Cos</option>
												        <option value='tan'>Tan</option>
												        <option value='n1^n2'>N1^N2</option>
												        <option value='sqrt'>Raiz Cuadrada</option>
												        <option value='X^2'>X^2</option>                       
							            </select>  
							        </div>
							    </div>
									<div class="form-group">						        
						          <div class="col-sm-10">
						              <input class="btn btn-default" type='submit' value="Calcular">              
						          </div>
						      </div>								
							</form>
		        </div>
        </div>
    </div>
  	<div class="span2 well">
      <legend>Resultado</legend>
        <div>
          <div> 
				<?php
				function operadores($n1,$n2,$operador){
					
					switch ($operador){
						case "+": 
								$resultado = $n1+$n2;				
							break;
						case "-":
								$resultado = $n1-$n2;
							break;
						case "*": 
								$resultado = $n1*$n2;
							break;
						case "/": if ($n2==0){
											echo '<mce:script type="text/javascript"><
														 alert("No se admite division entre 0"); 
														// --></mce:script>';
										} 
										else{
											$resultado = $n1 / $n2;break;
										} 
						case '%': 
								$resultado = $n1 % $n2;
							break;
						case 'sen': 
								$resultado = sin($n1*2*3.1416/360);
							break;
						case 'cos': 
								$resultado = cos($n1*2*3.1416/360);
							break;
						case 'tan': 
								$resultado = tan($n1*2*3.1416/360);
							break;
						case 'n1^n2': 
								$resultado = pow($n1,$n2);
							break;
						case 'sqrt': 
								$resultado = pow($n1,0.5);
							break;
						case 'X^2': 
								$resultado = pow($n1,2);
							break;
						default:echo"no existe operador";
					}
					return $resultado;
				}
					$n1 = $_POST["n1"];
					$n2 = $_POST["n2"];
					$operador = $_POST["operador"];
						echo "<ol>".operadores($n1,$n2,$operador). "</ol>";
						             
				?>        
    
            </div>
          </div>
        </div>
  </body>
</html>
