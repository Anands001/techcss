<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</head>

<div class="container-fluid" style="height: 10px;background-color: #ea80fc; " ></div>


<div class="container-fluid p-1" >
    
    <div class="row">
        <div class="col-md-3 text-dark">
            <h3><img src="books/logo.png" width=70px height=65px  style="padding-bottom: 5px;
	padding-left: 15px;
	padding-right: 0px;"> Book Butterfly</h3>
            
        </div>
        <div class="col-md-6 p-3">
            <form class="form-inline my-2 my-lg-0" action="search.jsp" method="post">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" name="ch">
      <button class="btn btn-primary my-2 my-sm-0" type="submit">Search</button>
    </form>
            
        </div>
        <div class="row mt-2 " ><a href="cart.jsp" class="p-2 cart" style="width=5px; height=5px;color:#5B194E;"><i class="fa-solid fa-cart-plus fa-2x mt-1"></i></a></div>
        
        
         <div class="col-md-3 p-3" style="left:1200px; position:absolute; overflow-x:hidden;">
      
            <a href="settings.jsp" class="btn btn-success">&nbsp;<i class="fa-solid fa-face-grin-beam"></i></a>&nbsp;&nbsp;
            <a data-toggle="modal" data-target="#exampleModalCenter" class="btn btn-danger text-white"><i class="fa-solid fa-right-from-bracket"></i>&nbsp;Logout</a>
        </div>
        
        
        
        <!-- Logout Modal -->

<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <div class="text-center">
        <h4>Do you really want to Logout</h4>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <a href="Logout" type="button" class="btn btn-primary text-white">Logout</a>
      </div>
      </div>
      <div class="modal-footer">
        
      </div>
      
    </div>
  </div>
</div>
<!-- End Of Logout Modal -->
        
    </div>
</div>



<nav class="navbar navbar-expand-lg navbar-dark bg-custom">
  <a class="navbar-brand" href="#"><i class="fa-brands fa-phoenix-framework"></i></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.jsp"><i class="fa-solid fa-house-chimney"></i>&nbsp;Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
          <a class="nav-link" href="recentBooks.jsp"><i class="fa-solid fa-book-open"></i>&nbsp;Recent Books</a></li>
           <li class="nav-item active">
        <a class="nav-link" href="OldBooks.jsp"><i class="fa-solid fa-address-book"></i>&nbsp;Old Books</a>
      </li>
          <li class="nav-item active">
        <a class="nav-link" href="EntertainmentBooks.jsp"><i class="fa-solid fa-book-bookmark"></i>
Entertainment</a>
      </li>
     
      <li class="nav-item active">
        <a class="nav-link" href="EducationalBooks.jsp"><i class="fa-solid fa-book-open-reader"></i>&nbsp;Educational</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         <i class="fa-solid fa-book-bookmark"></i>&nbsp;Books
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="EducationalBooks.jsp"><i class="fa-solid fa-book-journal-whills"></i>&nbsp;Educational</a>
          <a class="dropdown-item" href="EntertainmentBooks.jsp"><i class="fa-solid fa-book-journal-whills"></i>&nbsp;Entertainment</a>
          <a class="dropdown-item" href="OldBooks.jsp"><i class="fa-solid fa-book-journal-whills"></i>&nbsp;Old Book</a>
          <div class="dropdown-divider"></div>
          
        </div>
      </li>
      
    </ul>
    <form class="form-inline my-2 my-lg-0">
        <a href="MyOrders.jsp" class="btn btn-light my-2 my-sm-0" type="submit"><i class="fa-solid fa-basket-shopping"></i>&nbsp;Orders</a>&nbsp;&nbsp;&nbsp;
      <a href="HelpLine.jsp" class="btn btn-light my-2 my-sm-0" type="submit"><i class="fa-solid fa-address-book"></i>&nbsp;Contact Us</a>
    </form>
  </div>
</nav>
