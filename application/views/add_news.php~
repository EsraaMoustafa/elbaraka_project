<div id="page-wrapper">        
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">  
                <div class="panel-heading">
                    Add News
                </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                        <table class="table">
                            <?php
                                echo '<font color="red">'.validation_errors().'</font>';
				echo form_open('main/addNews');?>
                               
                                <tr>
                                    <td>
                                        <label >Details:</label>
                                    </td>
                                    <td>
                                        <div class="input-group margin-bottom-sm">
                                        <?php
                                            echo '<br/>';
                                            $data=array(
                                                    "name"=>"details",
                                                    "id"=>"details",
                                                   "required"=>"required",
                                                );
                                            echo form_textarea($data);
                                        ?>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                       <?php $data=array(
                                                "type"=>"submit",
                                                "name"=>"commit",
                                                "class"=>"btn btn-success",
                                                "value"=>"Save",
                                                "size"=>"35",
                                                );
                                           echo form_submit($data);
                                           echo form_close();?>

                                    </td>
                                </tr>
                        </table>
                        
                        </div>
                       </div>
        </div>
        <!-- /#page-wrapper -->

    </div>
</div>
