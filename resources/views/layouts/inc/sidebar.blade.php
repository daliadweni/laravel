<div class="sidebar" data-color="azure"  data-image="C:\Users\Ameni Aydi\Desktop\Stage\blog\public\admin\img\logo.png">
    <!--
      Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

      Tip 2: you can also add an image using data-image tag
  -->
    <div class="logo"><a href="#" class="simple-text logo-normal">
Sotuchauf      </a></div>
    <div class="sidebar-wrapper">
      <ul class="nav">
        <li class="nav-item {{Request::is('dashboard')? 'active':''}}">
          <a class="nav-link" href="#">
            <i class="material-icons">dashboard</i>
            <p>Dashboard</p>
          </a>
        </li>
        <li class="nav-item {{Request::is('categories')? 'active':''}}">
          <a class="nav-link" href="{{ url('categories')}}">
            <p>Categories</p>
          </a>
        </li>
        <li class="nav-item {{Request::is('add-category')? 'active':''}}  ">
          <a class="nav-link" href="{{ url('add-category')}}">
            <p>Add Category</p>
          </a>
        </li>
        <li class="nav-item {{Request::is('products')? 'active':''}}">
          <a class="nav-link" href="{{ url('products')}}">

            <p>Products</p>
          </a>
        </li>
        <li class="nav-item {{Request::is('add-products')? 'active':''}}  ">
          <a class="nav-link" href="{{ url('add-products')}}">
            <p>Add Products</p>
          </a>
        </li>
        <li class="nav-item ">
          <a class="nav-link" href="./tables.html">
            <i class="material-icons">content_paste</i>
            <p>Table List</p>
          </a>
        </li>
       
        
      </ul>
    </div>
  </div>