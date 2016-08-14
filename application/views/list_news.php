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
                            News Table
                        </div>
                        <!-- /.panel-heading -->
                       <?php $this->session->flashdata('error_message')?>
                       <div class="panel-body">
                            <div class="dataTable_wrapper">
                                <table class="table table-striped table-bordered table-hover" id="news_table">
                                    <thead>
                                        <tr>
                                            <th>id</th>
                                            <th>Details</th>
                                            <th>Options</th>
                                        </tr>
                                    </thead>
                                    <tbody> 

                <?php
                    foreach ($news as $news_1)
                    {
                        echo '<tr class="gradeA">';
                        echo '<td>';
                        echo '</td>';
                        echo '<td>';
                        echo $news_1['details'];
                        echo '</td>';
                        echo '<td>';
                        $href= 'editNews/'.$news_1['id'];
                        $href1='deleteNews/'.$news_1['id'];
                        ?>
                        <a href="<?php echo $href;?>" class="btn btn-default">Edit</a>
                        
                        <a href="<?php echo $href1;?>" class="btn btn-danger">Delete</a>
                        <?php
                        echo '</td>';
                        echo '</tr>';
                    }
                ?>
            </table>
        </div>
                        </div>

                    </div>
                </div>
            </div>
</div>
