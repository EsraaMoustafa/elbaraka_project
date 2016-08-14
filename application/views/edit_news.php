<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">News</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           Edit News
                        </div>
                        <!-- /.panel-heading -->
                       <?php
        echo '<font color="red">'.validation_errors().'</font>';
        foreach($news as $news_1)
         {
            echo form_open("main/editNews/".$news_1['id']);
                       
            echo form_label("Details: ","details");
                $data=array("name"=>"details",
                            "id"=>"details",
                            "value"=>$news_1['details'],
                            
                            );
            echo form_textarea($data);
            echo '<br/>';
            
            echo form_submit("submit","submit");
            echo form_close();
         }
            
    ?>
                            </div>
                        </div>
                    </div>
                </div>
           
