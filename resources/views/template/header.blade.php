 <div class="header">
     <div class="header-content">
         <nav class="navbar navbar-expand">
             <div class="collapse navbar-collapse justify-content-between">
                 <div class="header-left">
                     <div class="dashboard_bar">
                         {{ $title }}
                     </div>
                 </div>
                 <ul class="navbar-nav header-right">
                     <li class="nav-item">
                         <button class="btn btn-primary d-sm-inline-block d-none "><i class="bi bi-person-check-fill"></i>
                             {{ auth()->user()->name }}</button>
                     </li>
                 </ul>
             </div>
         </nav>
     </div>
 </div>
