@if ($marca === 'quadrifoglio')
<div class="container">
	<div class="content-link-partners">
		<ul class="list-unstyled text-center">
			<li class="cert-2 quadri">
				<a href="https://ic.fsc.org/es" target="_blank"><img src="{{ asset('images/partners2.png') }}"></a>
			</li>
			<li class="cert-5">
				<a href="http://www.pannelloecologico.com/" target="_blank"><img src="{{ asset('images/partners5.png') }}"></a>
			</li>
		</ul>
	</div>
</div>
@elseif($marca === 'aresline')
<div class="container">
	<div class="content-link-partners">
		<ul class="list-unstyled text-center aresline">
			<li class="cert-2 quadri">
				<a href="http://www.aresline.com/en_US/pagine/5/certified-quality" target="_blank"><img src="{{ asset('images/partners1.png') }}"></a>
			</li>
			<li class="cert-5">
				<a href="http://www.aresline.com/en_US/pagine/5/certified-quality" target="_blank"><img src="{{ asset('images/partners3.png') }}"></a>
			</li>
			<li class="cert-5">
				<a href="http://www.aresline.com/en_US/pagine/5/certified-quality" target="_blank"><img src="{{ asset('images/partners4.png') }}"></a>
			</li>
			<li class="cert-5">
				<a href="http://www.aresline.com/en_US/pagine/5/certified-quality" target="_blank"><img src="{{ asset('images/partners6.png') }}"></a>
			</li>
		</ul>
	</div>
</div>
@endif