<nav class="navbar navbar-expand-lg fixed-top " id="navbar">
  <div class="container-fluid">
    <a class="navbar-brand" href="{{url('/')}}"><img class="w-100" src="{{asset('assets/image/logo/logo_flyn.svg')}}" alt="Flyncorp Icon"></a>
    <button class="navbar-toggler" type="button" data-toggle="modal" data-target="#modal_drawer_right" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
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
                    <div class="field name"><a><span class="slanted"><img src="https://codebayfront.com/modal-sidebar/img/bootstrap-5.png" width="35" alt="Bootstrap 5 Icon"></span></a>&nbsp;Bootstrap 5&nbsp;<img src="https://codebayfront.com/modal-sidebar/img/alpha.png" width="12" alt="alpha Icon"></div>
                </div>
            </div>
        <div class="modal-body">
        <ul class="menu">
            <li class="nav-item active">
                <a class="nav-link" href="#"><svg width="1.5em" height="1.5em" viewBox="0 0 16 16" class="bi bi-house-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M8 3.293l6 6V13.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5V9.293l6-6zm5-.793V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z"/>
                    <path fill-rule="evenodd" d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z"/>
                    </svg>&nbsp;Home
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#"><svg width="1.5em" height="1.5em" viewBox="0 0 16 16" class="bi bi-briefcase-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M0 12.5A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5V6.85L8.129 8.947a.5.5 0 0 1-.258 0L0 6.85v5.65z"/>
                    <path fill-rule="evenodd" d="M0 4.5A1.5 1.5 0 0 1 1.5 3h13A1.5 1.5 0 0 1 16 4.5v1.384l-7.614 2.03a1.5 1.5 0 0 1-.772 0L0 5.884V4.5zm5-2A1.5 1.5 0 0 1 6.5 1h3A1.5 1.5 0 0 1 11 2.5V3h-1v-.5a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5V3H5v-.5z"/>
                    </svg>&nbsp;Travel
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#"><svg width="1.5em" height="1.5em" viewBox="0 0 16 16" class="bi bi-brightness-high-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path d="M12 8a4 4 0 1 1-8 0 4 4 0 0 1 8 0z"/>
                    <path fill-rule="evenodd" d="M8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0zm0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13zm8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5zM3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8zm10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0zm-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0zm9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707zM4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708z"/>
                    </svg>&nbsp;Beach
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#"><svg width="1.5em" height="1.5em" viewBox="0 0 16 16" class="bi bi-calendar-month" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z"/>
                    <path d="M2.56 11.332L3.1 9.73h1.984l.54 1.602h.718L4.444 6h-.696L1.85 11.332h.71zm1.544-4.527L4.9 9.18H3.284l.8-2.375h.02zm5.746.422h-.676V9.77c0 .652-.414 1.023-1.004 1.023-.539 0-.98-.246-.98-1.012V7.227h-.676v2.746c0 .941.606 1.425 1.453 1.425.656 0 1.043-.28 1.188-.605h.027v.539h.668V7.227zm2.258 5.046c-.563 0-.91-.304-.985-.636h-.687c.094.683.625 1.199 1.668 1.199.93 0 1.746-.527 1.746-1.578V7.227h-.649v.578h-.019c-.191-.348-.637-.64-1.195-.64-.965 0-1.64.679-1.64 1.886v.34c0 1.23.683 1.902 1.64 1.902.558 0 1.008-.293 1.172-.648h.02v.605c0 .645-.423 1.023-1.071 1.023zm.008-4.53c.648 0 1.062.527 1.062 1.359v.253c0 .848-.39 1.364-1.062 1.364-.692 0-1.098-.512-1.098-1.364v-.253c0-.868.406-1.36 1.098-1.36z"/>
                    </svg>&nbsp;Calendar
                </a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="dropdown" role="button" data-toggle="dropdown" aria-expanded="false"><svg width="1.5em" height="1.5em" viewBox="0 0 16 16" class="bi bi-menu-down" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M15 13V4a1 1 0 0 0-1-1h-3.586A2 2 0 0 1 9 2.414l-1-1-1 1A2 2 0 0 1 5.586 3H2a1 1 0 0 0-1 1v9a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1zM2 2a2 2 0 0 0-2 2v9a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2h-3.586a1 1 0 0 1-.707-.293L8.354.354a.5.5 0 0 0-.708 0L6.293 1.707A1 1 0 0 1 5.586 2H2z"/>
                    <path fill-rule="evenodd" d="M15 11H1v-1h14v1zm0-4H1V6h14v1zM2 12.5a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 0 1h-8a.5.5 0 0 1-.5-.5z"/>
                    </svg>&nbsp;Dropdown
                </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled" href="#"><svg width="1.5em" height="1.5em" viewBox="0 0 16 16" class="bi bi-toggle2-off" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path d="M9 11c.628-.836 1-1.874 1-3a4.978 4.978 0 0 0-1-3h4a3 3 0 1 1 0 6H9z"/>
                    <path fill-rule="evenodd" d="M5 12a4 4 0 1 0 0-8 4 4 0 0 0 0 8zm0 1A5 5 0 1 0 5 3a5 5 0 0 0 0 10z"/>
                    </svg>&nbsp;Disabled
                </a>
            </li>
        </ul>
      </div>   
    </div>
  </div> 
</div>


