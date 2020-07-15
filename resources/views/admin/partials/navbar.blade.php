<div class="sidebar-sticky">
  <ul class="nav flex-column">
    <li class="nav-item">
      <a class="nav-link @if(request()->url() == route('admin.dashboard')) {{'active'}} @endif" href="{{route('admin.dashboard')}}">
        <span data-feather="home"></span>
        Dashboard <span class="sr-only">(current)</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="/products">
        <span data-feather="file"></span>
        View as Customer
      </a>
    </li>
    </li>
    <li class="nav-item dropdown">
      <a id="productDropdown" class="nav-link @if(request()->url() == route('admin.product.index')) {{'active'}} @endif  dropdown-toggle" href="javascript:;" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <span data-feather="shopping-cart"></span>
        Products
      </a>
      <div class="dropdown-menu" aria-labelledby="productDropdown">
        <a class="dropdown-item" href="{{route('admin.product.create')}}">Add Product</a>
        <a class="dropdown-item" href="{{route('admin.product.index')}}">All Products</a>
        <a class="dropdown-item" href="{{route('admin.product.trash')}}">Trashed Products</a>
      </div>
    </li>
    <li class="nav-item dropdown">
      <a id="categoryDropdown" class="nav-link @if(request()->url() == route('admin.category.index')) {{'active'}} @else {{''}} @endif dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <span data-feather="bar-chart-2"></span>
        Categories
      </a>
      <div class="dropdown-menu" aria-labelledby="categoryDropdown">
           <a class="dropdown-item" href="{{route('admin.category.create')}}">Add Category</a>
        <a class="dropdown-item" href="{{route('admin.category.index')}}">All Categories</a>
        <a class="dropdown-item" href="{{route('admin.category.trash')}}">Trashed Categories</a>
      </div>
      
    </li>
    <li class="nav-item">
      <a class="nav-link  @if(request()->url() == route('admin.profile.index')) {{'active'}} @else {{''}} @endif" href="{{route('admin.profile.index')}}">
        <span data-feather="users"></span>
        Users
      </a>
    </li>
  </ul>
  
</div>