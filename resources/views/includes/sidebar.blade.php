


<!--<div class="nav-side-menu">
    <div class="brand"><strong>Contents</strong></div>
    <i class="fa fa-bars fa-2x toggle-btn" data-toggle="collapse" data-target="#menu-content"></i>

        <div class="menu-list">

            <ul id="menu-content" class="menu-content collapse out">
              <ul>
              <li>
                    <a href="/events" style="color:black;">Events</a>

                </li>
              </ul>

                <li  data-toggle="collapse" data-target="#topics" class="collapsed">
                  <a><i class="fa fa-gift fa-lg"></i> Topics <span class="arrow"></span></a>
                </li>
                <ul class="sub-menu collapse" id="topics">

                    <li><a href="/topics/education" >Education</a></li>
                    <li><a href="/topics/health" >Health</a><br></li>
                    <li><a href="/topics/politics" >Politics</a><br></li>
                    <li><a href="/topics/musicandentertainment" >Music and Entertainment</a></li>
                    <li><a href="/topics/country" >Country</a></li>
                    <li><a href="/topics/socio_economic" >Socio-Economic</a></li>
                    <li><a href="/topics/technology" >Technology</a></li>
                    <li><a href="#" >Business</a></li>
                    <li><a href="#" >Tourism</a></li>
                </ul>


                <li data-toggle="collapse" data-target="#service" class="collapsed">
                  <a><i class="fa fa-globe fa-lg"></i> Services <span class="arrow"></span></a>
                </li>
                <ul class="sub-menu collapse" id="service">
                  <li>New Service 1</li>
                  <li>New Service 2</li>
                  <li>New Service 3</li>
                </ul>


                <li data-toggle="collapse" data-target="#new" class="collapsed">
                  <a><i class="fa fa-car fa-lg"></i> New <span class="arrow"></span></a>
                </li>
                <ul class="sub-menu collapse" id="new">
                  <li>New New 1</li>
                  <li>New New 2</li>
                  <li>New New 3</li>
                </ul>






                    <li data-toggle="collapse" data-target="#user" class="collapsed">
                      <a><i class="fa fa-user fa-lg"></i> User <span class="arrow"></span></a>
                    </li>
                    <ul class="sub-menu collapse" id="user">
                      @guest
                          <li><a  href="{{ route('login') }}" onmouseover="this.style.background='blue';" onmouseout="this.style.background='#000000';"><strong>Login</strong></a></li>
                          <li><a  href="{{ route('register') }}" onmouseover="this.style.background='blue';" onmouseout="this.style.background='#000000';"><strong>Register</strong></a></li>

                      @else
                      <li ><a href="/profile/{{Auth::user()->id}}/{{Auth::user()->firstname}}.{{Auth::user()->lastname}}">Profile</a></li>
                      <li><a href="{{ route('logout') }}"
                          onclick="event.preventDefault();
                                   document.getElementById('logout-form').submit();" style="color:white; font-weight:bold;">
                          Logout
                      </a>



                      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none; color:purple;">
                          {{ csrf_field() }}
                      </form>
                      </li>

                        @endguest
                    </ul>





                  </ul>

     </div>
</div>-->

<div class="sidebar">
<a href="/home">Home</a>
<a href="{{route('events')}}">Events</a>
<a href="/profile/{{Auth::user()->id}}/{{Auth::user()->firstname}}.{{Auth::user()->lastname}}">Profile</a>
<a href="/findfriends">Discover People</a>
</div>
