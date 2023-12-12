    <?php 
    error_reporting(0);
    session_start();
    include("config/dbconnect.php");    
    $page = $_GET["page"];
    $search = $_GET["search"];
    if(empty($page)){
      $page =0;

    }


    $searchcond = "";
    if(!empty($search)){
      $searchcond = "AND `name` LIKE '%$search%'";
    }
    $query = mysqli_query($conn, "SELECT * FROM product WHERE `name` != '' $searchcond order by id desc limit 12 OFFSET $page");
    if(mysqli_num_rows($query) > 0){

          $ctr = 0;
				  while($result = mysqli_fetch_assoc($query)){	
            ?>
            <div class="col-lg-3">
              <div class="box">
                <div class="btn_container">
                <a href="#" class="addtocart" data-productid="<?=$result['id'];?>">
                    Add To Cart
                  </a>
                </div>
                <div class="img-box">
                  <img src="<?=$result['img_url'];?>" alt="" style='width: 200px; height: 250px;'>
                </div>
                <div class="detail-box">
                 
                  <div class="text w-100" style="width: 100% !important;">
                    <h6 class="text w-80" style="width: 80% !important;" >
                      <?=$result['name']?>
                    </h6>
                    <h6 class="price w-20" style="width: 20% !important;">
                      <span>
                      <i class="fa fa-gbp" aria-hidden="true"></i>
                      </span>
                      <?=$result['rate'];?>
                    </h6><br>
                   
                  </div>
                </div>

                  <div class="detail-box">

                    <div class="text w-100" style="width: 100% !important;">
                      <p class="text w-80" style="width: 100% !important; font-size: 12px !important;" >
                          <?=$result['manufacturer']?>
                      </p>

                    </div>
                  </div>
                </div>
              </div>
              </div>
            <?php
            $ctr++;
              }

        } else {
            ?>
            <div class="col-lg-12"><h1 class="text-center">No Records Found</h1></div>

          <?php
          }
        ?>