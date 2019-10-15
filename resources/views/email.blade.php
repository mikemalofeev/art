<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<!-- If you delete this meta tag, Half Life 3 will never be released. -->
<meta name="viewport" content="width=device-width" />

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>ZURBemails</title>
	
<link rel="stylesheet" type="text/css" href="/css/email.css" />

</head>
 
<body bgcolor="#FFFFFF">

<!-- HEADER -->
<table class="head-wrap" bgcolor="#999999">
	<tr>
		<td></td>
		<td class="header container" >
				
				<div class="content">
				<table bgcolor="#999999">
					<tr>
						{{--<td><img src="http://placehold.it/200x50/" /></td>--}}
                        <td align="left"><h6 class="collapse">Полиграф</h6></td>

                        {{--<td align="right"><h6 class="collapse">Basic</h6></td>--}}
					</tr>
				</table>
				</div>
				
		</td>
		<td></td>
	</tr>
</table><!-- /HEADER -->


<!-- BODY -->
<table class="body-wrap">
	<tr>
		<td></td>
		<td class="container" bgcolor="#FFFFFF">

			<div class="content">
			<table>
				<tr>
					<td>
						<h3>Спасибо, что сделали у нас заказ!</h3>
                        <p>После обработки заказа с Вами свяжется наш менеджер.</p>

                        <p class="lead">Детали заказа:</p>
                        <ul class="" style="list-style-type: none;">
                            <li>✓ заказ: {{ $order }}</li>
                            <li>✓ цена: {{ $price }} Руб.</li>
                            <li>✓ имя: {{ $name }}</li>
                            <li>✓ телефон: {{ $phone }}</li>
                            <li>✓ email: {{ $email }}</li>
                            <li>✓ адрес: {{ $address }}</li>
                            <li>✓ комментарии: {{ $comments }}</li>
                        </ul>

                        <!-- Callout Panel -->
						<p class="callout">
                            Для начала выполнения заказа необходимо произвести оплату. <a href="/payment">Оплатить &raquo;</a>
						</p><!-- /Callout Panel -->

						<!-- social & contact -->
						<table class="social" width="100%">
							<tr>
								<td>
									
									<!-- column 1 -->
									<table align="left" class="column">
										<tr>
											<td>				
												
												<h5 class="">Связаться с нами:</h5>
												<p class="">
                                                    <a href="#" class="soc-btn fb">Вконтакте</a>
                                                    {{--<a href="#" class="soc-btn tw">Twitter</a> --}}
                                                    {{--<a href="#" class="soc-btn gp">Google+</a>--}}
                                                </p>
						
												
											</td>
										</tr>
									</table><!-- /column 1 -->	
									
									<!-- column 2 -->
									<table align="left" class="column">
										<tr>
											<td>				
																			
												<h5 class="">Контакты:</h5>
												<p>Телефон: <strong>+ 7 (978) 006-89-56</strong><br/>
                Email: <strong><a href="emailto:artprestige2012@ya.ru">artprestige2012@ya.ru</a></strong></p>
                
											</td>
										</tr>
									</table><!-- /column 2 -->
									
									<span class="clear"></span>	
									
								</td>
							</tr>
						</table><!-- /social & contact -->
						
					</td>
				</tr>
			</table>
			</div><!-- /content -->
									
		</td>
		<td></td>
	</tr>
</table><!-- /BODY -->

<!-- FOOTER -->
{{--<table class="footer-wrap">--}}
	{{--<tr>--}}
		{{--<td></td>--}}
		{{--<td class="container">--}}
			{{----}}
				{{--<!-- content -->--}}
				{{--<div class="content">--}}
				{{--<table>--}}
				{{--<tr>--}}
					{{--<td align="center">--}}
						{{--<p>--}}
							{{--<a href="#">Terms</a> |--}}
							{{--<a href="#">Privacy</a> |--}}
							{{--<a href="#"><unsubscribe>Unsubscribe</unsubscribe></a>--}}
						{{--</p>--}}
					{{--</td>--}}
				{{--</tr>--}}
			{{--</table>--}}
				{{--</div><!-- /content -->--}}
				{{----}}
		{{--</td>--}}
		{{--<td></td>--}}
	{{--</tr>--}}
{{--</table>--}}
<!-- /FOOTER -->

</body>
</html>
