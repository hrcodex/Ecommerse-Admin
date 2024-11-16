<div class="main-nav">
    <!-- Sidebar Logo -->
    <div class="logo-box">
         <a href="index.html" class="logo-dark">
              <img src="{{ asset('backend') }}/assets/images/hrcodex/favicon-logo.png" class="logo-sm" alt="logo sm">
              <img src="{{ asset('backend') }}/assets/images/hrcodex/admin-logo.png" class="logo-lg" alt="logo dark">
         </a>

         <a href="index.html" class="logo-light">
              <img src="{{ asset('backend') }}/assets/images/hrcodex/favicon-logo.png" class="logo-sm" alt="logo sm">
              <img src="{{ asset('backend') }}/assets/images/hrcodex/admin-logo.png" class="logo-lg" alt="logo light">
         </a>
    </div>

    <!-- Menu Toggle Button (sm-hover) -->
    <button type="button" class="button-sm-hover" aria-label="Show Full Sidebar">
         <iconify-icon icon="solar:double-alt-arrow-right-bold-duotone" class="button-sm-hover-icon"></iconify-icon>
    </button>

    <div class="scrollbar" data-simplebar>
         <ul class="navbar-nav" id="navbar-nav">

              <li class="menu-title">General</li>

              <li class="nav-item">
                   <a class="nav-link" href="{{ route('admin.dashboard') }}">
                        <span class="nav-icon">
                             <iconify-icon icon="solar:widget-5-bold-duotone"></iconify-icon>
                        </span>
                        <span class="nav-text"> Dashboard </span>
                   </a>
              </li>

              <li class="nav-item">
                <a class="nav-link menu-arrow" href="#sidebarOrders" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarOrders">
                     <span class="nav-icon">
                          <iconify-icon icon="solar:bag-smile-bold-duotone"></iconify-icon>
                     </span>
                     <span class="nav-text"> Orders </span>
                </a>
                <div class="collapse" id="sidebarOrders">
                     <ul class="nav sub-navbar-nav">

                          <li class="sub-nav-item">
                               <a class="sub-nav-link" href="{{ route('admin.orders.list') }}">List</a>
                          </li>
                          <li class="sub-nav-item">
                               <a class="sub-nav-link" href="{{ route('admin.orders.cart') }}">Cart</a>
                          </li>
                          <li class="sub-nav-item">
                               <a class="sub-nav-link" href="{{ route('admin.orders.cheakout') }}">Check Out</a>
                          </li>
                     </ul>
                </div>
           </li>

              <li class="nav-item">
                   <a class="nav-link menu-arrow" href="#sidebarProducts" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarProducts">
                        <span class="nav-icon">
                             <iconify-icon icon="solar:t-shirt-bold-duotone"></iconify-icon>
                        </span>
                        <span class="nav-text"> Products </span>
                   </a>
                   <div class="collapse" id="sidebarProducts">
                        <ul class="nav sub-navbar-nav">
                            <li class="sub-nav-item">
                                <a class="sub-nav-link" href="{{ route('admin.products.list') }}">Products</a>
                           </li>
                            <li class="sub-nav-item">
                                <a class="sub-nav-link" href="{{ route('admin.products.create') }}">Products Create</a>
                           </li>

                        </ul>
                   </div>
              </li>




              <li class="nav-item">
                   <a class="nav-link menu-arrow" href="#sidebarCategory" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarCategory">
                        <span class="nav-icon">
                            <iconify-icon icon="solar:atom-bold-duotone"></iconify-icon>

                        </span>
                        <span class="nav-text"> Ecommerse </span>
                   </a>
                   <div class="collapse" id="sidebarCategory">
                        <ul class="nav sub-navbar-nav">
                             <li class="sub-nav-item">
                                  <a class="sub-nav-link" href="{{ route('admin.category.list') }}">Categories</a>
                             </li>
                             <li class="sub-nav-item">
                                <a class="sub-nav-link" href="{{ route('admin.attributes.list') }}">Attributes</a>
                           </li>

                             <li class="sub-nav-item">
                                  <a class="sub-nav-link" href="{{ route('admin.faq.list') }}">FAQs</a>
                             </li>
                             <li class="sub-nav-item">
                                  <a class="sub-nav-link" href="{{ route('admin.brand.list') }}">Brands</a>
                             </li>
                             <li class="sub-nav-item">
                                  <a class="sub-nav-link" href="{{ route('admin.category.list') }}">Invoices</a>
                             </li>

                        </ul>
                   </div>
              </li>







              <li class="nav-item">
                   <a class="nav-link menu-arrow" href="#sidebarInvoice" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarInvoice">
                    <span class="nav-icon">
                        <iconify-icon icon="solar:settings-bold-duotone"></iconify-icon>
                   </span>
                        <span class="nav-text"> Settings </span>
                   </a>
                   <div class="collapse" id="sidebarInvoice">
                        <ul class="nav sub-navbar-nav">
                             <li class="sub-nav-item">
                                  <a class="sub-nav-link" href="{{ route('admin.settings.general.list') }}">General</a>
                             </li>
                             <li class="sub-nav-item">
                                  <a class="sub-nav-link" href="{{ route('admin.settings.custom.list') }}">Custom Codes</a>
                             </li>
                             <li class="sub-nav-item">
                                <a class="sub-nav-link" href="{{ route('admin.settings.slider.list') }}">Sliders</a>
                           </li>
                        </ul>
                   </div>
              </li>



              {{-- <li class="menu-title mt-2">Users</li> --}}


         </ul>
    </div>
</div>
