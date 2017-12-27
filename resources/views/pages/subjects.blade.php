@extends('pages.app')
@section('title','Дисципліни')
@section('content')
	<script>
		$(".spoiler-trigger").click(function() {
			$(this).parent().next().collapse('toggle');
		});
	</script>
	<div class="container" style="margin-top: 20px;">
		<div class="row right">
			<div class="col s12 m12">
				<span>Загальний розклад можна подивитись тут: <a class="waves-effect waves-light btn" href="http://rozklad.kpi.ua/Schedules/ScheduleGroupSelection.aspx" target="_blank">Розклад</a></span>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<!-- <div class="col s12 m12">
				<ul class="tabs">
					<li class="tab col s6"><a class="active" href="#bachelor">Бакалаври</a></li>
					<li class="tab col s6"><a href="#master">Магістри</a></li>
				</ul>
			</div> -->

			<div id="bachelor" class="col s12 m12">
				<div class="card">
					<!-- <p>
						Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy
						text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to
						make a type specimen book. It has survived not only five centuries, but also the leap into electronic
						typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release
						of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing
						software like Aldus PageMaker including versions of Lorem Ipsum.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy
						text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to
						make a type specimen book. It has survived not only five centuries, but also the leap into electronic
						typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release
						of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing
						software like Aldus PageMaker including versions of Lorem Ipsum.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy
						text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to
					</p> -->
				</div>

				<b>Список дисциплін: </b>

				<ul class="collapsible" data-collapsible="accordion">
					<li>
						<div class="collapsible-header">Ринок праці</div>
<!-- 						<div class="collapsible-body"><p>Lorem ipsum dolor sit amet.</p></div>
 -->					</li>
					<li>
						<div class="collapsible-header">Економіка праці</div>
<!-- 						<div class="collapsible-body"><p>Lorem ipsum dolor sit amet.</p></div>
 -->					</li>
					<li>
						<div class="collapsible-header">Організація праці</div>
<!-- 						<div class="collapsible-body"><p>Lorem ipsum dolor sit amet.</p></div>
 -->					</li>
					<li>
						<div class="collapsible-header">Вступ до фаху "Управління персоналом та економіка праці"</div>
<!-- 						<div class="collapsible-body"><p>Lorem ipsum dolor sit amet.</p></div>
 -->					</li>
					<li>
						<div class="collapsible-header">Методи прийняття управлінських рішень</div>
<!-- 						<div class="collapsible-body"><p>Lorem ipsum dolor sit amet.</p></div>
 -->					</li>
					<li>
						<div class="collapsible-header">Фінанси підприємств</div>
<!-- 						<div class="collapsible-body"><p>Lorem ipsum dolor sit amet.</p></div>
 -->					</li>
					<li>
						<div class="collapsible-header">Інформаційні системи в управлінні персоналом та економіці праці</div>
<!-- 						<div class="collapsible-body"><p>Lorem ipsum dolor sit amet.</p></div>
 -->					</li>
					<li>
						<div class="collapsible-header">Кадрове діловодство</div>
<!-- 						<div class="collapsible-body"><p>Lorem ipsum dolor sit amet.</p></div>
 -->					</li>
					<li>
						<div class="collapsible-header">Технології управління персоналом </div>
<!-- 						<div class="collapsible-body"><p>Lorem ipsum dolor sit amet.</p></div>
 -->					</li>
					<li>
						<div class="collapsible-header">Аудит персоналу</div>
<!-- 						<div class="collapsible-body"><p>Lorem ipsum dolor sit amet.</p></div>
 -->					</li>
					<li>
						<div class="collapsible-header">Управління персоналом</div>
<!-- 						<div class="collapsible-body"><p>Lorem ipsum dolor sit amet.</p></div>
 -->					</li>
					<li>
						<div class="collapsible-header">Мотивація і оцінка персоналу</div>
<!-- 						<div class="collapsible-body"><p>Lorem ipsum dolor sit amet.</p></div>
 -->					</li>
					<li>
						<div class="collapsible-header">Нормування праці</div>
<!-- 						<div class="collapsible-body"><p>Lorem ipsum dolor sit amet.</p></div>
 -->					</li>
					<li>
						<div class="collapsible-header">Основи бізнесу</div>
<!-- 						<div class="collapsible-body"><p>Lorem ipsum dolor sit amet.</p></div>
 -->					</li>
					<li>
						<div class="collapsible-header">Національна економіка</div>
<!-- 						<div class="collapsible-body"><p>Lorem ipsum dolor sit amet.</p></div>
 -->					</li>
					<li>
						<div class="collapsible-header">Державне регулювання зайнятості</div>
<!-- 						<div class="collapsible-body"><p>Lorem ipsum dolor sit amet.</p></div>
 -->					</li>
					<li>
						<div class="collapsible-header">Корпоративна соціальна відповідальність бізнесу</div>
<!-- 						<div class="collapsible-body"><p>Lorem ipsum dolor sit amet.</p></div>
 -->					</li>
					<li>
						<div class="collapsible-header">Управлінське консультування</div>
<!-- 						<div class="collapsible-body"><p>Lorem ipsum dolor sit amet.</p></div>
 -->					</li>
				</ul>

			</div>

			<!-- <div id="master" class="col s12 m12 center-block">
				<div class="card">
					<p>
						Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy
						text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to
						make a type specimen book. It has survived not only five centuries, but also the leap into electronic
						typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release
						of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing
						software like Aldus PageMaker including versions of Lorem Ipsum.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy
						text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to
						make a type specimen book. It has survived not only five centuries, but also the leap into electronic
						typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release
						of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing
						software like Aldus PageMaker including versions of Lorem Ipsum.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy
						text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to
					</p>
				</div>

				<b>Список дисциплін: </b>

				<ul class="collapsible" data-collapsible="accordion">
					<li>
						<div class="collapsible-header">Перший предмет</div>
						<div class="collapsible-body"><p>Lorem ipsum dolor sit amet.</p></div>
					</li>
					<li>
						<div class="collapsible-header">Другий предмет</div>
						<div class="collapsible-body"><p>Lorem ipsum dolor sit amet.</p></div>
					</li>
					<li>
						<div class="collapsible-header">Третій предмет</div>
						<div class="collapsible-body"><p>Lorem ipsum dolor sit amet.</p></div>
					</li>
					<li>
						<div class="collapsible-header">Четвертий предмет</div>
						<div class="collapsible-body"><p>Lorem ipsum dolor sit amet.</p></div>
					</li>
					<li>
						<div class="collapsible-header">П'ятий предмет</div>
						<div class="collapsible-body"><p>Lorem ipsum dolor sit amet.</p></div>
					</li>
					<li>
						<div class="collapsible-header">Шостий предмет</div>
						<div class="collapsible-body"><p>Lorem ipsum dolor sit amet.</p></div>
					</li>
					<li>
						<div class="collapsible-header">Сьомий предмет</div>
						<div class="collapsible-body"><p>Lorem ipsum dolor sit amet.</p></div>
					</li>
					<li>
						<div class="collapsible-header">Восьмий предмет</div>
						<div class="collapsible-body"><p>Lorem ipsum dolor sit amet.</p></div>
					</li>
					<li>
						<div class="collapsible-header">Дев'ятий предмет</div>
						<div class="collapsible-body"><p>Lorem ipsum dolor sit amet.</p></div>
					</li>
					<li>
						<div class="collapsible-header">Десятий предмет</div>
						<div class="collapsible-body"><p>Lorem ipsum dolor sit amet.</p></div>
					</li>
				</ul>

			</div> -->

		</div>
	</div>
@endsection