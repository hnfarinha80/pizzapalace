<!-- Gestão Contactos -->
<h3>Gestão de Contactos</h3>
<?php 
include 'connections/conn.php';
	$q = mysqli_fetch_array(mysqli_query($conn,"SELECT con_telefone,con_telemovel,con_email,con_morada,con_cp,con_localidade,con_mapa,con_facebook,con_twitter,con_tiktok,con_youtube FROM contactos WHERE con_id = 1"));
include 'connections/deconn.php';
?>
<form method="post">
<div class="row mb1">
	<div class="col col-3 text_center vtext_middle">
		<label>Telefone: </label>
		<input type="text" name="con_telefone" placeholder="Telefone" 
		value="<?php echo $q["con_telefone"];?>">
	</div>
	<div class="col col-3 text_center vtext_middle">
		<label>Telemóvel: </label>
		<input type="text" name="con_telemovel" placeholder="Telemóvel" 
		value="<?php echo $q["con_telemovel"];?>">
	</div>
	<div class="col col-3 text_center vtext_middle">
		<label>Email: </label>
		<input type="email" name="con_email" placeholder="Email" 
		value="<?php echo $q["con_email"];?>">
	</div>
</div>
<div class="row mb1">
	<div class="col col-3 text_center vtext_middle">
		<label>Morada: </label>
		<input type="text" name="con_morada" placeholder="Morada" 
		value="<?php echo $q["con_morada"];?>">
	</div>
	<div class="col col-3 text_center vtext_middle">
		<label>Código Postal: </label>
		<input type="text" name="con_cp" placeholder="Código Postal" 
		value="<?php echo $q["con_cp"];?>">
	</div>
	<div class="col col-3 text_center vtext_middle">
		<label>Localidade: </label>
		<input type="text" name="con_localidade" placeholder="Localidade" 
		value="<?php echo $q["con_localidade"];?>">
	</div>
</div>
<div class="row mb1">
	<div class="col col-3 text_center vtext_middle">
		<label>Mapa: </label><br>
		<textarea name="con_mapa" placeholder="Inserir Mapa">
			<?php echo $q["con_mapa"];?>
		</textarea>
	</div>
</div>
<div class="row mb1">
	<div class="col col-3 text_center vtext_middle">
		<label>Url Facebook: </label>
		<input type="url" name="con_facebook" placeholder="Facebook" 
		value="<?php echo $q["con_facebook"];?>">
	</div>
	<div class="col col-3 text_center vtext_middle">
		<label>Url Twitter: </label>
		<input type="url" name="con_twitter" placeholder="Twitter" 
		value="<?php echo $q["con_twitter"];?>">
	</div>
	<div class="col col-3 text_center vtext_middle">
		<label>Url TikTok: </label>
		<input type="url" name="con_tiktok" placeholder="TikTok" 
		value="<?php echo $q["con_tiktok"];?>">
	</div>
	<div class="col col-3 text_center vtext_middle">
		<label>Url Youtube: </label>
		<input type="url" name="con_youtube" placeholder="Youtube" 
		value="<?php echo $q["con_youtube"];?>">
	</div>
</div>
<div class="row mb1">
	<div class="col col-3 text_center vtext_middle">
		<button type="submit" class="bt bt_primary" name="gerir_contactos">Atualizar Contactos</button>
	</div>
</div>
</form>
<?php 
if(isset($_POST['gerir_contactos'])){
	gerir_contactos($_POST["con_telefone"],$_POST["con_telemovel"],$_POST["con_email"],$_POST["con_morada"],$_POST["con_cp"],$_POST["con_localidade"],$_POST["con_mapa"],$_POST["con_facebook"],$_POST["con_twitter"],$_POST["con_tiktok"],$_POST["con_youtube"]);
}
?>
