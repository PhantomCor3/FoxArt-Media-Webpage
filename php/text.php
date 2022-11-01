<?php
$full_name = $_SERVER['PHP_SELF'];$name_array = explode('/',$full_name);$count = count($name_array);$page_name = $name_array[$count-1];
if($page_name=='index.php'){$namepage="Home";}
elseif ($page_name=='about.php') {$namepage="About";}
elseif ($page_name=='services.php') {$namepage="Services";}
elseif ($page_name=='reviews.php') {$namepage="Reviews";}
elseif ($page_name=='projects.php') {$namepage="Projects";}
elseif ($page_name=='thank-you.php') {$namepage="Thank You";}
elseif ($page_name=='404.php') {$namepage="Not Found";}
elseif ($page_name=='contact.php') {$namepage="Contact Us";}
//Info
	$Company="Cafe Jinotegano Las Praderas";
	$Domain='Cafejinotegano.foxartmedia.com';//No dejar pleca al final del dominio
	$Address='Rotonda Centro America, Managua';

	$PhoneName="Telefono";
	$Phone='(505) 8825-8081';
	$PhoneConvert = str_replace(str_split('(-)/:*?"<>|\t\n\r\O\f\i\c\e'), '', $Phone);
	$PhoneRef = "tel:".str_replace(str_split(' '), '', $PhoneConvert);

	$SEOConvert= str_replace(str_split(' '), '-', $PhoneConvert);
	$SEOPhone='+505'.$SEOConvert;

	$Mail="industrias.laspraderas@gmail.com";$MailRef="mailto:".$Mail;
	$Services="Venta de cafe y Productos Derivados";
	$Estimates="Cotizaciones o Adquisiciones al Por Mayor";
	$Payment="Efectivo, Cheques, Tarjetas de Credito o Debito y Transferencias";
	$Experience="";
	$Schedule="Lunes a Viernes: 8:00am - 5:00pm";	
	$Cover="";

	$Facebook="https://www.facebook.com/CafeLaspraderas";
	$GoogleMap='<iframe class="map-size" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3900.97757028144!2d-86.25741189617352!3d12.113687148497766!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8f73fe200da0f8fb%3A0x18379fa307c5ebe8!2sCentroamerica%20Nte.%2C%20Managua!5e0!3m2!1ses!2sni!4v1665121161072!5m2!1ses!2sni" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>';
	$Instagram="https://www.instagram.com/cafe_las_praderas/"; 


//Phrases
	$Description="Cafe Jinotegano Las Praderas gracias al clima, tecnicas de cultivo y posicion geografica, obtenemos una selecta y magnifica mezcla de cafe.";	
 	$Phrase = array(
		"Nuestra reputacion ha sido construida por nuestro producto de calidad.",
		"Cultivo Organico y excelentes resultados.",
		"Orgullo en lo que hacemos y en nuestro equipo de cultivo.",
		"Promoviendo el cafe organico para cuidar de nuestra salud.",
	);
	
//Home  etc.
	$Home = array(		 
		"En Cafe Jinotegano las Praderas, Muchos de nuestros clientes Vienen a nosotros por nuestros productos naturales 100% organicos asi como tambien por nuestra experiencia en cuanto a cafe respecta.",
		"En Cafe Jinotegano las Praderas, Muchos de nuestros clientes Vienen a nosotros por nuestros productos naturales 100% organicos asi como tambien por nuestra experiencia en cuanto a cafe respecta.",
		"Pueden sentirse aliviados, sabiendo que encontraron la mejor solucion para las mañanas en sus casas. En Cafe Jinotegano Las Praderas, no nos excedemos en nuestro en cuanto al precio, Ofrecemos diferentes tipos de cafe de calidad que te daran esa energia que buscas para salir de tu casa con energias siempre y en las mejores condiciones.",	
		"por varios años, nos hemos dedicado en dar lo mejor de lo mejor en todo lo que hacemos y como lo hacemos en cuanto a nuestros cultivos y cosechas de cafe para brindarle a todos nuestros queridos clientes lo mejor de lo mejor. Desde nuestra Fundacion en Jinotega, Cafe Las Praderas ha logrado mantener siempre una sonrisa en el rostro de nuestros clientes, y podemos estar seguros de que usted no sera la excepcion.",	
		);
	$About = array(
		"El excelente Cafe que ofrecemos, es el resultado de un balance perfecto entre sabor, aroma, y acidez. Dificil de encontrar en algun otro lugar.",
		"Nuestros horarios comienzan de Lunes a Viernes, de 8:00 AM hasta las 5:00 PM; tambien extendemos nuestra excelencia en un rango de mas de 10KM alrededor de la Rotonda Centro America entre Super Mercados y tiendas de conveniencia. Que esperas para contactarnos? Somos la mejor Compañia Cafetalera para ti.",
		);
//Services
	$SN[1]="Granos de cafe";
	$SD[1]="El cultivo de nuestros granos de cafe de alta calidad siempre nos brindan una experiencia unica.";
	$SN[2]="Cafe Molido";
	$SD[2]="Nos hemos adentrado en las diferentes opciones para satisfacer a nuestros clientes, de esta forma brindadoles opciones para todos los gustos.";
	$SN[3]="Delivery";
	$SD[3]="Con servicio de envio hasta la puerta de su hogar en compras de cafe en linea, nos satisface saber que siempre nos elige al momento de realizar sus compras de su dosis diaria de energia.";
	$SN[4]="Cafe Premium";
	$SD[4]="Hemos decidido cultivar granos de la mas alta calidad para nuestros clientes que desean probar una experiencia inolvidable en sus mañanas con sabores distinguidos que solo nuestro cafe puede ofrecerles.";
	


//Excerpt
	if (strlen($Description) > 10){$ExDescription=substr($Description, 0,152).'...';};
	if (strlen($About[0]) > 10){$ExAbout=substr($About[0], 0,145).'...';};
	if (strlen($Home[0]) > 10){$ExHome=substr($Home[0], 0,87).'...';};

	if (strlen($SD[1]) > 10){$ExSD[1]=substr($SD[1], 0,100).'...';};
	if (strlen($SD[2]) > 10){$ExSD[2]=substr($SD[2], 0,96).'...';};
	if (strlen($SD[3]) > 10){$ExSD[3]=substr($SD[3], 0,82).'...';};
	//if (strlen($SD[5]) > 10){$ExSD[4]=substr($SD[4], 0,108).'...';};

?>
