<nav class="navbar navbar-expand-lg fixed-top " id="navbar">
  <div class="container-fluid">
    <a class="navbar-brand" href="{{url('/')}}"><img class="w-100" src="{{asset('assets/image/logo/logo_flyn.svg')}}" alt="Flyncorp Icon"></a>
    <button class="navbar-toggler" type="button" data-toggle="modal" data-target="#modal_drawer_right" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <i class="fas fa-align-right"></i>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ml-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{url('/')}}">HOME</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{url('/')}}">PRODUCT</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{url('/')}}">ABOUT US</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{url('/')}}">CONTACT US</a>
        </li>
       <!--  <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li> -->
      </ul>
    </div>
  </div>
</nav>
<div id="modal_drawer_right" class="modal fixed-right fade" tabindex="-1" role="dialog">
  <div class="modal-dialog modal-dialog-aside" role="document">
    <div class="modal-content">
            <div class="modal-header">              
                <div class="avatar"></div>
                <div class="text">
                     <a class="navbar-brand" href="{{url('/')}}"><img class="w-50 ml-3" src="{{asset('assets/image/logo/logo_flyn.svg')}}" alt="Flyncorp Icon"></a>
                </div>
            </div>
        <div class="modal-body">
        <ul class="menu">
             <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="{{url('/')}}">HOME</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{url('/')}}">PRODUCT</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{url('/')}}">ABOUT US</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{url('/')}}">CONTACT US</a>
            </li>
        </ul>
      </div>   
    </div>
  </div> 
</div>


