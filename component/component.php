<?php
    
    function component($productname,$productimg,$productprice,$productid){
      $element = "
          

   <div class='col-md-3 col-sm-6 my-3 my-md-0'>
                  <form action ='index.php' method ='post'>
                      
                      <div class ='card shadow'> 
                      
                          <div>
                              <img  src ='$productimg' alt='image1' class = ' '>
                          </div>
                          <div class ='card-body'>
                              <h5 class ='card-title'> $productname
                      </h5>
                              
                              <h5> 
                                  <small><s style = 'text-decoration: line-through;'>₹800</s></small>
                                  <span class ='price'> ₹$productprice </span>
                              </h5>
                              <button type ='submit' class = 'btn btn-warning' name ='add'> Add To Cart <i class = 'fa fa-shopping-cart'></i></button>
                              <input type = 'hidden' name = 'product_id'value = '$productid'>
                              
                          </div>
                      </div>
                          
                      
                      
                  </form>

</div>


";
      echo  $element ;
        
  }
    
    
    function cartElement($productimg,$productname,$productprice,$productid) {
        
        $element = "<form action ='cart.php?action=remove&id=$productid' method = 'post' class ='cart-items'>
                          
                          <div class ='border rounded product'> 
                          
                              <div class ='row bg-white py-5'> 
                                  <div class ='col-md-3'> 
                                      <img src ='$productimg'>
                                  </div>
                               <div class ='col-md-6'> 
                                   <h5 class = 'pt-2'> $productname</h5>
                                   <small class ='text-secondary'> Seller: FITNESS CLUB </small>
                                   <h5 class = 'pt-2 product-price'> $productprice </h5>
                                   <button type =submit' class ='btn btn-warning'> Save for Later </button> 
                               <button type ='submit' class ='btn btn-danger mx-2' name = 'remove'> Remove </button>   
                               </div>
                                  <div class ='col-md-3 py-5'> 
                                      <div>
                                            
                                          <button type='button' class='btn dec-btn bg-light border rounded-circle'><i class='fa fa-minus'></i></button>
                                    <input type='text' class='form-control product-count w-25 d-inline'>
                                    <button type='button' class='btn inc-btn bg-light border rounded-circle'><i class='fa fa-plus'></i></button>
                                          
                                      </div>
                                     
                                      
                                  </div>
                              </div>
                          </div>
                          
                      </form>
                      ";
        echo $element;
        
        
    }
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    