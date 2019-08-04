<?php
/**
* Created by PhpStorm.
* User: atara
* Date: 8/3/2019
* Time: 16:51
*/
?>

<div class="container">
    <div class="jumbotron">
        <div class="row">
            <div class="col-xs-8 col-xs-offset-2">
                <div>
                    <?php if ($sectionTitle != "") {
                        echo '<h3 align="center">' . $sectionTitle . '</h3>';
                    } ?>
                    <a href="./edit.php?parent_id=<?php echo $sectionId ?>&node_id=<?php echo $nodeId ?>" type="button" class="pull-right btn btn-link"><i class="fa fa-plus" aria-hidden="true"></i> Add new section</a>
                </div>
                <br/><br/>
                <div id="postlist">
                    <?php if ($sections ->num_rows == 0) { ?>
                        <div class="alert alert-info alert-dismissible" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <strong>Notice!</strong> There are now any subsections created for this section yet.<br/>
                        </div>
                    <?php } ?>
                    <?php foreach ($sections as $section) { ?>
                        <div class="panel">
                            <div class="panel-heading">
                                <div class="text-center">
                                    <div class="row">
                                        <div class="col-sm-9">
                                            <h3 class="pull-left"><?php echo $section["title"]; ?></h3>
                                        </div>
                                        <div class="col-sm-3">
                                            <h4 class="pull-right">
                                                <small>
                                                    <em>
                                                        <?php echo substr($section["time_created"], 0, 10); ?>
                                                        <?php echo substr($section["time_created"], 11, 8); ?><br>
                                                        <?php foreach ($users as $user) {
                                                            if ($user['id'] == $section['user_id']) {
                                                                echo "Author: " . $user['username'];
                                                            }
                                                        } ?>
                                                    </em>
                                                </small>
                                            </h4>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="panel-body">
                                <?php echo $section["content"];?><br/><br/>
                            </div>
                            <div class="panel-footer">
                                <a href="./index.php?section_id=<?php echo $section["id"] ?>&parent_id=<?php echo $sectionId ?>&node_id=<?php echo $nodeId ?>" type="button" class="btn btn-sm btn-success"><i class="fa fa-eye" aria-hidden="true"></i> View subsections</a>
                                <a href="./edit.php?section_id=<?php echo $section["id"] ?>&parent_id=<?php echo $sectionId ?>&node_id=<?php echo $nodeId ?>" type="button" class="btn btn-sm btn-primary"><i class="fa fa-pencil" aria-hidden="true"></i> Edit section</a>
                                <a href="./delete.php?section_id=<?php echo $section["id"] ?> & node_id=<?php echo $nodeId ?>&node_id=<?php echo $nodeId ?>" type="button" class="btn btn-sm btn-danger" data-toggle="tooltip" data-placement="right" title="All subsections will be removed as well!"><i class="fa fa-times" aria-hidden="true"></i> Delete section</a>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    $( document ).ready(function() {
        $('[data-toggle="tooltip"]').tooltip();
    });
</script>