
{{-- Zorgt ervoor dat je de 'main' verder bouwd main.blade.php --}}
@extends('main')

{{-- Veranderd de titel van courses met de blade-manier van laravel --}}
@section('title')
	Courses
@endsection

{{-- Zorgt ervoor dat er doorgebouwd word op de plaats van @yield van de main.blade.php --}}
@section('Main')
<section class="homepage">
	<div class="container">
		<div class="row">
			<div class="col s5 homepageContent">
				<h1>Welkom!</h1>
				<p>
					Lorem Ipsum is slechts een proeftekst uit het drukkerij- en zetterijwezen. Lorem Ipsum is de standaard proeftekst in deze bedrijfstak sinds de 16e eeuw, toen een onbekende drukker een zethaak met letters nam en ze door elkaar husselde om een font-catalogus te maken. Het heeft niet alleen vijf eeuwen overleefd maar is ook, vrijwel onveranderd, overgenomen in elektronische letterzetting. Het is in de jaren '60 populair geworden met de introductie van Letraset vellen met Lorem Ipsum passages en meer recentelijk door desktop publishing software zoals Aldus PageMaker die versies van Lorem Ipsum bevatten.
				</p>
				<a href="/courses">
					<button class="btn waves-effect waves-light default-btn homepagebutton">Naar Vakken!
							<i class="material-icons right">send</i>
					</button>
				</a>
			</div>
			<div class="col s4 push-s3">
				<img class="homepagePhoto" src="{{asset('photos/shares/me.png')}}">
			</div>
		</div>
	</div>
</section>

@endsection
