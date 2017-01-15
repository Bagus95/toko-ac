<div class="container">
        <div class="header_top">
           <div class="header_top_left">
            <div class="box_11"><a href="checkout.html">
          <div class="clearfix"> </div></h4>
          </a></div>
         </div>
           <div class="header_top_right">
             <ul class="header_user_info">
              <?php if($this->session->userdata('username')) : ?>
                <li>Login sebagai : <?=$this->session->userdata('username')?></li>
              </ul>
              <!-- start search-->
              <ul>
                <li><?php echo anchor('logout', 'Logout');?></li>
              </ul>
              <?php endif; ?>
               <!----search-scripts---->
               <script src="<?php echo base_url();?>/assets/js/classie1.js"></script>
               <script src="<?php echo base_url();?>/assets/js/uisearch.js"></script>
                 <script>
                 new UISearch( document.getElementById( 'sb-search' ) );
                 </script>
                <!----//search-scripts---->
            </div>
         <div class="clearfix"> </div>
    </div>
    <div class="header_bottom">
     <div class="logo">
      <CENTER>
        <h1><a href="<?php echo base_url();?>index.php"><span class="m_1">T</span>oko AC JEPARA</a></h1>
      </CENTER>
     </div>

          <div class="clearfix"> </div>
          </div>
      </div>
   </div>
