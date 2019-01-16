<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){
if(!empty($_POST["broj1"]) and !empty($_POST["broj2"])){
if(isset($_POST["operacija"]) and $_POST["operacija"]!=="Izaberi"){
if($_POST["operacija"]=="+"){
$rezultat=$_POST["broj1"] + $_POST["broj2"];
echo '<div class="alert alert-success" role="alert">
  Result is : '.$rezultat.'
</div>';

}elseif($_POST["operacija"]=="-"){
$rezultat=$_POST["broj1"] - $_POST["broj2"];
echo '<div class="alert alert-success" role="alert">
  Result is : '.$rezultat.'
</div>';
}elseif($_POST["operacija"]=="*"){
$rezultat=$_POST["broj1"] * $_POST["broj2"];
echo '<div class="alert alert-success" role="alert">
  Result is : '.$rezultat.'
</div>';

}elseif($_POST["operacija"]=="/"){
	$rezultat=$_POST["broj1"] / $_POST["broj2"];
echo '<div class="alert alert-success" role="alert">
  Result is : '.$rezultat.'
</div>';

}

}else{
	echo '<div class="alert alert-danger" role="alert">
  Please pick one operation (+,-,*,/)!
</div>';




}


}else{

echo '<div class="alert alert-danger" role="alert">
  Number 1 and Number 2 can"t be empty
</div>';



}

}

	?>