<!DOCTYPE html>
<html lang="en">
	

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
						<!-- <span>Papers</span> -->
					</div>
					<div class="container">
						<div class="row">
							<div class="col-auto">
								<div class="align-container">
									<div class="align-container__item"><span class="promo-primary__pre-title">DECODE</span>
										<h1 class="promo-primary__title"><span>Working Papers</span></h1>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>


                

				<section class="section stories">
					<div class="container">
						@foreach($working_papers as $working_paper)
						<div class="row offset-70">
							
							@if ($loop->odd)
							<div class="col-md-10 offset-md-1 col-lg-12 offset-lg-0">
								<div class="stories-item">
									
									<div class="row align-items-center">
										
									
										<div class="col-lg-6 col-xl-5">
											<div class="img-box"><img class="img--layout" src="{{ asset('img/storie_4-layout.png')}}" alt="img">
											
												<div class="img-box__img"><img class="img--bg" src="{{ asset('storage/'.$working_paper->image)}}" alt="img"></div>
											</div>
										</div>
										<div class="col-lg-6 col-xl-6 offset-xl-1">
											<div class="heading heading--primary"><span class="heading__pre-title">
    {{ sprintf('%02d', $loop->iteration) }}
</span>
												<h2 class="heading__title"><span>{{$working_paper->title}}</span></h2>
											</div>
											<p>{{$working_paper->description}}</p>
											@if($working_paper->pdf)

    <a target="_blank"
       class="button stories-item__button button--primary"
       href="{{ asset('storage/'.$working_paper->pdf) }}">
        Click to download
    </a>

@else

    <a class="button stories-item__button button--primary"
       href="javascript:void(0)">
        Coming soon
    </a>
	@endif
											
										</div>
									</div>
								</div>
								
							</div>
							@else
							<div class="col-md-10 offset-md-1 col-lg-12 offset-lg-0">
								<div class="stories-item">
									<div class="row align-items-center flex-column-reverse flex-lg-row">
										<div class="col-lg-6 col-xl-6">
											<div class="heading heading--primary"><span class="heading__pre-title">
    {{ sprintf('%02d', $loop->iteration) }}
</span>
												<h2 class="heading__title"><span>{{$working_paper->title}}</span></h2>
											</div>
											<p>{{$working_paper->description}}</p>
											@if($working_paper->pdf)
    <a class="button stories-item__button button--primary" target="_blank"
       
       href="{{ asset('storage/'.$working_paper->pdf) }}">
        Click to download
    </a>
@else
    <a class="button stories-item__button button--primary"
       href="javascript:void(0)">
        Coming soon
    </a>
@endif
											
										</div>
										<div class="col-lg-6 col-xl-5 offset-xl-1">
											<div class="img-box"><img class="img--layout" src="{{ asset('img/storie_4-layout.png')}}" alt="img">
												<div class="img-box__img"><img class="img--bg" src="{{ asset('storage/'.$working_paper->image) }}" alt="img"></div>
											</div>
										</div>
									</div>
								</div>
							</div>
						@endif
							
							
						</div>
							
						     @endforeach
					</div>
					
				</section>

<div class="mt-4">
						{{$working_papers->links();}}
       
    </div>


			</main>
           @include('includes.footer')
		
		</div>


            @include('includes.script')
		
	</body>
