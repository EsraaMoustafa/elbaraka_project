<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Images</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            List Images
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                                <?php
                                    
                                   foreach ($images as $image)
                                       {
                                            $href= 'deleteImage/'.$image['id'];
                                       ?>
                                         <div style="display: inline-block">
                                            <img src="<?php $src=base_url().'uploads/'.$image['image_name']; echo $src;?>" width="100" height="100"/></br>

                                            <a href="<?php echo $href;?>" class="btn btn-danger">Delete</a>
                                         </div>
                                       
                                <?php }?>
                    
                                
                        </div>
                    </div>
                </div>
            </div>
</div>
