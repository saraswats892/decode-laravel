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
                        <!-- <span>Publications</span> -->
                    </div>
					<div class="container">
						<div class="row">
							<div class="col-auto">
								<div class="align-container">
									<div class="align-container__item"><span class="promo-primary__pre-title">DECODE</span>
										<h1 class="promo-primary__title"><span>Publications</span></h1>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>


                

            <section class="section events-inner">
            <!-- <img class="events-inner__bg" src="img/events_inner-bg.png" alt="img"> -->
            <div class="container">
                <div class="row offset-30">
                    @foreach($publications as $publication)
                <div class="col-xl-10 offset-xl-1">
                    <div class="upcoming-item">
                    <div class="upcoming-item__date">
                        <span>{{ \Carbon\Carbon::parse($publication->publish_date)->format('d') }}</span><span>{{\Carbon\Carbon::parse($publication->publish_date)->format('F,y')}}</span>
                    </div>
                    <div class="upcoming-item__body">
                        <div class="row align-items-center">
                        <div class="col-lg-5 col-xl-4">
                            <div class="upcoming-item__img">
                                
                            <img class="img--bg" src="{{ asset('storage/' . $publication->image) }}" alt="img">
                            </div>
                        </div>
                        <div class="col-lg-7 col-xl-8">
                            <div class="upcoming-item__description">
                           
                            <h3>
                                {{$publication->title}}
                            </h3>
                            @if($publication->link)
                            <a target="_blank" class="button stories-item__button button--primary" href="{{$publication->link}}">Read More</a>
                            @endif
                            </div>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
                @endforeach
                
                
                
                
                
                </div>
                
                <div class="mt-4">
        {{ $publications->links(); }}
    </div>
            </div>
            </section>




			</main>
            @include('includes.footer')
          
		
		</div>


          @include('includes.script') 
		
	</body>
