<div class="aside-dropdown">
  <div class="aside-dropdown__inner">
    <span class="aside-dropdown__close">
      <svg class="icon">
        <use xlink:href="#close"></use></svg
    ></span>
    <div class="aside-dropdown__item d-lg-none d-block">
      <ul class="aside-menu">
        <li class="aside-menu__item">
          <a class="aside-menu__link" href= "{{ url('/') }}"><span>Home</span></a>
        </li>
        <li class="aside-menu__item aside-menu__item--has-child">
          <a class="aside-menu__link" href="javascript:void(0);"
            ><span>Case Studies</span></a
          >
          <!-- sub menu start-->
          <ul class="aside-menu__sub-list">
            <li>
              <a href="#"><span>Inuit-Nunangat, Arctic</span></a>
            </li>
            <li>
              <a href="#"><span>Tŝilhqot’in territories, BC, Canada</span></a>
            </li>
            <li>
              <a href="#"><span>Putumayo, Colombia</span></a>
            </li>
            <li>
              <a href="#"><span>Kaleshwar, India</span></a>
            </li>
            <li>
              <a href="#"><span>Sarawak, Malaysia</span></a>
            </li>
            <li>
              <a href="#"><span>Gulu, Uganda</span></a>
            </li>
            <li>
              <a href="#"><span>São Paulo, Brazil</span></a>
            </li>
            <li>
              <a href="#"><span>Bolivian Altiplano, Bolivia</span></a>
            </li>
            <li>
              <a href="#"><span>Tunis, Tunisia</span></a>
            </li>
            <li>
              <a href="#"><span>Bliéron, Côte d’Ivoire</span></a>
            </li>
          </ul>
          <!-- sub menu end-->
        </li>
        <li class="aside-menu__item">
          <a class="aside-menu__link" href="{{ url('/working-papers') }}"
            ><span>Working Papers</span></a
          >
        </li>
        <li class="aside-menu__item">
          <a class="aside-menu__link" href="{{ url('/publications') }}"
            ><span>Publications</span></a
          >
        </li>
        <li class="aside-menu__item">
          <a class="aside-menu__link" href="{{ url('/advocacy-in-action')}}"
            ><span>Advocacy in Action</span></a
          >
        </li>
        <!-- <li class="aside-menu__item">
          <a class="aside-menu__link" href="javascript:void(0);"
            ><span>Contacts</span></a
          >
        </li> -->
      </ul>
    </div>
    <div class="aside-dropdown__item">
      <h5>Pria</h5>
      <p>42, Tughlakabad Institutional Area,
New Delhi – 110062</p>
<p style="margin-bottom: 0;">Ph: +91-011-29960931/32/33</p>
<p style="margin-bottom: 0;">Email: contact@decodeknowledge.org</p>
      <ul class="footer-socials">
          <li class="footer-socials__item"><a class="footer-socials__link" href="mailto:contact@decodeknowledge.org"><i class="fa fa-envelope" aria-hidden="true"></i> </a></li>
          <li class="footer-socials__item"><a class="footer-socials__link" href="https://www.instagram.com/unescochaircbrsr/"><i class="fa fa-instagram" aria-hidden="true"></i> </a></li>
          <li class="footer-socials__item"><a class="footer-socials__link" href="https://www.facebook.com/UNESCOchairCBR/"><i class="fa fa-facebook" aria-hidden="true"></i> </a></li>
          <li class="footer-socials__item"><a class="footer-socials__link" href="https://www.youtube.com/channel/UCJpmb7ZyuLtW9jkaYbp6Ztw"><i class="fa fa-youtube" aria-hidden="true"></i> </a></li>
          <li class="footer-socials__item"><a class="footer-socials__link" href="https://www.linkedin.com/company/unesco-chair-in-community-based-research-social-responsibility-in-higher-education/"><i class="fa fa-linkedin" aria-hidden="true"></i> </a></li>
      </ul>
    </div>
    <div class="aside-dropdown__item">
      <a
        class="button button--squared"
        href="{{ asset('assets/pdf/project-overview.pdf')}}" target="_blank"
        ><span>Project Overview</span></a
      >
    </div>
  </div>
</div>
<!-- aside dropdown end-->
<!-- top bar start-->
<div class="top-bar d-none d-lg-block">
  <div class="container">
    <h1 style="margin-bottom: 0; text-align: center;font-size: 45px;">The DECODE Knowledge Project</h1>
  </div>
</div>
<!-- top bar end-->
<!-- header start-->
<header class="header header--front_3">
  <div class="container-fluid">
    <div class="row no-gutters justify-content-between">
      <div class="col-auto d-flex align-items-center">
        <div class="dropdown-trigger d-none d-sm-block">
          <div class="dropdown-trigger__item"></div>
        </div>
        <div class="header-logo">
          <a class="header-logo__link" href="{{ url('/') }}"
            ><img class="header-logo__img" src="{{asset('assets/img/logo.png') }}" alt="logo"
          /></a>
        </div>
      </div>
      <div class="col-auto">
        <!-- main menu start-->
        <nav>
          <ul class="main-menu">
            <!-- <li class="main-menu__item"><a class="main-menu__link" href="index.php"><span>Home</span></a>
										
									</li> -->
                  <li class="main-menu__item">
              <a class="main-menu__link" href="{{ url('/') }}"
                ><span>Home</span></a
              >
            </li>
            <li class="main-menu__item main-menu__item--has-child">
              <a class="main-menu__link" href="javascript:void(0);"
                ><span>Case Studies</span></a
              >
              <!-- sub menu start-->
              <ul class="main-menu__sub-list sub-list--style-2">
                
                <li>
                  <a href="{{ url('/nanuk-narratives')}}"><span>Inuit-Nunangat, Arctic</span></a>
                </li>
                <li>
                  <a href="#"
                    ><span>Tŝilhqot’in territories, BC, Canada</span></a
                  >
                </li>
                <li>
                  <a href="#"><span>Putumayo, Colombia</span></a>
                </li>
                <li>
                  <a href="#"><span>Kaleshwar, India</span></a>
                </li>
                <li>
                  <a href="#"><span>Sarawak, Malaysia</span></a>
                </li>
                <li>
                  <a href="#"><span>Gulu, Uganda</span></a>
                </li>
                <li>
                  <a href="#"><span>São Paulo, Brazil</span></a>
                </li>
                <li>
                  <a href="#"><span>Bolivian Altiplano, Bolivia</span></a>
                </li>
                <li>
                  <a href="#"><span>Tunis, Tunisia</span></a>
                </li>
                <li>
                  <a href="#"><span>Bliéron, Côte d’Ivoire</span></a>
                </li>
              </ul>
              <!-- sub menu end-->
            </li>
            <li class="main-menu__item">
              <a class="main-menu__link" href="{{ url('/working-papers') }}"
                ><span>Working Papers</span></a
              >
            </li>
            <li class="main-menu__item">
              <a class="main-menu__link" href="{{ url('/publications')}}"><span>Publications</span></a>
            </li>
            <li class="main-menu__item">
              <a class="main-menu__link" href="{{ url('/advocacy-in-action')}}"
                ><span>Advocacy in Action</span></a
              >
            </li>
            <!-- <li class="main-menu__item">
              <a class="main-menu__link" href="#"><span>Contacts</span></a>
            </li> -->
          </ul>
        </nav>
        <!-- main menu end-->
      </div>
      <div class="col-auto d-flex align-items-center">
        <a
          class="button button--squared"
          href="{{ asset('assets/pdf/project-overview.pdf')}}" target="_blank"
          ><span>Project Overview</span></a
        >
        <div class="dropdown-trigger d-block d-sm-none">
          <div class="dropdown-trigger__item"></div>
        </div>
      </div>
    </div>
  </div>
</header>
