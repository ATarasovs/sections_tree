<?php
/**
 * Created by PhpStorm.
 * User: atara
 * Date: 8/3/2019
 * Time: 19:59
 */
?>

<div class="container">
    <div class="jumbotron">
    <div class="row">
        <div class="col-xs-8 col-xs-offset-2">
            <?php if ($section != "") {
                echo '<h3 align="center">' . $section['title'] . '</h3>';
            } ?>
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">

                <div class="row">
                    <div class="col-sm-12">
                        <span><label for="title">ID</label></span>
                        <?php if ($section != "") { ?>
                            <input class="form-control" placeholder="ID" name="id" type="text" value="<?php echo $section["id"] ?>" readonly/><br/>
                        <?php } else {?>
                            <input class="form-control" placeholder="ID" name="id" type="text" value="" readonly/><br/>
                        <?php } ?>
                        <input class="form-control hidden" placeholder="Parent ID" name="parent_id" type="text" value="<?php echo $_GET["parent_id"] ?>"/>
                        <input class="form-control hidden" placeholder="Node ID" name="node_id" type="text" value="<?php echo $_GET["node_id"] ?>"/>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-12">
                        <span><label for="title">Title</label></span>
                        <?php if ($section != "") { ?>
                            <input class="form-control" placeholder="Title" name="title" type="text" value="<?php echo $section["title"] ?>" required/> <br/>
                        <?php } else {?>
                            <input class="form-control" placeholder="Title" name="title" type="text" value="" required/><br/>
                        <?php } ?>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-12">
                        <span><label for="content">Content</label></span>
                        <textarea name="content" id="summernote"></textarea>
                    </div>
                </div>
                <input type="submit" class="btn btn-primary" value="Save">
            </form>
        </div>
    </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        $('#summernote').summernote({
            height: 200,
            maxHeight: null,
            minHeight: null,
            toolbar: [
                ['style', ['style']],
                ['font', ['bold', 'italic', 'underline', 'clear']],
                ['fontsize', ['fontsize']],
                ['fontname', ['fontname']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['height', ['height']],
                ['table', ['table']],
                ['insert', ['link', 'picture', 'hr']],
                ['view', ['fullscreen', 'codeview']],
                ['help', ['help']],
            ],
        });

        <?php if ($section != "") { ?>
            var content = '<?php echo $section["content"] ?>';
            $('#summernote').summernote('code', content);
        <?php } ?>

    });
</script>

