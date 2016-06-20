<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" href="formoid_files/formoid1/formoid-solid-blue.css" type="text/css" />
        <script src="Javascript/jquery-3.0.0.js"></script>
        <script src="Javascript/Hide.js"></script>
        
    </head>
    <body style="background-color: #34495E">
        <div style="width: 15%; margin:0 auto">
            <form class="formoid-solid-blue" style="background-color:#FFFFFF;font-size:14px;font-family:Roboto,Arial,Helvetica,sans-serif;color:#34495E;max-width:480px;min-width:150px" action="Validations/validRegisto.php" method="post"><div class="title"><h2>Registo</h2></div>
	<div class="element-input"><label class="title">Nome/empresa:<span class="required">*</span></label><div class="item-cont"><input class="large" type="text" name="Nome/empresa" required="required" placeholder="Input Text"/><span class="icon-place"></span></div></div>
	 <div class="element-input"><label class="title">email:<span class="required">*</span></label><div class="item-cont"><input class="large" type="text" name="email" required="required" placeholder="Input Text"/><span class="icon-place"></span></div></div>
	<div class="element-input"><label class="title">Contacto:<span class="required">*</span></label><div class="item-cont"><input class="large" type="text" name="Contacto" required="required" placeholder="Input Text"/><span class="icon-place"></span></div></div>
	<div class="element-input"><label class="title">Rua:<span class="required">*</span></label><div class="item-cont"><input class="large" type="text" name="Rua" required="required" placeholder="Input Text"/><span class="icon-place"></span></div></div>
	<div class="element-input"><label class="title">Número da Porta:<span class="required">*</span></label><div class="item-cont"><input class="large" type="text" name="Numero_Porta" required="required" placeholder="Input Text"/><span class="icon-place"></span></div></div>
	<div class="element-input"><label class="title">Localidade:<span class="required">*</span></label><div class="item-cont"><input class="large" type="text" name="Localidade" required="required" placeholder="Input Text"/><span class="icon-place"></span></div></div>
	<div class="element-input"><label class="title">Codigo-Postal<span class="required">*</span></label><div class="item-cont"><input class="large" type="text" name="Codigo-Postal" required="required" placeholder="Input Text"/><span class="icon-place"></span></div></div>
	<div class="element-input"><label class="title">Username<span class="required">*</span></label><div class="item-cont"><input class="large" type="text" name="username" required="required" placeholder="Input Text"/><span class="icon-place"></span></div></div>
        <div class="element-input"><label class="title">Password<span class="required">*</span></label><div class="item-cont"><input class="large" type="password" name="password" required="required" placeholder="Input Text"/><span class="icon-place"></span></div></div>
	<div class="element-select"><label class="title">Perfil<span class="required">*</span></label><div class="item-cont"><div class="large"><span>
                        <select name="Perfil" required="required">
               
		<option value="empregador">Empregador</option>
                <option value="prestador" id="Prestador">Prestador</option></select><i></i><span class="icon-place"></span></span></div></div></div>
        <div id="fto" style="display: none"><label class="title">Foto:<span class="required">*</span></label><div class="item-cont"><input class="large" type="file" value="none" name="foto" required="required" placeholder="Input Text"/><span class="icon-place"></span></div></div>
        
        <div class="submit"><button type="submit" value="Enviar">Enviar</button></div></form></div>
        <?php
        // put your code here
        ?>
        
    </body>
</html>
