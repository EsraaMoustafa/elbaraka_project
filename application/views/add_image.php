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
                            Add Image
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                    <?php
                        echo '<font color="red">'.validation_errors().'</font>';
                        echo '<font color="red">'.$upload.'</font>';
                        echo form_open_multipart("main/addImage");
                            echo form_label("Images: ","image");
                            
                            echo form_upload('image_name','','multiple');
                             echo '<br/>';
                            echo form_submit("submit","submit");
                        echo form_close();
                    ?>
                        </div>
                    </div>
                </div>
            </div>
</div>




