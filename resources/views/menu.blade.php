        <div class="header collapse d-lg-flex p-0" id="headerMenuCollapse">
          <div class="container">
            <div class="row align-items-center">
              <div class="col-lg-3 ml-auto">
                <!-- form class="input-icon my-3 my-lg-0">
                  <input type="search" class="form-control header-search" placeholder="Search&hellip;" tabindex="1">
                  <div class="input-icon-addon">
                    <i class="fa fa-search"></i>
                  </div>
                </form -->
              </div>
              <div class="col-lg order-lg-first">
                <ul class="nav nav-tabs border-0 flex-column flex-lg-row">
                  <li class="nav-item mn home">
                    <a href="{{ route('home') }}" class="nav-link">
                      <i class="fa fa-tachometer"></i> 
                      Dashboard
                    </a>
                  </li>
                  @if( isGranted('ADMIN') )
                  <li class="nav-item mn groupe">
                    <a href="{{ route('groupe') }}" class="nav-link">
                      <i class="fa fa-list"></i> 
                      {{ __('groupe.module_name') }}
                    </a>
                  </li>
                  @endif
                  @if( isGranted('ADMIN') )
                  <li class="nav-item mn user prof etudient">
                    <a href="javascript:void(0)" class="nav-link" data-toggle="dropdown">
                      <i class="fa fa-users"></i> {{ __('user.module_name') }}
                    </a>
                    <div class="dropdown-menu dropdown-menu-arrow">
                      @if( isGranted('ROLE_USER_LIST') )
                      <a href="{{ route('user') }}" class="dropdown-item mn user">
                        <i class="fa fa-check-square-o"></i> {{ __('user.module_name') }}
                      </a>
                      @endif
                      @if( isGranted('ROLE_PROF_LIST') )
                      <a href="{{ route('prof') }}" class="dropdown-item mn prof">
                        <i class="fa fa-check-square-o"></i> {{ __('prof.module_name') }}
                      </a>
                      @endif
                      @if( isGranted('ROLE_ETUDIENT_LIST') )
                      <a href="{{ route('etudient') }}" class="dropdown-item mn etudient">
                        <i class="fa fa-check-square-o"></i> {{ __('etudient.module_name') }}
                      </a>
                      @endif
                    </div>
                  </li>
                  @endif
                  @if( isGranted('ADMIN') )
                  <li class="nav-item mn semester">
                    <a href="{{ route('semester') }}" class="nav-link">
                      <i class="fa fa-list"></i> 
                      {{ __('semester.module_name') }}
                    </a>
                  </li>
                  @endif
                  @if( isGranted('ADMIN') )
                  <li class="nav-item mn filier">
                    <a href="{{ route('filier') }}" class="nav-link">
                      <i class="fa fa-th"></i> 
                      {{ __('filier.module_name') }}
                    </a>
                  </li>
                  @endif
                  @if( isGranted('ADMIN') )
                  <li class="nav-item mn module">
                    <a href="{{ route('module') }}" class="nav-link">
                      <i class="fa fa-bookmark"></i> 
                      {{ __('module.module_name') }}
                    </a>
                  </li>
                  @endif
                  @if( isGranted('ADMIN') )
                  <li class="nav-item mn question">
                    <a href="{{ route('question') }}" class="nav-link">
                      <i class="fa fa-bookmark"></i> 
                      {{ __('question.module_name') }}
                    </a>
                  </li>
                  @endif
                  @if( isGranted('ADMIN') )
                  <li class="nav-item mn reponse">
                    <a href="{{ route('reponse') }}" class="nav-link">
                      <i class="fa fa-bookmark"></i> 
                      {{ __('reponse.module_name') }}
                    </a>
                  </li>
                  @endif
                  <script type="text/javascript">
                    $(document).ready(function(){
                      $('.mn.{{ explode('_',\Request::route()->getName())[0] }}').addClass('active');
                    })
                  </script>
                </ul>
              </div>
            </div>
          </div>
        </div>