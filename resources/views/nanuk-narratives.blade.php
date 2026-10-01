<!DOCTYPE html>
<html lang="en">
	

<head>
		
	<!--  -->
		<title>The DECODE Knowledge Project | Decodeknowledge</title>
		<!-- styles-->
    @include('includes.style')
		
		<!-- web-font loader-->
		
	</head>
	<body class="gallery-page">
		<div class="page-wrapper">
            @include('includes.header')
          

			<!-- header end-->
			<main class="main">
				<!-- promo start-->
				
        <h4 class="case-studies-heading">Nanuk Narratives</h4>
        
        

        <section>
            <div class="marquee-slider">
                <button class="arrow prev">&#10094;</button>

                <div class="marquee-track">
                    <img src="{{ asset('assets/img/case-studies/1.avif')}}">
                    <img src="{{ asset('assets/img/case-studies/2.avif')}}">
                    <img src="{{ asset('assets/img/case-studies/3.avif')}}">
                    <img src="{{ asset('assets/img/case-studies/4.avif')}}">
                    <img src="{{ asset('assets/img/case-studies/5.avif')}}">
                    <img src="{{ asset('assets/img/case-studies/6.avif')}}">
                </div>

                <button class="arrow next">&#10095;</button>
            </div>
        </section>

        
        <section>

        </section>

            
           
        <h4 class="case-studies-heading">(Inuit-Nunangat, Arctic)</h4>
           <section class="container">
            <div class="map-wrapper">
                <img src="https://static.wixstatic.com/media/8cb08a_f58cdcbca6dc4b378d0c49798fc92373~mv2.png/v1/fill/w_1920,h_1077,al_c,q_95,enc_avif,quality_auto/Untitled%20design%20(2).png" alt="World Map" class="map-bg">

                <a href="#" class="marker" style="top: 18%; left: 31%;"></a>  
                <a href="#" class="marker" style="top: 33%; left: 17%;"></a>
                <a href="#" class="marker" style="top: 54%; left: 70.5%;"></a>
                <a href="#" class="marker" style="top: 65%; left: 81%;"></a>
                <a href="#" class="marker" style="top: 68%; left: 59%;"></a>
                <a href="#" class="marker" style="top: 62%; left: 48.5%;"></a>
                <a href="#" class="marker" style="top: 47%; left: 51%;"></a>
                <a href="#" class="marker" style="top: 79%; left: 35%;"></a>
                <a href="#" class="marker" style="top: 74%; left: 30.2%;"></a>
                <a href="#" class="marker" style="top: 65%; left: 28%;"></a>

                <div id="map-tooltip"></div>
                </div>
           </section> 



        <section class="section pricing pricing-style--1" style="background: #04475e">
          <div class="container">
            <div class="row">
              <div class="col-sm-12 col-lg-6" style="margin-top: 15px;">
                <div class="banner-white">
                    <img src="{{asset('assets/img/case-studies/6.avif')}}" style="width: 100%;border-radius: 15px;" alt=""> <br><br>
                    <h2>Storymap</h2>
                <p class="text-center">Learn more from the <b>Nanuk Narratives</b> Storymap.</p>
                <a href="https://storymaps.arcgis.com/stories/b857b527504943dfa1db6603f2862397" style="background: #0cc0df;color: #fff;border: none;" target="_blank" class="button button--primary">Launch Storymap</a>
                </div>
              </div>
              <div class="col-sm-12 col-lg-6" style="margin-top: 15px;">
                <div class="banner-white">
                <img src="{{ asset('assets/img/case-studies/5.avif')}}" style="width: 100%;border-radius: 15px;" alt=""> <br><br>
                <h2>Webinar</h2>
                <p class="text-center">Watch the <b>Nanuk Narratives</b> Webinar and access the report below.</p>
                <div class="two-btn-gap">
                    <a href="{{ asset('assets/video/nanuk-narratives.mp4')}}" target="_blank" class="button button--primary" style="background: #04475E;color: #fff;">Watch Webinar</a>
                <a href="{{ asset('assets/pdf/Webinar-Report-Information-Nanuk-Narratives.pdf')}}" target="_blank" style="background: #0cc0df;color: #fff;border: none;" class="button button--primary">Report</a>
                </div>
                </div>
              </div>
            </div>
          </div>
        </section>


        <!-- gallery start-->
        <section class="section gallery" style="background: #0cc0df1a;">
          
          <div class="row no-gutters gallery-masonry">
            

            <!-- <div class="col-6 col-md-4 gallery-masonry__item category_1">
              <a
                class="gallery-masonry__img gallery-masonry__item--height-2"
                href="assets/img/case-studies/nanuk-narratives/1.png"
                data-fancybox="gallery"
                ><img class="img--bg" src="assets/img/case-studies/nanuk-narratives/1.png" alt="img" />
                </a
              >
            </div>
            <div class="col-6 col-md-4 gallery-masonry__item category_1">
              <a
                class="gallery-masonry__img gallery-masonry__item--height-2"
                href="assets/img/case-studies/nanuk-narratives/2.png"
                data-fancybox="gallery"
                ><img class="img--bg" src="assets/img/case-studies/nanuk-narratives/2.png" alt="img" />
                </a
              >
            </div>
            <div class="col-6 col-md-4 gallery-masonry__item category_2">
              <a
                class="gallery-masonry__img gallery-masonry__item--height-2"
                href="assets/img/case-studies/nanuk-narratives/3.jpg"
                data-fancybox="gallery"
                ><img class="img--bg" src="assets/img/case-studies/nanuk-narratives/3.jpg" alt="img" />
                </a
              >
            </div> -->
            <div class="col-6 col-md-3 gallery-masonry__item category_2">
              <a
                class="gallery-masonry__img gallery-masonry__item--height-2"
                href="{{ asset('assets/img/case-studies/nanuk-narratives/1.png')}}"
                data-fancybox="gallery"
                ><img class="img--bg" src="{{ asset('assets/img/case-studies/nanuk-narratives/1.png')}}" alt="img" />
               </a
              >
            </div>
            <div class="col-6 col-md-3 gallery-masonry__item category_2">
              <a
                class="gallery-masonry__img gallery-masonry__item--height-2"
                href="{{ asset('assets/img/case-studies/nanuk-narratives/2.png')}}"
                data-fancybox="gallery"
                ><img class="img--bg" src="{{ asset('assets/img/case-studies/nanuk-narratives/2.png')}}" alt="img" />
               </a
              >
            </div>
            <div class="col-6 col-md-6 gallery-masonry__item category_3">
              <a
                class="gallery-masonry__img gallery-masonry__item--height-1"
                href="{{ asset('assets/img/case-studies/nanuk-narratives/3.jpg')}}"
                data-fancybox="gallery"
                ><img class="img--bg" src="{{ asset('assets/img/case-studies/nanuk-narratives/3.jpg')}}" alt="img" />
               </a
              >
            </div>
            <div class="col-6 col-md-3 gallery-masonry__item category_2">
              <a
                class="gallery-masonry__img gallery-masonry__item--height-2"
                href="{{ asset('assets/img/case-studies/nanuk-narratives/4.jpg')}}}"
                data-fancybox="gallery"
                ><img class="img--bg" src="{{ asset('assets/img/case-studies/nanuk-narratives/4.jpg')}}" alt="img" />
               </a
              >
            </div>
            <div class="col-6 col-md-3 gallery-masonry__item category_2">
              <a
                class="gallery-masonry__img gallery-masonry__item--height-2"
                href="{{ asset('assets/img/case-studies/nanuk-narratives/5.jpg')}}"
                data-fancybox="gallery"
                ><img class="img--bg" src="{{ asset('assets/img/case-studies/nanuk-narratives/5.jpg')}}" alt="img" />
               </a
              >
            </div>

           <div class="display-none-sec" style="display: none;">

            <div class="col-6 col-md-3 gallery-masonry__item category_1">
              <a
                class="gallery-masonry__img gallery-masonry__item--height-2"
                href="{{ asset('assets/img/case-studies/nanuk-narratives/6.jpg')}}"
                data-fancybox="gallery"
                ><img class="img--bg" src="{{ asset('assets/img/case-studies/nanuk-narratives/6.jpg')}}" alt="img" />
               </a
              >
            </div>
            <div class="col-6 col-md-3 gallery-masonry__item category_1">
              <a
                class="gallery-masonry__img gallery-masonry__item--height-2"
                href="{{asset('assets/img/case-studies/nanuk-narratives/7.jpg')}}"
                data-fancybox="gallery"
                ><img class="img--bg" src="{{ asset('assets/img/case-studies/nanuk-narratives/7.jpg')}}" alt="img" />
               </a
              >
            </div>
            <div class="col-6 col-md-3 gallery-masonry__item category_1">
              <a
                class="gallery-masonry__img gallery-masonry__item--height-2"
                href="{{ asset('assets/img/case-studies/nanuk-narratives/8.jpg')}}"
                data-fancybox="gallery"
                ><img class="img--bg" src="{{asset('assets/img/case-studies/nanuk-narratives/8.jpg')}}" alt="img" />
               </a
              >
            </div>
            <div class="col-6 col-md-3 gallery-masonry__item category_1">
              <a
                class="gallery-masonry__img gallery-masonry__item--height-2"
                href="{{ asset('assets/img/case-studies/nanuk-narratives/9.jpg')}}"
                data-fancybox="gallery"
                ><img class="img--bg" src="{{ asset('assets/img/case-studies/nanuk-narratives/9.jpg')}}" alt="img" />
               </a
              >
            </div>
            <div class="col-6 col-md-3 gallery-masonry__item category_1">
              <a
                class="gallery-masonry__img gallery-masonry__item--height-2"
                href="{{asset('assets/img/case-studies/nanuk-narratives/10.jpg')}}"
                data-fancybox="gallery"
                ><img class="img--bg" src="{{ asset('assets/img/case-studies/nanuk-narratives/10.jpg')}}" alt="img" />
               </a
              >
            </div>
            <div class="col-6 col-md-3 gallery-masonry__item category_1">
              <a
                class="gallery-masonry__img gallery-masonry__item--height-2"
                href="{{ asset('assets/img/case-studies/nanuk-narratives/11.jpg')}}"
                data-fancybox="gallery"
                ><img class="img--bg" src="{{ asset('assets/img/case-studies/nanuk-narratives/11.jpg')}}" alt="img" />
               </a
              >
            </div>
            <div class="col-6 col-md-3 gallery-masonry__item category_1">
              <a
                class="gallery-masonry__img gallery-masonry__item--height-2"
                href="{{ asset('assets/img/case-studies/nanuk-narratives/12.jpg')}}"
                data-fancybox="gallery"
                ><img class="img--bg" src="{{ asset('assets/img/case-studies/nanuk-narratives/12.jpg')}}" alt="img" />
               </a
              >
            </div>
            <div class="col-6 col-md-3 gallery-masonry__item category_1">
              <a
                class="gallery-masonry__img gallery-masonry__item--height-2"
                href="{{ asset('assets/img/case-studies/nanuk-narratives/13.png')}}"
                data-fancybox="gallery"
                ><img class="img--bg" src="{{ asset('assets/img/case-studies/nanuk-narratives/13.png')}}" alt="img" />
               </a
              >
            </div>
            <div class="col-6 col-md-3 gallery-masonry__item category_1">
              <a
                class="gallery-masonry__img gallery-masonry__item--height-2"
                href="{{ asset('assets/img/case-studies/nanuk-narratives/14.jpg')}}"
                data-fancybox="gallery"
                ><img class="img--bg" src="{{ asset('assets/img/case-studies/nanuk-narratives/14.jpg')}}" alt="img" />
               </a
              >
            </div>

           </div> 
            
          </div>

          <a style="width: 230px;margin: 0 auto;margin-top: 40px;"
                class="gallery-masonry__img button button--primary"
                href="{{ asset('assets/img/case-studies/nanuk-narratives/5.jpg')}}"
                data-fancybox="gallery"
                >Show all photos</a>

        </section>
        <!-- gallery end-->



			</main>
      @include('includes.footer')
            
		
		</div>

@include('includes.script')
        

                <script>
                    const track = document.querySelector('.marquee-track');
                    const next = document.querySelector('.next');
                    const prev = document.querySelector('.prev');

                    /* Duplicate content for seamless infinite */
                    track.innerHTML += track.innerHTML;

                    /* Pause animation when interacting */
                    function pause() {
                    track.style.animationPlayState = 'paused';
                    }

                    function play() {
                    track.style.animationPlayState = 'running';
                    }

                    next.addEventListener('click', () => {
                    pause();
                    track.scrollLeft += 300;
                    setTimeout(play, 200);
                    });

                    prev.addEventListener('click', () => {
                    pause();
                    track.scrollLeft -= 300;
                    setTimeout(play, 200);
                    });

                    /* Pause on hover */
                    track.addEventListener('mouseenter', pause);
                    track.addEventListener('mouseleave', play);

                    const markers = document.querySelectorAll('.marker');
const tooltip = document.getElementById('map-tooltip');

markers.forEach(marker => {
  marker.addEventListener('mouseenter', (e) => {
    tooltip.innerText = marker.getAttribute('data-name');
    tooltip.style.display = 'block';
  });

  marker.addEventListener('mousemove', (e) => {
    // Position tooltip near the mouse
    tooltip.style.left = (e.pageX - marker.parentElement.offsetLeft + 15) + 'px';
    tooltip.style.top = (e.pageY - marker.parentElement.offsetTop - 30) + 'px';
  });

  marker.addEventListener('mouseleave', () => {
    tooltip.style.display = 'none';
  });
});
                </script>



	</body>
