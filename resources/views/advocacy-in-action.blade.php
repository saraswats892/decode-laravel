<!DOCTYPE html>
<html lang="en">
	
<!--  -->
<head>
	<!--  -->
		<title>The DECODE Knowledge Project | Decodeknowledge</title>
		<!-- styles-->
		 @include('includes.style')
		
		<!-- web-font loader-->
		
	</head>
	<body>
		<div class="page-wrapper">
           @include('includes.header')
           

			<!-- header end-->
			<main class="main">
				<!-- promo start-->
				

                <section class="promo-primary">
					<picture>
						<source srcset="{{ asset('assets/img/blue-bg.jpg')}}" media="(min-width: 992px)"><img class="img--bg" src="{{ asset('assets/img/blue-bg.jpg')}}" alt="img">
					</picture>
					<div class="promo-primary__description"> 
						<!-- <span>Advocacy</span> -->
					</div>
					<div class="container">
						<div class="row">
							<div class="col-auto">
								<div class="align-container">
									<div class="align-container__item"><span class="promo-primary__pre-title">DECODE</span>
										<h1 class="promo-primary__title"><span>Advocacy in Action</span></h1>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>


                <section class="section">
					<div class="container">

						<div class="row">
                            @foreach($advocacies as $advocacy)
							<div class="col-md-4">
								<div class="blog-item blog-item--style-1">
									<div class="blog-item__img">
									<img class="" src="{{ asset('storage/'.$advocacy->image) }}" alt="img">
									<!-- <span class="blog-item__badge" style="background-color: #49c2df">Water Delivery</span> -->
									</div>
									<div class="blog-item__content">
									<h3 class="heading__title"><span>{{ $advocacy->title }}: </span></h3>
									<p>
									{{ $advocacy->description}}</p>
									<a target="_blank" class="button stories-item__button button--primary" href="{{ asset($advocacy->link)}}">Know More</a>
									</div>
								</div>
							</div>
							@endforeach
							
						</div>
						<div class="mt-4">
    {{ $advocacies->links() }}
</div>

					</div>
				</section>





			</main>
			@include('includes.footer')
        
		
		</div>

@include('includes.script')
          
		
	</body>
